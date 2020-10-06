<?
ini_set('display_errors','Off');
include "conn.php";
include "function.php";
encoding_sql();
//$user=id_user_hash($hash) ;
$user=id_user_hash();

$id =                   (int)$_POST['id'];
$n_account =            $_POST['n_account'];
$idclient =             (int)$_POST['idclient'];
$id_shipstat =          (int)$_POST['id_shipstat'];
$condition_pay =        (int)$_POST['condition_pay'];
$discount =             (int)$_POST['discount'];
$shipconditions =       (int)$_POST['shipconditions'];
$day_delivery =         (int)$_POST['day_delivery'];
$shiping_cost =         (int)$_POST['shiping_cost'];
$comment_gen =          $_POST['comment_gen'];
$comment_print_acc =    $_POST['comment_print_acc'];
$dater =                $_POST['dater'];

$comment_gen = addcslashes($_POST['comment_gen'], "\0..\37");
$comment_print_acc = addcslashes($_POST['comment_print_acc'], "\0..\37");


$rr=sqlread("SELECT * FROM account_gen WHERE id_ac_gen =   '$id ' ");
$ee=sqlread("SELECT * FROM client WHERE idclient = '$idclient' ");


//if (is_null($discount) or $discount <1 ) 
if ($rr['discount']==$discount ) 


{
    $discount=$ee['discount'];
}   


$ee=sqlread("UPDATE    account_gen SET 

number=             '$n_account',
discount=           '$discount',
idclient =          '$idclient',
shipment=           '$id_shipstat',
condition_pay=      '$condition_pay',
day_delivery=       '$day_delivery',
shipconditions=     '$shipconditions',
shiping_cost=       '$shiping_cost',
comment=            '$comment_gen',
comment_print_acc=  '$comment_print_acc',
accountofthe=      '$dater'  


WHERE id_ac_gen =   '$id'   ");



echo json_encode($discount);


?>