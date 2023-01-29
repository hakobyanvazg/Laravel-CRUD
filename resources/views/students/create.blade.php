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
        <form action="{{ url('student') }}" method="post">
            @csrf
            <label>Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
            <div>
                <span style="color:red;">
                    @error('name')
                        {{ $message }}
                    @enderror

                </span>
            </div>
            <label>Surname</label>
            <input type="text" name="surname" id="surname" class="form-control" value="{{old('surname')}}">
            <div>
                <span style="color:red;">
                    @error('surname')
                        {{ $message }}
                    @enderror

                </span>
            </div>
            <label>Age</label>
            <input type="number" name="age" id="age" class="form-control" value="{{old('age')}}">
            <div>
                <span style="color:red;">
                    @error('age')
                        {{ $message }}
                    @enderror

                </span>
            </div>
            <label>Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{old('address')}}">
            <div>
                <span style="color:red;">
                    @error('address')
                        {{ $message }}
                    @enderror

                </span>
            </div>
            <div>
                <input type="submit" value="Save" class="btn  btn-success">
            </div>
        </form>
    </div>
</body>

</html>
