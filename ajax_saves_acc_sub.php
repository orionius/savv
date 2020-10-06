<?
ini_set('display_errors','Off');
include "conn.php";
include "function.php";
encoding_sql();
$user=id_user_hash();

$id_ac_sub =        (int)$_POST['id_ac_sub'];
$number =           (int)$_POST['number'];
$name_equipment =   $_POST['name_equipment'];
$id_alg =           $_POST['id_alg'];
$unit =             $_POST['unit'];
$price_sale =       $_POST['price_sale'];
$salesum =          $_POST['salesum'];

$row=sqlread("SELECT * FROM algorythm WHERE id = '$id_alg' ");
$config=$row['config'];
$config = trim($config, "\x00..\x1F");

$ee=sqlread("UPDATE    account_sub SET 
number=         '$number',
idalgorythm=    '$id_alg',
unit=           '$unit',
price_sale=     '$price_sale',
salesum=        '$salesum',
config=         '$config',
name_equipment= '$name_equipment'

WHERE id_ac_sub = '$id_ac_sub'   ");



echo json_encode($discount);
