<?php

namespace App\Http\Livewire\Hr1;

use App\Models\Candidate;
use App\Models\Employee;
use App\Models\Performance;
use App\Models\Training;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LearningManagement extends Component
{
    public $exam, $training, $selected_id;
    public function render()
    {
        return view('livewire.hr1.learning-management', [
            'trainings' => Training::all(),
        ]);
    }
    public function getId($id)
    {
        $this->selected_id = $id;
    }
    public function evaluate()
    {

        if ($this->exam == 'Passed' && $this->training == 'Passed') {
            $remarks = 'Passed';
            $this->createEmployee();
            $this->createPerfomance();
            $this->createUser();
            $this->updateEmployee();
        } elseif ($this->exam == 'Failed' && $this->training == 'Failed') {
            $remarks = 'Failed';
        } else {
            $remarks = 'Subject to Re-Evaluate';
        }

        Training::find($this->selected_id)->update([
            'exam' => $this->exam,
            'training' => $this->training,
            'remarks' => $remarks
        ]);
        $this->dispatchBrowserEvent('close-modal');
        sweetalert()->addSuccess('Evaluation Successfully.');
    }
    public function createEmployee()
    {
        $candidate = Training::find($this->selected_id);
        Employee::create([
            'vacancy_id' => $candidate->candidate->vacancy_id,
            'candidate_id' => $candidate->candidate_id,
            'name' => $candidate->Candidate->name,
            'email' => $candidate->Candidate->email,
            'age' => $candidate->Candidate->age,
            'birthdate' => $candidate->Candidate->birthdate,
            'gender' => $candidate->Candidate->gender,
            'phone' => $candidate->Candidate->phone,
            'address' => $candidate->Candidate->address,
        ]);
    }
    public function createPerfomance()
    {
        $employee = Employee::latest()->first();

        Performance::create([
            'employee_id' => $employee->id
        ]);
    }
    public function createUser()
    {
        $candidate = Training::find($this->selected_id);
        $employee = Employee::latest()->first();
        User::create([
            'name' => $candidate->Candidate->name,
            'email' => $candidate->Candidate->email,
            'username' => $employee->id,
            'phone' => $candidate->Candidate->phone,
            'user_level' => 3,
            'password' => Hash::make($employee->id),
        ]);
    }
    public function updateEmployee()
    {
        $employee = Employee::latest()->first();
        $user = User::latest()->first();
        $employee->user_id = $user->id;
        $employee->save();
    }
}
