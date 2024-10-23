<?php

include_once ("./database/connection.php");
$query = "SELECT * FROM pokedex";
$pokemon= mysqli_query ($con, $query);

$new_id = date("YmdHis").microtime(true);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pokedex</title>

</head>

<body>

    <style>
        @import url('https://fonts.cdnfonts.com/css/pokemon-solid');
@import url('https://fonts.cdnfonts.com/css/bruno-ace-2');
@import url('https://fonts.cdnfonts.com/css/unitblock');
@import url('https://fonts.cdnfonts.com/css/christana');

body{
    background-image: url(Cover/file.jpg);
    background-size:cover;
    background-repeat: no-repeat;
}
#title,#edit-title{
    font-family: 'Pokemon Solid', sans-serif;
    font-size: 40px;
    text-align: center;
    color:  #201e4d ;
    text-shadow: #fff  2px 2px  ;
    
}
#container{
    display:flex;
    justify-content: space-around;
    flex-wrap: wrap;
}
#con1{
    display:flex;
    flex-wrap: wrap;
    gap:15px;
    justify-content: space-around;
    margin-top: 15px;
    
}
#con2{
    justify-content: space-around;
    display:flex;
    gap:15px;
    width: 400px;
    flex-direction: row;
}
#card{
    padding: 20px;
    margin-top: 15px;
    border-radius: 50px/50px;
    background-color: rgb(217, 220, 50 ,0.5);
    border:rgb(217, 220, 50) solid 2px;
    z-index: 3;
    gap:20px;
    width: 300px;
    height: 180px;
    margin-top: 30px;
    transition: 0.3s;
}
#card:hover{
    padding:25px;
}
#bttn-delete {
    margin-top: 10px;
}
.bttn,.input{
    border-color: transparent;
    border-radius: 25px/25px;
}
.input{
    font-size: 30px ;
    font-family: 'Bruno Ace', sans-serif;
    margin-top: 10px;
}
.bttn{
    margin-top: 5px;
}
.text{
    color: white;
    font-family: 'Bruno Ace', sans-serif;
    font-weight: 600;
    color: #201e4d ;
    font-size: 15px;
}
#input-type, #input-name{
    font-size: 30px;
}
#clear-bttn{
    margin-left: 550px;
}
#form-input {
    font-size: 30px;
    text-align: center;
}
#form-input-name,#form-input-type{
    padding: 1%;
    height: 33px;
}
::placeholder{
    color:  rgb(32, 30, 77,0.3) ;
}
input[type=text]{
   -webkit-transition: 0.5s;
   transition: 0.5s;
   color:  rgb(32, 30, 77) ;;
}
input[type=name]:focus{
  border-color: blue;
  color:  rgb(32, 30, 77) ;
}

#delete-bttn{
    margin-left: 5px;
    position: absolute;
    z-index: 1;
}
#capture-bttn{
    margin-left: 73px;
    z-index: 1;
    position: absolute;
} 
#edit-bttn{
    margin-left:150px;
    z-index:1;
    position:absolute;
}
#edit-bttn, #capture-bttn, #delete-bttn ,#edit-submit-bttn{
    color: #201e4d;
    font-family: 'Unitblock', monospace;
    font-weight: 600;
    font-size: 15px;
    padding: 10px;
    transition: 0.3s;
    display: flex;
    flex-wrap:wrap;
    position: absolute;
}
#edit-bttn:hover, #capture-bttn:hover, #delete-bttn:hover {
    color:#fff;
    background-color:#201e4d ;
    font-weight: 300;
}
#name, #type{
    color: black;
    font-family: 'Christana', monospace;
    font-size: 18px;
    font-weight: lighter;
    color:#635702   ;
    text-shadow: #fff 1px 1px;
}
#form-submit, #clear{
    color: #201e4d;
    font-family: 'Unitblock', monospace;
    font-weight: 600;
    font-size: 25px;
    background-color: transparent;
    text-shadow: #fff 2px 2px;
    transition: 0.3s;
}
#form-submit:hover , #clear:hover{
    font-size: 30px;
    background-color: transparent;
}
#edit-name, #edit-type{
    margin-left: 25%;
    font-size: 40px;
}
#edit-input-name,#edit-input-type{
    margin-top: 3%;
    font-size: 40px;
    width: 450px;
    height: 45px;
    padding: 1%;
    color: #201e4d;
}
#edit-submit-bttn{
    margin-top:2%;
    border: none;
    background-color: rgb(255, 255, 255,0.6);
    margin-left:47%;
    font-size: 30px;
    transition: 0.3s;
    padding:1%;
    border-radius: 25px/25px;   
}
#edit-submit-bttn:hover{
    font-size: 35px;
    background-color: #201e4d;
    color: #fff;
}
#con-bttn {
    display:flex;
    flex-wrap: wrap;
    position: fixed;
    width: 100%;
    position: absolute;
    z-index: 3;
}
#submit-bttn{
    align-items: center;
    position: absolute;
    margin-left: 40%;
    z-index: 3;
    gap: 5px;
}
#clear-bttn{
    align-items: center;
    margin-left: 55%;
    position: absolute;
    z-index: 3;
    gap: 5px;
}
    </style>

    <div id="title">Pokemon</div>

    <form id="form-input" method="post" action="./card_holder/holder.php">
        <label class= "text" id="input-name" for="name"> Name of pokemon</label>
        <input class= "input" maxlength="30" id="form-input-name" type="text" name="pname" placeholder="Name" required autofocus >

        <br>

        <label class= "text"  id="input-type" for="name"> Type of pokemon </label>
        <input  class= "input" maxlength="30" id="form-input-type" type="text" name="ptype" required placeholder="type">

<div id="con-bttn">
        <div  id="submit-bttn">
                <input  id="form-submit" class="bttn" name="submit" type="submit" value="submit" >
        </div>
    </form> 

    <div  id="clear-bttn">
        <form  action="./card_holder/clear.php" > 
            <button class="bttn" id="clear" type="submit"> clear </button>
        </form>
    </div>
</div>

<div id="container" >
    <div id="con1">
        
        <?php 
            while($card= mysqli_fetch_assoc ($pokemon) ){
        ?>
            <div id="con2">
                <div  id = "card">
                     
                    <div class= "text"> 
                        <p>
                        Name of pokemon: <p id="name"> <?= $card ["pname"]?> </p>
                        <br>
                        Type of Pokemon: <p id="type"><?= $card["captured"] ?  "Captured" :$card ["ptype"] ?></p>
                        </p>
                    </div> 

                       <form  method="POST" action="./card_holder/delete.php">
                            <input name="id" type="hidden" value="<?= $card["new_id"]?>">
                            <input class="bttn" id="delete-bttn" type="submit" value="Delete">
                        </form>

                        <form  method="POST" action="./card_holder/capture.php">
                            <input name="edit_id" type="hidden" value="<?= $card["new_id"]?>">  
                                <button class="bttn" id="capture-bttn"  type="submit"> Capture </button>
                        </form>

                        <form action="./input_edit.php" method="POST">
                            <input type="hidden" name="edit_new_id" value ="<?= $card["new_id"]?>">
                            <input class="bttn" id="edit-bttn"  type="submit" value="Edit">
                        </form> 
                       
                </div>    
                    
            </div>
        <?php
            }
        ?>
        
    </div>
</div>

</body>
</html>