  

  <?php $__env->startSection('title', 'LE College(Diploma), Morbi'); ?>

  <?php $__env->startSection('css'); ?>
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">



  <?php $__env->stopSection(); ?>


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

  <!-- Department Section Start -->
  <div id="courses" class="courses-area py-5" style="background-image: url('design_files/images/Background.png');">
    <div class="container" style="max-width: 1220px; padding: 20px;"> <!-- Made it fluid to extend to edges -->
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="section-title mb-4">
            <h1 class="text">DEPARTMENTS</h1>
            <p class="text-white">"Every Success is Usually an Admission ticket to a new set of Decision"</p>
          </div>
        </div>
      </div>

      <!-- Swiper Container -->
      <div class="swiper-container">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <!-- Department Cards -->
            <div class="swiper-slide">
              <div class="card h-100">
                <img src="design_files/images/course_1.png" class="card-img-top" alt="Information Technology">
                <div class="card-body">
                  <h5 class="card-title">Information Technology</h5>
                  <p class="card-text">Focuses on using computers to store, process, and analyze data. Prepares students for careers in software development, networking, and cybersecurity.</p>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <span><i class="bi bi-person-fill"></i> 35</span>
                  <a href="course_details.html" class="btn_viewDetails">View Details</a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card h-100">
                <img src="design_files/images/course_2.png" class="card-img-top" alt="Mechanical Engineering">
                <div class="card-body">
                  <h5 class="card-title">Mechanical Engineering</h5>
                  <p class="card-text">Involves designing, analyzing, and manufacturing mechanical systems. Covers thermodynamics, robotics, and industrial automation.</p>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <span><i class="bi bi-person-fill"></i> 35</span>
                  <a href="course_details.html" class="btn_viewDetails">View Details</a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card h-100">
                <img src="design_files/images/course_3.png" class="card-img-top" alt="Civil Engineering">
                <div class="card-body">
                  <h5 class="card-title">Civil Engineering</h5>
                  <p class="card-text">Specializes in designing, constructing, and maintaining infrastructure. Includes bridges, buildings, roads, and water systems.</p>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <span><i class="bi bi-person-fill"></i> 35</span>
                  <a href="course_details.html" class="btn_viewDetails">View Details</a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card h-100">
                <img src="design_files/images/course_4.png" class="card-img-top" alt="Ceramic Engineering">
                <div class="card-body">
                  <h5 class="card-title">Ceramic Engineering</h5>
                  <p class="card-text">Studies the production and application of ceramic materials. Used in electronics, medical implants, and advanced construction.</p>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <span><i class="bi bi-person-fill"></i> 35</span>
                  <a href="course_details.html" class="btn_viewDetails">View Details</a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card h-100">
                <img src="design_files/images/course_5.png" class="card-img-top" alt="ICT">
                <div class="card-body">
                  <h5 class="card-title">ICT</h5>
                  <p class="card-text">Integrates computing and telecommunication to manage digital information. Covers networking, cloud computing, and cybersecurity.</p>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <span><i class="bi bi-person-fill"></i> 35</span>
                  <a href="course_details.html" class="btn_viewDetails">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Custom Navigation (Outside Cards) -->

      </div>

    </div>
    <a class="swiper-prev" href="#">Prev</a>
    <a class="swiper-next" href="#">Next</a>
  </div>

  <!-- Department Section End -->
<!-- Video Section Start -->
<div class="video-area">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="video-wrapper">
                    <video class="video-fluid" autoplay loop muted playsinline>
                        <source src="design_files/videos/L.E College.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Section End -->



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
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="design_files/js/Swiper.js" type="text/javascript"></script>


  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\LE_PROJECT_LARAVEL\LE_Project\resources\views/homepage/index.blade.php ENDPATH**/ ?>