<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="{{asset('img/app/logo.png')}}"> 
        @include('layouts.head_link')
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="hold-transition sidebar-mini text-sm layout-fixed layout-navbar-fixed">
    {{-- <body class="dark-mode layout-fixed control-sidebar-slide-open sidebar-mini text-sm layout-navbar-fixed"> --}}      

        <div class="wrapper overflow-x-hidden">
        {{-- <x-banner /> --}}

        @include('layouts.navbar')
        @include('layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper p-1 ">
                {{ $slot }}
            </div>
        <!-- /.content-wrapper -->
        </div>
        <!-- ./wrapper -->
        @livewireScripts

        @include('layouts.sidebar-r')
        @include('layouts.footer')
        @include('layouts.footer_link')

        @stack('modals')
        @stack('scripts')

    </body>
</html>
