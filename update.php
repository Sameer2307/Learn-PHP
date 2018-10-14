$sql="UPDATE $tbl_name SET first_name='$first_name', last_name='$last_name', email='$email' WHERE id='$id'";
$result=mysql_query($sql);
if($result){
    echo "Records updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
