<?php
include_once './index.php';
$query="update tbl_emp1 set name='Vikas' where id=5";
$sql_update = mysqli_query($con, $query);
if ($sql_update)
{
    
    echo "<br> &block;&blk34;&blk12;&blk14; Data Updated &check;";
}
else
{
    die("<br> error to update &gla;");
}
