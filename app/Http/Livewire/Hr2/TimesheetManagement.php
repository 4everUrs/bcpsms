<?php

namespace App\Http\Livewire\Hr2;

use App\Models\Employee;
use Carbon\Carbon;
use Livewire\Component;

class TimesheetManagement extends Component
{
    public $shift, $schedule, $selected_id, $start = "08:00", $end = "16:00";
    public function render()
    {
        return view('livewire.hr2.timesheet-management', [
            'employees' => Employee::all()
        ]);
    }
    public function getData($id)
    {
        $this->selected_id = $id;
    }
    public function updateData()
    {
        $this->schedule = Carbon::parse($this->start)->format('g:i:A') . " - " . Carbon::parse($this->end)->format('g:i:A');
        Employee::find($this->selected_id)->update([
            'shift' => $this->shift,
            'schedule' => $this->schedule
        ]);
        $this->dispatchBrowserEvent('close-modal');
        sweetalert()->addSuccess('Update Successfully');
        $this->reset();
    }
}
