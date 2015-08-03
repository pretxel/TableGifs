@extends('template/app')
@section('content')
<div class="row">


<div class="col-sm-8 col-sm-offset-2">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Nuevo Evento</h3>
								</div>

								<!--Horizontal Form-->
								<!--===================================================-->
								<form class="form-horizontal" method="POST" action="/event">
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-hor-inputemail">Nombre de Evento</label>
											<div class="col-sm-9">
												<input name="name" type="text" placeholder="Nombre" id="demo-hor-inputemail" class="form-control">
											</div>
										</div>
										<!-- <div class="form-group">
											<label class="col-sm-3 control-label" for="demo-hor-inputpass">Password</label>
											<div class="col-sm-9">
												<input type="password" placeholder="Password" id="demo-hor-inputpass" class="form-control">
											</div>
										</div> -->
										<!-- <div class="form-group">
											<div class="col-sm-offset-3 col-sm-9">
												<label class="form-checkbox form-normal form-primary">
													<input type="checkbox"> Remember me
												</label>
											</div>
										</div> -->
									</div>
									<div class="panel-footer text-right">
										<button class="btn btn-info" type="submit">Agregar</button>
									</div>
								</form>
								<!--===================================================-->
								<!--End Horizontal Form-->

							</div>
						</div>
</div>

<!-- Circular Form Wizard

<div class="col-lg-6">
							<div class="panel">


								<div id="demo-cir-wz">
									<div class="wz-heading">

										<div class="progress progress-sm progress-light-base">
											<div class="progress-bar progress-bar-primary"></div>
										</div>


										<ul class="wz-nav-off ">
											<li class="col-xs-3">
												<a data-toggle="tab" href="#demo-cir-tab1" title="Evento" class="add-tooltip">
													<span class="icon-wrap icon-wrap-sm icon-circle bg-mint">
														<i class="wz-icon fa fa-info fa-2x"></i>
														<i class="wz-icon-done fa fa-check fa-2x"></i>
													</span>
												</a>
											</li>
											<li class="col-xs-3">
												<a data-toggle="tab" href="#demo-cir-tab2" title="Invitados" class="add-tooltip">
													<span class="icon-wrap icon-wrap-sm icon-circle bg-info">
														<i class="wz-icon fa fa-user fa-2x"></i>
														<i class="wz-icon-done fa fa-check fa-2x"></i>
													</span>
												</a>
											</li>
											<li class="col-xs-3">
												<a data-toggle="tab" href="#demo-cir-tab3" title="Regalos" class="add-tooltip">
													<span class="icon-wrap icon-wrap-sm icon-circle bg-warning">
														<i class="wz-icon fa fa-home fa-2x"></i>
														<i class="wz-icon-done fa fa-check fa-2x"></i>
													</span>
												</a>
											</li>
											<li class="col-xs-3">
												<a data-toggle="tab" href="#demo-cir-tab4" title="Finalizar" class="add-tooltip">
													<span class="icon-wrap icon-wrap-sm icon-circle bg-success">
														<i class="wz-icon fa fa-heart fa-2x"></i>
														<i class="wz-icon-done fa fa-check fa-2x"></i>
													</span>
												</a>
											</li>
										</ul>
									</div>

									<form class="form-horizontal">
										<div class="panel-body">
											<div class="tab-content">

												<div id="demo-cir-tab1" class="tab-pane">
													<div class="form-group">
														<label class="col-lg-3 control-label">Nombre de Evento</label>
														<div class="col-lg-7">
															<input type="text" class="form-control" name="username" placeholder="Evento">
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Email address</label>
														<div class="col-lg-7">
															<input type="email" class="form-control" name="email" placeholder="Email">
														</div>
													</div>
												</div>

												<div id="demo-cir-tab2" class="tab-pane fade">
													<div class="form-group">
														<label class="col-lg-3 control-label">First name</label>
														<div class="col-lg-7">
															<input type="text" placeholder="First name" name="firstName" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Last name</label>
														<div class="col-lg-7">
															<input type="text" placeholder="Last name" name="lastName" class="form-control">
														</div>
													</div>
												</div>

												<div id="demo-cir-tab3" class="tab-pane">
													<div class="form-group">
														<label class="col-lg-3 control-label">Phone Number</label>
														<div class="col-lg-7">
															<input type="text" placeholder="Phone number" name="phoneNumber" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Address</label>
														<div class="col-lg-7">
															<input type="text" placeholder="Address" name="address" class="form-control">
														</div>
													</div>
												</div>

												<div id="demo-cir-tab4" class="tab-pane  mar-btm text-center">
													<h4>Thank you</h4>
													<p class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
												</div>

											</div>
										</div>

										<div class="panel-footer text-right">
											<div class="box-inline">
												<button type="button" class="previous btn btn-primary">Previous</button>
												<button type="button" class="next btn btn-primary">Next</button>
												<button type="button" class="finish btn btn-warning" disabled>Finish</button>
											</div>
										</div>
									</form>
								</div>

							</div>
						</div>
            End Circular Form Wizard -->


@endsection
