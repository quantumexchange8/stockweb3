<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS -->
{{-- @if (request()->is('/')) --}}
{{-- @include('layouts.partials._headAnimated') --}}
{{-- @elseif (request()->is('private-banking/*') || request()->is('investment-management/*') || request()->is('investor-services/*')) --}}
{{-- @include('layouts.partials._head3dmenu') --}}
{{-- @elseif (request()->is('private-banking') || request()->is('investment-management') || request()->is('investor-services')) --}}
{{-- @endif --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/slider-base.css') }}" />
<link rel="stylesheet" href="{{ asset('css/slider-skeleton.css') }}" />
<link rel="stylesheet" href="{{ asset('css/slider-layout.css') }}" />
<link rel="stylesheet" href="{{ asset('css/slider-colorbox.css') }}" />
<link rel="stylesheet" href="{{ asset('css/slider-font-awesome.css') }}" />
<link rel="stylesheet" href="{{ asset('css/slider-jquery.custombox.css') }}">
<link rel="stylesheet" href="{{ asset('css/slider-retina.css') }}" />
<link rel="stylesheet" href="{{ asset('css/slider-project.css') }}" />
<link rel="stylesheet" href="{{ asset('css/vanward.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

<!-- Colors -->
<link rel="alternate stylesheet" type="text/css" href="{{ asset('css/colors/color-orange.css') }}" title="orange">
<link rel="alternate stylesheet" type="text/css" href="{{ asset('css/colors/color-green.css') }}" title="green">
<link rel="alternate stylesheet" type="text/css" href="{{ asset('css/colors/color-red.css') }}" title="red">
<link rel="alternate stylesheet" type="text/css" href="{{ asset('css/colors/color-blue.css') }}" title="blue">
<link rel="alternate stylesheet" type="text/css" href="{{ asset('css/colors/color-yellow.css') }}" title="yellow">

<!--[if lte IE 8]>
        <script src="js/html5.js"></script>
    <![endif]-->

<!-- Favicons -->
<link rel="shortcut icon" href="{{ asset('images/logo-new/favicon.png') }}">
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-touch-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-touch-icon-114x114.png') }}">
