<?php
  include_once "../../classes/Statements.php";

  $database = new Statements();
  $id = $_GET['id'];
  $result = $database->getUser($id);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/style.css">

    <title>Editar usuário</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <a href="/" class="navber-brand text-decoration-none fs-4 p-2 text-dark">Menu</a> 
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/pages/add.php">Adicionar usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Consultar usuários</a>
        </li>
      </ul>
  </nav>
  <div>
    <h1 class="fs-3 text-center mt-4">Editar dados</h1>
  </div>
  <main class="main-page">
    <form class="add-form" action="../actions/action_update.php?id=<?= $id?>" method="POST">
      <?php 
        foreach ($result as $data) {
          ?>
            <div class="mb-3">
              <label for="name" class="form-label">Nome</label>
              <input type="text" class="form-control" id="name" name="name" value="<?=$data['name']?>">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="<?=$data['email']?>" aria-describedby="emailHelp">
            </div>
            <?php
          if($data['status'] === "Inativo"){
            ?>
              <small><strong>Status</strong></small>
              <span class="form-check">
                <input class="form-check-input" name="status" id="status" type="checkbox" value="Ativo" />
                <label for="status" class="form-check-label">Ativar usuário</label>
              </span>
            <?php
          }
        }
        ?>
      </div>
      <button type="submit" class="btn btn-primary mt-2">Finalizar edição</button>
    </form>
  </main>
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>