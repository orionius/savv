<?session_start(); 
  function redirect($url){header('Location: '.$url);}  ?>

 <meta charset="windows-1251">








<?

if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }
?>


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



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="daterangepicker/moment.js"></script>
  <script src="daterangepicker/daterangepicker.js"></script>

  <script>
$(function(){
  $('#date').daterangepicker({
    singleDatePicker: true,
    locale: {
      format: 'DD.MM.YYYY'
    }
  });
});
  </script>



<style>







   #gradient {
    background: #fefcea; /* ��� ������ �������� */
    background: linear-gradient(to top, #808080, #ececec);
      }

   .fig {
    text-align: center; /* ������������ �� ������ */ 
   }



                             #input_shap {

    width: 80px; /* ������ ���� � �������� */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
         background: #E0FFFF; /* ���� ���� */ 
         height:35px;  
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
   } 

                                #data_shap {

    width: 150px; /* ������ ���� � �������� */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

     height:35px;  
         background: #E0FFFF; /* ���� ���� */ 
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
   } 
                                #status_shap {

    width: 200px; /* ������ ���� � �������� */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
              background: #E0FFFF; /* ���� ���� */ 

              height:35px;  
  margin:3px 3px 3px 5px; 
       border-radius: 4px;

   } 


                                #client_shap {

    width: 300px; /* ������ ���� � �������� */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;


height:35px;  
         background: #E0FFFF; /* ���� ���� */ 
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
   } 




                             #pole_id {

    width: 80px; /* ������ ���� � �������� */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;



   } 

                                #status_journ {

    width: 120px; /* ������ ���� � �������� */
    font-size: 12px; 
    text-align: center;
     font-family:'arial';
     font-weight:bold;

border: 1px solid #ccc; /* ����� ����� */

   } 

                             #pole_nacc {

    width: 100px; /* ������ ���� � �������� */

    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
 border: 0px double black; /* ��������� ������� */
border: 1px solid #ccc; /* ����� ����� */

   } 


                             #pole_ceny {

    width: 80px; /* ������ ���� � �������� */
    font-size: 18px;  
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 


#pole_alg{

    width: 100px; /* ������ ���� � �������� */
    font-size: 18px;  
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 


                             #nameclient_pay {

    width: 200px; /* ������ ���� � �������� */
    font-size: 18px;  
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 


                                #pole_name {

    width: 200px; /* ������ ���� � �������� */
    font-size: 18px; 
    text-align: left;
     font-family:'amaze';
    

   } 
                                #pole_nameac {

    width: 300px; /* ������ ���� � �������� */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
    

   } 

                                  #pole_note {

    width: 400px; /* ������ ���� � �������� */
    font-size: 12px; 
    text-align: left;
     font-family:'arial';
    
     border: 1px solid #ccc; /* ����� ����� */
white-space:pre;
   }  


                                  #sum_jour {

    width: 100px; /* ������ ���� � �������� */
    font-size: 12px; 
    text-align: right;
     font-family:'arial';
   
     border: 1px solid #ccc; /* ����� ����� */
white-space:pre;
   }  

                                  #pole_client_jour {

    width: 300px; /* ������ ���� � �������� */
    font-size: 12px; 
    text-align: left;
     font-family:'arial';
  
     border: 1px solid #ccc; /* ����� ����� */
white-space:pre;
   }  

                                     #pole_noteac {

    width: 800px; /* ������ ���� � �������� */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
 
background: #E0FFFF; /* ���� ���� */ 
       margin:3px 3px 3px 5px; 
       border-radius: 4px;

   }  
                                        #pole_notepay {

    width: 300px; /* ������ ���� � �������� */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;

   }  
                                  #pole_data{

    width: 150px; /* ������ ���� � �������� */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
    



   }  


                                     #pole_stat_jour{

    width: 150px; /* ������ ���� � �������� */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
    
   border: 1px solid #ccc; /* ����� ����� */


   }  

                                  #pole_data_jour{

    width: 100px; /* ������ ���� � �������� */
    font-size: 12px; 
    text-align: center;
     font-family:'arial';

border: 1px solid #ccc; /* ����� ����� */


   }  
   #pole_data_jour:hover,#pole_client_jour:hover,#pole_note:hover  {
    background: Aquamarine; /* ���� ���� ��� ��������� */
    color: #fff; /* ���� ������ ��� ��������� */
   }





   #pole_name18 {

width: 250px; /* ������ ���� � �������� */
font-size: 18px; 
text-align: left;
 font-family:'amaze';
 border-radius: 4px;
box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 


} 
                                  #pole_button{

    width: 80px; /* ������ ���� � �������� */
    font-size: 12px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
   }  

                                  #dater{

    width: 150px; /* ������ ���� � �������� */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

height:35px;  

         background: #E0FFFF; /* ���� ���� */ 
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
   }  
#add_prod {

    width: 300px; /* ������ ���� � �������� */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

height:25px;  

         background: #FFFFE0 ; /* ���� ���� */ 
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
  
}


.genblock,.head , .data, .block_filtr,.label, .label_pay {

       margin:3px 3px 3px 5px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.5); /* ��������� ���� */
      margin: auto; /* ����������� �� ������ */   
                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: cover; /* Firefox 3.6+ */
    -webkit-background-size: cover; /* Safari 3.1+ � Chrome 4.0+ */
    -o-background-size: cover; /* Opera 9.6+ */
    background-size: cover; /* ����������� �������� */
    opacity: 0.9; /* �������� ������������ */
    background-size: cover;

}



       .genblock
     {  
    margin:auto;
      position: absolute; /* ���������� ���������������� */
    left: 3%; /* ��������� �������� �� ������ ���� */


    top: 60px; /* ��������� �� �������� ���� */
    width: 1750px; /* ������ ����� */
  /*height:800px; */
    bottom: 10px;
    padding: 5px; /* ���� ������ ������ */

overflow: auto; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */
 background: url(images/laminat.jpg)  no-repeat center center fixed;  background-size: cover;/* ���� ����, ���� � �������� ����������� � ���������� ���� �� ��������� */   
                     }   

.head {
  margin:auto;
      position: absolute; /* ���������� ���������������� */
    left: 12px; /* ��������� �������� �� ������ ���� */


    top: 10px; /* ��������� �� �������� ���� */
    width: 1420px; /* ������ ����� */
    width: 1725px; /* ������ ����� */

  height:40px;
    padding: 5px; /* ���� ������ ������ */

overflow: hidden; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */
/* background: url(images/laminat.jpg)  no-repeat center center fixed;  background-size: cover;/* ���� ����, ���� � �������� ����������� � ���������� ���� �� ��������� */   
 background: url(images/1205-318.jpg)  no-repeat center center fixed;  background-size: cover;/* ���� ����, ���� � �������� ����������� � ���������� ���� �� ��������� */   

}


       .data
     {  
    margin:auto;
    position: absolute; /* ���������� ���������������� */
    left:10px; /* ��������� �������� �� ������� ���� */
  /*  right: 10%; /* ��������� �������� �� ������� ���� */
    top: 55px; /* ��������� �� �������� ���� */
    width: 1420px; /* ������ ����� */
   /* height:700px;   */
   bottom:10px;

    padding: 5px; /* ���� ������ ������ */
    background: #f0f0f0; /* ���� ���� */ 
   /* background-image: url('/images/bacground_div.jpg');*/

    background: rgba(230, 230, 250, 0.2); /* ���� ���� */
    background: url(images/1205-318.jpg)  no-repeat center center fixed;  background-size: cover;/* ���� ����, ���� � �������� ����������� � ���������� ���� �� ��������� */   
overflow: auto; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */
                     }    






  
        
   


   



               .block_filtr
     {  


    margin:auto;
    position: absolute; /* ���������� ���������������� */
    left: 1440px; /* ��������� �������� �� ������� ���� */
  /*  right: 10%; /* ��������� �������� �� ������� ���� */
    top: 55px; /* ��������� �� �������� ���� */
    width: 290px; /* ������ ����� */
   /* height:700px;     */
   bottom:10px;
    padding: 5px; /* ���� ������ ������ */
    background: #f0f0f0; /* ���� ���� */ 
   /* background-image: url('/images/bacground_div.jpg');*/

    background: rgba(230, 230, 250, 0.2); /* ���� ���� */
    background: url(images/1205-318.jpg)  no-repeat center center fixed;  background-size: cover;/* ���� ����, ���� � �������� ����������� � ���������� ���� �� ��������� */   
overflow: auto; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */

                     }   

               .label
     {  


    margin:auto;
    position: absolute; /* ���������� ���������������� */
    left: 700px; /* ��������� �������� �� ������� ���� */
  /*  right: 10%; /* ��������� �������� �� ������� ���� */
    font-size: 30px; 
         font-family:'amaze';
         font-color:'Navy';
     font-weight:bold;

    top: 5px; /* ��������� �� �������� ���� */
    width: 290px; /* ������ ����� */
   height:40px;    
    padding: 5px; /* ���� ������ ������ */
    background: black; /* ���� ���� */ 
   /* background-image: url('/images/bacground_div.jpg');*/

       background: #fefcea; /* ��� ������ �������� */
    background: linear-gradient(to top, #008080, #ffecec);
overflow: auto; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */

                     }   
               .label_pay
     {  


    margin:auto;
    position: absolute; /* ���������� ���������������� */
    left: 130px; /* ��������� �������� �� ������� ���� */
  /*  right: 10%; /* ��������� �������� �� ������� ���� */
    font-size: 10px; 
         font-family:'amaze';
         font-color:'Navy';
     font-weight:bold;

    top: 1px; /* ��������� �� �������� ���� */
    width: 700px; /* ������ ����� */
   height:30px;    
    padding: 5px; /* ���� ������ ������ */
    background: black; /* ���� ���� */ 
   /* background-image: url('/images/bacground_div.jpg');*/

       background: #fefcea; /* ��� ������ �������� */
    background: linear-gradient(to top, #008080, #ffecec);
overflow: auto; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */


                     }   
                     .fly_comment {
    display: inline-block; /* �������-������� ������� */
    position: relative; /* ������������� ���������������� */
   }
   .fly_comment:hover::after {
    content: attr(data-title); /* ������� ����� */
    position: absolute; /* ���������� ���������������� */
    left: 100%; top: 110%; /* ��������� ��������� */
    z-index: 1; /* ���������� ��������� ������ ������ ��������� */
    background: rgba(255,255,230,0.9); /* �������������� ���� ���� */
    font-family: Arial, sans-serif; /* ��������� ������ */
    font-size: 11px; /* ������ ������ ��������� */
    padding: 5px 10px; /* ���� */
    border: 1px solid #333; /* ��������� ����� */
    border-radius: 20px;
   }

   .fly_comment_left {
    display: inline-block; /* �������-������� ������� */
    position: relative ; /* ������������� ���������������� */
  
   }
   .fly_comment_left:hover::after {

    content: attr(data-title); /* ������� ����� */
    position: absolute; /* ���������� ���������������� */
    left: 100%; top: 110%; /* ��������� ��������� */
      left : -100;
    z-index: 1; /* ���������� ��������� ������ ������ ��������� */
    background: rgba(255,255,230,0.9); /* �������������� ���� ���� */
    font-family: Arial, sans-serif; /* ��������� ������ */
    font-size: 11px; /* ������ ������ ��������� */
    padding: 5px 10px; /* ���� */
    border: 1px solid #333; /* ��������� ����� */
    border-radius: 20px;
   }
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
   border-radius: 20px; /* ����������� ������� */
width: 1000
}
    .fly_comment {
        display: inline-block; /* �������-������� ������� */
        position: relative; /* ������������� ���������������� */
       }
       .fly_comment:hover::after {
        content: attr(data-title); /* ������� ����� */
        position: absolute; /* ���������� ���������������� */
        left: 100%; top: 110%; /* ��������� ��������� */
        z-index: 1; /* ���������� ��������� ������ ������ ��������� */
        background: rgba(255,255,230,0.9); /* �������������� ���� ���� */
        font-family: Arial, sans-serif; /* ��������� ������ */
        font-size: 11px; /* ������ ������ ��������� */
        padding: 5px 10px; /* ���� */
        border: 1px solid #333; /* ��������� ����� */
        border-radius: 20px;
       }
    
       .fly_comment_left {
        display: inline-block; /* �������-������� ������� */
        position: relative ; /* ������������� ���������������� */
      
       }
       .fly_comment_left:hover::after {
    
        content: attr(data-title); /* ������� ����� */
        position: absolute; /* ���������� ���������������� */
        left: 100%; top: 110%; /* ��������� ��������� */
          left : -100;
        z-index: 1; /* ���������� ��������� ������ ������ ��������� */
        background: rgba(255,255,230,0.9); /* �������������� ���� ���� */
        font-family: Arial, sans-serif; /* ��������� ������ */
        font-size: 11px; /* ������ ������ ��������� */
        padding: 5px 10px; /* ���� */
        border: 1px solid #333; /* ��������� ����� */
        border-radius: 20px;
       }

       .href {
        border-radius: 50px;

       }















</style>















<?
include "background.php";
include 'conn.php';
include 'function.php';
$user=id_user_hash();

///////////////////////////////////////////////�������////////////////////////////////////////////////////////


if(!empty($_GET['nameclient'])  ) {$id=$_GET['id'];
  $nameclient= $_GET['nameclient'];
  $filtr_journ_acc ="SELECT a.*, b.idclient , b.company FROM account_gen a INNER JOIN client b ON b.idclient = a.idclient  where b.company like '%$nameclient%'  ORDER BY   id_ac_gen DESC  ";
  $_SESSION['filtr_journ_acc']= $filtr_journ_acc;
}


if(!empty($_GET['idclient'])) {$id=$_GET['id']; $findnameclient=$_GET['idclient'];
 $filtr_journ_acc= "SELECT *  FROM account_gen  WHERE accountofthe >= '2017-01-01' and idclient='$findnameclient' ORDER BY   number DESC  ";
  $_SESSION['filtr_journ_acc']= $filtr_journ_acc;
}
if(!empty($_GET['resetfiltr'])  ) {$id=$_GET['id'];
  $_SESSION['filtr_journ_acc']= '';
}


///////////////////////////////////////////////////////////////������� � ���� �� ������ ////////////////////////////////////////////////////////////////////////////////////////////////

if (!empty($_GET['run_numacc']) ) { $run_numacc= $_GET['run_numacc'];

 $row= sqlread("SELECT * FROM account_gen WHERE number LIKE '%$run_numacc%' ");

 $id=$row['id_ac_gen'];




  echo "<script> document.location.href='account.php?id=$id';</script>"; 
}



 echo "<div class='genblock'>";

///////////////////////////////////////////////////////////������ ������ //////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////������ ������ //////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////������ ������ //////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////������ ������ //////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////������ ������ //////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////������ ������ //////////////////////////////////////////////////////////////////////////////////////





echo "<form action='journal_account.php?idd=$idd' method='GET' id='shap'  >";
echo " <div class= 'head' >";
$sizefont1="style='font: 14px apple-system'";
// echo "<div id='menu_spisok'>";
///// ����� ������
$name =  array('����','����','��������','�����','����������'  ,'<p><img src="images/dengi.png  " alt=""  width="60" height="20" ></p>   ','�����','<p><img src="images/gruzovik.jpg" alt=""  width="40" height="20" ></p>   ') ;
$long =  array(' 100','100  ','300','     100','400  ','120' ,'120','120') ;
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td  align = 'center' bgcolor='WHITE'   width='$ln' > <font color='black'   $sizefont1> <b> $nam</td>";
} echo "</tr> </table>";
/////end////////
 echo "</div >";



  echo "<div class='data'>";
$idd=$_GET['idgen'];

//echo $food;





$strSQL="SELECT *  FROM account_gen  WHERE accountofthe >= '2017-01-01' ORDER BY   number DESC  ";

if (!empty($_SESSION['filtr_journ_acc']) )   { $strSQL=$_SESSION['filtr_journ_acc']; }



 $rs = mysql_query($strSQL);





    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {

echo "<table border=0 height=0  cellpadding='0' cellspacing='1' bgcolor='#c0c0c0'   >";//," <width=300%>"," <cellpadding=5>";

$id=$row['id_ac_gen']; 
//$qqq=sqlread("SELECT * , SUM(price_sale * number) AS sum_acc  FROM account_sub WHERE id_ac_gen= '$id' ");


$sum_ac=$row['summa']; 




$shipment=$row['shipment']; 
$name_shipment=status_ship($shipment);




//alert($name_shipment);

$accountofthe=$row['accountofthe'] ;
$accountofthe= date("d.m.Y",strtotime($accountofthe )); 

$idclient=$row['idclient']; 
$num_account = $row['number'];
$status= $row['status'];

//$idclient= $row['idclient'];
$idorder= $row['idorder'];

$sum_pay=round(acc_sum_pay($id),2);

$rr=sqlread("SELECT * FROM order_gen WHERE id_order= '$idorder' ");

$statusshiporder=$rr['shipment'];
$name_shipment=name_status_zakaz_id($statusshiporder);

$comment= $row['comment']  ;  //$comment=substr($comment, 0, 10);


$name_client= name_client_id($idclient); $name_client=substr($name_client, 0, 17);

$balance=round($sum_ac-$sum_pay,2);


$bgcol="bgcolor='#FFDFDF'"; 
/*
if (strpos($status, '�������') !== false or $status ==2  ){ $bgcol="bgcolor='LightCyan'"; }
if (strpos($status, '%' or $status ==1   ) !== false ){ $bgcol="bgcolor='gold'"; }
*/

if ($balance <>0) { $bgcol="bgcolor='LightGrey'"; $status = "�� �������";}
if ( ($sum_ac - $balance)>0  ) { $bgcol="bgcolor='LightYellow'";$status = "�������� �������"; }
if ( $balance> $sum_ac   ) { $bgcol="bgcolor='MediumSpringGreen'";$status = "���������"; }

if ($balance==0){ $bgcol="bgcolor='LightCyan'";$status = "�������";}

if ($balance=='0' and $shipment <> '1' ){ $bgcol="bgcolor='LightPink'";}


if($status == "�������" && $statusshiporder == '8' ) {$bgcol="bgcolor='LightPink'";}


//.................. ����������� ��������� ����������� ������ ������

$sizefont1="style='font: 14px times'";
?><td  width=40 <? echo $bgcol; ?> id='pole_nacc' > <font color='black'   >   
 <a href='account.php?id= <? echo $id; ?>'' TARGET='_self' class="help1" style='color:DarkBlue;' >  <? echo $num_account ?> <span>  <?   

//$id=$row['id'] ;
//echo "<font color = 'black' >rrrrrrrrrrrrrrrrrrrrrrrrrrrr";

 echo "<table border=1 cellpadding='0' cellspacing='1'  rules='cols' >";  
//$id=$row['id'] ;
//alert($id);
    $SQLSr = "SELECT * FROM account_sub where id_ac_gen = '$id' ";
    // ��������� ������ (����� ������ $rs �������� ���������)
    $rssr = mysql_query($SQLSr);  if (!empty ($rssr) ) {   while($rowsr = mysql_fetch_array($rssr)) {

$name_equipment=$rowsr['name_equipment'];
$price_sale=$rowsr['price_sale'];
$quantity=$rowsr['number'];
$idalgorythm=$rowsr['idalgorythm'];
$id_order_sub=$rowsr['id_order_sub'];


$namealgorithm=name_algo_id($idalgorythm);
$namebrd=name_board_id($id_board);



echo "<td align = left width=700 $bgcol ". $sizefont1 .">".$name_equipment. "</td> ";
echo "<td align = center width=100 $bgcol ". $sizefont1 .">".$quantity. "</td> ";
echo "<td align = center width=100 $bgcol ". $sizefont1 .">".$price_sale. "</td> ";

echo "<td align = center width=100 $bgcol ". $sizefont1 .">".$namealgorithm. "</td> ";

echo "<td align = center width=300 $bgcol ". $sizefont1 .">".$note_b. "</td> ";




?> </tr> <?
  
    }}
//echo "</table> ";

echo "</table> ";  
 ?>  </span>  </a> <?


echo " </font>";

//.....................
//$comment=utf8_to_cp1251($comment);


//iconv("WINDOWS-1251", "UTF-8", $comment);

$comment = $row['comment'] ;
//$comment=mb_strimwidth($comment, 0, 50, "..");
$comment=substr($comment, 0, 60);



//echo "<td  'width=40 $bgcol id='pole_nacc' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self  '  style='color:DarkBlue;'  >       $num_account</a></td>";
echo "<td  'width=40 $bgcol id='pole_data_jour' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self  '  style='color:black;'  >  <b>$accountofthe</b></a></td>";
echo "<td  'width=40 $bgcol id='pole_client_jour' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self  '  style='color:black;'  ><b>$name_client</b></a></td>";
echo "<td  'width=40 $bgcol id='sum_jour' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self  '  style='color:black;'  > <b> ".    number_format($sum_ac, 2, ',', ' ')." </b></a></td>";
echo "<td  'width=40 $bgcol id='pole_note' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self  '  style='color:black;'            >$comment</a></td>";
echo "<td  'width=40 $bgcol id='status_journ' > <font color='black'  > "                                                                              .$status.         "  </td>";  // ������ �������� 


$qq=sqlread("SELECT id_order,n_order FROM order_gen WHERE id_order = '$idorder' ");

$n_order=$qq['n_order'];
echo "<td  'width=40 $bgcol id='status_journ' > <font color='black'   >   <a href='order.php?id=$idorder' TARGET='_self  '  style='color:DarkBlue;'  >"   .$n_order.         " </a></td>"; // ����� ������ ���������

echo "<td   'width=40 $bgcol id='status_journ' > <font color='black'  > "   .$name_shipment.         "  </td>";

//echo " <td> <a href='journal_account.php?id=".$id."&addpay=new'><img src='images/dengi.png' width='15' height='15' alt='...''></a></td> ";  //  





$link='"popup_addpay.php  ", "modal", "width=600,height=300,screenX=500,screenY=500"';

?>

<td>












<form name='myform' target='popup_addpay.php' method='get' action='popup_addpay.php'>
<input bgcolor='red' visibility : hidden type='text' id='pole_idprih' textarea name='here'   value='$id'>

<?// $_SESSION['iddpay']=$id; ?>

<!-- <input   name = 'but' class='button' type="button" value=" ������  " onClick='     window.open("popup_addpay.php?id='<?php echo $id; ?>' ", "modal", "width=600,height=300,screenX=500,screenY=500");     '> 
<input   name = 'but' class='button' type="button" value=" ������  " onClick=' changeBut('4');'>-->


<a href='#'><img src='images/dengadollar.png' style="border-radius: 50 50px; border: 1px #cfc solid; box-shadow: 0 0 10px #444;"  width='20' height='20' alt='...'' onclick=' var qq = "<?php echo $id;?>"; window.open("popup_addpay.php?id=" +qq, "modal", "width=700,height=300,screenX=500,screenY=500"); '></a>


</form>








</td>
<?






if(is_numeric($status)) {
if($status==1)  $status = "�� ��������";
if($status==2)  $status = "��������";

if($status==3)  $status = "�������� ��������";



}

//echo "<td  'width=40 $bgcol id='pole_stat_jour' > <font color='black'   $sizefont1> <b>"   .  $status .         "  </td>";

//echo "<td align='center'  id = 'pole_pic'>  <a href='journal_account.php?id=$id'><img src='images/blue-arrow1.jpg' width='20' height='20' alt='������''></a> </td>";  


 echo "</tr> </table>";

}}
 echo "  </form></div> " ;


////////////////////////////////////////////////////////////////////������//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<div class='block_filtr'>";
echo "<form action='' method='get'   >";



echo "<br>".space(2);
?> <input type = 'text' id='pole_name18'  name = 'run_numacc' placeholder = '������� ����� �����'  > <hr> <?

echo "</form>";

echo "<form action='' method='get'   >";
echo space(1);
$client=$row['client'];
/////........................������ ��������
$idclient= $_GET['idclient'];
$rr=sqlread("SELECT * FROM client WHERE idclient = '$idclient'"); 
$sql = "SELECT * FROM client ORDER BY company ASC ";
$result_select = mysql_query($sql);

?> <select name="idclient" id='pole_name18' onchange="this.form.submit()"> <?   //onchange="this.form.submit()"  /// onchange="document.getElementById('shap_client').submit()"

$object->company = $rr['company'] ;

echo   "<option  selected value=$idclient   > $object->company   </option>"; // ����� ������� ��������� � ������ $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->idclient' > $object->company </option> ";}  
echo "</select><br>";
////..........................
echo "</form>";

echo "<form action='' method='get'   >";
echo space(1);
?> <input type="text" id='pole_name18' name = "nameclient" value=""><br>  <? 


echo space(8)."<b><font color = white >��� ������� ������-����� </font></b>";
echo "<hr>";

echo "</form>";


echo "<form action='' method='get'   >";
 echo  space(1) ;?> <input type="submit" class='btn btn-warning btn-sm' name = "resetfiltr" value=" <? echo space(15) ."�������� ������". space(25) ; ?>"><br><p>

<?
echo "</form>";


////////
echo "</div>";




 echo "</div >";


include "menu.php";





      ?>
      