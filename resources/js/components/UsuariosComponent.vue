<template>
    <div class="container">
        <h1 class="display-6">Usuarios registrados</h1>

        <div class="d-flex flex-row-reverse">
            <button class="btn btn-info me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo</button>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Información de pago</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td scope="row">Brayan Esteban</td>
                    <td scope="row">García Garzón</td>
                    <td scope="row">pass1234</td>
                    <td scope="row">123456789</td>
                    <td scope="row">correo@electrónico.com</td>
                    <td scope="row">Dirección 12 # 34</td>
                    <td scope="row">Visa 124797616713</td>
                    <td scope="row">
                        <button type="button" class="btn btn-success">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>  
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
        <div class="modal-body">     
            <label class="col-sm-2 col-form-label">Nombres</label>
            <input class="form-control" type="text" placeholder="Ingrese los nombres del usuario" aria-label="default input">
            <label class="col-sm-2 col-form-label">Apellidos</label>
            <input class="form-control" type="text" placeholder="Ingrese los apellidos del usuario" aria-label="default input">
            <label class="col-sm-2 col-form-label">Contraseña</label>
            <input class="form-control" type="text" placeholder="Ingrese la contraseña del usuario" aria-label="default input">
            <label class="col-sm-2 col-form-label">Teléfono</label>
            <input class="form-control" type="text" placeholder="Ingrese el teléfono del usuario" aria-label="default input">
            <label class="col-sm-2 col-form-label">Dirección</label>
            <input class="form-control" type="text" placeholder="Ingrese la dirección del usuario" aria-label="default input">
            <label class="col-sm-4 col-form-label">Información de pago</label>
            <input class="form-control" type="text" placeholder="Ingrese el número de tarjeta del usuario" aria-label="default input">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</div>

</template>

<script>

</script>