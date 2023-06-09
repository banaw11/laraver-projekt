<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Keys</h1>
    <div>
        @if (session()->has('success'))
            <p>{{ session('success') }}</p>
        @endif
    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Employee</th>
            <th>Key</th>
            <th>Program name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($keys as $key )
            <tr>
                <td>{{ $key->id }}</td>
                <td>
                    @foreach ($employees as $employee)
                        @if ($employee->id == $key->employee_id)
                            {{ $employee->name }} {{ $employee->surname }}
                        @endif
                    @endforeach
                </td>
                <td>{{ $key->key }}</td>
                <td>{{ $key->program_name }}</td>
                <td>
                    <a href="{{ route('keys.edit', ['key' => $key]) }}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('keys.delete', ['key' => $key]) }}">
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