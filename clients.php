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

    width: 80px; /* ������ ���� � �������� */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
        text-align: center;
             background: rgba(248, 248, 255, 0.8); /* ���� ���� */


   } 
                             #pole_phone {

    width: 100px; /* ������ ���� � �������� */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
        text-align: center;
             background: rgba(248, 248, 255, 0.8); /* ���� ���� */


   } 

                                #pole_pic {

    width: 20px; /* ������ ���� � �������� */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
        text-align: center;
             background: rgba(248, 248, 255, 0.8); /* ���� ���� */


   } 
                             #pole_name {

    width: 260px; /* ������ ���� � �������� */
    font-size: 14px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;

   text-align: left;
             background: rgba(248, 248, 255, 0.8); /* ���� ���� */


   } 

                             #pole_full_name {

    width: 550px; /* ������ ���� � �������� */
    font-size: 24px; 
    text-align: left;
     font-family:'apple';
     font-weight:bold;

   text-align: left;
             background: rgba(248, 248, 255, 0.8); /* ���� ���� */


   } 


#pole_note {

width: 650px; /* ������ ���� � �������� */
font-size: 14px; 
text-align: left;
 font-family:'amaze';
 font-weight:bold;

text-align: left;
         background: rgba(248, 248, 255, 0.8); /* ���� ���� */


} 

                             #input_pole_80 {

    width: 80px; /* ������ ���� � �������� */
    font-size: 14px; 
    text-align: right;
     font-family:'amaze';
     font-weight:bold;
             background: rgba(248, 248, 255, 0.8); /* ���� ���� */

   } 

                             #input_pole_150 {

    width: 150px; /* ������ ���� � �������� */
    font-size: 14px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;

   text-align: left;
             background: rgba(248, 248, 255, 0.8); /* ���� ���� */


   } 
                             #input_pole_150_center {

    width: 150px; /* ������ ���� � �������� */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

 
             background: rgba(248, 248, 255, 0.8); /* ���� ���� */


   } 

       .genblock
     {  
    margin:auto;
      position: absolute; /* ���������� ���������������� */
    left: 3%; /* ��������� �������� �� ������ ���� */


    top: 60px; /* ��������� �� �������� ���� */
    width: 1750px; /* ������ ����� */
  height:800px;
    padding: 5px; /* ���� ������ ������ */

overflow: auto; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */
 background: url(images/block_fon.jpg)  no-repeat center center fixed;  background-size: cover;/* ���� ����, ���� � �������� ����������� � ���������� ���� �� ��������� */   

       margin:3px 3px 3px 5px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.5); /* ��������� ���� */
      margin: auto; /* ����������� �� ������ */   
                padding: 5px; 
                  text-align: center;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ � Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* ����������� �������� */
    opacity: 0.9; /* �������� ������������ */
                     }   


       .client_name
     {  
    margin:auto;
    position: absolute; /* ���������� ���������������� */
    left: 2%; /* ��������� �������� �� ������� ���� */
  /*  right: 10%; /* ��������� �������� �� ������� ���� */
    top: 10px; /* ��������� �� �������� ���� */
    width: 700px; /* ������ ����� */
   height:50;    
    padding: 5px; /* ���� ������ ������ */
    background: #f0f0f0; /* ���� ���� */ 
   /* background-image: url('/images/bacground_div.jpg');*/

    background: rgba(230, 230, 250, 0.2); /* ���� ���� */
overflow: auto; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */
background-size: cover;


      float:left; 
       margin:3px 3px 3px 5px; 


                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ � Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* ����������� �������� */
    opacity: 10; /* �������� ������������ */

    float:left;

                     }  

       .data
     {  
    margin:auto;
    position: absolute; /* ���������� ���������������� */
    left: 2%; /* ��������� �������� �� ������� ���� */
  /*  right: 10%; /* ��������� �������� �� ������� ���� */
    top: 10%; /* ��������� �� �������� ���� */
    width: 700px; /* ������ ����� */
   height:80%;    
    padding: 5px; /* ���� ������ ������ */
    background: #f0f0f0; /* ���� ���� */ 
   /* background-image: url('/images/bacground_div.jpg');*/

    background: rgba(230, 230, 250, 0.2); /* ���� ���� */
overflow: auto; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */
background-size: cover;


      float:left; 
       margin:3px 3px 3px 5px; 


                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ � Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* ����������� �������� */
    opacity: 10; /* �������� ������������ */

    float:left;

                     }     


       .add_client
     {  
    margin:auto;
    position: absolute; /* ���������� ���������������� */
 left: 780px; /* ��������� �������� �� ������� ���� */
 /*   right: 2%; /* ��������� �������� �� ������� ���� */
    top: 10%; /* ��������� �� �������� ���� */
    width: 700px; /* ������ ����� */
   height:80%;    
    padding: 5px; /* ���� ������ ������ */
    background: #f0f0f0; /* ���� ���� */ 
   /* background-image: url('/images/bacground_div.jpg');*/

    background: rgba(230, 230, 250, 0.2); /* ���� ���� */
overflow: auto; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */
background-size: cover;


      float:left; 
       margin:3px 3px 3px 5px; 


                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ � Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* ����������� �������� */
    opacity: 10; /* �������� ������������ */

float:right;

                     }   

       .data_client
     {  
    margin:auto;
    position: absolute; /* ���������� ���������������� */
 left: 5px; /* ��������� �������� �� ������� ���� */
 /*   right: 2%; /* ��������� �������� �� ������� ���� */
    top: 100; /* ��������� �� �������� ���� */
    width: 680px; /* ������ ����� */
   height:500;    
    padding: 5px; /* ���� ������ ������ */
    background: #f0f0f0; /* ���� ���� */ 
   /* background-image: url('/images/bacground_div.jpg');*/

    background: rgba(230, 230, 250, 0.2); /* ���� ���� */
overflow: auto; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */
background-size: cover;


      float:left; 
       margin:3px 3px 3px 5px; 


                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ � Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* ����������� �������� */
    opacity: 10; /* �������� ������������ */

float:right;

                     }  





 #blockreset {
  margin:auto;
    position: absolute; /* ���������� ���������������� */
 left: 315px; /* ��������� �������� �� ������� ���� */
 /*   right: 2%; /* ��������� �������� �� ������� ���� */
    top: 2; /* ��������� �� �������� ���� */
    width: 200px; /* ������ ����� */


 }   

           .label
     {  
    margin:auto;
    position: absolute; /* ���������� ���������������� */


    top: 10px; /* ��������� �� �������� ���� */
    width: 1720px; /* ������ ����� */
   height:30px;    


 /*   background-image: url('/images/bacground_div.jpg'); */

     background: rgba(0, 150, 0, 0.3); /* ���� ���� */
overflow: hidden; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */

    background: linear-gradient(to top, #008080, #ffecec);


    
   
 margin: auto;
position: absolute;
         
                  text-align: center;
                     border-radius: 4px;


                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ � Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* ����������� �������� */
    opacity: 10; /* �������� ������������ */

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

////////////////////////////////////////////��������� ������� //////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['add_client'])) {

$user=$_SESSION['user'];

  $qq=sqlread("INSERT INTO  client(user) VALUES ('$user')  "); 

    $row=sqlread("SELECT MAX(idclient) as maxclient_id FROM   client "); 

$idd=$row['maxclient_id'];


//self.location.href = 'page.htm';
  echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
/*?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?*/
}


////////////////////////////////////////////�������� ������ //////////////////////////////////////////////////////////////////////////////////////////////


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


//echo "<script>alert('� ��� ". $_GET['idform']." ');</script>";


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
/////////////////////////////// ����� ������� ////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(!empty($_GET['find_client'])) { $idd=$_GET['idd'];
$find_client=$_GET['find_client'];
$_SESSION['find_client'] = $_GET['find_client'] ;

  //echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
  ?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
}
/////////////////////////////// ����� ������� ////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(!empty($_GET['res']) ) { $idd=$_GET['idd'];

  $_SESSION['find_client'] = '' ;
  
    //echo "<script> document.location.href='clients.php?idd=$idd'</script>"; 
    ?> <script> value='<? echo $idd ?> ' window.open("clients.php?idd="+value, '_self') </script><?
  }
  
/////////////////////////////// ��������� ������ ������� ////////////////////////////////////////////////////////////////////////////////////////////////
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
?><div class='label'>  <font color='Navy' size = 5  > <?  echo '������ ��������' ; ?>  </font > </div> <?
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////������ ��������///////////////////////////////////////////////////////////////////////////////////////////

echo "<div class='data'>";
$idd=$_GET['idd'];
echo "<form action='clients.php?idd=$idd' method='GET' id='shap'  >";

echo space(0). "<input bgcolor='red' type='text' id='pole_name' textarea name='find_client' placeholder='����� ������� �� ��������'   value='$note' >   ";
//echo space(0). "<input bgcolor='red' type='submit' id='' textarea name='find_client' placeholder=''   value='   ' ><br>   ";

echo " <div id= blockreset > <a href='clients.php?idd=".$idd."&res=yes'><img src='images/Reset.png' width='100' height='25' alt='������'></a> </div>";  // �������� 

///// ����� ������
$name =  array('id ','�����','������������','�������','������ �����',' ') ;
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

echo "<td align='center'  id = 'pole_pic'>  <a href='clients.php?idd=$idd'><img src='images/blue-arrow1.jpg' width='20' height='20' alt='������''></a> </td>";  // �������� ����������
echo "</tr> "; 
}}

echo "</table>";

echo "</form></div>";
//////////////////////////////////////////////������ � ������� ///////////////////////////////////////////////////////////////////////////////////////////////////////////





echo "<form action='clients.php?idd=$idd' method='GET' id='shapp'  >";

$idd=$_GET['idd'];

echo "<div class='add_client'>";

$row= sqlread ("SELECT * FROM  client  WHERE  idclient ='$idd' ");
?> <div class='client_name'><?



?>
 <button name = 'add_client'   value='��������'       ><div class="fly_comment" data-title="�������� ��������'"> <img src="images/add_doc.png"  width='30' height='30' alt="������"   id = 'button_pic' style="vertical-align: middle"></div></button>

 <button name = 'save_client'   value='���������'       ><div class="fly_comment" data-title="��������� ������ �����"> <img src="images/diskette.png"  width='30' height='30' alt="������"   id = 'button_pic' style="vertical-align: middle"></div></button>



<?

$full_name = $row['full_name'];
echo space(5). "<input style='background:LightYellow;' type='text' id='pole_full_name' textarea name='full_name' placeholder='������ �������� ��������'   value='$full_name' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }' > <br>  ";

?></div> <?

?> <hr><br> <?








echo "<br>";





if($idd>0) {    echo "<div class='data_client'  >";    } else {  echo "<div class='data_client' style='display:none;' >"; }


echo space(10)."<input  readonly   bgcolor='red' type='text' id='input_pole_150_center' textarea name='idd' placeholder='idd'   value='$idd'  >   ";


echo space(5);
/*
$idform=$row['form'];
//$idform=1;
/////........................������ ���� �������������
$idform= $idform;//$_SESSION['idclient'];
$rr=sqlread("SELECT * FROM form_company WHERE id= '$idform'"); 
$sql = "SELECT * FROM form_company  ";
$result_select = mysql_query($sql);

?> <select name="idform" id='input_pole_150' onchange="document.getElementById('shapp').submit()"> <?
/*?> <select name='idclient' id='' > <?*/
/*
$object->form = $rr['form'] ;
echo   "<option  selected value=$idform   > $object->form   </option>"; // ����� ������� ��������� � ������ $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->form </option> ";}  
echo "</select>";
////..........................

*/

$form= $row['form'];
echo  "<input bgcolor='red' type='text' id='input_pole_150' textarea name='idform' placeholder='�����'   value='$form' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'>  ";



$company = $row['company'];
echo space(5). "<input bgcolor='red' type='text' id='pole_name' textarea name='company' placeholder='������� �������� ��������'   value='$company' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }' > <br>  ";

?><font size="2" color="Indigo" face="times"><b><?
echo space(20). "ID ��������" . space(25) ."����� �������������" .space(25) . "������� ������������ �������� <br><br>" ;
?></font ></b><?
//....

?> <hr><br> <?
//....

$contact_person_one= $row['contact_person_one'];
echo space(10). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='contact_person_one' placeholder='������ ���������� ����'   value='$contact_person_one' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'>   ";

$function_one= $row['function_one'];
echo space(5). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='function_one' placeholder='��������� '   value='$function_one' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'> ";

$phome_one= $row['phome_one'];
echo space(5). "<input bgcolor='red' type='tel' id='pole_name' textarea name='phome_one' placeholder='�������'   value='$phome_one' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'> <br>  ";

?><font size="2" color="Indigo" face="times"><b><?
echo space(13). "������ ���������� ����" . space(10) ."��������� ������� ���� " .space(26) . "��� ������� ���� <br><br>" ;
?></font ></b><?
//....

$contact_person_two= $row['contact_person_two'];
echo space(10). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='contact_person_two' placeholder='���������� ���� 2'   value='$contact_person_two' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'> ";

$function_two= $row['function_two'];
echo space(5). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='function_two' placeholder='��������� ������� ���� '   value='$function_two' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'> ";

$phone_two= $row['phone_two'];
echo space(5). "<input bgcolor='red' type='tel' id='pole_name' textarea name='phone_two' placeholder='������� ������� ����'   value='$phone_two' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'><br> ";

?><font size="2" color="Indigo" face="times"><b><?
echo space(13). "������ ���������� ����" . space(10) ."��������� ������� ���� " .space(26) . "��� ������� ���� <br><br>" ;
?></font ></b><?
//....

$inn= $row['inn'];
echo space(10). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='inn' placeholder='���'   value='$inn' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'>  ";

$kpp= $row['kpp'];
echo space(5). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='kpp' placeholder='���'   value='$kpp' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'> ";

$adress= $row['adress'];
echo space(5). "<input bgcolor='red' type='text' id='pole_name' textarea name='adress' placeholder='�����'   value='$adress' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'> <br>  ";



?><font size="2" color="Indigo" face="times"><b><?
echo space(30). "���" . space(40) ."��� " .space(50) . "����������� ����� <br><br>" ;
?></font ></b><?
//....




$discount= $row['discount'];
echo space(10). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='discount' placeholder='������'   value='$discount' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'>   ";

$credit_limit= $row['credit_limit'];
echo space(5). "<input bgcolor='red' type='text' id='input_pole_150' textarea name='credit_limit' placeholder='��������� �����'   value='$credit_limit' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'>  ";


$e_mail= $row['e_mail'];
echo space(5). "<input bgcolor='red' type='email' id='pole_name' textarea name='e_mail' placeholder='e_mail'   value='$e_mail' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'> <br>  ";


?><font size="2" color="Indigo" face="times"><b><?




echo space(30). "������" . space(25) ."��������� �����  " .space(36) . "����������� ����� <br><br>" ;

$note= $row['note'];
echo space(12). "<input bgcolor='red' type='text' id='pole_note' textarea name='note' placeholder='����������'   value='$note' onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'> <br>   ";

?><font size="2" color="Indigo" face="times"><b><?
echo space(90) . "���������� <br><br>" ;
?></font ></b><?
//....

?> <hr><br> <?



//echo space(5). "<input bgcolor='red' type='text' id='pole_name' textarea name='old_id' placeholder='������ ID �������'   value='' > <br>   ";







echo "  <input autofocus type='submit' hidden value='����������' /> " ;









echo "</form>";

echo "<form action='clients.php?idd=$idd' method='GET' id='shapp'  >";

echo "</div>";

//echo space(12)." <input type='submit' name='add_client'   value='�������� ������ �������' /> " ;

echo "</form>";
echo "</div>";
echo "</div>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "</div>";
include "menu.php";
?>