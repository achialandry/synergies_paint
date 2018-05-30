<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Synergy Painting, BC, Canada</title>

    <meta name="description" content="Roofing, Waterproofing, Concrete, Building
Envelope Consulting Services in B.C, Vancouver. Proudly Serving Metro Vancouver, All Lower Mainland, and Fraser Valley Locations of B.C">

    <meta name="keywords" content="">



    <!-- Font Awesome Icons  -->
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">

    <!-- Carousel   -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="public/css/carousel.css" rel="stylesheet">

    <!-- AOS CSS scripts  -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="public/css/aos.css" rel="stylesheet">
    <link href="public/css/aos.css" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

    <!-- Custom CSS scripts  -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- flavicon -->
    <link rel="shortcut icon" href="{{{ asset('img-assets/favicon-16x16.png') }}}">

</head>
  <body data-spy="scroll" data-target=".navbar">
    <header>
        <!--Navbar justified centered links full width-->

      <nav  class="navbar navbar-expand-md navbar-dark fixed-top  bg-dark " id="my-nav-links">
          <div class="container">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarCollapse">
                <ul class="navbar-nav nav-fill justify-content-center w-100">
                  <li class="nav-item">
                    <a class="nav-link links active" v-on="click: myFilter" v-class="active: isActive" href="#landing-page">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link links" v-on="click: myFilter" v-class="active: isActive" href="#services-page">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link links" v-on="click: myFilter" v-class="active: isActive" href="#projects-page">Projects</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link links" v-on="click: myFilter" v-class="active: isActive" href="#about-page">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link links" v-on="click: myFilter" v-class="active: isActive" href="#contact-page">Contact</a>
                  </li>
                </ul>
              </div>
          </div>

      </nav>
  </header>
    <main role="main">
        <!--Main vue components go here -->
        <div class="mt-1" id="synergy_app">
            <Landing-page></landing-page>
            <services-layout></services-layout>
            <projects-layout></projects-layout>
            <about-layout></about-layout>
            <contact-layout></contact-layout>
            @include('inc.contact')
        </div>
    </main><!-- End Main Div-->



        <!-- Bootstrap core JavaScript
        ================================================== -->
        <script>
        new Vue({
              el: '#my-nav-links',

              data: {
                  isActive: false
              },

              methods: {
                myFilter: function(){
                    this.isActive = !this.isActive;
                }
              }
          });
        </script>
        <script src="/js/app.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        <script src="{{ asset('js/app.js') }}"></script>
        <script>window.jQuery || document.write('<script src="{{asset('js/jquery-slim.min.js')}}"><\/script>')</script>
        <script src="{{asset('js/fontawesome-all.min.js')}}"></script>

        <script src="{{asset('js/aos.js')}}"></script>

        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/mdb.min.js')}}"></script>

        <script src="{{asset('js/holder.min.js')}}"></script>
      </body>
    </html>
