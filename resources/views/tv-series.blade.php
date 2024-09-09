<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <li>
            <a href="{{ route('home') }}"> Film </a>
        </li>
        <li>
            <a href="{{ route('tv-series') }}"> Serie Tv </a>
        </li>
    </ul>

    @if (count($tv_series) > 0)
    <h1>
        {{ $title }}
    </h1>
    <ul>
        @foreach ($tv_series as $tv_serie)
        <li>{{ $tv_serie }}</li>
        @endforeach
    </ul>

    @else
    <h1>
        Non ci sono film nella lista
    </h1>
    @endif
</body>

</html>