@extends('layout')

<?php $data=[
    'highlightTitle' => "Glossary",
    'mainTitle' => " of IT terms",
    'mainContent' => "",
    'button' => false,
    'imageHref' => ""
]
?>
@section('blue-bar')
    @include('parts.blue-bar',$data)
@endsection

@section('glossary-content')
    @include('parts.glossary-content',$data)
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
