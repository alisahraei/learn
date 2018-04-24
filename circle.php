<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{
		background-color: #d6d6c2;
		direction: rtl;
		font-size: 25px;

	}
	input, p {
		margin: 10px;
	}
	table, th, td {
    	border: 1px solid black;
    	padding: 5px;
    	margin: 5px;
	}
	</style>
</head>
<body>
<?php
	$r = $_POST['r'];
	$qotr = $r*2;
	$m = $qotr * pi();
	$mas = $r * $r * pi();

?>

	 <br>
	 <form method="post">
	 	 <p>شعاع دایره:</p>
		 <input type="number" name="r"><br>
		 <input type="submit" name="sub">
	 </form>
	 <div>
	 	<table>
	 		<tr>
	 			<th colspan="2">نتایج</th>

	 		</tr>
	 		<tr>
	 			<th>شعاع وارد شده:</th>
	 			<th><b><?php echo $r; ?></b></th>

	 		</tr>

	 		<tr>
	 			<th> قطر:</th>
	 			<th><b><?php echo $qotr; ?></b></th>

	 		</tr>

	 		<tr>
	 			<th>محیط:</th>
	 			<th><b><?php echo $m; ?></b></th>

	 			</tr>
	 		<tr>

	 			<th>مساحت:</th>
	 			<th><b><?php echo $mas; ?></b></th>
	 		</tr>
	 	</table>
	 </div>
</body>
</html>
