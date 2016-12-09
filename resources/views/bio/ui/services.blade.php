@extends('layouts.ui')

@section('content')
    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Services</h2>
            <p>We Are Professional</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li>Services</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">


          <div class="row">

            <!-- Start Image Service Box 1 -->
            <div class="col-md-4 image-service-box">
              <img class="img-thumbnail" src="images/service-01.jpg" alt="" />
              <h4>Awesame Staff</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi architect.</p>
            </div>
            <!-- End Image Service Box 1 -->

            <!-- Start Image Service Box 2 -->
            <div class="col-md-4 image-service-box">
              <img class="img-thumbnail" src="images/service-02.jpg" alt="" />
              <h4>Mordern Technology</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi architect.</p>
            </div>
            <!-- End Image Service Box 2 -->

            <!-- Start Image Service Box 3 -->
            <div class="col-md-4 image-service-box">
              <img class="img-thumbnail" src="images/service-03.jpg" alt="" />
              <h4>Great Support</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi architect.</p>
            </div>
            <!-- End Image Service Box 3 -->

          </div>

          <div class="hr1" style="margin-bottom:45px;"></div>

          <div class="row">
            <div class="col-md-4">

              <!-- Classic Heading -->
              <h4 class="classic-title"><span>Our Services</span></h4>
                <li>Clinical Hematology</li>
                <li>Clinical Pathology</li>
                <li>Biochemistry</li>
                <li>Immunology & Serology</li>
                <li>Histopathology</li>
                <li>Microbiology</li>
                <li>E.C.G</li>
                <li>U.liS.G</li>
                <li>X-Ray</li>
                <li>Others</li>

            </div>
            <div class="col-md-4">

              <!-- Classic Heading -->
              <h4 class="classic-title"><span>We Aare Awesome</span></h4>

              <!-- Accordion -->
              <div class="panel-group" id="accordion">

                <!-- Start Accordion 1 -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse-one">
												<i class="fa fa-angle-up control-icon"></i>
												<i class="fa fa-desktop"></i> #one
											</a>
										</h4>
                  </div>
                  <div id="collapse-one" class="panel-collapse collapse in">
                    <div class="panel-body">To develop and coordinate amongst the member Medical Centres Performing medical check-up of the passengers bound for Gulf States.Bring homogeneity and equality among the member Medical Centres</div>
                  </div>
                </div>
                <!-- End Accordion 1 -->

                <!-- Start Accordion 2 -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse-tow" class="collapsed">
												<i class="fa fa-angle-up control-icon"></i>
												<i class="fa fa-gift"></i> #Two
											</a>
										</h4>
                  </div>
                  <div id="collapse-tow" class="panel-collapse collapse">
                    <div class="panel-body">To implement and execute the guidelines provided by the Executive Board of the Health Minister' Council for the G.C.C States to the Member Medical Centres and to take necessary steps against defiance of the guidelines. To coordinate between the member Medical Centres and the Embassies of the G.C.C states.To request the member States of G.C.C to recruit more workers from Bangladesh .</div>
                  </div>
                </div>
                <!-- End Accordion 2 -->

                <!-- Start Accordion 3 -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse-three" class="collapsed">
												<i class="fa fa-angle-up control-icon"></i>
												<i class="fa fa-tint"></i> #Three
											</a>
										</h4>
                  </div>
                  <div id="collapse-three" class="panel-collapse collapse">
                    <div class="panel-body">To ensure the medical check-up of specific number of people against specific number of visas.To ensure the medical technical staff and other employees of the member medical centres through workshop, symposium, etc.To encourage the Medical Centres to stand beside the nation during natural calamities like flood, cyclone, drought, earthquake etc;.</div>
                  </div>
                </div>
                <!-- End Accordion 3 -->

              </div>
              <!-- End Accordion -->

            </div>

            <div class="col-md-4">

              <!-- Classic Heading -->
              <h4 class="classic-title"><span>Our Features</span></h4>

              <div class="row">

                <!-- Start Service Icon 1 -->
                <div class="service-box service-icon-left-more">
                  <div class="service-icon">
                    <i class="fa fa-magic icon-medium"></i>
                  </div>
                  <div class="service-content">
                    <h4>Quality Maintenance</h4>
                    <p>To perform Medical Examination as per guidelines sets by concen countries Embassy / Ministry</p>
                  </div>
                </div>
                <!-- End Service Icon 1 -->

                <!-- Start Service Icon 3 -->
                <div class="service-box service-icon-left-more">
                  <div class="service-icon">
                    <i class="fa fa-globe icon-medium"></i>
                  </div>
                  <div class="service-content">
                    <h4>Cordinate each other</h4>
                    <p>To cordinate between Embassies and Local Recruting Agencies</p>
                  </div>
                </div>
                <!-- End Service Icon 3 -->

                <!-- Start Service Icon 4 -->
                <div class="service-box service-icon-left-more">
                  <div class="service-icon">
                    <i class="fa fa-picture-o icon-medium"></i>
                  </div>
                  <div class="service-content">
                    <h4>We Ensure</h4>
                    <p>To ensure Medical Examination as per demand by foreign bound workers and delivery the reports shortest possible time</p>
                  </div>
                </div>
                <!-- End Service Icon 4 -->

                <!-- Start Service Icon 2 -->
                <div class="service-box service-icon-left-more">
                  <div class="service-icon">
                    <i class="fa fa-users icon-medium"></i>
                  </div>
                  <div class="service-content">
                    <h4>Full accuracy</h4>
                    <p>To ensure 100% accuracy in Medical Examination.</p>
                  </div>
                </div>
                <!-- End Service Icon 2 -->

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- End Content -->
@endsection