<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
   <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
   <style>
   .fa, .fas {
     font-family: 'Font Awesome 5 Free';
     font-weight: 900;
     font-size: 19px;
     padding: 3px;
  }
   </style>
   <style>
   .container {
     position: relative;
     width: 100%;
   }
   .body{
       background-color: #34b091;
   }
   .image {

     display: block;
     margin-left: auto;
     margin-right: auto;
     height:100%;
     width: 100%;
   }

   .topnav {
     overflow: hidden;
     background-color: #e9e9e9;

   }

   .topnav a {
     float: left;
     display: block;
     color: black;
     text-align: center;
     padding: 14px 16px;
     text-decoration: none;
     font-size: 17px;
   }

   .topnav a:hover {
     background-color: #ddd;
     color: black;
   }

   .topnav a.active {
     background-color: #2196F3;
     color: white;
   }

   .topnav input[type=text] {
     float: right;
     padding: 6px;
     margin-top: 8px;
     margin-right: 16px;
     border: none;
     font-size: 17px;
   }

   @media screen and (max-width: 600px) {
     .topnav a, .topnav input[type=text] {
       float: none;
       display: block;
       text-align: left;
       width: 100%;
       margin: 0;
       padding: 14px;
     }

     .topnav input[type=text] {
       border: 1px solid #ccc;
     }
   }


   .sidenav {
     height: 100%; /* Full-height: remove this if you want "auto" height */
     width: 160px; /* Set the width of the sidebar */
     position: fixed; /* Fixed Sidebar (stay in place on scroll) */
     z-index: 1; /* Stay on top */
     top: 1; /* Stay at the top */
     left: 1;
     background-color: #111; /* Black */
     overflow-x: hidden; /* Disable horizontal scroll */
     padding-top: 20px;
   }

   /* The navigation menu links */
   .sidenav a {
     padding: 6px 8px 6px 16px;
     text-decoration: none;
     font-size: 20px;
     color: #818181;
     display: block;
   }

   /* When you mouse over the navigation links, change their color */
   .sidenav a:hover {
     color: #f1f1f1;
   }

   /* Style page content */


   /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
   @media screen and (max-height: 450px) {
     .sidenav {padding-top: 15px;}
     .sidenav a {font-size: 18px;}
   }
   </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        online_medicine_shop
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
