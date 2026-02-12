@extends('frontend.layouts.app')

@section('meta.title', $pageData->seo_title)
@section('meta.description', $pageData->seo_description)

@section('content')
@php
   $banner_images = $pageData->meta->where('meta_key', 'banner_images')->first()->meta_value ?? '';

   $about_description = $pageData->meta->where('meta_key', 'about_description')->first()->meta_value ?? '';
   $about_image = $pageData->meta->where('meta_key', 'about_image')->first()->meta_value ?? '';
   $about_title = $pageData->meta->where('meta_key', 'about_title')->first()->meta_value ?? '';

   //$milestones = json_decode($pageData->meta->where('meta_key', 'home_milestones')->first()->meta_value ?? '[]', true);

   $quicklinks = json_decode($pageData->meta->where('meta_key', 'home_quicklinks')->first()->meta_value ?? '[]', true);
@endphp

@include('frontend.partials.breadcrumb', ['title' => $pageData->title, 'image' => $banner_images])

		 <!-- Service 1 -->
      <section class="inner_pading">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 col-12 mb-4 mb-md-0 pe-md-5 pe-0" data-aos="fade-right" data-aos-duration="900">
               <img src="{{ asset('assets/frontend/img/lubna-rahman.jpg') }}" alt="Aesthetic Wellness Program" class="w-100 hvr-bounce-in">
            </div>
            <div class="col-md-8 col-12 ps-md-5 ps-0" data-aos="fade-left" data-aos-duration="900">
               <div class="text-start mb-md-3 mb-2 pt-2">
                    <h3 class="robot_slab text_color">Founder: Lubna Rahman</h3>
                  </div>
				  <p>Lubna Rahman is a globally trained wellness and lifestyle specialist with over a decade of experience in health, fitness, and rehabilitation. Her approach blends science, grace, and holistic living helping individuals achieve lasting transformation through comprehensive, balanced practices.</p>
                  <p>
                 The journey of FS began in Prayagraj, Uttar Pradesh, at a time when the idea of women centric wellness and fitness was neither common nor easily accepted. Society was unprepared to acknowledge women's right to a dedicated platform for their health. Yet, with courage and clarity of vision, I chose to take the first step breaking barriers and creating an environment where women could truly find strength, balance, and belonging.

                  </p>
            </div>
          </div>
        </div>
      </section>
      
      
      
          <section class="inner_pading" style="    background: #ebedec7a;">
        <div class="container">
          <div class="row align-items-center">
           
            <div class="col-md-7 col-12 pe-md-5 ps-0 order-md-1 order-2" data-aos="fade-left" data-aos-duration="900">
               <div class="text-start mb-md-3 mb-2 pt-2">
                    <h3 class="robot_slab text_color">FS Awareness and Charity Programs</h3>
                  </div>
				 <p>FS conducts awareness and charity-based wellness programs focused on preventive health, education, and community well-being. Each initiative has been independently designed and executed under the FS framework, ensuring structure, quality, and measurable impact.
</p>

<p>Under this section, FS has launched the FSFIT Global Healthcare Initiative, created to strengthen preventive awareness and accessible wellness. Through this platform, FS organizes:
      </p>
      
    
    <ul>
        <li> Pre-health camps and preventive assessments for baseline health evaluation.</li>
        <li>Wellness awareness workshops covering fitness, nutrition, and rehabilitation.</li>
        <li>Digital awareness programs promoting preventive lifestyle practices.</li>
    </ul>  


    <p>While these initiatives have been led solely by FS so far, the platform remains open to meaningful collaborations and joint ventures aligned with FS standards and shared values of integrity, quality, and community care.</p>
     
            </div>
            
             <div class="col-md-5 col-12 mb-4 mb-md-0 pe-0 order-md-2 order-1" data-aos="fade-right" data-aos-duration="900">
               <div class="border-0 earth_image">
                     <img src="{{ asset('assets/frontend/img/earth-hands.jpg') }}"
                          class="card-img-top hvr-bounce-in"
                          alt="Dummy Image">
                </div>
            </div>
          </div>
        </div>
      </section>

@endsection
