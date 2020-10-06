<?php
	session_start();
	include "conf.php";
	if(isset($_POST["submit"]))
	{
		$Email=$_POST["Email"];
		$Password=$_POST["Password"];
		$sql="Select * from user where EMAIL='$Email' && PASSWORD='$Password'";
		$result=mysqli_query($db1,$sql);
		$n=mysqli_num_rows($result);
			if($n==0)
			{
				header("location:login.php?user=null");	
			}
			else
			{
				$row=mysqli_fetch_array($result);
				if($Password==$row["PASSWORD"])
				{
					$_SESSION["Email"]=$Email;
					header("location:home.php");
				}
				else
				{
					header("location:index.php");	
				}
			}
		
				
		
		
	}
?>