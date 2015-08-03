<!DOCTYPE html>
<html lang="es">
    <head>
      <meta charset="utf-8">
	     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel</title>

        <!-- <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> -->



        <!--STYLESHEET-->
	<!--=================================================-->

	<!--Open Sans Font [ OPTIONAL ] -->
 	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">


	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="/css/bootstrap.min.css" rel="stylesheet">


	<!--Nifty Stylesheet [ REQUIRED ]-->
	<link href="/css/nifty.min.css" rel="stylesheet">


	<!--Font Awesome [ OPTIONAL ]-->
	<link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">


	<!--Switchery [ OPTIONAL ]-->
	<link href="/plugins/switchery/switchery.min.css" rel="stylesheet">


	<!--Bootstrap Select [ OPTIONAL ]-->
	<link href="/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">


	<!--Bootstrap Validator [ OPTIONAL ]-->
	<link href="/plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">


	<!--Demo [ DEMONSTRATION ]-->
	<link href="/css/demo/nifty-demo.min.css" rel="stylesheet">
  @yield('css')



	<!--SCRIPT-->
	<!--=================================================-->

	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href="/plugins/pace/pace.min.css" rel="stylesheet">
	<script src="/plugins/pace/pace.min.js"></script>

    </head>
    <body>
        @yield('content')

    </body>
    <!--jQuery [ REQUIRED ]-->
	<script src="/js/jquery-2.1.1.min.js"></script>


	<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="/js/bootstrap.min.js"></script>


	<!--Fast Click [ OPTIONAL ]-->
	<script src="/plugins/fast-click/fastclick.min.js"></script>


	<!--Nifty Admin [ RECOMMENDED ]-->
	<script src="/js/nifty.min.js"></script>


	<!--Switchery [ OPTIONAL ]-->
	<script src="/plugins/switchery/switchery.min.js"></script>


	<!--Bootstrap Select [ OPTIONAL ]-->
	<script src="/plugins/bootstrap-select/bootstrap-select.min.js"></script>


	<!--Bootstrap Wizard [ OPTIONAL ]-->
	<script src="/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>


	<!--Bootstrap Validator [ OPTIONAL ]-->
	<script src="/plugins/bootstrap-validator/bootstrapValidator.min.js"></script>


	<!--Demo script [ DEMONSTRATION ]-->
	<script src="/js/demo/nifty-demo.min.js"></script>


	<!--Form Wizard [ SAMPLE ]-->
	<script src="/js/demo/form-wizard.js"></script>
    @yield('js')
</html>
