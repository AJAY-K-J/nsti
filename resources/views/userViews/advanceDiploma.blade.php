@extends('layouts.app')

@section('page-content')

<section class="container-fluid">

    <div class="section-title text-center">
        <h2><u><b><span>ADVANCED DIPLOMA </span></b></u></h2>
    </div>
    <div class="about-page">
        <div class="about-page-content-one">


            <p class="about-page-content">
                Directorate General of Training (DGT), Ministry of Skill Development and Entrepreneurship (MSDE) has signed a Memorandum of Understanding (MoU) with M/s IBM India Private Limited in Feb. 2018 to offer Advanced Diploma in ‘IT, Networking and Cloud Computing’ by using high-end skill training facilities at NSTIs. Presently 446 trainees (271 Male & 175 Female) are undergoing training in 16 National Skill Training Institutes (NSTIs) including 7 NSTIs exclusively for women (NSTI(W)) in the country that are offering the said course for the session 2019-21. This 2 year course on Diploma is being offered in following 16 NSTIs (9 General and 7 Women) viz. NSTIs(G) at,Bengaluru, Bhubneshwar, Chennai, Dehradun, Hyderabad(V), Hyderabad(R), Howrah and Mumbai and NSTIs(W) at Allahabad, Indore, Kolkata, Noida, Panipat, Vadodara,Trivandrum and <strong>Calicut.</strong></p>

              <p class="about-page-content">  Further, the syllabi of 3 Diploma courses i.e. Diploma in Welding Technology, Diploma in Industrial Electronics and Automation, Diploma in Automotive Technology have been prepared/ under finalization for introduction in NSTIs.
                </p>
</div></div>


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
            <td>Rs. 200/- per semester</td>
            <td>Nil</td>

          </tr>
          <tr>
            <th scope="row">Admission Fee</th>
            <td>Rs. 300/- per semester</td>
            <td>Rs. 60/- per semester</td>

          </tr>
          <tr>
            <th scope="row">Tuition Fee</th>
            <td>RS. 900/- per semester at Rs. 150/- per month</td>
            <td>RS. 300/- per semester at Rs. 50/- per month</td>

          </tr>
          <tr>
            <th scope="row">Examination Fee</th>
            <td>Rs. 200/- per semester*</td>
            <td>Rs. 50/- per semester*</td>

          </tr>
          <tr>
            <th scope="row">Caution Deposit (Refundable)</th>
            <td>Rs. 500/-</td>
            <td>Rs. 500/-</td>

          </tr>
          <tr>
            <th scope="row">Library Deposit (Refundable)</th>
            <td>Rs. 100/-</td>
            <td>Rs. 100/-</td>

          </tr>
          <tr>
            <th scope="row">Total for Non-Hostellers</th>
            <td><strong>Rs. 2200/-</strong></td>
            <td><strong>Rs. 1010/-</strong></td>

          </tr>
          <tr>
            <th scope="row">Hostel Rent</th>
            <td>Rs. 600/- (100 per month)</td>
            <td>Rs. 600/- (100 per month)</td>

          </tr>
          <tr>
            <th scope="row">Hostel Service Charges</th>
            <td>Rs. 100/- for six months</td>
            <td>Rs. 100/- for six months</td>

          </tr>
          <tr>
            <th scope="row">Hostel Caution Money (Refundable)</th>
            <td>Rs. 125/- per semester</td>
            <td>Rs. 125/- per semester</td>

          </tr>
          <tr>
            <th scope="row">Total for Hostellers</th>
            <td><strong>Rs. 3025/-</strong></td>
            <td><strong>Rs. 1835/-</strong></td>

          </tr>
          <tr>
            <th scope="row">Gymkhana Fee</th>
            <td>Rs. 50/- per semester</td>
            <td>Rs. 50/- per semester-</td>

          </tr>
        </tbody>
      </table>
      <p>*For Each Attempt</p>
    </div>
  </div>
<!--fee structure end-->

  <div class="about-page-content-one  ">
    <h3 class="text-center mb-5 mt-5">ADVANCED DIPLOMA COURSES</h3>
  <p class="about-page-content">  <strong>National Skill Training Institute , Calicut, Kerala </strong>is an Institute under Directorate General of Training, Ministry of Skill Development & Entrepreneurship, Government of India is conducting the following Diploma Course(s).
</p></div>

<!-- Courses Card -->
<div class="container">

	<div class="row" id="ads">


    <div class="col-md-4 mx-auto ">
        <div class="card rounded">
            <div class="card-image mx-auto pt-5">

                <img class="img-fluid" src="./assets/images/adit-course.png" alt="Alternate Text" />
            </div>

            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5 class="mb-5">ADVANCED DIPLOMA IN IT (NETWORKING & CLOUD COMPUTING)</h5>
                </div>
                <a class="ad-btn mb-5" href="./adit">View</a>
            </div>
        </div>
    </div>


<!--coursescardend-->

</div>
</div>
</section>
@endsection
