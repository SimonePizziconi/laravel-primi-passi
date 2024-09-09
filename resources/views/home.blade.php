<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @if (count($movies) > 0)
    <h1>
        {{ $title }}
    </h1>
    <ul>
        @foreach ($movies as $movie)
        <li>{{ $movie }}</li>
        @endforeach
    </ul>

    @else
    <h1>
        Non ci sono film nella lista
    </h1>
    @endif
</body>

</html>