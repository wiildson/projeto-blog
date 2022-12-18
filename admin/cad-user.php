<?php
include "session.php";
include "header.php";
?>
<form action="cad-userOK.php" method="POST" class="pt-5 pb-5">
	<h1>Cadastro de usuários</h1>	
	<div class="mb-3">
  	  <label class="form-label">Digite o nome do usuário:</label>
	  <input type="text" class="form-control" name="nome">
	</div>
	<div class="mb-3">
  	  <label class="form-label">Digite o login do usuário:</label>
	  <input type="text" class="form-control" name="login">
	</div>
	<div class="mb-3">
  	  <label class="form-label">Digite a senha do usuário:</label>
	  <input type="text" class="form-control" name="senha">
	</div>
	<div class="mb-3">
		<label class="form-label">Foto do Usuário:</label>
			<input type="file" class="form-control" id="formGroupExampleInput3" name="foto" placeholder="Insira uma imagem" name="image"/>
		</div>
<div class="mb-3">
		<button type="submit" class="btn btn-dark">Cadastrar Usuário</button>
	</div>
</form>
<?php include "footer.php";?>