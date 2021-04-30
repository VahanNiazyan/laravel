@extends('layouts.app')

@section('title-bllock')
All messages
@endsection

@section('content')
<h1>All messages</h1>
@foreach($data as $el)
   <div class="alert alert-info">
   <h3>{{ $el->name }}</h3>
    <p>{{ $el->subject }}</p>
    <p>{{ $el->email }}</p>
    <p><small>{{ $el->created_at }}</small></p>
    <a href="#"><button class="btn btn_warning">Detalnee</button></a>
   </div>
@endforeach
@endsection

@section('aside')
  @parent
  <p>dopolnitelni section</p>
  @endsection
     