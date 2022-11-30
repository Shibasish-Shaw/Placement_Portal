<?php
session_start();
?>
<! DOCTYPE html>
<html>
<body>
	<?php
	echo "string";
	//remove all session veriables
	session_unset();
	// destroy the session
	session_destroy();
	header('Location:index.php');
	?>
	
</body>
</html>