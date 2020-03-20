<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="#">Partiel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="public/inscription.php">Inscription</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="public/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="email.php">Email</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="news.php">Nouvel utilisateur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="public/admin/modify.php">Modifier utilisateur</a>
      </li>

      <?php 
      // bouton deconnexion
      @session_start();
      if (isset($_SESSION) && $_SESSION['state'] == 'connected') { ?>
        <li class="nav-item">
          <a class="nav-link" href="../public/admin/logout.php">Déconnexion</a>
        </li>
      <?php } ?>

    </ul>
  </div>
</nav>