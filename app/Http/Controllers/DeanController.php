<?php

namespace App\Http\Controllers;

use App\Models\Dean;
use App\Models\Authentication;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCommitteeRequest;
use App\Http\Requests\UpdateCommitteeRequest;
use Illuminate\Support\Facades\DB;

class DeanController extends Controller
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
            ->Join('deans', 'authentications.username', '=', 'deans.username')
            ->where('authentication.username', '=', $username)
            ->get();
        return View('ManageProfile.profile-lecturer')->with('deans', $authentication);
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
        $dean_first_name = $request->input('dean_first_name');
        $dean_last_name = $request->input('dean_last_name');
        $dean_email = $request->input('dean_email');
        $dean_mobile_no = $request->input('dean_mobile_no'); 
        $dean_office_level = $request->input('cordinator_office_level');
        $dean_office_wing = $request->input('dean_office_no');
        $dean_picture = $request->input('dean_picture');
        
        //table authentications
        $authentications = Authentication::where('username', '=', session()->get('logged_user'))->get()->first();
        $authentications->username = $username;
        $authentications->password = $password;
        $authentications->save();

        //table dean
        $dean = Dean::where('username', '=', session()->get('logged_user'))->get()->first();
        $dean->username = $username;
        $dean->dean_first_name = $dean_first_name;
        $dean->dean_last_name = $dean_last_name;
        $dean->dean_email = $dean_email;
        $dean->dean_mobile_no = $dean_mobile_no;
        $dean->dean_picture = $dean_picture;
        $dean->dean_office_level = $dean_office_level;
        $dean->dean_office_wing = $dean_office_wing;
        $dean->save();
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
    //         ->Join('deans', 'authentications.username', '=', 'deans.username')
    //         ->where('users.username', '=', $username)
    //         ->get();
    //     return View('ManageProfile.edit-profile-dean')->with('deans', $authentications);
    //     // var_dump($dean);
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
    public function destroy(Dean $dean)
    {
        //
    }
}
