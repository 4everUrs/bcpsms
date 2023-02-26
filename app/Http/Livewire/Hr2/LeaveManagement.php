<?php

namespace App\Http\Livewire\Hr2;

use App\Models\LeaveRequest;
use Livewire\Component;

class LeaveManagement extends Component
{
    public $selected_id;
    public function render()
    {
        return view('livewire.hr2.leave-management', [
            'applications' => LeaveRequest::all(),
        ]);
    }
    public function approve()
    {
        LeaveRequest::find($this->selected_id)->update([
            'status' => 'Approved'
        ]);
        $this->dispatchBrowserEvent('close-approve-modal');
        sweetalert()->addSuccess('Approve Successfully');
        $this->reset();
    }
    public function deny()
    {
        LeaveRequest::find($this->selected_id)->update([
            'status' => 'Denied',
        ]);
        $this->dispatchBrowserEvent('close-deny-modal');
        sweetalert()->addSuccess('Denied Successfully');
        $this->reset();
    }
    public function getID($id)
    {
        $this->selected_id = $id;
    }
}
