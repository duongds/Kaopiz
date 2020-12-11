<html><head>
    <title>App name - @yield('title', 'Home Page')</title>
</head>
<body>
    @section('sidebar')
    @include('Layouts.Header')
    @include('Layouts.Nav')
    @include('Layouts.Footer')
    @show
    <div class='container'>
        @yield('content')
    </div>
</body>
</html>