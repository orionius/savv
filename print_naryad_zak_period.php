<meta charset="windows-1251">



<style>
                                #pole_null {

width: 0px; /* ������ ���� � �������� */
font-size: 0px; 
text-align: center;
font-color:rgba(0,0,0,0);


} 
                             #quantity {

    width: 80px; /* ������ ���� � �������� */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 
                             #pole_name {

    width: 500px; /* ������ ���� � �������� */
    font-size: 14px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;

   } 
                                #pole_name1 {

    width: 400px; /* ������ ���� � �������� */
    max-width: 240px;
    font-size: 14px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
     word-wrap: pre-line;

   } 
                                #pole_algo {

    width: 150px; /* ������ ���� � �������� */
    font-size: 14px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
 text-align: center;
   } 

   TABLE {
    /* width: 1000px; /* ������ ������� */
    border-collapse: collapse; /* ������� ������� ����� ����� �������� */
   }
   TD, TH {
    padding: 3px; /* ���� ������ ����������� ������� */
    border: 0.1px solid black; /* ��������� ����� */
   }
   TH {
    background: white; /* ���� ���� */
   }


</style>






<?
session_start();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }




include 'conn.php';
include 'function.php';
$user=id_user_hash();



if (!EMPTY($_GET['id']) ) {  $id=$_GET['id'] ; }
//////////////////////////�����/////////////////////////////////////////////////



echo space(50)."<font size = 6 >������������� ��������� �� ������<br><br><br>" ; //  .space(2)." ���� ����������:".space(2).$date_end."<br><br><br>";

$beg=date('d-m-Y', strtotime($_GET['beg']));
$end=date('d-m-Y', strtotime($_GET['end']));

echo "��������� ����:".space(5) .$beg  .space(5) ."�������� ����:".space(5). $end."<br>";
//echo "������ ������ :".space(2).$date_end." ";

//echo "������ ��������:".space(2).name_status_zakaz_id($rows['shipment'])." ";
//echo space(50)."���� ��������:".space(2).$date_shipment." ";


echo "<br>";

///////////////////////////////������� -�������///////////////////////////////////////////////////////////




//$strSQL="SELECT *, SUM(quantity)sumquant  FROM manufact_board_sub where date >= '".$_GET['beg']."' and date <= '".$_GET['end']."' GROUP BY id_board  ";


$strSQL="SELECT *  FROM cat_brd_prod  ORDER BY name_product ASC";
///// ����� �������
$name =  array('������������','��� �� ����','�������','����','�����','������','�����') ;
$long =  array(' 587','80  ','80','80','80','80','80') ;
 
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' bgcolor='Silver' > <font color='black'   style='font: 15px apple-system'> <b> $nam</td>";} 
echo "</tr> </table>";
/////end////////

 $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {


 //$id_board=     $row['id_board'];
 //
 $name_product=     $row['name_product'];
 $id_cat_brd=     $row['id_cat_brd'];

  $dat_beg =$_GET['beg'];
  $dat_end =$_GET['end'];



$manuf=sqlread("SELECT *, SUM(quantity)sumquant   FROM manufact_board_sub WHERE id_board = ' $id_cat_brd' AND date >= '".$_GET['beg']."' AND date <=  '".$_GET['end']."'  ");   // ����������� �� ������� ������
//$gives=sqlread("SELECT SUM(quantity) sum_give     FROM give_board_sub     WHERE product = ' $id_cat_brd'    AND dates >='".$_GET['beg']."' AND dates <= '".$_GET['end']."'  ");   // ������ �� ������� ������

$gives=sqlread("SELECT SUM(quantity) sum_give     FROM give_board_sub     WHERE product = ' $id_cat_brd'    AND dates BETWEEN  '$dat_beg' AND '$dat_end'   ");   // ������ �� ������� ������



$returns=0;//sqlread("SELECT SUM(quantity) sum_return  FROM return_board_sub where status = '34' AND id_board ='$id_cat_brd'   AND date_ret >='".$_GET['beg']."' AND date_ret <= '".$_GET['end']."'  ");   // ������� �� ������� ������

$brak=0;//sqlread("SELECT SUM(quantity) sum_brak FROM return_board_sub where status = '35' AND id_board ='$id_cat_brd'   AND date_ret >='".$_GET['beg']."' AND date_ret <= '".$_GET['end']."'  ");   // ���� �� ������� ������


$manuf_period=  $manuf['sumquant'] ;
$sum_giveperiod=$gives['sum_give'];
$sum_return=$returns['sum_return'];
$sum_brak=$brak['sum_brak'];

$balancestartdate_manuf=sqlread("SELECT   SUM(quantity)sumquant  FROM manufact_board_sub  WHERE id_board = ' $id_cat_brd' AND date <=  '".$_GET['beg']."'  "); // ������� ����� �� ��������� ����
$balancestartdate_gives=sqlread("SELECT   SUM(quantity) sum_give FROM give_board_sub      WHERE product = ' $id_cat_brd'    AND dates <= '".$_GET['beg']."'  "); // ������ ����� �� ��������� ����
$balancestartdate_returns=sqlread("SELECT   SUM(quantity) sum_return FROM return_board_sub      WHERE status = '34' AND   id_board = ' $id_cat_brd'    AND date_ret <= '".$_GET['beg']."'  "); // ������ ����� �� ��������� ����
$balancestartdate_brak=sqlread("SELECT   SUM(quantity) sum_brak FROM return_board_sub      WHERE status = '35' AND   id_board = ' $id_cat_brd'    AND date_ret <= '".$_GET['beg']."'  "); // ������ ����� �� ��������� ����


$sum_manuf= $balancestartdate_manuf['sumquant'];// ������� ����� �� ��������� ����
$sum_give=  $balancestartdate_gives['sum_give'];// ������ ����� �� ��������� ����
$sum_returnbegin= 0;// $balancestartdate_returns['sum_return'];// �������� ����� �� ��������� ����
$sum_brakbegin=  $balancestartdate_brak['sum_brak'];// ���� ����� �� ��������� ����



if(empty($sum_returnbegin)) $sum_returnbegin=0;
if(empty($sum_brakbegin)) $sum_brakbegin=0;
if(empty($sum_return)) $sum_return=0;
if(empty($sum_brak)) $sum_brak=0;



$balancestartdate=$sum_manuf-$sum_give+$sum_returnbegin-$sum_brakbegin; // ������� �� ��������� ����
$balanceenddate=$balancestartdate+$manuf_period-$sum_giveperiod+$sum_return-$sum_brak; // �������� �������


if(!empty($balancestartdate) || !empty($sum_giveperiod) || !empty($manuf_period) )  {

if(empty($balancestartdate)) $balancestartdate=0;
if(empty($sum_giveperiod)) $sum_giveperiod=0;
if(empty($manuf_period)) $manuf_period=0;




echo "<table border=1 height='0'  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";


//echo "<th align='center' id='pole_name'    > ".name_board_id($row['id_board']) ."   </th>";
echo "<th align='center' id='quantity'      >  ".$id_cat_brd ."      </th>";
echo "<th align='center' id='pole_name'     >  ".$name_product ."      </th>";
echo "<th align='center' id='quantity'      >  ".$balancestartdate."   </th>";
echo "<th align='center' id='quantity'      >  ".$sum_return ."      </th>";
echo "<th align='center' id='quantity'      >  ".$sum_brak."   </th>";



echo "<th align='center' id='quantity'      >  ".$manuf_period ."      </th>";
echo "<th align='center' id='quantity'      >  ".$sum_giveperiod ."    </th>";
echo "<th align='center' id='quantity'      >  ".$balanceenddate."     </th>";
echo "</tr> ";
echo "</table>";

}

}}
echo "<br><br>";



/////////////////////////////�� �������� ��������� ���������////////////////////////////////////////////////
echo space(20)."�������� �������� �� ������� ������ �� ������ <br><br>";
///// ����� �������
$name =  array('������������ �����������','������') ;
$long =  array(' 770','80  ') ;
 
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' bgcolor='Silver' > <font color='black'   style='font: 15px apple-system'> <b> $nam</td>";} 
echo "</tr> </table>";
/////end////////
$strSQL="SELECT *  FROM client  ORDER BY company ASC";
 $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {

$company=$row['company'];
$idclient=$row['idclient'];


$gives=sqlread("SELECT *,SUM(quantity) sum_give     FROM give_board_sub     WHERE  client='$idclient' AND dates >= '".$_GET['beg']."' AND dates <=  '".$_GET['end']."'  ");   // ������ �� ������� ������
if($gives['sum_give']>0) {
$name =  array($company,'������') ;
$long =  array(' 770','80') ;
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' bgcolor='Silver' > <font color='black'   style='font: 15px apple-system'> <b> $nam</td>";} 
echo "</tr> </table>";



 $rsss = mysql_query("SELECT *    FROM cat_brd_prod  ");    if (!empty ($rsss) ) {    while($rowss = mysql_fetch_array($rsss)) {
 $id_cat_brd=$rowss['id_cat_brd'];

//AND date >= '".$_GET['beg']."' AND date <=  '".$_GET['end']."'

$gives="SELECT *,SUM(quantity) sum_give     FROM give_board_sub     WHERE  client='$idclient' AND product=' $id_cat_brd' AND dates >= '".$_GET['beg']."' AND dates <=  '".$_GET['end']."'  ";   // ������ �� ������� ������
$rss = mysql_query($gives);
    if (!empty ($rss) ) {
    while($rows = mysql_fetch_array($rss)) {
      $sum_give=$rows['sum_give'];

if($sum_give>'0' ) { 

echo "<table border=1 height='0'  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";

    //  echo "<th align='left' id='pole_name'      >  ".$company."     </th>";
      echo "<th align='left'   width= 770px     >  ".name_board_id($id_cat_brd)."     </th>";
      echo "<th align='left' id='quantity'      >  ".$sum_give."     </th>";


      echo "</tr> ";
      echo "</table>";
}




    }}

  }


    }}


    }}

/////////////////////////////�� �������� ��������� ������////////////////////////////////////////////////
/*
echo "<br><br><br>";
///// ����� �������

echo "�������� ������ � ������� ������� ";

$name =  array('������������ �����������','� ������') ;
$long =  array(' 500','80  ') ;
 
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' bgcolor='Silver' > <font color='black'   style='font: 15px apple-system'> <b> $nam</td>";} 
echo "</tr> </table>";
/////end////////
$strSQL="SELECT *  FROM client  ORDER BY company ASC";
 $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {

$company=$row['company'];
$idclient=$row['idclient'];

$name =  array($company,'������') ;
$long =  array(' 770','80') ;
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' bgcolor='Silver' > <font color='black'   style='font: 15px apple-system'> <b> $nam</td>";}
echo "</tr> </table>";



$rsss = mysql_query("SELECT *    FROM cat_brd_prod  ");    if (!empty ($rsss) ) {    while($rowss = mysql_fetch_array($rsss)) {
    $id_cat_brd=$rowss['id_cat_brd'];

$beg=$_GET['beg'];
$end=$_GET['end'];
$gives ="SELECT *,SUM(b.quantity)  sumquant FROM order_gen a 
INNER JOIN order_sub_out b ON a.id_order = b.id_order_gen  
WHERE a.client = '$idclient' AND b.id_board='$id_cat_brd' AND b.dates >= '$beg' AND b.dates <=  '$end' ";

$rss = mysql_query($gives);
    if (!empty ($rss) ) {
    while($rows = mysql_fetch_array($rss)) {
        $sum_give=     $rows['sum_give'];
        $id_order_gen= $rows['id_order_gen'];
        $id_board=     $rows['id_board'];    
        $sumquant=     $rows['sumquant'];

    $rr=  sqlread("SELECT n_order FROM order_gen WHERE id_order= ' $id_order_gen' ");$n_order=$rr['n_order'];

    if($sumquant>0) {

echo "<table border=1 height='0'  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";

    //  echo "<th align='left' id='pole_name'      >  ".$company."     </th>";
      echo "<th align='left' width=770     >  ".name_board_id($id_board)."     </th>";
      echo "<th align='left' id='quantity'      >  ".$sumquant."     </th>";


      echo "</tr> ";
      echo "</table>";

}



    }}

}}//SELECT *    FROM cat_brd_prod 


    }}




*/


////////////////////////////////////////////////////////////////////////////////////////
$rows= sqlread ("SELECT * FROM  order_gen  WHERE  id_order ='$id' ");
//echo "������ ��������:".space(2).name_status_zakaz_id($rows['shipment'])." ";
//echo space(50)."���� ��������:".space(2).$date_shipment." <br>";

echo "<br><br>";
//echo "����������: ".space(8).name_client_id($rows['client'] )."<br><br>" ;
/*
echo "���������������: ".space(5)."������� _____________ (________________)<br>";
echo space(80)."���"
*/

///////////////////////////////////////////////////////////////////////////////

?>
