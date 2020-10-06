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
    table-layout: fixed;
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
#pole_name {
    margin-top:10px;
    margin-right: 3%; /* Отступ справа */
    margin-left: 3%; /* Отступ слева */
    width:90%;
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

#pole_name_repl{
    margin-top:10px;
    margin-right: 3%; /* Отступ справа */
    margin-left: 3%; /* Отступ слева */
    width:40%;
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
#pole_name_composition{
    overflow:hidden;
    width:80px;
    height:40px;  
    font-size: 25px; 
    font-family:'amaze';
    font-weight:bold;

    background:LightYellow;  
} 
#pole_ser_composition {
    overflow:hidden;
    width:20px;
    height:40px;  
    font-size: 25px; 
    font-family:'amaze';
    font-weight:bold;

    background:LightYellow;  

} 
#pole_krest
{
    overflow:hidden;
    width:10px;
    height:40px;  
    font-size: 25px; 
    font-family:'amaze';
    font-weight:bold;

    background:LightYellow;  

} 
#pole_ser {
    margin-top:10px;
    margin-right: 3%; /* Отступ справа */
    margin-left: 3%; /* Отступ слева */
    width:200px;
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
#pole_sum_repair {
    margin-top:10px;
    margin-right: 3%; /* Отступ справа */
    margin-left: 3%; /* Отступ слева */
    width:200px;
    height:40px;  
    text-align: right;
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


#pole_status {
    margin-top:10px;
    margin-right: 3%; /* Отступ справа */
    margin-left: 3%; /* Отступ слева */
    width:350px;
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
#breakdown {
    margin-top:10px;
    margin-right: 3%; /* Отступ справа */
    margin-left: 3%; /* Отступ слева */
    width:90%;
    height:100px;  
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



#pole_date {
    margin-top:10px;
    margin-right: 3%; /* Отступ справа */
    margin-left: 3%; /* Отступ слева */
    width:200px;
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

    margin-right: 1%; /* Отступ справа */
    margin-left: 1%; /* Отступ слева */
width:95%;
    height:270px;  
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
margin-top:10px;
    margin-right: 1%; /* Отступ справа */
    margin-left: 1%; /* Отступ слева */
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
    margin-right: 1%; /* Отступ справа */
    margin-left: 1%; /* Отступ слева */
width:95%;
    height:240px;  
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
.add_board {
    margin-top:10px;
    margin-right: 1%; /* Отступ справа */
    margin-left: 1%; /* Отступ слева */
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

.sum_repair {
    margin-top:10px;
    margin-right: 1%; /* Отступ справа */
    margin-left: 1%; /* Отступ слева */
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

.composition_block {

    margin-top:10px;
    margin-right: 1%; /* Отступ справа */
    margin-left: 1%; /* Отступ слева */
width:95%;
    height:150px;  
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

.replace_composition_block
{
    margin-top:10px;
    margin-right: 1%; /* Отступ справа */
    margin-left: 1%; /* Отступ слева */
width:95%;
    height:100px;  
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
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }
$id_ret=$_GET['id'];

$row=sqlread("SELECT *  FROM return_board_sub WHERE id_ret = '$id_ret'  ");

?> <div class = 'super_genblock' > 

<div class = 'headname' >
<? 




////////////////////////// Условия ////////////////////////////////////////////////////////////////////////////////////////

    /////////////// akt ///////////////////
    if(!empty($_POST['akt_repair']) ) {
      $id=      $_POST['id'];
   //   alert($_POST['akt_repair']);
//alert(111);


  ?> <script>
   var id = "<?php echo $id;?>"; 
  // alert (id);
  window.open("akt_repair.php?id=" + id + "" , "modal", "width=1200,height=800,screenX=100,screenY=100 ,toolbar=yes, location=yes, directories=no, status=no, menubar=tes, resizable=yes "); 


  
   </script>


   <?
    //echo "<script> document.location.href='akt_repair.php?id=$id';    </script>";  
     }



/////////////// status ///////////////////
if(!empty($_POST['add_board_sern'])) {
    $id=      $_POST['id'];
    $add_board_sern=  $_POST['add_board_sern'];
  if(!empty($id)) {
  sqlread("UPDATE WHERE id_ret = '$id'");
  echo "<script> document.location.href='popup_service_list.php?id=$id';</script>"; 
  }}




  /////////////// ser_box ///////////////////
  if(!empty($_POST['ser_box']) ) {
    $id=        $_POST['id'];
    $ser_box=   $_POST['ser_box']; 
    $user=      $_SESSION['user'];
    $ser_box=   trim($ser_box, "\x00..\x1F");

  if(!empty($id)) {


    $row= sqlread("SELECT * FROM manufact_board_sub WHERE   TRIM(num_product)  LIKE     '$ser_box' ");
    $id_gen_manuf=$row['id_gen_manuf'];
    $row= sqlread("SELECT * FROM manufact_board_gen WHERE   id_prih_gen = '$id_gen_manuf' ");
    $id_product=$row['id_product'];




  //sqlread("UPDATE return_board_sub SET ser_box = '$ser_box',id_board='$id_product' WHERE id_ret = '$id'");






    sqlread("DELETE  FROM return_board_composition WHERE id_ret_board_sub = '$id' ");
    $strSQL="SELECT *  FROM manufact_board_sub WHERE num_product LIKE TRIM('$ser_box') ";




    $rs = mysql_query($strSQL);
       if (!empty ($rs) ) {
       while($row = mysql_fetch_array($rs)) {




    $num_product=   $row['num_product'];
    $ser_num=       $row['ser_num'];
    $id_board=      $row['id_board'];


    sqlread("INSERT INTO return_board_composition(id_ret_board_sub,id_board,sern_box,sern_board,user,quantity) VALUES ( '$id','$id_board','$num_product','$ser_num','$user','1')  " );

       }}



  echo "<script> document.location.href='popup_service_list.php?id=$id';</script>"; 
  }}


/////////////// Удаление платы  ///////////////////
if(!empty($_GET['del_gen'])  && $_GET['del_gen'] == 'yes' ) {
    $id=            $_GET['id'];
    $id_board=      $_GET['id_board'];
sqlread("DELETE FROM return_board_composition WHERE id_ret_board_sub = '$id' AND id_board = '$id_board' ");
  echo "<script> document.location.href='popup_service_list.php?id=$id';</script>"; 
}

/////////////// ser_num_replace ///////////////////
if(!empty($_POST['ser_num_replace'])) {
    $id=      $_POST['id'];
    $ser_num_replace=  $_POST['ser_num_replace']; 
    $ser_num_replace = trim($ser_num_replace, "\x00..\x1F");
         $row=sqlread("SELECT * FROM manufact_board_sub WHERE num_product LIKE TRIM('$ser_num_replace') ");
      $id_board=$row['id_board'];
  if(!empty($id)) {


  sqlread("UPDATE return_board_sub SET ser_num_replace = '$ser_num_replace',id_board_replace='$id_board' WHERE id_ret = '$id'");
  echo "<script> document.location.href='popup_service_list.php?id=$id';</script>"; 
  }}




/////////////// status ///////////////////
if(!empty($_POST['status'])) {
    $id=      $_POST['id'];
    $status=  $_POST['status'];
  if(!empty($id)) {
  sqlread("UPDATE return_board_sub SET status = '$status',date_issued=NOW() WHERE id_ret = '$id'");
  echo "<script> document.location.href='popup_service_list.php?id=$id';</script>"; 
  }}
/////////////// client ///////////////////
if(!empty($_POST['client'])) {
    $id=      $_POST['id'];
    $client=  $_POST['client'];
  if(!empty($id)) {
  sqlread("UPDATE return_board_sub SET client = '$client' WHERE id_ret = '$id'");
  echo "<script> document.location.href='popup_service_list.php?id=$id';</script>"; 
  }}
  /////////////// breaking ///////////////////
  if(!empty($_POST['breaking']) ) {
    $id=        $_POST['id'];
    $breaking=  $_POST['breaking']; 
  if(!empty($id)) {
  sqlread("UPDATE return_board_sub SET breaking = '$breaking' WHERE id_ret = '$id'");
  echo "<script> document.location.href='popup_service_list.php?id=$id';</script>"; 
  }}
  /////////////// repaired ///////////////////
  if(!empty($_POST['repaired']) ) {
    $id=        $_POST['id'];
    $repaired=  $_POST['repaired']; 
  if(!empty($id)) {
  sqlread("UPDATE return_board_sub SET repaired = '$repaired' WHERE id_ret = '$id'");
  echo "<script> document.location.href='popup_service_list.php?id=$id';</script>"; 
  }}
  
  /////////////// date_issued ///////////////////
  if(!empty($_POST['date_issued']) ) {
    $id=        $_POST['id'];
    $date_issued=  $_POST['date_issued']; 
  if(!empty($id)) {
  sqlread("UPDATE return_board_sub SET date_issued = '$date_issued' WHERE id_ret = '$id'");
  echo "<script> document.location.href='popup_service_list.php?id=$id';</script>"; 
  }}
  

  /////////////// date_ret ///////////////////
  if(!empty($_POST['date_ret']) ) {
    $id=        $_POST['id'];
    $date_ret=  $_POST['date_ret']; 
  if(!empty($id)) {
  sqlread("UPDATE return_board_sub SET date_ret = '$date_ret' WHERE id_ret = '$id'");
  echo "<script> document.location.href='popup_service_list.php?id=$id';</script>"; 
  }}
  
  /////////////// sum_repair ///////////////////
  if(!empty($_POST['sum_repair']) ) {
    $id=        $_POST['id'];
    $sum_repair=  $_POST['sum_repair']; 
  if(!empty($id)) {
  sqlread("UPDATE return_board_sub SET sum_repair = '$sum_repair' WHERE id_ret = '$id'");
  echo "<script> document.location.href='popup_service_list.php?id=$id';</script>"; 
  }}

  /////////////////////Скрипты //////////////////////////
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

  
////////////////////////////////////////////Главная ////////////////////////////////////////////////////////////////////////////////
$id=$_GET['id'];
echo "<form action='popup_service_list.php?id=$id' method='POST' id='home' >";
$id_board=              $row['id_board'];
$client=                $row['client'];
$status=                $row['status'];
$ser_num_replace=       $row['ser_num_replace']; // замена
$ser_box=               $row['ser_box'];
$ser_n=                 $row['ser_n'];
$date_ret=              $row['date_ret'];
$vers_syst=             $row['vers_syst'];
$date_issued=           $row['date_issued'];
$id_board_replace=      $row['id_board_replace'];
$sum_repair=            $row['sum_repair'];
$algoritm=              $row['algoritm'];

?>
<td   id='pole_name'  > <b> <input     type='text' size=1 id='pole_name'  name='pole_name'  style="background : yellow; " value=" <? echo name_board_id($id_board ); ?> " >    </td> 
<?




echo "<br>".space(3)." <b> Корпус №: <input   type = 'text' id = 'pole_date' size=1  name='ser_box'  style='$bgcolor' value='$ser_box'  onkeydown='if(event.keyCode==13) {this.form.submit() }' >   ";

echo "".space(3)." <b> Принят: <input   type = 'date' id = 'pole_date' size=1  name='date_ret'  style='$bgcolor' value='$date_ret'  onkeydown='if(event.keyCode==13) {this.form.submit() }' >   ";

/////........................список 
echo "<td   'width=20 $bgcolor id='pole_name' >";
$rr=sqlread("SELECT * FROM client WHERE idclient = '$client'");
$sql = "SELECT * FROM client ORDER BY company ASC ";
$result_select = mysql_query($sql);
?> <select name='client' id='pole_name' onchange="this.form.submit()" > <?
$object->client = $rr['company'] ;echo   "<option  selected value=$client   > $object->client   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->idclient' > $object->company </option> ";}  
echo "</select>";
////..........................


/////........................список 
echo "<td   'width=20 $bgcolor id='pole_ser' >";
$rr=sqlread("SELECT * FROM status_board WHERE id = '$status'");
$sql = "SELECT * FROM status_board ORDER BY name_status ASC ";
$result_select = mysql_query($sql);
?> <select name='status' id='pole_status' onchange="this.form.submit()" > <?
$object->name_status = $rr['name_status'] ;echo   "<option  selected value=$status   > $object->name_status   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name_status </option> ";}  
echo "</select>";
////..........................


echo " <b> <input   type = 'date' id = 'pole_date' size=1  name='date_issued'  style='$bgcolor' value='$date_issued'  onkeydown='if(event.keyCode==13) {this.form.submit() }' >   ";

$rw=sqlread("SELECT * FROM algorythm WHERE id = '$algoritm' ");
$name_algoritm=              $rw['name'];

echo "<br>". space(3)." Алгоритм <b> <input   type = 'text' id = 'pole_date' size=1  name='date_issued'  style='$bgcolor' value='$name_algoritm'  onkeydown='if(event.keyCode==13) {this.form.submit() }' >   ";

?>
<!--
 <input type="submit" class='btn btn-warning btn-sm' name = "akt_repair"  value="АКТ РЕМОНТА<? echo space(4) ; ?>    "  OnClick ='if(event.keyCode==13) {this.form.submit() }'   ><br><p>


  <td border=0 align='left' class='btn btn-warning btn-sm' 'width=500 bgcolor='LightYellow'  >  <a href='#'><img src='images/plus-64.png' width='20' height='20' alt='...'' onclick=' var id = "<?php echo $id;?>";   window.open("akt_repair.php?id=" + id + "" , "modal", "width=1200,height=500,screenX=200,screenY=300 ,toolbar=no, location=no, directories=no, status=no, menubar=no, resizable=no "); '></a> </td>
 -->
 <button name = 'akt_repair'  class='pic' value='10'    > <div class="fly_comment" data-title="Распечатать документ">                            <img src="images/printer.png"  width='50' height='30' alt=""   id = 'button_pic' style="vertical-align: middle">         </div></button>

<?


?> 








</div>




<div class = 'data_block'>



           


  <b> <textarea   id = 'breakdown' size=1  name='breaking'            style="<? echo $bgcolor; ?> "     onkeydown='if(event.keyCode==13) {this.form.submit() }'>   </textarea>   <!-- вносятся даннные из скрипта -->   
  <b> <textarea   id = 'breakdown' size=1  name='repaired'            style="<? echo $bgcolor; ?> "     onkeydown='if(event.keyCode==13) {this.form.submit() }'>   </textarea>     




<? 
$id_ret=$_GET['id'];
echo "<input visibility : hidden type='text' id='pole_null' textarea id='idgen' name='id'  value='$id_ret'>   ";

?>
</form>
<?
    



$id_ret=$_GET['id'];
?>
</div>
<form action='popup_service_list.php?id= <? echo $id ; ?> ' method='POST' id='repair' >

<div class = 'sum_repair'>
<? echo "<input visibility : hidden type='text' id='pole_null' textarea id='idgen' name='id'  value='$id_ret'>   "; ?> 
<b> Стоимость работ: <? echo space(35) ; ?> <input  type='text'  id = 'pole_sum_repair' size=1  name='sum_repair'   style="<? echo $bgcolor; ?> " value="<? echo $sum_repair;?> "  onkeydown='if(event.keyCode==13) {this.form.submit() }' >       
 </div>
<div class = 'add_board'>
<b> Добавить плату по серийному номеру:<input  type='text'  id = 'pole_ser' size=1  name='add_board_sern'   style="<? echo $bgcolor; ?> " value="<? echo $ser_num_replace;?> "  onkeydown='if(event.keyCode==13) {this.form.submit() }' >       
 </div>
</form>
<? ////////////////////////// Входящие в изделие платы ///////////////////////////// ?>
<div class = 'composition_block' >

<?
$id_ret=$_GET['id'];

    echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";
$id_ret=$_GET['id'];
$strSQL="SELECT *  FROM return_board_composition WHERE id_ret_board_sub='$id_ret' ";
$rs = mysql_query($strSQL);
   if (!empty ($rs) ) {
   while($row = mysql_fetch_array($rs)) {

    $sern_board=$row['sern_board'];
    $id_board=$row['id_board'];   
    $sern_board = trim($sern_board, "\x00..\x1F");
    echo space(40)." <td align='left'  border='1' id='pole_krest'   > <a href='popup_service_list.php?id=".$id_ret."&id_board=$id_board&del_gen=yes'><img src='images/krest1.png' width='20' height='20' alt='Пример''></a> </td>";     
   ?>

   <td align='left'  border='1' id='pole_ser_composition'   > <b>  <? echo $sern_board ; ?> </td>
   <td align='left'  border='1'  id='pole_name_composition' > <b>  <? echo name_board_id($id_board ); ?></td>

   <?

echo "</tr> ";
   }}
echo " </table>";
?>

</div>
<? /////////////////////////////////////// ?> 
<div class= 'status_block' >

<?



  echo space(3); 

 

?>
 <b> Замена на:<input  type='text'  id = 'pole_ser' size=1  name='ser_num_replace'   style="<? echo $bgcolor; ?> " value="<? echo $ser_num_replace;?> "  onkeydown='if(event.keyCode==13) {this.form.submit() }' >       

<b> <input     type='text' size=1 id='pole_name_repl'  name='id_board_replace'  style="background : yellow; " value=" <? echo name_board_id($id_board_replace ); ?> " >  

</div>

<div class= 'replace_composition_block' >

</div>

</div>
</body>
