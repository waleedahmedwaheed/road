<?php

$db= "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 127.0.0.1)(PORT = 1521))) (CONNECT_DATA = (SERVICE_NAME = XE)))";
$conn_o = oci_connect("waleed", "waleed", $db);
//$conn = oci_connect("rient", "rient", $db);


?>