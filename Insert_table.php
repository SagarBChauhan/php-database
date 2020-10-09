<?php
include_once './index.php';
$query="insert into tbl_emp1 (name ,city) values('Vikas','Navsari')";
$sql_insert = mysqli_query($con, $query);
if ($sql_insert)
{
    
    echo "<br> &block;&blk34;&blk12;&blk14; Data Inserted &check;";
}
else
{
    die("<br> error t insert &gla;");
}
