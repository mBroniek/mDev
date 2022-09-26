@extends('layout')

@section('header')
    @include('parts.headers.header-software-product')
@endsection

@section('badges')
    @include('parts.badges')
@endsection

@section('what-we-can-do')
    @include('parts.what-we-can-do-double')
@endsection

@section('successfull-projects')
    @include('parts.our-successfull-projects-expand')
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

@section('process-type2')
    @include('parts.process-type2')
@endsection

@section('strong-sides')
    @include('parts.our-strong-sides')
@endsection

@section('our-clients')
    @include('parts.our-clients')
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

