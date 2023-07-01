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

//Snippets from https://bootsnipp.com/license

Vvveb.BlocksGroup['Bootstrap'] =
    ["bootstrap5/navbar", "bootstrap5/hero", "bootstrap5/cta", "bootstrap5/features", "bootstrap5/content1", "bootstrap5/counter", "bootstrap5/pricing", "bootstrap5/testimonial", "bootstrap5/contact", "bootstrap5/partners", "bootstrap5/products", "bootstrap5/footer"];


    Vvveb.Blocks.add("bootstrap5/navbar", {
    name: "Header",
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
Vvveb.Blocks.add("bootstrap5/hero", {
    name: "Hero",
    image: "img/hero.png",
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

Vvveb.Blocks.add("bootstrap5/cta", {
    name: "Call To Action",
    image: "img/cta.png",
    html: `         
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

Vvveb.Blocks.add("bootstrap5/features", {
    name: "Features & Services",
    image: "img/feature.png",
    html: `         
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

Vvveb.Blocks.add("bootstrap5/content1", {
    name: "Content",
    image: "img/content1.png",
    html: `
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

Vvveb.Blocks.add("bootstrap5/counter", {
    name: "Counter & Stats",
    image: "img/counter.png",
    html: `
    <section class="bg-light pb-5 pg-lib-item pt-5 text-center">
    <div class="container"> 
      <div class="justify-content-center row"> 
        <div class="col-lg-3 col-sm-6 pb-3 pt-3">
          <div class="text-dark">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="3rem" height="3rem" class="mb-3">
              <path d="M15.224 15.508l-2.213 4.65a.6.6 0 0 1-.977.155l-3.542-3.739a.6.6 0 0 0-.357-.182l-5.107-.668a.6.6 0 0 1-.449-.881l2.462-4.524a.6.6 0 0 0 .062-.396L4.16 4.86a.6.6 0 0 1 .7-.7l5.063.943a.6.6 0 0 0 .396-.062l4.524-2.462a.6.6 0 0 1 .881.45l.668 5.106a.6.6 0 0 0 .182.357l3.739 3.542a.6.6 0 0 1-.155.977l-4.65 2.213a.6.6 0 0 0-.284.284zm.797 1.927l1.414-1.414 4.243 4.242-1.415 1.415-4.242-4.243z"></path>
            </svg>
            <h2 class="fw-bold mb-1">636</h2>
            <p class="mb-0">Monters Created</p>
          </div>                   
        </div>
        <div class="col-lg-3 col-sm-6 pb-3 pt-3">
          <div class="text-dark">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="3rem" height="3rem" class="mb-3">
              <path d="M5 3h15a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-2v3a4 4 0 0 1-4 4H8a4 4 0 0 1-4-4V4a1 1 0 0 1 1-1zm13 2v3h2V5h-2zM2 19h18v2H2v-2z"></path>
            </svg>
            <h2 class="fw-bold mb-1">1349</h2>
            <p class="mb-0">Cups of Coffee</p>
          </div>                   
        </div>
        <div class="col-lg-3 col-sm-6 pb-3 pt-3">
          <div class="text-dark">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="3rem" height="3rem" class="mb-3">
              <path d="M7.941 18c-.297-1.273-1.637-2.314-2.187-3a8 8 0 1 1 12.49.002c-.55.685-1.888 1.726-2.185 2.998H7.94zM16 20v1a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-1h8zm-3-9.995V6l-4.5 6.005H11v4l4.5-6H13z"></path>
            </svg>
            <h2 class="fw-bold mb-1">2496</h2>
            <p class="mb-0">Ideas Generated</p>
          </div>                   
        </div>
        <div class="col-lg-3 col-sm-6 pb-3 pt-3">
          <div class="text-dark">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="3rem" height="3rem" class="mb-3">
              <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm1-10V7h-2v7h6v-2h-4z"></path>
            </svg>
            <h2 class="fw-bold mb-1">4695</h2>
            <p class="mb-0">Hours Spent</p>
          </div>                   
        </div>                 
      </div>               
    </div>
  </section>
`,
});

Vvveb.Blocks.add("bootstrap5/pricing", {
    name: "Pricing Tables",
    image: "img/pricing.png",
    html: `       
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

Vvveb.Blocks.add("bootstrap5/testimonial", {
    name: "Testimonial",
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

Vvveb.Blocks.add("bootstrap5/contact", {
    name: "Contact",
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

Vvveb.Blocks.add("bootstrap5/partners", {
    name: "Partners",
    image: "img/partners.png",
    html: `
    <section class="bg-light pb-5 pg-lib-item pt-5 text-center">
    <div class="container"> 
        <h2 class="fw-bold mb-4">Some of Our Great Partners</h2>
        <div class="justify-content-center row"> 
            <div class="col-lg-3 col-sm-6 pb-3 pt-3">
                <svg width="177" height="100" viewBox="0 0 177 100" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                    <path d="M24.835 68.8131L20.6597 61.5812L26.7872 50.9971L30.681 57.7419L53.6668 57.7295L47.1445 68.9129L24.835 68.8131Z" fill="#FFAD64"></path> 
                    <path d="M57.7713 50.5484L53.596 57.7802L41.3662 57.7658L45.2604 51.0212L33.7568 31.1211L46.7031 31.1779L57.7713 50.5484Z" fill="#ADD4D3"></path> 
                    <path d="M25.4786 31.0826H33.8292L39.9316 41.6813L32.1434 41.681L20.6613 61.5935L14.2373 50.3533L25.4786 31.0826Z" fill="#FB8351"></path> 
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M34.8472 29.4081L34.8223 29.3649H24.492L12.2539 50.3445L20.6547 65.0435L20.665 65.0257L23.8408 70.5264L48.1287 70.6351L56.6581 56.0102H56.6013L59.7522 50.5528L47.7024 29.4645L34.8472 29.4081ZM42.8384 43.399H42.9028L36.8303 32.8523L45.7037 32.8912L55.7904 50.5439L52.6332 56.0124L44.3594 56.0168L47.2442 51.0206L42.8384 43.399ZM32.7435 32.8003L36.8842 39.9634L31.1512 39.9632L21.3362 56.9844L20.6667 58.1409L16.2209 50.362L26.4652 32.8003H32.7435ZM28.7625 50.9829L33.1358 43.3987L38.8702 43.3989L43.2766 51.0216L40.3912 56.019L31.6726 56.0237L28.7625 50.9829ZM22.6472 61.5881L24.311 58.7028L26.7852 54.4291L29.6897 59.4602L38.407 59.4555L38.3929 59.4799L50.6491 59.4944L46.1605 67.1908L25.8294 67.0998L22.6472 61.5881Z" fill="#333237"></path> 
                    <path d="M69.7569 64.6589V56.6172H66.7847V55.7144H73.8681V56.6172H70.8958V64.6589H69.7569Z" fill="#333237"></path> 
                    <path d="M77.0325 64.7978C75.8565 64.7978 74.9769 64.5154 74.3936 63.9506C73.8102 63.3858 73.5186 62.5154 73.5186 61.3394C73.5186 60.2839 73.7686 59.4552 74.2686 58.8533C74.7778 58.2422 75.5788 57.9366 76.6714 57.9366C77.3195 57.9366 77.8519 58.057 78.2686 58.2978C78.6945 58.5292 79.0094 58.8533 79.2131 59.27C79.426 59.6774 79.5325 60.1404 79.5325 60.6589V61.895H74.6575C74.6945 62.395 74.801 62.7885 74.9769 63.0756C75.1621 63.3626 75.4352 63.5709 75.7964 63.7006C76.1667 63.8209 76.6529 63.8811 77.2547 63.8811C77.9306 63.8811 78.551 63.7654 79.1158 63.5339V64.4228C78.8288 64.5432 78.5047 64.6358 78.1436 64.7006C77.7917 64.7654 77.4214 64.7978 77.0325 64.7978ZM74.6575 61.0756H78.5186V60.5339C78.5186 59.9968 78.3751 59.5848 78.088 59.2978C77.8103 59.0015 77.3473 58.8533 76.6991 58.8533C75.9121 58.8533 75.3751 59.0385 75.088 59.4089C74.801 59.7792 74.6575 60.3348 74.6575 61.0756Z" fill="#333237"></path> 
                    <path d="M84.3132 64.7978C83.1651 64.7978 82.3132 64.5015 81.7577 63.9089C81.2021 63.3071 80.9243 62.4598 80.9243 61.3672C80.9243 60.2098 81.2391 59.3487 81.8688 58.7839C82.4984 58.2191 83.3456 57.9366 84.4105 57.9366C84.8457 57.9366 85.2068 57.969 85.4938 58.0339C85.7808 58.0894 86.0586 58.182 86.3271 58.3116V59.2144C85.8271 58.9737 85.2577 58.8533 84.6188 58.8533C83.804 58.8533 83.1743 59.0478 82.7299 59.4367C82.2854 59.8163 82.0632 60.4598 82.0632 61.3672C82.0632 62.2376 82.2577 62.8765 82.6466 63.2839C83.0355 63.6821 83.679 63.8811 84.5771 63.8811C85.216 63.8811 85.804 63.7608 86.341 63.52V64.4367C86.054 64.5571 85.7438 64.645 85.4105 64.7006C85.0864 64.7654 84.7207 64.7978 84.3132 64.7978Z" fill="#333237"></path> 
                    <path d="M87.6177 64.6589V55.2977H88.7566V58.7839C89.0622 58.5339 89.4187 58.3302 89.8261 58.1728C90.2428 58.0153 90.7242 57.9366 91.2705 57.9366C92.0668 57.9366 92.6641 58.1311 93.0622 58.52C93.4604 58.9089 93.6594 59.52 93.6594 60.3533V64.6589H92.5206V60.395C92.5206 59.8209 92.3909 59.4228 92.1317 59.2005C91.8817 58.9691 91.465 58.8533 90.8816 58.8533C90.5113 58.8533 90.127 58.9366 89.7289 59.1033C89.34 59.2607 89.0159 59.4691 88.7566 59.7283V64.6589H87.6177Z" fill="#333237"></path> 
                    <path d="M98.2016 64.7979C97.2757 64.7979 96.5349 64.5942 95.9794 64.1867C95.4238 63.7793 95.146 63.233 95.146 62.5478C95.146 61.9182 95.3405 61.3765 95.7294 60.9228C96.1182 60.4691 96.6507 60.0663 97.3266 59.7145C96.9655 59.3534 96.6599 59.0154 96.4099 58.7006C96.1599 58.3858 96.0349 58.0061 96.0349 57.5617C96.0349 57.0061 96.2247 56.5385 96.6044 56.1589C96.9933 55.77 97.5396 55.5756 98.2433 55.5756C98.9285 55.5756 99.4609 55.7561 99.8405 56.1172C100.22 56.4783 100.41 56.9598 100.41 57.5617C100.41 58.0617 100.276 58.483 100.007 58.8256C99.7386 59.1682 99.3544 59.5154 98.8544 59.8673L101.16 62.2145C101.317 61.8719 101.396 61.4367 101.396 60.9089V60.7145H102.299V60.9089C102.299 61.2701 102.257 61.6219 102.174 61.9645C102.091 62.3071 101.97 62.6034 101.813 62.8534L103.063 64.1173L102.368 64.7423L101.257 63.6451C100.933 64.0432 100.512 64.3349 99.9933 64.5201C99.4748 64.7053 98.8775 64.7979 98.2016 64.7979ZM98.146 59.3117C98.5812 59.0432 98.9099 58.7886 99.1322 58.5478C99.3544 58.2978 99.4655 57.983 99.4655 57.6034C99.4655 57.2515 99.3683 56.9737 99.1738 56.77C98.9886 56.5571 98.6785 56.4506 98.2433 56.4506C97.7988 56.4506 97.4747 56.5617 97.271 56.7839C97.0766 57.0061 96.9794 57.2793 96.9794 57.6034C96.9794 57.8997 97.0812 58.1728 97.2849 58.4228C97.4979 58.6728 97.7849 58.9691 98.146 59.3117ZM98.2016 63.9784C98.7386 63.9784 99.197 63.8997 99.5766 63.7423C99.9655 63.5756 100.294 63.3303 100.563 63.0062L98.021 60.4089C97.4192 60.6867 96.9701 60.9876 96.6738 61.3117C96.3868 61.6265 96.2432 62.0293 96.2432 62.5201C96.2432 63.0015 96.4284 63.3673 96.7988 63.6173C97.1692 63.858 97.6368 63.9784 98.2016 63.9784Z" fill="#FB8351"></path> 
                    <path d="M67.2334 49.2219V36.8372H70.8488V46.4526H76.4258V49.2219H67.2334Z" fill="#FB8351"></path> 
                    <path d="M82.2419 49.4142C80.4214 49.4142 79.0752 49.0103 78.2034 48.2026C77.3445 47.3949 76.915 46.2154 76.915 44.6641C76.915 43.1257 77.3509 41.9526 78.2227 41.1449C79.0945 40.3244 80.4342 39.9141 82.2419 39.9141C84.0625 39.9141 85.4086 40.3244 86.2804 41.1449C87.1651 41.9526 87.6074 43.1257 87.6074 44.6641C87.6074 46.2154 87.1715 47.3949 86.2997 48.2026C85.4279 49.0103 84.0753 49.4142 82.2419 49.4142ZM82.2419 46.7795C82.8317 46.7795 83.2548 46.6129 83.5112 46.2795C83.7804 45.9462 83.915 45.4077 83.915 44.6641C83.915 43.9334 83.7804 43.4013 83.5112 43.068C83.2548 42.7218 82.8317 42.5487 82.2419 42.5487C81.665 42.5487 81.2483 42.7218 80.9919 43.068C80.7355 43.4013 80.6073 43.9334 80.6073 44.6641C80.6073 45.4077 80.7355 45.9462 80.9919 46.2795C81.2483 46.6129 81.665 46.7795 82.2419 46.7795Z" fill="#FB8351"></path> 
                    <path d="M92.9622 52.6065C92.5135 52.6065 92.0263 52.5873 91.5007 52.5488C90.975 52.5232 90.475 52.4719 90.0007 52.395C89.5391 52.3181 89.1545 52.2283 88.8468 52.1257V49.818C89.193 49.9334 89.5904 50.0296 90.0391 50.1065C90.5007 50.1834 90.9686 50.2411 91.443 50.2796C91.9173 50.318 92.3532 50.3373 92.7507 50.3373C93.4302 50.3373 93.9622 50.2988 94.3469 50.2219C94.7443 50.1578 94.943 50.036 94.943 49.8565C94.943 49.7027 94.8789 49.6001 94.7507 49.5488C94.6225 49.5103 94.3789 49.4911 94.0199 49.4911H91.6161C90.6802 49.4911 89.9558 49.3437 89.443 49.0488C88.943 48.7411 88.693 48.286 88.693 47.6834C88.693 46.8372 89.1609 46.2475 90.0968 45.9142C89.5712 45.6449 89.1866 45.3052 88.943 44.8949C88.6994 44.4847 88.5776 43.9654 88.5776 43.3372C88.5776 42.1577 88.975 41.2923 89.7699 40.741C90.5776 40.1898 91.7379 39.9141 93.2507 39.9141C93.5712 39.9141 93.9302 39.9397 94.3276 39.991C94.7251 40.0295 95.0135 40.068 95.193 40.1064H98.77L98.693 42.2987H97.4815C97.7123 42.5936 97.8277 42.9526 97.8277 43.3757C97.8277 44.3116 97.552 45.0552 97.0007 45.6065C96.4623 46.1449 95.6097 46.4142 94.443 46.4142C94.2763 46.4142 94.0969 46.4078 93.9045 46.3949C93.7122 46.3693 93.5327 46.3501 93.3661 46.3372C93.084 46.3629 92.8404 46.4142 92.6353 46.4911C92.4302 46.568 92.3276 46.6962 92.3276 46.8757C92.3276 47.0039 92.3853 47.0937 92.5007 47.1449C92.6161 47.1834 92.7763 47.2026 92.9815 47.2026H95.0776C96.0135 47.2026 96.7507 47.4206 97.2892 47.8565C97.8277 48.2924 98.0969 48.9334 98.0969 49.7796C98.0969 50.677 97.6802 51.3693 96.8469 51.8565C96.0135 52.3565 94.7187 52.6065 92.9622 52.6065ZM93.2699 44.4334C93.834 44.4334 94.2251 44.3372 94.443 44.1449C94.661 43.9526 94.7699 43.6321 94.7699 43.1834C94.7699 42.7346 94.661 42.4077 94.443 42.2026C94.2251 41.9975 93.834 41.8949 93.2699 41.8949C92.7443 41.8949 92.3597 41.9975 92.1161 42.2026C91.8853 42.3949 91.7699 42.7218 91.7699 43.1834C91.7699 43.6193 91.8789 43.9398 92.0968 44.1449C92.3276 44.3372 92.7186 44.4334 93.2699 44.4334Z" fill="#FB8351"></path> 
                    <path d="M104.666 49.4142C102.845 49.4142 101.499 49.0103 100.627 48.2026C99.7679 47.3949 99.3384 46.2154 99.3384 44.6641C99.3384 43.1257 99.7743 41.9526 100.646 41.1449C101.518 40.3244 102.858 39.9141 104.666 39.9141C106.486 39.9141 107.832 40.3244 108.704 41.1449C109.589 41.9526 110.031 43.1257 110.031 44.6641C110.031 46.2154 109.595 47.3949 108.723 48.2026C107.851 49.0103 106.499 49.4142 104.666 49.4142ZM104.666 46.7795C105.255 46.7795 105.678 46.6129 105.935 46.2795C106.204 45.9462 106.339 45.4077 106.339 44.6641C106.339 43.9334 106.204 43.4013 105.935 43.068C105.678 42.7218 105.255 42.5487 104.666 42.5487C104.089 42.5487 103.672 42.7218 103.415 43.068C103.159 43.4013 103.031 43.9334 103.031 44.6641C103.031 45.4077 103.159 45.9462 103.415 46.2795C103.672 46.6129 104.089 46.7795 104.666 46.7795Z" fill="#FB8351"></path> 
                    <path d="M111.62 38.8948V36.2794H115.524V38.8948H111.62ZM111.908 49.2218V42.741H110.582L110.889 40.1064H115.524V49.2218H111.908Z" fill="#333237"></path> 
                    <path d="M117.258 53.3757V40.1064H120.393L120.566 40.8371C120.937 40.5423 121.341 40.3179 121.777 40.1641C122.226 39.9974 122.745 39.9141 123.335 39.9141C124.694 39.9141 125.739 40.2602 126.47 40.9525C127.213 41.632 127.585 42.7923 127.585 44.4333C127.585 46.0616 127.194 47.2987 126.412 48.1449C125.63 48.9911 124.553 49.4141 123.181 49.4141C122.271 49.4141 121.502 49.2411 120.873 48.8949V53.3757H117.258ZM122.258 46.7795C122.784 46.7795 123.188 46.5936 123.47 46.2218C123.752 45.85 123.893 45.2731 123.893 44.491C123.893 43.7346 123.758 43.2218 123.489 42.9526C123.232 42.6833 122.835 42.5487 122.296 42.5487C121.758 42.5487 121.284 42.7282 120.873 43.0872V46.318C121.079 46.4718 121.284 46.5872 121.489 46.6641C121.694 46.741 121.95 46.7795 122.258 46.7795Z" fill="#333237"></path> 
                    <path d="M132.403 49.4141C131.621 49.4141 130.884 49.3565 130.192 49.2411C129.512 49.1385 128.974 49.0039 128.576 48.8372V46.241C129.025 46.4462 129.557 46.6064 130.172 46.7218C130.801 46.8372 131.333 46.8949 131.768 46.8949C132.23 46.8949 132.576 46.8821 132.807 46.8564C133.051 46.8308 133.172 46.7218 133.172 46.5295C133.172 46.3116 132.961 46.1449 132.538 46.0295C132.115 45.9141 131.583 45.7474 130.942 45.5295C130.108 45.2346 129.486 44.8885 129.076 44.491C128.666 44.0936 128.461 43.5167 128.461 42.7602C128.461 41.85 128.82 41.1513 129.538 40.6641C130.256 40.1641 131.384 39.9141 132.922 39.9141C133.512 39.9141 134.121 39.9589 134.749 40.0487C135.377 40.1384 135.871 40.241 136.23 40.3564V42.8949C135.845 42.7282 135.422 42.6064 134.961 42.5295C134.512 42.4525 134.102 42.4141 133.73 42.4141C133.32 42.4141 132.954 42.4333 132.634 42.4718C132.313 42.5102 132.153 42.6192 132.153 42.7987C132.153 43.0038 132.333 43.1513 132.692 43.241C133.063 43.3308 133.557 43.4718 134.172 43.6641C134.865 43.8692 135.403 44.0936 135.788 44.3372C136.185 44.5808 136.461 44.8756 136.615 45.2218C136.781 45.568 136.865 45.9974 136.865 46.5103C136.865 47.4334 136.486 48.1513 135.73 48.6641C134.986 49.1641 133.877 49.4141 132.403 49.4141Z" fill="#333237"></path> 
                    <path d="M141.524 49.4141C140.46 49.4141 139.627 49.1129 139.024 48.5103C138.422 47.9077 138.121 47.0231 138.121 45.8564V40.1064H141.736V45.568C141.736 46.3628 142.14 46.7603 142.947 46.7603C143.242 46.7603 143.531 46.6962 143.813 46.568C144.095 46.4398 144.319 46.2795 144.486 46.0872V40.1064H148.101V49.2218H144.717L144.621 48.5295C144.262 48.7859 143.819 48.9975 143.294 49.1641C142.781 49.3308 142.191 49.4141 141.524 49.4141Z" fill="#333237"></path> 
                    <path d="M149.823 49.2218V40.1064H153.169L153.265 40.8371C153.663 40.5679 154.105 40.35 154.592 40.1833C155.092 40.0038 155.637 39.9141 156.227 39.9141C156.816 39.9141 157.278 39.9974 157.611 40.1641C157.945 40.3307 158.214 40.5743 158.419 40.8948C158.829 40.6 159.291 40.3628 159.804 40.1833C160.329 40.0038 160.945 39.9141 161.65 39.9141C162.714 39.9141 163.496 40.1961 163.996 40.7602C164.496 41.3115 164.746 42.1577 164.746 43.2987V49.2218H161.188V43.7218C161.188 43.3115 161.105 43.0231 160.938 42.8564C160.772 42.6769 160.496 42.5872 160.111 42.5872C159.611 42.5872 159.201 42.7667 158.881 43.1256C158.906 43.2923 158.919 43.4526 158.919 43.6064C158.919 43.7474 158.919 43.9077 158.919 44.0872V49.2218H155.573V43.6641C155.573 43.2923 155.509 43.0231 155.381 42.8564C155.252 42.6769 155.009 42.5872 154.65 42.5872C154.406 42.5872 154.169 42.6513 153.938 42.7795C153.707 42.9077 153.502 43.0615 153.323 43.241V49.2218H149.823Z" fill="#333237"></path> 
                    <path d="M108.951 64.9125C107.988 64.9125 107.187 64.7319 106.548 64.3708C105.919 64.0004 105.447 63.4865 105.132 62.8291C104.817 62.1625 104.66 61.3847 104.66 60.4958C104.66 59.5236 104.808 58.6763 105.104 57.9541C105.4 57.2319 105.863 56.6763 106.493 56.2874C107.123 55.8893 107.937 55.6902 108.937 55.6902C109.456 55.6902 109.923 55.7272 110.34 55.8013C110.766 55.8754 111.164 55.9772 111.535 56.1069V57.1069C111.164 56.968 110.771 56.8615 110.354 56.7874C109.937 56.7041 109.498 56.6624 109.035 56.6624C108.229 56.6624 107.59 56.8152 107.118 57.1208C106.646 57.4263 106.308 57.8661 106.104 58.4402C105.9 59.0143 105.798 59.6995 105.798 60.4958C105.798 61.5976 106.058 62.4495 106.576 63.0514C107.104 63.644 107.933 63.9403 109.062 63.9403C109.479 63.9403 109.9 63.9078 110.326 63.843C110.761 63.7782 111.164 63.6764 111.535 63.5375V64.5514C111.173 64.6625 110.78 64.7504 110.354 64.8153C109.937 64.8801 109.47 64.9125 108.951 64.9125Z" fill="#333237"></path> 
                    <path d="M116.211 64.9125C115.063 64.9125 114.225 64.6208 113.697 64.0375C113.179 63.4449 112.92 62.593 112.92 61.4819C112.92 60.38 113.184 59.5328 113.711 58.9402C114.239 58.3476 115.073 58.0513 116.211 58.0513C117.35 58.0513 118.184 58.3476 118.711 58.9402C119.239 59.5328 119.503 60.38 119.503 61.4819C119.503 62.593 119.244 63.4449 118.725 64.0375C118.207 64.6208 117.369 64.9125 116.211 64.9125ZM116.211 63.9403C116.998 63.9403 117.554 63.7458 117.878 63.3569C118.202 62.9588 118.364 62.3338 118.364 61.4819C118.364 60.63 118.198 60.0097 117.864 59.6208C117.54 59.2226 116.989 59.0235 116.211 59.0235C115.434 59.0235 114.878 59.2226 114.545 59.6208C114.221 60.0097 114.059 60.63 114.059 61.4819C114.059 62.3338 114.221 62.9588 114.545 63.3569C114.869 63.7458 115.424 63.9403 116.211 63.9403Z" fill="#333237"></path> 
                    <path d="M120.895 64.7736V63.8153H121.923V64.7736H120.895Z" fill="#333237"></path> 
                </svg>                                     
            </div>
            <div class="col-lg-3 col-sm-6 pb-3 pt-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.78 100" height="100" width="177" fill="none">
                    <title>logoipsum-4</title>
                    <path d="M38.79,54.79h3V69.5h-3Z" style="fill:#394149"></path>
                    <path d="M43.53,64.46a5.34,5.34,0,1,1,5.34,5.33A5.28,5.28,0,0,1,43.53,64.46Zm7.66,0a2.32,2.32,0,1,0-2.32,2.38A2.26,2.26,0,0,0,51.19,64.46Z" style="fill:#394149"></path>
                    <path d="M66.27,59.42V69c0,3.39-2.65,4.82-5.33,4.82a5.15,5.15,0,0,1-4.77-2.44l2.58-1.49A2.3,2.3,0,0,0,61,71.16,2,2,0,0,0,63.32,69v-.93a3.56,3.56,0,0,1-2.94,1.31,5.12,5.12,0,0,1,0-10.24,3.59,3.59,0,0,1,2.94,1.31v-1Zm-2.95,4.84a2.44,2.44,0,1,0-2.44,2.34A2.28,2.28,0,0,0,63.32,64.26Z" style="fill:#394149"></path>
                    <path d="M68,64.46a5.34,5.34,0,1,1,5.34,5.33A5.28,5.28,0,0,1,68,64.46Zm7.66,0a2.32,2.32,0,1,0-2.32,2.38A2.26,2.26,0,0,0,75.64,64.46Z" style="fill:#394149"></path>
                    <path d="M80.07,56.72a1.82,1.82,0,1,1,1.82,1.82A1.83,1.83,0,0,1,80.07,56.72Zm.31,2.7h3V69.5h-3Z" style="fill:#394149"></path>
                    <path d="M96.46,64.46a5.06,5.06,0,0,1-4.81,5.33,3.83,3.83,0,0,1-3-1.23v5h-3V59.42h3v.95a3.83,3.83,0,0,1,3-1.23A5.06,5.06,0,0,1,96.46,64.46Zm-3,0A2.4,2.4,0,1,0,91,66.92,2.3,2.3,0,0,0,93.44,64.46Z" style="fill:#394149"></path>
                    <path d="M105.8,66.48c0,2.32-2,3.31-4.2,3.31a4.42,4.42,0,0,1-4.33-2.4l2.62-1.49a1.66,1.66,0,0,0,1.71,1.19c.73,0,1.09-.23,1.09-.63,0-1.11-5-.52-5-4,0-2.2,1.86-3.31,4-3.31a4.43,4.43,0,0,1,3.94,2.16L103,62.69a1.49,1.49,0,0,0-1.36-.89c-.52,0-.84.2-.84.57C100.84,63.52,105.8,62.75,105.8,66.48Z" style="fill:#394149"></path>
                    <path d="M116.84,59.42V69.5h-3v-.94a3.45,3.45,0,0,1-2.88,1.23c-2,0-3.77-1.45-3.77-4.18V59.42h3v5.75A1.66,1.66,0,0,0,112,67c1.1,0,1.87-.64,1.87-2.07V59.42Z" style="fill:#394149"></path>
                    <path d="M134.18,63.32V69.5h-3V63.58c0-1-.49-1.66-1.45-1.66s-1.58.71-1.58,1.9V69.5h-3V63.58c0-1-.48-1.66-1.45-1.66s-1.57.71-1.57,1.9V69.5h-3V59.42h3v.93a3.1,3.1,0,0,1,2.7-1.21,3,3,0,0,1,2.64,1.33,3.32,3.32,0,0,1,2.92-1.33C132.67,59.14,134.18,60.8,134.18,63.32Z" style="fill:#394149"></path>
                    <circle cx="136.74" cy="57.12" r="2.24" style="fill:#394149"></circle>
                    <circle cx="72.74" cy="36.67" r="10.49" style="fill:#394149"></circle>
                    <circle cx="96.19" cy="36.67" r="10.49" style="fill:#394149"></circle>
                    <rect x="38.81" y="26.18" width="20.97" height="20.97" style="fill:#394149"></rect>
                </svg>                                     
            </div>
            <div class="col-lg-3 col-sm-6 pb-3 pt-3">
                <svg width="177" height="100" viewBox="0 0 177 100" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                    <path d="M44.5 32C42.2019 32 39.9262 32.4527 37.803 33.3321C35.6798 34.2116 33.7507 35.5006 32.1256 37.1256C30.5006 38.7507 29.2116 40.6798 28.3321 42.803C27.4527 44.9262 27 47.2019 27 49.5C27 51.7981 27.4527 54.0738 28.3321 56.197C29.2116 58.3202 30.5006 60.2493 32.1256 61.8744C33.7507 63.4994 35.6798 64.7884 37.803 65.6679C39.9262 66.5473 42.2019 67 44.5 67V58.25C43.3509 58.25 42.2131 58.0237 41.1515 57.5839C40.0899 57.1442 39.1253 56.4997 38.3128 55.6872C37.5003 54.8747 36.8558 53.9101 36.4161 52.8485C35.9763 51.7869 35.75 50.6491 35.75 49.5C35.75 48.3509 35.9763 47.2131 36.4161 46.1515C36.8558 45.0899 37.5003 44.1253 38.3128 43.3128C39.1253 42.5003 40.0899 41.8558 41.1515 41.4161C42.2131 40.9763 43.3509 40.75 44.5 40.75V32Z" fill="#0F52FF"></path> 
                    <path d="M44.5003 55.3333C47.722 55.3333 50.3337 52.7216 50.3337 49.5C50.3337 46.2783 47.722 43.6666 44.5003 43.6666C41.2787 43.6666 38.667 46.2783 38.667 49.5C38.667 52.7216 41.2787 55.3333 44.5003 55.3333Z" fill="#0F52FF"></path> 
                    <path d="M27 49.5C27 51.7981 27.4527 54.0738 28.3321 56.197C29.2116 58.3202 30.5006 60.2493 32.1256 61.8744C33.7507 63.4994 35.6798 64.7884 37.803 65.6679C39.9262 66.5473 42.2019 67 44.5 67C46.7981 67 49.0738 66.5473 51.197 65.6679C53.3202 64.7884 55.2493 63.4994 56.8744 61.8744C58.4994 60.2493 59.7884 58.3202 60.6679 56.197C61.5473 54.0738 62 51.7981 62 49.5H53.25C53.25 50.6491 53.0237 51.7869 52.5839 52.8485C52.1442 53.9101 51.4997 54.8747 50.6872 55.6872C49.8747 56.4997 48.9101 57.1442 47.8485 57.5839C46.7869 58.0237 45.6491 58.25 44.5 58.25C43.3509 58.25 42.2131 58.0237 41.1515 57.5839C40.0899 57.1442 39.1253 56.4997 38.3128 55.6872C37.5003 54.8747 36.8558 53.9101 36.4161 52.8485C35.9763 51.7869 35.75 50.6491 35.75 49.5H27Z" fill="#5BD0F4"></path> 
                    <path d="M50.3332 49.5C50.3332 47.9529 49.7186 46.4692 48.6247 45.3752C47.5307 44.2812 46.047 43.6666 44.4999 43.6666C42.9528 43.6666 41.4691 44.2812 40.3751 45.3752C39.2811 46.4692 38.6665 47.9529 38.6665 49.5H44.4999H50.3332Z" fill="#5BD0F4"></path> 
                    <path d="M71.1398 42.925H68.9663V55H71.1398V42.925Z" fill="#0F52FF"></path> 
                    <path d="M72.5591 50.722C72.5591 53.5165 74.4911 55.2415 77.0441 55.2415C79.5971 55.2415 81.5291 53.5165 81.5291 50.722C81.5291 47.9275 79.5971 46.2025 77.0441 46.2025C74.4911 46.2025 72.5591 47.9275 72.5591 50.722ZM74.7326 50.722C74.7326 49.066 75.6986 48.1 77.0441 48.1C78.3896 48.1 79.3556 49.066 79.3556 50.722C79.3556 52.378 78.3896 53.344 77.0441 53.344C75.6986 53.344 74.7326 52.378 74.7326 50.722Z" fill="#0F52FF"></path> 
                    <path d="M89.2962 46.444V47.5997H89.1237C88.6062 46.858 87.7782 46.2025 86.2947 46.2025C84.2592 46.2025 82.4307 47.9275 82.4307 50.584C82.4307 53.2405 84.2592 54.9655 86.2947 54.9655C87.7782 54.9655 88.6062 54.2927 89.0892 53.62H89.2617V54.448C89.2617 56.104 88.2957 56.863 86.8812 56.863C85.4667 56.863 84.7422 56.104 84.4489 55.1207L82.4997 55.966C82.9482 57.2597 84.2592 58.6915 86.9157 58.6915C89.6412 58.6915 91.4352 57.2597 91.4352 54.4997V46.444H89.2962ZM86.9502 53.1025C85.6047 53.1025 84.6042 52.1365 84.6042 50.584C84.6042 49.0315 85.6047 48.0655 86.9502 48.0655C88.2957 48.0655 89.2962 49.0315 89.2962 50.584C89.2962 52.1365 88.2957 53.1025 86.9502 53.1025Z" fill="#0F52FF"></path> 
                    <path d="M92.8413 50.722C92.8413 53.5165 94.7733 55.2415 97.3263 55.2415C99.8793 55.2415 101.811 53.5165 101.811 50.722C101.811 47.9275 99.8793 46.2025 97.3263 46.2025C94.7733 46.2025 92.8413 47.9275 92.8413 50.722ZM95.0148 50.722C95.0148 49.066 95.9808 48.1 97.3263 48.1C98.6718 48.1 99.6378 49.066 99.6378 50.722C99.6378 52.378 98.6718 53.344 97.3263 53.344C95.9808 53.344 95.0148 52.378 95.0148 50.722Z" fill="#0F52FF"></path> 
                    <path d="M103.517 43.9601C103.517 44.8399 104.19 45.4436 105.053 45.4436C105.915 45.4436 106.588 44.8399 106.588 43.9601C106.588 43.0804 105.915 42.4766 105.053 42.4766C104.19 42.4766 103.517 43.0804 103.517 43.9601ZM106.139 46.4441H103.966V55.0001H106.139V46.4441Z" fill="#5BD0F4"></path> 
                    <path d="M108.076 58.45H110.25V53.896H110.422C110.905 54.586 111.733 55.2415 113.217 55.2415C115.252 55.2415 117.081 53.5165 117.081 50.722C117.081 47.9275 115.252 46.2025 113.217 46.2025C111.733 46.2025 110.905 46.858 110.388 47.5998H110.215V46.444H108.076V58.45ZM112.561 53.3785C111.216 53.3785 110.215 52.4125 110.215 50.722C110.215 49.0315 111.216 48.0655 112.561 48.0655C113.907 48.0655 114.907 49.0315 114.907 50.722C114.907 52.4125 113.907 53.3785 112.561 53.3785Z" fill="#5BD0F4"></path> 
                    <path d="M118.349 48.8418C118.349 50.5323 119.763 51.1533 121.557 51.4983L122.006 51.5845C123.075 51.7915 123.558 52.0503 123.558 52.6023C123.558 53.1543 123.075 53.5855 122.075 53.5855C121.074 53.5855 120.264 53.1715 120.039 51.9295L118.038 52.447C118.332 54.241 119.832 55.2415 122.075 55.2415C124.248 55.2415 125.663 54.2238 125.663 52.4298C125.663 50.6357 124.214 50.1528 122.282 49.7733L121.833 49.687C120.936 49.5145 120.453 49.273 120.453 48.7038C120.453 48.1863 120.902 47.8585 121.73 47.8585C122.558 47.8585 123.144 48.2035 123.351 49.135L125.318 48.5313C124.904 47.1513 123.645 46.2025 121.73 46.2025C119.694 46.2025 118.349 47.1513 118.349 48.8418Z" fill="#5BD0F4"></path> 
                    <path d="M135.426 55V46.444H133.253V50.86C133.253 52.447 132.477 53.3785 131.148 53.3785C129.975 53.3785 129.32 52.7403 129.32 51.4465V46.444H127.146V51.55C127.146 53.6718 128.475 55.138 130.476 55.138C132.045 55.138 132.77 54.448 133.115 53.7235H133.287V55H135.426Z" fill="#5BD0F4"></path> 
                    <path d="M137.354 46.444V55H139.528V49.894C139.528 48.721 140.08 48.0655 141.08 48.0655C141.943 48.0655 142.46 48.5485 142.46 49.48V55H144.634V49.894C144.634 48.721 145.186 48.0655 146.186 48.0655C147.049 48.0655 147.566 48.5485 147.566 49.48V55H149.74V49.3765C149.74 47.3065 148.463 46.306 146.876 46.306C145.479 46.306 144.841 46.927 144.427 47.6515H144.254C143.857 46.8408 143.15 46.306 141.908 46.306C140.666 46.306 139.993 46.858 139.666 47.5135H139.493V46.444H137.354Z" fill="#5BD0F4"></path> 
                </svg>                                     
            </div>
            <div class="col-lg-3 col-sm-6 pb-3 pt-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.78 100" height="100" width="177" fill="none">
                    <title>logoipsum-3</title>
                    <path d="M67.88,57.39a2.65,2.65,0,0,1-1.67-.48,1.56,1.56,0,0,1-.63-1.31V46.33a.26.26,0,0,1,.29-.29h1.68c.19,0,.28.1.28.29v8.55c0,.38.17.57.52.57a1.44,1.44,0,0,0,.44-.05c.2,0,.31.06.32.24l.15,1.25a.26.26,0,0,1-.24.31A3.77,3.77,0,0,1,67.88,57.39Z" style="fill:#394149"></path>
                    <path d="M77.33,56.32a4.71,4.71,0,0,1-6,0,4,4,0,0,1,0-5.63,4.73,4.73,0,0,1,6,0,4.06,4.06,0,0,1,0,5.62ZM72.91,55a2.13,2.13,0,0,0,2.86,0,2.24,2.24,0,0,0,0-2.94,2.13,2.13,0,0,0-2.86,0,2.24,2.24,0,0,0,0,2.94Z" style="fill:#394149"></path>
                    <path d="M87.71,49.87c.19,0,.28.1.28.29v7.17a3.26,3.26,0,0,1-1.11,2.57,4.2,4.2,0,0,1-2.91,1,4.68,4.68,0,0,1-2.71-.75,3,3,0,0,1-1.31-2c0-.2,0-.29.27-.29H81.9a.37.37,0,0,1,.33.23,1.31,1.31,0,0,0,.61.71,2.34,2.34,0,0,0,1.12.26,1.77,1.77,0,0,0,1.29-.46,1.7,1.7,0,0,0,.47-1.25v-.63a3.35,3.35,0,0,1-2.08.65,3.88,3.88,0,0,1-2.84-1.09,4,4,0,0,1,0-5.56,3.91,3.91,0,0,1,2.84-1.08,3.36,3.36,0,0,1,2.13.69v-.16a.26.26,0,0,1,.28-.29Zm-3.88,5.72A1.76,1.76,0,0,0,85.2,55a2.45,2.45,0,0,0,0-3,1.75,1.75,0,0,0-1.36-.58,1.8,1.8,0,0,0-1.39.59,2.12,2.12,0,0,0-.54,1.5A2.16,2.16,0,0,0,82.44,55,1.81,1.81,0,0,0,83.83,55.59Z" style="fill:#394149"></path>
                    <path d="M96.62,56.32a4.73,4.73,0,0,1-6,0,4.07,4.07,0,0,1,0-5.63,4.74,4.74,0,0,1,6,0,4.06,4.06,0,0,1,0,5.62ZM92.19,55a2,2,0,0,0,1.44.55A2,2,0,0,0,95.06,55a2.27,2.27,0,0,0,0-2.94,2,2,0,0,0-1.43-.55,2,2,0,0,0-1.44.55,2.27,2.27,0,0,0,0,2.94Z" style="fill:#394149"></path>
                    <path d="M101.36,48.17a1.45,1.45,0,0,1-1.91,0,1.21,1.21,0,0,1,0-1.76,1.48,1.48,0,0,1,1.91,0,1.21,1.21,0,0,1,0,1.76Zm.21,9.22a2.69,2.69,0,0,1-1.67-.48,1.58,1.58,0,0,1-.62-1.31V50.16a.26.26,0,0,1,.29-.29h1.68c.19,0,.28.1.28.29v4.72q0,.57.51.57a1.55,1.55,0,0,0,.45-.05c.2,0,.31.06.32.24l.15,1.25a.26.26,0,0,1-.24.31A3.79,3.79,0,0,1,101.57,57.39Z" style="fill:#394149"></path>
                    <path d="M109.14,49.63A3.92,3.92,0,0,1,112,50.71a4.1,4.1,0,0,1,0,5.59,3.89,3.89,0,0,1-2.86,1.09,3.44,3.44,0,0,1-2.09-.65v3.61c0,.19-.1.28-.29.28h-1.68a.24.24,0,0,1-.28-.28v-8.2a.52.52,0,0,0-.59-.59l-.33,0q-.33,0-.33-.24V50.14a.32.32,0,0,1,.23-.33,3,3,0,0,1,1.08-.18,1.85,1.85,0,0,1,1.81,1A3.37,3.37,0,0,1,109.14,49.63ZM107.58,55a1.91,1.91,0,0,0,2.76,0,2.16,2.16,0,0,0,.55-1.53,2.13,2.13,0,0,0-.55-1.53,1.91,1.91,0,0,0-2.76,0,2.21,2.21,0,0,0-.53,1.53A2.24,2.24,0,0,0,107.58,55Z" style="fill:#394149"></path>
                    <path d="M117.82,57.39a4.82,4.82,0,0,1-2.57-.62A2.44,2.44,0,0,1,114.09,55c0-.2.07-.3.29-.3h1.47a.38.38,0,0,1,.33.22c.21.54.76.81,1.64.81a1.87,1.87,0,0,0,.89-.18.58.58,0,0,0,.34-.49c0-.26-.16-.44-.48-.56a5.41,5.41,0,0,0-1.17-.25A11.12,11.12,0,0,1,116,54a2.3,2.3,0,0,1-1.17-.67,2.14,2.14,0,0,1,.43-3.1,4.12,4.12,0,0,1,2.42-.64,4.42,4.42,0,0,1,2.36.59,2.23,2.23,0,0,1,1.1,1.57q0,.3-.27.3h-1.48a.31.31,0,0,1-.3-.18,1,1,0,0,0-.52-.53,1.76,1.76,0,0,0-.86-.2,1.74,1.74,0,0,0-.85.17.5.5,0,0,0-.32.46.64.64,0,0,0,.48.59,5.42,5.42,0,0,0,1.19.3,13.08,13.08,0,0,1,1.39.26,2.3,2.3,0,0,1,1.17.67,1.89,1.89,0,0,1,.49,1.37,2,2,0,0,1-.93,1.74A4.37,4.37,0,0,1,117.82,57.39Z" style="fill:#394149"></path>
                    <path d="M131.83,56.89a.27.27,0,0,1-.23.31,3.86,3.86,0,0,1-1.13.19,2.22,2.22,0,0,1-2-.87,3.62,3.62,0,0,1-2.55.87,3.1,3.1,0,0,1-2.34-.91,3.28,3.28,0,0,1-.89-2.41V50.16c0-.19.09-.29.28-.29h1.68c.19,0,.28.1.28.29v3.61a1.77,1.77,0,0,0,.43,1.23,1.5,1.5,0,0,0,1.15.47,1.66,1.66,0,0,0,1.2-.44,1.6,1.6,0,0,0,.45-1.19V50.16c0-.19.09-.29.28-.29h1.7c.19,0,.28.1.28.29v4.71c0,.39.17.58.5.58a1.58,1.58,0,0,0,.46-.05.26.26,0,0,1,.33.24Z" style="fill:#394149"></path>
                    <path d="M147.72,56.89a.25.25,0,0,1-.23.31,3.88,3.88,0,0,1-1.15.19,2.67,2.67,0,0,1-1.67-.48A1.56,1.56,0,0,1,144,55.6V53.25a1.77,1.77,0,0,0-.42-1.23,1.42,1.42,0,0,0-1.12-.47,1.25,1.25,0,0,0-1,.44,1.78,1.78,0,0,0-.38,1.18v3.69c0,.19-.09.29-.28.29h-1.69a.26.26,0,0,1-.29-.29V53.25a1.85,1.85,0,0,0-.39-1.23,1.3,1.3,0,0,0-1-.47,1.45,1.45,0,0,0-1.1.44,1.65,1.65,0,0,0-.41,1.18v3.69a.26.26,0,0,1-.29.29H134c-.19,0-.28-.1-.28-.29V52.15a.52.52,0,0,0-.59-.59l-.33,0q-.33,0-.33-.24V50.14a.32.32,0,0,1,.23-.33,3,3,0,0,1,1.08-.18,1.88,1.88,0,0,1,1.78.92,3.38,3.38,0,0,1,2.54-.92,2.87,2.87,0,0,1,2.37,1.06,3.3,3.3,0,0,1,2.62-1.06,3.16,3.16,0,0,1,2.37.91,3.26,3.26,0,0,1,.89,2.41v1.93c0,.38.17.57.49.57a1.5,1.5,0,0,0,.46-.05q.31,0,.33.24Z" style="fill:#394149"></path>
                    <path d="M30.46,48.57a13.69,13.69,0,0,1,26.57,0h-1.2a9.69,9.69,0,0,0-5.67,1.73,2.86,2.86,0,0,1-.3.19h-.14a2.86,2.86,0,0,1-.3-.19,10.17,10.17,0,0,0-11.35,0,2.86,2.86,0,0,1-.3.19h-.14a2.86,2.86,0,0,1-.3-.19,9.69,9.69,0,0,0-5.67-1.73Zm23.21,6.27a3.37,3.37,0,0,1,2.16-.71h1.61V50.92H55.83A6.38,6.38,0,0,0,52,52.14a3.64,3.64,0,0,1-4.32,0,6.8,6.8,0,0,0-7.77,0,3.64,3.64,0,0,1-4.32,0,6.38,6.38,0,0,0-3.88-1.22H30.05v3.21h1.61a3.37,3.37,0,0,1,2.16.71,6.78,6.78,0,0,0,7.76,0,3.39,3.39,0,0,1,2.16-.71,3.35,3.35,0,0,1,2.16.71,6.8,6.8,0,0,0,7.77,0Zm0,5.74a3.37,3.37,0,0,1,2.16-.71h1.61V56.66H55.83A6.38,6.38,0,0,0,52,57.88a3.64,3.64,0,0,1-4.32,0,6.8,6.8,0,0,0-7.77,0,3.64,3.64,0,0,1-4.32,0,6.38,6.38,0,0,0-3.88-1.22H30.05v3.21h1.61a3.37,3.37,0,0,1,2.16.71,6.78,6.78,0,0,0,7.76,0,3.39,3.39,0,0,1,2.16-.71,3.35,3.35,0,0,1,2.16.71,6.8,6.8,0,0,0,7.77,0Z" style="fill:#394149"></path>
                </svg>                                     
            </div>
            <div class="col-lg-3 col-sm-6 pb-3 pt-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.78 100" width="177" height="100" fill="none">
                    <title>logo-5</title>
                    <path d="M55.32,42.25h3V56.7h-3Z" style="fill:#394149"></path>
                    <path d="M60,51.75A5.25,5.25,0,1,1,65.22,57,5.18,5.18,0,0,1,60,51.75Zm7.52,0a2.28,2.28,0,1,0-2.28,2.34A2.22,2.22,0,0,0,67.5,51.75Z" style="fill:#394149"></path>
                    <path d="M82.31,46.8v9.41c0,3.32-2.6,4.73-5.23,4.73a5,5,0,0,1-4.69-2.4l2.53-1.46a2.27,2.27,0,0,0,2.26,1.25,2,2,0,0,0,2.24-2.12V55.3a3.53,3.53,0,0,1-2.89,1.28,5,5,0,0,1,0-10,3.53,3.53,0,0,1,2.89,1.28v-1Zm-2.89,4.75a2.4,2.4,0,1,0-2.4,2.3A2.24,2.24,0,0,0,79.42,51.55Z" style="fill:#394149"></path>
                    <path d="M84,51.75A5.25,5.25,0,1,1,89.24,57,5.19,5.19,0,0,1,84,51.75Zm7.52,0a2.28,2.28,0,1,0-2.27,2.34A2.22,2.22,0,0,0,91.51,51.75Z" style="fill:#394149"></path>
                    <path d="M95.87,44.15a1.78,1.78,0,1,1,1.78,1.78A1.8,1.8,0,0,1,95.87,44.15Zm.29,2.65h3v9.9h-3Z" style="fill:#394149"></path>
                    <path d="M112,51.75A5,5,0,0,1,107.23,57a3.72,3.72,0,0,1-3-1.21v4.89h-3V46.8h3v.93a3.71,3.71,0,0,1,3-1.2A5,5,0,0,1,112,51.75Zm-3,0a2.36,2.36,0,1,0-2.35,2.42A2.26,2.26,0,0,0,109,51.75Z" style="fill:#394149"></path>
                    <path d="M121.13,53.73c0,2.28-2,3.25-4.12,3.25a4.34,4.34,0,0,1-4.26-2.36l2.58-1.46A1.62,1.62,0,0,0,117,54.33c.71,0,1.07-.22,1.07-.62,0-1.09-4.87-.51-4.87-3.94,0-2.16,1.82-3.24,3.88-3.24A4.34,4.34,0,0,1,121,48.64L118.42,50a1.46,1.46,0,0,0-1.33-.87c-.52,0-.83.2-.83.55C116.26,50.82,121.13,50.07,121.13,53.73Z" style="fill:#394149"></path>
                    <path d="M132,46.8v9.9h-3v-.93A3.41,3.41,0,0,1,126.18,57c-2,0-3.71-1.43-3.71-4.1V46.8h3v5.65a1.64,1.64,0,0,0,1.73,1.8c1.08,0,1.84-.64,1.84-2V46.8Z" style="fill:#394149"></path>
                    <path d="M149,50.62V56.7h-3V50.88c0-1-.47-1.62-1.42-1.62s-1.55.69-1.55,1.86V56.7h-3V50.88c0-1-.47-1.62-1.42-1.62s-1.55.69-1.55,1.86V56.7h-3V46.8h3v.91a3.06,3.06,0,0,1,2.66-1.18,2.93,2.93,0,0,1,2.59,1.3,3.26,3.26,0,0,1,2.87-1.3C147.52,46.53,149,48.15,149,50.62Z" style="fill:#394149"></path>
                    <path d="M37.45,39.65V35.4H24.05V64.6h13.4V60.35a10.35,10.35,0,0,1,0-20.7Z" style="fill:#394149"></path>
                    <path d="M37.45,39.65v20.7a10.35,10.35,0,0,0,0-20.7Z" style="fill:#394149"></path>
                    <circle cx="151.52" cy="44.54" r="2.2" style="fill:#394149"></circle>
                </svg>                                     
            </div>
            <div class="col-lg-3 col-sm-6 pb-3 pt-3">
                <svg width="177" height="100" viewBox="0 0 177 100" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M89.6756 34.4075C91.0634 33.0198 93.3134 33.0198 94.7012 34.4075C96.089 35.7953 96.089 38.0453 94.7012 39.4331L86.2403 47.894C83.8111 44.6384 84.075 40.0082 87.032 37.0512L89.6756 34.4075Z" fill="#4F9E91"></path> 
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M101.771 53.4967C103.159 54.8844 103.159 57.1345 101.771 58.5222C100.384 59.91 98.1336 59.91 96.7458 58.5222L88.2849 50.0614C91.5405 47.6322 96.1707 47.896 99.1277 50.853L101.771 53.4967Z" fill="#EBE1C5"></path> 
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M82.6821 65.5924C81.2944 66.9802 79.0443 66.9802 77.6566 65.5924C76.2688 64.2046 76.2688 61.9546 77.6566 60.5668L86.1174 52.106C88.5466 55.3616 88.2828 59.9918 85.3258 62.9487L82.6821 65.5924Z" fill="#EBCC6E"></path> 
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M70.5865 46.5032C69.1987 45.1154 69.1987 42.8654 70.5865 41.4776C71.9743 40.0898 74.2243 40.0898 75.6121 41.4776L84.073 49.9385C80.8174 52.3677 76.1871 52.1038 73.2302 49.1469L70.5865 46.5032Z" fill="#ED834E"></path> 
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M87.7849 64.5562C89.8312 62.281 90.7823 59.3697 90.638 56.5033L94.7014 60.5667C94.7115 60.5768 94.7217 60.5869 94.7319 60.597V63.498C94.7319 65.4606 93.1409 67.0516 91.1783 67.0516C89.5842 67.0516 88.2353 66.002 87.7849 64.5562Z" fill="#ED834E"></path> 
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M71.6226 51.6058C73.8977 53.6522 76.809 54.6033 79.6754 54.459L75.6121 58.5224C75.6019 58.5325 75.5918 58.5427 75.5818 58.5528H72.6808C70.7182 58.5529 69.1272 56.9618 69.1272 54.9992C69.1272 53.4052 70.1768 52.0562 71.6226 51.6058Z" fill="#4F9E91"></path> 
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M100.735 48.3942C98.4601 46.3478 95.5488 45.3967 92.6824 45.5409L96.7457 41.4776C96.7559 41.4675 96.7659 41.4573 96.776 41.4471H99.6771C101.64 41.4471 103.231 43.0382 103.231 45.0008C103.231 46.5949 102.181 47.9438 100.735 48.3942Z" fill="#EBCC6E"></path> 
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M84.573 35.4437C82.5266 37.7188 81.5756 40.6301 81.7198 43.4966L77.6565 39.4332C77.6463 39.4231 77.6362 39.413 77.626 39.4029V36.5019C77.626 34.5393 79.217 32.9482 81.1796 32.9482C82.7737 32.9482 84.1226 33.9979 84.573 35.4437Z" fill="#EBE1C5"></path> 
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M81.1798 30.057C77.6204 30.057 74.7349 32.9425 74.7349 36.5019V37.7554C72.5935 37.1959 70.2203 37.7551 68.5422 39.4332C66.0253 41.9501 66.0253 46.0308 68.5422 48.5477L69.4285 49.434C67.5187 50.5526 66.2361 52.6261 66.2361 54.9992C66.2361 58.5586 69.1216 61.4441 72.681 61.4441H73.9344C73.3749 63.5855 73.9341 65.9587 75.6122 67.6367C78.1291 70.1536 82.2098 70.1536 84.7267 67.6367L87.3703 64.9931C89.7024 62.661 90.7916 59.5566 90.6379 56.5032L94.7014 60.5666C97.2183 63.0835 101.299 63.0835 103.816 60.5666C106.333 58.0497 106.333 53.969 103.816 51.4522L102.93 50.566C104.839 49.4474 106.122 47.3739 106.122 45.0008C106.122 41.4414 103.236 38.5559 99.6771 38.5559H98.4236C98.9832 36.4144 98.4239 34.0412 96.7458 32.3631C94.229 29.8462 90.1483 29.8462 87.6314 32.3631L84.9877 35.0068C82.6556 37.3389 81.5664 40.4432 81.7201 43.4966L77.6567 39.4332C77.6465 39.4231 77.6364 39.413 77.6262 39.4029V36.5019C77.6262 34.5393 79.2172 32.9483 81.1798 32.9483C82.7739 32.9483 84.1228 33.9979 84.5732 35.4437C84.7067 35.2953 84.8448 35.1496 84.9876 35.0068L86.745 33.2494C85.6264 31.3396 83.5529 30.057 81.1798 30.057ZM96.7761 41.4472C96.766 41.4573 96.756 41.4675 96.7458 41.4776L92.6825 45.5409C95.549 45.3967 98.4602 46.3477 100.735 48.3942C102.181 47.9438 103.231 46.5948 103.231 45.0008C103.231 43.0382 101.64 41.4472 99.6771 41.4472H96.7761ZM75.5818 58.5528C75.5919 58.5426 75.602 58.5324 75.6122 58.5223L79.6755 54.4589C76.8091 54.6032 73.8979 53.6521 71.6228 51.6058C70.177 52.0562 69.1273 53.4051 69.1273 54.9992C69.1273 56.9618 70.7184 58.5528 72.681 58.5528H75.5818ZM71.512 51.5048C71.4017 51.4029 71.293 51.2984 71.1859 51.1913V51.1914C71.293 51.2985 71.4017 51.4029 71.512 51.5048ZM91.1783 69.943C88.8051 69.943 86.7316 68.6603 85.613 66.7505L87.3703 64.9931C87.5132 64.8503 87.6513 64.7046 87.7848 64.5562C88.2352 66.002 89.5841 67.0517 91.1783 67.0517C93.1409 67.0517 94.7319 65.4607 94.7319 63.4981V60.5971C95.5647 61.419 96.5657 61.9682 97.6232 62.2445V63.4981C97.6232 67.0575 94.7377 69.943 91.1783 69.943ZM94.7014 34.4075C93.3136 33.0198 91.0636 33.0198 89.6758 34.4075L87.0321 37.0512C84.0752 40.0082 83.8113 44.6384 86.2405 47.894L94.7014 39.4331C96.0892 38.0453 96.0892 35.7953 94.7014 34.4075ZM101.771 58.5222C103.159 57.1344 103.159 54.8844 101.771 53.4966L99.1277 50.8529C96.1708 47.896 91.5405 47.6321 88.2849 50.0613L96.7458 58.5222C98.1336 59.91 100.384 59.91 101.771 58.5222ZM82.6822 65.5923C81.2944 66.9801 79.0444 66.9801 77.6566 65.5923C76.2689 64.2045 76.2689 61.9545 77.6566 60.5667L86.1175 52.1058C88.5467 55.3614 88.2828 59.9917 85.3259 62.9486L82.6822 65.5923ZM70.5866 41.4776C69.1989 42.8654 69.1989 45.1154 70.5866 46.5032L73.2303 49.1469C76.1873 52.1038 80.8175 52.3677 84.0731 49.9385L75.6122 41.4776C74.2244 40.0899 71.9744 40.0899 70.5866 41.4776Z" fill="#3D3A2C"></path> 
                    <path d="M18.5327 43.0898H21.6933V52.911H27.1217V55.5716H18.5327V43.0898Z" fill="#3D3A2C"></path> 
                    <path d="M32.8603 55.8395C31.8008 55.8395 30.8722 55.649 30.0746 55.2681C29.277 54.8752 28.658 54.3395 28.2175 53.661C27.789 52.9705 27.5747 52.1789 27.5747 51.286C27.5747 50.3932 27.789 49.6075 28.2175 48.929C28.658 48.2385 29.277 47.7028 30.0746 47.3219C30.8722 46.929 31.8008 46.7326 32.8603 46.7326C33.9198 46.7326 34.8483 46.929 35.6459 47.3219C36.4435 47.7028 37.0566 48.2385 37.4851 48.929C37.9256 49.6075 38.1458 50.3932 38.1458 51.286C38.1458 52.1789 37.9256 52.9705 37.4851 53.661C37.0566 54.3395 36.4435 54.8752 35.6459 55.2681C34.8483 55.649 33.9198 55.8395 32.8603 55.8395ZM32.8603 53.3931C33.4912 53.3931 33.9912 53.2086 34.3602 52.8396C34.7412 52.4586 34.9316 51.9408 34.9316 51.286C34.9316 50.6313 34.7412 50.1194 34.3602 49.7504C33.9912 49.3694 33.4912 49.179 32.8603 49.179C32.2293 49.179 31.7234 49.3694 31.3425 49.7504C30.9734 50.1194 30.7889 50.6313 30.7889 51.286C30.7889 51.9408 30.9734 52.4586 31.3425 52.8396C31.7234 53.2086 32.2293 53.3931 32.8603 53.3931Z" fill="#3D3A2C"></path> 
                    <path d="M44.0492 59.6787C43.4778 59.6787 42.9004 59.6251 42.3171 59.518C41.7457 59.4108 41.2516 59.268 40.835 59.0894V56.9109C41.7754 57.3156 42.8468 57.518 44.0492 57.518C44.9182 57.518 45.5432 57.3394 45.9241 56.9823C46.317 56.6252 46.5134 56.1014 46.5134 55.4109V54.8931C46.1682 55.1907 45.7396 55.4228 45.2277 55.5895C44.7277 55.7562 44.192 55.8395 43.6206 55.8395C42.7159 55.8395 41.9183 55.649 41.2278 55.2681C40.5374 54.8871 39.9957 54.3514 39.6029 53.661C39.2219 52.9705 39.0315 52.1789 39.0315 51.286C39.0315 50.3813 39.2219 49.5837 39.6029 48.8933C39.9838 48.2028 40.5195 47.673 41.21 47.304C41.9004 46.9231 42.6921 46.7326 43.5849 46.7326C44.8111 46.7326 45.8229 47.1076 46.6205 47.8576V47.0004H49.6562V54.9824C49.6562 56.4704 49.1978 57.6252 48.2812 58.4466C47.3765 59.268 45.9658 59.6787 44.0492 59.6787ZM44.4063 53.411C44.8944 53.411 45.3289 53.286 45.7098 53.036C46.0908 52.786 46.3586 52.4527 46.5134 52.036V50.5361C46.3467 50.1194 46.0729 49.792 45.692 49.5539C45.311 49.304 44.8825 49.179 44.4063 49.179C43.7635 49.179 43.2456 49.3694 42.8528 49.7504C42.4599 50.1194 42.2635 50.6253 42.2635 51.2682C42.2635 51.9229 42.4599 52.4467 42.8528 52.8396C43.2456 53.2205 43.7635 53.411 44.4063 53.411Z" fill="#3D3A2C"></path> 
                    <path d="M55.739 55.8395C54.6795 55.8395 53.751 55.649 52.9534 55.2681C52.1558 54.8752 51.5367 54.3395 51.0963 53.661C50.6677 52.9705 50.4534 52.1789 50.4534 51.286C50.4534 50.3932 50.6677 49.6075 51.0963 48.929C51.5367 48.2385 52.1558 47.7028 52.9534 47.3219C53.751 46.929 54.6795 46.7326 55.739 46.7326C56.7985 46.7326 57.727 46.929 58.5246 47.3219C59.3222 47.7028 59.9353 48.2385 60.3639 48.929C60.8043 49.6075 61.0246 50.3932 61.0246 51.286C61.0246 52.1789 60.8043 52.9705 60.3639 53.661C59.9353 54.3395 59.3222 54.8752 58.5246 55.2681C57.727 55.649 56.7985 55.8395 55.739 55.8395ZM55.739 53.3931C56.3699 53.3931 56.8699 53.2086 57.239 52.8396C57.6199 52.4586 57.8104 51.9408 57.8104 51.286C57.8104 50.6313 57.6199 50.1194 57.239 49.7504C56.8699 49.3694 56.3699 49.179 55.739 49.179C55.1081 49.179 54.6021 49.3694 54.2212 49.7504C53.8521 50.1194 53.6676 50.6313 53.6676 51.286C53.6676 51.9408 53.8521 52.4586 54.2212 52.8396C54.6021 53.2086 55.1081 53.3931 55.739 53.3931Z" fill="#3D3A2C"></path> 
                    <path d="M111.432 43.0898H114.593V55.5716H111.432V43.0898Z" fill="#3D3A2C"></path> 
                    <path d="M116.193 47.0004H119.229V47.8576C120.026 47.1076 121.038 46.7326 122.264 46.7326C123.157 46.7326 123.949 46.9231 124.639 47.304C125.33 47.673 125.865 48.2028 126.246 48.8933C126.627 49.5718 126.818 50.3635 126.818 51.2682C126.818 52.161 126.627 52.9586 126.246 53.661C125.865 54.3514 125.33 54.8871 124.639 55.2681C123.961 55.649 123.169 55.8395 122.264 55.8395C121.693 55.8395 121.145 55.7502 120.622 55.5716C120.11 55.405 119.681 55.1728 119.336 54.8752V59.4822H116.193V47.0004ZM121.443 53.3931C122.086 53.3931 122.604 53.2027 122.996 52.8217C123.389 52.4408 123.586 51.9229 123.586 51.2682C123.586 50.6134 123.389 50.1016 122.996 49.7325C122.604 49.3516 122.086 49.1611 121.443 49.1611C120.967 49.1611 120.538 49.2861 120.157 49.5361C119.776 49.7742 119.503 50.1016 119.336 50.5182V52.036C119.503 52.4527 119.776 52.786 120.157 53.036C120.538 53.2741 120.967 53.3931 121.443 53.3931Z" fill="#3D3A2C"></path> 
                    <path d="M131.503 55.8395C130.813 55.8395 130.093 55.7681 129.343 55.6252C128.593 55.4943 127.997 55.3038 127.557 55.0538V52.7503C128.045 53.036 128.628 53.2741 129.307 53.4646C129.997 53.6431 130.628 53.7324 131.2 53.7324C131.616 53.7324 131.92 53.7026 132.11 53.6431C132.301 53.5836 132.396 53.4646 132.396 53.286C132.396 53.1431 132.331 53.03 132.2 52.9467C132.081 52.8515 131.854 52.7562 131.521 52.661C131.2 52.5539 130.825 52.4408 130.396 52.3217C129.67 52.1074 129.099 51.8872 128.682 51.661C128.265 51.4348 127.956 51.1491 127.753 50.8039C127.551 50.4587 127.45 50.0242 127.45 49.5004C127.45 48.5718 127.813 47.8814 128.539 47.429C129.277 46.9647 130.283 46.7326 131.557 46.7326C132.176 46.7326 132.825 46.7981 133.503 46.929C134.194 47.06 134.711 47.2326 135.057 47.4469V49.7147C134.7 49.4766 134.223 49.2801 133.628 49.1254C133.045 48.9706 132.497 48.8933 131.985 48.8933C131.581 48.8933 131.265 48.9349 131.039 49.0182C130.813 49.0897 130.7 49.2206 130.7 49.4111C130.7 49.5897 130.813 49.7266 131.039 49.8218C131.265 49.917 131.67 50.0361 132.253 50.1789C132.634 50.2742 132.795 50.3158 132.735 50.3039C133.497 50.5063 134.086 50.7325 134.503 50.9825C134.92 51.2325 135.211 51.5301 135.378 51.8753C135.557 52.2086 135.646 52.6372 135.646 53.161C135.646 53.9824 135.289 54.6371 134.575 55.1252C133.872 55.6014 132.848 55.8395 131.503 55.8395Z" fill="#3D3A2C"></path> 
                    <path d="M140.338 55.8395C139.16 55.8395 138.273 55.5121 137.678 54.8574C137.095 54.2026 136.803 53.3396 136.803 52.2682V47.0004H139.946V51.911C139.946 52.8991 140.392 53.3931 141.285 53.3931C141.69 53.3931 142.059 53.2979 142.392 53.1074C142.725 52.9169 142.999 52.6372 143.213 52.2682V47.0004H146.356V55.5716H143.321V54.6431C142.952 55.0359 142.505 55.3335 141.981 55.5359C141.458 55.7383 140.91 55.8395 140.338 55.8395Z" fill="#3D3A2C"></path> 
                    <path d="M147.965 47.0004H150.876V47.929C151.233 47.5481 151.644 47.2564 152.108 47.054C152.572 46.8397 153.066 46.7326 153.59 46.7326C154.233 46.7326 154.745 46.8278 155.126 47.0183C155.519 47.2088 155.834 47.4945 156.072 47.8754C156.429 47.5183 156.864 47.2385 157.376 47.0362C157.888 46.8338 158.406 46.7326 158.929 46.7326C160.06 46.7326 160.864 47.0243 161.34 47.6076C161.816 48.179 162.054 49.0063 162.054 50.0896V55.5716H159.054V50.5361C159.054 50.0599 158.965 49.7147 158.786 49.5004C158.608 49.2861 158.31 49.179 157.894 49.179C157.358 49.179 156.923 49.3694 156.59 49.7504C156.602 49.9527 156.608 50.2623 156.608 50.6789V55.5716H153.608V50.4111C153.608 49.9706 153.531 49.6551 153.376 49.4647C153.221 49.2742 152.947 49.179 152.555 49.179C151.947 49.179 151.424 49.5182 150.983 50.1968V55.5716H147.965V47.0004Z" fill="#3D3A2C"></path> 
                </svg>                                     
            </div>
            <div class="col-lg-3 col-sm-6 pb-3 pt-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.778 100" height="100" width="177" fill="none">
                    <path d="M41.419,48.371A3.656,3.656,0,0,0,40.373,51.3l-.018-.018a4.344,4.344,0,0,1-4.694,4.694l.018.018A3.678,3.678,0,1,0,39,59.312l.019.018a4.344,4.344,0,0,1,4.694-4.694l-.019-.018a3.671,3.671,0,1,0-2.272-6.247Z" fill="#394149"></path>
                    <path d="M34.042,53.636l-.019-.018A3.631,3.631,0,0,0,38,49.644l.019.018a4.344,4.344,0,0,1,4.694-4.694l-.019-.018a3.678,3.678,0,1,0-3.318-3.318l-.018-.019a4.343,4.343,0,0,1-4.694,4.694l.018.019A3.631,3.631,0,0,0,30.705,50.3l-.018-.018a4.345,4.345,0,0,1-4.694,4.694l.018.018a3.678,3.678,0,1,0,3.318,3.318l.019.018A4.344,4.344,0,0,1,34.042,53.636Z" fill="#394149"></path>
                    <path d="M27.34,51.629A3.652,3.652,0,0,0,28.385,48.7l.019.018A4.344,4.344,0,0,1,33.1,44.024l-.019-.018a3.677,3.677,0,1,0-3.318-3.318l-.018-.018a4.344,4.344,0,0,1-4.694,4.694l.018.018a3.671,3.671,0,1,0,2.273,6.247Z" fill="#394149"></path>
                    <path d="M58.317,41.655h2.97V56.108h-2.97Z" fill="#394149"></path>
                    <path d="M62.969,51.159a5.247,5.247,0,1,1,5.247,5.226A5.188,5.188,0,0,1,62.969,51.159Zm7.524,0A2.278,2.278,0,1,0,68.216,53.5,2.221,2.221,0,0,0,70.493,51.159Z" fill="#394149"></path>
                    <path d="M85.3,46.209v9.4c0,3.326-2.594,4.732-5.227,4.732a5.062,5.062,0,0,1-4.692-2.4l2.534-1.465a2.262,2.262,0,0,0,2.257,1.247,1.973,1.973,0,0,0,2.237-2.118V54.7a3.516,3.516,0,0,1-2.891,1.287,5.031,5.031,0,0,1,0-10.057,3.516,3.516,0,0,1,2.891,1.287v-1.01ZM82.41,50.96a2.4,2.4,0,1,0-2.395,2.3A2.24,2.24,0,0,0,82.41,50.96Z" fill="#394149"></path>
                    <path d="M86.982,51.159a5.247,5.247,0,1,1,5.247,5.226A5.188,5.188,0,0,1,86.982,51.159Zm7.524,0A2.278,2.278,0,1,0,92.229,53.5,2.221,2.221,0,0,0,94.506,51.159Z" fill="#394149"></path>
                    <path d="M98.861,43.556a1.782,1.782,0,1,1,1.782,1.782A1.8,1.8,0,0,1,98.861,43.556Zm.3,2.653h2.971v9.9H99.157Z" fill="#394149"></path>
                    <path d="M114.956,51.159a4.971,4.971,0,0,1-4.732,5.226,3.715,3.715,0,0,1-2.949-1.208v4.891h-2.97V46.209h2.97v.93a3.717,3.717,0,0,1,2.949-1.207A4.97,4.97,0,0,1,114.956,51.159Zm-2.97,0a2.356,2.356,0,1,0-2.355,2.415A2.26,2.26,0,0,0,111.986,51.159Z" fill="#394149"></path>
                    <path d="M124.121,53.138c0,2.277-1.979,3.247-4.117,3.247a4.335,4.335,0,0,1-4.257-2.356l2.573-1.465A1.627,1.627,0,0,0,120,53.732c.712,0,1.069-.218,1.069-.613,0-1.09-4.871-.515-4.871-3.94,0-2.159,1.822-3.247,3.881-3.247a4.329,4.329,0,0,1,3.86,2.118l-2.534,1.366a1.437,1.437,0,0,0-1.326-.871c-.515,0-.832.2-.832.554C119.251,50.228,124.121,49.475,124.121,53.138Z" fill="#394149"></path>
                    <path d="M134.97,46.209v9.9H132v-.931a3.382,3.382,0,0,1-2.83,1.208c-2,0-3.7-1.425-3.7-4.1V46.209h2.97v5.642a1.632,1.632,0,0,0,1.722,1.8c1.089,0,1.841-.633,1.841-2.039v-5.4Z" fill="#394149"></path>
                    <path d="M152,50.03v6.078h-2.97V50.287c0-.99-.475-1.623-1.425-1.623-.99,0-1.545.693-1.545,1.861v5.583h-2.969V50.287c0-.99-.475-1.623-1.426-1.623-.99,0-1.544.693-1.544,1.861v5.583h-2.97v-9.9h2.97v.91a3.039,3.039,0,0,1,2.653-1.187,2.945,2.945,0,0,1,2.593,1.306,3.262,3.262,0,0,1,2.871-1.306C150.511,45.932,152,47.555,152,50.03Z" fill="#394149"></path>
                    <circle cx="154.512" cy="43.944" r="2.204" fill="#394149"></circle>
                </svg>                                     
            </div>
            <div class="col-lg-3 col-sm-6 pb-3 pt-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.778 100" height="100" width="177" fill="none">
                    <path d="M40.99,58.759,23.05,46.384c-1.818-1.254-1.2-3.865,1.067-4.479L43.184,36.73A2.7,2.7,0,0,1,46.8,39.222L45.67,56.771C45.536,58.854,42.808,60.013,40.99,58.759Z" fill="#e9327c"></path>
                    <path d="M35.3,61.814,24.731,41.145a2.883,2.883,0,0,1,3.007-4.161l19.587,3.023a2.883,2.883,0,0,1,2.127,4.162L40.429,61.815A2.883,2.883,0,0,1,35.3,61.814Z" fill="#1dace3"></path>
                    <path d="M46.752,39.918l-9.764-1.507L25,41.666l4.785,9.361L40.99,58.759a2.888,2.888,0,0,0,.806.383l4.256-8.323Z" fill="#001a49"></path>
                    <path d="M96.209,42.334a1.835,1.835,0,1,1,1.835,1.835A1.854,1.854,0,0,1,96.209,42.334Zm.306,2.732h3.059V55.26H96.515Z" fill="#001a49"></path>
                    <path d="M112.784,50.163a5.119,5.119,0,0,1-4.872,5.383,3.829,3.829,0,0,1-3.038-1.244v5.036h-3.058V45.066h3.058v.958a3.829,3.829,0,0,1,3.038-1.243A5.118,5.118,0,0,1,112.784,50.163Zm-3.058,0a2.427,2.427,0,1,0-2.426,2.488A2.327,2.327,0,0,0,109.726,50.163Z" fill="#001a49"></path>
                    <path d="M122.223,52.2c0,2.345-2.039,3.344-4.241,3.344a4.463,4.463,0,0,1-4.383-2.427l2.65-1.508a1.675,1.675,0,0,0,1.733,1.2c.734,0,1.1-.225,1.1-.632,0-1.122-5.015-.53-5.015-4.058,0-2.222,1.875-3.343,4-3.343a4.46,4.46,0,0,1,3.975,2.181l-2.609,1.407a1.481,1.481,0,0,0-1.366-.9c-.53,0-.856.2-.856.571C117.208,49.205,122.223,48.43,122.223,52.2Z" fill="#001a49"></path>
                    <path d="M133.4,45.066V55.26h-3.058V54.3a3.489,3.489,0,0,1-2.916,1.244c-2.059,0-3.812-1.468-3.812-4.221V45.066h3.058v5.811a1.681,1.681,0,0,0,1.774,1.855c1.121,0,1.9-.652,1.9-2.1V45.066Z" fill="#001a49"></path>
                    <path d="M150.928,49V55.26H147.87V49.266c0-1.019-.49-1.672-1.468-1.672-1.02,0-1.59.714-1.59,1.917V55.26h-3.059V49.266c0-1.019-.489-1.672-1.468-1.672-1.019,0-1.59.714-1.59,1.917V55.26h-3.058V45.066H138.7V46a3.129,3.129,0,0,1,2.732-1.223,3.034,3.034,0,0,1,2.671,1.345,3.359,3.359,0,0,1,2.957-1.345C149.4,44.781,150.928,46.452,150.928,49Z" fill="#001a49"></path>
                    <circle cx="153.519" cy="42.733" r="2.27" fill="#001a49"></circle>
                    <path d="M54.457,40.377h3.059V55.26H54.457Zm4.791,9.786a5.4,5.4,0,1,1,5.4,5.383A5.343,5.343,0,0,1,59.248,50.163Zm7.748,0a2.345,2.345,0,1,0-2.345,2.406A2.287,2.287,0,0,0,67,50.163Zm15.249-5.1v9.685c0,3.425-2.671,4.872-5.382,4.872a5.212,5.212,0,0,1-4.832-2.467l2.609-1.509a2.331,2.331,0,0,0,2.325,1.285,2.032,2.032,0,0,0,2.3-2.181v-.938a3.622,3.622,0,0,1-2.977,1.325,5.181,5.181,0,0,1,0-10.357,3.622,3.622,0,0,1,2.977,1.325v-1.04Zm-2.976,4.893A2.47,2.47,0,1,0,76.8,52.325,2.308,2.308,0,0,0,79.269,49.959Zm4.708.2a5.4,5.4,0,1,1,5.4,5.383A5.343,5.343,0,0,1,83.977,50.163Zm7.748,0a2.346,2.346,0,1,0-2.345,2.406A2.287,2.287,0,0,0,91.725,50.163Z" fill="#001a49"></path>
                </svg>                                     
            </div>                                 
        </div>                             
    </div>
</section>                
`,
});

Vvveb.Blocks.add("bootstrap5/footer", {
    name: "Footer",
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