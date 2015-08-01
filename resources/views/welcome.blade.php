@extends('template/app')
@section('content')
<div class="container">
    <div class="content">
        <div class="title">Laravel 5</div>
    </div>
    <form method="POST" action="/event">
      <h4>Nuevo Evento</h4>
      <label>Nombre</label>
      <input type="text" name="name">
      <button type="submit">Agregar</button>
    </form>
</div>
@endsection
