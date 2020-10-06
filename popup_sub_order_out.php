

<html>
<body>
<form name=modal>

<STYLE>

                                #pole_null {

width: 0px; /* Ширина поля в пикселах */
font-size: 0px; 

font-color:rgba(0,0,0,0);


} 
                             #pole_nacc {

    width: 50px; /* Ширина поля в пикселах */

    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
 border: 0px double black; /* Параметры границы */
border: 1px solid #ccc; /* серая рамка */

   } 

                                #field_quant {

width: 40px; /* Ширина поля в пикселах */

font-size: 14px; 
text-align: center;
 font-family:'amaze';
 font-weight:bold;
border: 0px double black; /* Параметры границы */
border: 1px solid #ccc; /* серая рамка */

} 
   #pole_namelist {

width: 80%; /* Ширина поля в пикселах */

font-size: 20px; 
text-align: center;
 font-family:'amaze';
 font-weight:bold;
border: 0px double black; /* Параметры границы */
border: 1px solid #ccc; /* серая рамка */
background: Aquamarine;
} 

   #pole_ser {

width: 20%; /* Ширина поля в пикселах */

font-size: 20px; 
text-align: center;
 font-family:'amaze';
 font-weight:bold;
border: 0px double black; /* Параметры границы */
border: 1px solid #ccc; /* серая рамка */
background: Aquamarine;
} 


                             #pole_data {

    width: 100px; /* Ширина поля в пикселах */

    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
 border: 0px double black; /* Параметры границы */
border: 1px solid #ccc; /* серая рамка */

   } 
   #pole_quantity {

width: 50px; /* Ширина поля в пикселах */

font-size: 14px; 
text-align: center;
 font-family:'amaze';
 font-weight:bold;
border: 0px double black; /* Параметры границы */
border: 1px solid #ccc; /* серая рамка */

} 



                             #pole_checkb {

width: 30px; /* Ширина поля в пикселах */

font-size: 14px; 
text-align: center;
 font-family:'amaze';
 font-weight:bold;
border: 0px double black; /* Параметры границы */
border: 1px solid #ccc; /* серая рамка */

} 


                                #pole_alg {

width: 150px; /* Ширина поля в пикселах */

font-size: 14px; 
text-align: center;
 font-family:'amaze';
 font-weight:bold;
border: 0px double black; /* Параметры границы */
border: 1px solid #ccc; /* серая рамка */

} 

                             #comment {

    width: 300px; /* Ширина поля в пикселах */

    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
 border: 0px double black; /* Параметры границы */
border: 1px solid #ccc; /* серая рамка */

   } 
.block_namebox {


   
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 3%; /* Положение элемента от левого края */
    right:3%;

    top: 50px; /* Положение от верхнего края */

  height:80;
    padding: 5px; /* Поля вокруг текста */

overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
 background: url(images/block_fon.jpg)  no-repeat center center fixed;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */   

       margin:3px 3px 3px 5px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.5); /* Параметры тени */
      margin: auto; /* Выравниваем по центру */   
                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 0.9; /* Значение прозрачности */
                     }   


       .block_subprodukt
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 3%; /* Положение элемента от левого края */
    right:3%;

    top: 150px; /* Положение от верхнего края */

  height:30%;
    padding: 5px; /* Поля вокруг текста */

overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
 background: url(images/block_fon.jpg)  no-repeat center center fixed;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */   

       margin:3px 3px 3px 5px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.5); /* Параметры тени */
      margin: auto; /* Выравниваем по центру */   
                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 0.9; /* Значение прозрачности */
                     }   

.genblock

     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 3%; /* Положение элемента от левого края */
    right:3%;

    top: 320; /* Положение от верхнего края */

  height:30%;
    padding: 5px; /* Поля вокруг текста */

overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
 background: url(images/block_fon.jpg)  no-repeat center center fixed;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */   

       margin:3px 3px 3px 5px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.5); /* Параметры тени */
      margin: auto; /* Выравниваем по центру */   
                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 0.9; /* Значение прозрачности */
                     }   




          .label
     {  
    margin:auto;
    /*  width: 95%; /* Ширина блока */  
    position: absolute; /* Абсолютное позиционирование */
    left:3%;
right:3%;
    top: 10px; /* Положение от верхнего края */

   height:30px;    
     background: rgba(0, 150, 0, 0.3); /* Цвет фона */
overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
    background: linear-gradient(to top, #008080, #ffecec);

 margin: auto;
position: absolute;
         
                  text-align: center;
                     border-radius: 4px;


                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 10; /* Значение прозрачности */

                     }   

       .block_sahapka
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 3%; /* Положение элемента от левого края */
    right:3%;

    top: 50px; /* Положение от верхнего края */
 
  height:80;
    padding: 5px; /* Поля вокруг текста */

overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
 background: url(images/block_fon.jpg)  no-repeat center center fixed;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */   

       margin:3px 3px 3px 5px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.5); /* Параметры тени */
      margin: auto; /* Выравниваем по центру */   
                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 0.9; /* Значение прозрачности */
                     }   
</STYLE>






<?
session_start();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }

//echo $_SESSION['iddpay'] . "=========" ; 

include "background.php";
include 'conn.php';
include 'function.php';
$user=id_user_hash();
$id=$_GET['id'];







/////////////////////////////////////////////////Добавить изделие в расход ///////////////////////
if (!empty($_GET['sub']) and $_GET['sub']=='Добавить') {
 //echo "<script>alert('У вас ". $id ."----".$idclient." ');</script>";

/*
ser_num
ser_num_box
quantity
client
vers_syst
id_alg
config
n_order
n_account
note
user
dates
qqq

*/
//alert('1');
$idsub=$_GET['idsub'];
$id=$_GET['id'];
$idgen=$_GET['idgen'];
$id_board=$_GET['id_board'];
$ser_num=$_GET['ser_num'];
$quantity=$_GET['quantity'];
$vers_syst=$_GET['vers_syst'];
$id_alg=$_GET['id_alg'];
$note=$_GET['note'];


$ser_num=strtoupper($ser_num); 


$order_sub_out=sqlread("SELECT * FROM order_sub_out WHERE id = '$idsub' ");
$order_gen=sqlread("SELECT * FROM order_gen WHERE id_order = '$idgen' ");
//$order_sub_out=sqlread("SELECT * FROM order_sub_out WHERE id = '$id' ");




$client=$order_gen['client'];
$n_account=$order_gen['n_account'];
$salesinvoice=$order_gen['salesinvoice'];

$snum_box=$order_sub_out['snum_box'];
$name_alg=name_algo_id($_GET['id_alg']);
$conf_alg=config_algo_id($_GET['id_alg']);


$user=$_SESSION['user']; 





/*$qq=sqlread("INSERT INTO give_board_sub(product,ser_num,ser_num_box,quantity,client,vers_syst,id_alg,algo,n_order,n_account,config,note,user,dates) 
                    VALUES('$id_board','$ser_num',$ser_num_box,'1','$client','$vers_syst','qqqqqqq','$idgen','$n_account','qqqqqq','$note','$user',NOW())  "); 
*/

$qq=sqlread("INSERT INTO give_board_sub(product,     ser_num,ser_num_box,quantity,client,    vers_syst,     id_alg,    algo,  n_order,  n_account,   config,note,user,dates,id_sub_ordout,id_give_gen) 
                                 VALUES('$id_board','$ser_num','$snum_box','$quantity','$client','$vers_syst','$id_alg','$name_alg','$idgen','$n_account','$conf_alg','$note','$user',NOW(),'$idsub','$salesinvoice')  "); 

 //                                                                      $qq=sqlread("INSERT INTO account_pay(user,id_ac_gen,num_pp,pay,dates,comment) VALUES('$user','$id',$num_pp,'$pay','$dates','$comment')  "); 
 //$qq= update_status_pay_acc($id);

 echo "<script> document.location.href='popup_sub_order_out.php?idsub=$idsub&idgen=$idgen'</script>"; 
}

///////////////////////////////Добавить в расход отмеченные
if (!empty($_POST['adding'])) { $id_prih_sub=$_GET['id_prih_sub'];

 $idsub= $_POST['idsub'];
 $idgen= $_POST['idgen'];
 $id_board=$_POST['idbrd'];
 $ser_num=$_POST['ser_num'];
 $idcheck = $_POST['idcheck'];
 $user=$_SESSION['user']; 

 $rr=sqlread("SELECT * FROM order_sub_out WHERE id = '$idsub' ");
 $snum_box=$rr['snum_box'];
 $id_alg=$rr['id_alg'];
   $mamealg=name_algo_id($id_alg);
   $confalg=config_algo_id($id_alg);
 $rr=sqlread("SELECT * FROM order_gen WHERE id_order = '$idgen' ");
 $client=$rr['client'];
 $salesinvoice=$rr['salesinvoice'];
 $n_account=$rr['n_account'];


if (is_array($idcheck)) { // Проверяем, является ли эта переменная массивом данных, если да, то исполняем код в цикле for, если нет, выходим из выполнения скрипта
  foreach ($idcheck as $key => $value) {

 //   $row=sqlread("SELECT * FROM order_sub_out WHERE id = '$value' ");

   
$rr=sqlread("SELECT * FROM order_gen WHERE id_order ='$idgen' ");
$numb_order=$rr['n_order'];

    $qq=sqlread("INSERT INTO give_board_sub(product,          user,    ser_num,         ser_num_box,  id_sub_ordout,id_alg,   client,   algo,     n_order,  config,    id_give_gen,  dates,  n_account,   numb_order) 
                                     VALUES('$id_board[$key]','$user','$ser_num[$key]',' $snum_box',' $idsub',     '$id_alg','$client','$mamealg','$idgen','$confalg','$salesinvoice',NOW(),'$n_account','$numb_order') "); 


  }}
  echo "<script> document.location.href='popup_sub_order_out.php?idsub=$idsub&idgen=$idgen'</script>"; 
}
/////////////////////// Изменить данные расходных////////////////////
if ($_SESSION['user']=='21' && !empty($_POST['dates']) ) { 
 $dates= $_POST['dates'];
 $idsub= $_POST['idsub'];
 $idgen= $_POST['idgen'];
 $id_give_sub= $_POST['id_give_sub'];
 
// alert($_POST['id_give_sub']);

sqlread("UPDATE give_board_sub SET dates = '$dates' WHERE id_give_sub='$id_give_sub'");


echo "<script> document.location.href='popup_sub_order_out.php?idsub=$idsub&idgen=$idgen'</script>"; 
}


//////////////////////////удалить ///////////////////////////


if ($_SESSION['user']=='21' && $_GET['del']=='yes') { 
$id_give_sub=$_GET['id_give_sub'];
$idsub= $_GET['idsub'];
$idgen= $_GET['idgen'];



 sqlread("DELETE FROM give_board_sub WHERE id_give_sub = '$id_give_sub' ");

 echo "<script> document.location.href='popup_sub_order_out.php?idsub=$idsub&idgen=$idgen'</script>"; 
}
/////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////шапка//////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////

//echo "<form action='popup_sub_order_out.php?id=$id' method='GET' id='shap'  >";
?><form action="popup_sub_order_out.php" method="GET" onsubmit="return sendForm(name);">

<? 
$idgen=$_GET['idgen'];
$idsub=$_GET['idsub'];
$dates=date("Y-m-d");






$row=sqlread("SELECT * FROM order_sub_out  WHERE  id='$idsub' ");

$id_board=$row['id_board'];
$name_board=name_board_id($id_board);
$snum_box=$row['snum_box'];

?><div class='label'>  <font color='Navy' size = 5  > <?  echo $name_board; ?>  </font > </div> <?

?> <div class='block_namebox'> <? 


 echo "<input type='text' visibility : hidden size=20 value=".$id." name='id'>"; 
 echo "<input type='text' visibility : hidden size=20 value=".$idgen." name='idgen'>"; 
 echo "<input type='text' visibility : hidden size=20 value=".$idsub." name='idsub'>"; 
 

/////........................список  продукции
//$id_board= $_SESSION['id_board'];
$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board'");
$sql = "SELECT * FROM cat_brd_prod ORDER BY name_product ASC ";
$result_select = mysql_query($sql);

?> <select name='id_board' id='pole_namelist' > <?
$object->name_product = $rr['name_product'] ;

echo   "<option  selected value=$id_board   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select>";
////..........................

echo "<input id='pole_ser' value = '$snum_box' >";





///// шапка талицы
$name =  array('Сер номер ','Кол','Версия сис'  ,'Алгоритм','Примечание') ;
$size =  array(' 100','40        ','153        ','150 '          ,'300'   ) ;
print_table_head($name,$size);

echo" <input type='text' id= 'pole_data' value='' placeholder = 'Сер номер' autofocus  name='ser_num'>";
echo" <input type='text' id= 'field_quant'  value='1' placeholder = 'Кол' name='quantity'>";
echo" <input type='text' id= 'pole_alg' value='' placeholder = 'Система V' name='vers_syst'>";
//echo" <input type='text' id= 'pole_alg'  value='' placeholder = 'Алгоритм' name='id_alg'>";

/////........................список алгоритмов
//$id_alg= $row['id_alg'];
$rr=sqlread("SELECT * FROM algorythm WHERE id = '$id_alg'");
$sql = "SELECT * FROM algorythm ORDER BY name ASC ";
$result_select = mysql_query($sql);
?> <select name="id_alg" id='pole_alg'  >  <? // onchange="document.getElementById('MyForms').submit()"
//.........
$object->name = $rr['name'] ;
echo   "<option  selected value=$id_alg   > $object->name   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name </option> ";}  
echo "</select>";
////..........................


//echo" <input type='text' id= 'pole_alg'value='' placeholder = 'Конфиг' name='config'>";
echo" <input type='text' id= 'comment' value='' placeholder = 'Примечание' name='note'>";

$rrr=sqlread("SELECT * , COUNT(id_give_sub)  AS cnt FROM give_board_sub where  id_sub_ordout='$idsub' ");
$cnt=$rrr['cnt'];
echo "<td  ' bgcolor='LightYellow'  id='field_quant' > <font color='black'   >   <input type = 'text' id='field_quant' name = 'cnt[]' value='$cnt' ></td>";

 ?> 
<? echo space(0); ?>  <input type='submit' name='sub'   value="Добавить"></button>

<!-- <input class='button' type="button" value="Внести оплату" onClick="window.opener.changeBut(document.modal.name.value); self.close()"> -->

<!-- <a href='#'><img src='images/dengadollar.png' width='20' height='20' alt='...'' onclick=' var qq = "<?php echo $id;?>"; window.open("popup_sub_order_out.php?id=" +qq, "modal", "width=600,height=300,screenX=500,screenY=500"); '></a> -->

<?

?> </div> <?

?>  </div><?
echo "</form >";


//////////////////////////////////////////состав блока /////////////////////////////////////////////
?><form action="popup_sub_order_out.php" method="POST" onsubmit="return sendForm(name);"> <?
?> <div class='block_subprodukt'> <? 
if (strlen(utf8_decode($snum_box)) <1   ) {$snum_box='0';}
$strSQL="SELECT * FROM manufact_board_sub WHERE  num_product LIKE '$snum_box'  "; $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {    while($row = mysql_fetch_array($rs)) {
$ser_num=$row['ser_num'];
$id_board=$row['id_board'];
$id_prih_sub=$row['id_prih_sub'];
$client=$row['client'];

$idsub= $_GET['idsub'];
$idgen= $_GET['idgen'];

$namebrd=name_board_id($id_board);



echo "<table border=0 height=3  cellpadding='0' cellspacing='1' bgcolor='#c0c0c0'   >";//," <width=300%>"," <cellpadding=5>";
echo "<td  'width=40 bgcolor='LightYellow'  > <font color='black'   >   <input type = 'hidden' name = 'idsub'  value = '$idsub' >   </td>";
echo "<td  'width=40 bgcolor='LightYellow' > <font color='black'   >   <input type = 'hidden' name = 'idgen'  value = '$idgen' >   </td>";
echo "<td  'width=40 bgcolor='LightYellow'  > <font color='black'   >   <input type = 'hidden' name = 'idbrd[]'  value = '$id_board' >   </td>";

echo "<td  'width=40 bgcolor='LightYellow' id='pole_checkb' > <font color='black'   >   <input type = 'checkbox' name = 'idcheck[]'  value = '$id_prih_sub' >   </td>";
echo "<td  'width=40 bgcolor='LightYellow'  > <font color='black'   >   <input type = 'hidden' id='pole_data'  name = 'id_prih_sub[]' value='$id_prih_sub' ></td>";
echo "<td  'width=40 bgcolor='LightYellow' id='pole_data' > <font color='black'   >   <input type = 'text' id='pole_data'  name = 'ser_num[]' value='$ser_num' ></td>";
echo "<td  ' bgcolor='LightYellow'  id='comment' > <font color='black'   >   <input type = 'text' id='comment' name = 'namebrd[]' value='$namebrd' ></td>";



?></tr>  <?

    }}
?> </table> <?


?><hr> <input type = 'submit' name = 'adding' value = 'Добавить в расход отмеченные '> <?

?></div> </form> <?
//////////////////////////////////расход//////////////////////////////////////////////////

 echo "<div class='genblock'>";


///// шапка талицы
$name =  array('Серийный № ','Наименование','Кол-во','Версия сис'  ,'Алгоритм','Примечание') ;
$size =  array(' 118','300        ','50        ','50','100 '          ,'300'   ) ;
print_table_head($name,$size);

$id=$_GET['id'];
$idgen=$_GET['idgen'];
$idsub=$_GET['idsub'];

$strSQL="SELECT * FROM give_board_sub WHERE  id_sub_ordout='$idsub'  ORDER BY ser_num DESC "; $rs = mysql_query($strSQL);

    if (!empty ($rs) ) {    while($row = mysql_fetch_array($rs)) {


echo "<table border=0 height=3  cellpadding='0' cellspacing='1' bgcolor='#c0c0c0'   >";//," <width=300%>"," <cellpadding=5>";
?><form action="popup_sub_order_out.php" method="POST" > <?
$id=$_GET['id'];
$id_give_sub =$row['id_give_sub'];


$comment =$row['note'];
$product =$row['product'];
$ser_num =$row['ser_num'];
$vers_syst =$row['vers_syst'];
$quantity =$row['quantity'];
$id_alg=$row['id_alg'];


$nameprodukt= name_board_id($product); 

//$dates=date("d.m.Y",strtotime($dates));
$dates =$row['dates'];

$rr1=sqlread("SELECT * FROM account_gen WHERE id_ac_gen = '$id' ");
$n_acc=$rr1['number'];

echo " <td> <a href='popup_sub_order_out.php?idsub=".$idsub."&idgen=".$idgen."&id_give_sub=".$id_give_sub."&del=yes'><img src='images/krest1.png' width='15' height='15' alt='Пример''></a></td> ";  // удаление 



echo "<td  'width=40 bgcolor='LightYellow' id='pole_data' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self '  style='color:DarkBlue;'  >$ser_num</a></td>";
echo "<td  'width=40 bgcolor='LightYellow' id='comment' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self '  style='color:DarkBlue;'  >$nameprodukt</a></td>";
echo "<td  'width=40 bgcolor='LightYellow' id='pole_quantity' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self '  style='color:DarkBlue;'  >$quantity</a></td>";
echo "<td  'width=40 bgcolor='LightYellow' id='pole_nacc' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self '  style='color:DarkBlue;'  >$vers_syst</a></td>";
echo "<td  'width=40 bgcolor='LightYellow' id='pole_data' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self '  style='color:DarkBlue;'  >".name_algo_id($id_alg)." </a></td>";
echo "<td  'width=40 bgcolor='LightYellow' id='comment' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self '  style='color:DarkBlue;'  >$comment</a></td>";

 echo "<td  'id='pole_null' > <font color='black'   > <input type = 'text' id='pole_null' name = 'id_give_sub'  value = '$id_give_sub' >   </td>";
if( $_SESSION['user']=='21' ) echo "<td  'id='pole_null' > <font color='black'   > <input type = 'text' id='pole_null' name = 'idsub'  value = '$idsub' >   </td>";
if( $_SESSION['user']=='21' ) echo "<td  'width=40 bgcolor='LightYellow' id='pole_data' > <font color='black'   > <input type = 'date' name = 'dates'  value = '$dates' onsubmit='this.form.submit()'  >   </td>";
echo " <td><input id='pole_null'  type='submit' name='a'    value='добавить изделие' /></td> " ;

?></form><?

}}

echo "</tr> </table>";

 echo "</div >";

?>


</body>
</html>