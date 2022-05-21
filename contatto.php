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

	echo $_SESSION['username'];
	


?>	



</body>
</html>