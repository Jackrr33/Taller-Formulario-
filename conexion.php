<?php
include ("Formulario.html");
$mysqli = new mysqli("localhost", "JavierC", "", "test");
/* comprueba la conexión */
if (mysqli_connect_errno()) {
 printf("Connect failed: %s\n", mysqli_connect_error());
exit();
        }
/* selecciona bd */
$mysqli->select_db("formulario");
/*variables*/
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$Card = $_POST['Card'];
$CardHolder = $_POST['CardHolder'];
$CardNumber = $_POST['CardNumber'];
$CVV2 = $_POST['CVV2'];
$Exp = $_POST['Exp'];
$Street = $_POST['Street'];
$City = $_POST['City'];
$State = $_POST['State'];
$ZIP = $_POST['ZIP'];
$Country = $_POST['Country'];
$Phone = $_POST['Phone'];
/*Agregar a tabla*/
$sql = "INSERT INTO formulario(FirstName,LastName,Email,Card,CardHolder,CardNumber,CVV2,Exp,Street,City,State,ZIP,Country,Phone)
VALUES ('$FirstName','$LastName','$Email','$Card','$CardHolder','$CardNumber','$CVV2','$Exp','$Street','$City','$State','$ZIP','$Country','$Phone')";
$result = mysqli_query($mysqli,$sql);
 if (! $result){
    echo "La consulta SQL contiene errores.".mysqli_error();
 exit();
                 }else{
                   echo "Registrado exitosamente";
                 }
$mysqli->close();
?>
