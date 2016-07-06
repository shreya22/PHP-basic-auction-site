<?php
session_start();
session_unset(“USERNAME”);
require("config.php");
header("Location: " . $config_basedir);
?>