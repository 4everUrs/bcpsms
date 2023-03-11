<?php

namespace App\Http\Livewire;

use App\Models\Attendance as ModelsAttendance;
use App\Models\CutoffAttendance;
use App\Models\Employee;
use Carbon\Carbon;
use Livewire\Component;

class Attendance extends Component
{
    public $employee_id, $employee_data, $employee_name, $employee_attendance;
    public function render()
    {
        return view('livewire.attendance')->layout('layouts.guest');
    }
    public function search()
    {
        $this->employee_data = Employee::find($this->employee_id);

        if ($this->employee_data) {
            $this->dispatchBrowserEvent('open-modal');
            $this->employee_name = $this->employee_data->name;
            $this->employee_attendance = ModelsAttendance::where('employee_id', $this->employee_id)->latest()->first();
        } else {
            sweetalert()->addError('No Data Found');
        }
    }
    public function timein()
    {
        if ($this->employee_attendance->rendered_hours != null) {
            $cutoff = CutoffAttendance::latest()->first();
            ModelsAttendance::create([
                'employee_id' => $this->employee_id,
                'cutoff_attendance_id' => $cutoff->id,
                'time_in' => Carbon::now()
            ]);
            $date = Carbon::parse(now())->format('F d g:i:A');
            sweetalert()->addSuccess($date, 'Time in Successfully');
        } else {
            sweetalert()->addError('Comeback Tomorrow', 'Already Time In');
        }
    }
    public function time_out()
    {
        $this->employee_attendance = ModelsAttendance::where('employee_id', $this->employee_id)->latest()->first();
        $this->employee_attendance->time_out = Carbon::now();
        $this->employee_attendance->rendered_hours = Carbon::parse($this->employee_attendance->time_in)->diffInHours();
        $this->employee_attendance->save();
        $date = Carbon::parse(now())->format('F d g:i:A');
        sweetalert()->addSuccess($date, 'Time Out Successfully');
    }
}
