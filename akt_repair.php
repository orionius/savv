<? session_start(); ?>

<?php

?>

<head>


</head>

<?
include 'conn.php';
include 'function.php';
$user=id_user_hash();
 session_start();
?>

<? echo space(50) ; $id=$_GET['id'];?> АКТ О НЕИСПРАВНОСТИ ОБОРУДОВАНИЯ  №  <b><?  echo $id ; echo "</b> от <b>".date("d.m.Y");  ?> г</b> <br>

<?
    $row=sqlread("SELECT * FROM return_board_sub WHERE id_ret = '$id' ");
    $id_gen_ret=     $row['id_gen_ret'];
    $ser_box=        $row['ser_box']; 
    $breaking=       $row['breaking'];
    $repaired=       $row['repaired'];
    $id_board=       $row['id_board'];
    $client=         $row['client'];



?>

    Город: 	         <b>  Москва </b>                 <? echo space(60) ; ?>     <br>  <br> 
                       
Заказчик  	<b>	<? echo full_name_client_id($client) ;?> </b> <br>  <br> 
                                 			

Оборудование: <big><b>	<? echo name_board_id($id_board) ;?> </h4> </b> </big>  <br>  <br> 


Заводской номер блока:  <b><? echo $ser_box ;?></b>    <br>  <br> 
Дата приобретения и номер счета ______________________________________________   <br>  <br> 
Дата монтажа: _______________________________________________________________    <br>  <br> 

Описание неисправности: <h2><b> <? echo $breaking; ?></h2>  <br>  <br> 
</b>

Заключение: <b>

<h2><? echo $repaired; ?>  </h2>
</b>
<br>  <br> <br>  <br> 
Члены комиссии:              <? echo space(57) ; ?>                      Качурин В.В.    Зеленцов В.В     <br>  <br> 
            
      


Руководитель фирмы:          <? echo space(49) ; ?>              Долгих В.В._______________________   <br>  <br> 
(дата, подпись)     

М.П.
Контактное лицо:             <? echo space(20) ; ?>             Ершов С.А._______________________        <br>  <br> 
(Ф.И.О. должность)


