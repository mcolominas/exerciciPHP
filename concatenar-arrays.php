<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			$a1 = array( 'A','B','C','D');
			$a2 = array( 1,2,3,4,5,6,7);
			$a3 = array( 'Boli', 'Goma', 'Llapis', 'Escurça');
			$a = array( 'Lletres' => $a1, 'Números' => $a2, 'Materials Oficina' => $a3 );
			
			foreach( $a as $key=>$value ) {
				$separador = "";
				echo $key . ": ";
				foreach($value as $dato){
					echo $separador . $dato;  //concatenem el separador amb l'element
					$separador = ", ";
				}
				echo "<br>";
			}
		?>
	</body>
</html>