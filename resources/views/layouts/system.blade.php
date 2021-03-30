<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
    <script src="{{ asset('js/app.js') }}" defer></script>

   
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
  .btn-center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 38%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  width:50%;
  height:40px;
  background-color:red;
}
.centering{
    margin: 10px;
    top: 50%;
   
    
  transform: translate(-7%, 50%);
}
    </style>
</head>
<body>
    <div id="app">
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
