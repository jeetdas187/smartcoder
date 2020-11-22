<!DOCTYPE html>
<html>
<head>
	<title>school management system</title>
</head>
<body>
<?php
include('admin/header.php');

?>
<h3 align="right"><a href="login.php">Adminlogin</a></h3>
<h1 align="center"> welcome to student management system</h1>
<form method="post" action="index.php">
<table style =width:30% align="center" border="1" class="a">
        <th colspan="2">student information</th>
        <tr>
            <td>chose standered</td>
          <td><select name="std" required >
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
             </select>
         </td>
    </tr>
    <tr>
        <td>Enter rollno</td>
        <td><input type="text" name="rollno" reqiired="reqiired" ></td>
    </tr>
     <tr >
        <td  colspan="2" align="center"><input type="submit" name="submit" value="show info"reqiired ></td>
    </tr>
</table>
</form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
    include('dbcon.php');
   $standerd = $_POST['std'];
   $rollno =$_POST['rollno'];

//<!--//include('function.php');
//showdetails($standerd,$rollno);
//
//}
//
//
//function showdetails($standerd,$rollno)
//{
// -->
   $sql = "SELECT * FROM `student` WHERE rollno = '$rollno' AND standerd = 'standerd'";
   $run = mysqli_query($con,$sql);
   if(mysqli_num_rows($run)>0)
     {
          $data=mysqli_fetch_assoc($run);
        ?>
          <table  align:center; >
            <tr>
                  <th colspan="3">student Details</th>
            </tr>
            <tr>
                  <td rowspan="5"><img src="dataimg/<?php echo $data['image'];?>"   style="max-height: 150px; max-width: 120px;"/>  </td>
                  <th>Roll no</th>
                  <td><?php echo $data['rollno];?></td>
            </tr>
             <tr>
                 
                  <th>name</th>
                  <td><?php echo $data['name'];?></td>
            </tr>
             <tr>
                 
                  <th>standerd</th>
                  <td><?php echo $data['standerd'];?></td>
            </tr>
             <tr>
                 
                  <th>Parent cont no</th>
                  <td><?php echo $data['pcont'];?></td>
            </tr>
                  
            <tr>
                 
                  <th>city</th>
                  <td><?php echo $data['city'];?></td>
            </tr>
               </table>
          <?php
     }
     else
     {
          ?>
            <script>
             alert('record not found.');
            window.open('index.php','_self');
         <?php

    
     }  
}
?>     


               
