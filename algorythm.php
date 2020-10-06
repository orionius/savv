 <meta charset="windows-1251">
<head>
  <link href='/css/style.css' rel='stylesheet' type='text/css'>
</head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="daterangepicker/moment.js"></script>
  <script src="daterangepicker/daterangepicker.js"></script>



<?/*
 ini_set('error_reporting', 2047 );
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
*/

?>

<style>
   #gradient {
    background: #fefcea; /* Для старых браузров */
    background: linear-gradient(to top, #808080, #ececec);
      }
       .data
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 2%; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 10%; /* Положение от верхнего края */
    width: 700px; /* Ширина блока */
   height:80%;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
   /* background-image: url('/images/bacground_div.jpg');*/

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

    float:left;

                     }     


       .add_client
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
 left: 780px; /* Положение элемента от правого края */
 /*   right: 2%; /* Положение элемента от правого края */
    top: 10%; /* Положение от верхнего края */
    width: 700px; /* Ширина блока */
   height:80%;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
   /* background-image: url('/images/bacground_div.jpg');*/

    background: rgba(230, 230, 250, 0.2); /* Цвет фона */
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;
overflow:  hidden; 

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

       .data_alg
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
 left: 5px; /* Положение элемента от правого края */
 /*   right: 2%; /* Положение элемента от правого края */
    top: 80; /* Положение от верхнего края */
    width: 680px; /* Ширина блока */
   height:550;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
   /* background-image: url('/images/bacground_div.jpg');*/

    background: rgba(230, 230, 250, 0.2); /* Цвет фона */
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;
overflow:  hidden; 

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
                  text-align: center;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 0.9; /* Значение прозрачности */
                     }   


          .label
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */


    top: 10px; /* Положение от верхнего края */
    width: 1720px; /* Ширина блока */
   height:30px;    


 /*   background-image: url('/images/bacground_div.jpg'); */

     background: rgba(0, 150, 0, 0.3); /* Цвет фона */
overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */

    background: linear-gradient(to top, #008080, #ffecec);


    
   
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

                                #input_pole_100 {

    width: 100px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
        text-align: center;
             background: rgba(248, 248, 255, 0.8); /* Цвет фона */
  box-shadow: rgba(0,0,0,1.2) 3px 3px 3px; 

   } 
   #input_pole_150 {

width: 150px; /* Ширина поля в пикселах */
font-size: 14px; 
text-align: center;
 font-family:'amaze';
 font-weight:bold;
    text-align: center;
         background: rgba(248, 248, 255, 0.8); /* Цвет фона */
box-shadow: rgba(0,0,0,1.2) 3px 3px 3px; 

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


</style>




<?


session_start();
include "background.php";
include 'conn.php';

if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }


include 'function.php';
$user=id_user_hash();

if($_GET['idd']=='new') {

$user=$_SESSION['user'];

sqlread("INSERT INTO client(user)  VALUES ('$user')");

$row=sqlread("SELECT * FROM client WHERE user  = '$user'  ORDER BY idclient DESC LIMIT 1 ");

$idd=$row['idclient'];
	echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}


////////////////////////////////////////////Добавляем алгоритм //////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['add_algo'])) {

$user=$_SESSION['user'];

  $qq=sqlread("INSERT INTO  algorythm(user,orderby) VALUES ('$user',NOW() )  "); 

    $row=sqlread("SELECT MAX(id) as maxalg_id FROM   algorythm "); 

$idd=$row['maxalg_id'];


//echo "<script>alert('У вас ". $idd." ');</script>";

  echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}


/*
////////////////////////////////////////////Изменяем данные //////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['company'])) { $idd=$_GET['idd'];

$company=$_GET['company'];

	$qq=sqlread("UPDATE client SET company='$company'  WHERE idclient = '$idd' "); 

	echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['contact_person_one'])) { $idd=$_GET['idd'];

$contact_person_one=$_GET['contact_person_one'];

	$qq=sqlread("UPDATE client SET contact_person_one='$contact_person_one'  WHERE idclient = '$idd' "); 

	echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['function_one'])) { $idd=$_GET['idd'];

$function_one=$_GET['function_one'];

	$qq=sqlread("UPDATE client SET function_one='$function_one'  WHERE idclient = '$idd' "); 

	echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['phome_one'])) { $idd=$_GET['idd'];

$phome_one=$_GET['phome_one'];

	$qq=sqlread("UPDATE client SET phome_one='$phome_one'  WHERE idclient = '$idd' "); 

	echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['contact_person_two'])) { $idd=$_GET['idd'];

$contact_person_two=$_GET['contact_person_two'];

	$qq=sqlread("UPDATE client SET contact_person_two='$contact_person_two'  WHERE idclient = '$idd' "); 

	echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['function_two'])) { $idd=$_GET['idd'];

$function_two=$_GET['function_two'];

	$qq=sqlread("UPDATE client SET function_two='$function_two'  WHERE idclient = '$idd' "); 

	echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['phone_two'])) { $idd=$_GET['idd'];

$phone_two=$_GET['phone_two'];

	$qq=sqlread("UPDATE client SET phone_two='$phone_two'  WHERE idclient = '$idd' "); 

	echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['idform'])) { $idd=$_GET['idd'];

//$id='1';
// 


$idform=$_GET['idform'];


//echo "<script>alert('У вас ". $_GET['idform']." ');</script>";


	$qq=sqlread("UPDATE client SET form='$idform'  WHERE idclient = '$idd' "); 

	echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['inn'])) { $idd=$_GET['idd'];
$inn=$_GET['inn'];
	$qq=sqlread("UPDATE client SET inn='$inn'  WHERE idclient = '$idd' "); 
	echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['kpp'])) { $idd=$_GET['idd'];
$kpp=$_GET['kpp'];
	$qq=sqlread("UPDATE client SET kpp='$kpp'  WHERE idclient = '$idd' "); 
	echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['adress'])) { $idd=$_GET['idd'];
$adress=$_GET['adress'];
	$qq=sqlread("UPDATE client SET adress='$adress'  WHERE idclient = '$idd' "); 
	echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['discount'])) { $idd=$_GET['idd'];
$discount=$_GET['discount'];
	$qq=sqlread("UPDATE client SET discount='$discount'  WHERE idclient = '$idd' "); 
	echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['credit_limit'])) { $idd=$_GET['idd'];
$credit_limit=$_GET['credit_limit'];
	$qq=sqlread("UPDATE client SET credit_limit='$credit_limit'  WHERE idclient = '$idd' "); 
	echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
if(!empty($_GET['old_id'])) { $idd=$_GET['idd'];
$old_id=$_GET['old_id'];
  $qq=sqlread("UPDATE give_board_sub SET client='$idd'  WHERE client = '$old_id' "); 


  echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}
*/

/////////////////////////////// Найти алгоритм ////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(!empty($_GET['find_algo'])) { $idd=$_GET['idd'];
$find_algo=$_GET['find_algo'];
$_SESSION['find_algo'] = $_GET['find_algo'] ;

  echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////note /////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['comment'])) { $idd=$_GET['idd'];
$comment=$_GET['comment'];



  $qq=sqlread("UPDATE algorythm SET comment='$comment'  WHERE id = '$idd' "); 
  echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}



////////////////////////////////////////////Изменяем данные //////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['idprogrammer'])) { $idd=$_GET['idd'];

$idprogrammer=$_GET['idprogrammer'];

  $qq=sqlread("UPDATE algorythm SET idprogrammer='$idprogrammer'  WHERE id = '$idd' "); 

  echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; 
}
////////////////////////////////////////////Изменяем статус////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['status'])) { $idd=$_GET['idd'];
$status=$_GET['status'];
  $qq=sqlread("UPDATE algorythm SET status='$status'  WHERE id = '$idd' "); 
  echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; }
////////////////////////////////////////////Изменяем дата от ////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['orderby'])) { $idd=$_GET['idd'];
$orderby=$_GET['orderby'];
 //$orderby=date("Y.m.d",strtotime($orderby  ));
//alert($orderby);
  $qq=sqlread("UPDATE algorythm SET orderby='$orderby'  WHERE id = '$idd' "); 
  echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; }
////////////////////////////////////////////Изменяем название алгоритма ///////////////////////////////////////////////////////////////////////
if(!empty($_GET['name'])) { $idd=$_GET['idd'];
$name=$_GET['name'];
  $qq=sqlread("UPDATE algorythm SET name='$name'  WHERE id = '$idd' "); 
  echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; }


////////////////////////////////////////////Изменяем конфигурация ////////////////////////////////////////////////////////////
if(!empty($_GET['config'])) { $idd=$_GET['idd'];
$config=$_GET['config'];
  $qq=sqlread("UPDATE algorythm SET config='$config'  WHERE id = '$idd' "); 
  echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; }
////////////////////////////////////////////Изменяем deadline ////////////////////////////////////////////////////////////
if(!empty($_GET['deadline'])) { $idd=$_GET['idd'];
$deadline=$_GET['deadline']; //$deadline=date("Y.m.d",strtotime($deadline  ));

  $qq=sqlread("UPDATE algorythm SET deadline='$deadline'  WHERE id = '$idd' "); 
  echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; }
////////////////////////////////////////////Изменяем posted ////////////////////////////////////////////////////////////
if(!empty($_GET['posted'])) { $idd=$_GET['idd'];
$posted=$_GET['posted'];//$posted=date("Y.m.d",strtotime($posted  ));
  $qq=sqlread("UPDATE algorythm SET posted='$posted'  WHERE id = '$idd' "); 
  echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; }
////////////////////////////////////////////Изменяем durationguideline ////////////////////////////////////////////////////////////
if(!empty($_GET['durationguideline'])) { $idd=$_GET['idd'];
$durationguideline=$_GET['durationguideline'];//$durationguideline=date("Y.m.d",strtotime($durationguideline  ));
  $qq=sqlread("UPDATE algorythm SET durationguideline='$durationguideline'  WHERE id = '$idd' "); 
  echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; }
////////////////////////////////////////////Изменяем completed ////////////////////////////////////////////////////////////
if(!empty($_GET['completed'])) { $idd=$_GET['idd'];
$completed=$_GET['completed'];//$completed=date("Y.m.d",strtotime($completed  ));
  $qq=sqlread("UPDATE algorythm SET completed='$completed'  WHERE id = '$idd' "); 
  echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; }

////////////////////////////////////////////Изменяем firmware ////////////////////////////////////////////////////////////
//echo "<script>alert('У вас ". $firmware."--" . $description  . "  ----     "   .$idd.      " ');</script>";

if(!empty($_GET['firmware'])) { $idd=$_GET['idd'];
$firmware=$_GET['firmware']; 
if ($firmware==1) $firmware=0;
if ($firmware==2) $firmware=1;
  $qq=sqlread("UPDATE algorythm SET firmware='$firmware' WHERE id = '$idd' "); 
  echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; }


if(!empty($_GET['description'])) { $idd=$_GET['idd'];
$description=$_GET['description']; 
if ($description==1) $description=0;
if ($description==2) $description=1;
  $qq=sqlread("UPDATE algorythm SET description='$description' WHERE id = '$idd' "); 
  echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; }


  if(!empty($_GET['source'])) { $idd=$_GET['idd'];
$source=$_GET['source']; 
if ($source==1) $source=0;
if ($source==2) $source=1;
  $qq=sqlread("UPDATE algorythm SET source='$source' WHERE id = '$idd' "); 
  echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; }





//  deadline  posted  durationguideline completed

//////////////////////////////////////////////Сохранить данные алгоритма ////////////////////////////////////////////////////////////////////////////////////


if(!empty($_GET['save_al'])) { $idd=$_GET['idd'];

  $orderby=$_GET['orderby'];
alert("$orderby");
   $qq=sqlread("UPDATE algorythm SET orderby='$orderby'  WHERE id = '$idd' "); 



    echo "<script> document.location.href='algorythm.php?idd=$idd'</script>"; }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



echo "<div class='genblock'>";


  ?><div class='label'>  <font color='Navy' size = 5  > <?  echo 'Список алгоритмов' ; ?>  </font > </div> <?

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////Список алгоритмов///////////////////////////////////////////////////////////////////////////////////////////

echo "<div class='data'>";
echo "<form action='algorythm.php?idd=$idd' method='GET' id='shap'  >";

echo space(0). "<input bgcolor='red' type='text' id='pole_name' textarea name='find_algo' placeholder='Найти алгоритм'   value='$note' > <br>   ";

///// шапка талицы
$name =  array('id ','Алгоритм','Конфигурация','Заказ от ','Срок исп','Выполнен ','Статус') ;
$long =  array(' 80','80         ','80'    ,'100'        ,'100' ,'100','100' ) ;
 
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' bgcolor='LightSeaGreen' > <font color='black'   style='font: 12px apple-system'> <b> $nam</td>";} 
echo "</tr> </table>";
/////end////////

$strSQL="SELECT *  FROM algorythm  ORDER BY name ASC ";

//echo "<script>alert('У вас ". $_SESSION['find_algo'] ." ');</script>";

if(strlen($_SESSION['find_algo'] )>1) {  $find_algo= $_SESSION['find_algo'] ; $strSQL="SELECT *  FROM algorythm  WHERE  name LIKE '%$find_algo%' ORDER BY name ASC ";                       }

 $rs = mysql_query($strSQL);

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {

$status=$row['status'];
$status= str_replace(' ', '', $status);


//$status=preg_replace("/[^x\d|*\.]/","",$status);


$idd=$row['id'];
echo "<font color='SpringGreen'  >";
//$bgcolor="bgcolor=#adfff4";// зеленый 
//$bgcolor="bgcolor=#f7c3db";// красный 
$bgcolor="bgcolor=#adfff4";
if(strcmp($status,'Неотправлен')==0) { $bgcolor="bgcolor=#f7c3db";}
//$bgcolor="$bgcolor=#adfff4";
if(empty($status)) { $bgcolor="bgcolor=#f7c3db";}
if(strcmp($status,'Отправлен')==0) { $bgcolor="bgcolor=#36ffc3";}


//if(strcmp($status,"Готов")==0) { $bgcolor="bgcolor=#f7c3db";}


//if(strcmp($status,'Готов')<>1) { $bgcolor="$bgcolor=#adfff4";}

//if(strcmp($status,"Неотправлен")==0) { $bgcolor="$bgcolor=#f7c3db";}
//if(empty($status)) { $bgcolor="$bgcolor=#f7c3db";}
//if(strcmp($status,'               ')==0) { $bgcolor="$bgcolor=#f7c3db";}

echo "<td  'width=40 bgcolor='SandyBrown' id='pole_id' > <font color='black'   >   <a href='algorythm.php?idd=$idd' TARGET='_self '>".$row['id']." </a></td>";
echo "<td  'width=40 bgcolor='SandyBrown' id='pole_id' > <font color='black'   >   <a href='algorythm.php?idd=$idd' TARGET='_self '> ".$row['name']."</a></td>";

//echo "<td $bgcolor align='center'  id = 'pole_id'>   ".$row['id']."  </td>";
//echo "<td $bgcolor align='center'  id = 'pole_id'>   ".$row['name']."  </td>";
echo "<td $bgcolor align='left'    id = 'pole_id'>   ".$row['config']."  </td>";
echo "<td $bgcolor align='left'    id = 'input_pole_100_nocol'>   ".$row['orderby']."  </td>";
echo "<td $bgcolor align='left'    id = 'input_pole_100_nocol'>   ".$row['posted']."  </td>";
echo "<td $bgcolor align='left'    id = 'input_pole_100_nocol'>   ".$row['posted']."  </td>";
echo "<td $bgcolor align='left'    id = 'input_pole_100_nocol'>   ".$row['status']."  </td>";


echo "<td align='center'  id = 'pole_pic'>  <a href='algorythm.php?idd=$idd'><img src='images/blue-arrow1.jpg' width='20' height='20' alt='Пример''></a> </td>";  // удаление наклаждной
echo "</tr> "; 
}}

echo "</table>";



echo "</form></div>";


//////////////////////////////////////////////Данные  ///////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<div class='add_client'>";



echo "<form action='algorythm.php?idd=$idd' method='GET' id='shapp'  >";

?> <br> <?
$idd=$_GET['idd'];

$row= sqlread ("SELECT * FROM  algorythm  WHERE  id ='$idd' ");
//..........................................................................
?><font style='font: 15px apple-system' color = black ><?


?>
 <button name = 'add_algo'   value='Добавить'       ><div class="fly_comment" data-title="Добавить алгоритм'"> <img src="images/add_doc.png"  width='30' height='30' alt="Зонтик"   id = 'button_pic' style="vertical-align: middle"></div></button>


 <button name = 'save_al'   value='Сохранить'       ><div class="fly_comment" data-title="Сохранить данные счета"> <img src="images/diskette.png"  width='30' height='30' alt="Зонтик"   id = 'button_pic' style="vertical-align: middle"></div></button>


<?

  echo space(130)." <td><div class='fly_comment_left' data-title='Удалить алгоритм'>  <a href='algorythm.php?idd=".$idd."&del_al=yes'><img src='images/krest1.png' width='30' height='30' alt='Пример''></a></div></td> ";  // удаление 

  
?><hr><?

if($idd>0) {    echo "<div class='data_alg'  >";    } else {  echo "<div class='data_alg' style='display:none;' >"; }


echo "<br><br>";
echo space(5)."<input bgcolor='red' type='text' id='input_pole_150' textarea name='idd' placeholder='idd'   value='$idd' >   ";




 //$orderby=date("d.m.Y",strtotime($row['orderby']  ));
$orderby=$row['orderby'] ;echo space(2). "<input bgcolor='red' type='date' id='input_pole_150' textarea name='orderby' placeholder='orderby'   value='$orderby' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }' >   ";
$name= $row['name'];echo  space(2)."<input bgcolor='red' type='text' id='input_pole_150' textarea name='name' placeholder='алгоритм'           value='$name' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }' >  ";
$config = $row['config'];echo space(2). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='config' placeholder='config'      value='$config' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }' > <br>  ";

?><font size="2" color="Navy" face="times"><b><?
echo space(25). "ID". space(40). "Заказ от:" . space(35) ."Алгоритм" .space(30) . "Конфигурация <br><br>" ;
?></font ></b><?
//....

?> <hr><br> <?
//...........................................................................
 $deadline=$row['deadline'];echo space(5). "<input bgcolor='red' type='date' id='input_pole_150' textarea name='deadline' placeholder='deadline '         value='$deadline' > ";
 $posted=$row['posted']  ; echo space(2). "<input bgcolor='red' type='date' id='input_pole_150' textarea name='posted' placeholder='posted'               value='$posted' >  ";
 $durationguideline=$row['durationguideline']  ; echo space(2). "<input bgcolor='red' type='date' id='input_pole_150' textarea name='durationguideline' placeholder='durationguideline'   value='$durationguideline' >  ";
 $completed=$row['completed']  ; echo space(2). "<input bgcolor='red' type='date' id='input_pole_150' textarea name='completed' placeholder='completed'   value='$completed' > <br>  ";

?><font size="2" color="Navy" face="times"><b><?
echo space(12) ."Срок исполнения " .space(17) . "Принято прог..том" .space(22).  " Ориент срок " .space(22).  " Дата готовности <br><br><br><br>" ;
?></font ></b><?
//...............................................................................

echo space(5);
//////////////////////////поле со списком ИМЯ ПРОГРАММИСТА /////////////////////////////////////////////
/////........................отобразить текущее положение  
$idprogrammer= $row['idprogrammer'] ; $rr=sqlread("SELECT * FROM user WHERE id_user = '$idprogrammer'");  // определить текущее значение списка
?> <select name='idprogrammer' id='input_pole_150'"   onchange="document.getElementById('shapp').submit()"  > <?   //здесь вводим имя для запроса по get  и тип поля для отображения  поля 
$object->surname = $rr['surname'] ;  echo   "<option  selected value=$idprogrammer   > $object->surname   </option>"; //текущее значение имени поля в $object, отобразить текущее положение в списке value = id  $object = имя поля выше строкой 
//.......................... выборка элемента списка
$sql = "SELECT * FROM user WHERE   post LIKE '%ПРОГРАМ%'  ORDER BY surname ASC ";
$result_select = mysql_query($sql);while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_user' > $object->surname </option> ";}  // вводим поле id списка в mysql и имя списка в mysql для отображения на экране и выборки из них
echo "</select>";
////..........................

echo space(2);
//////////////////////////поле со списком статус /////////////////////////////////////////////
/////........................отобразить текущее положение  
$status= $row['status'] ; $rr=sqlread("SELECT * FROM status_algo WHERE status LIKE  '$status'");  // определить текущее значение списка
?> <select name='status' id='input_pole_150'"        onchange="document.getElementById('shapp').submit()"  > <?   //здесь вводим имя для запроса по get  и тип поля для отображения  поля 
$object->surname = $rr['status'] ;  echo   "<option  selected value=$status   > $object->surname   </option>"; //текущее значение имени поля в $object, отобразить текущее положение в списке value = id  $object = имя поля выше строкой 
//.......................... выборка элемента списка
$sql = "SELECT * FROM status_algo  ORDER BY status ASC ";
$result_select = mysql_query($sql);while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->status' > $object->status </option> ";}  // вводим поле id списка в mysql и имя списка в mysql для отображения на экране и выборки из них
echo "</select>";
////..........................







/*
$idprogrammer= $row['idprogrammer'];
$surname_programmer= surname_user_id($idprogrammer);
echo space(10). "<input bgcolor='red' type='text' id='input_pole_100' textarea name='orderby' placeholder=''   value='$surname_programmer' > ";
*//*
$status= $row['status'];
echo space(15). "<input bgcolor='red' type='text' id='input_pole_100' textarea name='status' placeholder=''   value='$status' > ";
*/
$comment= $row['comment'];


echo space(2) . "<input bgcolor='red' type='text' id='input_pole_300'  name='comment' placeholder='Комментарий'   value='$comment' > ";
//echo "  <input autofocus type='submit' hidden value='Обработать' /> " ;

?><font size="2" color="Navy" face="times"><b><?
echo space(15). "Программист" . space(32) ."Статус " .space(55) . "Комментарий<br><br>" ;


?></font ></b><?

echo "</form>";

///////////////////////////загрузка алгоритма на сервер.
?>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>PHP - Загрузка файлов на сервер своими руками</title>
		<style>
			#wrap{
				width:400px;
				height:100%;
				display:block;
				margin:0 auto;
			}
			h2{
				text-align:center;
			}
		</style>
	</head>
	<body>
		<div id="wrap">
			<h2>Демо: Загрузка файлов на сервер</h2>
			<form enctype="multipart/form-data" method="post" action="upload.php">
				<p>Загрузите ваши фотографии на сервер</p>
				<p><input type="file" name="files">
				<input type="submit" value="Отправить" name="upload"></p>
			</form>
		</div>
	</body>
</html>
<?
////////////////////////////////////////////////////////


//...............................................................................
?> <hr><br> <?
echo "<form action='algorythm.php?idd=$idd' method='GET' id='shapps'  >";
echo space(200);
$firmware=$row['firmware'];
$description=$row['description'];
$source=$row['source'];


if ($firmware==1) {  $firmware_check = "checked";}
//if ($firmware!=1) {  $firmware_check = "false";}

if ($description==1) {  $description_check = "checked";}
//if ($description!=1) {  $description_check = "false";}

if ($source==1) {  $source_check = "checked";}
//if ($source!=1) {  $source_check = "false";}






//echo space(10)."<input bgcolor='red' type='text' visible = hidest id='input_pole_100' textarea name='idd' placeholder='idd'   value='$idd' >   ";




?><font size="4" color="Navy" face="times"><b><?


//echo space(40);
echo "<br>";
if ($firmware!=1)echo space(20). "<a style='color: #222222;' href='algorythm.php?idd=".$idd."&firmware=2' >Прошивка</a> " ;
if ($firmware==1)echo space(20). "<a style='color: yellow;' href='algorythm.php?idd=".$idd."&firmware=1' >Прошивка</a> " ;


if ($description!=1)echo space(20). "<a style='color: #222222;' href='algorythm.php?idd=".$idd."&description=2' >Описание</a> " ;
if ($description==1) echo space(20). "<a style='color: yellow;' href='algorythm.php?idd=".$idd."&description=1' >Описание</a> " ;

if ($source!=1)echo space(20). "<a style='color: #222222;'href='algorythm.php?idd=".$idd."&source=2' >Исходник</a> " ;
if ($source==1) echo space(20). "<a style='color: yellow;' href='algorythm.php?idd=".$idd."&source=1' >Исходник</a> " ;



/*
<div class="slideOne"   >  
  <input type="checkbox" value= "slideOne" id="slideOne" name="check"  onchange="document.getElementById('shapp').submit()"   />
  <label for="slideOne"></label>
</div>


<div class="slideTwo"   >  
  <input type="checkbox" value= "" id="slideTwo" name="check1"  onchange="document.getElementById('shapp').submit()"   />
  <label for="slideTwo"></label>
</div>

<div class="slideThree"   >  
  <input type="checkbox" value= "" id="slideThree" name="check2" onchange =" document.getElementById('shapp').submit() "   />
  <label for="slideThree"></label>
</div>

<?


*/
?>
        <script>

            document.getElementById('firmware').onclick = function () {

                document.getElementById('firmware').checked = "true"

            }

        </script>
<?

/*?><script  document.getElementById('slideThree').onClick = function(){ alert(1234)};  </script><?*/


?><font size="2" color="Navy" face="times"><b><?

?></font ></b><?
//....

?> <hr><br> <?



//echo space(5). "<input bgcolor='red' type='text' id='pole_name' textarea name='old_id' placeholder='Старый ID клиента'   value='' > <br>   ";







echo "  <input autofocus type='submit' hidden value='Обработать' /> " ;

echo "</form>";


echo "<form action='algorythm.php' method='GET'  >";



//echo space(12)." <input type='submit' name='add_algo'   value='добавить новый алгоритм' /> " ;

echo "</form>";

echo "</div>";

echo "</div>";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "</div>";



include "menu.php";
?>