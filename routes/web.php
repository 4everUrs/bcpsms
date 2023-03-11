<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimeController;
use App\Http\Livewire\Attendance as LivewireAttendance;
use App\Http\Livewire\Employee\Attendance;
use App\Http\Livewire\Employee\Employee;
use App\Http\Livewire\Employee\EmployeeLeaveManagement;
use App\Http\Livewire\Hr1\ApplicantManagement;
use App\Http\Livewire\Hr1\LearningManagement;
use App\Http\Livewire\Hr1\NewHireOnboard;
use App\Http\Livewire\Hr1\PerformanceManagement;
use App\Http\Livewire\Hr1\Recruitment;
use App\Http\Livewire\Hr1\RecruitmentRequest;
use App\Http\Livewire\Hr1Dashboard;
use App\Http\Livewire\Hr2\CoreHumanCapital;
use App\Http\Livewire\Hr2\LeaveManagement;
use App\Http\Livewire\Hr2\Payroll;
use App\Http\Livewire\Hr2\TimeAndAttendance;
use App\Http\Livewire\Hr2\TimesheetManagement;
use App\Http\Livewire\Hr2Dashboard;
use Illuminate\Support\Facades\Route;

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
    return redirect('/login');
});
Route::get('/attendance', LivewireAttendance::class);
// Route::post('/attendance', [TimeController::class, 'timein'])->name('timein');
Route::get('/construction', function () {
    sweetalert()->addWarning('This part is under construction');
    return back();
})->name('construction');


Route::get('/redirects', [LoginController::class, 'home']);

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('adminDashboard');
});
Route::prefix('hr-1')->middleware('hr1')->group(function () {
    Route::get('dashboard', Hr1Dashboard::class)->name('hr1Dashboard');
    Route::get('recruitment', Recruitment::class)->name('recruitment');
    Route::get('recruitment/request', RecruitmentRequest::class)->name('recruitment-request');
    Route::get('applicant', ApplicantManagement::class)->name('applicant');
    Route::get('learning', LearningManagement::class)->name('learning');
    Route::get('onboarding', NewHireOnboard::class)->name('onboarding');
    Route::get('perfomamce', PerformanceManagement::class)->name('performance');
});
Route::prefix('hr-2')->middleware('hr2')->group(function () {
    Route::get('dashboard', Hr2Dashboard::class)->name('hr2Dashboard');
    Route::get('attendance', TimeAndAttendance::class)->name('timesheet');
    Route::get('timesheet', TimesheetManagement::class)->name('timesheet-management');
    Route::get('core-human-capital', CoreHumanCapital::class)->name('hcm');
    Route::get('payroll', Payroll::class)->name('payroll');
    Route::get('leave-management', LeaveManagement::class)->name('leave');
});

Route::prefix('employee')->middleware('employee')->group(function () {
    Route::get('dashboard', Employee::class)->name('employeeDashboard');
    Route::get('attendance', Attendance::class)->name('attendance');
    Route::get('leave', EmployeeLeaveManagement::class)->name('eleave');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
