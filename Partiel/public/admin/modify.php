<?php
require_once '../../functions/utilisateur.php';
require_once '../..layout/header.php';
?>

<h1>Editer utilisateur</h1>

<?php if (!isset($_GET['id'])) { ?>
  <div class="alert alert-danger" role="alert">
    Paramètre manquant : id
  </div>
  <?php
  exit;
}

$id = $_GET['id'];

if (isset($_POST['login']) && isset($_POST['pass'])) {
  $login = $_POST['login'];
  $password = $_POST['pass'];
  $confirm_password = $_POST['pass'];
  $visible = isset($_POST['visible']) ? 1 : 0;

  $update = editUtilisateur(
    $id,
    $login,
    $password,
    $confirm_password
  );
  
  var_dump($update);
}