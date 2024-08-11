<?php
session_start();
session_unset();
session_destroy();
ob_start();
header("location:form2.php");
ob_end_flush(); 
include 'form2.php';
//include 'home.php';
exit();
?>