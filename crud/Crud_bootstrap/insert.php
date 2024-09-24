<?php
    require_once 'includes/connect.php';

    require_once 'includes/header.php';

?>

<div class="container"> <!-- chama uma função chamada container que ja coloca info de maneira automatica de outro arquivo -->
    <?php

        if(isset($_POST['addnew'])) { // condição que se for setado no post o addnew passa para outra condição
            if(empty($_POST['username']) || empty($_POST['senha'])) {
            // sera chamado esta condição caso a anterior seja verdadeira, porém ela só funcionara caso uma delas sseja verdadeira com o "ou"

                echo "Please fillout all required fields";

            }else{ // se a condição anterior não for verdadeira esta sera chamada
                $username = $_POST['username'];
                $senha = $_POST['senha'];
                // os posts acima guardam todas as informações mais recentes em uma variavel

                $sql = "INSERT INTO usuario(username,senha) 
                VALUES('$username','$senha')"; // armazena um código sql que insere as informações

                if($con->query($sql) === TRUE) {  // condição que verifica se a consulta é igual a verdadeira e chama os textos caso der certo ou se der errado
                    echo "<div class='alert alert-sucess'>Successfully added new user</div>";
                }else{
                    echo "<div class='alert alert";
                }

            }
        }
    ?>

    <div class="row"> <!-- chama a classe row ja criada em outro arquivo anteriormente -->
        <div class="col-md-6 col-md-offset-3"> <!-- chama a classe col-md-6 col-md-offset-3 ja criada em outro arquivo anteriormente -->

            <div class="box"> <!-- chama a classe box ja criada em outro arquivo anteriormente -->

                <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Add New User</h3>

                    <form action="" method="post">

                        <label for="username">Nome de usuario:</label>
                        <input type="text" name="username" id="username" class="form-control"><br>

                        <label for="senha">Senha:</label>
                        <input type="text" name="senha" id="senha" class="form-control"><br>

                        

    

                        <br>

                        <input type="submit" name="addnew" class="btn btn-success" value="Add New">

                    </form>
            </div>
        </div>
    </div>
</div>

<?php
    require_once 'includes/footer.php'; // linka a pagina footer e traz as info de lá para o final da página insert