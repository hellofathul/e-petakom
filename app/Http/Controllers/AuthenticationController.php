<?php

namespace App\Http\Controllers;

use App\Models\Authentication as Authentication;
use Illuminate\Http\Request;
use Session;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        // Validator

        $messages = [
            'username.required' => 'Username is required',
            'password.required' => 'Password is required',
        ];

        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        $validated_data = $request->validate($rules, $messages);

        $data = $request->input();

        //SELECT ELOQUENT
        $check = Authentication::where('username', $request->username)->exists();

        if ($check) {
            $Authentication = Authentication::where('username', $request->username)
                ->get()
                ->first();

            $role = $Authentication->role;
            $username = $Authentication->username;
            $password = $Authentication->password;

            if ($password == $data['password']) {
                // Save into session
                Session::put('role', $role);
                Session::put('logged_user', $username); //put the data and in session

                // if ($role == 'Dean') {
                //     return redirect('dean-profile');
                // } elseif ($role == 'Students') {
                //     return redirect('students-profile');
                // } elseif ($role == 'Lecturer') {
                //     return redirect('lecturer-profile');
                // } elseif ($role == 'Committee') {
                //     return redirect('committee-profile');
                // } elseif ($role == 'Coordinator') {
                //     return redirect('coordinator-profile');
                // } 

            } else {
                // custom back validator message
                $custom_msg = [
                    'password' => 'Wrong password entered',
                ];

                // return back with custom error message
                return redirect()->back()->withInput()->withErrors($custom_msg);
            }
        } else {
            // custom back validator message
            $custom_msg = [
                'username' => 'Username does not exist',
            ];

            // return back with custom error message
            return redirect()->back()->withInput()->withErrors($custom_msg);
        }

        // return $check
    }

    public function register(Request $request)  {
        // Validator

        $messages = [
            'username.required' => 'Username is required',
            'password.required' => 'Password is required',
            'role.required' => 'Role is required',
        ];

        $rules = [
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required | email'
        ];

        $validated_data = $request->validate($rules, $messages);

        $data = $request->input();

        //SELECT ELOQUENT
        $check = Authentication::where('username', $req->username)->exists();

        if ($check) {
            // custom back validator message
            $custom_msg = [
                'username' => 'Username already exist',
            ];

            // return back with custom error message
            return redirect()->back()->withInput()->withErrors($custom_msg);
        } else {
            $Authentication = new Authentication;
            $Authentication->username = $data['username'];
            $Authentication->password = $data['password'];
            $Authentication->role = $data['role'];
            $Authentication->save();

            return redirect('login');
        }
    }
}
