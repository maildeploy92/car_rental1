<?php 
		if (function_exists('conectar')){

		} else {

		function conectar(){
		   
				//$connection = mysqli_connect("localhost", 'root', '', 'cl_water_sys');	

				$user = getenv('CLOUDSQL_USER');
				$pass = getenv('CLOUDSQL_PASSWORD');
				$inst = getenv('CLOUDSQL_DSN');
				$db = getenv('CLOUDSQL_DB');
				$conn = mysqli_connect( myphpapp-321304.uc.r.appspot.com, $user, $pass, $db, null, $inst);
			/*	$now = new DateTime();
				$mins = $now->getOffset() / 60;
				$sgn = ($mins < 0 ? -1 : 1);
				$mins = abs($mins);
				$hrs = floor($mins / 60);
				$mins -= $hrs * 60;
				$offset = sprintf('%+d:%02d', $hrs*$sgn, $mins);
				$connection->query("SET time_zone='$offset'");
			    $connection->query("SET lc_time_names = 'es_ES'"); 
				
				<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "cars";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>
				*/
				if (!$conn) {
						echo "Error!".mysqli_connect_error();
					}
				
				return $conn;
		}
		}

		
?>

		