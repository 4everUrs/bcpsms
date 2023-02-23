<?php

namespace App\Http\Livewire\Hr1;

use App\Models\Employee;
use Livewire\Component;

class NewHireOnboard extends Component
{
    public $name, $email, $phone, $address, $sss, $philhealth, $pagibig, $medical, $insurance, $dental;
    public $username, $password, $bank, $salary;
    public function render()
    {
        return view('livewire.hr1.new-hire-onboard', [
            'employees' => Employee::all(),
        ]);
    }
    public function getData($id)
    {
        $data = Employee::find($id);
        $this->name = $data->name;
        $this->email = $data->email;
        $this->address = $data->address;
        $this->phone = $data->phone;
        $this->sss = $data->sss;
        $this->philhealth = $data->philhealth;
        $this->pagibig = $data->pagibig;
        $this->medical = $data->medical;
        $this->insurance = $data->insurance;
        $this->dental = $data->dental;
        $this->username = $data->username;
        $this->password = $data->password;
        $this->bank = $data->bank_account;
    }
    public function updateDate($id)
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);
        Employee::find($id)->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'sss' => $this->sss,
            'philhealth' => $this->philhealth,
            'pagibig' => $this->pagibig,
            'insurance' => $this->insurance,
            'medical' => $this->medical,
            'dental' => $this->dental,
            'bank' => $this->bank,
            'username' => $this->username,
            'password' => $this->password,
            'salary' => $this->salary
        ]);
        sweetalert()->addSuccess('Evaluation Successfully.');
        $this->reset();
    }
}
