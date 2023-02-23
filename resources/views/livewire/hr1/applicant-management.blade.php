<div>
    <x-slot name="header">
        <h1>Applicant Management</h1>
    </x-slot>
    <x-table title="Applicant">
        <thead>
            <th class="text-center align-middle">No</th>
            <th class="text-center align-middle">Position</th>
            <th class="text-center align-middle">Name</th>
            <th class="text-center align-middle">Email</th>
            <th class="text-center align-middle">Gender</th>
            <th class="text-center align-middle">Age</th>
            <th class="text-center align-middle">Birthdate</th>
            <th class="text-center align-middle">Resume</th>
            <th class="text-center align-middle">Status</th>
            <th class="text-center align-middle">Action</th>
        </thead>
        <tbody>
            @forelse ($candidates as $index => $candidate)
                <tr>
                    <td class="text-center align-middle">{{$index+1}}</td>
                    <td class="text-center align-middle">{{$candidate->Vacancy->position}}</td>
                    <td class="text-center align-middle">{{$candidate->name}}</td>
                    <td class="text-center align-middle">{{$candidate->email}}</td>
                    <td class="text-center align-middle">{{$candidate->gender}}</td>
                    <td class="text-center align-middle">{{$candidate->age}}</td>
                    <td class="text-center align-middle">{{$candidate->birthdate}}</td>
                    <td class="text-center align-middle">{{$candidate->resume}}</td>
                    <td class="text-center align-middle">{{$candidate->status}}</td>
                    <td class="text-center align-middle">
                        @if ($candidate->status == 'Pending')
                            <button wire:click="getId({{$candidate->id}})" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#setInterview">Set Interview</button>
                        @elseif ($candidate->status == 'Interviewing')
                            <button wire:click="approve({{$candidate->id}})" class="btn btn-success btn-sm">Approve</button>
                            <button wire:click="deny({{$candidate->id}})" class="btn btn-danger btn-sm">Denied</button>
                        @elseif ($candidate->status == 'Denied')
                                <button class="btn-secondary btn btn-sm" disabled>Denied</button>
                        @elseif ($candidate->status == 'Approved')
                                <button class="btn-secondary btn btn-sm" disabled>Approved</button>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-center align-middle" colspan="9">No Record Found</td>
            
                    </td>
                </tr>
            @endforelse
        </tbody>
    </x-table>

    <x-modal id="setInterview">
        <x-slot name="head">Interview Schedule</x-slot>

        <x-slot name="body">
            <div class="form-group">
                <label>Venue</label>
                <x-input name="venue" wire:model="venue"></x-input>
                <label>Date</label>
                <x-input name="date" wire:model="date" type="date"></x-input>
                <label>Time</label>
                <x-input name="time" wire:model="time" type="time" value="00:00:00"></x-input>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-modal-button wire:click="setInterview"></x-modal-button>
        </x-slot>
    </x-modal>

    <script>
        window.addEventListener('close-modal',event=>{
        $("#setInterview").removeClass("in");
        $(".modal-backdrop").remove();
        $("#setInterview").hide();
        })
    </script>
</div>
