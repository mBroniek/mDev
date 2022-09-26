@extends('layout')


<?php $data=[
    'bannerBackground' => "header-gradient-blue",
    'imageHref' => "images/Mainpage-header.webp",
    'textTop' => "",
    'textFirst' => "We are a software development partner",
    'textSecond' => "focused on clients’ needs!",
    'clutchWidget' => 0,
    'buttonText' => "Contact us",
    'buttonHref' => "#"
]
?>
@section('header')
    @include('parts.header-banner',$data)
@endsection

<?php $textImageData=[
    'imageHref' => "images/Mainpage-header.webp",
    'textHeader' => "Our Mission",
    'textContent' => "The goal of mDevelopers is to provide the  highest quality  software development services while maintaining a human approach to the client. Project is not only coding, design, or testing, but mainly cooperation between people. We are well aware of this. Therefore, our  development process  and organizational culture are designed with the client in mind. Our partners always know at what stage their project is and maintain constant contact with us so that all their needs are met one hundred percent. We believe that an open and honest approach is key to building strong cooperation. Therefore we always ensure the security of your project by  signing the NDA!

Our team consists of  experienced specialists  that can create entire software projects under one roof without outsourcing services to other companies. End-to-end development of a product with one company is appreciated by our partners because it ensures transparency, speeds up time-to-market, and reduces costs.

Summing up, our mission is to be a part of  your success!
"
]
?>

@section('text-image')
    @include('parts.text-image', $textImageData)
@endsection

@section('badges')
    @include('parts.badges')
@endsection

@section('tech-stack')
    @include('parts.tech-stack')
@endsection

@section('cooperation')
    @include('parts.cooperation-model')
@endsection

@section('strong-sides')
    @include('parts.our-strong-sides')
@endsection

@section('successfull-projects')
    @include('parts.our-successfull-projects')
@endsection

@section('our-clients')
    @include('parts.our-clients')
@endsection

@section('testimonials')
    @include('parts.testimonials')
@endsection

@section('blog')
    @include('parts.our-blog')
@endsection

@section('contact-us')
    @include('parts.contact-us')
@endsection








