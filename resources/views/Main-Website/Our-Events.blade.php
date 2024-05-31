@extends('Main-Website.Components.Master')

@section('Content')

@include('Main-Website.Components.Navbar')

<section class="bannr-section" style="background-image: url(assets/img/bannr-img.jpg);">
    <div class="container">
        <div class="bannr-text">
            <img src="assets/img/heading-img.png" alt="icon">
            <h2>Our Events</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
                <li class="breadcrumb-item active" aria-current="page">Upcoming Events</li>
            </ol>
        </div>
    </div>
</section>

<section class="gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="upcoming-event hoverimg">
                    <figure>
                        <img src="assets/img/upcoming-event-img-1.jpg" alt="upcoming-event-img">
                    </figure>
                    <div class="upcoming-text">
                        <h4><a href="#">Navigating Life's Journey with Faith</a></h4>
                        <div class="location">
                            <i class="fa-regular fa-clock"></i>
                            <span>Dec 25, 2024 @5:00 PM</span>
                        </div>
                        <div class="location">
                            <i>
                                <svg width="24px" height="24px" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" >
                                    <g transform="translate(-104.000000, -411.000000)" fill="#fbc50b">
                                        <path d="M116,426 C114.343,426 113,424.657 113,423 C113,421.343 114.343,420 116,420 C117.657,420 119,421.343 119,423 C119,424.657 117.657,426 116,426 L116,426 Z M116,418 C113.239,418 111,420.238 111,423 C111,425.762 113.239,428 116,428 C118.761,428 121,425.762 121,423 C121,420.238 118.761,418 116,418 L116,418 Z M116,440 C114.337,440.009 106,427.181 106,423 C106,417.478 110.477,413 116,413 C121.523,413 126,417.478 126,423 C126,427.125 117.637,440.009 116,440 L116,440 Z M116,411 C109.373,411 104,416.373 104,423 C104,428.018 114.005,443.011 116,443 C117.964,443.011 128,427.95 128,423 C128,416.373 122.627,411 116,411 L116,411 Z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            </i><span>Town 21, United State</span>
                        </div>
                        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="upcoming-event hoverimg">
                    <figure>
                        <img src="assets/img/upcoming-event-img-2.jpg" alt="upcoming-event-img">
                    </figure>
                    <div id="countdown">
                        <ul>
                          <li><span id="days"></span>days</li>
                          <li><span id="hours"></span>Hour</li>
                          <li><span id="minutes"></span>Min</li>
                          <li class="mb-0"><span id="seconds"></span>Sec</li>
                        </ul>
                    </div>
                    <div class="upcoming-text">
                        <h4><a href="#">Navigating Life's Journey with Faith</a></h4>
                        <div class="location">
                            <i class="fa-regular fa-clock"></i>
                            <span>Dec 25, 2024 @5:00 PM</span>
                        </div>
                        <div class="location">
                            <i>
                                <svg width="24px" height="24px" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-104.000000, -411.000000)" fill="#fbc50b">
                                        <path d="M116,426 C114.343,426 113,424.657 113,423 C113,421.343 114.343,420 116,420 C117.657,420 119,421.343 119,423 C119,424.657 117.657,426 116,426 L116,426 Z M116,418 C113.239,418 111,420.238 111,423 C111,425.762 113.239,428 116,428 C118.761,428 121,425.762 121,423 C121,420.238 118.761,418 116,418 L116,418 Z M116,440 C114.337,440.009 106,427.181 106,423 C106,417.478 110.477,413 116,413 C121.523,413 126,417.478 126,423 C126,427.125 117.637,440.009 116,440 L116,440 Z M116,411 C109.373,411 104,416.373 104,423 C104,428.018 114.005,443.011 116,443 C117.964,443.011 128,427.95 128,423 C128,416.373 122.627,411 116,411 L116,411 Z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            </i><span>Town 21, United State</span>
                        </div>
                        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="upcoming-event hoverimg">
                    <figure>
                        <img src="assets/img/upcoming-event-img-3.jpg" alt="upcoming-event-img">
                    </figure>
                    <div class="upcoming-text">
                        <h4><a href="#">Navigating Life's Journey with Faith</a></h4>
                        <div class="location">
                            <i class="fa-regular fa-clock"></i>
                            <span>Dec 25, 2024 @5:00 PM</span>
                        </div>
                        <div class="location">
                            <i>
                                <svg width="24px" height="24px" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-104.000000, -411.000000)" fill="#fbc50b">
                                        <path d="M116,426 C114.343,426 113,424.657 113,423 C113,421.343 114.343,420 116,420 C117.657,420 119,421.343 119,423 C119,424.657 117.657,426 116,426 L116,426 Z M116,418 C113.239,418 111,420.238 111,423 C111,425.762 113.239,428 116,428 C118.761,428 121,425.762 121,423 C121,420.238 118.761,418 116,418 L116,418 Z M116,440 C114.337,440.009 106,427.181 106,423 C106,417.478 110.477,413 116,413 C121.523,413 126,417.478 126,423 C126,427.125 117.637,440.009 116,440 L116,440 Z M116,411 C109.373,411 104,416.373 104,423 C104,428.018 114.005,443.011 116,443 C117.964,443.011 128,427.95 128,423 C128,416.373 122.627,411 116,411 L116,411 Z">
                                        </path>
                                    </g>
                                </g>
                                </svg>
                            </i><span>Town 21, United State</span>
                        </div>
                        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="upcoming-event hoverimg">
                    <figure>
                        <img src="assets/img/upcoming-event-img-4.jpg" alt="upcoming-event-img">
                    </figure>
                    <div class="upcoming-text">
                        <h4><a href="#">Navigating Life's Journey with Faith</a></h4>
                        <div class="location">
                            <i class="fa-regular fa-clock"></i>
                            <span>Dec 25, 2024 @5:00 PM</span>
                        </div>
                        <div class="location">
                            <i>
                                <svg width="24px" height="24px" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                >
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-104.000000, -411.000000)" fill="#fbc50b">
                                        <path d="M116,426 C114.343,426 113,424.657 113,423 C113,421.343 114.343,420 116,420 C117.657,420 119,421.343 119,423 C119,424.657 117.657,426 116,426 L116,426 Z M116,418 C113.239,418 111,420.238 111,423 C111,425.762 113.239,428 116,428 C118.761,428 121,425.762 121,423 C121,420.238 118.761,418 116,418 L116,418 Z M116,440 C114.337,440.009 106,427.181 106,423 C106,417.478 110.477,413 116,413 C121.523,413 126,417.478 126,423 C126,427.125 117.637,440.009 116,440 L116,440 Z M116,411 C109.373,411 104,416.373 104,423 C104,428.018 114.005,443.011 116,443 C117.964,443.011 128,427.95 128,423 C128,416.373 122.627,411 116,411 L116,411 Z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            </i><span>Town 21, United State</span>
                        </div>
                        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="upcoming-event hoverimg">
                    <figure>
                        <img src="assets/img/upcoming-event-img-5.jpg" alt="upcoming-event-img">
                    </figure>
                    <div class="upcoming-text">
                        <h4><a href="#">Navigating Life's Journey with Faith</a></h4>
                        <div class="location">
                            <i class="fa-regular fa-clock"></i>
                            <span>Dec 25, 2024 @5:00 PM</span>
                        </div>
                        <div class="location">
                            <i>
                                <svg width="24px" height="24px" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-104.000000, -411.000000)" fill="#fbc50b">
                                        <path d="M116,426 C114.343,426 113,424.657 113,423 C113,421.343 114.343,420 116,420 C117.657,420 119,421.343 119,423 C119,424.657 117.657,426 116,426 L116,426 Z M116,418 C113.239,418 111,420.238 111,423 C111,425.762 113.239,428 116,428 C118.761,428 121,425.762 121,423 C121,420.238 118.761,418 116,418 L116,418 Z M116,440 C114.337,440.009 106,427.181 106,423 C106,417.478 110.477,413 116,413 C121.523,413 126,417.478 126,423 C126,427.125 117.637,440.009 116,440 L116,440 Z M116,411 C109.373,411 104,416.373 104,423 C104,428.018 114.005,443.011 116,443 C117.964,443.011 128,427.95 128,423 C128,416.373 122.627,411 116,411 L116,411 Z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            </i><span>Town 21, United State</span>
                        </div>
                        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="upcoming-event hoverimg">
                    <figure>
                        <img src="assets/img/upcoming-event-img-6.jpg" alt="upcoming-event-img">
                    </figure>
                    <div class="upcoming-text">
                        <h4><a href="#">Navigating Life's Journey with Faith</a></h4>
                        <div class="location">
                            <i class="fa-regular fa-clock"></i>
                            <span>Dec 25, 2024 @5:00 PM</span>
                        </div>
                        <div class="location">
                            <i>
                                <svg width="24px" height="24px" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-104.000000, -411.000000)" fill="#fbc50b">
                                        <path d="M116,426 C114.343,426 113,424.657 113,423 C113,421.343 114.343,420 116,420 C117.657,420 119,421.343 119,423 C119,424.657 117.657,426 116,426 L116,426 Z M116,418 C113.239,418 111,420.238 111,423 C111,425.762 113.239,428 116,428 C118.761,428 121,425.762 121,423 C121,420.238 118.761,418 116,418 L116,418 Z M116,440 C114.337,440.009 106,427.181 106,423 C106,417.478 110.477,413 116,413 C121.523,413 126,417.478 126,423 C126,427.125 117.637,440.009 116,440 L116,440 Z M116,411 C109.373,411 104,416.373 104,423 C104,428.018 114.005,443.011 116,443 C117.964,443.011 128,427.95 128,423 C128,416.373 122.627,411 116,411 L116,411 Z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            </i><span>Town 21, United State</span>
                        </div>
                        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="center">
            <ul class="pagination">
              <li class="prev"><a href="#">Prev</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">...</a></li>
              <li><a href="#">18</a></li>
              <li class="next"><a href="#">next</a></li>
           </ul>
       </div>
    </div>
</section>

<section class="gap no-top">
    <div class="container">
        <div class="join-our-community" style="background-image: url(assets/img/color-bg.jpg);">
            <h2>Serving the community, working in partnership</h2>
            <p>We believe that our primary role is to serve the needs of the local community</p>
            <a href="#" class="btn">Join Our Community</a>
            <div class="join-our-img">
                <img src="assets/img/join-our-1.jpg" alt="img">
                <img src="assets/img/join-our-2.jpg" alt="img">
                <img src="assets/img/join-our-3.jpg" alt="img">
                <img src="assets/img/join-our-4.jpg" alt="img">
            </div>
        </div>
    </div>
</section>

@include('Main-Website.Components.Footer')


@endsection

