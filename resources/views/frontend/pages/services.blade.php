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

      <!-- Service 1 -->
      <section class="inner_pading" id="aesthetic">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 col-12 mb-4 mb-md-0 pe-md-5 pe-0" data-aos="fade-right" data-aos-duration="900">
               <img src="{{ asset('assets/frontend/img/aesthetic-wellness.jpg') }}" alt="Aesthetic Wellness Program" class="w-100 hvr-bounce-in borderradius16">
            </div>
            <div class="col-md-8 col-12 ps-md-5 ps-0" data-aos="fade-left" data-aos-duration="900">
              <h3 class="robot_slab text_color mb-4 pb-3 text-decoration-underline">Aesthetic Wellness Program</h3>
              <p class=" mb-3">
                A signature blend of science, style, and self-care designed to refine your appearance, elevate your confidence, and empower your overall presence.
              </p>
              
            
            </div>
          </div>
        </div>
      </section>

      <!-- Service 2 (content left, image right) -->
      <section class="inner_pading bg-light" id="rehabilitation">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-8 col-12 order-md-1 order-2 pe-md-5 pe-0" data-aos="fade-right" data-aos-duration="900">
              <h3 class="robot_slab text_color mb-4 pb-3 text-decoration-underline">Rehabilitation</h3>
              <p class=" mb-3">
                A restorative system merging therapeutic exercises with calming mindbody practices. Designed to rebuild strength, stability, and emotional balance with follow-ups to ensure steady recovery.
              </p>
              <!--
              <p class="mb-2">
                Every session is planned with medical history, current limitations, and emotional readiness in mind.
                The goal is not just physical recovery, but helping you move without fear and rebuild trust in your
                body.
              </p>
              <ul class="mb-0">
                <li>Safe, progressive mobility and strength work</li>
                <li>Focus on joint stability and pain-free movement</li>
                <li>Close guidance and form corrections</li>
              </ul>
              -->
            </div>
            <div class="col-md-4 col-12 mb-4 mb-md-0 ps-md-5 ps-0 order-md-2 order-1" data-aos="fade-left" data-aos-duration="900">
               <img src="{{ asset('assets/frontend/img/rehabilitation-coaching.jpg') }}" alt="Rehabilitation Coaching" class="w-100 hvr-bounce-in">
            </div>
          </div>
        </div>
      </section>

      <!-- Service 3 (image left, content right)-->
      <section class="inner_pading" id="mental">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 col-12 mb-4 mb-md-0 pe-md-5 pe-0" data-aos="fade-right" data-aos-duration="900">
               <img src="{{ asset('assets/frontend/img/mental-wellness.jpg') }}" alt="Mental Wellness Coaching" class="w-100 hvr-bounce-in">
            </div>
            <div class="col-md-8 col-12 ps-md-5 ps-0" data-aos="fade-left" data-aos-duration="900">
              
              <h3 class="robot_slab text_color mb-4 pb-3 text-decoration-underline">Mental Wellness Health Coaching</h3>
              <p class=" mb-3">
                FS Mental Wellness Coaching supports individuals in developing mental stability, self-awareness, and emotional resilience for daily functioning. The coaching framework focuses on structured guidance, emotional regulation, cognitive awareness, and adaptive coping strategies to manage stress, life transitions, and mental fatigue. Services are non-diagnostic, confidential, and personalized, aimed at improving day-to-day mental efficiency, clarity, and psychological balance.
              </p>
              <!--
              <p class="mb-2">
                This service is ideal for women navigating burnout, life transitions, or internal overwhelm. The focus
                is on helping you build daily rituals that bring clarity, steadiness, and self-compassion.
              </p>
              <ul class="mb-0">
                <li>Guided breath and relaxation techniques</li>
                <li>Mindset and habit-building support</li>
                <li>Tools to manage stress, anxiety, and overwhelm</li>
              </ul>
              -->
            </div>
          </div>
        </div>
      </section>

      <!-- Service 4 (content left, image right) -->
      <section class="inner_pading bg-light" id="program">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-8 col-12 order-md-1 order-2 pe-md-5 pe-0" data-aos="fade-right" data-aos-duration="900">
              <h3 class="robot_slab text_color mb-4 pb-3 text-decoration-underline">Fat Loss Program</h3>
              <p class=" mb-3">
                A structured, sustainable approach to reduce body fat through balanced workouts and mindful nutrition. Designed to bring visible inch loss, energy, and confidence with regular progress tracking and follow-up calls.
              </p>
              <!--
              <p class="mb-2">
                Instead of extreme diets or unsustainable routines, the Fat Loss Program emphasises slow, consistent
                change – helping you feel lighter, stronger, and more energised without losing your peace of mind.
              </p>
              <ul class="mb-0">
                <li>Progressive strength and cardio sessions</li>
                <li>Customised nutrition and habit recommendations</li>
                <li>Regular check-ins for accountability and support</li>
              </ul>-->
              
            </div>
            
            <div class="col-md-4 col-12 mb-4 mb-md-0 ps-md-5 ps-0 order-md-2 order-1" data-aos="fade-left" data-aos-duration="900">
               <img src="{{ asset('assets/frontend/img/fat-loss.jpg') }}" alt="Fat Loss Program" class="w-100 hvr-bounce-in">
            </div>
          </div>
        </div>
      </section>
      
            <!-- Service 5 (image left, content right) -->
      <section class="inner_pading" id="nutrition">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 col-12 mb-4 mb-md-0 pe-md-5 pe-0" data-aos="fade-right" data-aos-duration="900">
               <img src="{{ asset('assets/frontend/img/nutrition-diet-plan.jpg') }}" alt="Nutrition Diet Plan" class="w-100 hvr-bounce-in">
            </div>
            <div class="col-md-8 col-12 ps-md-5 ps-0" data-aos="fade-left" data-aos-duration="900">
              <h3 class="robot_slab text_color mb-4 pb-3 text-decoration-underline">Nutrition, Diet Plan & Progress Tracking</h3>
              <p class=" mb-3">
                Personalized dietary planning aligned with your goals and lifestyle. Practical, adaptive, and sustainable with scheduled reviews and follow-up calls to keep you on course.
              </p>
              <!--
              <p class="mb-2">
                This service is ideal for women navigating burnout, life transitions, or internal overwhelm. The focus
                is on helping you build daily rituals that bring clarity, steadiness, and self-compassion.
              </p>
              <ul class="mb-0">
                <li>Guided breath and relaxation techniques</li>
                <li>Mindset and habit-building support</li>
                <li>Tools to manage stress, anxiety, and overwhelm</li>
              </ul>
              -->
            </div>
          </div>
        </div>
      </section>
      
      
      <!-- Service 6 (content left, image right) -->
      <section class="inner_pading bg-light" id="sculpting">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-8 col-12 order-md-1 order-2 pe-md-5 pe-0" data-aos="fade-right" data-aos-duration="900">
              <h3 class="robot_slab text_color mb-4 pb-3 text-decoration-underline">Body Sculpting & Functional Conditioning</h3>
              <p class=" mb-3">
               An intelligent blend of strength and mobility training that refines muscle tone, posture, and daily movement. Ideal for achieving a sculpted, well-aligned physique supported by ongoing reviews and follow-ups.
              </p>
              <div class="dotted_line"></div>
               <p><b>Programs are customized as per individual goals & fitness levels; <br>Pricing will be discussed after the consultation.</b></p>
              <!--
              <p class="mb-2">
                Instead of extreme diets or unsustainable routines, the Fat Loss Program emphasises slow, consistent
                change – helping you feel lighter, stronger, and more energised without losing your peace of mind.
              </p>
              <ul class="mb-0">
                <li>Progressive strength and cardio sessions</li>
                <li>Customised nutrition and habit recommendations</li>
                <li>Regular check-ins for accountability and support</li>
              </ul>
              -->
            </div>
            <div class="col-md-4 col-12 mb-4 mb-md-0 ps-md-5 ps-0 order-md-2 order-1" data-aos="fade-left" data-aos-duration="900">
               <img src="{{ asset('assets/frontend/img/body-sculpting.jpg') }}" alt="Body Sculpting" class="w-100 hvr-bounce-in">
            </div>
          </div>
        </div>
      </section>

      
@endsection
