<?php
if (!empty($_POST["txtNaam"])) {
	setcookie("ingevuldeNaam", $_POST["txtNaam"], time() + 120);
	$naam = $_POST["txtNaam"];
} else {
	$naam = $_COOKIE["ingevuldeNaam"];
}
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cookies</title>
</head>

<body>

	<?php if (isset($naam)){ print("Welkom, ") . $naam; } ?>
    <form action="cookies.php" method="post">
    	Uw Naam: <input type="text" name="txtNaam" value="<?php print($naam);?>">
        <input type="submit" value="Versturen">
        </form>
        <br>
        <a href="cookies.php"> Vernieuw de pagina </a>
	

</body>
</html>