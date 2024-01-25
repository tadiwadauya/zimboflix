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
                                        <h3 class="nk-block-title page-title">Adding new category</h3>
                                        
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
                                                                    <li><a href="{{ url('/categories')}}">  <em class="icon ni ni-list"></em><span>Categories</span></a></li>
                                                                    <li><a href="{{ url('/categories/create')}}">  <em class="icon ni ni-plus-fill-c"></em><span>Add Category</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
           

<form method="POST" action="{{ route('categories.store') }}">
    @csrf
    <div class="row gy-4">
    <div class="col-sm-9">
    <div class="form-group">
        <label class="form-label" for="default-01" for="name">Category Name:</label>
        <div class="form-control-wrap">
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    </div>
    </div>
    </div>
    <br>
    <div class="form-group" > 
    <button type="submit" class="btn btn-primary">Create Category</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection