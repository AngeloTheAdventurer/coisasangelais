<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <style>
body{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
        nav {
  background-color: #333;
  overflow: hidden; /* Permite que a barra flutue corretamente */
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden; /* Garante que a lista não transborde */
}

nav li {
  float: left; /* Alinha os itens da lista lado a lado */
}

nav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none; /* Remove o sublinhado padrão dos links */
}
nav li a:hover {
  background-color: #ddd;
  color: black;
}
#l4{
    float: right;
}
</style>

</head>
    <body>
        <nav>
            <ul>
                 <li><a href="#">Página Inicial</a></li>
                 <li><a href="#">Sobre</a></li>
                 <li><a href="#">Serviços</a></li>
                 <li><a href="#">Contato</a></li>
                 <li id="l4"><a href="/login.html">Entrar</a></li>
             </ul>
        </nav>
    </body>
</html>