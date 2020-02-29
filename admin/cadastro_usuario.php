<?php require '../exe/conexao_exe.php'; ?>
<!--==========================
  Cadastro de Usuario
  ============================-->
  
<h1 align="center">Cadastro de Usuários</h1>
    <br>
    <section class="img_cadastros">
  
     <div class="container font">


      
        <div class=" font">
        <form action="../exe/cadastro_usuario_exe.php" method="post">
           
          

  
          <div class="row">
          <div class="col">
            <label for="exampleInputPassword1">Usuário</label>
            <input type="text"  class="form-control" placeholder="Digite o nome do usuario" required="required" name="usuario">
          </div>
            <br>
           

          <div class="col">
              <label for="exampleInputPassword1">Senha</label>
              <input type="Password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha" required="required" name="senha">
          </div>
          </div>
    
        <br>
         <br>
        
    
          <div class="row">
          <div class="col">
              <label for="exampleInputPassword1">Email</label>
              <input type="email" class="form-control" placeholder="Digite seu Email" required="required" name="email">
          </div>
           <br>
            <br>
          <div class="col">
              <label for="exampleInputPassword1">Tipo de Usuário</label>
              <input type="text" class="form-control" placeholder="Digite o tipo de usuario" required="required" name="tipo_usuario">
          </div>
          </div>
 
        <br>

          <div class="row">
           
          
          <br>
          <div class="right_button">
              <button type="submit" class="btn btn-primary tamanho_button">Enviar</button>
          </div>
          <br>
        </div>
              <br>
            <br>
             <br>
            
        </form>
      
  </div>
  </section>      
 
  </main>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Tipo</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $consulta = "SELECT cod_usuario, usuario, email, tipo_usuario FROM usuario WHERE tipo_usuario != 'Administrador'";
      $resultado = mysqli_query($conexao, $consulta);
      while ($array = mysqli_fetch_assoc($resultado)) { ?>
      <tr>
        <td><?php echo $array['cod_usuario'] ?></td>
        <td><?php echo $array['usuario'] ?></td>
        <td><?php echo $array['email'] ?></td>
        <td><?php echo $array['tipo_usuario'] ?></td>
        <td><button type="button" class="btn btn-danger">Excluir</button></td>
      </tr>
    <?php
      }
     ?>
  </tbody>
</table>
