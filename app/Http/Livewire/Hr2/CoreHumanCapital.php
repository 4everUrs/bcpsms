<?php

namespace App\Http\Livewire\Hr2;

use App\Models\Employee;
use App\Models\RecruitmentRequestList;
use Livewire\Component;

class CoreHumanCapital extends Component
{
    public $position, $slot, $salary_min, $salary_max;

    protected $rules = [
        'position' => 'required|min:3',
        'slot' => 'required|integer|min:0',
        'salary_min' => 'required|integer|min:0',
        'salary_max' => 'required|integer|min:0'
    ];
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
    public function render()
    {
        return view('livewire.hr2.core-human-capital', [
            'employees' => Employee::all()
        ]);
    }
    public function sendRequest()
    {
        $validatedData = $this->validate();
        RecruitmentRequestList::create($validatedData);
        $this->dispatchBrowserEvent('close-modal');
        sweetalert()->addSuccess('Send Request Successfully');
        $this->reset();
    }
}
