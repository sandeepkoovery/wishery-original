@extends('layout.app')

@section('title', 'Privacy Policy | Wishery - Digital Marketing Agency')
@section('meta_description', 'Read the official Privacy Policy of Wishery. Learn how we collect, protect, and handle your data across our digital marketing, web, and media services.')

@section('content')
<style>
  .privacy-content-block {
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 12px;
    padding: 30px 35px;
    margin-bottom: 25px;
    text-align: left;
  }

  .privacy-content-block h3 {
    color: #e2ba46;
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 16px;
    text-transform: uppercase;
    display: flex;
    align-items: center;
    gap: 10px;
    letter-spacing: 0.5px;
  }

  .privacy-content-block h3 i {
    font-size: 20px;
    color: #e2ba46;
  }

  .privacy-content-block p {
    font-size: 17px;
    line-height: 1.8;
    color: #e2e8f0;
    font-weight: 300;
    margin-bottom: 15px;
    text-align: left;
  }

  .privacy-content-block ul {
    padding-left: 20px;
    margin-bottom: 15px;
    text-align: left;
  }

  .privacy-content-block li {
    font-size: 16.5px;
    line-height: 1.75;
    color: #cbd5e1;
    margin-bottom: 8px;
    font-weight: 300;
  }

  .privacy-content-block strong {
    color: #ffffff;
    font-weight: 600;
  }

  .privacy-content-block a {
    color: #60a5fa;
    text-decoration: underline;
  }

  .privacy-content-block a:hover {
    color: #e2ba46;
  }

  .privacy-meta-badge {
    color: #cbd5e1;
    font-size: 15.5px;
    margin-bottom: 40px;
  }

  .privacy-contact-card {
    background: rgba(10, 24, 81, 0.85);
    border: 1px solid rgba(226, 186, 70, 0.3);
    border-radius: 12px;
    padding: 30px 35px;
    margin-top: 35px;
  }

  .privacy-contact-card h4 {
    color: #e2ba46;
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 12px;
  }

  @media (max-width: 768px) {
    .privacy-content-block {
      padding: 22px 18px;
    }
    .privacy-contact-card {
      padding: 22px 18px;
    }
  }
</style>

<!-- Inner Page Banner -->
<section class="inner-banner" style="background: url('{{ asset('images/inner-bg.jpg') }}') top/cover no-repeat;">
  <div class="content">
    <h1>Privacy Policy</h1>
    <p>We respect your privacy and are committed to protecting your personal data.</p>
  </div>
</section>

<!-- Content Section matching exact container width as other pages -->
<section class="blue-bg py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">

        <!-- Block 1: Introduction -->
        <div class="privacy-content-block">
          <h3><i class="fa-solid fa-circle-info"></i> 1. Introduction & Overview</h3>
          <p>
            Welcome to <strong>Wishery</strong> ("we," "our," or "us"). Wishery operates the website 
            <a href="https://wishery.tech" target="_blank" rel="noopener">https://wishery.tech</a> and provides performance-driven digital marketing, website development, SEO, social media management, brand creation, video production, and ERP software solutions.
          </p>
          <p class="mb-0">
            This Privacy Policy explains how we collect, use, disclose, and safeguard your personal information when you visit our website or interact with our digital services and marketing campaigns. By accessing or using our website, you agree to the collection and use of information in accordance with this policy.
          </p>
        </div>

        <!-- Block 2: Information We Collect -->
        <div class="privacy-content-block">
          <h3><i class="fa-solid fa-database"></i> 2. Information We Collect</h3>
          <p>We collect personal and non-personal information to provide high-quality services, respond to inquiries, and optimize our digital experiences.</p>
          
          <h5 class="text-warning fw-bold mt-4 mb-2">A. Personal Information You Provide</h5>
          <p>When you fill out contact forms, request a quote, subscribe to updates, or submit a creator onboarding application on our website, we may collect:</p>
          <ul>
            <li><strong>Contact Details:</strong> Full name, email address, phone number, and location.</li>
            <li><strong>Business Details:</strong> Company name, website URL, industry type, and marketing goals.</li>
            <li><strong>Creator Information:</strong> Social media handles, follower count, media kit links, and collaboration preferences.</li>
            <li><strong>Inquiry Details:</strong> Specific messages, requirements, or feedback you submit to our team.</li>
          </ul>

          <h5 class="text-warning fw-bold mt-4 mb-2">B. Automatically Collected Technical Data</h5>
          <p>When you browse our website, certain technical information is collected automatically by our servers and analytics providers:</p>
          <ul>
            <li>Device details (IP address, browser type, operating system, screen resolution).</li>
            <li>Usage statistics (pages visited, time spent per page, referral URLs, clickstream data).</li>
            <li>Location data (approximate location derived from IP address).</li>
          </ul>
        </div>

        <!-- Block 3: How We Use Your Information -->
        <div class="privacy-content-block">
          <h3><i class="fa-solid fa-gear"></i> 3. How We Use Your Information</h3>
          <p>We use the collected information for specific, legitimate business purposes, including:</p>
          <ul>
            <li><strong>Service Delivery:</strong> To respond to your consultations, prepare customized marketing proposals, and execute digital marketing campaigns.</li>
            <li><strong>Communication:</strong> To send project updates, newsletters, invoices, or customer support responses.</li>
            <li><strong>Performance Optimization:</strong> To monitor website performance, track user engagement, and enhance navigation and user experience.</li>
            <li><strong>Digital Advertising:</strong> To deliver targeted advertisements via platforms like Google Ads and Meta Ads that align with your business interests.</li>
            <li><strong>Security & Compliance:</strong> To prevent fraud, protect server integrity, and ensure compliance with applicable legal standards.</li>
          </ul>
          <p class="mb-0 text-warning">
            <i class="fa-solid fa-shield-halved me-2"></i> <strong>Note:</strong> Wishery does not sell, rent, trade, or monetize your personal information to third-party data brokers under any circumstances.
          </p>
        </div>

        <!-- Block 4: Sharing & Disclosure -->
        <div class="privacy-content-block">
          <h3><i class="fa-solid fa-share-nodes"></i> 4. Information Sharing & Disclosure</h3>
          <p>We only share your information with third-party service providers under strict privacy obligations, or when required by law:</p>
          <ul>
            <li><strong>Service Providers & Partners:</strong> Trusted vendors assisting in hosting, website maintenance, email distribution, and analytics.</li>
            <li><strong>Analytics & Advertising Platforms:</strong> Providers (Google Analytics, Google Tag Manager, Meta Ads) to measure website traffic and campaign efficacy.</li>
            <li><strong>Legal Requirements:</strong> If required by court order, law enforcement request, or legal regulation to protect our rights, safety, or property.</li>
          </ul>
        </div>

        <!-- Block 5: Cookies & Analytics -->
        <div class="privacy-content-block">
          <h3><i class="fa-solid fa-cookie-bite"></i> 5. Cookies & Tracking Technologies</h3>
          <p>We use cookies, web beacons, and tag scripts to enhance user experience and understand how visitors interact with our site:</p>
          <ul>
            <li><strong>Essential Cookies:</strong> Necessary for core website functionality and page navigation.</li>
            <li><strong>Analytical Cookies:</strong> Help us analyze web traffic patterns via Google Analytics.</li>
            <li><strong>Marketing Cookies:</strong> Allow us to measure advertisement performance and deliver relevant promotions.</li>
          </ul>
          <p class="mb-0">
            You can adjust your browser settings at any time to block or notify you about cookies.
          </p>
        </div>

        <!-- Block 6: Data Security -->
        <div class="privacy-content-block">
          <h3><i class="fa-solid fa-lock"></i> 6. Data Security & Storage</h3>
          <p class="mb-0">
            We employ industry-standard technical and organizational security measures, including SSL encryption (HTTPS), firewall protection, and restricted database access, to protect your personal data against unauthorized access, alteration, disclosure, or destruction.
          </p>
        </div>

        <!-- Block 7: Your Rights -->
        <div class="privacy-content-block">
          <h3><i class="fa-solid fa-user-shield"></i> 7. Your Rights & Choices</h3>
          <p>Depending on your location, you hold rights regarding your personal data:</p>
          <ul>
            <li><strong>Access & Correction:</strong> Request a copy of the personal data we hold about you or ask us to correct inaccuracies.</li>
            <li><strong>Erasure (Deletion):</strong> Request that we delete your personal data from our systems.</li>
            <li><strong>Opt-Out:</strong> Unsubscribe from promotional email updates by clicking the unsubscribe link or contacting us directly.</li>
          </ul>
        </div>

        <!-- Block 8: External Links & Updates -->
        <div class="privacy-content-block">
          <h3><i class="fa-solid fa-arrow-up-right-from-square"></i> 8. External Links & Policy Updates</h3>
          <p>
            Our website may contain links to external sites (such as social networks or client portfolios). Wishery is not responsible for the privacy practices or content of third-party websites.
          </p>
          <p class="mb-0">
            We may update this Privacy Policy periodically. Any changes will be posted on this page with an updated date.
          </p>
        </div>

        <!-- Contact Box -->
        <div class="privacy-contact-card text-start">
          <h4><i class="fa-solid fa-envelope me-2"></i> 9. Contact Us</h4>
          <p class="text-light mb-3">If you have questions, feedback, or data privacy requests regarding this policy, please reach out to our team:</p>
          <p class="mb-1"><strong class="text-warning">Wishery Digital Marketing Agency</strong></p>
          <p class="mb-1"><i class="fa-solid fa-location-dot me-2 text-warning"></i> 90 A, Door no 55/1171, Canal Road, Girinagar, Kadavanthara, Ernakulam - 682020, Kerala, India</p>
          <p class="mb-1"><i class="fa-solid fa-envelope me-2 text-warning"></i> Email: <a href="mailto:info@wishery.tech" class="text-white text-decoration-underline">info@wishery.tech</a></p>
          <p class="mb-0"><i class="fa-solid fa-phone me-2 text-warning"></i> Phone: <a href="tel:+919207944882" class="text-white text-decoration-underline">+91 92079 44882</a></p>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection
