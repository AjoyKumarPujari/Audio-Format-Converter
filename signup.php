<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Signin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->

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
 <body class="text-center" body style="background-image:url(PICS/12.jpg)" >
  <div class="card"style="width: 408px; margin:0 auto; padding-top:30px; padding-bottom:30px; padding-right:30px; padding-left:30px ">
    <form class="form-signin"name="form" value="form" method="post" action="signup2.php">

  <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal"><b><u>Please sign up here:</u><b></h1>

  <label for="Name" class="sr-only">Name </label>
  <input type="text" id="name" name="NAME" class="form-control" placeholder="Enter Name" required autofocus><br>

  <label for="Email" class="sr-only">Email </label>
  <input type="email" id="email" name="EMAIL" class="form-control" placeholder="Enter E-mail" required autofocus><br>

  <label for="Phno" class="sr-only">Phone Number</label>
  <input type="varchar" id="Phno" name="PHNO" class="form-control" placeholder="Enter Phone Number" required autofocus><br>


  <label for="Password" class="sr-only">Password</label>
  <input type="varchar" id="Password" name="PASSWORD" class="form-control" placeholder="Enter Password" required><br><br>
  
  <button  class="btn btn-lg btn-primary btn-block" name="submit"type="submit"><b>Sign in<b> </button>

  
</form>
</div>
</body>
</html>

