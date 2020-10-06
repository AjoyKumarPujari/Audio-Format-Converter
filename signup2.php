<?php
include_once 'conf.php';

if(isset($_POST['submit']))
{	 
	 $a	 = $_POST['NAME'];
	 $b = $_POST['EMAIL'];
	 $c = $_POST['PHNO'];
	 $d = $_POST['PASSWORD'];
	                            //database field name                                      variable name
	 $sql = "INSERT INTO user (NAME	,EMAIL,PHNO,PASSWORD) VALUES ('$a','$b','$c','$d')";
	 


	 if (mysqli_query($db1, $sql)) 
	 {
		echo "New record created successfully !";
		 header('Location: index.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($db1);
	 }
	 mysqli_close($db1);
}
?>