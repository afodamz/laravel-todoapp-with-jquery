<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Michael To-Do list</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
<div class="wrapper">
    @yield('main-content')
</div>
<script src="{{ url('assets/js/jquery.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('assets/js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.sparkline.min.js') }}"></script>
<script src="{{ url('assets/js/horizontal-timeline.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.steps.min.js') }}"></script>
<script src="{{ url('assets/js/main.js') }}"></script>
</body>

</html>
