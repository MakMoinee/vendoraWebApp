<?php

namespace App\Http\Controllers;

use App\Models\CoinCountLogs;
use App\Models\Withdrawals;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserWithdrawals extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);

            if ($user['userType'] != "user") {
                return redirect("/");
            }

            $allMachines = DB::table('machines')->where('userID', '=', $user['userID'])->get();

            $allWithdraws = DB::table('withdrawals')->where('userID', '=', $user['userID'])->orderBy('withdrawID', 'desc')
                ->paginate(10);

            return view('user.withdrawals', ['machines' => $allMachines, 'allWithdraws' => $allWithdraws]);
        }
        return redirect("/");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);

            if ($user['userType'] != "user") {
                return redirect("/");
            }

            if ($request->all) {
                $isSuccess1 = false;
                $isSuccess5 = false;
                $isSuccess10 = false;
                $denom1 = (int) $request->denom1;
                $denom5 = (int) $request->denom5;
                $denom10 = (int) $request->denom10;
                if ($denom1 > 0) {
                    $response = $this->withdrawCoins($request->withdrawIP, "/withdraw", 1, $denom1);

                    if (isset($response['status']) && $response['status'] === 'success') {
                        $newWithdraw = new Withdrawals();
                        $newWithdraw->userID = $user['userID'];
                        $newWithdraw->ip = $request->withdrawIP;
                        $newWithdraw->denomination = 1;
                        $remaining = $request->avail - $denom1;
                        $newWithdraw->total = $denom1;
                        $newWithdraw->purpose = $request->purpose;
                        $newWithdraw->remaining = $remaining;
                        $isSave =  $newWithdraw->save();
                        $isSuccess1 = true;
                    } else {
                        $isSuccess1 = false;
                    }
                }

                if ($denom5 > 0) {
                    $response = $this->withdrawCoins($request->withdrawIP, "/withdraw", 5, $denom5);

                    if (isset($response['status']) && $response['status'] === 'success') {
                        $newWithdraw = new Withdrawals();
                        $newWithdraw->userID = $user['userID'];
                        $newWithdraw->ip = $request->withdrawIP;
                        $newWithdraw->denomination = 5;
                        $remaining = $request->avail - $denom5;
                        $newWithdraw->total = $denom5;
                        $newWithdraw->purpose = $request->purpose;
                        $newWithdraw->remaining = $remaining;
                        $isSave =  $newWithdraw->save();
                        $isSuccess5 = true;
                    } else {
                        $isSuccess5 = false;
                    }
                }

                if ($denom10 > 0) {
                    $response = $this->withdrawCoins($request->withdrawIP, "/withdraw", 10, $denom10);
                    if (isset($response['status']) && $response['status'] === 'success') {
                        $newWithdraw = new Withdrawals();
                        $newWithdraw->userID = $user['userID'];
                        $newWithdraw->ip = $request->withdrawIP;
                        $newWithdraw->denomination = 10;
                        $remaining = $request->avail - $denom10;
                        $newWithdraw->total = $denom10;
                        $newWithdraw->purpose = $request->purpose;
                        $newWithdraw->remaining = $remaining;
                        $isSave =  $newWithdraw->save();
                        $isSuccess10 = true;
                    } else {
                        $isSuccess10 = false;
                    }
                }

                if ($isSuccess1 || $isSuccess5 || $isSuccess10) {
                    session()->put("succcessWithdraw", true);
                } else {

                    session()->put("errorWithdraw", true);
                }



                return redirect("/withdraw");
            } else if ($request->btnWithdraw) {
                $response = $this->withdrawCoins($request->withdrawIP, "/withdraw", $request->denom, $request->withdrawAmount);

                if (isset($response['status']) && $response['status'] === 'success') {
                    $newWithdraw = new Withdrawals();
                    $newWithdraw->userID = $user['userID'];
                    $newWithdraw->ip = $request->withdrawIP;
                    $newWithdraw->denomination = $request->denom;
                    $remaining = $request->avail - $request->withdrawAmount;
                    $newWithdraw->total = $request->withdrawAmount;
                    $newWithdraw->purpose = $request->purpose;
                    $newWithdraw->remaining = $remaining;
                    $isSave =  $newWithdraw->save();
                    if ($isSave) {
                        session()->put("succcessWithdraw", true);
                    } else {
                        session()->put("errorWithdraw", true);
                    }
                } else {
                    session()->put("errorWithdraw", true);
                }
            } else if ($request->btnStoreLogs) {
                $newLog = new CoinCountLogs();
                $totalPesoCoin = $request->totalPesoCoin;
                $totalFiveCoin = $request->totalFiveCoin;
                $totalTenCoin = $request->totalTenCoin;
                $newLog->userID = $user['userID'];
                $newLog->totalAmount = $request->totalAmount;
                $newLog->totalPesoCoin = $totalPesoCoin;
                $newLog->totalTenCoin = $totalFiveCoin;
                $newLog->totalFiveCoin = $totalTenCoin;
                $newLog->save();

                return response()->json(["success" => true], 200);
            }
            return redirect("/withdraw");
        }
        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    private function getCoinCount(string $ip, string $route): ?int
    {
        $client = new \GuzzleHttp\Client();

        try {
            // Construct the full URL
            $url = 'http://' . $ip . $route;

            // Make the GET request
            $response = $client->get($url, ['timeout' => 5]);

            // Decode the JSON response
            $data = json_decode($response->getBody()->getContents(), true);

            // Check if 'Coin Count' exists and return it
            return isset($data['Coin Count']) ? (int) $data['Coin Count'] : 0;
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Handle exceptions (e.g., network issues)
            return 0;
        }
    }

    private function withdrawCoins(string $ip, string $route, int $denom, int $amount): ?array
    {
        $client = new \GuzzleHttp\Client();

        try {
            // Construct the full URL
            $url = 'http://' . $ip . $route;

            // Make the GET request with query parameters
            $response = $client->get($url, [
                'timeout' => 5,
                'query' => [
                    'denom' => $denom,
                    'amount' => $amount,
                ],
            ]);

            // Decode the JSON response
            $data = json_decode($response->getBody()->getContents(), true);

            // Return the full response data for further handling if needed
            return $data;
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Handle exceptions (e.g., network issues)
            return [
                'status' => 'error',
                'message' => 'Unable to connect to the withdraw route.',
            ];
        }
    }
}
