<?php
require './../inc/head.tpl.php';
?>

<body> 
    
<?php
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
?>

<h1 class="display-4 text-center m-5 p-5 ">Formulaire envoyé !</h1>


<div class="alert text-center" role="alert">
<?= "Bonjour " . $prenom . " " . $nom . " !<br>Vous aurez une réponse dans les 24H à l'adressse mail suivante : <br>" . $email . ".<br/>A très bientôt !"; ?>
</div>

<?php
require './../inc/footer.tpl.php';
?>