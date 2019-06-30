<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>@yield('titulo')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('nexus/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('nexus/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('nexus/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('nexus/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('nexus/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{asset('nexus/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('nexus/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('nexus/vendors/flaticon/flaticon.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('nexus/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('nexus/css/responsive.css')}}">

    <style>
        .back-to-top{
                width: 35px; 
                height: 38px; 
                background: #252527; 

                display: block;            
                position: fixed;
                bottom: 0;
                right: 10px;
                margin-bottom: 20px;
                opacity:0.5;
            }

            .back-to-top .fa-long-arrow-up{
                font-size: 20px; 
                margin-top: 8px;
                color: white;
            }

            .back-to-top:hover {
                cursor: pointer;
                /*background-position: 0 -1px;*/
                opacity: 1;
            }
    </style>
    
</head>

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">

    @include('layout.includes.menu')

    
