<!--CARTE MENU-->
<div class="container">
  <h1 class="display-4 text-center text-dark mb-5"><?= $menu['titre'] ?></h1>
  <div class="row" style="max-width:700px; margin:auto;">
    <div class="col">
      <div class="card  mb-3">

        <div class="carte card-header text-center "><?= $menu['titre'] ?>
        </div>

        <div class="card-body">

          <h5 class="card-title text-center">Entrée au choix</h5>
          <p class="card-text">
            <ul>
              <li><?= $menu['entree1'] ?></li>
            </ul>
            <ul>
              <li><?= $menu['entree2'] ?></li>
            </ul>
            <ul>
              <li><?= $menu['entree3'] ?></li>
            </ul>
          </p>

          <h5 class="card-title text-center">Plat au choix</h5>
          <p class="card-text">
            <ul>
              <li><?= $menu['plat1'] ?></li>
            </ul>
            <ul>
              <li><?= $menu['plat2'] ?></li>
            </ul>
          </p>

          <h5 class="card-title text-center">Dessert au choix</h5>
          <p class="card-text">
            <ul>
              <li><?= $menu['dessert1'] ?></li>
            </ul>
            <ul>
              <li><?= $menu['dessert2'] ?></li>
            </ul>
          </p>

          <h5 class="card-title text-center">Vins au choix</h5>
          <p class="card-text">
            <ul>
              <li><?= $menu['vin1'] ?></li>
            </ul>
            <ul>
              <li><?= $menu['vin2'] ?></li>
            </ul>
            <ul>
              <li><?= $menu['vin3'] ?></li>
            </ul>
          </p>

        </div>

        <div class="carte card-footer border-secondary text-center"><?= $menu['prix'] ?> 
        <a href="../public/reservation.php" class="boutonMenu btn">Réserver</a>
        </div>

      </div>
    </div>
  </div>
</div>


<!--CARROUSEL-->
<div class="container mt-5 p-5 py-5">

  <h2 class="display-4 text-center text-dark mb-5">Galerie photo</h2>
  
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= $menu['carousel1'] ?>" class="d-block w-100" style="height:800px;" alt="image carrousel1">
      </div>
      <div class="carousel-item">
        <img src="<?= $menu['carousel2'] ?>" class="d-block w-100" style="height:800px;" alt="image carrousel2">
      </div>
      <div class="carousel-item">
        <img src="<?= $menu['carousel3'] ?>" class="d-block w-100" style="height:800px;" alt="image carrousel3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>