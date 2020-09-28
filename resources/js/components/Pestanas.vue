
// Pestañas de la seccion de usuarios

<template>
<div>

<div class="nav-wrapper">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-bullet-list-67 mr-2"></i>Listado</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 " id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-circle-08 mr-2"></i>Registrar</a>
        </li>
        
    </ul>
</div>

<div class="card shadow">
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                <listadoUsuario></listadoUsuario>
            </div>
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                <h1 class="heading-md text-center mb-2">Registrar usuario</h1>
                <hr class="my-4 bg-azul">
                <registrarUsuario></registrarUsuario>
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