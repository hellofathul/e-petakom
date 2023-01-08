<?php

$logged_user = session()->get('logged_user');
$username = session()->get('username');
$roles = session()->get('role');

?>

@extends('layouts.main')

@section('content')
            <div class="header">
                <h1>Committee Election</h1>
            </div>
            <div class="mainelection__container">
                <button class="electionmain">
                    <h2>Manage Candidate Registration</h2>
                </button>
                <button class="electionmain">
                    <h2>Manage Election</h2>
                </button>

                <button class="electionmain">
                    <h2>Voting Count</h2>
                </button>
            </div>
@endsection