<div>
    <x-slot name="header">
        <h1>Leave Management</h1>
    </x-slot>
    <button class="btn btn-success" data-toggle="modal" data-target="#requestModal">+Request</button>
    <x-table title="Leave Management">
        <thead>
            <th class="text-center align-middle">No</th>
            <th class="text-center align-middle">Employee ID</th>
            <th class="text-center align-middle">Name</th>
            <th class="text-center align-middle">Position</th>
            <th class="text-center align-middle">Type</th>
            <th class="text-center align-middle">Reason</th>
            <th class="text-center align-middle">Effective On</th>
            <th class="text-center align-middle">Status</th>
        </thead>
        <tbody>
            @foreach ($requests as $index => $request)
                <tr>
                    <td class="text-center align-middle">{{$index+1}}</td>
                    <td class="text-center align-middle">{{$request->employee_id}}</td>
                    <td class="text-center align-middle">{{$request->Employee->name}}</td>
                    <td class="text-center align-middle">{{$request->Employee->Vacancy->position}}</td>
                    <td class="text-center align-middle">{{$request->type}}</td>
                    <td class="text-center align-middle">{{$request->reason}}</td>
                    <td class="text-center align-middle">@date($request->from) - @date($request->to)</td>
                    <td class="text-center align-middle">{{$request->status}}</td>
                </tr>
            @endforeach
        </tbody>
    </x-table>

    <x-modal id="requestModal">
        <x-slot name="head">Request for Leave</x-slot>

        <x-slot name="body">
            <div class="form group">
                <label>Type</label>
                <select wire:model="type" class="form-select">
                    <option>Choose..</option>
                    <option>Abcense Leave</option>
                    <option>Sick Leave</option>
                    <option>Vacation Leave</option>
                    <option>Maternity Leave</option>
                    <option>Service Incentive Leave</option>
                    <option>Paternity Leave</option>
                </select>
                <label>From</label>
                <x-input wire:model="from" type="date" name="from"></x-input>
                <label>To</label>
                <x-input wire:model="to" type="date" name="to"></x-input>
                <label>Reason</label>
                <textarea wire:model="reason" name="reason" rows="4" class="form-control"></textarea>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-modal-button wire:click="sendRequest"></x-modal-button>
        </x-slot>
    </x-modal>

    <script>
        window.addEventListener('close-candidate',event=>{
            $("#requestModal").removeClass("in");
            $(".modal-backdrop").remove();
            $("#requestModal").hide();
        })
    </script>
</div>
