<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Simple Subscribers Api') }}</title>

    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
</head>

<body class="h-screen w-screen overflow-y-hidden bg-blue-100 font-sans text-gray-700">
    <div id="app" class="items-center justify-center flex" v-cloak>
        <app />
    </div>

    <script defer src="{{ asset(mix('js/manifest.js')) }}"></script>
    <script defer src="{{ asset(mix('js/vendor.js')) }}"></script>
    <script defer src="{{ asset(mix('js/app.js')) }}"></script>
</body>
