<?php

if(!empty($_POST)){
	if(isset($_POST["nombreprop"]) &&isset($_POST["nombremasc"]) &&isset($_POST["tipo"]) &&isset($_POST["servicio"]) &&isset($_POST["fecha"])){
		if($_POST["nombreprop"]!=""&& $_POST["nombremasc"]!=""&&$_POST["tipo"]!=""&&$_POST["servicio"]!=""&&$_POST["fecha"]!=""){
			include "conexion.php";
						
			
			$sql = "INSERT INTO citas(`nombreProp`, `nombreMasc`, `tipo`, `servicio`, `direccion`, `celular`, `fecha`) VALUES(\"$_POST[nombreprop]\",\"$_POST[nombremasc]\",\"$_POST[tipo]\",\"$_POST[servicio]\",\"$_POST[direccion]\",\"$_POST[celular]\",\"$_POST[fecha]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro de cita exitoso. Nos comunicaremos con usted para concretar la cita, muchas gracias!\");window.location='../registro.php';</script>";
			}
		}
	}

}


?>