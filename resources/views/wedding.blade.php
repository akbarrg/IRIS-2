@extends('layouts.app')

@section('content')
  <section id="subshowcase">
      <div class="container">
        <h1>WEDDING</h1>
      </div>
  </section>
  <section id="subgallery">
    <div class="container">
      @foreach ($weddings as $wedding)
        <div class="box">
          <a href={{ $wedding->uri }}>
            <img src={{ $wedding->uri }}>
          </a>
        </div>
      @endforeach
    </div>
  </section>
@endsection
