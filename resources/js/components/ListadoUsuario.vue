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
                        <div class="col">
                            <h3 class="mb-0"></h3>
                        </div>
                        <!-- <div class="col text-right">
            <a href="" class="btn btn-sm btn-primary">Nuevo usuario</a>
          </div> -->
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table
                        class="table align-items-center table-flush"
                        id="user-table"
                        
                    >
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
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item, index) in usuarios" :key="index">
                                <td>{{ item.tipo_usuario }}</td>
                                <td>{{ item.tipo_identificacion }}</td>
                                <td>{{ item.no_identificacion }}</td>
                                <td>{{ item.nombre }}</td>
                                <td>{{ item.apellido }}</td>
                                <td>{{ item.cargo }}</td>
                                <td>{{ item.telefono }}</td>
                                <td>{{ item.email }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <button
                                                class="btn btn-icon btn-primary"
                                                type="button"
                                                data-toggle="modal"
                                                data-target="#modal-default"
                                                @click="boton(item)"
                                            >
                                                <span class="btn-inner--icon"
                                                    ><i class="ni ni-atom"></i
                                                ></span>
                                            </button>
                                            <div
                                                class="modal fade"
                                                id="modal-default"
                                                tabindex="-1"
                                                role="dialog"
                                                aria-labelledby="modal-default"
                                                aria-hidden="true"
                                            >
                                                <div
                                                    class="modal-dialog modal- modal-dialog-centered modal-"
                                                    role="document"
                                                >
                                                    <div class="modal-content">
                                                        <div
                                                            class="modal-header"
                                                        >
                                                            <h6
                                                                class="modal-title"
                                                                id="modal-title-default"
                                                            >
                                                                Editar usuario
                                                            </h6>
                                                            <button
                                                                type="button"
                                                                class="close"
                                                                data-dismiss="modal"
                                                                aria-label="Close"
                                                            >
                                                                <span
                                                                    aria-hidden="true"
                                                                    >×</span
                                                                >
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <editarDatos></editarDatos>
                                                        </div>

                                                        <div
                                                            class="modal-footer"
                                                        >
                                                            <button
                                                                type="button"
                                                                class="btn btn-link  ml-auto"
                                                                data-dismiss="modal"
                                                            >
                                                                Cerrar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
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
import datables from "datatables";
export default {
    data() {
        return {
            usuarios: []
        };
    },
    created() {
        axios.get("/usuarios").then(res => {
            this.usuarios = res.data;
            this.mytable()
        });
        
    },
    methods: {
        boton(item) {
            EventBus.$emit("modificarUsuario", item);
        },

        mytable() {
            $(document).ready(function() {
                $("#user-table").DataTable();
            });
        }
    }
};
</script>
