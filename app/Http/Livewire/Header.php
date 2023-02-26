<?php

namespace App\Http\Livewire;

use App\Models\Attendance;
use App\Models\CutoffAttendance;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public $attendance;
    public function render()
    {
        $this->attendance = Attendance::where('employee_id', Auth::user()->username)->latest()->first();
        return view('livewire.header');
    }

    public function attendance()
    {
        $cutoff = CutoffAttendance::latest()->first();
        Attendance::create([
            'cutoff_attendance_id' => $cutoff->id,
            'employee_id' => Auth::user()->username,
            'time_in' => Carbon::now(),
        ]);
    }
    public function time_out()
    {
        if ($this->attendance->time_out == null) {
            $attendance = Attendance::latest('id', Auth::user()->id)->first();
            $attendance->time_out = Carbon::now();
            $attendance->rendered_hours = Carbon::parse($attendance->time_in)->diffInHours();
            $attendance->save();
        }
    }
}
