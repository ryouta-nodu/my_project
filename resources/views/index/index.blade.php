<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
</head>

<body>
    Hello Laravel!!

    <div id="app">
        <example-component></example-component>
    </div>

    <script src="/js/build/index/index.js"></script>
</body>

</html>