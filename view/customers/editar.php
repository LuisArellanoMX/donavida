	<!-- Modal-edit -->
<div class="modal fade" id="editRowModal<?php echo $row['codpaci']; ?>"  aria-labelledby="myModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
					Editar</span> 
					
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
		
				 
				<form  method="POST" action="../view/customers/obtener.php?codpaci=<?php echo $row['codpaci']; ?>">
							
				<input class="form-control" name="codpaci" type="hidden" value="<?php echo $row['codpaci']; ?>">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group form-group-default">
								<label>CURP</label>
						
						<input type="text" maxlength="8" class="form-control" name="dnipa" value="<?php echo $row['dnipa']; ?>">
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Nombres</label>
						
						<input type="text" class="form-control" name="nombrep" value="<?php echo $row['nombrep']; ?>">
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Apellidos</label>
						
						<input type="text" class="form-control" name="apellidop" value="<?php echo $row['apellidop']; ?>">
							</div>
						</div>
						
						
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Teléfono</label>
						
						<input type="text" class="form-control" name="tele" value="<?php echo $row['tele']; ?>">
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group form-group-default" >
								<label>Sexo</label>
						
						
						
						<select class="form-control" name="sexo" value="<?php echo $row['sexo'];?>" >
						<option value="Masculino">Masculino</option>
						<option value="Femenino">Femenino</option>
						</select>
						
						
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Edad</label>
						
						<input type="number" class="form-control" name="edad" value="<?php echo $row['edad']; ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Tipo de sangre</label>
						
						
						<select class="form-control" name="tipo_sangre" value="<?php echo $row['tipo_sangre'];?>" >
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
						
					</div>
					
				</div>
				<div class="modal-footer no-bd">
					<button type="submit" name="editar" class="btn btn-primary">Editar
				
				</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
			</form>
		</div>
	</div>
</div>
									
									
<!-- Delete -->
<div class="modal fade" id="deleteRowModal<?php echo $row['codpaci']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"></h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de borrar el registro?</p>
				<h2 class="text-center"><?php echo $row['nombrep']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="../view/customers/BorrarRegistro.php?codpaci=<?php echo $row['codpaci']; ?>" class="btn btn-danger"><span class="fa fa-times"></span> Eliminar</a>
            </div>

        </div>
    </div>
</div>	
									
			<!-- Password-->	
<div class="modal fade" id="PassRowModal<?php echo $row['codpaci']; ?>"  aria-labelledby="myModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
					Password</span> 
					
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
		
				 
				<form  method="POST" action="../view/customers/password.php?codpaci=<?php echo $row['codpaci']; ?>">
							
				<input class="form-control" name="codpaci" type="hidden" value="<?php echo $row['codpaci']; ?>">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group form-group-default">
								<label>Nuevo password</label>
						
						<input type="password" class="form-control" name="clave">
							</div>
						</div>
						
					</div>
					
				</div>
				<div class="modal-footer no-bd">
					<button type="submit" name="editar" class="btn btn-primary">Editar
				
				</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				</div>
			</form>
		</div>
	</div>
</div>