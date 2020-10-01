<template>
  <div>
    <div class="row">
      <!-- Generar reporte de Reincidencia en mantenimiento -->
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header border-0">
            <h2 class="heading-md text-center mb-2">
              Reincidencia en mantenimiento
            </h2>
            <div class="pl-lg-4">
              <form>
                <div class="form-group">
                  <div class="form-group">
                    <div class="form-group">
                      <label class="form-control-label" for="item"
                        >Items:</label
                      >
                      <input
                        type="text"
                        list="item"
                        class="form-control form-control"
                        v-model="activo"
                      />
                      <datalist id="item">
                        <option v-for="(item, index) in items" :key="index">
                          {{ item.nombre_item }}
                        </option>
                      </datalist>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <button
                    class="btn btn-icon btn-azul btn-sm"
                    type="button"
                    title="Generar reporte"
                    @click="mantenimiento()"
                  >
                    Descargar PDF
                    <!-- <span class="btn-inner--icon"><i class="fas fa-search"></i></span> -->
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Generar reporte de items no asignados -->
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header border-0">
            <h2 class="heading-md text-center mb-2">
              Activos que no estan asignados
            </h2>
            <div class="pl-lg-4">
              <div class="form-group mb-0">
                <label class="form-control-label d-block mb-3"
                  >Informe de los items (Activos) que no estan asignados a
                  ningun usuario</label
                >
              </div>

              <div class="form-group row">
                <button
                  class="btn btn-icon btn-azul btn-sm"
                  type="button"
                  title="Generar reporte"
                  @click="activosAsignacion()"
                >
                  Descargar PDF
                  <!-- <span class="btn-inner--icon"><i class="fas fa-search"></i></span> -->
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Generar reporte de Reincidencia en mantenimiento -->
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header border-0">
            <h2 class="heading-md text-center mb-2">
              Activo a cargo de un usuario
            </h2>
            <div class="pl-lg-4">
              <form>
                <div class="form-group">
                  <div class="form-group">
                    <label class="form-control-label" for="a_cargo"
                      >Usuario:</label
                    >
                    <input
                      type="text"
                      list="usuarios"
                      class="form-control form-control"
                      v-model="usuarioCargo"
                    />
                    <datalist id="usuarios">
                      <option v-for="(usuario, index) in usuarios" :key="index">
                        {{ usuario.nombre }}
                      </option>
                    </datalist>
                  </div>
                </div>
                <div class="form-group row">
                  <button
                    class="btn btn-icon btn-azul btn-sm"
                    type="button"
                    title="Generar reporte"
                    @click="activoUsuario()"
                  >
                    Descargar PDF
                    <!-- <span class="btn-inner--icon"><i class="fas fa-search"></i></span> -->
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <reportenoasignado/>
    </div>
  </div>
</template>

<script>
import EventBus from "../eventBus";
export default {
  data() {
    return {
      reporte1: [],
      reporte2: [],
      usuarios: [],
      items: [],
      usuarioCargo: "",
      activo: "",
    };
  },
  created() {
    axios.get("/usuarios").then((res) => {
      this.usuarios = res.data;
    });
    axios.get("/items").then((res) => {
      this.items = res.data;
    });
    
  },
  methods: {
    async activosAsignacion() {
    await axios.get("/reporte1").then((res) => {
        this.reporte1 =  res.data;
    });
      EventBus.$emit("reporte1", this.reporte1);
    },
    activoUsuario() {
      axios.get("/reporte2").then((res) => {
        this.reporte2 = res.data;
      });
    },
    mantenimiento() {},
  },
};
</script>

