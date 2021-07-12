
<template>
  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-md-12">
        <div class="card">
          <h2 class="text-center mt-2">
            <span class="badge badge-primary"
              >Course Wise Students List - CTS</span
            >
          </h2>
          <div class="card-body table-responsive p-0">
            <div class="ml-4 pl-5 pr-5 pt-2 pb-2 d-flex justify-content-center">
              <button
                @click.prevent="solarTechnicianDiv()"
                type="button"
                class="btn btn-secondary btn-lg mt-3 mb-3 rounded-pill"
              >
                Solar Technician (Electrical)
              </button>
              <button
                @click.prevent="IotDiv()"
                type="button"
                class="btn btn-secondary btn-lg mt-3 mb-3 rounded-pill ml-3"
              >
                IOT Technician (Smart Healthcare)
              </button>

              <button
                @click.prevent="PowerDistributionDiv()"
                type="button"
                class="btn btn-secondary btn-lg mt-3 mb-3 ml-3 rounded-pill"
              >
                Electrician – Power Distribution
              </button>


            </div>

            <div v-if="solarTechnician">
           <Solar-Technician></Solar-Technician>
            </div>

            <div v-if="Iot">
            <Iot-Admitted></Iot-Admitted>
            </div>

            <div v-if="PowerDistribution">
            <Electrician-Power-Distribution></Electrician-Power-Distribution>
            </div>

            <div v-if="DefaultView">
                <div class="card mb-5 mt-5">
                <div class="card-body mb-5 mt-5">
                    <h4 class="text-center mb-5">NSTI Calicut CTS Admission Completed Students List</h4>
                    <p class="card-text text-center">Select Course Name From Above to View The Students List <i class="fas fa-arrow-up fa-fw"></i> </p>
                </div>
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return {
    solarTechnician:false,
    Iot:false,
    PowerDistribution:false,


      DefaultView: true,
    };
  },

  methods: {

        solarTechnicianDiv(){
            this.solarTechnician=true;

            this.Iot=false;
            this.PowerDistribution=false;
            this.DefaultView=false;

        },

        IotDiv(){
        this.Iot=true;

        this.PowerDistribution=false;
        this.solarTechnician=false;
        this.DefaultView=false;

        },

        PowerDistributionDiv(){
        this.PowerDistribution=true;

        this.Iot=false;
        this.solarTechnician=false;
        this.DefaultView=false;
        },

  },

  created() {
    console.log("mounted component");
  },
};
</script>

<style>
</style>
