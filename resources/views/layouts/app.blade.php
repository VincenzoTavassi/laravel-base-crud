<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      @vite('resources/js/app.js')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @include('partials._navbar')
    </header>
    <main>
    <div class="container">
        <h1 class="my-3 text-center">@yield('title')</h1>
        
        @yield('main-content')
    
    </div>
</main>
</body>
</html>