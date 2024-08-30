<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('assets/css/hoja_index.css')}}">
    <link rel="stylesheet" type="text/css" href="assets/css/hoja_libros.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/hoja_acercade.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/hoja_inicio.css')}}">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/vistas.js"></script>
    <script type="text/javascript" src="js/funcionesLibros.js"></script>
	<title>Sistema de Biblioteca</title>


	<script type="text/javascript">

		function AbrirVentaLogin(){
			document.forms['formingreso'].reset();
			$("#ventanalogin").slideDown("slow");
			$('#ErrorUsuario').hide('fast');
		}

		function CerrarVentaLogin(){
			document.forms['formingreso'].reset();
			$("#ventanalogin").slideUp("fast");
			$('#ErrorUsuario').hide('fast');
		}
		

	</script>
</head>
<body onload="VistaInicio()">
	<div id="contenedor">

		<div id="ventanalogin">
			

			<div id="formlogin">

				<div id="cerrar"><a href="javascript:CerrarVentaLogin();">Cerrar X</a></div>

				<h1>Ingresar al Sistema</h1>
				<hr><br>

				<form method="POST" name="formingreso">
	
					<input type="text" name="txtnrcarnet" placeholder="Nro. Carnet..." required>
					<input type="password" name="txtclave" placeholder="Contraseña..." required>
					<button type="submit" name="btnEntrar">Entrar</button>
					<button type="button" onclick="javascript:CerrarVentaLogin();">Cancelar</button>
					<div id='ErrorUsuario'><strong>Error!</strong>Usuario No Encontrado</div>
				</form>
			</div>

		</div>

		@include("partials.header")

		<br>
		<hr>

		<nav>
		<center>
			<ul>
				<li><a href="{{route('vinicio')}}">Inicio</a></li>
				<li><a href="{{route('listarlibros')}}">Libros</a></li>
				<li><a href="{{route('vacercade')}}">Acerca de</a></li>
				<li><a href="javascript:AbrirVentaLogin();">Entrar</a></li>
			</ul>
		</center>
		</nav>


		@yield("contend")

		@include("partials.footer")
	</div>
</body>
</html>