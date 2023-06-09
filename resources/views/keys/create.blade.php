<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add new key</h1>

    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form action="{{ route('keys.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="employee">Employee</label>
            <select name="employee_id" id="employee">
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }} {{ $employee->surname }}</option>
                @endforeach
            </select>
        </div>
        
        <div>
            <label for="key">Program key</label>
            <input type="text" name="key" placeholder="Program key" id="key">
        </div>

        <div>
            <label for="program_name">Program name</label>
            <input type="text" name="program_name" placeholder="Program name" id="program_name">
        </div>

        <div>
            <input type="submit" value="Add new employee">
        </div>
    </form>
</body>
</html>