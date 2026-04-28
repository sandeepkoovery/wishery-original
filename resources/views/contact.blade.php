@extends('layout.app')
@section('title', 'Contact Wishery | Online Advertising Company in Kochi, Kerala')
@section('meta_description', 'Get in touch with Wishery, a Kochi-based digital marketing and branding agency offering SEO, social media marketing, advertising, and creative video production services')
@section('content')
  <!-- Inner Page Banner -->
  <section class="inner-banner" style="background: url('images/contactus.jpg') top/cover no-repeat;">
    <div class="content">
      <h1>Contact Us</h1>
      <p>Connect with Team Wishery today!</p>
    </div>
  </section>

  <!-- Contact Page -->
  <section class="contact-inner py-5 blue-bg">
    <div class="container">
      <h2 class="text-center mb-4">Get in Touch</h2>
      <p class="text-center mb-5">We’d love to hear from you! Reach out with any questions or inquiries.</p>
      <div class="row g-5">
        <!-- Left Side Info -->
        <div class="col-lg-6">
          <div class="contact-info">
            <!-- <h4>Get in Touch</h4> -->
            <p><i class="bi bi-geo-alt-fill me-2"></i> SRM Road, Near Nirmala Sisu Bhavan, <br> Ayyappankavu, Ernakulam,
              Kerala 682018</p>
            <p><i class="bi bi-telephone-fill me-2"></i> +91 92079 44882</p>
            <p><i class="bi bi-envelope-fill me-2"></i> wisherypvtltd@gmail.com</p>

            <!-- Social Icons -->
            <div class="social-icons mt-4">
              <a href="#" class="me-3"><i class="bi bi-facebook fs-4"></i></a>
              <a href="#" class="me-3"><i class="bi bi-twitter fs-4"></i></a>
              <a href="#" class="me-3"><i class="bi bi-instagram fs-4"></i></a>
              <a href="#"><i class="bi bi-linkedin fs-4"></i></a>
            </div>

            <!-- Google Map -->
            <div class="map mt-4">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5638.084165195368!2d76.27771669839113!3d9.995059800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080db7c57b631b%3A0x4e2c7d1c34a19539!2sInnerspace%20Coworking!5e1!3m2!1sen!2sin!4v1756288181102!5m2!1sen!2sin"
                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-form shadow p-4 rounded">
            <h4 style="text-align: center;">Send a Message</h4>
            <form id="contactForm" action="{{ route('contactus.page') }}" method="POST" novalidate>
              @csrf
              <!-- Name -->
              <div class="mb-3">
                <label class="form-label" style="float: left; margin-left: 5px;">NAME</label>
                <input name="name" type="text" class="form-control custom-input" placeholder="Enter your name">
                <div class="invalid-feedback" id="error-name"></div>
              </div>

              <!-- Phone -->
              <div class="mb-3">
                <label class="form-label" style="float: left; margin-left: 5px;">PHONE</label>
                <input name="phone" type="text" class="form-control custom-input" placeholder="Enter your phone">
                <div class="invalid-feedback" id="error-phone"></div>
              </div>

              <!-- Email -->
              <div class="mb-3">
                <label class="form-label" style="float: left; margin-left: 5px;">EMAIL</label>
                <input name="email" type="email" class="form-control custom-input" placeholder="Enter your email">
                <div class="invalid-feedback" id="error-email"></div>
              </div>
              <!-- Message -->
              <div class="mb-3">
                <label class="form-label" style="float: left; margin-left: 5px;">MESSAGE</label>
                <textarea name="message" class="form-control custom-input" placeholder="Enter your message">
              </textarea>
                <div class="invalid-feedback" id="error-message"></div>
              </div>
              <!-- Submit -->
              <div class="mb-3">
                <button type="submit" class="btn btn-primary custom-btn w-100">Submit</button>
              </div>
            </form>
          </div>
          <!-- Success message -->
          <div id="success-message" class="alert alert-success d-none mt-2"></div>
        </div>
      </div>
      <!-- Right Side Form -->
      <!--       <div class="col-lg-6">
          <div class="contact-form shadow p-4 rounded bg-white">
            <h4 class="mb-4 text-black">Send a Message</h4>
            <form>
              <div class="mb-3">
                <label class="form-label">Your Name</label>
                <input type="text" class="form-control" placeholder="Enter your name">
              </div>
              <div class="mb-3">
                <label class="form-label">Your Email</label>
                <input type="email" class="form-control" placeholder="Enter your email">
              </div>
              <div class="mb-3">
                <label class="form-label">Subject</label>
                <input type="text" class="form-control" placeholder="Enter subject">
              </div>
              <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea class="form-control" rows="5" placeholder="Type your message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
          </div>
        </div> -->
    </div>
    </div>
  </section>

@endsection
@section('js')
  <script>
    const contactForm = document.getElementById('contactForm');
    const submitBtn = contactForm.querySelector('button[type="submit"]');

    contactForm.addEventListener('submit', async function (e) {
      e.preventDefault();

      let formData = new FormData(contactForm);

      // Clear old errors
      document.querySelectorAll('.invalid-feedback').forEach(el => el.innerText = '');
      document.querySelectorAll('.form-control').forEach(el => el.classList.remove('is-invalid'));

      // Disable button & show loading
      submitBtn.disabled = true;
      const originalText = submitBtn.innerHTML;
      submitBtn.innerHTML = 'Sending... ⏳';

      try {
        let response = await fetch(contactForm.action, {
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

          contactForm.reset();
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