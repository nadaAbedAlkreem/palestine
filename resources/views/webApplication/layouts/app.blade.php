<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{__('dashboard.Palestine_Educational_Society_for_Environmental_Protection')}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
 		<meta name="current-lang" content="{{ app()->getLocale() }}">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="{{__('dashboard.Palestine_Educational_Society_for_Environmental_Protection')}}" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="icon" href="{{ asset('images/palestine_.png') }}" type="image/x-icon" />
  <title>Association</title>
    @if (app()->getLocale() === 'en')
         @include('webApplication.assets.css_en')

    @else
    @include('webApplication.assets.css')

     @endif
 
  </head>
  <body>

  @include('webApplication.components.header')


  @yield('web_content')

  @include('webApplication.components.footer')

  @include('webApplication.assets.js')
  </body>
  </html>

