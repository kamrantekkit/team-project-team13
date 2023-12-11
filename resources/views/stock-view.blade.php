tml>
<body>

@foreach($records as $record)
    <form method='post' action='{{ route('stock.update', ['id' => $record['id']]) }}'>
        @csrf
        @method('patch')
        <p>Product: {{ $record['name'] }}</p>
        <p>Current Stock: {{ $record->stock->quantity }}</p>
        <input type='hidden' name='product_id' value='{{ $record['id'] }}'>
        <label for='new_stock'>New Stock Amount:</label>
        <input type='number' name='new_stock' id='new_stock' required>
        <input type='submit' name="update_stock" value='Update Stock' >
    </form>
@endforeach

</body>
