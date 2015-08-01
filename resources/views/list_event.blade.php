@extends('template/app')
@section('content')
<div class="container">
    <!-- <div class="content">
        <div class="title">Laravel 5</div>
    </div>
    <form method="POST" action="">
      <h4>Nuevo Evento</h4>
      <label>Nombre</label>
      <input type="text">
      <button type="submit">Agregar</button>
    </form> -->
    <h3>Lista de Eventos</h3>
    <ul>
      @foreach ($events as $event)
      <li>
        {{$event->name}}
      </li>
      @endforeach
    </ul>

</div>
@endsection
