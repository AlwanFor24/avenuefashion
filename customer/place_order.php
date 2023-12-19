<?php


include("./cart.php");
include("payment_options.php");
include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

/*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php)
composer require midtrans/midtrans-php
                              
Alternatively, if you are not using **Composer**, you can download midtrans-php library 
(https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require 
the file manually.   

require_once dirname(__FILE__) . '/pathofproject/Midtrans.php'; */
require_once dirname(__FILE__) . '/midtrans-php-master/Midtrans.php';

//SAMPLE REQUEST START HERE

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'Mid-server-yq1HK2cVW0mPIdynk-V6Z2hH';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

$params = array(
    'transaction_details' => array(
        'c_id' => $_POST['c_id'],
        'gross_amount' => $_POST['total'],
    ),
    'item_details' => json_decode($_POST['invoice_no'], true),
    'customer_details' => array(
        'first_name' => 'budi',
        'last_name' => 'pratama',
        'email' => $_POST['customer_email'],
        'phone' => $_POST['customer_contact'],
    ),
);

$snapToken = \Midtrans\Snap::getSnapToken($params);
echo snapToken;


?>