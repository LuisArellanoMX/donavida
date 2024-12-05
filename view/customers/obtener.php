<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$codpaci  = $_GET['codpaci'];
			$dnipa = $_POST['dnipa'];
			$nombrep = $_POST['nombrep'];
			$apellidop = $_POST['apellidop'];
			$tele = $_POST['tele'];
			$sexo = $_POST['sexo'];
			$tipo_sangre = $_POST['tipo_sangre'];
			$edad = $_POST['edad'];
			
			$sql = "UPDATE customers SET dnipa = '$dnipa',nombrep = '$nombrep',apellidop = '$apellidop',tipo_sangre = '$tipo_sangre',tele = '$tele',sexo = '$sexo' ,edad = '$edad' WHERE codpaci = '$codpaci'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Paciente actualizado correctamente' : 'No se puso actualizar el paciente';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar la conexión
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location: ../../folder/customers.php');

?>