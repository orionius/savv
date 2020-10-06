<? session_start(); ?>
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


<STYLE>

                .super_genblock
 {
    
    overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
    border-radius: 10px;
    box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: cover%; /* Firefox 3.6+ */
    -webkit-background-size: cover%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: cover%; /* Opera 9.6+ */
    background-size: cover; /* Современные браузеры */
    box-shadow: rgba(5,5,5,1.2) 0px 5px 5px; 
   /* border: 1px double lightgrey;*/
    opacity: 0.9;
}


                .super_genblock
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 30; /* Положение элемента от левого края */
    right: 30;
    top: 10px; /* Положение от верхнего края */
    /*width: 1750px; /* Ширина блока */
    bottom:10;
    overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
    background: url(images/laminat.jpg)  no-repeat center ;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */  

    opacity: 1; /* Значение прозрачности */
                     }  


       .genblock
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 3%; /* Положение элемента от левого края */


    top: 60px; /* Положение от верхнего края */
    width: 90%; /* Ширина блока */
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
                     .header
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 3%; /* Положение элемента от левого края */
    right: 3%;

    top: 10px; /* Положение от верхнего края */
    width: 90%; /* Ширина блока */
  height:100px;
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

                     .add_board
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 3%; /* Положение элемента от левого края */
    right: 3%;

    top: 120px; /* Положение от верхнего края */
    width: 90%; /* Ширина блока */
  height:100px;
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
                     .sub_form
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 3%; /* Положение элемента от левого края */
    right: 3%;

    top: 230px; /* Положение от верхнего края */
    width: 90%; /* Ширина блока */
  height:400px;
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

                                 #pole_add_produkt {

width: 50%; /* Ширина поля в пикселах */
font-size: 20px; 
text-align: left;
 font-family:'amaze';
 font-weight:bold;

} 
#pole_add_produkt_ser {

width: 20%; /* Ширина поля в пикселах */
font-size: 20px; 
text-align: left;
 font-family:'amaze';
 font-weight:bold;
 border-radius: 15px;
 background:Aquamarine;
} 
#pole_id {

width: 100; /* Ширина поля в пикселах */
font-size: 30px; 
text-align: left;
 font-family:'amaze';
 font-weight:bold;
border-radius:15px 0 0 15px;
} 
#pole_name {

width: 1000; /* Ширина поля в пикселах */
font-size: 30px; 
text-align: left;
 font-family:'amaze';
 font-weight:bold;
 background:yellow;
} 
#pole_ser100 {

width: 200; /* Ширина поля в пикселах */
font-size: 30px; 
text-align: left;
 font-family:'amaze';
 font-weight:bold;
 border-radius:0px 15px 15px 0px;
} 

</STYLE>



<?

if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }



include "background.php";
include 'conn.php';
include 'function.php';
$user=id_user_hash();
////////////////////////////
if ( !empty($_GET['id_board']) ) {
   $id_board=$_GET['id_board'];
}
if ( !empty($_GET['id_subboard']) ) {
    $id_subboard=$_GET['id_subboard'];
 }
if ( !empty($_GET['ser_num_box']) ) {
    $ser_num_box=$_GET['ser_num_box'];

    $ser_num_box=strtoupper($ser_num_box);  
 }
 if ( empty($_GET['ser_num_box']) ) {
  $ser_num_box=$_GET['ser_num_box'];
}

 if ( !empty($_GET['ser_num_board']) ) {
  $ser_num_board=$_GET['ser_num_board'];
  $ser_num_box=trim(strtoupper($ser_num_box)," \t\n\r\0\x0B" ); 

}
if ( !empty($_GET['ser_num_board']) and iconv_strlen ($_GET['ser_num_board']) >3  and !empty ($_GET['ser_num_box']) ) {$id_subboard=$_GET['id_subboard'];
  $ser_num_board=trim(strtoupper($_GET['ser_num_board'])," \t\n\r\0\x0B" );
  $ser_num_box=$_GET['ser_num_box'];



  $qq=sqlread("UPDATE manufact_board_sub SET num_product='$ser_num_box', status='12' WHERE ser_num = '$ser_num_board' "); 

  $ser_num_board='';
//alert('1111111111');
  echo "<script> document.location.href='collation.php?ser_num_box='+$ser_num_box</script>"; 
}

if ( !empty($_GET['clear']) ) {  if ( $_GET['clear'] == 'yes') {    $ser_num_box=$_GET['ser_num_box'];
  $id=$_GET['id'];

  $qq=sqlread("UPDATE manufact_board_sub SET num_product='', status='14' WHERE id_prih_sub = '$id' "); 

//alert($id);
echo "<script> document.location.href='collation.php?ser_num_box='+$ser_num_box</script>"; 
}}

//////////////////////////////
?> <div class='super_genblock' > 
<div class='genblock'>

<?
//////////////////////////////////////Шапка//////////////////////////////////////////////////
echo "<form action='collation.php?id=$id' method='GET'  id = 'form_shapka'>";

echo "<div class='header'>";

echo  " <font style='font: 20px apple-system' color = black ><b>";

echo  "Серийный номер изделия".space(0);
echo space(5) . "<input type='text' id = 'pole_add_produkt_ser'  name='ser_num_box'  placeholder='Сер номер корпуса'  value='$ser_num_box' /> " ;


$row=sqlread("SELECT * FROM  manufact_board_sub  WHERE num_product LIKE '$ser_num_box'  ORDER BY id_prih_sub DESC ");
$id_board= $row['id_board'];

$row= sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board'  ");
$nameboard= $row['name_product'];


echo space(5) . "<input type='text' id = 'pole_add_produkt'  name='namebox'  placeholder='Сер номер корпуса'  value='".$nameboard."' /> <br>" ;



/*
/////........................список 
$id_board= $id_board;// $_SESSION['id_board'];
$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board'");
$sql = "SELECT * FROM cat_brd_prod ORDER BY name_product ASC ";
$result_select = mysql_query($sql);

?> <select name='id_board' id='pole_add_produkt' onchange="this.form.submit()"> <?
$object->name_product = $rr['name_product'] ;

echo   "<option  selected value=$id_board   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select>";
////..........................
*/


echo " <input style = 'visibility:hidden' type='submit' name='update' class='btn btn-warning btn-sm'   value='добавить изделие' /> " ;
echo "</div>";
//echo "</form>";

echo "<div class='add_board'>";
//echo "<br><br><br>";
//echo "<form action='collation.php?id=$id' method='GET'  id = 'form_shapka'>";
echo "Серийный номер платы";
//echo space(5) . "<input type='text' id = 'pole_add_produkt_ser' autofocus name='ser_num_board'  placeholder='Сер номер платы'  value='$ser_num_board'  onchange='this.form.submit()'   /> " ;

echo space(5); ?> <input type='text' id = 'pole_add_produkt_ser' autofocus name='ser_num_board'  placeholder='Сер номер платы'  value='<? echo $ser_num_board; ?> '   onchange="document.getElementById('MyForm').submit()" /> <?

//echo space(5) . "<input type='text' id = 'pole_add_produkt'  name='nameb'  placeholder='Сер номер корпуса'  value='".get_name_board_ser($ser_num_board)."' /> <br>" ;
echo " <input  type='submit' name='add_board' class='btn btn-warning btn-sm'   value='добавить изделие' /> " ;

echo "</form>";
echo "</div>";

///////////////////////////////////////Список плат в изделии //////////////////////////////////////////////////////////////
echo "<div class='sub_form'>";



if(!empty($ser_num_box) ) {$strSQL="SELECT *  FROM manufact_board_sub  WHERE num_product LIKE '$ser_num_box'  ";} else {$strSQL=0;}



 $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {
      $id_prih_sub= $row['id_prih_sub'];
      $id_board= $row['id_board'];
      $ser_num= $row['ser_num'];


     $nameboard= name_board_id($id_board);


      echo "<table border=0 height=0  cellpadding='0' cellspacing='1' bgcolor='#c0c0c0'   >";//," <width=300%>"," <cellpadding=5>";

        echo "<td> <a href='collation.php?id=".$id_prih_sub."&clear=yes&ser_num_box=$ser_num_box'><img src='images/krest1.png' width='40' height='40' alt='Пример''></a> </td>";  // удаление наклаждной
     //   echo "  <td  align='left'  'width=500 bgcolor='LightYellow' id='pole_del' >  <a href='prih_board.php?id=".$id."&del_current=".$idprih."'><img src='images/krest1.png' width='15'
       // height='11' alt='Пример''></a></td>  ";
      echo "<td >  <input bgcolor='red' type='text' id='pole_id' textarea name='nameboard'   value='$id_prih_sub'>  </td> ";
      echo "<td  >  <input bgcolor='red' type='text' id='pole_name' textarea name='nameboard'   value='$nameboard'>  </td> ";
      echo "<td  >  <input bgcolor='red' type='text' id='pole_ser100' textarea name='nameboard'   value='$ser_num'>  </td> ";

      ?></tr></table> <?

      
    }}   
echo "</div>";


echo "</div>";
include "menu.php";
echo "</div>";

