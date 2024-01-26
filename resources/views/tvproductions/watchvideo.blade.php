
        <!-- preloader-end -->
        @extends('layouts.app')

@section('content')

        <!-- main-area -->
        <main>

            <!-- movie-details-area -->
           
  
            <video id="videoPlayer" controls style="width: 100%; height: 100%;">
                <source src="{{ asset('videos/' . $data->file) }}" type="video/mp4">
        @endsection

