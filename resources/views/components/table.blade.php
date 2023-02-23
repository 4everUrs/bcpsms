@props([
    'title',

])

<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        <div class="row mb-3">
            <div class="col-3">
                <div class="input-group">
                    <span class="input-group-text">Showing</span>
                    <select class="form-select">
                        <option value="5">5</option>
                    </select>
                    <span class="input-group-text">Entries</span>
                </div>
            </div>
            <div class="col"></div>
            <div class="col-3">
                <div class="input-group float-end">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                </div>
            </div>
        </div>
        <table class="table table-sm table-striped">
            {{$slot}}
        </table>
    </div>
</div>