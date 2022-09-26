
@extends('layout')

@section('header')
    @include('parts.headers.header-discovery',['imageBackground'=>'header-gradient-gold'])
@endsection

@section('badges')
    @include('parts.badges')
@endsection

@section('image-text')
    @include('parts.image-text')
@endsection

@section('in-numbers')
    @include('parts.in-numbers')
@endsection


<?php $data=[
    'extraText' => "In order to turn your brilliant idea into a successful software product, you have to ask yourself many questions from the business, technology, and user experience domains. During our workshops, you will find answers to such questions as:",
    'imageHref' => "images/benefits-man.webp",
    'order1' => "",
    'order2' => ""
]
?>

@section('get-answers')
    @include('parts.get-answers',$data)
@endsection


@section('blue-list')
    @include('parts.blue-list',['imageHref' => 'images/case-study/ujji-5.webp'])
@endsection


@section('process-type2')
    @include('parts.process-type2')
@endsection

@section('successfull-projects')
    @include('parts.our-successfull-projects')
@endsection

@section('testimonials-single')
    @include('parts.testimonials-single')
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


