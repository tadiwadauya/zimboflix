<?php
/**
 * Created by PhpStorm for wpm
 * User: Vincent Guyo
 * Date: 12/20/2019
 * Time: 12:58 PM
 */
?>

@extends('layouts.app')

@section('template_title')
    Showing Policies
@endsection

@section('template_linked_css')
        <link rel="stylesheet" type="text/css" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <style type="text/css" media="screen">
        .users-table {
            border: 0;
        }
        .users-table tr td:first-child {
            padding-left: 15px;
        }
        .users-table tr td:last-child {
            padding-right: 15px;
        }
        .users-table.table-responsive,
        .users-table.table-responsive table {
            margin-bottom: 0;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header text-white">

                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Policies
                            </span>

                            <div class="btn-group pull-right btn-group-xs">

                               
                                <div class="btn pull-left btn-group-xs">
                                    <a class="btn btn-light btn-block" href="{{ url('/policies/create')}}" data-toggle="tooltip" title="Create Department">
                                       Add Policy
                                    </a>
                                </div>
                                
                            </div>

                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive users-table">
                            <table class="table table-striped table-sm data-table">
                                <thead class="thead">
                                <tr>
                                    <th>ID</th>
                                    <th>Prepared By</th>
                                    <th>Title</th>
                                    <th>Department</th>
                                    <th>Date Created</th>
                                    <th class="no-search no-sort notexport">Actions</th>
                                    <th class="no-search no-sort notexport"></th>
                                    <th class="no-search no-sort notexport"></th>
                                </tr>
                                </thead>
                                <tbody id="users_table">
                                    @foreach ($all_policies as $item)
                                    <tr>
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->prepared_by}}</td>
                                        <td>{{ $item->title}}</td>
                                        <td>{{ $item->department}}</td>
                                        <td>{{ $item->created_at}}</td>
                                        <td>
                                            {!! Form::open(array('url' => 'policies/' . $item->id, 'class' => '', 'data-toggle' => 'tooltip', 'title' => 'Delete')) !!}
                                                {!! Form::hidden('_method', 'DELETE') !!}
                                                {!! Form::button('Delete', array('class' => 'btn btn-danger btn-sm','type' => 'button', 'style' =>'width: 100%;' ,'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete User', 'data-message' => 'Are you sure you want to delete this user ?')) !!}
                                            {!! Form::close() !!}
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-success btn-block" href="{{ URL::to('policies/' . $item->id) }}" data-toggle="tooltip" title="Show">
                                                View
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info btn-block" href="{{ URL::to('policies/' . $item->id . '/edit') }}" data-toggle="tooltip" title="Edit">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>

                            </table>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('modals.modal-delete')

@endsection

@section('footer_scripts')
    @include('scripts.datatables')
    @include('scripts.delete-modal-script')
    @include('scripts.save-modal-script')
    @if(config('usersmanagement.tooltipsEnabled'))
        @include('scripts.tooltips')
    @endif

@endsection


