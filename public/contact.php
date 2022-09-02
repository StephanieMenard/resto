<?php
require './../inc/head-partials.tpl.php';
?>

<body>

    <h1 class="display-4 text-center mt-5 mb-5">Des questions avant de réserver ?</h1>
    
    <!--FORMULAIRE CONTACT-->
    <div class="container p-5">
        <form method="post" action="reponse-form-contact.php">
            <div class="row">
                <div class="col">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="Votre nom" aria-label="nom" id="nom"
                        required>
                </div>
                <div class="col">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" class="form-control" placeholder="Votre prénom" aria-label="prenom"
                        id="prenom" required>
                </div>
                <div class="col">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Votre email" aria-label="email"
                        id="email" required>
                </div>
            </div>
            <div class="form-group pt-3">
                <label for="question">Posez votre question içi :</label>
                <textarea name="question" class="form-control" id="question" rows="3"></textarea>
            </div>
            <button type="submit" class="bouton btn btn-lg mt-3" id="bouton_question">Envoyer</button>
        </form>
    </div>

<?php
require './../inc/footer-partials.tpl.php';