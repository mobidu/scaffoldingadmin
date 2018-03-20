<!DOCTYPE html>
<html>
    <head>
        <title>Simple & Clean Admin Template</title>
        <meta charset="utf-8">
        <meta content="ie=edge" http-equiv="x-ua-compatible">
        <meta content="Rentpico" name="keywords">
        <meta content="Rentpico" name="author">
        <meta content="Rentpico" name="description">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="{{ asset('app/images/favicon.png') }}" rel="shortcut icon">
        <link href="{{ asset('app/images/favicon.png') }}" rel="apple-touch-icon">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="{{ mix('app/css/assets.css') }}"/>
    </head>
    <body>
        <div id="main">
            <router-view></router-view>
        </div>
        <script type="text/javascript" src="{{ mix('app/js/vendor.js') }}"></script>
        <script type="text/javascript" src="{{ mix('app/js/assets.js') }}"></script>
    </body>
</html>

