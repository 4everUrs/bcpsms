<div>
    <x-slot name="header">
        <h1>Payroll</h1>
    </x-slot>
    <button class="btn btn-success mb-3" data-toggle="modal" data-target="#newPayroll">+ New Payroll</button>
    <x-table title="Payroll">
        <thead>
            <th>Month</th>
            <th>From</th>
            <th>To</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($payrolls as $index => $payroll)
                <tr>
                    <td>{{$payroll->MonthlyAttendance->month}}</td>
                    <td>{{$payroll->CutoffAttendance->start}}</td>
                    <td>{{$payroll->CutoffAttendance->end}}</td>
                    <td class="text-center">
                        <a wire:click="getID({{$payroll->id}})" href="#data{{$index}}" data-toggle="collapse"><i class="bi bi-arrows-expand"></i></a>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <div class="collapse p-4" id="data{{$index}}" wire:ignore.self>
                            
                            <div class="card p-3">
                                
                                <div class="card-body">
                                    <button class="btn btn-sm btn-success"> <i class="bi bi-file-earmark-pdf-fill"></i> Export</button>
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#importData"> <i class="bi bi-download"></i> Import Attendance</button>
                                    <button class="btn btn-sm btn-secondary"> <i class="bi bi-telegram"></i> Send Payslip</button>
                                    <table class="table table-sm table-striped">
                                        <thead>
                                            <th class="text-center">Employee ID</th>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Total Hours</th>
                                            <th class="text-center">Net Salary</th>
                                            <th class="text-center">Benefits</th>
                                            <th class="text-center">Tax</th>
                                            <th class="text-center">Overtime</th>
                                            <th class="text-center">Gross Salary</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($payslips as $payslip)
                                                <tr>
                                                    <td class="text-center align-middle">{{$payslip->employee_id}}</td>
                                                    <td class="text-center align-middle">{{$payslip->CutoffAttendance->start}} - {{$payslip->CutoffAttendance->end}}</td>
                                                    <td class="text-center align-middle">{{$payslip->Employee->name}}</td>
                                                    <td class="text-center align-middle">{{$payslip->total_hours}}</td>
                                                    <td class="text-center align-middle">@money($payslip->net_salary)</td>
                                                    <td class=" align-middle">
                                                        <ul>
                                                            <li>SSS: {{$payslip->sss}}</li>
                                                            <li>Philhealth: {{$payslip->philhealth}}</li>
                                                            <li>Pagibig: {{$payslip->pagibig}}</li>
                                                        </ul>
                                                    </td>
                                                    <td class="text-center align-middle">@money($payslip->tax)</td>
                                                    <td class="text-center align-middle">@money($payslip->over_time)</td>
                                                    <td class="text-center align-middle">@money($payslip->gross_salary)</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-table>

    <x-modal id="newPayroll">
        <x-slot name="head">Add Payroll</x-slot>

        <x-slot name="body">
            <label>Month</label>
            <select class="form-select" wire:model="month">
                <option value="">Choose...</option>
                @foreach ($monthly as $month)
                   <option value="{{$month->id}}">{{$month->month}}</option>
                @endforeach
            </select>
            <label>Date</label>
            <select class="form-select">
                <option value="">Choose...</option>
               @if (!empty($cutoffs))
                    @foreach ($cutoffs as $cutoff)
                        <option value="">{{$cutoff->start}} - {{$cutoff->end}}</option>
                    @endforeach
               @else
                   
               @endif
            </select>
        </x-slot>

        <x-slot name="footer">
            <x-modal-button wire:click='addPayroll'></x-modal-button>
        </x-slot>
    </x-modal>

    <x-modal id="importData">
        <x-slot name="head">Import Attendance</x-slot>
        <x-slot name="body">
            <h1>Are you sure?</h1>
        </x-slot>
        <x-slot name="footer">
            <x-modal-button wire:click='createPayslip'></x-modal-button>
        </x-slot>
    </x-modal>
</div>
