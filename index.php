<?php include ("traitement/traitement.php");?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<title></title>
	</head>
	<body>
		<h1> COMMANDEZ DÈS MAINTENANT</h1>
		</br>
		<h3> Menus </h3>
		<form method="post">
			<label for="menu-select">Sélectionnez un menu :</label>
			<select name="menu" id="menu-select">
				<option value="">--Veuillez choisir un menu--</option>
				<option value="kebab">Kebab</option>
				<option value="burger">Burger</option>
				<option value="tacos">Tacos</option>
				<option value="panini">Panini</option>
			</select>
			</br>
			</br>
			<h3> Sauces </h3>
			<span><input type="checkbox" name="mayonnaise" value="mayonnaise"/> mayonnaise</span>
			<span><input type="checkbox" name="ketchup" value="ketchup"/> ketchup</span>
			<span><input type="checkbox" name="moutarde" value="moutarde"/> moutarde</span>
			<span><input type="checkbox" name="poivre" value="poivre"/> poivre</span>
			</br>
			</br>
			<h3> Crudités</h3>
			<span><input type="checkbox" name="salade" value="salade"/> salade</span>
			<span><input type="checkbox" name="tomates" value="tomates"/> tomates</span>
			<span><input type="checkbox" name="oignons" value="oignons"/> oignons</span>
			<span><input type="checkbox" name="olives" value="olives"/> olives</span>
			</br>
			</br>
			<h3>Boissons</h3>
			<span><input type="checkbox" name="coca" value="coca"/> coca-cola</span>
			<span><input type="checkbox" name="vittel" value="vittel"/> vittel</span>
			<span><input type="checkbox" name="fanta" value="fanta"/> fanta</span>
			<span><input type="checkbox" name="perrier" value="perrier"/> perrier</span>
			</br>
			</br>
			<div class="submit">
				<input type="submit" value="Commander">
			</div>
			</br>
			<?php if (isset($echo)) echo "<h2>$echo.</h2>"; ?></form>
		</body>

	</html>
