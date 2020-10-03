<template>
    <div>
        <div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-auto">
                        <!-- Button crear categoria -->
                        <button
                            type="button"
                            class="btn btn-icon btn-azul"
                            data-toggle="modal"
                            data-target="#exampleModal"
                        >
                            <span class="btn-inner--icon"
                                ><i class="ni ni-fat-add"></i
                            ></span>
                            <span class="btn-inner--text">Crear categoria</span>
                        </button>
                    </div>
                    <div class="col">
                        <!-- Buscador de categoria -->
                        <form
                            class="navbar-search navbar-search-light form-inline mr-sm-3"
                            id="navbar-search-main"
                        >
                            <div class="form-group mb-0">
                                <div
                                    class="input-group input-group-alternative input-group-merge"
                                >
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"
                                            ><i class="fas fa-search"></i
                                        ></span>
                                    </div>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Buscar categoria"
                                        v-model="nombre_categoria"
                                    />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <br />

            <!-- Modal boton crear categoria-->
            <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                Crear categoria
                            </h5>
                            <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close"
                            >
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form @submit.prevent="guardarCategoria()">
                                <div class="form-group">
                                    <label
                                        for="example-text-input"
                                        class="form-control-label"
                                        >Nombre:
                                    </label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        value="Nombre Categoria"
                                        id="nombre_cat"
                                        name="nombre_cat"
                                        v-model="categoria.nombre_cat"
                                    />
                                </div>
                                <button type="submit" class="btn btn-azul">
                                    Guardar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br />
        <!-- Categoria -->
        <div class="row justify-content-around">
            <div
                class="col-3"
                v-for="(item, index) in buscarCategorias"
                :key="index"
            >
                <div style="width: 18rem;">
                    <div class="card card-stats">
                        <div class="card-body">
                            <h5
                                class="card-title text-uppercase text-muted mb-0"
                            >
                                Categoria
                            </h5>
                            <span class="h2 font-weight-bold mb-0">{{
                                item.nombre_cat
                            }}</span>
                            <p class="mt-3 mb-0 text-sm">
                                <button
                                    class="btn btn-icon btn-azul btn-sm rounded-circle"
                                    type="button"
                                    data-toggle="modal"
                                    data-target="#modal-editar"
                                    data-placement="bottom"
                                    title="Editar"
                                    @click="editarCat(item)"
                                >
                                    <span class="btn-inner--icon"
                                        ><i class="ni ni-settings"></i
                                    ></span>
                                </button>
                                <button
                                    class="btn btn-icon btn-azul btn-sm rounded-circle"
                                    type="button"
                                    data-toggle="modal"
                                    data-target="#modal-agregar-subcategoria"
                                    data-placement="bottom"
                                    title="Agregar subcategoria"
                                   
                                    @click="boton(item)"
                                >
                                    <span class="btn-inner--icon"
                                        ><i class="ni ni-fat-add"></i
                                    ></span>
                                </button>
                                <button
                                    class="btn btn-icon btn-azul btn-sm rounded-circle"
                                    type="button"
                                    data-toggle="modal"
                                    data-target="#modal-listar-subcategoria"
                                    data-placement="bottom"
                                    title="Listar"
                                    @click="boton(item)"
                                >
                                    <span class="btn-inner--icon"
                                        ><i class="ni ni-single-copy-04"></i
                                    ></span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal boton editar categoria-->
        <div
            class="modal fade"
            id="modal-editar"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Editar categoria
                        </h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <form @submit.prevent="editarCategoria()">
                                <div class="form-group">
                              
                                <input
                                    class="form-control"
                                    type="hidden"
                                    value=""
                                    id="id_categoria"
                                    v-model="editarcat.Editarid_categoria"
                                />
                                <label
                                    for="example-text-input"
                                    class="form-control-label"
                                    >Nombre:
                                </label>
                                <input
                                    class="form-control"
                                    type="text"
                                    value=""
                                    id="nombre_cat"
                                     v-model="editarcat.Editarnombre_categoria"
                                />
                                </div>
                                <button type="submit" class="btn btn-azul">
                                    Guardar cambios
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal boton agregar subcategoria-->
        <div
            class="modal fade"
            id="modal-agregar-subcategoria"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Agregar subcategoria
                        </h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <subcategoria />
                            <!-- :id_cat="id_cat" envio de una propiedad -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Listar subcategoria -->
        <div
            class="modal fade"
            id="modal-listar-subcategoria"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Listar subcategoria
                        </h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <listarsubcategorias />
                    </div>
                    
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
            categorias: [],
            categoria: { nombre_cat: "" },
            editarcat: { Editarid_categoria: "", Editarnombre_categoria: "" },
            nombre_categoria: "",
            // id_cat:""
        };
    },
    created() {
        axios.get("/categorias").then(res => {
            this.categorias = res.data;
        });
    },
    methods: {
        guardarCategoria() {
            //Validar
            if (this.categoria.nombre_cat.trim() === "") {
                toastr.error("Debe rellenar todos los campos");
            } else {
                //Guardar datos de los campos
                const params = {
                    nombre_cat: this.categoria.nombre_cat
                };
                //Limpiar campos
                this.categoria.nombre_cat = "";
                //Envio de los datos a traves de Axios
                axios.post("/categorias", params).then(res => {
                    this.categorias.push(res.data);
                });

                toastr.success("Categoria Registrada");
            }
        },
        //Llenar formulario de editar categoria
        editarCat(item) {
            this.editarcat.Editarid_categoria=item.id;
            this.editarcat.Editarnombre_categoria=item.nombre_cat;
        },
        //Actualizar la categoria
        editarCategoria(){
             axios.put(`/categorias/${this.editarcat.Editarid_categoria}`, this.editarcat)
                .then(res=>{
                    toastr.success("Categoria Actualizada");
                    axios.get("/categorias").then(res => {
                    this.categorias = res.data;
                });
            })

        },
        //Enviar los datos a otro componente
        boton(item) {
            this.id_cat=item.id;
            EventBus.$emit("guardarsubcategoria", item);
        },

    },
    computed: {
        buscarCategorias: function() {
            return this.categorias.filter(item =>
                item.nombre_cat.toLowerCase().includes(this.nombre_categoria.toLowerCase())
            );
        }
    }
};
</script>
