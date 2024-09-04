<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Agro Malandrin</title>
    <style>
      



@media (max-width: 800px) {
    .form-control{
    border: 2px solid #F6A507;
    border-radius: 5px;
    margin-bottom: 1rem;
    padding-left: 5%;
    padding-right: 5%;
    font-size: 1.3em;  
    }
    
    #body{
    border: 2px solid  #F6A507;
    border-radius: 5px;
    margin: 40px;
    height: 50%;
    padding-left: 10%;
    padding-right: 10%;
    margin-top: 10%;
    background-color: white;
    }

    #tagbut {
        margin-top: 25%;
        display: flex;
        justify-content:flex-end;
    }
    button{
        background-color: #ffffff;
        border: 1px solid #F6A507;
        border-radius: 2px;
        font-size: 1.3em;
    }
    button:active{
        background-color: #FCDCB7;
        border: 2px solid #F6A507;
        border-radius: 2px;
        margin-top: -2px;
    }
}

@media  (min-width: 850px)
{
    .form-control{
        border: 2px solid #F6A507;
        border-radius: 5px;
        margin-bottom: 1rem;
        font-size: 1.2em;
    }
     #body{
        border: 2px solid  #F6A507;
        border-radius: 5px;
        margin: 40px;
        width: 50%;
        height: 50%;
        padding-left: 2%;
        padding-right: 2%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 10%;
        background-color: white;
    }
    #tagbut {
        display: flex;
        justify-content:flex-end;
    }
    
    button{
        background-color: #ffffff;
        border: 1px solid #F6A507;
        border-radius: 2px;
        margin-top: 5%;
    }
     button:hover{
        border: 2px solid #F6A507;
        border-radius: 2px;
        margin-top: 4.6%;
       
    }
    button:active{
        background-color: #FCDCB7;
        border: 2px solid #F6A507;
        border-radius: 2px;
        margin-top: -2px;
        margin-top: 5%;
    }

    
 
}
 
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
<div id="cadastro" class="mb-3">
    <div id="body">
        <h3>Cadastre-se</h3>
        <form action="/submit_password" method="POST" id="formulario">
        <div class="row g-10">
            <div class="col-md-6 position-relative">
                <input type="text" class="form-control" id="autoSizingInput" placeholder="Nome" >
            </div>
            <div class="col-md-6 position-relative">
                <input type="text" class="form-control" id="autoSizingInput" placeholder="Sobrenome">
            </div>
        </div>
        <div>
            <label for="email"></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        <div>
       
        <div>
            <label for="password"></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Nova senha" required>
        </div>
   
        <div>
            <label for="password"></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Confirmar senha" required>
        </div>
        <div id="tagbut">
            <button type="submit">Enviar</button>
        </div>
        </form>
   
    </div>
       
    <div id="logue"><a href="login.php">Já tem uma conta? Cadastre-se!</a></div>
</div>  
</body>
</html>
 