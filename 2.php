<?php
header("Access-Control-Allow-Origin : http://10.30.29.59:63341");
header("Access-Control-Allow-Credentials : true");
header('Access-Control-Allow-Headers : Content-Type');
$str=file_get_contents('php://input');
var_dump($str);
exit();
$username=json_decode($str)->userName;
$password=json_decode($str)->password;
if($username== "123" && $password=="123"){
    $data=array("message"=>"success");
}else{
    $data=array("message"=>"error");
}
echo json_decode($data);
?>