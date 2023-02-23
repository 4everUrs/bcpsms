<?php

namespace App\Http\Livewire\Hr1;

use App\Models\Performance;
use Livewire\Component;

class PerformanceManagement extends Component
{
    public $quality, $achievement, $productivity, $initiative,
        $teamwork, $adaptability, $communication, $performance, $remarks, $total, $selected_id;
    public function render()
    {
        return view('livewire.hr1.performance-management', [
            'performances' => Performance::all()
        ]);
    }
    public function getId($id)
    {
        $this->selected_id = $id;
    }

    public function saveEvaluation()
    {
        $total = $this->quality + $this->achievement + $this->productivity + $this->initiative
            + $this->teamwork + $this->communication + $this->performance + $this->adaptability;

        $this->total = ($total / 800) * 100;
        if ($this->total < 70) {
            $this->remarks = 'Bad';
        } elseif ($this->total < 80) {
            $this->remarks = 'Poor';
        } elseif ($this->total < 90) {
            $this->remarks = 'Average';
        } elseif ($this->total < 100) {
            $this->remarks = 'Good';
        } elseif ($this->total >= 100) {
            $this->remarks = 'Excellent';
        }

        Performance::find($this->selected_id)->update([
            'quality' => $this->quality,
            'performance' => $this->performance,
            'adaptability' => $this->adaptability,
            'productivity' => $this->productivity,
            'initiative' => $this->initiative,
            'teamwork' => $this->teamwork,
            'communication' => $this->communication,
            'achievement' => $this->achievement,
            'total' => $this->total,
            'remarks' => $this->remarks
        ]);
        $this->dispatchBrowserEvent('close-modal');
        sweetalert()->addSuccess('Evaluation Success');
    }
}
