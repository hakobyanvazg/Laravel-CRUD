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
    <div class="card" style="margin:20px;   ">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $student->name }}</h5>
            <h5 class="card-title">Surname: {{ $student->surname }}</h5>
            <p class="card-text">Age: {{ $student->age }}</p>
            <p class="card-text">Address: {{ $student->address }}</p>
        </div>
    </div>
</body>

</html>
