
        <!-- preloader-end -->
        @extends('layouts.app')

        @section('content')


        @include('includes.navbar')
        <!-- main-area -->
        <main>
            
            <section class="movie-details-area" data-background="{{asset('assets/front/img/bg/movie_details_bg.jpg')}}">
                <div class="container">
               

<div id="720" class="tabcontent">
<div class="video-wrapper">
        <video id="videoPlayer" controls>
        <source src="{{ asset('videos/' . $data->file) }}" type="video/mp4" download>
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div id="480" class="tabcontent">
<div class="video-wrapper">
        <video id="videoPlayer" controls>
            <source src="{{ asset('videos/' . $data->second_file) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>
<br>
<div id="360" class="tabcontent">
<div class="video-wrapper">
<video id="videoPlayer" controls>
    @if($data->third_file)
        <source src="{{ asset('videos/' . $data->third_file) }}" type="video/mp4">
    @else
        <p>no video available to play</p>
    @endif
    Your browser does not support the video tag.
</video>

    </div>
</div>
<br>
<div id="240" class="tabcontent">
<div class="video-wrapper">
        <video id="videoPlayer" controls>
            <source src="{{ asset('videos/' . $data->fourth_file) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>
<div class="tr-movie-menu-active text-center">
                <div class="tab">
  <button class="tablinks" onclick="openCity(event, '720')" id="defaultOpen">720p HD</button>
  <button class="tablinks" onclick="openCity(event, '480')">480p</button>
  <button class="tablinks" onclick="openCity(event, '360')">360p</button>
  <button class="tablinks" onclick="openCity(event, '240')">240p</button>
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
                                <p>{{ $data->description}}</p><br>
                                <div >
                                    <ul>
                                    <li><div class="user-balance-sub">Views: <span>{{ $data->views }} </span></div> </li>
                                    <li><div class="user-balance-sub">Downloads: <span>{{ $data->downloads }} </span></div></li>
                                    <li><div class="user-balance-sub"><span>type: {{ $data->type}}</span></div></li>
                                    <li><div class="user-balance-sub"><span>Origin: {{ $data->country}}</span></div></li>
                                    <li><div class="user-balance-sub"><span>Release Date: {{ $data->release_date}}</span></div></li>
                                    <li><div class="user-balance-sub"><span>Director: {{ $data->director}}</span></div></li>
                                    <li><div class="user-balance-sub"><span>Production_company: {{ $data->production_company}}</span></div></li>
                                    <li><div class="user-balance-sub"><span>Cast: {{ $data->cast}}</span></div></li>
                                    </ul>
                                </div>
                            </div>
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
                                        <li>
                                           <form action="{{ route('productiondownloads.increment', ['id' => $data->id, 'download' => true]) }}" method="post">
                                            @csrf
                                            <button  class="quality fas fa-download" type="submit">Download 720p</button>
                                           <span class="duration"><i class="far fa-size"></i> {{ round(filesize(public_path('videos/' . $data->file)) / 1048576, 2) }} MB</span></form>
                                        </li>

                                        <li>
                                           <form action="{{ route('productiondownloads2nd.increment', ['id' => $data->id, 'download' => true]) }}" method="post">
                                            @csrf
                                            <button  class="quality fas fa-download" type="submit">Download 480p</button>
                                           <span class="duration"><i class="far fa-size"></i> {{ round(filesize(public_path('videos/' . $data->second_file)) / 1048576, 2) }} MB</span></form>
                                        </li>

                                        <li>
                                           <form action="{{ route('productiondownloads3rd.increment', ['id' => $data->id, 'download' => true]) }}" method="post">
                                            @csrf
                                            <button  class="quality fas fa-download" type="submit">Download 360p</button>
                                           <span class="duration"><i class="far fa-size"></i> {{ round(filesize(public_path('videos/' . $data->third_file)) / 1048576, 2) }} MB</span></form>
                                        </li>

                                        <li>
                                           <form action="{{ route('productiondownloads4th.increment', ['id' => $data->id, 'download' => true]) }}" method="post">
                                            @csrf
                                            <button  class="quality fas fa-download" type="submit">Download 240p</button>
                                           <span class="duration"><i class="far fa-size"></i> {{ round(filesize(public_path('videos/' . $data->fourth_file)) / 1048576, 2) }} MB</span></form>
                                        </li>

                                     </ul>      @else
                                                    <p>Please <a href="{{ route('login') }}">login</a> to download the videos.</p>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="card">
                                        @foreach ($grouped_tvproductions as $season => $tvproductions)
    <div class="card">
        <div class="card-header" id="heading{{ $season }}">
            <button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse{{ $season }}" aria-expanded="false" aria-controls="collapse{{ $season }}">
                <span class="season">Season {{ $season }}</span>
                <span class="video-count">{{ $tvproductions->count() }} Full Episodes</span>
            </button>
        </div>
        <div id="collapse{{ $season }}" class="collapse" aria-labelledby="heading{{ $season }}" data-parent="#accordionExample">
            <div class="card-body">
                <ul>
                @foreach ($tvproductions as $item)
                    <li><a href="{{ URL::to('tvproduction/' . $item->id) }}" ><i class="fas fa-play"></i>{{ $item->subtitle}}</a> <span class="duration"><i>Episode:</i> {{ $item->episode}}</span></li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
@endforeach
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

