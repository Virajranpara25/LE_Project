  @extends('layouts.master_layout')

  @section('title', 'LE College(Diploma), Morbi')

  @section('css')
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


  @endsection


  @section('content')

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
          <a class="btn btn-warning text-dark" href="{{route('login')}}">Login</a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="design_files/images/Slider_1.jpg" alt="Second slide">
        <div class="carousel-caption text-start">
          <h1>Welcome To</h1>
          <h2>L.E. College (Diploma), Morbi</h2>
          <p>To provide an atmosphere for student and faculty for continuous learning to investigate, apply, and transfer knowledge</p>
          <a class="btn btn-warning text-dark" href="{{route('login')}}">Login</a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="design_files/images/Slider_3.jpg" alt="Third slide">
        <div class="carousel-caption text-start">
          <h1>Welcome To</h1>
          <h2>L.E. College (Diploma), Morbi</h2>
          <p>To provide an atmosphere for student and faculty for continuous learning to investigate, apply, and transfer knowledge</p>
          <a class="btn btn-warning text-dark" href="{{route('login')}}">Login</a>
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
                  <p class="card-text">Focuses on using computers to store and process data. Prepares students for careers in software development, networking, and cybersecurity.</p>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <span><i class="fa fa-user"></i> 35</span>
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
                  <span><i class="fa fa-user"></i> 35</span>
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
                  <span><i class="fa fa-user"></i> 35</span>
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
                  <span><i class="fa fa-user"></i> 35</span>
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
                  <span><i class="fa fa-user"></i> 35</span>
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

  <!-- Principal's Message start -->
  <section class="container my-5" id="introduction_container">
    <div class="row align-items-center">
      <!-- Title (Always First) -->
      <div class="col-12">
        <h2 class="fw-bold text-left text-md-start">Principal's Message</h2>
        <div class="mt-2" id="introduction_hr"></div>
      </div>

      <!-- Image Column (After Title in Mobile, Right Side in Desktop) -->
      <div class="col-lg-5 col-md-6 text-center order-1 order-md-2" id="Principal_img" >
        <img src="design_files/images/Principal_sir.jpg"  class="img-fluid rounded shadow image-animation"  alt="L.E. College">
      </div>

      <!-- Text Column (After Image in Mobile, Left Side in Desktop) -->
      <div class="col-lg-7 col-md-6 order-2 order-md-1 text-animation" id="Principal_msg">
        <p class="text-muted">
          Lukhdhirji Engineering College (Diploma), Morbi is one of the oldest Government institutes of Gujarat State. Previously, the institute was functioning from old campus along with Lukhdhirji Engineering College (Degree) courses, Morbi. Recently, the institute has shifted to the new campus that has all required infrastructure for teaching and other activities.In addition, our campus has hostel and sports facilities for students. The library of our institute is very rich in terms of books and journals collections, and is growing rapidly and steadily. The institute has also well equipped laboratories including language laboratory.In addition, our campus has hostel and sports facilities for students.
        </p>
        <p>
          One of our greatest strengths is our highly qualified and dedicated faculty members and staff. Our students are very innovative and ever eager to learn new concepts. Apart from teaching, our faculty members are deeply engaged in motivating and counseling students so that they can find better placement.
        </p>
        <p>
          Our students have demonstrated their capabilities and brilliance by securing placement in highly reputed organizations. Our faculties regularly present their research findings in various academic conferences. It may be pertinent to mention that the students in collaboration with the teachers have successfully organized many sports and cultural events. L.E. College, (Diploma) promises the quality education adhering to its vision and mission.
        </p>
        <p>
          - Pankaj V. Rayjada, I/C Principal, L.E. College(Diploma),Morbi

        </p>
      </div>
    </div>
  </section>

  <!-- Principal's Message end -->

  
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

  
    <!-- counter section start -->

      <!-- ================ -->



<section class="pv-40 stats padding-bottom" style="padding-bottom: 70px;">
  <div class="container" id="Counter_area">
    <div class="row">
      <!-- Student Counter -->
      <div class="col-lg-4 col-12 text-center">
        <div class="item-box">
          <span class="icon circle"><i class="fas fa-user-graduate"></i></span>
          <h3><strong>Students</strong></h3>
          <span class="counter" data-to="2000" data-speed="5000">0</span>
        </div>
      </div>
      
      <!-- Department Counter -->
      <div class="col-lg-4 col-12 text-center">
        <div class="item-box">
          <span class="icon circle"><i class="fas fa-university"></i></span>
          <h3><strong>Departments</strong></h3>
          <span class="counter" data-to="10" data-speed="5000">0</span>
        </div>
      </div>
      
      <!-- Faculty Counter -->
      <div class="col-lg-4 col-12 text-center">
        <div class="item-box">
          <span class="icon circle"><i class="fas fa-chalkboard-teacher"></i></span>
          <h3><strong>Faculty</strong></h3>
          <span class="counter" data-to="150" data-speed="5000">0</span>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- counter section end -->





  <!-- Vision-Mission Start -->

  <div class="container-fluid vision-mission-section" style="background-image: url('design_files/images/Background.png');">
        <div class="container" id="Vision_mission_container">
            <div class="row text-center">
                <div class="col-md-5">
                    <h2>Vision</h2>
                    <ul class="text-left">
                        <li>To provide skill-based technical education with innovative ideas and practices that fulfill the needs of individuals, organizations, and society.</li>
                    </ul>
                </div>
              
                <!-- Divider: Vertical on Desktop, Horizontal on Mobile -->
                <div class="col-md-2 d-none d-md-flex align-items-center justify-content-center">
                    <div class="divider-vertical"></div>
                </div>
                <div class="col-12 d-md-none">
                    <div class="divider-horizontal"></div>
                </div>
                <div class="col-md-5">
                  <h2>Mission</h2>
                    <ul class="text-left">
                        <li>Creating high-quality and globally compatible diploma technocrats.</li>
                        <li>Ensuring optimal utilization of available resources to cultivate required competency among students.</li>
                        <li>Providing a conducive environment that enhances intellectual and moral standards for students and faculties.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



  <!-- Vision-Mission end -->









  <!--Latest news section start -->



  <div class="container py-5" id="Latest_News_Container">
    <h2 class="text-center fw-bold">Latest News</h2>
    <p class="text-center text-muted" id="Latest_News_P">Stay updated with the latest developments in education, learning methodologies, and global academic trends..</p>

    <div class="row g-4" id="Latest_news_row">
        <div class="col-md-4 col-sm-12 mb-4">
            <div class="news-card shadow-sm">
                <h6 class="text-center">Department</h6>
                <p class="text-left date">AUGUST 25, 2018</p>
                <h5 class="text">Some say education is the process of gaining information is nation.</h5>
                <p class="text" style="padding-bottom: 10px;">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scele.</p>
                <p class="text-center"><a href="#">Read more</a></p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-4">
            <div class="news-card shadow-sm">
                <h6 class="text-center">Department</h6>
                <p class="text-left date">AUGUST 25, 2018</p>
                <h5 class="text">Education gives us a knowledge of the world around us and changes</h5>
                <p class="text" style="padding-bottom: 10px;">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scele.</p>
                <p class="text-center"><a href="#">Read more</a></p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-4">
            <div class="news-card shadow-sm">
                <h6 class="text-center">Department</h6>
                <p class="text-left date">AUGUST 25, 2018</p>
                <h5 class="text">One thing I wish I can do is, to provide education for all child left behind</h5>
                <p class="text" style="padding-bottom: 10px;">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scele.</p>
                <p class="text-center"><a href="#">Read more</a></p>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="#" class="view-more-btn">View More</a>
    </div>
</div>

  <!--Latest news section end -->



  <br>
  <br>
  <br>
  <br>
  <br>
  @endsection


  @section('js')
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="design_files/js/Swiper.js" type="text/javascript"></script>


  @endsection