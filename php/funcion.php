<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
	if(isset($_POST['opcion']) and isset($_POST['escoger']))
	{
		$opcion = $_POST['opcion'];
		$opc = $_POST['escoger'];
		$precio = 0.00;
		$precio_s = 0.00;
		switch ($opc) {
			case 'tribuna1': $precio = $opcion * 5.00;	break;
			case 'tribuna2': $precio = $opcion * 10.00;	break;
			case 'butaca': $precio = $opcion * 15.00;	break;
			case 'vip': $precio = $opcion * 25.00;		break;
		}

		$precio_s = $opcion * 1.00;
		echo "Precio Boletos: ".$precio;
		echo "Costo por servicio: ".$precio_s;
		echo "Total: ".($precio + $precio_s);
	}
?>
</body>
</html>