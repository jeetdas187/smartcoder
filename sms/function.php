
   <?php
function showdetails($standerd,$rollno)
{
 include('dbcon.php');
   
   $sql = "SELECT * FROM student WHERE rollno = '$rollno' AND standerd = '$standerd'";
   $run = mysqli_query($con,$sql);

   if(mysqli_num_rows($run)>0)
     {
	      $data=mysqli_fetch_assoc($run);
		  ?>
          <table border="1">
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