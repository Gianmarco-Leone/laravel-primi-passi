<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel First</title>
</head>

<body>

    <h1> {{$message}} </h1>

    <ul>
        @foreach ($features as $feature)
        <li>
            <a href="{{route("featurepage", ["index" => $loop->index])}}"> {{$feature}} </a>
        </li>
        @endforeach
    </ul>

</body>

</html>