<template>
    <div class="table-responsive">
        <div>
            <table class="table align-items-center" id="subcategoriastabla">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Id Subcategoria</th>
                        <th scope="col">Nombre Subcategoria</th>
                        <th scope="col">Id Categoria</th>
                        <th>
                            <form action="/admin/items">
                                <input
                                    type="submit"
                                    class="btn btn-primary"
                                    value="Ver Items"
                                />
                            </form>
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in subcategorias" :key="index">
                        <td>{{ item.id_subcategoria }}</td>
                        <td>{{ item.nombre_sub }}</td>
                        <td>{{ item.id_categoria }}</td>
                        <td>
                            <div class="row">
                                <div class="col-sm-3">
                                    <!-- Button agregar items -->
                                    <button
                                        type="button"
                                        class="btn btn-icon btn-primary btn-sm"
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

                                <div class="col-sm-3">
                                    <!-- Button editar subcategoria -->
                                    <button
                                        type="button"
                                        class="btn btn-icon btn-primary btn-sm"
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
                                                            <label
                                                                for="example-text-input"
                                                                class="form-control-label"
                                                                >Id
                                                                Subcategoria:
                                                            </label>
                                                            <input
                                                                class="form-control"
                                                                type="text"
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
                                                            <button
                                                                type="submit"
                                                                class="btn btn-primary"
                                                            >
                                                                Guardar cambios
                                                            </button>
                                                        </form>
                                                    </div>
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
            id_cat: 0,
            subcategorias: [],
            subcategoria: { id_subcategoria: "", nombre_sub: "" }
        };
    },
    created() {
        EventBus.$on("guardarsubcategoria", data => {
            this.id_cat = data.id_categoria;
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
            this.subcategoria.id_subcategoria = item.id_subcategoria;
            this.subcategoria.nombre_sub = item.nombre_sub;
        },
        editarCategoria() {
            axios.put(`/subcategorias/${this.subcategoria.id_subcategoria}`,this.subcategoria.subcategoria.nombre_sub).then(res => {
                console.log(res.data)
            });
        },
        boton(item) {
            EventBus.$emit("idsubcategoria", item);
        }
    }
};
</script>
<style lang="stylus" scoped></style>
