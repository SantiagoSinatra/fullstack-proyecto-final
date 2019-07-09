@extends('layouts.default')
@section('content')


    <form action="/guardarProducto" method="POST">
        @csrf



        @if(count($errors)>0)

            <ul class="alert alert-danger col-5">
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>

        @endif

        <div class="form-group col-4">
          <label for="name_prod">Nombre del Producto</label>
          <input type="text" class="form-control" name="name_prod" id="name_prod" placeholder="Ingrese un nombre para el producto">
        </div>
        <div class="form-group col-4">
          <label for="price">Precio</label>
          <input type="text" class="form-control" name="price" id="price" placeholder="Ingrese un precio">
        </div>
        <div class="form-group col-4">
            <label for="category_id">Numero de categoria (provisorio)</label>
            <input type="text" class="form-control" name="category_id" id="category_id" placeholder="Ingrese un numero (1-3)">
          </div>
        <div class="form-group col-4">
            <input type="submit" class="btn btn-primary" value="Crear Producto">
        </div>
      </form>

@endsection
