

 <meta charset="windows-1251">



<?
session_start();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }
?>

<head>

<meta charset="windows-1251">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="daterangepicker/daterangepicker.css">
 <link rel="stylesheet" href="style.css">


  <link href="css/style_field.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<style>

a.help1 {
  text-decoration: none;
  color: #000000;
  border-bottom: dashed 1px #000;

}
a.help1 span {
  display: none;
}
a.help1:hover {
  position: relative;
}
a.help1:hover span {


  position: absolute;
  display: block;
  left: 10px;
  top: 25px;
  border: solid 1px #000000;
  background: BlanchedAlmond;
  color: #000000;
  white-space: pre;
  padding: 25px;
   border-radius: 20px; /* закругдение бордюра */
width: 1000
}
    .fly_comment {
        display: inline-block; /* Строчно-блочный элемент */
        position: relative; /* Относительное позиционирование */
       }
       .fly_comment:hover::after {
        content: attr(data-title); /* Выводим текст */
        position: absolute; /* Абсолютное позиционирование */
        left: 100%; top: 110%; /* Положение подсказки */
        z-index: 1; /* Отображаем подсказку поверх других элементов */
        background: rgba(255,255,230,0.9); /* Полупрозрачный цвет фона */
        font-family: Arial, sans-serif; /* Гарнитура шрифта */
        font-size: 11px; /* Размер текста подсказки */
        padding: 5px 10px; /* Поля */
        border: 1px solid #333; /* Параметры рамки */
        border-radius: 20px;
       }
    
       .fly_comment_left {
        display: inline-block; /* Строчно-блочный элемент */
        position: relative ; /* Относительное позиционирование */
      
       }
       .fly_comment_left:hover::after {
    
        content: attr(data-title); /* Выводим текст */
        position: absolute; /* Абсолютное позиционирование */
        left: 100%; top: 110%; /* Положение подсказки */
          left : -100;
        z-index: 1; /* Отображаем подсказку поверх других элементов */
        background: rgba(255,255,230,0.9); /* Полупрозрачный цвет фона */
        font-family: Arial, sans-serif; /* Гарнитура шрифта */
        font-size: 11px; /* Размер текста подсказки */
        padding: 5px 10px; /* Поля */
        border: 1px solid #333; /* Параметры рамки */
        border-radius: 20px;
       }

#gradient {

 background: linear-gradient(to top, #808080, #ffecec);

}

#input_id_100{
/* background: rgba(220, 250, 240, 10) ;*/
    width: 100px; /* Ширина поля в пикселах */
    font-size: 15px; 
    text-align: center;
     font-family:'apple-system';
     font-weight:bold;
}
#input_id_150{
/* background: rgba(220, 250, 240, 10) ;*/
    width: 150px; /* Ширина поля в пикселах */
    font-size: 15px; 
    text-align: center;
     font-family:'apple-system';
     font-weight:bold;
}
#input_id_300{
/*background: rgba(220, 250, 240, 10) ;*/
    width: 300px; /* Ширина поля в пикселах */
    table-layout: fixed;

    font-size: 12px; 
    text-align: left;
     font-family:'apple-system';
     font-weight:bold;
}
#input_id_500{
/* background: rgba(220, 250, 240, 10) ;*/
    width: 500px; /* Ширина поля в пикселах */
    font-size: 15px; 
    text-align: center;
     font-family:'apple-system';
     font-weight:bold;
}
                             #pole_id {

    width: 40px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 
                             #pole_id_80 {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 
   #field_partn {

width: 120px; /* Ширина поля в пикселах */
font-size: 18px; 
text-align: center;
 font-family:'amaze';
 font-weight:bold;

} 


   #pole_quant {

width: 60px; /* Ширина поля в пикселах */
font-size: 18px; 
text-align: center;
 font-family:'amaze';
 font-weight:bold;

} 

                             #pole_ceny {

    width: 55px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 
                                #pole_name18 {

    width: 250px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: left;
     font-family:'amaze';
    

   } 
   #pole_nameuser {

width: 100px; /* Ширина поля в пикселах */
font-size: 18px; 
text-align: left;
 font-family:'amaze';


} 
#pole_shipper {

width: 150px; /* Ширина поля в пикселах */
font-size: 18px; 
text-align: left;
 font-family:'amaze';


}   
#pole_defect {

width: 300px; /* Ширина поля в пикселах */
font-size: 18px; 
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
    font-size: 14px; 
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

   .awesome{
background: #222 url(/images/block_fon.jpg) repeat-x;
display: inline-block;
padding: 5px 10px 6px;
color: black;
text-decoration: none;
font-weight: bold;
line-height: 1;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
-moz-box-shadow: 0 1px 3px #999;
-webkit-box-shadow: 0 1px 3px #999;
text-shadow: 0 -1px 1px #222;
border-bottom: 1px solid #222;
position: relative;
cursor: pointer;
}

   .checkb{
background: #222 url(/images/block_fon.jpg) repeat-x;
display: inline-block;
padding: 5px 10px 6px;
color: black;
text-decoration: none;
font-weight: bold;
line-height: 1;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
-moz-box-shadow: 0 1px 3px #999;
-webkit-box-shadow: 0 1px 3px #999;
text-shadow: 0 -1px 1px #222;
border-bottom: 1px solid #222;
position: relative;
cursor: pointer;
  transform:scale(1.3);
  opacity:0.9;
  cursor:pointer;

}





       .data
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10; /* Положение элемента от правого края */
    top: 100px; /* Положение от верхнего края */
    width: 1700px; /* Ширина блока */
   height:700px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
 /*   background-image: url('/images/bacground_div.jpg'); */

     background: rgba(230, 230, 250, 0.3); /* Цвет фона */
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
    opacity: 10; /* Значение прозрачности */

                     }   

       .head
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10; /* Положение элемента от правого края */
    top: 50px; /* Положение от верхнего края */
    width: 1700px; /* Ширина блока */
   height:40px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
 /*   background-image: url('/images/bacground_div.jpg'); */

     background: rgba(230, 230, 250, 0.3); /* Цвет фона */
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
    opacity: 10; /* Значение прозрачности */

                     }   
         .filtr
     {  
    margin:absolute;
    position: absolute; /* Абсолютное позиционирование */
    left: 1330; /* Положение элемента от правого края */
    top: 60px; /* Положение от верхнего края */
    width: 300px; /* Ширина блока */
   height:700px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
 /*   background-image: url('/images/bacground_div.jpg'); */

     background: rgba(230, 230, 250, 0.3); /* Цвет фона */
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
    opacity: 10; /* Значение прозрачности */

                     }     
                     

         .nameorder
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10; /* Положение элемента от правого края */
    top: 10px; /* Положение от верхнего края */
    width: 1700px; /* Ширина блока */
   height:30px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
 /*   background-image: url('/images/bacground_div.jpg'); */

     background: rgba(0, 150, 0, 0.3); /* Цвет фона */
overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */

    background: linear-gradient(to top, #008080, #ffecec);


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
    opacity: 10; /* Значение прозрачности */

                     }     


       .genblock
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 3%; /* Положение элемента от левого края */


    top: 55px; /* Положение от верхнего края */
    width: 1750px; /* Ширина блока */
  height:830px;
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

                                     #pole_null {

width: 0px; /* Ширина поля в пикселах */
font-size: 0px; 
text-align: center;
font-color:rgba(0,0,0,0);


}                 

</style>
  <style type="text/css">
   BODY {

   } 
   A {
    color: black; /* Цвет ссылок */
   }
   A:visited {
    color: #green; /* Цвет посещенных ссылок */
   }
   A:active {
    color: #ffff00; /* Цвет активных ссылок */
    background: yellow; /* Цвет фона веб-страницы */
   }
  </style>


<?
include "background.php";
include 'conn.php';

include 'function.php';
//include 'error_visible.php';
$user=id_user_hash();


?> <body> <?






//////////////////////////  ФУНКЦИИ ///////////////////////////////////////
 function reload() {$id=$_GET['id'] ;

  //  usleep(200000);
  $link="Location: defect.php?id=".$id;
    header ($link); 
  //  echo "<script> document.location.href='order.php?id=$id'</script>"; 
  }
  if (!empty($_GET['del']) and $_GET['del'] == 'yes') { $id=$_GET['id'] ;sqlread ("DELETE FROM  defect_sub WHERE id='$id'  "); reload();}

  
///////////////////////Обновление данных текущес троки///////////////////////////////////////////////////
function upd_defect($field) { $id=$_GET['id'];$data=$_GET[$field];
sqlread("UPDATE defect_sub SET    ".$field."= '$data'      WHERE id='$id' ");}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (!empty($_GET['user_found']) ) {  upd_defect('user_found'); reload();}
if (!empty($_GET['id_board']) ) {  upd_defect('id_board');  reload();}
if (!empty($_GET['name_component']) ) {  upd_defect('name_component');  reload();}
if (!empty($_GET['dates']) ) {  upd_defect('dates');  reload();}
if (!empty($_GET['quantity']) ) {  upd_defect('quantity');  reload();}
if (!empty($_GET['version_board']) ) {  upd_defect('version_board');  reload();}
if (!empty($_GET['name_defect']) ) {  upd_defect('name_defect');  reload();}
if (!empty($_GET['id_shipper']) ) {  upd_defect('id_shipper');  reload();}
if (!empty($_GET['shipper']) ) {  upd_defect('shipper');  reload();}
if (!empty($_GET['partnum']) ) {  upd_defect('partnum');  reload();}
if (!empty($_GET['decision']) ) {  upd_defect('decision');  reload();}
if (!empty($_GET['link_replacement']) ) {  upd_defect('link_replacement');  reload();}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////Добавить новую строку/////////////////////////////////////////////////////////////////////////////////////////////

  if (!empty($_POST['add']) )  { 
  $user=$_SESSION['user']; 
  sqlread("INSERT INTO defect_sub(adduser,adddate,dates) VALUES ('$user',NOW(),NOW())  ");
  reload();
}

echo "<div class='genblock'>";
///////////////////////////////////////////Имя ордер//////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<div class='nameorder'>";
echo space(180)."<font style='font: 20px apple '  color = 'navy' >СПИСОК ДЕФЕКТИВНЫХ ЭЛЕМЕНТОВ ";
echo "</div>";

///////////////////////////////////////////////Шапка////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<div class='head'>";
 echo "<form action='defect.php' method='post'  >";
 ?> <input type="submit" class='btn btn-warning btn-sm' name = "add"  value="Добавить новую строку" <hr> <?
echo "    </form> </div>" ;
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////Список  /////////////////////////////////////////////////////////////////////////////////////////////
echo "<div class='data'>";
 $sizefont1=" ";
///// шапка талицы
$name =  array('Дата','Наименование изделия','Версия','Название элемента','Дефект','Кол-во','Поставщик','Партия','Решение','Кто обнаружил'  ) ;
$long =  array('167',' 252','62  ','152','300','60','150','122','300','100') ;
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center' width='$ln'  id='gradient'> <font color='black'   $sizefont1> <b> $nam</td>";
} echo "</tr> </table>";
/////end////////

//echo "    </form> " ;
//$SHIPPED=$_POST['shipped'];

//echo $food;
$user=$_SESSION['user'];


$strSQL="SELECT *  FROM defect_sub  ORDER BY id DESC  ";



 $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {
      echo "<form action='defect.php' method='get' id='shap' >";

   $id=$row['id'] ;
   $dates=$row['dates'] ;
   $id_board=$row['id_board'] ;
   $version_board=$row['version_board'] ;
   $id_component=$row['id_component'] ;
   $name_component=$row['name_component'] ;

   $user_found=$row['user_found'] ;
   $name_defect=$row['name_defect'] ;
   $quantity=$row['quantity'] ;
   $partnum=$row['partnum'] ;
   $shipper=$row['shipper'] ;

   $decision=$row['decision'] ;
   $link_replacement=$row['link_replacement'] ;


echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";



$bgcolor = "color = 'white' ";

?> <td id= 'pole_null' align='center'   $bgcolor  id='pole_data' > <font color='black'  $sizefont1> <b>  <input id= 'pole_null' style='visibility :hidden'  type = 'text' name = 'id' value ='<? echo $id; ?>'   onchange="document.getElementById('shap').submit()" >     </td> <?

if($_SESSION['user']==21 ) echo "  <td  align='left'  'width=500 bgcolor='LightYellow' id='pole_del' >  <a href='defect.php?id=".$id."&del=yes'><img src='images/krest1.png' width='20'   height='20' alt='Пример''></a></td>  "; 

?> <td  align='center'  width=40 $bgcolor  id='pole_data' > <font color='black'  $sizefont1> <b>  <input type = 'date' name = 'dates' value = '<? echo $dates; ?>' onchange="document.getElementById('shap').submit()" >     </td> <?


?> <td  align='center'  width=40 $bgcolor  id='pole_data' > <?
/////........................список 
$id_board= $id_board;
$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board'");
$sql = "SELECT * FROM cat_brd_prod ORDER BY name_product ASC ";
$result_select = mysql_query($sql);

?> <select name='id_board' id='pole_name18' onchange="this.form.submit()" > <?
$object->name_product = $rr['name_product'] ;

echo   "<option  selected value=$id_board   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select>";
////..........................
?></td> <?


?> <td  align='center'  width=40 $bgcolor  id='pole_quant' > <font color='black'  $sizefont1> <b>  <input id = 'pole_quant'  type = 'text' name = 'version_board' value = '<? echo $version_board; ?>  ' onchange="this.form.submit()" >     </td> <?
?> <td  align='center'  width=40 $bgcolor  id='pole_id_80' > <font color='black'  $sizefont1> <b>  <input id = 'pole_shipper'  type = 'text' name = 'name_component' value = '<? echo $name_component; ?>  ' onchange="this.form.submit()"  >     </td> <?
?> <td  align='center'  width=40 $bgcolor > <font color='black'  $sizefont1> <b>  <input  id = 'pole_defect' type = 'text' name = 'name_defect' value = '<? echo $name_defect; ?>  ' onchange="this.form.submit()" >     </td> <?
?> <td  align='center'  width=40 $bgcolor  > <font color='black'  $sizefont1> <b>  <input id= 'pole_quant' type = 'text' name = 'quantity' value = '<? echo $quantity; ?>  ' onchange="this.form.submit()" >     </td> <?
?> <td  align='left'  width=40 $bgcolor  > <font color='black'  $sizefont1> <b>  <input id= 'pole_shipper' type = 'text' name = 'shipper' value = '<? echo $shipper; ?>  ' onchange="this.form.submit()" >     </td> <?
?> <td  align='center'  width=40 $bgcolor  > <font color='black'  $sizefont1> <b>  <input id= 'field_partn' type = 'text' name = 'partnum' value = '<? echo $partnum; ?>  ' onchange="this.form.submit()"  >     </td> <?
?> <td  align='center'  width=40 $bgcolor  > <font color='black'  $sizefont1> <b>  <input id= 'pole_defect' type = 'text' name = 'decision' value = '<? echo $decision; ?>  ' onchange="this.form.submit()"  >     </td> <?



?> <td  align='center'  width=40 $bgcolor  id='pole_data' > <?
/////........................список 
$user_found=    $user_found;
$rr=sqlread("SELECT * FROM user WHERE id_user = '$user_found'");
$sql = "SELECT * FROM user ORDER BY surname ASC ";
$result_select = mysql_query($sql);

?> <select name='user_found' id='pole_nameuser' onchange="this.form.submit()" > <?
$object->surname = $rr['surname'] ;

echo   "<option  selected value=$user_found   > $object->surname   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_user' > $object->surname </option> ";}  
echo "</select>";
////..........................
?></td> <?





 echo "</tr> </table>";

 echo "    </form> " ;
}}




echo "</div>";

////////////////////////////////////////////////////////////////////////////////////////



  ///////////////////////////////////////////////////////////////////////////////////////////////
echo "</div>";
?> </body> <?

include "menu.php";
    	?>
  




                 