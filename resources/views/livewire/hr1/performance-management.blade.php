<div>
    <x-slot name="header">
        <h1>Perfomance Management</h1>
    </x-slot>

    <x-table title="Employees">
        <thead>
            <th class="text-center align-middle">Employee ID</th>
            <th class="text-center align-middle">Position</th>
            <th class="text-center align-middle">Name</th>
            <th class="text-center align-middle">Quality</th>
            <th class="text-center align-middle">Achievement</th>
            <th class="text-center align-middle">Productivity</th>
            <th class="text-center align-middle">Initiative</th>
            <th class="text-center align-middle">Teamwork</th>
            <th class="text-center align-middle">Adaptability</th>
            <th class="text-center align-middle">Communication</th>
            <th class="text-center align-middle">Performance</th>
            <th class="text-center align-middle">Remarks</th>
            <th class="text-center align-middle">Action</th>
        </thead>
        <tbody>
            @foreach ($performances as  $perfomance)
                <tr>
                    <td class="text-center align-middle">{{$perfomance->employee_id}}</td>
                    <td class="text-center align-middle">{{$perfomance->Employee->Vacancy->position}}</td>
                    <td class="text-center align-middle">{{$perfomance->Employee->name}}</td>
                    @if ($perfomance->quality == '60')
                        <td class="text-center align-middle text-danger">Bad</td>
                    @elseif ($perfomance->quality == '70')
                        <td class="text-center align-middle text-warning">Poor</td>
                    @elseif ($perfomance->quality == '80')
                        <td class="text-center align-middle text-primary">Average</td>
                    @elseif ($perfomance->quality == '90')
                        <td class="text-center align-middle text-success">Good</td>
                    @elseif ($perfomance->quality == '100')
                        <td class="text-center align-middle text-success">Excellent</td>
                    @else
                    <td></td>
                    @endif
                    @if ($perfomance->achievement == '60')
                    <td class="text-center align-middle text-danger">Bad</td>
                    @elseif ($perfomance->achievement == '70')
                    <td class="text-center align-middle text-warning">Poor</td>
                    @elseif ($perfomance->achievement == '80')
                    <td class="text-center align-middle text-primary">Average</td>
                    @elseif ($perfomance->achievement == '90')
                    <td class="text-center align-middle text-success">Good</td>
                    @elseif ($perfomance->achievement == '100')
                    <td class="text-center align-middle text-success">Excellent</td>
                    @else
                    <td></td>
                    @endif
                    @if ($perfomance->productivity == '60')
                    <td class="text-center align-middle text-danger">Bad</td>
                    @elseif ($perfomance->productivity == '70')
                    <td class="text-center align-middle text-warning">Poor</td>
                    @elseif ($perfomance->productivity == '80')
                    <td class="text-center align-middle text-primary">Average</td>
                    @elseif ($perfomance->productivity == '90')
                    <td class="text-center align-middle text-success">Good</td>
                    @elseif ($perfomance->productivity == '100')
                    <td class="text-center align-middle text-success">Excellent</td>
                    @else
                    <td></td>
                    @endif
                    @if ($perfomance->initiative == '60')
                    <td class="text-center align-middle text-danger">Bad</td>
                    @elseif ($perfomance->initiative == '70')
                    <td class="text-center align-middle text-warning">Poor</td>
                    @elseif ($perfomance->initiative == '80')
                    <td class="text-center align-middle text-primary">Average</td>
                    @elseif ($perfomance->initiative == '90')
                    <td class="text-center align-middle text-success">Good</td>
                    @elseif ($perfomance->initiative == '100')
                    <td class="text-center align-middle text-success">Excellent</td>
                    @else
                    <td></td>
                    @endif
                    @if ($perfomance->teamwork == '60')
                    <td class="text-center align-middle text-danger">Bad</td>
                    @elseif ($perfomance->teamwork == '70')
                    <td class="text-center align-middle text-warning">Poor</td>
                    @elseif ($perfomance->teamwork == '80')
                    <td class="text-center align-middle text-primary">Average</td>
                    @elseif ($perfomance->teamwork == '90')
                    <td class="text-center align-middle text-success">Good</td>
                    @elseif ($perfomance->teamwork == '100')
                    <td class="text-center align-middle text-success">Excellent</td>
                    @else
                    <td></td>
                    @endif
                    @if ($perfomance->adaptability == '60')
                    <td class="text-center align-middle text-danger">Bad</td>
                    @elseif ($perfomance->adaptability == '70')
                    <td class="text-center align-middle text-warning">Poor</td>
                    @elseif ($perfomance->adaptability == '80')
                    <td class="text-center align-middle text-primary">Average</td>
                    @elseif ($perfomance->adaptability == '90')
                    <td class="text-center align-middle text-success">Good</td>
                    @elseif ($perfomance->adaptability == '100')
                    <td class="text-center align-middle text-success">Excellent</td>
                    @else
                    <td></td>
                    @endif
                    @if ($perfomance->communication == '60')
                    <td class="text-center align-middle text-danger">Bad</td>
                    @elseif ($perfomance->communication == '70')
                    <td class="text-center align-middle text-warning">Poor</td>
                    @elseif ($perfomance->communication == '80')
                    <td class="text-center align-middle text-primary">Average</td>
                    @elseif ($perfomance->communication == '90')
                    <td class="text-center align-middle text-success">Good</td>
                    @elseif ($perfomance->communication == '100')
                    <td class="text-center align-middle text-success">Excellent</td>
                    @else
                    <td></td>
                    @endif
                    @if ($perfomance->performance == '60')
                    <td class="text-center align-middle text-danger">Bad</td>
                    @elseif ($perfomance->performance == '70')
                    <td class="text-center align-middle text-warning">Poor</td>
                    @elseif ($perfomance->performance == '80')
                    <td class="text-center align-middle text-primary">Average</td>
                    @elseif ($perfomance->performance == '90')
                    <td class="text-center align-middle text-success">Good</td>
                    @elseif ($perfomance->performance == '100')
                    <td class="text-center align-middle text-success">Excellent</td>
                    @else
                    <td></td>
                    @endif
                    <td class="text-center align-middle">{{$perfomance->remarks}}</td>
                    <td class="text-center align-middle">
                        <button wire:click="getId({{$perfomance->id}})" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#evaluationModal">Evaluate</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-table>

    <x-modal id="evaluationModal">
        <x-slot name="head">Evaluation Form</x-slot>

        <x-slot name="body">
            <label>Quality</label>
            <div class="row mb-3">
                <div class="col">
                    <div class="form-check"> 
                        <input class="form-check-input" type="radio" wire:model="quality" id="quality1" value="60"> 
                        <label class="form-check-label" for="quality1"> Bad </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="quality" id="quality2" value="70">
                        <label class="form-check-label" for="quality2"> Poor </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="quality" id="quality3" value="80">
                        <label class="form-check-label" for="quality3"> Average </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="quality" id="quality4" value="90">
                        <label class="form-check-label" for="quality4"> Good </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="quality" id="quality5" value="100">
                        <label class="form-check-label" for="quality5"> Excellent </label>
                    </div>
                </div>
            </div>

            <label>Achievement</label>
            <div class="row mb-3">
                <div class="col">
                    <div class="form-check"> 
                        <input class="form-check-input" type="radio" wire:model="achievement" id="achievement1" value="60"> 
                        <label class="form-check-label" for="achievement1"> Bad </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="achievement" id="achievement2" value="70">
                        <label class="form-check-label" for="achievement2"> Poor </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="achievement" id="achievement3" value="80">
                        <label class="form-check-label" for="achievement3"> Average </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="achievement" id="achievement4" value="90">
                        <label class="form-check-label" for="achievement4"> Good </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="achievement" id="achievement5" value="100">
                        <label class="form-check-label" for="achievement5"> Excellent </label>
                    </div>
                </div>
            </div>

            <label>Productivity</label>
            <div class="row mb-3">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="productivity" id="productivity1" value="60">
                        <label class="form-check-label" for="productivity1"> Bad </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="productivity" id="productivity2" value="70">
                        <label class="form-check-label" for="productivity2"> Poor </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="productivity" id="productivity3" value="80">
                        <label class="form-check-label" for="productivity3"> Average </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="productivity" id="productivity4" value="90">
                        <label class="form-check-label" for="productivity4"> Good </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="productivity" id="productivity5" value="100">
                        <label class="form-check-label" for="productivity5"> Excellent </label>
                    </div>
                </div>
            </div>

            <label>Initiative</label>
            <div class="row mb-3">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="initiative" id="initiative1" value="60">
                        <label class="form-check-label" for="initiative1"> Bad </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="initiative" id="initiative2" value="70">
                        <label class="form-check-label" for="initiative2"> Poor </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="initiative" id="initiative3" value="80">
                        <label class="form-check-label" for="initiative3"> Average </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="initiative" id="initiative4" value="90">
                        <label class="form-check-label" for="initiative4"> Good </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="initiative" id="initiative5" value="100">
                        <label class="form-check-label" for="initiative5"> Excellent </label>
                    </div>
                </div>
            </div>

            <label>Teamwork</label>
            <div class="row mb-3">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="teamwork" id="teamwork1" value="60">
                        <label class="form-check-label" for="teamwork1"> Bad </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="teamwork" id="teamwork2" value="70">
                        <label class="form-check-label" for="teamwork2"> Poor </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="teamwork" id="teamwork3" value="80">
                        <label class="form-check-label" for="teamwork3"> Average </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="teamwork" id="teamwork4" value="90">
                        <label class="form-check-label" for="teamwork4"> Good </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="teamwork" id="teamwork5" value="100">
                        <label class="form-check-label" for="teamwork5"> Excellent </label>
                    </div>
                </div>
            </div>

            <label>Adaptability</label>
            <div class="row mb-3">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="adaptability" id="adaptability1" value="60">
                        <label class="form-check-label" for="adaptability1"> Bad </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="adaptability" id="adaptability2" value="70">
                        <label class="form-check-label" for="adaptability2"> Poor </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="adaptability" id="adaptability3" value="80">
                        <label class="form-check-label" for="adaptability3"> Average </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="adaptability" id="adaptability4" value="90">
                        <label class="form-check-label" for="adaptability4"> Good </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="adaptability" id="adaptability5" value="100">
                        <label class="form-check-label" for="adaptability5"> Excellent </label>
                    </div>
                </div>
            </div>

            <label>Communication</label>
            <div class="row mb-3">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="communication" id="communication1" value="60">
                        <label class="form-check-label" for="communication1"> Bad </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="communication" id="communication2" value="70">
                        <label class="form-check-label" for="communication2"> Poor </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="communication" id="communication3" value="80">
                        <label class="form-check-label" for="communication3"> Average </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="communication" id="communication4" value="90">
                        <label class="form-check-label" for="communication4"> Good </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="communication" id="communication5" value="100">
                        <label class="form-check-label" for="communication5"> Excellent </label>
                    </div>
                </div>
            </div>

            <label>Performance</label>
            <div class="row mb-3">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="performance" id="performance1" value="60">
                        <label class="form-check-label" for="performance1"> Bad </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="performance" id="performance2" value="70">
                        <label class="form-check-label" for="performance2"> Poor </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="performance" id="performance3" value="80">
                        <label class="form-check-label" for="performance3"> Average </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="performance" id="performance4" value="90">
                        <label class="form-check-label" for="performance4"> Good </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="performance" id="performance5"
                            value="100">
                        <label class="form-check-label" for="performance5"> Excellent </label>
                    </div>
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-modal-button wire:click="saveEvaluation"></x-modal-button>
        </x-slot>
    </x-modal>

    <script>
        window.addEventListener('close-modal',event=>{
            $("#evaluationModal").removeClass("in");
            $(".modal-backdrop").remove();
            $("#evaluationModal").hide();
        })
    </script>
</div>
