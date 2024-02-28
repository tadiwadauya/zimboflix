@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>User Details</h2>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $user->first_name }} {{ $user->last_name }}</h5>
                <p class="card-text">Phone Number: {{ $user->phonenumber }}</p>
                <p class="card-text">Age: {{ $user->age }}</p>
                <p class="card-text">Gender: {{ $user->gender }}</p>
                <p class="card-text">Country: {{ $user->country }}</p>
                <p class="card-text">City: {{ $user->city }}</p>
                <p class="card-text">User Role: 
                    @if ($user->is_admin == 1)
                        <span class="badge badge-primary">Admin</span>
                    @elseif ($user->is_admin == 2)
                        <span class="badge badge-secondary">Content Creator</span>
                    @elseif ($user->is_admin == 3)
                        <span class="badge badge-success">Company</span>
                    @elseif ($user->is_admin == 4)
                        <span class="badge badge-info">User</span>
                    @endif
                </p>
            </div>
        </div>
    </div>
@endsection