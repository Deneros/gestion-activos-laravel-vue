//Resgistrar usuarios

<template>
  <div>
    <form @submit.prevent="agregar">
      <div class="pl-lg-4">
        <div class="row">
          <div class="form-group col-md-4">
            <label for="tipo_usuario" class="form-control-label"
              >Tipo Usuario</label
            >

            <select
              class="form-control"
              id="tipo_usuario"
              v-model="usuario.tipo_usuario"
              name="tipo_usuario"
            >
              <option value="" selected disabled hidden>
                Escoja una opcion
              </option>
              <option>Admin</option>
              <option>Usuario</option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="Tipo_Identificacion" class="form-control-label"
              >Tipo Identificacion</label
            >

            <div class="">
              <select
                class="form-control"
                id="tipo_identificacion"
                v-model="usuario.tipo_identificacion"
                name="tipo_identificacion"
              >
                <option value="" selected disabled hidden>
                  Escoja una opcion
                </option>
                <option>Cedula de Ciudadania</option>
                <option>Cedula de Extranjeria</option>
                <option>Pasaporte</option>
              </select>
            </div>
          </div>

          <div class="form-group col-md-4">
            <label for="No_Identificacion" class="form-control-label"
              >Numero identificacion</label
            >

            <div class="">
              <input
                id="no_identificacion"
                type="number"
                name="no_identificacion"
                v-model="usuario.no_identificacion"
                class="form-control"
              />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-6">
            <label for="nombre" class="form-control-label"
              >Nombre completo</label
            >

            <div class="">
              <input
                id="nombre"
                type="text"
                name="nombre"
                class="form-control"
                v-model="usuario.nombre"
              />
            </div>
          </div>

          <div class="form-group col-md-4">
            <label for="cargo" class="form-control-label">Cargo</label>

            <div class="">
              <input
                id="cargo"
                type="text"
                name="cargo"
                v-model="usuario.cargo"
                class="form-control"
              />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-6">
            <label for="Telefono" class="form-control-label">Telefono</label>

            <div class="">
              <input
                id="telefono"
                type="number"
                name="telefono"
                v-model="usuario.telefono"
                class="form-control"
              />
            </div>
          </div>

          <div class="form-group col-md-6">
            <label for="email" class="form-control-label">E-Mail</label>

            <div class="">
              <input
                id="email"
                type="email"
                name="email"
                v-model="usuario.email"
                class="form-control"
              />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-6">
            <label for="password" class="form-control-label">Contraseña</label>

            <div class="">
              <input
                id="password"
                type="password"
                name="password"
                v-model="usuario.password"
                class="form-control"
              />
            </div>
          </div>

          <div class="form-group col-md-6">
            <label for="Confirmar_Contrasena" class="form-control-label"
              >Confirmar Contraseña</label
            >

            <div class="">
              <input
                id="Confirmar_Contrasena"
                type="password"
                name="Confirmar_Contrasena"
                v-model="usuario.Confirmar_Contrasena"
                class="form-control"
              />
            </div>
          </div>
        </div>

        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-5">
            <button type="submit" class="btn btn-azul">Registrar</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import EventBus from "../eventBus";
export default {
  data() {
    return {
      modal: false,
      usuarios: [],
      usuario: {
        tipo_usuario: "",
        tipo_identificacion: "",
        no_identificacion: "",
        nombre: "",
        cargo: "",
        telefono: "",
        email: "",
        password: "",
        Confirmar_Contrasena: "",
      },
    };
  },
  created(){
    axios.get("/usuarios").then((res) => {
      this.usuarios = res.data;
    });
  },
  methods: {
    agregar() {
      let texto = new RegExp("^[ñA-Za-z _]*[ñA-Za-z][ñA-Za-z _]*$", "i");
      //Validaciones
      if (
        this.usuario.tipo_usuario.trim() !== "" ||
        this.usuario.tipo_identificacion.trim() !== "" ||
        this.usuario.no_identificacion.trim() !== "" ||
        this.usuario.nombre.trim() !== "" ||
        this.usuario.cargo.trim() !== "" ||
        this.usuario.telefono.trim() !== "" ||
        this.usuario.email.trim() !== "" ||
        this.usuario.password.trim() !== "" ||
        this.usuario.Confirmar_Contrasena.trim() !== ""
      ) {
        if (texto.test(this.usuario.nombre)) {
          if (texto.test(this.usuario.cargo)) {
            if (
              this.usuario.password.trim() ===
              this.usuario.Confirmar_Contrasena.trim()
            ) {
              // Guardar datos de los campos
              const params = {
                tipo_usuario: this.usuario.tipo_usuario,
                tipo_identificacion: this.usuario.tipo_identificacion,
                no_identificacion: this.usuario.no_identificacion,
                nombre: this.usuario.nombre,
                cargo: this.usuario.cargo,
                telefono: this.usuario.telefono,
                email: this.usuario.email,
                password: this.usuario.password,
              };
              //Limpiar los campos
              this.usuario.tipo_usuario = "";
              this.usuario.tipo_identificacion = "";
              this.usuario.no_identificacion = "";
              this.usuario.nombre = "";
              this.usuario.cargo = "";
              this.usuario.telefono = "";
              this.usuario.email = "";
              this.usuario.password = "";
              this.usuario.Confirmar_Contrasena = "";

              //Envio de los datos a traves de Axios
              axios.post("/usuarios", params).then((res) => {
                this.usuarios.push(res.data);
              });
              toastr.success("Usuario Registrado");

              EventBus.$emit("usuario", this.usuarios);
            } else {
              toastr.error("Las contraseñas no coinciden");
            }
          } else {
            toastr.error("El campo de Cargo no debe tener numeros");
          }
        } else {
          toastr.error("El campo de Nombre completo no debe tener numeros");
        }
      } else {
        toastr.error("Debe rellenar todos los campos");
      }
    },
  },
};
</script>
