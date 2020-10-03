<template>


<div class="row">

<div class="col-sm-6">
<div class="card">
<div class="card-header border-0">

<div class="container">
    <form @submit.prevent="editarFormulario()">
        <h1 class="heading-md text-center mb-2">Informacion de Usuario</h1>
        <hr class="my-4 bg-azul">
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
                            >Nombre Completo</label
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
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-control-label" for="password"
                            >Contraseña</label
                        >
                        <input
                            id="password"
                            class="form-control"
                            placeholder="Contraseña"
                            v-model="usuario.password"
                            type="password"
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-control-label" for="cpassword"
                            >Confirmar contraseña</label
                        >
                        <input
                            id="cpassword"
                            class="form-control"
                            placeholder="Confirmar contraseña"
                            v-model="usuario.cpassword"
                            type="password"
                        />
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-azul">
                Guardar cambios
            </button>
        </div>
    </form>
</div>

</div>
</div>

</div>

    <div class="col-sm-6">
        <div class="card">
            <div class="card-header border-0">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlFile1" class="form-control-label d-block mb-3">Seleccione una imagen para el perfil</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</template>

<script>
export default {
    data() {
        return {
            usuario: {
                id: "",
                tipo_usuario: "",
                tipo_identificacion: "",
                no_identificacion: "",
                nombre: "",
                apellido: "",
                cargo: "",
                telefono: "",
                email: "",
                password:"",
                cpassword:""
            }
        };
    },
    created() {
        axios.get("/usuario/usuario").then(res => {
            this.usuario = res.data[0];
        });
    },
    methods: {
        editarFormulario() {
            if(this.usuario.password === this.usuario.cpassword){
                axios.put(`/usuarios/${this.usuario.id}`, this.usuario).then(res=>{
                toastr.success("Información actualizada");
                this.usuario.password="";
                this.usuario.cpassword="";
            });
            }else{
                toastr.error("Los campos de contraseña no coinciden");
            }
        }
    }
};
</script>
