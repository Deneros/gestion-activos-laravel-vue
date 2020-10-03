<template>
    <div class="table-responsive">
        <div>
            <table class="table align-items-center" id="subcategoriastabla">
                <thead class="thead-light">
                    <tr>
                        <div class="input-group input-group-sm mb-3">
                            <input class="form-control right" type="text" placeholder="Buscar subcategoria" v-model="nombre_subcat">
                        </div>
                    </tr>
                    <tr>
                        <th scope="col">Nombre Subcategoria</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in buscarSubcategorias" :key="index">
                        <td>{{ item.nombre_sub }}</td>
                        <td>
                            <div class="row">

                                <div class="col-sm-2">
                                    <!-- Button agregar items -->
                                    <button
                                        type="button"
                                        class="btn btn-icon btn-azul btn-sm"
                                        data-toggle="modal"
                                        data-target="#modalAgregarItem"
                                        data-placement="bottom"
                                        title="Agregar item"
                                        @click="boton(item)"
                                    >
                                        <span class="btn-inner--icon"
                                            ><i class="ni ni-fat-add"></i
                                        ></span>
                                        <!-- <span class="btn-inner--text"></span> -->
                                    </button>
                                    <!-- Modal boton agregar item-->
                                    <div
                                        class="modal fade"
                                        id="modalAgregarItem"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="exampleModalLabel"
                                        aria-hidden="true"
                                    >
                                        <div
                                            class="modal-dialog modal-dialog-centered"
                                            role="document"
                                        >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5
                                                        class="modal-title"
                                                        id="exampleModalLabel"
                                                    >
                                                        Agregar item
                                                    </h5>
                                                    <button
                                                        type="button"
                                                        class="close"
                                                        data-dismiss="modal"
                                                        aria-label="Close"
                                                    >
                                                        <span aria-hidden="true"
                                                            >&times;</span
                                                        >
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <items></items>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <!-- Button editar subcategoria -->
                                    <button
                                        type="button"
                                        class="btn btn-icon btn-azul btn-sm"
                                        data-toggle="modal"
                                        data-target="#modalEditarSubcategoria"
                                        data-placement="bottom"
                                        title="Editar subcategoria"
                                        @click="enviarInfoform(item)"
                                    >
                                        <span class="btn-inner--icon"
                                            ><i class="ni ni-settings"></i
                                        ></span>
                                        <!-- <span class="btn-inner--text"></span> -->
                                    </button>
                                    <!-- Modal boton editar subcategoria-->
                                    <div
                                        class="modal fade"
                                        id="modalEditarSubcategoria"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="exampleModalLabel"
                                        aria-hidden="true"
                                    >
                                        <div
                                            class="modal-dialog modal-dialog-centered"
                                            role="document"
                                        >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5
                                                        class="modal-title"
                                                        id="exampleModalLabel"
                                                    >
                                                        Editar subcategoria
                                                    </h5>
                                                    <button
                                                        type="button"
                                                        class="close"
                                                        data-dismiss="modal"
                                                        aria-label="Close"
                                                    >
                                                        <span aria-hidden="true"
                                                            >&times;</span
                                                        >
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <form
                                                            @submit.prevent="
                                                                editarCategoria()
                                                            "
                                                        >
                                                            
                                                            <input
                                                                class="form-control"
                                                                type="hidden"
                                                                value=""
                                                                id="id_subcategoria"
                                                                v-model="
                                                                    subcategoria.id_subcategoria
                                                                "
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
                                                                id="nombre_sub"
                                                                v-model="
                                                                    subcategoria.nombre_sub
                                                                "
                                                            />
                                                            <br>
                                                            <button
                                                                type="submit"
                                                                class="btn btn-azul"
                                                            >
                                                                Guardar cambios
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button type="submit" @click="envId(item)" class="btn btn-icon btn-azul btn-sm">Probando</button> -->
                                </div>

                                <div class="col-sm-2">
                                    <!-- Button listar items -->
                                    <button
                                        type="button"
                                        class="btn btn-icon btn-azul btn-sm"
                                        data-toggle="modal"
                                        data-target="#modalListarItems"
                                        data-placement="bottom"
                                        title="Listar items"
                                        @click="boton(item)"
                                    >
                                        <span class="btn-inner--icon"
                                            ><i class="ni ni-single-copy-04"></i
                                        ></span>
                                        <!-- <span class="btn-inner--text"></span> -->
                                    </button>
                                    <!-- Modal boton listar items-->
                                    <div
                                        class="modal fade"
                                        id="modalListarItems"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="exampleModalLabel"
                                        aria-hidden="true"
                                    >
                                        <div
                                            class="modal-dialog modal-xl"
                                            role="document"
                                        >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5
                                                        class="modal-title"
                                                        id="exampleModalLabel"
                                                    >
                                                        Listado de items
                                                    </h5>
                                                    <button
                                                        type="button"
                                                        class="close"
                                                        data-dismiss="modal"
                                                        aria-label="Close"
                                                    >
                                                        <span aria-hidden="true"
                                                            >&times;</span
                                                        >
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <listadoitems/>     
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
</template>

<script>
import EventBus from "../eventBus";
export default {
    data() {
        return {
            nombre_subcat:"",
            id_cat: 0,
            subcategorias: [],
            subcategoria: { id_subcategoria: "", nombre_sub: "" }
        };
    },
    created() {
        EventBus.$on("guardarsubcategoria", data => {
            this.id_cat = data.id;
        });
    },
    mounted() {
        axios.get(`/subcategorias`).then(res => {
            this.subcategorias = res.data;
        });
    },
    updated() {
        axios.get(`/subcategorias/${this.id_cat}`).then(res => {
            this.subcategorias = res.data;
        });
    },
    methods: {
        //Envia la informacion del formulario
        enviarInfoform(item) {
            this.subcategoria.id_subcategoria = item.id;
            this.subcategoria.nombre_sub = item.nombre_sub;
        },
        editarCategoria() {
            axios.put(`/subcategorias/${this.subcategoria.id_subcategoria}`,this.subcategoria).then(res => {
                axios.get(`/subcategorias`).then(res => {
                    toastr.success("Subcategoria Registrada");
                    this.subcategorias = res.data;
                });
            });
        },
        boton(item) {
            EventBus.$emit("idsubcategoria", item);
        },
    },
    computed: {
        buscarSubcategorias: function() {
            return this.subcategorias.filter(item =>
                item.nombre_sub.toLowerCase().includes(this.nombre_subcat.toLowerCase())
            );
        }
    }
};
</script>
<style lang="stylus" scoped></style>
