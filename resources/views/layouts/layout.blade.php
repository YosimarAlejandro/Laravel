<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script href="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <script href="{{asset('js/bootstrap.js')}}"></script>
    
</head>
<body>
    @yield("content")


</body>
</html>