<h2>Create User</h2>
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
    <input type="text" name="password" class="form-control" placeholder="Digite seu Password" aria-describedby="helpId">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>