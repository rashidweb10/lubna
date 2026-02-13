@extends('frontend.layouts.app')

@section('meta.title', 'Contact Us')
@section('meta.description', 'Contact Us')

@section('content')

@include('frontend.partials.breadcrumb', ['title' => "Contact Us"])

    <section class="py-lg-5 py-4">
      <div class="container">
      <div class="row g-5">
        <!-- Left Side -->
        <div class="col-lg-6 col-12 mb-4 mb-lg-0">
          <h3 class="mb-4 robot_slab">Get in touch</h3>
         
          <!-- Head Office 
          <div class="d-flex border_bottoms icon_hovers">
            <div class="icon-circle me-3">
              <i class="fa-solid fa-map"></i>
            </div>
            <div>
              <h5 class="fw-semibold mb-1">FS @ Labna Rahman</h5>
              <p class="mb-0 text-muted"><strong>Address:</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div> -->



          <!-- Email Us -->
          <div class="flex_contents">
          <div class="d-flex border_bottoms icon_hovers pt-4">
            <div class="icon-circle me-3">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <div>
              <h5 class="fw-semibold mb-1">Email Us</h5>
              <p class="mb-0 text-muted">{{get_setting('email')}}</p>
            </div>
          </div>

          <!-- Call Us -->
          <div class="d-flex mb-4 icon_hovers pt-4">
            <div class="icon-circle me-3">
              <i class="fa-brands fa-whatsapp"></i>
            </div>
            <div>
              <h5 class="fw-semibold mb-1">Message Us</h5>
              <p class="mb-0 text-muted">{{get_setting('phone')}}</p>
            </div>
          </div>
</div>
        </div>

        <!-- Right Side - Contact Form -->
        <div class="col-lg-12 col-12">
            <h3 class="mb-4 robot_slab">Send us a message</h3>
          <div class="bg-light p-4 p-md-5 rounded-3 shadow-sm">
            

              <form class="needs-validation" id="contactForm" action="{{route('form.submit')}}" method="POST" onsubmit="protect_with_recaptcha_v3(this, 'contact')">
              @include('frontend.components.form-alert')
              @csrf
              <!-- Name and Company -->
              <div class="row g-3">
                <div class="col-md-4 col-12">
                  <label for="name" class="form-label">Name</label>
                     <input type="hidden" name="form_name" value="contact">
                     <input type="text" class="form-control" name="name" placeholder="Name" required>

                </div>
               
                 <div class="col-md-4 col-12">
                  <label for="phone" class="form-label">Phone</label>
<input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>
                <div class="col-md-4 col-12">
                  <label for="email" class="form-label">Email</label>
                 
<input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                

              <!-- Message -->
                <div class="col-md-12 col-12">
              <div class="mt-md-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>

              </div>
              </div>

              <!-- Button -->
              
                <div class="col-md-2 col-12">
              <button type="submit" class="btn btn-primary w-100 py-2 mt-md-4 fs-5">
                Send
              </button>
              </div>
              
               </div>
            </form>

          </div>
        </div>
        
        
       
        
      </div>
    </div>
  </section>

@endsection