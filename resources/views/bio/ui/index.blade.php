@extends('layouts.ui')

@section('content')
    @include('layouts.slider')
    <!-- Start Services Section -->
    <div class="section service">
      <div class="container">
        <div class="row">

          <!-- Start Service Icon 1 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
            <div class="service-icon">
              <i class="fa fa-leaf icon-large"></i>
            </div>
            <div class="service-content">
              <h4>Quality Maintenance</h4>
              <p>To perform Medical Examination as per guidelines sets by concen countries Embassy / Ministry</p>
            </div>
          </div>
          <!-- End Service Icon 1 -->

          <!-- Start Service Icon 2 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
            <div class="service-icon">
              <i class="fa fa-asterisk icon-large"></i>
            </div>
            <div class="service-content">
              <h4>Full accuracy</h4>
              <p>To ensure 100% accuracy in Medical Examination</p>
            </div>
          </div>
          <!-- End Service Icon 2 -->

          <!-- Start Service Icon 3 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="03">
            <div class="service-icon">
              <i class="fa fa-eye icon-large"></i>
            </div>
            <div class="service-content">
              <h4>Cordinate each other</h4>
              <p>To cordinate between Embassies and Local Recruting Agencies</p>
            </div>
          </div>
          <!-- End Service Icon 3 -->

          <!-- Start Service Icon 4 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="04">
            <div class="service-icon">
              <i class="fa fa-code icon-large"></i>
            </div>
            <div class="service-content">
              <h4>We Ensure</h4>
              <p>To ensure Medical Examination as per demand by foreign bound workers and delivery the reports shortest possible time</p>
            </div>
          </div>
          <!-- End Service Icon 4 -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </div>
    <!-- End Services Section -->


    <!-- Start Purchase Section -->
    <div class="section purchase">
      <div class="container">

        <!-- Start Video Section Content -->
        <div class="section-video-content text-center">

          <!-- Start Animations Text -->
         	 <h1 class="fittext wite-text uppercase tlt">
	            Bio-Path Medical services gives Defferent kinds of medical tests so u can check <br/>Ours tests list <strong>or</strong> Medical Report
	        </h1>
          <!-- End Animations Text -->
          <!-- Start Buttons -->
          <a href="#" class="btn-system btn-large"><i class="fa fa-tasks"></i> Check Report</a>
          <a href="#" class="btn-system btn-large btn-wite"><i class="fa fa-download"></i> Test List</a>

        </div>
        <!-- End Section Content -->

      </div>
      <!-- .container -->
    </div>
    <!-- End Purchase Section -->
     <!-- Start Client/Partner Section -->
    <div class="partner">
      <div class="container">
        <div class="row">

          <!-- Start Big Heading -->
          <div class="big-title text-center">
            <h1>About Bio-<strong>Path</strong></h1>
            <p class="title-desc">We take great pleasure in sincerely thanking you for looking into the Bio-Path medical examination activities and we do hope, you will find this brochure informative. Bangladesh are supplying manpower to many countries around the world, particularly G.C.C states and Malaysia including Brunei, Korea, Singapore, Maldives, Italy, Iraq, Jordan and many African Countries. In order to meet the challenge of expanding international exchange on many levels, Bio-Path is being entrusted by various foreign Government and organization such as Executive board of the Health Ministry council for G.C.C. States, Ministry of Health Malaysia and Ministry of Health Brunei Darussalam, Republic of Iraq, Ministry of Health The Hashemite Kingdom of Jordan, Embassy of Libya in Dhaka and Education Malaysia Global Services(EMGS) for undertaking Medical check-up of Foreign bound Bangladeshi workers and students.</p>
          </div>
          <!-- End Big Heading -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </div>
    <!-- End Client/Partner Section -->
@endsection