<?php
$keys = array('1AfY4Z7', 'Q8auPDI', 'NOxPzkL', 'iWCaMqJ', 'sZv5SAe',); // change these to your keys. put in ' s. Seperate with commas (,)
$sub = $_GET["key"];
if (in_array($sub,$keys,TRUE)) {
print('Whitelisted');
}
else
{
print ($_SERVER['REMOTE_ADDR']);
}
?>