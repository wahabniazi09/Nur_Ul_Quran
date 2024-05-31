@extends('Main-Website.Components.Master')

@section('Content')

@include('Main-Website.Components.Navbar')

<section class="bannr-section" style="background-image: url(assets/img/bannr-img.jpg);">
      <div class="container">
          <div class="bannr-text">
              <img src="assets/img/heading-img.png" alt="icon">
              <h2>Scholar Details</h2>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="scholar-details.html">scholar details</a>
                </li>
                  <li class="breadcrumb-item active" aria-current="page">Our courses</li>
              </ol>
          </div>
      </div>
  </section>

  <section class="gap">
      <div class="container">
          <div class="scholars scholars-details">
              <div class="opening-time hoverimg">
                  <figure>
                      <img src="assets/img/scholar-details.jpg" alt="img">
                  </figure>
                  <div class="opening-time-text">
                      <h3><a href="#">Molana Rehman</a></h3>
                      <span>Islamic Speaker</span>
                      <a href="callto:+(00)123-345-11"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M442.77,80.93l.27-.27-9.39-9a256,256,0,0,0-351.8-3.23h0l-.29.28-9.43,8.77.23.23A257,257,0,0,0,0,256V480a32,32,0,0,0,32,32H94.4a59.2,59.2,0,0,0,59.2-59.2v-112a59.2,59.2,0,0,0-59.2-59.2H25.6V256A231.25,231.25,0,0,1,90.48,95.78l6.95,6.95c15.42,15.41,39.38,17.79,56.95,5.66a179.16,179.16,0,0,1,206,2,44.07,44.07,0,0,0,25.82,8.34,45.65,45.65,0,0,0,32.29-13.53L424.66,99A228.56,228.56,0,0,1,486.4,256v25.6H417.6a59.2,59.2,0,0,0-59.2,59.2v112A59.2,59.2,0,0,0,417.6,512H480a32,32,0,0,0,32-32V256A254,254,0,0,0,442.77,80.93ZM76.8,307.2H94.4A33.64,33.64,0,0,1,128,340.8v112a33.64,33.64,0,0,1-33.6,33.6H76.8Zm-25.6,0V486.4H32a6.41,6.41,0,0,1-6.4-6.4V307.2ZM400.41,87.09c-6.81,6.82-17.59,7.91-25.06,2.51a204.77,204.77,0,0,0-235.51-2.3c-7.42,5.13-17.65,4-24.31-2.68l-6.26-6.26a230.51,230.51,0,0,1,297,2.89ZM435.2,486.4H417.6A33.64,33.64,0,0,1,384,452.8v-112a33.64,33.64,0,0,1,33.6-33.6h17.6Zm51.2-6.4a6.41,6.41,0,0,1-6.4,6.4H460.8V307.2h25.6V480Z"></path></svg>+(00) 123-345-11</a>
                      <div class="location">
                      <i>
                          <svg height="512" viewBox="0 0 1800 1800" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m899.993 1556.267 441.512-441.511c8.202-7.819 26.127-26.384 26.893-27.184l.36-.383c110.946-118.997 172.046-274.141 172.046-436.851 0-353.342-287.463-640.805-640.803-640.805-353.342 0-640.805 287.463-640.805 640.805 0 162.714 61.1 317.857 172.038 436.851zm.008-1485.108c319.355 0 579.179 259.818 579.179 579.18 0 146.968-55.159 287.114-155.315 394.639-5.202 5.387-19.292 19.873-25.095 25.383l-398.764 398.739-424.049-424.315c-100.055-107.499-155.137-247.556-155.137-394.446 0-319.362 259.814-579.18 579.181-579.18z" fill="rgb(0,0,0)"/></g><g><path d="m998.745 225.279c110.577 0 325.781 120.91 325.781 342.553 0 17.018 13.789 30.812 30.812 30.812 17.014 0 30.812-13.794 30.812-30.812 0-115.37-50.989-222.331-143.563-301.184-73.464-62.566-169.175-102.994-243.842-102.994-17.014 0-30.812 13.794-30.812 30.813s13.798 30.812 30.812 30.812z" fill="rgb(0,0,0)"/></g><g><path d="m1286.716 1361.056c-24.003-9.809-49.854-18.548-77.134-26.264l-50.474 50.478c148.765 35.502 240.488 98.79 240.488 157.599 0 87.962-205.171 185.974-499.596 185.974-294.417 0-499.597-98.012-499.597-185.974 0-58.805 91.723-122.097 240.488-157.599l-50.478-50.478c-27.271 7.716-53.126 16.455-77.121 26.264-112.537 45.995-174.513 110.563-174.513 181.813s61.977 135.817 174.513 181.813c103.793 42.422 241.128 65.785 386.708 65.785 145.582 0 282.921-23.363 386.715-65.785 112.536-45.995 174.504-110.563 174.504-181.813s-61.967-135.818-174.503-181.813z" fill="rgb(0,0,0)"/></g><g><path d="m901.771 945.221c-171.172 0-310.434-139.256-310.434-310.425s139.262-310.426 310.434-310.426 310.434 139.256 310.434 310.425-139.262 310.426-310.434 310.426zm0-559.226c-137.193 0-248.809 111.612-248.809 248.801s111.616 248.801 248.809 248.801c137.192 0 248.809-111.612 248.809-248.801s-111.616-248.801-248.809-248.801z" fill="rgb(0,0,0)"/></g></g></svg>
                      </i><span>New Street Town 2445x United State</span>
                  </div>
                  <div class="location">
                      <i>
                          <svg fill="none" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><g clip-rule="evenodd" fill="rgb(0,0,0)" fill-rule="evenodd"><path d="m9 10c-1.65685 0-3 1.3431-3 3v22c0 1.6569 1.34315 3 3 3h30c1.6569 0 3-1.3431 3-3v-17c0-.5523.4477-1 1-1s1 .4477 1 1v17c0 2.7614-2.2386 5-5 5h-30c-2.76142 0-5-2.2386-5-5v-22c0-2.7614 2.23858-5 5-5h22c.5523 0 1 .44772 1 1s-.4477 1-1 1z"/><path d="m13.2929 16.2929c.3905-.3905 1.0237-.3905 1.4142 0l8.5858 8.5858c.3905.3905 1.0237.3905 1.4142 0l8.5858-8.5858c.3905-.3905 1.0237-.3905 1.4142 0s.3905 1.0237 0 1.4142l-8.5858 8.5858c-1.1716 1.1716-3.071 1.1716-4.2426 0l-8.5858-8.5858c-.3905-.3905-.3905-1.0237 0-1.4142z"/><path d="m40 11c1.1046 0 2-.8954 2-2 0-1.10457-.8954-2-2-2s-2 .89543-2 2c0 1.1046.8954 2 2 2zm0 2c2.2091 0 4-1.7909 4-4 0-2.20914-1.7909-4-4-4s-4 1.79086-4 4c0 2.2091 1.7909 4 4 4z"/></g></svg>
                      </i><span>309-313 Mill Rd, Cambridge, CB1<br> 3DF,United State</span>
                  </div>
                  <a href="#" class="btn">Contact Us</a>
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
      </div>
  </section>

  <div class="container mb-80">
      <div class="about-scholar">
          <h4>About Scholar</h4>
          <div class="border"></div>
          <p>Phasellus enim libero, blandit vel sapienvitae, condimen tum ultricies magna Lorem mod temincidid unt ut labore et dolore magna aliqua vulputate cursus a sit am veli N nt taciti socio Etiam ante ex fermentodio Sed non erat it consequat aucto odicons habitant morbi trist ique netus et malesuada. Phasellus enim liberod do eiusmod te dolore magna aliqua vulputate cursus a sit am veli Nam mauctor Class aptent taciti mentodio Sed non erat it consequat aucto odiconsesequat aucto odicons habitant morbi trist ique netus et malesua.
          <br><br>
          Phasellus enim libero, blandit vel sapienvitae, condimen tum ultricies magna Lorem mod temincidid unt ut labore et dolore magna aliqua vulputate cursus odiconsesequat aucto odicons habi ondimen tum ultr tant morbi trist ique netus et malesua.</p>
          <div class="blog-details-style">
              <ul class="list">
                  <li>Alhamdulillah 2003, kami berhasil mengumpulkan dana,</li>
                  <li>21 Photography Competition, please register your details through the link below.</li>
                  <li>Entries close on Sunday 9th May 2021</li>
                  <li>When you give your Zakat, you do more than just help someone</li>
              </ul>
          </div>
          <h4>Scholar Courses</h4>
          <div class="border"></div>
      </div>
      <div class="row our-courses">
              <div class="col-lg-3 col-sm-6">
                  <div class="courses">
                      <div class="courses-img">
                          <figure>
                              <img src="assets/img/courses-4.jpg" alt="img">
                          </figure>
                          <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                      <div class="scholar">
                          <img src="assets/img/scholar.jpg" alt="img">
                          <div>
                              <h4>Habib Al Noor</h4>
                              <span>Arabic scholar</span>
                          </div>
                      </div>
                      <div class="courses-text">
                          <a href="#">Quran Intermediate Course Brother</a>
                          <h4>$16.00</h4>
                          <span>Course Free</span>
                      </div>
                      <div class="courses-weeks">
                          <h6>10 weeks</h6>
                          <div class="border"></div>
                          <h6>50 enroll</h6>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="courses">
                      <div class="courses-img">
                          <figure>
                              <img src="assets/img/courses-5.jpg" alt="img">
                          </figure>
                          <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                      <div class="scholar">
                          <img src="assets/img/scholar.jpg" alt="img">
                          <div>
                              <h4>Habib Al Noor</h4>
                              <span>Arabic scholar</span>
                          </div>
                      </div>
                      <div class="courses-text">
                          <a href="#">Quran Intermediate Course Brother</a>
                          <h4>$16.00</h4>
                          <span>Course Free</span>
                      </div>
                      <div class="courses-weeks">
                          <h6>10 weeks</h6>
                          <div class="border"></div>
                          <h6>50 enroll</h6>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="courses">
                      <div class="courses-img">
                          <figure>
                              <img src="assets/img/courses-6.jpg" alt="img">
                          </figure>
                          <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                      <div class="scholar">
                          <img src="assets/img/scholar.jpg" alt="img">
                          <div>
                              <h4>Habib Al Noor</h4>
                              <span>Arabic scholar</span>
                          </div>
                      </div>
                      <div class="courses-text">
                          <a href="#">Quran Intermediate Course Brother</a>
                          <h4>$16.00</h4>
                          <span>Course Free</span>
                      </div>
                      <div class="courses-weeks">
                          <h6>10 weeks</h6>
                          <div class="border"></div>
                          <h6>50 enroll</h6>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="courses">
                      <div class="courses-img">
                          <figure>
                              <img src="assets/img/courses-7.jpg" alt="img">
                          </figure>
                          <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                      <div class="scholar">
                          <img src="assets/img/scholar.jpg" alt="img">
                          <div>
                              <h4>Habib Al Noor</h4>
                              <span>Arabic scholar</span>
                          </div>
                      </div>
                      <div class="courses-text">
                          <a href="#">Quran Intermediate Course Brother</a>
                          <h4>$16.00</h4>
                          <span>Course Free</span>
                      </div>
                      <div class="courses-weeks">
                          <h6>10 weeks</h6>
                          <div class="border"></div>
                          <h6>50 enroll</h6>
                      </div>
                  </div>
              </div>
          </div>
  </div>
  
@include('Main-Website.Components.Footer')


@endsection
