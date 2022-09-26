@extends('layout')



<?php $data=[
    'highlightTitle' => "Welcome to our blog - ",
    'mainTitle' => " mDev Talks!",
    'mainContent' => "",
    'button' => false,
    'imageHref' => "images/blue-bar-happyman.webp"
]
?>
@section('blue-bar')
    @include('parts.blue-bar',$data)
@endsection
@section('blog-list')
    @include('parts.blog.blog-list')
@endsection
@section('contact-us')
    @include('parts.contact-us')
@endsection

