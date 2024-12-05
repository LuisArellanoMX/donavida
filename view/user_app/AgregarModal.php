<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
	
        <div class="modal-content">
            <div class="modal-header">
               
                <center><h4 class="modal-title" id="myModalLabel">Nuevo Registro</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
                <div class="card-body">
						<form method="POST" autocomplete="off" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group form-group-default">
								<label>Fecha</label>
								<input name="dates" type="date" class="form-control" required  placeholder="Ingrese fecha">
							</div>
						</div>
						
						<div class="col-md-6 pr-0">
							<div class="form-group form-group-default">
								<label>Hora</label>
								<input name="hour" type="time" class="form-control" required placeholder="Ingrese la hora">
							</div>
						</div>
						<!-- ---------------------------------------------->
						
					
						<!-- ----------------------------------------------->

						<?php
						//incluimos el fichero de conexion
						include_once('../config/dbconect.php');

						$database = new Connection();
						$db = $database->open();
						$usuario = $_SESSION['email'];
							$sql = 'SELECT * FROM doctor';
							$sql2 = 'SELECT * FROM customers WHERE tipo_sangre = (SELECT tipo_sangre FROM doctor WHERE usuario = :usuario)';
							$stmt = $db->prepare($sql2);
							$stmt->execute(['usuario' => $usuario]);
							$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
								?>


						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Paciente</label>
								<select class="form-control" required name="codpaci">
								<?php
									foreach ($results as $row) {
										echo "<option value='" . $row["codpaci"] . "'>" . $row["nombrep"] . " " . $row["apellidop"] . "</option>";
									}
								?>
								</select>
							</div>
						</div>
						

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Donante</label>
								<select class="form-control" required name="coddoc">
								<?php
									echo "<option value='" . $_SESSION['id']. "'>" . $_SESSION['nombre'] . " " . $_SESSION['usuario'] . "</option>";
								?>
								
							</div>
						</div>

						
						
					</div>
			
            </div>

        </div>
		 <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar
				
				
				</button>
                <button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
				
				
				
			</form>
                </div>
			
            </div>

        </div>
		
    </div>
</div>
</div>
<!-- -->