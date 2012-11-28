<?php
session_start();
session_unregister("unc");
echo "<script>window.location.href='index.php';</script>";
?>
