 
 <? function redirect($url){header('Location: '.$url);}  ?>

 <meta charset="windows-1251">








<?
session_start();
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
    background: #fefcea; /* Для старых браузров */
    background: linear-gradient(to top, #808080, #ececec);
      }

   .fig {
    text-align: center; /* Выравнивание по центру */ 
   }



                             #input_shap {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
         background: #E0FFFF; /* Цвет фона */ 
         height:35px;  
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
   } 

                                #data_shap {

    width: 150px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

     height:35px;  
         background: #E0FFFF; /* Цвет фона */ 
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
   } 
                                #status_shap {

    width: 200px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
              background: #E0FFFF; /* Цвет фона */ 

              height:35px;  
  margin:3px 3px 3px 5px; 
       border-radius: 4px;

   } 


                                #client_shap {

    width: 300px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;


height:35px;  
         background: #E0FFFF; /* Цвет фона */ 
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
   } 




                             #pole_id {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;



   } 

                                #status_journ {

    width: 120px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: center;
     font-family:'arial';
     font-weight:bold;

border: 1px solid #ccc; /* серая рамка */

   } 

                             #pole_nacc {

    width: 100px; /* Ширина поля в пикселах */

    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
 border: 0px double black; /* Параметры границы */
border: 1px solid #ccc; /* серая рамка */

   } 


                             #pole_ceny {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 18px;  
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 


#pole_alg{

    width: 100px; /* Ширина поля в пикселах */
    font-size: 18px;  
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 


                             #nameclient_pay {

    width: 200px; /* Ширина поля в пикселах */
    font-size: 18px;  
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 


                                #pole_name {

    width: 200px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: left;
     font-family:'amaze';
    

   } 
                                #pole_nameac {

    width: 300px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
    

   } 

                                  #pole_note {

    width: 600px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'arial';
    
     border: 1px solid #ccc; /* серая рамка */
white-space:pre;
   }  


                                  #sum_jour {

    width: 100px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: right;
     font-family:'arial';
   
     border: 1px solid #ccc; /* серая рамка */
white-space:pre;
   }  

                                  #pole_client_jour {

    width: 300px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'arial';
  
     border: 1px solid #ccc; /* серая рамка */
white-space:pre;
   }  

                                     #pole_noteac {

    width: 800px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
 
background: #E0FFFF; /* Цвет фона */ 
       margin:3px 3px 3px 5px; 
       border-radius: 4px;

   }  
                                        #pole_notepay {

    width: 300px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;

   }  
                                  #pole_data{

    width: 150px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
    



   }  


                                     #pole_stat_jour{

    width: 150px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
    
   border: 1px solid #ccc; /* серая рамка */


   }  

                                  #pole_data_jour{

    width: 100px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: center;
     font-family:'arial';

border: 1px solid #ccc; /* серая рамка */


   }  

                                  #pole_button{

    width: 80px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
   }  

                                  #dater{

    width: 150px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

height:35px;  

         background: #E0FFFF; /* Цвет фона */ 
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
   }  
#add_prod {

    width: 300px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

height:25px;  

         background: #FFFFE0 ; /* Цвет фона */ 
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
  
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
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 0.9; /* Значение прозрачности */
                     }   




       .data
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left:10px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 55px; /* Положение от верхнего края */
    width: 1710px; /* Ширина блока */
   height:700px;    
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
            .top_inf
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 730px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 10px; /* Положение от верхнего края */
    width: 1000px; /* Ширина блока */
   height:220px;    
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

            #menu_spisok
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 15px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 20px; /* Положение от верхнего края */
    width: 1700px; /* Ширина блока */
   height:50px;    
    padding: 5px; /* Поля вокруг текста */
   


overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;



                     }    




               .add_prod
     {  


    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 730px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 235px; /* Положение от верхнего края */
    width: 1000px; /* Ширина блока */
   height:75px;    
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
         .datablock_subaccount
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 730px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 315px; /* Положение от верхнего края */
    width: 1000px; /* Ширина блока */
   height:310px;    
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
   


   
               .block_pay
     {  


    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 730px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 630px; /* Положение от верхнего края */
    width: 1000px; /* Ширина блока */
   height:180px;    
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

               .label
     {  


    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 700px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    font-size: 30px; 
         font-family:'amaze';
         font-color:'Navy';
     font-weight:bold;

    top: 5px; /* Положение от верхнего края */
    width: 290px; /* Ширина блока */
   height:40px;    
    padding: 5px; /* Поля вокруг текста */
    background: black; /* Цвет фона */ 
   /* background-image: url('/images/bacground_div.jpg');*/

       background: #fefcea; /* Для старых браузров */
    background: linear-gradient(to top, #008080, #ffecec);
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
               .label_pay
     {  


    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 130px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    font-size: 10px; 
         font-family:'amaze';
         font-color:'Navy';
     font-weight:bold;

    top: 1px; /* Положение от верхнего края */
    width: 700px; /* Ширина блока */
   height:30px;    
    padding: 5px; /* Поля вокруг текста */
    background: black; /* Цвет фона */ 
   /* background-image: url('/images/bacground_div.jpg');*/

       background: #fefcea; /* Для старых браузров */
    background: linear-gradient(to top, #008080, #ffecec);
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;
      float:left; 
       margin:3px 3px 3px 5px; 
 text-align: center;

                padding: 5px; 
             
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
                  

</style>

<?
include "background.php";
include 'conn.php';
include 'function.php';
$user=id_user_hash();




 echo "<div class='genblock'>";
///////////////////////////////////////////////////////////Список накладных //////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////Список накладных //////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////Список накладных //////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////Список накладных //////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////Список накладных //////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////Список накладных //////////////////////////////////////////////////////////////////////////////////////





echo "<form action='journal_account.php?idd=$idd' method='GET' id='shap'  >";

$sizefont1="style='font: 14px apple-system'";
 echo "<div id='menu_spisok'>";
///// шапка талицы
$name =  array('Расх нак','Счет','№ зак','Дата','Заказчик','Сумма','Примечание' )  ;
$long =  array('100',' 100','100','100  ','300','100','600        ') ;
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td  align = 'center' bgcolor='WHITE'   width='$ln' > <font color='black'   $sizefont1> <b> $nam</td>";
} echo "</tr> </table>";
/////end////////
 echo "</div >";



  echo "<div class='data'>";
$idd=$_GET['idgen'];

//echo $food;





$strSQL="SELECT *  FROM sales_invoice_gen  ORDER BY   idgen DESC  ";
 $rs = mysql_query($strSQL);





    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {

echo "<table border=0 height=0  cellpadding='0' cellspacing='1' bgcolor='#c0c0c0'   >";//," <width=300%>"," <cellpadding=5>";

$id=$row['id_ac_gen']; 
$qqq=sqlread("SELECT * , SUM(price * quantity) AS sum_acc  FROM sales_invoice_sub WHERE id_sales_gen= '$id' ");


$sum_ac=$qqq['sum_acc']; 


$dates=$row['dates'] ;
$dates= date("d.m.Y",strtotime($dates )); 

$idclient=$row['idclient']; 
$idgen = $row['idgen'];
$status= $row['status'];
$id_ac_gen= $row['id_ac_gen'];

$account_gen= $row['account_gen'];

$idclient= $row['idclient'];
$comment= $row['comment']  ;  //$comment=substr($comment, 0, 10);


$name_client= name_client_id($idclient); $name_client=substr($name_client, 0, 17);

$bgcol="bgcolor='#FFDFDF'"; 
//if (strpos($status, 'Оплачен') !== false ){ $bgcol="bgcolor='PowderBlue'"; }
if (strpos($status, 'Оплачен') !== false or $status ==2  ){ $bgcol="bgcolor='LightCyan'"; }
if (strpos($status, '%' or $status ==1   ) !== false ){ $bgcol="bgcolor='gold'"; }

//echo "<td  'width=40 bgcolor='white' id='pole_id' > <font color='black'   $sizefont1>   <a href='prih_board.php?id=$id' TARGET='_blank'>$id</a>'</td>";

//echo "<td width=70 bgcolor='white' style='font: 14px arial' ><button type='submit' name='go_to' id='pole_button'  value=".  $id .">Перейти</button></td>";  //кнопка 

echo "<td  'width=40 bgcolor='LightYellow' id='pole_nacc' > <font color='black'   >   <a href='sales_invoice.php?id=$idgen' TARGET='_self '  style='color:DarkBlue;'  >$idgen</a></td>";

//echo "<td   'width=20 $bgcol id='pole_id' > <font color='black'  $sizefont1> <b>"   . $num_account .         "  </td>";
echo "<td  'width=40 bgcolor='LightYellow' id='pole_nacc' > <font color='black'   >   <a href='account.php?id=$id_ac_gen' TARGET='_self '  style='color:DarkBlue;'  >".$account_gen."</a></td>";

echo "<td  'width=40 $bgcol id='pole_data_jour' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self '  style='color:black;'  ><b>$dates</b></a></td>";
//echo "<td  align='center'  $bgcol id='pole_data_jour' > <font color='black' > <b>"   . $accountofthe  .         "  </td>";

echo "<td  'width=40 $bgcol id='pole_client_jour' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self '  style='color:black;'  ><b>$name_client</b></a></td>";
//echo "<td   'width=140 $bgcol id='pole_client_jour' > <font color='black'  > <b>"   . $name_client .         "  </td>";

echo "<td  'width=40 $bgcol id='sum_jour' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self '  style='color:black;'  > <b>  $sum_ac</b></a></td>";
//echo "<td   'width=40 $bgcol id='sum_jour' > <font color='black'  > <b>"   . $sum_ac .         " </b> </td>";  /// '100 000,00'

echo "<td  'width=40 $bgcol id='pole_note' > <font color='black'   >   <a href='account.php?id=$id' TARGET='_self '  style='color:black;'  >$comment</a></td>";
//echo "<td   'width=40 $bgcol id='pole_note' > <font color='black'  > "   . $comment .         "  </td>";
echo "<td   'width=40 $bgcol id='status_journ' > <font color='black'  > "   .$status.         "  </td>";
echo "<td   'width=40 $bgcol id='status_journ' > <font color='black'  > "   .'7927'.         "  </td>";
echo "<td   'width=40 $bgcol id='status_journ' > <font color='black'  > "   .$status.         "  </td>";
if(is_numeric($status)) {
if($status==1)  $status = "Не оплачено";
if($status==2)  $status = "Оплачено";

if($status==3)  $status = "Оплачено частично";



}

//echo "<td  'width=40 $bgcol id='pole_stat_jour' > <font color='black'   $sizefont1> <b>"   .  $status .         "  </td>";

//echo "<td align='center'  id = 'pole_pic'>  <a href='journal_account.php?id=$id'><img src='images/blue-arrow1.jpg' width='20' height='20' alt='Пример''></a> </td>";  


 echo "</tr> </table>";

}}
 echo "  </form></div> " ;


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 echo "</div >";


include "menu.php";





      ?>
      