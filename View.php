<?php
include './index.php';

$sql="select * from tbl_emp1";
$result= mysqli_query($con, $sql);
$result=$con->query($sql);
$get_row = $result->fetch_row();
//$result->free();

echo "<table>";
while ($row=$result->fetch_object())
{
    print "<tr>";
    print '<td>'.$row->id.'</td>';
    print '<td>'.$row->name.'</td>';
    print "</tr>";
}
echo "</table>";
echo "Number of rows:".$result->num_rows;
echo "<br>Affected rows for particuler database conectivity:".$con->affected_rows;


/*echo "<table border='1'>";
if($result->num_rows>0){
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Name</th>";
    echo "</tr>";
    while ($row = $result->fetch_assoc()){
        echo "<tr><td>";
        echo $row["id"]."</td><td>".$row["name"];
        echo "</td><tr>";
    }
} */
/*

$sql="select * from tbl_emp1";
$result= @mysqli_query($con, $sql);

while (($row=  mysqli_fetch_row($result))!=FALSE)
{
    echo "{$row[0]}";
    echo "{$row[1]}";
}

 */
mysqli_fetch_array($result);