<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	

	
<form action="preview.php" action="get">
	<?php 

	$crostata=$_POST['crostata'];
	$cupcake=$_POST['cupcake'];
	$freselline=$_POST['freselline'];
	$pagnotta=$_POST['pagnotta'];
	$treccia=$_POST['treccia'];
	$baba=$_POST['baba']; 
	if ($crostata==1) {
		echo 'Quante crostate <input type="text" name="qcrostata"<br/><br/><br/>';
	}
	else echo '<input type="hidden" name="qcrostata" value="0">';

	if ($cupcake==1) {
		echo 'Quanti cupcake <input type="text" name="qcupcake"><br/><br/>';
	}
	else echo '<input type="hidden" name="qcupcake" value="0">';

	if ($freselline==1) {
		echo 'Quante freselline <input type="text" name="qfreselline"><br/><br/>';
	}
	else echo '<input type="hidden" name="qfreselline" value="0">';

	if ($pagnotta==1) {
		echo 'Quante pagnotte? <input type="text" name="qpagnotta"><br/><br/>';
	}
	else echo '<input type="hidden" name="qpagnotta" value="0"><br/><br/>';

	if ($treccia==1) {
		echo 'Quante trecce? <input type="text" name="qtreccia"><br/><br/>';
	}
	else echo '<input type="hidden" name="qtreccia" value="0">';

	if ($baba==1) {
		echo 'Quanti babà? <input type="text" name="qbaba"><br/><br/>';
	}
	else echo '<input type="hidden" name="qbaba" value="0">';

	echo "$crostata";
	echo "$cupcake";
	echo "$freselline";
	echo "$pagnotta";
	echo "$treccia";
	echo "$baba";
?>
<input type="submit" name="submit">
	</form>
	

	
	



	
</body>
</html>