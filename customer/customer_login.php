<div class="box" ><!-- box Starts -->

<div class="box-header" ><!-- box-header Starts -->

<center>

<h1>Login</h1>

<p class="lead" >Sudah Daftar ?</p>


</center>

<p class="text-muted" >

</p>




</div><!-- box-header Ends -->

<form action="checkout.php" method="post" ><!--form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label>Email</label>

<input type="text" class="form-control" name="c_email" required >

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label>Password</label>

<input type="password" class="form-control" name="c_pass" required >

<h4 align="center">

<a href="forgot_pass.php"> Lupa Password </a>

</h4>

</div><!-- form-group Ends -->

<div class="text-center" ><!-- text-center Starts -->

<button name="login" value="Login" class="btn btn-primary" >

<i class="fa fa-sign-in" ></i> Login


</button>

</div><!-- text-center Ends -->


</form><!--form Ends -->

<center><!-- center Starts -->

<a href="customer_register.php" >

<h3>DAFTAR</h3>

</a>


</center><!-- center Ends -->


</div><!-- box Ends -->

<?php
//session_start(); // Start the session at the beginning of your script

if (isset($_POST['login'])) {
    $customer_email = $_POST['c_email'];
    $customer_pass = $_POST['c_pass'];

    // Use prepared statements or other secure methods to prevent SQL injection
    $select_customer = "SELECT * FROM customers WHERE customer_email=? AND customer_pass=?";
    
    // Assuming you have a database connection object $con
    $stmt = $con->prepare($select_customer);
    $stmt->bind_param("ss", $customer_email, $customer_pass);
    $stmt->execute();
    $result = $stmt->get_result();

    $check_customer = $result->num_rows;

    if ($check_customer == 0) {
        echo "<script>alert('Password or email is wrong')</script>";
        exit();
    }

    // User is authenticated
    $_SESSION['customer_email'] = $customer_email;

    // Redirect based on user role or other conditions
    header("Location: customer/my_account.php");
    exit();
}
?>
