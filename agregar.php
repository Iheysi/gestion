	<?php include "./header.php"; ?>

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card mt-4">
					<div class="card-body">
						<a href="index.php" class="btn btn-outline-info">
							<i class="fa-solid fa-angles-left"></i> Regresar
						</a>
						<h2>Agregar nuevo registro</h2>
						<form action="./procesos/insertar.php" method="post">
							<label for="paterno">Nombre</label>
							<input type="text" class="form-control" id="nombre" name="nombre" required>
							<label for="paterno">Cedula</label>
							<input type="text" class="form-control" id="cedula" name="cedula" required>
							<label for="materno">Telefono</label>
							<input type="text" class="form-control" id="telefono" name="telefono">
							<label for="nombre">Direccion</label>
							<input type="text" class="form-control" id="direccion" name="direccion" required>
							<label for="fechaNacimiento">Fecha de nacimiento</label>



							<input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required>
							<button class="btn btn-primary mt-3">
								<i class="fa-solid fa-floppy-disk"></i> Agregar
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "./scripts.php"; ?>