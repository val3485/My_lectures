<?php
include_once("../database/connection.php");

$new_id = $_POST["id"];

$query= "DELETE FROM pokedex WHERE new_id  = ?";
$stm = mysqli_prepare($con, $query);
$stm->bind_param("i",$new_id);
$stm-> execute();




header("location: ../pokedex.php ");