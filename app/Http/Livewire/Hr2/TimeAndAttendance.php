<?php

namespace App\Http\Livewire\Hr2;

use App\Models\Attendance;
use App\Models\CutoffAttendance;
use App\Models\MonthlyAttendance;
use Carbon\Carbon;
use Error;
use Exception;
use Livewire\Component;

class TimeAndAttendance extends Component
{
    public $attendances;
    protected $listeners = ['createCutoff' => 'createCuttoff'];
    public function render()
    {
        return view('livewire.hr2.time-and-attendance', [
            'monthly' => MonthlyAttendance::all(),
        ]);
    }

    public function mount()
    {
        $this->createCuttoff();
    }
    public function createCuttoff()
    {
        $month = Carbon::parse(now())->format('F,Y');
        $year = Carbon::parse(now())->format('Y');

        try {
            MonthlyAttendance::create([
                'month' => $month
            ]);
        } catch (Exception) {
        }
        $monthly = MonthlyAttendance::latest()->first();
        try {
            CutoffAttendance::create([
                'monthly_attendance_id' => $monthly->id,
                'start' => Carbon::parse(now()->firstOfMonth())->toFormattedDateString(),
                'end' => Carbon::parse(now()->firstOfMonth()->addDay(14))->toFormattedDateString(),
            ]);
        } catch (Exception $e) {
        }
    }
    public function getData($id)
    {
        $this->attendances = Attendance::where('cutoff_attendance_id', $id)->get();
    }
}
