<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Website</title>

    <!-- Basic styling (you can replace with Tailwind/Bootstrap later) -->
     <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
     <link rel="stylesheet" href="{{ asset('css/home.css') }}">
     <link rel="stylesheet" href="{{ asset('css/about.css') }}">
     <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
     <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">

</head>


<body>

    @include('partials.navbar')

    <div class="content">
        @yield('content')
    </div>

    @include('partials.footer')

</body>
</html>