 <meta charset="windows-1251">



<style>

                             #quantity {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 
                             #pole_name {

    width: 600px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;

   } 

</style>






<?
session_start();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }

include 'conn.php';
include 'function.php';
$user=id_user_hash();
if (!EMPTY($_GET['id']) ) {  $id=$_GET['id'] ; }


$rows= sqlread ("SELECT * FROM  order_gen  WHERE  id_order ='$id' ");

//$date_begin=$row['date_begin'];

$date_begin=date("d.m.Y",strtotime($rows['date_begin'] ));


echo "<br>".space(18)  ?><font size="5" color="black" face="times"><b><?

echo "Товарная накладная № $id от $date_begin <br><br><br>";

///////////////////////////////////////////////////////////////////////////

echo "".space(18)  ?><font size="3" color="black" face="times"><b><?

///// шапка таблицы
$name =  array('Наименование','Кол-во') ;
$long =  array(' 600','80  ') ;
 
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' bgcolor='' > <font color='black'   style='font: 15px apple-system'> <b> $nam</td>";} 
echo "</tr> </table>";
/////end////////

$strSQL="SELECT *  FROM order_sub WHERE id_order_gen= '$id'  ";
 $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {


echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";


$quantity=$row['quantity'];      

$idbrd_zak=$row['id_board'];
echo "<td align='left' id='pole_name'  > ".name_board_id($idbrd_zak )     ."   </td>";
echo "<td align='center' id='quantity'    > ".$quantity ."   </td>";

//echo "<td align='center' id='quantity'   > ".$row['algorithm']            ."  </td>";
//echo "<td align='center' id='quantity'   > ".$row['note_b']              ."  </td>";


echo "</tr> ";
echo "</table>";

}}
?><font size="3" color="black" face="times"><b><?
echo "<br><br><br><br>";

echo "Покупатель: ".space(5).name_client_id($rows['client'] )."<br><br>" ;

echo "Грузополучатель: ".space(5)."подпись _____________ (________________)<br>";
echo space(80)."ФИО"


///////////////////////////////////////////////////////////////////////////////

?>
