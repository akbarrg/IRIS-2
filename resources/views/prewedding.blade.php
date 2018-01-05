@extends('layouts.app')

@section('content')
  <section id="subshowcase">
      <div class="container">
        <h1>PREWEDDING</h1>
      </div>
  </section>
  <section id="subgallery">
    <div class="container">
      @foreach ($preweddings as $prewedding)
        <div class="box">
          <a href={{ $prewedding->uri }}>
            <img src={{ $prewedding->uri }}>
          </a>
        </div>
      @endforeach
    </div>
  </section>
@endsection
