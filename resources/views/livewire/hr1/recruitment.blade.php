<div>
    <x-slot name="header">
        <h1>Recruitment</h1>
    </x-slot>
    <button class="btn btn-dark mb-2" data-toggle="modal" data-target="#newVancacy">+ New Vacancy</button>
    
    <x-table title="Vacancies">
        <thead>
            <th class="text-center align-middle">No</th>
            <th class="text-center align-middle">Position</th>
            <th class="text-center align-middle">Qualifications</th>
            <th class="text-center align-middle">Salary</th>
            <th class="text-center align-middle">Shifts</th>
            <th class="text-center align-middle">Benefits</th>
            <th class="text-center align-middle">Slot</th>
            <th class="text-center align-middle">Hired</th>
            <th class="text-center align-middle">Candidate</th>
            <th class="text-center align-middle">Status</th>
            <th class="text-center align-middle">Action</th>
        </thead>
        <tbody>
            @foreach ($vacancies as $index => $vacancy)
                <tr>
                    <td class="text-center align-middle">{{$index+1}}</td>
                    <td class="text-center align-middle">{{$vacancy->position}}</td>
                    <td class="align-middle">
                        @foreach ($vacancy->Qualification as $qualification)
                            <li>{{$qualification->qualification}}</li>
                        @endforeach
                    </td>
                    <td class="text-center align-middle">{{$vacancy->salary_min}} - {{$vacancy->salary_max}}</td>
                    <td class="align-middle">
                        @foreach ($vacancy->Shift as $shift)
                        <li>{{$shift->shift}}</li>
                        @endforeach
                    </td>
                    <td class="align-middle">
                        @foreach ($vacancy->benefit as $benefit)
                        <li>{{$benefit->benefit}}</li>
                        @endforeach
                    </td>
                    
                    <td class="text-center align-middle">{{$vacancy->quantity}}</td>
                    <td class="text-center align-middle">{{$vacancy->hired}}</td>
                    <td class="text-center align-middle">{{$vacancy->candidate}}</td>
                    <td class="text-center align-middle">{{$vacancy->status}}</td>
                    <td class="text-center align-middle">
                        <button wire:click="getPosition({{$vacancy->id}})" class="btn btn-primary btn-sm" data-target="#addCandidate" data-toggle="modal">Add Candidate</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </x-table>
    
    <x-modal id="newVancacy" maxWidth="md" wire:ignore.self>
       <x-slot name="head">New Vacancy</x-slot>

       <x-slot name="body">
            <div class="form-group">
                <label>Request</label>
                <select wire:model="requestID" class="form-select">
                    <option value="">Choose...</option>
                    @foreach ($requests as $request)
                        <option value="{{$request->id}}">{{$request->position}}</option>
                    @endforeach
                </select>
                <label>Position</label>
                <x-input wire:model="position" name="position" disabled></x-input>
                <label>Slot</label>
                <x-input wire:model="quantity" name="quantity" disabled></x-input>
                <label>Salary</label>
                <div class="row">
                    <div class="col">
                        <x-input wire:model="salary_min" name="salary_min" placeholder="Min" disabled></x-input>
                    </div>
                    <div class="col">
                        <x-input wire:model="salary_max" name="salary_max" placeholder="Max" disabled></x-input>
                    </div>
                </div>
                <label>Qualifications</label>
                <div class="input-group">
                    <input type="text" class="form-control" wire:model="qualification">
                    <span class="input-group-text" wire:click="addRow"><i class="bi bi-plus-square-fill text-danger"></i></span>
                </div>
                @error('qualification') <span class="text-danger">{{ $message }}</span><br> @enderror
                @foreach ($qualifications as $index => $qualification)
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" wire:model="qualifications.{{$index}}">
                        <span class="input-group-text" wire:click="removeRow({{$index}})"><i class="bi bi-dash-square-fill text-danger"></i></span>
                    </div>
                @endforeach
                <label class="mb-2">Shifts / Schedule</label>
                
                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input wire:model="shifts" value="Day Shift" class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2"> Day Shift </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input wire:model="shifts" value="Night Shift" class="form-check-input" type="checkbox" id="gridCheck21">
                            <label class="form-check-label" for="gridCheck21"> Night Shift </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input wire:model="shifts" value="Flexi Time" class="form-check-input" type="checkbox" id="gridCheck22">
                            <label class="form-check-label" for="gridCheck22"> Flexi Time </label>
                        </div>
                    </div>
                </div>
                <label class="mb-2">Benefits</label>
                
                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input wire:model="benefits" value="SSS" class="form-check-input" type="checkbox" id="gridCheck23">
                            <label class="form-check-label" for="gridCheck23"> SSS </label>
                        </div>
                        <div class="form-check">
                            <input wire:model="benefits" value="Philhealth" class="form-check-input" type="checkbox" id="gridCheck24">
                            <label class="form-check-label" for="gridCheck24"> Philhealth </label>
                        </div>
                        <div class="form-check">
                            <input wire:model="benefits" value="Pag-ibig" class="form-check-input" type="checkbox" id="gridCheck25">
                            <label class="form-check-label" for="gridCheck25"> Pagibig </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input wire:model="benefits" value="Insurance" class="form-check-input" type="checkbox" id="gridCheck26">
                            <label class="form-check-label" for="gridCheck26"> Insurance </label>
                        </div>
                        <div class="form-check">
                            <input wire:model="benefits" value="Medical" class="form-check-input" type="checkbox" id="gridCheck27">
                            <label class="form-check-label" for="gridCheck27"> Medical </label>
                        </div>
                        <div class="form-check">
                            <input wire:model="benefits" value="Dental" class="form-check-input" type="checkbox" id="gridCheck29">
                            <label class="form-check-label" for="gridCheck29"> Dental </label>
                        </div>
                    </div>
                </div>
            </div>
       </x-slot>

       <x-slot name="footer">
            <x-modal-button wire:click="addVancancy"></x-modal-button>
       </x-slot>
    </x-modal>

    <x-modal id="addCandidate" maxWidth="md">
        <x-slot name="head">Add Candidate</x-slot>

        <x-slot name="body">
           <div class="form-group">
            <label>Applied Position</label>
            <x-input disabled name="applied" wire:model="applied"></x-input>
                <div class="row">
                    <div class="col">
                        <label>First Name</label>
                        <x-input name="first_name" wire:model="first_name"></x-input>
                    </div>
                    <div class="col">
                        <label>Middle Initial</label>
                        <x-input name="middle_initial" wire:model="middle_initial"></x-input>
                    </div>
                    <div class="col">
                        <label>Last Name</label>
                        <x-input name="last_name" wire:model="last_name"></x-input>
                    </div>
                </div>
                <label>Email</label>
                <x-input name="email" wire:model="email" type="email"></x-input>
                <label>Phone</label>
                <x-input name="phone" wire:model="phone" type="text"></x-input>
                <label>Address</label>
                <x-input name="address" wire:model="address" type="text"></x-input>
                <div class="row">
                    <div class="col">
                        <label>Birth Date</label>
                        <x-input name="birthdate" type="date" wire:model="birthdate"></x-input>
                    </div>
                    <div class="col">
                        <label>Gender</label>
                        <select name="gender" wire:model="gender" class="form-select">
                            <option value="">Choose...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <label>Resume</label>
                <x-input name="resume" wire:model="resume" type="file"></x-input>
           </div>
        </x-slot>

        <x-slot name="footer">
            <x-modal-button wire:click="addCandidate"></x-modal-button>
        </x-slot>
    </x-modal>

    <script>
        window.addEventListener('close-modal',event=>{
           $("#newVancacy").removeClass("in");
            $(".modal-backdrop").remove();
            $("#newVancacy").hide();
        })
        window.addEventListener('close-modal-candidate',event=>{
           $("#addCandidate").removeClass("in");
            $(".modal-backdrop").remove();
            $("#addCandidate").hide();
        })
    </script>
</div>
