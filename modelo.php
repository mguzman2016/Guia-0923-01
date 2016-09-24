<?php
function Obtener_Unidades_Medida() {
	$sQuery = "select * from tbl_unidad_medida;";
	$oCnn = new mysqli("localhost", "root", "root", "db_inventario");
	$oResultado = $oCnn->query($sQuery);
	$aDatos = array();
	while ($aFila = $oResultado->fetch_array(MYSQLI_ASSOC)) {
		array_push($aDatos, $aFila);
	}
	return $aDatos;
}
?>