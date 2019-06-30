@extends('layout.default')

@section('titulo', 'Home')

@section('content')

<!--================Home Banner Area =================-->
@include('view.home.banner_area')
<!--================End Home Banner Area =================-->

<!--================Work Area =================-->
@include('view.home.work_area')
<!--================End Work Area =================-->

<!--================Made Life Area =================-->
@include('view.home.life_area')
<!--================End Made Life Area =================-->

<!--================Price Area =================-->
@include('view.home.price_area')
<!--================End Price Area =================-->

<!--================Testimonials Area =================-->
@include('view.home.testimonials_area')
<!--================End Testimonials Area =================-->

<!--================Screen Area =================-->
@include('view.home.screen_area')
<!--================End Screen Area =================-->

<!--================Impress Area =================-->
@include('view.home.impress_area')
<!--================End Impress Area =================-->

@endsection()