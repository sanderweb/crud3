<?php
//HEADER
include_once 'includes/header.php';
?>

<div class="container text-center">
    <div class="row">
        <h3 class="mr-3">Clientes</h3>
        <a href="https://www.youtube.com/watch?v=233ZZu0RN3Q&index=48&list=PLwXQLZ3FdTVEITn849NlfI9BGY-hk1wkq" target="_blank">Parei Aqui!</a>
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
                    <tr>
                        <td>Rodrigo</td>
                        <td>Oliveira</td>
                        <td>rodrigosantosweb@gmail.com</td>
                        <td>25</td>                        
                        <td><a href=""><button type="button" class="btn btn-success">Editar</button></a></td>                        
                        <td><a href=""><button type="button" class="btn btn-danger">Excluir</button></a> </td>
                    </tr>
                </tbody>
            </table>
            <a href=""><button type="button" class="btn btn-primary">Adicionar Clientes</button></a>
        </div>
    </div>

<?php
//FOOTER
include_once 'includes/footer.php';
?>