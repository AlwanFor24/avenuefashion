<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
  <!--<script type="text/javascript"
		src="https://app.stg.midtrans.com/snap/snap.js"
    data-client-key="Mid-client-6SH_nKsrhjqZj-R9"></script>-->
  <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
</head>
  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">Checkout</span>
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>



<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->




<div class="col-md-12" ><!-- col-md-12 Starts -->


<?php

if(!isset($_SESSION['customer_email'])){

include("customer/customer_login.php");


}else{

include("payment_options.php");

}



?>


</div><!-- col-md-12 Ends -->


</div><!-- container Ends -->
</div><!-- content Ends -->


<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->




<div class="col-md-12" ><!-- col-md-12 Starts -->

<!--<button id="pay-button">Pay!</button>
<div id="snap-container"></div>-->

<script>
// For example trigger on button clicked, or any time you need
var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
//minta token transaksi pake ajax
try{
 window.snap.embed(token);
const response =  fetch('customer/place_order.php', {
  method : 'POST',
  body : data,
});


} catch (err) {
  console.log.(err.message);
}
    });
</script>
<a>
</div><!-- col-md-12 Ends -->


</div><!-- container Ends -->
</div><!-- content Ends -->

<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
