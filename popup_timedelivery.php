<html>
<body>
<form name=modal>

<STYLE>

                             #pole_nacc {

    width: 50px; /* ������ ���� � �������� */

    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
 border: 0px double black; /* ��������� ������� */
border: 1px solid #ccc; /* ����� ����� */

   } 
                             #pole_data {

    width: 100px; /* ������ ���� � �������� */

    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
 border: 0px double black; /* ��������� ������� */
border: 1px solid #ccc; /* ����� ����� */

   } 

                             #comment {

    width: 200px; /* ������ ���� � �������� */

    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
 border: 0px double black; /* ��������� ������� */
border: 1px solid #ccc; /* ����� ����� */

   } 


       .genblock
     {  
    margin:auto;
      position: absolute; /* ���������� ���������������� */
    left: 3%; /* ��������� �������� �� ������ ���� */


    top: 60px; /* ��������� �� �������� ���� */
    width: 90%; /* ������ ����� */
  height:60%;
    padding: 5px; /* ���� ������ ������ */

overflow: auto; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */
 background: url(images/block_fon.jpg)  no-repeat center center fixed;  background-size: cover;/* ���� ����, ���� � �������� ����������� � ���������� ���� �� ��������� */   

       margin:3px 3px 3px 5px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.5); /* ��������� ���� */
      margin: auto; /* ����������� �� ������ */   
                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ � Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* ����������� �������� */
    opacity: 0.9; /* �������� ������������ */
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
 //echo "<script>alert('� ��� ". $id ."----".$idclient." ');</script>";
$id=$_GET['id'];
$pay=$_GET['pay'];
$comment=$_GET['comment'];
$num_pp=$_GET['num_pp'];
$user= $_SESSION['user'] ;


	$qq=sqlread("INSERT INTO account_pay(user,id_ac_gen,num_pp,pay,dates,comment) VALUES('$user','$id',$num_pp,'$pay',NOW(),'$comment')  "); 
}

if ($_GET['del']=='yes') {
$idpay=$_GET['idpay'];

//echo "<script>alert('� ��� ". $id ."----".$idclient." ');</script>";
sqlread("DELETE FROM account_pay WHERE id_pay = '$idpay' ");
}


//echo "<form action='popup_addpay.php?id=$id' method='GET' id='shap'  >";
?><form action="popup_addpay.php" method="get" onsubmit="return sendForm(name);">


<? echo "<input type='text' visibility : hidden size=20 value=".$id." name='id'>"; ?> 

<input type='text' size=8 value='' placeholder = '�������' name='pay'>
<input type='text' size=35 value='' placeholder = '������' name='comment'>

<input type='submit' name='sub'   value="������ ������"></button>

<!-- <input class='button' type="button" value="������ ������" onClick="window.opener.changeBut(document.modal.name.value); self.close()"> -->

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

echo " <td> <a href='popup_addpay.php?id=".$id."&idpay=".$id_pay."&del=yes'><img src='images/krest1.png' width='15' height='15' alt='������''></a></td> ";  // �������� 

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