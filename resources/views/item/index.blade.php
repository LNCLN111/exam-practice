<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Items</title>
    </head>
    <body>
        <h1>Items</h1>

        <ul>
            @foreach ($items as $item)
                <li>{{ $item->name }} - ${{ $item->price }}</li>
            @endforeach
        </ul>
    </body>
</html>