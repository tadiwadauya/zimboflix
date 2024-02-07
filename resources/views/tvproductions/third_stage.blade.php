@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Upload Third File</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('save_third_stage', ['id' => $tvProduction->id]) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="third_file" class="col-md-4 col-form-label text-md-right">{{ __('Third File') }}</label>

                                <div class="col-md-6">
                                    <input id="third_file" type="file" class="form-control @error('third_file') is-invalid @enderror" name="third_file" required>

                                    @error('third_file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection