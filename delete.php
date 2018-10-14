<?php

// get value of id that sent from address bar 
$id=$_GET['id'];

// Delete data in mysql from row that has this id 
$sql="DELETE FROM $tbl_name WHERE id='$id'";
$result=mysql_query($sql);

if($result, $conn){
    echo "Records deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
