<?session_start();
//if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }
?>

<head>

<meta charset="windows-1251">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="daterangepicker/daterangepicker.css">
 <link rel="stylesheet" href="style.css">

 <script
  src="http://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

  <link href="css/style_field.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<?
include "background.php";
include 'conn.php';
include 'function.php';
$user=id_user_hash();
 session_start();


            $row=sqlread("SELECT count(id_order) AS cnt   FROM order_gen  ");   
            $cntt=$row['cnt'];
?>

<script>
                    setInterval(function(){

  var id = 5;


//$.playSound('sound/audio.mp3');
//alert(111);
$.ajax              ({
                      url:"ajax/ajax_order_journal.php",
                      type:"POST",
                      cache:true,
                      ifModified: true,
            data: { 
                   id: id,
                  },
        success: function(data){
          var duce = jQuery.parseJSON(data);
          var cnt = duce.cnt;


if (cnt != <? echo $cntt; ?>  ) { // alert(cnt); 

  var audio = new Audio('sound/sirena2.mp3');          
audio.play();

   }

                           },

                   });  
                                          }, 5000); // 1000 Рј.СЃРµРє
</script>
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
#input_note{
/*background: rgba(220, 250, 240, 10) ;*/
    width: 430px; /* Ширина поля в пикселах */
    table-layout: fixed;

    font-size: 12px; 
    text-align: left;
     font-family:'apple-system';
     font-weight:bold;
}

#name_client 
{

    width: 200px; /* Ширина поля в пикселах */
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

    width: 55px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 

                                .field_datafiltr {

width: 220px; /* Ширина поля в пикселах */
font-size: 20px; 
text-align: center;
 font-family:'amaze';
 font-weight:bold;
 border-radius: 4px;
  box-shadow: rgba(0,0,0,1.2) 2px 2px 3px; 

}      
        
                             #pole_id_18 {

    width: 65px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 
   #pole_id_rl {

width: 65px; /* Ширина поля в пикселах */
font-size: 18px; 
text-align: center;
 font-family:'amaze';
 font-weight:bold;
 border-radius: 8px 0 0 8px;

} 
   #status_rr {

width: 120px; /* Ширина поля в пикселах */
font-size: 18px; 
text-align: center;
 font-family:'amaze';
 font-weight:bold;

 border-radius: 0 8px 8px 0;
} 
                             #pole_ceny {

    width: 55px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 
                                #pole_name18 {

    width: 250px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: left;
     font-family:'amaze';
     border-radius: 4px;
  box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    

   } 
 
                                  #pole_data{

    width: 80px; /* Ширина поля в пикселах */
    font-size: 11px; 
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
 background: url(images/1205-318.jpg)  no-repeat center center fixed;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */   


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
    background-size: cover;
                     }   




       .data
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10; /* Положение элемента от правого края */
    top: 60px; /* Положение от верхнего края */
    width: 1300px; /* Ширина блока */
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
    background-size: cover;
                     }   


         .filtr
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 1330; /* Положение элемента от правого края */
    top: 60px; /* Положение от верхнего края */
    width: 350px; /* Ширина блока */
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
    background-size: cover;
                     }     
                     .infiltr
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 5px; /* Положение элемента от левого края */
    right: 5px; 

    top: 50px; /* Положение от верхнего края */
    width: 320px; /* Ширина блока */
  height:550px;
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
    background-size: cover;
                     }                   

         .nameorder
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10px; /* Положение элемента от правого края */
    right: 3%; /* Положение элемента от правого края */
    top: 10px; /* Положение от верхнего края */
   /* width: 99%; /* Ширина блока */
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
    background-size: cover;

    color: rgba(0,0,0,.6);
background-color: #dadada;
text-shadow: rgba(0,0,0,.2) 2px 6px 5px,rgba(255,255,255,.4) 0 -4px 30px;
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
 /*background: url(images/block_fon.jpg)  no-repeat center center fixed;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */   
 background: url(images/laminat.jpg)  no-repeat center center fixed;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */   
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
    background-size: cover;
                     }   


    table { 
    /*width: 100%; /* Ширина таблицы */
    border: 0px double black; /* Рамка вокруг таблицы */
    border-collapse: collapse; /* Отображать только одинарные линии */
   

   }
   th { 
   /* text-align: left; /* Выравнивание по левому краю */
   /*  background: #ccc; /* Цвет фона ячеек */
   /*  padding: 5px; /* Поля вокруг содержимого ячеек */
   border: 1px solid black; /* Граница вокруг ячеек */
   }
   td { 
   /*  padding: 5px; /* Поля вокруг содержимого ячеек */
    border: 1px solid black; /* Граница вокруг ячеек */
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

<audio id="audio" src="sound/audio.mp3"></audio>




<?







 if (empty($_SESSION['datefiltr_begin']) ) {$_SESSION['datefiltr_begin'] = '2018-01-01' ;}
if (empty($_SESSION['datefiltr_end']) ) {$_SESSION['datefiltr_end'] = date("Y-m-d");   ;}
///////////////////////////Переход по набранному номеру ///////////////////////////
if(!empty($_POST['idorder'])) {

  $n_order=$_POST['idorder'];
  
$row= sqlread("SELECT* FROM order_gen WHERE n_order LIKE '$n_order' ");
$id_order= $row['id_order'];


  // echo "<script>alert('У вас ". $dater." ');</script>";
  echo "<script> document.location.href='order.php?id=$id_order'</script>"; 
  
  }

//////////////////////////////////////////////////////////////////////////////////
if(!empty($_POST['go_to'])) {

$go=$_POST['go_to'];

// echo "<script>alert('У вас ". $dater." ');</script>";
echo "<script> document.location.href='order.php?id=$go'</script>"; 

}
///////////////////////фильтр по номеру продукта////////////////////////////////////////////
if(!empty($_GET['num_product'])) {$num_product=$_GET['num_product'];






$filtr ="SELECT a.*, b.snum_box , b.id_order_gen FROM order_gen a 
INNER JOIN order_sub_out b ON a.id_order = b.id_order_gen  
where b.snum_box ='$num_product' ORDER BY   n_order DESC  ";
$_SESSION['filtr']=$filtr;


}

/////////////////////////////////Фильтр отгрузка/////////////////////////////////
if(!empty($_POST['shipped'])) { //фильтр  не отгружен 

//$_SESSION['SHIPPED']=$_POST['shipped'];

// echo "<script>alert('У вас ". $dater." ');</script>";
//echo "<script> document.location.href='journal_order.php'</script>"; 

}
/////////////////////////////////Фильтр статус/////////////////////////////////
if(!empty($_POST['status'])) { //фильтр  не отгружен 

//$_SESSION['status']=$_POST['status'];

// echo "<script>alert('У вас ". $dater." ');</script>";
//echo "<script> document.location.href='journal_order.php'</script>"; 

}

//////////////////////////////////////////Сбросить фильтр//////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_POST['filtr_order_reset'])) {

  $_SESSION['status']='0';
  $_SESSION['SHIPPED']='0';
  $_SESSION['datefiltr_begin']='0';
  $_SESSION['datefiltr_end']='0';

  $_SESSION['filtr_order_reset']='0';
  $_SESSION['filtrorder_alg']='0';

}
//////////////////////////////////////////Применить фильтр//////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_POST['filtr'])) {
  $_SESSION['status']=$_POST['status'];
  $_SESSION['SHIPPED']=$_POST['shipped'];
  $_SESSION['datefiltr_begin']=$_POST['datefiltr_begin'];
  $_SESSION['datefiltr_end']=$_POST['datefiltr_end'];
  $_SESSION['filtrorder_alg']=$_POST['filtrorder_alg'];

  //alert(  $_SESSION['filtrorder_alg']);
  
  $_SESSION['filtr_order_reset']='1';

}


/////////////////////////дата фильтр////////////////////////////


if(!empty($_GET['datefiltr_begin']) or !empty($_GET['datefiltr_end']) ) {
  $datefiltr_begin=  $_GET['datefiltr_begin'];
  $datefiltr_end= $_GET['datefiltr_end'];
$_SESSION['datefiltr_begin']=  $datefiltr_begin;
$_SESSION['datefiltr_end'] = $datefiltr_end;



echo "<script> document.location.href='journal_order.php'</script>"; 
}




////////////////////////////////////////////////////


echo "<div class='genblock'>";

///////////////////////////////////////////ФИЛЬТР ПО ЗАКАЗЧИКУ///////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['idclient'])) {$idclient=$_GET['idclient'];


$filtr="SELECT *  FROM order_gen  WHERE client='$idclient' ORDER BY   n_order DESC    ";

$_SESSION['filtr']=$filtr;
//echo "<script> document.location.href='journal_order.php'</script>"; 
}
//..............

if(!empty($_GET['findnameclient'])) {$findnameclient=$_GET['findnameclient'];


$filtr ="SELECT a.*, b.idclient , b.company FROM order_gen a INNER JOIN client b ON b.idclient = a.client  where b.company like '%$findnameclient%'  ORDER BY   n_order DESC  ";
$_SESSION['filtr']=$filtr;
}

////////////////////////////////////////////////////
if(!empty($_GET['urgent'])) {$idclient=$_GET['idclient'];
  
$_SESSION['urgent'] = 1;

 } 

if(!empty($_GET['noturgent'])) {$idclient=$_GET['idclient'];
  
$_SESSION['urgent'] = 2;

 } 

if(!empty($_GET['all'])) {$idclient=$_GET['idclient'];
  
$_SESSION['urgent'] = 3;

 } 
 
///////////////////////фильтр по алгоритму////////////////////////////////////////////
if(!empty($_GET['findalg'])) {$findalg=$_GET['findalg'];
$filtr ="SELECT a.*, b.algorithm , b.id_order_gen FROM order_gen a 
INNER JOIN order_sub b ON a.id_order = b.id_order_gen  
where b.algorithm ='$findalg' ORDER BY   n_order DESC  ";
$_SESSION['filtr']=$filtr;
}

////////////////////////////////////////////////////////////////////////////////////

if(!empty($_GET['id_stat'])) {$id_stat=$_GET['id_stat'];

  $datefiltr_begin=$_SESSION['datefiltr_begin'];
  $datefiltr_end=$_SESSION['datefiltr_end'];

  $filtr="SELECT *  FROM order_gen  WHERE status_zakaz='$id_stat' or shipment='$id_stat' ORDER BY   n_order DESC    ";
  
  $_SESSION['filtr']=$filtr;
  //echo "<script> document.location.href='journal_order.php'</script>"; 
  }
///////////////////сбросить фильтр ///////////////////////////////////////////
  if(!empty($_GET['urgently3'])) {

 $_SESSION['datefiltr_begin']='2018-01-01';
 $_SESSION['datefiltr_end']='';


    echo "<script> document.location.href='journal_order.php'</script>"; 
  }


  
///////////////////////////////////////////Имя ордер//////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<div class='nameorder'>";


echo space(180)."<font style='font: 20px apple '  color = 'navy' >СПИСОК ЗАКАЗОВ";



echo "</div>";
////////////////////////////////////////////////////Список  заказов/////////////////////////////////////////////////////////////////////////////////////////////

echo "<div class='data'>";
 echo "<form action='' method='post'  >";

///// шапка талицы
$name =  array('№ зак ','№ счет','Дата','Клиент'  ,'Тип заказа','Статус','Примечание','Отгрузка') ;
$long =  array('65',' 65','80  ','200','150','150','430','120') ;
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  bgcolor='Aquamarine'  width='$ln' id = 'gradient' > <font color='black'   style='font: 12px apple-system'>  <b> $nam</td>";
} echo "</tr> </table>";
/////end////////

 
//$SHIPPED=$_POST['shipped'];

//echo $food;
$user=$_SESSION['user'];

$SHIPPED=$_SESSION['SHIPPED'];
$status=$_SESSION['status'];
$filtrorder_alg=$_SESSION['filtrorder_alg'];
$datefiltr_begin=$_SESSION['datefiltr_begin'];
$datefiltr_end=$_SESSION['datefiltr_end'];


$filtr_order_reset=0;

if($filtr_order_reset=='0')  {$strSQL="SELECT *  FROM order_gen where date_begin >='$datefiltr_begin' AND date_begin<='$datefiltr_end'  ORDER BY   n_order DESC    ";}


$urgent=$_SESSION['urgent'];

if ($urgent==1) $strSQL="SELECT *  FROM order_gen where date_begin >='$datefiltr_begin' AND date_begin<='$datefiltr_end' AND (status_zakaz =11 and  status_zakaz <> 12 and  status_zakaz <> 14 and status_zakaz <> 13 and shipment = 8  )  ORDER BY   n_order DESC    ";

if ($urgent==2) $strSQL="SELECT *  FROM order_gen where date_begin >='$datefiltr_begin' AND date_begin<='$datefiltr_end' AND (status_zakaz <> 11 and status_zakaz <> 12 and  status_zakaz <> 14 and status_zakaz <> 13 and shipment = 8  )  ORDER BY   n_order DESC    ";

if ($urgent==3) $strSQL="SELECT *  FROM order_gen where date_begin >='$datefiltr_begin' AND date_begin<='$datefiltr_end' AND ( shipment >0   )  ORDER BY   n_order DESC    ";


$filtr=$_SESSION['filtr'];




if(!empty($filtr)) $strSQL=$filtr;

$_SESSION['filtr']=0;
//alert($filtr);
 $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";


$date_begin= date("d.m.Y",strtotime($row['date_begin'])); 
$date_end= date("d.m.Y",strtotime($row['date_end'])); 
$date_shipment= date("d.m.Y",strtotime($row['date_shipment'])); 

$id=$row['id_order']; 
$shipment=$row['shipment'];
$status_zakaz=$row['status_zakaz'];


$bgcolor= "bgcolor='Pink'"; 
if($shipment==6 )   {$bgcolor= "bgcolor='Aquamarine'"; }
if($shipment==5 or $shipment== 7 )   {$bgcolor= "bgcolor='NavajoWhite'"; }


if($user=='21' or  $user=='4') {
if($status_zakaz==12 or $status_zakaz==13 or $status_zakaz==14 or $status_zakaz==15)   {$bgcolor= "bgcolor='Cyan'"; }
if( $status_zakaz== 7  )   {$bgcolor= "bgcolor='NavajoWhite'"; }
if( $status_zakaz== 3  )   {$bgcolor= "bgcolor='PeachPuff'"; }
if( $status_zakaz== 11  )   {$bgcolor= "bgcolor='Magenta'"; }
if($shipment==6)   {$bgcolor= "bgcolor='Cyan'"; }

}


$n_order=$row['n_order'];

$status = $row['status_zakaz']  ;
$type_order= name_typeorder_id($row['type_zakaz'] );

$id_account = $row['id_account']  ;
$n_account = $row['n_account']  ;

$id_stat_ship= $row['shipment'];
$qq=sqlread("SELECT * FROM status_zakaz WHERE id_stat = '$id_stat_ship' ");
$namestat_ship=$qq['name_status'];

$idstatus_zakaz= $row['status_zakaz'];
$qq=sqlread("SELECT * FROM status_zakaz WHERE id_stat = '$idstatus_zakaz' ");
$namestat_zakaz=$qq['name_status'];

?><body><?


//.................. Всплывающая подсказка подчиненные данные заказа

$sizefont1="style='font: 14px times'";
?><td align= center  width=40 bgcolor='SandyBrown' id='pole_id_rl'  >
 <a href="order.php?id= <? echo $id; ?>" TARGET='_self' class="help1">  <? echo $n_order ?> <span>  <?   

 echo "<table border=1 cellpadding='0' cellspacing='1'  rules='cols' >";  


    $SQLSr = "SELECT * FROM order_sub where id_order_gen = '$id' ";
    // Выполнить запрос (набор данных $rs содержит результат)
    $rssr = mysql_query($SQLSr);  if (!empty ($rssr) ) {   while($rowsr = mysql_fetch_array($rssr)) {

$id_board=$rowsr['id_board'];
$algorithm=$rowsr['algorithm'];
$quantity=$rowsr['quantity'];
$note_b=$rowsr['note_b'];
$id_order_sub=$rowsr['id_order_sub'];


$namealgorithm=name_algo_id($algorithm);
$namebrd=name_board_id($id_board);

$rr=sqlread("SELECT SUM(quantity) AS sumquantout FROM order_sub_out   WHERE id_order_gen = '$id' and id_board = '$id_board' AND idsuborder='$id_order_sub' ");

//alert($algorithm);

$sumquantout=$rr['sumquantout'];
$balance= $quantity -$sumquantout;

if($balance==0){ $bgcol="bgcolor='#D0FFFF'" ; $fontbacgr= "<font style='color: #ffffff; background-color: #ff0000'  > ";}
if($balance>0){ $bgcol="bgcolor='LightYellow'" ; $fontbacgr= "<font style='color: #ffffff; background-color: #ff0000'  > ";}
if($balance<0){ $bgcol="bgcolor='LightPink'" ; $fontbacgr= "<font style='color: #ffffff; background-color: #ff0000'  > ";}




echo "<td align = left width=700 $bgcol ". $sizefont1 .">".$namebrd. "</td> ";
echo "<td align = center width=100 $bgcol ". $sizefont1 .">".$quantity. "</td> ";
echo "<td align = center width=100 $bgcol ". $sizefont1 .">".$namealgorithm. "</td> ";
echo "<td align = center width=300 $bgcol ". $sizefont1 .">".$note_b. "</td> ";




?> </tr> <?
  
    }}
//echo "</table> ";

echo "</table> ";  
 ?>  </span>  </a> <?


echo " </font>";

//.....................


echo "<td  'width=40 bgcolor='SandyBrown' id='pole_id_18' > <font color='black'   >   <a href='account.php?id=$id_account' TARGET='_self'>$n_account</a></td>";
?></body><?

echo "<td  align='center'  width=40 $bgcolor  id='pole_data' > <font color='black'  $sizefont1> <b>"   . $date_begin  .         "  </td>";
echo "<td   'width=20 $bgcolor id='name_client' > <font color='black' bgcolor='red'  $sizefont1> <b>"   .name_client_id($row['client'] )    .         "  </td>";
echo "<td   'width=20 $bgcolor id='input_id_150' > <font color='black'  $sizefont1> <b>"   . $type_order .         "  </td>";
//echo "<td   'width=20 $bgcolor id='input_id_100' > <font color='black'  $sizefont1> <b>"   . $row['n_account']  .         "  </td>";
echo "<td   'width=20 $bgcolor id='input_id_150' > <font color='black'  $sizefont1> <b>"   .$namestat_zakaz   .         "  </td>";
echo "<td   'width=40 $bgcolor id='input_note' > <font color='black'  $sizefont1> <b>"   .  $row['note']  .         "  </td>";
echo "<td   'width=40 $bgcolor id='status_rr' > <font color='black'  $sizefont1> <b>"   .  $namestat_ship  .         "  </td>";




//echo "<td  align='center'  width=40 bgcolor='white' id='pole_data' > <font color='black'  $sizefont1> <b>"   . $date_end  .         "  </td>";
//echo "<td  align='center'  width=40 bgcolor='white' id='pole_data' > <font color='black'  $sizefont1> <b>"   . $date_shipment  .         "  </td>";



//echo "<td  'width=40 bgcolor='white' id='pole_id' > <font color='black'   $sizefont1> <b>"   .  $row['quant_order']  .         "  </td>";





 echo "</tr> </table>";

}}
  echo "    </form> " ;
echo "</div>";

//////////////////////////////////////////////ФИЛЬТР //////////////////////////////////////////

echo "<div class='filtr'>";
echo "<div class='nameorder'>";
echo space(25)."<font style='font: 20px apple '  color = 'navy' >Фильтр";
echo "</div><br><br><br>";

echo "<div class='infiltr'>";
 echo "<form action='' method='post'  >";



 echo "<form action='order.php?id=$id' method='get'   >";
echo "<div class='blok_status'><br>";

echo space(1);
?> <input type = 'text' id='pole_name18'  name = 'idorder' placeholder = 'Введите номер заказа'  > <hr> <?

echo "</form>";

echo "<form action='journal_order.php' method='get'   >";


echo space(1);
$client=$row['client'];
/////........................список клиентов
$idclient= $_GET['idclient'];
$rr=sqlread("SELECT * FROM client WHERE idclient = '$idclient'"); 
$sql = "SELECT * FROM client ORDER BY company ASC ";
$result_select = mysql_query($sql);

?> <select name="idclient" id='pole_name18' onchange="this.form.submit()"> <?   //onchange="this.form.submit()"  /// onchange="document.getElementById('shap_client').submit()"

$object->company = $rr['company'] ;

echo   "<option  selected value=$idclient   > $object->company   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->idclient' > $object->company </option> ";}  
echo "</select><br>";
////..........................

echo space(1);
?> <input type="text" id='pole_name18' name = "findnameclient" value=""><br>  <? 

echo "</form>";

echo space(10)."<font color = black >Выбрать заказчика</font>";

?> <hr><?
echo "<form action='journal_order.php' method='get'   >";
echo space(1);
/////........................список статус отгрузки
$id_stat= $_GET['id_stat'];
$rr=sqlread("SELECT * FROM status_zakaz WHERE id_stat = '$idclient'"); 
$sql = "SELECT * FROM status_zakaz ORDER BY name_status ASC ";
$result_select = mysql_query($sql);

?> <select name="id_stat" id='pole_name18' onchange="this.form.submit()"> <?   //onchange="this.form.submit()"  /// onchange="document.getElementById('shap_client').submit()"

$object->company = $rr['name_status'] ;

echo   "<option  selected value=$id_stat   > $object->company   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_stat' > $object->name_status </option> ";}  
echo "</select>";
////..........................
echo "</form>";





echo space(10)."<font color = black >Выбрать статус</font><br>";


echo "<form action='journal_order.php' method='get'   >";
echo space(1);

//alert($_GET['findalg']);

/////........................список алгоритмов
$findalg=$_GET['findalg'];
$rr=sqlread("SELECT * FROM algorythm WHERE id = '$findalg'"); 
$sql = "SELECT * FROM algorythm ORDER BY name ASC ";
$result_select = mysql_query($sql);

?> <select name="findalg" id='pole_name18' onchange="this.form.submit()"> <?   //onchange="this.form.submit()"  /// onchange="document.getElementById('shap_client').submit()"

$object->name = $rr['name'] ;

echo   "<option  selected value='$id'   > $object->name   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name </option> ";}  
echo "</select><br>";
////..........................
echo "</form>";

echo space(10)."<font color = black >Выбрать алгоритм </font>";

echo "<form action='journal_order.php' method='get'   >";
$datefiltr_begin=$_SESSION['datefiltr_begin'];
$datefiltr_end=$_SESSION['datefiltr_end'];


?>
<font color='black'   style='font: 20px apple-system'>
<hr>

<? echo space(2)."От <input type='date'  name='datefiltr_begin'  value='$datefiltr_begin' class='field_datafiltr'   ><br>"; ?>

<? echo space(1)." До <input type='date'  name='datefiltr_end'  value='$datefiltr_end' class='field_datafiltr'  onchange='this.form.submit()' ><br>"; ?>
</form>

<form action='journal_order.php' method='get'   >
<hr>
<? $num_product= $_GET['num_product']; echo space(2)."  <input type = 'text' id='pole_name18'  name = 'num_product' placeholder = 'Номер оборудования' > "; 


echo "</form><br>";

echo space(5) ;?> <input type="submit" class='btn btn-danger btn-sm'  name = "urgent" value="Срочно<? echo space(15) ; ?>">
 <input type="submit" class='btn btn-warning  btn-sm'  name = "noturgent" value="Ждет<? echo space(10) ; ?>">
 <input type="submit" class='btn btn-success btn-sm'  name = "all" value="Все<? echo space(5) ; ?>">
<?

echo "</div></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

echo "<form action='journal_order.php' method='get'   >";
 echo  space(5) . $qqq ;?> <input type="submit" class='btn btn-warning btn-sm' name = "urgently3" value=" <? echo space(25) ."Сбросить фильтр". space(25) ; ?>"><br><p>

<?
echo "</form>";







echo "</div>";
echo "</form>";






  echo "    </form> " ;


echo "</div>";




///////////////////////////////////////////////////////////////////////////////////////////////
echo "</div>";


include "menu.php";
    	?>
  