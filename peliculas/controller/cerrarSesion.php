<?php
session_start();
unset($_SESSION["login"]);
unset($_SESSION["nomUser"]);
header("Location: ../index.php");
