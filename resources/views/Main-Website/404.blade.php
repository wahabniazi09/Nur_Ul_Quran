@extends('Main-Website.Components.Master')

@section('Content')

@include('Main-Website.Components.Navbar')

<section class="error-404" style="background-image: url(assets/img/bannr-img.jpg);">
    <div class="container">
      <div class="row">
          <div class="error">
            <h2>4<span>0</span>4</h2>
            <h3>Sorry! The page can’t be found.</h3>
            <p>The page you're looking for isn't available. Try with another page or use the go home button below</p>
            <form>
            <input type="text" name="email" placeholder="Enter your email address...">
            <button type="submit" class="error-button"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
          <a href="index.html" class="btn"><i class="fa-solid fa-house"></i><span>Back To Home</span></a>
          </div>
      </div>
    </div>
  </section>

@include('Main-Website.Components.Footer')


@endsection
 
  