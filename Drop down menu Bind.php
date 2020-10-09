
<?php
include './Connection.php';
?>

<select name = 'Country'>
<option value=""></option> 
<?php
$sql="SELECT `contryid`, `cname` FROM `tbl_country`;";
$result= mysqli_query($con, $sql);

if($result->num_rows>0){
    while ($row = $result->fetch_assoc())
    {      
        echo"<option value='".$row["contryid"]."'>".$row["cname"]."</option>";
    }
} 
?>
</select>