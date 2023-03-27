<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel First</title>

    {{-- TAILWIND --}}
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <div class="max-w-screen-lg	 mx-auto">

        <h1 class="text-5xl text-center my-5"> {{$message}} </h1>
    
        <nav class="flex justify-center space-x-4 bg-indigo-400">
            @foreach ($features as $feature)
            
            <a href="{{route("featurepage", ["index" => $loop->index])}}" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900"> {{$feature}} </a>
    
            @endforeach
            
        </nav>

    </div>


</body>

</html>