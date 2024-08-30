<?php
include_once 'includes/header.php'
?> 
<header>
    <title>Cadastro -  Agro Malandrin</title>
</header>

<div id="cadastro">
    <div id="body">
        <h3>Cadastre-se</h3>
        <form action="/submit_password" method="POST">
       <div id="NSN">
            <label for="nome"></label>
            <input type="text" id="nome" name="nome" placeholder="Nome:" required>
 
            <label for="sobrenome"></label>
            <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome"  required>
        </div>
 
        <div>
            <label for="email"></label>
            <input type="email" id="email" name="email" placeholder="Email" required>
        <div>
       
        <div>
            <label id="" for="password"></label>
            <input type="password" id="password" name="password" placeholder="Nova senha" required>
        </div>
    
        <div>
            <label id="" for="password"></label>
            <input type="password" id="password" name="password" placeholder="Confirmar senha" required>
        </div>
        <div id="tagbut">
            <button type="submit">Enviar</button>
        </div>
        </form>
    
    </div>
        
    <div id="logue"><a href="login.php" id="link">Já tem uma conta? Cadastre-se!</a></div>
</div>


