@extends('layout.app')

@section('title', 'Portfolio - Wishery')

@section('content')
<!-- Inner Page Banner -->
<section class="inner-banner position-relative d-flex align-items-center justify-content-center text-center text-white">
  <div class="overlay"></div>
  <div class="content position-relative">
    <h1 class="fw-bold display-4 mb-2">Our Portfolio</h1>
    <p class="lead mb-0">See the brands we’ve helped grow.</p>
  </div>
</section>

<!-- Portfolio Section -->
<section class="portfolio-inner py-5 blue-bg">
  <div class="container text-center">
    <h2 class="portfolio-section-title text-white mb-5">Commercial & Brand Videos</h2>
    <div class="row g-4 justify-content-center text-start">
      @php
        $projects = [
          ['image' => asset('images/1a.jpeg'), 'name' => 'Rhythmbhara', 'video' => 'https://www.instagram.com/reel/DGnZ1lFBd3S/?utm_source=ig_web_button_share_sheet'],
          ['image' => asset('images/2a.jpeg'), 'name' => 'Nailit By Gayathri Arun', 'video' => 'https://www.youtube.com/embed/YZHKt_Cw8gI'],
          ['image' => asset('images/3a.jpeg'), 'name' => 'Nail Art Studio By Ritha Mathen', 'video' => 'https://www.instagram.com/reel/DN-j1c3iUDa/?igsh=ZGR1dTA0cDE0cHg%3D'],
          ['image' => asset('images/4a.jpeg'), 'name' => 'Rhythmbhara', 'video' => 'https://www.youtube.com/embed/CqVj2TKY-cs'],
          ['image' => asset('images/5a.jpeg'), 'name' => 'Kandamangalam', 'video' => 'https://www.instagram.com/reel/DB3qjdKhakZ/?igsh=bmQ2Mmtxd3NwZjAw'],
          ['image' => asset('images/6a.jpeg'), 'name' => 'Grace', 'video' => 'https://www.youtube.com/embed/Fn3gnFZGSRg'],
          ['image' => asset('images/7a.jpeg'), 'name' => 'Karx', 'video' => 'https://www.youtube.com/embed/pm_MLweOZ0g'],
          ['image' => asset('images/8a.png'), 'name' => 'De Lamor', 'video' => 'https://www.instagram.com/reel/DPIi4KLkyOd/?igsh=ZTRtaW9nZGdrZ25x']
        ];
      @endphp

      @foreach($projects as $project)
      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="portfolio-card d-flex flex-column h-100 rounded-4 overflow-hidden shadow-sm position-relative">
          <div class="video-wrapper position-relative w-100">
            <div class="custom-video" data-video="{{ $project['video'] }}">
              <img src="{{ $project['image'] }}" alt="{{ $project['name'] }}" class="img-fluid video-thumb w-100">
              <div class="play-button">
                <span class="play-icon"></span>
              </div>
            </div>
          </div>
          <h5 class="text-center text-white py-3 mb-0 fs-6">{{ $project['name'] }}</h5>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Instagram Videos Section -->
<section class="portfolio-inner pb-5 blue-bg">
  <div class="container text-center">
    <h2 class="portfolio-section-title text-white mb-5">Instagram Reels</h2>
    <div class="row g-4 justify-content-center text-start">
      @php
        $dummy_instagram_projects = [
          ['image' => asset('images/reels1.jpeg'), 'name' => 'Grace', 'video' => 'https://www.instagram.com/reel/Da2tsYwgZ7y/?igsh=NGE1eGQzbnQ2eDY1'],
          ['image' => asset('images/reels2.jpeg'), 'name' => 'Grace', 'video' => 'https://www.instagram.com/reel/DaN5OFWGFAt/?igsh=MXhtZG01YmtkZGk5MA%3D%3D'],
          ['image' => asset('images/reels3.jpeg'), 'name' => 'Kalpaka Ayurveda', 'video' => 'https://www.instagram.com/reel/DaiGXHVjcrs/?igsh=MWh4bGh1MTlpamt1NA%3D%3D'],
          ['image' => asset('images/reels4.jpeg'), 'name' => 'Kalpaka Ayurveda', 'video' => 'https://www.instagram.com/reel/Da4ZPK9BM6n/?igsh=bzdhc2c2aWQ2bjd6'],
          ['image' => asset('images/reels6.jpeg'), 'name' => 'Kinder Hospitals', 'video' => 'https://www.instagram.com/reel/DXPOjuVk_W7/?igsh=eWl0cXFnZzk3b3kx'],
          ['image' => asset('images/reels6.jpeg'), 'name' => 'Kinder Hospitals', 'video' => 'https://www.instagram.com/reel/DVixV8agSD4/?igsh=MTNiOWpjZjF4bWZ2cA%3D%3D'],
          ['image' => asset('images/reels7.jpeg'), 'name' => 'Rhythmbhara', 'video' => 'https://www.instagram.com/reel/DVGKpjYgVng/?igsh=MWN1YTFvb2p3a2k1Mg%3D%3D'],
          ['image' => asset('images/reels8.jpeg'), 'name' => 'Nailit By Gayathri Arun', 'video' => 'https://www.instagram.com/reel/DakpqS8ERSx/?igsh=MTdsMnhlNmN0NTFpMA%3D%3D'],
          ['image' => asset('images/reels9.jpeg'), 'name' => 'Nailit By Gayathri Arun', 'video' => 'https://www.instagram.com/reel/DaAkmtZDljU/?igsh=MWh5N3NsbDQzcmh3'],
          ['image' => asset('images/reels10.jpeg'), 'name' => 'Grace', 'video' => 'https://www.instagram.com/reel/DXtt7sOFJMu/?igsh=dWY3bXo3dHBmbzE5'],
          ['image' => asset('images/reels11.jpeg'), 'name' => 'Grace', 'video' => 'https://www.instagram.com/reel/DN2n7RU2Kvk/?igsh=MW12bGJ5Y2Nlc3Vxag%3D%3D'],
          ['image' => asset('images/reels12.jpeg'), 'name' => 'Kandamangalam', 'video' => 'https://www.instagram.com/reel/DH3co8PSjzm/?igsh=cm51bjN4bjVhbTJ5']
        ];
      @endphp

      @foreach($dummy_instagram_projects as $project)
      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="portfolio-card d-flex flex-column h-100 rounded-4 overflow-hidden shadow-sm position-relative">
          <div class="video-wrapper position-relative w-100">
            <div class="custom-video" data-video="{{ $project['video'] }}">
              <img src="{{ $project['image'] }}" alt="{{ $project['name'] }}" class="img-fluid video-thumb w-100">
              <div class="play-button">
                <span class="play-icon"></span>
              </div>
            </div>
          </div>
          <h5 class="text-center text-white py-3 mb-0 fs-6">{{ $project['name'] }}</h5>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Video Popup Modal -->
<div class="video-popup-overlay" id="videoPopup">
  <div class="video-popup-content">
    <span class="close-btn">&times;</span>
    <iframe id="videoFrame" src="" frameborder="0" allow="autoplay; fullscreen; encrypted-media" allowfullscreen></iframe>
  </div>
</div>

<style>
/* --- Section Titles --- */
.portfolio-section-title {
  font-size: 2.25rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  background: linear-gradient(135deg, #ffffff 40%, #ffc107 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  position: relative;
  display: inline-block;
}
.portfolio-section-title::after {
  content: '';
  display: block;
  width: 60px;
  height: 4px;
  background: #ffc107;
  margin: 12px auto 0 auto;
  border-radius: 2px;
}

/* --- Banner --- */
.inner-banner {
  background: url('{{ url('images/portfolio.jpg') }}') center/cover no-repeat;
  height: 60vh;
  position: relative;
}
.inner-banner .overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.55);
}
.inner-banner .content { z-index: 2; }

/* --- Portfolio Cards --- */
.portfolio-card {
  background: rgba(255, 255, 255, 0.05);
  transition: all 0.35s ease;
  border: 1px solid rgba(255, 255, 255, 0.1);
  width: 100%;
}
.portfolio-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
}

/* --- Video Section --- */
.video-wrapper {
  position: relative;
  width: 100%;
  aspect-ratio: 9 / 16;
  overflow: hidden;
  background: #000;
}
.custom-video {
  position: relative;
  width: 100%;
  height: 100%;
  cursor: pointer;
  overflow: hidden;
}
.video-thumb,
.custom-video iframe {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.video-thumb {
  transition: transform 0.4s ease, opacity 0.4s ease;
}
.custom-video:hover .video-thumb {
  transform: scale(1.05);
  opacity: 0.85;
}

/* --- Play Button --- */
.play-button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(8px);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 0 20px rgba(255, 255, 255, 0.25);
  transition: all 0.3s ease;
  animation: pulse-ring 1.8s infinite;
}
.play-icon {
  border-left: 22px solid #ffc107;
  border-top: 13px solid transparent;
  border-bottom: 13px solid transparent;
  transition: transform 0.3s ease;
}
.play-button:hover {
  transform: translate(-50%, -50%) scale(1.1);
  box-shadow: 0 0 30px rgba(255, 193, 7, 0.6);
}
.play-button:hover .play-icon {
  transform: scale(1.1);
}

/* --- Pulse Animation --- */
@keyframes pulse-ring {
  0% { box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.5); }
  70% { box-shadow: 0 0 0 20px rgba(255, 193, 7, 0); }
  100% { box-shadow: 0 0 0 0 rgba(255, 193, 7, 0); }
}

/* --- Popup --- */
.video-popup-overlay {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.85);
  z-index: 1000;
  align-items: center;
  justify-content: center;
  transition: opacity 0.3s ease;
}
.video-popup-overlay.active {
  display: flex;
}
.video-popup-content {
  position: relative;
  width: 90%;
  max-width: 900px;
  aspect-ratio: 16 / 9;
  background: #000;
  border-radius: 12px;
  overflow: hidden;
  animation: fadeIn 0.4s ease;
}
.video-popup-content iframe {
  width: 100%;
  height: 100%;
  border: 0;
}
.close-btn {
  position: absolute;
  top: -40px;
  right: 0;
  color: #fff;
  font-size: 2rem;
  cursor: pointer;
  transition: color 0.3s ease;
}
.close-btn:hover { color: #ffc107; }

@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.95); }
  to { opacity: 1; transform: scale(1); }
}

@media (max-width: 768px) {
  .play-button { width: 60px; height: 60px; }
  .play-icon {
    border-left-width: 18px;
    border-top-width: 10px;
    border-bottom-width: 10px;
  }
  .close-btn { top: -35px; font-size: 1.5rem; }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const popup = document.getElementById("videoPopup");
  const frame = document.getElementById("videoFrame");
  const closeBtn = document.querySelector(".close-btn");

  document.querySelectorAll(".custom-video").forEach(el => {
    el.addEventListener("click", function() {
      const videoURL = this.getAttribute("data-video");

      // 🎥 Instagram — open in new tab
      if (videoURL.includes("instagram.com")) {
        window.open(videoURL, "_blank");
        return;
      }

      // 🎬 YouTube — autoplay & fullscreen
      let autoplayURL = videoURL;
      if (autoplayURL.includes("youtube.com/embed")) {
        autoplayURL += "?autoplay=1&rel=0&showinfo=0&modestbranding=1";
      }

      frame.src = autoplayURL;
      popup.classList.add("active");

      // Request fullscreen after a small delay
      setTimeout(() => {
        if (frame.requestFullscreen) frame.requestFullscreen();
        else if (frame.webkitRequestFullscreen) frame.webkitRequestFullscreen();
        else if (frame.msRequestFullscreen) frame.msRequestFullscreen();
      }, 500);
    });
  });

  // Close popup
  closeBtn.addEventListener("click", () => {
    popup.classList.remove("active");
    frame.src = "";
    document.exitFullscreen?.();
  });

  popup.addEventListener("click", (e) => {
    if (e.target === popup) {
      popup.classList.remove("active");
      frame.src = "";
      document.exitFullscreen?.();
    }
  });
});
</script>
@endsection
