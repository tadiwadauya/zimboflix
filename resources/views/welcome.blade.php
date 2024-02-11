
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
            @if (empty($item->parent_id))
            @if ($loop->iteration > 4)
        @break
    @endif
            <div class="slider-active">
                    <div class="slider-item">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-0 order-lg-2">
                                    <div class="slider-img text-center text-lg-right" data-animation="fadeInRight" data-delay="1s">
                                    <a href="{{ route('productionviews.increment', ['id' => $item->id]) }}"> <img src="{{ asset('cover_photos/' .$item->cover_photo) }}" alt="" style="width: 420px;"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-content">
                                        <h6 class="sub-title" data-animation="fadeInUp" data-delay=".2s">Zimboflix</h6>
                                        <h3 class="title" data-animation="fadeInUp" data-delay=".4s"><a href="{{ route('productionviews.increment', ['id' => $item->id]) }}">{{ $item->title}} </a></h3>
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
                                                <span>
    <i class="far fa-calendar-alt"></i>
    @if ($item->release_date)
        {{ $item->release_date->format('Y') }}
    @else
        Unknown
    @endif
</span>
                                                     </li>
                                            </ul>
                                        </div>
                                        <a href="{{ URL::to('tv/' . $item->id) }}" class="banner-btn btn popup-video" data-animation="fadeInUp" data-delay=".8s"><i class="fas fa-play"></i> Watch Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
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
                                        <a class="nav-link active" id="tvShow-tab" data-toggle="tab" href="#tvShow" role="tab" aria-controls="tvShow" aria-selected="true">Movies</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="false">TV Shows</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="skits-tab" data-toggle="tab" href="#skits" role="tab" aria-controls="skits" aria-selected="false">Skits</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
                            <div class="ucm-active-two owl-carousel">
                        @foreach ($all_tvproductions as $item)
                            @if ($item->category->name == 'Movie')
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                    <a href="{{ route('productionviews.increment', ['id' => $item->id]) }}"><img src="{{ asset('cover_photos/' .$item->cover_photo) }}" alt=""></a>
                                   </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="{{ route('productionviews.increment', ['id' => $item->id]) }}"> <td>{{ $item->title}}</td></a></h5>
                                        <span class="rel">{{ $item->type}}</span>
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
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="movies" role="tabpanel" aria-labelledby="movies-tab">
                            <div class="ucm-active-two owl-carousel">
                            @foreach ($all_tvproductions as $item)
                            @if ($item->category->name == 'Tv Show')
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                        <a href="{{ route('productionviews.increment', ['id' => $item->id]) }}"><img src="{{ asset('cover_photos/' .$item->cover_photo) }}" alt=""></a>
                                    </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="{{ route('productionviews.increment', ['id' => $item->id]) }}"> <td>{{ $item->title}}</td></a></h5>
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
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="skits" role="tabpanel" aria-labelledby="skits-tab">
                            <div class="ucm-active-two owl-carousel">
                            @foreach ($all_tvproductions as $item)
                            @if ($item->category->name == 'skits')
                                <div class="movie-item movie-item-two mb-30">
                                    <div class="movie-poster">
                                    <a href="{{ route('productionviews.increment', ['id' => $item->id]) }}"><img src="{{ asset('cover_photos/' .$item->cover_photo) }}" alt=""></a>
                                     </div>
                                    <div class="movie-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5 class="title"><a href="{{ route('productionviews.increment', ['id' => $item->id]) }}"> <td>{{ $item->title}}</td></a></h5>
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
                                @endif
                                @endforeach
                               
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
                    <span class="sub-title">Latest TV Shows and Skits</span>
                    <h2 class="title">Latest Online Shows and Skits To Watch</h2>
                </div>
            </div>
        </div>
        <div class="row movie-item-row">
        @foreach ($all_tvproductions as $item)
    @if (($item->category->name == 'Tv Show' && $item->parent_id == null) || $item->category->name == 'skits')
      
                    <div class="custom-col-"> 
                        <div class="movie-item movie-item-two">
                            <div class="movie-poster">
                                <img src="{{ asset('cover_photos/' .$item->cover_photo) }}" alt="">
                                <ul class="overlay-btn">
                                    <li><a href="{{ route('productionviews.increment', ['id' => $item->id]) }}" class=" btn">Watch Now</a></li>
                                    <li><p class="description">{{ substr($item->description, 0, 105) }}{{ strlen($item->description) > 105 ? '...' : '' }}</p></li>
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
                                <h5 class="title"><a href="{{ route('productionviews.increment', ['id' => $item->id]) }}">{{ $item->title}}</a></h5>
                                <span class="rel">{{ $item->type}}</span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">
                                            <a href="#">HD</a>
                                            <a href="#">{{ $item->category->name}}</a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
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
                    @foreach ($all_tvproductions as $item)
                            @if ($item->category->name == 'Movie')
                        <div class="custom-col-">
                            <div class="movie-item movie-item-two">
                                <div class="movie-poster">
                                    <img src="{{ asset('cover_photos/' .$item->cover_photo) }}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="{{ route('productionviews.increment', ['id' => $item->id]) }}" class="btn">Watch Now</a></li>
                                        <li><p class="description">{{ substr($item->description, 0, 105) }}{{ strlen($item->description) > 105 ? '...' : '' }}</p></li>
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
                                    <h5 class="title"><a href="{{ route('productionviews.increment', ['id' => $item->id]) }}">{{ $item->title}}</a></h5>
                                    <span class="rel">{{ $item->type}}</span>
                                    <div class="movie-content-bottom">
                                        <ul>
                                            <li class="tag">
                                                <a href="#">HD</a>
                                                <a href="#">{{ $item->category->name}}</a>
                                            </li>
                                            <li>
                                                <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        @endif
                                @endforeach
                    </div>
                    <div class="tr-movie-btn text-center mt-25">
                     <a href="{{ url('movielist')}}" class="btn">BROWSE ALL MOVIES</a>
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



	
