<?php
/**
 * Created by Tadiwa Dauya
 * Date: 22/01/2024
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
<div class="card card-bordered card-preview">
    
                                        <div class="card-inner">
                                            <div class="preview-block">
                                            <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">List of Tv Production</h3>
                                       
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">

                                                <li>
                                                    <a href="{{ url()->previous() }}" class="btn btn-white btn-dim btn-outline-primary">
                                                    <em class="icon ni ni-chevron-left-round-fill"></em>
                                                        <span>back</span>
                                                    </a>
                                                </li>
                                                    <li><a href="{{ url('/admin/home')}}" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-home"></em><span>Home</span></a></li>
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="{{ url('/tvproductions')}}"><em class="icon ni ni-list"></em><span>Production list</span></a></li>
                                                                    <li><a href="{{ url('/tvproductions/create')}}">  <em class="icon ni ni-plus-fill-c"></em><span>Add Production</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
    
    <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block">
                                <div class="card card-bordered">
                                    <div class="card-aside-wrap">
                                        <div class="card-inner card-inner-lg">
                                            <div class="nk-block-head nk-block-head-lg">
                                                <div class="nk-block-between">
                                                <div class="col-sm-8 col-lg-6">
                                        <div class="gallery card card-bordered">
                                            <a class="gallery-image popup-image" href="./images/stock/a.jpg">
                                            <video width="500" height="420" controls>
                                                        <source src="{{ asset('videos/' . $data->file) }}" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                            </a>
                                            <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                    <img src="{{ asset('cover_photos/' . $data->cover_photo) }}" alt="Cover Image" >
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{ $data->title}}</span>
                                                        <span class="sub-text">{{ $data->category->name }}</span>
                                                    </div>
                                                </div>
                                                <div>
                                                
                                                <button class="btn btn-p-0 btn-nofocus"><em class="icon ni ni-download"></em></em><span>{{ $data->downloads }}</span></button>
                                                    <button class="btn btn-p-0 btn-nofocus"><em class="icon ni ni-eye"></em><span>{{ $data->views }}</span></button>
                                                </div>
                                            </div>
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
                                                        <h6 class="overline-title">Description</h6>
                                                    </div>
                                                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                        <div class="data-col">
                                                        <td>{{ $data->description}}</td>
                                                        </div>
                                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                    </div><!-- data-item -->
                                                   
                                                    <div class="data-item">
                                                        
                                               </div><!-- data-item -->
                                                </div><!-- data-list -->
                                            </div><!-- .nk-block -->
                                        </div>
                                        <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-toggle-body="true" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                            <div class="card-inner-group" data-simplebar>
                                                <div class="card-inner">
                                                    <div class="user-card">
                                                        
                                                        <div class="user-info">
                                                        <img src="{{ asset('cover_photos/' . $data->cover_photo) }}" alt="Cover Image" >
                                                        </div>
                                                        
                                                    </div><!-- .user-card -->
                                                </div><!-- .card-inner -->
                                                <div class="card-inner">
                                                    <div class="user-account-info py-0">
                                                        <h6 class="overline-title-alt">Title</h6>
                                                        <div class="user-balance">{{ $data->title}} </div>
                                                        <div class="user-balance-sub">Category: <span>{{ $data->category->name }} </span></div>
                                                        <div class="user-balance-sub">Views: <span>{{ $data->views }} </span></div>
                                                        <div class="user-balance-sub">Downloads: <span>{{ $data->downloads }} </span></div>
                                                    </div>
                                                </div><!-- .card-inner -->
                                                <div class="card-inner p-0">
                                                    <ul class="link-list-menu">
                                                        <li><a class="active" ><em class="icon ni ni-bullet-fill"></em><span>type: {{ $data->type}}</span></a></li>
                                                        <li><a   class="active" ><em class="icon ni ni-bullet-fill"></em><span>Origin: {{ $data->country}}</span></a></li>
                                                        <li><a  class="active" ><em class="icon ni ni-bullet-fill"></em><span>Release Date: {{ $data->release_date}}</span></a></li>
                                                        <li><a  class="active" ><em class="icon ni ni-bullet-fill"></em><span>Director: {{ $data->director}}</span></a></li>
                                                        <li><a class="active" ><em class="icon ni ni-bullet-fill"></em></em><span>Production_company: {{ $data->production_company}}</span></a></li>
                                                        <li><a class="active"  ><em class="icon ni ni-bullet-fill"></em><span>Cast: {{ $data->cast}}</span></a></li>
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
    </div>
    </div>
    </div>
    </div>
       
@endsection

@section('footer_scripts')

@endsection
