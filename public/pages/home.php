<h2 class="alert alert-primary">HOME</h2>
<a href="?page=create_user" class="btn btn-primary">Cadastrar Usuãrio</a>
<a href="?page=contato" class="btn btn-secondary">Enviar Mensagem</a>
<br><hr>

<?=get('messege'); ?>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <td>Id</td>
      <td>Nome</td>
      <td>Email</td>
      <td></td>
      <td></td>
    </tr>
  </thead>
  <tbody>
    
    <?php
    $users = all('users');
    foreach ($users as $user):
    ?>

    <tr>
      <td><?= $user->id; ?></td>
      <td><?= $user->name; ?></td>
      <td><?= $user->email; ?></td>
      <td>
        <a href="?page=edit_user&id=<?=$user->id;?>" class="btn btn-success">Editar</a>
      </td>
      <td>
        <a href="?page=delete_user&id=<?=$user->id;?>" class="btn btn-danger">Deletar</a>
      </td>
    </tr>

    <?php endforeach;?>
  </tbody>
</table>
