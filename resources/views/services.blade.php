@extends('layout.app')

@section('title', 'Services - Wishery')

@section('content')
  <!-- Inner Page Banner -->
  <section class="inner-banner" style="background: url('images/service.jpg') top/cover no-repeat;">
    <div class="content">
      <h1>Service</h1>
      <p>Learn more about our journey, mission, and the team behind Wishery.</p>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services-section text-center blue-bg">
    <div class="container">
<!--       <h2 class="text-white">Our Computer Vision Services</h2>
      <p class="sub-title text-white">Making Text Work for You</p> -->
      <div class="row g-4 justify-content-center">
        <!-- Service Card 1 -->
        <div class="col-lg-4 col-md-6">
          <div class="service-card">
            <div class="service-icon">
               <img src="{{url('images/production_studio.jpg')}}" width="100" height="100" style="border-radius: 50%;">
            </div>
            <h5>Production Studio</h5>
            <p>At Wishery, we don’t just create content. Our in-house production studio is built to bring your brand stories to life with high-quality visuals that captivate and convert. Whether it's an ad film, brand documentary, product reel, or social media content, we handle it all, from concept to camera to final cut.</p>
          </div>
        </div>

        <!-- Service Card 2 -->
        <div class="col-lg-4 col-md-6">
          <div class="service-card">
            <div class="service-icon">
              <img src="{{url('images/smm.jpg')}}" width="100" height="100" style="border-radius: 50%;">
            </div>
            <h5>Social Media Marketing</h5>
            <p>We don’t just manage your social media, we craft a voice, build a presence, and drive real engagement across platforms.</p>
          </div>
        </div>

        <!-- Service Card 3 -->
        <div class="col-lg-4 col-md-6">
          <div class="service-card">
            <div class="service-icon">
              <img src="{{url('images/sem.jpg')}}" width="100" height="100" style="border-radius: 50%;">
            </div>
            <h5>Search Engine Marketing</h5>
            <p>We don’t chase clicks, we capture intent. Our SEM strategies position your brand precisely where your customers are searching.
Whether it’s Google Ads, YouTube, or display networks, our data-backed approach ensures that every click counts and every rupee is returned.</p>
          </div>
        </div>

        <!-- Service Card 4 -->
        <div class="col-lg-4 col-md-6">
          <div class="service-card">
            <div class="service-icon">
              <img src="{{url('images/seo_service.jpg')}}" width="100" height="100" style="border-radius: 50%;">
            </div>
            <h5>Search Engine Optimization (SEO)</h5>
            <p>Be Found. Be Chosen. Be on Top. <br>
Your website deserves more than just visitors. It deserves the right audience. At Wishery, our SEO strategies are built to boost visibility, increase organic traffic, and rank your brand where it matters on top of search results.
</p>
          </div>
        </div>

        <!-- Service Card 5 -->
        <div class="col-lg-4 col-md-6">
          <div class="service-card">
            <div class="service-icon">
              <img src="{{url('images/web_dev_des.jpg')}}" width="100" height="100" style="border-radius: 50%;">
            </div>
            <h5>Web Design & Development</h5>
            <p>At Wishery, we create websites that blend aesthetics with performance. Whether you're starting fresh or revamping your digital home, we design with purpose and develop that is optimized for all screens and every scroll.</p>
          </div>
        </div>

        <!-- Service Card 6 -->
        <div class="col-lg-4 col-md-6">
          <div class="service-card">
            <div class="service-icon">
              <img src="{{url('images/branding_serv.jpg')}}" width="100" height="100" style="border-radius: 50%;">
            </div>
            <h5>Branding</h5>
            <p>At Wishery, we don’t just build brands — we craft identities that connect, captivate, and convert. Whether you're starting from scratch or reimagining your presence, we give your brand the voice, look, and story it needs to stand out in a crowded market.</p>
          </div>
        </div>
      <div class="row g-4 justify-content-center">
        <!-- Service Card 1 -->
        <div class="col-lg-6 col-md-6">
          <div class="service-card">
            <div class="service-icon">
              <img src="{{url('images/offline markrting.jpg')}}" width="100" height="100" style="border-radius: 50%;">
            </div>
            <h5>Offline Marketing</h5>
            <p>While digital grabs attention, offline marketing creates a lasting presence.
At Wishery, we bring your brand into the real world with campaigns that turn heads, build trust, and leave an impact right where your audience lives, walks, shops, and gathers.</p>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>


@endsection