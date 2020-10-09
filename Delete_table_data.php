<?php
include_once './index.php';
//Hard delete
$query="delete from tbl_emp1 where id=2";
$sql_delete = mysqli_query($con, $query);
if ($sql_delete)
{
    
    echo "<br> &block;&blk34;&blk12;&blk14; Data Deleted &check;";
}
else
{
    die("<br> error to delete &gla;");
}
//Soft delete
/*$query1="";
$query2="delete from tbl_emp1 where id=2";
$sql_delete1 = mysqli_query($con, $query);
if ($sql_delete)
{
    
    echo "<br> &block;&blk34;&blk12;&blk14; Data Deleted &check;";
}
else
{
    die("<br> error to delete &gla;");
}*/