<template>
    <div class="container">
        <h1 class="display-6">Listado de ventas</h1>

        <div class="d-flex flex-row-reverse">
            <button class="btn btn-info me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo</button>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">ID Usuario</th>
                    <th scope="col">Información de envío</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td scope="row">$250.000</td>
                    <td scope="row">13/10/2022</td>
                    <td scope="row">1</td>
                    <td scope="row">Dirección usuario</td>
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
                <h5 class="modal-title" id="exampleModalLabel">Nueva Venta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
        <div class="modal-body">     
            <label class="col-sm-2 col-form-label">Valor</label>
            <input class="form-control" type="text" placeholder="Ingrese el valor de la venta" aria-label="default input">
            <label class="col-sm-2 col-form-label">Fecha</label>
            <input class="form-control" type="date" placeholder="Ingrese la fecha de la venta DD/MM/AAAA" aria-label="default input">
            <label class="col-sm-2 col-form-label">ID Usuario</label>
            <input class="form-control" type="text" placeholder="Ingrese el identificador del usuario" aria-label="default input">
            <label class="col-sm-4 col-form-label">Información de envío</label>
            <input class="form-control" type="text" placeholder="Ingrese la dirección del usuario" aria-label="default input">
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