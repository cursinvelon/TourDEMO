<?php
$xml = $_POST['data'];
$losowa = $_POST['losowa'];

if(get_magic_quotes_gpc())
{
   $xml = stripslashes($xml);
}

$dir = "skin/stickers";
@mkdir($dir, 0777, true);
$file = $dir.'/'.$losowa.'.xml';
file_put_contents($file, $xml);

?>
