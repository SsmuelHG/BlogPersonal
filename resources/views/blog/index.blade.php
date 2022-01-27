@extends('blog.template.layout');

@section('Default')
<span class="brand-span">Bienvenidos a mi Blog</span>
@endsection

@section('estatico')
<h4>Blog</h4>
@endsection

@section('Titulo')
<h2 class="universal-h2 universal-h2-bckg">Acerca de mi</h2>
@endsection

@section('Informacion')
<p><span></span>Estudia: {{$uni -> estudia}}</p>
<p><span></span>Edad: {{$uni -> edad}}</p>
<p><span></span>Genero: {{$uni -> genero}}</p>
<p><span></span>Ciudad: {{$uni -> ciudad}}</p>
<p><span></span>Pais: {{$uni -> pais}}</p>
<p><span></span>Estado: {{$uni -> estado}}</p>



@endsection

@section('Titulo2')
<h2 class="universal-h2 universal-h2-bckg">Mas Sobre Mi</h2>
@endsection

@section('InformacionExtra')
<p><span></span>Hola como pudieron observar en mis datos principales y en algunas imagenes previas quizas saben ya un poco de mi y de mi lugar de origen. Por otro ladome gustaria que supieran mas de mi como quienes son mis amigos mas cercanos por ejemplo: </p>

@foreach($uni -> mostrarAmigos() as $amigo)
<p><span></span>Amigos: {{$amigo}}</p>
@endforeach

@endsection

