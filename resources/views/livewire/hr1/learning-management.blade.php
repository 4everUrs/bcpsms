<div>
    <x-slot name="header">
        <h1>Learning / Training Management</h1>
    </x-slot>

    <x-table title="Learning / Training">
        <thead>
            <th class="text-center align-middle">No</th>
            <th class="text-center align-middle">Position</th>
            <th class="text-center align-middle">Name</th>
            <th class="text-center align-middle">Age</th>
            <th class="text-center align-middle">Gender</th>
            <th class="text-center align-middle">Resume</th>
            <th class="text-center align-middle">Exam</th>
            <th class="text-center align-middle">Training</th>
            <th class="text-center align-middle">Remarks</th>
            <th class="text-center align-middle">Action</th>
        </thead>
        <tbody>
            @forelse ($trainings as $index => $training)
                <tr>
                    <td class="text-center align-middle">{{$index+1}}</td>
                    <td class="text-center align-middle">{{$training->Candidate->Vacancy->position}}</td>
                    <td class="text-center align-middle">{{$training->Candidate->name}}</td>
                    <td class="text-center align-middle">{{$training->Candidate->age}}</td>
                    <td class="text-center align-middle">{{$training->Candidate->gender}}</td>
                    <td class="text-center align-middle">{{$training->Candidate->resume}}</td>
                    <td class="text-center align-middle">{{$training->exam}}</td>
                    <td class="text-center align-middle">{{$training->training}}</td>
                    <td class="text-center align-middle">{{$training->remarks}}</td>
                    <td class="text-center align-middle">
                        <button wire:click='getId({{$training->id}})' class="btn btn-primary btn-sm" data-toggle="modal" data-target="#evaluate">Evaluate</button>
                    </td>
                </tr>
            @empty
                
            @endforelse
        </tbody>
    </x-table>

    <x-modal id="evaluate">
        <x-slot name="head">Evaluation</x-slot>

        <x-slot name="body">
            <div class="form-group">
                <label>Exam</label>
                <div class="row">
                    <div class="col">
                        <div class="form-check"> <input id="gridRadios1" wire:model='exam' class="form-check-input" type="radio" value="Passed" checked="">
                            <label class="form-check-label" for="gridRadios1"> Passed </label></div>
                    </div>
                    <div class="col">
                        <div class="form-check"> <input id="gridRadios11" wire:model='exam' class="form-check-input" type="radio" value="Failed" checked="">
                            <label class="form-check-label" for="gridRadios11"> Failed </label></div>
                    </div>
                </div>
                <label>Training</label>
                <div class="row">
                    <div class="col">
                        <div class="form-check"> <input id="gridRadios12" wire:model='training' class="form-check-input" type="radio" value="Passed"
                                checked="">
                            <label class="form-check-label" for="gridRadios12"> Passed </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check"> <input id="gridRadios13" wire:model='training' class="form-check-input" type="radio" value="Failed"
                                checked="">
                            <label class="form-check-label" for="gridRadios13"> Failed </label>
                        </div>
                    </div>
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-modal-button wire:click="evaluate"></x-modal-button>
        </x-slot>
    </x-modal>

    <script>
        window.addEventListener('close-modal',event=>{
            $("#evaluate").removeClass("in");
            $(".modal-backdrop").remove();
            $("#evaluate").hide();
        })
    </script>
</div>
