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
<div class="card card-bordered card-preview">
    <div class="container">
        @if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="card-inner">
    <div class="col-lg-12">
                                       
                                            <div class="card-inner">
                                                <div class="card-title-group align-start mb-3">
                                                    <div class="card-title">
                                                        <h6 class="title">Users Overview</h6>
                                                      
                                                    </div>
                                                   
                                                </div><!-- .card-title-group -->
                                                <div class="nk-order-ovwg">
                                                    <div class="row g-12 align-end">
                                                        <div class="col-xxl-2">
                                                        <div class="nk-order-ovwg-data buy">
                                                                        <div class="amount">{{ $numberOfUsers }} </div>
                                                                        
                                                                        <div class="title"> Number of Users</div>
                                                                       
                                                                    </div>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-3">
                                                        <div class="nk-order-ovwg-data buy">
                                                                        <div class="amount">{{ $numberOfContentCreators }}</div>
                                                                        
                                                                        <div class="title"> Number of Content Creators</div>
                                                                        
                                                                    </div>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-3">
                                                        <div class="nk-order-ovwg-data buy">
                                                                        <div class="amount">{{ $numberOfFemaleUsers }}</div>
                                                                        
                                                                        <div class="title"> Number of Female users</div>
                                                                    </div>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-3">
                                                        <div class="nk-order-ovwg-data buy">
                                                                        <div class="amount">{{ $numberOfMaleUsers }} </div>
                                                                       
                                                                        <div class="title"> Number of Male users</div>
                                                                    </div>
                                                        </div><!-- .col -->
                                                    </div>
                                                </div><!-- .nk-order-ovwg -->
                                            </div><!-- .card-inner -->
                                       
                                    </div><!-- .col -->
                                            <div class="preview-block">
                                            <div class="nk-content-body">
                                                
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    
                                    <div class="nk-block-head-content">
                                        
                                        <h3 class="nk-block-title page-title">User List</h3>
                                       
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">

                                                <li>
                                                    <a href=" {{ route('users.create') }}" class="btn btn-white btn-dim btn-outline-primary">
                                                    <em class="icon ni ni-plus"></em>
                                                        <span>Add</span>
                                                    </a>
                                                </li>
                                                    <li><a href="{{ url('/admin/home')}}" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-home"></em><span>Home</span></a></li>
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em class="icon ni ni-list"></em><span>User list</span></a></li>
                                                                    <li><a href="{{ route('users.create') }}">  <em class="icon ni ni-plus-fill-c"></em><span>Add User</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
                                
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive users-table">
                          
                        <table class="datatable-init-export nowrap table" data-export-title="Export">
                           
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>User Role</th>
                    <th class="no-search no-sort notexport">Actions</th>
                                    <th class="no-search no-sort notexport"></th>
                                    <th class="no-search no-sort notexport"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($data as $key => $user)
                    <tr>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->phonenumber }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->country }}</td>
                        <td>{{ $user->city }}</td>
                        <td>
                            @if ($user->is_admin == 1)
                                <span class="badge bg-primary">Admin</span>
                            @elseif ($user->is_admin == 2)
                                <span class="badge bg-secondary">Content Creator</span>
                            @elseif ($user->is_admin == 3)
                                <span class="badge bg-success">Company</span>
                            @elseif ($user->is_admin == 0)
                                <span class="badge bg-info">User</span>
                            @endif
                        </td>
                        <td>
            <a class="btn btn-sm btn-success btn-block" href="{{ route('users.show',$user->id) }}">Show</a>
</td> <td>
            <a class="btn btn-sm btn-info btn-block" href="{{ route('users.edit',$user->id) }}">Edit</a>
            </td>      <td> <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger btn-block" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this TV production?')">Delete</button>
                                            </form>
        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection