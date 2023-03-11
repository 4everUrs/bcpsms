<div>
    <div class="container pt-5" style="width: 50%">
        <div class="container-xs mt-5">
            <div class="card card-primary">
                <div class="card-body">
                    <h5 class="card-title">Attendance</h5>
                    <label>Employee ID</label><br>
                    <input wire:model='employee_id' type="text" class="form-control mb-3">
                    <button wire:click='search' class="btn btn-primary float-end">Search</button>
                </div>
            </div>
            @if ($employee_data)
                <div class="card mt-3 d-none" id="employee_data">
                    <div class="card-body">
                        <h5 class="card-title">Employee</h5>
                        <label>Employee ID</label>
                        <input wire:model="employee_id" type="text" class="form-control" disabled>
                        <label>Name</label>
                        <input wire:model="employee_name" type="text" class="form-control" disabled>
                        <div class="button-group mt-3">
                           
                            <button wire:click="timein" class="btn btn-primary">Time In</button>
                            <button wire:click="time_out" class="btn btn-danger">Time Out</button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <script>
        window.addEventListener('open-modal',event=>{
               var data = document.getElementById('employee_data')
               data.classList.remove('d-none');
            })
    </script>
</div>
