<template>
    
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header border-0">
                    <h2 class="heading-md text-center mb-2">Personalización del logo</h2>
                        <div class="pl-lg-4">
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1" class="form-control-label d-block mb-3">Seleccione una imagen para el logo</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <button class="btn btn-icon btn-azul btn-sm" type="button" title="Guardar">Guardar cambios
                                            <!-- <span class="btn-inner--icon"><i class="fas fa-search"></i></span> -->
                                </button>
                            </form>
                        </div>            
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-header border-0">
                    <h2 class="heading-md text-center mb-2">Personalización del color</h2>
                        <div class="pl-lg-4">
                            <div class="form-group mb-0">
                                <label class="form-control-label d-block mb-3">Escoge el color</label>
                                    <div class="btn-group btn-group-toggle btn-group-colors event-tag" data-taggle="buttons">
                                        <label class="btn bg-info">
                                            <input type="checkbox" name="event-tag" value="bg-info" autocomplete="off" checked>
                                        </label>
                                        <label class="btn bg-warning">
                                            <input type="radio" name="event-tag" value="bg-warning" autocomplete="off" checked>
                                        </label>
                                        <label class="btn bg-danger">
                                            <input type="radio" name="event-tag" value="bg-danger" autocomplete="off" checked>
                                        </label>
                                        <label class="btn bg-success">
                                            <input type="radio" name="event-tag" value="bg-success" autocomplete="off" checked>
                                        </label>
                                        <label class="btn bg-default">
                                            <input type="radio" name="event-tag" value="bg-default" autocomplete="off" checked>
                                        </label>
                                        <label class="btn bg-primary">
                                            <input type="radio" name="event-tag" value="bg-primary" autocomplete="off" checked>
                                        </label>
                                    </div>
                            </div>

                                    <br>
                                    <div class="form-group row">
                                        <button class="btn btn-icon btn-azul btn-sm" type="button" title="Guardar">Guardar cambios
                                            <!-- <span class="btn-inner--icon"><i class="fas fa-search"></i></span> -->
                                        </button>
                                    </div>
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