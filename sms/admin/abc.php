<?php
include('../admin/header.php');

?>



<div class="admintitle" align="center">
  <h4><a href="login.php" style="float:right; margin-right:30px; line-height:70px; color:#fff;font-size:20px;">logout</a>
 
  </h4>
   <h1> welcome to student management system</h1>
</div>
<form method="post" action="index.php">
<table style =width:30% align="center" border="1" >
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
   $standerd = $_POST['std'];
   $rollno =$_POST['rollno'];
include('dbcon.php');
//include('function.php');
showdetails($standerd,$rollno);
               

}

function showdetails($standerd,$rollno)
{
 include('dbcon.php');
   
   $sql = "SELECT * FROM student WHERE rollno = '$rollno' AND standerd = '$standerd'";
   $run = mysqli_query($con,$sql);

   if(mysqli_num_rows($run)>0)
     {
	      $data=mysqli_fetch_assoc($run);
		  ?>
          <table border="1" text align="center" >
          	<tr>
          		  <th colspan="3">student Details</th>
          	</tr>
            <tr>
          		  <td rowspan="5"><img src="dataimg/<?php echo $data['image'];?>"   style="max-height: 150px; max-width: 120px;"/>  </td>
          	      <th>Roll no</th>
          	      <td><?php echo $data['rollno'];?></td>
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
            <tr>
          		 
          	      <th>name</th>
          	      <td><?php echo $data['name'];?></td>
            </tr>
                  
       


               
          </table>
          <?php
	 }
	 else
	 {
	   echo "<script>alert('no data found')</script>";

	 }
}
?>