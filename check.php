<?php
$keys = array('key1', 'key2',); // change these to your keys. put in ' s. Seperate with commas (,)
$sub = $_GET["key"];
if (in_array($sub,$keys,TRUE)) {
print('Whitelisted');
}
else
{
print ($_SERVER['REMOTE_ADDR']);
}
?>