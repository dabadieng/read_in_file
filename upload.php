<?php
var_dump($_POST);
var_dump($_FILES);

if (isset($_POST["btSubmit"])) {
	if (is_uploaded_file($_FILES['monfichier']['tmp_name'])) {
		$fichier=$_FILES['monfichier']['name'];
		move_uploaded_file($_FILES['monfichier']['tmp_name'],"doc/" . $fichier);
	}
}	
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<script>
	function afficher()
	{
		let o=document.getElementById("monfichier");
		let oinfo=document.getElementById("info");
		oinfo.innerHTML +="nom : " + o.files[0].name + "<br>";
		oinfo.innerHTML +="taille : " + o.files[0].size + "<br>";
		oinfo.innerHTML +="type : " + o.files[0].type + "<br>";
		oinfo.focus();
	}
</script>
<body>
    <h3>Upload</h3>
    <form enctype="multipart/form-data" method="post">
        Envoyez un fichier : <input type="file" name="monfichier" id="monfichier" onchange="afficher()"/><BR>		
		<span id="info"></span><BR>
        <input type="submit" value="Envoyer le fichier" name="btSubmit" />
	</form>
</body>
</html>