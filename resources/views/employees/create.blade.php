<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add new employee</h1>

    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form action="{{ route('employees.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name" id="name">
        </div>
        
        <div>
            <label for="surname">Surname</label>
            <input type="text" name="surname" placeholder="Surname" id="surname">
        </div>

        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="E-mail" id="email">
        </div>

        <div>
            <input type="submit" value="Add new employee">
        </div>
    </form>
</body>
</html>