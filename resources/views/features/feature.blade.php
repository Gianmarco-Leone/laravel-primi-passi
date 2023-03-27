<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Name</title>

     {{-- TAILWIND --}}
     <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <div class="max-w-screen-lg mx-auto">

        <h1 class="text-5xl text-center my-5">{{$feature}}</h1>

        <h3 class="text-md text-center font-bold text-indigo-400">
            <a href="{{route("homepage")}}">
                Torna alla Home
            </a>
        </h3>

    </div>

</body>
</html>