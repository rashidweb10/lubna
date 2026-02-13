  <!-- Header Section Start -->
  <div class="top_position">
    <div class="header_section_top">
      <div class="container position-relative">
        <div class="row ">
          <div class="col-lg-2"></div>



          <div class="col-lg-10 col-md-6 col-7">
            <p class="mrg_35">Whatsapp: {{get_setting('phone')}}</p>
          </div>



          <div class="col-lg-10 col-md-6 col-5 d-lg-none d-block">
            <div class="mobile_bmi">
              <button class="menu-btn" id="mobileMenuBtn"> Know your BMI
              </button>
            </div>
          </div>


        </div>
      </div>
    </div>
    <header>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-1 col-md-2 col-3 order-lg-1 order-md-1 order-2">
            <div class="logo_width">
              <a class="navbar-brand" href="/">
                  @if(get_setting('logo'))
                      <img 
                          class="w-150 hvr-bounce-in"
                          src="{{ uploaded_asset(get_setting('logo')) }}"
                          title="{{ uploaded_asset_name(get_setting('logo')) }}"
                          alt="Logo"
                      />
                  @else
                      <img 
                          class="w-150 hvr-bounce-in"
                          src="{{ asset('assets/frontend/img/logo.png') }}"
                          alt="Logo"
                      />
                  @endif
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-2 col-1 order-lg-2 order-md-3 order-4 d-lg-none d-block">
            <button class="navbar-toggler mobile-menu-toggle" type="button" id="mobileMenuToggle"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">

              </span>
            </button>
          </div>

          <div class="col-lg-3 col-md-8 col-8 order-lg-2 order-md-2 order-3">
            <h3 class="header_text roboto mt-md-0 mt-2">{{get_setting('name')}}</h3>

          </div>


          <div class="col-md-8 col-3 order-md-3 d-lg-block d-none">
            <div class="d-flex browser_link">
              <ul class="ms-auto mb-2 mb-lg-0 d-flex align-items-center">

                <li class="nav-item">
                  <a class="nav-link {{ request()->routeIs('home') ? 'addmissionactive' : '' }}"
                    href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ request()->routeIs('about') ? 'addmissionactive' : '' }}"
                    href="{{ route('about') }}">About Us</a>
                </li>
                <!--<li class="nav-item">-->
                <!--  <a class="nav-link {{ request()->routeIs('services') ? 'addmissionactive' : '' }}" href="{{ route('services') }}">Our Services</a>-->
                <!--</li>-->
                <li class="nav-item dropdown megamenu position_tops">
                  <a class="nav-link dropdown-toggle {{ request()->routeIs('services') ? 'addmissionactive' : '' }}" href="{{ route('services') }}" id="servicesDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="true">
                    Our Services
                  </a>
                  <div class="dropdown-menu mega-menu" aria-labelledby="servicesDropdown">
                    <div class="mega-inner">
                      <div class="mega-visual">
                        <div class="mega-visual-wrap">
                           <img class="menulogo hvr-bounce-in" src="{{ asset('assets/frontend/img/logo.png') }}" title="FS-Lubna Rahman Logo"
                              alt="" />
                          <p class="fslubhna">{{get_setting('name')}}</p>
                        </div>
                      </div>
                      <div class="mega-links">
                        @php
                            // Check if we're on the services page or if we can load services data
                            $services = [];
                            if(isset($pageData) && $pageData->slug == 'services') {
                                $services = json_decode($pageData->meta->where('meta_key', 'services')->first()->meta_value ?? '[]', true);
                            } else {
                                // Load services data from database if not on services page
                                $servicesPage = \App\Models\Page::with('meta')->where('slug', 'services')->where('is_active', 1)->first();
                                if($servicesPage) {
                                    $services = json_decode($servicesPage->meta->where('meta_key', 'services')->first()->meta_value ?? '[]', true);
                                }
                            }
                        @endphp
                        @if(isset($services['itration']) && is_array($services['itration']))
                            @foreach($services['itration'] as $index => $iteration)
                                @php
                                    $slug = strtolower(str_replace(' ', '-', $services['name'][$index] ?? 'service'));
                                @endphp
                                <a class="mega-link" href="{{ route('services') }}#{{ $slug }}">{{ $services['name'][$index] ?? 'Service' }}</a>
                            @endforeach
                        @else
                            <!-- Default service links if no services are configured -->
                            <a class="mega-link" href="{{ route('services') }}#aesthetic">Aesthetic Wellness Program</a>
                            <a class="mega-link" href="{{ route('services') }}#rehabilitation">Rehabilitation Coaching</a>
                            <a class="mega-link" href="{{ route('services') }}#mental">Mental Wellness Coaching</a>
                            <a class="mega-link" href="{{ route('services') }}#program">Fat Loss Program</a>
                            <a class="mega-link" href="{{ route('services') }}#nutrition">Nutrition Diet Plan</a>
                            <a class="mega-link" href="{{ route('services') }}#sculpting">Body Sculpting</a>
                        @endif
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ request()->routeIs('highlights') ? 'addmissionactive' : '' }}"
                    href="{{ route('highlights') }}">Highlights</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ request()->routeIs('contact') ? 'addmissionactive' : '' }}"
                    href="{{ route('contact') }}">Contact Us</a>
                </li>
              </ul>


            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="container">

      <h4 class="transforming_text">{{get_setting('tagline')}}</h4>

      <!-- MENU BUTTON -->
      <div class="calculate_buttons">
        <button class="menu-btn" id="desktopMenuBtn">
          Know your BMI
        </button>
      </div>
      <!-- RIGHT SIDEBAR -->
      <div class="sidebar" id="sidebar">
        <span class="close-btn" id="closeBtn">&times;</span>

        <!-- BMI Calculator Content -->
        <div class="bmi-calculator-sidebar">
          <h3 class="bmi-sidebar-title">BMI Calculator</h3>



          <form class="bmi-sidebar-form">


            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="bmi-field">
                  <label for="sidebar-name">Full Name</label>
                  <input type="text" id="sidebar-name" placeholder="Enter your full name">
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="bmi-field">
                  <label for="sidebar-phone">Phone Number</label>
                  <input type="tel" id="sidebar-phone" placeholder="Enter your phone number">
                </div>
              </div>

              <!-- Name and Phone in One Row -->

              <!-- Gender Selection -->
              <div class="col-md-4 mb-md-0 mb-3">
                <div class="bmi-field">
                  <label>Gender</label>
                  <div class="bmi-gender">
                    <label class="bmi-radio">
                      <input type="radio" name="sidebar-gender" value="male">
                      <span>Male</span>
                    </label>
                    <label class="bmi-radio">
                      <input type="radio" name="sidebar-gender" value="female">
                      <span>Female</span>
                    </label>
                  </div>
                </div>
              </div>

              <div class="col-md-2 col-6 mb-md-0 mb-3">

                <div class="bmi-field">
                  <label for="sidebar-age">Age</label>
                  <input type="number" id="sidebar-age" placeholder="Age">
                </div>


              </div>
              <div class="col-md-3 col-6 mb-md-0 mb-3">

                <div class="bmi-field">
                  <label for="sidebar-weight">Weight (kg)</label>
                  <input type="number" id="sidebar-weight" placeholder="Weight">
                </div>

              </div>

              <div class="col-md-3 col-12 mb-md-0 mb-3">
                <div class="bmi-field">
                  <label for="sidebar-height">Height (cm)</label>
                  <input type="number" id="sidebar-height" placeholder="Height in cm">
                </div>
              </div>
              <!-- Height -->
            </div>

            <!-- Medical History Section -->
            <div class="col-md-12">

              <div class="bmi-field bmi-field1212">
                <label>Medical History</label>
                <div class="medical-history-checkboxes">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="medical-hypertension" name="medical-history"
                      value="Hypertension/ High BP">
                    <label class="form-check-label" for="medical-hypertension">Hypertension/ High BP</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="medical-diabetes" name="medical-history"
                      value="Diabetes">
                    <label class="form-check-label" for="medical-diabetes">Diabetes</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="medical-arthritis" name="medical-history"
                      value="Arthritis / Joint Pain">
                    <label class="form-check-label" for="medical-arthritis">Arthritis / Joint Pain</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="medical-pcod" name="medical-history"
                      value="PCOD / PCOS">
                    <label class="form-check-label" for="medical-pcod">PCOD / PCOS</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="medical-weightloss" name="medical-history"
                      value="No Disease Only Weight Loss">
                    <label class="form-check-label" for="medical-weightloss">No Disease Only Weight Loss</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="medical-thyroid" name="medical-history"
                      value="Thyroid Disorder">
                    <label class="form-check-label" for="medical-thyroid">Thyroid Disorder</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="medical-heart" name="medical-history"
                      value="Heart Disease">
                    <label class="form-check-label" for="medical-heart">Heart Disease</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="medical-liver" name="medical-history"
                      value="Fatty Liver">
                    <label class="form-check-label" for="medical-liver">Fatty Liver</label>
                  </div>

                </div>
                <div class="medical-other-textarea mt-3">
                  <label for="medical-other-specify">Other Specify:</label>
                  <textarea class="form-control" id="medical-other-specify" rows="3"
                    placeholder="Please specify your medical condition..."></textarea>
                </div>
              </div>
            </div>

            <div class="alert alert-success bmi-result text-center mt-3" style="display:none;" role="alert">
              <p class="mb-1">Your Body Mass Index (BMI) is</p>
              <div id="bmi-value" class="fw-bold display-6"></div>
              <p class="mb-0" id="bmi-status"></p>
            </div>

            <div class="bmi-consultation text-center mt-3" style="display:none;">
              <p class="fw-semibold">Do you want doctor consultation?</p>
              <button type="button" class="btn btn-success me-2" id="consult-yes">Yes</button>
              <button type="button" class="btn btn-danger" id="consult-no">No</button>
            </div>


            <!-- Calculate Button -->
            <button type="button" class="bmi-calculate-btn">Calculate BMI</button>
            <button type="button" class="bmi-reset-btn" style="display:none;">Reset</button>


          </form>


          <!-- BMI Range Chart -->
          <div class="bmi-chart-container mt-5">
            <h4 class="bmi-chart-title">BMI Range Chart</h4>

            <!-- Male BMI Range -->
            <div class="bmi-range-section">

              <div class="bmi-range-list">
                <div class="bmi-range-item">
                  <span class="bmi-range-label">Underweight</span>
                  <div class="bmi-range-bar underweight">
                    <span>&lt; 18.5</span>
                  </div>
                </div>
                <div class="bmi-range-item">
                  <span class="bmi-range-label">Normal</span>
                  <div class="bmi-range-bar normal">
                    <span>18.5 - 24.9</span>
                  </div>
                </div>
                <div class="bmi-range-item">
                  <span class="bmi-range-label">Overweight</span>
                  <div class="bmi-range-bar overweight">
                    <span>25 - 29.9</span>
                  </div>
                </div>
                <div class="bmi-range-item">
                  <span class="bmi-range-label">Obese</span>
                  <div class="bmi-range-bar obese">
                    <span>â‰¥ 30</span>
                  </div>
                </div>
              </div>
            </div>



            <!-- Visual BMI Scale -->
            <div class="bmi-visual-scale">
              <div class="bmi-scale-title">BMI Visual Scale</div>
              <div class="bmi-scale-bar">
                <div class="bmi-scale-gradient"></div>
              </div>
              <div class="bmi-scale-markers">
                <span>0</span>
                <span>15</span>
                <span>20</span>
                <span>25</span>
                <span>30</span>
                <span>35</span>
                <span>40+</span>
              </div>
            </div>
          </div>


          <!--<button type="button" class="bmi-calculate-btn1">SEND</button>-->

        </div>
      </div>
    </div>
  </div>


  <div class="mobile-sidebar-overlay" id="mobileSidebarOverlay"></div>
  <div class="mobile-sidebar" id="mobileSidebar">
    <div class="mobile-sidebar-header">
      <div class="moble_flex">
        <img class="mobile-sidebar-logo" src="{{ uploaded_asset(get_setting('logo')) }}" alt="{{ uploaded_asset_name(get_setting('logo')) }}" />
        <h4>{{get_setting('name')}}</h4>
      </div>
      <button class="mobile-sidebar-close" id="mobileSidebarClose">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <nav class="mobile-sidebar-nav">
      <ul class="mobile-sidebar-menu">
        <li class="mobile-menu-item">
          <a href="{{ route('home') }}" class="mobile-menu-link {{ request()->routeIs('home') ? 'active' : '' }}">
            <i class="fas fa-home"></i> Home
          </a>
        </li>
        <li class="mobile-menu-item">
          <a href="{{ route('about') }}"
            class="mobile-menu-link {{ request()->routeIs('about') ? 'active' : '' }}">
            <i class="fas fa-user"></i> About Us
          </a>
        </li>
        <li class="mobile-menu-item mobile-menu-dropdown">
          <a href="{{ route('services') }}" class="mobile-menu-link mobile-dropdown-toggle {{ request()->routeIs('services') ? 'active' : '' }}">
            <i class="fas fa-briefcase"></i> Our Services <i class="fas fa-chevron-down mobile-dropdown-icon"></i>
          </a>
          <ul class="mobile-submenu">
            <li><a href="{{ route('services') }}#aesthetic">Aesthetic Wellness Program</a></li>
            <li><a href="{{ route('services') }}#rehabilitation">Rehabilitation Coaching</a></li>
            <li><a href="{{ route('services') }}#mental">Mental Wellness Coaching</a></li>
            <li><a href="{{ route('services') }}#program">Fat Loss Program</a></li>
            <li><a href="{{ route('services') }}#nutrition">Nutrition Diet Plan</a></li>
            <li><a href="{{ route('services') }}#sculpting">Body Sculpting</a></li>
          </ul>
        </li>
        <li class="mobile-menu-item">
          <a href="{{ route('highlights') }}"
            class="mobile-menu-link {{ request()->routeIs('highlights') ? 'active' : '' }}">
            <i class="fas fa-images"></i> Highlights
          </a>
        </li>
        <li class="mobile-menu-item">
          <a href="{{ route('contact') }}"
            class="mobile-menu-link {{ request()->routeIs('contact') ? 'active' : '' }}">
            <i class="fas fa-envelope"></i> Contact Us
          </a>
        </li>

      </ul>
    </nav>
    <div class="mobile-sidebar-footer">
      <p class="mobile-contact-info">
        <i class="fa-brands fa-whatsapp"></i> Whatsapp: +91 9336078476
      </p>
    </div>
  </div>  