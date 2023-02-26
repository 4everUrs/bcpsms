<?php

namespace App\Http\Livewire\Employee;

use App\Models\Employee;
use App\Models\LeaveRequest;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EmployeeLeaveManagement extends Component
{
    public $type, $reason, $date, $from, $to;
    public function render()
    {
        return view('livewire.employee.employee-leave-management', [
            'requests' => LeaveRequest::where('user_id', Auth::user()->id)->get(),
        ]);
    }
    public function sendRequest()
    {
        $employee = Employee::where('user_id', Auth::user()->id)->first();
        LeaveRequest::create([
            'user_id' => Auth::user()->id,
            'employee_id' => $employee->id,
            'type' => $this->type,
            'reason' => $this->reason,
            'from' => $this->from,
            'to' => $this->to,
        ]);
        $this->dispatchBrowserEvent('close-candidate');
        sweetalert()->addSuccess('Send Successfully');
        $this->reset();
    }
}
