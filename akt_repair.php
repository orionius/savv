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

<? echo space(50) ; $id=$_GET['id'];?> ��� � ������������� ������������  �  <b><?  echo $id ; echo "</b> �� <b>".date("d.m.Y");  ?> �</b> <br>

<?
    $row=sqlread("SELECT * FROM return_board_sub WHERE id_ret = '$id' ");
    $id_gen_ret=     $row['id_gen_ret'];
    $ser_box=        $row['ser_box']; 
    $breaking=       $row['breaking'];
    $repaired=       $row['repaired'];
    $id_board=       $row['id_board'];
    $client=         $row['client'];



?>

    �����: 	         <b>  ������ </b>                 <? echo space(60) ; ?>     <br>  <br> 
                       
��������  	<b>	<? echo full_name_client_id($client) ;?> </b> <br>  <br> 
                                 			

������������: <big><b>	<? echo name_board_id($id_board) ;?> </h4> </b> </big>  <br>  <br> 


��������� ����� �����:  <b><? echo $ser_box ;?></b>    <br>  <br> 
���� ������������ � ����� ����� ______________________________________________   <br>  <br> 
���� �������: _______________________________________________________________    <br>  <br> 

�������� �������������: <h2><b> <? echo $breaking; ?></h2>  <br>  <br> 
</b>

����������: <b>

<h2><? echo $repaired; ?>  </h2>
</b>
<br>  <br> <br>  <br> 
����� ��������:              <? echo space(57) ; ?>                      ������� �.�.    �������� �.�     <br>  <br> 
            
      


������������ �����:          <? echo space(49) ; ?>              ������ �.�._______________________   <br>  <br> 
(����, �������)     

�.�.
���������� ����:             <? echo space(20) ; ?>             ����� �.�._______________________        <br>  <br> 
(�.�.�. ���������)


