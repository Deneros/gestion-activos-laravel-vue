<template>
  <div class="card">
    <div class="card-header border-0">
      <div class="table-responsive">
        <div>
          <table class="table align-items-center" id="inv-table">
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
              <tr v-for="(item, index) in items" :key="index">
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
    </div>
  </div>
</template>

<script>
import datables from "datatables";
export default {
  data() {
    return {
      items: [],
    };
  },
  created() {
    axios.get("/inventariototal/items").then((res) => {
      this.items = res.data;
      this.mytable();
    });
  },
  methods: {
    mytable() {
      $(document).ready(function () {
        $("#inv-table").dataTable({
          language: {
            url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json",
          },
        });
      });
    },
  },
};
</script>