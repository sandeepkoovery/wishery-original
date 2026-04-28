<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Wishery')</title>
  <meta name="title" content="@yield('title', 'Wishery')">
  <meta name="description"
    content="@yield('meta_description', 'Wishery is a performance-driven digital marketing company in Kochi, Kerala.')">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="{{ asset('assets/wishery/style.css') }}">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="{{ asset('assets/wishery/fontawesome.min.css') }}">
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
</head>

<body>
  {{-- Header / Navbar --}}
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid p-0 align-itm">
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('/wishery_logo.png')}}" class="img-logo"></a>
        <!-- Mobile Hamburger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
          <i class="fas fa-bars fa-lg"></i>
        </button>
        <!-- Desktop Menu -->
        <div class="collapse navbar-collapse justify-content-end d-none d-lg-flex">
          <div class="menu-bg d-flex align-items-center">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('about')}}">About</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('services')}}">Services</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('portfolio')}}">Portfolio</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact Us</a></li>
            </ul>
            <!-- Desktop hamburger for more menu -->
            <span class="custom-toggler d-block d-sm-none ms-3" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
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
        <a href="{{url('/')}}">Home</a>
        <a href="{{url('about')}}">About</a>
        <a href="{{url('services')}}">Services</a>
        <a href="{{url('portfolio')}}">Portfolio</a>
        <a href="{{url('contact')}}">Contact Us</a>
      </div>
    </div>
  </header>

  {{-- Page Content --}}
  <main>
    @yield('content')
  </main>

  {{-- Footer --}}
  @include('layout.footer')
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.testimonial-carousel').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        let $nextSlide = $(slick.$slides[nextSlide]);

        // check direction: next or prev
        if (nextSlide > currentSlide) {
          $nextSlide.addClass('flip-in-right');
        } else {
          $nextSlide.addClass('flip-in-left');
        }
      });

      $('.testimonial-carousel').on('afterChange', function (event, slick, currentSlide) {
        $(slick.$slides).removeClass('flip-in-right flip-in-left');
      });

      $('.testimonial-carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3500,   // smoother auto scroll
        speed: 1500,            // transition timing
        arrows: true,
        dots: true,
        centerMode: true,
        centerPadding: '0px',
        responsive: [
          {
            breakpoint: 992,
            settings: { slidesToShow: 1, centerMode: true }
          },
          {
            breakpoint: 576,
            settings: { slidesToShow: 1, centerMode: true }
          }
        ]
      });
    });
    $(document).ready(function () {
      const $carousel = $("#offerCarousel");
      const $items = $carousel.find(".item");
      const itemCount = $items.length;

      let currentIndex = 0;
      let is3D = true; // default

      function enable3D() {
        is3D = true;
        $carousel.addClass("carousel3d").removeClass("carousel-flat");
        rotateTo(currentIndex);
      }

      function enableFlat() {
        is3D = false;
        $carousel.removeClass("carousel3d").addClass("carousel-flat");
        $items.removeAttr("style"); // reset inline styles
      }

      function rotateTo(index) {
        if (!is3D) return;

        const angle = -index * (360 / itemCount);

        $items.each(function (i) {
          const rotation = (360 / itemCount) * i + angle;
          $(this).css("--r", rotation + "deg");

          // depth for z-index
          const depth = Math.cos((rotation * Math.PI) / 180);
          $(this).css("z-index", Math.round(depth * 1000));
        });
      }

      // Handle click on items
      $items.on("click", function () {
        if (!is3D) return; // disable click rotation in flat mode

        const clickedIndex = $(this).index();

        let delta = clickedIndex - currentIndex;
        if (delta < 0) delta += itemCount;

        currentIndex = clickedIndex;
        rotateTo(currentIndex);
      });

      // Responsive switch
      function checkResponsive() {
        if ($(window).width() < 768) {
          enableFlat(); // mobile/tablet → scroll
        } else {
          enable3D(); // desktop → 3D
        }
      }

      $(window).on("resize", checkResponsive);
      checkResponsive(); // initial check
    });

    const isoContainer = document.getElementById("isoGrid");

    // Portfolio items with image, title, and description
    const portfolioItems = [
      {
        img: "{{ asset('images/1a.jpeg') }}?random=1",
        title: "Rhythmbhara",
        // desc: "A sleek online shopping app. Fast checkout and modern design."
      },
      {
        img: "{{ asset('images/2a.jpeg') }}?random=2",
        title: "Nailit By Gayathri Arun",
        // desc: "Property listings with maps. Easy filtering and booking."
      },
      {
        img: "{{ asset('images/3a.jpeg') }}?random=3",
        title: "Nail Art Studio By Ritha Mathen",
        // desc: "Minimalist grid layout. Focus on visuals and case studies."
      },
      {
        img: "{{ asset('images/4a.jpeg') }}?random=4",
        title: "Rhythmbhara",
        // desc: "Analytics, reports, and charts. Built for decision-making."
      },
      {
        img: "{{ asset('images/5a.jpeg') }}?random=5",
        title: "Kandamangalam",
        // desc: "Booking system with itineraries. Mobile-friendly experience."
      },
      {
        img: "{{ asset('images/6a.jpeg') }}?random=6",
        title: "Grace",
        // desc: "Courses, quizzes, and certificates. Interactive education."
      },
      {
        img: "{{ asset('images/7a.jpeg') }}?random=7",
        title: "Karx",
        // desc: "Workout plans and tracking. Personalized health goals."
      },
      {
        img: "{{ asset('images/8a.png') }}?random=8",
        title: "De Lamor",
        // desc: "Browse restaurants, order food, and track delivery live."
      },
      // {
      //   img: "https://picsum.photos/600/900?random=10",
      //   title: "CRM System",
      //   desc: "Manage leads, clients, and sales in one place."
      // },
      // {
      //   img: "https://picsum.photos/600/900?random=11",
      //   title: "Event Planner",
      //   desc: "Create, manage, and sell tickets for events online."
      // },
      // {
      //   img: "https://picsum.photos/600/900?random=12",
      //   title: "Healthcare App",
      //   desc: "Book doctors, video consults, and view prescriptions."
      // },
      // {
      //   img: "https://picsum.photos/600/900?random=13",
      //   title: "Education Website",
      //   desc: "School management portal with e-learning tools."
      // }
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
  @yield('js')
</body>

</html>