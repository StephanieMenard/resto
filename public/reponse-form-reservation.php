<?php
require './../inc/head.tpl.php';
?>

<body>

<?php
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$adresse = $_POST['adresse'];
$code_postal = $_POST['code_postal'];
$ville = $_POST['ville'];
$jour = $_POST['jour'];
$mois = $_POST['mois'];
$annee = $_POST['annee'];
$menuchoix = $_POST['menuchoix'];
$question = $_POST['question'];
?>

<h1 class="display-4 text-center mt-5 mb-5">Formulaire de reservation envoyé !</h1>

<div class="alert text-center" role="alert">
    <h2>Récapitulatif : </h2>

    <?= "Nom : " . $nom . 
    "<br/>Prenom : " . $prenom . 
    "<br/>Email : " .$email . 
    "<br/>Adresse complète : " . $adresse . " " . $code_postal . " " . $ville . 
    "<br/>Date de reservation : " . $jour . " " . $mois . " " . $annee . 
    "<br/> Menu : " . $menuchoix . 
    "<br/>Votre reservation a bien été pris en compte.";
    ?>
</div>

<?php
require './../inc/footer.tpl.php';
?>