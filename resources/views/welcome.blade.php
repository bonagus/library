<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta10
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dashboard</title>
    <!-- CSS files -->
    <link href="{!! asset('dist/css/tabler.min.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('dist/css/tabler-flags.min.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('dist/css/tabler-payments.min.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('dist/css/tabler-vendors.min.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('dist/css/demo.min.css') !!}" rel="stylesheet"/>
  </head>
  <body >
    <div class="page">
      <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark">
            <a href=".">
              <img src="{!! asset('dist/logo-white.svg') !!}" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
          </h1>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav pt-lg-3">
              <li class="nav-item">
                <a class="nav-link" href="./index.html" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Home
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </aside>
      <div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                  Overview
                </div>
                <h2 class="page-title">
                  Vertical layout
                </h2>
              </div>
              <!-- Page title actions -->
              <div class="col-12 col-md-auto ms-auto d-print-none">
                
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-deck row-cards">
              
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