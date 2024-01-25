
        <!-- preloader-end -->
        @extends('layouts.app')

@section('content')


@include('includes.navbar')

        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            <!-- slider-area -->
    

            <section class="slider-area slider-bg" data-background="{{asset('assets/front/img/banner/s_slider_bg.jpg')}}">
            @foreach ($all_tvproductions as $item) 
            @if ($loop->iteration > 4)
        @break
    @endif
            <div class="slider-active">
                    <div class="slider-item">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-0 order-lg-2">
                                    <div class="slider-img text-center text-lg-right" data-animation="fadeInRight" data-delay="1s">
                                    <img src="{{ asset('cover_photos/' .$item->cover_photo) }}" alt="" style="width: 420px;">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-content">
                                        <h6 class="sub-title" data-animation="fadeInUp" data-delay=".2s"><a href="{{ URL::to('tvproduction/' . $item->id) }}">Zimboflix</a></h6>
                                        <h3 class="title" data-animation="fadeInUp" data-delay=".4s">{{ $item->title}} </h3>
                                        <div class="banner-meta" data-animation="fadeInUp" data-delay=".6s">
                                            <ul>
                                                <li class="quality">
                                                    <span>Pg 18</span>
                                                    <span>hd</span>
                                                </li>
                                                <li class="category">
                                                    <a href="#">{{ $item->type}}</a>
                                                    <a href="#">{{ $item->category->name }}</a>
                                                </li>
                                                <li class="release-time">
                                                    <span><i class="far fa-calendar-alt"></i> {{ $item->release_date->format('Y') }}</span>
                                                     </li>
                                            </ul>
                                        </div>
                                        <a href="{{ URL::to('tvproduction/' . $item->id) }}" class="banner-btn btn popup-video" data-animation="fadeInUp" data-delay=".8s"><i class="fas fa-play"></i> Watch Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
            </section>
            <!-- slider-area-end -->

            <!-- up-coming-movie-area -->
            <section class="ucm-area ucm-bg2" data-background="{{asset('assets/front/img/bg/ucm_bg02.jpg')}}">
                <div class="container">
                    <div class="row align-items-end mb-55">
                        <div class="col-lg-6">
                            <div class="section-title title-style-three text-center text-lg-left">
                                <span class="sub-title">ONLINE STREAMING/OFFLINE DOWNLOAD</span>
                                <h2 class="title">Recommended</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ucm-nav-wrap">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="tvShow-tab" data-toggle="tab" href="#tvShow" role="tab" aria-controls="tvShow" aria-selected="true">TV Shows</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="false">Movies</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="anime-tab" data-toggle="tab" href="#anime" role="tab" aria-controls="anime" aria-selected="false">Anime</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
                            <div class="ucm-active-two owl-carousel">
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="{{asset('assets/front/img/poster/s_ucm_poster01.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Blue Roof</a></h5>
                                        <span class="rel">Commedy</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">TV Show</a>
                                                    <a href="#">2022</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="{{asset('assets/front/img/poster/s_ucm_poster02.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Wadiwa we pamoyo</a></h5>
                                        <span class="rel">Comedy</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">TV Show</a>
                                                    <a href="#">2021</a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="{{asset('assets/front/img/poster/s_ucm_poster03.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Crossroads</a></h5>
                                        <span class="rel">Romantic</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">TV Show</a>
                                                    <a href="#">2021</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="{{asset('assets/front/img/poster/s_ucm_poster04.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Denny J Show</a></h5>
                                        <span class="rel">Reality Show</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">TV Show</a>
                                                    <a href="#">2021</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="{{asset('assets/front/img/poster/s_ucm_poster05.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="{{asset('assets/front/img/poster/s_ucm_poster06.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="movies" role="tabpanel" aria-labelledby="movies-tab">
                            <div class="ucm-active-two owl-carousel">
                            @foreach ($all_tvproductions as $item)
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="{{ asset('cover_photos/' .$item->cover_photo) }}" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html"> <td>{{ $item->title}}</td></a></h5>
                                        <span class="rel">{{ $item->type}}</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="anime" role="tabpanel" aria-labelledby="anime-tab">
                            <div class="ucm-active-two owl-carousel">
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="{{asset('assets/front/img/poster/s_ucm_poster01.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="{{asset('assets/front/img/poster/s_ucm_poster02.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Parkar Legend</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="{{asset('assets/front/img/poster/s_ucm_poster03.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Tonoy 88 Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="{{asset('assets/front/img/poster/s_ucm_poster04.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Ackle Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="{{asset('assets/front/img/poster/s_ucm_poster05.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="movie-details.html"><img src="{{asset('assets/front/img/poster/s_ucm_poster06.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                        <span class="rel">Adventure</span>
                                        <div class="movie-content-bottom">
                                            <ul>
                                                <li class="tag">
                                                    <a href="#">HD</a>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- up-coming-movie-area-end -->

            <!-- gallery-area -->
            <!-- gallery-area-end -->

            <!-- services-area -->
            
            <!-- services-area-end -->

            <!-- top-rated-movie -->
            <section class="top-rated-movie tr-movie-bg2" data-background="{{asset('assets/front/img/bg/tr_movies_bg.jpg')}}">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title title-style-three text-center mb-70">
                                <span class="sub-title">Latest TV Shows</span>
                                <h2 class="title">Latest Online Shows Watch</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row movie-item-row">
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster01.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><p>Progress in our investigations! Getting closer to uncovering the truth.</p></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster02.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">The Parkar Legend</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster03.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">The Ackle Bottle</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster04.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">The Speed 2</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster05.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">The Legend Emo</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster06.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">Envato Bottle 88</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster07.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">Message Bottle II</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster08.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">The Message B.</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster09.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">Tiger World Q.</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">Bluray</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster10.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">Avenger World IV</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tr-movie-btn text-center mt-25">
                        <a href="#" class="btn">BROWSE ALL TV SHOWS</a>
                    </div>
                </div>
            </section>
            <!-- top-rated-movie-end -->
            <section class="top-rated-movie tr-movie-bg2" data-background="{{asset('assets/front/img/bg/tr_movies_bg.jpg')}}">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title title-style-three text-center mb-70">
                                <span class="sub-title">Latest MOVIES</span>
                                <h2 class="title">Latest Online Movies To Watch</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row movie-item-row">
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster01.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">Message in a Bottle</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster02.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">The Parkar Legend</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster03.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">The Ackle Bottle</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster04.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">The Speed 2</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster05.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">The Legend Emo</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster06.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">Envato Bottle 88</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster07.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">Message Bottle II</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster08.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">The Message B.</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster09.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">Tiger World Q.</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">Bluray</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{asset('assets/front/img/poster/s_ucm_poster10.jpg')}}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                        <li><a href="movie-details.html" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5 class="title"><a href="movie-details.html">Avenger World IV</a></h5>
                                    <span class="rel">Adventure</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tr-movie-btn text-center mt-25">
                        <a href="#" class="btn">BROWSE ALL MOVIES</a>
                    </div>
                </div>
            </section>
            <!-- pricing-area -->
            
            <!-- pricing-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        @include('includes.footer')
        <!-- footer-area-end -->
        @endsection



	
