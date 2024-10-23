<?php
include_once("../database/connection.php");

$pname = $_POST["pname"];
$ptype = $_POST["ptype"];

$new_id = date("YmdHis").microtime(true);

$query =  "INSERT INTO pokedex (new_id, pname , ptype)
            VALUES ($new_id, ?,?)"; 

$stm = mysqli_prepare ($con, $query); 
$stm-> bind_param("ss", $pname,$ptype);
$stm -> execute();



header("location: ../pokedex.php");


