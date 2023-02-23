<?php

namespace App\Http\Livewire\Employee;

use App\Models\Attendance as ModelsAttendance;
use Livewire\Component;

class Attendance extends Component
{
    public function render()
    {
        return view('livewire.employee.attendance', [
            'attendances' => ModelsAttendance::all()
        ]);
    }
}
