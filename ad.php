<?php
session_start();
include('DBconnection.php');
?>
<head>
<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />
<link rel="stylesheet" href="theme.css">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

    <meta charset="UTF-8">
    <meta name="author" content="Tellis">
</head>
<?php
echo "</br> condition isset :".isset($_SESSION['user']);
if(isset($_SESSION['user'])){
	echo "</br>condition user :".$_SESSION['user']."</br>";
}
if(isset($_SESSION['user']) && $_SESSION['user'] >=1){


	?>
	<script type="text/javascript">
	  function reponseD(){
		confirm("C'est votre dernière baffouille?");
		document.location.href="https://www.youtube.com/watch?v=-xgwd5kLiDY";
		}
	</script>
	Qu'est que tu es venu faire ici? </br>
	réponse A : <button onclick='document.location.href="upvi.php";' >ajouter une vidéo</button></br>
	réponse B : <button onclick='document.location.href="upma.php";' >ajouter un mods</button></br>		
	réponse C : <button onclick='document.location.href="srqp.php";' >Ajouter une news</button></br></br>
	réponse D : <button onclick='reponseD();'>la réponse D</button></br></br>
	réponse D : <button onclick='document.location.href="momo.php";' >supprimer mods</button></br>
	réponse E : <button onclick='document.location.href="mimo.php";' >Supprimer videos</button></br>
	réponse E : <button onclick='document.location.href="delne.php";' >Supprimer news</button></br>
	
<?php
	}
	elseif(isset($_POST['valider'])){
		$Result = mysqli_query($db,"SELECT * FROM user WHERE user='".$_POST['ndc']."' AND pass='".$_POST['mdp']."'");
		if($line = mysqli_fetch_array($Result)){
			extract($line);
			$_SESSION['user']=$id_user;
			echo "<script language='javascript'>document.location='ad.php'</script>"; 
		}
		echo "mauvais logs";
	}
	else{
		echo "<form method='POST' action='ad.php'>";
			echo "user : <input type='text' name='ndc'></br>";
			echo "mot de passe : <input type='password' name='mdp'></br>";
			echo "<INPUT TYPE='submit' NAME='valider' VALUE=' Envoyer '>";
		echo "</form>";
	}




