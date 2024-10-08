<?php
    require_once 'includes/connect.php'; // linkando com as info do connect
    require_once 'includes/header.php';

    echo "<div class='container'>"; // chama as info da classe container

    if(isset($_POST['delete'])) { // condição criada para se o post for delete, apagar as info de um user
        $sql = "DELETE FROM usuario WHERE idUsuario=".$_POST['idUsuario'];
        if($con->query($sql) === TRUE) { // condição criada para chamar um alerta de sucesso cason 
            echo "<div class='alert alert-success'>Successfully delete user</div>";

        }
    }

    $sql = "SELECT * FROM usuario"; // armazena um código select do sql em uma variavel
    $result = $con->query($sql); // armazena uma consulta em uma variavel
    if($result->num_rows > 0)  // condição que verifica se o numero de linhas é maior que 0
    {

        ?>
        <h2>List of all Users</h2>
        <table class="table table-bordered table-striped"> <!-- cria uma classe que alinha todos os termos abaixo nela -->
            <tr>
                <td>username</td>
                <td>senha</td>
                <td width="70px">Delete</td>
                <td width="70px">EDIT</td>
            </tr>
    <?php
        while($row = $result->fetch_assoc()) {  
            echo "<form action='' method='POST'>";
            echo "<input type='hidden' value='".$row['idUsuario']."' name='idUsuario' />";

            echo "<tr>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['senha']."</td>";

            echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger'/></td>"; // cria um input que serve como o botão de delete
            echo "<td><a href='edit.php?id=".$row['idUsuario']."' class='btn btn-info'>Edit</a></td>"; // cria um botão que serve como um botão de editar

            echo "</tr>";
            echo "</form>";
        }
        
        ?>

        </table>

    <?php

    }
    else
    {
        echo "<br><br>No Record Found";
    }

    ?>

    </div>

    <?php
        require_once 'includes/footer.php';