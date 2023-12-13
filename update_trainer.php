<?php
require('db.php');





if (isset($_REQUEST['trainer'])) {

  $trainer_id = mysqli_real_escape_string($conn, $_REQUEST['id']);
  $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
  $time = mysqli_real_escape_string($conn, $_REQUEST['time']);
  $mobileno = mysqli_real_escape_string($conn, $_REQUEST['mobileno']);


  $update_query="update trainer set trainer_id='$trainer_id',name='$name',time='$time',mobileno='$mobileno' where trainer_id='".$_GET['id']."'";
  $update_sql=mysqli_query($conn,$update_query);
  $err="<div class='alert alert-success'><b>Trainer Details updated</b></div>";
}
$con=mysqli_query($conn,"select * from trainer where trainer_id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);  



?>




<div class="container">
	<form class="mt-3 form-group" method="post" action="">
		<h3>UPDATE TRAINER</h3>
		 <?php 
    echo @$err;

    ?>
		<label class="mt-3">TRAINER ID</label>
		<input type="text" name="id" value="<?php echo @$res['trainer_id'];?>" class="form-control">
		<label class="mt-3">TRAINER NAME</label>
		<input type="text" name="name" value="<?php echo @$res['name'];?>" class="form-control">
		<label class="mt-3">TIME</label>
		<input type="text" name="time" value="<?php echo @$res['time'];?>" class="form-control">
		<label class="mt-3">MOBILE NO</label>
		<input type="text" name="mobileno" value="<?php echo @$res['mobileno'];?>" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="trainer">UPDATE</button>
	</form>
	<style>
		<style>
  body {
    background: url(4.gif) no-repeat center center fixed;
    background-size: cover;
  }

  .container {
    max-width: 500px;
    margin: auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 50px;
  }

  form {
    display: flex;
    flex-direction: column;
  }

  label {
    margin-top: 10px;
    font-weight: bold;
  }

  input {
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  button {
    background-color: #343a40;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  button:hover {
    background-color: #23272b;
  }

  h3 {
    text-align: center;
    color: #343a40;
  }
</style>

	</style>
</div>