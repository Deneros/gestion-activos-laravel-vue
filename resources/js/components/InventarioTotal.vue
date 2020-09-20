<template>

    <div class="card">
    <div class="card-header border-0">

    <div class="table-responsive">
        <div>
            <table class="table align-items-center">
                <thead class="thead-light">
                    
                    <tr>
                        <th scope="col">Categoria</th>
                        <th scope="col">Subcategoria</th>                        
                        <th scope="col">Nombre Item</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Ubicación</th>
                        <th scope="col">A cargo</th>
                        <th scope="col">Estado</th>
                        <th scope="col">
                            <button @click="intentar()">Intentar</button>
                        </th>
                    </tr>
                </thead>
                <tbody class="list">
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    </div>
    </div>

</template>

<script>
export default {
    data (){
        return{

        }
    },
    created(){
       
    },
    methods:{
        intentar(){
            axios.get('/items').then(res => {
            console.log(res.data);
            });
        }

    },
}
</script>