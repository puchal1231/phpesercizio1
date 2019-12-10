<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
<?php
$prezzocrostata = 2.5;
$prezzocupcake = 1.5;
$prezzofreselline = 1.25;
$prezzopagnotta = 1.15;
$prezzobaba = 4.50;
$prezzotreccia = 1.15;
$qtreccia = $_GET['qtreccia'];
$qcrostata = $_GET['qcrostata'];
$qpagnotta = $_GET['qpagnotta'];
$qcupcake = $_GET['qcupcake'];
$qbaba = $_GET['qbaba'];
$qfreselline = $_GET['qfreselline'];
$somma =
	($qcrostata * $prezzocrostata) +
	($qtreccia * $prezzotreccia) +
	($qpagnotta * $prezzopagnotta) +
	($qcupcake * $prezzocupcake) +
	($qbaba * $prezzobaba) +
	($qfreselline * $prezzofreselline);

	
  ?>
  <form action="grazie.php" method="get">
  <table border="1" cellpadding="10" cellspacing="0">
  	<tr>
  		<td>Quantità e prodotto</td>
  		<td>Prezzo </td>
  	</tr>
	<?php if($qtreccia != 0){ ?>
  	<tr>
  		<td><?php echo "q.tà treccia $qtreccia"; ?></td>
  		<td><?php echo "$prezzotreccia";  ?></td>
  	</tr>
	<?php } ?>
	<?php if($qbaba != 0){ ?>
  	<tr>
  		<td><?php echo "q.tà babà $qbaba"; ?></td>
  		<td><?php echo "$prezzobaba"; ?></td>
  	</tr>
	<?php } ?>
	<?php if($qcrostata != 0){ ?>
  	<tr>
  		<td><?php echo "q.tà crostata $qcrostata"; ?></td>
  		<td><?php echo "$prezzocrostata"; ?></td>
  	</tr>
	<?php } ?>
	<?php if($qcupcake != 0){ ?>
  	<tr>
  		<td><?php echo "q.tà cupcake $qcupcake"; ?></td>
  		<td><?php echo "$prezzocupcake"; ?></td>
  	</tr>
	<?php } ?>
	<?php if($qpagnotta != 0){ ?>
  	<tr>
  		<td><?php echo "q.tà pagnotta $qpagnotta"; ?></td>
  		<td><?php echo "$prezzopagnotta"; ?></td>
  	</tr>
	  <?php } ?>
	  <?php if($qfreselline != 0){ ?>
  	<tr>
  		<td><?php echo "q.tà freselline $qfreselline"; ?></td>
  		<td><?php echo "$prezzofreselline"; ?></td>
  	</tr>
	  <?php } ?>
  	<tr>
  		<td><?php echo "Totale ordine:"; ?></td>
  		<td><?php echo "$somma"; ?></td>
  	</tr>

  </table>
  <br/> <br/> <br/>
<input type="submit" name="Conferma" value="Conferma ordine">
  </form>
</body>
</html>