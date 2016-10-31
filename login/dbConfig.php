<?php
define ("DB_HOST", "vps.cloud.chrisune.com"); // set database host
define ("DB_USER", "admin_test"); // set database user
define ("DB_PASS","chu26262"); // set database password
define ("DB_NAME","admin_test"); // set database name

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");
?>