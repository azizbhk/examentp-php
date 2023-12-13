<?php
session_start();
require('db.php');
$username="";
$errors = array(); 

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  if (count($errors) == 0) {
    $query = "SELECT * FROM login WHERE uname='$username' AND pwd='$pwd'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['uname'] = $username;
      header("location:home.php?info=add_member");
    }else {
      array_push($errors, "<div class='alert alert-warning'><b>Wrong username/password combination</b></div>");
    }
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>AZIZOS GYM</title>
  <link rel="stylesheet" href="styles.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style type="text/css">
body {
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
/* styles.css */

.gym-name {
    color: #dc3545; /* Rouge, ou toute autre couleur de votre choix */
    font-size: 2em; /* Taille de la police, ajustez selon vos préférences */
    /* Autres styles que vous souhaitez appliquer */
}


.background {
    position: fixed;
    z-index: -1000;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.form {
    width: 30%;
    margin: 7% auto;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #dc3545; /* Rouge */
    color: #fff; /* Texte blanc sur fond rouge */
}

hr {
    border: none;
    height: 1px;
    background-color: #dc3545; /* Rouge */
    margin: 20px 0;
}

.navbar {
    background-color: #dc3545; /* Rouge */
    padding: 10px;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    transition: background-color 0.3s ease-in-out;
}

.navbar:hover {
    background-color: #c82333; /* Une nuance plus foncée de rouge au survol */
}


</style>
</head>
<body>

	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
<div class="container-fluid">
<header>
        <h1 class="gym-name">AZIZOS GYM</h1>
    </header>
</div>
</nav>


<form class="form " action="" method="post">
	  <input type="text" class="form-control mb-2 mr-sm-2" name="username" placeholder="USERNAME" required> <br/>
	  <input type="password" class="form-control mb-2 mr-sm-2" name="pwd" placeholder="PASSWORD" required> <br/>
	  <button type="submit" class="btn btn-outline-light mb-2" name="login_user">Login</button>
</form>

<div class="background">
  <img src="6.gif">
  <style>
body {
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    z-index: -1;
}

.background img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.container {
    max-width: 600px;
    margin: auto;
}

.form-group {
    background-color: #dc3545; /* Rouge */
    color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
}

h3 {
    color: #fff;
}

label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
}

input {
    width: 100%;
    padding: 8px;
    margin: 5px 0 10px;
    box-sizing: border-box;
    border: 1px solid #fff;
    border-radius: 4px;
    color: #000;
    background-color: #fff;
}

button {
    background-color: #dc3545; /* Rouge */
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #c82333; /* Une nuance plus foncée de rouge au survol */
}

</style>

  
</div>

</body>
</html>