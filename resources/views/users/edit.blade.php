@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit User</h2>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
        @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('users.update', $user->id) }}">
    @method('PATCH')
    @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}">
            </div>
            <div class="form-group">
                <label for="phonenumber">Phone Number</label>
                <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="{{ $user->phonenumber }}">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ $user->age }}">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="Male" {{ $user->gender == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $user->gender == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="country" name="country" value="{{ $user->country }}">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ $user->city }}">
            </div>
            <div class="form-group">
                <label for="is_admin">User Role</label>
                <select class="form-control" id="is_admin" name="is_admin">
                    <option value="1" {{ $user->is_admin == 1 ? 'selected' : '' }}>Admin</option>
                    <option value="2" {{ $user->is_admin == 2 ? 'selected' : '' }}>Content Creator</option>
                    <option value="3" {{ $user->is_admin == 3 ? 'selected' : '' }}>Company</option>
                    <option value="4" {{ $user->is_admin == 4 ? 'selected' : '' }}>User</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
@endsection