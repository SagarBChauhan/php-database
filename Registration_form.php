<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            header {
                 background-color:#293d3d;
                 padding: 10px;
                 text-align: center;
                 font-size: 25px;
                 font-family: Times;
                 font-style: initial;
                 word-spacing: 8px;
                 letter-spacing: 3px;
                 color: azure;
                }
                 body
            {
                padding: 5rem;
                font-family: sans-serif;
                font-size: 15px;
            }
             .stylish
            {
                padding: 0.6rem 1rem;
                border: 0px none transparent;
                border-bottom:2px solid black;
                outline: none;
                inline-box-align: initial
            }
            fieldset 
            {
                padding: 1em;
                font:90%/1 sans-serif;
            }
           
            fieldset { border:3px solid black}

            legend {
              padding: 0.2em 0.5em;
             
              
              font-size:150%;
              text-align:center;
              }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        include './index.php';
        ?>
    <center>
        <fieldset>
            <legend><header>Student Registration Form</header></legend>
        <table>
            <form action="#" method="POST">
                
            <tbody>
                <tr>
                    <td><b>Department Name:</b></td>
                    <td><select name="Department" class="stylish">
                            <option value="BMIIT">BMIIT</option>
                            <option value="Architecture">Architecture</option>
                            <option value="Farmacy">Farmacy</option>
                            <option value="Automobiles">Automobiles</option>
                        </select></td>
                </tr>
                <tr>
                    <td><b>Event Name:</b></td>
                    <td><input type="radio" name="event" value="Techincal" checked="Techincal" />Techincal
                    <input type="radio" name="event" value="Non Techincal" />Non Techincal</td>
                </tr>
                <tr>
                    <td><b>Event Type:</b></td>
                    <td><select name="event" class="stylish">
                            <option value="Group">Group</option>
                            <option value="Individual">Individual</option>
                        </select></td>
                </tr>
                <tr>
                    <td><b>Enrollment No:</b></td>
                    <td><input type="text" name="eno" placeholder="Enter Eno" required="" class="stylish" /></td>
                </tr>
                <tr>
                    <td><b>Student Leader:</b></td>
                    <td><input type="text" name="sleader" pattern="[A-Z]{3,}*" title="Name Must be at least 3 Character." placeholder="student leader" required="" class="stylish"></td>
                </tr>
                <tr>
                    <td><b>Email:</b></td>
                    <td><input type="email" name="txtemail" required="" pattern="^[a-zA-Z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z){2,3})$" placeholder="Email ID" title="Email sould be vaild" class="stylish"></td>
                </tr>
                <tr>
                    <td><b>Contect No:</b></td>
                    <td><input type="text" name="txtcno" required="" pattern="^[6-9]\d{9}$" title="Contact number mush br 10 digit only" placeholder="Contact Number" class="stylish"></td>
                </tr>
                <tr>
                    <td><b>Gender:</b></td>
                    <td><input type="radio" name="gender" value="male" checked="male"/>male
                        <input type="radio" name="gender" value="female" />female</td>
                </tr>
                <tr>
                    <td><b>DOB:</b></td>
                    <td><input type="date" required="" name="dob" class="stylish"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit" class="stylish" />
                    <input type="reset" value="Reset" class="stylish" /></td>
                </tr>
                
            </tbody>
            </form>
        </table>
            </fieldset>
        </center>

    </body>
</html>
<?php
$query="Create table tbl_event_registration (id int primary key not null auto_increment,dept_name varchar(20),event_name varchar(20),event_type varchar(20), en varchar(12),stud_leader varchar(20), Email varchar(100), contact varchar(10), gender char(1)city varchar(20));";
$sql_create = mysqli_query($con, $query);
if ($sql_create)
{
    
    echo "<br> &block;&blk34;&blk12;&blk14; Table Created &check;";
}
else
{
    die("<br> &block;&blk34;&blk12;&blk14; error to create table &gla;");
}
?>