@extends('layout')

<?php $data=[
    'highlightTitle' => "Case studies",
    'mainTitle' => " of our successful projects",
    'mainContent' => "",
    'button' => false,
    'imageHref' => "images/blue-bar-casestudies.webp"
]
?>
@section('blue-bar')
    @include('parts.blue-bar',$data)
@endsection

@section('blog-list-casestudies')
    @include('parts.blog-list-casestudies',$data)
@endsection

<?php $data2=[
    'highlightTitle' => "We believe",
    'mainTitle' => " the  design  should boost sales!",
    'mainContent' => "If you are searching for an experienced, UX and UI services provider, you hit the place! Let’s dive into your customer’s needs together!",
    'button' => true,
    'imageHref' => "images/blue-bar-happyman.webp"
]
?>
@section('blue-bar-expand')
    @include('parts.blue-bar-expand',$data2)
@endsection

@section('contact-us')
    @include('parts.contact-us')
@endsection



