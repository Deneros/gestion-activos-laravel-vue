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

    <br>

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
                                <label class="form-control-label" for="a_cargo">A cargo:</label>
                                <input type="text" list="usuarios" class="form-control form-control-sm"/>
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
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <br>

    <div class="card">
    <div class="card-header border-0">

    <div class="table-responsive">
        <div>
            <table class="table align-items-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">A cargo</th>
                        <th scope="col">Ubicación</th>
                        <th scope="col">Estado</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    </div>
    </div>
    </div>
</template>

<script>
export default {
    
}
</script>