<?php
//COnexão
include_once 'php_action/db_connect.php';

//HEADER
include_once 'includes/header.php';
?>

<div class="container text-center">
    <div class="row">
        <h3 class="mr-3">Clientes</h3>
        <a href="https://www.youtube.com/watch?v=eIJENREMcbo&list=PLwXQLZ3FdTVEITn849NlfI9BGY-hk1wkq&index=49" target="_blank">Parei Aqui! 8:18</a>
    </div>
</div>   
   
    <div class="container">
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Idade</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   <?php 
                    $sql = "SELECT * FROM clientes";
                    $resultado = mysqli_query($connect, $sql);
                    while($dados = mysqli_fetch_array($resultado)):
                    ?>
                    <tr>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['sobrenome']; ?></td>
                        <td><?php echo $dados['email']; ?></td>
                        <td><?php echo $dados['idade']; ?></td>                        
                        <td><a href=""><button type="button" class="btn btn-success">Editar</button></a></td>                        
                        <td><a href=""><button type="button" class="btn btn-danger">Excluir</button></a> </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <a href="php_action/adicionar.php"><button type="button" class="btn btn-primary">Adicionar Clientes</button></a>
        </div>
    </div>

<?php
//FOOTER
include_once 'includes/footer.php';
?>