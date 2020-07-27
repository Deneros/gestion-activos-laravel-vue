
//Listado de todos los usuarios registrados 

<template>
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Usuarios</h3>
          </div>
          <!-- <div class="col text-right">
            <a href="" class="btn btn-sm btn-primary">Nuevo usuario</a>
          </div> -->
        </div>
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush" id="user-table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Tipo Usuario</th>
              <th scope="col">Tipo Identificacion</th>
              <th scope="col">Numero Identificacion</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Cargo</th>
              <th scope="col">Telefono</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>
              <tr v-for="(item, index) in usuarios" :key="index">
                <td>{{item.tipo_usuario}}</td>
                <td>{{item.tipo_identificacion}}</td>
                <td>{{item.no_identificacion}}</td>
                <td>{{item.nombre}}</td>
                <td>{{item.apellido}}</td>
                <td>{{item.cargo}}</td>
                <td>{{item.telefono}}</td>   
                <td>{{item.email}}</td>             
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>  
</template>

<script>
export default {
  data(){
        return{
            usuarios:[],
        }
    },
  created(){
        axios.get('/usuarios')
            .then(res => {
                this.usuarios = res.data;
            })
    }
    
}
</script>