<!doctype html>
<html class="no-js" lang="zxx">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fomo Events</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/Logo.png">

  <!-- CSS here -->
  <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/slicknav.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/fontawesome-all.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/slick.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/nice-select.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/calvin.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@if (Route::is('register') || Route::is('login') || Route::is('events'))
    <link rel="stylesheet" href="{{URL::asset('client/css/custom.css')}}">
  @endif
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
</head>
