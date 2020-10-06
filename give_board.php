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
</head>

 <head>

  <link rel="styles" href="css/style.css">
  <link rel="stylesheet" href="/css/fields.css">  
 </head>


<body>
<?
session_start();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >50  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }


 

?>

<style>

   #gradient {
    background: #fefcea; /* Для старых браузров */
    background: linear-gradient(to top, #808080, #ececec);
      }


#button {
  background: red url(overlay.png) repeat-x;
  display: inline-block;
  padding: 5px 10px 6px;
  color: #fff;
  text-decoration: none;
  -moz-border-radius: 6px;
  -webkit-border-radius: 6px;
  -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
  -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
  text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
  border-bottom: 1px solid rgba(0,0,0,0.25);
  position: relative;
  cursor: pointer
}



                             #pole_id {

    width: 55px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 
                             #pole_date {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 

                                #pole_null {

    width: 0px; /* Ширина поля в пикселах */
    font-size: 0px; 
    text-align: center;
    font-color:rgba(0,0,0,0);


   } 
                             #pole_ceny {

    width: 55px; /* Ширина поля в пикселах */
    font-size: 12px; 
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
                                  #pole_note{

    width: 300px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   }  
                                  #pole_note_top{

    width: 665px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   }  
                                     #pole_spisok_client{

    width: 200px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   }  


                                    #pole_idprih {

    width: 50px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
   }  

    .top_inf
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10; /* Положение элемента от правого края */
    top: 60px; /* Положение от верхнего края */
    width: 1700px; /* Ширина блока */
   height:170px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */

background-image: Lavender;

 background: rgba(230, 230, 250, 0.2); /* Цвет фона */

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
     #pole_ser{
    width: 100px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
text-align: center;
}
    .data
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10; /* Положение элемента от правого края */
    top: 250px; /* Положение от верхнего края */
    width: 1700px; /* Ширина блока */
   height:550px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */

background-image: Lavender;

 background: rgba(230, 230, 250, 0.2); /* Цвет фона */

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

       .menu
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 0; /* Положение элемента от правого края */
    top: 280px; /* Положение от верхнего края */
    width: 50%; /* Ширина блока */
   height:50%;    
    padding: 5px; /* Поля вокруг текста */
    background: red; /* Цвет фона */ 
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */



      float:left; 
       margin:3px 3px 3px 5px; 
background-image: Lavender;

 background: rgba(230, 230, 250, 0.2); /* Цвет фона */

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

       .label
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 0; /* Положение элемента от правого края */
    top: 0px; /* Положение от верхнего края */
    width: 99%; /* Ширина блока */
   height:40px;    
    padding: 5px; /* Поля вокруг текста */
    background: red; /* Цвет фона */ 
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */



      float:left; 
       margin:3px 3px 3px 5px; 
background-image: Lavender;

 background: rgba(0, 150, 0, 0.2); /* Цвет фона */

overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */



      float:left; 
       margin:3px 3px 3px 5px; 


                padding: 5px; 
                  text-align: center;
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


    top: 60px; /* Положение от верхнего края */
    width: 1750px; /* Ширина блока */
  height:850px;
    padding: 5px; /* Поля вокруг текста */

overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
 background: url(images/block_fon.jpg)  no-repeat center center fixed;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */   

       margin:3px 3px 3px 5px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.5); /* Параметры тени */
      margin: auto; /* Выравниваем по центру */   
                padding: 5px; 
                  text-align: center;
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

 session_start();
// var a = 1;

include "background.php";
include 'conn.php';
include 'function.php';
$user=id_user_hash();


//include 'error_visible.php';
$user= $_SESSION['user'] ;

if (is_numeric($_GET['id']) ) {    $id=$_GET['id'] ; }



/*
if ($_GET['id']=='new' ) {  sqlread ("INSERT INTO     give_board_gen(courier,user)   VALUES  ('2','$user')   ");
$row= sqlread("SELECT * FROM   give_board_gen   ORDER BY title DESC LIMIT 1     ");  $id=$row['id_give']; // Находим последнюю созданную 
header("Location: give_board.php?id=$id");      }
*/
/////////////////////////////////////////////////////////////////////////////////////

if ( !empty($_GET['idclient']) ) {


 $client=        $_GET['idclient'] ;
  $id_give_sub=   $_GET['id_give_sub'] ;  


$qq=sqlread("UPDATE give_board_sub SET client='$client'  WHERE id_give_sub = '$id_give_sub' "); 


//echo  $client ;

}

////////////////Вносим данные в расходную подчиненую//////////////////////////////////


if ( !empty($_GET['id_give_sub']) ) {

 //echo "<script>alert('У вас ". $ser_num." ');</script>";



  $id_give_sub=   $_GET['id_give_sub'] ;  
  $ser_num=       $_GET['ser_numb'] ;
  $ser_num_box=   $_GET['ser_num_boxs'] ;
  //$client=        $_GET['client'] ;
  $client=        $_GET['idclient'] ;
  $quantity=      $_GET['quantity'] ;
  $vers_syst=     $_GET['vers_syst'] ;  
  $algo=          $_GET['algo'] ;
  $id_alg=        $_GET['id_alg'] ;  
  $n_order=       $_GET['n_order'] ;
  $type_order=    $_GET['type_order'] ;  
  $n_account=     $_GET['n_account'] ;
  $config=        $_GET['config'] ;
  $datess=        $_GET['datess'] ;




$_SESSION['idclient']= $client ;

  $note=        $_GET['note'] ;
  $idGEN=       $_GET['id'] ;
 $note= addslashes( $note);

  $datess=date("Y.m.d",strtotime($datess ));
//alert($vers_syst);

//foreach ($id_prih_sub as $key => $idsub) {
  $qq=sqlread("UPDATE give_board_sub SET ser_num='$ser_num' ,ser_num_box='$ser_num_box', client='$client' ,
              quantity='$quantity' ,vers_syst='$vers_syst' ,algo='$algo',n_order='$n_order', type_order='$type_order', 
              n_account='$n_account'  , config='$config'   ,  note='$note' ,dates='$datess',id_alg = '$id_alg'  WHERE id_give_sub = '$id_give_sub' "); 

//$qq=sqlread("UPDATE give_board_sub SET ser_num='$ser_num' WHERE id_give_sub = '$id_give_sub' "); 
header("Location: give_board.php?id=$id");    

//echo "<script> document.location.href='give_board.php?id=$id'</script>"; 
}


//} 

/////////////////////Удалить полностью накладную/////////////////////////////////
if (!empty( $_GET['del_gen']) and  $_GET['del_gen'] =='yes') {

 $id= $_GET['id'];

sqlread("DELETE FROM give_board_sub  WHERE id_give_gen  = '$id' ");
sqlread("DELETE FROM give_board_gen  WHERE id_give  = '$id' ");
//header("Location: journal_board_give.php");  

echo "<script> document.location.href='journal_board_give.php'</script>"; 
}
//////////////////////////////////////////////////////////////////////////////////
// удаляем по нажатию кнопки текущую 
if ( !empty($_GET['del_current'])) {


 $idd=   $_GET['del_current'] ;  
  //echo  " $idd";

   $idGEN=         $_GET['id'] ;

sqlread ("DELETE   FROM give_board_sub where id_give_sub ='$idd' ");// удаляем позиции

//sleep (10);


header("Location: give_board.php?id=$idGEN");  
}  
//////////////////////////////////////////////////////////////////////////////////
/*
// удаляем по нажатию кнопки текущую 
if ( !EMPTY($_GET['del_current']) ) {
$idd=  $_GET['del_current'];

sqlread ("DELETE   FROM give_board_sub where id_give_sub ='$idd' ");// удаляем позиции
header("Location: give_board.php?id=$id");     
}
*/
///////////////////////////////Новая расходная ////////////////////////////////////////////
if ( $_GET['id']== "new" ) {
$user=$_SESSION['user'];


sqlread("INSERT INTO give_board_gen(user,dates,courier)  VALUES ('$user',NOW(),'2')");
$row=sqlread("SELECT * FROM give_board_gen WHERE user  = '$user'  ORDER BY id_give DESC LIMIT 1 ");
$id=$row['id_give'];
header("Location: give_board.php?id=$id");     
}



///////////////////////////////Добавить  новое изделие в расход  /////////////////////////////
if ( $_GET['add_product'] >0 ) {
 //echo "<script>alert('У вас ". $id_board." ');</script>";
   $id=$_GET['id'] ;
  $id_board=$_GET['id_board'];
$_SESSION['id_board']=$id_board; 

 $qqq=sqlread("INSERT INTO give_board_sub(product,id_give_gen,user,dates)  VALUES ('$id_board','$id','$user',NOW())");


echo "<script> document.location.href='give_board.php?id=$id'</script>"; 



}



///////////////////////////////Добавить  изделие в расход по серийному номеру /////////////////////////////
if ( !empty($_GET['ser_num'])  and strlen($_GET['ser_num']) > 1) { $ser_num=$_GET['ser_num'] ;





 //echo "<script>alert('У вас ". $ser_num." ');</script>";


//$ser_box=$_GET['ser_box'];

$row=sqlread("SELECT * FROM manufact_board_sub WHERE ser_num LIKE '$ser_num'");

$serbox=$row['num_product'];


            
//if(!empty($serbox))  {  $ser_num=get_ser_board_nbox($serbox) ;}       

$user=$_SESSION['user']; 

$idcatbrd= get_idcat_board_ser($ser_num);
 //$_SESSION["id_board"]= $idcatbrd;

//$ser_n=get_ser_board_nbox($_GET['ser_num']);






$qqq=sqlread("INSERT INTO give_board_sub(product,id_give_gen,ser_num,ser_num_box,user,dates)  VALUES ('$idcatbrd','$id','$ser_num','$serbox','$user',NOW())");




echo "<script> document.location.href='give_board.php?id=$id'</script>"; 
}
///////////////////////////////Добавить  изделие в расход по номеру коробки /////////////////////////////

if ( !empty($_GET['ser_box'])  and strlen($_GET['ser_box']) > 1) {








//$ser_box=$_GET['ser_box'];
$serbox=$_GET['ser_box'];


if(!empty($_GET['ser_box']))  {  $serbox=$_GET['ser_box'] ;}                
$ser_num=get_ser_board_nbox($serbox) ;    

$user=$_SESSION['user']; 

$idcatbrd= get_idcat_board_ser($ser_num);
 //$_SESSION["id_board"]= $idcatbrd;

//$ser_n=get_ser_board_nbox($_GET['ser_num']);






//$qqq=sqlread("INSERT INTO give_board_sub(product,id_give_gen,ser_num,ser_num_box,user,dates)  VALUES ('$idcatbrd','$id','$ser_num','$serbox','$user',NOW())");
/*

$qqq=sqlread("
INSERT INTO `give_board_sub` ('product','id_give_gen','ser_num','ser_num_box','user','dates')
SELECT `id_board`, '$id', `ser_num`, `$serbox`,'$user','NOW()'
FROM `manufact_board_sub`
WHERE  `num_product` = '$serbox';
");

*/

//$qqq=sqlread("INSERT INTO give_board_sub ('product')  SELECT 'user' FROM manufact_board_sub WHERE  id_gen_manuf = 158 ");

$qqq=sqlread("INSERT INTO give_board_sub (product,id_give_gen,ser_num,ser_num_box,dates) SELECT id_board,$id,ser_num,'$serbox',NOW()
        FROM manufact_board_sub
        WHERE  `num_product` = '$serbox'");

echo "<script> document.location.href='give_board.php?id=$id'</script>"; 
}


////////////////Вносим данные примечания  //////////////////////////////////


if ( !empty($_GET['notes']) ) {
  $note=  $_GET['notes'] ;
  $id=$_GET['id'] ;
 $_SESSION["idcat_board"];

 //echo "<script>alert('У вас ". $note." ');</script>";
  $qq=sqlread("UPDATE give_board_gen SET note='$note'  WHERE id_give = '$id' "); 

 
header("Location: give_board.php?id=$id");     
} 
/////////вносим дату шапка
if ( !empty($_GET['dater']) ) {

$dater=$_GET['dater'];
$dater=date("Y.m.d",strtotime($dater ));

$qq=sqlread("UPDATE give_board_gen SET dates='$dater'  WHERE id_give = '$id' "); 

}

echo "<div class='genblock'>";

  ?><div class='label'>  <font color='Navy' size = 5  > <?  echo 'Расходная изделий' ; ?>  </font > </div> <?



///////////////////////////////Шапка ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<div class='top_inf'>";
echo "<form action='give_board.php?id=$id' method='GET'  >";

echo "Расходная № <input bgcolor='red' type='text' id='pole_shap_number'  textarea name='id'   value='$id'>   ";

$row= sqlread ("SELECT * FROM  give_board_gen  WHERE  id_give ='$id' ");

$rows= sqlread ("SELECT SUM(quantity) AS count_sub FROM  give_board_sub  WHERE  id_give_gen ='$id' ");


//$dater=date("d.m.Y",strtotime($row['dates'] ));

$dater=$row['dates'] ;

//echo " От <b> ".$dater. "</b> ";  


echo "Дата накладной <input bgcolor='red' type='date' id='field_datafiltr' textarea name='dater'   value='$dater'>   ";

//echo "<br>Примечание: " .$row[note]  ;

$note = $row['note'] ;


echo space(5)." № заказа<input type='text'  name='n_order'  id='pole_shap_number'   placeholder='Номер заказа'  value='".$row['n_order']."' /> " ;
echo " № счета <input type='text' id='pole_shap_number'  name='n_account'  placeholder='Номер счета'  value=' ".$row['n_account']." ' /> " ;
echo space(100)." Удалить накладную полностью  <a href='give_board.php?id=".$id."&del_gen=yes'><img src='images/krest1.png' width='20' height='20' alt='Пример''></a> ";  // удаление наклаждной

/*echo space(160); ?><input name='delete_full' type='submit' id = 'button' value='Удалить накладную' onclick="return confirm('Вы точно хотите удалить накладную полностью ?')"><?*/
$note = $row['note'] ;




echo "</form>";



echo "<br><form action='give_board.php?id=$id' method='GET'  >"; echo "<input color = '#f0f0f0' bgcolor='' type='hidden' id='pole_null' textarea name='id'   value='$id'>   ";
/////........................список 
if (!empty($_SESSION['id_board'])) {$id_board = $_SESSION['id_board'];} else {$id_board=0;}

//$id_board= $_SESSION['id_board'];
$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board'");
$sql = "SELECT * FROM cat_brd_prod ORDER BY name_product ASC ";
$result_select = mysql_query($sql);

?> <select name='id_board' id='pole_add_produkt'  > <?
$object->name_product = $rr['name_product'] ;

echo   "<option  selected value=$id_board   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select>";
////..........................


echo " <input type='submit' name='add_product'   value='добавить изделие' /> " ; 
echo "</form>";

echo "<form action='give_board.php?id=$id' method='GET'  >"; echo "<input color = '#f0f0f0' bgcolor='' type='hidden' id='pole_null' textarea name='id'   value='$id'>   ";
echo " <input type='text' autofocus name='ser_num'  placeholder='Сер номер'  value='' /> " ;
echo " <input type='text'  name='ser_box'  placeholder='Номер коробки'  value='' /> " ;
echo " <input type='submit' name='add_product'   value='добавить изделие' /> " ;echo "<font color = red ><b>Всего изделий: " . $rows['count_sub']."</b></font>";



echo "<br><br> Примечание <input bgcolor='red' type='text' id='pole_note_top'textarea name='notes'   value='$note'> </b> <input type='submit'  value='Обработать' /> " ;




echo "</form>";



echo "</div>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////подчиненные данные ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<div class='data'>";
$sizefont="style='font: 12px apple-system'";
///// шапка талицы
$name =  array('id ','Наименование','Сер номер'  ,'Номер изделия ','Клиент','Кол-во','Верс сис','Алгоритм','Алгоритм','Конфиг','№ зак','Номер счета','Примечание','Дата') ;
$long =  array(' 80','400         ','100         ','105 ' ,'195','40','42','102','102','102','50','103','100','100') ;

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' bgcolor='Chocolate' id = 'gradient'> <font color='black'   style='font: 12px apple-system'> <b> $nam</td>";
} echo "</tr> </table>";
/////end////////

$strSQL="SELECT *  FROM give_board_sub WHERE id_give_gen= '$id'  ";
 $rs = mysql_query($strSQL);

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {


 echo "<form action='give_board.php?id=$id' method='get' id='MyForms' >";
 echo "<input color = '#f0f0f0' bgcolor='' type='hidden' id='pole_null' textarea name='id'   value='$id'>   ";


$idproduct=$row['product'];

$name_b= name_board_id($idproduct) ;

$id_sub=$row['id_give_sub'];



echo "  <td  align='left'  'width=500 bgcolor='LightYellow' id='pole_del' >  <a href='give_board.php?id=".$id."&del_current=".$id_sub."'><img src='images/krest1.png' width='20'
  height='20' alt='Пример''></a></td>  ";


//echo "<td width=65 bgcolor='white' style='font: 14px arial' ><button type='submit' name='del_current' value=".  $row['id_give_sub'] .">Удалить</button></td>";  //кнопка 
echo " <td  'width=0 id='pole_null' > < > <b> <input type='text' size=1 id='pole_id'  name='id_give_sub' value=", $row['id_give_sub']  , " '>  </td> "; //  для занесения в базу данных по этому адресу

//echo "<td  'width=40 bgcolor='white' id='pole_id' > <font color='black'   $sizefont1> <b>"   .  $row['id_prih_sub']  .         "  </td>";

$name_b = substr($name_b, 0, 50);


echo "<td  align='left'   bgcolor='LightYellow' id ='field_nameboadrd'  >  <b>"   .  $name_b .         "  </td>";

//echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='product' value=".$row['product']            .">  </td>  ";
echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='ser_numb' value=".$row['ser_num']            .">  </td>  ";
echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='ser_num_boxs' value=".$row['ser_num_box']            .">  </td>  ";



echo "<td align='center'  bgcolor='white' > <font color='black'  > ";

/////........................список 
$idclient= $row['client'] ;
$rr=sqlread("SELECT * FROM client WHERE idclient = '$idclient'");
$sql = "SELECT * FROM client ORDER BY company ASC ";
$result_select = mysql_query($sql);

/*?> <select name='idclient' id='polespisok' onchange="document.getElementById('MyForms').submit()"> <?*/
?> <select name='idclient' id='pole_spisok_client' onchange="this.form.submit()" > <?


$object->company = $rr['company'] ;

echo   "<option  selected value=$idclient   > $object->company   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->idclient' > $object->company </option> ";}  
echo "</select>";
////..........................

echo " </td> ";

//echo " <td id='pole_null' ><input type='submit' name='update'   value='обновить' > </td>" ;


//echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_name'  name='client' value=".name_client_id($row['client'] )           .">  </td>  ";



  $datess=date("d.m.Y",strtotime($row['dates']  ));

$quantity =$row['quantity'] ;
echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text'  id='field_quant12_40px'  name='quantity' value=".$row['quantity']  ."   >  </td>  ";





echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' id='field_vers_syst40px'  name='vers_syst' value=".$row['vers_syst']            .">  </td>  ";

echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' id='field_algo12_100px'  name='algo' value=".$row['algo']            .">  </td>  ";
echo "<td align='center'  bgcolor='white' > <font color='black'  > ";
/////........................список алгоритмов
$id_alg= $row['id_alg'];
$rr=sqlread("SELECT * FROM algorythm WHERE id = '$id_alg'");
$sql = "SELECT * FROM algorythm ORDER BY name ASC ";
$result_select = mysql_query($sql);
?> <select name="id_alg" id='field_algo12_100px'  onchange="this.form.submit()" > <? //onchange="document.getElementById('MyFormss').submit()"
//.........
$object->name = $rr['name'] ;
echo   "<option  selected value=$id_alg   > $object->name   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name </option> ";}  
echo "</select>";
////..........................
echo "</td>";
echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' id='field_algo12_100px'  name='conf' value=".config_algo_id( $row['id_alg'])           .">  </td>  ";


echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='field_n_doc12_50px'  name='n_order' value=".$row['n_order']            .">  </td>  ";
echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='n_account' value=".$row['n_account']            .">  </td>  ";
echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='field_note12_100px'  name='note' value='".$row['note']            ."''>  </td>  ";
echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='datess' value=".$datess          .">  </td>  ";

echo " <td id='' ><input id='field_null' type='submit' name='edit'   value='добавить изделие' /></td> " ; 
echo "</form>";

echo "</tr> ";




}}
echo " </table>";
echo "</div>";
////////////////////////////////////////////////////////////////////////////////////

echo "</div>";

include "menu.php";
mysql_close();
?>

</body>