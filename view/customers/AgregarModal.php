<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
	
        <div class="modal-content">
            <div class="modal-header">
               
                <center><h4 class="modal-title" id="myModalLabel">Nuevo Paciente</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
                <div class="card-body">
	<form method="POST" autocomplete="off" enctype="multipart/form-data" >
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group form-group-default">
								<label>CURP</label>
								<input name="dnipa" type="text" required class="form-control" maxlength="20" placeholder="Ingrese curp" >
							</div>
						</div>
						<div class="col-md-6 pr-0">
							<div class="form-group form-group-default">
								<label>Nombre</label>
								<input name="nombrep" type="text" class="form-control" required placeholder="Ingrese nombre">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Apellidos</label>
								<input name="apellidop" type="text" class="form-control" required placeholder="Ingrese apellidos">
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Teléfono</label>
								<input name="tele" type="text" class="form-control" required maxlength="9" placeholder="Ingrese teléfono" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Sexo</label>
					<select class="form-control" name="sexo">
						<option value="Masculino">Masculino</option>
						<option value="Femenino">Femenino</option>
				
					</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Tipo de Sangre</label>
								<select class="form-control" name="tipo_sangre">
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
						</div>
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Edad</label>
								<input name="edad" type="number" class="form-control" required placeholder="Ingrese la edad">
							</div>
						</div>
						
						
						
						
					</div>
			
            </div>

        </div>
		 <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Paciente</button>
			</form>
                </div>
			
            </div>

        </div>
		
    </div>
</div>
</div>
<!-- -->