<?php
//include('db.php');
function getUsers(){
   /*$ss= mysql_query("select * from info");
   $data = array();
   while ($row=mysql_fetch_array($ss)){*/
   $data[] = "0000". " " . "TimLee" . " " . "tim@nknu.edu.tw" . " " . "Male".'';
   $fabdata = json_encode($data);
   
   return $fabdata;
}
ini_set("soap.wsdl_cache_enabled","0");
$server = new SoapServer("user.wsdl");
$server->AddFunction("getUsers");
$server->handle();
?>