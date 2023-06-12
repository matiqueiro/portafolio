<?php 
$databaseHost = 'localhost';
$databaseName = 'portafolio';
$databaseUsername = 'root';
$databasePassword = ' ';

$mysqli = mysqli_connect(
  $databaseHost, $databaseUsername, $databasePassword, $databaseName
);

// if($mysqli){
//   echo "conectado correctamente";
// };
if(isset($_POST['register'])){
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $comentario = trim($_POST['comentario']);

  $consulta = "INSERT INTO `datos`(`nombre`, `email`, `comentario`) VALUES ('$name','$email','$comentario')";

  $result = mysqli_query($mysqli, $consulta);
  header("location:index.php"); 
}


?>