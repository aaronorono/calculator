<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
		table {
			margin: auto;
			border-collapse: collapse;
		}
		td {
			padding: 10px;
			
			text-align: center;
		}
		input[type="submit"] {
			display: block;
			margin: 10px auto;
			padding: 10px;
			font-size: 20px;
			background-color: gray;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>
</head>
<body class="d-flex justify-content-center p-20">
	<form action="calculator.php" method="post">
		<table>
			<tr>
				<td colspan="6">
					<input type="text" name="display" id="display" value="<?php if (isset($_POST['display'])) echo $_POST['display']; ?>">
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="button" value="1"></td>
				<td><input type="submit" name="button" value="2"></td>
				<td><input type="submit" name="button" value="3"></td>
				<td><input type="submit" name="button" value="+"></td>
			</tr>
			<tr>
				<td><input type="submit" name="button" value="4"></td>
				<td><input type="submit" name="button" value="5"></td>
				<td><input type="submit" name="button" value="6"></td>
				<td><input type="submit" name="button" value="-"></td>
			</tr>
			<tr>
				<td><input type="submit" name="button" value="7"></td>
				<td><input type="submit" name="button" value="8"></td>
				<td><input type="submit" name="button" value="9"></td>
				<td><input type="submit" name="button" value="*"></td>
			</tr>
			<tr>
				<td><input type="submit" name="button" value="C"></td>
				<td><input type="submit" name="button" value="0"></td>
				<td><input type="submit" name="button" value="="></td>
				<td><input type="submit" name="button" value="/"></td>
			</tr>
		</table>
	</form>

	<?php
		if (isset($_POST['button'])) {
			$display = isset($_POST['display']) ? $_POST['display'] : '';
			$button = $_POST['button'];

			if ($button == '=') {
				$result = eval("return $display;");
				echo "<script>document.getElementById('display').value = '$result';</script>";
			} else if ($button == 'C') {
				echo "<script>document.getElementById('display').value = '';</script>";
			} else {
				echo "<script>document.getElementById('display').value += '$button';</script>";
			}
		}
	?>
</body>
</html>
