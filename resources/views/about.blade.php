@extends('layout.app')

@section('title', 'About Wishery | Digital Marketing Experts in Kochi, Kerala')
@section('meta_description', 'Wishery is a digital marketing agency in Kerala providing SEO, social media marketing, web design, branding, and video production to help businesses grow online.')

@section('content')
  <!-- Inner Page Banner -->
  <section class="inner-banner" style="background: url('images/aboutus.jpg') top/cover no-repeat;">
    <div class="content">
      <h1>About Us</h1>
      <p>At Wishery, we don’t just market. We make your brand wish worthy!</p>
    </div>
  </section>

  <!-- Content Section -->
  <section class="blue-bg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-10" style="margin:0 auto">
          <h2>Who We Are</h2>
          <img src="{{url('images/about_img.jpg')}}" class="img-fluid rounded shadow" alt="About Wishery">
        </div>
        <div class="col-lg-10 mb-4 mt-4" style="margin:0 auto">
          <p>
            At Wishery, we specialize in crafting tailored marketing solutions that deliver measurable results.
            Our team combines creativity, technology, and data-driven strategies to help brands connect with their
            audience in meaningful ways.
          </p>
          <p>
            Whether it’s launching new campaigns, boosting visibility, or creating unforgettable brand experiences,
            we aim to deliver excellence at every step.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Another Section -->
  <section class="blue-bg">
    <div class="col-lg-10" style="margin:0 auto">
      <h2>Our Mission</h2>
      <p>
        To empower businesses by providing innovative and customized marketing strategies that transform ideas into
        impactful results.
      </p>
    </div>
  </section>

@endsection