<!-- edit_user -->
<h2 class="alert alert-primary">Editar Cadastro de Usuário</h2>
<a href="../" class="btn btn-secondary"><b>Home</b></a>
<hr>
<?=get('message');?>

<?php 
  $user = find('users', 'id', $_GET['id']);
?>

<form action="/pages/forms/update_user.php" method="POST" role="form">

  <div class="form-group">
    <label for="">Nome</label>
    <input type="text" name="name" class="form-control" placeholder="Digite seu Nome" aria-describedby="helpId" value="<?=$user->name;?>">
  </div>

  <input type="hidden" name="id" value="<?=$user->id;?>">

  <div class="form-group">
    <label for="">Sobrenome</label>
    <input type="text" name="sobrenome" class="form-control" placeholder="Digite seu Sobrenome" aria-describedby="helpId" value="<?=$user->sobrenome;?>">
  </div>

  <div class="form-group">
    <label for="">Email</label>
    <input type="text" name="email" class="form-control" placeholder="Digite seu Email" aria-describedby="helpId" value="<?=$user->email;?>">
  </div>

  <button type="submit" class="btn btn-primary">Atualizar</button>
</form>