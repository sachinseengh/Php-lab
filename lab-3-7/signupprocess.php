<?php

$error="";
if(!$_POST['name']){
   
   header("Location:index.php?nameerror=Name required") ;
}
if(!$_POST['email']){ 
    header("Location:index.php?emailerror=Email required") ;
 }





?>