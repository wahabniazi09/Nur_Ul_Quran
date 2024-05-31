
@extends('Main-Website.Components.Master')

@section('Content')

@include('Main-Website.Components.Navbar')
<section class="bannr-section" style="background-image: url(assets/img/bannr-img.jpg);">
    <div class="container">
        <div class="bannr-text">
            <img src="assets/img/heading-img.png" alt="icon">
            <h2>our courses</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="our-courses.html">our courses</a>
              </li>
                <li class="breadcrumb-item active" aria-current="page">Courses Details</li>
            </ol>
        </div>
    </div>
</section>

<section class="gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="courses-details hoverimg">
                    <figure>
                        <img src="assets/img/courses-details-1.jpg" alt="img">
                    </figure>
                    <h5>Qaccccuran Intermediate Course Brother</h5>
                    <div class="d-flex align-items-center flex-wrap">
                        <div class="scholar">
                            <img src="assets/img/scholar.jpg" alt="img">
                            <div>
                                <h4>Habib Al Noor</h4>
                                <span>Arabic scholar</span>
                            </div>
                        </div>
                        <ul class="social-media">
                            <li>
                              <a href="#">
                                <i class="fab fa-facebook-f icon"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="fab fa-twitter icon"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="fab fa-google-plus-g icon"></i></a>
                            </li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <p>Phasellus enim libero, blandit vel sapienvitae, condimen tum ultricies magna Lorem mod temincidid unt ut labore et dolore magna aliqua vulputate cursus a sit am veli N nt taciti socio Etiam ante ex fer mentodio Sed non erat it consequat aucto odicons habitant morbi trist ique netus et malesuada. Ph asellus enim liberod do eiusmod te dolore magna aliqua vulputate cursus a sit am veli Nam mauctor Class aptent taciti mentodio Sed non erat it consequat aucto odiconse.
                    </p>
                </div>
                <div class="comment">
                    <h3>Course Content</h3>
                    <div class="accordion">
                      <div class="accordion-item">
                          <a href="#" class="heading">
                              <div class="icon"><i class="fa-solid fa-angle-right"></i></div>
                              <div class="title">Lesson 1 : Preview</div>
                          </a>
                          <div class="content">
                            <ul class="client-info">
                                <li><h5><b>Episode 1:</b>  Ibrahim (AS) and his Father</h5></li>
                                <li><h5><b>Episode 2:</b>  Ibrahim (AS) breaks the idols</h5></li>
                            </ul>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <a href="#" class="heading">
                              <div class="icon"><i class="fa-solid fa-angle-right"></i></div>
                              <div class="title">Lesson 2 : Preview</div>
                          </a>
                          <div class="content">
                            <ul class="client-info">
                                <li><h5><b>Episode 1:</b>  Ibrahim (AS) and his Father</h5></li>
                                <li><h5><b>Episode 2:</b>  Ibrahim (AS) breaks the idols</h5></li>
                            </ul>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <a href="#" class="heading">
                              <div class="icon"><i class="fa-solid fa-angle-right"></i></div>
                              <div class="title">Lesson 3 : Preview</div>
                          </a>
                          <div class="content">
                            <ul class="client-info">
                                <li><h5><b>Episode 1:</b>  Ibrahim (AS) and his Father</h5></li>
                                <li><h5><b>Episode 2:</b>  Ibrahim (AS) breaks the idols</h5></li>
                            </ul>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <a href="#" class="heading">
                              <div class="icon"><i class="fa-solid fa-angle-right"></i></div>
                              <div class="title">Lesson 4 : Preview</div>
                          </a>
                          <div class="content">
                            <ul class="client-info">
                                <li><h5><b>Episode 1:</b>  Ibrahim (AS) and his Father</h5></li>
                                <li><h5><b>Episode 2:</b>  Ibrahim (AS) breaks the idols</h5></li>
                            </ul>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="comment">
                      <h3>Reviews</h3>
                      <ul>
                        <li class="single-comment">
                          <img alt="img" src="assets/img/comment-1.jpg">
                          <ul class="star">
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                          </ul>
                          <div class="ps-md-4">
                            <div class="d-flex align-items-center">
                              <h4>Ibrahim Noman</h4>
                              <span>Dec 20, 2024</span>
                              </div>
                              <p>Cupcake ipsum dolor sit amet Dragée sweet roll tiramisu sweet Sesam psum dolor sit a Drag croissant lollipop candy.</p>
                          </div>
                        </li>
                        <li class="single-comment children">
                          <img alt="img" src="assets/img/comment-2.jpg">
                          <ul class="star">
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                          </ul>
                          <div class="ps-md-4">
                            <div class="d-flex align-items-center">
                              <h4>Sara Batool</h4>
                              <span>Dec 20, 2024</span>
                              </div>
                              <p>Cupcake ipsum dolor sit amet Dragée sweet roll tiramisu sweet Sesam psum dolor sit a Drag croissant lollipop candy.</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="comment">
                      <h3>Leave a Review</h3>
                      <div class="d-flex align-items-center mb-4">
                          <h4>Select Rating:</h4>
                          <ul class="star regular">
                              <li><i class="fa-regular fa-star"></i></li>
                              <li><i class="fa-regular fa-star"></i></li>
                              <li><i class="fa-regular fa-star"></i></li>
                              <li><i class="fa-regular fa-star"></i></li>
                              <li><i class="fa-regular fa-star"></i></li>
                          </ul>
                      </div>
                      <form class="leave-comment">
                        <div class="row">
                          <div class="col-lg-6">
                            <input type="text" name="name" placeholder="Full Name">
                          </div>
                          <div class="col-lg-6">
                            <input type="text" name="Email" placeholder="Email Address">
                          </div>
                          <div class="col-lg-12">
                              <textarea placeholder="Your Message"></textarea>
                              <div class="d-flex">  
                                  <input type="checkbox" class="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                  <label for="vehicle1">Save information and website in this browser for the next time I comment.</label>
                              </div>
                              <button class="btn">post Review</button>
                          </div>
                        </div>
                      </form>
                    </div>
            </div>
            <div class="col-lg-4">
                <div class="courses-details-sidebar">
                    <div class="video position-relative">
                        <a data-fancybox="" href="https://www.youtube.com/watch?v=xKxrkht7CpY">
                            <i>
                              <svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M11 8.49951L0.5 0.27227L0.5 16.7268L11 8.49951Z" fill="#000"></path>
                              </svg>
                            </i>
                        </a>
                        <img src="assets/img/courses-details-2.jpg" alt="img">
                    </div>
                    <div class="course-free">
                        <h5>Course Free</h5>
                        <h6><del>$24.00</del> $16.00</h6>
                        <a href="#" class="btn">Add to Cart</a>
                        <a href="#" class="btn course-gift">Gift This Course</a>
                        <div class="travel-package-list">
                            <h4>Includes:</h4>
                            <ul>
                                <li><i class="fa-regular fa-circle-check"></i>2 hours on-demand vide</li>
                                <li><i class="fa-regular fa-circle-check"></i>English</li>
                                <li><i class="fa-regular fa-circle-check"></i>Full lifetime access</li>
                                <li><i class="fa-regular fa-circle-check"></i>Access on mobile and TV</li>
                                <li><i class="fa-regular fa-circle-check"></i>2 hours of audio lessons</li>
                                <li><i class="fa-regular fa-circle-check"></i>E-Book</li>
                                <li><i class="fa-regular fa-circle-check"></i>Certificate of completion</li>
                            </ul>
                        </div>
                    </div>
                    <div class="about-instructor" style="background-image: url(assets/img/color-bg.jpg);">
                        <div class="scholar">
                            <img src="assets/img/islamic-scholars-img.jpg" alt="img">
                            <div>
                                <h4>About Instructor</h4>
                                <span>24 Courses</span>
                                <ul class="star">
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p>he memorized the Quran at a young age then went on to complete a BA in Islamic L aw from the University of Madinah</p>
                        <a href="#"><i class="fa-solid fa-arrow-right"></i><span>View Profile</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('Main-Website.Components.Footer')


@endsection

