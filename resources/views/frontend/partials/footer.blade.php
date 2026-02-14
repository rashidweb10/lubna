<div class="footer_scial">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
            
            </div>
            <div class="col-lg-5 col-md-6">
                <h4 class="robot_slab">Follow <b>{{get_setting('follow_text')}}</b></h4>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="d-flex gap-2 justify-content-md-end justify-content-center mt-lg-0 mt-2">
                    <a target="_blank" href="{{get_setting('facebook_url')}}" title="Facebook">
                    <img class="w-20 hvr-bounce-in" src="{{ asset('assets/frontend/img/fb.png') }}">
                    </a>
                    
                    <a target="_blank" href="{{get_setting('instagram_url')}}" title="Instagram ">
                    <img class="w-20 hvr-bounce-in" src="{{ asset('assets/frontend/img/insta.png') }}">
                    </a>
                    
                    <a target="_blank" href="{{get_setting('linkedin_url')}}" title="Linkedin">
                    <img class="w-20 hvr-bounce-in" src="{{ asset('assets/frontend/img/in.png') }}">
                    </a>
                    
                    <a target="_blank" href="{{get_setting('youtube_url')}}" title="YouTube">
                    <img class="w-20 hvr-bounce-in" src="{{ asset('assets/frontend/img/yt.png') }}">
                    </a>
                </div>
            </div>
    </div>
    </div>
</div>
           
<footer class="footer pt-md-4 pt-4 pb-md-2 pb-md-5">
   <div class="container">
     <div class="row">
       <div class="col-md-2">
         <div class="footer_logo">
           <a href="/">
              <img title="FS-Lubna Rahman Logo" class="w-100 hvr-bounce-in" src="{{ asset('assets/frontend/img/logo.png') }}">
           </a>
         </div>
       </div>
       <div class="col-md-10">
         <div class="row">
           <div class="col-lg-8 col-md-12">
               
               <div class="d-md-flex browser_link">
                <ul class="mb-2 mb-lg-0 d-md-flex align-items-start">
 
   <li class="nav-item">
     <a class="nav-link {{ request()->routeIs('home') ? 'addmissionactive' : '' }}" href="{{ route('home') }}">Home</a>
   </li>
   <li class="nav-item">
     <a class="nav-link {{ request()->routeIs('about') ? 'addmissionactive' : '' }}" href="{{ route('about') }}">About Us</a>
   </li>
   <li class="nav-item">
     <a class="nav-link {{ request()->routeIs('services') ? 'addmissionactive' : '' }}" href="{{ route('services') }}">Our Services</a>
   </li>

   <li class="nav-item">
     <a class="nav-link {{ request()->routeIs('highlights') ? 'addmissionactive' : '' }}" href="{{ route('highlights') }}">Highlights</a>
   </li>
   <li class="nav-item">
     <a class="nav-link {{ request()->routeIs('contact') ? 'addmissionactive' : '' }}" href="{{ route('contact') }}">Contact Us</a>
   </li>
</ul>


              </div>
              
           </div>
           
           <div class="col-lg-4 col-md-12">
               
               <div class="start_of_month hvr-bounce-in">
     <a class="robot_slab" data-bs-toggle="modal" data-bs-target="#earth_modal">
         
          <img class="start_icons" src="{{ asset('assets/frontend/img/stars.png') }}">
          <img class="" src="{{ uploaded_asset(get_setting('sof_profile_picture')) }}">
         <span class="robot_slab "><b>{{ get_setting('star_of_month_text') }}</b> <span class="second_span">Star of the Month</span></span>
     </a>
 </div>
 
           </div>
           
           
         </div>
       </div>
       <div class="col-lg-2"></div>
       <div class="col-lg-7 col-md-9">
         <p class="footer-copyright mb-0 pt-lg-3 pb-lg-3">Copyright © by {{get_setting('name')}} {{ date("Y") }} | All Rights Reserved.</p>
       </div>
       <div class="col-lg-3 col-md-3 text-md-end text-center">
         <p class="footer-copyright mb-0 copyrighr2 text-md-end text-center pt-3 pt-lg-3 pt-md-0 pb-3">Powered by <a href="{{ config('custom.author_url') }}" target="_blank" >{{ config('custom.author') }}</a>
         </p>
       </div>
     </div>
   </div>
 </footer>
 
 
 
 <div class="whatsapp">
     <a class="robot_slab " href="https://api.whatsapp.com/send?phone={{get_setting('phone')}}&text=Hi%2C+I+am+contacting+you+through+your+website+https%3A%2F%2Ffs-lubnarahman.com%2F‬‬‬" target="_blaUs">
          <img class="hvr-bounce-in" src="{{ asset('assets/frontend/img/whatsap.png') }}"> <span class="robot_slab ">Book a Consultation</span>
     </a>
 </div>
 


<div class="modal fade" id="earth_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content modern-modal">
      
      <div class="modal-header modern-modal-header">
        <div class="modal-header-content">
          <div class="modal-icon-wrapper">
            
          </div>
          <div class="modal-title-wrapper">
            <h5 class="modal-title robot_slab " id="exampleModalLabel">Star of the Month</h5>
            </div>
        </div>
        <button type="button" class="btn-close modern-close" data-bs-dismiss="modal" aria-label="Close">
          <i class="fas fa-times"></i>
        </button>
      </div>
      
      <div class="modal-body modern-modal-body">
        
        <div class="row">
            <div class="col-md-12">
                <div class="">
                     <img class="w-100" src="{{ uploaded_asset(get_setting('sof_popup_image')) }}" />
                    <p class="text-center font-bold fw-bold pt-3">{{get_setting('star_of_month_text')}}</p>
                </div>
            </div>
        </div>
        
         </div>
      
    </div>
  </div>
</div>