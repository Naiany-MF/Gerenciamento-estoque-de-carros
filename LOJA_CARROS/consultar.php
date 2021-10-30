<?php include_once 'php_action/db_connect.php';
include_once 'Includes/header.php';
?>
    
<div class="section no-pad-bot" id="index-banner">
  <div class="container">
  <br /><br />
    <div class="row center">
      <div class="col s12 m12 l12 xl12">
        <h3 class="light">Estoque de carros</h3>
        <table class="striped">
          <thead>
            <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Descrição</th>
            <th>Ano</th>
            <th>Cor</th>
            <th>Placa</th>
            <th>Valor (R$)</th>
            </tr>
          </thead>
        <tbody>

        <?php
        $sql = 'SELECT * FROM estoque';
        $resultado = mysqli_query($connect, $sql);
        while ($dados = mysqli_fetch_array($resultado)): ?>

            <tr>
              <td><?php echo $dados['marca']; ?> </td>
              <td><?php echo $dados['modelo']; ?> </td>
              <td><?php echo $dados['descricao']; ?> </td>
              <td><?php echo $dados['mod_fab']; ?> </td>
              <td><?php echo $dados['cor']; ?> </td>
              <td><?php echo $dados['placa']; ?> </td>
              <td><?php echo $dados['valor']; ?> </td>
<td><a href="editar.php?id=<?php echo $dados[
    'id'
]; ?>" class="btn-floating orange"><i class="material-icons"> edit</i></a></td>

<td><a href="#modal<?php echo $dados[
    'valor'
]; ?>" class="btn-floating red modal-trigger"><i class="material-icons"> delete</i></a></td>


                <!-- Modal Structure -->
                <div id="modal<?php echo $dados[
                    'valor'
                ]; ?>" class="modal modal-fixed-footer">
                  <div class="modal-content">
                    <h4>Tem certeza que quer excluir esse registro?</h4>
                <p><?php echo $dados['marca']; ?> - <?php echo $dados[
     'modelo'
 ]; ?> - <?php echo $dados['descricao']; ?> - <?php echo $dados[
     'mod_fab'
 ]; ?> - <?php echo $dados['cor']; ?> - <?php echo $dados['placa']; ?> </p>
                  </div>
                <div class="modal-footer">
                   
                   <form action="php_action/delete.php" method = "POST">
                   <input type="hidden" name="id" value = "<?php echo $dados[
                       'id'
                   ]; ?>">
                   <a href="#!" class="modal-close waves-effect waves-green btn green">Não excluir</a>
                   <button type="submit" name="btn-delet" class="btn red">Sim, quero excluir!</button>
                  </form>
                </div>
  </div>
              </tr>

              <?php endwhile;
        ?>

              </tbody>
            </table>
          </div>
        </div>  
        <br /><br />
      </div>
    </div>

<?php include_once 'Includes/footer.php'; ?>
