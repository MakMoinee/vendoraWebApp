<?php

namespace App\Http\Controllers;

use App\Models\Machines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserMachineController extends Controller
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

            $data = DB::table('machines')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            return view('user.machines', ['machines' => $data]);
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

            if ($request->btnAddMachine) {
                $queryResult = json_decode(DB::table('machines')->where('userID', '=', $user['userID'])->where('description', '=', $request->description)->get(), true);
                if (count($queryResult) > 0) {
                    session()->put('existDescription', true);
                } else {
                    $newMachine = new Machines();
                    $newMachine->userID = $user['userID'];
                    $newMachine->description = $request->description;
                    $newMachine->ip = $request->ip;
                    $newMachine->status = 'Active';
                    $isSave = $newMachine->save();
                    if ($isSave) {
                        session()->put('successAddMachine', true);
                    } else {
                        session()->put('errorAddMachine', true);
                    }
                }
            }
            return redirect("/user_machine");
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
    public function destroy(string $id, Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);

            if ($user['userType'] != "user") {
                return redirect("/");
            }

            if ($request->btnDeleteMachine) {
                $isDeleted = DB::table('machines')->where('machineID', '=', $id)->delete();
                if ($isDeleted > 0) {
                    session()->put('successDeleteMachine', true);
                } else {
                    session()->put('errorDeleteMachine', true);
                }
            }
            return redirect("/user_machine");
        }
        return redirect("/");
    }
}
