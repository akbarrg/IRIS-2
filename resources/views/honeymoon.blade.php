@extends('layouts.app')

@section('content')
  <section id="subshowcase">
      <div class="container">
        <h1>HONEYMOON</h1>
      </div>
  </section>
  <section id="subgallery">
    <div class="container">
      @foreach ($honeymoons as $honeymoon)
        <div class="box">
          <a href={{ $honeymoon->uri }}>
            <img src={{ $honeymoon->uri }}>
          </a>
        </div>
      @endforeach
    </div>
  </section>
@endsection
