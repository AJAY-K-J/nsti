
<template>
  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-md-12">
        <div class="card">
          <h2 class="text-center mt-2">
            <span class="badge badge-primary"
              >Course Wise Students List - CITS</span
            >
          </h2>
          <div class="card-body table-responsive p-0">
            <div class="ml-4 pl-5 pr-5 pt-2 pb-2">
              <button
                @click.prevent="RandAcDiv()"
                type="button"
                class="btn btn-secondary btn-lg mt-3 mb-3 rounded-pill"
              >
                Mechanic Refrigeration & AC
              </button>
              <button
                @click.prevent="ReadingOfDrawingDiv()"
                type="button"
                class="btn btn-secondary btn-lg mt-3 mb-3 rounded-pill"
              >
                Reading Of Drawing & Arithmetic
              </button>

              <button
                @click.prevent="ElectricianWiremanDiv()"
                type="button"
                class="btn btn-secondary btn-lg mt-3 mb-3 rounded-pill"
              >
                Eletrician And Wireman
              </button>

              <button
                @click.prevent="ElectronicMechanicDiv()"
                type="button"
                class="btn btn-secondary btn-lg mt-3 mb-3 rounded-pill"
              >
                Electronic Mechanic
              </button>

              <button
                @click.prevent="WelderDiv()"
                type="button"
                class="btn btn-secondary btn-lg mt-3 mb-3 rounded-pill"
              >
                Welder
              </button>
            </div>

            <div v-if="RandAc">
              <Admitted-Mech-RandAc></Admitted-Mech-RandAc>
            </div>

            <div v-if="ReadingOfDrawing">
              <Reading-OfDrawing-Admitted></Reading-OfDrawing-Admitted>
            </div>

            <div v-if="ElectricianAndWireman">
              <Electrician-Wireman-Admitted></Electrician-Wireman-Admitted>
            </div>

            <div v-if="ElectronicMechanic">
              <Electronic-Mechanic></Electronic-Mechanic>
            </div>

            <div v-if="Welder">
              <Welder-Component></Welder-Component>
            </div>

            <div v-if="DefaultView">
                <div class="card mb-5 mt-5">
                <div class="card-body mb-5 mt-5">
                    <h4 class="text-center mb-5">NSTI Calicut CITS Admission Completed Students List</h4>
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
      RandAc: false,
      ReadingOfDrawing: false,
      ElectricianAndWireman: false,
      ElectronicMechanic: false,
      Welder: false,

      DefaultView: true,
    };
  },

  methods: {
    RandAcDiv() {
      this.RandAc = true;

      this.ReadingOfDrawing = false;
      this.ElectricianAndWireman = false;
      this.ElectronicMechanic = false;
      this.Welder = false;
      this.DefaultView = false;
    },

    ReadingOfDrawingDiv() {
      this.ReadingOfDrawing = true;

      this.RandAc = false;
      this.ElectricianAndWireman = false;
      this.ElectronicMechanic = false;
      this.Welder = false;
      this.DefaultView = false;
    },

    ElectricianWiremanDiv() {
      this.ElectricianAndWireman = true;

      this.ReadingOfDrawing = false;
      this.RandAc = false;
      this.ElectronicMechanic = false;
      this.Welder = false;
      this.DefaultView = false;
    },

    ElectronicMechanicDiv() {
      this.ElectronicMechanic = true;

      this.ElectricianAndWireman = false;
      this.ReadingOfDrawing = false;
      this.RandAc = false;
      this.Welder = false;
      this.DefaultView = false;
    },

    WelderDiv() {
      this.Welder = true;

      this.ElectronicMechanic = false;
      this.ElectricianAndWireman = false;
      this.ReadingOfDrawing = false;
      this.RandAc = false;
      this.DefaultView = false;
    },
  },

  created() {
    console.log("mounted component");
  },
};
</script>

<style>
</style>
