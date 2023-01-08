<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeanController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\CoordinatorController;
use App\Http\Controllers\AuthenticationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    $logged_user = session()->get('logged_user');
    $role = session()->get('role');

    if (!$logged_user) {
        return view('layouts.login-signup');
    } else {
        if ($role == 'Dean') {
            return redirect('dean-profile');
        } elseif ($role == 'Student') {
            return redirect('student-profile');
        } elseif ($role == 'Lecturer') {
            return redirect('lecturer-profile');
        } elseif ($role == 'Committee') {
            return redirect('committee-profile');
        } elseif ($role == 'Coordinator') {
            return redirect('coordinator-profile');
        }
    }
})->name('home');

Route::get('/login', function () {
    $logged_user = session()->get('logged_user');
    $role = session()->get('role');

    if (!$logged_user) {
        return view('layouts.login-signup');
    } else {
        if ($role == 'Dean') {
            return redirect('dean-profile');
        } elseif ($role == 'Student') {
            return redirect('student-profile');
        } elseif ($role == 'Lecturer') {
            return redirect('lecturer-profile');
        } elseif ($role == 'Committee') {
            return redirect('committee-profile');
        } elseif ($role == 'Coordinator') {
            return redirect('coordinator-profile');
        }
    }
})->name('login');

Route::get('/home', function () {
    $logged_user = session()->get('logged_user');
    $role = session()->get('role');

    if (!$logged_user) {
        return view('layouts.login-signup');
    } else {
        if ($role == 'Dean') {
            return redirect('dean-profile');
        } elseif ($role == 'Student') {
            return redirect('student-profile');
        } elseif ($role == 'Lecturer') {
            return redirect('lecturer-profile');
        } elseif ($role == 'Committee') {
            return redirect('committee-profile');
        } elseif ($role == 'Coordinator') {
            return redirect('coordinator-profile');
        }
    }
});

Route::view('activities', 'ManageProfile.profile-student')->name('activities');
Route::view('calendar', 'ManageProfile.profile-student')->name('calendar');
Route::view('report', 'ManageProfile.profile-student')->name('report');
Route::view('proposal', 'ManageProfile.profile-student')->name('proposal');
Route::view('election', 'electioncommittee.ce-student')->name('election');
Route::view('bulletin', 'ManageProfile.profile-student')->name('bulletin');

// VIEW ROUTES
Route::view('register', 'layouts.main');
Route::view('forgot', 'layouts.forgot-password');

// AUTHENTICATION CONTROLLER
Route::post('user_login', [AuthenticationController::class, 'login'])->name('user-login');
Route::post('user_register', [AuthenticationController::class, 'register'])->name('user-register');
Route::post('user_reset', 'AuthenticationController@resetpassword')->name('user-reset');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('user-logout');

// STUDENT CONTROLLER
Route::get('student-profile', [StudentController::class, 'index']);
Route::post('student_update', [StudentController::class, 'update']);

// LECTURER CONTROLLER
Route::get('lecturer-profile', [LecturerController::class, 'index']);
Route::post('lecturer_update', [LecturerController::class, 'update']);

// DEAN CONTROLLER
Route::get('dean-profile', [DeanController::class, 'index']);
Route::post('dean_update', [DeanController::class, 'update']);

// COMMITTEE CONTROLLER
Route::get('committee-profile', [CommitteeController::class, 'index']);
Route::post('committee_update', [CommitteeController::class, 'update']);

// COORDINATOR CONTROLLER
Route::get('coordinator-profile', [CoordinatorController::class, 'index']);
Route::post('coordinator_update', [CoordinatorController::class, 'update']);

//Committee Election Routing

Route::view('electionregister', 'electioncommittee.ce-student-register')->name('electionregister');

Route::get('/cec', function () {
    return view('electioncommittee/ce-committee');
});

Route::get('/ces', function () {
    return view('electioncommittee/ce-student');
});

Route::get('/cer', function () {
    return view('electioncommittee/ce-student-register');
});

Route::get('/ceo', function () {
    return view('electioncommittee/ce-coordinator');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
