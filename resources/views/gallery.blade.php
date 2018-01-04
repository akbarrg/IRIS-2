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
          <img src="/img/img1.jpg">
          <h3>Prewedding</h3>
          <p>Example prewedding photo</p>
        </a>
      </div>
      <div class="box">
        <a href="/gallery/engagement">
          <img src="/img/img1.jpg">
          <h3>Engagement</h3>
          <p>Example engagement photo</p>
        </a>
      </div>
      <div class="box">
        <a href="/gallery/wedding">
          <img src="/img/img1.jpg">
          <h3>Wedding</h3>
          <p>Example wedding photo</p>
        </a>
      </div>
      <div class="box">
        <a href="/gallery/honeymoon">
          <img src="/img/img1.jpg">
          <h3>Honeymoon</h3>
          <p>Example honeymoon photo</p>
        </a>
      </div>
    </div>
  </section>
  <footer>
    IRIS Photograph 2018, Copyright &copy;
  </footer>
@endsection
