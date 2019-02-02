<!DOCTYPE html>
<html>
<head>
	<title>Ordine online</title>
	<link rel="stylesheet" type="text/css" href="orderstyle.css">
</head>
<body>
<div id="wrapper">
		<header>
			<h1>Selezionare i prodotti desiderati.</h1>
		</header>
		<form action="submit.php" method="post">
		<div id="prodotti">
			<div class="prodotti">
				<img src="img/crostata.jpg">
				<input type="hidden" name="crostata" value="0" >
				<input type="checkbox" name="crostata"value="1" >
			</div>
			<div class="prodotti">
				<img src="img/cupcake.jpg">
				<input type="hidden" name="cupcake" value="0" >
				<input type="checkbox" name="cupcake"value="1">
			</div>
			<div class="prodotti">
				<img src="img/freselline.jpg">
				<input type="hidden" name="freselline" value="0" >
				<input type="checkbox" name="freselline" value="1">
			</div>
			<div class="prodotti">
				<img src="img/pagnotta.jpg">
				<input type="hidden" name="pagnotta" value="0" >
				<input type="checkbox" name="pagnotta"value="1">
			</div>
			<div class="prodotti">
				<img src="img/treccia.jpg">
				<input type="hidden" name="treccia" value="0" >
				<input type="checkbox" name="treccia"value="1">
			</div>
			<div class="prodotti">
				<img src="img/baba.jpg">
				<input type="hidden" name="baba" value="0" >
				<input type="checkbox" name="baba" value="1">
			</div>
		</div>
	</div>
	<input type="submit">
	</form>

</body>
</html>