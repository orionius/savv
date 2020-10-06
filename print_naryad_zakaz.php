 <meta charset="windows-1251">



<style>

                             #quantity {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 
                             #pole_name {

    width: 400px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;

   } 
                                #pole_name1 {

    width: 240px; /* Ширина поля в пикселах */
    max-width: 240px;
    font-size: 14px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
     word-wrap: pre-line;

   } 
                                #pole_algo {

    width: 150px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
 text-align: center;
   } 

TABLE { 

 border: 1px double black; /* Рамка вокруг таблицы */
 border-collapse: collapse; /* Отображать только одинарные линии */
}

TH { 
/* text-align: left; /* Выравнивание по левому краю */
 /*background: #ccc; /* Цвет фона ячеек */
 /*padding: 5px; /* Поля вокруг содержимого ячеек */
 /*border: 1px solid black; /* Граница вокруг ячеек */
}

TD { 
 /*padding: 5px; /* Поля вокруг содержимого ячеек */
 /*border: 1px solid black; /* Граница вокруг ячеек */
}

</style>






<?
session_start();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }

include 'conn.php';
include 'function.php';
$user=id_user_hash();
if (!EMPTY($_GET['id']) ) {  $id=$_GET['id'] ; }
//////////////////////////Шапка/////////////////////////////////////////////////

$rows= sqlread ("SELECT * FROM  order_gen  WHERE  id_order ='$id' ");

//$date_begin=$row['date_begin'];

$date_begin=date("d.m.Y",strtotime($rows['date_begin'] ));

$date_end=date("d.m.Y",strtotime($rows['date_end'] ));
$date_shipment=date("d.m.Y",strtotime($rows['date_shipment'] ));


echo "<br>".space(10)  ?><font size="3" color="black" face="times"><b><?

$n_order=$rows['n_order'];
$note=$rows['note'];


echo "Наряд заказ № $n_order от $date_begin ".space(2)."№ счета:".space(2).$rows['n_account'] ; //  .space(2)." Срок исполнения:".space(2).$date_end."<br><br><br>";


echo "<br><br>Покупатель: ".space(8).name_client_id($rows['client'] )."<br><br>" ;
echo "Тип заказа:".space(12).name_type_zakaz_id($rows['type_zakaz']).space(10) ."<br>";//." Статус заказа :".space(2).name_status_zakaz_id($rows['status_zakaz'])."  <br> ";

echo "Примечание:".space(9) . $note;


//echo "Статус заказа :".space(2).$date_end." ";

//echo "Статус отгрузки:".space(2).name_status_zakaz_id($rows['shipment'])." ";
//echo space(50)."Дата отгрузки:".space(2).$date_shipment." ";


echo "<br>";
///////////////////////////////////////////////////////////////////////////

echo "".space(18)  ?><font size="3" color="black" face="times"><b><?

///// шапка таблицы
$name =  array('Наименование','Алгоритм','Кол-во','Примечание') ;
$long =  array(' 240','150  ','80  ','240') ;
 
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' bgcolor='' > <font color='black'   style='font: 15px apple-system'> <b> $nam</td>";} 
echo "</tr> </table>";
/////end////////

$strSQL="SELECT *  FROM order_sub WHERE id_order_gen= '$id'  ";
 $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {


echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";

$id_alg=$row['algorithm'] ;
$quantity=$row['quantity'];      
$note_b=$row['note_b'];    
$idbrd_zak=$row['id_board'];

$qq=sqlread("SELECT * FROM algorythm WHERE id = '$id_alg' ");

$alo_txt=$qq['name'];

echo "<td align='left' id='pole_name1'  > ".name_board_id($idbrd_zak )     ."   </td>";
echo "<td align='center' id='pole_algo'    > ".$alo_txt."   </td>";

echo "<td align='center' id='quantity'    > ".$quantity ."   </td>";
echo "<td align='left' id='pole_name1'  > ". $note_b ."   </td>";
//echo "<td align='center' id='quantity'   > ".$row['algorithm']            ."  </td>";
//echo "<td align='center' id='quantity'   > ".$row['note_b']              ."  </td>";


echo "</tr> ";
echo "</table>";

}}
?><font size="3" color="black" face="times"><b><?
echo "<br><br><br><br>";
///////////////////////////////Готовые ///////////////////////////////////////////////////////////

$strSQL="SELECT *  FROM give_board_sub WHERE n_order= '$id'  ";
echo space(50)."Готовые<br><br>";

///// шапка таблицы
$name =  array('Наименование','Алгоритм','Сер №','Кол-во') ;
$long =  array(' 400','150  ','80  ','80  ') ;
 
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' bgcolor='' > <font color='black'   style='font: 15px apple-system'> <b> $nam</td>";} 
echo "</tr> </table>";
/////end////////

 $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";


echo "<td align='center' id='pole_name'    > ".name_board_id($row['product']) ."   </td>";
echo "<td align='center' id='pole_algo'    > ".$row['algo'] ."   </td>";
echo "<td align='center' id='quantity'    > ".$row['ser_num_box'] ."   </td>";
echo "<td align='center' id='quantity'    > ".$row['quantity'] ."   </td>";


echo "</tr> ";
echo "</table>";

}}
echo "<br><br>";


////////////////////////////////////////////////////////////////////////////////////////

$rows= sqlread ("SELECT * FROM  order_gen  WHERE  id_order ='$id' ");
//echo "Статус отгрузки:".space(2).name_status_zakaz_id($rows['shipment'])." ";
//echo space(50)."Дата отгрузки:".space(2).$date_shipment." <br>";

echo "<br><br>";
//echo "Покупатель: ".space(8).name_client_id($rows['client'] )."<br><br>" ;

echo "Грузополучатель: ".space(5)."подпись _____________ (________________)<br>";
echo space(80)."ФИО"


///////////////////////////////////////////////////////////////////////////////

?>
