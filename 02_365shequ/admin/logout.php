<?php
session_start();
session_unregister("admin_nc");
echo "<script>window.location.href='../index.php';</script>";

?>