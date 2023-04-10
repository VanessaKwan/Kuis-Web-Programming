<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('Judul')</title>
</head>
<body>
    <div class="text-[8vw] font-bold ml-[1vw] mt-[-2vw]">@yield('Judul')</div>

    @yield('Isi')

</body>
</html>
