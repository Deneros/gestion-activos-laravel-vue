
<template>

<div>
    <!-- Button  -->
    <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#exampleModal">
        <span class="btn-inner--icon"><i class="ni ni-bullet-list-67"></i></span>
        <span class="btn-inner--text">Crear categoria</span>
        </button>

    <!-- Modal -->
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

</div>
    
</template>

<script>
export default {};
</script>
