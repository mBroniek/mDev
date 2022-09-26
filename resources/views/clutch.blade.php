@extends('layout')

@section('header')
    @include('parts.headers.header-contact')
@endsection

@section('badges')
    @include('parts.badges')
@endsection

@section('tabs-services')
    @include('parts.tabs-services')
@endsection

@section('tech-stack-services')
    @include('parts.tech-stack-services')
@endsection

@section('case-studies-single')
    @include('parts.case-studies-single')
@endsection

@section('strong-sides-services')
    @include('parts.our-strong-sides')
@endsection

<?php $dataProcess=[
    'headerPart1' => "Our",
    'headerPart2' => " outsouring process",
    'typeofProcess' =>'outsourcing-section'
]
?>
@section('process-services')
    @include('parts.process',$dataProcess)
@endsection

@section('our-clients-services')
    @include('parts.our-clients')
@endsection

@section('contact-us')
    @include('parts.contact-us')
@endsection
