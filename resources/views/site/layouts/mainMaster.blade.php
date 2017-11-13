<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>
            @yield('title') :: Barddy Drinks - Get your drinks conveniently
        </title>

        <meta name="description" content="Barddy" />
        <meta name="keywords" content="barddy, drinks, kenya" />

        <meta name="author" content="Nikk"/>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>


        <script>
            window.Laravel = { csrfToken: '{{ csrf_token() }}'}
        </script>
        
    </head>
    
    <body class="big-store sticky-div">
        
        <div id="wrapper"> 

            <!-- Preloader -->
            <div class="preloader-it">
               <div class="la-anim-1"></div>
            </div>
            <!-- /Preloader -->


            @yield('page_css')


            @include('site.layouts.scriptsHeader')


            <div id="app">

                @yield('main_content')

            </div>
            

            @include('site.layouts.scriptsFooter')


            @yield('page_scripts')


            @include('site.layouts.partials.error_messages')

        </div>
        

    </body>

</html>
