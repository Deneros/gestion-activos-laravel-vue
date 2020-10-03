<template>
    <div>  
        <!-- Crear un items -->
                <form  @submit.prevent="guardarItem()">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="nombre">Nombre:</label>
                                <input class="form-control" type="text" value="" id="nombre" v-model="item.nombre_item" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="nombre">Serial:</label>
                                <input class="form-control" type="text" value="" id="serial" v-model="item.serial">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="descripcion">Descripción:</label>
                                <textarea class="form-control" id="textAreaDescripcion" rows="3" v-model="item.descripcion"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="ubicacion">Estado:</label>
                                    <select class="form-control form-control" id="estado" v-model="item.estado">
                                        <option>Activo</option>
                                        <option>Mantenimiento</option>
                                        <option>Proceso de baja</option>
                                        <option>En baja</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="ubicacion">Ubicación:</label>
                                <input class="form-control" type="text" value="" id="ubicacion" v-model="item.ubicacion">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="a_cargo">A cargo:</label>
                                <input type="text" list="usuarios" class="form-control form-control" v-model="item.usuarioCargo" />
                                    <datalist id="usuarios" >
                                        <option v-for="(usuario, index) in usuarios" :key="index">{{usuario.nombre}}</option>                      
                                    </datalist>
                                    
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="hidden" list="subcategorias" class="form-control form-control" v-model="item.subcategoria" />    
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-azul">Guardar</button>
                </form>
    </div>

</template>

<script>
import EventBus from "../eventBus";
export default {
    data() {
        return {
            usuarios: [],
            items:[],
            id_subcat:'',
            item:{
                nombre_item:'',
                serial:'',
                descripcion:'',
                estado:'',
                ubicacion:'',
                usuarioCargo:'',
                subcategoria:''
            }
        };
    },
     created() {
        EventBus.$on("idsubcategoria", data => {
            this.item.subcategoria = data.id;   
        });
        axios.get("/usuarios").then(res => {
            this.usuarios = res.data;
        });
    },
    methods: {
        guardarItem(){
            if(
                this.item.nombre_item.trim()==="" ||
                this.item.serial.trim()==="" ||
                this.item.descripcion.trim()==="" ||
                this.item.estado.trim()==="" ||
                this.item.ubicacion.trim()==="" 
            )
            {
                toastr.error('Debe rellenar todos los campos');
            }else{
                const params =  {
                    nombre_item:this.item.nombre_item,
                    serial:this.item.serial,
                    descripcion:this.item.descripcion,
                    estado:this.item.estado,
                    ubicacion:this.item.ubicacion,
                    usuarioCargo:this.item.usuarioCargo,
                    subcategoria:this.item.subcategoria
                };

                this.item.nombre_item=""; 
                this.item.serial=""; 
                this.item.descripcion="";
                this.item.estado=""; 
                this.item.ubicacion=""; 
                this.item.usuarioCargo=""; 

                axios.post("/items", params).then(res => {
                this.items.push(res.data);
            });

             toastr.success('Item Registrado'); 
            }
        }
    }
}
</script>