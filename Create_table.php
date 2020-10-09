<?php
include_once './index.php';
$query="Create table tbl_emp1 (id int primary key not null auto_increment,name varchar(20),city varchar(20));";
$sql_create = mysqli_query($con, $query);
if ($sql_create)
{
    
    echo "<br> &block;&blk34;&blk12;&blk14; Table Created &check;";
}
else
{
    die("<br> &block;&blk34;&blk12;&blk14; error to create table &gla;");
}
