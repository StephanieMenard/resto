<?php
require './../inc/head-partials.tpl.php';
?>
<body>

  <h1 class="display-4 text-center mt-5 mb-5">Formulaire de réservation</h1>

<!--FORMULAIRE RESERVATION-->
<div class="container">
  <form method="post" action="reponse-form-reservation.php">    

    <div class="row">
      <div class="col">
        <label for="nom">Nom</label>
        <input type="text" name="nom" class="form-control" placeholder="Votre nom" aria-label="nom" id="nom" required>
      </div>
      <div class="col">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" class="form-control" placeholder="Votre prénom" aria-label="prenom" id="prenom" required>
      </div>
      <div class="col">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Votre email" aria-label="email" id="email" required>
      </div>
    </div>   

    <div class="row">
      <div class="col">
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" class="form-control" placeholder="Votre adresse" aria-label="adresse" id="adresse" required>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="ville">Code postal</label>
        <input type="text" name="code_postal" class="form-control" placeholder="Code postal" aria-label="cp" id="code_postal" maxlength="5" required>
      </div>
      <div class="col">
        <label for="ville">Ville</label>
        <input type="text" name="ville" class="form-control" placeholder="Ville" aria-label="ville" id="ville" required>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="jour" class="form-label">Date de reservation : </label>
        <i class="bi bi-calendar-date"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
        <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
        </svg>
        <select name="jour" class="form-select" id="jour" required>
        <option selected disabled value="">Jour</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option>18</option>
                  <option>19</option>
                  <option>20</option>
                  <option>21</option>
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
                  <option>26</option>
                  <option>27</option>
                  <option>28</option>
                  <option>29</option>
                  <option>30</option>
                  <option>31</option>
        </select>
      </div>
      <div class="col">
        <label for="mois" class="form-label">  </label>
        <span id="choix_mois_manquant"></span>
        <select name="mois" class="form-select" id="mois" required>
        <option selected disabled value="">Mois</option>
            <option>Janvier</option>
            <option>Février</option>
            <option>Mars</option>
            <option>Avril</option>
            <option>Mai</option>
            <option>Juin</option>
            <option>Juillet</option>
            <option>Août</option>
            <option>Septembre</option>
            <option>Octobre</option>
            <option>Novembre</option>
            <option>Décembre</option>
        </select>
      </div>
    <div class="col">
      <label for="annee" class="form-label">  </label>
      <select name="annee" class="form-select" id="annee" required>
        <option selected disabled value="">Année</option>
            <option>2021</option>
            <option>2022</option>
      </select>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="menuchoix" class="form-label">Choisissez votre menu : </label>
      <select  name="menuchoix" class="form-select" id="menuchoix" required>
      <option selected disabled value="">Catégories</option>
          <option>Menu standard</option>
          <option>Menu medium</option>
          <option>Menu premium</option>
          <option>Diner romantique</option>
          <option>Anniversaire</option>
          <option>Mariage</option>
          <option>Familial</option>
      </select>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <label for="question">Précisions sur votre commande :</label>
      <textarea name="question" class="form-control" placeholder="Préciser vos choix (entrée, plat, desssert, gateau d'anniversaire, etc)." id="question" rows="3"></textarea>
    </div>
  </div>

<button type="submit" class="bouton btn btn-lg mt-3" id="bouton_reservation">Reserver</button>
  </form>
</div>

<?php
require './../inc/footer-partials.tpl.php';