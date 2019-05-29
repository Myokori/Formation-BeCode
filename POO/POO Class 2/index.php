<?php
require("html.php");

$htm = new Htm();

echo $htm->CSS();
echo $htm->Meta();
echo $htm->Img();
echo $htm->Link();
echo $htm->JS();
?>