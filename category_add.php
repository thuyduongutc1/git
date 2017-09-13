<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="post" >
		<table>
			<tr>
				<td>Title</td>
				<td><input type="text" name="title" value="" placeholder=""></td>
			</tr>
			<tr>
				<td>Content</td>
				<td><input type="text" name="content" value="" placeholder=""></td>
			</tr>
			<tr>
				<td>image</td>
				<td><input type="text" name="image" value="" placeholder=""></td>
			</tr>
			<tr>
				<td>image</td>
				<td><input type="submit" name="add" value="Add" ></td>
			</tr>
			
		</table>
	</form>
	<?php 
		if (isset($_POST["add"])) {
			$title=$_POST["title"];
			$content=$_POST["content"];
			$image=$_POST["image"];
			//echo "$title";

			$mysqli=new mysqli("localhost","root","","n03");
			$mysqli->set_charset("utf8");
			//	truy van lay du lieu
			$strQuery="INSERT INTO `category`( `title`, `content`, `image`) VALUES (\"$title\",\"$content\",\"$image\")";
			if(!($result=$mysqli->query($strQuery))){
				die("Invalid query $strQuery");
			}
			header("location:category.php");
			$mysqli->close();
		}
	 ?>
</body>
</html>