@foreach ($videos as $video)
    <a href="{{ asset('videos/' . $video->file) }}" download>{{ $video->title }}</a><br>
@endforeach