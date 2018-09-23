<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
<div class="container">
    <div id="login">
        <Login></Login>

    </div>
</div>
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>
