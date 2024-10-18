<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put('users', $user);


            if ($user['userType'] == "user") {
                return redirect("/user_home");
            }
        }
        $allUsers = count(json_decode(DB::table('users')->where('userType', '=', 'user')->get(), true));
        $allMachines = count(json_decode(DB::table('machines')->get(), true));

        return view('welcome', ['allUsers' => $allUsers, 'allMachines' => $allMachines]);
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
        if ($request->btnCreateAccount) {

            if ($request->password != $request->confirmPass) {
                session()->put("passwordNotMatch", true);
                return redirect("/");
            }

            $queryResult = json_decode(DB::table('users')->where('username', '=', $request->username)->get(), true);
            if (count($queryResult) > 0) {
                session()->put("errorExistUsername", true);
            } else {
                $newUser = new Users();
                $newUser->firstName = $request->firstName;
                $newUser->middleName = $request->middleName;
                $newUser->lastName = $request->lastName;
                $newUser->address = $request->address;
                $newUser->birthDate = $request->birthDate;
                $newUser->phoneNumber = $request->phoneNumber;
                $newUser->username = $request->username;
                $newUser->userType = "user";
                $newUser->password = Hash::make($request->username);
                $isSave = $newUser->save();
                if ($isSave) {
                    session()->put("successCreateUser", true);
                } else {
                    session()->put("errorAddUser", true);
                }
            }
        } else {
            if ($request->btnLogin) {
                $queryResult = json_decode(DB::table('users')->where('username', '=', $request->username)->get(), true);
                $newUser = array();
                foreach ($queryResult as $q) {
                    if (password_verify($request->password, $q['password'])) {
                        $newUser = $q;
                        break;
                    }
                }

                if (count($newUser) > 0) {
                    session()->put('users', $newUser);
                    session()->put("successLogin", true);
                    if ($newUser['userType'] == 'user') {
                        return redirect("/user_home");
                    }
                } else {
                    session()->put("errorLoginUser", true);
                }
            }
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

    public function logout()
    {
        session()->flush();
        return redirect("/");
    }
}
