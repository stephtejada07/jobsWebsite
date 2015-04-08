<?php 
	// Create connection
	try {
		require_once "connect.php";
	}
	catch (Exception $e) {
		$error = $e->getMessage();
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Database Connection with PDO</title>
</head>
<body>
<h1>Connecting with PDO</h1>


<?php 
// Code to test the connection
if ($db) {
    echo "<p>Connection successful.</p>";
} 
elseif (isset($error)) {
    echo "<p>$error</p>";
}
?>
</body>
</html>