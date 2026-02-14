@extends('frontend.layouts.app')

@section('meta.title', $pageData->seo_title)
@section('meta.description', $pageData->seo_description)

@section('content')

@php
    $banner_images = $pageData->meta->where('meta_key', 'banner_images')->first()->meta_value ?? '';

    $about_title = $pageData->meta->where('meta_key', 'about_title')->first()->meta_value ?? '';
    $about_description = $pageData->meta->where('meta_key', 'about_description')->first()->meta_value ?? '';
    $about_image = $pageData->meta->where('meta_key', 'about_image')->first()->meta_value ?? '';

    $about_school_title = $pageData->meta->where('meta_key', 'about_school_title')->first()->meta_value ?? '';
    $about_school_description = $pageData->meta->where('meta_key', 'about_school_description')->first()->meta_value ?? '';

    $testimonial_images = $pageData->meta->where('meta_key', 'testimonial_images')->first()->meta_value ?? '';
@endphp

<style>
    h4.transforming_text {
        visibility: hidden;
    }
</style>

<main>

    <!-- =======================
        Desktop Banner Carousel
    ======================== -->
    <div id="customBanner"
         class="carousel slide carousel-fade custom-carousel d-lg-block d-md-block d-none"
         data-bs-ride="carousel"
         data-bs-interval="8000">

        <div class="carousel-inner">
            @for ($i = 1; $i <= 6; $i++)
                <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                    <img src="{{ asset('assets/frontend/img/home-banner-' . $i . '.jpg') }}"
                         class="banner_zoom d-block w-100 banner-img"
                         alt="Banner {{ $i }}">
                </div>
            @endfor
        </div>

        <button class="carousel-control-prev custom-prev d-none d-md-flex"
                type="button"
                data-bs-target="#customBanner"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next custom-next d-none d-md-flex"
                type="button"
                data-bs-target="#customBanner"
                data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>


    <!-- =======================
        Mobile Banner Carousel
    ======================== -->
    <div id="customBannerMobile"
         class="carousel slide carousel-fade custom-carousel d-lg-none d-md-none d-block"
         data-bs-ride="carousel"
         data-bs-interval="8000">

        <div class="carousel-inner">
            @for ($i = 1; $i <= 6; $i++)
                <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                    <img src="{{ asset('assets/frontend/img/home-mobile-banner-' . $i . '.jpg') }}"
                         class="banner_zoom d-block w-100 banner-img"
                         alt="Mobile Banner {{ $i }}">
                </div>
            @endfor
        </div>
    </div>


    <!-- =======================
        About Founder Section
    ======================== -->
    <section class="about_lubna">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-lg-3 col-md-5 col-12 mb-4 mb-lg-0"
                     data-aos="fade-right"
                     data-aos-duration="8000">
                    <div class="about_imgs">
                        <img class="hvr-bounce-in w-100"
                             src="{{ asset('assets/frontend/img/lubna-rahman.jpg') }}"
                             alt="Lubna Rahman">
                    </div>
                </div>

                <div class="col-lg-9 col-md-7 col-12 ps-lg-4 ps-0"
                     data-aos="fade-left"
                     data-aos-duration="8000">

                    <div class="education_box">
                        <h3 class="robot_slab text_color font33">
                            Founder: Lubna Rahman
                        </h3>

                        <p>
                            Lubna Rahman is a globally trained wellness and lifestyle specialist
                            with over a decade of experience in health, fitness, and rehabilitation.
                            Her approach blends science, grace, and holistic living helping individuals
                            achieve lasting transformation through comprehensive, balanced practices.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- =======================
        Services Section
    ======================== -->
    <section class="services_sections padding70px">

        <div class="text-center">
            <h3 class="robot_slab text-white font60 mb-0">Our Services</h3>
        </div>

        <div id="customers-testimonials"
             class="slick-slider"
             data-aos="fade-up"
             data-aos-duration="8000">

            @php
                $services = [
                    ['#sculpting', 'virtual-bg1', 'Body Sculpting &', 'Functional Conditioning'],
                    ['#program', 'virtual-bg2', 'Fat Loss', 'Program'],
                    ['#mental', 'virtual-bg3', 'Mental Wellness', 'Coaching'],
                    ['#nutrition', 'virtual-bg4', 'Nutrition', 'Diet Plan'],
                    ['#rehabilitation', 'virtual-bg5', 'Rehabilitation', 'Coaching'],
                    ['#aesthetic', 'virtual-bg6', 'Aesthetic Wellness', 'Program'],
                ];
            @endphp

            @foreach ($services as $service)
                <div class="item">
                    <div class="shadow-effect">
                        <a href="/our-services.php{{ $service[0] }}">
                            <div class="service-card {{ $service[1] }}">
                                <div class="text-box">
                                    <p class="first-text">FS @ Lubna Rahman</p>
                                    <h2>
                                        {{ $service[2] }}
                                        <span>{{ $service[3] }}</span>
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </section>


    <!-- =======================
        Client Speaks Section
    ======================== -->
    <section class="client_section1 py-lg-5 py-4"
             data-aos="fade-up"
             data-aos-duration="1000"
             data-aos-once="true">

        <div class="text-center">
            <h3 class="robot_slab text_color mb-md-4 mb-2 pt-2">
                Client Speaks
            </h3>
        </div>

        <div class="services-scroll-container">
            <div class="services-scroll-wrapper">
                <ul class="services-scroll-list">

                    @for ($i = 1; $i <= 17; $i++)
                        <li class="services-scroll-item">
                            <a href="{{ asset('assets/frontend/img/reviews/' . $i . '.jpg') }}"
                               data-fancybox="album1"
                               class="d-block position-relative services-box-link">

                                <div class="services_boxs">
                                    <img class="jbox-img rotate w-100"
                                         src="{{ asset('assets/frontend/img/reviews/' . $i . '.jpg') }}"
                                         alt="Review {{ $i }}">
                                </div>

                            </a>
                        </li>
                    @endfor

                </ul>
            </div>
        </div>

        <div class="testmiinals_buttom text-center mt-4">
            <a href="https://www.facebook.com/share/1GSQPa1EmM/?mibextid=wwXIfr"
               target="_blank">
                Check More Reviews
            </a>
        </div>

    </section>


    <!-- =======================
        Fancybox Init
    ======================== -->
    <script>
        $(document).ready(function () {
            $("[data-fancybox^='album']").fancybox({
                loop: true,
                buttons: ["zoom", "slideShow", "thumbs", "close"],
                thumbs: {
                    autoStart: true
                }
            });
        });
    </script>

</main>

@endsection