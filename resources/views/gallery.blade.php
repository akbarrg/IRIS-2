@extends('layouts.app')

@section('content')
  <section id="showcase">
      <div class="container">
        <h1>IRIS Gallery</h1>
      </div>
  </section>
  <section id="newsletter">
    <div class="container">
      <h1>Subscribe newsletter</h1>
      <form>
        <input type="email" placeholder="Enter your email">
        <button type="submit" class="button">Subscribe</button>
      </form>
    </div>
  </section>
  <section id="gallery">
    <div class="container">
      @foreach ($galleries as $gallery)
        <div class="box">
          <a href='gallery/{{ $gallery->title }}'>
            <h2>{{ $gallery->title }}</h2>
            <img src={{ $gallery->uri }}>
          </a>
        </div>
      @endforeach
    </div>
  </section>
@endsection
