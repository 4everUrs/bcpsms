<?php

namespace App\Http\Livewire\Hr2;

use App\Models\Attendance;
use App\Models\CutoffAttendance;
use App\Models\Employee;
use App\Models\MonthlyAttendance;
use App\Models\Payroll as ModelsPayroll;
use App\Models\Payslip;
use Carbon\Carbon;
use Livewire\Component;

class Payroll extends Component
{
    public $month, $cutoffs, $attendances, $cutoff_id, $payslips = [];
    public function render()
    {
        if ($this->month) {
            $this->cutoffs = CutoffAttendance::where('monthly_attendance_id', $this->month)->get();
        }
        if ($this->cutoff_id) {
            $this->attendances = Attendance::where('cutoff_attendance_id', $this->cutoff_id)->get();
            $this->payslips = Payslip::where('cutoff_attendance_id', $this->cutoff_id)->get();
        }
        return view('livewire.hr2.payroll', [
            'monthly' => MonthlyAttendance::all(),
            'payrolls' => ModelsPayroll::all(),
        ]);
    }
    // public function mount()
    // {
    //     $temp = Employee::with('Attendance')->get();
    //     dd($temp);
    // }
    public function addPayroll()
    {
        $cutoffs = CutoffAttendance::where('monthly_attendance_id', $this->month)->latest()->first();
        $attendances = Attendance::where('cutoff_attendance_id', $cutoffs->id)->get();
        ModelsPayroll::create([
            'cutoff_attendance_id' => $cutoffs->id,
            'monthly_attendance_id' => $this->month,
        ]);
        $this->dispatchBrowserEvent('close-payroll-modal');
        sweetalert()->addSuccess('Create Successfully');
        $this->reset();
    }
    public function getID($id)
    {
        $this->cutoff_id = $id;
    }
    public function createPayslip()
    {
        $date = Carbon::parse(now()->firstOfMonth())->toFormattedDateString();
        $net_salary = 0;
        $total_hours = 0;
        $tax = 0;
        $employees = Employee::all();
        $cutoff = CutoffAttendance::latest()->first();
        foreach ($employees as $employee) {
            foreach ($employee->Attendance as $attendance) {
                $total_hours += $attendance->rendered_hours;
                $net_salary = ($employee->salary / 208) * $total_hours;
                $tax = $net_salary * 0.12;
            }
            Payslip::create([
                'employee_id' => $employee->id,
                'cutoff_attendance_id' => $cutoff->id,
                'total_hours' => $total_hours,
                'net_salary' => $net_salary,
                'tax' => $tax,
                'gross_salary' => $net_salary - $tax,
            ]);
            if ($cutoff->start != $date) {
                Payslip::latest()->first()->update([
                    'sss' => $net_salary * 0.45,
                    'philhealth' => '450',
                    'pagibig' => '250',
                    'gross_salary' => $net_salary - $tax - ($net_salary * 0.45) - 450 - 250,
                ]);
            }
        }
        $this->dispatchBrowserEvent('close-payslip-modal');
        sweetalert()->addSuccess('Import Successfully');
        $this->reset();
    }
}
