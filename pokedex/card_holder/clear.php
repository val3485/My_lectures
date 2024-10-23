<?php 
include_once("../database/connection.php");
mysqli_query($con,"DELETE FROM pokedex");

header("location: ../pokedex.php");