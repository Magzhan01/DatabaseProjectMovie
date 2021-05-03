<?php
$conn = oci_connect('system', 'mirza26102010', 'localhost/xe');
      
  if(!$conn)
  {
    echo 'connection error';
  }
  else
  {
    echo 'connection successful';
  }
  ?>