<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="imagex/png" href="img/bola.png">
    <link rel="stylesheet" type="text/css" href="stylemirrorball.css">
    <title>MIRRORBALL</title>

</head>
<body>
    <article class="segunda">
        <br>
        <p>Obrigado por se interessar, quando concluirmos o projeto, te enviaremos um e-mail !</p>
        <br><br><br>
        </article>
    
</body>
</html>
		<?php
			include_once("conexao.php");
	
			$email=$_POST['email'];
			
			$sqlselect= "SELECT * FROM login WHERE email = '$email'";
			$resultadoselect = @mysqli_query($conect,$sqlselect);
		
			if (@mysqli_num_rows($resultadoselect)==0){
				$sql = "insert into login (email) values ('$email')";
				$resultado = @mysqli_query($conect,$sql);
				if (!$resultado){
					die ('Query Inválida: ' . @mysqli_error($conect));
					exit;
				}else{
					mysqli_close($conect);
				}
			}
			else{
                echo "esse e-mail já foi cadastrado";
				exit;
			}
		?>	
