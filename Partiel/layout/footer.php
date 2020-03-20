<div class="text-center">
  Partiel PHP 20.03.2020
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

<div class="container mt-4">
  <h1>Inscrivez-vous à la newsletter</h1>
  <form action="contact_process.php" method="POST">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" name="email" aria-describedby="nomHelp">
      <small id="emailHelp" class="form-text text-muted">toby@gmail.com</small>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>
<?php 
$insert = null;

if (!empty($_POST) && !empty($_POST['email'])) {
  $email = $_POST['email'];
  $insert = insert_email($email);
}

if ($insert) { ?>
    <div class="alert alert-success" role="alert">
      Votre email a bien été enregistrée ! (fonctionne vraiment) <a href="/">Retour à la page</a>
    </div>
  <?php } ?>
  
  <?php if ($insert === false) { ?>
    <div class="alert alert-danger" role="alert">
      Une erreur est survenue
    </div>
  <?php } 

  function insert_email(string $email): bool
{
  $pdo = getPdo();

  $query = "INSERT INTO newsletter (email) VALUES (:email)";
  $stmt = $pdo->prepare($query);
  return $stmt->execute([
    'email' => $email
  ]);
}
?>
</html>