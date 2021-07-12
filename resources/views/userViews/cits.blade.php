@extends('layouts.app')

@section('page-content')

<section class="container-fluid">

    <div class="section-title text-center">
        <h2><u><b><span>CRAFTS INSTRUCTOR TRAINING SCHEME(CITS)</span></b></u></h2>
    </div>
    <div class="about-page">
        <div class="about-page-content-one">


            <p class="about-page-content">
               <strong> National Skill Training Institute, Calicut</strong> established by Government of India, Ministry of Skill Development & Entrepreneurship, offers Craft Instructor Training under CITS of one year duration for various trades combining Trade Technology(TT), Engineering Technology (ET) and Training Methodology (TM).

                Primary objective of this Institute are to train the Vocational Instructors of various Industrial Training Institutes / Centres and other training establishment.

                Training of Craft Instructors is the mandated responsibility of DGT and It has been operational since the inception of the Craftsmen Training Scheme (CTS). Comprehensive training both in skills and training methodology is imparted to the instructor trainees to make them conversant with techniques of transferring hands-on skills, to train skilled manpower for the industry.

</div></div>

<!--end of intro section-->

<!--fee structure starts here-->
<div class="container ">
    <h3 class="text-center mb-3">Fee Structure</h3>
    <p><strong><em>General Fee Structure :</em></strong></p>
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover fee-table">
        <thead>
          <tr class=" text-white fee-table-bg">
            <th scope="col">Particulars</th>
            <th scope="col">Unreserved and OBC Category</th>
            <th scope="col">SC/ST</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Registration Fee</th>
            <td>Rs. 50/-</td>
            <td>Nil</td>

          </tr>
          <tr>
            <th scope="row">Admission Fee</th>
            <td>Rs. 100/- </td>
            <td>Rs. 25/-</td>

          </tr>
          <tr>
            <th scope="row">Tuition Fee</th>
            <td>Rs. 1800/- (150/- Per month )</td>
            <td>Rs. 600/-  (50/- per month )</td>

          </tr>
          <tr>
            <th scope="row">Examination Fee</th>
            <td>Rs. 100/- </td>
            <td>Rs. 25/- </td>

          </tr>
          <tr>
            <th scope="row">Caution Deposit (Refundable)</th>
            <td>Rs. 250/-</td>
            <td>Rs. 250/-</td>

          </tr>
          <tr>
            <th scope="row">Library Deposit (Refundable)</th>
            <td>Rs. 20/-</td>
            <td>Rs. 20/-</td>

          </tr>
          <tr>
            <th scope="row">Gynkhana Fee</th>
            <td>Rs. 100/-</td>
            <td>Nil </td>

          </tr>
          <tr>
            <th scope="row">Total for Non-Hostellers</th>
            <td><strong>Rs. 2420/-</strong></td>
            <td><strong>Rs. 920/-</strong></td>

          </tr>
          <tr>
            <th scope="row">Hostel Rent</th>
            <td>Rs. 100/- (100 per month)</td>
            <td>Rs. 100/- (100 per month)</td>

          </tr>
          <tr>
            <th scope="row">Hostel Service Charges</th>
            <td>Rs. 50/-</td>
            <td>Rs. 50/-</td>

          </tr>
          <tr>
            <th scope="row">Hostel Caution Money (Refundable)</th>
            <td>Rs. 125/-</td>
            <td>Rs. 125/- </td>

          </tr>
          <tr>
            <th scope="row">Total For Hostellers</th>
            <td><strong>Rs. 2695/-</strong></td>
            <td><strong>Rs. 1195/-</strong></td>

          </tr>

        </tbody>
      </table>
      <p>*Above fees/Charges subject to change as per direction of the DGT, MSDE, New Delhi.</p>
    </div>
  </div>

<!--fee structure end-->

<!--additionalStart-->
<div class="container mt-5">

    <div class="notice notice-lg">
        <strong>Games :</strong> Outdoor Games facilities available.
    </div>

    <div class="notice notice-lg">
        <strong>Working Hours :</strong> From 09.00 am to 5.30 pm with half hour lunch break on all working days(Monday to Friday).
    </div>
    <div class="notice notice-lg">
        <strong>Attendance :</strong> Minimum 80% attendance is required to appear in the Final Trade Test to be held at the end of the course.
    </div>

</div>


<!--additionalend-->

<div class="about-page-content-one  ">
    <h3 class="text-center mb-5 mt-5">CITS COURSES</h3>
  <p class="about-page-content">  <strong>National Skill Training Institute, Calicut </strong> the following CITS Courses.The objective of the Craft Instructor Training (CITS) is to train Instructors in the techniques of transferring hands-on skills, in order to
    train semi-skilled / skilled manpower for industry.
</p></div>

<!-- Courses Card -->
<div class="container">

	<div class="row" id="ads">

<!--   01    -->
    <div class="col-md-4 col-sm-6 mt-3 mx-auto ">
        <div class="card rounded">
            <div class="card-image mx-auto pt-4">

                <img class="img-fluid" src="./assets/images/ac.png" alt="Alternate Text" />
            </div>

            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5 class="mb-5">Mechanic Refrigeration & Air Conditioning</h5>
                </div>
                <a class="ad-btn mb-5" href="./mechanicAc">View</a>
            </div>
        </div>
    </div>

<!--  02  -->
    <div class="col-md-4 mx-auto col-sm-6 mt-3">
        <div class="card rounded">
            <div class="card-image mx-auto pt-5">

                <img class="img-fluid" src="./assets/images/roda.png" alt="Alternate Text" />
            </div>

            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5 class="mb-5">Reading Of Drawing and Arithmetic  </h5>
                </div>
                <a class="ad-btn mb-5" href="./readingOfDrawing">View</a>
            </div>
        </div>
    </div>
<!--   02 end   -->
<!--  03  -->
<div class="col-md-4 col-sm-6  mx-auto mt-3 ">
    <div class="card rounded">
        <div class="card-image mx-auto pt-4">

            <img class="img-fluid" src="./assets/images/ele.png" alt="Alternate Text" />
        </div>

        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5 class="mb-5">Elctrician and Wireman<br>&nbsp;</h5>
            </div>
            <a class="ad-btn mb-5" href="./electricianAndWireman">View</a>
        </div>
    </div>
</div>
<!--   03 end   -->
<!--  04  -->
<div class="col-md-4 col-sm-6  mx-auto mt-5 ">
    <div class="card rounded">
        <div class="card-image mx-auto pt-4">

            <img class="img-fluid" src="./assets/images/eletro.png" alt="Alternate Text" />
        </div>

        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5 class="mb-5">Electronic Mechanic</h5>
            </div>
            <a class="ad-btn mb-5" href="./electronicMechanic">View</a>
        </div>
    </div>
</div>
<!--   04 end   -->
<!--  05  -->
<div class="col-md-4 col-sm-6  mx-auto mt-5 ">
    <div class="card rounded">
        <div class="card-image mx-auto pt-5">

            <img class="img-fluid" src="./assets/images/welder.png" alt="Alternate Text" />
        </div>

        <div class="card-body text-center">
            <div class="ad-title m-auto">
                <h5 class="mb-5">Welder</h5>
            </div>
            <a class="ad-btn mb-5" href="./welder">View</a>
        </div>
    </div>
</div>
<!--   05 end   -->

</div>
</div>
<!--coursescardend-->


</section>
@endsection
