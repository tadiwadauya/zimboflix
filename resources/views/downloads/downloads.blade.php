<!-- downloads.blade.php -->

@extends('layouts.app') <!-- Assuming you have a common layout file -->

@section('content')
    <h1>Downloaded Videos</h1>
    
    <div class="video-container">
        @foreach($videos as $video)
            <div class="video-card">
                <video src="{{ asset('videos/' . $video->file) }}"></video>
                <a href="{{ asset('videos/' . $video->file) }}" download>{{ $video->name }}</a>
            </div>
        @endforeach
    </div>
@endsection
