<?php

namespace App\Http\Livewire\Hr1;

use App\Models\benefit;
use App\Models\Candidate;
use App\Models\Qualification;
use App\Models\RecruitmentRequestList;
use App\Models\shift;
use App\Models\Vacancy;
use Carbon\Carbon;
use Livewire\Component;

class Recruitment extends Component
{
    public $position, $quantity, $shifts = [], $benefits = [], $salary_min, $salary_max;
    public $qualification, $qualifications = [], $applied, $selected_id, $requestID;
    public $first_name, $middle_initial, $last_name, $birthdate, $resume, $gender, $email, $address, $phone;
    protected $rules = [
        'position' => 'required|min:3',
        'qualification' => 'required|min:3',
        'quantity' => 'required|integer|min:0',
        'salary_min' => 'required|integer|min:0',
        'salary_max' => 'required|integer|min:0',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
    public function render()
    {
        if ($this->requestID) {
            $temp = RecruitmentRequestList::find($this->requestID);
            $this->position = $temp->position;
            $this->quantity = $temp->slot;
            $this->salary_min = $temp->salary_min;
            $this->salary_max = $temp->salary_max;
        }
        return view('livewire.hr1.recruitment', [
            'vacancies' => Vacancy::orderBy('id', 'desc')
                ->paginate(10),
            'requests' => RecruitmentRequestList::all()
        ]);
    }
    // public function mount()
    // {
    //     dd(Vacancy::with('Qualification')->get());
    // }
    public function addRow()
    {
        $this->qualifications[] = [];
    }
    public function removeRow($index)
    {
        unset($this->qualifications[$index]);
        $this->qualifications = array_values($this->qualifications);
    }
    public function addVancancy()
    {
        $this->validate();
        $temp[] = $this->shifts;
        foreach ($this->shifts as $shift) {
            $temp[] = $this->shifts;
        }

        Vacancy::create([
            'position' => $this->position,
            'quantity' => $this->quantity,
            'salary_min' => $this->salary_min,
            'salary_max' => $this->salary_max,
        ]);
        $this->addQualifications();
        if ($this->shifts) {
            $this->addShift();
        }
        if ($this->benefits) {
            $this->addBenefit();
        }
        $this->dispatchBrowserEvent('close-modal');
        sweetalert()->addSuccess('Added Successfully.');
        $this->reset();
    }
    public function addShift()
    {
        $vacancy = Vacancy::latest()->first();
        foreach ($this->shifts as $index => $shift) {
            shift::create([
                'vacancy_id' => $vacancy->id,
                'shift' => $shift,
            ]);
        }
    }
    public function addBenefit()
    {
        $vacancy = Vacancy::latest()->first();
        foreach ($this->benefits as $index => $benefit) {
            benefit::create([
                'vacancy_id' => $vacancy->id,
                'benefit' => $benefit
            ]);
        }
    }
    public function addQualifications()
    {
        $vacancy = Vacancy::latest()->first();

        Qualification::create([
            'vacancy_id' => $vacancy->id,
            'qualification' => $this->qualification
        ]);
        foreach ($this->qualifications as $index => $qualify) {
            Qualification::create([
                'vacancy_id' => $vacancy->id,
                'qualification' => $qualify,
            ]);
        }
    }
    public function getPosition($id)
    {
        $this->selected_id = $id;
        $temp = Vacancy::find($id);
        $this->applied = $temp->position;
    }
    public function addCandidate()
    {
        $age = Carbon::parse($this->birthdate)->age;
        $this->validate([
            'first_name' => 'required|string|min:3',
            'middle_initial' => 'required|max:3',
            'last_name' => 'required|string|min:3',
            'gender' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'birthdate' => 'required',
        ]);
        Candidate::create([
            'name' => $this->first_name . ' ' . $this->middle_initial . ' ' . $this->last_name,
            'gender' => $this->gender,
            'birthdate' => $this->birthdate,
            'address' => $this->address,
            'phone' => $this->phone,
            'age' => $age,
            'vacancy_id' => $this->selected_id,
            'email' => $this->email
        ]);

        $vacancy = Vacancy::find($this->selected_id);
        $vacancy->candidate = $vacancy->candidate + 1;
        $vacancy->save();
        $this->dispatchBrowserEvent('close-modal-candidate');
        sweetalert()->addSuccess('Added Successfully.');
    }
}
