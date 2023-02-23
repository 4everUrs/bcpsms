<div>
    <x-slot name="header">
        <h1>Human Capital Management</h1>
    </x-slot>
    <button class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#requestModal">+ Request Worker</button>
    <x-table title="Human Capital Management">
        <thead>
            <th class="text-center align-middle">ID</th>
            <th class="text-center align-middle">Name</th>
            <th class="text-center align-middle">Email</th>
            <th class="text-center align-middle">Position</th>
            <th class="text-center align-middle">Schedule</th>
            <th class="text-center align-middle">Performance</th>
            <th class="text-center align-middle">Status</th>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td class="text-center">{{$employee->id}}</td>
                    <td class="text-center">{{$employee->name}}</td>
                    <td class="text-center">{{$employee->email}}</td>
                    <td class="text-center">{{$employee->Vacancy->position}}</td>
                    <td class="text-center">{{$employee->schedule}}</td>
                    @if ($employee->Perfomance->remarks == 'Excellent')
                        <td class="text-center text-success">{{$employee->Perfomance->remarks}}</td>
                    @elseif ($employee->Perfomance->remarks == 'Good')
                        <td class="text-center text-success">{{$employee->Perfomance->remarks}}</td>
                    @elseif ($employee->Perfomance->remarks == 'Average')
                        <td class="text-center text-primary">{{$employee->Perfomance->remarks}}</td>
                    @elseif ($employee->Perfomance->remarks == 'Poor')
                        <td class="text-center text-warning">{{$employee->Perfomance->remarks}}</td>
                    @elseif ($employee->Perfomance->remarks == 'Bad')
                        <td class="text-center text-danger">{{$employee->Perfomance->remarks}}</td>
                    @endif
                    <td class="text-center">{{$employee->status}}</td>
                </tr>
            @endforeach
        </tbody>
    </x-table>

    <x-modal id="requestModal">
        <x-slot name="head">Request Worker</x-slot>

        <x-slot name="body">
            <label>Position</label>
            <x-input name="position" wire:model="position"></x-input>
            <label>Slot</label>
            <x-input name="slot" wire:model="slot"></x-input>
            <label>Salary</label>
            <div class="row">
                <div class="col">
                    <label>Minimum</label>
                    <x-input name="salary_min" wire:model='salary_min'></x-input>
                </div>
                <div class="col">
                    <label>Maximum</label>
                    <x-input name="salary_max" wire:model='salary_max'></x-input>
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-modal-button wire:click="sendRequest"></x-modal-button>
        </x-slot>
    </x-modal>

    <script>
        window.addEventListener('close-modal',event=>{
            $("#requestModal").removeClass("in");
            $(".modal-backdrop").remove();
            $("#requestModal").hide();
        })
    </script>
</div>
