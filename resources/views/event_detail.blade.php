@extends('template/app')
@section('content')


<div class="row">

  <div class="col-sm-6">
							<!--Primary Panel-->
							<!--===================================================-->
							<div class="panel panel-mint">
								<div class="panel-heading">
									<h3 class="panel-title">Invitados</h3>
								</div>
								<div class="panel-body">
                  <form class="form-horizontal" action="/event/{{$event->id}}/invite" method="POST">
  									<div class="panel-body">
  										<div class="form-group">
  											<label class="col-sm-3 control-label" for="demo-hor-inputemail">Nombre</label>
  											<div class="col-sm-9">
  												<input name="name" type="text" placeholder="Nombre" id="demo-hor-inputemail" class="form-control">
  											</div>
  										</div>
                      <div class="form-group">
  											<label class="col-sm-3 control-label" for="demo-hor-inputemail">Correo Electrónico</label>
  											<div class="col-sm-9">
  												<input name="email" type="email" placeholder="Correo" id="demo-hor-inputemail" class="form-control">
  											</div>
  										</div>
                      </div>
    									<div class="panel-footer text-right">
    										<button class="btn btn-info" type="submit">Agregar</button>
    									</div>
    								</form>
                    <br>
                    <table class="table table-hover table-vcenter">
										<thead>
											<tr>
												<th class="min-width">Nombre</th>
												<th>Email</th>
												<!-- <th class="text-center">Value</th> -->
											</tr>
										</thead>
										<tbody>
                      @foreach ($invites as $invite)
											<tr>
												<td class="text-center"><span class="icon-wrap icon-wrap-sm icon-circle bg-purple"><i class="fa fa-desktop fa-lg"></i></span></td>
												<td>
													<span class="text-semibold">{{$invite->name}}</span>
													<br>
													 <small class="text-muted">{{$invite->email}}</small>
												</td>
												<!-- <td class="text-center"><span class="text-danger text-semibold">- 28.76%</span></td> -->
											</tr>
                      @endforeach
										</tbody>
									</table>

								</div>
							</div>
							<!--===================================================-->
							<!--End Primary Panel-->

</div>

<div class="col-sm-6">

            <!--Primary Panel-->
            <!--===================================================-->
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Regalos</h3>
              </div>
              <div class="panel-body">
                <form class="form-horizontal" action="/event/{{$event->id}}/item" method="POST">
                  <div class="panel-body">
                    <div class="form-group">
                      <label class="col-sm-3 control-label" for="demo-hor-inputemail">Nombre</label>
                      <div class="col-sm-9">
                        <input name="name" type="text" placeholder="Nombre" id="demo-hor-inputemail" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label" for="demo-hor-inputemail">Cantidad</label>
                      <div class="col-sm-9">
                        <input name="amount" type="integer" placeholder="Correo" id="demo-hor-inputemail" class="form-control">
                      </div>
                    </div>
                    </div>
                    <div class="panel-footer text-right">
                      <button class="btn btn-info" type="submit">Agregar</button>
                    </div>
                  </form>
                  <br>
                  <table class="table table-hover table-vcenter">
                  <thead>
                    <tr>
                      <th class="min-width">Nombre</th>
                      <th>Cantidad</th>
                      <!-- <th class="text-center">Value</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($items as $item)
                    <tr>
                      <td class="text-center"><span class="icon-wrap icon-wrap-sm icon-circle bg-purple"><i class="fa fa-laptop fa-lg"></i></span></td>
                      <td>
                        <span class="text-semibold">{{$item->name}}</span>
                        <br>
                         <small class="text-muted">{{$item->amount}}</small>
                      </td>
                      <!-- <td class="text-center"><span class="text-danger text-semibold">- 28.76%</span></td> -->
                    </tr>
                    @endforeach
                  </tbody>
                </table>

              </div>
            </div>
            <!--===================================================-->
            <!--End Primary Panel-->

</div>

</div>

@endsection

@section('js')

<!--Panel [ SAMPLE ]-->
	<script src="js/demo/ui-panels.js"></script>

@endsection
