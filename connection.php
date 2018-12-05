<?php
$conn = mysqli_connect('localhost', 'root', 'my password');
if (!$conn) {
	echo "Database connection failed: " .mysqli_error($conn);
}
else{
	$db_select = mysqli_select_db($conn,'kunata');
	if (!$db_select) {
		echo "Database selection failed: " .mysqli_error($conn);
	}
}

session_start();
ob_start();

?>