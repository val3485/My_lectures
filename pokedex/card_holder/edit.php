<?php
include_once("../database/connection.php");

$new_id= $_POST["edit_id"]; 
$pname= $_POST["new_name"];
$ptype= $_POST["new_type"];

$query= "UPDATE pokedex SET pname =? , ptype = ? WHERE new_id = ?";

$stm = mysqli_prepare($con,$query);
$stm -> bind_param("ssi", $pname, $ptype, $new_id);
$stm -> execute();


header("location: ../pokedex.php"); 