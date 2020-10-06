<?if(session_id() == '') {
  session_start();
  }

?>



<head>

 <meta charset="windows-1251">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="style.css">


  <link rel="styles" href="css/style.css">
  <link rel="stylesheet" href="/css/fields.css">  
 </head>


<body>


<?

if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }
?>
<style>

   #gradient {
    background: #fefcea; /* Для старых браузров */
    background: linear-gradient(to top, #808080, #ececec);
      }

#button {
  background: red url(overlay.png) repeat-x;
  display: inline-block;
  padding: 5px 10px 6px;
  color: #fff;
  text-decoration: none;
  -moz-border-radius: 6px;
  -webkit-border-radius: 6px;
  -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
  -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
  text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
  border-bottom: 1px solid rgba(0,0,0,0.25);
  position: relative;
  cursor: pointer
}





#stat_board {

width: 300px; /* Ширина поля в пикселах */
font-size: 20px; 
text-align: left;
 font-family:'amaze';
 font-weight:bold;
 border-radius: 10px ;
} 


#pole_shap_note {

width: 700px; /* Ширина поля в пикселах */
font-size: 20px; 
text-align: left;
 font-family:'amaze';
 font-weight:bold;
 border-radius: 10px ;
} 
                             #pole_id {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
     border-radius: 10px ;
   } 

                                #pole_date {

    width: 200px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
     border-radius: 10px ;
   } 

                                #pole_shap_100 {

width: 100px; /* Ширина поля в пикселах */
font-size: 20px; 
text-align: center;
 font-family:'amaze';
 font-weight:bold;
 border-radius: 10px ;
} 

                                #pole_checkbox {

    width: 40px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
     border-radius: 10px ;
     transform:scale(2.5);
  opacity:0.9;
  cursor:pointer;
   } 
                                #pole_null {

    width: 0px; /* Ширина поля в пикселах */
    font-size: 0px; 
    text-align: center;
    font-color:rgba(0,0,0,0);


   } 
                             #pole_ceny {

    width: 55px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 
                             #field_statusready {

    width: 200px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 
                                #pole_status{

    width: 150px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: left;
     font-family:'amaze';
     border-radius: 10px ;
   } 
                                  #pole_note {

    width: 500px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
     border-radius: 10px ;
   }  
                                    #pole_idprih {

    width: 50px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
border-radius: 10px ;
   } 

                                     #field_quant12_40px {

    width: 50px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
border-radius: 10px ;
   }   
                                      #field_vers_syst40px {

    width: 100px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
border-radius: 10px ;
   }          
   
                               #field_nameboadrd {

    width: 500px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
border-radius: 10px ;
background:PapayaWhip;

   } 

   #pole_button{

width: 80px; /* Ширина поля в пикселах */
font-size: 20px; 
text-align: center;
 font-family:'amaze';
 font-weight:bold;
 border-radius: 10px ;
}  

   #pole_numbernakl {

width: 100px; /* Ширина поля в пикселах */
font-size: 20px; 
text-align: center;
 font-family:'amaze';
 font-weight:bold;
background: #f0f0f0 !important;
outline: none;
border-color : #f0f0f0 ;
border-width :0;
border-radius: 10px ;
} 



     #field_note12_100px{
    width: 150px; /* Ширина поля в пикселах */
    font-size: 15px; 
    height:100%;
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
text-align: center;
border-radius: 10px ;
background:Aquamarine;
}


     #pole_ser{
    width: 150px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
text-align: center;
border-radius: 10px ;
}

#pole_ser_head
{
  width: 150px; /* Ширина поля в пикселах */
font-size: 20px; 
text-align: center;
 font-family:'amaze';
 font-weight:bold;

outline: none;
border-color :f0f0f0 # ;
border-width :0;
border-radius: 10px ;
}
#pole_add_produkt
{

    width: 1000px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   background: #00FF7F !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
text-align: center;
border-radius: 10px ;
  
}
#pole_add_genprodukt
{

    width: 1000px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   background: #00FF7F !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
text-align: center;
border-radius: 10px ;



}

    .pole_del
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 0; /* Положение элемента от правого края */

    width: 99%; /* Ширина блока */
   height:20px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */



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
    opacity: 0.8; /* Значение прозрачности */
    border-radius: 10px ;
                     } 

/* Блоки -------------------------------------- */
    .data
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 5; /* Положение элемента от правого края */
    top: 210px; /* Положение от верхнего края */
    width: 1720px; /* Ширина блока */
   height:550px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-image: Lavender;

   background: linear-gradient(to top, #DEB887, #ffecec);

overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */



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

                     }     


    .top_inf
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 7; /* Положение элемента от правого края */
    top: 5px; /* Положение от верхнего края */
    width: 1720px; /* Ширина блока */
   height:200px;    
    padding: 5px; /* Поля вокруг текста */

overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background: linear-gradient(to top, #DEB887, #ffecec);

overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */



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

                     }      

    .block_inform
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 600; /* Положение элемента от правого края */
    top: 50px; /* Положение от верхнего края */
    width: 500px; /* Ширина блока */
   height:100px;    
    padding: 5px; /* Поля вокруг текста */
    background: red; /* Цвет фона */ 
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-image: Lavender;

 background: rgba(230, 230, 250, 0.2); /* Цвет фона */

overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */



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

                     }   

    .block_menu
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 0; /* Положение элемента от правого края */
    top: 0px; /* Положение от верхнего края */
    width: 1700px; /* Ширина блока */
   height:100px;    
    padding: 5px; /* Поля вокруг текста */
    background: red; /* Цвет фона */ 
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-image: Lavender;

 background: rgba(230, 230, 250, 0.2); /* Цвет фона */

overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */



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
 background: rgba(200, 200, 200, 0.2); 
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


</style>

<?

 session_start();
// var a = 1;

include "background.php";
include 'conn.php';

include 'function.php';
$user=id_user_hash();
if (!EMPTY($_GET['id']) ) {  $id=$_GET['id'] ; }


//$_SESSION['ser_num_count']=0;

echo "<div class='genblock'>";
if ($_SESSION['user']=='21' )  {


/////////////////////Удалить полностью накладную/////////////////////////////////
if (!empty( $_GET['del_gen']) and  $_GET['del_gen'] =='yes' ) {

 $id= $_GET['id'];

sqlread("DELETE FROM manufact_board_sub  WHERE id_gen_manuf  = '$id' ");
sqlread("DELETE FROM manufact_board_gen  WHERE id_prih_gen  = '$id' ");
//header("Location: journal_board_prih.php");  

echo "<script> document.location.href='journal_board_prih.php'</script>"; 
}
//////////////////////////////////////////////////////////////////////////////////


////////////////Вносим данные в приходную подчиненую//////////////////////////////////


//if ( !empty($_GET['ser_num']) ) {





  $id_prih_sub=   $_GET['idcat'] ;  
  $ser_num=       $_GET['ser_num'] ;
  $num_product=   $_GET['num_product'] ;
  $status=        $_GET['status'] ;
  $quantity=      $_GET['quantity'] ;
  $vers_syst=     $_GET['vers_syst'] ;  
  $algoritm=      $_GET['algoritm'] ;
  $note_b=        $_GET['note_b'] ;
  $idGEN=         $_GET['id'] ;
  $dater=         $_GET['daterr'] ;

$dater=date("Y.m.d",strtotime( $dater ));

//echo "  $id_prih_sub";

 //echo "<script>alert('У вас ". $dater." ');</script>";
 
  $qq=sqlread("UPDATE manufact_board_sub SET ser_num='$ser_num',num_product='$num_product', status='$status' ,quantity='$quantity' ,vers_syst='$vers_syst' ,algoritm='$algoritm',note_b='$note_b' , date= '$dater'  WHERE id_prih_sub = '$id_prih_sub' "); 


//$qq=sqlread("UPDATE manufact_board_sub SET ser_num='$ser_num' WHERE id_prih_sub = '$id_prih_sub' "); 




//header("Location: prih_board.php?id=$idGEN");     
//} 
//////////////////////////////////////////////////////////////////////////////////



///*********************************** Выделение всех чекбоксов /////////////////////////////////
?>
<script type="text/javascript">
function check(field,flag) {
 if (flag=="1") {for (i=0; i<field.length; i++) { field[i].checked=true; }}
 else {for (i=0; i<field.length; i++) { field[i].checked=false; }}
}




</script>
<?



// удаляем отмеченные чекбоксы 
if ( $_POST['del_check']== "Удалить" ) {
$id_prih_sub[]=$_POST['id_prih_sub'];


foreach ($id_prih_sub as $key => $value) {
echo $value;	
sqlread("DELETE  FROM manufact_board_sub where id_prih_sub ='$value'  ");// удаляем позиции

} 
header("Location: prih_board.php?id=$id");  
}
//////////////////////////////////////////////////////////////////////////////////
// удаляем по нажатию кнопки текущую 
if ( !empty($_GET['del_current'])) {
 $id_prih_sub=   $_GET['del_current'] ;  
   $idGEN=         $_GET['id'] ;

sqlread ("DELETE   FROM manufact_board_sub where id_prih_sub ='$id_prih_sub' ");// удаляем позиции
header("Location: prih_board.php?id=$idGEN");  
}
///////////////////////////////Новая приходная ////////////////////////////////////////////
if ( $_GET['id']== "new" ) {
$user=$_SESSION['user']; 



sqlread("INSERT INTO manufact_board_gen(user,datetime)  VALUES ('$user',NOW())");
$row=sqlread("SELECT * FROM manufact_board_gen WHERE user  = '$user'  ORDER BY id_prih_gen DESC LIMIT 1 ");
$id=$row['id_prih_gen'];
//header("Location: prih_board.php?id=$id");     
echo "<script> document.location.href='prih_board.php?id=$id'</script>"; 

}
///////////////////////////////Добавить новое изделие в прих /////////////////////////////
if ( !empty($_GET['add_product']) ) {

$id_product=$_GET['id_product'];
$id_board=$_GET['id_board'];
$ser_num=$_GET['ser_num'];




$stat_board=$_SESSION['stat_board'];
//$_SESSION['stat_board']=$stat_board;

 //echo "<script>alert('У вас ". $stat_board." ');</script>";
$_SESSION['ser_num'] =$ser_num;

$ser_num=strtoupper($ser_num);

$_SESSION['id_board']=$id_board; 
$user=$_SESSION['user']; 


$row=sqlread("SELECT SUM(id_prih_sub) AS sum FROM manufact_board_sub  WHERE ser_num = '$ser_num' ");

$_SESSION['ser_num_count'] = $row['sum'] ;

if ($row['sum'] == 0) {sqlread("INSERT INTO manufact_board_sub(id_board,id_gen_manuf,ser_num,user,date,status,id_product)  VALUES ('$id_board','$id','$ser_num','$user',NOW(),'$stat_board','$id_product')");} else {echo "<script>alert('Такой серийный номер уже используется ! ');</script>";}


echo "<script> document.location.href='prih_board.php?id=$id'</script>"; 

//header("Location: prih_board.php?id=$id");     
}

////////////////Вносим данные примечания шапки //////////////////////////////////


if ( !empty($_GET['note']) ) {  $id=$_GET['id'] ;
  $note=  $_GET['note'] ;
 $_SESSION["idcat_board"];

 //echo "<script>alert('У вас ". $note." ');</script>";
  $qq=sqlread("UPDATE manufact_board_gen SET note='$note'  WHERE id_prih_gen = '$id' "); 

 
header("Location: prih_board.php?id=$id");     
} 
////////////////Вносим данные количество заказано //////////////////////////////////


if ( !empty($_GET['quant_order']) ) {  $id=$_GET['id'] ;
  $quant_order=  $_GET['quant_order'] ;
 $_SESSION["idcat_board"];

 //echo "<script>alert('У вас ". $note." ');</script>";
  $qq=sqlread("UPDATE manufact_board_gen SET quant_order='$quant_order'  WHERE id_prih_gen = '$id' "); 

 
header("Location: prih_board.php?id=$id");     
} 


////////////////////// изменяем дату
if ( !empty($_GET['datergen']) ) {
  $dater=         $_GET['datergen'] ;
//$dater=  date("Y.m.d",strtotime( $dater ));

  $qq=sqlread("UPDATE manufact_board_gen SET datetime='$dater'  WHERE id_prih_gen = '$id' "); 
}
/////////////////////////////Изменяем статус//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if ( !empty($_GET['stat_board']) and empty($_GET['add_product']) ) {
  $stat_board=$_GET['stat_board'];
  $_SESSION['stat_board']=$stat_board;
}
///////////////////////Изменяем статусы во всех полях/////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ( !empty($_GET['update_status'])) {  $id=$_GET['id'] ;

$stat_board= $_SESSION['stat_board'];


sqlread("UPDATE manufact_board_sub SET status ='$stat_board' , datestatus = NOW() WHERE id_gen_manuf = '$id'");
echo "<script> document.location.href='prih_board.php?id=$id'</script>"; 
}
///////////////////////Изменяем наряд заказ /////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !empty($_GET['id_product'])) {  $id=$_GET['id'] ;

 $id_product= $_GET['id_product'];
  $qq=sqlread("UPDATE manufact_board_gen SET id_product='$id_product'  WHERE id_prih_gen = '$id' "); 

echo "<script> document.location.href='prih_board.php?id=$id'</script>"; 
}

///////////////////////Изменяем наряд заказ /////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !empty($_GET['n_order'])) {  $id=$_GET['id'] ;
 $id_product= $_GET['id_product'];
 $n_order= $_GET['n_order'];
  $qq=sqlread("UPDATE manufact_board_gen SET n_order='$n_order'  WHERE id_prih_gen = '$id' "); 

echo "<script> document.location.href='prih_board.php?id=$id'</script>"; 
}



///////////////////////id_board /////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !empty($_GET['id_board'])) {  $id=$_GET['id'] ;

 $id_board= $_GET['id_board']; 
  $qq=sqlread("UPDATE manufact_board_gen SET id_board='$id_board'  WHERE id_prih_gen = '$id' "); 

echo "<script> document.location.href='prih_board.php?id=$id'</script>"; 
}



}  // разрешения действий пользователю
///////////////////////////////Шапка ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<div class='top_inf'>";
echo "<form action='prih_board.php?id=$id' method='GET'  id = 'form_shapka'>";
echo  " <font style='font: 20px apple-system' color = black ><b>";


echo "id <input bgcolor='red' type='text' id='pole_shap_100' textarea name='id'   value='$id'>   ";

$row= sqlread ("SELECT * FROM  manufact_board_gen  WHERE  id_prih_gen ='$id' ");



$rows= sqlread ("SELECT SUM(quantity) as sum_quantity FROM  manufact_board_sub  WHERE  id_gen_manuf ='$id' ");


$n_order=$row['n_order'] ;

echo "Наряд заказ <input bgcolor='red' type='text' id='pole_shap_100' textarea name='n_order'   value='$n_order'>   ";

//echo " От ".date("d.m.Y",strtotime($row['datetime'] ));  

//echo "<br>Примечание: " .$row[note]  ;



$dater=$row['datetime'] ;

//$dater=date("d.m.Y",strtotime($row['datetime'] ));


$quant_order=$row['quant_order'] ;
$sum_quantity=$rows['sum_quantity'] ;
$balance=$quant_order-$sum_quantity;



echo "Дата накладной <input bgcolor='red' type='date' id='pole_date' textarea name='datergen'   value='$dater'>   ";
echo "Заказ кол-во <input bgcolor='red' type='number' id='pole_shap_100' textarea name='quant_order'   value='$quant_order'>   ";

echo  space(10)." <font style='font: 20px apple-system' color = black ><b> Сделано :<font style='font: 20px apple-system' color = red >". space(5).$sum_quantity . "</font></b></font>";
echo  space(10)." <font style='font: 20px apple-system' color = black ><b> Доделать :<font style='font: 20px apple-system' color = red >". space(5).$balance . "</font></b></font>";
echo space(40)." <a href='prih_board.php?id=".$id."&del_gen=yes'><img src='images/krest1.png' width='20' height='20' alt='Пример''></a> ";  // удаление наклаждной

echo "<br>";
/* echo space(260); ?><input name='delete_full' type='submit' id = 'button' value='Удалить накладную' onclick="return confirm('Вы точно хотите удалить накладную полностью ?')"><? --> */ 
$note = $row['note'] ;



echo " <input style = 'visibility:hidden' type='submit' name='update' class='btn btn-warning btn-sm'   value='добавить изделие' /> " ;

echo "</form>";

echo "<form action='prih_board.php?id=$id' method='GET' id='form2' >"; echo "<input color = '#f0f0f0' bgcolor='' type='hidden' id='pole_null' textarea name='id'   value='$id'>  ";
$id_product = $row['id_product'] ;
/////........................Главный продукт 

$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_product' ");
$sql = "SELECT * FROM cat_brd_prod WHERE  type_product = '1' ORDER BY name_product ASC ";
$result_select = mysql_query($sql);

?> <select name='id_product' id='pole_add_genprodukt' onchange="this.form.submit()" > <?
$object->name_product = $rr['name_product'] ;

echo   "<option  selected value=$id_board   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select>";
////..........................

/////........................Плата в продукте 
$id_board = $row['id_board'] ;
$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board'");
$sql = "SELECT * FROM cat_brd_prod  ORDER BY name_product ASC ";
$result_select = mysql_query($sql);

?> <select name='id_board' id='pole_add_produkt' onchange="this.form.submit()" > <?
$object->name_product = $rr['name_product'] ;

echo   "<option  selected value=$id_board   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select>";
////..........................

?>



<?



//echo "<br> Примечание <input bgcolor='red' type='text' id='pole_note'textarea name='note'   value='$note'> </b> <input  type='submit' value='Обработать' /> " ;



echo "<form action='prih_board.php?id=$id' method='GET'  >"; echo "<input color = '#f0f0f0' bgcolor='' type='text' id='pole_null' textarea name='id'   value='$id'>    ";
/////........................список 
$stat_board= $_SESSION['stat_board'];
$rr=sqlread("SELECT * FROM status_board WHERE id = '$stat_board'");
$sql = "SELECT * FROM status_board ORDER BY name_status ASC ";
$result_select = mysql_query($sql);
?> <select name="stat_board" id='stat_board' onchange="document.getElementById('form2').submit()"> <?

$object->name_status = $rr['name_status'] ;

echo   "<option  selected value=$id   > $object->name_status   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name_status </option> ";}  
echo "</select>";
////..........................

echo "<font style='font: 20px apple-system' color = black ><b>";

echo "<input type='text' id = 'pole_ser_head' autofocus name='ser_num'  placeholder='Сер номер'  value='' /> " ;



echo "<font style='font: 20px apple-system' color = black ><b>";

echo " <input type='submit' name='add_product' class='btn btn-warning btn-sm'   value='добавить изделие' /> " ;



//echo " Всего изделий:". $rows['count_manuf']  . "</font>";


echo "<br><br>  Примечание <input bgcolor='red' type='text' id='pole_shap_note' textarea name='note'   value='$note'> </b> <input  type='submit' value='Обработать' /> " ;


echo "</form>";


echo "</div>";






//////////////////////////////////////////////////////////////////////Подчиненые данные ////////////

 //echo "<form action='prih_board.php?id=$id' method='get'  >";

echo "<div class='data'>";

$sizefont="style='font: 12px apple-system'";














 echo "<form action='prih_board.php?id=$id' method='get'  >";
echo "<input type='submit' name='del_check'   value='Удалить' > " ;
?>
<input type="button" id='buttoninput'  value="Выделить все" onclick="check(document.getElementsByClassName('list'),1)">
<input type="button" id='buttoninput'  value="Снять выделение" onclick="check(document.getElementsByClassName('list'),0)">
<input type="submit" name='update_status' class='btn btn-warning btn-sm'  value="Обновить статусы">


<?


///// шапка талицы
$name =  array('id ','Наименование','Сер номер'  ,'Номер изделия ','Статус','Кол','Верс','Алгоритм','Примечание','дата') ;
$long =  array(' 110','490         ','150         ','152 '         ,'200'    ,'52'    ,'100'        ,'152'      ,'151','151') ;
 
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' id = 'gradient'> <font color='black'   style='font: 12px apple-system'> <b> $nam</td>";
} echo "</tr> </table>";
/////end////////
//echo "</form>";



$strSQL="SELECT *  FROM manufact_board_sub WHERE id_gen_manuf= '$id' ORDER BY id_prih_sub DESC ";
 $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
 echo "<form action='prih_board.php?id=$id' method='get' id='MyForms'  >";




echo " <td id='pole_null' ><input color = '#f0f0f0' bgcolor='' type='text' id='pole_null' textarea name='id'   value='$id'>  </td>" ;// id номер приходной накладной 



//echo " <td  'width=0 bgcolor=rgba(0,0,0,0) id='pole_null' > <font color=rgba(0,0,0,0)> <b> <input type='hiden' size=1 id='id'  name='idcat' value='". $row['id_prih_sub']  . " '>  </td> "; //  для занесения в базу данных по этому адресу

$idprih=$row['id_prih_sub'] ;


echo "  <td  align='left'  'width=500 bgcolor='LightYellow' id='pole_del' >  <a href='prih_board.php?id=".$id."&del_current=".$idprih."'><img src='images/krest1.png' width='20'
  height='20' alt='Пример''></a></td>  ";

//echo "<td width=20 bgcolor='LightGrey' $sizefont><input type='checkbox' id='pole_checkbox' name='id_prih_sub[]' value=" .  $row['id_prih_sub']  ."> </td> ";
echo " <td  'width=0  >  <input type='hiden' size=1 id='pole_id'  name='idcat' value=". $row['id_prih_sub']  . " >  </td> "; //  для занесения в базу данных по этому id

//echo "<td width=65 bgcolor='white' style='font: 14px arial' ><button type='submit' name='del_current' value=".  $row['id_prih_sub'] .">Удалить</button></td>";  //кнопка 
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_name' > <font color='black'  > <input type='submit' name='del_current'   value='".$row['id_prih_sub'] ."' >Удалить </td>";
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_name' > <font color='black'  > <input type='submit' name='del_current'   value='".'yes' ."' >Удалить </td>";



//echo "<td  'width=40 bgcolor='white' id='pole_id' > <font color='black'  > <b>"   .  $row['id_prih_sub']  .         "  </td>";
$id_board=$row['id_board'];
$name_b= name_board_id($id_board) ;


echo "<td  align='left'  width=500 bgcolor='PapayaWhip' id='field_nameboadrd'  > <font color='black'  > <b>"   .  $name_b .         "  </td>";
echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='ser_num' value=".$row['ser_num']            .">  </td>  ";
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='num_product' value=".$row['num_product']         ."> </td>";

/*
gen_product_id
$rrr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board' ");
$id_prod_gen= $rrr['gen_product_id'];
sqlread("UPDATE manufact_board_gen SET id_product = '$id_prod_gen' , id_board = '$id_board' WHERE id_prih_gen ='$id_gen' ");
*/

//////////////////////////поле со списком/////////////////////////////////////////////
echo "<td align='center'  bgcolor='white' > <font color='black'  > ";  // открыть таблицу 
/////........................отобразить текущее положение  
$status= $row['status'] ; $rr=sqlread("SELECT * FROM status_board WHERE id = '$status'");  // определить текущее значение списка
?> <select name='status' id='field_statusready' onchange="this.form.submit()"  > <?   //здесь вводим имя для запроса по get  и тип поля для отображения  поля 
$object->name_status = $rr['name_status'] ;  echo   "<option  selected value=$status   > $object->name_status   </option>"; //текущее значение имени поля в $object, отобразить текущее положение в списке value = id  $object = имя поля выше строкой 
//.......................... выборка элемента списка
$sql = "SELECT * FROM status_board ORDER BY name_status ASC ";
$result_select = mysql_query($sql);while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name_status </option> ";}  // вводим поле id списка в mysql и имя списка в mysql для отображения на экране и выборки из них
echo "</select>";
////..........................
echo " </td> "; // закрыть таблицу 
///////////////////////////////////////////////////////////////////////

//echo " <td id='pole_null' ><input type='submit' name='update'  id='pole_button' value='обновить' > </td>" ;

$dater = $row['date']  ;


$dater=date("d.m.Y",strtotime( $dater ));

echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='field_quant12_40px'  name='quantity' value=".$row['quantity']            .">   </td>";
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='field_vers_syst40px'  name='vers_syst' value=".$row['vers_syst']           .">   </td>";
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='algoritm' value=".$row['algoritm']            .">   </td>";
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='field_note12_100px'  name='note_b' value='".$row['note_b']              ."'>   </td>";
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='daterr' value=".$dater            .">   </td>";


echo " <td><input id='field_null'  type='submit' name='a'    value='добавить изделие' /></td> " ;

echo "</form>"; // внутренняя форма 
echo "</tr> ";
echo "</table>";
}}



//echo "</form>";

echo "</div>";


////////////////////////////////////////////////////////////////////////////////////











$ser_num_count=$_SESSION['ser_num_count'] ;

$ser_num=$_SESSION['ser_num'] ;


if ($ser_num_count>0) {

echo "<div class='block_inform'>";
echo "<font color = 'white' size 3  ><b>Вы ввели серийноый номер <font color = 'yellow' size = '5'>$ser_num</font> ,который уже существует в базе .</font>";
$_SESSION['ser_num_count'] =0;
echo "</div>";

$id=$_GET['id'];




//usleep(2000000);

//echo "<script> document.location.href='prih_board.php?id=$id'</script>"; 
}

mysql_close();



//echo "<div class='block_menu'>";




//echo "</div>";
?>


<?
echo "</div>";

include "menu.php";
?>