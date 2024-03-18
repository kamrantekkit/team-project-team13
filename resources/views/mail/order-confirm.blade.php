<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h2>Order Details</h2>
<p>Name: {{$user_name}}</p>
<p>Address: <br>
@foreach($address as $line)
    {{ $line }}<br>
@endforeach
</p>

<table>
    <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Cost</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['quantity'] }}</td>
            <td>{{ $product['price'] }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
