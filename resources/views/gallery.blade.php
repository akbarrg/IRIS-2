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
      <div class="box">
        <a href="/gallery/prewedding">
          <h3>Prewedding</h3>
          <img src="/img/img1.jpg">
        </a>
      </div>
      <div class="box">
        <a href="/gallery/engagement">
          <h3>Engagement</h3>
          <img src="/img/img1.jpg">
        </a>
      </div>
      <div class="box">
        <a href="/gallery/wedding">
          <h3>Wedding</h3>
          <img src="/img/img1.jpg">
        </a>
      </div>
      <div class="box">
        <a href="/gallery/honeymoon">
          <h3>Honeymoon</h3>
          <img src="/img/img1.jpg">
        </a>
      </div>
    </div>
  </section>
@endsection
