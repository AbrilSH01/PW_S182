@extends('layouts.plantilla')

@section('titulo','Formulario')

@section('contenido')

<h1 class="display-1 text-center text-danger">Formulario</h1>
<div class="container mt-5 col-md-6"><!--mt-5 para margen entre titulo y contenedor-->

<div class="card">
  <div class="card-header text-primary fs-5 fw-semibold text-center">
    Introduce tus recuerdo aquí
  </div>
  <div class="card-body">
    <form method="POST" action="/guardaRecuerdo"> 
      @csrf 
  <div class="container mt-5">
  <form>
  <div class="mb-3">
    <label class="form-label">Titulo:</label>
    <input type="text" name="txtTitulo"class="form-control" >
  </div>

  <div class="mb-3">
    <label class="form-label">Recuerdo:</label>
    <input type="text" name="txtRecuerdo" class="form-control" >
  </div>
  
</div>  
  </div>
  <div class="card-footer text-body-secondary">
  <div class="d-grid gap-2">
  <button type="submit" class="btn btn-primary">Guardar Recuerdo</button>
    </div>
    </form>
  </div>
</div>
</div>
@endsection

