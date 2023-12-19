<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar navbar-inverse navbar-fixed-top Starts -->

<div class="navbar-header" ><!-- navbar-header Starts -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->


<span class="sr-only" >Toggle Navigation</span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>


</button><!-- navbar-ex1-collapse Ends -->

<a class="navbar-brand" href="index.php?dashboard" >Al Wahid</a>


</div><!-- navbar-header Ends -->

<ul class="nav navbar-right top-nav" ><!-- nav navbar-right top-nav Starts -->

<li class="dropdown" ><!-- dropdown Starts -->

<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><!-- dropdown-toggle Starts -->

<i class="fa fa-user" ></i>

<?php echo $admin_name; ?> <b class="caret" ></b>


</a><!-- dropdown-toggle Ends -->

<ul class="dropdown-menu" ><!-- dropdown-menu Starts -->

<li><!-- li Starts -->

<a href="index.php?user_profile=<?php echo $admin_id; ?>" >

<i class="fa fa-fw fa-user" ></i> Profil


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_products" >

<i class="fa fa-fw fa-envelope" ></i> Produk 

<span class="badge" ><?php echo $count_products; ?></span>


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_customers" >

<i class="fa fa-fw fa-gear" ></i> Customers

<span class="badge" ><?php echo $count_customers; ?></span>


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_p_cats" >

<i class="fa fa-fw fa-gear" ></i> Kategori Produk

<span class="badge" ><?php echo $count_p_categories; ?></span>


</a>

</li><!-- li Ends -->

<li class="divider"></li>

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"> </i> Log Out

</a>

</li><!-- li Ends -->

</ul><!-- dropdown-menu Ends -->




</li><!-- dropdown Ends -->


</ul><!-- nav navbar-right top-nav Ends -->

<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

<li><!-- li Starts -->

<a href="index.php?dashboard">

<i class="fa fa-fw fa-dashboard"></i> Dashboard

</a>

</li><!-- li Ends -->

<li><!-- Products li Starts -->

<a href="#" data-toggle="collapse" data-target="#products">

<i class="fa fa-fw fa-table"></i> Produk

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="products" class="collapse">

<li>
<a href="index.php?insert_product"> Tambah Produk </a>
</li>

<li>
<a href="index.php?view_products"> Lihat Produk </a>
</li>


</ul>

</li><!-- Products li Ends -->

<li><!-- Bundles Li Starts --->

<!--<a href="#" data-toggle="collapse" data-target="#bundles">

<i class="fa fa-fw fa-edit"></i> Bundles

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="bundles" class="collapse">

<li>
<a href="index.php?insert_bundle"> Insert Bundle </a>
</li>

<li>
<a href="index.php?view_bundles"> View Bundles </a>
</li>

</ul>

</li> Bundles Li Ends 

<li> relations li Starts 

<a href="#" data-toggle="collapse" data-target="#relations"> anchor Starts 

<i class="fa fa-fw fa-retweet"></i> Assign Products To Bundles Relations

<i class="fa fa-fw fa-caret-down"></i>

</a> anchor Ends 

<ul id="relations" class="collapse"> collapse Starts -->

<!--<li>

<a href="index.php?insert_rel"> Insert Relation </a>

</li>


<li>

<a href="index.php?view_rel"> View Relations </a>

</li>

</ul>


</li>-->



<li>

<a href="#" data-toggle="collapse" data-target="#manufacturers">

<i class="fa fa-fw fa-briefcase"></i> Brand

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="manufacturers" class="collapse">

<li>
<a href="index.php?insert_manufacturer"> Tambah Brand </a>
</li>

<li>
<a href="index.php?view_manufacturers"> Lihat Brand </a>
</li>

</ul>


</li>


<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#p_cat">

<i class="fa fa-fw fa-pencil"></i> Kategori Produk

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="p_cat" class="collapse">

<li>
<a href="index.php?insert_p_cat"> Tambah Kategori Produk </a>
</li>

<li>
<a href="index.php?view_p_cats"> Lihat Kategori Produk </a>
</li>


</ul>

</li><!-- li Ends -->


<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#cat">

<i class="fa fa-fw fa-arrows-v"></i> Kategori

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="cat" class="collapse">

<li>
<a href="index.php?insert_cat"> Tambah Kategori </a>
</li>

<li>
<a href="index.php?view_cats"> Lihat Kategori </a>
</li>


</ul>

</li><!-- li Ends -->


<!--
<li>

<a href="#" data-toggle="collapse" data-target="#store">

<i class="fa fa-fw fa-briefcase"></i> Lokasi Toko

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="store" class="collapse">

<li>
<a href="index.php?insert_store"> Tambah Lokasi Toko </a>
</li>

<li>
<a href="index.php?view_store"> Lihat Lokasi Toko </a>
</li>

</ul>

</li> store section li Ends -->


<li><!-- contact us li Starts -->

<a href="#" data-toggle="collapse" data-target="#contact_us"><!-- anchor Starts -->

<i class="fa fa-fw fa-pencil"> </i> Kontak Kami

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="contact_us" class="collapse">


<li>

<a href="index.php?edit_contact_us"> Kontak Kami </a>

</li>

<!--
<li>

<a href="index.php?insert_enquiry"> Tambah Enquiri </a>

</li>

<li>

<a href="index.php?view_enquiry"> Lihat Enquiri </a>

</li> -->

</ul>

</li> 

<li><!-- about us li Starts -->

<a href="index.php?edit_about_us">

<i class="fa fa-fw fa-edit"></i> Tentang Kami

</a>

</li><!-- about us li Ends -->

<!--
<li>
<a href="#" data-toggle="collapse" data-target="#coupons">

<i class="fa fa-fw fa-arrows-v"></i> Kupon

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="coupons" class="collapse">

<li>
<a href="index.php?insert_coupon"> Tambah Kupon </a>
</li>

<li>
<a href="index.php?view_coupons"> Lihat Kupon </a>
</li>

</ul>

</li>-->



<li>

<a href="#" data-toggle="collapse" data-target="#terms" >

<i class="fa fa-fw fa-table"></i> Kebijakan

<i class="fa fa-fw fa-caret-down"></i>

</a>
<ul id="terms" class="collapse">

<li>
<a href="index.php?insert_term"> Ubah Kebijakan </a> 
</li>

<li>
<a href="index.php?view_terms"> Lihat Kebijakan </a> 
</li>

</ul><!-- ul collapse Ends -->


</li><!-- terms li Ends -->



<li>

<a href="index.php?view_customers">

<i class="fa fa-fw fa-edit"></i> Lihat Customers

</a>

</li>

<li>

<a href="index.php?view_orders">

<i class="fa fa-fw fa-list"></i> Lihat Pesanan

</a>

</li>

<li>

<a href="index.php?view_payments">

<i class="fa fa-fw fa-pencil"></i> Lihat Pembayaran

</a>

</li>

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#users">

<i class="fa fa-fw fa-gear"></i> Admin

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="users" class="collapse">

<li>
<a href="index.php?insert_user"> Tambah Admin </a>
</li>

<!--<li>
<a href="index.php?view_users"> Lihat Admin </a>
</li>-->

<li>
<a href="index.php?user_profile=<?php echo $admin_id; ?>"> Edit Profile </a>
</li>

</ul>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"></i> Log Out

</a>

</li><!-- li Ends -->

</ul><!-- nav navbar-nav side-nav Ends -->

</div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php } ?>