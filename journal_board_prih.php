<?session_start(); ?>
<head>

 <meta charset="windows-1251">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="style.css">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico" rel="stylesheet">
</head>

<?

if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }
?>
<style>
h1 { 
  font-size: 14px; 
  font-family: Pacifico; }
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
    font-size: 11px; 
    text-align: left;
     font-family:'amaze';
    

   } 
                                  #pole_note {

    width: 350px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;

   }  
                                  #pole_data{

    width: 80px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   }  
                      #pole_button{

    width: 20px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   }  








                .genblock,.blok_spisok,.blok_find_gen,.blok_finddate,.genblock1,.blok_out_spisok,.blok_find_product
 {
    
    overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
    border-radius: 10px;
    box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: cover; /* Firefox 3.6+ */
    -webkit-background-size: cover; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: cover; /* Opera 9.6+ */
    background-size: cover; /* Современные браузеры */
    box-shadow: rgba(5,5,5,1.2) 0px 5px 5px; 
   /* border: 1px double lightgrey;*/
    opacity: 0.9;
}






                .genblock
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 20; /* Положение элемента от левого края */
    right: 20;
    top: 60px; /* Положение от верхнего края */
    /*width: 1750px; /* Ширина блока */
    bottom:20;
    overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
    background: url(images/laminat.jpg)  no-repeat center ;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */  

    opacity: 0.9; /* Значение прозрачности */
                     }   
                     .genblock1
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10; /* Положение элемента от левого края */
    right: 10;
    top: 60px; /* Положение от верхнего края */
    /*width: 90%; /* Ширина блока */
    width: 1530;
    bottom:20;
    overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
  /*  background: url(images/block_fon.jpg)  no-repeat center ;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */  
    background: rgba(230, 230, 250, 0.3); /* Цвет фона */
    border:0;


                     }  

                .blok_out_spisok
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10; /* Положение элемента от левого края */
    top: 20px; /* Положение от верхнего края */
    bottom:20;
    width: 750px; /* Ширина блока */
    /*height:600px;*/
    background: url(images/old-paper.jpg)  no-repeat center ;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */   
  
                        }  


                .blok_spisok
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10; /* Положение элемента от левого края */
    right: 10;
    top: 20px; /* Положение от верхнего края */
    bottom: 20px; 
    width: 730px; /* Ширина блока */
   /* height:550px;
    padding: 5px; /* Поля вокруг текста */
    background: url(images/bacground.jpg)  no-repeat center ;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */   
    opacity: 0.9; /* Значение прозрачности */
    overflow: auto; 
     border: 0;
     border-radius: 0px;
                     }   



                .blok_find_gen
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 770; /* Положение элемента от левого края */
    top: 20px; /* Положение от верхнего края */
    width: 750px; /* Ширина блока */
   /* height:600px;*/
    bottom: 20px; 
    background: url(images/old-paper.jpg)  no-repeat center ;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */  
    
                     }   

                .blok_finddate
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10px; /* Положение элемента от левого края */
    right: 10px;
    top: 20px; /* Положение от верхнего края */
    /*height:650px;*/
      bottom:20;
    background: url(images/bacground.jpg)  no-repeat center ;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */   
    opacity: 1;
                     }   
                     .blok_find_product
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10px; /* Положение элемента от левого края */
    right: 10px;
    top: 180px; /* Положение от верхнего края */
    height:150px;
    background: url(images/1205-318.jpg)  no-repeat center ;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */   
                     }                     

          .label
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    top: 5px; /* Положение от верхнего края */
    /*width: 1720px; /* Ширина блока */
  /*  font-family: pacifico; */
    height:30px;    
    left:50px;
    right:50px;  
    background: rgba(0, 150, 0, 0.3); /* Цвет фона */
    overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
    background: linear-gradient(to top, #008080, #ffecec);
    box-shadow: rgba(5,5,5,1.2) 0px 2px 10px; 
    
                     }       
.datefind {

    width: 200px;
    height:40px;
    padding: 5px; /* Поля вокруг текста */
    border-radius: 6px;
    box-shadow: rgba(5,5,5,1.2) 0px 1px 10px; 

}

    table { 
    width: 100%; /* Ширина таблицы */
    border: 1px double black; /* Рамка вокруг таблицы */
    border-collapse: collapse; /* Отображать только одинарные линии */
   }
   th { 
   /* text-align: left; /* Выравнивание по левому краю */
   /*  background: #ccc; /* Цвет фона ячеек */
   /*  padding: 5px; /* Поля вокруг содержимого ячеек */
   /*  border: 1px solid black; /* Граница вокруг ячеек */
   }
   td { 
   /*  padding: 5px; /* Поля вокруг содержимого ячеек */
   /*  border: 1px solid black; /* Граница вокруг ячеек */
   }

</style>

<?
include "background.php";
include 'conn.php';
include "menu.php";
include 'function.php';
$user=id_user_hash();
if(!empty($_POST['go_to'])) {

$go=$_POST['go_to'];
echo "<script> document.location.href='prih_board.php?id=$go'</script>"; 

}
/*
if(!empty($_POST['date_begin'])) {
  $_SESSION['date_begin']=$_POST['date_begin'];}
if(!empty($_POST['date_end'])) {
  $_SESSION['date_end']=$_POST['date_end'];}
*/
if(!empty($_POST['print_invoice'])){

  echo "<script> document.location.href='print_naryad_zak_period.php?beg=".  $_POST['date_begin']  ."&end=". $_POST['date_end'] .  " ' ; target = '_blank'; </script>"; 

 // echo "<script>  window.open('print_naryad_zak_period.php?beg=".  $_POST['date_begin']  ."&end=". $_POST['date_end'] .  " ', '_blank');"; 

}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(!empty($_GET['idproduct'])){
 $idproduct= mysql_real_escape_string($_GET['idproduct']);

 $filtr ="SELECT a.*, b.id_board , b.id_gen_manuf FROM manufact_board_gen a 
 INNER JOIN manufact_board_sub b ON a.id_prih_gen = b.id_gen_manuf  
 where b.id_board ='$idproduct' GROUP BY b.id_gen_manuf  ";

 
alert( $filtr);

 
//alert( $qqq);
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<div class='genblock'>";
 echo "<div class='label'> <font color='indigo'   style='font-size: 24px; font-family: apple; '> <b> Наряд заказы </b> </div>";
 echo "<div class='genblock1'>";
 /*echo "<div class='label'> <font color='indigo'   style='font: 25px apple-system'> <b> Наряд заказы </b> </div>"; */

 

 echo "<div class='blok_out_spisok'>";
 echo "<div class='blok_spisok'>";

//////////////////////////////////////////////////Список ///////////////////////////////////////////////////////////////////////////////////////////////
 echo "<form action='' method='post'  >";

///// шапка талицы
$name =  array('id','Наряд зак ','Дата','Примечание'  ,'Зак','Сдел','Ост') ;
$long =  array('78',' 55','        80  ',  '350      ','55 ','55 ','55 ') ;
echo "<table align= 'center' border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td  width='$ln' bgcolor='Chocolate' > <font color='black'   $sizefont1> <b> $nam</td>";
} echo "</tr> </table>";
/////end////////

 


//echo $food;





//

if(!empty($_GET['find']) && $_GET['find'] =='1' ) {
$strSQL=$filtr;
}else {  
  $strSQL="SELECT *  FROM manufact_board_gen  ORDER BY   id_prih_gen DESC  ";
}



 $rs = mysql_query($strSQL);


    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";


$visdate=$row['datetime'] ;
$visdate= date("d.m.Y",strtotime($visdate )); 
$id=$row['id_prih_gen']; 
$n_order=$row['n_order'];
$quant_order=$row['quant_order'];
$id_board=$row['id_board'];


$ss=sqlread("SELECT  id_gen_manuf,SUM(quantity) as sumquant FROM manufact_board_sub WHERE id_gen_manuf= ' $id' ");
$sumquant=$ss['sumquant'];

$balance= $quant_order-$sumquant;

if($balance > 0 )        { $bgcolor="bgcolor='Violet'";}  
if($balance < 0 )        { $bgcolor="bgcolor='Aquamarine'";}  
if($balance == 0 )        { $bgcolor="bgcolor='LightCyan'";}  


//echo "<td  'width=40 bgcolor='white' id='pole_id' > <font color='black'   $sizefont1>   <a href='prih_board.php?id=$id' TARGET='_blank'>$id</a>'</td>";

echo "<td width=20 bgcolor='white' style='font: 14px arial' ><button type='submit' name='go_to' id='pole_button'  value=".  $id .">></button></td>";  //кнопка 

echo "<td   'width=20 $bgcolor id='pole_id' > <font color='black'  $sizefont1> <b>"   . $id  .         "  </td>";
echo "<td   'width=20 $bgcolor id='pole_id' > <font color='black'  $sizefont1> <b>"   . $n_order  .         "  </td>";
echo "<td   align='center'  width=40 $bgcolor id='pole_data' > <font color='black'  $sizefont1> <b>"   . $visdate  .         "  </td>";
echo "<td   'width=40 $bgcolor id='pole_note' > <font color='black'  $sizefont1> <b>"   .  name_board_id($id_board ) .         "  </td>";
echo "<td  'width=40 $bgcolor id='pole_id' > <font color='black'   $sizefont1> <b>"   .  $quant_order  .         "  </td>";
echo "<td  'width=40 $bgcolor id='pole_id' > <font color='black'   $sizefont1> <b>"   .  $sumquant  .         "  </td>";
echo "<td  'width=40 bgcolor='LightYellow' id='pole_id' > <font color='black'   $sizefont1> <b>"   .  $balance  .         "  </td>";



 echo "</tr> </table>";

}}
 echo "</div>"; echo "</div>";
///////////////////////////////////////////////////////////////////////////////////////////
echo "<form action='' method='post'  >";
echo "<div class='blok_find_gen'>";
echo "<div class='blok_finddate'>";
$date = date('Y-m-d');
$datebegin = date('Y-m-01');
echo "<hr>";
echo space(10)."От";
echo $qqq ." <input type='date' class='datefind' name = 'date_begin'  value='$datebegin' >";
echo space(10)."До";
echo $qqq ." <input type='date' class='datefind' name = 'date_end'  value='".$date."'><br>";
echo "<hr>";
echo $qqq ;?> <input type="submit" class='btn btn-warning btn-sm'   name = "print_invoice"  value="<? echo space(100) ; ?>Распечатать за период <? echo space(100) ; ?>"><br><p><?



//echo "</div>";







echo "</form>";



//echo "<div class='blok_find_product'>";
echo "<form action='' method='get'  >";
?> <hr><?
/////........................список клиентов
$idproduct= $_GET['idproduct'];$idprod=mysql_real_escape_string($idprod);
$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$idproduct'  "); 
$sql = "SELECT * FROM cat_brd_prod WHERE  type_product != '4' AND type_product != '6' AND type_product != '5' AND type_product != '7' AND type_product != '8' ORDER BY name_product ASC ";
$result_select = mysql_query($sql);

?> <select name="idproduct" id='pole_name18'  onchange="this.form.submit()"> <?   //onchange="this.form.submit()"  /// onchange="document.getElementById('shap_client').submit()"

$object->name_product = $rr['name_product'] ;

echo   "<option  selected value=$id_cat_brd   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select><br>";
////..........................
?> <input type ='hidden' name = 'find' value ='1' > <?

echo "</form>";

echo "<form action='' method='get'  >";
?> <input type ='hidden' name = 'find' value ='0' > <?
echo $qqq ;?> <input type="submit" class='btn btn-warning btn-sm'   name = "print_invoice"  value="<? echo space(100) ; ?>Сбросить фильтр <? echo space(150) ; ?>"><br><p><?
echo "</form>";

echo "</div>";
echo "</div>";


////////////////////////////////////////////////////////////////////////////////////////////
echo "</div>";
echo "</div>";
    	?>
        </form>