@extends('layout.index')

@section('title') {{$setting->title ? $setting->title : $setting->name}} @endsection
@section('description') {{$setting->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection
@section('img'){{asset('')}}data/images/z6111931192228-68adeb5ed9b7d918f28bc256b902e2cb_34.jpg @endsection

@section('css')
<link href="assets/css/home.css" rel="stylesheet">
<link href="assets/css/myswiper.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
@endsection

@section('content')
<div class="home">
    

@include('layout.header')

@include('pages.section.slider')
@include('pages.section.overview')
@include('pages.section.outstanding')
@include('pages.section.location')
@include('pages.section.utilities')
@include('pages.section.premises')
@include('pages.section.apartment')
@include('pages.section.policy')

@endsection

@section('js')
<script>
    var totalSlides = document.querySelectorAll('.swiper-slide').length;
    var swiper = new Swiper(".mySwiper", {
        effect: "cards",
        grabCursor: true,
        initialSlide: totalSlides - 1,
        cardsEffect: {
            perSlideOffset: 9,
            perSlideRotate: 0.1,
        },
        navigation: {
            // nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-next"
        }
    });

    var swiper8 = new Swiper(".hero-slider .swiper", {
        spaceBetween: 0,
        effect: "fade",
        lazy: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".hero-slider .swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".hero-slider .swiper-button-next",
            prevEl: ".hero-slider .swiper-button-prev",
        },
    });

    var swiper7 = new Swiper(".apartment-slider .swiper", {
        slidesPerView: 3,
        loop: true,
        spaceBetween: 30,
        grabCursor: true,
        centeredSlides: true,
        effect: "coverflow",
        coverflowEffect: {
            rotate: 0,
            stretch: 20,
            scale:.8,
            depth: 0,
            modifier: 1.5,
            slideShadows : false,
        },
        pagination: {
            el: ".apartment-slider .swiper-pagination",
            clickable: true,
        },
        // Responsive breakpoints
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.3,
                spaceBetween: 0,
                coverflowEffect: {
                    depth: 2,
                }
            },
            // when window width is >= 480px
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            // when window width is >= 640px
            1024: {
                slidesPerView: 3,
                spaceBetween: 0,
                navigation: {
                    nextEl: ".apartment-slider .swiper-button-next",
                    prevEl: ".apartment-slider .swiper-button-prev",
                },
            }
        },  
    });

</script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
@endsection
