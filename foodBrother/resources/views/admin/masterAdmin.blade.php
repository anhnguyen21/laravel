<!DOCTYPE html>
<html lang=""{{ str_replace('_', '-', app()->getLocale()) }}"">

<head>
    <meta charset="utf-8">
    <base href="{{asset('')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="public/img_food/logo.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <script src="public/js/chart.js/Chart.min.js"></script>

</head>

<body class="fix-header">
    <div id="wrapper">
        @include('../components/headerAdmin');
        @include('../components/sidebar')
        @yield('content');
    </div>
</body>

</html>
