<?php

$logged_user = session()->get('logged_user');
$username = session()->get('username');
$roles = session()->get('role');

?>

@extends('layouts.main')


@section('content')
    <div class="main__container">
        <div class="secondary__container">
            <div class="double__input__field">
                <div class="input__field">
                    <h4>First Name</h4>
                    <input id="tbprofession" type="first-name" value="{{$students[0]->student_first_name}}">
                </div>
                <div class="input__field">
                    <h4>Last Name</h4>
                    <input id="tbprofession" type="last-name" value="{{$students[0]->student_last_name}}">
                </div>
            </div>
            <div class="double__input__field">
                <div class="email__input__field">
                    <h4>Email</h4>
                    <input type="email" value="{{$students[0]->student_email}}">
                </div>
                <div class="mobile__no">
                    <h4>Mobile No</h4>
                    <input type="mobile-no" value="{{$students[0]->student_mobile_no}}">
                </div>
            </div>
            <div class="address__">
                <h4>Address</h4>
                <input type="address" value="{{$students[0]->student_address}}">
            </div>
            <div class="double__input__field">
                <div class="input__field">
                    <h4>City</h4>
                    <input type="city" value="{{$students[0]->student_city}}">
                </div>
                <div class="input__field">
                    <h4>State</h4>
                    <input type="state" value="{{$students[0]->student_state}}">
                </div>
            </div>
            <div class="double__input__field">
                <div class="email__input__field">
                    <h4>Zip Code</h4>
                    <input type="zipcode" value="{{$students[0]->student_zipcode}}">
                </div>
                <div class="mobile__no">
                    <h4>Country</h4>
                    <input type="country" value="{{$students[0]->student_country}}">
                </div>
            </div>
            <div class="password__">
                <div>
                    <h4>Password</h4>
                </div>
                <input type="password" class="input2" value="{{$students[0]->password}}" >
                <span class="material-symbols-outlined show">
                    visibility
                </span>
                <span class="material-symbols-outlined hide eye-active">
                    visibility_off
                </span>
            </div>
            <div class="update__button__container">
                <button class="update__button">Update</button>
            </div>
        </div>
        <div class="tertiary__container">
            <div class="fourth__container">
                <div class="profile__picture">
                    <h1>Profile Picture</h1>
                </div>
            </div>
            <div class="fourth__container">
                <div class="course__dropdown">
                    <h4>Course</h1>
                        <select class="form-select course-dropdown" aria-label="Default select example">
                            <option selected>Software Engineering</option>
                            <option value="1">Graphics and Multimedia Technology</option>
                            <option value="2">Computer System's and Networking</option>
                            <option value="3">Diploma Computer Science</option>
                        </select>
                </div>
                <div class="triple__grid">
                    <div class="year__dropdown">
                        <h4>Year</h1>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>1</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                                <option value="4">5</option>
                            </select>
                    </div>
                    <div class="semester__dropdown">
                        <h4>Semester</h1>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>1</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                                <option value="4">5</option>
                                <option value="5">6</option>
                                <option value="6">7</option>
                                <option value="7">8</option>
                                <option value="8">9</option>
                            </select>
                    </div>
                    <div class="matric__id">
                        <div class="input__field">
                            <h4>Matric ID</h4>
                            <input type="matric-id" class="matric-id">
                        </div>
                    </div>
                </div>
                <div class="update__button__container">
                    <button class="update__button">Update</button>
                </div>
            </div>
        </div>
    </div>
@endsection
