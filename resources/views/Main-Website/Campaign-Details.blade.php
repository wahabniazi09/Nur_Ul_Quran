@extends('Main-Website.Components.Master')

@section('Content')

@include('Main-Website.Components.Navbar')

<section class="bannr-section" style="background-image: url(assets/img/bannr-img.jpg);">
    <div class="container">
        <div class="bannr-text">
            <img src="assets/img/heading-img.png" alt="icon">
            <h2>Campaign Details</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="our-campaign.html">Our Campaign</a>
              </li>
                <li class="breadcrumb-item active" aria-current="page">Campaign Details</li>
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
                        <img src="assets/img/campaign-details-1.jpg" alt="img">
                    </figure>
                    <div class="donation-collected">
                        <div>
                            <h3>$71,000 </h3>
                            <h4>Donation Collected</h4>
                        </div>
                        <div class="progressbar">
                            <div class="circle" data-percent="85">
                                <div>85%</div>
                            </div>
                        </div>
                    </div>
                    <h5><a href="#">Embarking on a Journey of Reflection</a></h5>
                    <div class="blog-man d-flex align-items-center"><img alt="img" class="me-3" src="assets/img/blog-man.jpg"><h6>by<a href="#">Thomas Walimes</a></h6></div>
                    <p>Phasellus enim libero, blandit vel sapienvitae, condimen tum ultricies magna Lorem mod temincidid unt ut labore et dolore magna aliqua vulputate cursus a sit am veli N nt taciti socio Etiam ante ex fer mentodio Sed non erat it consequat aucto odicons habitant morbi trist ique netus et malesuada. Ph asellus enim liberod do eiusmod te dolore magna aliqua vulputate cursus a sit am veli Nam mauctor Class aptent taciti mentodio Sed non erat it consequat aucto odiconse.
                    <br><br>
                    Phasellus enim libero, blandit vel sapienvitae, condimen tum ultricies magna Lore mod temincidid unt ut labore et dolore magna aliqua vulputate cursus a sit am veli ent taciti socio Etiam ante ex fer mentodio Sed non erat.
                    </p>
                </div>
                <div class="blog-details-style">
                    <ul class="list">
                        <li>Alhamdulillah 2003, kami berhasil mengumpulkan dana,</li>
                        <li>21 Photography Competition, please register your details through the link below.</li>
                        <li>Entries close on Sunday 9th May 2021</li>
                        <li>When you give your Zakat, you do more than just help someone</li>
                    </ul>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="img-navigating hoverimg">
                                <figure>
                                    <img src="assets/img/campaign-details-3.jpg" alt="img">
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-navigating hoverimg">
                                <figure>
                                    <img src="assets/img/campaign-details-4.jpg" alt="img">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="drop-caps-work">
                        <p>Lim libero, blandit vel sapienvitae, condimen tum ultricies magna Lorem ididunt ut labore  cursus a sit am veli Nio Etiam ante ex fermentodio Sed non erat it consequat auct ique netus et malesuada. Phasellus enim liberod do eiusmod te dolore magna aliqua vul Phasellus enim libero, blandit vel sapienvitae, condimen tum ultricies magna Lore mod<br><br> temincidindit blandit vel sapienvitae, condimen tum ndit vel sultricies magna. Phasellus enim libero, blandit vel sap magna aliqua vulputate cursus a sit am ndit vel svelient taciti socio Etiam ante ex fermentodindit vel blandit vel sapienvitae, condimen tum ultricies magna.</p>
                    </div>
                    <div class="video position-relative">
                        <a data-fancybox="" href="https://www.youtube.com/watch?v=xKxrkht7CpY">
                            <i>
                              <svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M11 8.49951L0.5 0.27227L0.5 16.7268L11 8.49951Z" fill="#000"></path>
                              </svg>
                            </i>
                        </a>
                        <img src="assets/img/campaign-details-2.jpg" alt="img">
                    </div>
                    <div class="post-tags">
                      <div class="d-flex">
                          <h6>Tags:</h6>
                          <ul class="tags">
                            <li><a href="#">Islamic</a></li>
                            <li><a href="#">Classes</a></li>
                            <li><a href="#">Prayers</a></li>
                          </ul>
                      </div>
                      <ul class="social-media">
                          <li><a href="#"><i class="fab fa-facebook-f icon"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter icon"></i></a></li>
                          <li><a href="#"><i class="fab fa-google-plus-g icon"></i></a></li>
                          <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                      </ul>
                    </div>
                </div>
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
