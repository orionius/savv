<?

include "../conn.php";
include "../function.php";

if(!empty($_POST['article_id'])) $article_id = (int)$_POST['article_id'];
if(isset($article_id)) {

sqlread("INSERT INTO user (name) VALUES ('QQQ') ");


   echo json_encode($article_data);
   exit;
}

?>