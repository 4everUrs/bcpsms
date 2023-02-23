<div>
    <x-slot name="header">
        <h1>TimeSheet Management</h1>
    </x-slot>
    <x-table title="Attendance">
        <thead>
            <th class="">Month</th>
            <th class="">Year</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($monthly as $month)
            <tr>
                <td>{{Carbon\Carbon::parse($month->month)->format('F')}}</td>
                <td>{{Carbon\Carbon::parse($month->month)->format('Y')}}</td>
                <td style="width: 10%">
                    <a href="#collapseExample" data-toggle="collapse"><i class="bi bi-arrows-expand"></i></a>
                </td>
            </tr>
            <tr >
                <td colspan="3">
                    <div class="collapse" id="collapseExample" wire:ignore.self>
                        <table class="table table-striped">
                            <thead>
                                <th>From</th>
                                <th>To</th>
                                <th></th>
                            </thead>
                            <tbody>
                               @foreach ($month->Cutoff as $index => $cutoff)
                                   <tr>
                                        <td>{{$cutoff->start}}</td>
                                        <td>{{$cutoff->end}}</td>
                                        <td>
                                            <a wire:click="getData({{$cutoff->id}})" href="#cutoff{{$index}}" data-toggle="collapse"><i class="bi bi-arrows-expand"></i></a>   
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <div class="collapse" id="cutoff{{$index}}">
                                                <button class="btn btn-success btn-sm">Export</button>
                                                <div class="card card-body p-4">
                                                    
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <th class="text-center align-middle">Date</th>
                                                            <th class="text-center align-middle">ID No</th>
                                                            <th class="text-center align-middle">Name</th>
                                                            <th class="text-center align-middle">Time In</th>
                                                            <th class="text-center align-middle">Time Out</th>
                                                            <th class="text-center align-middle">Rendered Hours</th>
                                                        </thead>
                                                        <tbody>
                                                           @if ($attendances)
                                                               @foreach ($attendances as $attendance)
                                                                   <tr>
                                                                    <td class="text-center">@date($attendance->created_at)</td>
                                                                    <td class="text-center">{{$attendance->employee_id}}</td>
                                                                    <td class="text-center">{{$attendance->Employee->name}}</td>
                                                                    <td class="text-center">@time($attendance->time_in)</td>
                                                                    @if ($attendance->time_out)
                                                                        <td class="text-center">@time($attendance->time_out)</td>
                                                                    @else
                                                                        <td class="text-center">--/---/--</td>
                                                                    @endif
                                                                    
                                                                    <td class="text-center">{{$attendance->rendered_hours}} Hours</td>
                                                                </tr>
                                                               @endforeach
                                                           @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </x-table>
</div>
