<?php
session_start();
ob_start();
session_destroy();
unset($_SESSION['kullanici']);
echo "<center>Çıkış yaptınız.  </center>";
header ("refresh:2;  url=index.php");
ob_end_flush();
?>