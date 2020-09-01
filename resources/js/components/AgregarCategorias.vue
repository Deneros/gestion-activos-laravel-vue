
<template>

<div>
    <!-- Button crear categoria -->
    <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#exampleModal">
        <span class="btn-inner--icon"><i class="ni ni-bullet-list-67"></i></span>
        <span class="btn-inner--text">Crear categoria</span>
    </button>

    <br>

    <!-- Modal boton crear categoria-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <form @submit.prevent="guardarCategoria()">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nombre: </label>
                            <input class="form-control" type="text" value="Nombre Categoria" v-model="categoria.nombre_cat">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>

    <!-- Categoria -->
    <div style="width: 18rem;">
    <div class="card card-stats">
    <!-- Card body -->
        <div class="card-body">
        
            <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Categoria</h5>
                        <span class="h2 font-weight-bold mb-0">Nombre</span>
                </div>
            </div>
                <p class="mt-3 mb-0 text-sm">
                    <button class="btn btn-icon btn-primary btn-sm rounded-circle" type="button" data-toggle="modal" data-target="#modal-editar" data-placement="bottom" title="Editar">
	                    <span class="btn-inner--icon"><i class="ni ni-settings"></i></span>
                    </button>
                    <button class="btn btn-icon btn-primary btn-sm rounded-circle" type="button" data-toggle="modal" data-target="#modal-agregar-subcategoria" data-placement="bottom" title="Agregar subcategoria">
	                    <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                    </button>
                    <button class="btn btn-icon btn-primary btn-sm rounded-circle" type="button" data-toggle="modal" data-target="#" data-placement="bottom" title="Listar">
	                    <span class="btn-inner--icon"><i class="ni ni-single-copy-04"></i></span>
                    </button>
                </p>
        </div>
    </div>
    </div>

    <!-- Modal boton editar categoria-->
    <div class="modal fade" id="modal-editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nombre: </label>
                            <input class="form-control" type="text" value="" id="example-text-input">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal boton agregar subcategoria-->
    <div class="modal fade" id="modal-agregar-subcategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar subcategoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nombre de la subcategoria: </label>
                            <input class="form-control" type="text" value="" id="example-text-input">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>

</div>
    
</template>

<script>
export default {
    data() {
        return{
            categorias:[],
            categoria:{nombre_cat:''}
        }
    },
    methods:{
        guardarCategoria(){
            console.log(this.categoria.nombre_cat)
        }

    }
};
</script>