@extends('frontend.layouts.app')

@section('meta.title', $pageData->seo_title)
@section('meta.description', $pageData->seo_description)

@php
  $media_images = array_filter(explode(',', $pageData->meta->where('meta_key', 'media_images')->first()->meta_value ?? ''));
  $workshop_images = array_filter(explode(',', $pageData->meta->where('meta_key', 'workshop_images')->first()->meta_value ?? ''));
@endphp

@section('content')

    @include('frontend.partials.breadcrumb', ['title' => $pageData->title])

    <!-- =======================
        Media Coverage Section
    ======================== -->
    <section class="fitness_gallery pt-md-5 mt-4">
        <div class="container">

            <h2 class="robot_slab text-center mb-4">
                {{ $pageData->title }}
            </h2>

            <h4 class="robot_slab text-center mb-5">
                Media Coverage
            </h4>

            <div class="row g-8 justify-content-center">

                @foreach($media_images as $img)
                <div class="col-md-4 col-sm-6 col-12"
                     data-aos="fade-up"
                     data-aos-duration="1000">

                    <a href="{{ uploaded_asset($img) }}"
                       data-fancybox="album"
                       data-caption="{{ uploaded_asset_name($img) }}"
                       class="d-block position-relative album-card">

                        <img src="{{ uploaded_asset($img) }}"
                             class="w-100 rounded-3 shadow-sm hvr-bounce-in"
                             alt="Mental Wellness Coaching">

                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Divider -->
    <div class="breaksection">
        <div class="container">
            <hr>
        </div>
    </div>

    <!-- =======================
        Workshops Section
    ======================== -->
    <section class="fitness_gallery">
        <div class="container">

            <h4 class="robot_slab text-center mb-5">
                Workshops
            </h4>

            <div class="row g-8 justify-content-center">

               @foreach($workshop_images as $img)
                <div class="col-md-4 col-sm-6 col-12"
                     data-aos="fade-up"
                     data-aos-duration="1000">

                    <a href="{{ uploaded_asset($img) }}"
                       data-fancybox="album1"
                       data-caption="{{ uploaded_asset_name($img) }}"
                       class="d-block position-relative album-card">

                        <img src="{{ uploaded_asset($img) }}"
                             class="w-100 rounded-3 shadow-sm hvr-bounce-in"
                             alt="Mental Wellness Coaching">

                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- =======================
        Fancybox Script
    ======================== -->
    <script>
        $(document).ready(function () {
            $("[data-fancybox^='album']").fancybox({
                loop: true,
                buttons: [
                    "zoom",
                    "slideShow",
                    "thumbs",
                    "close"
                ],
                thumbs: {
                    autoStart: true
                }
            });
        });
    </script>

@endsection