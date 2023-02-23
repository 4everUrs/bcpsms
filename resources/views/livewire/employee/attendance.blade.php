<div>
    <x-slot name="header">
        <h1>Attendance</h1>
    </x-slot>

    <x-table title="Attendance">
        <thead>
            <th class="text-center align-middle">No</th>
            <th class="text-center align-middle">Date</th>
            <th class="text-center align-middle">Time In</th>
            <th class="text-center align-middle">Time Out</th>
            <th class="text-center align-middle">Rendered Hours</th>
        </thead>
        <tbody>
            @foreach ($attendances as $index => $attendance)
                <tr>
                    <td class="text-center align-middle">{{$index+1}}</td>
                    <td class="text-center align-middle">@date($attendance->created_at)</td>
                    <td class="text-center align-middle">@time($attendance->time_in)</td>
                    @if ($attendance->time_out)
                        <td class="text-center align-middle">@time($attendance->time_out)</td>
                    @else
                        <td class="text-center align-middle"></td>
                    @endif
                    <td class="text-center align-middle">{{$attendance->rendered_hours}} Hours</td>
                </tr>
            @endforeach
        </tbody>
    </x-table>  
</div>
