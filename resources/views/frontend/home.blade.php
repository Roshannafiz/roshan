@extends('frontend.Layouts')

@section('content')
    <!--------------- Include Preloader File -------------->
    @include('frontend.include.prelodear')

  
    <!--------------- Include Header Menu File -------------->
    @include('frontend.include.header-menu')


    <!--------------- Include Home Slider File -------------->
    @include('frontend.include.home-slider')


    <!----------------- Include Service File ------------------>
    @include('frontend.include.service')



    <!----------------- Include Best Product File ------------------>
    @include('frontend.include.best-product')



    <!----------------- Include Featured Product File ------------------>
    @include('frontend.include.featured-product')



    <!----------------- Include How To Work File ------------------>
    @include('frontend.include.how-to-work')



    <!----------------- Include Client Testimonial File ------------------>
    @include('frontend.include.client-testimonial')



    <!----------------- Include Client Logo File -------------------->
    @include('frontend.include.client-logo')



    <!---------------------- Include Sing Up File ------------------->
    @include('frontend.include.sing-up')



    <!---------------------- Include Footer File ------------------->
    @include('frontend.include.footer')

    <!---------------------- Include Back To Top File ------------------->
    @include('frontend.include.back-to-top')
@endsection
