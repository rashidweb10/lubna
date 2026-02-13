 <!-- JavaScript Files -->
  <script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>

  <script src="{{ asset('assets/frontend/js/swiper.min.js') }}"></script>
<!-- Slick JS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 <!-- Fancybox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
 
   <script src="{{ asset('assets/frontend/js/aos.js') }}"></script>
  
  <script>
/* =========================
   AOS INIT (ONLY ONCE)
========================= */
$(window).on('load', function () {
  AOS.init({
    duration: 800,
    once: true,
    offset: 120,
    easing: 'ease-in-out'
  });
});
</script>

 
 <script>
  
   var a = 0;
   $(window).scroll(function() {
     var oTop = $('#counter').offset().top - window.innerHeight;
     if (a == 0 && $(window).scrollTop() > oTop) {
       $('.counter-value').each(function() {
         var $this = $(this),
           countTo = $this.attr('data-count');
         $({
           countNum: $this.text()
         }).animate({
           countNum: countTo
         }, {
           duration: 2000,
           easing: 'swing',
           step: function() {
             $this.text(Math.floor(this.countNum) + '+'); // Add the + during the count
           },
           complete: function() {
             $this.text(this.countNum + '+'); // Ensure the + is added at the end
           }
         });
       });
       a = 1;
     }
   });
 </script>
 <script>
   $(document).ready(function() {
     $(".achievements").owlCarousel({
       loop: true,
       margin: 20,
       nav: false,
       autoplay: true,
       autoplayTimeout: 3000,
       responsive: {
         0: {
           items: 1
         },
         768: {
           items: 1
         },
         1024: {
           items: 1
         }
       }
     });
   });
 </script>
 <script>
   $(document).ready(function() {
     $(".news_update").owlCarousel({
       loop: true,
       margin: 20,
       nav: true,
       autoplay: false,
       autoplayTimeout: 3000,
       responsive: {
         0: {
           items: 1
         },
         768: {
           items: 3
         },
         1024: {
           items: 3
         }
       }
     });
   });
 </script>
 <!--<script>
   window.addEventListener("scroll", function() {
     const topEl = document.querySelector(".top_position");
     if (window.scrollY > 60) { // adjust value as needed
       topEl.classList.add("fixed-top");
     } else {
       topEl.classList.remove("fixed-top");
     }
   });
 </script>-->
 <script>
   $(document).ready(function() {
     $('.submenu').hover(function() {
       // On hover in
       $(this).closest('li').children('a.nav-link').addClass('active');
     }, function() {
       // On hover out
       $(this).closest('li').children('a.nav-link').removeClass('active');
     });
   });
 </script>
 <script>
   function nhToggleMenu() {
     const overlay = document.getElementById('nhOverlay');
     const toggleBtn = document.getElementById('nhMenuToggle');
     const items = document.querySelectorAll('#nhOverlay ul li a');
     // OPEN
     if (!overlay.classList.contains('nh-open')) {
       overlay.classList.add('nh-open');
       toggleBtn.classList.add('nh-open');
       items.forEach((item, index) => {
         item.classList.remove('animate__animated', 'animate__fadeInUp');
         item.style.opacity = "0";
         void item.offsetWidth; // restart animation
         item.classList.add('animate__animated', 'animate__fadeInUp');
         item.style.animationDelay = `${0.2 * index}s`;
         item.style.opacity = "1";
       });
     } else {
       // CLOSE
       overlay.classList.remove('nh-open');
       toggleBtn.classList.remove('nh-open');
       items.forEach(item => {
         item.style.opacity = "0";
       });
     }
   }
 </script>

 
<script>
//   document.addEventListener("DOMContentLoaded", function() {
//     Fancybox.bind("[data-fancybox='gallery']", {
//       Thumbs: { autoStart: true },
//       Toolbar: { display: ["zoom", "close"] },
//     });
//   });
</script>

    
    
<script>
   $(document).ready(function(){
    $('#customers-testimonials').slick({
        infinite: true,
        slidesToShow: 3,
        centerPadding: '0px',
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        centerMode: true, // Keeps the centered slide
        focusOnSelect: true,  // Ensures that the selected testimonial is active
        responsive: [
            {
                breakpoint: 1170,
                settings: {
                    slidesToShow: 3,
                     // Add padding for larger screens
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    centerPadding: '0px', // Add padding for medium screens
                }
            },
             {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    centerPadding: '0px', // Add padding for medium screens
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '0px', // Add padding for smaller screens
                }
            }
        ]
    });

    // Apply opacity to inactive items
    $('#customers-testimonials').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        var $slides = $(slick.$slides);
        $slides.each(function(index, slide) {
            $(slide).css('opacity', 1);  // Set all to opacity 0.5 initially
        });
    });

    $('#customers-testimonials').on('afterChange', function(event, slick, currentSlide){
        var $slides = $(slick.$slides);
        $slides.each(function(index, slide) {
            $(slide).css('opacity', 1);  // Reset opacity of all
        });
        $($slides[currentSlide]).css('opacity', 1);  // Set opacity of active slide to 1
    });
});
</script>


<script>
let index = 0;
const slides = document.querySelectorAll(".slideBanner");

function show(){
  slides.forEach(s => s.classList.remove("active"));
  slides[index].classList.add("active");
  index = (index + 1) % slides.length;
}

/* 10s zoom + 10s fade = 20s total */
setInterval(show, 20000);
</script>

<script>
// let i = 0;
// const slides = document.querySelectorAll(".slideBanner");

// function show(){
//   slides.forEach(s=>s.classList.remove("active","old"));

//   let prev = i;
//   i = (i + 1) % slides.length;

//   slides[prev].classList.add("old");
//   slides[i].classList.add("active");
// }

// /* zoom 5s + fade 3s */
// setInterval(show, 9000);
// </script>

<script>
// document.addEventListener("DOMContentLoaded", function() {
//   const slides = document.querySelectorAll(".slideBanner");
//   if (!slides.length) return;
//   let index = 0;

//   const show = () => {
//     slides.forEach((slide, i) => {
//       slide.classList.toggle("active", i === index);
//     });
//     index = (index + 1) % slides.length;
//   };

//   show();
//   setInterval(show, 5000);
// });
</script>

<script>
let index = 0;
const slides = document.querySelectorAll(".slideBanner");
const total = slides.length;
let timer;

/* show slide */
function showSlide(i){
  slides.forEach(s => s.classList.remove("active"));
  slides[i].classList.add("active");
  index = i;
  resetAutoPlay();
}

/* next */
function nextSlide(){
  showSlide((index + 1) % total);
}

/* prev */
function prevSlide(){
  showSlide((index - 1 + total) % total);
}

/* autoplay */
function startAutoPlay(){
  timer = setInterval(nextSlide, 20000); // 10s zoom + 10s fade
}

function resetAutoPlay(){
  clearInterval(timer);
  startAutoPlay();
}

/* arrow events */
document.querySelector(".next").addEventListener("click", nextSlide);
document.querySelector(".prev").addEventListener("click", prevSlide);

startAutoPlay();
</script>


<script>
$(document).ready(function () {
    $('.client-carousel').owlCarousel({
        loop: true,
        margin: 20,
        items: 2,
        nav: true,          // ✅ enable arrows
        dots: false,        // optional (hide dots)
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        navText: [
            '<span class="owl-prev-icon">&#10094;</span>',
            '<span class="owl-next-icon">&#10095;</span>'
        ],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });
});
</script>

<!-- Dropdown hover control (JS fallback to ensure centered fade-in) -->
<!--<script>-->
<!--document.addEventListener("DOMContentLoaded", function() {-->
<!--  const dropdowns = document.querySelectorAll(".navbar-nav .dropdown");-->
<!--  dropdowns.forEach(dd => {-->
<!--    const menu = dd.querySelector(".dropdown-menu");-->
<!--    const toggle = dd.querySelector(".dropdown-toggle");-->
<!--    if (!menu || !toggle) return;-->

<!--    let hideTimer;-->
<!--    const open = () => {-->
<!--      clearTimeout(hideTimer);-->
<!--      menu.classList.add("show");-->
<!--      toggle.setAttribute("aria-expanded", "true");-->
<!--    };-->
<!--    const close = () => {-->
<!--      hideTimer = setTimeout(() => {-->
<!--        menu.classList.remove("show");-->
<!--        toggle.setAttribute("aria-expanded", "false");
      }, 120); // small delay to allow smooth exit
<!--    };-->

<!--    dd.addEventListener("mouseenter", open);-->
<!--    dd.addEventListener("mouseleave", close);-->
<!--    toggle.addEventListener("focus", open);-->
<!--    toggle.addEventListener("blur", close);-->
<!--  });-->
<!--});-->
<!--</script>-->

<!-- Mobile Sidebar Menu JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileSidebar = document.getElementById('mobileSidebar');
    const mobileSidebarOverlay = document.getElementById('mobileSidebarOverlay');
    const mobileSidebarClose = document.getElementById('mobileSidebarClose');
    const body = document.body;

    // Toggle sidebar function
    function toggleSidebar() {
        mobileSidebar.classList.toggle('active');
        mobileSidebarOverlay.classList.toggle('active');
        mobileMenuToggle.classList.toggle('active');
        body.classList.toggle('sidebar-open');
    }

    // Open sidebar
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            toggleSidebar();
        });
    }

    // Close sidebar
    if (mobileSidebarClose) {
        mobileSidebarClose.addEventListener('click', function(e) {
            e.preventDefault();
            toggleSidebar();
        });
    }

    // Close sidebar when clicking overlay
    if (mobileSidebarOverlay) {
        mobileSidebarOverlay.addEventListener('click', function() {
            toggleSidebar();
        });
    }

    // Mobile dropdown toggle functionality
    const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
    mobileDropdownToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const parentItem = this.closest('.mobile-menu-dropdown');
            const isActive = parentItem.classList.contains('active');
            
            // Close all other dropdowns
            document.querySelectorAll('.mobile-menu-dropdown').forEach(function(item) {
                if (item !== parentItem) {
                    item.classList.remove('active');
                }
            });
            
            // Toggle current dropdown
            if (isActive) {
                parentItem.classList.remove('active');
            } else {
                parentItem.classList.add('active');
            }
        });
    });

    // Close sidebar when clicking on a menu link (except dropdown toggle)
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link:not(.mobile-dropdown-toggle)');
    mobileMenuLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            // Small delay to allow navigation
            setTimeout(function() {
                toggleSidebar();
            }, 300);
        });
    });

    // Close sidebar on window resize if it's larger than mobile
    window.addEventListener('resize', function() {
        if (window.innerWidth > 991) {
            mobileSidebar.classList.remove('active');
            mobileSidebarOverlay.classList.remove('active');
            mobileMenuToggle.classList.remove('active');
            body.classList.remove('sidebar-open');
        }
    });

    // Prevent body scroll when sidebar is open
    const observer = new MutationObserver(function(mutations) {
        if (body.classList.contains('sidebar-open')) {
            body.style.overflow = 'hidden';
        } else {
            body.style.overflow = '';
        }
    });
    
    observer.observe(body, {
        attributes: true,
        attributeFilter: ['class']
    });
});
</script>

<script>
const body = document.body;
const desktopMenuBtn = document.getElementById("desktopMenuBtn");
const mobileMenuBtn = document.getElementById("mobileMenuBtn");
const closeBtn = document.getElementById("closeBtn");

// Handle desktop BMI button
if (desktopMenuBtn) {
  desktopMenuBtn.addEventListener("click", () => {
    body.classList.add("sidebar-open");
  });
}

// Handle mobile BMI button
if (mobileMenuBtn) {
  mobileMenuBtn.addEventListener("click", function(e) {
    e.preventDefault();
    e.stopPropagation();
    
    // Open BMI sidebar
    body.classList.add("sidebar-open");
    
    // Close mobile sidebar if open
    const mobileSidebar = document.getElementById('mobileSidebar');
    const mobileSidebarOverlay = document.getElementById('mobileSidebarOverlay');
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    
    if (mobileSidebar) {
        mobileSidebar.classList.remove('active');
    }
    if (mobileSidebarOverlay) {
        mobileSidebarOverlay.classList.remove('active');
    }
    if (mobileMenuToggle) {
        mobileMenuToggle.classList.remove('active');
    }
  });
}

if (closeBtn) {
  closeBtn.addEventListener("click", () => {
    body.classList.remove("sidebar-open");
  });
}
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const banner = document.querySelector("#customBanner");

    new bootstrap.Carousel(banner, {
      interval: 8000,
      ride: 'carousel',
      pause: false,
      touch: true,
      wrap: true
    });
  });
</script>

<script>
  // Fix for AOS animations - Instant scroll animations
  document.addEventListener("DOMContentLoaded", function() {
    // Handle page visibility changes (when user navigates back)
    document.addEventListener('visibilitychange', function() {
      if (!document.hidden && typeof AOS !== 'undefined') {
        // Instant refresh without delay
        AOS.refresh();
      }
    });
    
    // Handle pageshow event (for back/forward navigation)
    window.addEventListener('pageshow', function(event) {
      if (event.persisted && typeof AOS !== 'undefined') {
        // Instant refresh without delay
        AOS.refresh();
      }
    });
    
    // Handle scroll events for instant animations
    window.addEventListener('scroll', function() {
      if (typeof AOS !== 'undefined') {
        // Instant refresh on scroll - no delay
        AOS.refresh();
      }
    });
    
    // Also handle resize events
    window.addEventListener('resize', function() {
      if (typeof AOS !== 'undefined') {
        // Instant refresh on resize
        AOS.refresh();
      }
    });
  });
</script>



  <script>
    setTimeout(function () {

      $(document).ready(function () {

        let bmiFormData = {};

        /* ================= CALCULATE BMI ================= */
        $('.bmi-calculate-btn').on('click', function () {

          let name = $('#sidebar-name').val().trim();
          let phone = $('#sidebar-phone').val().trim();
          let gender = $('input[name="sidebar-gender"]:checked').val();
          let age = parseInt($('#sidebar-age').val());
          let weight = parseFloat($('#sidebar-weight').val());
          let heightCm = parseFloat($('#sidebar-height').val());

          let medicalHistory = [];
          $('input[name="medical-history"]:checked').each(function () {
            medicalHistory.push($(this).val());
          });

          let medicalOther = $('#medical-other-specify').val().trim();

          /* -------- VALIDATIONS -------- */
          if (name === '') {
            alert('Please enter your full name');
            return;
          }

          if (!phone || phone.trim() === '') {
            alert('Please enter a valid phone number');
            return;
          }

          if (!gender) {
            alert('Please select gender');
            return;
          }

          if (!age || age < 1 || age > 120) {
            alert('Please enter a valid age');
            return;
          }

          if (!weight || weight <= 0) {
            alert('Please enter valid weight');
            return;
          }

          if (!heightCm || heightCm <= 0) {
            alert('Please enter valid height');
            return;
          }

          /* -------- BMI CALCULATION -------- */
          let heightM = heightCm / 100;
          let bmi = (weight / (heightM * heightM)).toFixed(1);

          let status = '';
          if (bmi < 18.5) {
            status = 'Underweight';
          } else if (bmi < 24.9) {
            status = 'Normal weight';
          } else if (bmi < 29.9) {
            status = 'Overweight';
          } else {
            status = 'Obese';
          }

          /* -------- SHOW RESULT -------- */
          $('#bmi-value').html(bmi);
          $('#bmi-status').text(status);
          $('.bmi-result').fadeIn();

          $('.bmi-calculate-btn').hide();
          //$('.bmi-reset-btn').show();

          /* -------- STORE DATA FOR YES BUTTON -------- */
          bmiFormData = {
            name: name,
            phone: phone,
            gender: gender,
            age: age,
            weight: weight,
            height_cm: heightCm,
            bmi: bmi,
            bmi_status: status,
            medical_history: medicalHistory.join(', '),
            medical_other: medicalOther
          };

          /* -------- SHOW CONSULTATION OPTIONS -------- */
          $('.bmi-consultation').fadeIn();
        });


        /* ================= YES → SEND EMAIL ================= */
        // $('#consult-yes').on('click', function () {

        //     $.ajax({
        //         url: 'https://formspree.io/f/mojvnrjy',
        //         method: 'POST',
        //         dataType: 'json',
        //         data: bmiFormData,
        //         success: function () {
        //             alert('Your report has been sent successfully!');
        //             $('.bmi-consultation').hide();
        //             $('.bmi-reset-btn').click();
        //         },
        //         error: function () {
        //             alert('Something went wrong. Please try again.');
        //         }
        //     });

        // });

        $('#consult-yes').on('click', function () {

          let $btn = $(this);

          // Prevent double click
          if ($btn.prop('disabled')) return;

          // Save original button text
          let originalHtml = $btn.html();

          // Disable button + show loader
          $btn.prop('disabled', true)
            .css('pointer-events', 'none')
            .html('<i class="fa fa-spinner fa-spin me-2"></i> Sending...');

          // Reduce opacity
          $('.bmi-consultation').css('opacity', '0.5');

          $.ajax({
            url: 'https://formspree.io/f/mojvnrjy',
            method: 'POST',
            dataType: 'json',
            data: bmiFormData,

            success: function () {
              alert('Thanks you, we received your info and we will call you soon!');
              $('.bmi-consultation').hide();
              $('.bmi-reset-btn').click();
            },

            error: function () {
              alert('Something went wrong. Please try again.');
            },

            complete: function () {
              // Restore button & UI
              $btn.prop('disabled', false)
                .css('pointer-events', '')
                .html(originalHtml);

              $('.bmi-consultation').css('opacity', '1');
            }
          });

        });



        /* ================= NO → DO NOT SEND ================= */
        $('#consult-no').on('click', function () {
          alert('Thank You!');
          $('.bmi-consultation').hide();
          $('.bmi-reset-btn').click();
        });


        /* ================= RESET ================= */
        $('.bmi-reset-btn').on('click', function () {

          $('.bmi-sidebar-form')[0].reset();

          $('.bmi-result').hide();
          $('.bmi-consultation').hide();

          $('#bmi-value').html('');
          $('#bmi-status').text('');

          $('.bmi-calculate-btn').show();
          $('.bmi-reset-btn').hide();

          bmiFormData = {};
        });

      });

    }, 2000);
  </script>

<script src="https://www.google.com/recaptcha/api.js?render={{ config('custom.recaptcha_site_key') }}"></script>

<script>
    function protect_with_recaptcha_v3(formElement, action) {
        event.preventDefault();

        grecaptcha.ready(function () {
            grecaptcha.execute('{{ config('custom.recaptcha_site_key') }}', { action: action }).then(function (token) {
                // Create or update recaptcha_token input
                let tokenInput = formElement.querySelector('[name="recaptcha_token"]');
                if (!tokenInput) {
                    tokenInput = document.createElement('input');
                    tokenInput.type = 'hidden';
                    tokenInput.name = 'recaptcha_token';
                    formElement.appendChild(tokenInput);
                }
                tokenInput.value = token;

                //alert(token);

                // Create or update recaptcha_action input
                let actionInput = formElement.querySelector('[name="recaptcha_action"]');
                if (!actionInput) {
                    actionInput = document.createElement('input');
                    actionInput.type = 'hidden';
                    actionInput.name = 'recaptcha_action';
                    formElement.appendChild(actionInput);
                }
                actionInput.value = action;

                formElement.submit();
            });
        });
    }
</script>