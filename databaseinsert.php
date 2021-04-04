<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
	<title>MySQL Databases with and PHP</title>
</head>

<body>
	<?php
	// sql info or use include 'file.inc'
	// require_once('../../conf/sqlinfo.inc.php');
	require_once('conf/sqlinfo.inc.php');

	$conn = new mysqli(
		$sql_host,
		$sql_user,
		$sql_pass,
		$sql_db
	);

	// Checks if connection is successful
	if ($conn -> connect_errno) {
		echo "Failed to connect to MySQL: " . $conn -> connect_error;
		exit();
	} else {
		$query = "SELECT * FROM  {$sql_tble}";
		echo $query;
		// executes the query
		$result = mysqli_query($conn, $query);
		echo $result;
		// checks if the execution was successful
		if (!$result) {
			echo "<p>Something is wrong with ",	$query, "</p>";
		} else {
			// display an operation successful message
			echo "<p>Success</p>";
		} // if successful query operation

		// close the database connection
		mysqli_close($conn);
	}  // if successful database connection
	?>
</body>

</html>