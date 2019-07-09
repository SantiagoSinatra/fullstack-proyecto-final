@extends('layouts.default')
@section('content')
<ul>
    @foreach ($products as $product)

    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$product->name_prod}}</h5>
          <p class="card-text">${{$product->price}}</p>
          <a href="#" class="btn btn-primary">Comprar</a>
          <a href="#" class="btn btn-primary">Editar</a>
          <a href="#" class="btn btn-primary">Eliminar</a>
        </div>
      </div>
    <br>
    @endforeach
</ul>
@endsection
