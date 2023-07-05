<?php
$txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
$tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
$cor = isset($_GET["cor"])?$_GET["cor"]:"#000000"
?>


<?php
echo "<span class='texto'>$txt</span>";
?>
