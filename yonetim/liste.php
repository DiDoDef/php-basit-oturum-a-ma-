<?php
include("../vt_baglan.php");
session_start();
if (!isset($_SESSION["kullanici"])){
	header("location:yetkisiz.php");
}
else
{
echo"Admin Paneli <br>";
echo "<a href =\"logout.php\">Çıkış Yap </a>";
}
?>








