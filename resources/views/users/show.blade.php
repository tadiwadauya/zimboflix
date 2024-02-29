<?php
/**
 * Created by Tadiwa Dauya
 * Date: 21/01/2024
 * Time: 12:58 PM
 */
?>
@extends('layouts.admin.app')
@section('content')
@if(auth()->check())
    @include('includes.sidebar')
@endif

<div class="nk-wrap ">
@if(auth()->check())
    @include('includes.nav')
@endif

<div class="nk-content nk-content-fluid">
    
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block">
                                <div class="card card-bordered">
                                    <div class="card-aside-wrap">
                                        <div class="card-inner card-inner-lg">
                                            <div class="nk-block-head nk-block-head-lg">
                                                <div class="nk-block-between">
                                                    <div class="nk-block-head-content">
                                                        <h4 class="nk-block-title">Information  of {{ $user->first_name }} {{ $user->last_name }}</h4>
                                                        <div class="nk-block-des">
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                    <div class="nk-block-head-content align-self-start d-lg-none">
                                                        <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-block-head -->
                                            <div class="nk-block">
                                                <div class="nk-data data-list">
                                                    <div class="data-head">
                                                        <h6 class="overline-title">Details</h6>
                                                    </div>
                                                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Full Name</span>
                                                            <span class="data-value">{{ $user->first_name }} {{ $user->last_name }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                    </div><!-- data-item -->
                                                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">User Role</span>
                                                           @if ($user->is_admin == 1)
                        <span  class="data-value">Admin</span>
                    @elseif ($user->is_admin == 2)
                        <span  class="data-value">Content Creator</span>
                    @elseif ($user->is_admin == 3)
                        <span  class="data-value">Company</span>
                    @elseif ($user->is_admin == 4)
                        <span  class="data-value">User</span>
                    @endif</span>
                                                        </div>
                                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                    </div><!-- data-item -->
                                                    <div class="data-item">
                                                        <div class="data-col">
                                                            <span class="data-label">Email</span>
                                                            <span class="data-value">{{ $user->email }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                    </div><!-- data-item -->
                                                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Phone Number</span>
                                                            <span class="data-value text-soft">{{ $user->phonenumber }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                    </div><!-- data-item -->
                                                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Age</span>
                                                            <span class="data-value">{{ $user->age }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                    </div><!-- data-item -->
                                                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                                                        <div class="data-col">
                                                            <span class="data-label">Country and City</span>
                                                            <span class="data-value">{{ $user->country }}<br>{{ $user->City }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                    </div><!-- data-item -->
                                                </div><!-- data-list -->
                                               
                                                @if ($user->is_admin == 2)
    <div class="nk-data data-list">
        <div class="data-head">
            <h6 class="overline-title">Content</h6>
        </div>
        <div class="data-item">
            <div class="data-col">
                <span class="data-label">Language</span>
                <span class="data-value">English (United States)</span>
            </div>
            <div class="data-col data-col-end"><a href="#" class="link link-primary">Change Language</a></div>
        </div><!-- data-item -->
        <div class="data-item">
            <div class="data-col">
                <span class="data-label">Date Format</span>
                <span class="data-value">M d, YYYY</span>
            </div>
            <div class="data-col data-col-end"><a href="#" class="link link-primary">Change</a></div>
        </div><!-- data-item -->
        <div class="data-item">
            <div class="data-col">
                <span class="data-label">Timezone</span>
                <span class="data-value">Bangladesh (GMT +6)</span>
            </div>
            <div class="data-col data-col-end"><a href="#" class="link link-primary">Change</a></div>
        </div><!-- data-item -->
    </div><!-- data-list -->
@endif


                                            </div><!-- .nk-block -->
                                        </div>
                                        <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-toggle-body="true" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                            <div class="card-inner-group" data-simplebar>
                                                <div class="card-inner">
                                                    <div class="user-card">
                                                        <div class="user-avatar bg-primary">
                                                            <span><span>{{ substr($user->first_name, 0, 1) . substr($user->last_name, 0, 1) }}</span></span>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="lead-text">{{ $user->first_name }} {{ $user->last_name }}</span>
                                                            <span class="sub-text">{{ $user->phonenumber }}</span>
                                                        </div>
                                                        <div class="user-action">
                                                            <div class="dropdown">
                                                                <a class="btn btn-icon btn-trigger me-n2" data-bs-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                         <li><a href="{{ route('users.edit',$user->id) }}"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .user-card -->
                                                </div><!-- .card-inner -->
                                                
                                                <div class="card-inner p-0">
                                                    <ul class="link-list-menu">
                                                    <li><a class="active" href=""><em class="icon ni ni-user-fill-c"></em><span>User Details</span></a></li>
                                                        <li><a href="{{ route('users.edit',$user->id) }}"><em class="icon ni ni-user-fill-c"></em><span>Edit Infomation</span></a></li>
                                                        <li><a href="{{ url('users') }}"><em class="icon ni ni-users"></em><span>User List</span></a></li>
                                                        <li><a href="{{ url('home') }}"><em class="icon ni ni-home"></em><span>Home</span></a></li>
                                                    </ul>
                                                </div><!-- .card-inner -->
                                            </div><!-- .card-inner-group -->
                                        </div><!-- card-aside -->
                                    </div><!-- .card-aside-wrap -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>
    
@endsection