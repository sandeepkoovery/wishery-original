@extends('layout.app')

@section('title', 'Digital Marketing, Business Technology & Creative Solutions | IUHAA Wishery')
@section('meta_description', 'Wishery delivers integrated business technology, digital marketing, creative, advertising, and ERP solutions in Kochi, Kerala.')

@section('content')
   <style>
      #contactForm label {
         color: #e2ba46;
      }
      
      /* Main section headings */
      .section-main-heading {
         color: #e2ba46 !important;
         font-size: 2.8rem !important;
         font-weight: 800 !important;
         letter-spacing: -0.3px;
         line-height: 1.25;
      }
      @media (max-width: 768px) {
         .section-main-heading {
            font-size: 2rem !important;
         }
      }

      .solution-card {
         background: rgba(255, 255, 255, 0.05);
         border: 1px solid rgba(226, 186, 70, 0.3);
         border-radius: 16px;
         padding: 36px 30px;
         height: 100%;
         transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
         position: relative;
         overflow: hidden;
      }
      .solution-card:hover {
         transform: translateY(-6px);
         border-color: #e2ba46;
         box-shadow: 0 12px 35px rgba(226, 186, 70, 0.2);
         background: rgba(255, 255, 255, 0.08);
      }
      .solution-icon {
         width: 60px;
         height: 60px;
         background: linear-gradient(135deg, #e2ba46, #c59b27);
         border-radius: 14px;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 26px;
         color: #0a1851;
         margin-bottom: 22px;
         box-shadow: 0 6px 16px rgba(226, 186, 70, 0.25);
      }
      .solution-card h3 {
         color: #e2ba46;
         font-size: 1.55rem;
         font-weight: 700;
         margin-bottom: 18px;
      }
      .solution-card p {
         color: #ffffff !important;
         font-size: 1.1rem !important;
         line-height: 1.75 !important;
         margin-bottom: 14px;
         opacity: 0.95;
      }
      .solution-card p:last-child {
         margin-bottom: 0;
      }

      .integrated-banner {
         background: linear-gradient(135deg, rgba(15, 34, 107, 0.95), rgba(6, 14, 48, 0.98));
         border: 1px solid rgba(226, 186, 70, 0.4);
         border-radius: 20px;
         padding: 48px 42px;
         box-shadow: 0 15px 40px rgba(0, 0, 0, 0.35);
      }

      /* Approach Cards styling */
      .approach-card {
         background: rgba(255, 255, 255, 0.06);
         border-left: 5px solid #e2ba46;
         border-radius: 0 14px 14px 0;
         padding: 32px 30px;
         height: 100%;
         transition: all 0.3s ease;
         box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
      }
      .approach-card:hover {
         background: rgba(226, 186, 70, 0.12);
         transform: translateX(6px);
      }
      .approach-num {
         color: #e2ba46;
         font-size: 2.2rem;
         font-weight: 900;
         margin-bottom: 8px;
         letter-spacing: -0.5px;
         line-height: 1;
      }
      .approach-card h4 {
         color: #ffffff !important;
         font-size: 1.5rem !important;
         font-weight: 700 !important;
         margin-bottom: 12px;
      }
      .approach-card p {
         color: #ffffff !important;
         font-size: 1.15rem !important;
         line-height: 1.75 !important;
         margin-bottom: 0;
         opacity: 0.95;
      }

      .cta-summary-box {
         background: rgba(226, 186, 70, 0.08);
         border: 2px dashed rgba(226, 186, 70, 0.45);
         border-radius: 16px;
         padding: 40px 32px;
         text-align: center;
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
            </div>
         </div>
      </div>
   </section>

   <!-- Main Intro Section -->
   <section class="blue-bg py-5" style="background:#0a1851;">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-11 text-center">
               <h2 class="section-main-heading mb-4">Digital Marketing, Business Technology & Creative Solutions</h2>
               <p class="fs-4 leading-relaxed mb-4" style="color: #ffffff !important; font-weight: 500; line-height: 1.8;">
                  Wishery delivers integrated business technology, digital marketing, creative, advertising, and media solutions that help businesses build stronger brands, streamline operations, establish a powerful online presence, and achieve sustainable growth.
               </p>
               <p class="mt-4 text-start text-md-center" style="color: #e2ebff !important; font-size: 1.15rem; line-height: 1.8;">
                  Based in Kochi, we provide tailored solutions to businesses across Kerala and beyond, combining technology, strategy, creativity, and data to address the evolving needs of modern businesses.
               </p>
               <p class="mt-3 text-start text-md-center" style="color: #e2ebff !important; font-size: 1.15rem; line-height: 1.8;">
                  Our solutions span ERP software, digital marketing, SEO, social media marketing, Google Ads, Meta Ads, website design and development, branding, video production, and content creation. From digitizing business operations to building a recognizable brand and reaching the right audience online, Wishery brings multiple capabilities together under one integrated solution ecosystem.
               </p>
               <p class="mt-3 text-start text-md-center" style="color: #e2ebff !important; font-size: 1.15rem; line-height: 1.8;">
                  We focus on helping businesses operate more efficiently, communicate more effectively, improve digital visibility, generate quality leads, and create meaningful customer experiences. Every solution is developed around the client's business objectives, industry, target audience, and long-term growth ambitions.
               </p>
            </div>
         </div>
      </div>
   </section>

   <!-- Solutions & Capabilities Grid -->
   <section class="blue-bg py-5" style="background:#08123d;">
      <div class="container">
         <div class="text-center mb-5">
            <h2 class="section-main-heading">Our Solutions & Capabilities</h2>
            <p class="text-light fs-5 opacity-90">Integrated services designed for modern business growth</p>
         </div>

         <div class="row g-4">
            <!-- Business Technology & ERP Solutions -->
            <div class="col-lg-6">
               <div class="solution-card">
                  <div class="solution-icon">
                     <i class="fa-solid fa-layer-group"></i>
                  </div>
                  <h3>Business Technology & ERP Solutions</h3>
                  <p>Wishery provides ERP software solutions designed to help businesses streamline their day-to-day operations and bring critical business functions into a connected digital environment.</p>
                  <p>Our ERP solutions can help businesses manage areas such as sales, inventory, purchasing, finance, customer management, operations, reporting, and business data through integrated digital workflows.</p>
                  <p>By improving visibility, reducing manual processes, and connecting business information, we help organizations make faster, better-informed decisions and build a stronger foundation for sustainable growth.</p>
               </div>
            </div>

            <!-- Digital Marketing & Growth Solutions -->
            <div class="col-lg-6">
               <div class="solution-card">
                  <div class="solution-icon">
                     <i class="fa-solid fa-chart-line"></i>
                  </div>
                  <h3>Digital Marketing & Growth Solutions</h3>
                  <p>Our digital marketing solutions help businesses establish a strong online presence and connect with their target audiences across relevant digital platforms.</p>
                  <p>Our capabilities include SEO, social media marketing, Google Ads, Meta Ads, content marketing, and digital marketing strategy. We combine audience insights, creative communication, and performance data to develop campaigns focused on visibility, engagement, lead generation, customer acquisition, and measurable growth.</p>
               </div>
            </div>

            <!-- Web Design & Development -->
            <div class="col-lg-4">
               <div class="solution-card">
                  <div class="solution-icon">
                     <i class="fa-solid fa-laptop-code"></i>
                  </div>
                  <h3>Web Design & Development</h3>
                  <p>Your website is often the first interaction customers have with your brand. Wishery creates modern, responsive, user-focused websites that combine visual appeal, functionality, performance, and a strong brand identity.</p>
                  <p>From corporate websites and business portals to landing pages and customized web solutions, we build digital platforms designed to support your business goals and provide meaningful user experiences.</p>
               </div>
            </div>

            <!-- Branding & Creative Solutions -->
            <div class="col-lg-4">
               <div class="solution-card">
                  <div class="solution-icon">
                     <i class="fa-solid fa-pen-nib"></i>
                  </div>
                  <h3>Branding & Creative Solutions</h3>
                  <p>We help businesses build distinctive and consistent brand identities through strategic branding and creative communication.</p>
                  <p>Our branding capabilities include brand strategy, logo and visual identity development, creative design, brand communication, marketing materials, and digital brand experiences—helping businesses establish a recognizable identity across every customer touchpoint.</p>
               </div>
            </div>

            <!-- Video Production & Content Creation -->
            <div class="col-lg-4">
               <div class="solution-card">
                  <div class="solution-icon">
                     <i class="fa-solid fa-video"></i>
                  </div>
                  <h3>Video Production & Content Creation</h3>
                  <p>We combine professional video production and strategic content creation to turn brand messages into engaging visual experiences.</p>
                  <p>Our video capabilities cover concept development, scripting, production, advertising shoots, promotional videos, corporate videos, social media content, event coverage, and post-production.</p>
                  <p>Alongside video, we create website content, social media content, articles, blogs, advertising copy, scripts, promotional materials, and other branded content designed for specific audiences and platforms.</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Clients -->
   <section id="clients" class="clients blue-bg " style="background:#0a1851;">
      <div class="container-fluid text-center">
         <div class="">
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
               </ul>
            </div>
         </div>
      </div>
   </section>

   <!-- Integrated Solutions Banner -->
   <section class="blue-bg py-5" style="background:#0a1851;">
      <div class="container">
         <div class="integrated-banner text-center text-md-start">
            <div class="row align-items-center">
               <div class="col-lg-12">
                  <h2 class="section-main-heading text-start mb-4">Integrated Solutions. One Growth Partner.</h2>
                  <p class="fs-4 text-light mb-3" style="line-height: 1.8; color: #ffffff !important; font-weight: 500;">
                     What makes Wishery different is our ability to bring business technology, digital marketing, advertising, branding, web development, video, and content together.
                  </p>
                  <p style="color: #e2ebff !important; font-size: 1.15rem; line-height: 1.8;">
                     Our multidisciplinary approach allows technology and creativity to work alongside marketing strategy. For example, a business can use our ERP solutions to improve internal operations, a new website to strengthen its digital presence, SEO and paid advertising to attract customers, and professional video and content to communicate its brand effectively.
                  </p>
                  <p style="color: #e2ebff !important; font-size: 1.15rem; line-height: 1.8;" class="mb-0">
                     Instead of treating these as disconnected services, we develop integrated solutions that work together around a common business objective.
                  </p>
               </div>
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
            <div class="item">
               <div class="carousel-card">
                  <img src="{{url('images/offline.jpg')}}">
                  <p class="caption">Offline Marketing</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Our Approach -->
   <section class="blue-bg py-5" style="background:#08123d;">
      <div class="container">
         <div class="text-center mb-5">
            <h2 class="section-main-heading">Our Approach</h2>
            <p class="text-light fs-5 opacity-90">A strategic methodology built for business impact</p>
         </div>

         <div class="row g-4 mb-5">
            <div class="col-lg-4 col-md-6">
               <div class="approach-card">
                  <div class="approach-num">01</div>
                  <h4>Business First</h4>
                  <p>We begin by understanding your business, industry, challenges, audience, and objectives.</p>
               </div>
            </div>

            <div class="col-lg-4 col-md-6">
               <div class="approach-card">
                  <div class="approach-num">02</div>
                  <h4>Strategy</h4>
                  <p>We develop practical strategies aligned with your immediate requirements and long-term growth plans.</p>
               </div>
            </div>

            <div class="col-lg-4 col-md-6">
               <div class="approach-card">
                  <div class="approach-num">03</div>
                  <h4>Technology</h4>
                  <p>We use digital platforms and business technologies to improve efficiency, connectivity, and scalability.</p>
               </div>
            </div>

            <div class="col-lg-6 col-md-6">
               <div class="approach-card">
                  <div class="approach-num">04</div>
                  <h4>Creativity</h4>
                  <p>We transform ideas and brand messages into compelling visual and digital experiences.</p>
               </div>
            </div>

            <div class="col-lg-6 col-md-12">
               <div class="approach-card">
                  <div class="approach-num">05</div>
                  <h4>Performance</h4>
                  <p>We focus on measurable outcomes, from operational efficiency and digital visibility to engagement, leads, conversions, and sustainable growth.</p>
               </div>
            </div>
         </div>

         <!-- Summary CTA -->
         <div class="cta-summary-box mt-4">
            <p class="fs-4 text-light mb-4" style="line-height: 1.8; font-weight: 500;">
               Whether you are starting a new business, digitizing existing operations, building a brand, launching a website, expanding your digital presence, or looking for better-performing marketing campaigns, Wishery brings technology, strategy, creativity, and media together to create meaningful business impact.
            </p>
            <a href="#contact" class="btn btn-warning btn-lg px-5 py-3 rounded-pill fw-bold" style="background-color: #e2ba46; color: #0a1851; border: none; font-size: 1.2rem;">
               Connect With Us Today <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
         </div>
      </div>
   </section>

   <!-- Portfolio -->
   <section id="portfolio" class="blue-bg">
      <div class="container ">
         <h2>Portfolio</h2>
         <a href="{{url('portfolio')}}">
            <div class="iso-grid position-relative" id="isoGrid">
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
            <div class="testimonial-item">
               <div class="stars">★★★★★</div>
               <p>Partnering with Wishery was one of the best decisions we made for our brand. Their team is Creative and truly understands what connects with an audience.</p>
               <div class="avatar"><img src="{{url('images/t3.jpg')}}?random=1" alt="Cheryl"></div>
               <h5>Arun Thampy</h5>
               <span>Managing Director, INSPIRE</span>
            </div>
            <div class="testimonial-item">
               <div class="stars">★★★★★</div>
               <p>Thank you, Wishery, for 6 amazing months! Your ideas and support have grown our brand online. We’ve seen real results and stronger connections. Looking forward to more wins together!</p>
               <div class="avatar"><img src="{{url('images/t2.jpg')}}?random=2" alt="Tony"></div>
               <h5>Dinil Raphel</h5>
               <span>Managing Partner, Grace Caterers</span>
            </div>
            <div class="testimonial-item">
               <div class="stars">★★★★★</div>
               <p>Wishery Pvt Ltd has really helped Nail It grow online. Their digital marketing support is creative consistent and effective. We are happy with their work and results</p>
               <div class="avatar"><img src="{{url('images/t1.jpg')}}?random=3" alt="Kevin"></div>
               <h5>Nail it By Gayathri Arun</h5>
               <span>Cine Artist & Entrepreneur</span>
            </div>
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
                  <p><strong>Address:</strong><br>90 A, Door no 55/1171, Canal Road , <br>Girinagar , Kadavanthara , <br>Kadavanthara Police station, <br>Ernakulam - 682020 , Kerala , India</p>
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
