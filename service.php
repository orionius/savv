
 <meta charset="windows-1251">
<?
session_start();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }
?>

<style>

                           .gradient {
  background: #466368;
  background: -webkit-linear-gradient(#FFF8DC, #DEB887);
  background:    -moz-linear-gradient(#FFF8DC, #DEB887);
  background:         linear-gradient(#FFF8DC, #DEB887);
  background: -moz-linear-gradient(top, #e2e2e2 0%, #dbdbdb 50%, #d1d1d1 51%, #fefefe 100%)   no-repeat; 
   
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
     opacity: 10; /* Значение прозрачности */


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


                             #pole_id {

    width: 55px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 
                             #pole_date {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 

                                #pole_null {

    width: 0px; /* Ширина поля в пикселах */
    font-size: 0px; 
    text-align: center;
    font-color:rgba(0,0,0,0);


   } 
                             #pole_ceny {

    width: 55px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 
                                #pole_name {

    width: 200px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
    

   } 
                                  #pole_note{

    width: 300px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   }  
                                  #pole_note_top{

    width: 665px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   }  
                                     #pole_spisok_client{

    width: 200px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   }  


                                    #pole_idprih {

    width: 50px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
   }  

    .top_inf
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 0; /* Положение элемента от правого края */
    top: 60px; /* Положение от верхнего края */
    width: 1800px; /* Ширина блока */
   height:160px;    
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

                     } 

     #pole_ser{
    width: 100px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
text-align: center;
}
    .data
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 0; /* Положение элемента от правого края */
    top: 250px; /* Положение от верхнего края */
    width: 1800px; /* Ширина блока */
   height:550px;    
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

     #pole_ser{
    width: 100px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
text-align: center;
}

       .menu
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 0; /* Положение элемента от правого края */
    top: 280px; /* Положение от верхнего края */
    width: 50%; /* Ширина блока */
   height:50%;    
    padding: 5px; /* Поля вокруг текста */
    background: red; /* Цвет фона */ 
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

     #pole_ser{
    width: 100px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
text-align: center;
}
                                  

</style>

<?

 session_start();
// var a = 1;

include "background.php";
include 'conn.php';
include 'function.php';
$user=id_user_hash();
//include 'error_visible.php';
$user= $_SESSION['user'] ;
include "menu.php";
/////////////////////////////// ////////////////////////////////////////////
///////////////////////////////Добавить  изделие в расход по серийному номеру /////////////////////////////
if( ( !empty($_GET['ser_boxs']) and  strlen ($_GET['ser_boxs']) >2) or (( !empty($_GET['ser_nums']) and  strlen ($_GET['ser_nums']) >2)) ){


$id=$_GET['id'];
$id_board=$_GET['id_board'];
$_SESSION['id_board']=$id_board; 

//$ser_box=$_GET['ser_box'];
$serbox=$_GET['ser_boxs'];


if(!empty($_GET['ser_nums']))  {  $ser_num=$_GET['ser_nums'] ;}                
if(!empty($serbox))  {  $ser_num=get_ser_board_nbox($serbox) ;}       

$user=$_SESSION['user']; 

$idcatbrd= get_idcat_board_ser($ser_num);
 $_SESSION["id_board"]= $idcatbrd;

 if(!empty($idcatbrd)) {

//$ser_n=get_ser_board_nbox($_GET['ser_num']);

$dates=date(Y.m.d);

if (!empty($idcatbrd)) { $qqq=sqlread("INSERT INTO return_board_sub(id_board,id_gen_ret,ser_n,ser_box,user,date_ret,quantity)  VALUES ('$idcatbrd','$id','$ser_num','$serbox','$user','$dates','1')");} else { echo "<div class='menu'>  ggg    </div>"; sleep ( 10 );}

}

echo "<script> document.location.href='service.php?id=$id'</script>";     
}




///////////////////////////////Удаляем накладную полностью  ////////////////////////////////////////////

if (!empty( $_GET['del_gen']) and  $_GET['del_gen'] =='yes') {

 $id= $_GET['id'];

sqlread("DELETE FROM return_board_sub  WHERE id_gen_ret  = '$id' ");
sqlread("DELETE FROM return_board_gen  WHERE id_ret_gen  = '$id' ");
//header("Location: journal_board_prih.php");  

echo "<script> document.location.href='journal_service.php'</script>"; 
}

///////////////////////////////Удаляем строчку  ////////////////////////////////////////////
if (!empty($_GET['del_current']) ) {
$del_id= $_GET['del_current'];
$id= $_GET['id'];


sqlread("DELETE  FROM return_board_sub where id_ret ='$del_id'  ");// удаляем позиции

echo "<script> document.location.href='service.php?id=$id'</script>";   
}

///////////////////////////////Новая приходная в сервис ////////////////////////////////////////////
if (!empty($_GET['id']) and $_GET['id']== "new" ) {
$user=$_SESSION['user']; 



sqlread("INSERT INTO return_board_gen(user,date_ret)  VALUES ('$user',NOW())");
$row=sqlread("SELECT * FROM return_board_gen WHERE user  = '$user'  ORDER BY id_ret_gen DESC LIMIT 1 ");
$id=$row['id_ret_gen'];

echo "<script> document.location.href='service.php?id=$id'</script>";    
}
////////////////Вносим данные в  подчиненую//////////////////////////////////


//if ( !empty($_GET['ser_num']) ) {


if (!empty($_GET['idcat'] )) {

  $status=        $_GET['status'] ;  
  $id_prih_sub=   $_GET['idcat'] ;  
  $ser_num=       $_GET['ser_num'] ;
  $num_product=   $_GET['num_product'] ;
 
  $quantity=      $_GET['quantity'] ;
  $vers_syst=     $_GET['vers_syst'] ;  
  $algoritm=      $_GET['algoritm'] ;
  $note_b=        $_GET['note_b'] ;
  $idGEN=         $_GET['id'] ;
  $dater=         $_GET['daterr'] ;

$dater=date("Y.m.d",strtotime( $dater ));

//echo "  $id_prih_sub";


 //echo "<script>alert('У вас ". $dater." ');</script>";
 
  $qq=sqlread("UPDATE return_board_sub SET status = '$status'  ,ser_n='$ser_num',ser_box='$num_product' ,quantity='$quantity' ,vers_syst='$vers_syst' ,algoritm='$algoritm',note='$note_b' , date_ret= '$dater'  WHERE id_ret = '$id_prih_sub' "); 


//$qq=sqlread("UPDATE manufact_board_sub SET ser_num='$ser_num' WHERE id_prih_sub = '$id_prih_sub' "); 


echo "<script> document.location.href='service.php?id=$idGEN'</script>"; 

//header("Location: prih_board.php?id=$idGEN");     
} 
//////////////////////////////////////////////////////////////////////////////////

if ( !empty($_GET['dater']) ) {
  $dater=         $_GET['dater'] ;
  $id=         $_GET['id'] ;


$dater=date("Y.m.d",strtotime( $dater ));

  $qq=sqlread("UPDATE return_board_gen SET date_ret='$dater'  WHERE id_ret_gen = '$id' "); 
}

//////////////////////////////////////////////////////////////////////////////////////////
if (!empty($_GET['id']) and  is_numeric($_GET['id']) ) {    $id=$_GET['id'] ; }
///////////////////////////////Добавить новое изделие в прих /////////////////////////////
if ( !empty($_GET['id_board']) ) {

$id_board=$_GET['id_board'];
$ser_num=$_GET['ser_num'];

$_SESSION['id_board']=$id_board; 
$user=$_SESSION['user']; 


sqlread("INSERT INTO return_board_sub(id_board,id_gen_ret,ser_n,user,date_ret,quantity)  VALUES ('$id_board','$id','$ser_num','$user',NOW(),'1')");
header("Location: service.php?id=$id");     
echo "<script> document.location.href='service.php?id=$id'</script>"; 
}


///////////////////////////////Шапка ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<div class='top_inf'>";
echo "<form action='service.php?id=$id' method='GET'  >";



echo "Накладная принятых в сервис плат № <input bgcolor='red' type='text' id='pole_idprih' textarea name='id'   value='$id'>   ";

$row= sqlread ("SELECT * FROM  return_board_gen  WHERE  id_ret_gen ='$id' ");

//echo " От ".date("d.m.Y",strtotime($row['datetime'] ));  

//echo "<br>Примечание: " .$row[note]  ;


$dater=date("d.m.Y",strtotime($row['date_ret'] ));




echo "Дата накладной <input bgcolor='red' type='text' id='pole_date' textarea name='dater'   value='$dater'>   ";


echo space(200)." Удалить накладную полностью  <a href='service.php?id=".$id."&del_gen=yes'><img src='images/delete.png' width='20' height='20' alt='Пример''></a> ";  // удаление наклаждной

/* echo space(260); ?><input name='delete_full' type='submit' id = 'button' value='Удалить накладную' onclick="return confirm('Вы точно хотите удалить накладную полностью ?')"><? --> */ 
$note = $row['note'] ;

echo "<br> Примечание <input bgcolor='red' type='text' id='pole_note'textarea name='note'   value='$note'> </b> <input autofocus type='submit' value='Обработать' /> " ;




echo "</form>";

echo "<form action='service.php?id=$id' method='GET'  >"; echo "<input color = '#f0f0f0' bgcolor='' type='text' id='pole_null' textarea name='id'   value='$id'>   ";
$id_board =0;
/////........................список 
if (!empty($_SESSION['id_board'])) { $id_board= $_SESSION['id_board'];}
$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board'");
$sql = "SELECT * FROM cat_brd_prod ORDER BY name_product ASC ";
$result_select = mysql_query($sql);

?> <select name='id_board' id='' > <?
$object->name_product = $rr['name_product'] ;

echo   "<option  selected value=$id_board   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select>";
////..........................

?>



<?
echo " <input type='submit' name='add_product'   value='добавить изделие' /> " ;
echo "</form>";


echo "<form action='service.php?id=$id' method='GET'  >";
echo "<input bgcolor='' type='text' id='pole_null' textarea name='id'   value='$id'>   ";
echo " <input type='text' autofocus name='ser_nums'  placeholder='Сер номер'  value='' /> " ;
echo " <input type='text'  name='ser_boxs'  placeholder='Номер коробки'  value='' /> " ;
echo " <input type='submit' name='add_product'   value='добавить изделие' /> " ;

echo "</form>";

echo "</div>";






//////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////

 //echo "<form action='prih_board.php?id=$id' method='get'  >";

echo "<div class='data'>";

$sizefont="style='font: 12px apple-system'";














 echo "<form action='service.php?id=$id' method='get'  >";
echo "<input type='submit' name='del_check'   value='Удалить' > " ;
?>
<input type="button" id='buttoninput'  value="Выделить все" onclick="check(document.getElementsByClassName('list'),1)">
<input type="button" id='buttoninput'  value="Снять выделение" onclick="check(document.getElementsByClassName('list'),0)">
<?
///// шапка талицы
$name =  array('id ','Наименование','Сер номер'  ,'Номер изделия ','Статус','Кол-во','Версия сис','Алгоритм','Примечание') ;
$long =  array(' 95','201         ','100         ','177 '         ,'98'    ,'100'    ,'100'        ,'100'      ,'300') ;
 
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' bgcolor='Chocolate' > <font color='black'   style='font: 12px apple-system'> <b> $nam</td>";
} echo "</tr> </table>";
/////end////////
//echo "</form>";



$strSQL="SELECT *  FROM return_board_sub WHERE id_gen_ret= '$id'  ";
 $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
 echo "<form action='service.php?id=$id' method='get' id='MyForms'  >";




echo " <td id='pole_null' ><input color = '#f0f0f0' bgcolor='' type='text' id='pole_null' textarea name='id'   value='$id'>  </td>" ;// id номер приходной накладной 



//echo " <td  'width=0 bgcolor=rgba(0,0,0,0) id='pole_null' > <font color=rgba(0,0,0,0)> <b> <input type='hiden' size=1 id='id'  name='idcat' value='". $row['id_prih_sub']  . " '>  </td> "; //  для занесения в базу данных по этому адресу

$idprih=$row['id_ret'] ;


echo "  <td  align='left'  'width=500 bgcolor='LightYellow' id='pole_del' >  <a href='service.php?id=".$id."&del_current=".$idprih."'><img src='images/delete.png' width='11'
  height='11' alt='Пример''></a></td>  ";

echo "<td width=20 bgcolor='LightGrey' $sizefont><input type='checkbox' id='pole_checkbox' name='id_prih_sub[]' value=" .  $row['id_ret']  ."> </td> ";
echo " <td  'width=0  >  <input type='hiden' size=1 id='pole_id'  name='idcat' value=". $row['id_ret']  . " >  </td> "; //  для занесения в базу данных по этому id

//echo "<td width=65 bgcolor='white' style='font: 14px arial' ><button type='submit' name='del_current' value=".  $row['id_prih_sub'] .">Удалить</button></td>";  //кнопка 
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_name' > <font color='black'  > <input type='submit' name='del_current'   value='".$row['id_prih_sub'] ."' >Удалить </td>";
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_name' > <font color='black'  > <input type='submit' name='del_current'   value='".'yes' ."' >Удалить </td>";



//echo "<td  'width=40 bgcolor='white' id='pole_id' > <font color='black'  > <b>"   .  $row['id_prih_sub']  .         "  </td>";
$name_b= name_board_id($row['id_board']) ;
echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_name' > <font color='black'  > <b>"   .  $name_b .         "  </td>";
echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='ser_num' value=".$row['ser_n']            .">  </td>  ";
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='num_product' value=".$row['ser_box']         ."> </td>";







echo " <td id='pole_null' ><input type='submit' name='update'  id='pole_button' value='обновить' > </td>" ;

$dater = $row['date_ret']  ;


$dater=date("d.m.Y",strtotime( $dater ));
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='status'   value=". $row['status']            .">   </td>";
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='quantity' value=". $row['quantity']            .">   </td>";
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='vers_syst'value=". $row['vers_syst']           .">   </td>";
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='algoritm' value=". $row['algoritm']            .">   </td>";
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_note'  name='note_b'  value='".$row['note']              ."'>   </td>";
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_date'  name='daterr'  value=". $dater            .">   </td>";




echo "</form>"; // внутренняя форма 
echo "</tr> ";
echo "</table>";
}}



//echo "</form>";

echo "</div";
echo "</div";

////////////////////////////////////////////////////////////////////////////////////




?>
