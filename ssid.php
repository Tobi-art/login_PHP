<?php
// session_start();
// $ssid = session_id();
// echo $ssid;
?>

<?php

session_start();
$old_ssid = session_id();
session_regenerate_id(true);
$new_ssid = session_id();

echo "Old ID: $old_ssid <br>";
echo "New ID: $new_ssid";


?>