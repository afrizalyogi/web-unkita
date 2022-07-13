<?php
   $host        = "ec2-3-223-169-166.compute-1.amazonaws.com";
   $port        = "5432";
   $db_name     = "d3ae3t6dqhegbd";
   $db_user     = "wkgrmxwrggrbxm";
   $db_pass     = "998f739db23e32f02de001ee7b626f96830846e61b5637087328c1829b1c137f";

   $db = pg_connect("host=$host dbname=$db_name user=$db_user password=$db_pass");
?>