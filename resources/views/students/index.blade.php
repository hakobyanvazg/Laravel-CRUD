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
    @if (Session::has('flash_message'))
        <div class="alert alert-success">
            <ul>
                <li>{!! Session::get('flash_message') !!}</li>
            </ul>
        </div>
    @endif

    <div class="my-3 mx-3">
        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm">Add New Student</a>
    </div>
    <div>
        <form method="get" action="{{ url('/search') }}" class="d-flex">

            <div>
                <input type="text" name="search_name" placeholder="Search" class="form-control">
            </div>
            <div>
                <input type="submit" value="Search" style="margin-left:5px;" class="btn btn-info">
            </div>
        </form>
    </div>
    <div class="table-responsive">


        <table class="table">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->surname }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->address }}</td>
                        <td>

                            <a href="{{ url('/student/' . $student->id) }}"><button
                                    class="btn btn-info btn-sm">View</button></a>
                            <a href="{{ url('/student/' . $student->id . '/edit') }}"><button
                                    class="btn btn-primary btn-sm">Edit</button></a>
                            <form method="POST" action="{{ url('/student' . '/' . $student->id) }}"
                                style="display:inline">
                                @method('DELETE')
                                @csrf
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
