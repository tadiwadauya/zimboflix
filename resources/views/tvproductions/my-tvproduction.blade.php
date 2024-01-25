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
                                My Policies
                            </span>

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
                                    <th class="no-search no-sort notexport">Actions</th>
                                    
                                </tr>
                                </thead>
                                <tbody id="users_table">
                                    @foreach ($policies as $item)
                                    <tr>
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->prepared_by}}</td>
                                        <td>{{ $item->title}}</td>
                                        <td>{{ $item->department}}</td>
                                        
                                        <td>
                                            <a class="btn btn-sm btn-success btn-block" href="{{ URL::to('my-policies/' . $item->id) }}" data-toggle="tooltip" title="Show">
                                                View
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

    @include('scripts.delete-modal-script')
    @include('scripts.save-modal-script')
    @if(config('usersmanagement.tooltipsEnabled'))
        @include('scripts.tooltips')
    @endif

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>



<script type="text/javascript">
    $(document).ready(function() {
        $('.data-table').dataTable({
            "paging": true,
            "processing": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "aLengthMenu": [[10, 25, 50, 100, -1], [ 10, 25, 50, 100, "All"]],
            "dom": 'Bfrtip',
            "sPaginationType": "full_numbers",
            'aoColumnDefs': [{
                'bSortable': false,
                'searchable': false,
                'aTargets': ['no-search'],
                'bTargets': ['no-sort']
            }],
            buttons: [{
                 "extend":   'pageLength',
                 "exportOptions": {
                    columns: ':not(.notexport)'
                }
            },
            {
                "extend":   'copy',
                "exportOptions": {
                   columns: ':not(.notexport)'
               }
           },
           {
            "extend":   'csv',
            "exportOptions": {
               columns: ':not(.notexport)'
           }
            },
            {
                "extend":   'excel',
                "exportOptions": {
                   columns: ':not(.notexport)'
               }
           },
           {
            "extend":   'pdf',
            "exportOptions": {
               columns: ':not(.notexport)'
           }
       },
       {
        "extend":   'print',
        "exportOptions": {
           columns: ':not(.notexport)'
       }
   }        
            ]
        });
    });
</script>


@endsection


