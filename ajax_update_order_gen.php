<meta charset="windows-1251">




<head>



<?

include "conn.php";
include "function.php";
header('Content-Type: text/html; charset=UTF-8');
mysql_set_charset('utf8');
$user=id_user_hash();

if(!empty($_POST['id'])) {
$id =             (int)$_POST['id'];
$idclient =       (int)$_POST['idclient'];
$type_zakaz =     (int)$_POST['type_zakaz'];
$date_begin =     $_POST['date_begin'];
$n_nz =           $_POST['n_nz'];
$n_account =      $_POST['n_account'];
$date_end =       $_POST['date_end'];
$date_shipment =  $_POST['date_shipment'];
$n_order =        $_POST['n_order'];
$note =           $_POST['note'];


if(!empty($idclient))       {sqlread("UPDATE order_gen SET client         ='$idclient'        WHERE id_order = '$id' ");}
if(!empty($type_zakaz))     {sqlread("UPDATE order_gen SET type_zakaz     ='$type_zakaz'      WHERE id_order = '$id' ");}
if(!empty($n_nz))           {sqlread("UPDATE order_gen SET n_nz           ='$n_nz'            WHERE id_order = '$id' ");}
if(!empty($date_begin))     {sqlread("UPDATE order_gen SET date_begin     ='$date_begin'      WHERE id_order = '$id' ");}
if(!empty($n_account))      {sqlread("UPDATE order_gen SET n_account      ='$n_account'       WHERE id_order = '$id' ");}
if(!empty($date_end))       {sqlread("UPDATE order_gen SET date_end       ='$date_end'        WHERE id_order = '$id' ");}
if(!empty($date_shipment))  {sqlread("UPDATE order_gen SET date_shipment  ='$date_shipment'   WHERE id_order = '$id' ");}
if(!empty($n_order))        {sqlread("UPDATE order_gen SET n_order        ='$n_order'         WHERE id_order = '$id' ");}
if(!empty($note))           {sqlread("UPDATE order_gen SET note           ='$note'            WHERE id_order = '$id' ");}
 //  echo json_encode($article_data);
   exit;
}

?>

</head>