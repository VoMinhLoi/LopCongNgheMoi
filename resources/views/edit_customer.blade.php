<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <form action="{{ route('customer.update',$customer) }}" method="POST"> --}}
    <form action="{{ route('customer.update',$customer->id) }}" method="POST">
            @csrf
            <label for="" >EMAIL: </label>
            <br/>
            <input type="text" name="email" value="{{ $customer->email }}">
            <br/>
            <label for="">PHONE: </label>
            <br/>
            <input type="text" name="phone" value="{{ $customer->phone }}">
            <br/>
            <button type="submit">SUBMIT</button>
        </form>
    </body>
</body>
</html>