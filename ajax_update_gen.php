<?

include "conn.php";
include "function.php";
$user=id_user_hash();
//if(!empty($_POST['numid'])) {
$nametable= $_POST['nametable'];
$namefieldwrite= $_POST['namefieldwrite'];
$datawrite= $_POST['datawrite'];
$nameid= $_POST['nameid'];
$numid=  $_POST['numid'];

sqlread("INSERT INTO order_gen(n_order) VALUES ('55') ");

//sqlread("UPDATE ".$nametable." SET ".$namefieldwrite."     ='$datawrite'    WHERE ".$nameid." = '$numid' ");



 //  echo json_encode($article_data);
   exit;
//}
//}
?>
