<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "mysql");
define("DATABASE", "crud_operation");

$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if (!$connection) {
    die("Connection Failed");
}
