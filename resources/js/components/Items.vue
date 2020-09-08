<template>
    <div>  
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
                                        <option v-for="(usuario, index) in usuarios" :key="index">{{usuario.nombre}} {{usuario.apellido}}</option>                      
                                    </datalist>
                                    
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="a_cargo">Subcategoria:</label>
                                <input type="text" list="subcategorias" class="form-control form-control" v-model="item.subcategoria" />    
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
    </div>

</template>

<script>
export default {
    data() {
        return {
            usuarios: [],
            subcategorias:[],
            item:{
                nombre_item:'',
                serial:'',
                descripcion:'',
                estado:'',
                ubicacion:'',
                usuarioCargo:'',
                usuarioCargo:'',
                subcategoria:''
                }
        };
    },
     created() {
        axios.get("/usuarios").then(res => {
            this.usuarios = res.data;
        });
    },
    methods: {
        guardarItem(){

        }
    }
}
</script>