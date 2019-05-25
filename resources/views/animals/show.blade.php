<html>
    <head>
        <title>

        </title>
    </head>
    <body>

        @foreach($animals as $animal)
            <ul>
                <li>{{ $animal->name }}</li>
                <li>{{ $animal->age }}</li>
            </ul>
        @endforeach

    </body>
</html>