<? session_start(); ?>

<html>
<body>
<form name=modal>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<STYLE>

#pole_nacc, #pole_data,#comment   {

    font-size: 24px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;


}


                             #pole_nacc {
    width: 100px; /* Ширина поля в пикселах */
    border: 0px double black; /* Параметры границы */
    border: 1px solid #ccc; /* серая рамка */
   } 
                             #pole_data {
    width: 200px; /* Ширина поля в пикселах */
    border: 0px double black; /* Параметры границы */
    border: 1px solid #ccc; /* серая рамка */
   } 

                             #comment {
    width: 400px; /* Ширина поля в пикселах */
    border: 0px double black; /* Параметры границы */
    border: 1px solid #ccc; /* серая рамка */
   } 


   .heads
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 3%; /* Положение элемента от левого края */


    top: 3px; /* Положение от верхнего края */
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


       .genblock
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 3%; /* Положение элемента от левого края */


    top: 110px; /* Положение от верхнего края */
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
$dates= $_GET['dates'] ;

  $qq=sqlread("INSERT INTO account_pay(user,id_ac_gen,num_pp,pay,dates,comment) VALUES('$user','$id',$num_pp,'$pay','$dates','$comment')  "); 
 //$qq= update_status_pay_acc($id);
}
/////////////////////////////////////////////////////
if ($_GET['del']=='yes') {
$idpay=$_GET['idpay'];

//echo "<script>alert('У вас ". $id ."----".$idclient." ');</script>";
sqlread("DELETE FROM account_pay WHERE id_pay = '$idpay' ");
}


//echo "<form action='popup_addpay.php?id=$id' method='GET' id='shap'  >";
?><form action="popup_addpay.php" method="get" onsubmit="return sendForm(name);">

<? 

echo "<div class='heads'>";

$dates=date("Y-m-d");



 echo "<input type='text' visibility : hidden size=20 value=".$id." name='id'>"; 

echo" <input type='text' size=3 id='pole_nacc'  value='' placeholder = 'Номер П.П.' name='num_pp'>";
echo" <input type='date' size=8 id='pole_data' value='$dates' placeholder = 'Дата' name='dates'>";


echo" <input type='text' size=3 id='pole_nacc' value='' placeholder = 'Оплата' name='pay'> ";

echo  space(0) ;?> <input type="submit" class='btn btn-warning btn-sm' name = "sub" value=" <? echo space(5) ."Оплата". space(5) ; ?>"><br><p> <?

echo" <input type='text' size=30 id='comment' value='' placeholder = 'комментарий' name='comment'>";
 ?> 
<? ?>

<!-- <input class='button' type="button" value="Внести оплату" onClick="window.opener.changeBut(document.modal.name.value); self.close()"> -->

<!-- <a href='#'><img src='images/dengadollar.png' width='20' height='20' alt='...'' onclick=' var qq = "<?php echo $id;?>"; window.open("popup_addpay.php?id=" +qq, "modal", "width=600,height=300,screenX=500,screenY=500"); '></a> -->

<?

echo "</form >";
echo "</div >";


 echo "<div class='genblock'>";
$id=$_GET['id'];



$strSQL="SELECT * FROM account_pay WHERE  id_ac_gen ='$id'  ORDER BY id_pay DESC "; $rs = mysql_query($strSQL);

    if (!empty ($rs) ) {    while($row = mysql_fetch_array($rs)) {


echo "<table border=0 height=3  cellpadding='0' cellspacing='1' bgcolor='#c0c0c0'   >";//," <width=300%>"," <cellpadding=5>";

$id=$_GET['id'];
$id_pay =$row['id_pay'];

$pay =$row['pay'];
$num_pp =$row['num_pp'];
$comment =$row['comment'];
$dates =$row['dates'];
$dates=date("d.m.Y",strtotime($dates));


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