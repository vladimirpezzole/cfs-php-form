<h2>Contato</h2>
<br>  
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
