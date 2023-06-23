<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    @include('layouts.partials._head')
</head>

<body>
    <!-- Primary Page Layout -->
    <div id="preloader"></div>

    {{-- @include('layouts.partials._headerSticky') --}}
    @include('layouts.partials._headerNav')


    <section id="content">
        @yield('content')
    </section>


    <!-- Modals -->
    @include('layouts.partials._modals')

    <!-- Switch Panel -->
    {{-- @include('layouts.partials._switchPanel') --}}


    <!-- JAVASCRIPT -->
    @include('layouts.partials._scripts')
    @stack('custom-scripts')
</body>

</html>
