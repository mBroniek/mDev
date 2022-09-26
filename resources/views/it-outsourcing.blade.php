@extends('layout')

@section('header')
    @include('parts.headers.header-outsourcing',['bannerBackground'=>'header-gradient-orange'])
@endsection

@section('badges')
    @include('parts.badges')
@endsection

@section('what-we-can-do')
    @include('parts.what-we-can-do')
@endsection

<?php $dataProcess=[
    'headerPart1' => "Our",
    'headerPart2' => " outsouring process",
    'typeofProcess' =>'outsourcing-section'
]
?>

@section('process')
    @include('parts.process',$dataProcess)
@endsection

@section('expert-technologies')
    @include('parts.expert-technologies')
@endsection

<?php $data=[
    'highlightTitle' => "Start developing",
    'mainTitle' => " your mobile project with a trusted partner",
    'mainContent' => "Work with company that is 'more than a software development house' as said by Raphael Guper in his review.",
    'button' => true,
    'imageHref' => "images/blue-bar-happyman.webp"
]
?>
@section('blue-bar')
    @include('parts.blue-bar',$data)
@endsection

@section('strong-sides-expand')
    @include('parts.our-strong-sides-expand')
@endsection


@section('our-clients')
    @include('parts.our-clients')
@endsection

@section('successfull-projects')
    @include('parts.our-successfull-projects')
@endsection


@section('testimonials')
    @include('parts.testimonials')
@endsection

@section('faq')
    @include('parts.faq')
@endsection

@section('blog')
    @include('parts.our-blog')
@endsection

@section('contact-us')
    @include('parts.contact-us')
@endsection
