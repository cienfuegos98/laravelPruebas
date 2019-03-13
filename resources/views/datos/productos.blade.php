@extends("layout.plantilla")

@section("productos")

<h2>LISTA DE PRODUCTOS</h2>

@isset ($producto_comprado)
comprado : {{$producto_comprado}}
@endisset

@foreach($productos as $producto)
<form action="productos" method="post">
    @csrf
    <input type="submit" value="COMPRAR">
    <input type="hidden" name="producto_comprado"value="{{$producto->cod}}">
    <h4>{{$producto->nombre_corto}}-{{$producto->PVP}}</h4>
</form>
@endforeach

@stop