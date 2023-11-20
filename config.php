<?php
require('grosscart\stripe\stripe-php-master\stripe-php-master\init');

$publish = "pk_test_51M0h7uSDgU4QTgsDCnzb09G23BjqT5i2Yk6cFn54paoRBHlpfNFKIPGhm0F1BVKM52Wj7DWnIORNf3Ro9k91XNHn00yY4pbsoB";
$secret = "sk_test_51M0h7uSDgU4QTgsDFZSmJljDBKVXo5CNMfkMSFgsiwlnwey7GhdNoPVW2DNr8Q4xP4sbhtcxpNWNz2MhZXtb8e3800mbOFiGxI";
\Stripe\Stripe::setApiKey($secret);
?>