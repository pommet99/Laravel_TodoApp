<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- JS -->
   <script src="{{ asset('js/app.js') }}" defer></script>
   <script src="https://kit.fontawesome.com/7313ef8e8b.js" crossorigin="anonymous"></script>

   <!-- Style -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="{{ asset('../sass/app.scss') }}" rel="stylesheet" type="text/css" >
   


   <title>AOS test</title>
</head>

<body style="width: 100vw;height: 70vh;background: rgb(73,154,255);
background: radial-gradient(circle, rgba(73,154,255,1) 0%, rgba(114,219,244,1) 100%);">
   @yield('content')
</body>
</html>
