<?php
    require_once 'includes/connect.php';
    require_once 'includes/header.php';
?>

<div class="container"> <!-- chama uma função chamada container que ja coloca info de maneira automatica de outro arquivo -->
    <?php
        if(isset($_POST['update'])) { // criando um condição que se setado o post update chama outra condição
            if(empty($_POST['username']) || empty($_POST['senha']))
             // sera chamado esta condição caso a anterior seja verdadeira, porém ela só funcionara caso uma delas sseja verdadeira com o "ou" 
            {

                echo "Please fillout all required fields";

            }else{ // se a condição anterior não for verdadeira esta sera chamada
                $username = $_POST['username'];
                $senha = $_POST['senha'];
                
                // os posts acima guardam todas as informações mais recentes em uma variavel

                $sql = "UPDATE Usuario SET username = '{$username}', senha = '{$senha}' WHERE idUsuario=" .$_POST['idUsuario']; // armazena um código sql que atualiza as informações

                if($con->query($sql) === TRUE) { // condição que verifica se a consulta é igual a verdadeira e chama os textos caso der certo ou se der errado

                    echo "<div class='alert alert-success'>Successfully updated user</div>";

                }else{

                    echo "<div class='alert alert-danger'>Error: There was an error while updatingn user info</div>";

                }
            }
        }

        $id = isset($_GET['id']) ? (int)$_GET['id'] :0; 

        $sql = "SELECT * FROM usuario WHERE idUsuario={$id}"; // armaazena um código sql em uma variavel
        $result = $con->query($sql); // armazena uma consulta em uma variavel
        
        if($result->num_rows<1) { // condição que conta se a quantidade linhas é menor que 1
            header('Location: index.php'); // envia para página index
            exit; 
        }

        $row = $result->fetch_assoc(); 
        ?>

        <div class="row"> <!-- cria uma div que é sustentada por uma classe que criara linhas -->
            <div class="col-md-6 col-md-offset-3"> <!--  -->
                <div class="box"> <!-- cria uma div que é sustentada por uma classe que criara uma caixa em volta das info-->
                    <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY User</h3> <!---->

                    <form action="" method="POST">
                        <input type="hidden" value="<?php echo $row['idUsuario'];?>" name="idUsuario">

                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" value="<?php echo $row['username'];?>" class="form-control">

                        <label for="senha">Senha</label>
                        <input type="text" name="senha" id="senha" value="<?php echo $row['senha'];?>" class="form-control">

                        <br>

                        <input type="submit" name="update" class="btn btn-success" value="Update">
                    </form>
                </div>

            </div>

        </div>
</div>

<?php
    require_once 'includes/footer.php'; // linka a pagina footer e traz as info de lá para o final da página edit