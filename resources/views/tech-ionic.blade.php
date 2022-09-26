@extends('layout')

@section('header')
    @include('parts.headers.header-ionic')
@endsection

@section('badges')
    @include('parts.badges')
@endsection

@section('successfull-projects')
    @include('parts.our-successfull-projects')
@endsection

<?php $data=[
    'highlightTitle' => "Check",
    'mainTitle' => "  how our process will work for you!",
    'mainContent' => "We approach each project individually, therefore, meet us at our Free Consultation and we will propose a process that best suits your needs.",
    'button' => true,
    'imageHref' => "images/blue-bar-happyman.webp"
]
?>
@section('blue-bar')
    @include('parts.blue-bar',$data)
@endsection

@section('tech-describe-section')
    @include('parts.tech-describe-sections.ionic')
@endsection

@section('what-we-can-do')
    @include('parts.what-we-can-do-6rows')
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
