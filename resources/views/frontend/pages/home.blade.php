@extends('frontend.layouts.app')
    
@section('meta.title', $pageData->seo_title)
@section('meta.description', $pageData->seo_description)

@section('content')

<style>
    h4.transforming_text {
    visibility: hidden;
}
</style>
    <main>
      
      
     <div id="customBanner" class="carousel slide carousel-fade custom-carousel d-lg-block d-md-block d-none"
     data-bs-ride="carousel"
     data-bs-interval="8000">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/home-banner-1.jpg" class="banner_zoom d-block w-100 banner-img" alt="">
    </div>

    <div class="carousel-item">
      <img src="images/home-banner-2.jpg" class="banner_zoom d-block w-100 banner-img" alt="">
    </div>

    <div class="carousel-item">
      <img src="images/home-banner-3.jpg" class="banner_zoom d-block w-100 banner-img" alt="">
    </div>

    <div class="carousel-item">
      <img src="images/home-banner-4.jpg" class="banner_zoom d-block w-100 banner-img" alt="">
    </div>

    <div class="carousel-item">
      <img src="images/home-banner-5.jpg" class="banner_zoom d-block w-100 banner-img" alt="">
    </div>

    <div class="carousel-item">
      <img src="images/home-banner-6.jpg" class="banner_zoom d-block w-100 banner-img" alt="">
    </div>
  </div>

  <!-- arrows -->
  <button class="carousel-control-prev custom-prev d-none d-md-flex"
          type="button" data-bs-target="#customBanner" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next custom-next d-none d-md-flex"
          type="button" data-bs-target="#customBanner" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>



<div id="customBanner" class="carousel slide carousel-fade custom-carousel d-lg-none d-md-none d-block"
     data-bs-ride="carousel"
     data-bs-interval="8000">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/home-mobile-banner-1.jpg" class="banner_zoom d-block w-100 banner-img" alt="">
    </div>

    <div class="carousel-item">
      <img src="images/home-mobile-banner-2.jpg" class="banner_zoom d-block w-100 banner-img" alt="">
    </div>

    <div class="carousel-item">
      <img src="images/home-mobile-banner-3.jpg" class="banner_zoom d-block w-100 banner-img" alt="">
    </div>

    <div class="carousel-item">
      <img src="images/home-mobile-banner-4.jpg" class="banner_zoom d-block w-100 banner-img" alt="">
    </div>

    <div class="carousel-item">
      <img src="images/home-mobile-banner-5.jpg" class="banner_zoom d-block w-100 banner-img" alt="">
    </div>

    <div class="carousel-item">
      <img src="images/home-mobile-banner-6.jpg" class="banner_zoom d-block w-100 banner-img" alt="">
    </div>
  </div>

  <!-- arrows -->
  <button class="carousel-control-prev custom-prev d-none d-md-flex"
          type="button" data-bs-target="#customBanner" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next custom-next d-none d-md-flex"
          type="button" data-bs-target="#customBanner" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

     <section class="about_lubna">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-3 col-md-5 col-12 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="8000" >
                <div class="about_imgs">
                  <img class="hvr-bounce-in w-100" src="images/lubna-rahman.jpg" alt="img" />
                </div>
              </div>
              <div class="col-lg-9 col-md-7 col-12 ps-lg-4 ps-0" data-aos="fade-left" data-aos-duration="8000">
                <div class="education_box">
                  <div class="text-start mb-md-3 mb-2 pt-2">
                    <h3 class="robot_slab text_color font33">Founder: Lubna Rahman</h3>
                  </div>
				   
                  <p>Lubna Rahman is a globally trained wellness and lifestyle specialist with over a decade of experience in health, fitness, and rehabilitation. Her approach blends science, grace, and holistic living helping individuals achieve lasting transformation through comprehensive, balanced practices.</p>
                 
                  
                </div>
              </div>
            </div>
          </div>
        </section>
       
       
       <section class="services_sections padding70px">

        <div class="text-center ">
                  <h3 class="robot_slab text-white pt-0 font60 mb-0">Our Services</h3>
                </div>

        <div id="customers-testimonials" class="slick-slider" data-aos="fade-up" data-aos-duration="8000">
          <!-- Testimonial 1 -->
          <div class="item">
            <div class="shadow-effect">
              <a href="/our-services.php#sculpting">
                   <div class="service-card virtual-bg1">
                        <div class="text-box">
                            <p class="first-text">FS @ Lubna Rahman</p>
                            <h2>Body Sculpting &  <span>Functional Conditioning</span></h2>
                          
                        </div>
                    </div>
              </a>
            </div>
          </div>

         <!-- Testimonial 1 -->
          <div class="item">
            <div class="shadow-effect">
              <a href="/our-services.php#program">
                   <div class="service-card virtual-bg2">
                        <div class="text-box">
                            <p class="first-text">FS @ Lubna Rahman</p>
                            <h2>Fat Loss  <span>Program</span></h2>
                           
                        </div>
                    </div>
              </a>
            </div>
          </div>
          
          <!-- Testimonial 1 -->
          <div class="item">
            <div class="shadow-effect">
              <a href="/our-services.php#mental">
                   <div class="service-card virtual-bg3">
                        <div class="text-box">
                            <p class="first-text">FS @ Lubna Rahman</p>
                            <h2>Mental Wellness  <span>Coaching</span></h2>
                           
                        </div>
                    </div>
              </a>
            </div>
          </div>
          <!-- Testimonial 1 -->
          <div class="item">
            <div class="shadow-effect">
              <a href="/our-services.php#nutrition">
                   <div class="service-card virtual-bg4">
                        <div class="text-box">
                            <p class="first-text">FS @ Lubna Rahman</p>
                            <h2>Nutrition  <span>Diet Plan</span></h2>
                           
                        </div>
                    </div>
              </a>
            </div>
          </div>
          
          <!-- Testimonial 1 -->
          <div class="item">
            <div class="shadow-effect">
              <a href="/our-services.php#rehabilitation">
                   <div class="service-card virtual-bg5">
                        <div class="text-box">
                            <p class="first-text">FS @ Lubna Rahman</p>
                            <h2>Rehabilitation  <span>Coaching</span></h2>
                            
                        </div>
                    </div>
              </a>
            </div>
          </div>
          
          <!-- Testimonial 1 -->
          <div class="item">
            <div class="shadow-effect">
              <a href="/our-services.php#aesthetic">
                   <div class="service-card virtual-bg6">
                        <div class="text-box">
                            <p class="first-text">FS @ Lubna Rahman</p>
                            <h2>Aesthetic Wellness  <span>Program</span></h2>
                            
                        </div>
                    </div>
              </a>
            </div>
          </div>

        </div>
</section>

   
        
        
        <section class="aboutus_sections">
          <div class="container">
            <div class="row align-items-center justify-content-center">
             
              <div class="col-lg-12 col-md-12 col-12 ps-md-4 ps-0" data-aos="fade-left" data-aos-duration="8000">
                <div class="education_box">
                  <div class="text-start mb-md-3 mb-2 pt-2">
                    <h3 class="robot_slab text_color font33">FS Story: From Resistance to Recognition</h3>
                  </div>
				  
                 
                 <p>FS was founded in Prayagraj, India, in a setting where women had limited access to structured health and fitness spaces. Shaped by social constraints and long standing stereotypes, the idea of a women focused model required persistence and conviction from the outset.</p>

                    <p>In this environment, FS introduced a professional framework for fitness, rehabilitation, and holistic care for women. What began as a new and unfamiliar concept gradually earned trust, expanded its reach, and gained recognition beyond its place of origin while maintaining consistency and quality.</p>

                    <p>FS operates through disciplined systems aligned with international health and wellness protocols, reflecting a commitment to ethical practice and measurable standards. Its growth has been defined by continuity rather than scale alone.</p>

                    <p>Today, FS stands as an example of how purposeful initiatives can emerge from restrictive contexts and achieve global relevance. Its vision is to extend this approach across geographies while upholding integrity, structure, and internationally benchmarked standards.</p>

                </div>
              </div>
            </div>
          </div>
        </section>
		
		
        
      
<section class="client_section1 py-lg-5 py-4" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
          <div class="">
            
                <div class="text-center ">
                  <h3 class="robot_slab text_color  mb-md-4 mb-2 pt-2">Client Speaks</h3>
                </div>
              
          
          <div class="services-scroll-container">
            <div class="services-scroll-wrapper">
              <ul class="services-scroll-list">
                <li class="services-scroll-item">
               
                   <a href="images/reviews/1.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/1.jpg" alt="">
                       
                      </div>
              </a>
                </li>
                
                 <li class="services-scroll-item">
               
                   <a href="images/reviews/2.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/2.jpg" alt="">
                       
                      </div>
              </a>
                </li>
                
                 <li class="services-scroll-item">
               
                   <a href="images/reviews/3.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/3.jpg" alt="">
                       
                      </div>
              </a>
                </li>
                
                 <li class="services-scroll-item">
               
                   <a href="images/reviews/4.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/4.jpg" alt="">
                       
                      </div>
              </a>
                </li>
                
                 <li class="services-scroll-item">
               
                   <a href="images/reviews/5.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/5.jpg" alt="">
                       
                      </div>
              </a>
                </li>
                
                 <li class="services-scroll-item">
               
                   <a href="images/reviews/6.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/6.jpg" alt="">
                       
                      </div>
              </a>
                </li>
                
                
                 <li class="services-scroll-item">
               
                   <a href="images/reviews/7.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/7.jpg" alt="">
                       
                      </div>
              </a>
                </li>
                
                
                 <li class="services-scroll-item">
               
                   <a href="images/reviews/8.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/8.jpg" alt="">
                       
                      </div>
              </a>
                </li>
                
                
                 <li class="services-scroll-item">
               
                   <a href="images/reviews/9.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/9.jpg" alt="">
                       
                      </div>
              </a>
                </li>
                
                 <li class="services-scroll-item">
               
                   <a href="images/reviews/10.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/10.jpg" alt="">
                       
                      </div>
              </a>
                </li>
                
                
                 <li class="services-scroll-item">
               
                   <a href="images/reviews/11.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/11.jpg" alt="">
                       
                      </div>
              </a>
                </li>
                
                
                 <li class="services-scroll-item">
               
                   <a href="images/reviews/12.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/12.jpg" alt="">
                       
                      </div>
              </a>
                </li>
                
                
                
                 <li class="services-scroll-item">
               
                   <a href="images/reviews/13.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/13.jpg" alt="">
                       
                      </div>
              </a>
                </li>
                
                
                 <li class="services-scroll-item">
               
                   <a href="images/reviews/14.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/14.jpg" alt="">
                       
                      </div>
              </a>
                </li>
                
                
                 <li class="services-scroll-item">
               
                   <a href="images/reviews/15.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/15.jpg" alt="">
                       
                      </div>
              </a>
                </li>
                
                
                 <li class="services-scroll-item">
               
                   <a href="images/reviews/16.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/16.jpg" alt="">
                       
                      </div>
              </a>
                </li>
                
                
                 <li class="services-scroll-item">
               
                   <a href="images/reviews/17.jpg"
                 data-fancybox="album1"
                 data-caption="Body Sculpting"
                 class="d-block position-relative services-box-link">
                       <div class="services_boxs">
                        <img class="jbox-img rotate w-100" src="images/reviews/17.jpg" alt="">
                       
                      </div>
              </a>
                </li>
              </ul>
            </div>
            
            

          </div>
           <div class="testmiinals_buttom">
<a href="https://www.facebook.com/share/1GSQPa1EmM/?mibextid=wwXIfr" target="blank">
  Check More Reviews 
</a>
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
