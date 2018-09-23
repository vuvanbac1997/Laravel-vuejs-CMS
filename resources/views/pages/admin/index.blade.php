<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin CRUD</title>
    <link rel="shortcut icon" href="/static/img/favicon.png">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{!! \URLHelper::asset('vendor/fontawesome-free/css/all.min.css', 'admin') !!}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{!! \URLHelper::asset('vendor/datatables/dataTables.bootstrap4.css', 'admin') !!}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{!! \URLHelper::asset('css/sb-admin.css', 'admin') !!}" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <div id="app">

    </div>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{!! \URLHelper::asset('js/sb-admin.min.js', 'admin') !!}"></script>
</body>
</html>