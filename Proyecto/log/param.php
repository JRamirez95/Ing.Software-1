<?php
session_start();
?>

<?php
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "chamberos";
$tbl_name = "trabjaousuario"; 


 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}


$id = $_SESSION['id'];

if(isset($_POST['idarea'])){

    $data = $_POST['idarea'];

    $ejecutar=$conexion->query("SELECT * FROM areausuario WHERE idusuario = '$id'");
   
    if(count(mysqli_fetch_array($ejecutar)) == 0){
        foreach( $data as $row) {        
            $conexion->query ("INSERT INTO areausuario (idusuario, idarea) VALUES ('$id', '$row')");
        } 
        
    }else{
        $conexion->query ("DELETE FROM areausuario WHERE idusuario = '$id'");

        foreach( $data as $row) {        
            $conexion->query ("INSERT INTO areausuario (idusuario, idarea) VALUES ('$id', '$row')");
        }
       
    }
   
}

if(isset($_POST['dia'])){

    $data = $_POST['dia'];

    $ejecutar=$conexion->query("SELECT * FROM diasusuario WHERE idus = '$id'");
   
    if(count(mysqli_fetch_array($ejecutar)) == 0){
        foreach( $data as $row) {        
            $conexion->query("INSERT INTO diasusuario (idus, dia) VALUES ('$id', '$row')"); 
        } 
        
    }else{
        $conexion->query ("DELETE FROM diasusuario WHERE idus = '$id'");

        foreach( $data as $row) {        
            $conexion->query("INSERT INTO diasusuario (idus, dia) VALUES ('$id', '$row')"); 
        }
       
    }
    
    
 }

 if(isset($_POST['precio'])){
     $precio = $_POST['precio'];
 }else {
     $precio = 0;
 }

 $ejecutar=$conexion->query("SELECT * FROM trabajousuario WHERE idusuario = '$id'");

 if(count(mysqli_fetch_array($ejecutar)) == 0){
    $query = "INSERT INTO trabajousuario (idusuario, tipo, precio) VALUES ($id, '$_POST[tipo]', $precio)";

    }else{

        $conexion->query ("DELETE FROM trabajousuario WHERE idusuario = '$id'");
        $query = "INSERT INTO trabajousuario (idusuario, tipo, precio) VALUES ($id, '$_POST[tipo]', $precio)";
    }

 
  if ($conexion->query($query) === TRUE) { 
   echo '<script>alert("Parámetros agregados");</script>';
   echo "<script> window.open('../principalUsuarios.php','_self')</script>";
  }
 
 
 mysqli_close($conexion);
?>