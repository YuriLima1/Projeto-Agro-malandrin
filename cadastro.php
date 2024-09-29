<!DOCTYPE html>
<html lang="en">
    
<head>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Agro Malandrin</title>

    <style>
       
        
       

        @media (max-width: 760px) {
            .form-control{
            border: 2px solid #F6A507;
            border-radius: 5px;
            margin-bottom: 1rem;
            padding-left: 5%;
            padding-right: 5%;
            font-size: 1.3em;  
            }
        
            #nome{
                margin-bottom: 25px;
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
                margin-top: 10%;
                display: flex;
                
            }
            button{
                background-color: #ffffff;
                border: 1px solid #F6A507;
                border-radius: 2px;
                font-size: 1.3em;
                margin-bottom: 10%;
            }
            button:active{
                background-color: #FCDCB7;
                border: 2px solid #F6A507;
                border-radius: 2px;
                margin-top: -2px;
                
            }
            
            #logue a{
                
                color: black;
                text-decoration: none;
            
            }
            
            #logue a:hover{
                margin-top: -15%;
                color: #034F0A;
                text-decoration: none;
            
            }

            #logue{
                width: 60%;
                margin-right: 15%;
                margin-bottom: 8%;
            }
        }

        @media  (min-width: 761px)
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
                justify-content: space-between;
            }
            
            button{
                background-color: #ffffff;
                border: 1px solid #F6A507;
                border-radius: 2px;
                margin-top: 5%;
                margin-bottom: 5%;
            }
            button:hover{
                border: 2px solid #F6A507;
                border-radius: 2px;
                margin-top: 4.6%;
                margin-bottom: 5%;
            }
            button:active{
                background-color: #FCDCB7;
                border: 2px solid #F6A507;
                border-radius: 2px;
                margin-top: 4.6%;
                margin-bottom: 5%;
            }

            #logue a{
            margin-top: -15%;
            color: black;
            text-decoration: none;
           
            }
            
            #logue a:hover{
                margin-top: -15%;
                color: #034F0A;
                text-decoration: none;
            
            }

            #logue{
                margin-top: 5%;
                margin-bottom: 5%;
            }
        }

    </style>
</head>
<body>

        
    <div id="cadastro" class="mb-3">
        <div id="body">
            <h3>Cadastre-se</h3>
            
            <form action="/submit_password" method="POST" id="formulario">
            
            <div class="row g-10">
                <div class="col-md-6 position-relative" id="nome">
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
                <div id="logue" > Já tem uma conta? <a href="login.php"> Faça Login!</a></div>

                <button type="submit">Enviar</button>
            </div>
            </form>
    
        </div>
       
    
        

    </div>  
</body>
</html>
 