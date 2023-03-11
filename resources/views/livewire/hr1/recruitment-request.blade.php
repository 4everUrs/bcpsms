<div>
    <x-slot name="header">
        <h1>Requests List</h1>
    </x-slot>

    <x-table title="Requests">
        <thead>
            <th class="text-center">No</th>
            <th class="text-center">Position</th>
            <th class="text-center">Slot</th>
            <th class="text-center">Salary</th>
            <th class="text-center">Action</th>
        </thead>
        <tbody>
            @foreach ($requests as $index => $request)
                <tr>
                    <td class="text-center">{{$index+1}}</td>
                    <td class="text-center">{{$request->position}}</td>
                    <td class="text-center">{{$request->slot}}</td>
                    <td class="text-center">{{$request->salary_min}} - {{$request->salary_max}}</td>
                    <td class="text-center">
                        @if ($request->status == 'Approved')
                            <button wire:click='approve({{$request->id}})' class="btn btn-secondary btn-sm" disabled>Approved</button>
                        @else
                            <button wire:click='approve({{$request->id}})' class="btn btn-primary btn-sm">Approve</button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-table>
</div>
