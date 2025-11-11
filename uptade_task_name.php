<?php
include('db_connection.php');
if($_SERVER ["REQUEST_METHOD"]=="POST"){
    $id= $_POST['id'];
    $title=$_POST['id'];
    $sql = "UPTADE task SET title = '$title" WHERE id=$id";
    if($conn -> querry ($sql)===TRUE){
    header("Location:index.php");
    exit;
}else{
    echo "Erro ao atualizar:" .$corn->error;
}
}
$conn->close();
?>

}