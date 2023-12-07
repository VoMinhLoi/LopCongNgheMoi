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
    <form action="{{ route('customers.insert') }}" method="POST">
    {{-- <form action="/customers" method="POST"> --}}
        @csrf
        <label for="" >EMAIL: </label>
        <br/>
        <input type="text" name="email">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br/>
        <label for="">PHONE: </label>
        <br/>
        <input type="text" name="phone">
        @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br/>
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>