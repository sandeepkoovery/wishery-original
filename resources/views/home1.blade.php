<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web UI Responsive</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="stylesheet" href="{{ asset('assets/wishery/style.css') }}">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  
</head>
<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top bg-transparent">
  <div class="container-fluid p-0">
    <a class="navbar-brand" href="#"><img class="logo_img" src="{{asset('/')}}/wishery.png" alt="Wishery" title="Wishery"></a>
    <!-- Mobile Hamburger -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
      <i class="fas fa-bars fa-lg"></i>
    </button>
    <!-- Desktop Menu -->
    <div class="collapse navbar-collapse justify-content-end d-none d-lg-flex">
      <div class="menu-bg d-flex align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        </ul>
        <!-- Desktop hamburger for more menu -->
        <span class="custom-toggler ms-3" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
          <i class="fas fa-bars"></i>
        </span>
      </div>
    </div>
  </div>
</nav>

<!-- Offcanvas Menu -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu">
  <div class="offcanvas-header">
    <!-- <h5 class="offcanvas-title text-warning">Menu</h5> -->
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <a href="#portfolio">Portfolio</a>
    <a href="#clients">Clients</a>
    <a href="#testimonials">Testimonials</a>
    <a href="#contact">Contact</a>
  </div>
</div>


<!-- Hero -->
<section class="hero position-relative">
  <div class="container hero-content">
    <div class="row align-items-center">
      <div class="col-lg-12">
        <h1 class="">What we are</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
      </div>
     
    </div>
  </div>
  <div class="position-absolute bottom-0 hero-scroll">
  <div class="scroll-text">
    "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp; "CREATIVE. CREATE. CONVERT." &nbsp; &nbsp;
  </div>
  </div>
</section>



<!-- What We Offer -->
<section id="offer" class="blue-bg d-none d-sm-block" >
  <div class="container why-choose">
     <h3>Why Choose Us</h3>
    <h2>TAILORED CAMPAIGNS. TANGIBLE RESULTS.</h2>
    <p>We combine sharp strategy, standout creativity, and deep market insights to build campaigns that do more than just reach people; they move them. Whether you’re launching a new product or scaling your brand, we tailor marketing solutions that deliver real, trackable results.</p>
    <div class="display-1 fw-bold mt-5 pt-3 mb-5 pb-5">what we offer</div>
      <div class="carousel3d mt-5" id="offerCarousel">
          <div class="item">
            <div class="carousel-card">
              <img src="https://www.shutterstock.com/image-photo/handsome-male-beautiful-female-mobile-600nw-714655705.jpg">
              <p class="caption">Web Development</p>
            </div>
          </div>
          <div class="item">
            <div class="carousel-card">
              <img src="https://thumbs.dreamstime.com/z/abstract-artistic-eye-painting-colorful-eye-wall-art-perfect-background-abstract-artistic-eye-painting-colorful-eye-wall-349290117.jpg">
              <p class="caption">SEO</p>
            </div>
          </div>
          <div class="item">
            <div class="carousel-card">
              <img src="https://thumbs.dreamstime.com/b/girl-creative-painter-woman-brush-palette-56708588.jpg">
              <p class="caption">Branding</p>
            </div>
          </div>
          <div class="item">
            <div class="carousel-card">
              <img src="https://thumbs.dreamstime.com/b/abstract-portrait-girl-watercolor-drawing-76093951.jpg">
              <p class="caption">Creative Design</p>
            </div>
          </div>
          <div class="item">
            <div class="carousel-card">
              <img src="https://thumbs.dreamstime.com/b/shopaholic-woman-purchases-38390374.jpg">
              <p class="caption">E-Commerce</p>
            </div>
          </div>
          <div class="item">
            <div class="carousel-card">
              <img src="https://thumbs.dreamstime.com/b/woman-spraying-paint-young-businesswoman-colorful-balloon-63703773.jpg">
              <p class="caption">Social Media</p>
            </div>
          </div>
        </div>

  </div>
</section>

<!-- Portfolio -->
<section id="portfolio" class="blue-bg">
  <div class="container-fluid ">
    <h2>Portfolio</h2>
    <div class="iso-grid mt-5 pt-5 position-relative" id="isoGrid">
    </div>
  </div>
 <div class="blue-bg-gradient"></div>
  <div class="blue-bg-gradient1"></div>
</section>

<!-- Clients -->
<section id="clients" class="clients blue-bg " style="background:#0a1851;">
  <div class="container-fluid text-center">
    <h3>CLIENTS</h3>
    <h2 class="pb-2">They Trust Us</h2>
    <div class="client-slider mt-5 ">
      <ul>
        <li><img src="images/logo1.png" alt="logo-name"></li>
        <li><img src="images/logo2.png" alt="logo-name"></li>
        <li><img src="images/logo3.png" alt="logo-name"></li>
        <li><img src="images/logo4.png" alt="logo-name"></li>
        <li><img src="images/logo5.png" alt="logo-name"></li>
        <li><img src="images/logo2.png" alt="logo-name"></li>
        <li><img src="images/logo3.png" alt="logo-name"></li>
        <li><img src="images/logo4.png" alt="logo-name"></li>
      </ul>  
    </div>
  </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="blue-bg d-none d-sm-block">
  <div class="container-xxl text-center">
    <h2>Testimonials</h2>

    <div class="testimonial-carousel mt-5 pt-5" id="testimonialCarousel">
      <div class="testimonial-item">
        <img src="https://picsum.photos/400/250?random=1" alt="John">
        <div class="testimonial-content text-black">
          <p>"Amazing service! They helped my business grow."</p>
          <h5>- John</h5>
        </div>
      </div>
      <div class="testimonial-item">
        <img src="https://picsum.photos/400/250?random=2" alt="Sarah">
        <div class="testimonial-content">
          <p>"Our business grew fast! Highly recommend them."</p>
          <h5>- Sarah</h5>
        </div>
      </div>
      <div class="testimonial-item">
        <img src="https://picsum.photos/400/250?random=3" alt="Mark">
        <div class="testimonial-content">
          <p>"They are truly professionals and creative."</p>
          <h5>- Mark</h5>
        </div>
      </div>
      <div class="testimonial-item">
        <img src="https://picsum.photos/400/250?random=4" alt="Emma">
        <div class="testimonial-content">
          <p>"Best marketing team ever, outstanding support."</p>
          <h5>- Emma</h5>
        </div>
      </div>
      <div class="testimonial-item">
        <img src="https://picsum.photos/400/250?random=5" alt="David">
        <div class="testimonial-content">
          <p>"I got results in just a few weeks!"</p>
          <h5>- David</h5>
        </div>
      </div>
      <div class="testimonial-item">
        <img src="https://picsum.photos/400/250?random=6" alt="Sophia">
        <div class="testimonial-content">
          <p>"They are so innovative with campaigns."</p>
          <h5>- Sophia</h5>
        </div>
      </div>
      <div class="testimonial-item">
        <img src="https://picsum.photos/400/250?random=7" alt="Paul">
        <div class="testimonial-content">
          <p>"The team exceeded expectations."</p>
          <h5>- Paul</h5>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact -->
<section id="contact" class="contact py-5">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Left Side: Address Section -->
      <div class="col-lg-5 mb-4 mb-lg-0 text-start">
        <h2 class="text-start">Need Marketing Solution?</h2>
        <p>We’re here to help you!</p>
        <div class="contact-info">
          <p><strong>Address:</strong><br>SRM Road, near NIRMALA SISU BHAVAN, Ayyappankavu, Ernakulam, Kerala 682018</p>
          <p><strong>Phone:</strong><br> +91 92079 44882</p>
          <p><strong>Email:</strong><br> Wisherypvtltd@gmail.com</p>
        </div>
      </div>
      
      <!-- Right Side: Form -->
      <div class="col-lg-7">
        <div class="p-4 border-0">
          <form>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Phone Number">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Business">
            </div>
            <button type="submit" class="btn btn-primary fs-3 w-100">Submit</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <p>&copy; 2025 Wishery. All Rights Reserved.</p>
</footer>

<script>
     // ===== 3D Carousel (auto + wheel + touch) =====
        const carousel = document.getElementById("offerCarousel");
        const offerItems = carousel.querySelectorAll(".item");
        const offerCount = offerItems.length;

        let offerAngle = 0;       // rotation angle in degrees
        let currentIndex = 0;     // logical front card
        const STEP = 1;           // how many cards per tick
        const AUTOPLAY_MS = 3000; // autoplay interval

        // initial layout
        offerItems.forEach((el, i) => {
          el.style.setProperty("--r", `${(360 / offerCount) * i}deg`);
        });

        // apply rotation + depth so the front image stays on top
        function renderRotation() {
          offerAngle = -currentIndex * (360 / offerCount);
          offerItems.forEach((el, i) => {
            const rotation = (360 / offerCount) * i + offerAngle;
            el.style.setProperty("--r", `${rotation}deg`);
            // z-index based on depth so the biggest image is always on top
            const depth = Math.cos((rotation * Math.PI) / 180);
            el.style.zIndex = Math.round(depth * 1000);
          });
        }

        function rotateBy(delta) {
          currentIndex = (currentIndex + delta + offerCount) % offerCount;
          renderRotation();
        }

        // --- Autoplay with pause/resume ---
        let autoplayTimer = null;
        let resumeTimer = null;

        function startAutoplay() {
          stopAutoplay();
          autoplayTimer = setInterval(() => rotateBy(STEP), AUTOPLAY_MS);
        }

        function stopAutoplay() {
          if (autoplayTimer) clearInterval(autoplayTimer);
          autoplayTimer = null;
        }

        function resumeAfterIdle(delay = 3500) {
          if (resumeTimer) clearTimeout(resumeTimer);
          resumeTimer = setTimeout(startAutoplay, delay);
        }

        // --- Mouse wheel ---
        carousel.addEventListener(
          "wheel",
          (e) => {
            e.preventDefault();      // prevent page scroll while rotating
            stopAutoplay();
            rotateBy(e.deltaY > 0 ? -1 : 1);
            resumeAfterIdle();
          },
          { passive: false }
        );

        // --- Touch swipe ---
        let startX = 0;
        carousel.addEventListener(
          "touchstart",
          (e) => {
            startX = e.touches[0].clientX;
            stopAutoplay();
          },
          { passive: true }
        );

        carousel.addEventListener(
          "touchend",
          (e) => {
            const dx = e.changedTouches[0].clientX - startX;
            if (dx < -40) rotateBy(-1);       // swipe left
            else if (dx > 40) rotateBy(1);    // swipe right
            resumeAfterIdle();
          },
          { passive: true }
        );

        // Kick things off
        renderRotation();
        startAutoplay();



    // Testimonials carousel with click controls
   
   let activeIndex = 0;
  const testItems = document.querySelectorAll("#testimonialCarousel .testimonial-item");
  const testCount = testItems.length;

  function updateRotation() {
    testItems.forEach((el, i) => {
      const angle = (360 / testCount) * (i - activeIndex);

      // compute scale: front = 1.2, sides = 1.1, far = 1
      let scale = 1;
      const diff = Math.abs(i - activeIndex) % testCount;
      if (diff === 0) scale = 1.2;        // front
      else if (diff === 1 || diff === testCount - 1) scale = 1.1; // sides

      el.style.transform = `translate(-50%,-50%) rotateY(${angle}deg) translateZ(650px) scale(${scale})`;
      el.style.zIndex = (diff === 0 ? 10 : (diff === 1 || diff === testCount - 1 ? 5 : 1));
    });
  }

  // Initial render
  updateRotation();

  // Auto scroll every 4s
  setInterval(() => {
    activeIndex = (activeIndex + 1) % testCount;
    updateRotation();
  }, 4000);

  // Clicking any card → bring it to front
  testItems.forEach((el, i) => {
    el.addEventListener("click", () => {
      activeIndex = i;
      updateRotation();
    });
  });



const isoContainer = document.getElementById("isoGrid");

// Portfolio items with image, title, and description
const portfolioItems = [
  {
    img: "https://picsum.photos/600/900?random=1",
    title: "E-Commerce App",
    desc: "A sleek online shopping app. Fast checkout and modern design."
  },
  {
    img: "https://picsum.photos/600/900?random=2",
    title: "Real Estate Website",
    desc: "Property listings with maps. Easy filtering and booking."
  },
  {
    img: "https://picsum.photos/600/900?random=3",
    title: "Portfolio Design",
    desc: "Minimalist grid layout. Focus on visuals and case studies."
  },
  {
    img: "https://picsum.photos/600/900?random=4",
    title: "Finance Dashboard",
    desc: "Analytics, reports, and charts. Built for decision-making."
  },
  {
    img: "https://picsum.photos/600/900?random=5",
    title: "Travel Agency",
    desc: "Booking system with itineraries. Mobile-friendly experience."
  },
  {
    img: "https://picsum.photos/600/900?random=6",
    title: "Learning Platform",
    desc: "Courses, quizzes, and certificates. Interactive education."
  },
  {
    img: "https://picsum.photos/600/900?random=7",
    title: "Fitness App",
    desc: "Workout plans and tracking. Personalized health goals."
  },
  {
    img: "https://picsum.photos/600/900?random=8",
    title: "Food Delivery",
    desc: "Browse restaurants, order food, and track delivery live."
  },
  {
    img: "https://picsum.photos/600/900?random=10",
    title: "CRM System",
    desc: "Manage leads, clients, and sales in one place."
  },
  {
    img: "https://picsum.photos/600/900?random=11",
    title: "Event Planner",
    desc: "Create, manage, and sell tickets for events online."
  },
  {
    img: "https://picsum.photos/600/900?random=12",
    title: "Healthcare App",
    desc: "Book doctors, video consults, and view prescriptions."
  },
  {
    img: "https://picsum.photos/600/900?random=13",
    title: "Education Website",
    desc: "School management portal with e-learning tools."
  }
];

portfolioItems.forEach(itemData => {
  const item = document.createElement("div");
  item.className = "iso-item";

  // Image
  const img = document.createElement("img");
  img.src = itemData.img;

  // Text container
  const textBox = document.createElement("div");
  textBox.className = "iso-text";

  const title = document.createElement("h5");
  title.textContent = itemData.title;

  const desc = document.createElement("p");
  desc.textContent = itemData.desc;

  textBox.appendChild(title);
  textBox.appendChild(desc);

  item.appendChild(img);
  item.appendChild(textBox);
  isoContainer.appendChild(item);
});






// Simple, smooth, seamless marquee with jQuery + rAF
  // Works with your existing markup:
  // <div class="client-slider"><ul>...logos...</ul></div>
  $(function () {
    initLogoScroller('.client-slider', {
      speed: 60,     // pixels per second (adjust to taste)
      gap: 60        // should match CSS gap for visual consistency
    });
  });

  function initLogoScroller(containerSelector, options) {
    const opts = $.extend({ speed: 60, gap: 60 }, options);

    $(containerSelector).each(function () {
      const $wrap = $(this);
      let $list = $wrap.find('ul').first();
      if (!$list.length) return;

      // Make sure list is inline-flex (in case CSS didn't load yet)
      $list.css({ display: 'inline-flex' });

      // Clone list for seamless loop
      const $clone = $list.clone().addClass('clone').appendTo($wrap);

      // Internal state
      let x = 0;
      let paused = false;
      let lastTs = null;

      // Pause on hover & touch
      $wrap.on('mouseenter', () => paused = true);
      $wrap.on('mouseleave', () => paused = false);
      $wrap.on('touchstart', () => paused = true);
      $wrap.on('touchend touchcancel', () => paused = false);

      // Recalculate on resize (logos or fonts might change width)
      let listWidth = 0;
      function measure() {
        // Temporarily reset transform to measure true width
        $list.add($clone).css('transform', 'translateX(0px)');
        listWidth = $list.outerWidth(true);
      }
      measure();
      $(window).on('resize', () => { measure(); });

      // Position both lists: second starts right after the first
      function positionLists() {
        $list.css('transform', 'translateX(' + x + 'px)');
        $clone.css('transform', 'translateX(' + (x + listWidth) + 'px)');
      }

      // Animation loop
      function tick(ts) {
        if (lastTs == null) lastTs = ts;
        const dt = (ts - lastTs) / 1000; // seconds since last frame
        lastTs = ts;

        if (!paused && listWidth > 0) {
          x -= opts.speed * dt;

          // If the whole first list has moved out of view, snap forward by its width
          if (-x >= listWidth) {
            x += listWidth;
          }
          positionLists();
        }
        requestAnimationFrame(tick);
      }
      // Initial position
      positionLists();
      requestAnimationFrame(tick);
    });
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Laravel Mail Form -->
@if(session('success'))
<div style="padding:12px;margin:12px 0;background:#e6ffed;border:1px solid #b4f5c3;border-radius:8px;">
    { session('success') }
</div>
@endif

@if ($errors->any())
<div style="padding:12px;margin:12px 0;background:#ffecec;border:1px solid #ffb3b3;border-radius:8px;">
    <ul style="margin:0;padding-left:18px;">
        @foreach ($errors->all() as $error)
            <li>{ $error }</li>
        @endforeach
    </ul>
</div>
@endif
</body>
</html>
