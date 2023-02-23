<div>
    <x-slot name="header">
        <h1>New Hire On board</h1>
    </x-slot>
    
    <x-table title="Employee">
        <thead>
            <th class="text-center align-middle">No</th>
            <th class="text-center align-middle">Employee ID</th>
            <th class="text-center align-middle">Name</th>
            <th class="text-center align-middle">Email</th>
            <th class="text-center align-middle">Username</th>
            <th class="text-center align-middle">Position</th>
            <th class="text-center align-middle">Salary</th>
            <th class="text-center align-middle">Status</th>
            <th class="text-center align-middle">Action</th>
        </thead>
        <tbody>
            @foreach ($employees as $index => $employee)
                <tr>
                    <td class="text-center align-middle">{{$index+1}}</td>
                    <td class="text-center align-middle">{{$employee->id}}</td>
                    <td class="text-center align-middle">{{$employee->name}}</td>
                    <td class="text-center align-middle">{{$employee->email}}</td>
                    <td class="text-center align-middle">{{$employee->User->username}}</td>
                    <td class="text-center align-middle">{{$employee->Vacancy->position}}</td>
                    <td class="text-center align-middle">{{$employee->salary}}</td>
                    <td class="text-center align-middle">{{$employee->status}}</td>
                    <td class="text-center align-middle"><a wire:click='getData({{$employee->id}})' href="#collapseExample{{$index}}" data-toggle="collapse"><i class="bi bi-arrows-expand"></i></a></td>
                </tr>
                <tr>
                    <td colspan="10">
                        <div class="collapse" id="collapseExample{{$index}}" wire:ignore>
                           <div class="card card-body p-3">
                                <div class="row">
                                    <div class="col">
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9 mb-3">
                                                <x-input name="name" wire:model='name'></x-input>
                                            </div>
                                            <label for="inputText" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9 mb-3">
                                                <x-input name="email" wire:model="email"></x-input>
                                            </div>
                                            <label for="inputText" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9 mb-3">
                                                <x-input name="address" wire:model="address"></x-input>
                                            </div>
                                            <label for="inputText" class="col-sm-3 col-form-label">Phone</label>
                                            <div class="col-sm-9 mb-3">
                                                <x-input name="phone" wire:model="phone"></x-input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                       <div class="row mb-3">
                                            <label for="inputText" class="col-sm-3 col-form-label">SSS</label>
                                            <div class="col-sm-8 mb-3">
                                                <x-input name="sss" wire:model="sss"></x-input>
                                            </div>
                                            <label for="inputText" class="col-sm-3 col-form-label">Philhealth</label>
                                            <div class="col-sm-8 mb-3">
                                                <x-input name="philhealth" wire:model="philhealth"></x-input>
                                            </div>
                                            <label for="inputText" class="col-sm-3 col-form-label">Pagibig</label>
                                            <div class="col-sm-8 mb-3">
                                                <x-input name="pagibig" wire:model="pagibig"></x-input>
                                            </div>
                                            <label for="inputText" class="col-sm-3 col-form-label">Bank Account</label>
                                            <div class="col-sm-8 mb-3">
                                                <x-input name="bank" wire:model="bank"></x-input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-3 col-form-label">Insurance</label>
                                            <div class="col-sm-8 mb-3">
                                                <x-input name="insurance" wire:model="insurance"></x-input>
                                            </div>
                                            <label for="inputText" class="col-sm-3 col-form-label">Medical</label>
                                            <div class="col-sm-8 mb-3">
                                                <x-input name="medical" wire:model="medical"></x-input>
                                            </div>
                                            <label for="inputText" class="col-sm-3 col-form-label">Dental</label>
                                            <div class="col-sm-8 mb-3">
                                                <x-input name="dental" wire:model="dental"></x-input>
                                            </div>
                                            <label for="inputText" class="col-sm-3 col-form-label">Salary</label>
                                            <div class="col-sm-8 mb-3">
                                                <x-input name="salary" wire:model="salary"></x-input>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="p-3">
                                        <button wire:click="updateDate({{$employee->id}})" class="btn btn-primary float-end">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-table>
</div>
