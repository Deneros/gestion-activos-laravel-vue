<template>
    <form @submit.prevent="editarFormulario()">
        <h6 class="heading-small text-muted mb-4">Informacion de Usuario</h6>
        <div class="pl-lg-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-control-label" for="tipo_usuario"
                            >Tipo Usuario</label
                        >
                        <select
                            class="form-control"
                            id="tipo_usuario"
                            name="tipo_usuario"
                            v-model="usuario.tipo_usuario"
                        >
                            <option value="" selected disabled hidden
                                >Escoja una opcion</option
                            >
                            <option>Admin</option>
                            <option>Usuario</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label
                            class="form-control-label"
                            for="tipo_identificacion"
                            >Tipo Identificacion</label
                        >
                        <select
                            class="form-control"
                            id="tipo_identificacion"
                            name="tipo_identificacion"
                            v-model="usuario.tipo_identificacion"
                        >
                            <option value="" selected disabled hidden
                                >Escoja una opcion</option
                            >
                            <option>Cedula de Ciudadania</option>
                            <option>Cedula de Extranjeria</option>
                            <option>Pasaporte</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label
                            class="form-control-label"
                            for="no_identificacion"
                            >Numero Identificacion</label
                        >
                        <input
                            id="no_identificacion"
                            class="form-control"
                            placeholder="no_identificacion"
                            v-model="usuario.no_identificacion"
                            type="text"
                        />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="nombre"
                            >Nombre</label
                        >
                        <input
                            type="text"
                            id="nombre"
                            name="nombre"
                            v-model="usuario.nombre"
                            class="form-control"
                            placeholder="nombre"
                        />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="cargo"
                            >Cargo</label
                        >
                        <input
                            type="text"
                            id="cargo"
                            v-model="usuario.cargo"
                            class="form-control"
                            placeholder="cargo"
                        />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="telefono"
                            >Telefono</label
                        >
                        <input
                            type="text"
                            id="telefono"
                            class="form-control"
                            v-model="usuario.telefono"
                            placeholder="telefono"
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-control-label" for="email"
                            >Correo</label
                        >
                        <input
                            id="email"
                            class="form-control"
                            placeholder="Correo"
                            v-model="usuario.email"
                            type="email"
                        />
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-azul">
                Guardar cambios
            </button>
        </div>
    </form>
</template>

<script>
import EventBus from "../eventBus";
export default {
    data() {
        return {
            usuario: {
                id: "",
                tipo_usuario: "",
                tipo_identificacion: "",
                no_identificacion: 0,
                nombre: "",
                cargo: "",
                telefono: 0,
                email: ""
            }
        };
    },
    created() {
        EventBus.$on("modificarUsuario", data => {
            this.usuario = data;
            console.log(this.usuario);
        });
    },
    methods: {
        editarFormulario() {
            axios.put(`/usuarios/${this.usuario.id}`, this.usuario);
            
        }
    }
};
</script>
