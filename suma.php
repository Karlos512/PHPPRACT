<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a="10";
$b=$a+2;
echo $b;

function validar_email($email){
    return (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
}


  $respuesta = validar_email("braulioweport");
  if($respuesta==1){
      echo "Correo Valido";
  }else{
      echo "Correo Invalido";
  }
  
  
?>
</body>
</html>
