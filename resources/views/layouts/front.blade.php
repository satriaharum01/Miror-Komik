<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}} - {{$title}}</title>

    @include('layouts.front.css')

</head>
<body class="dark-background">
    @include('layouts.front.header')
    <main class="main">
        @yield('content')
    </main>
     <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Preloader -->
    <div id="preloader"></div>
    @include('layouts.front.footer')
    @include('layouts.front.js')
    @yield('js')
</body>
</html>