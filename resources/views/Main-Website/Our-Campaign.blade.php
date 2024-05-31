@extends('Main-Website.Components.Master')

@section('Content')

@include('Main-Website.Components.Navbar')

<section class="bannr-section" style="background-image: url(assets/img/bannr-img.jpg);">
    <div class="container">
        <div class="bannr-text">
            <img src="assets/img/heading-img.png" alt="icon">
            <h2>Our Campaigns</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
                <li class="breadcrumb-item active" aria-current="page">Our Campaigns</li>
            </ol>
        </div>
    </div>
</section>

<section class="gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="campaigns">
                    <div class="donate-now">
                        <figure>
                            <img src="assets/img/donation-img-4.jpg" alt="upcoming-event-img">
                        </figure>
                        <a href="#" class="btn">Donate Now</a>
                        <div class="progressbar">
                            <div class="circle" data-percent="85">
                                <div>85%</div>
                            </div>
                        </div>
                    </div>
                    <div class="campaigns-text">
                        <h4>$71,000</h4>
                        <span>Donation Collected</span>
                        <h5><a href="#">Benefits Of Doing Money To Charitable Organization</a></h5>
                        <p>Islam is definitely accommodates olor sit amet, consectetur adipisicing eli...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="campaigns">
                    <div class="donate-now">
                        <figure>
                            <img src="assets/img/donation-img-5.jpg" alt="upcoming-event-img">
                        </figure>
                        <a href="#" class="btn">Donate Now</a>
                        <div class="progressbar">
                            <div class="circle" data-percent="79">
                                <div>79%</div>
                            </div>
                        </div>
                    </div>
                    <div class="campaigns-text">
                        <h4>$71,000</h4>
                        <span>Donation Collected</span>
                        <h5><a href="#">Benefits Of Doing Money To Charitable Organization</a></h5>
                        <p>Islam is definitely accommodates olor sit amet, consectetur adipisicing eli...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="campaigns">
                    <div class="donate-now">
                        <figure>
                            <img src="assets/img/donation-img-6.jpg" alt="upcoming-event-img">
                        </figure>
                        <a href="#" class="btn">Donate Now</a>
                        <div class="progressbar">
                            <div class="circle" data-percent="80">
                                <div>80%</div>
                            </div>
                        </div>
                    </div>
                    <div class="campaigns-text">
                        <h4>$71,000</h4>
                        <span>Donation Collected</span>
                        <h5><a href="#">Benefits Of Doing Money To Charitable Organization</a></h5>
                        <p>Islam is definitely accommodates olor sit amet, consectetur adipisicing eli...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="campaigns">
                    <div class="donate-now">
                        <figure>
                            <img src="assets/img/donation-img-7.jpg" alt="upcoming-event-img">
                        </figure>
                        <a href="#" class="btn">Donate Now</a>
                        <div class="progressbar">
                            <div class="circle" data-percent="95">
                                <div>95%</div>
                            </div>
                        </div>
                    </div>
                    <div class="campaigns-text">
                        <h4>$71,000</h4>
                        <span>Donation Collected</span>
                        <h5><a href="#">Benefits Of Doing Money To Charitable Organization</a></h5>
                        <p>Islam is definitely accommodates olor sit amet, consectetur adipisicing eli...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="campaigns">
                    <div class="donate-now">
                        <figure>
                            <img src="assets/img/donation-img-8.jpg" alt="upcoming-event-img">
                        </figure>
                        <a href="#" class="btn">Donate Now</a>
                        <div class="progressbar">
                            <div class="circle" data-percent="85">
                                <div>85%</div>
                            </div>
                        </div>
                    </div>
                    <div class="campaigns-text">
                        <h4>$71,000</h4>
                        <span>Donation Collected</span>
                        <h5><a href="#">Benefits Of Doing Money To Charitable Organization</a></h5>
                        <p>Islam is definitely accommodates olor sit amet, consectetur adipisicing eli...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="campaigns">
                    <div class="donate-now">
                        <figure>
                            <img src="assets/img/donation-img-9.jpg" alt="upcoming-event-img">
                        </figure>
                        <a href="#" class="btn">Donate Now</a>
                        <div class="progressbar">
                            <div class="circle" data-percent="91">
                                <div>91%</div>
                            </div>
                        </div>
                    </div>
                    <div class="campaigns-text">
                        <h4>$71,000</h4>
                        <span>Donation Collected</span>
                        <h5><a href="#">Benefits Of Doing Money To Charitable Organization</a></h5>
                        <p>Islam is definitely accommodates olor sit amet, consectetur adipisicing eli...</p>
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

@include('Main-Website.Components.Holy-Quran')
@include('Main-Website.Components.Footer')


@endsection
  
