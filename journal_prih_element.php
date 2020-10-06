
 <meta charset="windows-1251">

<?
session_start();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }
?>
<style>

                             #pole_id {

    width: 55px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 
                             #pole_ceny {

    width: 55px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 
                                #pole_name {

    width: 200px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: left;
     font-family:'amaze';
    

   } 
                                  #pole_note {

    width: 500px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;

   }  
                                  #pole_data{

    width: 150px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   }  
                                  #pole_button{

    width: 80px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   }  

       .genblock
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 3%; /* Положение элемента от левого края */


    top: 60px; /* Положение от верхнего края */
    width: 1750px; /* Ширина блока */
  height:800px;
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
                     .list_block
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 1%; /* Положение элемента от левого края */


    top: 60px; /* Положение от верхнего края */
    width: 1000px; /* Ширина блока */
  height:700px;
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

                         .filtr_block
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 1050px; /* Положение элемента от левого края */


    top: 60px; /* Положение от верхнего края */
    width: 650px; /* Ширина блока */
  height:700px;
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

</style>

<?
include "background.php";
include 'conn.php';

include 'function.php';
$user=id_user_hash();



if(!empty($_POST['go_to'])) {

$go=$_POST['go_to'];
echo "<script> document.location.href='prihod_elements.php?id=$go'</script>"; 

}
 echo "<div class='genblock'>";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<div class='list_block'>";

 echo "<form action='' method='post'  >";

///// шапка талицы
$name =  array(' ','id ','Дата','Примечание'  ,'Кол') ;
$long =  array('80',' 55','150  ','500        ','55 ') ;
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td  width='$ln' bgcolor='Chocolate' > <font color='black'   $sizefont1> <b> $nam</td>";
} echo "</tr> </table>";
/////end////////

 


//echo $food;





$strSQL="SELECT *  FROM prih_elements_gen  ORDER BY   id_prih_gen DESC  ";
 $rs = mysql_query($strSQL);


    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";

$visdate=$row['datetime'] ;
$visdate= date("d.m.Y",strtotime($visdate )); 
$id=$row['id_prih_gen']; 
//echo "<td  'width=40 bgcolor='white' id='pole_id' > <font color='black'   $sizefont1>   <a href='prih_board.php?id=$id' TARGET='_blank'>$id</a>'</td>";

echo "<td width=70 bgcolor='white' style='font: 14px arial' ><button type='submit' name='go_to' id='pole_button'  value=".  $id .">Перейти</button></td>";  //кнопка 

echo "<td   'width=20 bgcolor='white' id='pole_id' > <font color='black'  $sizefont1> <b>"   . $id  .         "  </td>";
echo "<td  align='center'  width=40 bgcolor='white' id='pole_data' > <font color='black'  $sizefont1> <b>"   . $visdate  .         "  </td>";
echo "<td   'width=40 bgcolor='white' id='pole_note' > <font color='black'  $sizefont1> <b>"   .  $row['note']  .         "  </td>";
echo "<td  'width=40 bgcolor='white' id='pole_id' > <font color='black'   $sizefont1> <b>"   .  $row['quant_order']  .         "  </td>";





 echo "</tr> </table>";

}}
 echo "</div>";

 ////////////////////////////////////////////////////////////////////////////////////////
echo "<div class='filtr_block'>";
echo 1;

echo "</div>";
 /////////////////////////////////////////////////////////////////////////////////////////

 echo "</div>";



    	?>
        </form>


        <? include "menu.php";

        ?>