<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <a href="/customers/create">Create customer</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ($customer as $item)
        <tr>
            <td>
                <a href="{{ route('customer.show', $item->id) }}">
                    {{ $item->id }}
                </a>
            </td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>
                <a href="{{ route('customer.edit', $item->id) }}">
                    Edit
                </a>
            </td>
            <td>
                <a href="{{ route('customer.delete', $item->id) }}">
                    Delete
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>