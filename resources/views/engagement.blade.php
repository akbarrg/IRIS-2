@extends('layouts.app')

@section('content')
  <section id="subshowcase">
      <div class="container">
        <h1>ENGAGEMENT</h1>
      </div>
  </section>
  <section id="subgallery">
    <div class="container">
      @foreach ($engagements as $engagement)
        <div class="box">
          <a href={{ $engagement->uri }}>
            <img src={{ $engagement->uri }}>
          </a>
        </div>
      @endforeach
    </div>
  </section>
@endsection
