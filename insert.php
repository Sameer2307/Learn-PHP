<?php
$sql="INSERT INTO $tbl_name(first_name, last_name, email)VALUES('$first_name', '$last_name', '$email')";
$result=mysql_query($sql);
if($result, $conn){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
