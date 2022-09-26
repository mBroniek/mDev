<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>

<header>
    @include('includes.navigation')
    @include('includes.searcher')
</header>

{{-- Elements order --}}
@yield('header')
{{-- case studies --}}
@yield('project-details')
@yield('parallax')
@yield('solutions-result')
@yield('parallax-2')
@yield('benefits')
@yield('what-clients-say')
@yield('other-successfull-projects')
{{-- end case studies --}}
@yield('badges')
@yield('what-we-can-do')
{{--one stop shop--}}
@yield('one-stop-shop-teamextension')
@yield('one-stop-shop-mobileapp')
@yield('one-stop-shop-webapp')
@yield('one-stop-shop-uxui')
@yield('one-stop-shop-discovery')
@yield('one-stop-shop-ai')
{{-- portfolio --}}
@yield('image-text')
@yield('text-image')
@yield('in-numbers')
@yield('why-worth')
@yield('process')
@yield('our-service')
@yield('tech-stack')
@yield('expert-technologies')
@yield('cooperation')
@yield('blue-bar')
@yield('glossary-content')
@yield('tools-we-use')
@yield('tech-describe-section')
@yield('values-of-mdev')
@yield('strong-sides')
@yield('strong-sides-expand')
@yield('blue-list')
@yield('process-type2')
@yield('successfull-projects')
@yield('section-benefits')
@yield('our-clients')
@yield('testimonials')
@yield('testimonials-single')
@yield('testimonials-multiple')
@yield('technology-hub')
@yield('management-team')
@yield('we-are-mdevelopers')
{{-- services --}}
@yield('tabs-services')
@yield('tech-stack-services')
@yield('case-studies-single')
@yield('strong-sides-services')
@yield('process-services')
@yield('our-clients-services')

{{--blog--}}
@yield('blog-list-casestudies')
@yield('blog-list')
@yield('blog-content')
{{--our clients x4--}}
@yield('our-clientsx4')
@yield('faq')
@yield('blog')
@yield('blue-bar-expand')
@yield('contact-us')

<footer>
    @include('includes.footer')
</footer>

</body>
