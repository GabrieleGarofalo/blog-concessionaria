<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Automobili</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    {{-- @vite(['resources/css/style.css']) --}}
</head>
<body class="corpo">
    <x-navbar/>
    <div class=" my-4">
        
        {{$slot}}
    </div>
    <x-footer/>
</body>
</html>
