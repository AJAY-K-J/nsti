
<template>
<div class="container-fluid ">
<div class="row mt-3">
          <div class="col-md-12">

            <div class="card ">
<h2 class="text-center mt-2">Admission Pending Candidates</h2>
              <div class="card-header">
                <h2 class="card-title"><strong><em>Candidates Details For Admission (Certificate/Fee Verifications Completed)</em></strong></h2>

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

                      <th>Admission Status</th>


                      <th>Admission Actions</th>

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

                      <td v-if="(user.AdmissionStatus ==1)"><span class="badge badge-success">Admitted <i class="far fa-check-circle fa-fw"></i></span></td>

                        <td v-if="(user.AdmissionStatus ==2)"><span class="badge badge-danger">Rejected <i class="far fa-times-circle fa-fw"></i></span></td>

                        <td v-if="(user.AdmissionStatus ==3)"><span class="badge badge-info">Waiting List <i class="far fa-clock fa-fw"></i></span></td>

                    <td v-if="(user.AdmissionStatus==null)"><span class="badge badge-warning">Admission Pending <i class="fas fa-hourglass-half fa-fw"></i></span>

                                            </td>



                      <td>

                    <button type="button" @click="verifyCert(user)" class="btn btn-outline-secondary btn-sm ml-4" data-toggle="modal" data-target="#certificatesView" >
                    <i class="fa fa-eye" title="View Details"></i></button>



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
        <h5 class="modal-title" id="certificatesView">Admission Details Of {{  user_name | upText }}</h5>

      </div>
    <div class="modal-body">
<table class="table text-nowrap" style="width=100%">
<div class="row ">

<div class="col-md-6 col-sm-6">
  <tr>
    <th>Name   :</th>
    <td>{{  user_name | upText }}</td>
  </tr>

 <tr>
    <th>Email ID  :</th>
    <td>{{user_email}}</td>
  </tr>

<tr>
    <th>Phone Number :</th>
    <td>{{user_phone}}</td>
  </tr>



</div>
<div class="col-md-6 col-sm-12  border-left ">

<tr>
    <th>Selected Trade :</th>
    <td>{{user_trade}}</td>
  </tr>

<tr>
    <th>Dob :</th>
    <td>{{ user_dob }}</td>
  </tr>

<tr>
    <th>Gender :</th>
    <td>{{ user_gender }}</td>
  </tr>



</div>
</div>
<div class="d-flex justify-content-around">
<tr>
    <th>Certificate Verification Status :</th>

   <td v-if="(user_cert_status==1)"><span class="badge badge-success">Verified <i class="far fa-check-circle fa-fw"></i></span>
  <td v-if="(user_cert_status==2)"><span class="badge badge-danger">Rejected <i class="far fa-times-circle fa-fw"></i></span>

                        </td>
                <td v-if="(user_cert_status==null)"><span class="badge badge-warning">Verification Pending <i class="fas fa-hourglass-half fa-fw"></i></span>



                        </td>



    <th>Fee Verification Status :</th>

 <td v-if="(user_fee_status==1)"><span class="badge badge-success">Paid <i class="far fa-check-circle fa-fw"></i></span>
                        </td>
                        <td v-if="(user_fee_status==2)"><span class="badge badge-danger">Not Paid <i class="far fa-times-circle fa-fw"></i></span>
                        </td>
                        <td v-if="(user_fee_status==null)"><span class="badge badge-warning">Verification Pending <i class="fas fa-hourglass-half fa-fw"></i></span>
                        </td>
  </tr>
</div>
</table>


</div>
      <div class="modal-footer">


        <button @click="AdmitStudent()" class="btn btn-success" data-dismiss="modal" >Admit <i class="fa fa-check fa-fw"></i></button>

        <button @click="RejectStudent()" class="btn btn-danger" data-dismiss="modal">Reject <i class="fa fa-times fa-fw"></i></button>

    <button @click="addToWaitingList()" class="btn btn-warning" data-dismiss="modal">Add To Waiting List <i class="fas fa-hourglass-half fa-fw"></i></button>

    <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="closeMainModal()">Close <i class="fas fa-door-open fa-fw"></i></button>

      </div>
    </div>
  </div>
</div>
<!--**********************************************************-->








</div>


</template>


<script>

export default {

 data() {
    return {
     users:{},
     documents:{},



doc_title:'',


     userId:'',
     user_name:'',
     user_email:'',
     user_phone:'',
user_trade:'',
user_dob:'',
user_cert_status:'',
user_fee_status:'',
user_gender:'',


user_ExaminationName:'',


expandedImage:'',
expandedImageTitle:'',

    }
 },

  methods:{



closeExpandImage(){

 $('#certificatesView').modal('show');

},

//28/06/2021Overlay issue want to change
closeMainModal(){
 $('#certificatesView').modal('hide');
 $('.modal-backdrop').hide();
},

    verifyCert(user){

        this.user_name=user.name;
        this.userId=user.id;
        this.user_email=user.email;
        this.user_phone=user.phonenumber;
        this.user_trade=user.tradeName;
        this.user_cert_status=user.certificateVerificationStatus;
        this.user_fee_status=user.feeVerificationStatus;
        this.user_dob=user.dob;
        this.user_gender=user.gender;






      },
        //AdmitStudents
  AdmitStudent(){


        axios.post("/admitStudents/"+this.userId).then((res)=>{

                if(res.data=='alreadyAdmitted'){
                        Swal.fire({
                        icon: 'warning',
                        title: 'Already Admitted',
                        })
                }else{
            this.$Progress.start();
            Fire.$emit('AfterAction');

            $('#certificatesView').modal('hide')

            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfully Admitted',
                })
            this.$Progress.finish();
                }
        }).catch(()=>{
            console.log("not Admitted ..there is an error")//want to change in future
        })


    },

        RejectStudent(){


                axios.post("/rejectStudents/"+this.userId).then((res)=>{

                if(res.data=='alreadyRejected'){
                        Swal.fire({
                        icon: 'warning',
                        title: 'Already Rejected',
                        })
                }else{
                this.$Progress.start();
                Fire.$emit('AfterAction');

                    $('#certificatesView').modal('hide')
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Successfully Rejected',
                        })
                    this.$Progress.finish();

                }

                }).catch(()=>{
                    console.log("not Rejected ..there is an error")//want to change in future
                })


            },

   addToWaitingList(){


                axios.post("/addWaiting/"+this.userId).then((res)=>{

                    if(res.data=='alreadyWaited'){
                                            Swal.fire({
                                            icon: 'warning',
                                            title: 'Already Added To Waiting List',
                                            })
                                    }else{
                                            this.$Progress.start();

                                        Fire.$emit('AfterAction');

                                                $('#certificatesView').modal('hide')
                                                Swal.fire({
                                                    position: 'center',
                                                    icon: 'success',
                                                    title: 'Added To Waiting List',
                                                    })
                                                this.$Progress.finish();
                                    }

                }).catch(()=>{
                    console.log("not added to waiting list ..there is an error")//want to change in future
                })


            },






    //get table data function
    loadUsers(){
        axios.get("/TableDataAdmission").then((data)=>(this.users=data.data));
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
