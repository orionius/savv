<?

include "conn.php";
include "function.php";
$user=id_user_hash();
if(!empty($_POST['idsub']) ) { 
$idsub =      (int)$_POST['idsub'];
$quantity =   (int)$_POST['quantity'];
$id_alg =     (int)$_POST['id_alg'];
$note =       $_POST['note'];
$price =      $_POST['price'];

//if(isset($datas)) {

if(!empty($quantity)) {sqlread("UPDATE order_sub SET quantity   ='$quantity'  WHERE id_order_sub = '$idsub' ");}
if(!empty($id_alg))   {sqlread("UPDATE order_sub SET algorithm  ='$id_alg'    WHERE id_order_sub = '$idsub' ");}
if(!empty($note))     {sqlread("UPDATE order_sub SET note_b     ='$note'      WHERE id_order_sub = '$idsub' ");}
if($price>-1)    {sqlread("UPDATE order_sub SET price      ='$price'     WHERE id_order_sub = '$idsub' ");}

 //  echo json_encode($article_data);
   exit;
}

?>