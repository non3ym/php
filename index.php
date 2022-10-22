<!DOCTYPE html>
<html lang="pl">

	<head>
		<title>SQL-MANAGMENT</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body><center>
	<?php
	include ("config.php");

	echo'<h1 class="header">| '.$table.' table data |</h1><br>
	<table>
	<tr>
		<td class="table_header">ID</td>
		<td class="table_header">Name</td>
		<td class="table_header">Surname</td>
		<td class="table_header">Country</td>
		<td class="table_header">Class</td>
		<td class="table_header">Age</td>
	</tr>
	';

	$query = mysqli_query($connection,"SELECT * FROM students");
			 while($line = mysqli_fetch_assoc($query))
					{
					echo '<tr>
					<td>'.$line["id"].'</td>
					<td>'.$line["name"].'</td>
					<td>'.$line["surname"].'</td>
					<td>'.$line["country"].'</td>
					<td>'.$line["class"].'</td>
					<td>'.$line["age"].'</td>
					</tr>';
					}
	echo "</table>";
	?>
	<br>
	<br>
	<br>

	<a href="insert_values.php" id="add_button">Add values to database</a>

	</center></body>
</html>