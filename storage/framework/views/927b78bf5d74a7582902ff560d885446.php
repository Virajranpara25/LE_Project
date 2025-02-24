  
  

  <?php $__env->startSection('title', 'LE College(Diploma), Morbi'); ?>

  <?php $__env->startSection('content'); ?>

  <!-- image slider start -->
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
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
          <a class="btn btn-warning text-dark" href="<?php echo e(route('login')); ?>">Login</a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="design_files/images/Slider_1.jpg" alt="Second slide">
        <div class="carousel-caption text-start">
          <h1>Welcome To</h1>
          <h2>L.E. College (Diploma), Morbi</h2>
          <p>To provide an atmosphere for student and faculty for continuous learning to investigate, apply, and transfer knowledge</p>
          <a class="btn btn-warning text-dark" href="<?php echo e(route('login')); ?>">Login</a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="design_files/images/Slider_3.jpg" alt="Third slide">
        <div class="carousel-caption text-start">
          <h1>Welcome To</h1>
          <h2>L.E. College (Diploma), Morbi</h2>
          <p>To provide an atmosphere for student and faculty for continuous learning to investigate, apply, and transfer knowledge</p>
          <a class="btn btn-warning text-dark" href="<?php echo e(route('login')); ?>">Login</a>
        </div>
      </div>
    </div>

    <!-- Custom Navigation -->
    <div class="carousel-custom-nav">
      <a class="carousel-prev" href="#">Prev</a>
      <a class="carousel-next" href="#">Next</a>
    </div>
  </div>

  <!-- image slider end -->



  <!-- introduction to LE college start -->
  <section class="container my-5" id="introduction_container">
    <div class="row align-items-center">
      <!-- Title (Always First) -->
      <!-- Title (Always First) -->
      <div class="col-12">
        <h2 class="fw-bold text-left text-md-start">Introduction of L.E. College</h2>
        <div class="mt-2" id="introduction_hr"></div>
      </div>

      <!-- Image Column (After Title in Mobile, Right Side in Desktop) -->
      <div class="col-lg-5 col-md-6 text-center order-1 order-md-2">
        <img src="design_files/images/Slider_3.jpg" class="img-fluid rounded shadow image-animation" alt="L.E. College">
      </div>

      <!-- Text Column (After Image in Mobile, Left Side in Desktop) -->
      <div class="col-lg-7 col-md-6 order-2 order-md-1 text-animation">
        <p class="text-muted">
          Lukhdhirji Engineering College was established as a Technical Institute in 1931,
          then known as Morvi Technical Institute (MTI) and was upgraded to a full-fledged
          polytechnic and degree engineering college. In 1951 the Late Honorable H.H. Maharaja
          Thakore Shri Sir Lukhdhirji Waghji Sahib of Morvi state donated his palace with 40 acres
          (160,000 m2) of land on the bank of river Machhu so the institute was named after him.
          The institute is operated by Commissionerate of Technical Education (CTE), the Government
          of Gujarat and presently is affiliated with Gujarat Technological University. At present
          offers 3 year Diploma Courses in 05 different programs. Located in the outskirt of the
          city and remains the first choice for admission among students of the region. Previously,
          the institute was functioning from old campus along with Lukhdhirji Engineering
          College (Degree) courses, Morbi. In June 2018, the Government allotted new campus
          for Diploma studies. So, the institute was shifted to the new campus that has all
          required infrastructure for teaching and other activities. College offers diploma
          courses in disciplines like Civil, Mechanical, Electrical, Ceramic Technology, Metallurgy,
          Electronics & Communication and Information Technology Engineering. The institute is
          approved by AICTE and affiliated with Gujarat Technological University, Ahmedabad, Gujarat .
        </p>
      </div>
    </div>
  </section>

  <!-- introduction to LE college end -->


  <!--quick access section start -->
  <!-- ================ -->
  <section class="section clearfix">
    <div class="container-fluid">
      <div class="row justify-content-lg-center">
        <div class="col-lg-12">


          <div class="navbarone">
            <a href="#">Bonafide Portal</a>
            <a href="#">Scholarship News</a>
            <a href="#">Online Fees Portal</a>
            <a href="#">Hostel News &amp; Forms</a>
          </div>


        </div>
      </div>
    </div>

  </section>
  <!--quick access section end -->




  <br>
  <br>
  <br>
  <br>
  <br>
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('js'); ?>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const carouselElement = document.querySelector('#carouselExampleIndicators');
      const carousel = new bootstrap.Carousel(carouselElement, {
        interval: 6000, // Auto-slide interval in milliseconds
        ride: 'carousel',
        pause: false,
      });

      // Custom navigation buttons
      document.querySelector('.carousel-prev').addEventListener('click', function(e) {
        e.preventDefault();
        carousel.prev();
      });

      document.querySelector('.carousel-next').addEventListener('click', function(e) {
        e.preventDefault();
        carousel.next();
      });

      // Ensure indicators are updated correctly
      carouselElement.addEventListener('slid.bs.carousel', function() {
        const activeIndex = [...carouselElement.querySelectorAll('.carousel-item')].findIndex(item => item.classList.contains('active'));
        updateIndicators(activeIndex);
      });

      function updateIndicators(activeIndex) {
        document.querySelectorAll('.carousel-indicators li').forEach((indicator, index) => {
          indicator.classList.toggle('active', index === activeIndex);
        });
      }


    });
  </script>

<script>
  // Create an intersection observer to trigger the animation
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      // If the element is in the viewport, add the 'visible' class
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target); // Stop observing after animation
      }
    });
  }, { threshold: 0.5 }); // 50% of the element needs to be visible

  // Target the elements to animate
  const elementsToAnimate = document.querySelectorAll('.text-animation, .image-animation');
  elementsToAnimate.forEach(el => {
    observer.observe(el); // Observe each element
  });
</script>
  

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LE_Project\resources\views/homepage/index.blade.php ENDPATH**/ ?>