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
						include_once('../view/config/dbconect.php');

						$database = new Connection();
						$db = $database->open();
						$cargo = $_SESSION['cargo'];
							$sql = 'SELECT * FROM doctor';
							$sql2 = "SELECT * FROM customers where cargo = $cargo and estado = 1";
								?>


						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Paciente</label>
								<select class="form-control" required name="codpaci" id="selectPaciente" onchange="seleccionarPaciente()">
									<option value="">Seleccione un paciente</option>
									<?php
										foreach ($db->query($sql2) as $row) {
											echo "<option value='" . $row["codpaci"] . "'>" . $row["nombrep"] . " " . $row["apellidop"] . "</option>";
										}
									?>
								</select>
							</div>
						</div>
						

						<div class="col-md-6" id="miDiv" style="display: none;">
							<div class="form-group form-group-default">
								<label>Donante</label>
								<select class="form-control" required name="coddoc" id="selectDonante">
									<option value="">Seleccione un donante</option>
								</select>
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

<script>
function seleccionarPaciente() {
    const pacienteId = document.getElementById('selectPaciente').value;

    if (pacienteId) {
        // Mostrar el div del donante
        document.getElementById('miDiv').style.display = 'block';

        // Llamar al servidor usando AJAX
        fetch(`../view/appointment/obtener_donante.php?codpaci=${pacienteId}`)
            .then(response => response.json())
            .then(data => {
                const selectDonante = document.getElementById('selectDonante');
                selectDonante.innerHTML = '<option value="">Seleccione un donante</option>'; // Limpiar opciones anteriores
                
                // Agregar nuevas opciones
                data.forEach(donante => {
                    selectDonante.innerHTML += `<option value="${donante.coddoc}">${donante.nomdoc} ${donante.apedoc}</option>`;
                });
            })
            .catch(error => console.error('Error:', error));
    } else {
        // Ocultar el div si no hay paciente seleccionado
        document.getElementById('miDiv').style.display = 'none';
    }
}
</script>