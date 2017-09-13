<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>category</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="category_add.php">category list</a>
	<?php 
		$mysqli=new mysqli("localhost","root","","n03");
		$mysqli->set_charset("utf8");
		//	truy van lay du lieu
		$strQuery="select * from category";
		if(!($result=$mysqli->query($strQuery))){
			die("Invalid query $strQuery");
		}
		?>
		<form>
	 	<table border="1" cellspacing="0">
	 			<tr>
	 				<td>id</td>
	 				<td>title</td>
	 				<td>content</td>
	 				<td>image</td>
	 			</tr>
 				<?php 
 					while ($row=$result->fetch_assoc()) {
 						echo "<tr>";
						echo "<td>{$row["id"]}</td>";
						echo "<td>{$row["title"]}</td>";
						echo "<td>{$row["content"]}</td>";
						echo "<td>{$row["image"]}</td>";
						echo "</tr>";
					}
 				 ?>
	 	</table>
	 	</form>
	 <?php 
		
		//var_dump($result);
		$mysqli->close();
	 ?>
</body>
</html>