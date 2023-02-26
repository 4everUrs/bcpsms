<div>
    <x-slot name="header">
        <h1>Leave Management</h1>
    </x-slot>

    <x-table title="Application List">
        <thead>
            <th class="text-center align-middle">No</th>
            <th class="text-center align-middle">Employee ID</th>
            <th class="text-center align-middle">Name</th>
            <th class="text-center align-middle">Position</th>
            <th class="text-center align-middle">Type</th>
            <th class="text-center align-middle">Reason</th>
            <th class="text-center align-middle">Effective On</th>
            <th class="text-center align-middle">Status</th>
            <th class="text-center align-middle">Action</th>
        </thead>
        <tbody>
            @foreach ($applications as $index => $application)
                <tr>
                    <td class="text-center align-middle">{{$index+1}}</td>
                    <td class="text-center align-middle">{{$application->Employee->id}}</td>
                    <td class="text-center align-middle">{{$application->Employee->name}}</td>
                    <td class="text-center align-middle">{{$application->Employee->Vacancy->position}}</td>
                    <td class="text-center align-middle">{{$application->type}}</td>
                    <td class="text-center align-middle">{{$application->reason}}</td>
                    <td class="text-center align-middle">@date($application->from) - @date($application->to)</td>
                    <td class="text-center align-middle">{{$application->status}}</td>
                    <td class="text-center align-middle">
                        @if ($application->status == 'Approved')
                            <button class="btn btn-secondary btn-sm" disabled>Approved</button>
                        @elseif ($application->status == 'Denied')
                            <button class="btn btn-secondary btn-sm" disabled>Denied</button>
                        @else
                            <button wire:click="getID({{$application->id}})" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#approveModal"><i class="bi bi-check-lg"></i>Approve</button>
                            <button wire:click="getID({{$application->id}})" class="btn btn-sm btn-danger" data-toggle="modal"
                                data-target="#denyModal"><i class="bi bi-x-lg"></i>Deny</button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-table>

    <x-modal id="approveModal">
        <x-slot name="head">Approve Request</x-slot>
        <x-slot name="body">
            <h3>Are you sure?</h3>
        </x-slot>
        <x-slot name="footer">
            <x-modal-button wire:click='approve'></x-modal-button>
        </x-slot>
    </x-modal>
    <x-modal id="denyModal">
        <x-slot name="head">Deny Request</x-slot>
        <x-slot name="body">
            <h3>Are you sure?</h3>
        </x-slot>
        <x-slot name="footer">
            <x-modal-button wire:click='deny'></x-modal-button>
        </x-slot>
    </x-modal>

    <script>
        window.addEventListener('close-approve-modal',event=>{
            $("#approveModal").removeClass("in");
            $(".modal-backdrop").remove();
            $("#approveModal").hide();
        })
        window.addEventListener('close-deny-modal',event=>{
            $("#denyModal").removeClass("in");
            $(".modal-backdrop").remove();
            $("#denyModal").hide();
        })
    </script>
</div>
