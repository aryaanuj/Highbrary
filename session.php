<?php
session_start();
include("database_connection.php");
if(!isset($_SESSION['user_id'])){session_destroy();exit();}

?>