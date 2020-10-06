<html>
<body>
<form name=modal>

<STYLE>

                             #pole_nacc {

    width: 50px; /* Ширина поля в пикселах */

    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
 border: 0px double black; /* Параметры границы */
border: 1px solid #ccc; /* серая рамка */

   } 
                             #pole_data {

    width: 100px; /* Ширина поля в пикселах */

    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
 border: 0px double black; /* Параметры границы */
border: 1px solid #ccc; /* серая рамка */

   } 

                             #comment {

    width: 200px; /* Ширина поля в пикселах */

    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
 border: 0px double black; /* Параметры границы */
border: 1px solid #ccc; /* серая рамка */

   } 


       .genblock
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 3%; /* Положение элемента от левого края */


    top: 60px; /* Положение от верхнего края */
    width: 90%; /* Ширина блока */
  height:60%;
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




</STYLE>






<?
session_start();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }

//echo $_SESSION['iddpay'] . "=========" ; 

include "background.php";
include 'conn.php';
include 'function.php';
$user=id_user_hash();
$id=$_GET['id'];




if (!empty($_GET['pay'])) {
 //echo "<script>alert('У вас ". $id ."----".$idclient." ');</script>";
$id=$_GET['id'];
$pay=$_GET['pay'];
$comment=$_GET['comment'];
$num_pp=$_GET['num_pp'];
$user= $_SESSION['user'] ;


	$qq=sqlread("INSERT INTO account_pay(user,id_ac_gen,num_pp,pay,dates,comment) VALUES('$user','$id',$num_pp,'$pay',NOW(),'$comment')  "); 
}

if ($_GET['del']=='yes') {
$idpay=$_GET['idpay'];

//echo "<script>alert('У вас ". $id ."----".$idclient." ');</script>";
sqlread("DELETE FROM account_pay WHERE id_pay = '$idpay' ");
}


//echo "<form action='popup_addpay.php?id=$id' method='GET' id='shap'  >";
?><form action="popup_addpay.php" method="get" onsubmit="return sendForm(name);">


<? echo "<input type='text' visibility : hidden size=20 value=".$id." name='id'>"; ?> 

<input type='text' size=8 value='' placeholder = 'Краткое' name='pay'>
<input type='text' size=35 value='' placeholder = 'Полное' name='comment'>

<input type='submit' name='sub'   value="внести оплату"></button>

<!-- <input class='button' type="button" value="Внести оплату" onClick="window.opener.changeBut(document.modal.name.value); self.close()"> -->

<!-- <a href='#'><img src='images/dengadollar.png' width='20' height='20' alt='...'' onclick=' var qq = "<?php echo $id;?>"; window.open("popup_addpay.php?id=" +qq, "modal", "width=600,height=300,screenX=500,screenY=500"); '></a> -->

<?

echo "</form >";



 echo "<div class='genblock'>";
$id=$_GET['id'];



$strSQL="SELECT * FROM account_pay WHERE  id_ac_gen ='$id'  ORDER BY id_pay DESC "; $rs = mysql_query($strSQL);

    if (!empty ($rs) ) {    while($row = mysql_fetch_array($rs)) {


echo "<table border=0 height=3  cellpadding='0' cellspacing='1' bgcolor='#c0c0c0'   >";//," <width=300%>"," <cellpadding=5>";

$id=$_GET['id'];
$id_pay =$row['id_pay'];
$dates =$row['dates'];
$pay =$row['pay'];
$num_pp =$row['num_pp'];
$comment =$row['comment'];

$rr1=sqlread("SELECT * FROM account_gen WHERE id_ac_gen = '$id' ");
$n_acc=$rr1['number'];

echo " <td> <a href='popup_addpay.php?id=".$id."&idpay=".$id_pay."&del=yes'><img src='images/krest1.png' width='15' height='15' alt='Пример''></a></td> ";  // удаление 

echo "<td  'width=40 bgcolor='LightYellow' id='pole_nacc' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self '  style='color:DarkBlue;'  >$num_pp</a></td>";
echo "<td  'width=40 bgcolor='LightYellow' id='pole_data' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self '  style='color:DarkBlue;'  >$dates</a></td>";
echo "<td  'width=40 bgcolor='LightYellow' id='pole_nacc' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self '  style='color:DarkBlue;'  >$pay</a></td>";
echo "<td  'width=40 bgcolor='LightYellow' id='comment' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self '  style='color:DarkBlue;'  >$comment</a></td>";
}}

echo "</tr> </table>";

 echo "</div >";

?>

</form>
</body>
</html>