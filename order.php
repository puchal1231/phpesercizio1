<!DOCTYPE html>
<html>
<head>
	<title>Riasunto ordine</title>
</head>
<body>
<?php
	$panini=$_POST['panini'];
	$baguette=$_POST['baguette'];
	$krapfen=$_POST['krapfen'];
	$somma = 0.12*$panini+ 0.99*$baguette+0.50*$krapfen;

echo <<<END
<h1>Vostro Ordine</h1>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
<td>Panini(0.12€/pezzo)</td>
<td>$panini</td>
</tr>
<tr>
<td>Baguette(0.99€/pezzo)</td>
<td>$baguette</td>
</tr>
<tr>
<td>Krapfen(0.50€/pezzo)</td>
<td>$krapfen</td>
</tr>
<tr>
<td>Somma</td>
<td>$somma €</td>
</tr>
</table>
 

END;
?>
</body>
</html>
