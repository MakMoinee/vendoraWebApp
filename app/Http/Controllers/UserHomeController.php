<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserHomeController extends Controller
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
            $query = json_decode(DB::table('withdrawals')
                ->where('userID', '=', $user['userID'])
                ->get(), true);

            $totalSavings = 0;
            $totalExp = 0;
            foreach ($query as $q) {
                if ($q['purpose'] == 'savings') {
                    $totalSavings += $q['total'];
                } else {
                    $totalExp += $q['total'];
                }
            }

            return view('user.home', [
                'totalSavings' => $totalSavings,
                'totalExp' => $totalExp
            ]);
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
        //
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
}
