<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);

            if ($user['userType'] != "user") {
                return redirect("/");
            }
            $reportType = $request->query('reportType');
            $prefix = "";
            if ($reportType == 'monthly') {
                $prefix = "Monthly";
                $labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
                $data = [65, 59, 80, 81, 56, 55, 40];
            } else {
                $prefix = "Weekly";
                $labels = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                $data = [65, 59, 80, 81, 56, 55, 40];
            }



            return view('user.reports', ['labels' => $labels, 'data' => $data, 'prefix' => $prefix]);
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
