@extends('layouts.default')
@section('content')
<ul>
    @foreach ($products as $product)
    <li>{{$product->name_prod}}</li>
    <li>{{$product->price}}</li>
    <br>
    @endforeach
</ul>
@endsection
