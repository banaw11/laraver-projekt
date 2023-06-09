<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit employee</h1>

    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form action="{{ route('employees.update', ['employee' => $employee]) }}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name" id="name" value="{{ $employee->name }}">
        </div>
        
        <div>
            <label for="surname">Surname</label>
            <input type="text" name="surname" placeholder="Surname" id="surname" value="{{ $employee->surname }}">
        </div>

        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="E-mail" id="email" value="{{ $employee->email }}">
        </div>

        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>