<?php

namespace App\Http\Livewire\Hr1;

use App\Models\Candidate;
use App\Models\Interview;
use App\Models\Training;
use Carbon\Carbon;
use Livewire\Component;

class ApplicantManagement extends Component
{
    public $venue, $date, $time, $selected_id;
    public function render()
    {
        return view('livewire.hr1.applicant-management', [
            'candidates' => Candidate::orderBy('id', 'desc')->get()
        ]);
    }
    public function setInterview()
    {
        $time = Carbon::parse($this->time)->format('g:i:A');
        Interview::create([
            'candidate_id' => $this->selected_id,
            'venue' => $this->venue,
            'date' => $this->date,
            'time' => $time
        ]);
        Candidate::find($this->selected_id)->update([
            'status' => 'Interviewing'
        ]);
        $this->dispatchBrowserEvent('close-modal');
        sweetalert()->addSuccess('Set Successfully.');
    }
    public function getId($id)
    {
        $this->selected_id = $id;
    }
    public function deny($id)
    {
        Candidate::find($id)->update([
            'status' => 'Denied'
        ]);
        sweetalert()->addSuccess('Denied Successfully.');
    }
    public function approve($id)
    {
        Candidate::find($id)->update([
            'status' => 'Approved'
        ]);
        $candidate = Candidate::latest()->first();
        Training::create([
            'candidate_id' => $candidate->id,
        ]);
        sweetalert()->addSuccess('Approved Successfully.');
    }
}
