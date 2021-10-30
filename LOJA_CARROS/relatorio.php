<?php
//Conexão
include_once 'php_action/db_connect.php';

//Header
include_once 'Includes/header.php';
?>
    
<div class="section no-pad-bot" id="index-banner">
  <div class="container">
  <br /><br />
    <div class="row center">
      <div class="col s12 m12 l12 xl12">
        <h3 class="light">Relatórios</h3>
        
        <form action="php_action/report.php" target="_blank" method="POST">
          
        <div class="col s6">
          <label for="marca">Selecione a marca:</label>
          <select name="marcaselecionada">
            <option>TODAS MARCAS</option>
            <?php
            $sql = 'SELECT DISTINCT marca FROM estoque';
            $resultado = mysqli_query($connect, $sql);
            while ($dados = mysqli_fetch_array($resultado)): ?>
            <option><?php echo $dados['marca']; ?> </option>
            <?php endwhile;
            ?>
          </select>
          </div>
          
          <div class="col s6">
          <input type="submit" name="btn-relat" class="btn orange" value="Selecionar" />
        </div>

        </form>
      </div>
    </div>  
  <br /><br />
  </div>
</div>

<?php include_once 'Includes/footer.php'; ?>
