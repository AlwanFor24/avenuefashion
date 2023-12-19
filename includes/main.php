</head>

<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="customer/my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Welcome :Guest"; 
          }
          else
          { 
              echo "Welcome : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> Items
          </a>
        </div>
        
        
        <ul class="login">

<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="customer_register.php" class="login__link">Daftar</a>';
} 
  else
  { 
      echo '<a href="customer/my_account.php?my_orders" class="login__link">Akun Saya</a>';
  }   
?>  
</li>


<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="checkout.php" class="login__link">Login</a>';
} 
  else
  { 
      echo '<a href="./logout.php" class="login__link">Logout</a>';
  }   
?>  
  
</li>
</ul>
      
      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="index.php">
            <img class="logo__img" src="images/logo.png" alt="logo" width="237" height="19">
          </a>
        </div>
        <nav class="main-nav">
          <ul class="categories">

            <!--<li class="categories__item">
              <a class="categories__link" href="#">
                Mens
               
              </a>
              </li>-->

            <li class="categories__item">
              <a class="categories__link" href="https://wa.me/qr/D3AUVAOVLKM7E1">
                Customer Service
               
              </a>
            </li>

            <!--<li class="categories__item">
              <a class="categories__link categories__link--active" href="shop.php">
                Shop
              </a>
            </li>-->

            <!--<li class="categories__item">
              <a class="categories__link" href="localstore.php">
                Local Stores
              </a>
            </li>-->
            <li class="categories__item">
              <a class="categories__link" href="https://www.google.com/maps/@-6.8678439,107.605137,9z?entry=ttu">
                Lokasi Toko
              </a>
            </li>
            <li class="categories__item">
              <a class="categories__link" href="about.php">
                Tentang Kami
              </a>
            </li>
          

          </ul>
        </nav>



</div>

</div>


        
        
  </header>