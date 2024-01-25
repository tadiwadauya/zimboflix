
        <!-- preloader-end -->
        @extends('layouts.app')

@section('content')


@include('includes.navbar')
        <!-- main-area -->
        <main>

            <!-- movie-details-area -->
            <section class="movie-details-area" data-background="{{asset('assets/front/img/bg/movie_details_bg.jpg')}}">
                <div class="container">
                <div class="movie-details-img">
    <div class="video-wrapper">
        <video id="videoPlayer" controls>
            <source src="{{ asset('videos/' . $data->file) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>
<br>
                    <div class="row align-items-center position-relative">
                        <div class="col-xl-3 col-lg-4">
                            <div class="movie-details-img">
                            <img src="{{ asset('cover_photos/' . $data->cover_photo) }}" alt="" style="width: 300px; ">
                            <a href="" class="popup-video">
                                <img src="{{asset('assets/front/img/images/play_icon.png')}}" alt="">
                            </a>
                        </div>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <div class="movie-details-content">
                                <h2> <span>{{ $data->title}}</span></h2>
                                <div class="banner-meta">
                                    <ul>
                                        <li class="quality">
                                            <span>Pg 18</span>
                                            <span>hd</span>
                                        </li>
                                        <li class="category">
                                            <a href="#">{{ $data->Type}}</a>
                                            <a href="#">{{ $data->category->name }}</a>
                                        </li>
                                        <li class="release-time">
                                            <span><i class="far fa-calendar-alt"></i> {{ $data->release_date->format('Y') }}</span>
                                            <span><i ></i> <p class="far fa-clock"  id="videoLength"></p></span>
                                        </li>
                                    </ul>
                                </div>
                                <p>{{ $data->description}}</p>
                                <div class="movie-details-prime">
                                    <ul>
                                        <li class="share"><a href="#"><i class="fas fa-share-alt"></i> Share</a></li>
                                        <li class="streaming">
                                            <h6>Prime Video</h6>
                                            <span>Streaming Channels</span>
                                        </li>
                                        <li class="watch"><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-details-btn">
                            <a href="{{asset('assets/front/img/poster/movie_details_img.jpg')}}" class="download-btn" download="">Download <img src="fonts/download.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- movie-details-area-end -->

            <!-- episode-area -->
            <section class="episode-area episode-bg" data-background="{{asset('assets/front/img/bg/episode_bg.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="movie-episode-wrap">
                                <div class="episode-top-wrap">
                                    <div class="section-title">
                                        <span class="sub-title">ONLINE STREAMING</span>
                                        <h2 class="title">Watch Full {{ $data->category->name }}</h2>
                                    </div>
                                    <div class="total-views-count">
                                        <p>{{ $data->views }} <i class="far fa-eye"></i></p>
                                    </div>
                                </div>
                                <div class="episode-watch-wrap">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <button class="btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <span class="season">Download</span>
                                                    <span class="video-count">all the sizes available</span>
                                                </button>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                @if(Auth::check())
                                                    <ul>
                                                        <li><a href="{{ asset('videos/' . $data->file) }}" download><i class="fas fa-download"></i>Download Original</a><span class="duration"><i class="far fa-size"></i> 1 g</span></li>
                                                        <li><a href="{{ asset('videos/' . $data->file) }}?size=360p" download><i class="fas fa-download"></i>Download 720p</a><span class="duration"><i class="far fa-size"></i> 750 mb</span></li>
                                                        <li><a href="{{ asset('videos/' . $data->file) }}?size=480p" download><i class="fas fa-download"></i>Download 480p</a><span class="duration"><i class="far fa-size"></i> 450 mb</span></li>
                                                        <li><a href="{{ asset('videos/' . $data->file) }}?size=720p" download><i class="fas fa-download"></i>Download 360p</a><span class="duration"><i class="far fa-size"></i> 280 mb</span></li>
                                                        <li><a href="{{ asset('videos/' . $data->file) }}?size=720p" download><i class="fas fa-download"></i>Download 240</a><span class="duration"><i class="far fa-size"></i> 180 mb</span></li>
                                                    </ul>
                                                @else
                                                    <p>Please <a href="{{ route('login') }}">login</a> to download the videos.</p>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="card">
                                        @if($data->category->name === 'tv series')
                                            <div class="card-header" id="headingTwo">
                                                <button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <span class="season">Season 1</span>
                                                    <span class="video-count">5 Full Episodes</span>
                                                </button>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ul>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 1 - The World Is Purple</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 2 - Meaner Than Evil</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 3 - I Killed a Man Today</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 4 - Cowboys and Dreamers</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 5 - Freight Trains and Monsters</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endif
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ul>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 1 - The World Is Purple</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span>
                                                        </li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 2 - Meaner Than Evil</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 3 - I Killed a Man Today</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span>
                                                        </li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 4 - Cowboys and Dreamers</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span>
                                                        </li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 5 - Freight Trains and Monsters</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="episode-img">
                                <img src="{{asset('assets/front/img/images/episode_img.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                   
                </div>
            </section>
            <!-- episode-area-end -->

            <!-- tv-series-area -->
         
            <!-- tv-series-area-end -->

            <!-- newsletter-area -->
            <section class="newsletter-area newsletter-bg" data-background="{{asset('assets/front/img/bg/newsletter_bg.jpg')}}">
                <div class="container">
                    <div class="newsletter-inner-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="newsletter-content">
                                    <h4>Trial Start First 30 Days.</h4>
                                    <p>Enter your email to create or restart your membership.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <form action="#" class="newsletter-form">
                                    <input type="email" required placeholder="Enter your email">
                                    <button class="btn">get started</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- newsletter-area-end -->

        </main>
        <!-- main-area-end -->
        @include('includes.footer')
        <!-- footer-area-end -->
        @endsection

