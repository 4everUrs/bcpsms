<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activation Key</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5" style="width: 40%">
        <form action="{{route('activate')}}" method="POST">
            @csrf
            <label>Activation Key:</label>
            <input type="text" class="form-control" name="key">
            <button class="btn btn-primary float-end mt-2">Submit</button>
        </form>
    </div>
</body>
</html>