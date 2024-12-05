<?php

  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Registrate</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css "href="assets/css/style.css">
    <link rel="stylesheet" type="text/css "href="assets/css/css/all.min.css">
    <link rel="stylesheet" href="assets/css/sweetalert.css">
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon"/>
</head>
<body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/js/jquery.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
   <!--  <img class="wave"src="../assets/img/wave.png" alt="">  -->
   <?php if (isset($_SESSION['message'])): ?>
        <script>
            $(document).ready(function() {
                // Mostrar alerta con SweetAlert
                swal({
                    title: "<?php echo $_SESSION['message'] == 'Usuario guardado correctamente' ? 'Éxito' : 'Error'; ?>",
                    text: "<?php echo $_SESSION['message']; ?>",
                    icon: "<?php echo $_SESSION['message'] == 'Usuario guardado correctamente' ? 'success' : 'error'; ?>",
                    button: "Aceptar"
                });
            });
        </script>
        <?php unset($_SESSION['message']); // Limpiar el mensaje después de mostrarlo ?>
    <?php endif; ?>
    <div class="contenedor">
    <div class="img">
    <img src="assets/img/reg.webp" alt="">
    </div>
    <div class="contenido-login">

    <form id="formulario_registro" method="POST" >

    <img src="assets/img/donacion.png" alt="">
    <h2>Registrate</h2>

    <div class="input-div nit">
    <div class="i">
    <i class="fas fa-user"></i>
    </div>
    <div class="div">

     <input type="text"  name="dnidoc"  required placeholder="CURP">
    </div>
    </div>
    
    <div class="input-div nit">
    <div class="i">
    <i class="fas fa-user"></i>
    </div>
    <div class="div">

     <input type="text"  name="nomdoc"  required placeholder="NOMBRE">
    </div>
    </div>

    <div class="input-div nit">
    <div class="i">
    <i class="fas fa-user"></i>
    </div>
    <div class="div">

     <input type="text"  name="apedoc"  required placeholder="APELLIDOS">
    </div>
    </div>

    <div class="input-div nit">
    <div class="i">
    <i class="fas fa-user"></i>
    </div>
    <div class="div">

     <input type="number"  name="edad"  required placeholder="EDAD">
    </div>
    </div>

    <div class="input-div nit">
    <div class="i">
    <i class="fas fa-user"></i>
    </div>
    <div class="div">

     <input type="text"  name="telefo"  required placeholder="TELEFONO">
    </div>
    </div>

    <div class="select-container">
            <label for="tipo" >Sexo</label>
            <select name="sexo" id="tipo" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
        </div>
                <br><br>
        <div class="select-container">
            <label for="tipo" >Tipo de sangre</label>
            <select name="tipo" id="tipo" required>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            </select>
        </div>

        <div class="input-div nit">
    <div class="i">
    <i class="fas fa-user"></i>
    </div>
    <div class="div">

     <input type="email" name="correo"  required placeholder="CORREO">
    </div>
    </div>

    <div class="input-div nit">
    <div class="i">
    <i class="fas fa-user"></i>
    </div>
    <div class="div">

     <input type="date" name="fechanaci"  required placeholder="FECHA NACIMIENTO">
    </div>
    </div>

    <div class="input-div nit">
    <div class="i">
    <i class="fas fa-user"></i>
    </div>
    <div class="div">

     <input type="text" name="usuario"  required placeholder="USUARIO">
    </div>
    </div>


    
    
    <div class="input-div pass">
    <div class="i">
    <i class="fas fa-lock"></i>
    </div>
    <div class="div">

    <input type="password" placeholder="CONTRASEÑA"  name="clave" required >
    </div>
    </div>
    
     <div class="input-div pass">
    <div class="i">
    <i class="fas fa-lock"></i>
    </div>
    <div class="div">

    <input type="password" placeholder="CONFIRMAR CONTRASEÑA"  name="clave2" required >
    </div>
    </div>

    <div class="input-div pass">
    <div class="i">
    <i class="fas fa-lock"></i>
    </div>
    <div class="div">
    <label for="checkbox" >Permiso de ubicacion</label>
            <label class="switch">
          <input type="checkbox" id="checkbox">
          <span class="slider round"></span>
        </label>
    
    </div>
    </div>
    
    <div class="row" id="load" hidden="hidden">
      <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
        <img src="assets/img/load.gif" width="100%" alt="">
      </div>
      <div class="col-xs-12 center text-accent">
        <span>Validando información...</span>
      </div>
        </div>
    
    <input type="submit" name="agregar" id="registro" class="btn" onclick="validarCheckbox" value="Registrate">
	
    </form>

    </div>
    </div>
     
    <!-- Js personalizado 
    <script src="assets/js/operaciones.js"></script> 
    -->
    <?php
if(isset($_POST["agregar"])){

  ?> 
    <script type="text/javascript">
      function validarCheckbox() {
      const checkbox = document.getElementById('checkbox');
      if (!checkbox.checked) {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Debe dar permiso a laa ubicacion'
            
            })  
      }}


        </script>
  <?php
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto_final";

// Creamos la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Revisamos la conexión
if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   } 
$dnidoc=$_POST['dnidoc'];
$nomdoc=$_POST['nomdoc'];
$apedoc=$_POST['apedoc'];
$sexo=$_POST['sexo'];
$telefo=$_POST['telefo'];
$fechanaci=$_POST['fechanaci'];
$correo =$_POST['correo'];
$usuario=$_POST['usuario'];
$edad=$_POST['edad'];
$tipo=$_POST['tipo'];
$clave=MD5($_POST['clave']);

// Realizamos la consulta para saber si coincide con uno de esos criterios
$sql = "select * from doctor where dnidoc='$dnidoc' or usuario='$usuario'";
$result = mysqli_query($conn, $sql);
?>


<?php
 // Validamos si hay resultados
 if(mysqli_num_rows($result)>0)
 {
        // Si es mayor a cero imprimimos que ya existe el usuario
      
        if($result){
   ?>

        <script type="text/javascript">

Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Ya existe el registro a agregar!'
 
})


        </script>

    <?php
    }
  
 }
 else
 {
// Si no hay resultados, ingresamos el registro a la base de datos
$sql2 = "INSERT INTO doctor(dnidoc,nomdoc,apedoc,sexo,telefo,fechanaci,correo,estado,usuario,clave,cargo,edad,tipo_sangre)VALUES ('$dnidoc','$nomdoc','$apedoc','$sexo','$telefo','$fechanaci','$correo','1','$usuario','$clave','0','$edad','$tipo')";


if (mysqli_query($conn, $sql2)) {
      
       if($sql2){
   ?>

        <script type="text/javascript">
             
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Agregado correctamente',
  showConfirmButton: false,
  timer: 1500
}).then(function() {
            window.location = "login.php";
        });
        </script>

    <?php
    }
    else{
       ?>
       <script type="text/javascript">
        Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'No se pudo guardar!'
 
})
       </script>
       <?php

    }
    
} else {
      
       echo "Error: " . $sql2 . "" . mysqli_error($conn);
}

}
// Cerramos la conexión
$conn->close();

}
?>
	
</body>

</html>
