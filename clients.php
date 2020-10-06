<meta charset="windows-1251">
<head>
  <link href='/css/style.css' rel='stylesheet' type='text/css'>
</head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="daterangepicker/moment.js"></script>
  <script src="daterangepicker/daterangepicker.js"></script>



<style>


                             #pole_id {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
        text-align: center;
             background: rgba(248, 248, 255, 0.8); /* Цвет фона */


   } 
                             #pole_phone {

    width: 100px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
        text-align: center;
             background: rgba(248, 248, 255, 0.8); /* Цвет фона */


   } 

                                #pole_pic {

    width: 20px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
        text-align: center;
             background: rgba(248, 248, 255, 0.8); /* Цвет фона */


   } 
                             #pole_name {

    width: 260px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;

   text-align: left;
             background: rgba(248, 248, 255, 0.8); /* Цвет фона */


   } 

                             #pole_full_name {

    width: 550px; /* Ширина поля в пикселах */
    font-size: 24px; 
    text-align: left;
     font-family:'apple';
     font-weight:bold;

   text-align: left;
             background: rgba(248, 248, 255, 0.8); /* Цвет фона */


   } 


#pole_note {

width: 650px; /* Ширина поля в пикселах */
font-size: 14px; 
text-align: left;
 font-family:'amaze';
 font-weight:bold;

text-align: left;
         background: rgba(248, 248, 255, 0.8); /* Цвет фона */


} 

                             #input_pole_80 {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: right;
     font-family:'amaze';
     font-weight:bold;
             background: rgba(248, 248, 255, 0.8); /* Цвет фона */

   } 

                             #input_pole_150 {

    width: 150px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;

   text-align: left;
             background: rgba(248, 248, 255, 0.8); /* Цвет фона */


   } 
                             #input_pole_150_center {

    width: 150px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

 
             background: rgba(248, 248, 255, 0.8); /* Цвет фона */


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


       .client_name
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 2%; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 10px; /* Положение от верхнего края */
    width: 700px; /* Ширина блока */
   height:50;    
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

       .data_client
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
 left: 5px; /* Положение элемента от правого края */
 /*   right: 2%; /* Положение элемента от правого края */
    top: 100; /* Положение от верхнего края */
    width: 680px; /* Ширина блока */
   height:500;    
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

float:right;

                     }  





 #blockreset {
  margin:auto;
    position: absolute; /* Абсолютное позиционирование */
 left: 315px; /* Положение элемента от правого края */
 /*   right: 2%; /* Положение элемента от правого края */
    top: 2; /* Положение от верхнего края */
    width: 200px; /* Ширина блока */


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
 // echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
  
  ?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?

}

////////////////////////////////////////////Добавляем клиента //////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['add_client'])) {

$user=$_SESSION['user'];

  $qq=sqlread("INSERT INTO  client(user) VALUES ('$user')  "); 

    $row=sqlread("SELECT MAX(idclient) as maxclient_id FROM   client "); 

$idd=$row['maxclient_id'];


//self.location.href = 'page.htm';
  echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
/*?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?*/
}


////////////////////////////////////////////Изменяем данные //////////////////////////////////////////////////////////////////////////////////////////////


if(!empty($_GET['e_mail'])) { $idd=$_GET['idd'];

  $e_mail=$_GET['e_mail'];
  
    $qq=sqlread("UPDATE client SET e_mail='$e_mail'  WHERE idclient = '$idd' "); 
  
    //echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
    ?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
  }
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(!empty($_GET['company'])) { $idd=$_GET['idd'];

$company=$_GET['company'];

	$qq=sqlread("UPDATE client SET company='$company'  WHERE idclient = '$idd' "); 

	//echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
  ?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}

  ////////////////////////////////////////////full_name//////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(!empty($_GET['full_name'])) { $idd=$_GET['idd'];

$full_name=$_GET['full_name'];

	$qq=sqlread("UPDATE client SET full_name='$full_name'  WHERE idclient = '$idd' "); 

	//echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
  ?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['contact_person_one'])) { $idd=$_GET['idd'];

$contact_person_one=$_GET['contact_person_one'];

	$qq=sqlread("UPDATE client SET contact_person_one='$contact_person_one'  WHERE idclient = '$idd' "); 

//	echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['function_one'])) { $idd=$_GET['idd'];

$function_one=$_GET['function_one'];

	$qq=sqlread("UPDATE client SET function_one='$function_one'  WHERE idclient = '$idd' "); 

//	echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['phome_one'])) { $idd=$_GET['idd'];

$phome_one=$_GET['phome_one'];

	$qq=sqlread("UPDATE client SET phome_one='$phome_one'  WHERE idclient = '$idd' "); 

//	echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['contact_person_two'])) { $idd=$_GET['idd'];

$contact_person_two=$_GET['contact_person_two'];

	$qq=sqlread("UPDATE client SET contact_person_two='$contact_person_two'  WHERE idclient = '$idd' "); 

//	echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['function_two'])) { $idd=$_GET['idd'];

$function_two=$_GET['function_two'];

	$qq=sqlread("UPDATE client SET function_two='$function_two'  WHERE idclient = '$idd' "); 

//	echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['phone_two'])) { $idd=$_GET['idd'];

$phone_two=$_GET['phone_two'];

	$qq=sqlread("UPDATE client SET phone_two='$phone_two'  WHERE idclient = '$idd' "); 

//	echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['idform'])) { $idd=$_GET['idd'];

//$id='1';
// 


$idform=$_GET['idform'];


//echo "<script>alert('У вас ". $_GET['idform']." ');</script>";


	$qq=sqlread("UPDATE client SET form='$idform'  WHERE idclient = '$idd' "); 

//	echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['inn'])) { $idd=$_GET['idd'];
$inn=$_GET['inn'];
	$qq=sqlread("UPDATE client SET inn='$inn'  WHERE idclient = '$idd' "); 
//	echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?

}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['kpp'])) { $idd=$_GET['idd'];
$kpp=$_GET['kpp'];
	$qq=sqlread("UPDATE client SET kpp='$kpp'  WHERE idclient = '$idd' "); 
//	echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['adress'])) { $idd=$_GET['idd'];
$adress=$_GET['adress'];
	$qq=sqlread("UPDATE client SET adress='$adress'  WHERE idclient = '$idd' "); 
//	echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['discount'])) { $idd=$_GET['idd'];
$discount=$_GET['discount'];
	$qq=sqlread("UPDATE client SET discount='$discount'  WHERE idclient = '$idd' "); 
//	echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['credit_limit'])) { $idd=$_GET['idd'];
$credit_limit=$_GET['credit_limit'];
	$qq=sqlread("UPDATE client SET credit_limit='$credit_limit'  WHERE idclient = '$idd' "); 
//	echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['note'])) { $idd=$_GET['idd'];
$note=$_GET['note'];
	$qq=sqlread("UPDATE client SET note='$note'  WHERE idclient = '$idd' "); 
//	echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}
/////////////////////////////// Найти клиента ////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(!empty($_GET['find_client'])) { $idd=$_GET['idd'];
$find_client=$_GET['find_client'];
$_SESSION['find_client'] = $_GET['find_client'] ;

  //echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
  ?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}
/////////////////////////////// Сброс фильтра ////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(!empty($_GET['res']) ) { $idd=$_GET['idd'];

  $_SESSION['find_client'] = '' ;
  
    //echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
    ?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
  }
  
/////////////////////////////// Сохранить данные клиента ////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['save_client']) ) { $idd=$_GET['idd'];

  
  ?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
if(!empty($_GET['old_id'])) { $idd=$_GET['idd'];
$old_id=$_GET['old_id'];
  $qq=sqlread("UPDATE give_board_sub SET client='$idd'  WHERE client = '$old_id' "); 


  echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
}
*/
echo "<div class='genblock'>";
?><div class='label'>  <font color='Navy' size = 5  > <?  echo 'Список клиентов' ; ?>  </font > </div> <?
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////Список клиентов///////////////////////////////////////////////////////////////////////////////////////////

echo "<div class='data'>";
$idd=$_GET['idd'];
echo "<form action='clients.php?idd=$idd' method='GET' id='shap'  >";

echo space(0). "<input bgcolor='red' type='text' id='pole_name' textarea name='find_client' placeholder='Найти клиента по названию'   value='$note' >   ";
//echo space(0). "<input bgcolor='red' type='submit' id='' textarea name='find_client' placeholder=''   value='   ' ><br>   ";

echo " <div id= blockreset > <a href='clients.php?idd=".$idd."&res=yes'><img src='images/Reset.png' width='100' height='25' alt='Пример'></a> </div>";  // удаление 

///// шапка талицы
$name =  array('id ','форма','Наименование','Телефон','Кредит лимит',' ') ;
$long =  array(' 80','80         ','260'    ,'100'        ,'80' ,'20' ) ;
 
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' bgcolor='LightSeaGreen' > <font color='black'   style='font: 12px apple-system'> <b> $nam</td>";} 
echo "</tr> </table>";
/////end////////

$strSQL="SELECT *  FROM client  ORDER BY company ASC ";

if(strlen($_SESSION['find_client'] )>2) {  $find_client= $_SESSION['find_client'] ; $strSQL="SELECT *  FROM client  WHERE  company LIKE '%$find_client%' ORDER BY company ASC ";                       }

 $rs = mysql_query($strSQL);

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {
$idd=$row['idclient'];
echo "<font color='white'  >";
$idd=$row['idclient'];
$company=$row['company'];


echo space(10)."<td  'width=40 bgcolor='SandyBrown' id='pole_id' > <font color='black'   >   <a href='clients.php?idd=$idd' TARGET='_self'>$idd</a></td>";

//echo "<td align='center'  id = 'pole_id'>   ".$row['idclient']."  </td>";
echo "<td align='center'  id = 'pole_id'>   ".$row['form']."  </td>";
//echo "<td align='left'    id = 'pole_name'>   ".$row['company']."  </td>";
echo space(10)."<td  'width=40 bgcolor='SandyBrown' id='pole_name' > <font color='black'   >   <a href='clients.php?idd=$idd' TARGET='_self'>$company</a></td>";


echo "<td align='left'    id = 'pole_phone'>   ".$row['phome_one']."  </td>";
echo "<td align='left'    id = 'pole_id'>   ".$row['credit_limit']."  </td>";

echo "<td align='center'  id = 'pole_pic'>  <a href='clients.php?idd=$idd'><img src='images/blue-arrow1.jpg' width='20' height='20' alt='Пример''></a> </td>";  // удаление наклаждной
echo "</tr> "; 
}}

echo "</table>";

echo "</form></div>";
//////////////////////////////////////////////Данные о клиенте ///////////////////////////////////////////////////////////////////////////////////////////////////////////





echo "<form action='clients.php?idd=$idd' method='GET' id='shapp'  >";

$idd=$_GET['idd'];

echo "<div class='add_client'>";

$row= sqlread ("SELECT * FROM  client  WHERE  idclient ='$idd' ");
?> <div class='client_name'><?



?>
 <button name = 'add_client'   value='Добавить'       ><div class="fly_comment" data-title="Добавить алгоритм'"> <img src="images/add_doc.png"  width='30' height='30' alt="Зонтик"   id = 'button_pic' style="vertical-align: middle"></div></button>

 <button name = 'save_client'   value='Сохранить'       ><div class="fly_comment" data-title="Сохранить данные счета"> <img src="images/diskette.png"  width='30' height='30' alt="Зонтик"   id = 'button_pic' style="vertical-align: middle"></div></button>



<?

$full_name = $row['full_name'];
echo space(5). "<input style='background:LightYellow;' type='text' id='pole_full_name' textarea name='full_name' placeholder='Полное название компании'   value='$full_name' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }' > <br>  ";

?></div> <?

?> <hr><br> <?








echo "<br>";





if($idd>0) {    echo "<div class='data_client'  >";    } else {  echo "<div class='data_client' style='display:none;' >"; }


echo space(10)."<input  readonly   bgcolor='red' type='text' id='input_pole_150_center' textarea name='idd' placeholder='idd'   value='$idd'  >   ";


echo space(5);
/*
$idform=$row['form'];
//$idform=1;
/////........................список форм собственности
$idform= $idform;//$_SESSION['idclient'];
$rr=sqlread("SELECT * FROM form_company WHERE id= '$idform'"); 
$sql = "SELECT * FROM form_company  ";
$result_select = mysql_query($sql);

?> <select name="idform" id='input_pole_150' onchange="document.getElementById('shapp').submit()"> <?
/*?> <select name='idclient' id='' > <?*/
/*
$object->form = $rr['form'] ;
echo   "<option  selected value=$idform   > $object->form   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->form </option> ";}  
echo "</select>";
////..........................

*/

$form= $row['form'];
echo  "<input bgcolor='red' type='text' id='input_pole_150' textarea name='idform' placeholder='Форма'   value='$form' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'>  ";



$company = $row['company'];
echo space(5). "<input bgcolor='red' type='text' id='pole_name' textarea name='company' placeholder='Краткое название компании'   value='$company' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }' > <br>  ";

?><font size="2" color="Indigo" face="times"><b><?
echo space(20). "ID Компании" . space(25) ."Форма собственности" .space(25) . "Краткое наименование компании <br><br>" ;
?></font ></b><?
//....

?> <hr><br> <?
//....

$contact_person_one= $row['contact_person_one'];
echo space(10). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='contact_person_one' placeholder='Первое контактное лицо'   value='$contact_person_one' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'>   ";

$function_one= $row['function_one'];
echo space(5). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='function_one' placeholder='Должность '   value='$function_one' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'> ";

$phome_one= $row['phome_one'];
echo space(5). "<input bgcolor='red' type='tel' id='pole_name' textarea name='phome_one' placeholder='Телефон'   value='$phome_one' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'> <br>  ";

?><font size="2" color="Indigo" face="times"><b><?
echo space(13). "Первое контактное лицо" . space(10) ."Должность первого лица " .space(26) . "Тел первого лица <br><br>" ;
?></font ></b><?
//....

$contact_person_two= $row['contact_person_two'];
echo space(10). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='contact_person_two' placeholder='Контактное лицо 2'   value='$contact_person_two' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'> ";

$function_two= $row['function_two'];
echo space(5). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='function_two' placeholder='Должность второго лица '   value='$function_two' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'> ";

$phone_two= $row['phone_two'];
echo space(5). "<input bgcolor='red' type='tel' id='pole_name' textarea name='phone_two' placeholder='Телефон второго лица'   value='$phone_two' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'><br> ";

?><font size="2" color="Indigo" face="times"><b><?
echo space(13). "Второе контактное лицо" . space(10) ."Должность второго лица " .space(26) . "Тел второго лица <br><br>" ;
?></font ></b><?
//....

$inn= $row['inn'];
echo space(10). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='inn' placeholder='ИНН'   value='$inn' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'>  ";

$kpp= $row['kpp'];
echo space(5). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='kpp' placeholder='КПП'   value='$kpp' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'> ";

$adress= $row['adress'];
echo space(5). "<input bgcolor='red' type='text' id='pole_name' textarea name='adress' placeholder='Адрес'   value='$adress' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'> <br>  ";



?><font size="2" color="Indigo" face="times"><b><?
echo space(30). "ИНН" . space(40) ."КПП " .space(50) . "Юридический адрес <br><br>" ;
?></font ></b><?
//....




$discount= $row['discount'];
echo space(10). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='discount' placeholder='Скидка'   value='$discount' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'>   ";

$credit_limit= $row['credit_limit'];
echo space(5). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='credit_limit' placeholder='Кредитный лимит'   value='$credit_limit' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'>  ";


$e_mail= $row['e_mail'];
echo space(5). "<input bgcolor='red' type='email' id='pole_name' textarea name='e_mail' placeholder='e_mail'   value='$e_mail' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'> <br>  ";


?><font size="2" color="Indigo" face="times"><b><?




echo space(30). "Скидка" . space(25) ."Кредитный лимит  " .space(36) . "Электронная почта <br><br>" ;

$note= $row['note'];
echo space(12). "<input bgcolor='red' type='text' id='pole_note' textarea name='note' placeholder='Примечание'   value='$note' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'> <br>   ";

?><font size="2" color="Indigo" face="times"><b><?
echo space(90) . "Примечание <br><br>" ;
?></font ></b><?
//....

?> <hr><br> <?



//echo space(5). "<input bgcolor='red' type='text' id='pole_name' textarea name='old_id' placeholder='Старый ID клиента'   value='' > <br>   ";







echo "  <input autofocus type='submit' hidden value='Обработать' /> " ;









echo "</form>";

echo "<form action='clients.php?idd=$idd' method='GET' id='shapp'  >";

echo "</div>";

//echo space(12)." <input type='submit' name='add_client'   value='добавить нового клиента' /> " ;

echo "</form>";
echo "</div>";
echo "</div>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "</div>";
include "menu.php";
?>