 
 <? function redirect($url){header('Location: '.$url);}  ?>

 <meta charset="windows-1251">

<head>
  <meta charset="utf-8">
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
<body>


    <style>

                             #pole_id {

    width: 40px; /* ������ ���� � �������� */
    font-size: 12px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 

#pole_note_offers{

    width: 1000px; /* ������ ���� � �������� */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
              background: white; /* ���� ���� */ 

}

#add_note_offers{

    width: 80%; /* ������ ���� � �������� */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
         background: PaleTurquoise; /* ���� ���� */ 

}

                             #pole_date {

    width: 200px; /* ������ ���� � �������� */
    font-size: 12px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
    background: #f0f0f0; /* ���� ���� */ 
   } 
       .data
     {  
    margin:auto;
    position: absolute; /* ���������� ���������������� */
    left: 1px; /* ��������� �������� �� ������� ���� */
  /*  right: 10%; /* ��������� �������� �� ������� ���� */
    top: 60px; /* ��������� �� �������� ���� */
    width: 99%; /* ������ ����� */
   height:800px;    
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

    </style>


<?
session_start();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }

include "background.php";
include 'conn.php';
include 'function.php';
$user=id_user_hash();

if (!empty($_POST['add_offer'])) {

$user=$_SESSION['user'] ;
$offers=$_POST['offers'];


sqlread("INSERT INTO ofers (dates,user,done,offers)  VALUES (NOW(),'$user','0','$offers') ");


echo "<script> document.location.href='offers.php'</script>"; 
}





///////////////////////////////////////////////////////////������ ����� //////////////////////////////////////////////////////////////////////////////////////


 echo "<div class='data'>";


echo "<form action='offers.php' method='POST' id='shap'  >";


echo " <input  type='text'  name='offers'  id='add_note_offers'  > ";

echo " <input type='submit' name='add_offer'  class='btn btn-primary  btn-sm'  value='�������� �����������' /> " ;
///// ����� ������
$name =  array('id ','�����������') ;
$long =  array(' 40','1000  ') ;
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td  width='$ln' bgcolor='Chocolate' > <font color='black'   $sizefont1> <b> $nam</td>";
} echo "</tr> </table>";
/////end////////

 
$idd=$_GET['idgen'];

//echo $food;





$strSQL="SELECT *  FROM ofers  ORDER BY   id DESC  ";
 $rs = mysql_query($strSQL);


    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";

$id=$row['id'] ;
$dates=$row['dates'] ;
$offers=$row['offers'] ;
$user=$row['user'] ;


$dates= date("d.m.Y",strtotime($dates )); 


$bgcol="bgcolor='LightPink'"; 


echo "<td  'width=0 id='pole_id' >  <input  type='text'  name='idd'  id='pole_id' value=".$id ."  ></td> ";
echo "<td  'width=0 id='pole_note_offers' > ".$offers ."  </td> ";


if ($_SESSION['user']== 21) {

	$rows=sqlread("SELECT * FROM user WHERE id_user= '$user'");

$user_name=$rows['name'];

echo "<td  'width=0 id='pole_date' > ".$dates ."  </td> ";
echo "<td  'width=0 id='pole_date' > ".$user_name ."  </td> ";
}



 echo "</tr> </table>";

}}
 echo "  </form></div> " ;


 include "menu.php";


 ?>