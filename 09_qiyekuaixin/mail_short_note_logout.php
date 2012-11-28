<?php
session_start();
session_unregister("username");      //创建一个变量
session_unregister("host");
session_unregister("user");
session_unregister("pwd");
echo "<script>window.location.href='index.php';</script>";
?>