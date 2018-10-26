<?php
// turn off the WSDL cache
ini_set ("soap.wsdl_cache_enabled", "0");
$client = new SoapClient("user.wsdl");
$us = $client->getUsers();
$users= (array) json_decode($us);
while (list($key, $val) = each($users)) {
echo "$key => $val\n";
}
?> 