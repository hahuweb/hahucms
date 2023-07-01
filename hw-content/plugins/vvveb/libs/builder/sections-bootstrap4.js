/*
Copyright 2017 Ziadin Givan

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

https://github.com/givanz/Vvvebjs
*/
Vvveb.SectionsGroup['Bootstrap'] =
["bootstrap5/navbar",  "bootstrap5/hero", "bootstrap4/video-header", "bootstrap4/slider-header", "bootstrap4/about-team", "bootstrap5/cta", "bootstrap5/features", "bootstrap5/content1", "bootstrap5/pricing", "bootstrap5/testimonial", "bootstrap5/contact", "bootstrap5/footer"];


Vvveb.Sections.add("bootstrap5/navbar", {
    name: "Header",
	dragHtml: '<img src="' + Vvveb.baseUrl + 'icons/product.png">',    
  image: "img/navbar.png",
  html: `
  <nav class="bg-white navbar navbar-expand-lg navbar-light pg-lib-item border-bottom"> 
    <div class="container"> <a class="navbar-brand" href="#">Logo</a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown-2" aria-controls="navbarNavDropdown-2" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> 
        </button>                             
        <div class="collapse navbar-collapse " id="navbarNavDropdown-2"> 
            <ul class="ms-auto navbar-nav"> 
                <li class="nav-item"> <a class="active nav-link" aria-current="page" href="#">Home</a> 
                </li>                                     
                <li class="nav-item"> <a class="nav-link" href="#">About</a> 
                </li>                                     
                <li class="nav-item"> <a class="nav-link" href="#">Features</a> 
                </li>                                     
                <li class="nav-item"> <a class="nav-link" href="#">Services</a> 
                </li>                                     
                <li class="nav-item"> <a class="nav-link" href="#">Contact</a> 
                </li>                                     
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">                                     Dropdown link </a> 
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> 
                    </div>                                         
                </li>                                     
            </ul>                                 
        </div>                             
    </div>                         
</nav>
`,
});    

Vvveb.Sections.add("bootstrap5/hero", {
    name: "Hero",
    image: "img/hero.png",
	dragHtml: '<img src="' + Vvveb.baseUrl + 'icons/product.png">',    
    html: `
    <section class="bg-light pb-5 pg-lib-item pt-5 text-secondary">
    <div class="container pb-5 pt-5">
      <div class="align-items-center gx-lg-5 gy-5 row">
        <div class="col-lg-6 order-lg-last">
          <img src="https://images.unsplash.com/photo-1629053800620-4584e836b3bc?ixid=MnwyMDkyMnwwfDF8c2VhcmNofDI1fHxncmF5JTIwYWJzdHJhY3R8ZW58MHx8fHwxNjM4MTI1NDcy&amp;ixlib=rb-1.2.1q=85&amp;fm=jpg&amp;crop=faces&amp;cs=srgb&amp;w=600&amp;h=600&amp;fit=crop" class="img-fluid w-100">
        </div>
        <div class="col-lg-6">
          <p class="h6 text-primary text-uppercase">The Latest</p>
          <h1 class="display-3 fw-bold mb-3 text-dark">The Natural Experience</h1>
          <p class="lead mb-4 pe-sm-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet.</p><a href="#" class="btn btn-primary pb-2 pe-4 ps-4 pt-2">Get It Now</a>
        </div>
      </div>
    </div>
  </section>   
`,
});    

Vvveb.Sections.add("bootstrap4/slider-header", {
    name: "Image Slider Header",
	dragHtml: '<img src="' + Vvveb.baseUrl + 'icons/product.png">',        
    image: "https://assets.startbootstrap.com/img/screenshots/snippets/full-slider.jpg",
    html:`
<section class="slider" data-name="slider">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">First Slide</h2>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Second Slide</h2>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Third Slide</h2>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
    
<style>
.carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>  
</section>
`,
});


Vvveb.Sections.add("bootstrap4/video-header", {
    name: "Video Header",
	dragHtml: '<img src="' + Vvveb.baseUrl + 'icons/image.svg">',        
    image: "https://assets.startbootstrap.com/img/screenshots/snippets/video-header.jpg",
    html:`
<section class="video" data-name="header-video">
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">Video Header</h1>
        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
      </div>
    </div>
  </div>


<div class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <p>The HTML5 video element uses an mp4 video as a source. Change the source video to add in your own background! The header text is vertically centered using flex utilities that are build into Bootstrap 4.</p>
      </div>
    </div>
  </div>
</div>
<style>
header.video {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

header.video video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header.video .container {
  position: relative;
  z-index: 2;
}

header.video .overlay {
  /*position: absolute;*/
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
  }
  header video {
    display: none;
  }
}
</style>
</section>
`,
});



Vvveb.Sections.add("bootstrap4/about-team", {
    name: "About and Team Section",
	dragHtml: '<img src="' + Vvveb.baseUrl + 'icons/image.svg">',        
    image: "https://assets.startbootstrap.com/img/screenshots/snippets/about-team.jpg",
    html:`
<section data-name="about-team">    
<header class="bg-secondary text-center py-5 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white">Meet the Team</h1>
  </div>
</header>

<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 4 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/ZI6p3i9SbVU/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->

</div>
</section>
`,
});



Vvveb.Sections.add("bootstrap5/cta", {
  name: "Call To Action",
	dragHtml: '<img src="' + Vvveb.baseUrl + 'icons/image.svg">',        
  image: "img/cta.png",
  html:`
    <section class="bg-light pb-5 pg-lib-item pt-5 text-center"> 
    <div class="container  pb-5 pt-5"> 
        <div class="align-items-center row"> 
            <div class="col-lg-7 ms-auto me-auto"> 
                <h2 class="fw-bold mb-4">Our ability to feel, act and communicate is indistinguishable from magic.</h2>
                <a href="#" class="btn btn-primary text-uppercase">Read More</a> 
            </div>                                 
        </div>                             
    </div>                         
</section>
`,
});



Vvveb.Sections.add("bootstrap5/features", {
  name: "Features & Services",
	dragHtml: '<img src="' + Vvveb.baseUrl + 'icons/image.svg">',        
  image: "img/feature.png",
  html:`
  <section class="bg-light pb-5 pg-lib-item pt-5"> 
  <div class="container pb-5 pt-5"> 
      <div class="align-items-center mb-3 row"> 
          <div class="col-lg-7"> 
              <h2 class="h6 mb-1">Services</h2> 
              <h3 class="fw-bold h2 mb-1">We can do useful things for our clients</h3>
              <p class="fw-light">                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor. </p> 
          </div>                                 
          <div class="col-lg-auto ms-auto"> 
              <a href="#" class="btn btn-secondary">Read More</a> 
          </div>                                 
      </div>                             
      <div class="row"> 
          <div class="col-sm-6 col-xl-3 pb-3 pt-3"> 
              <div class="btn-secondary pb-5 ps-4 pe-4 pt-5 shadow"> 
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40" fill="currentColor" class="mb-3"> 
                      <path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm13.464 12.536L20 12l-3.536-3.536L15.05 9.88 17.172 12l-2.122 2.121 1.414 1.415zM6.828 12L8.95 9.879 7.536 8.464 4 12l3.536 3.536L8.95 14.12 6.828 12zm4.416 5l3.64-10h-2.128l-3.64 10h2.128z"></path>                                             
                  </svg>                                         
                  <h4 class="fw-bold h5">Development</h4> 
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor.</p>
                  <a href="#" class="text-white-50">Learn More</a> 
              </div>
          </div>                                 
          <div class="col-sm-6 col-xl-3 pb-3 pt-3"> 
              <div class="btn-secondary mb-sm-n5 mt-sm-5 pb-5 ps-4 pe-4 pt-5 shadow"> 
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40" fill="currentColor" class="mb-3"> 
                      <path d="M5.636 12.707l1.828 1.829L8.88 13.12 7.05 11.293l1.414-1.414 1.829 1.828 1.414-1.414L9.88 8.464l1.414-1.414L13.12 8.88l1.415-1.415-1.829-1.828 2.829-2.828a1 1 0 0 1 1.414 0l4.242 4.242a1 1 0 0 1 0 1.414L8.464 21.192a1 1 0 0 1-1.414 0L2.808 16.95a1 1 0 0 1 0-1.414l2.828-2.829zm8.485 5.656l4.243-4.242L21 16.757V21h-4.242l-2.637-2.637zM5.636 9.878L2.807 7.05a1 1 0 0 1 0-1.415l2.829-2.828a1 1 0 0 1 1.414 0L9.88 5.635 5.636 9.878z"></path>                                             
                  </svg>                                         
                  <h4 class="fw-bold h5">Product Design</h4> 
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor.</p>
                  <a href="#" class="text-white-50">Learn More</a> 
              </div>                                     
          </div>                                 
          <div class="col-sm-6 col-xl-3 pb-3 pt-3"> 
              <div class="btn-secondary pb-5 ps-4 pe-4 pt-5 shadow"> 
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40" fill="currentColor" class="mb-3"> 
                      <path d="M15 21h-2v-3h-2v3H9v-2H7v2H4a1 1 0 0 1-1-1v-3h2v-2H3v-2h3v-2H3V9h2V7H3V4a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v9h9a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1h-3v-2h-2v2z"></path>                                             
                  </svg>                                         
                  <h4 class="fw-bold h5">UI/UX Research</h4> 
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor.</p>
                  <a href="#" class="text-white-50">Learn More</a> 
              </div>                                     
          </div>                                 
          <div class="col-sm-6 col-xl-3 pb-3 pt-3"> 
              <div class="btn-secondary mt-sm-5 pb-5 ps-4 pe-4 pt-5 shadow"> 
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40" fill="currentColor" class="mb-3"> 
                      <path d="M8 5h3v9H8v3H6v-3H3V5h3V2h2v3zm10 5h3v9h-3v3h-2v-3h-3v-9h3V7h2v3z"></path>                                             
                  </svg>                                         
                  <h4 class="fw-bold h5">Digital Marketing</h4> 
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor.</p>
                  <a href="#" class="text-white-50">Learn More</a> 
              </div>                                     
          </div>                                 
      </div>                             
  </div>                         
</section>   
`,
});

Vvveb.Sections.add("bootstrap5/content1", {
  name: "Content",
	dragHtml: '<img src="' + Vvveb.baseUrl + 'icons/image.svg">',        
  image: "img/content1.png",
  html:`
  <section class="bg-light pb-5 pg-lib-item pt-5"> 
  <div class="container pb-4 pt-4"> 
    <div class="align-items-center row"> 
      <div class="col-lg-6 ms-auto order-lg-2 py-3 text-center"> 
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 876.272 661.473" class="img-fluid">
          <path d="M504.97 32.194c7.516 15.995-8.41 20.526-26.655 29.099S446.417 79.236 438.9 63.24s-13.615-47.742 12.195-59.87c26.7-12.547 46.358 12.829 53.874 28.824z" fill="#2f2e41"></path>
          <circle cx="467.746" cy="39.089" r="24.561" fill="#ffb8b8"></circle>
          <path d="M589.426 148.012c-.85-1.11-1.7-2.2-2.56-3.26q-1.665-2.07-3.35-4.01c-12.73-14.69-26.27-23.94-41.18-24.93h-.02l-.22-.02-29.71 28.96-10.1 9.84.22.54 5.45 13.57h95.49a234.834 234.834 0 00-14.02-20.69zM441.038 48.977l8.792-4.131-1.225-12.683 5.88 10.496 4.201-1.975-.714-7.398 3.43 6.122 31.224-14.672a26 26 0 00-34.589-12.474l-4.525 2.126a26 26 0 00-12.474 34.59z" fill="#2f2e41"></path>
          <path d="M644.526 494.8H131.688a16.519 16.519 0 01-16.5-16.5V170.146a12.102 12.102 0 0112.087-12.088H648.73a12.311 12.311 0 0112.297 12.297V478.3a16.519 16.519 0 01-16.5 16.5z" fill="#f2f2f2"></path>
          <path d="M147.688 478.3h480.838a16 16 0 0016-16V200.752a16 16 0 00-16-16H147.688a16 16 0 00-16 16V462.3a16 16 0 0016 16z" fill="#fff"></path>
          <path d="M660.796 169.203h-545.84v-8.4a16.574 16.574 0 0116.56-16.55h512.72a16.574 16.574 0 0116.56 16.55z" fill="#007bff"></path>
          <circle cx="145.051" cy="156.752" r="4.283" fill="#fff"></circle>
          <circle cx="161.31" cy="156.752" r="4.283" fill="#fff"></circle>
          <circle cx="177.569" cy="156.752" r="4.283" fill="#fff"></circle>
          <path d="M403.11 421.58h-43a9.51 9.51 0 01-9.5-9.5v-43a9.51 9.51 0 019.5-9.5h43a9.51 9.51 0 019.5 9.5v43a9.51 9.51 0 01-9.5 9.5zm-43-60a7.508 7.508 0 00-7.5 7.5v43a7.508 7.508 0 007.5 7.5h43a7.508 7.508 0 007.5-7.5v-43a7.508 7.508 0 00-7.5-7.5z" fill="#ccc"></path>
          <path d="M394.61 409.58h-26a3.003 3.003 0 01-3-3v-32a3.003 3.003 0 013-3h18.84a3.007 3.007 0 011.879.66l7.16 5.755a2.984 2.984 0 011.121 2.338v26.246a3.003 3.003 0 01-3 3zm-26-36a1.001 1.001 0 00-1 1v32a1.001 1.001 0 001 1h26a1.001 1.001 0 001-1v-26.247a.995.995 0 00-.373-.78l-7.161-5.754a1.002 1.002 0 00-.626-.22z" fill="#ccc"></path>
          <path d="M389.61 385.58h-16a1 1 0 010-2h16a1 1 0 010 2zM389.61 391.58h-16a1 1 0 010-2h16a1 1 0 010 2zM389.61 397.58h-16a1 1 0 010-2h16a1 1 0 010 2zM505.11 421.58h-43a9.51 9.51 0 01-9.5-9.5v-43a9.51 9.51 0 019.5-9.5h43a9.51 9.51 0 019.5 9.5v43a9.51 9.51 0 01-9.5 9.5zm-43-60a7.508 7.508 0 00-7.5 7.5v43a7.508 7.508 0 007.5 7.5h43a7.508 7.508 0 007.5-7.5v-43a7.508 7.508 0 00-7.5-7.5z" fill="#ccc"></path>
          <path d="M497.61 401.58h-28a3.003 3.003 0 01-3-3v-16a3.003 3.003 0 013-3h28a3.003 3.003 0 013 3v16a3.003 3.003 0 01-3 3zm-28-20a1.001 1.001 0 00-1 1v16a1.001 1.001 0 001 1h28a1.001 1.001 0 001-1v-16a1.001 1.001 0 00-1-1z" fill="#ccc"></path>
          <path d="M483.61 393.217a3.003 3.003 0 01-1.59-.452l-14.94-9.338a1 1 0 011.06-1.696l14.94 9.337a1.006 1.006 0 001.06 0l14.94-9.337a1 1 0 011.06 1.696l-14.939 9.338a3.004 3.004 0 01-1.59.452zM301.11 421.58h-43a9.51 9.51 0 01-9.5-9.5v-43a9.51 9.51 0 019.5-9.5h43a9.51 9.51 0 019.5 9.5v43a9.51 9.51 0 01-9.5 9.5zm-43-60a7.508 7.508 0 00-7.5 7.5v43a7.508 7.508 0 007.5 7.5h43a7.508 7.508 0 007.5-7.5v-43a7.508 7.508 0 00-7.5-7.5z" fill="#ccc"></path>
          <path d="M293.61 401.58h-28a3.003 3.003 0 01-3-3v-16a3.003 3.003 0 013-3h28a3.003 3.003 0 013 3v16a3.003 3.003 0 01-3 3zm-28-20a1.001 1.001 0 00-1 1v16a1.001 1.001 0 001 1h28a1.001 1.001 0 001-1v-16a1.001 1.001 0 00-1-1z" fill="#ccc"></path>
          <path d="M289.172 401.58h-20.124a2 2 0 01-1.732-3l6.062-10.5a2 2 0 013.464 0l3.915 6.78 2.268-3.928a2 2 0 013.465 0l4.415 7.647a2 2 0 01-1.733 3zm0-2l-4.415-7.648-3.134 5.428a1 1 0 01-.866.5 1 1 0 01-.866-.5l-4.78-8.28-6.063 10.5z" fill="#ccc"></path>
          <circle cx="290.61" cy="385.579" r="2" fill="#ccc"></circle>
          <path fill="#ffb8b8" d="M768.825 648.15l-12.26-.001-5.832-47.288 18.094.001-.002 47.288z"></path>
          <path d="M771.951 660.034l-39.53-.002v-.5a15.386 15.386 0 0115.386-15.386h.001l24.144.001z" fill="#2f2e41"></path>
          <path fill="#ffb8b8" d="M818.825 648.15l-12.26-.001-5.832-47.288 18.094.001-.002 47.288z"></path>
          <path d="M821.951 660.034l-39.53-.002v-.5a15.386 15.386 0 0115.386-15.386h.001l24.144.001zM815.15 627.65l-11.355-3.454a4.493 4.493 0 01-3.166-3.833l-10.585-100.326a.48.48 0 00-.479-.447.47.47 0 00-.51.409l-17.731 97.2a4.5 4.5 0 01-5.335 3.599l-14.512-2.99a4.516 4.516 0 01-3.581-4.711l10.785-159.313 73.138-7.891-10.868 177.726a4.505 4.505 0 01-4.484 4.228 4.526 4.526 0 01-1.317-.197z" fill="#2f2e41"></path>
          <circle cx="815.08" cy="290.487" r="24.561" fill="#ffb8b8"></circle>
          <path d="M758.568 454.72l15.859-99.851a37.857 37.857 0 0148.005-30.4 37.743 37.743 0 0126.601 43.262l-16.591 89.172z" fill="#007bff"></path>
          <path d="M821.86 472.586a10.056 10.056 0 001.748-15.32l16.396-31.752-18.465 1.97-12.74 29.85a10.11 10.11 0 0013.062 15.252z" fill="#ffb8b8"></path>
          <path d="M825.372 451.665a4.506 4.506 0 01-2.427-1.15l-6.273-5.797a4.515 4.515 0 01-1.092-5.055l12.538-29.718-1.779-58.72a14.497 14.497 0 1128.727 3.92l3.041 36.911a46.373 46.373 0 01-8.938 31.397l-19.552 26.432a4.505 4.505 0 01-3.195 1.804 4.455 4.455 0 01-1.05-.024z" fill="#007bff"></path>
          <path d="M673.64 277.105a10.056 10.056 0 0013.427 7.582l22.846 27.478 5.385-17.772-22.52-23.369a10.11 10.11 0 00-19.137 6.081z" fill="#ffb8b8"></path>
          <path d="M691.537 288.495a4.506 4.506 0 012.006-1.786l7.783-3.516a4.515 4.515 0 015.08.965l22.478 23.132 54.767 21.256a14.497 14.497 0 11-14.81 24.926l-35.176-11.591a46.374 46.374 0 01-25.427-20.472l-16.718-28.31a4.505 4.505 0 01-.415-3.646 4.454 4.454 0 01.432-.958z" fill="#007bff"></path>
          <path opacity=".1" d="M835.002 375.652l-1 32-18.422 32.011 15.382-35.673 4.04-28.338z"></path>
          <path d="M812.266 295.103a6.423 6.423 0 01-7.03-4.703 9.764 9.764 0 00-6.951-7.273c-4.505-1.03-10.012 1.091-13.313-2.322a6.637 6.637 0 01-1.576-5.843c.608-3.317 2.981-5.823 5.563-7.827a34.062 34.062 0 0118.866-7.051 67.677 67.677 0 0110.621.528 47.01 47.01 0 0110.864 1.986 25.576 25.576 0 0116.002 18.68 29.528 29.528 0 01-6.057 24.13 31.702 31.702 0 01-12.161 9.26 4.744 4.744 0 01-3.606.182c-2.958-1.176-2.474-4.84-1.126-7.283 1.443-2.614 3.663-5.146 2.503-8.328a6.302 6.302 0 00-3.127-3.366c-2.94-1.5-6.228-1.145-9.389-.78z" fill="#2f2e41"></path>
          <path d="M665.433 308.973h-304a16.519 16.519 0 01-16.5-16.5v-65a16.519 16.519 0 0116.5-16.5h304a16.519 16.519 0 0116.5 16.5v65a16.519 16.519 0 01-16.5 16.5z" fill="#fff"></path>
          <path d="M665.433 309.473h-304a17.02 17.02 0 01-17-17v-65a17.02 17.02 0 0117-17h304a17.02 17.02 0 0117 17v65a17.02 17.02 0 01-17 17zm-304-97a15.017 15.017 0 00-15 15v65a15.017 15.017 0 0015 15h304a15.017 15.017 0 0015-15v-65a15.017 15.017 0 00-15-15z" fill="#3f3d56"></path>
          <path d="M628.433 292.973h-230a16.519 16.519 0 01-16.5-16.5v-34a16.519 16.519 0 0116.5-16.5h230a16.519 16.519 0 0116.5 16.5v34a16.519 16.519 0 01-16.5 16.5z" fill="#f2f2f2"></path>
          <circle cx="447.928" cy="254.915" r="19.732" fill="#ff6584"></circle>
          <path d="M614.14 290.981l-27.852-23.36-27.372-22.956a4 4 0 00-5.153.01l-27.283 23.062-6.664 5.633-10.048-8.427-30.538-25.61a4 4 0 00-5.152.009L443.64 265.07l-30.917 26.134a1 1 0 00.648 1.764l63.386-.123 20.064-.038-.196.166 59.808-.115 57.066-.11a1 1 0 00.641-1.767z" fill="#3f3d56"></path>
          <path d="M875.272 661.473h-192a1 1 0 010-2h192a1 1 0 010 2z" fill="#ccc"></path>
          <path d="M604.056 131.912a11.22 11.22 0 00-7.25-5.1 10.301 10.301 0 00-1.66-.21l-76.19-68.12a9.015 9.015 0 00-5.63-2.69 7.67 7.67 0 00-1.27-.04 9.055 9.055 0 00-5.96 15.48l29.17 25.43 47.9 41.75a11.916 11.916 0 00.35 2.33 11.266 11.266 0 009.67 8.37 11.092 11.092 0 006.05-1 11.407 11.407 0 003.88-2.97c.11-.13.21-.25.31-.39a11.293 11.293 0 00.63-12.84zM473.736 197.562l-.71-28.86-.6-23.95-.41-16.76-.81-32.67a9.046 9.046 0 00-15.71-5.25 6.923 6.923 0 00-.75.96 8.936 8.936 0 00-1.56 6.05l1.78 47.67.89 23.95 1.14 30.55a12.047 12.047 0 00-.89 1.41 11.248 11.248 0 00-.71 8.84 11.311 11.311 0 0015.56 6.63 11.3 11.3 0 002.78-18.57z" fill="#ffb8b8"></path>
          <path d="M542.336 115.812l-7.07-19.15-11.44-31.02a16.006 16.006 0 00-9.95-9.68c-.18-.06-.37-.12-.55-.17a15.984 15.984 0 00-13.24 1.82l-38.53 24.44a16.093 16.093 0 00-5.27 21.75 276.323 276.323 0 0015.73 24.19c4.49 6.11 12.85 6.76 14.3 16.76h28.41l28.76-25.82z" fill="#ccc"></path>
          <circle cx="101.165" cy="326.682" r="23.172" fill="#a0616a"></circle>
          <path d="M158.051 310.732q.343.273.664.578a10.38 10.38 0 01-.417 15.484 9.722 9.722 0 01-.814.613l1.569 52.945a8.061 8.061 0 01-5.545 7.867l-.096.02-42.989 4.579a8.899 8.899 0 11-1.722-17.713l30.644-2.7 5.3-45.85a9.876 9.876 0 01-.971-.99 10.38 10.38 0 0114.377-14.833zM139.328 649.174h11.567l5.502-44.613h-17.071l.002 44.613z" fill="#a0616a"></path>
          <path d="M136.378 645.398l22.778-.001h.001a14.516 14.516 0 0114.516 14.516v.471l-37.294.002z" fill="#2f2e41"></path>
          <path fill="#a0616a" d="M24.366 633.182l9.938 5.917 27.553-35.517-14.668-8.733-22.823 38.333z"></path>
          <path d="M23.763 628.428l19.572 11.653a14.516 14.516 0 015.046 19.9l-.241.405-32.045-19.08zM153.624 633.417h-12.952a4.238 4.238 0 01-4.221-3.797l-13.057-122.738a1.415 1.415 0 00-2.698-.433l-23.555 52.16-41.704 68.002a4.266 4.266 0 01-5.328 1.666l-16.66-7.33a4.247 4.247 0 01-1.936-6.065l38.338-64.192 11.757-54.085C77.91 473.15 93.763 438.28 93.924 437.93l.079-.17 43.667-17.068.219.268c17.221 56.514 27.715 117.332 19.967 208.568a4.274 4.274 0 01-4.232 3.89z" fill="#2f2e41"></path>
          <path d="M92.243 443.474l-.203-.428c-.097-.204-9.807-20.684-17.292-42.571a32.285 32.285 0 012.238-25.874A32.637 32.637 0 0197.8 358.597a32.677 32.677 0 0137.928 19.57c5.937 14.847 4.045 30.694 2.264 43.157l-.035.25-.227.108z" fill="#3f3d56"></path>
          <path d="M129.26 313.593H92.466v-16.038c8.076-3.209 15.978-5.937 20.755 0a16.038 16.038 0 0116.039 16.038z" fill="#2f2e41"></path>
          <path d="M90.429 294.724c-21.996 0-28.153 27.572-28.153 43.126 0 8.674 3.923 11.777 10.087 12.827l2.178-11.611 5.099 12.11c1.731.01 3.55-.024 5.436-.06l1.73-3.56 3.854 3.497c15.441.023 27.921 2.273 27.921-13.203 0-15.554-5.4-43.126-28.152-43.126z" fill="#2f2e41"></path>
          <path d="M193 661.473H1a1 1 0 110-2h192a1 1 0 010 2z" fill="#ccc"></path>
          <path d="M196.61 332.473h-43a9.51 9.51 0 01-9.5-9.5v-43a9.51 9.51 0 019.5-9.5h43a9.51 9.51 0 019.5 9.5v43a9.51 9.51 0 01-9.5 9.5z" fill="#fff"></path>
          <path d="M196.61 332.473h-43a9.51 9.51 0 01-9.5-9.5v-43a9.51 9.51 0 019.5-9.5h43a9.51 9.51 0 019.5 9.5v43a9.51 9.51 0 01-9.5 9.5zm-43-60a7.508 7.508 0 00-7.5 7.5v43a7.508 7.508 0 007.5 7.5h43a7.508 7.508 0 007.5-7.5v-43a7.508 7.508 0 00-7.5-7.5z" fill="#3f3d56"></path>
          <path d="M189.11 314.973h-28a3.003 3.003 0 01-3-3v-21a3.003 3.003 0 013-3h7.883a2.981 2.981 0 012.555 1.427l2.198 3.573h15.364a3.003 3.003 0 013 3v16a3.003 3.003 0 01-3 3z" fill="#007bff"></path>
          <path d="M188.2 325.582q.21.384.387.79a10.38 10.38 0 01-6.393 14.109 9.72 9.72 0 01-.988.25l-19.1 49.404a8.061 8.061 0 01-8.162 5.099l-.096-.018-41.397-12.462a8.899 8.899 0 115.286-16.993l29.29 9.403 22.677-40.201a9.876 9.876 0 01-.511-1.29 10.38 10.38 0 0119.006-8.091z" fill="#a0616a"></path>
        </svg>                   
      </div>                 
      <div class="col-lg-5 order-lg-1 py-3"> 
        <h2 class="h6 mb-1 text-primary">About Us</h2> 
        <h3 class="fw-bold h2 mb-1">We Work Together To Play, Have Fun, Design And Create</h3>
        <p class="fw-light mb-4">                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae congue tortor. </p> 
        <a href="#" class="btn btn-primary">Read More</a> 
      </div>                 
    </div>               
  </div>             
</section> 
`,
});


Vvveb.Sections.add("bootstrap5/pricing", {
  name: "Pricing Tables",
	dragHtml: '<img src="' + Vvveb.baseUrl + 'icons/image.svg">',        
  image: "img/pricing.png",
  html:`
  <section class="bg-light pb-5 pg-lib-item pt-5"> 
  <div class="container pb-4 pt-4"> 
      <div class="text-center"> 
          <h2 class="h6 mb-1 text-primary text-uppercase">Pricing</h2> 
          <h3 class="fw-bold h2 mb-3">Be a Part of Something Special</h3>
          <p class="fw-light mb-4">                                Choose the plan that’s right for you. </p> 
      </div>                             
      <div class="align-items-center justify-content-center row"> 
          <div class="col-lg-4 col-md-6 py-3"> 
              <div class="text-secondary"> 
                  <div class="bg-white mb-3 p-4 pricing_items__price_info rounded shadow"> 
                      <div class="align-items-center d-flex fw-light h5"> 
                          <span class="align-self-start currency">$</span> 
                          <span class="display-4 fw-bold text-dark">10</span> 
                          <span class="align-self-end term">/mo</span> 
                      </div>                                             
                      <h4 class="fw-bold h2 mb-0 text-dark">Starter</h4> 
                  </div>                                         
                  <div class="bg-white p-4 rounded shadow"> 
                      <ul class="list-unstyled mb-4"> 
                          <li class="pb-2 pt-2">20 Pages</li>                                                 
                          <li class="pb-2 pt-2">10 GB Storage</li>                                                 
                          <li class="pb-2 pt-2">500 GB Bandwidth</li>                                                 
                          <li class="pb-2 pt-2">Custom Domain</li>                                                 
                          <li class="pb-2 pt-2">24/7 Support</li>                                                 
                      </ul>                                             
                      <a href="#" class="btn d-block w-100 btn-outline-dark rounded-pill">Sign Up</a> 
                  </div>                                         
              </div>                                     
          </div>                                 
          <div class="col-lg-4 col-md-6 py-3"> 
              <div class="text-secondary"> 
                  <div class="bg-white mb-3 p-4 pricing_items__price_info rounded shadow"> 
                      <div class="align-items-center d-flex fw-light h5"> 
                          <span class="align-self-start currency">$</span> 
                          <span class="display-4 fw-bold text-dark">24</span> 
                          <span class="align-self-end term">/mo</span> 
                      </div>                                             
                      <h4 class="fw-bold h2 mb-0 text-dark">Professional</h4> 
                  </div>                                         
                  <div class="bg-white p-4 rounded shadow"> 
                      <ul class="list-unstyled mb-4"> 
                          <li class="pb-2 pt-2">100 Pages</li>                                                 
                          <li class="pb-2 pt-2">100 GB Storage</li>                                                 
                          <li class="pb-2 pt-2">2 TB Bandwidth</li>                                                 
                          <li class="pb-2 pt-2">Custom Domain</li>                                                 
                          <li class="pb-2 pt-2">24/7 Support</li>                                                 
                      </ul>                                             
                      <a href="#" class="btn d-block w-100 btn-outline-dark rounded-pill">Sign Up</a> 
                  </div>                                         
              </div>                                     
          </div>                                 
          <div class="col-lg-4 col-md-6 py-3"> 
              <div class="text-secondary"> 
                  <div class="bg-white mb-3 p-4 pricing_items__price_info rounded shadow"> 
                      <div class="align-items-center d-flex fw-light h5"> 
                          <span class="align-self-start currency">$</span> 
                          <span class="display-4 fw-bold text-dark">40</span> 
                          <span class="align-self-end term">/mo</span> 
                      </div>                                             
                      <h4 class="fw-bold h2 mb-0 text-dark">Epic</h4> 
                  </div>                                         
                  <div class="bg-white p-4 rounded shadow"> 
                      <ul class="list-unstyled mb-4"> 
                          <li class="pb-2 pt-2">Unlimited Pages</li>
                          <li class="pb-2 pt-2">Unlimited Storage</li>
                          <li class="pb-2 pt-2">Unlimited Bandwidth</li>
                          <li class="pb-2 pt-2">Custom Domain</li>
                          <li class="pb-2 pt-2">24/7 Support</li>                                                 
                      </ul>                                             
                      <a href="#" class="btn d-block w-100 btn-outline-dark rounded-pill">Sign Up</a> 
                  </div>                                         
              </div>                                     
          </div>                                 
      </div>                             
  </div>                         
</section>
`,
});

Vvveb.Sections.add("bootstrap5/testimonial", {
  name: "Testimonial",
  dragHtml: '<img src="' + Vvveb.baseUrl + 'icons/image.svg">',        
  image: "img/testimonial.png",
  html: `       
  
  <section class="bg-light pb-5 pg-lib-item pt-5 text-center"> 
  <div class="container pb-3 pt-3"> 
      <div class="row"> 
          <div class="col-lg-8 ms-auto me-auto"> 
              <div id="carousel2" class="carousel slide" data-bs-ride="carousel"> 
                  <div class="carousel-inner"> 
                      <div class="carousel-item"> 
                          <svg viewBox="0 0 24 24" fill="currentColor" height="80" width="80" class="mb-3 text-primary"> 
                              <path d="M23 1V5.06504C21.9136 5.67931 21.0807 6.43812 20.5012 7.34146C19.958 8.24481 19.5416 9.20235 19.2519 10.2141C18.9621 11.2258 18.8173 12.346 18.8173 13.5745H23V22.4634H14.0914V16.935C14.0914 13.6107 14.3992 11.0813 15.0148 9.34688C15.6667 7.61246 16.6444 6.02258 17.9481 4.57723C19.2519 3.09575 20.9358 1.90334 23 1ZM9.90864 1V5.06504C8.82222 5.67931 7.9893 6.43812 7.40988 7.34146C6.83045 8.24481 6.39588 9.20235 6.10617 10.2141C5.81646 11.2258 5.67161 12.346 5.67161 13.5745H9.90864V22.4634H1V16.935C1 13.6107 1.30782 11.0813 1.92346 9.34688C2.57531 7.61246 3.55309 6.02258 4.85679 4.57723C6.16049 3.09575 7.84444 1.90334 9.90864 1Z"></path> 
                          </svg>                                                 
                          <h2 class="mb-3">It's so easy to create a professional website at a fraction of the cost.</h2> 
                          <div class=""> 
                              <span>I.P Freely - </span> 
                              <span class="text-primary">ACME Gizmo LLC</span> 
                          </div>                                                 
                      </div>                                             
                      <div class="carousel-item"> 
                          <svg viewBox="0 0 24 24" fill="currentColor" height="80" width="80" class="mb-3 text-primary"> 
                              <path d="M23 1V5.06504C21.9136 5.67931 21.0807 6.43812 20.5012 7.34146C19.958 8.24481 19.5416 9.20235 19.2519 10.2141C18.9621 11.2258 18.8173 12.346 18.8173 13.5745H23V22.4634H14.0914V16.935C14.0914 13.6107 14.3992 11.0813 15.0148 9.34688C15.6667 7.61246 16.6444 6.02258 17.9481 4.57723C19.2519 3.09575 20.9358 1.90334 23 1ZM9.90864 1V5.06504C8.82222 5.67931 7.9893 6.43812 7.40988 7.34146C6.83045 8.24481 6.39588 9.20235 6.10617 10.2141C5.81646 11.2258 5.67161 12.346 5.67161 13.5745H9.90864V22.4634H1V16.935C1 13.6107 1.30782 11.0813 1.92346 9.34688C2.57531 7.61246 3.55309 6.02258 4.85679 4.57723C6.16049 3.09575 7.84444 1.90334 9.90864 1Z"></path> 
                          </svg>                                                 
                          <h2 class="mb-3">Turn hundreds of framework classes into powerful visual controls. Use the complete library of ready-to-use components and work with dynamic components.</h2> 
                          <div class=""> 
                              <span>I.P Freely - </span> 
                              <span class="text-primary">ACME Gizmo LLC</span> 
                          </div>                                                 
                      </div>                                             
                      <div class="carousel-item active"> 
                          <svg viewBox="0 0 24 24" fill="currentColor" height="80" width="80" class="mb-3 text-primary"> 
                              <path d="M23 1V5.06504C21.9136 5.67931 21.0807 6.43812 20.5012 7.34146C19.958 8.24481 19.5416 9.20235 19.2519 10.2141C18.9621 11.2258 18.8173 12.346 18.8173 13.5745H23V22.4634H14.0914V16.935C14.0914 13.6107 14.3992 11.0813 15.0148 9.34688C15.6667 7.61246 16.6444 6.02258 17.9481 4.57723C19.2519 3.09575 20.9358 1.90334 23 1ZM9.90864 1V5.06504C8.82222 5.67931 7.9893 6.43812 7.40988 7.34146C6.83045 8.24481 6.39588 9.20235 6.10617 10.2141C5.81646 11.2258 5.67161 12.346 5.67161 13.5745H9.90864V22.4634H1V16.935C1 13.6107 1.30782 11.0813 1.92346 9.34688C2.57531 7.61246 3.55309 6.02258 4.85679 4.57723C6.16049 3.09575 7.84444 1.90334 9.90864 1Z"></path> 
                          </svg>                                                 
                          <h2 class="mb-3">Quickly build the layout of your webpage with powerful visual tools for adding, editing, moving, cloning and deleting HTML elements. Insert multiple elements with repeater and modify the layout of all selected elements with one move.</h2> 
                          <div class=""> 
                              <span>I.P Freely - </span> 
                              <span class="text-primary">ACME Gizmo LLC</span> 
                          </div>                                                 
                      </div>                                             
                  </div>                                         
                  <ol class="carousel-indicators mt-4 position-relative"> 
                      <li data-bs-target="#carousel2" data-bs-slide-to="0" class="bg-primary"></li>                                             
                      <li data-bs-target="#carousel2" data-bs-slide-to="1" class="bg-primary"></li>                                             
                      <li data-bs-target="#carousel2" data-bs-slide-to="2" class="bg-primary active" aria-current="true"></li>                                             
                  </ol>                                         
              </div>                                     
          </div>                                 
      </div>                             
  </div>                         
</section>   
`,
});

Vvveb.Sections.add("bootstrap5/contact", {
  name: "Contact",
  dragHtml: '<img src="' + Vvveb.baseUrl + 'icons/image.svg">',        
  image: "img/contact.png",
  html: `      
  <section class="bg-light pg-lib-item position-relative"> 
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8297426123663!2d103.84860465979251!3d1.2754852755195631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da191344c00001%3A0xa50ea69471dd99dd!2sPinegrow%20Pte.%20Ltd.!5e0!3m2!1sen!2snp!4v1598515282263!5m2!1sen!2snp" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="h-100 position-absolute start-0 top-0 w-100" title="Pinegrow location map" width="100%" height="550" frameborder="0"></iframe>
  <div class="d-lg-none invisible mb-5 pb-5 pt-5"></div>
  <div class="container pb-5 pt-5"> 
      <div class="row"> 
          <div class="col-lg-6 col-xl-5 offset-lg-6 offset-xl-7 py-3"> 
              <div class="bg-white p-4 p-lg-5 shadow position-relative"> 
                  <h2 class="fw-bold h4 mb-4 text-uppercase">Get In Touch</h2> 
                  <div class="mb-4 g-0 row">
                      <div class="col-auto">
                          <svg viewBox="0 0 24 24" fill="currentColor" height="24" width="24" class="me-3 text-primary"> 
                              <path d="M12 20.9l4.95-4.95a7 7 0 1 0-9.9 0L12 20.9zm0 2.828l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"></path>                                                     
                          </svg>                                                 
                      </div>
                      <div class="col">
                          <span class="text-secondary">9056 Fairground Ave.<br>     Dearborn, MI 48124<br>     United States of America</span> 
                      </div>
                  </div>
                  <div class="mb-4 g-0 row">
                      <div class="col-auto">
                          <svg viewBox="0 0 24 24" fill="currentColor" height="24" width="24" class="me-3 text-primary"> 
                              <path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 4.238l-7.928 7.1L4 7.216V19h16V7.238zM4.511 5l7.55 6.662L19.502 5H4.511z"></path>                                                     
                          </svg>                                                 
                      </div>
                      <div class="col"> 
                          <a href="mailto:info@company.com" class="text-secondary">info@company.com</a> 
                      </div>
                  </div>
                  <div class="mb-4 g-0 row">
                      <div class="col-auto">
                          <svg viewBox="0 0 24 24" fill="currentColor" height="24" width="24" class="me-3 text-primary"> 
                              <path d="M9.366 10.682a10.556 10.556 0 0 0 3.952 3.952l.884-1.238a1 1 0 0 1 1.294-.296 11.422 11.422 0 0 0 4.583 1.364 1 1 0 0 1 .921.997v4.462a1 1 0 0 1-.898.995c-.53.055-1.064.082-1.602.082C9.94 21 3 14.06 3 5.5c0-.538.027-1.072.082-1.602A1 1 0 0 1 4.077 3h4.462a1 1 0 0 1 .997.921A11.422 11.422 0 0 0 10.9 8.504a1 1 0 0 1-.296 1.294l-1.238.884zm-2.522-.657l1.9-1.357A13.41 13.41 0 0 1 7.647 5H5.01c-.006.166-.009.333-.009.5C5 12.956 11.044 19 18.5 19c.167 0 .334-.003.5-.01v-2.637a13.41 13.41 0 0 1-3.668-1.097l-1.357 1.9a12.442 12.442 0 0 1-1.588-.75l-.058-.033a12.556 12.556 0 0 1-4.702-4.702l-.033-.058a12.442 12.442 0 0 1-.75-1.588z"></path>                                                     
                          </svg>                                                 
                      </div>
                      <div class="col"> 
                          <a href="tel:+0 123-456-789" class="text-secondary">+0 123-456-789</a> 
                      </div>
                  </div>                                         
              </div>                                     
          </div>                                 
      </div>                             
  </div>                         
</section>
`,
});

Vvveb.Sections.add("bootstrap5/footer", {
  name: "Footer",
  dragHtml: '<img src="' + Vvveb.baseUrl + 'icons/image.svg">',        
  image: "img/footer.png",
  html: `       
  <footer class="bg-light pb-3 pg-lib-item pt-3 small text-secondary border-top">
  <div class="container">
      <div class="align-items-center row">
          <div class="col-md pb-2 pt-2">
              <p class="mb-0">© 2002 - 2020. All Rights Reserved - Company Name</p>
          </div>
          <div class="col-md-auto pb-2 pt-2">
              <div class="d-inline-flex flex-wrap"> 
                  <a href="#" class="p-1 text-secondary" aria-label="facebook"> <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"> 
                          <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"></path> 
                      </svg> </a> 
                  <a href="#" class="p-1 text-secondary" aria-label="twitter"> <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"> 
                          <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"></path> 
                      </svg> </a> 
                  <a href="#" class="p-1 text-secondary" aria-label="instagram"> <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"> 
                          <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"></path> 
                      </svg> </a> 
                  <a href="#" class="p-1 text-secondary" aria-label="linkedin"> <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"> 
                          <path d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z"></path> 
                      </svg> </a> 
                  <a href="#" class="p-1 text-secondary" aria-label="youtube"> <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"> 
                          <path d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022zM10 15.5l6-3.5-6-3.5v7z"></path> 
                      </svg> </a> 
              </div>
          </div>
      </div>
  </div>
</footer>
`,
});