<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>جرين جولد للمشروعات الزراعي</title>

    <!-- css -->

    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link href="{{ asset('public/css/medico/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/cubeportfolio/css/cubeportfolio.min.css')}}">
    <link href="{{ asset('public/css/medico/nivo-lightbox.css')}}" rel="stylesheet"/>
    <link href="{{ asset('public/css/medico/nivo-lightbox-theme/default/default.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('public/css/medico/owl.carousel.css')}}" rel="stylesheet" media="screen"/>
    <link href="{{ asset('public/css/medico/owl.theme.css')}}" rel="stylesheet" media="screen"/>
    <link href="{{ asset('public/css/medico/animate.css')}}" rel="stylesheet"/>
    <link href="{{ ('public/css/medico/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>


    <!-- boxed bg -->
    <link id="bodybg" href="{{ asset('public/bodybg/bg1.css')}}" rel="stylesheet" type="text/css"/>
    <!-- template skin -->
    <link id="t-colors" href="{{ asset('public/color/default.css')}}" rel="stylesheet">
    <style>
        #about-ol {
            list-style: none; /* Remove default bullets */
        }

        #about-ol li::before {
            content: "• ";  /* Add content: \2022 is the CSS Code/unicode for a bullet */
            color: darkgreen; /* Change the color */
            font-weight: bold; /* If you want it to be bold */
            display: inline-block; /* Needed to add space between the bullet and the text */
            width: 1em; /* Also needed for space (tweak if needed) */
            margin-right: -1em; /* Also needed for space (tweak if needed) */
        }
    </style>
 </head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
