<!DOCTYPE PHP>
<html lang='ru'>

<head>



 <title>SAVEL</title>

<meta charset = 'windows-1251'>
<meta name = 'description' content = 'SAVEL' >
<meta name = 'content' content = 'base' >

 <link rel="shortcut icon" href="/images/logo.png" type="image/png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="ckLine/jquery.ckLine.js"></script>

<? //==============частицы========================= ?>


  
  <title>sparkle of the particles</title>
  
  
  
      <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style.css">
  
</head>

<body>

  <div id="jsi-particle-container" class="container"></div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>

<? //======================================= ?>



<style>


#poleloginpass  
{

    margin:auto;
    position: absolute; /* Абсолютное позиционирование */

    width: 200px; /* Ширина блока */
   height:40px;    
    padding: 5px; /* Поля вокруг текста */
    background: #ffffff; /* Цвет фона */ 
font-family:'Times New Roman', Times, serif;
font-weight:bold;
font-size:18px;


}

    .blok_pass
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 0; /* Положение элемента от правого края */
    top: 0% ;/* Положение от верхнего края */
    width: 100%; /* Ширина блока */
   height:50px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 

 background: url(images/block_fon.jpg) round #fc0; /* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */   
 overflow: hidden; /* свойство для прокрутки по горизонтали.  */

                padding: 3px; 
                  text-align: left;
             
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 0.9; /* Значение прозрачности */

                     } 
    .blok_pass_input
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 60%; /* Положение элемента от правого края */
    top: 0% ;/* Положение от верхнего края */
    width: 700; /* Ширина блока */
   height:40px;    
    padding: 5px; /* Поля вокруг текста */

overflow: hidden; /* свойство для прокрутки по горизонтали.  */



                padding: 3px; 
                  text-align: left;
             

    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 10; /* Значение прозрачности */

                     }  

        body,
        html {
            margin: 0;
            padding: 0;
            width: 100%;
            max-height: 100vh;
            position: relative;
            font-family: sans-serif;
            font-size: 18px;
            background: linear-gradient(141deg, #0fb8ad 0%, #76f1ff 51%, #2cb5e8 75%);
            overflow: hidden;
        }

        #ckLine {
            width: 100%;
            height: 100vh;
        }

        .txt {
            width: 40%;
            height: 200px;
            margin: 0 auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateY(-50%) translateX(-50%);
            z-index: 10;
            background-color: rgba(57, 92, 105, 0.72);
        }

        .txt h1,
        .txt p,
        .txt a {
            text-align: center;
            color: #fff;
        }
        .txt h1 {
            margin: 0;
        }
        .txt p {
            font-size: 1em;
        }

        .txt a {
            text-decoration: none;
        }

        .txt a:hover {
            text-decoration: underline;
        }

        .txt>div {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }


           button.new {
    background: -moz-linear-gradient(#00BBD6, #EBFFFF);
    background: -webkit-gradient(linear, 0 0, 0 100%, from(#00BBD6), to(#EBFFFF));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00BBD6', endColorstr='#EBFFFF');
    padding: 3px 7px;
    color: #333;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #666;
   }

</style>

<?php
/*
ini_set('session.gc_maxlifetime', 86400);
ini_set('session.cookie_lifetime', 0);
session_set_cookie_params(0);
*/

 session_start();
 //ini_set('session.gc_maxlifetime', 120960);
 //ini_set('session.cookie_lifetime', 120960);

if (!empty($_GET['reset'])) {$_SESSION['dopusk']=0;$_SESSION['user'] =0;header("Location: index.php") ; }


//$_SESSION['user']='2'; 



// error_reporting(E_ERROR | E_WARNING | E_PARSE);

//ini_set("display_errors", 1);
 ?><?


include_once 'config.php';
include 'conn.php';
include 'function.php';


//include 'error_visible.php';
//====================================линии=====================
?>

<body>

    <div>
        <svg id="ckLine" xmlns="http://www.w3.org/2000/svg" width="1000" height="1000"></svg>
    </div>
    <script>
        $('#ckLine').ckLine({
            leftRight: false,
            strokeColor: 'rgba(255,255,255,0.4)',
            interval: 800,
            animateTime: 1600,
            animationTimeRange: [800, 600]
        });

    </script>
</body>


<?


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 echo "<form action='' method='post'>";
if(!empty($_POST['paswd'])){ 
$login=   $_POST['login'];
$passw=$_POST['paswd'];

$sql="SELECT * FROM user WHERE login='$login'";
$rs = mysql_query($sql);
if (!empty($rs) ){ $row = mysql_fetch_array($rs);}






$pass = $row['hashpass'];
$iduser = $row['id_user'];

$rnd=rand(0,1000000);
$hashses=md5($rnd)  ;
$_SESSION['hashses'] =$hashses;


$ip=$_SERVER['REMOTE_ADDR'];
$browser= $_SERVER['HTTP_USER_AGENT'];



sqlread("INSERT INTO reg_user(user,ip,browser,hashsession) VALUES ('$iduser','$ip','$browser','$hashses')    ") ;

sqlread("UPDATE user  SET hashsession= '$hashses'  WHERE  id_user ='$iduser' ") ;

if(empty($hashses))  { session_destroy(); echo "<script> document.location.href='index.php?reset=1'</script>"; } 
$rows=sqlread("SELECT * FROM user where hashsession = '$hashses' ");
$iduser = $rows['id_user'];
if(empty($iduser))  { session_destroy(); echo "<script> document.location.href='index.php?reset=1'</script>"; } 


$_SESSION['user'] =$iduser ;
$dopusk=$row['typedopusk'];
//setcookie ("iduser", $iduser,time()+896000,'/');
//$_COOKIE ['iduser']=$iduser ;


//echo md5($passw)  ."<br>" . $pass;

if (md5($passw) == $pass) {  $_SESSION['user'] =$iduser;$_SESSION['dopusk'] =$dopusk ;  ;
//ssylka();
}}

if ($_SESSION['dopusk'] < 10 and $_SESSION['dopusk'] > 0) {echo "<script> document.location.href='general_form.php?hs=$hashses'</script>"; }
//if ($_SESSION['dopusk'] > 4 ) { echo "<script> document.location.href='select_seriyky.php'</script>"; }





$pass=0;


$iduser=$_SESSION['user'];

$_SESSION['name_user'] = name_user_id($_SESSION['user']) ;


//$row=sqlread("SELECT * FROM user WHERE iduser='$iduser'");

$sql="SELECT * FROM user WHERE iduser='$iduser'";
$rs = mysql_query($sql);
if (!empty($rs) ){ $row = mysql_fetch_array($rs);}

$procent_zp=$row['procent_zp'];

$_SESSION['prozent_zarptata'] =$procent_zp;


echo "</form>";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////







ini_set('date.timezone', 'Europe/Minsk'); // установка часового пояса
echo "<br><br><br><br><br>";
?>




<html>
 <head>
  
  <title></title>
  <style>
   body {
    background: url(images/techno_pass.jpg) no-repeat;
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
   }
  </style>
 </head>
 <body>
 </body>
</html>



<div class='blok_pass'>
 <div class='blok_pass_input'>
    <form action="" method="POST" id='My' >
<br>


 <input autofocus type="text" name="login" placeholder="Логин" id = 'poleloginpass'>   
   &nbsp  &nbsp  &nbsp  &nbsp  &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp   <input id = 'poleloginpass' autofocus type="password" name="paswd"  placeholder="пароль"  onchange="document.getElementById('My').submit()" >  
    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp    &nbsp       <a href="#" class="button blue">Войти</a>  

</form>
</div>
</div>

<?
MYSQL_CLOSE();
?>


