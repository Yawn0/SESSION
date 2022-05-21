<?php

	session_start();

?>

<!doctype html>
<html>
<head>
<title>Lezione Sessione</title>
</head>

<body>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="contatto.php">Contatto</a></li>
	</ul>

<?php

	$_SESSION['username']="Americanboy";
	echo $_SESSION['username'];

	if(!isset($_SESSION['username'])){
		echo "Non sei loggato!!";
	}else{
		echo "<br>"."Sei loggato!!";
	}
?>	



</body>
</html>