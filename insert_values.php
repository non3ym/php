<!DOCTYPE html>
<html lang="pl">

	<head>
		<title>INSERT VALUES</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body><center>
	
	<?php
		include ("config.php");
		
		if(isset($_GET['name'])){
			
			$name=$_GET['name'];
			$surname=$_GET['surname'];
			$country=$_GET['country'];
			$class=$_GET['class'];
			$age=$_GET['age'];
			
			$query='INSERT INTO students(name,surname,country,class,age) VALUES("'
			.$name.
			'","'
			.$surname.
			'","'
			.$country.
			'","'
			.$class.
			'","'
			.$age.
			'")';
			
			mysqli_query($connection, $query);
			
			echo '
				<h1 class=header>Student is added!</h1><br>
				
				<a href="index.php" class="back_to_index_button">Go home!</a>
				<br><br><br>
				<a href="insert_values.php" class="back_to_index_button">Add another one!</a>
			';
			
		}else{
			
		echo '	
		<h1 class="header">You need to fill every blank!</h1>
		<form action="insert_values.php" method="GET">
			<table>
				<tr>
					<td class="formula">NAME</td>
					<td><input name="name"></td>
				</tr>
				<tr>
					<td class="formula">SURNAME</td>
					<td><input name="surname"></td>
				</tr>
				<tr>
					<td class="formula">COUNTRY</td>
					<td><input name="country"></td>
				</tr>
				<tr>
					<td class="formula">CLASS</td>
					<td><input name="class"></td>
				</tr>
				<tr>
					<td class="formula">AGE</td>
					<td><input name="age"></td>
				</tr>	
			</table>
			<br><br><button>SUBMIT</button>
		</form>
		
		<br>
		<br>
		<br>
		
		<a href="index.php" class="back_to_index_button">Go back!</a>
		';}
	?>
	</center></body>
</html>