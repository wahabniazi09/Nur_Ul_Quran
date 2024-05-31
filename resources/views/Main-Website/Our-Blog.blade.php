@extends('Main-Website.Components.Master')

@section('Content')

@include('Main-Website.Components.Navbar')

<section class="bannr-section" style="background-image: url(assets/img/bannr-img.jpg);">
    <div class="container">
        <div class="bannr-text">
            <img src="assets/img/heading-img.png" alt="icon">
            <h2>Our Blog</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
                <li class="breadcrumb-item active" aria-current="page">Our Blog</li>
            </ol>
        </div>
    </div>
</section>

<section class="gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-two our-blog hoverimg">
                    <figure>
                        <img src="assets/img/blog-detail-img-1.jpg" alt="img">
                    </figure>
                    <div class="d-flex align-items-center">
                        <span>Quran Online</span>
                        <h6>jan 04 2024</h6>
                    </div>
                    <h5><a href="#">Embarking on a Journey of Reflection</a></h5>
                    <div class="blog-man d-flex align-items-center"><img alt="img" class="me-3" src="assets/img/blog-man.jpg"><h6>by<a href="#">Thomas Walimes</a></h6></div>
                    <p>Phasellus enim libero, blandit vel sapienvitae, condimen tum ultricies magna Loremod teminci didu ut labore et dolore magna aliqua vulputate cursus a sit am velient taciti socio Etiam ante ex fermen ore magna aliqua vulputate cursus a sit am veliendio Sed non erat.</p>
                    <a href="#"><i class="fa-solid fa-arrow-right"></i><span>Read More</span></a>
                </div>
                <div class="blog-two our-blog hoverimg">
                    <figure>
                        <img src="assets/img/blog-detail-img-2.jpg" alt="img">
                    </figure>
                    <div class="d-flex align-items-center">
                        <span>Quran Online</span>
                        <h6>jan 04 2024</h6>
                    </div>
                    <h5><a href="#">Embarking on a Journey of Reflection</a></h5>
                    <div class="blog-man d-flex align-items-center"><img alt="img" class="me-3" src="assets/img/blog-man.jpg"><h6>by<a href="#">Thomas Walimes</a></h6></div>
                    <p>Phasellus enim libero, blandit vel sapienvitae, condimen tum ultricies magna Loremod teminci didu ut labore et dolore magna aliqua vulputate cursus a sit am velient taciti socio Etiam ante ex fermen ore magna aliqua vulputate cursus a sit am veliendio Sed non erat.</p>
                    <a href="#"><i class="fa-solid fa-arrow-right"></i><span>Read More</span></a>
                </div>
                <div class="blog-two our-blog hoverimg">
                    <figure>
                        <img src="assets/img/blog-detail-img-3.jpg" alt="img">
                    </figure>
                    <div class="d-flex align-items-center">
                        <span>Quran Online</span>
                        <h6>jan 04 2024</h6>
                    </div>
                    <h5><a href="#">Embarking on a Journey of Reflection</a></h5>
                    <div class="blog-man d-flex align-items-center"><img alt="img" class="me-3" src="assets/img/blog-man.jpg"><h6>by<a href="#">Thomas Walimes</a></h6></div>
                    <p>Phasellus enim libero, blandit vel sapienvitae, condimen tum ultricies magna Loremod teminci didu ut labore et dolore magna aliqua vulputate cursus a sit am velient taciti socio Etiam ante ex fermen ore magna aliqua vulputate cursus a sit am veliendio Sed non erat.</p>
                    <a href="#"><i class="fa-solid fa-arrow-right"></i><span>Read More</span></a>
                </div>
                <div class="blog-two our-blog hoverimg">
                    <figure>
                        <img src="assets/img/blog-detail-img-4.jpg" alt="img">
                    </figure>
                    <div class="d-flex align-items-center">
                        <span>Quran Online</span>
                        <h6>jan 04 2024</h6>
                    </div>
                    <h5><a href="#">Embarking on a Journey of Reflection</a></h5>
                    <div class="blog-man d-flex align-items-center"><img alt="img" class="me-3" src="assets/img/blog-man.jpg"><h6>by<a href="#">Thomas Walimes</a></h6></div>
                    <p>Phasellus enim libero, blandit vel sapienvitae, condimen tum ultricies magna Loremod teminci didu ut labore et dolore magna aliqua vulputate cursus a sit am velient taciti socio Etiam ante ex fermen ore magna aliqua vulputate cursus a sit am veliendio Sed non erat.</p>
                    <a href="#"><i class="fa-solid fa-arrow-right"></i><span>Read More</span></a>
                </div>
                <div class="blog-two our-blog hoverimg">
                    <figure>
                        <img src="assets/img/blog-detail-img-5.jpg" alt="img">
                    </figure>
                    <div class="d-flex align-items-center">
                        <span>Quran Online</span>
                        <h6>jan 04 2024</h6>
                    </div>
                    <h5><a href="#">Embarking on a Journey of Reflection</a></h5>
                    <div class="blog-man d-flex align-items-center"><img alt="img" class="me-3" src="assets/img/blog-man.jpg"><h6>by<a href="#">Thomas Walimes</a></h6></div>
                    <p>Phasellus enim libero, blandit vel sapienvitae, condimen tum ultricies magna Loremod teminci didu ut labore et dolore magna aliqua vulputate cursus a sit am velient taciti socio Etiam ante ex fermen ore magna aliqua vulputate cursus a sit am veliendio Sed non erat.</p>
                    <a href="#"><i class="fa-solid fa-arrow-right"></i><span>Read More</span></a>
                </div>
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
            <div class="col-lg-4">
                <div class="sidebar">
                    <h3>Recent Posts</h3>
                    <div class="boder-bar"></div>
                    <ul class="recent-post">
                        <li>
                            <img alt="recent-posts-img" src="assets/img/recent-posts-img-1.jpg">
                            <div>
                                <a href="#">The Five Pillars are the core beliefs</a>
                                <span>March 02, 2024</span>
                            </div>
                        </li>
                        <li>
                            <img alt="recent-posts-img" src="assets/img/recent-posts-img-2.jpg">
                            <div>
                                <a href="#">Islam means to achieve peace</a>
                                <span>March 02, 2024</span>
                            </div>
                        </li>
                        <li>
                            <img alt="recent-posts-img" src="assets/img/recent-posts-img-3.jpg">
                            <div>
                                <a href="#">Peace with the creations of God</a>
                                <span>March 02, 2024</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="sidebar">
                    <h3>Categories</h3>
                    <div class="boder-bar"></div>
                    <ul class="categories">
                        <li>
                            <a href="#">Classes<span>23</span></a>
                        </li>
                        <li>
                            <a href="#">Islamic<span>10</span></a>
                        </li>
                        <li>
                            <a href="#">Quran Tilawat<span>09</span></a>
                        </li>
                        <li>
                            <a href="#">Religious<span>14</span></a>
                        </li>
                        <li class="mb-0">
                            <a href="#">Prayers<span>12</span></a>
                        </li>
                        
                    </ul>
                </div>
                <div class="sidebar">
                    <h3>Quick Links</h3>
                    <div class="boder-bar"></div>
                    <ul class="Meta">
                        <li><a href="#"><i class='fa-solid fa-angles-right'></i>Prayers Timings</a></li>
                        <li><a href="#"><i class='fa-solid fa-angles-right'></i>Islamic Community</a></li>
                        <li><a href="#"><i class='fa-solid fa-angles-right'></i>Travel Hajj Umra</a></li>
                        <li><a href="#"><i class='fa-solid fa-angles-right'></i>Term Conditions</a></li>
                        <li><a href="#"><i class='fa-solid fa-angles-right'></i>Become A Teacher</a></li>
                        <li class="pb-0 end"><a href="#"><i class='fa-solid fa-angles-right'></i>Online Classes</a></li>
                    </ul>
                </div>
                <div class="sidebar">
                    <h3>photo gallery</h3>
                    <div class="boder-bar"></div>
                    <ul class="photo-gallery">
                      <li>
                        <a href="assets/img/blog-detail-img-1.jpg" data-fancybox="gallery"><figure><img alt="girl" src="assets/img/blog-detail-img-1.jpg"></figure></a>
                      </li>
                      <li>
                        <a href="assets/img/blog-detail-img-2.jpg" data-fancybox="gallery"><figure><img alt="girl" src="assets/img/blog-detail-img-2.jpg"></figure></a>
                      </li>
                      <li>
                        <a href="assets/img/blog-detail-img-3.jpg" data-fancybox="gallery"><figure><img alt="girl" src="assets/img/blog-detail-img-3.jpg"></figure></a>
                      </li>
                      <li>
                        <a href="assets/img/blog-detail-img-4.jpg" data-fancybox="gallery"><figure><img alt="girl" src="assets/img/blog-detail-img-4.jpg"></figure></a>
                      </li>
                      <li>
                        <a href="assets/img/blog-detail-img-5.jpg" data-fancybox="gallery"><figure><img alt="girl" src="assets/img/blog-detail-img-5.jpg"></figure></a>
                      </li>
                      <li>
                        <a href="assets/img/blog-img-3.jpg" data-fancybox="gallery"><figure><img alt="girl" src="assets/img/blog-img-3.jpg"></figure></a>
                      </li>
                    </ul>
                </div>
                <div class="sidebar sidebar-two" style="background-image: url(assets/img/color-bg.jpg);">
                    <h3>Newsletter</h3>
                    <div class="boder-bar"></div>
                    <p>Enter your email and get recent news 
                        and update.</p>
                    <form>
                        <input type="text" name="email" placeholder="Enter your email.">
                        <button class="btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('Main-Website.Components.Footer')


@endsection
   