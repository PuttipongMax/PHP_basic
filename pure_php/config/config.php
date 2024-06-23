<?php 
 $connection = pg_connect("host=localhost dbname=approve_ref_interest user=postgres password=1234");
 if(!$connection){
  echo "An error occurred.<br>";
  exit;
 }

?>