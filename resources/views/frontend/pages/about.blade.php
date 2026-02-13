@extends('frontend.layouts.app')

@section('meta.title', $pageData->seo_title)
@section('meta.description', $pageData->seo_description)

@section('content')
@php
   $about_description = $pageData->meta->where('meta_key', 'about_description')->first()->meta_value ?? '';
   $about_image = $pageData->meta->where('meta_key', 'about_image')->first()->meta_value ?? '';
   $about_title = $pageData->meta->where('meta_key', 'about_title')->first()->meta_value ?? '';

   $about_description1 = $pageData->meta->where('meta_key', 'about_description2')->first()->meta_value ?? '';
   $about_image1 = $pageData->meta->where('meta_key', 'about_image2')->first()->meta_value ?? '';
   $about_title1 = $pageData->meta->where('meta_key', 'about_title2')->first()->meta_value ?? '';
@endphp

@include('frontend.partials.breadcrumb', ['title' => $pageData->title])

		 <!-- Service 1 -->
      <section class="inner_pading">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 col-12 mb-4 mb-md-0 pe-md-5 pe-0" data-aos="fade-right" data-aos-duration="900">
               <img src="{{ uploaded_asset($about_image) }}" alt="{{ uploaded_asset_name($about_image) }}" class="w-100 hvr-bounce-in">
            </div>
            <div class="col-md-8 col-12 ps-md-5 ps-0" data-aos="fade-left" data-aos-duration="900">
               <div class="text-start mb-md-3 mb-2 pt-2">
                    <h3 class="robot_slab text_color">{{$about_title}}</h3>
                  </div>
				          {!! $about_description !!}
            </div>
          </div>
        </div>
      </section>
      
      
      
          <section class="inner_pading" style="    background: #ebedec7a;">
        <div class="container">
          <div class="row align-items-center">
           
            <div class="col-md-7 col-12 pe-md-5 ps-0 order-md-1 order-2" data-aos="fade-left" data-aos-duration="900">
               <div class="text-start mb-md-3 mb-2 pt-2">
                    <h3 class="robot_slab text_color">{{$about_title1}}</h3>
                  </div>

                {!! $about_description1 !!}
                  
				    </div>
            
             <div class="col-md-5 col-12 mb-4 mb-md-0 pe-0 order-md-2 order-1" data-aos="fade-right" data-aos-duration="900">
               <div class="border-0 earth_image">
                     <img src="{{ uploaded_asset($about_image1) }}"
                          class="card-img-top hvr-bounce-in"
                          alt="Dummy Image">
                </div>
            </div>
          </div>
        </div>
      </section>

@endsection
