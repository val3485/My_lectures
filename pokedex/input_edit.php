<?php
//session_start();
include_once("./database/connection.php");

$query= "SELECT * FROM pokedex";

$card = mysqli_query($con, $query);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>

<body>
    <link rel="stylesheet" href="style.css">

    <div id="edit-title"> Pokemon Edit Section</div>

    <form action="./card_holder/edit.php" method="POST"> 
          <input name="edit_id" type="hidden" value="<?= $_POST["edit_new_id"]?>">

          <label class= "text" id="edit-name" for="new-name" >Edited Name:</label>
          <input  class= "input" maxlength="30" id="edit-input-name" name="new_name" type="type" placeholder="Edit Name" required autofocus>
         <br>
          <label class= "text" id="edit-type" for="new-type">Edited Type:</label>
          <input class= "input" maxlength="30" id="edit-input-type" name="new_type" type="type" placeholder="Edit Type" required >

          <div >
            <input id="edit-submit-bttn" type="submit" value="submit">
          </div>
    
    </form>    
          


</body>
</html>