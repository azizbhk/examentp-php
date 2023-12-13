<?php
require('db.php');




if (isset($_REQUEST['payment'])) {

  $pay_id = mysqli_real_escape_string($conn, $_REQUEST['id']);
  $amount = mysqli_real_escape_string($conn, $_REQUEST['amount']);

  $update_query="update payment set pay_id='$pay_id',amount='$amount' where pay_id='".$_GET['id']."'";
  $update_sql=mysqli_query($conn,$update_query);
  $err="<div class='alert alert-success'><b>Payment Area Details updated</b></div>";
}
$con=mysqli_query($conn,"select * from payment where pay_id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);  



?>


<div class="container">
	<form class="mt-3 form-group" method="post" action="">
		<h3>UPDATE PAYMENT AREA</h3>
		 <?php 
    echo @$err;

    ?>
		<label class="mt-3">PAYMENT AREA ID</label>
		<input type="text" name="id" value="<?php echo @$res['pay_id'];?>" class="form-control">
		<label class="mt-3">AMOUNT</label>
		<input type="text" name="amount" value="<?php echo @$res['amount'];?>" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="payment">UPDATE</button>
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