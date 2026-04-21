<?php

/*
$host = "";
$db   = "";
$user = "";
$pass = "";
*/

try {
    
    // Conexão com o banco
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(!empty($id) && empty($pesquisa))
{
    $sql = "SELECT matricula,nome,email,celular,id  FROM alunos  WHERE  id = $id";    
    $stmt = $pdo->query($sql);
    $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
     foreach ($registros as $linha) {
            $nome    = $linha['nome'];
            $email   = $linha['email'];
            $id      = $linha['id'];
     }       
}        

    // SELECT simples
if(!empty($pesquisa))
{
    $stmt = $pdo->query("SELECT matricula,nome,email,celular,id  FROM alunos  WHERE  nome LIKE '%$pesquisa%'");
}

else{
    $stmt = $pdo->query("SELECT matricula,nome,email,celular,id FROM alunos  ");
}
 

    // Busca todos os registros em formato associativo
    $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Exibir os resultados
    

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Alunos</title>

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.php">ALUNOS X OAB</a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li><a href="index.php">Voltar</a></li>
					<li class="fh5co-active"><a href="alunos.php">Alunos</a></li>

				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; © Caua P & Marcos G </span></p>
			</div>

		</aside>

		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Egressos</h2>

				<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Simples</title>
    <style>        
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%; /* Largura da tabela */
            border-collapse: collapse; /* Remove o espaçamento entre bordas */
        }

        th, td {
            border: 1px solid #ddd; /* Borda simples */
            padding: 8px; /* Espaçamento interno das células */
            text-align: left;
        }

        th {
            background-color: #f2f2f2; /* Cor de fundo para o cabeçalho */
            color: #333;
        }

        text {
            background-color: #f2f2f2ff; /* Cor de fundo para o cabeçalho */
            color: #333;
        }

        button {
            background-color: #f2f2f2ff; /* Cor de fundo para o cabeçalho */
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9; /* Cor de fundo diferente para linhas pares (listras) */
        }
    </style>
</head>
<body>
<form action="lista.php" method="get">     
    <table>    
    <br>
       
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>email</th>
                <th>celular</th>
                <th>deletar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
          <?PHP
           foreach ($registros as $linha) {
            $nome   = $linha['nome'];
            $email   = $linha['email'];
            $celular = $linha['celular'];
            $id = $linha['id'];
           echo "<td><a href='lista.php?id=$id'>$id</a></td>";
           echo "<td>$nome</td>";
           echo "<td>$email</td>";
           echo "<td>$celular</td>";
           echo "<td><a href='lista.php?acao=deletar&id=$id'>deletar</a></td>";
           echo "</tr>";
        }
            ?>            
        </tbody>
    </table>
    </form>
</body>
</html>

				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

