
<template>
<div class="container-fluid ">
<div class="row mt-3">
          <div class="col-md-12">

            <div class="card ">

              <div class="card-header">
                <h2 class="card-title "><strong><em>Admitted Students Details -<span class=""> Welder</span></em></strong></h2>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>#Id</th>
                      <th>Name</th>
                      <th>Email ID</th>
                      <th>Phone Number</th>
                      <th>Selected Trade</th>
                      <th>Date Of Birth</th>
                    <th>View Full Details</th>
                      <th>Documents & <br>Certificates</th>

                    </tr>
                    </thead>
                <tbody v-for="user in users" :key="user.id">
                    <tr>
                    <td>{{user.id}}</td>
                      <td>{{user.name | upText}}</td>
                      <td>{{user.email}}</td>
                      <td>{{user.phonenumber}}</td>
                      <td>{{user.tradeName }}</td>
                      <td>{{user.dob | myDate}}</td>

                    <td>


                    <button type="button" @click="formView(user)" class="btn btn-light btn-sm ml-1" data-toggle="modal" data-target="#applicationAllView" >
                    <i class="fa fa-user" title="View Personal Details"></i></button>

                    <button type="button" @click="educationView(user)" class="btn btn-light btn-sm " data-toggle="modal" data-target="#applicationEducationView" >
                    <i class="fa fa-graduation-cap" title="View Educational Qualifications"></i></button>

                    <button type="button" @click="experienceView(user)" class="btn btn-light btn-sm " data-toggle="modal" data-target="#applicationExperienceView" >
                    <i class="fa fa-university" title="View Experience Details"></i></button>

                      </td>






                      <td>

                    <button type="button" @click="verifyCert(user)" class="btn btn-outline-secondary btn-sm ml-4" data-toggle="modal" data-target="#certificatesView" >
                    <i class="fa fa-eye" title="View Certificates"></i></button>



                      </td>


                    </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

<!-- Modal main -->
<div class="modal fade" id="certificatesView" tabindex="-1" role="dialog" aria-labelledby="certificatesView" aria-hidden="true">
  <div class="modal-dialog  modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="certificatesView">Documents Of {{  user_name | upText }}</h5>

      </div>
      <div class="modal-body">

<!--
<ul v-for="document in documents" :key="document.id">

<li>{{document.doc_title}}</li>

<img :src="/uploads/+document.document" class="img-fluid rounded" data-toggle="modal" data-target="#expandImageModal" alt="doc images" width="200px" height="200px" @click="singleImageExpand(document)">

</ul>-->

<div class="row" >

<div class="col-md-3 col-sm-6" v-for="document in documents" :key="document.id">
<h5>{{document.doc_title}}</h5>
<div class="img">
<img :src="/uploads/+document.document" class="img-fluid rounded" data-toggle="modal" data-target="#expandImageModal" alt="doc images" width="200px" height="200px" @click="singleImageExpand(document)">

</div>

</div>

</div>






      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="closeMainModal()">Close </button>

      </div>
    </div>
  </div>
</div>
<!--**********************************************************-->


<!-- Modal -->
<div class="modal  fade fade-scale" id="expandImageModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ expandedImageTitle }}</h5>
        <button type="button" class="close" aria-label="Close"  @click="closeExpandImage()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <img :src="/uploads/+expandedImage" class="img-responsive"  alt="doc images" style="max-width:100%; max-height:50%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" @click="closeExpandImage()">Close</button>
        <button type="button" class="btn btn-primary">print</button>
      </div>
    </div>
  </div>
</div>

<!--**********************************************************-->


<!-- ALL DETAILS@APPLICATION FORM-->
<!-- Modal -->
<div class="modal fade" id="applicationAllView" tabindex="-1" role="dialog" aria-labelledby="certificatesView" aria-hidden="true">
  <div class="modal-dialog modal-xl " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="certificatesView">Application Form Details Of {{  user_name | upText }}
            <span class="text-muted">: <strong>Personal Details</strong> </span>
        </h5>


      </div>
      <div class="modal-body">
<table class="table text-nowrap " style="width=100%">
<div class="row ">

<div class="col-md-6 col-sm-6">
  <tr>
    <th>Name  :</th>
    <td>{{  user_name | upText }}</td>
  </tr>
  <tr>
    <th>Email Id  :</th>
    <td>{{ user_email }}</td>
  </tr>
  <tr>
    <th>Phone Number :</th>
    <td>{{ user_phone }}</td>
  </tr>
<tr>
    <th>Selected Trade :</th>
    <td>{{ user_trade }}</td>
  </tr>

<tr>
    <th>Date Of Birth :</th>
    <td>{{ user_dob | myDate}}</td>
  </tr>

<tr>
    <th>Whether ITI Passed :</th>
    <td>{{ user_itiPassed }}</td>
  </tr>

<tr>
    <th>Is Diploma Holder :</th>
    <td>{{ user_diploma}}</td>
  </tr>

<tr>
    <th>Father/Spouse/Guardian Name :</th>
    <td>{{ user_guardian}}</td>
  </tr>

<tr>
    <th>Mothers Name :</th>
    <td>{{ user_mother}}</td>
  </tr>

  <tr>
    <th>Gender :</th>
    <td>{{ user_gender}}</td>
  </tr>

</div>
<div class="col-md-6 col-sm-12  border-left ">

   <tr>
    <th>Category :</th>
    <td>{{ user_category}}</td>
  </tr>

   <tr>
    <th>Physically Handicap :</th>
    <td>{{ user_physicallyHandicap}}</td>
  </tr>

   <tr>
    <th>Trainee Type :</th>
    <td>{{ user_traineeType}}</td>
  </tr>

   <tr>
    <th>Employee Code (PEN) :</th>
    <td>{{ user_empCode}}</td>
  </tr>

  <tr>
    <th>Aadhar Number :</th>
    <td>{{ user_aadharNumber}}</td>
  </tr>

  <tr>
    <th>Marital Status :</th>
    <td>{{ user_maritalStatus}}</td>
  </tr>

   <tr>
    <th>Address :</th>
    <td>{{ user_address}}</td>
  </tr>

</div>
</div>

</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close </button>

      </div>
    </div>
  </div>
</div>
<!-- ALL DETAILS@APPLICATION FORM-->



<!-- Educational Details@ FORM-->
<!-- Modal -->

<div class="modal fade" id="applicationEducationView" tabindex="-1" role="dialog" aria-labelledby="certificatesView" aria-hidden="true">
  <div class="modal-dialog modal-xl " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="certificatesView">Application Form Details Of {{  user_name | upText }}
            <span class="text-muted">: <strong>Educational Qualification Details</strong> </span>
        </h5>
      </div>
      <div class="modal-body" v-for="education in educations" :key="education.id">
<table class="table text-nowrap " style="width=100%">
<div class="row ">

<div class="col-md-6 col-sm-6">
  <tr>
    <th>Name Of Examination  :</th>
    <td>{{education.nameOfExamination}}</td>
  </tr>
<tr>
    <th>Name Of University or Board  :</th>
    <td>{{education.nameOfUniversityOrBoard}}</td>
  </tr>
<tr>
    <th>Trade Or Subject:</th>
    <td>{{education.tradeOrSubject}}</td>
  </tr>
<tr>
    <th>Year Of Passing:</th>
    <td>{{education.yearOfPassing}}</td>
  </tr>


</div>
<div class="col-md-6 col-sm-12  border-left ">

   <tr>
    <th>Certificate Number :</th>
    <td> {{education.certificateNumber}}</td>
  </tr>

<tr>
    <th>Duration:</th>
    <td> {{education.duration}}</td>
  </tr>

<tr>
    <th>Percentage Of Marks:</th>
    <td> {{education.percentageOfMarks}}</td>
  </tr>
<tr>
    <th>Technical Or Academic:</th>
    <td> {{education.technicalOrAcademic}}</td>
  </tr>

</div>
</div><hr style="height:1px;border:none;color:#333;background-color:#333;" />

</table>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="clearModalData()">Close </button>

      </div>
    </div>
  </div>
</div>
<!-- Educational Details@ FORM-->


<!-- Educational Details@ FORM-->
<!-- Modal -->

<div class="modal fade" id="applicationExperienceView" tabindex="-1" role="dialog" aria-labelledby="certificatesView" aria-hidden="true">
  <div class="modal-dialog modal-xl " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="certificatesView">Application Form Details Of {{  user_name | upText }}
            <span class="text-muted">: <strong>Experience  Details</strong> </span>
        </h5>
      </div>



<div class="modal-body" v-for="experience in experiences" :key="experience.id">
<table class="table text-nowrap " style="width=100%">
<div class="row ">

<div class="col-md-6 col-sm-6">
  <tr>
    <th>Name Of Employer  :</th>
    <td>{{experience.nameOfEmployer}}</td>
  </tr>

 <tr>
    <th>Nature Of Job  :</th>
    <td>{{experience.natureOfJob}}</td>
  </tr>

<tr>
    <th>Designation  :</th>
    <td>{{experience.designation}}</td>
  </tr>

</div>
<div class="col-md-6 col-sm-12  border-left ">

<tr>
    <th>From Date  :</th>
    <td>{{experience.fromDate}}</td>
  </tr>

<tr>
    <th>To Date  :</th>
    <td>{{experience.toDate}}</td>
  </tr>


<tr>
    <th>Current Employer Status  :</th>
    <td>{{experience.currentEmployerStatus}}</td>
  </tr>

</div>
</div><hr style="height:1px;border:none;color:#333;background-color:#333;" />

</table>


</div>




      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="clearModalData()">Close </button>

      </div>
    </div>
  </div>
</div>
<!-- Educational Details@ FORM-->



</div>


</template>


<script>

export default {

 data() {
    return {
     users:{},
     documents:{},
     educations:{},
     experiences:{},



doc_title:'',


     userId:'',
     user_name:'',
     user_email:'',
     user_phone:'',
user_trade:'',
user_dob:'',
user_itiPassed:'',
user_diploma:'',
user_guardian:'',
user_mother:'',
user_gender:'',
user_category:'',
user_physicallyHandicap:'',
user_traineeType:'',
user_empCode:'',
user_aadharNumber:'',
user_maritalStatus:'',
user_address:'',
// user_candidatePhoto:'',

user_ExaminationName:'',


expandedImage:'',
expandedImageTitle:'',

    }
 },

  methods:{

            clearModalData(){

            this.documents={};
            this.educations={};
            this.experiences={};


            },


            singleImageExpand(document){
            this.expandedImage=document.document;
            this.expandedImageTitle=document.doc_title;

            $('#certificatesView').modal('hide');
            },

            closeExpandImage(){
            $('#expandImageModal').modal('hide');

            $('#certificatesView').modal('show');

            },


            closeMainModal(){
            $('#certificatesView').modal('hide');
            $('.modal-backdrop').hide();

                this.clearModalData();
            },

    getDocuments(){

        axios.get('/getDocs/'+this.userId).then((data)=>(this.documents=data.data));

    },

    educationView(user){
       this.userId=user.id;
        axios.get('/getEducation/'+this.userId).then((data)=>(this.educations=data.data));

    },

    experienceView(user){
        this.userId=user.id;
        axios.get('/getExperience/'+this.userId).then((data)=>(this.experiences=data.data));
    },


    verifyCert(user){

        this.user_name=user.name;
        this.userId=user.id;

        this.getDocuments();

      },

 formView(user){

        this.user_name=user.name;
        this.userId=user.id;
        this.user_email=user.email;
        this.user_phone=user.phonenumber;
this.user_trade=user.tradeName;
this.user_dob=user.dob;
this.user_itiPassed=user.itiPassed;
this.user_diploma=user.isDiplomaHolder;
this.user_guardian=user.fatherGuardianName;
this.user_mother=user.motherName;
this.user_gender=user.gender;
this.user_category=user.category;
this.user_physicallyHandicap=user.physicallyHandicapped;
this.user_traineeType=user.traineeType;
this.user_empCode=user.employeeCodePEN;
this.user_aadharNumber=user.aadharNumber;
this.user_maritalStatus=user.maritalStatus;
this.user_address=user.address;
// this.user_candidatePhoto=user.candidatePhoto;


      },


    //get table data function
    loadUsers(){
        axios.get("/WelderAdmittedList").then((data)=>(this.users=data.data));
    },


  },

  created() {


    this.loadUsers();

    Fire.$on('AfterAction',()=>{
        this.loadUsers();
    });
  },


};


</script>

<style>

</style>

