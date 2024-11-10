<?php

session_start();
session_unset();
session_destroy();//for logout we need to destroy created session

header("location: http://localhost/wooxtravel/");
?>