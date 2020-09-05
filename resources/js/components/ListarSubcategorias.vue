<template>
    <div class="table-responsive">
        <div>
            <table class="table align-items-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Id Subcategoria</th>
                        <th scope="col">Nombre Subcategoria</th>
                        <th scope="col">Id Categoria</th>
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
            subcategorias: [],
            id_categoria:""
        };
    },
    created() {
        //Trae los datos de categoria para el Id_categoria
        const params = {
            id_categoria:item.id_categoria
        }
        console.log(params);
        axios.get("/subcategorias", params).then(res => {
            this.subcategorias = res.data;
            
        });
    },
    methods:{
        

    }
};
</script>
