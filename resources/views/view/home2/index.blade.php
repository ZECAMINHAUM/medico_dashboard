@extends('layout.default')

@section('titulo', 'Home')

@section('content')

<!--================Home Banner Area =================-->
@include('view.home2.banner_area')
<!--================End Home Banner Area =================-->

<!--================Work Area =================-->
@include('view.home2.work_area')
<!--================End Work Area =================-->

<!--================Impress Area =================-->
@include('view.home2.impress_area')
<!--================End Impress Area =================-->

@endsection()