<template>
    
<div class="row">

    <!-- Generar reporte de Reincidencia en mantenimiento -->
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header border-0">
                <h2 class="heading-md text-center mb-2">Reincidencia en mantenimiento</h2>
                    <div class="pl-lg-4">
                        <form>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-control-label" for="a_cargo">Item:</label>
                                    <input type="text" list="usuarios" class="form-control form-control" />
                                        <datalist id="item" >
                                            <option>A</option>  
                                            <option>B</option>                    
                                        </datalist>
                                </div>
                            </div>
                            <div class="form-group row">
                                <button class="btn btn-icon btn-azul btn-sm" type="button" title="Generar reporte">Descargar PDF
                                    <!-- <span class="btn-inner--icon"><i class="fas fa-search"></i></span> -->
                                </button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>

    <!-- Generar reporte de items no asignados -->
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header border-0">
                <h2 class="heading-md text-center mb-2">Activos que no estan asignados</h2>
                    <div class="pl-lg-4">
                        <div class="form-group mb-0">
                            <label class="form-control-label d-block mb-3">Informe de los items (Activos) que no estan asignados a ningun usuario</label>
                        </div>

                        <div class="form-group row">
                            <button class="btn btn-icon btn-azul btn-sm" type="button" title="Generar reporte">Descargar PDF
                                <!-- <span class="btn-inner--icon"><i class="fas fa-search"></i></span> -->
                            </button>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- Generar reporte de Reincidencia en mantenimiento -->
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header border-0">
                <h2 class="heading-md text-center mb-2">Activo a cargo de un usuario</h2>
                    <div class="pl-lg-4">
                        <form>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-control-label" for="a_cargo">Usuario:</label>
                                    <input type="text" list="usuarios" class="form-control form-control" />
                                        <datalist id="usuarios" >
                                            <option>A</option>  
                                            <option>B</option>                    
                                        </datalist>
                                </div>
                            </div>
                            <div class="form-group row">
                                <button class="btn btn-icon btn-azul btn-sm" type="button" title="Generar reporte">Descargar PDF
                                    <!-- <span class="btn-inner--icon"><i class="fas fa-search"></i></span> -->
                                </button>
                            </div>
                        </form>
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