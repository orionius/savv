<?
include '../conn.php';
include '../function.php';

if (!empty($_POST['id']) ) {

    $id=$_POST['id'];

            $row=sqlread("SELECT count(id_order) AS cnt   FROM order_gen  ");   
            $cnt=$row['cnt'];
     
            $change = array('cnt' => $cnt   ) ;
            echo json_encode($change);
}

?>