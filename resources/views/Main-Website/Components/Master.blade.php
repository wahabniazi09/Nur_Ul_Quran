<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ibadah - Home 1</title>
    <link rel="icon" href="assets/img/favicon.png">
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">  
    <!-- fancybox -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/audioplayer.css">
    <!-- style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/preloader.js"></script>
</head>
<body>

@yield('Content')

<div class="search-popup">
        <button class="close-search"><i class="fa-solid fa-xmark"></i></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- search-popup end -->
    <!-- progress -->
    <div id="progress">
          <span id="progress-value"><i class="fa-solid fa-up-long"></i></span>
    </div>

   <!-- Bootstrap Js -->
   <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/circle-progres.js"></script>
    <!-- fancybox -->
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/audioplayer.js"></script>
    <script>
        $(function() {
            $('audio').audioPlayer();
        });
    </script>
    <script src="assets/js/custom.js"></script>
</body>