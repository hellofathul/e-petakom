<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Dean;
use Illuminate\Http\Request;
use App\Models\Authentication as Authentication;

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

        $username = $request-> username;
        $Authentication = new Authentication;
        $currentdt = date('d-m-Y H:i:s');

        //Insert
        $Authentication->username = $request->username;
        $Authentication->password = $request->password;
        $Authentication->role = $request->role;
        // $Authentication->name = $request->name;
        // $Authentication->email = $request->email;
        // $Authentication->phone = $request->phone;
        // $Authentication->created_at = $currentdt;
        // $Authentication->updated_at = $currentdt;

        $result = $Authentication->save();
        $role = $Authentication->role;

        //SELECT ELOQUENT
        $check = Authentication::where('username', $request->username)->exists();

        if ($check) {
            // custom back validator message
            $custom_msg = [
                'username' => 'Username already exist',
            ];

            // return back with custom error message
            return redirect()->back()->withInput()->withErrors($custom_msg);

        } elseif($request->role == 'Dean') {
            $dean = new Dean;
            $dean->username = $username;
            $dean->save();
            return redirect('login');

        } elseif($request->role == 'Student') {
            $student = new Student;
            $student->username = $username;
            // DECLARE VARIABLE FROM THE INPUT REQUEST
            $student_first_name = $request->name;
            $student_email = $request->email;
            $student_mobile_no = $request->phone;
            // SAVE THE VARIABLE INTO THE DATABASE
            $student->student_first_name = $student_first_name;
            $student->email = $student_email;
            $student->phone = $student_mobile_no;
            $student->save();
            return redirect('login');

        } elseif($request->role == 'Lecturer') {
            $dean = new Dean;
            $dean->username = $username;
            $dean->save();
            return redirect('login');

        } elseif($request->role == 'Coordinator') {
            $dean = new Dean;
            $dean->username = $username;
            $dean->save();
            return redirect('login');
            
        } elseif($request->role == 'Committee') {
            $dean = new Dean;
            $dean->username = $username;
            $dean->save();
            return redirect('login');
        } 
    }
}
