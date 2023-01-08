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
            <a href="{{route('electionregister')}}">
                <button class="electionmain">
                
                    <h2>Register As Candidate</h2>
                
                </button>
            </a>
                <button class="electionmain">
                
                    <h2>Vote Candidate</h2>
                
                </button>
            </div>
@endsection