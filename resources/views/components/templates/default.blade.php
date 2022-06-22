<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta10
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSS files -->
    <link href="{!! asset('dist/css/tabler.min.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('dist/css/tabler-flags.min.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('dist/css/tabler-payments.min.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('dist/css/tabler-vendors.min.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('dist/css/demo.min.css') !!}" rel="stylesheet"/>
  </head>
  <body >
    <div class="page">
        @include('components.templates.navigation')
        <div class="page-wrapper">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header d-print-none">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                {{ $pretitle }}
                            </div>
                            <h2 class="page-title">
                                {{ $title }}
                            </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-12 col-md-auto ms-auto d-print-none">
                            <!-- {{ $slot }} -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        {{ $slot }}
                    </div>
                </div>
            </div>
            <footer class="footer footer-transparent d-print-none">
            <div class="container-xl">
                <div class="row text-center align-items-center flex-row-reverse">
                
                </div>
            </div>
            </footer>
        </div>
    </div>
    <!-- Libs JS -->
    <script src="{ !! asset('dist/libs/apexcharts/dist/apexcharts.min.js') !! }" defer></script>
    <script src="{ !! asset('dist/libs/jsvectormap/dist/js/jsvectormap.min.js') !! }" defer></script>
    <script src="{ !! asset('dist/libs/jsvectormap/dist/maps/world.js') !! }" defer></script>
    <script src="{ !! asset('dist/libs/jsvectormap/dist/maps/world-merc.js') !! }" defer></script>
    <!-- Tabler Core -->
    <script src="{ !! asset('dist/js/tabler.min.js') !! }" defer></script>
    <script src="{ !! asset('dist/js/demo.min.js') !! }" defer></script>
  </body>
</html>