<?php
//HEADER
include_once 'header.php';
?>

<div class="container text-center">
    <div class="row">
        <h3>Novo Clientes</h3>
    </div>
    </div><!--END CONTAINER   -->
    
    <!--  --><div class="container mt-4">
        
            <form>
              
            <div class="form-row">
                <div class="col">
                    <label for="exampleInputEmail1">Nome</label>
                    <input class="form-control" type="text" placeholder="Degite o seu nome">
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Sobrenome</label>
                    <input class="form-control" type="text" placeholder="Digite o seu sobrenome">
                </div>
            </div>
              
            <div class="form-row mt-3">
                <div class="col-6">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="seuemail@.com">
                    <small id="emailHelp" class="form-text text-muted">Tranquilo</small>
                </div>
                <div class="col-2">
                    <label for="exampleInputEmail1">Idade</label>
                    <input class="form-control" type="text" placeholder="2 Digitos">                    
                </div>
            </div>                           
                
                <button type="submit" class="btn btn-primary mt-2">CADASTRAR</button>
                <button type="button" class="btn btn-success">LISTA DE CLIENTES</button>
            </form>
        
    </div>
    
    
    

    

<?php
//FOOTER
include_once 'footer.php';
?>