<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Update Key</h1>

    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form action="{{ route('keys.update', ['key' => $key]) }}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="employee">Employee</label>
            <select name="employee_id" id="employee">
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}" @if ($key->employee_id == $employee->id) selected @endif>
                        {{ $employee->name }} {{ $employee->surname }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <div>
            <label for="key">Program key</label>
            <input type="text" name="key" placeholder="Program key" id="key" value="{{ $key->key }}">
        </div>

        <div>
            <label for="program_name">Program name</label>
            <input type="text" name="program_name" placeholder="Program name" id="program_name" value="{{ $key->program_name }}">
        </div>

        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>