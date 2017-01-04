<?php
$db = mysqli_connect('db617970139.db.1and1.com', 'dbo617970139', 'youtube01', 'db617970139');

if(mysqli_connect_errno()) {
	die('Un trop grand nombre de personnes essayent de se connecter en même temps,</br>le serveur a crash, le site redémarera dans quelques instants</br>Désolé du dérangement.');
	}
$db->set_charset("utf8");
?>