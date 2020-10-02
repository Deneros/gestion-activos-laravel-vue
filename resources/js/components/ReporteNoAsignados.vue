<template>
    
<div class="card">
    <div class="card-header border-0">
      <div class="table-responsive">
        <div>
          <table class="table align-items-center">
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
              <tr v-for="(item, index) in reporte" :key="index">
                <td>{{item.nombre_cat}}</td>
                <td>{{item.nombre_sub}}</td>
                <td>{{ item.nombre_item }}</td>
                <td>{{ item.serial }}</td>
                <td>{{ item.descripcion_item }}</td>
                <td>{{ item.estado }}</td>
                <td>{{ item.ubicacion }}</td>
                <td>{{item.A_cargo }}</td> 
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
export default {
  data() {
    return {
      reporte:[]
      
    };
  },
  mounted() {
    EventBus.$on("reporte1", data => {
            this.reporte = data;
            console.log(data);
        });
  },
  methods: {
    
  },
};
</script>