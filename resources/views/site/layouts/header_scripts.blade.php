<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>doctor appointment</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- Stylesheets -->
    <link href="{{ url('site/css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ url('site/css/responsive.css') }}" rel="stylesheet">

    <!--Color Switcher Mockup-->
    <link href="{{ url('site/css/color-switcher-design.css') }}" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="{{ url('site/css/color-themes/default-theme.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ url('site/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ url('site/images/favicon.png') }}" type="image/x-icon">

    @if (App::getLocale() == 'ar')
    <link href="{{ url('site/css/style_rtl.css') }}" rel="stylesheet">

    @else
    <link href="{{ url('site/css/style.css') }}" rel="stylesheet">
    @endif
    <!-- Responsive -->

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
