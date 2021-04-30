@extends('layouts.app')

@section('title-bllock')
Glavni stranica 
@endsection

@section('content')
<h1>Glavni stranica</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fugiat officiis, nam blanditiis iusto soluta non? Aliquid
    voluptatum possimus ratione reprehenderit in deserunt consequuntur sapiente natus, praesentium eveniet excepturi alias?</p>
@endsection

@section('aside')
  @parent
  <p>dopolnitelni section</p>
  @endsection
     