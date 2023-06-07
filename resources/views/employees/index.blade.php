<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Employees</h1>
    <div>
        @if (session()->has('success'))
            <p>{{ session('success') }}</p>
        @endif
    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>E-mail</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($employees as $employee )
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->surname }}</td>
                <td>{{ $employee->email }}</td>
                <td>
                    <a href="{{ route('employees.edit', ['employee' => $employee]) }}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('employees.delete', ['employee' => $employee]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>