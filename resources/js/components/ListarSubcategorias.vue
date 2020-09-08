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
                            <form action="/items">
                                <input type="submit" value="Ver Items" />
                            </form>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in subcategorias" :key="index">
                        <td>{{ item.id_subcategoria }}</td>
                        <td>{{ item.nombre_sub }}</td>
                        <td>{{ item.id_categoria }}</td>
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
            console.log(this.id_cat);
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
    methods: {}
};
</script>
<style lang="stylus" scoped></style>
