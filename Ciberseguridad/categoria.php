<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Llenar select a partir de otro con php y mysql</title>
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	
</head>
<body>
	<h2>Llenar un select a partir de otro select con jquery y php</h2>

			<label>SELECT 1 (Continentes)</label>
			<select id="lista1" name="lista1">
				<option value="0">Selecciona una opcion</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="1">5</option>
				<option value="2">6</option>
				<option value="3">7</option>
				<option value="4">8</option>
				<option value="1">9</option>
				<option value="2">10</option>
				<option value="3">11</option>
			</select>
			<br>
			<div id="select2lista"></div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#lista1').val(1);
		recargarLista();

		$('#lista1').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"datos.php",
			data:"continente=" + $('#lista1').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>
