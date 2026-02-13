@extends('frontend.layouts.app')

@section('meta.title', $pageData->seo_title)
@section('meta.description', $pageData->seo_description)

@section('content')

@include('frontend.partials.breadcrumb', ['title' => $pageData->title])

        <section class="pt-5 mt-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12 col-12 text-center">
              <h2 class="robot_slab text_color mb-lg-3">Our Signature Services</h2>
              
            </div>
          </div>
        </div>
      </section>

      @php
          $services = json_decode($pageData->meta->where('meta_key', 'services')->first()->meta_value ?? '[]', true);
      @endphp

      @if(isset($services['itration']) && is_array($services['itration']))
          @foreach($services['itration'] as $index => $iteration)
              @php
                  $slug = strtolower(str_replace(' ', '-', $services['name'][$index] ?? 'service'));
              @endphp
              <section class="inner_pading {{ $index % 2 == 1 ? 'bg-light' : '' }}" id="{{ $slug }}">
                <div class="container">
                  <div class="row align-items-center">
                    @if($index % 2 == 0)
                      <!-- Image on left, content on right -->
                      <div class="col-md-4 col-12 mb-4 mb-md-0 pe-md-5 pe-0" data-aos="fade-right" data-aos-duration="900">
                         <img src="{{ uploaded_asset($services['image'][$index]) }}" alt="{{ $services['name'][$index] ?? 'Service' }}" class="w-100 hvr-bounce-in borderradius16">
                      </div>
                      <div class="col-md-8 col-12 ps-md-5 ps-0" data-aos="fade-left" data-aos-duration="900">
                        <h3 class="robot_slab text_color mb-4 pb-3 text-decoration-underline">{{ $services['name'][$index] ?? 'Service Name' }}</h3>
                        <div class="mb-3">
                          {!! $services['description'][$index] ?? 'No description available' !!}
                        </div>
                      </div>
                    @else
                      <!-- Content on left, image on right -->
                      <div class="col-md-8 col-12 order-md-1 order-2 pe-md-5 pe-0" data-aos="fade-right" data-aos-duration="900">
                        <h3 class="robot_slab text_color mb-4 pb-3 text-decoration-underline">{{ $services['name'][$index] ?? 'Service Name' }}</h3>
                        <div class="mb-3">
                          {!! $services['description'][$index] ?? 'No description available' !!}
                        </div>
                      </div>
                      <div class="col-md-4 col-12 mb-4 mb-md-0 ps-md-5 ps-0 order-md-2 order-1" data-aos="fade-left" data-aos-duration="900">
                         <img src="{{ uploaded_asset($services['image'][$index]) }}" alt="{{ $services['name'][$index] ?? 'Service' }}" class="w-100 hvr-bounce-in">
                      </div>
                    @endif
                  </div>
                </div>
              </section>
          @endforeach
      @else
          <!-- Fallback if no services are found -->
          <section class="inner_pading">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8 col-12 text-center">
                  <h3 class="robot_slab text_color mb-4">No Services Available</h3>
                  <p class="mb-3">Please check back later for our signature services.</p>
                </div>
              </div>
            </div>
          </section>
      @endif

      <!-- Pricing information -->
      {{-- <section class="inner_pading bg-light">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-12 text-center">
              <div class="dotted_line"></div>
               <p><b>Programs are customized as per individual goals & fitness levels; <br>Pricing will be discussed after the consultation.</b></p>
            </div>
          </div>
        </div>
      </section> --}}
      
@endsection
