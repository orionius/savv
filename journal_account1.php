 
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

    width: 80px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: center;
     font-family:'arial';
     font-weight:bold;

border: 1px solid #ccc; /* серая рамка */

   } 

                             #pole_nacc {

    width: 60px; /* Ширина поля в пикселах */

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

                                #pole_data_pay {

    width: 150px; /* Ширина поля в пикселах */
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

    width: 100px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'arial';
    
     border: 1px solid #ccc; /* серая рамка */
white-space:pre;
   }  


                                  #sum_jour {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: right;
     font-family:'arial';
   
     border: 1px solid #ccc; /* серая рамка */
white-space:pre;
   }  

                                  #pole_client_jour {

    width: 140px; /* Ширина поля в пикселах */
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

    width: 60px; /* Ширина поля в пикселах */
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
  height:850px;
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
    width: 710px; /* Ширина блока */
   height:755px;    
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
    width: 700px; /* Ширина блока */
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
////////////////////////////////////////////////////////// Сохранить данные счета вместе с шапкой //////////////////////////////////////////////////////////////////////////////////////
if (!empty($_POST['save_acc']) ) {  

$idgen=$_POST['idgen'];
  $n_account=$_POST['n_account'];
  $dater=$_POST['dater'];
  $idstatus=$_POST['idstatus'];
  $idclient=$_POST['idclient'];
  $comment=($_POST['comment']);
  $discount=$_POST['discount'];

  $dater=date("Y.m.d",strtotime( $dater ));





 // echo "<script>alert('У вас ". $id ."----".$idclient." ');</script>";

  sqlread("UPDATE account_gen  SET number='$n_account',accountofthe = ' $dater', idclient='$idclient',status='$idstatus',idclient='$idclient',comment ='$comment', discount ='$discount'  WHERE id_ac_gen = '$idgen' "  );



 $id_ac_sub=$_POST['id_ac_sub'];
 $price=$_POST['price'];
 $number=$_POST['number'];
 $unit=$_POST['unit'];
$id_alg=$_POST['id_alg'];

$name_equipment=$_POST['name_equipment'];


if (is_array($id_ac_sub)) { // Проверяем, является ли эта переменная массивом данных, если да, то исполняем код в цикле for, если нет, выходим из выполнения скрипта
foreach ($id_ac_sub as $key => $value) {  

 //echo "<script>alert('У вас ". $value ."----".$price[$key]." ');</script>";

$row=sqlread("SELECT config FROM algorythm WHERE id = '$id_alg[$key]'");
$config= $row['config'];




sqlread("UPDATE account_sub  SET price = '$price[$key]' , unit= '$unit[$key]'   ,  number = '$number[$key]' ,idalgorythm='$id_alg[$key]',config='$config',name_equipment='$name_equipment[$key]' WHERE id_ac_sub = '$value' ");


}}



echo "<script> document.location.href='journal_account.php?id=$idgen';</script>"; 
}
////////////////////////////////////////////////////////// Удаление отмеченных галочкой позиций //////////////////////////////////////////////////////////////////////////////////////
if (!empty($_POST['del_check']) ) {  

  $del_check=$_POST['del_check'];
  $check_b=$_POST['check_b'];
  $id=$_POST['id'];




if (is_array($check_b)) { // Проверяем, является ли эта переменная массивом данных, если да, то исполняем код в цикле for, если нет, выходим из выполнения скрипта
foreach ($check_b as $key => $value) {  

echo $value;

  sqlread( " DELETE FROM account_sub WHERE id_ac_sub=  $value") ; }

}}
////////////////////////////////////////////////////////// печать счета  //////////////////////////////////////////////////////////////////////////////////////

if(!empty($_POST['print_acc'])) {$id=$_POST['idgen'];





//echo "<script> document.location.href='print_account.php?id=$id'</script>"; 
//header("Location: print_account.php?id=$id"); 
//$url="print_account.php?id=". $id.  "";

//redirect('print_account.php?id='.$id);

echo "<script> document.location.href='print_account.php?id=$id';</script>"; 
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_POST['print_acc_on_email'])) {$id=$_POST['idgen'];

//$id='222';

// echo "<script>alert('У вас ". $id ."----".$price." ');</script>";
//header("Location: print_account.php?id=$id"); 
echo "<script> document.location.href='print_account.php?id=$id&em=yes '</script>"; 
}



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['go_to'])) {
$go=$_GET['go_to'];
echo "<script> document.location.href='journal_account.php?id=$go';</script>"; 

}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(empty($_GET['id'])) {
  $row=sqlread("SELECT MAX(id_ac_gen) as maxid FROM account_gen ");
  $id=$row['maxid'];

echo "<script> document.location.href='journal_account.php?id=$id';</script>"; 
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['price'])) {$id=$_GET['id'];

$id_ac_sub= $_GET['id_ac_sub'];
$price=     $_GET['price'];
$number=    $_GET['number'];
$unit =     $_GET['unit'];
$name_equipment =     $_GET['name_equipment'];


// echo "<script>alert('У вас ". $id_ac_sub ."----".$price." ');</script>";

$qq=sqlread("UPDATE account_sub SET price='$price' , number = '$number' , unit = '$unit' , name_equipment='$name_equipment' WHERE id_ac_sub = '$id_ac_sub' "); 

echo "<script> document.location.href='journal_account.php?id=$id'</script>"; 

}

/// echo "<script> document.location.href='print_account.php?id=222'</script>"; 

//////////////////////////////////////////////////////////Добавить новый счет //////////////////////////////////////////////////////////////////////////////////////
if ( !empty($_POST['add_account']) ) {

$user= $_SESSION['user'] ;
$row=sqlread('SELECT MAX(number) as maxnum  FROM  account_gen ');
$maxnum=$row['maxnum']+1;
$dates=date();
$qq=sqlread("INSERT INTO account_gen(user,number,accountofthe) VALUES('$user','$maxnum',NOW())  "); 

$row1=sqlread("SELECT  MAX(id_ac_gen) as maxid  FROM  account_gen ");
$maxid=$row1['maxid'];

//$maxid=1450;
 echo "<script>alert('У вас ". $maxid ."---- ');</script>";


header("Location: journal_account.php?id=$maxid"); exit;
//header ('Location: journal_account.php?id=$maxid'); 
//echo "<script> document.location.href='journal_account.php?id=$maxid'</script>"; 
//echo  $client ;
//echo "<script> document.location.href='trebovan_prih.php'</script>"; 
}



////////////////////////////////////////////////////////// Удалить счет полностью //////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['del_gen_acc'])) {$id=$_GET['id'];
$row1=sqlread("SELECT  MAX(id_ac_gen) as maxid  FROM  account_gen ");
$row2=sqlread("SELECT  COUNT(*) as coun_sub  FROM  account_sub WHERE id_ac_gen = '$id'");
$row3=sqlread("SELECT  COUNT(*) as coun_pay  FROM  account_pay WHERE id_ac_gen = '$id'");

$maxid = $row1['maxid'];
$coun_sub = $row2['coun_sub'];
$coun_pay = $row3['coun_pay'];

$maxid=$row1['maxid'];
//echo "<script>alert('".$coun_sub." В счете содержатся данные .Удалите все позиции ');</script>";
if($coun_sub > 0 or $coun_pay >0 ) {$maxid =$id; echo "<script>alert('В счете содержатся данные .Удалите все позиции ');</script>";} else {sqlread ("DELETE FROM account_gen WHERE id_ac_gen = '$id' ") ; }

header("Location: journal_account.php?id=$maxid"); exit;
//echo "<script> document.location.href='journal_account.php?id=$maxid '</script>"; 
}
////////////////////////////////////////////////////////// ДОБАВИТЬ ПРОДУКТ //////////////////////////////////////////////////////////////////////////////////////
if(!empty($_POST['add_product'])) {$id=$_GET['id'];

$id_board =$_POST['id_board'];
$user=        $_SESSION['user'] ;


$name_board=name_board_id($id_board);

//echo "<script>alert('У вас ". $name_board ."----".$id." ');</script>";

$price=price_board_id($id_board);

$rr=sqlread("SELECT discount  FROM account_gen WHERE id_ac_gen = '$id' ");

$discount=$rr['discount'];
$price=$price-(($price/100)*$discount);


$qq=sqlread("INSERT INTO account_sub(id_ac_gen,id_equipment,name_equipment,user,unit,number,price)  VALUES  ('$id','$id_board','$name_board','$user','шт','1','$price') "); 

echo "<script> document.location.href='journal_account.php?id=$id'</script>"; 

}


//////////////////////////////////////////////////////////Добавить новый оплат //////////////////////////////////////////////////////////////////////////////////////
if ( !empty($_POST['add_payment']) ) {

$user= $_SESSION['user'] ;

$id=$_GET['id']; 


$row=sqlread("SELECT * FROM account_gen WHERE id_ac_gen= '$id' ");

$idclient=$row['idclient'];

//echo "<script>alert('У вас ". $value ."----".$price[$key]." ');</script>";


$qq=sqlread("INSERT INTO account_pay(user,id_ac_gen,idclient,dates) VALUES('$user','$id','$idclient',NOW()) "); 

//echo "<script> document.location.href='journal_account.php?id=$id'</script>"; 

header("Location: journal_account.php?id=$id"); exit;
//echo  $client ;

}
//////////////////////////////////////////////////////////Удаление оплаты //////////////////////////////////////////////////////////////////////////////////////
if ( !empty($_GET['idpaydel']) ) {
$user= $_SESSION['user'] ;
$idpaydel=$_GET['idpaydel'];
$id=$_GET['id']; 

$row=sqlread("DELETE FROM account_pay  WHERE id_pay = '$idpaydel' ");

header("Location: journal_account.php?id=$id"); exit;
//echo "<script> document.location.href='journal_account.php?id=$id'</script>"; 
}
//////////////////////////////////////////////////////////Создание заказа //////////////////////////////////////////////////////////////////////////////////////
if ( !empty($_POST['create_order']) ) {
$user= $_SESSION['user'] ;
//$idpaydel=$_GET['idpaydel'];
$id=$_GET['id']; 
$user= $_SESSION['user'] ;


$rr1=sqlread("SELECT * FROM account_gen WHERE id_ac_gen = '$id' ");
$n_acc=$rr1['number'];


$rr=sqlread("SELECT MAX(n_order) as max_order FROM order_gen ");
$max_order=$rr['max_order']+1;
$idclient=$rr1['idclient'];

$row=sqlread("INSERT INTO order_gen(user,n_order,n_account,id_account,client,date_begin) VALUES ('$user' ,'$max_order','$n_acc','$id','$idclient',CURDATE()) ");

$rr=sqlread("SELECT MAX(id_order) as max_idorder FROM order_gen WHERE user = '$user'");

$idorder=$rr['max_idorder'];

$row=sqlread(" INSERT INTO order_sub (id_board,id_order_gen,price,quantity,algorithm,config) SELECT id_equipment,'$idorder',price,number,idalgorythm,config FROM account_sub WHERE  id_ac_gen = '$id' ");



//header("Location: journal_account.php?id=$id"); exit;
//echo "<script> document.location.href='journal_account.php?id=$id'</script>"; 

echo "<script> document.location.href='order.php?id=$idorder'</script>"; 


}


////////////////////////////////////////////////////////// ИЗМЕНИТЬ ДАННЫЕ ПЛАТЕЖКИ //////////////////////////////////////////////////////////////////////////////////////

if ( !empty($_GET['edit_payment']) ) {
$user= $_SESSION['user'] ;

$id=$_GET['id']; 

$num_pp_pay=$_GET['num_pp_pay']; 
$pay=$_GET['pay_pay']; 
$dates_pay=$_GET['dates_pay']; 
$comment_pay=$_GET['comment_pay']; 
$idclient_pay=$_GET['idclient_pay']; 
$id_pay=$_GET['id_pay']; 

$id_pay=$_GET['id_pay']; 


$dates_pay=date("Y.m.d",strtotime($dates_pay));

$row=sqlread("UPDATE account_pay SET num_pp ='$num_pp_pay', pay ='$pay', dates ='$dates_pay', comment ='$comment_pay', user='$user',idclient='$idclient_pay' WHERE id_pay = '$id_pay' ");

echo "<script> document.location.href='journal_account.php?id=$id'</script>"; 
}

/////////////////////////////////////////////////////////удаление строки /////////////////////////////////////////////////////////////////////////////////////


if($_GET['del_gen']=='yes') {$id=$_GET['id']; 

$idsub=$_GET['idsub']; 
//echo "<script>alert('У вас ". $id_ac_sub ."----".$id." ');</script>";

sqlread("DELETE FROM account_sub WHERE id_ac_sub = '$idsub' ");

echo "<script> document.location.href='journal_account.php?id=$id'</script>"; 
}

////////////////////////////////////////////////////////// обновить поле клиент шапка  //////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['idclient'])) {$id=$_GET['id']; 

$idclient=$_GET['idclient']; 


$qq=sqlread("UPDATE account_gen SET idclient='$idclient' WHERE id_ac_gen = '$id' "); 


echo "<script> document.location.href='journal_account.php?id=$id'</script>"; 
}

////////////////////////////////////////////////////////// обновить поле дата шапка  //////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['dater'])) {$id=$_GET['id']; 

$dater=$_GET['dater']; 
$dater=date("Y.m.d",strtotime($dater));

$qq=sqlread("UPDATE account_gen SET accountofthe='$dater' WHERE id_ac_gen = '$id' "); 


echo "<script> document.location.href='journal_account.php?id=$id'</script>"; 
}

////////////////////////////////////////////////////////// обновить поле дата status  //////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['status'])) {$id=$_GET['id']; 

$status=$_GET['status']; 


$qq=sqlread("UPDATE account_gen SET status='$status' WHERE id_ac_gen = '$id' "); 


echo "<script> document.location.href='journal_account.php?id=$id'</script>"; 
}

////////////////////////////////////////////////////////// обновить поле скидка  //////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['discount'])) {$id=$_GET['id']; 

$discount=$_GET['discount']; 


$qq=sqlread("UPDATE account_gen SET discount='$discount' WHERE id_ac_gen = '$id' "); 


echo "<script> document.location.href='journal_account.php?id=$id'</script>"; 
}

////////////////////////////////////////////////////////// Изменить статус  //////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['idstatus'])) {$id=$_GET['id']; 

$idstatus=$_GET['idstatus']; 




$qq=sqlread("UPDATE account_gen SET status='$idstatus' WHERE id_ac_gen = '$id' "); 


echo "<script> document.location.href='journal_account.php?id=$id'</script>"; 
}
////////////////////////////////////////////////////////// Изменить id_alg  //////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['id_alg'])) {$id=$_GET['id']; 

$id_alg=$_GET['id_alg']; 
$id_ac_sub= $_GET['id_ac_sub'];

$row=sqlread("SELECT config FROM algorythm WHERE id = '$id_alg'");


$config= $row['config'];

$qq=sqlread("UPDATE account_sub SET idalgorythm='$id_alg',config='$config' WHERE id_ac_sub = '$id_ac_sub' "); 


echo "<script> document.location.href='journal_account.php?id=$id'</script>"; 
}


 echo "<div class='genblock'>";
///////////////////////////////////////////////////////////Список счетов //////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////Список счетов //////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////Список счетов //////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////Список счетов //////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////Список счетов //////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////Список счетов //////////////////////////////////////////////////////////////////////////////////////





echo "<form action='journal_account.php?idd=$idd' method='GET' id='shap'  >";

$sizefont1="style='font: 14px apple-system'";
 echo "<div id='menu_spisok'>";
///// шапка талицы
$name =  array('Счет','Дата','Заказчик','Сумма','Примечание'  ,'<p><img src="images/dengi.png  " alt=""  width="60" height="20" ></p>   ','Заказ','<p><img src="images/gruzovik.jpg" alt=""  width="40" height="20" ></p>   ') ;
$long =  array(' 60','60  ','140','80','100        ','80' ,'80','80') ;
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td  align = 'center' bgcolor='WHITE'   width='$ln' > <font color='black'   $sizefont1> <b> $nam</td>";
} echo "</tr> </table>";
/////end////////
 echo "</div >";



  echo "<div class='data'>";
$idd=$_GET['idgen'];

//echo $food;





$strSQL="SELECT *  FROM account_gen  ORDER BY   id_ac_gen DESC  ";
 $rs = mysql_query($strSQL);





    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {

echo "<table border=0 height=0  cellpadding='0' cellspacing='1' bgcolor='#c0c0c0'   >";//," <width=300%>"," <cellpadding=5>";

$id=$row['id_ac_gen']; 
$qqq=sqlread("SELECT * , SUM(price * number) AS sum_acc  FROM account_sub WHERE id_ac_gen= '$id' ");


$sum_ac=$qqq['sum_acc']; 


$accountofthe=$row['accountofthe'] ;
$accountofthe= date("d.m.Y",strtotime($accountofthe )); 

$idclient=$row['idclient']; 
$num_account = $row['number'];
$status= $row['status'];

$idclient= $row['idclient'];
$comment= $row['comment']  ;$comment=substr($comment, 0, 10);


$name_client= name_client_id($idclient); $name_client=substr($name_client, 0, 17);

$bgcol="bgcolor='#FFDFDF'"; 
//if (strpos($status, 'Оплачен') !== false ){ $bgcol="bgcolor='PowderBlue'"; }
if (strpos($status, 'Оплачен') !== false or $status ==2  ){ $bgcol="bgcolor='LightCyan'"; }
if (strpos($status, '%' or $status ==1   ) !== false ){ $bgcol="bgcolor='gold'"; }

//echo "<td  'width=40 bgcolor='white' id='pole_id' > <font color='black'   $sizefont1>   <a href='prih_board.php?id=$id' TARGET='_blank'>$id</a>'</td>";

//echo "<td width=70 bgcolor='white' style='font: 14px arial' ><button type='submit' name='go_to' id='pole_button'  value=".  $id .">Перейти</button></td>";  //кнопка 

echo "<td  'width=40 bgcolor='LightYellow' id='pole_nacc' > <font color='black'   >   <a href='journal_account.php?id=$id' TARGET='_self '  style='color:DarkBlue;'  >$num_account</a></td>";

//echo "<td   'width=20 $bgcol id='pole_id' > <font color='black'  $sizefont1> <b>"   . $num_account .         "  </td>";
echo "<td  align='center'  $bgcol id='pole_data_jour' > <font color='black' > <b>"   . $accountofthe  .         "  </td>";
echo "<td   'width=140 $bgcol id='pole_client_jour' > <font color='black'  > <b>"   . $name_client .         "  </td>";

echo "<td   'width=40 $bgcol id='sum_jour' > <font color='black'  > <b>"   . $sum_ac .         " </b> </td>";  /// '100 000,00'
echo "<td   'width=40 $bgcol id='pole_note' > <font color='black'  > "   . $comment .         "  </td>";
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

 ///////////////////////////////Шапка ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 ///////////////////////////////Шапка ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////Шапка ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////Шапка ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////Шапка ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////Шапка ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


echo "<div class='top_inf'>";

//echo "<form action='journal_account.php' method='GET'  >";

echo "<form action='journal_account.php' method='POST'  >"; 
$id=$_GET['id'];
echo "<input visibility : hidden type='text' id='pole_null' textarea name='idgen'   value='$id'>   ";





//echo space(3)."<input bgcolor='red' visibility : hidden type='text' id='pole_idprih' textarea name='id'   value='$id'>   ";

echo " <input type='submit' name='add_account'  class='btn btn-primary  btn-sm'  value='создать новый счет' /> " ;

?> <input type='submit' color = cyan name="print_acc"  class='btn btn-primary  btn-sm'  value='Печать' /> 
   <input type='submit' color = cyan name="print_acc_on_email" class='btn btn-primary  btn-sm'   value='Отправить на e-mail ' /> 
      <input type='submit' color = cyan name="save_acc"  class='btn btn-primary  btn-sm'   value='Сохранить ' /> <br>

      <hr>


      <div class='label'>  <font color='Navy'   > <?  echo 'СЧЕТ НА ОПЛАТУ' ; ?>  </div>
<?



//echo space(125). " <td> <a href='journal_account.php?id=".$id."&del_gen_acc=yes'><img src='images/krest1.png' width='20' height='20' alt='Пример''></a></td> ";  // удаление 





//echo "</form>";



//echo "<form action='journal_account.php?id=$id' method='GET' id='shapp'  >";
echo "<font style='font: 15px apple-system' color = black ><b>";
$id=$_GET['id'];




$row= sqlread ("SELECT * FROM  account_gen  WHERE  id_ac_gen ='$id' ");

$num_account=$row['number'];
$status=$row['status'];


echo space(1)."<input bgcolor='red' visibility : hidden type='text' id='pole_idprih' textarea name='id'   value='$id'>   ";

//echo "Номер счета <input bgcolor='red' type='text' id='pole_date' textarea name='num_account'   value='$num_account'>   ";


//echo "<input type='text'  name='n_account'  id='input_shap'  placeholder='Номер счета'  value=' ".$num_account." '   onkeydown="if(event.keyCode==13){return false;}"  /> " ;

?><input bgcolor='red' type='text' id='input_shap' textarea name='n_account'   value='<? echo $num_account ?> '  onkeydown="if(event.keyCode==13){return false;}"  >   <?

//$dater=date("d.m.Y",strtotime($row['accountofthe'] ));

$dater=$row['accountofthe'];

echo " от   <input   type='date' min='2000-01-01' id='dater' name='dater' value='".$dater."' onkeydown='if(event.keyCode==13){return false;}'   > " ;




echo space(1);

$client=$row['idclient'];


/////........................список клиентов
$idclient= $client;//$_SESSION['idclient'];
$rr=sqlread("SELECT * FROM client WHERE idclient = '$idclient'"); 
$sql = "SELECT * FROM client ORDER BY company ASC ";
$result_select = mysql_query($sql);

?> <select name="idclient" id='client_shap' > <?
/*?> <select name='idclient' id='' > <?*/
$object->company = $rr['company'] ;

echo   "<option  selected value=$idclient   > $object->company   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->idclient' > $object->company </option> ";}  
echo "</select>";
////..........................

$discount=$row['discount'];

echo space(1)."<input type='text'  name='discount'  id='data_shap'  placeholder='Скидка % '  value=' ".$discount." ' /> " ;


//echo space(5)."<input type='text'  name='status'  id='data_shap'  placeholder='Номер счета'  value=' ".$status." ' /> " ;



/////........................список статус
//$status= $client;//$_SESSION['idclient'];
$rr=sqlread("SELECT * FROM status_account WHERE id_stat = '$status'"); 
$sql = "SELECT * FROM status_account ORDER BY name_status ASC ";
$result_select = mysql_query($sql);

?> <select name="idstatus" id='status_shap' > <?
/*?> <select name='idclient' id='' > <?*/
$object->name_status = $rr['name_status'] ;

echo   "<option  selected value=$status   > $object->name_status   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_stat' > $object->name_status </option> ";}  
echo "</select>";
////..........................


echo "<font style='font: 15px apple-system' color = Navy ><b>";

echo "<br>".space(8)."№ счета".space(20)."Дата счета " .space(45)."Клиент:".space(45)."Скидка %" .space(25). "Статус";




//echo "<br>Примечание: " .$row[note]  ;

$comment = $row['comment'] ;


//echo space(5)." № заказа<input type='text'  name='n_order'  placeholder='Номер заказа'  value='".$num_account."' /> " ;

//echo space(150)."  <a href='give_board.php?id=".$id."&del_gen=yes'><img src='images/delete.png' width='40' height='40' alt='Пример''></a> ";  // удаление наклаждной





echo "<br><br> ".space(5)."<font color = black > <input bgcolor='red' type='text' id='pole_noteac'textarea name='comment'   value='$comment'> </font></b>  " ;

echo "<br>".space(120)."Примечание ";



/*
echo "<form action='journal_account.php?id=$id' method='GET'  >"; echo "<input visibility : hidden type='text' id='pole_null' textarea name='id'   value='$id'>   ";
/////........................список 
if (!empty($_SESSION['id_board'])) {$id_board = $_SESSION['id_board'];} else {$id_board=0;}

//$id_board= $_SESSION['id_board'];
$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board'");
$sql = "SELECT * FROM cat_brd_prod ORDER BY name_product ASC ";
$result_select = mysql_query($sql);

?> <select name='id_board' id='' > <?
$object->name_product = $rr['name_product'] ;

echo   "<option  selected value=$id_board   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select>";
////..........................


echo " <input type='submit' name='add_product'   value='добавить изделие' /> " ;
echo "</form>";


*/




//echo "</form>";


echo "</div>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////подчиненные данные ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 echo "<div class='datablock_subaccount' id = 'qqq'>";

$i=1;

$sizefont="style='font: 12px apple-system'";
///// шапка талицы
$name =  array('П/№ ','Наименование' ,'Алг','Конфиг','ед','кол','цена','сумма') ;
$long =  array(' 110','300         ' ,'102','82','82','80','80','80') ;

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  bgcolor='Aquamarine'  width='$ln' id = 'gradient' > <font color='black'   style='font: 12px apple-system'>  <b> $nam</td>";
} echo "</tr> </table>";
/////end////////

$id=$_GET['id'];

$strSQL="SELECT * , (number * price) as sum_string FROM account_sub WHERE id_ac_gen= '$id'  ";
 $rs = mysql_query($strSQL);



echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {


 // echo "<form action='journal_account.php?id=$id' method='get' id='MyForms' >";





$name_equipment=$row['name_equipment'] ;
$unit = $row['unit'] ;
$number = $row['number'] ;
$price = $row['price'] ;
$id_ac_sub = $row['id_ac_sub'] ;
$sum_string=$row['sum_string'];
$id_equipment=$row['id_equipment'];
$config=$row['config'];

echo "<td> <input type='checkbox' name='check_b[]' value='$id_ac_sub' /></td>";


 echo "<input visibility : hidden type='text' id='pole_null' textarea name='id[]'   value='$id'>   ";
  echo "<input visibility : hidden type='text' id='pole_null' textarea name='id_ac_sub[]'   value='$id_ac_sub'>   ";
//echo " <td  'width=0 id='pole_null' >  <b> <input type='hiden' size=1 id='pole_id'  name='id_equipment' value=", $row['id_equipment']  , " '>  </td> "; //  
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_nameac'   style='font: 12px amaze'    > <input bgcolor='red' type='text' id='pole_nameac' textarea name='name_equipment'   value='$name_equipment'>  </td>  ";


echo " <td> <a href='journal_account.php?id=".$id."&idsub=".$id_ac_sub."&del_gen=yes'><img src='images/krest1.png' width='15' height='15' alt='Пример''></a></td> ";  // удаление 

echo "<td  'width=0 id='pole_id' bgcolor = 'CadetBlue'>  $i </td>"  ;





?>




<td  'width=0 id='pole_null' ><b>  <input autofocus type="text" visibility : visible  name="name_equipment[]"  id='pole_nameac' value="<?=$name_equipment;?>" onkeydown="if(event.keyCode==13){return false;}"  ></td>  


<td>  

<?
/////........................список 
$id_alg= $row['idalgorythm'];
$rr=sqlread("SELECT * FROM algorythm WHERE id = '$id_alg'");
$sql = "SELECT * FROM algorythm ORDER BY name ASC ";
$result_select = mysql_query($sql);
?> <select name="id_alg[]" id='pole_alg'> <?
//.........

$object->name = $rr['name'] ;
echo   "<option  selected value=$id_alg   > $object->name   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name </option> ";}  
echo "</select>";
////..........................



?>
</td>  




<td  'width=0 id='pole_null' >  <input autofocus type="text" name="config[]"  id='pole_id' value="<?=$config;?>" onkeydown="if(event.keyCode==13){return false;}"  ></td>  
<td  'width=0 id='pole_null' >  <input autofocus type="text" name="unit[]"  id='pole_id' value="<?=$unit;?>" onkeydown="if(event.keyCode==13){return false;}" ></td>  


<td  'width=0 id='pole_null' >  <input autofocus type="text" name="number[]"  id='pole_id' value="<?=$number;?>" onkeydown="if(event.keyCode==13){return false;}" ></td>  
<td  'width=0 id='pole_null' >  <input autofocus type="text" name="price[]"  id='pole_id' value="<?=$price;?>" onkeydown="if(event.keyCode==13){return false;}" ></td>  





<?


//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_id'   style='font: 12px amaze'    > <font color='black'  > <b>"   .   $row['unit'] .         "  </td>";
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_id'   style='font: 12px amaze'    > <font color='black'  > <b>"   .   $row['number'] .         "  </td>";
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_ceny'   style='font: 12px amaze'    > <font color='black'  > <b>"   .   $row['price'] .         "  </td>";
echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_id'    > <font color='black'  > <b>"   .   $sum_string.         "  </td>";

$sum_full = $sum_string+$sum_full ;



// echo "</form>";

echo "</tr> ";

$i++;


}}

echo " </table>";





echo "</form>";


echo "<hr>";
echo space(125) ."<font color = Navy  style='font: 30px amaze'  > Сумма по счету :".space(20) .$sum_full ."</font >";

echo "</div>";
////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////ДОБАВЛЕНИЕ НОВОГО ИЗДЕЛИЯ /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<div class='add_prod'>";
echo "<font style='font: 15px apple-system' color = black ><b>";
echo "<form action='journal_account.php?id=$id' method='POST'  >"; echo "<input visibility : hidden type='text' id='pole_null' textarea name='id'   value='$id'>   ";


echo " <input type='submit' name='del_check'  class='btn btn-primary  '  value='Удалить отмеченные' Удалить отмеченные/>  " ;
echo " <input type='submit' name='create_order'  class='btn btn-primary   '  value='Создать заказ на основе счета' /> " ;

echo space(40);
/////........................список 
if (!empty($_SESSION['id_board'])) {$id_board = $_SESSION['id_board'];} else {$id_board=0;}

//$id_board= $_SESSION['id_board'];
$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board'");
$sql = "SELECT * FROM cat_brd_prod ORDER BY name_product ASC ";
$result_select = mysql_query($sql);

?> <select name='id_board' id='add_prod' > <?
$object->name_product = $rr['name_product'] ;

echo   "<option  selected value=$id_board   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select>";
////..........................


echo " <input type='submit' name='add_product'  class='btn-warning '  value='добавить изделие' /> <br>" ;




//echo "</form>";



echo "</div>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////ОПЛАТЫ ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 echo "<div class='block_pay'>";



echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";

?><div class='label_pay'><b>   ОПЛАТЫ   </div><?

 echo "<form action='journal_account.php?id=$id' method='POST' id='MyForms2' >";
$id=$_GET['id'];

echo "<input bgcolor='red' visibility : hidden type='text' id='pole_idprih' textarea name='id'   value='$id'>   ";
echo " <input type='submit' name='add_payment' class='btn btn-primary  '   value='Добавить оплату' /> " ;

echo "</form>";

?>  <?
$sizefont="style='font: 12px apple-system'";
///// шапка талицы
$name =  array('№ П.П. ','ОПЛАТА','ДАТА' ,'КЛИЕНТ','КОМЕНТ') ;
$long =  array(' 100','80         ' ,'150','200','300') ;

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  bgcolor='Aquamarine'  width='$ln' id = 'gradient'  > <font color='black'   style='font: 12px apple-system'> <b> $nam</td>";
} echo "</tr> </table>";
/////end////////

$id=$_GET['id'];

$strSQL="SELECT *  FROM account_pay WHERE id_ac_gen= '$id'  ";
 $rs = mysql_query($strSQL);

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
    if (!empty ($rs) ) {     while($row = mysql_fetch_array($rs)) {
 echo "<form action='journal_account.php?id=$id' method='get' id='MyForms1' >";

$num_pp=$row['num_pp'];
$pay=$row['pay'];
$dates=$row['dates'];
$comment=$row['comment'];
$idclient=$row['idclient'];
$id_pay=$row['id_pay'];
$id=$_GET['id'];


$nameclient = name_client_id($idclient);


 // $dates=date("d.m.Y",strtotime($dates ));



//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_ceny'   style='font: 12px amaze'    > <font color='black'  > <b>"   .   $num_pp.         "  </td>";
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_ceny'   style='font: 12px amaze'    > <font color='black'  > <b>"   .   $pay.         "  </td>";
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_ceny'   style='font: 12px amaze'    > <font color='black'  > <b>"   .   $dates.         "  </td>";
//echo "<td  align='left'  'width=200 bgcolor='LightYellow' id='pole_ceny'   style='font: 12px amaze'    > <font color='black'  > <b>"   .   $idclient.         "  </td>";

echo "<input bgcolor='red' visibility : hidden type='text' id='pole_idprih' textarea name='id_pay'   value='$id_pay'>   ";
echo "<input bgcolor='red' visibility : hidden type='text' id='pole_idprih' textarea name='id'   value='$id'>   ";


echo " <td> <a href='journal_account.php?id=".$id."&idpaydel=".$id_pay."&del_gen=yes'><img src='images/krest1.png' width='15' height='15' alt='Пример''></a></td> ";  // удаление 
echo "<td width=40  align='left'  ' bgcolor='LightYellow' id='pole_id'      ><b><input type='text' name='num_pp_pay'  id='pole_id' value='". $num_pp ."' />   </td>";

echo "<td width=40 align='left'  'bgcolor='LightYellow' id='pole_ceny'     > <b><input type='text' name='pay_pay'  id='pole_ceny' value='". $pay ."' />   </td>";

echo "<td width=40 align='left'  ' bgcolor='LightYellow' id='pole_data_pay'     >  <b><input type='date' min = '2000-01-01' name='dates_pay' id='pole_data_pay' value='". $dates ."' />   </td>";


//echo "<td width=40 align='left'  ' bgcolor='LightYellow' id='nameclient_pay'      > <b><input type='text' name='idclient_pay'  id='nameclient_pay' value='". $nameclient ."' />   </td>";

echo "<td width=40 align='left'  ' bgcolor='LightYellow' id='pole_data_pay'     > ";
//$client=$row['idclient'];

$row=sqlread("SELECT *  FROM account_pay WHERE id_pay= '$id_pay' ");


//$idclient=480;
/////........................список клиентов
$idclient= $row['idclient'];
$rr=sqlread("SELECT * FROM client WHERE idclient = '$idclient'"); 
$sql = "SELECT * FROM client ORDER BY company ASC ";
$result_select = mysql_query($sql);

?> <select name="idclient_pay" id='pole_name'"> <?
/*?> <select name='idclient' id='' > <?*/
$object->company = $rr['company'] ;

echo   "<option  selected value=$idclient   > $object->company   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->idclient' > $object->company </option> ";}  
echo "</select>";
////..........................

echo " </td>";


echo "<td width=40 align='left'  ' bgcolor='LightYellow' id='pole_notepay'      > <b><input type='text' name='comment_pay' id='pole_notepay' value='". $comment ."' />   </td>";


echo "<td width=40 align='left'  ' bgcolor='LightYellow'    > <b> <input type='submit' name='edit_payment'   value='Внести изменения' />  </td>";


echo "</form>";

echo "</tr> ";
}}
echo " </table>";

echo "</div>";
////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 echo "</div >";


include "menu.php";





      ?>
      