<template>
  <div class="container">
    <form method="POST" enctype="multipart/form-data">
      <!-- @submit.prevent="SubmitForm" -->

      <section v-if="step == 1">
        <h3 class="mb-5 font-weight-bold font-italic">
          <span class="text-muted">Step 01</span> Personal Details
        </h3>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <label for="trade name" class="font-weight-bold"
                >Select Trade</label
              >
              <select class="form-control mb-3" v-model="form.tradeName">
                <option selected>Choose...</option>
                <option value="CITS-Mechanic RAC">
                  CITS-Mechanic Refrigeration and Air Conditioning
                </option>
                <option value="CITS-Electrician & Wireman">
                  CITS-Electrician & Wireman
                </option>
                <option value="CITS-Electronic Mechanic">
                  CITS-Electronic Mechanic
                </option>
                <option value="CITS-Welder">CITS-Welder</option>
                <option value="CITS-RODA">
                  CITS-Reading Of Drawing and Arithmetic (RODA)
                </option>
                <option value="CTS-Solar Technician">
                  CTS-Solar Technician(Electrical)
                </option>
                <option value="CTS-IOT">
                  CTS-IoT TECHNICIAN (SMART HEALTHCARE)
                </option>
                <option value="CTS-Electrician Power Distribution">
                  CTS-Electrician – Power Distribution
                </option>
                <option value="ADIT">
                  Advanced Diploma in IT Networking and Cloud Computing
                </option>
              </select>

              <label for="itiPassed" class="font-weight-bold"
                >Whether ITI Passed</label
              >
              <select class="form-control mb-3" v-model="form.itiPassed">
                <option selected>choose</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>

              <label for="diploma" class="font-weight-bold"
                >Is Diploma Holder</label
              >
              <select class="form-control mb-3" v-model="form.isDiplomaHolder">
                <option selected>Choose..</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>

              <label for="dob" class="font-weight-bold">Date Of Birth</label>
              <input class="form-control mb-3" type="date" v-model="form.dob" />

              <label for="guardian" class="font-weight-bold"
                >Father/Spouse/Guardian Name</label
              >
              <input
                type="text"
                class="form-control mb-3"
                placeholder="Enter Your fatherGuardianName"
                v-model="form.fatherGuardianName"
              />

              <label for="mothername" class="font-weight-bold"
                >Mother s Name</label
              >
              <input
                type="text"
                class="form-control mb-3"
                placeholder="Enter Your motherName"
                v-model="form.motherName"
              />

              <label for="Gender" class="font-weight-bold">Gender</label>
              <select class="form-control mb-3" v-model="form.gender">
                <option selected>Choose..</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                <option value="Others">Others</option>
              </select>

              <label for="category" class="font-weight-bold">Category</label>
              <select class="form-control mb-3" v-model="form.category">
                <option selected>Choose..</option>
                <option value="General">General</option>
                <option value="OBC">OBC</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="physicalyHandicap" class="font-weight-bold"
                >Physically Handicap</label
              >
              <select
                class="form-control mb-3"
                v-model="form.physicallyHandicapped"
              >
                <option selected>physicallyHandicapped or Not</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>

              <label for="traineeType" class="font-weight-bold"
                >Trainee Type</label
              >
              <select class="form-control mb-3" v-model="form.traineeType">
                <option selected>Choose..</option>
                <option value="Sponsored">Sponsored</option>
                <option value="Private">Private</option>
              </select>

              <label for="empcode" class="font-weight-bold"
                >Employee Code (PEN)
                <small class="text-muted font-weight-bold"
                  >/ If you not have skip this field</small
                ></label
              >
              <input
                type="text"
                class="form-control mb-3"
                placeholder="Enter Your employeeCodePEN"
                v-model="form.employeeCodePEN"
              />

              <label for="aadhar" class="font-weight-bold">Aadhar Number</label>
              <input
                type="text"
                class="form-control mb-3"
                placeholder="Enter Aadhar Number"
                v-model="form.aadharNumber"
              />

              <label for="maritalStatus" class="font-weight-bold"
                >Marital Status</label
              >
              <select class="form-control mb-3" v-model="form.maritalStatus">
                <option selected>Choose... maritalStatus</option>
                <option selected>Choose...</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widowed">Widowed</option>
              </select>

              <label for="address" class="font-weight-bold"
                >Address With Pin Code</label
              >
              <textarea
                class="form-control mb-4"
                placeholder="Enter Your Address With Pin Code"
                rows="4"
                v-model="form.address"
              ></textarea>

              <!-- <input type="text" class="form-control mt-3 mb-3" placeholder="this for candidate photo /change in future to file upload"
        v-model="form.candidatePhoto" > -->
              <button
                class="btn btn-success mt-5 mb-5 float-right"
                @click.prevent="firstStep"
                v-if="step != totalSteps"
              >
                Next Step <i class="far fa-hand-point-right fa-lg"></i>
              </button>
            </div>
          </div>
        </div>
      </section>

      <section v-if="step == 2">
        <h3 class="mb-5 font-weight-bold font-italic">
          <span class="text-muted">Step 02</span> Educational Qualification
        </h3>

        <div class="container mt-3">
          <div
            class="card mb-3"
            v-for="(education, index) in educations"
            :key="index"
          >
            <div class="card-body">
              <button
                class="btn btn-outline-danger btn-sm mb-3 float-right"
                @click.prevent="deleteEducationForm(index)"
              >
                <i class="far fa-times-circle fa-lg"></i>
              </button>

              <h4 class="card-title mb-5">
                Add Education (Educational Qualification : {{ index }})
              </h4>

              <div class="education-form">
                <div class="row">
                  <div class="col-md-6">
                    <label for="nameOfExam" class="font-weight-bold"
                      >Name Of Examination Passed</label
                    >
                    <input
                      type="text"
                      class="form-control mb-3"
                      placeholder="Name Of Examination Passed"
                      v-model="education.nameOfExamination"
                    />

                    <label for="university" class="font-weight-bold"
                      >Name Of University/Board/School</label
                    >
                    <input
                      type="text"
                      class="form-control mb-3"
                      placeholder="Name Of School/University/Board"
                      v-model="education.nameOfUniversity"
                    />

                    <label for="yearOfPass" class="font-weight-bold"
                      >Year Of Passing</label
                    >
                    <input
                      type="text"
                      class="form-control mb-3"
                      placeholder="Year Of Passing"
                      v-model="education.yearOfPass"
                    />

                    <label for="subject" class="font-weight-bold"
                      >Name Of Subject/Trade</label
                    >
                    <input
                      type="text"
                      class="form-control mb-3"
                      placeholder="Subject/Trade"
                      v-model="education.subject"
                    />
                  </div>

                  <div class="col-md-6">
                    <label for="c-no" class="font-weight-bold"
                      >Certificate Number</label
                    >
                    <input
                      type="text"
                      class="form-control mb-3"
                      placeholder="Certificate Number"
                      v-model="education.certificateNo"
                    />

                    <label for="duration" class="font-weight-bold"
                      >Duration</label
                    >
                    <select
                      class="form-control mb-3"
                      v-model="education.duration"
                    >
                      <option value="1 Year">1 Year</option>
                      <option value="2 Year">2 Year</option>
                      <option value="3 Year">3 Year</option>
                      <option value="4 Year">4 Year</option>
                      <option value="5 Year">5 Year</option>
                      <option value="6 Year">6 Year</option>
                    </select>

                    <label for="tech/aca" class="font-weight-bold"
                      >Technical / Academic</label
                    >
                    <select
                      class="form-control mb-3"
                      v-model="education.technicalOrAcademic"
                    >
                      <option selected>Choose..</option>
                      <option value="Technical">Technical</option>
                      <option value="Academic">Academic</option>
                    </select>

                    <label for="percentage" class="font-weight-bold"
                      >Percentage Of Marks</label
                    >
                    <input
                      type="number"
                      max="100"
                      class="form-control mb-3"
                      placeholder="Percentage Of Marks"
                      v-model="education.percentageOfMarks"
                    />

                    <!-- <label for="cert-photo" class="font-weight-bold ">Certificate Photo</label>
                     <input type="file" class="form-control" name="certificatePhoto" @change="onChangeCert">
<img v-bind:src="imagePreviewCert" width="80" height="80" v-show="showPreviewCert" class="mt-2"/> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <button
          class="btn btn-secondary mt-5 mb-5"
          @click.prevent="backStep"
          v-if="step != 1"
        >
          <i class="far fa-hand-point-left fa-lg"></i> Go Back
        </button>

        <button
          class="btn btn-primary mt-5 mb-5"
          @click.prevent="addNewEducationForm"
        >
          Add Education <i class="fas fa-plus-circle"></i>
        </button>

        <button
          class="btn btn-success mt-5 mb-5 float-right"
          @click.prevent="SecondStep"
          v-if="step != totalSteps"
        >
          Next Step <i class="far fa-hand-point-right fa-lg"></i>
        </button>
      </section>

      <section v-if="step == 3">
        <h3 class="font-weight-bold font-italic">
          <span class="text-muted">Step 03</span> Experience Details
        </h3>
        <small class="mb-5"
          >If you have any work experience , add here ..else<strong>
            Skip this Form.</strong
          ></small
        >

        <div class="container mt-3">
          <div
            class="card mb-3"
            v-for="(experience, index) in experiences"
            :key="index"
          >
            <div class="card-body">
              <button
                class="btn btn-outline-danger btn-sm mb-3 float-right"
                @click.prevent="deleteExperienceForm(index)"
              >
                <i class="far fa-times-circle fa-lg"></i>
              </button>

              <h4 class="card-title mb-4">
                Add Experience Details (Experience Details : {{ index }})
              </h4>

              <div class="education-form">
                <div class="row">
                  <div class="col-md-6">
                    <label for="nameOfEmployer" class="font-weight-bold"
                      >Name Of The Employer</label
                    >
                    <input
                      type="text"
                      class="form-control mb-3"
                      placeholder="Name Of Employer"
                      v-model="experience.nameOfEmployer"
                    />

                    <label for="natureOfJob" class="font-weight-bold"
                      >Nature Of Job</label
                    >
                    <input
                      type="text"
                      class="form-control mb-3"
                      placeholder="Nature Of Job"
                      v-model="experience.natureOfJob"
                    />

                    <label for="fromDate" class="font-weight-bold"
                      >From Date</label
                    >
                    <input
                      class="form-control mb-3"
                      type="date"
                      v-model="experience.fromDate"
                    />
                  </div>
                  <div class="col-md-6">
                    <label for="toDate" class="font-weight-bold">To Date</label>
                    <input
                      class="form-control mb-3"
                      type="date"
                      v-model="experience.toDate"
                    />

                    <label for="Designation" class="font-weight-bold"
                      >Designation</label
                    >
                    <input
                      type="text"
                      class="form-control mb-3"
                      placeholder="Designation"
                      v-model="experience.designation"
                    />

                    <label for="currentStatus" class="font-weight-bold"
                      >Current Employer Status</label
                    >
                    <input
                      type="text"
                      class="form-control mb-3"
                      placeholder="Current Employer Status"
                      v-model="experience.currentEmployerStatus"
                    />
                  </div>
                </div>
              </div>

              <h6 class="text-danger bold">{{ error_tradeName }}</h6>
            </div>
          </div>

          <button
            class="btn btn-secondary mt-5 mb-5"
            @click.prevent="backStep"
            v-if="step != 1"
          >
            <i class="far fa-hand-point-left fa-lg"></i> Go Back
          </button>

          <button
            class="btn btn-primary mt-5 mb-5"
            @click.prevent="addNewExperienceForm"
          >
            Add ExperienceDetails
            <i class="fas fa-plus-circle"></i>
          </button>

          <button
            class="btn btn-success mt-5 mb-5 float-right"
            @click.prevent="ThirdStep"
            v-if="step != totalSteps"
          >
            Next Step <i class="far fa-hand-point-right fa-lg"></i>
          </button>
        </div>
      </section>

      <section v-if="step == 4">
        <h3 class="font-weight-bold font-italic">
          <span class="text-muted">Step 04</span> Documents Upload
        </h3>

        <div class="container mt-3">
          <div class="row">
            <div class="col-md-6">
              <div class="input-group mt-3">
                <label for="c-photo" class="font-weight-bold"
                  >Candidate Photo</label
                >
              </div>
              <div class="input-group">
                <input
                  type="file"
                  class="form-control"
                  @change="onChange"
                  name="candidatePhoto"
                  id="candidatePhoto"
                />
                <button
                  type="button"
                  class="btn btn-dark btn-default"
                  @click.prevent="upCandPhoto"
                >
                  <i class="fas fa-cloud-upload-alt"></i> Upload
                </button>
              </div>

              <img
                v-bind:src="imagePreview"
                width="80"
                height="80"
                v-show="showPreview"
                class="mt-2"
              />
            </div>

            <!--02-->
            <div class="col-md-6">
              <div class="input-group mt-3">
                <label for="c-photo" class="font-weight-bold"
                  >Aadhar Card -Front Side</label
                >
              </div>
              <div class="input-group">
                <input
                  type="file"
                  class="form-control"
                  @change="onChangeaadharF"
                  name="aadharCardF"
                  id="aadharCardF"
                />
                <button
                  type="button"
                  class="btn btn-dark btn-default"
                  @click.prevent="upAadharPhotoF"
                >
                  <i class="fas fa-cloud-upload-alt"></i> Upload
                </button>
              </div>

              <img
                v-bind:src="imagePreviewAadharF"
                width="80"
                height="80"
                v-show="showPreviewAadharF"
                class="mt-2"
              />

              <div class="input-group mt-3">
                <label for="c-photo" class="font-weight-bold"
                  >Aadhar Card -Back Side</label
                >
              </div>
              <div class="input-group">
                <input
                  type="file"
                  class="form-control"
                  @change="onChangeaadharB"
                  name="aadharCardB"
                  id="aadharCardB"
                />
                <button
                  type="button"
                  class="btn btn-dark btn-default"
                  @click.prevent="upAadharPhotoB"
                >
                  <i class="fas fa-cloud-upload-alt"></i> Upload
                </button>
              </div>

              <img
                v-bind:src="imagePreviewAadharB"
                width="80"
                height="80"
                v-show="showPreviewAadharB"
                class="mt-2"
              />
            </div>
            <!--02-->
          </div>
          <!--TEST TEST TEST TEST TEST TEST TEST TEST -->
          <!--TEST TEST TEST TEST TEST TEST TEST TEST -->

          <div class="row" v-for="d in doc" :key="d.id">
            <div class="col " :ref="d.id" >
              <div class="input-group mt-3">
                <label for="ct-photo" class="font-weight-bold">{{
                  d.nameOfExamination
                }}</label>
              </div>
              <div class="input-group">
                <input
                  type="file"
                  class="form-control"
                  :name="d.nameOfExamination"
                  :ref="d.nameOfExamination"
                />
                <button
                  type="button"
                  @click="show(d)"
                  class="btn btn-dark btn-default"
                >
                  <i class="fas fa-cloud-upload-alt"></i> Upload
                </button>
              </div>
            </div>
          </div>

          <!--TEST TEST TEST TEST TEST TEST TEST TEST -->
          <!--TEST TEST TEST TEST TEST TEST TEST TEST -->
        </div>

        <button
          class="btn btn-secondary mt-5 mb-5"
          @click.prevent="backStep"
          v-if="step != 1"
        >
          <i class="far fa-hand-point-left fa-lg"></i> Go Back
        </button>
      </section>

      <!-- <button class="btn btn-secondary  mb-5" @click.prevent="backStep" v-if="step != 1"><i class="far fa-hand-point-left fa-lg"></i> Go Back </button> -->

      <!-- <button class="btn btn-success mt-5 mb-5" @click.prevent="nextStep" v-if="step != totalSteps">Next Step</button> -->

      <button
        class="btn btn-primary mt-5 mb-5"
        v-if="step == 4"
        @click.prevent="finalSubmit"
      >
        Submit
      </button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      users: {},
      tradeName: "",

      imagePreview: null,
      showPreview: false,

      imagePreviewAadharF: null,
      showPreviewAadharF: false,

      imagePreviewAadharB: null,
      showPreviewAadharB: false,

      error_tradeName: "",

      candidatePhoto: "",
      aadharFront: "",
      aadharBack: "",

      // valueCheckOne:false,
      // valueCheckTwo:false,
      // valueCheckThree:false,

      step: 1,
      totalSteps: 4,

      form: {
        tradeName: "",
        itiPassed: "",
        isDiplomaHolder: "",
        dob: "",
        fatherGuardianName: "",
        motherName: "",
        gender: "",
        category: "",
        physicallyHandicapped: "",
        traineeType: "",
        employeeCodePEN: "",
        aadharNumber: "",
        maritalStatus: "",
        address: "",

        //   candidatePhoto:'',
      },

      educations: [
        {
          nameOfExamination: "",
          nameOfUniversity: "",
          yearOfPass: "",
          subject: "",
          certificateNo: "",
          duration: "",
          technicalOrAcademic: "",
          percentageOfMarks: "",

          // certificatePhoto:''
        },
      ],

      experiences: [
        {
          nameOfEmployer: "",
          natureOfJob: "",
          fromDate: "",
          toDate: "",
          designation: "",
          currentEmployerStatus: "",
        },
      ],
      doc: {},

      docName: "",
      docfile: "",
      docUserId: "",
      
    };
  },
  methods: {
    show(d) {
      this.docUserId = d.user_id;
      this.docName = d.nameOfExamination;
      this.docfile = this.$refs[d.nameOfExamination][0].files[0];



      if (this.docUserId != "" && this.docName != "" && this.docfile != "") {

   
        let uploadImage = new FormData();
        uploadImage.append("userId", this.docUserId);
        uploadImage.append("docName", this.docName);
        uploadImage.append("certificate", this.docfile);

        axios.post("/postdoc", uploadImage).then((response) => {
          if (response.data == "success") {
            Toast.fire({
              icon: "success",
              title: "image added",
            });

 this.docUserId = '';
      this.docName = '';
      this.docfile = '';

     
     this.$refs[d.id][0].className += " hide";



          }
          if (response.data == "already Uploaded") {
            Toast.fire({
              icon: "error",
              title: "image already added",
            });
          }
        });
      }
    },

    GETDATA() {
      axios.get("getdoc").then((response) => {
        this.doc = response.data;
      });
    },

    firstStep: function () {
      axios.post("/postAppFormData", this.form).then(function () {
        console.log("submit and next");
      });
      this.step++;
    },

    SecondStep: function () {
      axios
        .post("/postEducations", { educations: this.educations })
        .then(function () {
          console.log("submit and next 2 educations");
        });
      this.step++;
    },

    ThirdStep: function () {
      axios
        .post("/postExperience", { experiences: this.experiences })
        .then(function () {
          console.log("submit and next 3 experience");
        });
      this.step++;
    },

    upCandPhoto() {
      // let valCheckA =this.valueCheckOne=false;

      let uploadImage = new FormData();
      uploadImage.append("candidatePhoto", this.candidatePhoto);

      axios.post("/uploadCandidatePhoto", uploadImage).then(function () {
        //  valCheckA=true;

        console.log("candidate Photo Uploaded");
        Toast.fire({
          icon: "success",
          title: "Candidate Photo Uploaded Successfully",
        });
      });
    },

    upAadharPhotoF() {
      // let valCheckB =this.valueCheckOne=false;
      let uploadImage = new FormData();
      uploadImage.append("aadharFront", this.aadharFront);

      axios.post("/uploadaadharFrontPhoto", uploadImage).then(function () {
        //  valCheckB=true;

        console.log("aadhar Front Photo Uploaded");
        Toast.fire({
          icon: "success",
          title: "Aadhar Front Side Uploaded Successfully",
        });
      });
    },

    upAadharPhotoB() {
      // let valCheckC =this.valueCheckOne=false;
      let uploadImage = new FormData();
      uploadImage.append("aadharBack", this.aadharBack);

      axios.post("/uploadaadharBackPhoto", uploadImage).then(function () {
        // valCheckC=true;
        console.log("aadhar back side  Photo Uploaded");
        Toast.fire({
          icon: "success",
          title: "Aadhar Back Side Uploaded Successfully",
        });
      });
    },

    backStep: function () {
      this.step--;
    },

    addNewEducationForm() {
      this.educations.push({
        nameOfExamination: "",
        nameOfUniversity: "",
        yearOfPass: "",
        subject: "",
        certificateNo: "",
        duration: "",
        technicalOrAcademic: "",
        percentageOfMarks: "",

        // certificatePhoto:''
      });
    },

    deleteEducationForm(index) {
      this.educations.splice(index, 1);
    },

    addNewExperienceForm() {
      this.experiences.push({
        nameOfEmployer: "",
        natureOfJob: "",
        fromDate: "",
        toDate: "",
        designation: "",
        currentEmployerStatus: "",
      });
    },

    deleteExperienceForm(index) {
      this.experiences.splice(index, 1);
    },

    //         SubmitForm(){

    //             let uploadImage=new FormData();
    //             uploadImage.append('candidatePhoto',this.candidatePhoto);

    //             let uploadCertImage=new FormData();
    //             uploadCertImage.append('certificatePhoto',this.certificatePhoto);

    //             //for step01
    //             let one="/upPhoto";

    //             //for step02
    //             let three="/postEducations";
    //             let four="/upCertPhoto";

    //             //for step03
    //             let five="/postExperience";

    //             //for step01
    //             const requestOne = axios.post(one,uploadImage);

    //             //for step02
    //             const requestThree = axios.post(three,{educations:this.educations});
    //             const requestFour =axios.post(four,uploadCertImage);

    //             //for step03
    //             const requestFive=axios.post(five,{experiences:this.experiences});

    //             axios.all([requestOne, requestTwo , requestThree,requestFour,requestFive]).then(axios.spread((...responses) => {

    //                     const responseOne = responses[0]
    //                     const responseTwo = responses[1]
    //                     const responseThree = responses[2]
    //                     const responseFour = responses[3]
    //                     const responseFive = responses[4]

    //                     // use/access the results
    //                 Swal.fire({

    //                  icon: 'success',
    //                  title: 'Your Application has been Submitted Successfully',
    //                  showConfirmButton: true,

    //             }).then(function() {
    //     window.location = "/home";
    // });
    //                     })).catch(errors => {

    //                     this.error_tradeName = errors.response.data.errors.tradeName
    //                         Swal.fire({
    //                             icon: 'error',
    //                             title: 'Oops...',
    //                             text: 'Something went wrong!',

    //                             })

    //                             })

    //             },

    onChange(e) {
      console.log("selected file", e.target.files[0]);
      this.candidatePhoto = e.target.files[0];

      let reader = new FileReader();
      reader.addEventListener(
        "load",
        function () {
          this.showPreview = true;
          this.imagePreview = reader.result;
        }.bind(this),
        false
      );

      if (this.candidatePhoto) {
        /*
                        Ensure the file is an image file.
                    */
        if (/\.(jpe?g|png|gif)$/i.test(this.candidatePhoto.name)) {
          console.log("candidate photo is here");
          /*
                        Fire the readAsDataURL method which will read the file in and
                        upon completion fire a 'load' event which we will listen to and
                        display the image in the preview.
                        */
          reader.readAsDataURL(this.candidatePhoto);
        }
      }
    },

    //aadharFront
    onChangeaadharF(e) {
      console.log("selected file", e.target.files[0]);
      this.aadharFront = e.target.files[0];

      let reader = new FileReader();
      reader.addEventListener(
        "load",
        function () {
          this.showPreviewAadharF = true;
          this.imagePreviewAadharF = reader.result;
        }.bind(this),
        false
      );

      if (this.aadharFront) {
        /*
                                        Ensure the file is an image file.
                                    */
        if (/\.(jpe?g|png|gif)$/i.test(this.aadharFront.name)) {
          console.log("aadhar front side is here");
          /*
                                        Fire the readAsDataURL method which will read the file in and
                                        upon completion fire a 'load' event which we will listen to and
                                        display the image in the preview.
                                        */
          reader.readAsDataURL(this.aadharFront);
        }
      }
    },

    //aadharBack
    onChangeaadharB(e) {
      console.log("selected file", e.target.files[0]);
      this.aadharBack = e.target.files[0];

      console.log(this.aadharBack);

      let reader = new FileReader();
      reader.addEventListener(
        "load",
        function () {
          this.showPreviewAadharB = true;
          this.imagePreviewAadharB = reader.result;
        }.bind(this),
        false
      );

      if (this.aadharBack) {
        /*
                                        Ensure the file is an image file.
                                    */
        if (/\.(jpe?g|png|gif)$/i.test(this.aadharBack.name)) {
          console.log("aadhar back side is here");
          /*
                                        Fire the readAsDataURL method which will read the file in and
                                        upon completion fire a 'load' event which we will listen to and
                                        display the image in the preview.
                                        */
          reader.readAsDataURL(this.aadharBack);
        }
      }
    },

    finalSubmit: function () {
      if (this.candidatePhoto && this.aadharFront && this.aadharBack) {
        Swal.fire("Thank You!", "Successfully Submited Form!", "success").then(
          function () {
            // this.valueCheckOne=false;
            // this.valueCheckTwo=false;
            // this.valueCheckThree=false;
            window.location = "/home";
          }
        );
      } else {
        Swal.fire("Empty Fields!", "Please Upload Your Documents!", "warning");
      }
    },
  },

  mounted() {
    console.log("Component mounted.");
    console.log(this.valueCheckOne);

    Fire.$on("AfterAction", () => {
      this.SubmitForm();
    });

    this.GETDATA();
  },
};
</script>

<style scoped>
.hide{

display: none !important;

}
</style>