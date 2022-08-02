<?php
include("../vt_baglan.php");
ob_start();
session_start();
$kadi=$_POST['kadi'];
$sifre=$_POST['sifre'];
$getir=mysqli_query($baglanti,"SELECT *FROM kullanici WHERE  kadi='$kadi' and sifre='$sifre'");
if($satir=mysqli_fetch_array($getir))
{
	$_SESSION["kullanici"]="true";
	$_SESSION["user"]=$kadi;
	$_SESSION["pass"]=$sifre;
	header("location:liste.php");
	
}
else
{
	  echo "Kullanici adı ya da şifre geçersiz <br>";
	  header("refresh:1; url=index.php");
}
?>








