<div>
    <x-slot name="header">
        <h1>Timesheet Management</h1>
    </x-slot>

    <x-table title="Shifts and Schedule">
        <thead>
            <th class="text-center align-middle">ID No</th>
            <th class="text-center align-middle">Name</th>
            <th class="text-center align-middle">Position</th>
            <th class="text-center align-middle">Shift</th>
            <th class="text-center align-middle">Schedule</th>
            <th class="text-center align-middle">Action</th>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td class="text-center">{{$employee->id}}</td>
                    <td class="text-center">{{$employee->name}}</td>
                    <td class="text-center">{{$employee->Vacancy->position}}</td>
                    <td class="text-center">{{$employee->shift}}</td>
                    <td class="text-center">{{$employee->schedule}}</td>
                    <td class="text-center">
                        <button wire:click="getData({{$employee->id}})" data-toggle="modal" data-target="#timesheetModal" class="btn btn-primary btn-sm">Edit</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-table>

    <x-modal id="timesheetModal">
        <x-slot name="head">Time Sheet</x-slot>
        <x-slot name="body">
            <label>Shift</label>
            <div class="row">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="shift" id="shift" value="Day Shift">
                        <label class="form-check-label" for="shift"> Day Shift </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="shift" id="shift1" value="Night Shift">
                        <label class="form-check-label" for="shift1"> Night Shift </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" wire:model="shift" id="shift2" value="Flexi Time">
                        <label class="form-check-label" for="shift2"> Flexi Time </label>
                    </div>
                </div>
            </div>
            <label>Schedule</label>
            <div class="row">
                <div class="col">
                    <label>Start</label>
                    <x-input name="start" wire:model="start" type="time" value="07:00"></x-input>
                </div>
                <div class="col">
                    <label>End</label>
                    <x-input name="end" wire:model="end" type="time" value="07:00"></x-input>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-modal-button wire:click='updateData'></x-modal-button>
        </x-slot>
    </x-modal>

    <script>
        window.addEventListener('close-modal',event=>{
            $("#timesheetModal").removeClass("in");
            $(".modal-backdrop").remove();
            $("#timesheetModal").hide();
        });
    </script>
</div>
