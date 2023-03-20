<!-- contato -->
<h2 class="alert alert-primary">Enviar Messagem</h2>
<div class="d-flex justify-content-between">
  <a href="/" class="btn btn-secondary"><b>Home</b></a>
  <a href="https://mailtrap.io/inboxes/" target="_blank" class="btn btn-info"><b>mailtrap.io</b></a>
</div>
<hr>
<?=get('message');?>

<form action="../pages/forms/contato.php" method="POST" role="form">
 
  <div class="form-group">
    <label for="">Nome</label>
    <input type="text" name="name" class="form-control" placeholder="Digite seu Nome" aria-describedby="helpId">
  </div>

  <div class="form-group">
    <label for="">Email</label>
    <input type="text" name="email" class="form-control" placeholder="Digite seu Email" aria-describedby="helpId">
  </div>
  
    <div class="form-group">
      <label for="">Assunto</label>
      <input type="text" name="subject" class="form-control" placeholder="Digite seu Assunto" aria-describedby="helpId">
    </div>

  <div class="form-group">
    <label for="">Mensagem</label>
    <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
