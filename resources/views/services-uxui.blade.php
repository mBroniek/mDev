@extends('layout')

@section('header')
    @include('parts.headers.header-uxui')
@endsection

@section('badges')
    @include('parts.badges')
@endsection

@section('successfull-projects')
    @include('parts.our-successfull-projects-expand')
@endsection

@section('what-we-can-do')
    @include('parts.what-we-can-do-1row')
@endsection

<?php $data=[
    'highlightTitle' => "We believe",
    'mainTitle' => "  the  design  should boost sales!",
    'mainContent' => "If you are searching for an experienced, UX and UI services provider, you hit the place! Let’s dive into your customer’s needs together!",
    'button' => true,
    'imageHref' => "images/blue-bar-happyman.webp"
]
?>
@section('blue-bar')
    @include('parts.blue-bar',$data)
@endsection

@section('tools-we-use')
    @include('parts.tools-we-use')
@endsection

@section('strong-sides')
    @include('parts.our-strong-sides')
@endsection

@section('our-clients')
    @include('parts.our-clients')
@endsection

<?php $data2=[
    'highlightTitle' => "We believe",
    'mainTitle' => "  the  design  should boost sales!",
    'mainContent' => "If you are searching for an experienced, UX and UI services provider, you hit the place! Let’s dive into your customer’s needs together!",
    'button' => true,
    'imageHref' => "images/blue-bar-happyman.webp"
]
?>
@section('blue-bar-expand')
    @include('parts.blue-bar-expand',$data2)
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
