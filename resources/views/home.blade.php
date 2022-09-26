@extends('layout')


<?php $data=[
    'bannerBackground' => "header-gradient",
    'imageHref' => "images/Mainpage-header.webp",
    'textTop' => "We're mDevelopers",
    'textFirst' => "Extend your team ",
    'textSecond' => "or build whole software project from scratch with us!",
    'clutchWidget' => 1,
    'buttonText' => "Contact us",
    'buttonHref' => "#"
]
?>

@section('header')
@include('parts.header-banner',$data)
@endsection

@section('our-service')
    @include('parts.our-service')
@endsection

@section('tech-stack')
    @include('parts.tech-stack')
@endsection

@section('cooperation')
    @include('parts.cooperation-model')
@endsection

@section('strong-sides')
    @include('parts.our-strong-sides')
@endsection

@section('successfull-projects')
    @include('parts.our-successfull-projects')
@endsection

@section('our-clients')
    @include('parts.our-clients')
@endsection

@section('testimonials')
    @include('parts.testimonials')
@endsection

@section('blog')
    @include('parts.our-blog')
@endsection

@section('contact-us')
    @include('parts.contact-us')
@endsection








