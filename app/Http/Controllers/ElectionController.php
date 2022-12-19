<?php

namespace App\Http\Controllers;

use App\Models\ApprovedCandidate;
use App\Models\ApprovedCandidateModel;
use App\Models\Election;
use App\Models\RegisteredCandidate;
use App\Models\RegisteredCandidateModel;
use Error;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;
use PHPUnit\Util\Xml\Exception;

class ElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function RegisterNewCandidate(Request $request)
    {
        $registered = new RegisteredCandidate();
        $registered->matricid = $request->matricid;
        $registered->name = $request->name;
        $registered->major = $request->major;
        $registered->intake = $request->intake;
        $registered->manifesto = $request->manifesto;
        $registered->profilepicture = $request->profilepicture;

        if ($registered->save())
            return true;
    }

    public function GetRegisteredCandidate()
    {
        $registeredcandidate=RegisteredCandidate::all();
        return $registeredcandidate;
    }

    public function ApproveNewCandidate(Request $request)
    {
        $approved = new ApprovedCandidate();
        $approved->matricid = $request->matricid;
        $approved->name = $request->name;
        $approved->major = $request->major;
        $approved->intake = $request->intake;
        $approved->manifesto = $request->manifesto;
        $approved->profilepicture = $request->profilepicture;
        $approved->votecount = 0;

        if ($approved->save())
            return true;
    }

    public function DestroyCandidate($matricid)
    {
        if($matricid->delete())
            return true;
    }

    public function GetElectionStatus()
    {
        //query last row of status column value
        $electionstatus = new Election();
        return $electionstatus;
    }

    public function SetElectionStatus($electionstatus)
    {
        $election = new Election();
        if ($electionstatus == 'OFF')
        {
            $election->starttime = \Carbon\Carbon::now()->timestamp;
            $election->electionstatus = 'ON';
        }
        else if ($electionstatus == 'ON')
        {
            $election->endtime = \Carbon\Carbon::now()->timestamp;
            $election->electionstatus = 'OFF';
        }
        else
            throw new Exception("Election Status is not set properly");
    }

    public function GetApprovedCandidate()
    {
        $approvedcandidate = ApprovedCandidate::all();
        return $approvedcandidate;
        //use view?
    }

    public function RegisterVote(Request $request)
    {
        /*FOR each row in req

            ApprovedCandidate->matricid = req->matricid

            votes = get() votecount value

            votes = votes  + 1

            votecount = votes

            votecount->save()
         */

    }

    public function GetVotingCount()
    {
        $votingcount = ApprovedCandidate::all();
        return $votingcount;
    }

    public function ExportVotingCountPDF()
    {
        
    }

    public function ExportVotingCountJPG()
    {
        
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
