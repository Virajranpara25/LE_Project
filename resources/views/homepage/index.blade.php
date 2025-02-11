@extends('layouts.master')

@section('title', 'LE College(Diploma), Morbi')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="design_files/images/Slider_1.jpg" alt="First slide">
      <div class="carousel-caption text-start">
        <h1>Welcome To</h1>
        <h2>L.E. College (Diploma), Morbi</h2>
        <p>To provide an atmosphere for student and faculty for continuous learning to investigate, apply, and transfer knowledge</p>
        <a class="btn btn-warning text-dark" href="#">Login</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="design_files/images/Slider_1.jpg" alt="Second slide">
      <div class="carousel-caption text-start">
        <h1>Welcome To</h1>
        <h2>L.E. College (Diploma), Morbi</h2>
        <p>To provide an atmosphere for student and faculty for continuous learning to investigate, apply, and transfer knowledge</p>
        <a class="btn btn-warning text-dark" href="#">Login</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="design_files/images/Slider_3.jpg" alt="Third slide">
      <div class="carousel-caption text-start">
        <h1>Welcome To</h1>
        <h2>L.E. College (Diploma), Morbi</h2>
        <p>To provide an atmosphere for student and faculty for continuous learning to investigate, apply, and transfer knowledge</p>
        <a class="btn btn-warning text-dark" href="#">Login</a>
      </div>
    </div>
  </div>

  <!-- Custom Navigation -->
  <div class="carousel-custom-nav">
    <a class="carousel-prev" href="#">Prev</a>
    <a class="carousel-next" href="#">Next</a>
  </div>
</div>
@endsection

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function () {
  const carouselElement = document.querySelector('#carouselExampleIndicators');
  const indicators = document.querySelectorAll('.carousel-indicators li');

  // Listen to Bootstrap's slide event to update indicators automatically
  carouselElement.addEventListener('slid.bs.carousel', function (event) {
    const activeIndex = event.to;
    updateIndicators(activeIndex);
  });

  document.querySelector('.carousel-prev').addEventListener('click', function (e) {
    e.preventDefault();
    new bootstrap.Carousel(carouselElement).prev();
  });

  document.querySelector('.carousel-next').addEventListener('click', function (e) {
    e.preventDefault();
    new bootstrap.Carousel(carouselElement).next();
  });

  function updateIndicators(activeIndex) {
    indicators.forEach(indicator => indicator.classList.remove('active'));
    indicators[activeIndex].classList.add('active');
  }
});
</script>
@endsection

