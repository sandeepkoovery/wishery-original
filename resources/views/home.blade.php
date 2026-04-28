@extends('layout.app')

@section('title', 'Home - WishNew')

@section('content')
   <style>
      #contactForm label {
         color: #e2ba46;
      }
   </style>
   <!-- Hero -->
   <section class="hero position-relative">
      <video autoplay muted loop playsinline class="bg-video desktop-video">
         <source src="{{ url('video/banner.mp4') }}" type="video/mp4">
      </video>
      <!-- Mobile Video -->
      <video autoplay muted loop playsinline class="bg-video mobile-video">
         <source src="{{ url('video/banner_mob.mp4') }}" type="video/mp4">
      </video>
      <div class="container hero-content">
         <div class="row align-items-center">
            <div class="col-lg-12">
               <h1 class="banner-m1-txt pt-5 mt-5">Make Your Brand Heard, <br>Not Just Seen</h1>
               <!-- <p class="banner-m2-txt">Your brand has something to say. Wishery helps to say it louder. Your brand deserves better than Canva templates and copy-paste captions!</p> -->
            </div>
         </div>
      </div>
      <!-- <div class="position-absolute bottom-0 hero-scroll">
               <div class="scroll-text">
                  "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp;
               </div>
            </div> -->
   </section>
   <section class="blue-bg" style="background:#0a1851;">
      <div class="container">
         <h3>What Makes Us Unique!</h3>
         <div class="display-3">NO FLUFF. <br>JUST RESULT!</div>
         <p class="mt-4">At Wishery, we blend smart social media marketing with creative production that truly connects. We
            don’t just create things that look cool. We make stuff that gets results. That’s what makes us different!</p>
      </div>
   </section>
   <!-- Clients -->
   <section id="clients" class="clients blue-bg " style="background:#0a1851;">
      <div class="container-fluid text-center">
         <div class="">
            <!-- <h3>CLIENTS</h3> -->
            <h2 class="pb-2">CLIENTS They Trust Us</h2>
            <div class="client-slider mt-5 ">
               <ul>
                  <li><img src="{{ url('images/clg1.png') }}" alt="logo-name"></li>
                  <li><img src="{{ url('images/clg2.png') }}" alt="logo-name"></li>
                  <li><img src="{{ url('images/clg3.png') }}" alt="logo-name"></li>
                  <li><img src="{{ url('images/clg4.png') }}" alt="logo-name"></li>
                  <li><img src="{{ url('images/clg5.png') }}" alt="logo-name"></li>
                  <li><img src="{{ url('images/clg6.png') }}" alt="logo-name"></li>
                  <li><img src="{{ url('images/clg7.png') }}" alt="logo-name"></li>
                  <li><img src="{{ url('images/clg8.png') }}" alt="logo-name"></li>
                  <li><img src="{{ url('images/clg9.png') }}" alt="logo-name"></li>
                  <!-- <li><img src="images/clg10.png" alt="logo-name"></li>
                        <li><img src="images/clg11.png" alt="logo-name"></li> -->
               </ul>
            </div>
         </div>
      </div>
   </section>
   <!-- What We Offer -->
   <section id="offer" class="blue-bg ">
      <div class="container why-choose">
         <h2 class=" mb-4">What we can do</h2>
         <div class="carousel3d" id="offerCarousel">
            <div class="item">
               <div class="carousel-card">
                  <img src="{{url('images/web.jpg')}}">
                  <p class="caption">Web Design</p>
               </div>
            </div>
            <div class="item">
               <div class="carousel-card">
                  <img src="{{url('images/seo.jpg')}}">
                  <p class="caption">SEO</p>
               </div>
            </div>
            <div class="item">
               <div class="carousel-card">
                  <img src="{{url('images/branding.jpg')}}">
                  <p class="caption">Branding</p>
               </div>
            </div>
            <div class="item">
               <div class="carousel-card">
                  <img src="{{url('images/web_dev.jpg')}}">
                  <p class="caption">Web Development</p>
               </div>
            </div>
            <div class="item">
               <div class="carousel-card">
                  <img src="{{url('images/social.jpeg')}}">
                  <p class="caption">Social Media Marketing</p>
               </div>
            </div>
            <!-- <div class="item">
                     <div class="carousel-card">
                        <img src="https://thumbs.dreamstime.com/b/shopaholic-woman-purchases-38390374.jpg">
                        <p class="caption">Search Engine Marketing</p>
                     </div>
                  </div> -->
            <div class="item">
               <div class="carousel-card">
                  <img src="{{url('images/offline.jpg')}}">
                  <p class="caption">Offline Marketing</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Portfolio -->
   <section id="portfolio" class="blue-bg">
      <div class="container ">
         <h2>Portfolio</h2>
         <a href="{{url('portfolio')}}">
            <div class="iso-grid  position-relative" id="isoGrid">
            </div>
         </a>
      </div>
      <div class=""></div>
      <div class="blue-bg-gradient1"></div>
   </section>
   <!-- Testimonials -->
   <section id="testimonials" class="blue-bg">
      <div class="container">
         <h2>What our clients say</h2>
         <div class="testimonial-carousel">
            <!-- Testimonial 1 -->
            <div class="testimonial-item">
               <div class="stars">★★★★★</div>
               <p>Partnering with Wishery was one of the best decisions we made for our brand. Their team is Creative and
                  truly understands what connects with an audience.</p>
               <!-- <a href="#" class="read-more">Read more</a> -->
               <div class="avatar"><img src="{{url('images/t3.jpg')}}?random=1" alt="Cheryl"></div>
               <h5>Arun Thampy</h5>
               <span>Managing Director, INSPIRE</span>
            </div>
            <!-- Testimonial 2 -->
            <div class="testimonial-item">
               <div class="stars">★★★★★</div>
               <p>Thank you, Wishery, for 6 amazing months! Your ideas and support have grown our brand online. We’ve seen
                  real results and stronger connections. Looking forward to more wins together!</p>
               <!-- <a href="#" class="read-more">Read more</a> -->
               <div class="avatar"><img src="{{url('images/t2.jpg')}}?random=2" alt="Tony"></div>
               <h5>Dinil Raphel</h5>
               <span>Managing Partner, Grace Caterers</span>
            </div>
            <!-- Testimonial 3 -->
            <div class="testimonial-item">
               <div class="stars">★★★★★</div>
               <p>Wishery Pvt Ltd has really helped Nail It grow online. Their digital marketing support is creative
                  consistent and effective. We are happy with their work and results</p>
               <!-- <a href="#" class="read-more">Read more</a> -->
               <div class="avatar"><img src="{{url('images/t1.jpg')}}?random=3" alt="Kevin"></div>
               <h5>Nail it By Gayathri Arun</h5>
               <span>Cine Artist & Entrepreneur</span>
            </div>
            <!-- Testimonial 4 -->
            <!--  <div class="testimonial-item">
                     <div class="stars">★★★★★</div>
                     <p>The easiest pricing plugin I've ever come across! The UI is intuitive, and it's super-easy to install, too!...</p>
                     <a href="#" class="read-more">Read more</a>
                     <div class="avatar"><img src="https://picsum.photos/50?random=4" alt="Marva"></div>
                     <h5>Marva Flores</h5>
                     <span>Surgical technician</span>
                  </div> -->
         </div>
      </div>
   </section>
   <!-- Contact -->
   <section id="contact" class="contact py-5">
      <div class="container-fluid p-0">
         <div class="row align-items-center justify-content-start m-0">

            <!-- Left Side: Address Section -->
            <div class="col-lg-6 mb-6 mb-lg-0 text-start left-info">
               <h2 class="text-start" style="color: #e2ba46;">Need Marketing Solution?</h2>
               <p>We’re here to help you!</p>
               <div class="contact-info">
                  <p><strong>Address:</strong><br>SRM Road, Near Nirmala Sisu Bhavan, <br>Ayyappankavu, Ernakulam, Kerala
                     682018</p>
                  <p><strong>Phone:</strong><br> +91 92079 44882</p>
                  <p><strong>Email:</strong><br> wisherypvtltd@gmail.com</p>
               </div>
               <div class="social_wrap social_footer">
                  <a href="https://www.linkedin.com/company/iuhaa-wishery-pvt-ltd/" target="_blank"><i
                        class="fab fa-linkedin"></i></a>
                  <a href="https://www.instagram.com/wishery._/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                  <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fa-brands fa-youtube"></i></a>
               </div>
            </div>

            <!-- Right Side: Form -->
            <div class="col-lg-6">
               <form id="homecontactForm" action="{{ route('contact.submit') }}" method="POST" novalidate>
                  @csrf
                  <!-- Name -->
                  <div class="mb-3">
                     <div class="d-flex align-items-center gap-2">
                        <label class="me-2" style="width:80px">NAME</label>
                        <div class="flex-grow-1">
                           <input name="name" type="text" class="form-control custom-input" placeholder="Enter your name">
                           <div class="invalid-feedback" id="error-name"></div>
                        </div>
                     </div>
                  </div>

                  <div class="mb-3">
                     <div class="d-flex align-items-center gap-2">
                        <label class="me-2" style="width:80px; white-space:nowrap;">PHONE</label>
                        <div class="flex-grow-1">
                           <input name="phone" type="text" class="form-control custom-input"
                              placeholder="Enter your phone">
                           <div class="invalid-feedback" id="error-phone"></div>
                        </div>
                     </div>
                  </div>

                  <div class="mb-3">
                     <div class="d-flex align-items-center gap-2">
                        <label class="me-2" style="width:80px">EMAIL</label>
                        <div class="flex-grow-1">
                           <input name="email" type="email" class="form-control custom-input"
                              placeholder="Enter your email">
                           <div class="invalid-feedback" id="error-email"></div>
                        </div>
                     </div>
                  </div>

                  <div class="mb-3">
                     <div class="d-flex align-items-center gap-2">
                        <label class="me-2" style="width:80px">INDUSTRY</label>
                        <div class="flex-grow-1">
                           <select name="business" class="form-control custom-input">
                              <option value="">Select</option>
                              <option value="E-commerce">E-commerce</option>
                              <option value="Healthcare">Healthcare</option>
                              <option value="Finance">Finance</option>
                              <option value="Technology">Technology</option>
                              <option value="Travel">Travel</option>
                              <option value="Real Estate">Real Estate</option>
                              <option value="Other">Other</option>
                           </select>
                           <div class="invalid-feedback" id="error-business"></div>
                        </div>
                     </div>
                  </div>
                  <!-- Submit -->
                  <div class="mb-3 d-flex align-items-center gap-2">
                     <label class="me-2" style="width:80px"></label>
                     <button type="submit" class="btn btn-primary custom-btn w-100">Submit</button>
                  </div>
               </form>

               <!-- Success message -->
               <div id="success-message" class="alert alert-success d-none mt-2"></div>
            </div>
         </div>
      </div>
   </section>
@endsection
@section('js')
   <script>
      const form = document.getElementById('homecontactForm');
      const submitBtn = form.querySelector('button[type="submit"]');

      form.addEventListener('submit', async function (e) {
         e.preventDefault();

         let formData = new FormData(form);

         // Clear old errors
         document.querySelectorAll('.invalid-feedback').forEach(el => el.innerText = '');
         document.querySelectorAll('.form-control').forEach(el => el.classList.remove('is-invalid'));

         // Disable button & show loading
         submitBtn.disabled = true;
         const originalText = submitBtn.innerHTML;
         submitBtn.innerHTML = 'Sending... ⏳';

         try {
            let response = await fetch(form.action, {
               method: 'POST',
               headers: {
                  'X-CSRF-TOKEN': '{{ csrf_token() }}',
                  'Accept': 'application/json'
               },
               body: formData
            });

            if (response.status === 422) {
               let data = await response.json();
               let errors = data.errors;

               for (let field in errors) {
                  let input = document.querySelector(`[name="${field}"]`);
                  let errorDiv = document.getElementById(`error-${field}`);
                  if (input) input.classList.add('is-invalid');
                  if (errorDiv) errorDiv.innerText = errors[field][0];
               }
            } else if (response.ok) {
               let result = await response.json();

               // Show success
               const successMsg = document.getElementById('success-message');
               successMsg.innerText = result.message;
               successMsg.classList.remove('d-none');

               form.reset();
            } else {
               alert("Something went wrong. Please try again.");
            }
         } catch (err) {
            console.error(err);
            alert("Server error, please try again later.");
         } finally {
            // Re-enable button & restore text
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
         }
      });
   </script>
@endsection