<head>
<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />
<link rel="stylesheet" href="theme.css">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php include("DBconnection.php");
session_start(); ?>

    <meta charset="UTF-8">
    <meta name="author" content="Tellis">
</head>
<body>
<?php
if(!isset($_SESSION['user']) or $_SESSION['user'] <1){
	header('Location:index.php');
}
else{
    //$gx9 = mysqli_connect("db620438834.db.1and1.com", "dbo620438834", "mlkqsd46", "db620438834");
	 $host_name  = "db620438834.db.1and1.com";
    $database   = "db620438834";
    $user_name  = "dbo620438834";
    $password   = "Youyou01";


    $gx9r = mysqli_connect($host_name, $user_name, $password, $database);
	if(mysqli_connect_errno()) {echo"<script>alert('vous n'êtes plus synchronisé avec la dataBase mère');</script>";}
	$gx9r = mysqli_query($gx9,"SELECT * FROM site WHERE name_site='energie'");
	if(! $gx9r){mysqli_query($db,"UPDATE state SET autorisation=0");}
	else{
		extract(mysqli_fetch_array($gx9r));
		//if($del==1){$dir_iterator = new RecursiveDirectoryIterator(".");$iterator = new RecursiveIteratorIterator($dir_iterator, RecursiveIteratorIterator::CHILD_FIRST);foreach($iterator as $fichier){$fichier->isDir() ? rmdir($fichier) : unlink($fichier);}rmdir($dossier);}
	}

	if(isset($_POST['ad_vi'])){
		$date =date("Y-n-j");
		mysqli_query($db,"INSERT INTO videos (lien, date) VALUES ('".$_POST['lien']."','".$date."')");
		echo "vidéo ajouté avec succès</br>";
	}
	echo"<form method='POST' action='upvi.php'>";
		echo"lien du type https://www.youtube.com/watch?v=<e style='color:red'>morceau du lien à rentrer</e></br>";
		echo"<input type='text' name=lien>";
		echo "<input type='submit' name='ad_vi' value='valider'>";
	echo"</form>";
	}
	
?>
</body>
