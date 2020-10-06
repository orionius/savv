<?session_start(); ?>




<head>

<meta charset="windows-1251">
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
 #gradient {
  background: #fefcea; /* Для старых браузров */
  background: linear-gradient(to top, #808080, #ececec);
    }
table {
border-collapse: collapse; /*убираем пустые промежутки между ячейками*/
border: 1px solid grey; /*устанавливаем для таблицы внешнюю границу серого цвета толщиной 1px*/
border-collapse: collapse ;
                     box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
}
table { 
    width: 100%; /* Ширина таблицы */
    border: 0px double black; /* Рамка вокруг таблицы */
    border-collapse: collapse; /* Отображать только одинарные линии */
   }
   th { 
   /* text-align: left; /* Выравнивание по левому краю */
   /*  background: #ccc; /* Цвет фона ячеек */
   /*  padding: 5px; /* Поля вокруг содержимого ячеек */
   /*  border: 1px solid black; /* Граница вокруг ячеек */
   }
   td { 
   /*  padding: 5px; /* Поля вокруг содержимого ячеек */
   /*  border: 1px solid black; /* Граница вокруг ячеек */
   }
/* -------------------поля---------------------------------------*/

#pole_name,#pole_ser,#pole_status,#breakdown,#pole_date ,#quantity,#breakdown
 {
    margin-top:10px;

 
    height:40px;  
    font-size: 25px; 
    font-family:'amaze';
    font-weight:bold;
    outline: none;
    border-width :1;    
    border:0;
    border-color : #f0f0f0 ;  
    background:SkyBlue;  
    border-radius: 10px ;
} 

#pole_name {
    margin-top:10px;
    margin-right: 3%; /* Отступ справа */
    margin-left: 3%; /* Отступ слева */
    width:90%;

} 
#pole_ser {
    margin-top:10px;
    margin-right: 3%; /* Отступ справа */
    margin-left: 3%; /* Отступ слева */
    width:250px;

} 
#pole_status {

    width:350px;

} 
#breakdown {
    margin-left: 3%; /* Отступ слева */
    width:90%;
    height:100px;  

} 
#quantity {

width:100px;
height:40px;  
text-align: center;
} 


#pole_date {

    width:200px;

} 



/*..............Блоки.................................................*/
.super_genblock
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 1%; 
      right:1%;

    top: 5px; /* Положение от верхнего края */
  
  bottom:2%;
   

overflow: auto; 

 background: url(images/laminat.jpg)  no-repeat center center fixed;  background-size: cover;
 border-radius: 20px ;

background: rgba(200, 200, 200, 0.2); 
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
    background-size: cover;
                     }  
.genblock
{
    text-align: left;
    height:100%;  
    font-size: 14px; 
    font-family:'amaze';
    font-weight:bold;
    outline: none;
    border-width :1;    
    border:0;
    border-color : #f0f0f0 ;    
    background: url(images/oldpaper.jpg)  no-repeat  center fixed;  background-size: cover ;
}

     .genblock
{
    padding: 0px 0px;
    width: 80px; /* Ширина поля в пикселах */
    text-align: left;

}

    .headname {
    margin-top: 1%;
    margin-right: 1%; /* Отступ справа */
    margin-left: 2%; /* Отступ слева */
width:95%;
    height:200px;  
    font-size: 25px; 
    font-family:'amaze';
    font-weight:bold;
    outline: none;
    border-width :1;    
    border:0;
    border-color : #f0f0f0 ;  
    background:LightYellow;  
    border-radius: 10px ;


}
.status_block {
    margin-top: 1%;
margin-right: 1%; /* Отступ справа */
margin-left: 2%; /* Отступ слева */
width:95%;
height:60px;  
font-size: 25px; 
font-family:'amaze';
font-weight:bold;
outline: none;
border-width :1;    
border:0;
border-color : #f0f0f0 ;  
background:LightYellow;  
border-radius: 10px ;


}
.data_block {

    margin-top:10px;
    margin-bottom:5%;


margin-right: 1%; /* Отступ справа */
margin-left: 2%; /* Отступ слева */
width:95%;
height:500px;
font-size: 25px; 
font-family:'amaze';
font-weight:bold;
outline: none;
border-width :1;    
border:0;
border-color : #f0f0f0 ;  
background:LightYellow;  
border-radius: 10px ;


}
.composition_block {

margin-top:10px;
margin-bottom:5%;


margin-right: 1%; /* Отступ справа */
margin-left: 2%; /* Отступ слева */
width:95%;
height:300px;
font-size: 25px; 
font-family:'amaze';
font-weight:bold;
outline: none;
border-width :1;    
border:0;
border-color : #f0f0f0 ;  
background:LightYellow;  
border-radius: 10px ;


}
</style>

<?
include "background.php";
include 'conn.php';
include 'function.php';
$user=id_user_hash();
$user=$_SESSION['user']; 




/////////////// ser_box ///////////////////
if(!empty($_POST['ser_box'])) {
  $ser_box=  $_POST['ser_box'];
if(!empty($_POST['id'])) {

  goto a;
}
  $ser_box = trim($ser_box, "\x00..\x1F");


$row=sqlread("SELECT COUNT(*) AS count FROM give_board_sub WHERE TRIM(ser_num_box) LIKE '$ser_box' ");

if ($row['count']>0) {

 

$ee=sqlread("SELECT * FROM give_board_sub WHERE TRIM(ser_num_box) LIKE '$ser_box' ");
$client=$ee['client'];
//$id_board=$ee['product'];

$www=sqlread("SELECT * FROM manufact_board_sub WHERE TRIM(num_product) LIKE '$ser_box' ");
$id_gen_manuf=$www['id_gen_manuf'];
$wwwe=sqlread("SELECT * FROM manufact_board_gen WHERE id_prih_gen= '$id_gen_manuf' ");
$id_product=$wwwe['id_product'];

sqlread("INSERT INTO return_board_sub(ser_box,date_ret,user,client,id_board,status,quantity) VALUES  ('$ser_box',NOW() ,'$user','$client','$id_product','36','1')");
} else {
  
  sqlread("INSERT INTO return_board_sub(ser_box,date_ret,user,client,id_board,status,quantity) VALUES  ('$ser_box',NOW() ,'$user','$client','$id_product','36','1')");
  
  alert("Продукт не продвался");}


$row=sqlread("SELECT MAX(id_ret) as maxid FROM return_board_sub WHERE user = '$user' ");
$maxid=$row['maxid'];


$strSQL="SELECT *  FROM manufact_board_sub WHERE TRIM(num_product) LIKE '$ser_box' ";
$rs = mysql_query($strSQL);
   if (!empty ($rs) ) {
   while($row = mysql_fetch_array($rs)) {
    $ser_num=   $row['ser_num'];
    $id_board= $row['id_board'];

sqlread("INSERT INTO return_board_composition(quantity,sern_box,id_ret_board_sub,id_board,sern_board,user,date) VALUES ('1','$ser_box','$maxid',$id_board,'$ser_num','$user',NOW()) ");
   }}

a: 
if (!empty($_POST['id']) ) {
  $maxid=  $_POST['id'];



  $row=sqlread("SELECT COUNT(*) AS count FROM give_board_sub WHERE TRIM(ser_num_box) LIKE '$ser_box' ");
  if ($row['count']>0) {
    $www=sqlread("SELECT * FROM manufact_board_sub WHERE TRIM(num_product) LIKE '$ser_box' ");
    $id_gen_manuf=$www['id_gen_manuf'];
    $wwwe=sqlread("SELECT * FROM manufact_board_gen WHERE id_prih_gen= '$id_gen_manuf' ");
    $id_product=$wwwe['id_product'];

  sqlread("UPDATE return_board_sub SET id_board = '$id_product' WHERE id_ret = '$maxid' ");

  }
  sqlread("UPDATE return_board_sub SET ser_box = '$ser_box' WHERE id_ret = '$maxid' ");
}


echo "<script> document.location.href='popup_addservice_list.php?id=$maxid';</script>"; 
}



//........................................


/////////////// client ///////////////////
if(!empty($_POST['client'])) {
  $id=      $_POST['id'];
  $client=  $_POST['client'];
if(!empty($id)) {

sqlread("UPDATE return_board_sub SET client = '$client' WHERE id_ret = '$id' ");

echo "<script> document.location.href='popup_addservice_list.php?id=$id';</script>"; 
}

}
/////////////// algorythm ///////////////////
if(!empty($_POST['algoritm'])) {
    $id=      $_POST['id'];
    $algoritm=  $_POST['algoritm'];
  if(!empty($id)) {
  


  sqlread("UPDATE return_board_sub SET algoritm = '$algoritm' WHERE id_ret = '$id'");
  
  echo "<script> document.location.href='popup_addservice_list.php?id=$id';</script>"; 
  }
  
  }
/////////////// status ///////////////////
  if(!empty($_POST['status'])) {
    $id=      $_POST['id'];
    $status=  $_POST['status'];
  if(!empty($id)) {
  sqlread("UPDATE return_board_sub SET status = '$status' WHERE id_ret = '$id'");
  echo "<script> document.location.href='popup_addservice_list.php?id=$id';</script>"; 
  }}

/////////////// quantity ///////////////////
  if(!empty($_POST['quantity']) ) {
    $id=        $_POST['id'];
    $quantity=  $_POST['quantity'];
  if(!empty($id)) {
  sqlread("UPDATE return_board_sub SET quantity = '$quantity' WHERE id_ret = '$id'");
  echo "<script> document.location.href='popup_addservice_list.php?id=$id';</script>"; 
  }}

  /////////////// breakdown ///////////////////
  if(!empty($_POST['breaking']) ) {
    $id=        $_POST['id'];
    $breaking=  $_POST['breaking']; 
  if(!empty($id)) {
  sqlread("UPDATE return_board_sub SET breaking = '$breaking' WHERE id_ret = '$id'");
  echo "<script> document.location.href='popup_addservice_list.php?id=$id';</script>"; 
  }}

  /////////////// product ///////////////////
if(!empty($_POST['product'])) {
  $product=$_POST['product'];




  if(empty($_POST['id'])) {
    sqlread("INSERT INTO return_board_sub(date_ret,user,client,id_board,status,quantity) VALUES  (NOW() ,'$user','$client','$id_product','36','1')");
$row=sqlread("SELECT MAX(id_ret) as maxid FROM return_board_sub WHERE user = '$user' ");
$id=$row['maxid'];
  } else {  $id=        $_POST['id'];}


  sqlread("UPDATE return_board_sub SET id_board = '$product' WHERE id_ret = '$id' ");
  
  echo "<script> document.location.href='popup_addservice_list.php?id=$id';</script>"; 
  
  
  }
   //////////////////////////////// Алгоритм ///////////////////////////// 
//if(!empty($_POST['algoritm'])) {
//alert($_POST['algoritm']);
//}
  //////////////////////////////// Скрипт /////////////////////////////
  $id_ret=$_GET['id'];
  $row=sqlread("SELECT * FROM return_board_sub WHERE id_ret = '$id_ret' ");
  $breaking=       $row['breaking'];
  $repaired=       $row['repaired'];
  
  ?>
  <script>

window.onload = function() {

 var  breaking = '<? echo $breaking; ?>'; 
 var  repaired = '<? echo $repaired; ?>'; 


    document.getElementsByName("breaking")[0].value=breaking;
    document.getElementsByName("repaired")[0].value=repaired;
};

  </script>
  <?
///////////////////////////////////////////// Данные/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$id_ret=$_GET['id'];

?>
  <script>

  function onchanges_gen(){  // Для полей списков

    var id                    = <? echo $id_ret; ?>       ;  
    var idclient              =document.getElementsByName("idclient")[0].value;









$.ajax({
  url: 'ajax_addservice_list.php',
  type:"POST",
  cache:true,
data: { 
  id:                   id, 
  idclient:             idclient ,

},
        success: function(data){
 
   // alert(response);
  // alert(data.value1);
  data =  data.replace(/['"«»]/g, '');



   document.getElementsByName("discount")[0].value=Number(data);
  // alert(result['advert']);
        },
        error: function(){
        alert('Данные не сохранились .');
        }


  })



}

</script>
<?

$row=sqlread("SELECT * FROM return_board_sub WHERE id_ret = '$id_ret' ");

$ser_box=       $row['ser_box'];
$client=        $row['client'];
$id_board=      $row['id_board'];
$algoritm=      $row['algoritm'];
$status=        $row['status'];
$quantity=      $row['quantity'];
$breaking=      $row['breaking'];
$repaired=      $row['repaired'];


echo "<form action='popup_addservice_list.php?id=$id' method='POST' id='home' >";
?>

<div class='headname'>


<b> <input  type='text'  id = 'pole_ser' size=1  name='ser_box'  style="<? echo $bgcolor; ?> " value="" placeholder = 'Введите сер номер' onkeydown='if(event.keyCode==13) {this.form.submit() }' >        
шт<b> <input  type='text'  id = 'quantity' size=1  name='quantity'  style="<? echo $bgcolor; ?> " value="<? echo $quantity; ?> "  onkeydown='if(event.keyCode==13) {this.form.submit() }' > 


<?if(empty($ser_box)) {$ser_box=0;} echo space(30)."<font color = 'Grey' >корпус № " .space(0)."<font color = 'red'  > <b>". $ser_box ."</b><font color = 'black' >  " ?> 
<?
$id_ret=$_GET['id'];
echo "<input visibility : hidden type='text' id='pole_null' textarea id='idgen' name='id'  value='$id_ret'>   ";



?>
</form>
<?
$id_ret=$_GET['id'];
echo "<form action='popup_addservice_list.php?id=$id' method='POST' id='home1' >";
/*
?>
 <b> <input  type='text'  id = 'pole_name' size=1  name='id_product'  style="background:yellow;" value="<? echo name_board_id($id_board );?> " >            
<?
*/

/////........................список оборудование
echo "<td   'width=20  id='pole_name' >";
$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board'");
$sql = "SELECT * FROM cat_brd_prod ";
$result_select = mysql_query($sql);

?> <select name='product' id='pole_name' style='background:yellow;'  onchange="this.form.submit()" > <?
$object->name_product = $rr['name_product'] ;echo   "<option  selected value=$name_product   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select>";
////..........................


/////........................список 
echo "<td   'width=20 $bgcolor id='pole_name' >";
$rr=sqlread("SELECT * FROM client WHERE idclient = '$client'");
$sql = "SELECT * FROM client ";
$result_select = mysql_query($sql);
?> <select name='client' id='pole_name' onchange="this.form.submit()" > <?
$object->client = $rr['company'] ;echo   "<option  selected value=$client   > $object->client   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->idclient' > $object->company </option> ";}  
echo "</select>";
////..........................

echo "<input visibility : hidden type='text' id='pole_null' textarea id='idgen' name='id'  value='$id_ret'>   ";
?> 


</form>


</div>
<?
echo "<form action='popup_addservice_list.php?id=$id' method='POST' id='home2' >";
?>
<div class = 'status_block' >

<b>Статус
<?
/////........................список 
echo "<td   'width=20 $bgcolor id='pole_ser' >";
$rr=sqlread("SELECT * FROM status_board WHERE id = '$status'");
$sql = "SELECT * FROM status_board WHERE grouping = '3' ORDER BY name_status ASC ";
$result_select = mysql_query($sql);

?> <select name='status' id='pole_status' onchange="this.form.submit()" > <?
$object->name_status = $rr['name_status'] ;echo   "<option  selected value=$status   > $object->name_status   </option>"; // здесь текущее положение в списке $idgr


while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name_status </option> ";}  
echo "</select>";
////..........................
?>

Алгоритм
<?
$id_ret=$_GET['id'];


/////........................список 
echo "<td   'width=20 $bgcolor id='pole_name' >";
$rr=sqlread("SELECT * FROM algorythm WHERE id = '$algoritm'    ");
$sql = "SELECT * FROM algorythm ORDER BY name ASC ";
$result_select = mysql_query($sql);
?> <select name='algoritm' id='pole_ser' onchange="this.form.submit()" > <?
$object->algoritm = $rr['name'] ;
echo   "<option  selected value=$algoritm   > $object->algoritm   </option>"; // здесь текущее положение в списке $idgr  > имя текстовое
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name </option> ";}  
echo "</select>";
////..........................

?>
</div>
<div class = 'data_block' >

<?
echo "<input visibility : hidden type='text' id='pole_null' textarea id='idgen' name='id'  value='$id_ret'>   ";      
?>
</form>
<?
echo "<form action='popup_addservice_list.php?id=$id' method='POST' id='home2' >";



?>
<hr>


<br>Поломка <br>
<td   id='breakdown'  > <b> <textarea   id = 'breakdown' size=1  name='breaking'   style="  <? echo $bgcolor; ?> " value="       <? echo $breaking; ?> " onkeydown='if(event.keyCode==13) {this.form.submit() }'>   </textarea>    </td> 

<?

$id_ret=$_GET['id'];
echo "<input visibility : hidden type='text' id='pole_null' textarea id='idgen' name='id'  value='$id_ret'>   ";
?>



</div>
</form>


<div class = 'composition_block' >
111
<?


?>
</div>