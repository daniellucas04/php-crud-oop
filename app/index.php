<?php
include_once "classes/Statements.php";

$database = new Statements();

$search = $_GET['search'] ?? null;
if(empty($search) || $search === "Todos"){
	$result = $database->getData();
}else{
	$result = $database->getData($search);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/style.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <a href="/" class="navber-brand text-decoration-none fs-4 p-2 text-dark">Menu</a> 
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/pages/add.php">Adicionar usuário</a>
        </li>
      </ul>
    </div>
  </nav>
  <main class="d-flex flex-column align-items-center justify-content-center">
    <h1 class="text-center fs-2 fw-bold lh-sm mt-4">Usuários cadastrados</h1>
    <div class="d-flex align-items-center justify-content-center text-center">
      <div style="width: 20em" class="text-center d-flex gap-2">
        <select id="status" value="Ativo" class="form-select">
          <option value="Todos" <?php if($search == "Todos") echo "selected"; ?> >Todos</option>
          <option value="Ativo" <?php if($search == "Ativo") echo "selected"; ?>>Ativo</option>
          <option value="Inativo" <?php if($search == "Inativo") echo "selected"; ?>>Inativo</option>
        </select>
        <button id="filterButton" class="btn btn-secondary" type="button">Filtrar</button>
      </div>
    </div>
    <div class="main-table mt-4">
      <table style="width: 100%;" class="table table-white table-striped table-hover text-center p-3 mx-auto">
        <thead>
          <tr>
            <th width="4%"  scope="col">#</th>
            <th width="10%" scope="col">Nome</th>
            <th width="15%" scope="col">Email</th>
            <th width="5%"  scope="col">Status</th>
            <th width="15%" scope="col">Data de Criação</th>
            <th width="15%" scope="col">Data de Atualização</th>
            <th width="15%" >Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            if($database->getRowsNumber() > 0){
              foreach ($result as $row) {
                ?>
                  <tr id="table-row">
                    <td><?= $row['id']?></td>
                    <td><?= $row['name']?></td>
                    <td><?= $row['email']?></td>
                    <td><?= $row['status'] ?></td>
                    <td><?= $row['created_at'] ?></td>
                    <td><?= $row['updated_at'] ?></td>
                    <td class="d-flex justify-content-center gap-3">
                      <a href="/pages/edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm text-center"><ion-icon style="font-size: 20px" name="create"></ion-icon></a>
                      <?php
                        if($row['status'] === "Ativo"){
                          ?>
                            <a href="/actions/action_delete.php?id=<?php echo $row['id']; ?>" class="d-flex align-items-center btn btn-danger btn-sm text-center deleteButton"><ion-icon style="font-size: 20px" name="close-circle"></ion-icon></a>
                          <?php
                        }else{
                          ?>
                            <a class="disabled d-flex align-items-center btn btn-danger btn-sm text-center"><ion-icon style="font-size: 20px" name="close-circle"></ion-icon></a>
                          <?php
                        }
                      ?>
                    </td>
                  </tr>
                <?php 
              }
            }else{
              ?>
                <h1 class="fs-3 text-center">Nenhum usuário cadastrado</h1>
              <?php
            }
          ?>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>
<script src="./js/script.js" />
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>