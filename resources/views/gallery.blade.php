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
          <h2>Prewedding</h2>
          <img src="/img/img1.jpg">
        </a>
      </div>
      <div class="box">
        <a href="/gallery/engagement">
          <h2>Engagement</h2>
          <img src="/img/img1.jpg">
        </a>
      </div>
      <div class="box">
        <a href="/gallery/wedding">
          <h2>Wedding</h2>
          <img src="/img/img1.jpg">
        </a>
      </div>
      <div class="box">
        <a href="/gallery/honeymoon">
          <h2>Honeymoon</h2>
          <img src="/img/img1.jpg">
        </a>
      </div>
    </div>
  </section>
@endsection
