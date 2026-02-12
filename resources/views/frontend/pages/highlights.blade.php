@extends('frontend.layouts.app')

@section('meta.title', $pageData->seo_title)
@section('meta.description', $pageData->seo_description)

@section('content')

@include('frontend.partials.breadcrumb', ['title' => $pageData->title])


        <section class="fitness_gallery pt-md-5 mt-4">
        <div class="container">
            
             <h2 class="robot_slab text-center mb-4">Highlights </h2>
             
             <h4 class="robot_slab text-center mb-5">Media Coverage</h4>
          <div class="row g-8 justify-content-center">
            <!-- Album 1 -->
            
            
            
            <!-- Album 3 -->
            <div class="col-md-4 col-sm-6 col-12" data-aos="fade-up" data-aos-duration="1000">
               <a href="{{ asset('assets/frontend/img/galleryimg3.jpeg') }}"
                  data-fancybox="album"
                  data-caption="Mental Wellness Coaching"
                  class="d-block position-relative album-card">
                 <img src="{{ asset('assets/frontend/img/galleryimg3.jpeg') }}"
                      class="w-100 rounded-3 shadow-sm hvr-bounce-in"
                      alt="Mental Wellness Coaching">
               
              </a>
            </div>
            
            
               <!-- Album 2 -->
            <div class="col-md-4 col-sm-6 col-12" data-aos="fade-up" data-aos-duration="900">
               <a href="{{ asset('assets/frontend/img/galleryimg2.jpeg') }}"
                  data-fancybox="album"
                  data-caption="Rehabilitation Coaching"
                  class="d-block position-relative album-card">
                 <img src="{{ asset('assets/frontend/img/galleryimg2.jpeg') }}"
                      class="w-100 rounded-3 shadow-sm hvr-bounce-in"
                      alt="Rehabilitation Coaching">
               
              </a>
            </div>
            
            <div class="col-md-4 col-sm-6 col-12" data-aos="fade-up" data-aos-duration="800">
               <a href="{{ asset('assets/frontend/img/gallery3.jpeg') }}"
                  data-fancybox="album"
                  data-caption="Aesthetic Wellness Program"
                  class="d-block position-relative album-card">
                 <img src="{{ asset('assets/frontend/img/gallery3.jpeg') }}"
                      class="w-100 rounded-3 shadow-sm hvr-bounce-in"
                      alt="Aesthetic Wellness Program">
               
              </a>
             
            </div>

         


            <!-- Album 4 -->
            <div class="col-md-4 col-sm-6 col-12" data-aos="fade-up" data-aos-duration="1100">
               <a href="{{ asset('assets/frontend/img/galleryimg4.jpeg') }}"
                  data-fancybox="album"
                  data-caption="Body Sculpting"
                  class="d-block position-relative album-card">
                 <img src="{{ asset('assets/frontend/img/galleryimg4.jpeg') }}"
                      class="w-100 rounded-3 shadow-sm hvr-bounce-in"
                      alt="Body Sculpting">
                
              </a>
            </div>
            
             <!-- Album 5 -->
            <div class="col-md-4 col-sm-6 col-12" data-aos="fade-up" data-aos-duration="1100">
               <a href="{{ asset('assets/frontend/img/galleryimg5.jpeg') }}"
                  data-fancybox="album"
                  data-caption="Body Sculpting"
                  class="d-block position-relative album-card">
                 <img src="{{ asset('assets/frontend/img/galleryimg5.jpeg') }}"
                      class="w-100 rounded-3 shadow-sm hvr-bounce-in"
                      alt="Body Sculpting">
                
              </a>
            </div>
            
             <!-- Album 6 -->
            <div class="col-md-4 col-sm-6 col-12" data-aos="fade-up" data-aos-duration="1100">
               <a href="{{ asset('assets/frontend/img/galleryimg6.jpeg') }}"
                  data-fancybox="album"
                  data-caption="Body Sculpting"
                  class="d-block position-relative album-card">
                 <img src="{{ asset('assets/frontend/img/galleryimg6.jpeg') }}"
                      class="w-100 rounded-3 shadow-sm hvr-bounce-in"
                      alt="Body Sculpting">
                
              </a>
            </div>
          </div>

        </div>
      </section>
      
      
      <div class="breaksection">
          <div class="container">
              <hr>
          </div>
      </div>
      
      
      <section class="fitness_gallery">
        <div class="container">
            
             <h4 class="robot_slab text-center mb-5">Workshops</h4>
          <div class="row g-8 justify-content-center">
            <!-- Album 1 -->
           
            
             <div class="col-md-4 col-sm-6 col-12" data-aos="fade-up" data-aos-duration="1100">
               <a href="{{ asset('assets/frontend/img/galleryimg7.jpeg') }}"
                  data-fancybox="album1"
                  data-caption="Body Sculpting"
                  class="d-block position-relative album-card">
                 <img src="{{ asset('assets/frontend/img/galleryimg7.jpeg') }}"
                      class="w-100 rounded-3 shadow-sm hvr-bounce-in"
                      alt="Body Sculpting">
               
              </a>
            </div>
            
             <div class="col-md-4 col-sm-6 col-12" data-aos="fade-up" data-aos-duration="1100">
               <a href="{{ asset('assets/frontend/img/galleryimg8.jpeg') }}"
                  data-fancybox="album1"
                  data-caption="Body Sculpting"
                  class="d-block position-relative album-card">
                 <img src="{{ asset('assets/frontend/img/galleryimg8.jpeg') }}"
                      class="w-100 rounded-3 shadow-sm hvr-bounce-in"
                      alt="Body Sculpting">
                
              </a>
            </div>
            
              <div class="col-md-4 col-sm-6 col-12" data-aos="fade-up" data-aos-duration="1100">
               <a href="{{ asset('assets/frontend/img/galleryimg9.jpeg') }}"
                  data-fancybox="album1"
                  data-caption="Body Sculpting"
                  class="d-block position-relative album-card">
                 <img src="{{ asset('assets/frontend/img/galleryimg9.jpeg') }}"
                      class="w-100 rounded-3 shadow-sm hvr-bounce-in"
                      alt="Body Sculpting">
                
              </a>
            </div>
            
          </div>

        </div>
      </section>


       <script>
      $(document).ready(function() {
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
