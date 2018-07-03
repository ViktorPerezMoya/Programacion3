<!DOCTYPE html>
<html>
<head>
	<title>Clase 19 - 06</title>
	<meta charset="utf-8">
</head>
	<body>
		<form id="formulario" action="procesar_form.php" method="post">
			<fieldset>
				<legend>Formulario de datos</legend>
			<label for="nombre">Ingrese nombre:</label>
			<input type="text" id="nombre">
			<br>
			<label>Edad</label>
			<input type="text" id="edad">
			<br>
			<label>Sexo: </label>
			<input type="radio" name="sexo" value="Mujer">Mujer
			<input type="radio" name="sexo" value="Hombre">Hombre
			<input type="radio" name="sexo" value="Otro">Otro<br>

			Tu pais: 
			<select id="paises">
				<optgroup label="America">
					<option>Argentina</option>
					<option>Perú</option>
				</optgroup>
				<optgroup label="Asia">
					<option>Rusia</option>
				</optgroup>
				<optgroup label="Europa">
					<option>España</option>
				</optgroup>
				<optgroup label="America del norte">
					<option>Canada</option>
				</optgroup>
				<optgroup label="Africa">
					<option>Nigeria</option>
				</optgroup>
			</select>
			<br>
			Seleccione lenguaje en el que trabaja:
			<input type="checkbox" name="len" value="Java">Java
			<input type="checkbox" name="len" value="Javascript">Javascript
			<" name="len" value="Phyton">Phyton
			<input type="checkbox" input type="checkboxname="len" value="php">PHP<br>
			</fieldset>
			<br><br>
			<input type="submit" value="Enviar" id="btn_enviar">

		</form>
	</body>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#edad").attr("maxlength","2");

			$("#formulario").submit(function(e){
				e.preventDefault();//detiene la ejecucion del formulario
				var nombre = $("#nombre").val();
				var sexo = $("input[name='sexo']:checked").val();
				var pais = $("#paises").val();
				console.log("Tu nombre es : "+nombre+" y eres "+sexo );
				console.log("Tu pais es: "+pais);

				var array = new Array();

				 $("input[type='checkbox']:checked").each(function(){
				 	array.push($(this).val());//this.val es el checked actual del for al que le toma el valor
				 });
				 console.log(array);
				 

			});

			$("#edad").keyup(function(evt){
				var e = evt;
				//validacion de edad
				 var expReg = /^[0-9]+$/;
				 if(!expReg.test($("#edad").val())){
				 	//$("#edad").val('');
				 	e.consume();
				 }
			});
		});
	</script>
</html>