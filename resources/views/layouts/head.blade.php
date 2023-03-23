<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Diamond Homes') }}</title>

    <link rel="stylesheet" href="{{ asset('css/vendor.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/content/dlogo.png') }}" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/content/dlogo.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/content/dlogo.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/content/dlogo.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/content/dlogo.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/content/dlogo.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/content/dlogo.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/content/dlogo.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/content/dlogo.png') }}" />
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/content/dlogo.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/content/dlogo.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/content/dlogo.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/content/dlogo.png')}}" />
 
         @yield('styles')

<style>
 
    .sidebar__logo-text{
        font-size: 12px;
    }
    canvas{
        height:  200px !important;
        width:  200px !important;
    }
    .mid{
        margin: auto;
        display: block;
    }
    input {
        -webkit-appearance: auto;
        background-color: white;
    }
</style>

