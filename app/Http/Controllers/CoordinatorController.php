<?php

namespace App\Http\Controllers;

use App\Models\Coordinator;
use App\Models\Authentication;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCommitteeRequest;
use App\Http\Requests\UpdateCommitteeRequest;
use Illuminate\Support\Facades\DB;

class CoordinatorController extends Controller
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
            ->Join('coordinators', 'authentications.username', '=', 'coordinators.username')
            ->where('authentication.username', '=', $username)
            ->get();
        return View('ManageProfile.profile-lecturer')->with('coordinators', $authentication);
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
        $coordinator_first_name = $request->input('coordinator_first_name');
        $coordinator_last_name = $request->input('coordinator_last_name');
        $coordinator_email = $request->input('coordinator_email');
        $coordinator_mobile_no = $request->input('coordinator_mobile_no'); 
        $coordinator_office_level = $request->input('cordinator_office_level');
        $coordinator_office_wing = $request->input('coordinator_office_no');
        $coordinator_picture = $request->input('coordinator_picture');
        
        //table authentications
        $authentications = Authentication::where('username', '=', session()->get('logged_user'))->get()->first();
        $authentications->username = $username;
        $authentications->password = $password;
        $authentications->save();

        //table coordinator
        $coordinator = Coordinator::where('username', '=', session()->get('logged_user'))->get()->first();
        $coordinator->username = $username;
        $coordinator->coordinator_first_name = $coordinator_first_name;
        $coordinator->coordinator_last_name = $coordinator_last_name;
        $coordinator->coordinator_email = $coordinator_email;
        $coordinator->coordinator_mobile_no = $coordinator_mobile_no;
        $coordinator->coordinator_picture = $coordinator_picture;
        $coordinator->coordinator_office_level = $coordinator_office_level;
        $coordinator->coordinator_office_wing = $coordinator_office_wing;
        $coordinator->save();
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
    //         ->Join('coordinators', 'authentications.username', '=', 'coordinators.username')
    //         ->where('users.username', '=', $username)
    //         ->get();
    //     return View('ManageProfile.edit-profile-coordinator')->with('coordinators', $authentications);
    //     // var_dump($coordinator);
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
    public function destroy(Coordinator $committee)
    {
        //
    }
}
