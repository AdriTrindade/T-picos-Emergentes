<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso lalala</title>
</head>
<body>

<form method="post" action="formulario.php"></form> 
 Digite deu nome:
 <input type="text" size="80" name="txtnome">
 <input type="submit"  name="botaoenviar" value="enviar">  

</form>
 
 <?php
 if(isset ($_post["botaoenviar"])) {
  $nome = $_post["txtnome"]
  echo "Seu nome: $_txtnome";
 }else 
 echo "Preencha o campo acima com algum nome!"
   ?> 

</body>
</html>