<!doctype html>
<html lang="en-gb">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Caren - @yield('title')</title>

    @include('includes.links')
</head>
<body class="side-header">

<!-- Preloader -->
<div class="preloader">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- Preloader End -->


<div id="main-wrapper">
    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')
</div>

@include('includes.scripts')

</body>
</html>
