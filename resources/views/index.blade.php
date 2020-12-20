@extends('layout')

@section('body')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="{{route('about')}}"><img src="images/slider/slider01.jpg" class="d-block w-100" alt="quienes somos"></a>
      </div>
      <div class="carousel-item">
        <a href="{{route('history')}}"><img src="/images/slider/slider02.jpg" class="d-block w-100" alt="..."></a>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
</div>
@endsection

@section('script')
@endsection