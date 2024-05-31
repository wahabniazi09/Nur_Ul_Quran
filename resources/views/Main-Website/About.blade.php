@extends('Main-Website.Components.Master')

@section('Content')

@include('Main-Website.Components.Navbar')

<section class="bannr-section" style="background-image: url(assets/img/bannr-img.jpg);">
    <div class="container">
        <div class="bannr-text">
            <img src="assets/img/heading-img.png" alt="icon">
            <h2>About</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </div>
    </div>
</section>

@include('Main-Website.Components.Islamic-Center')

<section class="gap no-top">
    <div class="container">
        <div class="fun-facts">
            <div class="islamic-mosque" style="background-image: url(assets/img/color-bg.jpg);">
                <div class="count-style">
                  <h2 data-max="62" class="ms-animated">62<sup>+</sup></h2>
                </div>
                <h5>Islamic Mosque</h5>
                <img src="assets/img/fun-facts-1.png" alt="fun-facts">
            </div>
            <div class="islamic-mosque" style="background-image: url(assets/img/color-bg.jpg);">
                <div class="count-style">
                  <h2 data-max="14" class="ms-animated">14<sup>K</sup></h2>
                </div>
                <h5>Learning Students</h5>
                <img src="assets/img/fun-facts-2.png" alt="fun-facts">
            </div>
            <div class="islamic-mosque" style="background-image: url(assets/img/color-bg.jpg);">
                <div class="count-style">
                  <h2 data-max="317" class="ms-animated">317<sup>+</sup></h2>
                </div>
                <h5>Inspirational Courses</h5>
                <img src="assets/img/fun-facts-3.png" alt="fun-facts">
            </div>
            <div class="islamic-mosque" style="background-image: url(assets/img/color-bg.jpg);">
                <div class="count-style">
                  <h2 data-max="26" class="ms-animated">26<sup>+</sup></h2>
                </div>
                <h5>Islamic Scholars</h5>
                <img src="assets/img/fun-facts-4.png" alt="fun-facts">
            </div>
        </div>
    </div>
</section>

<section class="gap our-courses-section" style="background-image: url(assets/img/courses-back.png);">
    <div class="container">
        <div class="heading">
            <img src="assets/img/heading-img.png" alt="icon">
            <p>a religious scholar</p>
            <h2>Islamic Scholars </h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="scholars">
                    <div class="opening-time hoverimg">
                        <figure>
                            <img src="assets/img/islamic-scholars-1.jpg" alt="img">
                        </figure>
                        <div class="opening-time-text">
                            <h3><a href="#">Molana Rehman</a></h3>
                            <span>Islamic Speaker</span>
                            <a href="callto:+(00)123-345-11"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M442.77,80.93l.27-.27-9.39-9a256,256,0,0,0-351.8-3.23h0l-.29.28-9.43,8.77.23.23A257,257,0,0,0,0,256V480a32,32,0,0,0,32,32H94.4a59.2,59.2,0,0,0,59.2-59.2v-112a59.2,59.2,0,0,0-59.2-59.2H25.6V256A231.25,231.25,0,0,1,90.48,95.78l6.95,6.95c15.42,15.41,39.38,17.79,56.95,5.66a179.16,179.16,0,0,1,206,2,44.07,44.07,0,0,0,25.82,8.34,45.65,45.65,0,0,0,32.29-13.53L424.66,99A228.56,228.56,0,0,1,486.4,256v25.6H417.6a59.2,59.2,0,0,0-59.2,59.2v112A59.2,59.2,0,0,0,417.6,512H480a32,32,0,0,0,32-32V256A254,254,0,0,0,442.77,80.93ZM76.8,307.2H94.4A33.64,33.64,0,0,1,128,340.8v112a33.64,33.64,0,0,1-33.6,33.6H76.8Zm-25.6,0V486.4H32a6.41,6.41,0,0,1-6.4-6.4V307.2ZM400.41,87.09c-6.81,6.82-17.59,7.91-25.06,2.51a204.77,204.77,0,0,0-235.51-2.3c-7.42,5.13-17.65,4-24.31-2.68l-6.26-6.26a230.51,230.51,0,0,1,297,2.89ZM435.2,486.4H417.6A33.64,33.64,0,0,1,384,452.8v-112a33.64,33.64,0,0,1,33.6-33.6h17.6Zm51.2-6.4a6.41,6.41,0,0,1-6.4,6.4H460.8V307.2h25.6V480Z"/></svg>+(00) 123-345-11</a>
                        </div>
                    </div>
                    <div class="share-nodes">
                        <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                        <ul class="social-media">
                            <li><a href="#"><i class="fab fa-facebook-f icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter icon"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="scholars">
                    <div class="opening-time hoverimg">
                        <figure>
                            <img src="assets/img/islamic-scholars-2.jpg" alt="img">
                        </figure>
                        <div class="opening-time-text">
                            <h3><a href="#">Bibi Sheribano</a></h3>
                            <span>Islamic Speaker</span>
                            <a href="callto:+(00)123-345-11"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M442.77,80.93l.27-.27-9.39-9a256,256,0,0,0-351.8-3.23h0l-.29.28-9.43,8.77.23.23A257,257,0,0,0,0,256V480a32,32,0,0,0,32,32H94.4a59.2,59.2,0,0,0,59.2-59.2v-112a59.2,59.2,0,0,0-59.2-59.2H25.6V256A231.25,231.25,0,0,1,90.48,95.78l6.95,6.95c15.42,15.41,39.38,17.79,56.95,5.66a179.16,179.16,0,0,1,206,2,44.07,44.07,0,0,0,25.82,8.34,45.65,45.65,0,0,0,32.29-13.53L424.66,99A228.56,228.56,0,0,1,486.4,256v25.6H417.6a59.2,59.2,0,0,0-59.2,59.2v112A59.2,59.2,0,0,0,417.6,512H480a32,32,0,0,0,32-32V256A254,254,0,0,0,442.77,80.93ZM76.8,307.2H94.4A33.64,33.64,0,0,1,128,340.8v112a33.64,33.64,0,0,1-33.6,33.6H76.8Zm-25.6,0V486.4H32a6.41,6.41,0,0,1-6.4-6.4V307.2ZM400.41,87.09c-6.81,6.82-17.59,7.91-25.06,2.51a204.77,204.77,0,0,0-235.51-2.3c-7.42,5.13-17.65,4-24.31-2.68l-6.26-6.26a230.51,230.51,0,0,1,297,2.89ZM435.2,486.4H417.6A33.64,33.64,0,0,1,384,452.8v-112a33.64,33.64,0,0,1,33.6-33.6h17.6Zm51.2-6.4a6.41,6.41,0,0,1-6.4,6.4H460.8V307.2h25.6V480Z"/></svg>+(00) 123-345-11</a>
                        </div>
                    </div>
                    <div class="share-nodes">
                        <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                        <ul class="social-media">
                            <li><a href="#"><i class="fab fa-facebook-f icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter icon"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="scholars">
                    <div class="opening-time hoverimg">
                        <figure>
                            <img src="assets/img/islamic-scholars-3.jpg" alt="img">
                        </figure>
                        <div class="opening-time-text">
                            <h3><a href="#">Mokhti Ibrahim</a></h3>
                            <span>Islamic Speaker</span>
                            <a href="callto:+(00)123-345-11"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M442.77,80.93l.27-.27-9.39-9a256,256,0,0,0-351.8-3.23h0l-.29.28-9.43,8.77.23.23A257,257,0,0,0,0,256V480a32,32,0,0,0,32,32H94.4a59.2,59.2,0,0,0,59.2-59.2v-112a59.2,59.2,0,0,0-59.2-59.2H25.6V256A231.25,231.25,0,0,1,90.48,95.78l6.95,6.95c15.42,15.41,39.38,17.79,56.95,5.66a179.16,179.16,0,0,1,206,2,44.07,44.07,0,0,0,25.82,8.34,45.65,45.65,0,0,0,32.29-13.53L424.66,99A228.56,228.56,0,0,1,486.4,256v25.6H417.6a59.2,59.2,0,0,0-59.2,59.2v112A59.2,59.2,0,0,0,417.6,512H480a32,32,0,0,0,32-32V256A254,254,0,0,0,442.77,80.93ZM76.8,307.2H94.4A33.64,33.64,0,0,1,128,340.8v112a33.64,33.64,0,0,1-33.6,33.6H76.8Zm-25.6,0V486.4H32a6.41,6.41,0,0,1-6.4-6.4V307.2ZM400.41,87.09c-6.81,6.82-17.59,7.91-25.06,2.51a204.77,204.77,0,0,0-235.51-2.3c-7.42,5.13-17.65,4-24.31-2.68l-6.26-6.26a230.51,230.51,0,0,1,297,2.89ZM435.2,486.4H417.6A33.64,33.64,0,0,1,384,452.8v-112a33.64,33.64,0,0,1,33.6-33.6h17.6Zm51.2-6.4a6.41,6.41,0,0,1-6.4,6.4H460.8V307.2h25.6V480Z"/></svg>+(00) 123-345-11</a>
                        </div>
                    </div>
                    <div class="share-nodes">
                        <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                        <ul class="social-media">
                            <li><a href="#"><i class="fab fa-facebook-f icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter icon"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="scholars mb-0">
                    <div class="opening-time hoverimg">
                        <figure>
                            <img src="assets/img/islamic-scholars-4.jpg" alt="img">
                        </figure>
                        <div class="opening-time-text">
                            <h3><a href="#">Zahra Batool</a></h3>
                            <span>Islamic Speaker</span>
                            <a href="callto:+(00)123-345-11"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M442.77,80.93l.27-.27-9.39-9a256,256,0,0,0-351.8-3.23h0l-.29.28-9.43,8.77.23.23A257,257,0,0,0,0,256V480a32,32,0,0,0,32,32H94.4a59.2,59.2,0,0,0,59.2-59.2v-112a59.2,59.2,0,0,0-59.2-59.2H25.6V256A231.25,231.25,0,0,1,90.48,95.78l6.95,6.95c15.42,15.41,39.38,17.79,56.95,5.66a179.16,179.16,0,0,1,206,2,44.07,44.07,0,0,0,25.82,8.34,45.65,45.65,0,0,0,32.29-13.53L424.66,99A228.56,228.56,0,0,1,486.4,256v25.6H417.6a59.2,59.2,0,0,0-59.2,59.2v112A59.2,59.2,0,0,0,417.6,512H480a32,32,0,0,0,32-32V256A254,254,0,0,0,442.77,80.93ZM76.8,307.2H94.4A33.64,33.64,0,0,1,128,340.8v112a33.64,33.64,0,0,1-33.6,33.6H76.8Zm-25.6,0V486.4H32a6.41,6.41,0,0,1-6.4-6.4V307.2ZM400.41,87.09c-6.81,6.82-17.59,7.91-25.06,2.51a204.77,204.77,0,0,0-235.51-2.3c-7.42,5.13-17.65,4-24.31-2.68l-6.26-6.26a230.51,230.51,0,0,1,297,2.89ZM435.2,486.4H417.6A33.64,33.64,0,0,1,384,452.8v-112a33.64,33.64,0,0,1,33.6-33.6h17.6Zm51.2-6.4a6.41,6.41,0,0,1-6.4,6.4H460.8V307.2h25.6V480Z"/></svg>+(00) 123-345-11</a>
                        </div>
                    </div>
                    <div class="share-nodes">
                        <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                        <ul class="social-media">
                            <li><a href="#"><i class="fab fa-facebook-f icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter icon"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('Main-Website.Components.Holy-Quran')

<section class="gap">
    <div class="container">
        <div class="heading">
            <img src="assets/img/heading-img.png" alt="icon">
            <p>Serving Humanity</p>
            <h2>Our Services</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="service">
                    <img src="assets/img/service-icon-1.png" alt="img">
                    <a href="#">Hajj & Umrah</a>
                    <p>Lorem ipsum dolor sit amet, cons mod tempor incididunt ut labo e minim veniam.</p>
                </div>
                <div class="service">
                    <img src="assets/img/service-icon-2.png" alt="img">
                    <a href="#">Islamic Marriage</a>
                    <p>Lorem ipsum dolor sit amet, cons mod tempor incididunt ut labo e minim veniam.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="video position-relative">
                    <a data-fancybox="" href="https://www.youtube.com/watch?v=xKxrkht7CpY">
                        <i>
                          <svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11 8.49951L0.5 0.27227L0.5 16.7268L11 8.49951Z" fill="#000"></path>
                          </svg>
                        </i>
                    </a>
                    <img src="assets/img/video-img.jpg" alt="img">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service">
                    <img src="assets/img/service-icon-3.png" alt="img">
                    <a href="#">Islam Education</a>
                    <p>Lorem ipsum dolor sit amet, cons mod tempor incididunt ut labo e minim veniam.</p>
                </div>
                <div class="service">
                    <img src="assets/img/service-icon-4.png" alt="img">
                    <a href="#">Funeral Prayer</a>
                    <p>Lorem ipsum dolor sit amet, cons mod tempor incididunt ut labo e minim veniam.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="islamic-ayat">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="heading">
                    <p>Quranic Verses With Translation</p>
                    <h2>Islamic ayat with translation</h2>
                </div>
                <div class="slider-ayat owl-carousel">
                    <div class="ayat item">
                        <img src="assets/img/ayat.png" alt="ayat">
                        <h4>O you who  have believed, Seek help through patience and prayers.</h4>
                        <h5>Al-Baqrah (2) : 153</h5>
                    </div>
                    <div class="ayat item">
                        <img src="assets/img/ayat.png" alt="ayat">
                        <h4>O you who  have believed, Seek help through patience and prayers.</h4>
                        <h5>Al-Baqrah (9) : 153</h5>
                    </div>
                    <div class="ayat item">
                        <img src="assets/img/ayat.png" alt="ayat">
                        <h4>O you who  have believed, Seek help through patience and prayers.</h4>
                        <h5>Al-Baqrah (1) : 153</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ayat-img">
                    <img src="assets/img/ayat-with-man.png" alt="img">
                </div>
            </div>
        </div>
    </div>
    <img src="assets/img/ayat-with.jpg" class="ayat-with-img" alt="ayat-with">
</section>

@include('Main-Website.Components.Footer')

@endsection

  