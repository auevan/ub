<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/broadcasting.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/shared/iconly.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>

    @include('components.sidebar')
    @yield('container')
    

@stack('js')
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/app.js"></script>

</body>

</html>
