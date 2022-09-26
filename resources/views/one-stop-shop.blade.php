@extends('layout')

@section('header')
    @include('parts.headers.header-one-stop-shop')
@endsection

@section('badges')
    @include('parts.badges')
@endsection

@section('one-stop-shop-teamextension')
    @include('parts.one-stop-shop.team-extension')
@endsection

@section('one-stop-shop-mobileapp')
    @include('parts.one-stop-shop.mobile-app')
@endsection

@section('one-stop-shop-webapp')
    @include('parts.one-stop-shop.web-app')
@endsection

@section('one-stop-shop-uxui')
    @include('parts.one-stop-shop.uxui')
@endsection

@section('one-stop-shop-discovery')
    @include('parts.one-stop-shop.discovery')
@endsection

@section('one-stop-shop-ai')
    @include('parts.one-stop-shop.ai')
@endsection

<?php $data=[
    'highlightTitle' => "Implement",
    'mainTitle' => " cutting-edge technology in your business!",
    'mainContent' => "The AI&ML solutions we have created allowed our clients to forge unstructured data into their business success! If you are still not sure about the implementation of algorithms in your business, we will help dispel your doubts.",
    'button' => true,
    'imageHref' => "images/blue-bar-happyman.webp"
]
?>
@section('blue-bar')
    @include('parts.blue-bar',$data)
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

