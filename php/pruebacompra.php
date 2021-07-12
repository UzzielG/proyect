<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<main>
		<div class="row">
			<p>Seleccion de tickets</p>
		</div>
		<form action = "funcion.php" method = "post">

		<div class="form-check-checked">
			<input class="form-check-input" type="radio" name="escoger" value="tribuna1" checked>
			<label class="form-check-label">TRIBUNA OESTE $5.00 <span class="text-muted">+ $1.00 cargos por servicio</span></label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="escoger" value="tribuna2">
			<label class="form-check-label">TRIBUNA ESTE $10.00 <span class="text-muted">+ $1.00 cargos por servicio</span></label>
		</div>

		<div class="form-check">
			<input class="form-check-input" type="radio" name="escoger" value="butaca">
			<label class="form-check-label">BUTACA $15.00 <span class="text-muted">+ $1.00 cargos por servicio</span></label>
		</div>

		<div class="form-check">
			<input class="form-check-input" type="radio" name="escoger" value="vip">
			<label class="form-check-label">PALCOS VIP $25.00 <span class="text-muted">+ $1.00 cargos por servicio</span></label>
		</div>	    

    <select name="opcion" required>
    	<option value="1" selected>1</option>
    	<option value="2">2</option>
    	<option value="3">3</option>
    	<option value="4">4</option>
    	<option value="5">5</option>
    	<option value="6">6</option>
    	<option value="7">7</option>
    	<option value="8">8</option>
    	<option value="9">9</option>
    	<option value="10">10</option>	    
    </select> 
	     	
	<input class="btn-sm btn-warning" type="submit" name="comprar" value="Comprar"><i class="fa fa-shopping-cart"></i>
</form>

</main>
</div>
	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>