@extends('template/app')
@section('css')

<!--Bootstrap Table [ OPTIONAL ]-->
	<link href="plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet">

@endsection


@section('content')



<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Eventos</h3>
						</div>
						<div class="panel-body">
							<table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Fecha</th>
										<th class="min-tablet">Acciones</th>
									</tr>
								</thead>
								<tbody>
                  @foreach ($events as $event)
									<tr>
										<td>{{$event->name}}</td>
										<td>XX-XX-XXXX</td>
										<td><a href="/event/{{$event->id}}">Ir</a>  </td>
									</tr>
                  @endforeach
								</tbody>
							</table>
						</div>
					</div>

@endsection

@section('js')
<!--DataTables [ OPTIONAL ]-->
	<script src="plugins/datatables/media/js/jquery.dataTables.js"></script>
	<script src="plugins/datatables/media/js/dataTables.bootstrap.js"></script>
	<script src="plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

<!--DataTables Sample [ SAMPLE ]-->
	<script src="js/demo/tables-datatables.js"></script>

@endsection
