@extends('layouts.app')

@section('title-bllock')Stranica kontaktov
@endsection

@section('content')
<h1>Stranica contactov</h1>


<form action="{{ route('contact-form') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Enter Name</label>
        <input type="text" placeholder="Enter your name" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Enter Email</label>
        <input type="text" placeholder="Enter your email" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="subject">Tema Message</label>
        <input type="text" placeholder="Enter subject" name="subject" id="subject" class="form-control">
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="message" class="form-control" placeholder="Enter Message"></textarea>
    </div>
    <button type="submit" class="btn btn-success"> Send </button>
</form>

@endsection