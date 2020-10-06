

 <meta charset="windows-1251">

<?
session_start();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }
?>

<style>

                             #pole_id {

    width: 55px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 
   

                             #pole_ceny {

    width: 55px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 
                                #pole_name {

    width: 200px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
    

   } 
                                  #pole_note {

    width: 300px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;

   }  
                                  #pole_data{

    width: 80px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
      text-align: center;



   }  
                                  #pole_button{

    width: 80px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   }  

</style>

<?
include "background.php";
include 'conn.php';
include "menu.php";
include 'function.php';
$user=id_user_hash();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }


///////////////////Переход в расходную по нажатию //////////////////////////////////////
if(!empty($_POST['go_to'])) {

$go=$_POST['go_to'];
echo "<script> document.location.href='give_board.php?id=$go'</script>"; 

}
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 echo "<form action='' method='post'  >";

///// шапка талицы
$name =  array('id ','Дата','Курьер'  ,'Примечание') ;
$long =  array(' 137','80  ','200        ','300 ') ;
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td  width='$ln' bgcolor='Chocolate' > <font color='black'   $sizefont1> <b> $nam</td>";
} echo "</tr> </table>";
/////end////////

 


//echo $food;





$strSQL="SELECT *  FROM give_board_gen  ORDER BY id_give DESC ";
 $rs = mysql_query($strSQL);


    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";

$visdate=$row['dates'] ;
$visdate= date("d.m.Y",strtotime($visdate )); 
$id=$row['id_give']; 

//echo "<td  'width=40 bgcolor='white' id='pole_id' > <font color='black'   $sizefont1>   <a href='give_board.php?id=$id' TARGET='_blank'>$id</a>'</td>";
echo "<td width=70 bgcolor='white' style='font: 14px arial' ><button type='submit' id =  'pole_button'  name='go_to' value=".  $id .">Перейти</button></td>";  //кнопка 
echo "<td   'width=40 bgcolor='white' id='pole_id' > <font color='black'  $sizefont1> <b>"   . $id  .         "  </td>";
echo "<td   'width=40 bgcolor='white' id='pole_data' > <font color='black'  $sizefont1> <b>"   . $visdate  .         "  </td>";
echo "<td  'width=80 bgcolor='white' id='pole_name' > <font color='black'   $sizefont1> <b>"   .  name_courier_id($row['courier'])  .         "  </td>";
echo "<td   'width=40 bgcolor='white' id='pole_note' > <font color='black'  $sizefont1> <b>"   .  $row['note']  .         "  </td>";






 echo "</tr> </table>";

}}


    	?>

 </form>