@extends('layouts.app')

@section('page-content')
 <!--image slider start-->

 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="./assets/images/nsti_campus.jpg" alt="First slide" />
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./assets/images/hall.jpg" alt="Second slide" />
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./assets/images/nsti.jpg" alt="Third slide" />
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!--image slider end-->



 <!--about nsti start-->

 <div class="nsti-intro">
    <img class="nsti-introimg " src="/assets/images/nstiabout.jpg" alt="code gif" />

    <p class="nsti-introtext">
        National Skill Training Institute, Calicut is one of the premier national institute under Directorate
        General of Training , Ministry of Skill Development & Entrepreneurship, Government of India engaged in
        developing skilled manpower for the industries, Instructional staff for the Industrial Training
        Institutes & upgrading skill of in-service persons from the industry.This exclusive institute
        facilitates short term training programme and regular long term training programme in various
        disciplines. Long term courses are conducted in levels such as Craftsmen Training Scheme (CTS), Craft
        Instructor Training Scheme (CITS) and recently started Advanced Diploma in IT, Networking and Cloud
        course also. IT, Networking and Cloud course is very much essential in the current scenario due to a lot
        of demand in software industries where every industry is using cloud as base.
    </p>
</div>
 <!--about nsti end-->

 <!--Gallery start-->

 <section class="section-spacing bottom-none inverse-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2><span>GALLERY</span></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <ul id="filter-list">
                    <li class="filter active" data-filter="all">ALL</li>
                    <li class="filter" data-filter="1">CAMPUS</li>
                    <li class="filter" data-filter="2">LABS</li>
                    <li class="filter" data-filter="3">PROGRAMS</li>
                    <li class="filter" data-filter="4">CANTEEN</li>
                    <li class="filter" data-filter="5">HOSTEL</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="gallery-outer">
        <ul class="gallery-items" style="padding: 0px; position: relative; height: 1261px">
            <li
                class="filtr-item"
                data-category="1"
                style="
                    opacity: 1;
                    transform: scale(1) translate3d(0px, 0px, 0px);
                    backface-visibility: hidden;
                    perspective: 1000px;
                    transform-style: preserve-3d;
                    position: absolute;
                    transition: all 0.5s ease-in-out 0ms;
                    pointer-events: auto;
                "
            >
                <div class="gallery-inner">
                    <img src="./assets/images/nsti_campus.jpg" alt="" />
                    <div class="gallery-overlay">
                        <a href="./assets/images/nsti_campus.jpg" class="venobox vbox-item" data-gall="gallery"
                            ><i class="fas fa-eye"></i
                        ></a>
                    </div>
                </div>
            </li>

            <!--second-->

            <li
                class="filtr-item"
                data-category="2"
                style="
                    opacity: 1;
                    transform: scale(1) translate3d(315.25px, 0px, 0px);
                    backface-visibility: hidden;
                    perspective: 1000px;
                    transform-style: preserve-3d;
                    position: absolute;
                    transition: all 0.5s ease-in-out 0ms;
                    pointer-events: auto;
                "
            >
                <div class="gallery-inner">
                    <img src="./assets/images/nsti-pic.jpg" alt="" />
                    <div class="gallery-overlay">
                        <a href="./assets/images/nsti-pic.jpg" class="venobox vbox-item" data-gall="gallery"
                            ><i class="fas fa-eye"></i
                        ></a>
                    </div>
                </div>
            </li>

            <!--third-->

            <li
                class="filtr-item"
                data-category="4"
                style="
                    opacity: 1;
                    transform: scale(1) translate3d(630.5px, 0px, 0px);
                    backface-visibility: hidden;
                    perspective: 1000px;
                    transform-style: preserve-3d;
                    position: absolute;
                    transition: all 0.5s ease-in-out 0ms;
                    pointer-events: auto;
                "
            >
                <div class="gallery-inner">
                    <img src="./assets/images/libr.jpg" alt="" />
                    <div class="gallery-overlay">
                        <a href="./assets/images/libr.jpg" class="venobox vbox-item" data-gall="gallery"
                            ><i class="fas fa-eye"></i
                        ></a>
                    </div>
                </div>
            </li>
            <!--fourth-->
            <li
                class="filtr-item"
                data-category="3"
                style="
                    opacity: 1;
                    transform: scale(1) translate3d(945.7px, 0px, 0px);
                    backface-visibility: hidden;
                    perspective: 1000px;
                    transform-style: preserve-3d;
                    position: absolute;
                    transition: all 0.5s ease-in-out 0ms;
                    pointer-events: auto;
                "
            >
                <div class="gallery-inner">
                    <img src="./assets/images/hall.jpg" alt="" />
                    <div class="gallery-overlay">
                        <a href="./assets/images/hall.jpg" class="venobox vbox-item" data-gall="gallery"
                            ><i class="fas fa-eye"></i
                        ></a>
                    </div>
                </div>
            </li>
            <!--fift-->
            <li
                class="filtr-item"
                data-category="3"
                style="
                    opacity: 1;
                    transform: scale(1) translate3d(0px, 315.25px, 0px);
                    backface-visibility: hidden;
                    perspective: 1000px;
                    transform-style: preserve-3d;
                    position: absolute;
                    transition: all 0.5s ease-in-out 0ms;
                    pointer-events: auto;
                "
            >
                <div class="gallery-inner">
                    <img src="./assets/images/nsti.jpg" alt="" />
                    <div class="gallery-overlay">
                        <a href="./assets/images/nsti.jpg" class="venobox vbox-item" data-gall="gallery"
                            ><i class="fas fa-eye"></i
                        ></a>
                    </div>
                </div>
            </li>
            <!--sixth-->

            <li
                class="filtr-item"
                data-category="5"
                style="
                    opacity: 1;
                    transform: scale(1) translate3d(315.25px, 315.25px, 0px);
                    backface-visibility: hidden;
                    perspective: 1000px;
                    transform-style: preserve-3d;
                    position: absolute;
                    transition: all 0.5s ease-in-out 0ms;
                    pointer-events: auto;
                "
            >
                <div class="gallery-inner">
                    <img src="./assets/images/facemask.jpg" alt="" />
                    <div class="gallery-overlay">
                        <a href="./assets/images/facemask.jpg" class="venobox vbox-item" data-gall="gallery"
                            ><i class="fas fa-eye"></i
                        ></a>
                    </div>
                </div>
            </li>

            <!--seven-->

            <li
                class="filtr-item"
                data-category="3"
                style="
                    opacity: 1;
                    transform: scale(1) translate3d(630.5px, 315.25px, 0px);
                    backface-visibility: hidden;
                    perspective: 1000px;
                    transform-style: preserve-3d;
                    position: absolute;
                    transition: all 0.5s ease-in-out 0ms;
                    pointer-events: auto;
                "
            >
                <div class="gallery-inner">
                    <img src="./assets/images/nsti_campus.jpg" alt="" />
                    <div class="gallery-overlay">
                        <a href="./assets/images/nsti_campus.jpg" class="venobox vbox-item" data-gall="gallery"
                            ><i class="fas fa-eye"></i
                        ></a>
                    </div>
                </div>
            </li>

            <!--eight-->

            <li
                class="filtr-item"
                data-category="4"
                style="
                    opacity: 1;
                    transform: scale(1) translate3d(945.7px, 315.25px, 0px);
                    backface-visibility: hidden;
                    perspective: 1000px;
                    transform-style: preserve-3d;
                    position: absolute;
                    transition: all 0.5s ease-in-out 0ms;
                    pointer-events: auto;
                "
            >
                <div class="gallery-inner">
                    <img src="./assets/images/nsti-pic.jpg" alt="" />
                    <div class="gallery-overlay">
                        <a href="./assets/images/nsti-pic.jpg" class="venobox vbox-item" data-gall="gallery"
                            ><i class="fas fa-eye"></i
                        ></a>
                    </div>
                </div>
            </li>
            <!--nine-->
            <li
                class="filtr-item"
                data-category="5"
                style="
                    opacity: 1;
                    transform: scale(1) translate3d(0px, 630.5px, 0px);
                    backface-visibility: hidden;
                    perspective: 1000px;
                    transform-style: preserve-3d;
                    position: absolute;
                    transition: all 0.5s ease-in-out 0ms;
                    pointer-events: auto;
                "
            >
                <div class="gallery-inner">
                    <img src="./assets/images/nsti_campus.jpg" alt="" />
                    <div class="gallery-overlay">
                        <a href="./assets/images/nsti_campus.jpg" class="venobox vbox-item" data-gall="gallery"
                            ><i class="fas fa-eye"></i
                        ></a>
                    </div>
                </div>
            </li>
            <!--ten-->
            <li
                class="filtr-item"
                data-category="1"
                style="
                    opacity: 1;
                    transform: scale(1) translate3d(315.25px, 630.5px, 0px);
                    backface-visibility: hidden;
                    perspective: 1000px;
                    transform-style: preserve-3d;
                    position: absolute;
                    transition: all 0.5s ease-in-out 0ms;
                    pointer-events: auto;
                "
            >
                <div class="gallery-inner">
                    <img src="./assets/images/nsti_campus.jpg" alt="" />
                    <div class="gallery-overlay">
                        <a href="./assets/images/nsti_campus.jpg" class="venobox vbox-item" data-gall="gallery"
                            ><i class="fas fa-eye"></i
                        ></a>
                    </div>
                </div>
            </li>
            <!--eleven-->
            <li
                class="filtr-item"
                data-category="4"
                style="
                    opacity: 1;
                    transform: scale(1) translate3d(630.5px, 630.5px, 0px);
                    backface-visibility: hidden;
                    perspective: 1000px;
                    transform-style: preserve-3d;
                    position: absolute;
                    transition: all 0.5s ease-in-out 0ms;
                    pointer-events: auto;
                "
            >
                <div class="gallery-inner">
                    <img src="./assets/images/nsti_campus.jpg" alt="" />
                    <div class="gallery-overlay">
                        <a href="./assets/images/nsti_campus.jpg" class="venobox vbox-item" data-gall="gallery"
                            ><i class="fas fa-eye"></i
                        ></a>
                    </div>
                </div>
            </li>
            <!--tweleve-->
            <li
                class="filtr-item"
                data-category="2"
                style="
                    opacity: 1;
                    transform: scale(1) translate3d(945.7px, 630.5px, 0px);
                    backface-visibility: hidden;
                    perspective: 1000px;
                    transform-style: preserve-3d;
                    position: absolute;
                    transition: all 0.5s ease-in-out 0ms;
                    pointer-events: auto;
                "
            >
                <div class="gallery-inner">
                    <img src="./assets/images/nsti_campus.jpg" alt="" />
                    <div class="gallery-overlay">
                        <a href="./assets/images/nsti_campus.jpg" class="venobox vbox-item" data-gall="gallery"
                            ><i class="fas fa-eye"></i
                        ></a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<!--GalleryEnd--!>

 <!--courses-->

 <section class="nsti-courses">
    <div class="col-md-12">
        <div class="section-title text-center">
            <h2><span>COURSES</span></h2>
        </div>
    </div>

    <div class="courses">
        <div class="course-row">
            <img class="adit " src="./assets/images/adit.png" alt="adit course logo" />
            <h3>ADVANCED DIPLOMA</h3>
            <p class="content-course">
                Directorate General of Training (DGT), Ministry of Skill Development and Entrepreneurship (MSDE) has signed a Memorandum of Understanding (MoU) with M/s IBM India Private Limited in Feb. 2018 to offer Advanced Diploma in ‘IT, Networking and Cloud Computing’ by using high-end skill training facilities at NSTIs. Presently 446 trainees (271 Male & 175 Female) are undergoing training in 16 National Skill Training Institutes (NSTIs) including 7 NSTIs exclusively for women (NSTI(W)) in the country that are offering the said course for the session 2019-21. This 2 year course on Diploma is being offered in following 16 NSTIs (9 General and 7 Women) viz.
            </p>
        </div>
        <div class="course-row">
            <img class="iot" src="./assets/images/cts-new.png" alt="iot logo" />
            <h3>CRAFTSMEN TRAINING SCHEME(CTS)</h3>
            <p class="content-course">
                The Craftsmen Training Scheme was introduced by the Government of India in year 1950 to ensure a steady flow of skilled work force in different trades for the domestic industry, to raise quantitatively and qualitatively the industrial production by systematic training, to reduce unemployment among the educated youth by providing them employable skills, to cultivate and nurture a technical and industrial attitude in the minds of younger generation.

                Presently, this scheme is being implemented through a network of 15,042 ITIs (Govt. 2,738 + Private 12,304) and 33 NSTIs located all over the country by ensuring the general standards laid down by Director General of Training.
            </p>
        </div>
        <div class="course-row">
            <img class="cits-img " src="./assets/images/cits.png" alt="adit course logo" />
            <h3>CRAFTS INSTRUCTOR TRAINING SCHEME(CITS)</h3>
            <p class="content-course">
                National Skill Training Institute, Calicut established by Government of India, Ministry of Skill Development & Entrepreneurship, offers Craft Instructor Training under CITS of one year duration for various trades combining Trade Technology(TT), Engineering Technology (ET) and Training Methodology (TM).

                Primary objective of this Institute are to train the Vocational Instructors of various Industrial Training Institutes / Centres and other training establishment.

                Training of Craft Instructors is the mandated responsibility of DGT and It has been operational since the inception of the Craftsmen Training Scheme (CTS).
            </p>
        </div>
    </div>
</section>

<!--courses end-->


 <!-- Our staff Section -->
 <section id="team" class="pb-5">
    <div class="container">
        <h2 class="staff-title">STAFF & FACULITY</h2>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>
                                        <img
                                            class="img-fluid"
                                            src="./assets/images/rajan.jpg"
                                            alt="card image"
                                        />
                                    </p>
                                    <h4 class="card-title">MP RAJAN</h4>
                                    <p class="card-text">Section Incharge Solar Technician (Electrical)</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">MP RAJAN</h4>
                                    <p class="card-text">
                                        Designation :Vocational Instructor(Section Incharge Solar Technician
                                        )<br />
                                        Email id:rjn_mp@yahoo.co.in<br />
                                        Contact No.:9497644591
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-phone-volume"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>
                                        <img
                                            class="img-fluid"
                                            src="./assets/images/prasad.png"
                                            alt="card image"
                                        />
                                    </p>
                                    <h4 class="card-title">PRASAD U M</h4>
                                    <p class="card-text">Incharge EPD,ADIT,Electrician</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">PRASAD U M</h4>
                                    <p class="card-text">
                                        Designation :Vocational Instructor(in-charge EPD/ADIT/CITS
                                        Electrician)<br />
                                        Email id:prasadum@gmail.com<br />
                                        Contact No.:9447532697
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-phone-volume"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>
                                        <img
                                            class="img-fluid"
                                            src="./assets/images/soukath.jpeg"
                                            alt="card image"
                                        />
                                    </p>
                                    <h4 class="card-title">SHAUKHATH HUSSAIN K</h4>
                                    <p class="card-text">HOO,Training Officer(E-MECH)</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">SHAUKHATH HUSSAIN K</h4>
                                    <p class="card-text">
                                        Designation :HOO,Training Officer(E-MECH) Electronic Mechanic<br />
                                        Email id:shaukhath.dgt@dgt.gov.in<br />
                                        Contact No.:8547639921
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-phone-volume"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>
                                        <img
                                            class="img-fluid"
                                            src="./assets/images/jinendran.png"
                                            alt="card image"
                                        />
                                    </p>
                                    <h4 class="card-title">JINENDRAN P K</h4>
                                    <p class="card-text">Junior Consultant(ADIT)</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">JINENDRAN P K</h4>
                                    <p class="card-text">
                                        Trainer Advanced Diploma (Vocational) Course in 'IT, Networking & Cloud
                                        Computing'<br />
                                        Designation :Junior Consultant(ADIT)<br />
                                        Email id:jinendranpk@gmail.com<br />
                                        Contact No.:8547131623
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-phone-volume"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>
                                        <img
                                            class="img-fluid"
                                            src="./assets/images/bijoy.png"
                                            alt="card image"
                                        />
                                    </p>
                                    <h4 class="card-title">BIJOY B K</h4>
                                    <p class="card-text">Trade Incharge RODA,IoT Technician</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">BIJOY B K</h4>
                                    <p class="card-text">
                                        Designation :Vocational Instructor (section Incharge RODA,IoT
                                        Technician)<br />
                                        Email id:bijoybk81@gmail.com<br />
                                        Contact No.:9869941206
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-phone-volume"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>
                                        <img class="img-fluid" src="./assets/images/sha.png" alt="card image" />
                                    </p>
                                    <h4 class="card-title">SHANTILAL TC</h4>
                                    <p class="card-text">Vocational Instructor(MRAC)</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">SHANTILAL TC</h4>
                                    <p class="card-text">
                                        Designation :Vocational Instructor Mechanic Refrigeration and Air
                                        Conditioning <br />
                                        Email id:shantilal.tc@gov.in<br />
                                        Contact No.:9446470830
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-phone-volume"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ./Team member -->
             <!-- Team member -->
             <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>
                                        <img
                                            class="img-fluid"
                                            src="./assets/images/niyas.png"
                                            alt="card image"
                                        />
                                    </p>
                                    <h4 class="card-title">NIYAS NARIMUKKIL</h4>
                                    <p class="card-text">Master Trainer(ADIT) Edunet Foundation</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">NIYAS NARIMUKKIL</h4>
                                    <p class="card-text">
                                        Designation :Master Trainer(ADIT) Edunet Foundation<br />
                                        Email id:niyas@edunetfoundation.com<br />
                                        Contact No.:0000000000
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-phone-volume"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
             <!-- Team member -->
             <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>
                                        <img
                                            class="img-fluid"
                                            src="./assets/images/soukath.jpeg"
                                            alt="card image"
                                        />
                                    </p>
                                    <h4 class="card-title">SHAUKHATH HUSSAIN K</h4>
                                    <p class="card-text">HOO,Training Officer(E-MECH)</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">SHAUKHATH HUSSAIN K</h4>
                                    <p class="card-text">
                                        Designation :HOO,Training Officer(E-MECH) Electronic Mechanic<br />
                                        Email id:shaukhath.dgt@dgt.gov.in<br />
                                        Contact No.:8547639921
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-phone-volume"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>
                                        <img
                                            class="img-fluid"
                                            src="./assets/images/meenao.png"
                                            alt="card image"
                                        />
                                    </p>
                                    <h4 class="card-title">RAJENDRA MEENA</h4>
                                    <p class="card-text">Vocational Instructor</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">RAJENDRA MEENA</h4>
                                    <p class="card-text">
                                        Designation :Vocational Instructor(WELDER)<br />
                                        Email id:rajendra.ati11@gmail.com<br />
                                        Contact No.:7589075219
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-phone-volume"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a
                                                class="social-icon text-xs-center"
                                                target="_blank"
                                                href="#"
                                            >
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
        </div>
    </div>
</section>

<!-- End Our staff Section -->

   <!--online learning start-->
   <div class="container-fluid Elearn-section">
    <h2 class="staff-title">E - LEARNING</h2>
    <div class="row">
        <div id="carousel" class="carousel slide Elearn" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-none d-lg-block">
                        <div class="slide-box">
                            <a href="https://www.nimilearningonline.in/">
                                <img class="learn-img" src="./assets/images/nimi.png" alt="First slide"
                            /></a>
                            <a href="https://bharatskills.gov.in/">
                                <img
                                    class="learn-img"
                                    src="./assets/images/bharatskills-logo.png"
                                    alt="First slide"
                            /></a>
                            <a href="https://www.coursera.org/ibm">
                                <img class="learn-img" src="./assets/images/ibm_0.png" alt="First slide"
                            /></a>
                            <a href="https://skillsbuild.org/">
                                <img class="learn-img" src="./assets/images/skill.png" alt="First slide"
                            /></a>
                        </div>
                    </div>
                    <div class="d-none d-md-block d-lg-none">
                        <div class="slide-box">
                            <a href="https://www.nimilearningonline.in/">
                                <img class="learn-img" src="./assets/images/nimi.png" alt="First slide"
                            /></a>
                            <a href="https://bharatskills.gov.in/">
                                <img
                                    class="learn-img"
                                    src="./assets/images/bharatskills-logo.png"
                                    alt="First slide"
                            /></a>
                            <a href="https://www.coursera.org/ibm">
                                <img class="learn-img" src="./assets/images/ibm_0.png" alt="First slide"
                            /></a>
                        </div>
                    </div>
                    <div class="d-none d-sm-block d-md-none">
                        <div class="slide-box">
                            <a href="https://www.nimilearningonline.in/">
                                <img class="learn-img" src="./assets/images/nimi.png" alt="First slide"
                            /></a>
                            <a href="https://bharatskills.gov.in/">
                                <img
                                    class="learn-img"
                                    src="./assets/images/bharatskills-logo.png"
                                    alt="First slide"
                            /></a>
                        </div>
                    </div>
                    <div class="d-block d-sm-none">
                        <div class="slide-box">
                            <a href="https://www.nimilearningonline.in/">
                                <img class="learn-img" src="./assets/images/nimi.png" alt="First slide"
                            /></a>
                            <a href="https://bharatskills.gov.in/">
                                <img
                                    class="learn-img"
                                    src="./assets/images/bharatskills-logo.png"
                                    alt="First slide"
                            /></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-none d-lg-block">
                        <div class="slide-box">
                            <a href="https://www.coursera.org/ibm">
                                <img class="learn-img" src="./assets/images/ibm_0.png" alt="second slide"
                            /></a>
                            <a href="https://skillsbuild.org/">
                                <img class="learn-img" src="./assets/images/skill.png" alt="second slide"
                            /></a>
                            <a href="https://bharatskills.gov.in/">
                                <img
                                    class="learn-img"
                                    src="./assets/images/bharatskills-logo.png"
                                    alt="second slide"
                            /></a>
                            <a href="https://www.nimilearningonline.in/">
                                <img class="learn-img" src="./assets/images/nimi.png" alt="second slide"
                            /></a>
                        </div>
                    </div>
                    <div class="d-none d-md-block d-lg-none">
                        <div class="slide-box">
                            <a href="https://skillsbuild.org/">
                                <img class="learn-img" src="./assets/images/skill.png" alt="second slide"
                            /></a>
                            <a href="https://www.nimilearningonline.in/">
                                <img class="learn-img" src="./assets/images/nimi.png" alt="second slide"
                            /></a>
                            <a href="https://bharatskills.gov.in/">
                                <img
                                    class="learn-img"
                                    src="./assets/images/bharatskills-logo.png"
                                    alt="second slide"
                            /></a>
                        </div>
                    </div>
                    <div class="d-none d-sm-block d-md-none">
                        <div class="slide-box">
                            <a href="https://skillsbuild.org/">
                                <img class="learn-img" src="./assets/images/skill.png" alt="Second slide"
                            /></a>
                            <a href="https://www.coursera.org/ibm">
                                <img class="learn-img" src="./assets/images/ibm_0.png" alt="Second slide"
                            /></a>
                        </div>
                    </div>
                    <div class="d-block d-sm-none">
                        <div class="slide-box">
                            <a href="https://skillsbuild.org/">
                                <img class="learn-img" src="./assets/images/skill.png" alt="Second slide"
                            /></a>
                            <a href="https://www.coursera.org/ibm">
                                <img class="learn-img" src="./assets/images/ibm_0.png" alt="Second slide"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<!--online learning end-->
</div>

@endsection


