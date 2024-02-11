
        <!-- preloader-end -->
        @extends('layouts.app')

        @section('content')


        @include('includes.navbar')
        <!-- main-area -->
        <main>
<main>



    <!-- movie-area -->
<section class="movie-area movie-bg" data-background="{{asset('assets/front/img/bg/movie_bg.jpg')}}">
    <div class="container">
        <!-- Displaying Online Streaming and New Release Movies -->
        <div class="row align-items-end mb-60">
            <div class="col-lg-6">
                <div class="section-title text-center text-lg-left">
                    <span class="sub-title">ONLINE STREAMING</span>
                    
                    <h2 class="title">Your Search Results</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="movie-page-meta">
                    <!-- Displaying different types of movies -->
                    <div class="tr-movie-menu-active text-center">
    <button class="active" data-filter="*">All</button>
    @foreach ($all_tvproductions->unique('type') as $item)
        <button class="" data-filter=".{{ $item->type}}">{{ $item->type}}</button>
    @endforeach
</div>
                    <!-- Displaying movie filter form -->
               
                </div>
            </div>
        </div>
        <!-- Displaying movie items with different types -->
        <div class="row tr-movie-active">
        @if(count($all_tvproductions) > 0)
        <ul>
        @foreach ($all_tvproductions as $item)
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer {{ $item->type}}">
                <div class="movie-item movie-item-three mb-50">
                    <div class="movie-poster">
                        <img class="poster-image" src="{{ asset('cover_photos/' .$item->cover_photo) }}" alt="">
                        <ul class="overlay-btn">
                            <li><a href="{{ URL::to('tvproduction/' . $item->id) }}" class=" btn">Watch Now</a></li>
                            <li><p class="description">{{ substr($item->description, 0, 105) }}{{ strlen($item->description) > 105 ? '...' : '' }}</p></li>
                        </ul>
                    </div>
                    <div class="movie-content">
                     
                        <div class="top">
                            <h5 class="title"><a href="{{ URL::to('tvproduction/' . $item->id) }}">{{ $item->title}}</a></h5>
                            <span class="date">2021</span>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li><span class="quality">HD</span></li>
                                <li>
                                    <span class="duration"><i class="far fa-image"></i> {{ $item->category->name}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
</ul>
            @endforeach
            @else
        <h2>No search results found.</h2>
    @endif
        </div>
    
        <div class="row">
    <div class="col-3">
        <div class="pagination-wrap mt-30">
            <nav>
        
            </nav>
        </div>
    </div>
</div>
    </div>
</section>

    <!-- movie-area-end -->

    <!-- newsletter-area-end -->

</main>

@include('includes.footer')
        <!-- footer-area-end -->
        @endsection