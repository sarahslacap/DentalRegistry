<?php
include('dbhandler.php');
$Handler = new DBHandler();
$state = 0;
if(isset($_POST['id'])){
   $state = $Handler->existProcedure($_POST['id']);
}
echo $state;
?>