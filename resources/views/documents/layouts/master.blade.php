<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app"></div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>