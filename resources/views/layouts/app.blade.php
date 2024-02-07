<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from themebeyond.com/html/movflx/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Dec 2023 13:05:57 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Zimflix</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/front/img/favicon.png')}}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/odometer.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/default.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">
        <style>
    .video-wrapper {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 aspect ratio (9 / 16 * 100) */
        height: 0;
        overflow: hidden;
    }

    .video-wrapper video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    @media (max-width: 767px) {
        .video-wrapper {
            padding-bottom: 75%; /* Adjust the aspect ratio for smaller screens if needed */
        }
    }
    .poster-image {
    object-fit: cover;
    width: 100%;
    height: 100%;
}
</style>
    </head>
    <body>

    

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="img/preloader.svg" alt="">
                </div>
            </div>
        </div>
        <main >
            @yield('content')
        </main>
<!-- JS here -->
        <script src="{{asset('assets/front/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/front/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/front/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/front/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.odometer.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.appear.js')}}"></script>
        <script src="{{asset('assets/front/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/front/js/ajax-form.js')}}"></script>
        <script src="{{asset('assets/front/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/front/js/aos.js')}}"></script>
        <script src="{{asset('assets/front/js/plugins.js')}}"></script>
        <script src="{{asset('assets/front/js/main.js')}}"></script>
        <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
        <script>
    var videoPlayer = document.getElementById('videoPlayer');
    var videoLength = document.getElementById('videoLength');

    videoPlayer.addEventListener('loadedmetadata', function() {
        var duration = videoPlayer.duration;
        var minutes = Math.floor(duration / 60);
        var seconds = Math.floor(duration % 60);
        var formattedDuration = minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
        videoLength.textContent = 'Video Length: ' + formattedDuration;
    });
</script>

    </body>

<!-- Mirrored from themebeyond.com/html/movflx/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Dec 2023 13:06:12 GMT -->
</html>
