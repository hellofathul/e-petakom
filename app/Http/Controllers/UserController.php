<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Validator;
use Exception;
use App\Models\users as users;
use App\Models\student as students;

class UserController extends Controller
{

    function login(Request $req)
    {

        // Validator

        $messages = [
            'required' => 'diperlukan',
        ];

        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];

        $validator = $req->validate($rules, $messages);

        $data = $req->input();

        // Select eloquent
        $check = users::where('username', $req->username)->exists();

        if ($check) {
            $users = users::where('username', $req->username)
                ->get()
                ->first();

            $role = $users->role;
            $username = $users->username;
            $password = $users->password;

            if ($password == $data['password']) {
                // Save into session
                Session::put('role', $role);
                Session::put('logged_user', $username);   //put the data and in session

                // if ($user_type == 'Student') {
                //     return redirect('studentprofile');
                // } elseif ($user_type == 'Supervisor') {
                //     return redirect('supervisorprofile');
                // } elseif ($user_type == 'Technician') {
                //     return redirect('technicianprofile');
                // } elseif ($user_type = 'Coordinator') {
                //     return redirect('coordinatorprofile');
                // }
                return redirect('home');

            } else {

                // custom back validator message
                $custom_msg = [
                    'password' => 'Wrong password entered',
                ];

                // return back with custom error message
                return redirect()->back()->withInput()->withErrors($custom_msg);
            }
        } else {

            $custom_msg = [
                'studentID' => 'Unregistered user ID',
            ];

            return redirect()->back()->withInput()->withErrors($custom_msg);
        }

        // return $check;
    }



    function register(Request $req)
    {

        // validation
        $messages = [
            'required' => 'diperlukan',
            'between' => 'harus diantara :min - :max aksara',
            'min' => 'minimum :min aksara',
            'confirmed' => 'kata laluan tidak sepadan'
        ];

        $rules = [

            'password' => 'required | between:5,10 | confirmed',
            'password_confirmation' => 'required',
            'username' => 'required | min:5',
            'phone' => 'required',
            'email' => 'required | email'
        ];

        $req->validate($rules, $messages);

        // return all input data
        $data = $req->input();

        // add additional field data
        $data['purpose'] = 'Pendaftaran';

        $username = $req->username;
        $users = new users;
        $currentdt = date('d-m-Y H:i:s');

        // Insert
        $users->role = $req->role;
        $users->password = $req->password;
        $users->username = $username;
        $users->name = $req->name;
        $users->phone = $req->phone;
        $users->email = $req->email;
        $users->created_at = $currentdt;
        $users->updated_at = $currentdt;

        $result = $users->save();

        if ($req->role == 'Student') {
            $students = new students;
            $students->username = $username;
            $students->save();
        } elseif ($req->role == 'Supervisor') {
            $supervisors = new supervisors;
            $supervisors->username = $userID;
            $supervisors->save();
        } elseif ($req->role == 'Technician') {
            $technicians = new technicians;
            $technicians->userID = $userID;
            $technicians->save();
        } elseif ($req->role == 'Coordinator') {
            $coordinators = new coordinators;
            $coordinators->userID = $userID;
            $coordinators->save();
        }
        $details = [
            'type' => 'Registration',
            'status' => 'Success',
        ];

        $data['details'] = $details;

        return redirect('/');

        // try {

        // } catch (Exception $e) {

        //     $errCode = $e->errorInfo[1];

        //     if ($errCode == 1062) {
        //         $errStatus = 'studentID sudah wujud di dalam sistem';
        //     } else {
        //         $errStatus = 'Terdapat error';
        //     }

        //     $details = [
        //         'type' => 'Registration',
        //         'status' => 'Failed',
        //         'error_code' => $errCode,
        //         'description' => $errStatus
        //     ];

        //     $data['details'] = $details;

        //     // return $data;
        //     // return view('register');
        //     echo $e;
        // }
    }

    function resetpassword(Request $req)
    {
        // validation
        $messages = [
            'required' => 'required',
            'between' => 'must :min - :max letter',
            'min' => 'minimum :min letter',
            'confirmed' => 'Password did not match'
        ];

        $rules = [
            'username' => 'required',
            'password' => 'required | between:8,10 | confirmed',
            'password_confirmation' => 'required',
        ];

        $req->validate($rules, $messages);

        // return all input data
        $data = $req->input();

        // add additional field data
        $data['purpose'] = 'Reset Password';

        // Select eloquent
        $check = users::where('username', $req->username)->exists();

        if ($check) {

            $users = users::where('username', $req->username)
                ->get()
                ->first();

            $users->password = ($req->password);
            $users->save();

            $custom_msg = [
                'success' => 'Password successfully changed',
            ];

            return redirect()->back()->withInput()->withErrors($custom_msg);
        } else {
            $custom_msg = [
                'staff_id' => 'User ID did not registered',
            ];

            return redirect()->back()->withInput()->withErrors($custom_msg);
        }
    }


    function logout()
    {
        Session::flush();
        return redirect('/');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
