@extends('layout')


<?php $headerDetails=[
    'imageBackground' => "header-gradient-ujji",
    'imageHeader' => "images/case-study/ujji-header.webp",
    'headerColor' => '-purple'
]
?>

@section('header')
    @include('parts.headers.header-casestudy-ujji', $headerDetails)
@endsection

@section('project-details')
    @include('parts.project-details',['imageHref' => "images/case-study/ujji-4.webp"])
@endsection

@section('parallax')
    @include('parts.parallax',['imageHref' => "images/case-study/ujji-3.webp"])
@endsection

@section('solutions-result')
    @include('parts.solutionresult',['imageHref' => "images/case-study/ujji-2.webp"])
@endsection

@section('parallax-2')
    @include('parts.parallax',['imageHref' => "images/case-study/ujji-4.webp"])
@endsection

@section('benefits')
    @include('parts.benefits',['imageHref' => "images/case-study/ujji-5.webp"])
@endsection

@section('what-clients-say')
    @include('parts.what-clientssay',['imageHref' => "images/case-study/ujji-client.webp"])
@endsection

@section('other-successfull-projects')
    @include('parts.other-successfull-projects',['imageHref' => ""])
@endsection

<?php $data=[
    'highlightTitle' => "We believe",
    'mainTitle' => " the  design  should boost sales!",
    'mainContent' => "If you are searching for an experienced, UX and UI services provider, you hit the place! Let’s dive into your customer’s needs together!",
    'button' => true,
    'imageHref' => "images/blue-bar-happyman.webp"
]
?>
@section('blue-bar')
    @include('parts.blue-bar',$data)
@endsection

@section('contact-us')
    @include('parts.contact-us')
@endsection
