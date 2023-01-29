<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<body>
    <div style="width: 700px; margin: 0 auto ">
        <form action="{{ url('student/' . $student->id) }}" method="post">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{ $student->id }}">
            <label>Name</label>
            <input type="text" name="name" id="name" value="{{ $student->name }}" class="form-control">
            <label>Surname</label>
            <input type="text" name="surname" id="surname" value="{{ $student->surname }}" class="form-control">
            <label>Age</label>
            <input type="number" name="age" id="age" value="{{ $student->age }}" class="form-control">
            <label>Address</label>
            <input type="text" name="address" id="address" value="{{ $student->address }}" class="form-control">
            <input type="submit" value="Save" class="btn  btn-success">

        </form>
    </div>
</body>

</html>
