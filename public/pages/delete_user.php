<!-- delete_user -->
<?php 

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$deletado = delete('users', 'id', $id);

if ($deletado) {
  
      echo "<br><hr><center><h2 class='alert alert-warning'>Deletado!</center></h2>";
      
      return redirectToHome();
    }
    
    flash('messege', 'Erro ao deletar!');
    redirectToHome();
    echo "<br><hr><center><h2 class='alert alert-danger'>Erro ao deletar!</center></h2>";
