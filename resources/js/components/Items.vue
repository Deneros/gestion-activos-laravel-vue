<template>
    <div>
    <!-- Button crear categoria -->
    <button
        type="button"
        class="btn btn-icon btn-primary"
        data-toggle="modal"
        data-target="#modalAgregarItem"
        >
            <span class="btn-inner--icon"><i class="ni ni-bullet-list-67"></i></span>
            <span class="btn-inner--text">Agregar item</span>
        </button>

    <!-- Modal boton agregar item-->
    <div
        class="modal fade"
        id="modalAgregarItem"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar item</h5>
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
                <!-- Agregar un items  -->
                <form>
                    <h6 class="heading-small text-muted mb-4">Agregar un items</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="nombre">Nombre:</label>
                                <input class="form-control" type="text" value="" id="nombre">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="nombre">Serial:</label>
                                <input class="form-control" type="text" value="" id="serial">
                            </div>
                        </div>
                    </div>
                    <div calss="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="descripcion">Descripción:</label>
                                <textarea class="form-control" id="textAreaDescripcion" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div calss="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" list="usuarios" />
                                    <datalist id="usuarios">
                                        <option>1</option>
                                        <option>2</option>
                                    </datalist>
                            </div>
                        </div>
                    </div>
                    <div calss="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="ubicacion">Ubicación:</label>
                                <input class="form-control" type="text" value="" id="ubicacion">
                            </div>
                        </div>
                    </div>
                    <div calss="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="ubicacion">Estado:</label>
                                    <select class="form-control form-control-sm" id="estado">
                                        <option>Activo</option>
                                        <option>Mantenimiento</option>
                                        <option>Proceso de baja</option>
                                        <option>En baja</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div>
</template>

<script>
export default {
    
}
</script>