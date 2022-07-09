<template>
    <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">perfil de: nombre del usuario</div>

                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <div class="mb-3">
                                <label class="form-label">Rut:</label>
                                <input type="text" class="form-control" placeholder="xx.xxx.xxx-x" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nombre:</label>
                                <input type="text" class="form-control" placeholder="test" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Apellido Paterno:</label>
                                <input type="text" class="form-control" placeholder="Apellido Ejemplo" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Apellido Materno:</label>
                                <input type="text" class="form-control" placeholder="Apellido Ejemplo" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Fecha de Nacimiento:</label>
                                <input type="text" class="form-control" placeholder="Calendario" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Ciudad:</label>
                                <input type="text" class="form-control" placeholder="Santiago" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Correo Electronico</label>
                                <input type="text" class="form-control" placeholder="test@text.com" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Telefono</label>
                                <input type="text" class="form-control" placeholder="+569 1234 56789" disabled>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Motivo de Consulta</label>
                            <textarea class="form-control" placeholder="Escriba aqui el motivo de consulta" disabled></textarea>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary">editar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</template>