
@extends('layout')

<?php $data=[
    'bannerBackground' => "header-gradient-blue",
    'imageHref' => "images/mdevelopersTeam.webp",
    'textTop' => "",
    'textFirst' => "We are a software development partner  ",
    'textSecond' => "focused on clients’ needs!",
    'clutchWidget' => 1,
    'buttonText' => "Contact us",
    'buttonHref' => "#"
]
?>

@section('header')
    @include('parts.header-banner',$data)
@endsection

@section('values-of-mdev')
    @include('parts.values-of-mdev')
@endsection

@section('testimonials-multiple')
    @include('parts.testimonials-multiple')
@endsection

@section('technology-hub')
    @include('parts.technology-hub',['imageHref' => "images/svg/poland-hub.svg"])
@endsection

@section('management-team')
    @include('parts.management-team')
@endsection

@section('we-are-mdevelopers')
    @include('parts.we-are-mdevelopers')
@endsection

@section('contact-us')
    @include('parts.contact-us')
@endsection
