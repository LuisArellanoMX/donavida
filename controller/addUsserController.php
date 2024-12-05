<?php
include_once('../view/config/dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection(); 
	$db = $database->open();


	try{
		$stmt = $db->prepare("INSERT INTO usuarios (nombre, usuario, email, clave, cargo) VALUES (:nombre, :usuario, :email, :clave, :cargo)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		// Instrucción if-else en la ejecución de la declaración preparada
        $claveEncriptada =  MD5($_POST['clave']);
        $_SESSION['message'] = ($stmt->execute(array(
            ':nombre' => $_POST['name'],
            ':usuario' => $_POST['usuario'],
            ':email' => $_POST['email'],
            ':clave' => $claveEncriptada,
            ':cargo' => $_POST['tipo']
        )) ? 'Usuario guardado correctamente' : 'Algo salió mal. No se puede agregar usuario');
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

echo $_SESSION['message'];
header('location: ../registro.php');
exit();
	
?>