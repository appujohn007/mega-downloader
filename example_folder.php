<?php
//ini_set('display_errors',true);
require_once('src/mega.class.php');

$megafile = new MEGA('https://mega.nz/folder/oz8FGQiT#de8iKW7PbjMmFx6Q6ShL5Q');

$megafile->download_zip(); // to download using streams. Make sure you have enough space for folder in /tmp
?>
