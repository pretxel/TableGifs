@extends('template/app')
@section('content')
<div class="container">


    <form action="/event/{{$event->id}}/invite" method="POST">
      <h3>Agregar Invitados</h3>
      <label>Nombre</label>
      <input type="text" name="name"><br>
      <label>Correo Electrónico</label>
      <input type="email" name="email"><br>
      <button type="submit">Agregar</button>
    </form>

    <div>
      <h3>Lista de Correos</h3>
      <ul>
        @foreach ($invites as $invite)
        <li>
          {{$invite->email}}
        </li>
        @endforeach
      </ul>
    </div>

    <form action="/event/{{$event->id}}/item" method="POST">
      <h3>Agregar Elemento</h3>
      <label>Nombre</label>
      <input type="text" name="name"><br>
      <label>Cantidad</label>
      <input type="integer" name="amount"><br>
      <button type="submit">Agregar</button>
    </form>

    <div>
      <h3>Lista de Items</h3>
      <ul>
        @foreach ($items as $item)
        <li>
          {{$item->name}}
        </li>
        @endforeach
      </ul>
    </div>



</div>
@endsection
