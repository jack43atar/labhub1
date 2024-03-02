<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? config('app.name', 'Telcron') }}</title>
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('libs/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobility-services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/business-messaging.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('css/services.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('libs/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu_items.css')}}">

    @yield('css')

    <script>
        window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        'baseUrl'=>env('APP_URL'),]) !!};
    </script>
</head>
<body>