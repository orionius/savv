<header>

<meta charset="windows-1251">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script>
  src="http://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css2?family=Yrsa:wght@500&display=swap" rel="stylesheet">

  <link href="css/style_field.css" rel="stylesheet">   <!-- font-family: 'Yrsa', serif; -->
  </header>
<style>
@import url(https://fonts.googleapis.com/css?family=Arimo:400,400italic|Playfair+Display+SC:400,700&subset=latin,cyrillic);




  :root {
  var-header-color: rgba(230, 230, 250, 0.2); 

  --font-size: 14px; 
  --font-color:aqua;
  --typefont: font-family: 'Yrsa', serif; 
}


body {
  margin: 0; 
    background: url("images/chip_oboi.jpg") 100% 100% no-repeat;
    -moz-background-size: 100% 100%; /* Firefox 3.6+ */
    -webkit-background-size:100% 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size:100% 100%; /* Opera 9.6+ */
    background-size:100% 100%; /* Современные браузеры */
   }



/*
td:hover {
  background-color: #008080;
  color:black;
}
*/


table {
    width: 100%; /* Ширина таблицы */
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
    word-break:  break-all; 
   }
   td, th {
    padding: 3px; /* Поля вокруг содержимого таблицы */
    border: 1px solid LemonChiffon; /* Параметры рамки */
   }
   tr:hover {
    background: #303030; /* Цвет фона при наведении */
    color: #fff; /* Цвет текста при наведении */
   }



 

#fieldID {

    font-size: var( --font-size);

    text-align: center;
     font-family:var( --typefont);
     font-weight:bold;
    width: 100px;    
    color:var( --font-color);
}
   



                             #pole_id {


    font-size: var( --font-size);
    width: 100px; /* Ширина поля в пикселах */    
    text-align: center;
    font-family:var( --typefont);
     font-weight:bold;
     color:var( --font-color);
   } 
                             #pole_ser {

    width: 40px; /* Ширина поля в пикселах */
  font-size: var( --font-size);
    text-align: center;
    font-family:var( --typefont);
     font-weight:bold;
     color:var( --font-color);
   } 

   #pole_ser_box {

width: 40px; /* Ширина поля в пикселах */
font-size: var( --font-size);
text-align: center;
font-family:var( --typefont);
 font-weight:bold;
 color:var( --font-color);
} 



                             #pole_quantity {

    width: 80px; /* Ширина поля в пикселах */
      font-size: var( --font-size);
    text-align: center;
    font-family:var( --typefont);
     font-weight:bold;
     color:var( --font-color);

   } 


#pole_status {

width: 150px; /* Ширина поля в пикселах */
  font-size: var( --font-size);
text-align: center;
font-family:var( --typefont);
 font-weight:bold;
 color:var( --font-color);
} 


                                  #pole_note {

    width: 300px; /* Ширина поля в пикселах */
   font-size: var( --font-size);
    text-align: left;
    font-family:var( --typefont);
     font-weight:bold;
     color:var( --font-color);

   }  
                                  #pole_data{

    width: 150px; /* Ширина поля в пикселах */
   font-size: var( --font-size);
    text-align: center;
    font-family:var( --typefont);
     font-weight:bold;
     color:var( --font-color);
   }  
                                #pole_name {

    width: 600px; /* Ширина поля в пикселах */
  font-size: var( --font-size);
    text-align: left;
    font-family:var( --typefont);
     color:var( --font-color);
     font-family: 'Playfair Display SC', serif;

   } 
                                #pole_name1 {

    width: 800px; /* Ширина поля в пикселах */
    font-size: var( --font-size);
    text-align: left;
    font-family:var( --typefont);
     color:var( --font-color);

   } 

                                #pole_name_client {

    width: 300px; /* Ширина поля в пикселах */
   font-size: var( --font-size);
    text-align: left;
    font-family:var( --typefont);
     color:var( --font-color);
    

   } 

       .blok_top
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 0; /* Положение элемента от правого края */
    top: 0px; /* Положение от верхнего края */
    width: 97%; /* Ширина блока */
   height:40px;    
    padding: 5px; /* Поля вокруг текста */
 /*   background: BlanchedAlmond; /* Цвет фона */ 
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */

 /*   background: rgba(230, 230, 250, 0.2); /* Цвет фона */
overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;


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

float:right;

                     }   

       .OstatokBlock,.blok_top_manufact
     {  

    left: 10%; /* Положение элемента от правого края */
    right:10%;
    top: 120px; /* Положение от верхнего края */

    display: table;
    bottom:5px;
     padding: 5px; /* Поля вокруг текста */
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
    background: rgba(230, 230, 250, 0.2); /* Цвет фона */
background-size: cover;
              /*   text-align: left;  */
                 /*    border-radius: 4px;
 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
                       -moz-background-size: 100% ; /* Firefox 3.6+ */
    -webkit-background-size:100% ; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size:100% ; /* Opera 9.6+ */
    background-size:100% ; /* Современные браузеры */
    opacity: 10; /* Значение прозрачности */
                     }   

                     .blok_top_rash
     {  

    left: 1%; /* Положение элемента от правого края */
    right:1%;
    top: 120px; /* Положение от верхнего края */

  
    bottom:5px;
     padding: 5px; /* Поля вокруг текста */
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
    background: rgba(230, 230, 250, 0.2); /* Цвет фона */
background-size: cover;
              /*   text-align: left;  */
                 /*    border-radius: 4px;
 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
                       -moz-background-size: 100% ; /* Firefox 3.6+ */
    -webkit-background-size:100% ; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size:100% ; /* Opera 9.6+ */
    background-size:100% ; /* Современные браузеры */
    opacity: 10; /* Значение прозрачности */
                     }    

       .PrihodBlock
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 550; /* Положение элемента от правого края */
    top: 50px; /* Положение от верхнего края */
    width: 500px; /* Ширина блока */
   height:605px;    
    padding: 5px; /* Поля вокруг текста */
    background: var(header-color); /* Цвет фона */ 
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */

    background: @color ;/* Цвет фона */
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;


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

float:right;

                     }   
                     .genblock
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 3%; /* Положение элемента от левого края */
    right:3%;
    text-align: center;
    top: 50px; /* Положение от верхнего края */
  /*  width: 1760px; /* Ширина блока */
 bottom:10px;
    padding: 5px; /* Поля вокруг текста */

overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
 /*background: url(images/block_fon.jpg)  no-repeat center center fixed;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */   


 background-image: linear-gradient(rgba(255,0,0,.5), rgba(0,0,255,.5)); /* про градиенты */ 

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

float:right;
                     }   



       .RashBlock
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 1070; /* Положение элемента от правого края */
    top: 50px; /* Положение от верхнего края */
    width: 680px; /* Ширина блока */
   height:605px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
    background: rgba(230, 230, 250, 0.2); /* Цвет фона */
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;


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

float:right;

                     }   


                     body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}


</style>


<?
session_start();

//include "error_visible.php";
//include "background.php";
include 'conn.php';

include 'function.php';
$user=id_user_hash();

if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }



echo "<div class='genblock'> " ;



////////////////////////////////////ВКЛАДКИ/////////////////////////////////////////////////////////////////////
?>


<div class="container" style = "left:-100;   width:2000; ">
  <h2></h2>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><font color = Aquamarine>Собранные платы</font></a></li>
    <li><a data-toggle="tab" href="#menu1"><font color = Aquamarine>Проданные платы</font></a></li>
    <li><a data-toggle="tab" href="#menu2"><font color = Aquamarine>Остатки</font></a></li>
    <li><a data-toggle="tab" href="#menu3"><font color = Aquamarine>Другое</font></a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">

<style>
th {
  background-color:Chocolate;
  color:black;
  font-family: 24px 'apple-system';
  text-align:center;
  font-weight:600;

}

</style>

<?
//////////////////////////////////////////Созданная продукция  //////////////////////////////////////////////////////////


echo "<div class='blok_top_manufact'> " ;




?>
<table border=0 height=0 align='center' cellpadding='0' cellspacing='0'  >          
<tr>
<th> Наименование</th>
<th> Кол</th>
<th> Сер №</th>
<th> Дат созд</th>
<th> Статус</th>
</tr>            
<?
$strSQL =  " SELECT * FROM manufact_board_sub  ORDER BY date DESC" ;
    $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {
$idbrd=$row["id_board"];

$datestatus=$row["datestatus"];
$date=$row["date"];
$status=$row["status"];
$quantity=$row["quantity"];
$ser_num=$row["ser_num"];


//$SumManufBRD=Sum_Manufact_Board_ID($idbrd);
//$SumGivenBRD=Sum_Given_Board_ID($idbrd);
//$balanceBRD= Sum_Manufact_Board_ID($idbrd) - Sum_Given_Board_ID($idbrd);
$NameBRD=name_board_id($idbrd);
//echo "<td width=70 bgcolor='white' style='font: 14px arial' ><button type='submit' name='go_to' value=".  $idbrd .">Перейти</button></td>";  //кнопка 

$visdate=$date;
$visdate= date("d.m.Y",strtotime($visdate )); 


$visdatestat=$datestatus;
$visdatestat= date("d.m.Y",strtotime($visdatestat )); 


//echo "<td   'width=20 bgcolor='white' id='pole_id' > <font color='black' > <b>"   . $idbrd  .         "  </td>";
echo "<td   'width=200  id='pole_name' > <b>"   .$NameBRD  .         "  </td>";
echo "<td   'width=20  id='pole_quantity' ><b>"   .$quantity  .         "  </td>";


echo "<td  'width=40  id='pole_data' > <b>"   .  $ser_num .         "  </td>";
echo "<td  'width=40  id='pole_data' >  <b>"   .  $visdate .         "  </td>";


//echo "<td  'width=40 bgcolor='white' id='pole_data' > <font color='black'  > <b>"   .  $visdatestat .         "  </td>";
echo "<td   'width=40  id='pole_status' >  <b>"   . name_statboard_id($status) .         "  </td>";





 echo "</tr> ";
}}
echo "</table>";


echo "</div>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


?>
    </div>
    <div id="menu1" class="tab-pane fade">
  
      <?
      //////////////////////////////////////////Расходы плат //////////////////////////////////////////////////////////

echo "<div class='blok_top_rash'> " ;
//echo space(50)."Расходы плат ";




$user=        $_SESSION['user'] ;

?>
<table border=1 height=0  cellpadding='0' cellspacing='0'  >
<tr>
<th> id </th>
<th> Наименование</th>
<th> Кол</th>
<th> Cер №</th>
<th> № сборки</th>

<th> Клиент</th>
<th> N заказ </th>
<th> Дата </th>

</tr>   


<?
//$strSQL =  " SELECT * FROM give_board_sub  ORDER BY id_give_sub DESC " ;
$strSQL =  " SELECT * FROM give_board_sub  ORDER BY dates DESC " ;

    $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {
$idbrd=$row["product"];

$dates=$row["dates"];

$nameidclient=$row["client"];
$name_client=name_client_id($nameidclient);
$quantity=$row["quantity"];

$NameBRD=name_board_id($idbrd);
$name_client=substr($name_client, 0, 30);


$id_give_gen=$row["id_give_gen"] ;


if ($user=='21') { echo "<td     id='fieldID' >   <a href='give_board.php?id=$id_give_gen' TARGET='_self  '  style='color:DarkBlue;'  >       $id_give_gen</a></td>"; } 
else { echo "<td    id='fieldID' >  <b>"   . $row["id_give_sub"] .         "  </td>"; }


$sernum=str_replace('  ', '', $row["ser_num"] );
$serbox=str_replace('  ', '', $row["ser_num_box"] );

echo "<td     id='pole_name' >      <b>"   .$NameBRD  .         "  </td>";
echo "<td     id='pole_quantity' >  <b>"   . $quantity.         "  </td>";
echo "<td     id='pole_ser' >       <b>"   . $sernum.         "  </td>";
echo "<td     id='pole_ser_box' >       <b>"   . $serbox   .      "  </td>";


echo "<td    id='pole_name_client' >  <b>"   .$name_client  .         "  </td>";


//echo "<td   'width=40 bgcolor='white' id='pole_quantity' > <font color='black' > <b>"   . $SumManufBRD .         "  </td>";

$rr=sqlread("SELECT * FROM order_gen WHERE id_order=".$row["n_order"] ."   ");


if($row["n_order"]>5000 ) $numorder= $row["n_order"];
if($row["n_order"]<5000 ) $numorder= $rr["n_order"];

echo "<td  id='pole_id' >  <b>"   . $numorder.         "  </td>";


$id_give_gen=$row["id_give_gen"];


$visdate=$dates;
$visdate= date("d.m.Y",strtotime($visdate )); 

echo "<td  'width=40  id='pole_data' > <b>"   .  $visdate .         "  </td>";






 echo "</tr> ";
}}
echo "</table>";


echo "</div>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div>
    <div id="menu2" class="tab-pane fade">
  
      <?
      //////////Остатки//////////////////





echo "<div class='OstatokBlock'> " ;




?>
<table border=1 height=0  cellpadding='0' cellspacing='0'  >
<tr>
<th> id </th>
<th> Наименование</th>
<th> Наличие</th>


</tr>   
<?

$strSQL =  " SELECT * FROM cat_brd_prod " ;
    $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {
$idbrd=$row["id_cat_brd"];
$SumManufBRD=Sum_Manufact_Board_ID($idbrd);
$SumGivenBRD=Sum_Given_Board_ID($idbrd);
$balanceBRD= Sum_Manufact_Board_ID($idbrd) - Sum_Given_Board_ID($idbrd);
$NameBRD=name_board_id($idbrd);

$sum_ready=Sum_Manufact_Ready_Board_ID($idbrd)- Sum_Given_Board_ID($idbrd)+Sum_return_Board_ID($idbrd);
$in_work = $balanceBRD-$sum_ready;

if ( $sum_ready>0) { 
echo "<td   'width=20 id='pole_id' >  <b>"   . $idbrd  .         "  </td>";
echo "<td   'width=20 id='pole_name1' >  <b>"   .$NameBRD  .         "  </td>";

echo "<td  'width=40  id='pole_quantity' >  <b>"   .  $sum_ready .         "  </td>";
 echo "</tr> "; }

}}
echo "</table>";
echo "</div>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    </div>
    <div id="menu3" class="tab-pane fade">
   
      <p>Пока ничего нет</p>
    </div>
  </div>
</div>


<?






echo "</div>";
include "menu.php";

mysql_close();
?>
