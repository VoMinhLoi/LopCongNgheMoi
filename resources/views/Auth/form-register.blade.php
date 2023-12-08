<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .alert-danger {
            color: red;
        }
    </style>
</head>
<body>
    <H1>Register</H1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="lname">name:</label><br>
        <input type="text" name="name"><br><br>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="fname">Email:</label><br>
        <input type="text" name="email"><br>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="lname">Password:</label><br>
        <input type="text" name="password"><br><br>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="submit" value="Submit">
    </form>
</body>
</html>