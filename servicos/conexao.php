<?php
$host="localhost";
$user="root";
$password="";
$db="sistemacadastro";

$con = mysqli_connect($host,$user,$password,$db);

<<<<<<< HEAD
if($con){
=======
if(!$con){
>>>>>>> 6ccadcca45346fd427f029ce9d3e419d716a42c9
    echo "Sem conexão";
}


?>