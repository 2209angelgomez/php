<?php 
	/*Leer nombre, apellido, sueldo y dias laborados durante el año de un empleado 
	e imprimir además de los datos básicos, el valor de las prestaciones sociales
	según las siguientes formulas:
		1. Vacaciones: Sueldo * dias laborados / 720
		2. Prima de servicios: Sueldo * dias laborados / 360
		3. Cesantias: Sueldo * dias laborados / 360 */

		$nombre='Pepito';
		$apellido='Lopez';
		$sueldo=1200000;
		$diaslabanio=93;
		$vacaciones;
		$prima;
		$cesantias;
		$sueldo3;

		echo 'El empleado ' . $nombre . ' ' . $apellido . ' ' . ' gana '. $sueldo . ' porque trabajo ' . $diaslabanio . ' dias durante el año actual';
		echo '<br>';


		$vacaciones=$sueldo*$diaslabanio/720;
		$prima=$sueldo*$diaslabanio/360;
		$cesantias=$sueldo*$diaslabanio/360;


		echo 'Por tando las prestaciones sociales que le corresponde son: ';
		echo '<br>';
		echo '<br>';
		echo '1)' . '<strong>' . ' Vacaciones: $ ' . '</strong>' . $vacaciones;
		echo '<br>';
		echo '2)' . '<strong>' . ' Servicios Prima: $ ' . '</strong>' . $prima;
		echo '<br>';
		echo '3)' . '<strong>' . ' Cesantias: $ ' . '</strong>' . $cesantias;
		echo '<br>';
		$total=$vacaciones + $prima + $cesantias;
		echo '<br>';
		echo '<strong>' . ' Total a pagar prestaciones: $ ' . '</strong>' . $total;
		echo '<br>';
		$sueldo3=$total+$sueldo/30*3;
		echo '<strong>' . ' Sueldo por día: $ ' . '</strong>' . $sueldo/30;
		echo '<br>';
		echo '<strong>' . ' Sueldo por laborar tres dias: $ ' . '</strong>' . $sueldo3;
?>
