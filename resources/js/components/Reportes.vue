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
              <div class="form-group row">
                  <div class="form-group mb-0">
                    <label class="form-control-label d-block mb-3"
                      >Informe de los items que tienen reincidencia de mantenimiento</label
                    >
                  </div>
                </div>
              <form>
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
                      v-model="A_cargo"
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
     <div class="row" style="display: none"><!-- style="display: none"-->
      <div class="table-responsive">
        <div>
          <table class="table align-items-center" id="my-table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Categoria</th>
                <th scope="col">Subcategoria</th>
                <th scope="col">Nombre Item</th>
                <th scope="col">Serial</th>
                <th scope="col">Descripción</th>
                <th scope="col">Estado</th>
                <th scope="col">Ubicación</th>
                <th scope="col">A cargo</th>
              </tr>
            </thead>
            <tbody class="list">
              <tr v-for="(item, index) in reporte1" :key="index">
                <td>{{ item.nombre_cat }}</td>
                <td>{{ item.nombre_sub }}</td>
                <td>{{ item.nombre_item }}</td>
                <td>{{ item.serial }}</td>
                <td>{{ item.descripcion_item }}</td>
                <td>{{ item.estado }}</td>
                <td>{{ item.ubicacion }}</td>
                <td>{{ item.A_cargo }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="table-responsive">
        <div>
          <table class="table align-items-center" id="my-table2">
            <thead class="thead-light">
              <tr>
                <th scope="col">Nombre Item</th>
                <th scope="col">Serial</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha</th>
                <th scope="col">Descripción</th>
                <th scope="col">Ubicación</th>
                <th scope="col">A cargo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Subcategoria</th>
              </tr>
            </thead>
            <tbody class="list">
              <tr v-for="(item, index) in reporte2" :key="index">
                <td>{{ item.nombre_item }}</td>
                <td>{{ item.serial }}</td>
                <td>{{ item.estado }}</td>
                <td>{{ item.created_at }}</td>
                <td>{{ item.descripcion }}</td>
                <td>{{ item.ubicacion }}</td>
                <td>{{ item.A_cargo }}</td>
                <td>{{ item.nombre_cat }}</td>
                <td>{{ item.nombre_sub }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import EventBus from "../eventBus";
import jsPDF from "jspdf";
import html2canvas from "html2canvas";
import JsPDFAutotable from "jspdf-autotable";
export default {
  data() {
    return {
      reporte1: [],
      reporte2: [],
      usuarios: [],
      items: [],
      A_cargo: "",
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
  mounted() {
    // const plugin = document.createElement("script");
    // plugin.setAttribute(
    //   "src",
    //   "https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"
    // );
    // plugin.async = true;
    // document.head.appendChild(plugin);
  },
  methods: {
    async activosAsignacion() {
      await axios.get("/reporte1").then((res) => {
        this.reporte1 = res.data;
      });

      const doc = new jsPDF();
      // const contentHtml = this.$refs.content.innerHTML;
      // doc.fromHTML(contentHtml, 15, 15, {
      // width: 1000
      // });
      var logo = new Image();
      logo.src = "/assets/img/icons/header.png";
      doc.addImage(logo, "JPEG", 25, 10, 148, 25);
      doc.autoTable({ html: "#my-table", margin: { top: 40 } });
      doc.save("reporte de items sin usuario a cargo.pdf");
    },
    async activoUsuario() {
      if (this.A_cargo.trim() === "") {
        toastr.error("El campo de usuarios no puede estar vacio");
      } else {
        await axios.get(`/reporte2/${this.A_cargo}`).then((res) => {
          this.reporte1 = res.data;
        });
        const doc = new jsPDF();
        var logo = new Image();
        logo.src = "/assets/img/icons/header.png";
        doc.addImage(logo, "JPEG", 25, 10, 148, 25);
        doc.autoTable({ html: "#my-table", margin: { top: 40 } });
        doc.save("reporte de activos asignados a un usuario.pdf");
      }
    },
    async mantenimiento() {
     await axios.get(`/reporte3`).then((res) => {
        console.log(res.data);
        this.reporte2 = res.data;
      });
      const doc = new jsPDF();
      var logo = new Image();
      logo.src = '/assets/img/icons/header.png';
      doc.addImage(logo, 'JPEG', 25, 10,148,25);
      doc.autoTable({ html: '#my-table2', margin:{top:40} })
      doc.save("reporte de activos en reincidencia de mantenimiento.pdf");
    },
  },
};
</script>

