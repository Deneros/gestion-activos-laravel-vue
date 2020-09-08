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
                                <input type="submit" class="btn btn-primary" value="Ver Items" />
                            </form>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in subcategorias" :key="index">
                        <td>{{ item.id_subcategoria }}</td>
                        <td>{{ item.nombre_sub }}</td>
                        <td>{{ item.id_categoria }}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-5">
                                    <!-- Button crear categoria -->
                                    <button
                                        type="button"
                                        class="btn btn-icon btn-primary btn-sm"
                                        data-toggle="modal"
                                        data-target="#modalAgregarItem"
                                        @click="boton(item)"
                                        >
                                        
                                        <span class="btn-inner--text">Agregar item</span>
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
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Agregar item</h5>
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
                                                <items></items>
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
            subcategorias: []
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
        boton(item) {
            EventBus.$emit("idsubcategoria", item);
        }
    }
};
</script>
<style lang="stylus" scoped></style>
