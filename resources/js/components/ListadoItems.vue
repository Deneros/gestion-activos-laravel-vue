<template>
    <div class="card">
        <div class="card-header border-0">
            <div class="table-responsive">
                <div>
                    <table class="table align-items-center">
                        <thead class="thead-light">
                            <tr >
                                <th scope="col">Nombre</th>
                                <th scope="col">Serial</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Ubicación</th>
                                <th scope="col">A Cargo</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item, index) in items" :key="index">
                                <td>{{ item.nombre_item }}</td>
                                <td>{{ item.serial }}</td>
                                <td>{{ item.descripcion_item }}</td>
                                <td>{{ item.estado }}</td>
                                <td>{{ item.ubicacion }}</td>
                                <td>{{ item.A_cargo }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// import EventBus from "../eventBus";
import datables from "datatables";
export default {
    data() {
        return {
            items: []
        };
    },
    created() {
        axios.get("/items").then(res => {
            this.items = res.data;
            // this.mytable()
        });
        
    },
    methods: {
        // mytable() {
        //     $(document).ready(function() {
        //         $("#user-table").DataTable();
        //     });
        // }
    }
};
</script>
