<!-- create_user -->
<h2 class="alert alert-primary">Cadastrar Usuário</h2>
<a href="../" class="btn btn-secondary"><b>Home</b></a>
<hr>
<?=get('message');?>

<form action="/pages/forms/create_user.php" method="POST" role="form">

  <div class="form-group">
    <label for="">Nome</label>
    <input type="text" name="name" class="form-control" placeholder="Digite seu Nome" aria-describedby="helpId">
  </div>

  <div class="form-group">
    <label for="">Sobrenome</label>
    <input type="text" name="sobrenome" class="form-control" placeholder="Digite seu Sobrenome" aria-describedby="helpId">
  </div>

  <div class="form-group">
    <label for="">Email</label>
    <input type="text" name="email" class="form-control" placeholder="Digite seu Email" aria-describedby="helpId">
  </div>

  <div class="form-group">
    <label for="">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Digite seu Password" aria-describedby="helpId">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>