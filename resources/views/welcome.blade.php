<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        social share links
    </h1>
    <ul>
        @foreach ($SocialShare as $key => $item)
        <li>
            <a href="{{ $item }}">{{ $key }}</a>
        </li>
        @endforeach
    </ul>
</body>
</html>