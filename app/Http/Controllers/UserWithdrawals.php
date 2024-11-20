<?php

namespace App\Http\Controllers;

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

            return view('user.withdrawals', ['machines' => $allMachines]);
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

            if ($request->btnWithdraw) {
                $response = $this->withdrawCoins($request->withdrawIP, "/withdraw", $request->denom, $request->withdrawAmount);

                if (isset($response['status']) && $response['status'] === 'success') {
                    $newWithdraw = new Withdrawals();
                    $newWithdraw->userID = $user['userID'];
                    $newWithdraw->ip = $request->withdrawIP;
                    $newWithdraw->denomination = $request->denom;
                    $remaining = $request->withdrawAmount - $request->avail;
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
