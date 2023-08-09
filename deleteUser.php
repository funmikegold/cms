<?php

include('modules/db.php');
include('modules/user.php');
$id = $_GET['id'];
$db = new Database();
$user = new User();


$sql = "DELETE fROM tblusers WHERE id = '$id'";
$query = mysqli_query($db->connect(), $sql);
if($query){

    // echo "Delete Successfully";
    header("location:fetchUsers.php");    
}
    else{

    echo "Error while deleting";
}

?>