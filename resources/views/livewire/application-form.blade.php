







{{-- <div>
<!--LiveWire   Component***************-->

<div class="container">



<!--success message start-->
@if (session()->has('message'))
<div class="alert alert-success">
{{ session('message') }}
</div>
@endif
<!--success message end-->

<!--form start-->


<form wire:submit.prevent="submit" enctype="multipart/form-data">


<div>
    @if($step == 0)

        <H4 class="text-center">Personal Details</H4>
        <div class="form-group row mt-5">
            <label for="tradeName"class="col-sm-4 col-form-label">Trade Name</label>
            <div class="col-lg-8">
            <input type="text" class="form-control"  wire:model.lazy="tradeName" placeholder="Enter Your Trade Name">
            @error('tradeName')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>



        <div class="form-group row">
            <label for="iti passed" class="col-sm-4 col-form-label">Whether ITI Passed</label>
            <div class="col-lg-8">
            <select class="form-control" id="itiPassed"  wire:model="itiPassed">
                <option selected >Choose...</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            @error('itiPassed')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div></div>


          <div class="form-group row">
            <label for="iti diplomaHolder" class="col-sm-4 col-form-label">Is Diploma Holder</label>
            <div class="col-lg-8">
            <select class="form-control" id="isDiplomaHolder"  wire:model="isDiplomaHolder">
                <option selected >Choose...</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            @error('isDiplomaHolder')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div></div>


          <div class="form-group row">
            <label for="dob" class="col-sm-4 col-form-label">Date Of Birth</label>
            <div class="col-lg-8">
              <input class="form-control" type="date"  id="dob"  wire:model.lazy="dob">
              @error('dob')<small class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
          </div>

          <div class="form-group row ">
            <label for="fatherName"class="col-sm-4 col-form-label">Father/Spouse/Guardian Name</label>
            <div class="col-lg-8">
            <input type="text" class="form-control"  wire:model.lazy="fatherGuardianName" placeholder="Enter Your Father/Guardian/Spuose Name">
            @error('fatherGuardianName')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>


        <div class="form-group row ">
            <label for="motherName"class="col-sm-4 col-form-label">Mother's Name</label>
            <div class="col-lg-8">
            <input type="text" class="form-control"  wire:model.lazy="motherName" placeholder="Enter Your Mother's Name">
            @error('motherName')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>


        <div class="form-group row">
            <label for="gender" class="col-sm-4 col-form-label">Gender</label>
            <div class="col-lg-8">
            <select class="form-control" id="gender"  wire:model="gender">
                <option selected >Choose...</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                <option value="Others">Others</option>
            </select>
            @error('gender')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div></div>


          <div class="form-group row">
            <label for="category" class="col-sm-4 col-form-label">Category</label>
            <div class="col-lg-8">
            <select class="form-control" id="category"  wire:model="category">
                <option selected >Choose...</option>
                <option value="General">General</option>
                <option value="OBC">OBC</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
            </select>
            @error('category')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div></div>



          <div class="form-group row">
            <label for="Physically Handicap " class="col-sm-4 col-form-label">Physically Handicap</label>
            <div class="col-lg-8">
            <select class="form-control" id="physicallyHandicapped"  wire:model="physicallyHandicapped">
                <option selected >Choose...</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            @error('physicallyHandicapped')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div></div>



          <div class="form-group row">
            <label for="traineeType " class="col-sm-4 col-form-label">Trainee Type</label>
            <div class="col-lg-8">
            <select class="form-control" id="traineeType"  wire:model="traineeType">
                <option selected >Choose...</option>
                <option value="Sponsored">Sponsored</option>
                <option value="Private">Private</option>
            </select>
            @error('traineeType')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div></div>


          <div class="form-group row ">
            <label for="employeeCodePEN"class="col-sm-4 col-form-label">Employee Code PEN</label>
            <div class="col-lg-8">
            <input type="text" class="form-control"  wire:model.lazy="employeeCodePEN" placeholder="Enter  Employee Code PEN"><small class="text-muted">* if not have a Employee Code fill it as N/A</small>
            @error('employeeCodePEN')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>



        <div class="form-group row ">
            <label for="aadharNumber"class="col-sm-4 col-form-label">Aadhar Number </label>
            <div class="col-lg-8">
            <input type="text" class="form-control"  wire:model.lazy="aadharNumber" placeholder="Enter Aadhar Number">
            @error('aadharNumber')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>




        <div class="form-group row">
            <label for="maritalStatus" class="col-sm-4 col-form-label">marital Status</label>
            <div class="col-lg-8">
            <select class="form-control" id="maritalStatus"  wire:model="maritalStatus">
                <option selected >Choose...</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widowed">Widowed</option>

            </select>
            @error('maritalStatus')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div></div>


          <div class="form-group row ">
            <label for="address"class="col-sm-4 col-form-label">Address With Pin Code</label>
            <div class="col-lg-8">
            <textarea class="form-control"  wire:model.lazy="address" placeholder="Enter Your Address With Pin Code" rows="3"></textarea>
            @error('address')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>

        <div class="form-group row ">
            <label for="candidatePhoto"class="col-sm-4 col-form-label">Candidate Photo</label>
            <div class="col-lg-8">
                <input type="file" class="form-control" id="candidatePhoto" wire:model.lazy="candidatePhoto">
            @error('candidatePhoto')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>



         @endif



         @if($step ==1 )





        <H4 class="text-center">Educational Qualification Detils</H4>
        <div class="form-group row mt-5">
            <label for="nameOfExamination" class="col-sm-4 col-form-label">Name Of Examination</label>
            <div class="col-lg-8">
            <input type="text" class="form-control" wire:model.lazy="nameOfExamination" placeholder="name Of Examination">
            @error('nameOfExamination')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>


        <div class="form-group row ">
            <label for="nameOfUniversityOrBoard" class="col-sm-4 col-form-label">Name Of The University or Board</label>
            <div class="col-lg-8">
            <input type="text" class="form-control" wire:model.lazy="nameOfUniversityOrBoard" placeholder="name Of university or board">
            @error('nameOfUniversityOrBoard')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>

        <div class="form-group row ">
            <label for="tradeOrSubject" class="col-sm-4 col-form-label">Name Of Trade or Subject</label>
            <div class="col-lg-8">
            <input type="text" class="form-control" wire:model.lazy="tradeOrSubject" placeholder="name Of Trade or Subject">
            @error('tradeOrSubject')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>

        <div class="form-group row ">
            <label for="yearOfPassing" class="col-sm-4 col-form-label">Year Of Passing</label>
            <div class="col-lg-8">
            <input type="text" class="form-control" wire:model.lazy="yearOfPassing" placeholder="Enter Year Of Passing">
            @error('yearOfPassing')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>

        <div class="form-group row ">
            <label for="certificateNumber" class="col-sm-4 col-form-label">Certificate Number</label>
            <div class="col-lg-8">
            <input type="text" class="form-control" wire:model.lazy="certificateNumber" placeholder="Enter The Certificate Number">
            @error('certificateNumber')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>


        <div class="form-group row">
            <label for="duration" class="col-sm-4 col-form-label">Select Duration Of Your Course</label>
            <div class="col-lg-8">
            <select class="form-control" id="duration"  wire:model="duration">
                <option selected >Choose...</option>
                <option value="1 Year">1 Year</option>
                <option value="2 Year">2 Year</option>
                <option value="3 Year">3 Year</option>
                <option value="4 Year">4 Year</option>
                <option value="5 Year">5 Year</option>
                <option value="6 Year">6 Year</option>

            </select>
            @error('duration')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div></div>


        <div class="form-group row ">
            <label for="percentageOfMarks" class="col-sm-4 col-form-label">Percentage Of Marks</label>
            <div class="col-lg-8">
            <input type="number" class="form-control" wire:model.lazy="percentageOfMarks" placeholder="Enter Your Mark Percentage" min="0" max="100">
            @error('percentageOfMarks')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>


        <div class="form-group row">
            <label for="technicalOrAcademic" class="col-sm-4 col-form-label">Technical / Academic</label>
            <div class="col-lg-8">
            <select class="form-control" id="technicalOrAcademic"  wire:model="technicalOrAcademic">
                <option selected >Choose...</option>
                <option value="Technical">Technical</option>
                <option value="Academic">Academic</option>
            </select>
            @error('technicalOrAcademic')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div></div>



          <div class="form-group row ">
            <label for="certificatePhoto"class="col-sm-4 col-form-label">Certificate Photo</label>
            <div class="col-lg-8">
                <input type="file" class="form-control" id="certificatePhoto" wire:model.lazy="certificatePhoto">
            @error('certificatePhoto')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>




        @endif


        @if($step==2)

        <H4 class="text-center">Experience Detils</H4>
        <p class="text-center">If You Don't Have Any Experience ,<strong>Skip This Step ...</strong></p>
        <div class="form-group row mt-5">
            <label for="nameOfEmployer" class="col-sm-4 col-form-label">Name Of The Employer</label>
            <div class="col-lg-8">
            <input type="text" class="form-control" wire:model.lazy="nameOfEmployer" placeholder="Enter The Name Of The Employer ">

            @error('nameOfEmployer')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>



        <div class="form-group row ">
            <label for="natureOfJob" class="col-sm-4 col-form-label">Nature Of The Job</label>
            <div class="col-lg-8">
            <input type="text" class="form-control" wire:model.lazy="natureOfJob" placeholder="Enter Nature Of The Job ">

            @error('natureOfJob')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>



        <div class="form-group row">
            <label for="fromDate" class="col-sm-4 col-form-label">From Date</label>
            <div class="col-lg-8">
              <input class="form-control" type="date"  id="fromDate"  wire:model.lazy="fromDate">
              @error('fromDate')<small class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="toDate" class="col-sm-4 col-form-label">To Date</label>
            <div class="col-lg-8">
              <input class="form-control" type="date"  id="toDate"  wire:model.lazy="toDate">
              @error('toDate')<small class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
          </div>

          <div class="form-group row ">
            <label for="designation" class="col-sm-4 col-form-label">Designation</label>
            <div class="col-lg-8">
            <input type="text" class="form-control" wire:model.lazy="designation" placeholder="Enter Designation ">

            @error('designation')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>


        <div class="form-group row ">
            <label for="currentEmployerStatus" class="col-sm-4 col-form-label">Current Employer Status</label>
            <div class="col-lg-8">
            <input type="text" class="form-control" wire:model.lazy="currentEmployerStatus" placeholder="Enter Current Employer Status ">

            @error('currentEmployerStatus')<small class="form-text text-danger">{{ $message }}</small>@enderror
        </div></div>


 @endif

       @if($step > 2)
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thank you for information</h4>

                <a href="/dashboard">Go to home</a>
            </div>


        </div>

        @endif
    </div>

       @if($step> 0 && $step<=2)
      <button type="button" wire:click="decreaseStep" class="btn btn-secondary mr-3 mb-5 mt-5">Go Back</button>
       @endif


       @if($step <= 2)
      <button type="submit" class="btn btn-success mb-5 mt-5 float-right mr-5">Save and Next</button>
      @endif
</form></div></div>
<!--form end-->

</div>
 --}}
