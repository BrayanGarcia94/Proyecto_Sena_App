@extends('layouts.app')

@section('content')
    <div class="container">
    <h1 class="display-6">Inventario de productos</h1>

    <div class="d-flex flex-row-reverse">
        <button class="btn btn-info me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo</button>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Imagen</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <th scope="row"><img src="/img/logo3.png" alt="" width="70" height="45" class="d-inline-block align-text-top"></th>
                <td scope="row">Cuadro 0.5 * 0.5</td>
                <td scope="row">Cuadro de medidas 0.5 * 0.5 con contenido modificable</td>
                <td scope="row">45000</td>
                <td scope="row">15</td>
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
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
    <div class="modal-body">
        <label for="formFile" class="form-label">Imagen</label>
        <input class="form-control" type="file" id="formFile">       
        <label class="col-sm-2 col-form-label">Nombre</label>
        <input class="form-control" type="text" placeholder="Ingrese el nombre del producto" aria-label="default input">
        <label class="col-sm-2 col-form-label">Descripción</label>
        <input class="form-control" type="text" placeholder="Ingrese breve descripción del producto" aria-label="default input">
        <label class="col-sm-2 col-form-label">Precio</label>
        <input class="form-control" type="text" placeholder="Ingrese el precio del producto" aria-label="default input">
        <label class="col-sm-2 col-form-label">Cantidad</label>
        <input class="form-control" type="text" placeholder="Ingrese la cantidad en stock del producto" aria-label="default input">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
    </div>
  </div>
</div>
</div>

</div>

<style>
    th{
        vertical-align: middle;
    }
    td{
        vertical-align: middle;
    }
    h1{
        color: black;
        font-weight: bold;
    }
    th{
        color:black;
    }
    td{
        color: black;
    }
    body{
        background-image: url(img/fondo.jpeg);
    }
  </style>
@endsection