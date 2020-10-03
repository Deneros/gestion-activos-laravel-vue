<template>
    
    <div class="card">
        <div class="card-header border-0">
            <!-- <div class="input-daterange datepicker row align-items-center">

                    <div class="form-group col-md-2">
                        <label class="form-control-label d-block mb-3">Escoge el rango de fechas</label> 
                    </div>

                    <div class="form-group col-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                            </div>
                                <input class="form-control form-control-sm" placeholder="Start date" type="text" value="06/18/2020">
                        </div>
                    </div>

        <div class="form-group col-md-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"
                ><i class="ni ni-calendar-grid-58"></i
              ></span>
            </div>
            <input
              class="form-control form-control-sm"
              placeholder="End date"
              type="text"
              value="06/22/2020"
            />
          </div>
        </div>

        <div class="form-group col-md-3">
          <button
            class="btn btn-icon btn-azul btn-sm"
            type="button"
            title="Buscar"
          >
            Buscar
            <span class="btn-inner--icon"><i class="fas fa-search"></i></span>
          </button>
        </div>
        
      </div> -->
      <!-- <div class="row align-items-center">
                <div class="form-group col-md-3">
                    <label for="example-date-input" class="form-control-label">Fecha inicio</label>
                    <input class="form-control form-control-sm" type="date" value="2018-11-23" id="example-date-input">
                </div>
                <div class="form-group col-md-3">
                    <label for="example-date-input" class="form-control-label">Fecha final</label>
                    <input class="form-control form-control-sm" type="date" value="2018-11-23" id="example-date-input">
                </div>
                <div class="form-group col-md-3">
                    <button class="btn btn-icon btn-primary btn-sm" type="button" title="Buscar">Buscar
                        <span class="btn-inner--icon"><i class="fas fa-search"></i></span>
                    </button>
                </div>
            </div> -->
      <div class="table-responsive">
        <div>
          <table class="table align-items-center" id="historial">
            <thead class="thead-light">
              <tr>
                <th scope="col">Items</th>
                <th scope="col">Fecha asignacion</th>
                <th scope="col">Fecha traslado</th>
                <th scope="col">Usuario</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(item, index) in historial" :key="index">
                <td>{{ item.nombre_item }}</td>
                <td>{{ item.fecha_inscripcion }}</td>
                <td>{{ item.fecha_traspaso }}</td>
                <td>{{ item.nombre }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import datables from "datatables";
export default {
  data() {
    return {
      historial: [],
    };
  },
  created() {
    axios.get("/historiales").then((res) => {
      this.historial = res.data;
      this.mytable()
    });
  },
  methods: {
    mytable() {
      $(document).ready(function () {
        $("#historial").dataTable({
          language: {
            url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json",
          },
        });
      });
    }
  },
};
</script>
