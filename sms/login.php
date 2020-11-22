 <?php
 session_start();
 if(isset($_SESSION['uid']))
 {
 header('location:admin/admindash.php');
 }
 ?>
 
 
 <html>
<head>
<title>
login page
</title>
</head>
<body>
<form action="login.php" method="post">
<table  align="center">
  <tr>
       <td>username:</td><td><input type="text" name="uname" required="required"></td>
  </tr>
  <tr>
        <td>password:</td><td><input type="password" name="pass" required="required"></td>
  </tr>
  <tr >
       <td colspan="2"align="center"><input type="submit" name="login" value="login"></td>
  </tr>
</table>
</form>
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['login']))
{
  $username = $_POST['uname'];
  $password = $_POST['pass'];
  
  
  $query = "select * FROM  admin WHERE username ='$username' AND password = '$password'";
  $run = mysqli_query($con,$query);
  $row = mysqli_num_rows($run);
        if($row == 1){ 
		             $data=mysqli_fetch_assoc($run);
					 $id=$data['id'];
                   
					$_SESSION['uid']=$id;
					header('location:admin/admindash.php');

               }
			   else 
			   {
			     ?>
                  <script>
				          alert('username or password not match !!');
						  window.open('login.php','_self');
				  </script>
                <?php 
				}
 }

                    

?>
