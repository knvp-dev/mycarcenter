<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My car center</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">

        <script>
        window.Laravel =  <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
        </script>

    </head>
    <body>

    	<div id="app">
    		@include('partials.menu')
        	@yield('content')
            @include('partials.footer')
        </div>

        <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBS9ljItAk2QseJKfD4aXtOdfFpBXpluI">
    </script>
        <script src="js/app.js"></script>
    </body>
</html>