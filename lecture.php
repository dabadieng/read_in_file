<?php
//si je reçois les données du formulaire
if (isset($_POST["btSubmit"])) {
	extract($_POST);
	if ($ressource = fopen("youtube_channel_link.txt", "a")) {
		fwrite($ressource,$titre . "\n");
		fwrite($ressource,$url . "\n");
		fwrite($ressource,"\n");
		fclose($ressource);
	} else {
		echo "ERREUR";
	}
}

$ressource = fopen("youtube_channel_link.txt", "r");

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Favoris Youtube</title>
</head>

<body>
	<?php
	$compteur = 1;
	while ($ligne = fgets($ressource)) {
		if ($compteur == 1)
			$titre = $ligne;
		else if ($compteur == 2)
			$lien = $ligne;
		else {
			?>
			<h2>
				<a href="<?= $lien ?>"><?= $titre ?></a>
			</h2>
	<?php
		} // fin Si 

		$compteur++;
		if ($compteur == 4)
			$compteur = 1;
	} ?>

	<form method="post">
		<p>
			<label for="titre">Titre de la chaine</label>
			<input type="text" id="titre" name="titre" />
		</p>
		<p>
			<label for="url">Url de la chaine</label>
			<input type="text" id="url" name="url" />
		</p>
		<input type="submit" name="btSubmit" value="Ajouter" />
	</form>
</body>

</html>