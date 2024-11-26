<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adicionar usuário</title>
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/style.css">

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <a href="/" class="navber-brand text-decoration-none fs-4 p-2 text-dark">Menu</a> 
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Consultar usuários</a>
          </li>
        </ul>
      </div>
    </nav>
  <div>
    <h1 class="fs-3 text-center mt-4">Crie um novo usuário</h1>
  </div>
  <main class="main-page">
    <form  class="add-form" action="../actions/action_create.php" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input required type="text" class="form-control" placeholder="John doe" id="name" name="name" >
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input required type="email" class="form-control" placeholder="your@email.com"  id="email" name="email" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input required  length="8" type="password" class="form-control" placeholder="*********" id="password" name="password">
      </div>
      <button type="submit" class="btn btn-success btn-md">Submit</button>
    </form>
  </main>
  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>