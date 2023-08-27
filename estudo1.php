<html>
	<head>

	</head>
	<body>
		<?php
		$string = "Boa noite!";
		$numero = 4;
		$array = array(3, 2, 4);
		date_default_timezone_set("America/Belem");
		$data = date("d/m/Y");
		$horario = date("H:i:s");
		?>
		<h4>Essa é uma variável do tipo string,
			para implementar uma variável do tipo string
			utilizamos aspas simples ('') ou duplas (""):
			<?php
				echo $string;
			?>
		</h4>
		<h4>
			Essa é uma variável do tipo números/integer:
			<?php
				echo $numero;
			?>
		</h4>
		<h4>
			Essa é uma variável do tipo array:
			<?php
				print_r($array);
			?>
		</h4>
		<h4>Data e Horário:
			<?php
			echo "Agora estamos no dia ", $data, " às ", $horario, ".";
			?>
		</h4>
	</body>
</html>

<?php
	$a = 120;
	function soma(){
		global $a;
		$x = $a + 40;
		return $x;
	}

	echo soma();
?>