@extends('layouts.app')

@section('template_title')
    View Policy   
@endsection

@section('template_linked_css')
    <style>
        .view-section{
            padding: 0;
            margin:0;
        }
        .pdf-section{
            margin: 0;
            padding: 0
        }
        .pdf-section iframe{
            width: 100%;
            height: 100vh;
        }
        .policy-header{
            padding:0 2.5rem;
        }
        .policy-header h3{
            margin-bottom:1rem;
            padding-bottom: 0.5rem;
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <div class="view-section">
        <div class="policy-header">
            <h3><span class="float-left"><a href="{{ url('/policies/download/'.$data->file)}}" class="btn btn-outline-primary btn-md" >Download</a></span>    {{ $data->title}} <span class="float-right"><a href="{{ url('/my-policies')}}" class="btn btn-outline-info btn-md">Back to Policies</a></span></h3>
        </div>
        <div class="pdf-section">
            <iframe src="{{ url('documents/'.$data->file)}}" frameborder="0"></iframe>
        </div>
    </div>
    
@endsection

