<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Models\Authentication;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCommitteeRequest;
use App\Http\Requests\UpdateCommitteeRequest;
use Illuminate\Support\Facades\DB;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username = session()->get('logged_user');
        $authentication = DB::table('authentications')
            ->Join('lecturers', 'authentications.username', '=', 'lecturers.username')
            ->where('authentication.username', '=', $username)
            ->get();
        return View('ManageProfile.profile-lecturer')->with('lecturers', $authentication);
        //var_dump($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $lecturer_first_name = $request->input('lecturer_first_name');
        $lecturer_last_name = $request->input('lecturer_last_name');
        $lecturer_email = $request->input('lecturer_email');
        $lecturer_mobile_no = $request->input('lecturer_mobile_no'); 
        $lecturer_office_level = $request->input('cordinator_office_level');
        $lecturer_office_wing = $request->input('lecturer_office_no');
        $lecturer_picture = $request->input('lecturer_picture');
        
        //table authentications
        $authentications = Authentication::where('username', '=', session()->get('logged_user'))->get()->first();
        $authentications->username = $username;
        $authentications->password = $password;
        $authentications->save();

        //table lecturer
        $lecturer = Lecturer::where('username', '=', session()->get('logged_user'))->get()->first();
        $lecturer->username = $username;
        $lecturer->lecturer_first_name = $lecturer_first_name;
        $lecturer->lecturer_last_name = $lecturer_last_name;
        $lecturer->lecturer_email = $lecturer_email;
        $lecturer->lecturer_mobile_no = $lecturer_mobile_no;
        $lecturer->lecturer_picture = $lecturer_picture;
        $lecturer->lecturer_office_level = $lecturer_office_level;
        $lecturer->lecturer_office_wing = $lecturer_office_wing;
        $lecturer->save();
        return redirect("profile-lecturer");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommitteeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    // public function edit()
    // {
    //     $username = session()->get('logged_user');
    //     $authentications = DB::table('authentications')
    //         ->Join('lecturers', 'authentications.username', '=', 'lecturers.username')
    //         ->where('users.username', '=', $username)
    //         ->get();
    //     return View('ManageProfile.edit-profile-lecturer')->with('lecturers', $authentications);
    //     // var_dump($lecturer);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommitteeRequest  $request
     * @param  \App\Models\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecturer $lecturer)
    {
        //
    }
}
