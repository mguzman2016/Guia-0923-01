<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0">
		<title>Listado de Unidades</title>
	</head>
	<body>
		<header>
			<h1>Listado de Unidades</h1>
		</header><!-- /header -->
		<section>
			<table>
				<caption>Tabla de Unidades</caption>
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Abreviado</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($aDatos as $fila) { ?>
						<tr>
							<td><?php echo $fila["id_unidad_medida"]; ?></td>
							<td><?php echo $fila["descripcion"]; ?></td>
							<td><?php echo $fila["abreviado"]; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</section>
	</body>
</html>