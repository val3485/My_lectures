<?php

include_once("../database/connection.php");

$new_id = $_POST["edit_id"];

$query = "UPDATE pokedex SET captured = NOT captured
            WHERE new_id = ? ";

$stm = mysqli_prepare($con,$query);
$stm-> bind_param("i",$new_id);
$stm-> execute();

header("location: ../pokedex.php");


