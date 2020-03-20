<?php require_once "../layout/header.php"; ?>

<div class="container mt-4">
<h1>Inscrivez-vous</h1>
<form action="contact_process.php" method="POST">
    <div class="form-group">
      <label for="login">Login</label>
      <input type="text" class="form-control" id="login" name="login">
    </div>
    <div class="form-group">
      <label for="pass">Mot de passe</label>
      <input type="text" class="form-control" id="pass" name="pass">
    </div>
    <div class="form-group">
      <label for="pass">Confirmation mot de passe</label>
      <input type="text" class="form-control" id="pass" name="pass">
    </div>
</form>
</div>

<?php require_once "../functions/db.php"; ?>

<?php

if (!empty($_POST) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['email'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];

function insertUtilisateur(string $name, string $email, string $password, string $confirm_password): bool
{
    if ($password === $confirm_password) {
        $pdo = getPdo();
        $query = 'INSERT INTO users (login, email, password, active) VALUES (:name, :email, :pass)';
        $stmt = $pdo->prepare($query);
        return $stmt->execute([
            'login' => $login,
            'email' => $email,
            'pass' => password_hash("randompassword", PASSWORD_BCRYPT, ['cost' => 12]),
            'is_active' => 1 ]);
    }
    else { ?>
        <div class="alert alert-danger" role="alert">
        Le mot de passe n'est pas identique.
        </div>
   <?php }  

} } ?>

<?php require_once "../layout/footer.php"; ?>