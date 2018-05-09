<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('custom-meta')
    <title>@yield('title')</title>
@include('dev.styles')
@yield('header-styles')
</head>

<body>
@yield('content')
@yield('custom-scripts')
</body>
</html>
