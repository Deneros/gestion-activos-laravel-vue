//Resgistrar usuarios

<template>
    <div>
        <form @submit.prevent="agregar">
            <div class="form-group row">
                <label
                    for="Tipo_Usuario"
                    class="col-md-4 col-form-label text-md-right"
                    >Tipo Usuario</label
                >

                <div class="col-md-6">
                    <select
                        class="form-control"
                        id="tipo_usuario"
                        v-model="usuario.tipo_usuario"
                        name="tipo_usuario"
                    >
                        <option value="" selected disabled hidden
                            >Escoja una opcion</option
                        >
                        <option>Admin</option>
                        <option>Usuario</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label
                    for="Tipo_Identificacion"
                    class="col-md-4 col-form-label text-md-right"
                    >Tipo Identificacion</label
                >

                <div class="col-md-6">
                    <select
                        class="form-control"
                        id="tipo_identificacion"
                        v-model="usuario.tipo_identificacion"
                        name="tipo_identificacion"
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

            <div class="form-group row">
                <label
                    for="No_Identificacion"
                    class="col-md-4 col-form-label text-md-right"
                    >Numero identificacion</label
                >

                <div class="col-md-6">
                    <input
                        id="no_identificacion"
                        type="text"
                        name="no_identificacion"
                        v-model="usuario.no_identificacion"
                        class="form-control"
                        required
                    />
                </div>
            </div>

            <div class="form-group row">
                <label
                    for="nombre"
                    class="col-md-4 col-form-label text-md-right"
                    >Nombres</label
                >

                <div class="col-md-6">
                    <input
                        id="nombre"
                        type="text"
                        name="nombre"
                        class="form-control"
                        v-model="usuario.nombre"
                        required
                    />
                </div>
            </div>

            <div class="form-group row">
                <label
                    for="apellido"
                    class="col-md-4 col-form-label text-md-right"
                    >Apellidos</label
                >

                <div class="col-md-6">
                    <input
                        id="apellido"
                        type="text"
                        name="apellido"
                        v-model="usuario.apellido"
                        class="form-control"
                        required
                    />
                </div>
            </div>

            <div class="form-group row">
                <label for="cargo" class="col-md-4 col-form-label text-md-right"
                    >Cargo</label
                >

                <div class="col-md-6">
                    <input
                        id="cargo"
                        type="text"
                        name="cargo"
                        v-model="usuario.cargo"
                        class="form-control"
                        required
                    />
                </div>
            </div>

            <div class="form-group row">
                <label
                    for="Telefono"
                    class="col-md-4 col-form-label text-md-right"
                    >Telefono</label
                >

                <div class="col-md-6">
                    <input
                        id="telefono"
                        type="text"
                        name="telefono"
                        v-model="usuario.telefono"
                        class="form-control"
                        required
                    />
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right"
                    >E-Mail</label
                >

                <div class="col-md-6">
                    <input
                        id="email"
                        type="email"
                        name="email"
                        v-model="usuario.email"
                        class="form-control"
                        required
                    />
                </div>
            </div>

            <div class="form-group row">
                <label
                    for="password"
                    class="col-md-4 col-form-label text-md-right"
                    >Contraseña</label
                >

                <div class="col-md-6">
                    <input
                        id="password"
                        type="password"
                        name="password"
                        v-model="usuario.password"
                        class="form-control"
                        required
                    />
                </div>
            </div>

            <div class="form-group row">
                <label
                    for="Confirmar_Contrasena"
                    class="col-md-4 col-form-label text-md-right"
                    >Confirmar Contraseña</label
                >

                <div class="col-md-6">
                    <input
                        id="Confirmar_Contrasena"
                        type="password"
                        name="Confirmar_Contrasena"
                        v-model="usuario.Confirmar_Contrasena"
                        class="form-control"
                        required
                    />
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Registrar
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            usuarios: [],
            usuario: {
                tipo_usuario: "",
                tipo_identificacion: "",
                no_identificacion: 0,
                nombre: "",
                apellido: "",
                cargo: "",
                telefono: 0,
                email: "",
                password: "",
                Confirmar_Contrasena: ""
            }
        };
    },

    // created(){
    //     axios.get('/usuarios')
    //         .then(res => {
    //             this.usuarios = res.data;
    //         })
    // },
    methods: {
        agregar() {
            //Validaciones
            if (
                this.usuario.tipo_usuario.trim() === "" &&
                this.usuario.tipo_identificacion.trim() === "" &&
                this.usuario.no_identificacion.trim() === "" &&
                this.usuario.nombre.trim() === "" &&
                this.usuario.apellido.trim() === "" &&
                this.usuario.cargo.trim() === "" &&
                this.usuario.telefono.trim() === "" &&
                this.usuario.email.trim() === "" &&
                this.usuario.password.trim() === "" &&
                this.usuario.Confirmar_Contrasena.trim() === "" 
            ) {
                alert("Debes completar todos los campos antes de guardar");
            }
            // Registro del Sistema
            const params = {
                tipo_usuario: this.usuario.tipo_usuario,
                tipo_identificacion: this.usuario.tipo_identificacion,
                no_identificacion: this.usuario.no_identificacion,
                nombre: this.usuario.nombre,
                apellido: this.usuario.apellido,
                cargo: this.usuario.cargo,
                telefono: this.usuario.telefono,
                email: this.usuario.email,
                password: this.usuario.password
            };
            //Limpiar los campos
            this.usuario.tipo_usuario = "";
            this.usuario.tipo_identificacion = "";
            this.usuario.no_identificacion = "";
            this.usuario.nombre = "";
            this.usuario.apellido = "";
            this.usuario.cargo = "";
            this.usuario.telefono = "";
            this.usuario.email = "";
            this.usuario.password = "";
            this.usuario.Confirmar_Contrasena = "";

            //Envio de los datos a traves de Axios
            axios.post("/usuarios", params).then(res => {
                this.usuarios.push(res.data);
            });

             alert("Usuario registrado con exito");
        }
    }
};
</script>
