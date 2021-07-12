
<template>

<div class="container-fluid ">

<div class="row mt-3">

          <div class="col-md-12">

            <div class="card">
<h2 class="text-center mt-2">Fee Verification</h2>
              <div class="card-header">
                <h2 class="card-title"><strong><em>Candidates Details For Verification</em></strong></h2>

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

                    <th>Certificate <br>Verification Status</th>
                    <th>Fee <br>Verification Status</th>
                      <th>Fee Verify Actions</th>

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
                        <td v-if="(user.certificateVerificationStatus==1)"><span class="badge badge-success">Verified <i class="far fa-check-circle fa-fw"></i></span>

                        </td>
                    <td v-if="(user.certificateVerificationStatus==2)"><span class="badge badge-danger">Rejected <i class="far fa-times-circle fa-fw"></i></span>

                        </td>
                <td v-if="(user.certificateVerificationStatus==null)"><span class="badge badge-warning">Verification Pending <i class="fas fa-hourglass-half fa-fw"></i></span>

                        </td>
                       <!-- <td>

                           {{ user.feeVerificationStatus }}
                        </td>-->
                        <td v-if="(user.feeVerificationStatus==1)"><span class="badge badge-success">Paid <i class="far fa-check-circle fa-fw"></i></span>
                        </td>
                        <td v-if="(user.feeVerificationStatus==2)"><span class="badge badge-danger">Not Paid <i class="far fa-times-circle fa-fw"></i></span>
                        </td>
                        <td v-if="(user.feeVerificationStatus==null)"><span class="badge badge-warning">Verification Pending <i class="fas fa-hourglass-half fa-fw"></i></span>
                        </td>


                        <td>

                    <!-- <button type="button" @click="verifyCert(user)" class="btn btn-outline-success btn-sm ml-3" data-toggle="modal" data-target="#certificatesView" >
                    <i class="fa fa-check" title="View Certificates"></i></button>

                    <button type="button" @click="verifyCert(user)" class="btn btn-outline-danger btn-sm ml-3" data-toggle="modal" data-target="#certificatesView" >
                    <i class="fa fa-times" title="View Certificates"></i></button> -->
        <button @click="verifyFee(user)" class="btn btn-outline-success btn-sm ml-3" ><i class="fa fa-check fa-fw"></i></button>

        <button @click="rejectFee(user)" class="btn btn-outline-danger btn-sm ml-3" ><i class="fa fa-times fa-fw"></i></button>

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


</div>


</template>


<script>

export default {

 data() {
    return {
     users:{},


     user_id:'',
     user_name:'',


    }
 },

  methods:{

    verifyFee(user){

        this.user_name=user.name;
        this.user_id=user.id;
        this.$Progress.start();

        axios.post("/feeVerify/"+this.user_id).then(()=>{
            Fire.$emit('AfterAction');
            Toast.fire({
            icon: 'success',
            title: 'Fee Verified Successfully',
            timer:1000,

        })
            this.$Progress.finish();
        }).catch(()=>{
            console.log("not verified ..there is an error")//want to change in future
        })


    },
    //reject certificate function
    rejectFee(user){

        this.user_name=user.name;
        this.user_id=user.id;
        this.$Progress.start();

        axios.post("/feeReject/"+this.user_id).then(()=>{
            Fire.$emit('AfterAction');
             Toast.fire({
                 icon: 'error',
                 title: 'Fee Verification Rejected',
                 timer:1000,
              })

             this.$Progress.finish();
        }).catch(()=>{
            console.log("not rejected ..there is an error")//want to change in future
        })

    },

    //get table data function
    loadUsers(){
        axios.get("/TableData").then((data)=>(this.users=data.data));
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

