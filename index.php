<?php 
$equipos = array("Argentina", "Islandia", "Croacia", "Nigeria");
$puntos = array(0,0,0,0);
$goles = array(0,0,0,0);
$goles1 = $_POST['Goles1']; $goles2 = $_POST['Goles2'];
$goles3 = $_POST['Goles3']; $goles4 = $_POST['Goles4'];
$e1 = $_POST['Equipo1']; $e2 = $_POST['Equipo2'];
$e3 = $_POST['Equipo3']; $e4 = $_POST['Equipo4'];
if ($goles1 > $goles2) {
	$puntos[$e1] += 3; 
	$goles[$e1] += $goles1[$e1];
} elseif ($goles1 < $goles2) {
	$puntos[$e2] += 3; 
	$goles[$e2] += $goles1;
} else {
	$puntos[$e1] += 1;
	$goles[$e1] += $goles1;
	$puntos[$e2] += 1; 
	$goles[$e2] += $goles2;
}
if ($goles3 > $goles4) {
	$puntos[$e3] += 3; 
	$goles[$e3] += $goles3;
} elseif ($goles3 < $goles4) {
	$puntos[$e4] += 3; 
	$goles[$e4] += $goles4;
} else {
	$goles[$e3] += $goles3;
	$goles[$e4] += $goles4;
	$puntos[$e3] += 1;
	$puntos[$e4] += 1; 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hola</title>
</head>
<body>
	<table bgcolor="lightblue" border="1">
		<tr><td>Pais</td><td>Goles</td><td>Puntos</td></tr>
		<tr><td><?php echo $equipos[0] ?></td><td><?php echo $goles[0] ?></td><td><?php echo $puntos[0] ?></td></tr>
		<tr><td><?php echo $equipos[1] ?></td><td><?php echo $goles[1] ?></td><td><?php echo $puntos[1] ?></td></tr>
		<tr><td><?php echo $equipos[2] ?></td><td><?php echo $goles[2] ?></td><td><?php echo $puntos[2] ?></td></tr>
		<tr><td><?php echo $equipos[3] ?></td><td><?php echo $goles[3] ?></td><td><?php echo $puntos[3] ?></td></tr>
	</table>
</body>
</html>