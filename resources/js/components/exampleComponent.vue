<template>
    <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro de pacientes</div>

                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <div class="mb-3">
                                <label class="form-label">Rut:</label>
                                <input type="text" class="form-control" placeholder="xx.xxx.xxx-x">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nombre:</label>
                                <input type="text" class="form-control" placeholder="Nombre Ejemplo">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Apellido Paterno:</label>
                                <input type="text" class="form-control" placeholder="Apellido Ejemplo">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Apellido Materno:</label>
                                <input type="text" class="form-control" placeholder="Apellido Ejemplo">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Fecha de Nacimiento:</label>
                                <input type="text" class="form-control" placeholder="Calendario">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Ciudad:</label>
                                <input type="text" class="form-control" placeholder="Santiago">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Correo Electronico</label>
                                <input type="text" class="form-control" placeholder="Ejemplo@text.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Telefono</label>
                                <input type="text" class="form-control" placeholder="+569 1234 56789">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Motivo de Consulta</label>
                            <textarea class="form-control" placeholder="Escriba aqui el motivo de consulta"></textarea>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary">aceptar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
