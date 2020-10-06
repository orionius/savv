
 <meta charset="windows-1251">
<?
//include "error_visible.php";

?>
<style>

#pole_id,#pole_quant ,#pole_quantity ,#pole_note,#pole_data,#pole_name,#pole_name1,#pole_name_client,#tab  {
    font-size: 18px; 
    font-family:'Futura';
    font-weight:bold;
}
#pole_id          { width: 100px; text-align: center; } 
#pole_quant       { width: 50px;  text-align: center;}  
#pole_quantity    { width: 505px; text-align: center; } 
#pole_note        { width: 500px; text-align: left;   }  
#pole_data        { width: 150px; text-align: center; }  
#pole_name        { width: 500px;   } 
#pole_name1       { width: 400px;   } 
#pole_name_client { width: 500px; text-align: left; } 

#tab {
  background: rgba(210, 105, 30, 0.3); /* Цвет фона */
overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */

    background: linear-gradient(to top, #dc143c, #800080);



} 

       .genblock
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 5;
    right:5;

    top: 60px; /* Положение от верхнего края */
   /* width: 1800px; /* Ширина блока */
  height:825px;
    padding: 5px; /* Поля вокруг текста */

overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
 /* background: url(images/block_fon.jpg)  no-repeat center center fixed;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */  
 background: url(images/laminat.jpg) no-repeat center center fixed;  background-size: cover;


       margin:3px 3px 3px 5px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.5); /* Параметры тени */
      margin: auto; /* Выравниваем по центру */   
                padding: 5px; 
                  text-align: center;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: cover; /* Firefox 3.6+ */
    -webkit-background-size: cover; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: cover; /* Opera 9.6+ */
    background-size: cover; /* Современные браузеры */
    opacity: 0.9; /* Значение прозрачности */

                     }   

          .label
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */


    top: 10px; /* Положение от верхнего края */
    width: 99%; /* Ширина блока */
   height:30px;    


 /*   background-image: url('/images/bacground_div.jpg'); */

     background: rgba(210, 105, 30, 0.3); /* Цвет фона */
overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */

    background: linear-gradient(to top, #D2691E, #ffecec);


    
   
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


       .FindTop
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10; /* Положение элемента от правого края */
    top: 60px; /* Положение от верхнего края */
    width: 1540px; /* Ширина блока */
   height:70px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background: url(images/old-paper.jpg) no-repeat center center fixed;  background-size: cover;


      float:left; 
       margin:3px 3px 3px 5px; 


                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 0.8; /* Значение прозрачности */


}

       .PrihodBlock
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 5; 
    right: 5; 
    top: 150px; /* Положение от верхнего края */

   height:300px;    
    padding: 5px; /* Поля вокруг текста */
    background: url(images/old-paper.jpg) no-repeat center center fixed;  background-size: cover;
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */



      float:left; 
       margin:3px 3px 3px 5px; 


                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 0.8; /* Значение прозрачности */


}

       .RashBlock
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 5; 
    right: 5; 
    top: 500px; /* Положение от верхнего края */

   height:300px;    
    padding: 5px; /* Поля вокруг текста */
    background: url(images/old-paper.jpg) no-repeat center center fixed;  background-size: cover;
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */



      float:left; 
       margin:3px 3px 3px 5px; 


                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 0.8; /* Значение прозрачности */


}


</style>




<?
session_start();
//include "error_visible.php";
include "background.php";
include 'conn.php';

include 'function.php';
$user=id_user_hash();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }

echo "<div class='genblock'> " ;
echo "<div class='label'> " ;  

echo "<font color='black'   style='font: 20px apple-system'>Поиск изделия или платы";

echo "</div > " ;
////////////////////////////////////////// поиск  //////////////////////////////////////////////////////////


if (!empty($_POST['board_find']))  {
  $_SESSION['box_find']=NULL;
  $_SESSION['ser_find']=NULL;
  $_SESSION['board_find']=$_POST['board_find'];
}

if (!empty($_POST['ser_find']))  {
  $_SESSION['box_find']=NULL;
  $_SESSION['board_find']=NULL;
  $_SESSION['ser_find']=$_POST['ser_find'];
}
if (!empty($_POST['box_find']))  {
  $_SESSION['ser_find']=NULL;
    $_SESSION['board_find']=NULL;
  $_SESSION['box_find']=$_POST['box_find'];
}
if (!empty($_POST['reset_find']))  {
  $_SESSION['ser_find']=NULL;
  $_SESSION['box_find']=NULL;
  $_SESSION['board_find']=NULL;
}
echo "<font color='black'   style='font: 20px apple-system'>";
?>
<div class='FindTop'> <form action='' id='My' method='post'  >
<input autofocus type="text" id = 'pole_data' name="ser_find"  placeholder="серийный номер" onchange="document.getElementById('My').submit()" > 
<input autofocus type="text" id = 'pole_data' name="box_find"  placeholder="номер изделия" onchange="document.getElementById('My').submit()" >  


<!-- <input type='submit'  name="reset_find"   value='Обработать' /> -->




<?
/////........................список 
$id_board= $_SESSION['id_board'];
$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board'");
$sql = "SELECT * FROM cat_brd_prod ORDER BY name_product ASC ";
$result_select = mysql_query($sql);

?> <select name='board_find' id='pole_name_client' onchange="document.getElementById('My').submit()" > <?
$object->name_product = $rr['name_product'] ;

echo   "<option  selected value=$id_board   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select>";
////..........................

?>

</form> </div>
<?













//////////////////////////////////////////Созданная продукция  //////////////////////////////////////////////////////////
echo "<div class='PrihodBlock'> " ;




echo "<div class='blok_top'> " ;
echo space(40)."Изготовленные платы ";

///// шапка талицы
$name =  array('Дата','№ Приходной', 'id ','Наименование изделия ' ,'Кол' ,'Статус ','Сер N','N коробки') ;
$long =  array('150','100',' 100','500         ','100','500','150', '150'  ) ;
 
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td id='tab' align='center'  width='$ln' bgcolor='Chocolate' > <font color='white'   style='font: 18px apple-system'> <b> $nam</td>";
} echo "</tr> </table>";
/////end////////

echo "</div>";


echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
$ser_find=  $_SESSION['ser_find'] ;
$box_find=  $_SESSION['box_find'] ;
$board_find= $_SESSION['board_find'];


if  (!empty($box_find) )      {$strSQL =  " SELECT * FROM manufact_board_sub WHERE num_product LIKE '%$box_find%'   ORDER BY date DESC" ;}
if  (!empty($ser_find) )      {$strSQL =  " SELECT * FROM manufact_board_sub WHERE ser_num     LIKE '$ser_find'   ORDER BY date DESC" ;}
if  (!empty($board_find) )    {$strSQL =  " SELECT * FROM manufact_board_sub WHERE id_board     = '$board_find'   ORDER BY date DESC" ;}


//if  (empty($ser_find)  and empty($box_find) and empty($board_find) )  {$strSQL =  " SELECT * FROM manufact_board_sub  ORDER BY datestatus DESC" ;}



//$strSQL =  " SELECT * FROM manufact_board_sub WHERE ser_num     LIKE '$ser_find'   ORDER BY datestatus DESC" ;

    $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {
$idbrd=$row["id_board"];

$datestatus=$row["datestatus"];
$date=$row["date"];
$status=$row["status"];
$quantity=$row["quantity"];



//$SumManufBRD=Sum_Manufact_Board_ID($idbrd);
//$SumGivenBRD=Sum_Given_Board_ID($idbrd);
//$balanceBRD= Sum_Manufact_Board_ID($idbrd) - Sum_Given_Board_ID($idbrd);
$NameBRD=name_board_id($idbrd);
//echo "<td width=70 bgcolor='white' style='font: 14px arial' ><button type='submit' name='go_to' value=".  $idbrd .">Перейти</button></td>";  //кнопка 

$visdate=$date;
$visdate= date("d.m.Y",strtotime($visdate )); 


$visdatestat=$datestatus;
$visdatestat= date("d.m.Y",strtotime($visdatestat )); 

$id=$row['id_gen_manuf']; 
echo "<td  'width=40 bgcolor='white' id='pole_data' > <font color='black'  > <b>"   .  $visdate .         "  </td>";
//echo "<td  'width=40 bgcolor='white' id='pole_data' > <font color='black'  > <b>"   .  $visdatestat .         "  </td>";
echo "<td  'width=40 bgcolor='SandyBrown' id='pole_id' > <font color='black'   >   <a href='prih_board.php?id=$id' TARGET='_blank'>$id</a></td>";
//echo "<td   'width=20 bgcolor='white' id='pole_id' > <font color='black' > <b>"   . $row["id_gen_manuf"] .         "  </td>";
echo "<td   'width=20 bgcolor='white' id='pole_id' > <font color='black' > <b>"   . $idbrd  .         "  </td>";
echo "<td   'width=20 bgcolor='white' id='pole_name' > <font color='black' > <b>"   .$NameBRD  .         "  </td>";
echo "<td   'width=20 bgcolor='white' id='pole_id' > <font color='black' > <b>"   .$quantity  .         "  </td>";

echo "<td   'width=40 bgcolor='white' id='pole_quantity' > <font color='black' > <b>"   . name_statboard_id($status) .         "  </td>";
echo "<td  'width=40 bgcolor='SandyBrown' id='pole_data' > <font color='black'  > <b>"   .  $status=$row["ser_num"] .         "  </td>";
echo "<td  'width=40 bgcolor='SandyBrown' id='pole_data' > <font color='black'  > <b>"   .  $status=$row["num_product"] .         "  </td>";

//status

 echo "</tr> ";
}}
echo "</table>";


echo "</div>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////Расходы плат //////////////////////////////////////////////////////////
echo "<div class='RashBlock'> " ;

echo "<div class='blok_top'> " ;
echo space(50)."Расходы плат ";


///// шапка талицы
$name =  array('Дата','№ ','Ордер ','Наименование изделия','Кол','Сер N','Серийный корпуса','Алгоритм','Клиент'  ) ;
$long =  array('150','100',     ' 100','500         ','47','100   ','100      '    ,'100    ','500'      ) ;
 
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td id='tab' align='center'  width='$ln' bgcolor='Chocolate' > <font color='white'   style='font: 18px apple-system'> <b> $nam</td>";
} echo "</tr> </table>";
/////end////////
echo "</div>";

$box_find=  $_SESSION['box_find'] ;
$ser_find=  $_SESSION['ser_find'] ;
$board_find= $_SESSION['board_find'];

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";

if  (!empty($box_find) )   {$strSQL =  " SELECT * FROM give_board_sub WHERE ser_num_box LIKE '%$box_find%'   ORDER BY dates DESC " ;}
if  (!empty($ser_find) )   {$strSQL =  " SELECT * FROM give_board_sub WHERE ser_num     LIKE '$ser_find'   ORDER BY dates DESC " ;}
if  (!empty($board_find) )   {$strSQL =  " SELECT * FROM give_board_sub WHERE product     = '$board_find' ORDER BY dates DESC  " ;}



//if  (empty($ser_find)  and empty($box_find) )   {$strSQL =  " SELECT * FROM give_board_sub   ORDER BY dates DESC " ;}



    $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {


$idbrd=$row["product"];
$dates=$row["dates"];
$nameidclient=$row["client"];

$name_client=name_client_id($nameidclient);
$quantity=$row["quantity"];


//$SumManufBRD=Sum_Manufact_Board_ID($idbrd);
//$SumGivenBRD=Sum_Given_Board_ID($idbrd);
//$balanceBRD= Sum_Manufact_Board_ID($idbrd) - Sum_Given_Board_ID($idbrd);
$NameBRD=name_board_id($idbrd);
$id=$row["id_give_gen"] ;
//echo "<td width=70 bgcolor='white' style='font: 14px arial' ><button type='submit' name='go_to' value=".  $idbrd .">Перейти</button></td>";  //кнопка 

$rows=sqlread("SELECT * FROM give_board_gen WHERE id_give     = '$id' ");
$n_order=$rows["n_order"] ;

$visdate=$dates;
$visdate= date("d.m.Y",strtotime($visdate )); 

echo "<td  'width=40 bgcolor='white' id='pole_data' > <font color='black'  > <b>"   .  $visdate .         "  </td>";

echo "<td  'width=40 bgcolor='white' id='pole_id' > <font color='black'  >   <a href='give_board.php?id=$id' TARGET='_blank'>$id</a></td>";
//echo "<td   'width=20 bgcolor='white' id='pole_id' > <font color='black' > <b>"   . $row["id_give_gen"] .         "  </td>";
//echo "<td   'width=20 bgcolor='white' id='pole_id' > <font color='black' > <b>"   . $row["id_give_sub"] .         "  </td>";
//echo "<td   'width=20 bgcolor='white' id='pole_id' > <font color='black' > <b>"   . $rows["id_order"] .         "  </td>";
//echo "<td   'width=20 bgcolor='white' id='pole_id' > <font color='black' > <b>"   . $rows["n_order"] .         "  </td>";
echo "<td  'width=40 bgcolor='white' id='pole_id' > <font color='black'  >   <a href='order.php?id=".$rows["id_order"]  ."' TARGET='_blank'>$n_order</a></td>";


echo "<td   'width=20 bgcolor='white' id='pole_name' > <font color='black' > <b>"   .$NameBRD  .         "  </td>";
echo "<td   'width=20 bgcolor='white' id='pole_quant' > <font color='black' > <b>"   .$quantity  .         "  </td>";
//echo "<td   'width=20 bgcolor='white' id='pole_id' > <font color='black' > <b>"   . $row["ser_num_box"] .         "  </td>";
echo "<td   'width=20 bgcolor='white' id='pole_id' > <font color='black' > <b>"   . $row["ser_num"] .         "  </td>";
echo "<td   'width=20 bgcolor='white' id='pole_id' > <font color='black' > <b>"   . $row["ser_num_box"] .         "  </td>";
echo "<td   'width=20 bgcolor='white' id='pole_id' > <font color='black' > <b>"   . $row["algo"] .         "  </td>";



echo "<td   'width=20 bgcolor='white' id='pole_name_client' > <font color='black' > <b>"   .$name_client  .         "  </td>";
//echo "<td   'width=40 bgcolor='white' id='pole_quantity' > <font color='black' > <b>"   . $SumManufBRD .         "  </td>";
//echo "<td   'width=20 bgcolor='white' id='pole_id' > <font color='black' > <b>"   . $row["n_order"] .         "  </td>";


$id_give_gen=$row["id_give_gen"];

/*
$roww= sqlread("SELECT * FROM give_board_gen WHERE id_give = '$id_give_gen'  ");
$datess=$roww['dates'];
*/







 echo "</tr> ";
}}
echo "</table>";


echo "</div>";


echo "</div> " ;

include "menu.php";
?>