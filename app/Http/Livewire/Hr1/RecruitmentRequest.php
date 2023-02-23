<?php

namespace App\Http\Livewire\Hr1;

use App\Models\RecruitmentRequestList;
use Livewire\Component;

class RecruitmentRequest extends Component
{
    public function render()
    {
        return view('livewire.hr1.recruitment-request', [
            'requests' => RecruitmentRequestList::all()
        ]);
    }
}
