<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<h2 class="display-3 text-center text-primary">Formulario comics</h2>
<div class ="container">
<form method="POST" action="/guardarComic">
    @csrf

@if(session()->has('confirmacion'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('confirmacion')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif

@if($errors->any())

@foreach ($errors->all() as $error)
    
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ $error }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endforeach
@endif
  <div class="mb-3">
    <label  class="form-label">Nombre:</label>
    <input type="text" name="txtNombre" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="txtFecha" class="form-label">Fecha de publicación:</label>
    <input type="text" name="txtFecha" class="form-control">
  </div>
  <div class="mb-3">
    <label for="txtNo" class="form-label">No. de comics:</label>
    <input type="text" name="txtNo" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary btn-center">Submit</button>
</div>
</form>
</form>