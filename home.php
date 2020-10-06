<?php
include "conf.php";
if(isset($_GET['is'])){
  $name = $_GET['name'];
  $sql = mysqli_query($db1, "DELETE FROM file_info WHERE file_name = '$name'");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>HOME</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center" body style="background-image:url(PICS/13.jpg)" >
	  
	  
	<div class="card"style="width: 50%; margin:0 auto; padding-top:30px; padding-bottom:30px; padding-right:30px; padding-left:30px ">
		<h1 class="h3 mb-3 font-weight-normal"><b><b> WELCOME</b></b></h1>	
   
	  
		 
		  <form class="form"name="form" value="form" method="post" action="home2.php" enctype="multipart/form-data">

	<table style=width:100% ;padding-right:70px; >	  
		<tr> <td> 
			<input type="file" name="audio" >
      <select name="c_file_type">
        <option value="mp3">mp3</option>
        <option value="wav">wav</option>
        <option value="ogg">ogg</option>
      </select>
    
			</td>
			<td>
    <button class="btn btn-lg btn-primary btn-block"  type="submit" name="submit">CONVERT</button>
			</td></tr>
	</table>
  </form>
	  
	
	  
	  </div> 
	  
	  
</body>
</html>
	 