<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- conectando com o css-->
    <link href="estilos/estilos.css" rel="stylesheet" type="text/css">
    
    <!-- colocando o icone da pagina-->
    <link rel="shortcut icon" href="multimidia/icones/planta.png" type="image/x-icon">

    <script sr  c="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        
        #header #header-int{
            background-color: #034F0A;
        }
        
        #header img{
            margin-top: -15%;
            margin-bottom: -9.5%;
            margin-left: 20%;
            
        }
        
        /*config navbar*/
            #header #navbar {
                margin-left: -11%;
                
            }
            
            #header #navbar #nav{
                color: #fff;
                font-family: arial;
               
            }  
            
            #header #navbar a h1{
                font-size: 1.9em;
            }

            #itens-navbar{
                
                margin-right: 10%;
                margin-left: 20%;
                border-top: 2px solid #034F0A;
                border-bottom: 2px solid #034F0A;
                border-right: 2px solid #ffffff;
                border-left: 2px solid #ffffff;
            }

            #header #navbar #nav:hover{
                color: #FFF086;
            }  

        /*butão de login*/
            #header #login{
                font-size: 1.2em;
                font-family: arial;
                margin-top: 15px;
                margin-right: 8%;
            }

            #header #login #link {
                text-decoration: none;
                color:#fff;
            }

            #header #login #link:hover{
                color: #FFF086;
            }   

    </style>
</head>
 
<div id="header">
<!-- criando o header -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="header-int">
        <div class="container-fluid">
        
        
            <picture>
                <source media="(min-width: 1000px)" srcset="../multimidia/logo_Head.png">
                <img src="../multimidia/logo_Head_mob.png" alt="logo Agro malandrin" id="logo">
            </picture>
        
            
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            
                

                <!-- criando o nav -->
                <div class="offcanvas-body" id="navbar">
                    <ul class="navbar-nav justify-content-evenly  flex-grow-1 pe-3" id="itens-navbar">
                    
                        <!-- links do nav -->
                        <li class="nav-item">
                            <a href="index.php" id="nav" class="nav-link mx-lg-2"> <h1>Home</h1></a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="Produtos.php" id="nav" class="nav-link mx-lg-2"> <h1>Produtos</h1> </a>
                        </li>

                        <li class="nav-item">
                            <a href="dicas.php" id="nav" class="nav-link mx-lg-2"> <h1>Dicas</h1> </a>
                        </li>

                    </ul>
                
                    
                    <form class="d-flex justify-content-around" id="login">
                        <!-- colocando o botão para poder logar -->
                        <a href="login.php" id="link"> <p>Ola, logue ou <br>cadastre-se</p> </a> 
                    </form>
                    
                </div>
            </div>
        </div>
    </nav>
</div>




   
      
    
    

