<template>
<div>
    <div>
        <form @submit.prevent="guardarSubcategoria()">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nombre: </label>
                <input class="form-control" type="text" value="Nombre Subcategoria" id="nombre_sub" name="nombre_sub" v-model="subcategoria.nombre_sub">
                <input class="form-control" type="hidden" value="Nombre Subcategoria"  id="id_categoria" name="id_categoria" v-model="subcategoria.id" >
            </div>
        <button type="submit" class="btn btn-azul">Guardar</button>
        </form>
    </div>             
</div>   
</template>

<script>
import EventBus from "../eventBus";
export default {
    data() {
        return{   
            subcategorias:[],
            subcategoria:{nombre_sub:'',id:''}
            
        };

    },
    // props:['id-cat'],
    created(){
        //Trae los datos de categoria para el Id_categoria
         EventBus.$on("guardarsubcategoria", data => {
            this.subcategoria = data;
        });
       
    },
    methods:{
        guardarSubcategoria(){
            //Validar 
            if(this.subcategoria.nombre_sub.trim()==="")
            {
                toastr.error('Debe rellenar todos los campos');
            }else {
            //Guardar datos de los campos
            const params = {
                nombre_sub: this.subcategoria.nombre_sub,
                id_categoria: this.subcategoria.id
            }
            //Limpiar campos
            this.subcategoria.nombre_sub="";
            //Envio de los datos a traves de Axios
            axios.post("/subcategorias", params).then(res => {
                this.subcategorias.push(res.data);
            });

             toastr.success('Subcategoria Registrada');

            }
            
        },
        actualizarCategoria(){
        },
    }
};
</script>