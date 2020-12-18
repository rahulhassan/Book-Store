<?php 
	require_once 'controller/booksController.php';
	$id = $_GET["id"];
	$b = getBook($id);

?>
<html>
	<head>
		<title>Book Details</title>
		<style>
			body{
				width: 860px;
				margin-left: auto;
				margin-right: auto;
			}
			table{
				width: 600px;
				margin-left: auto;
				margin-right: auto;
				margin-top: 20%;
			}
			table tr td{
				padding: 10px;
			}
		</style>
	</head>
	<body>
		<table>
			<tr>
				<td>
					<img src="<?php echo $b["bookimage"];?>"></img>
				<td>
					<h1><?php echo $b["name"];?></h1>
					<h2>By<?php echo " ".$b["author"];?></h2>
					<h3>Edition<?php echo " ".$b["edition"];?></h3>
					<p align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</td>
			</tr>
		</table>
	</body>
</html>