
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Site</title>
    <style>
       body{
        position: absolute;
        margin: 0;
        padding: 0;
        left: 5%;
        top: 35%;
       }
       #h1lg{
        top: 0px;
        right: -130%;
        position: relative;
        font-size: 300%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    label{
        position: relative;
        top: -105px;
        left: 605px;
        font-size: 32px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif4
        ;
    }
    input{
        position: relative;
        top: -100px;
        left: 242%;
    }
    img{
        position: relative;
        right: 133%;
        top: -255px;
    }
    #senha{
        position: relative;
        top: -100px;
        right: 50px;
    }
    button{
        position: relative;
        top: -180px;
        right: -320px;
        width: 250px;
        height: 50px;
    }
    </style>
</head>
    <body>
        <H1 id="h1lg">Faça login!</H1>
        <form>
            <label for="loginem">E-mail:</label> <br>
            <input type="email" id="loginem" placeholder="Digite seu email"><br>
            <br><br>
            <label for="loginps">Senha:</label><br>
            <input id="senha" type="password" id="loginps" placeholder="Digite sua senha">
            <br>
            <button>Entrar</button>
        </form>
    </body>
</html>