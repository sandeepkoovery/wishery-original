@extends('layout.app')

@section('title', 'Frequently Asked Questions | Wishery')
@section('meta_description', 'Frequently asked questions about Wishery digital marketing services, video production, SEO, social media marketing, and customized business growth strategies.')

@section('content')
  <!-- Inner Page Banner -->
  <section class="inner-banner" style="background: url('images/inner-bg.jpg') top/cover no-repeat;">
    <div class="content">
      <h1>FAQs</h1>
      <p>Got questions about Wishery? We’ve got answers.</p>
    </div>
  </section>

  <!-- FAQ Section matching exact screenshot layout -->
  <section class="faq-screenshot-section">
    <div class="container faq-custom-container">
      <!-- Eyebrow label -->
      <div class="faq-eyebrow text-center">
        <span class="faq-arrow">&raquo;</span> HAVE QUESTIONS?
      </div>

      <!-- Main Title -->
      <h2 class="faq-main-title text-center">FREQUENTLY ASKED QUESTIONS</h2>

    <div class="row justify-content-center">
      <div class="col-12">
        <!-- Subtitle sentence -->
        <p class="faq-subtitle-text">
          All your questions about Wishery and our digital marketing services were answered.
        </p>

        <!-- Accordion -->
        <div class="accordion faq-exact-accordion" id="faqAccordion">

          <!-- Item 1 (Open by default) -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                <span class="faq-question-title">What services does Wishery offer as a digital marketing agency?</span>
                <span class="faq-toggle-circle">
                  <i class="fa-solid fa-xmark icon-close"></i>
                  <i class="fa-solid fa-plus icon-open"></i>
                </span>
              </button>
            </h2>
            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Wishery offers a full range of digital marketing services, including SEO, Google Ads, Meta Ads, social media marketing, website development, branding, video production, content creation, and ERP software solutions. We combine strategy, creativity, and technology to help businesses build their online presence and grow sustainably.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                <span class="faq-question-title">Does Wishery offer video production for businesses?</span>
                <span class="faq-toggle-circle">
                  <i class="fa-solid fa-xmark icon-close"></i>
                  <i class="fa-solid fa-plus icon-open"></i>
                </span>
              </button>
            </h2>
            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes, we bring your business story to life through video, from corporate videos and promotional content to social media videos and ads. We handle everything, from concept and scripting to filming, editing, and the final cut, so you can focus on your business while we create content that gets you noticed.
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                <span class="faq-question-title">Do you offer social media marketing for businesses?</span>
                <span class="faq-toggle-circle">
                  <i class="fa-solid fa-xmark icon-close"></i>
                  <i class="fa-solid fa-plus icon-open"></i>
                </span>
              </button>
            </h2>
            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes, we handle social media marketing for businesses of all sizes. From content creation to running campaigns to building your community and tracking what's working, we manage it all across platforms like Facebook, Instagram, Pinterest, YouTube, and more.
              </div>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading4">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                <span class="faq-question-title">What industries does Wishery work with?</span>
                <span class="faq-toggle-circle">
                  <i class="fa-solid fa-xmark icon-close"></i>
                  <i class="fa-solid fa-plus icon-open"></i>
                </span>
              </button>
            </h2>
            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Wishery works with businesses across many industries, big or small, new or established. We create digital marketing, branding, and technology solutions tailored to your specific goals and the needs of your market.
              </div>
            </div>
          </div>

          <!-- Item 5 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading5">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                <span class="faq-question-title">Does Wishery offer customized digital marketing plans for businesses?</span>
                <span class="faq-toggle-circle">
                  <i class="fa-solid fa-xmark icon-close"></i>
                  <i class="fa-solid fa-plus icon-open"></i>
                </span>
              </button>
            </h2>
            <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes, we create customized digital marketing plans based on your business size, goals, and budget. Whether you're a small business just starting out or an established brand looking to grow, we tailor our SEO, ads, branding, and content strategies to fit what you actually need.
              </div>
            </div>
          </div>

          <!-- Item 6 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading6">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                <span class="faq-question-title">How do I know if my business needs a digital marketing agency?</span>
                <span class="faq-toggle-circle">
                  <i class="fa-solid fa-xmark icon-close"></i>
                  <i class="fa-solid fa-plus icon-open"></i>
                </span>
              </button>
            </h2>
            <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                If your business struggles to reach the right audience online, needs a stronger digital presence, or lacks the in-house expertise for SEO, advertising, or content creation, partnering with a digital marketing agency like Wishery can help you achieve consistent, measurable growth.
              </div>
            </div>
          </div>

          <!-- Item 7 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading7">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7" aria-expanded="false" aria-controls="faqCollapse7">
                <span class="faq-question-title">What makes Wishery different from other digital marketing agencies?</span>
                <span class="faq-toggle-circle">
                  <i class="fa-solid fa-xmark icon-close"></i>
                  <i class="fa-solid fa-plus icon-open"></i>
                </span>
              </button>
            </h2>
            <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faqHeading7" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Wishery combines technology, strategy, creativity, and media under one roof, so all your services work together instead of feeling separate. Along with SEO, ads, branding, web development, and content, we also do video production ourselves, from the idea stage to the final edit. Focus on your business while we create content that gets you noticed.
              </div>
            </div>
          </div>

          <!-- Item 8 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading8">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse8" aria-expanded="false" aria-controls="faqCollapse8">
                <span class="faq-question-title">Can digital marketing help small businesses?</span>
                <span class="faq-toggle-circle">
                  <i class="fa-solid fa-xmark icon-close"></i>
                  <i class="fa-solid fa-plus icon-open"></i>
                </span>
              </button>
            </h2>
            <div id="faqCollapse8" class="accordion-collapse collapse" aria-labelledby="faqHeading8" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes. Digital marketing can help small businesses increase online visibility, reach their target audience, generate leads, and build a stronger online presence. Wishery develops strategies based on the specific needs and goals of each business.
              </div>
            </div>
          </div>

          <!-- Item 9 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading9">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse9" aria-expanded="false" aria-controls="faqCollapse9">
                <span class="faq-question-title">How can I improve my business's online presence?</span>
                <span class="faq-toggle-circle">
                  <i class="fa-solid fa-xmark icon-close"></i>
                  <i class="fa-solid fa-plus icon-open"></i>
                </span>
              </button>
            </h2>
            <div id="faqCollapse9" class="accordion-collapse collapse" aria-labelledby="faqHeading9" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                A strong online presence starts with a clear digital marketing strategy. Wishery helps businesses improve their visibility through SEO, social media marketing, paid advertising, content, website development, and other digital marketing services tailored to their goals.
              </div>
            </div>
          </div>

          <!-- Item 10 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading10">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse10" aria-expanded="false" aria-controls="faqCollapse10">
                <span class="faq-question-title">How does Wishery help me choose the right digital marketing strategy for my business?</span>
                <span class="faq-toggle-circle">
                  <i class="fa-solid fa-xmark icon-close"></i>
                  <i class="fa-solid fa-plus icon-open"></i>
                </span>
              </button>
            </h2>
            <div id="faqCollapse10" class="accordion-collapse collapse" aria-labelledby="faqHeading10" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                At Wishery, we start by understanding your business first. We analyze your current online presence to identify potential challenges and opportunities, discuss your specific goals and requirements with you, and then design a customized, strategic digital marketing plan tailored to your needs.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
@endsection
