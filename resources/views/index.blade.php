<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('includes.home.style')
    <title>Tugas UAS WEB</title>
</head>

<body>
    @include('includes.home.header')

    @yield('content')

    @include('includes.home.footer')

    @include('includes.home.script')
</body>

</html>
