<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Description</title>
    <link rel="stylesheet" href="stylea.css" />
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <style>
      * {
        margin: 0;
        padding: 0;
      }
      .body {
        background: url(img/web.jpg);
      }
      .des{
        margin-top: -50px;
      }
      a{
        text-decoration: none;
        color: aliceblue;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form action="" method="POST" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight: 800">Description</p>
        <p class="login-text" style="font-size: 1rem; font-weight: 500">Mohon diisi dengan benar, Kami akan mengirim lewat email</p>
        <p class="login-text des" style="font-size: 1rem; font-weight: 500">Please fill in correctly, We will send via email</p>
        <div class="input-group">
					<button name="submit" class="btn"> <a href="logoutdes.php">Logout</a></button>
				</div>
      </form>
    </div>
  </body>
</html>
