<template>
    <div class="card">
        <div class="card-header border-0">
            <div class="table-responsive">
                <div>
                    <table class="table align-items-center">
                        <thead class="thead-light">
                            <tr>
                                <div class="input-group input-group-sm mb-3">
                                    <input class="form-control right" type="text" placeholder="Buscar Items" v-model="busq_items">
                                </div>
                            </tr>
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
                            <tr v-for="(item, index) in buscarItems" :key="index">
                                <td>{{ item.nombre_item }}</td>
                                <td>{{ item.serial }}</td>
                                <td>{{ item.descripcion_item }}</td>
                                <td>{{ item.estado }}</td>
                                <td>{{ item.ubicacion }}</td>
                                <td>{{ item.A_cargo }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <!-- Button editar items -->
                                            <button
                                                type="button"
                                                class="btn btn-icon btn-azul btn-sm"
                                                data-toggle="modal"
                                                data-target="#modalEditarrItem"
                                                data-placement="bottom"
                                                title="Agregar item"
                                                @click="formInfo(item)"
                                            >
                                                <span class="btn-inner--icon"><i class="ni ni-settings"></i></span>
                                                <!-- <span class="btn-inner--text"></span> -->
                                            </button>
                                            <!-- Modal boton editar item-->
                                            <div
                                                class="modal fade"
                                                id="modalEditarrItem"
                                                tabindex="-1"
                                                role="dialog"
                                                aria-labelledby="exampleModalLabel"
                                                aria-hidden="true"
                                            >
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Editar item</h5>
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
                                                            <form @submit.prevent="editarItem(item)">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label class="form-control-label" for="nombre">Nombre:</label>
                                                                            <input class="form-control" type="text" value="" id="nombre" placeholder="Nombre" v-model="activo.nombre_item" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label class="form-control-label" for="nombre">Serial:</label>
                                                                            <input class="form-control" type="text" value="" id="serial" placeholder="Serial" v-model="activo.serial">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-control-label" for="descripcion">Descripción:</label>
                                                                            <textarea class="form-control" id="textAreaDescripcion" rows="3" placeholder="Descripcion" v-model="activo.descripcion"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-control-label" for="ubicacion">Estado:</label>
                                                                                <select class="form-control form-control" id="estado" v-model="activo.estado">
                                                                                    <option>Activo</option>
                                                                                    <option>Mantenimiento</option>
                                                                                    <option>Proceso de baja</option>
                                                                                    <option>En baja</option>
                                                                                </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row" v-if="activo.estado === 'Mantenimiento'" >
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-control-label" for="descriMante">Descripcion de Mantenimiento:</label>
                                                                                <textarea class="form-control" id="descriMante" rows="3" v-model="activo.mantenimiento" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-control-label" for="ubicacion">Ubicación:</label>
                                                                            <input class="form-control" type="text" value="" id="ubicacion" placeholder="Ubicacion" v-model="activo.ubicacion">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-control-label" for="a_cargo">A cargo:</label>
                                                                            <input type="text" list="usuarios" class="form-control form-control" v-model="activo.usuarioCargo" />
                                                                                <datalist id="usuarios" >
                                                                                    <option placeholder="A cargo" v-for="(usuario, index) in usuarios" :key="index">{{usuario.nombre}}</option>                      
                                                                                </datalist>
                                                                        </div>
                                                                            
                                                                    </div>
                                                                </div>
                                                                    <button type="submit" class="btn btn-azul">Guardar</button>
                                                            </form>
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
        </div>
    </div>
</template>

<script>
import EventBus from "../eventBus";
import datables from "datatables";
export default {
    data() {
        return {
            busq_items:"",
            iditem:0,
            idsub:0,
            items:[],
            usuarios: [],
             activo:{
                nombre_item:'',
                serial:'',
                descripcion:'',
                estado:'',
                mantenimiento:'',
                ubicacion:'',
                usuarioCargo:'',
                subcategoria:''
            }
        };
    },
    created() {      
        axios.get("/items").then(res => {
            this.items = res.data;
        }); 
        EventBus.$on("idsubcategoria", data => {
            this.idsub = data.id;
        });
        axios.get("/usuarios").then(res => {
            this.usuarios = res.data;
        });
    
        
    },
    mounted() {
        
    },
    updated() {
        axios.get(`/Admin/listitems/${this.idsub}`).then(res => {
            this.items = res.data;
        });
    },
    methods: {
        // mytable() {
        //     $(document).ready(function() {
        //         $("#user-table").DataTable();
        //     });
        // },
        formInfo(item){
            // this.activo=item.data
            this.activo.nombre_item = item.nombre_item;
            this.activo.serial = item.serial;
            this.activo.descripcion = item.descripcion_item;
            this.activo.estado = item.estado;
            this.activo.ubicacion =  item.ubicacion;
            this.activo.usuarioCargo = item.A_cargo;
            this.iditem = item.id
        },
        editarItem(item){
            axios.put(`/items/${this.iditem}`, this.activo)
                .then(res=>{
                    this.activo.mantenimiento = "";    
                    toastr.success("Item Actualizado");
                    console.log(res.data)
                    axios.get("/items").then(res => {
                        this.items = res.data;
                    })
                })
        },
    },
    computed: {
        buscarItems: function() {
            return this.items.filter((item) =>{
                return item.nombre_item.toLowerCase().includes(this.busq_items.toLowerCase()) ||
                item.serial.toLowerCase().includes(this.busq_items.toLowerCase()) ||
                item.descripcion_item.toLowerCase().includes(this.busq_items.toLowerCase()) ||
                item.estado.toLowerCase().includes(this.busq_items.toLowerCase()) ||
                item.ubicacion.toLowerCase().includes(this.busq_items.toLowerCase()) ||
                item.A_cargo.toLowerCase().includes(this.busq_items.toLowerCase()) 
            });
        }
    }
};
</script>
