
 <meta charset="windows-1251">

<?
session_start();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }
?>
<style>


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

    width: 80px; /* Ширина поля в пикселах */
    font-size: 11px; 
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
                                #pole_checkbox {

    width: 20px; /* Ширина поля в пикселах */
    font-size: 11px; 
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
    font-size: 11px; 
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 
                                #pole_name {

    width: 200px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: left;
     font-family:'amaze';
    }
                                #pole_status{

    width: 150px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: left;
     font-family:'amaze';
    
   } 
                                  #pole_note {

    width: 300px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;

   }  
                                    #pole_idprih {

    width: 50px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
   }  

                                  #pole_button{

    width: 80px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   }  

     #pole_ser{
    width: 100px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
text-align: center;
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

                     } 


    .data
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 20; /* Положение элемента от правого края */
    top: 180px; /* Положение от верхнего края */
    width: 1700px; /* Ширина блока */
   height:550px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
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


    .top_inf
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 20; /* Положение элемента от правого края */
    top: 5px; /* Положение от верхнего края */
    width: 1700px; /* Ширина блока */
   height:120px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
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

/////////////////////Удалить полностью накладную/////////////////////////////////
if (!empty( $_GET['del_gen']) and  $_GET['del_gen'] =='yes') {

 $id= $_GET['id'];

sqlread("DELETE FROM prih_elements_sub  WHERE id_prih_sub  = '$id' ");
sqlread("DELETE FROM prih_elements_gen  WHERE id_prih_gen  = '$id' ");
//header("Location: journal_board_prih.php");  

echo "<script> document.location.href='journal_prih_element.php'</script>"; 
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
 
  $qq=sqlread("UPDATE prih_elements_sub SET ser_num='$ser_num',num_product='$num_product', status='$status' ,quantity='$quantity' ,vers_syst='$vers_syst' ,algoritm='$algoritm',note_b='$note_b' , date= '$dater'  WHERE id_prih_sub = '$id_prih_sub' "); 


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
sqlread("DELETE  FROM prih_elements_sub where id_prih_sub ='$value'  ");// удаляем позиции

} 
header("Location: prih_board.php?id=$id");  
}
//////////////////////////////////////////////////////////////////////////////////
// удаляем по нажатию кнопки текущую 
if ( !empty($_GET['del_current'])) {
 $id_prih_sub=   $_GET['del_current'] ;  
   $idGEN=         $_GET['id'] ;

sqlread ("DELETE   FROM prih_elements_sub where id_prih_sub ='$id_prih_sub' ");// удаляем позиции
header("Location: prihod_elements.php?id=$idGEN");  
}
///////////////////////////////Новая приходная ////////////////////////////////////////////
if ( $_GET['id']== "new" ) {
$user=$_SESSION['user']; 



sqlread("INSERT INTO prih_elements_gen(user,datetime)  VALUES ('$user',NOW())");
$row=sqlread("SELECT * FROM prih_elements_gen WHERE user  = '$user'  ORDER BY id_prih_gen DESC LIMIT 1 ");
$id=$row['id_prih_gen'];
//header("Location: prih_board.php?id=$id");     
echo "<script> document.location.href='prih_board.php?id=$id'</script>"; 

}
///////////////////////////////Добавить новое изделие в прих /////////////////////////////
if ( !empty($_GET['add_product']) ) {

$id_board=$_GET['id_board'];
$ser_num=$_GET['ser_num'];

$_SESSION['ser_num'] =$ser_num;

$_SESSION['id_board']=$id_board; 
$user=$_SESSION['user']; 
//echo "<script>alert('Такой серийный номер уже используется ! ');</script>";



$row=sqlread("SELECT SUM(id_prih_sub) AS sum FROM prih_elements_sub  WHERE ser_num = '$ser_num' ");

$_SESSION['ser_num_count'] = $row['sum'] ;

//if ($row['sum'] == 0) {sqlread("INSERT INTO prih_elements_sub(id_element,id_gen_prih,ser_num,user,date)  VALUES ('$id_board','$id','$ser_num','$user',NOW())");} else {echo "<script>alert('Такой серийный номер уже используется ! ');</script>";}

sqlread("INSERT INTO prih_elements_sub(id_element,id_prih_gen,ser_num)  VALUES ('$id_board','$id','$ser_num')");


header("Location: prihod_elements.php?id=$id");     
}

////////////////Вносим данные примечания шапки //////////////////////////////////


if ( !empty($_GET['note']) ) {
  $note=  $_GET['note'] ;
  $id=$_GET['id'] ;
 $_SESSION["idcat_board"];

 //echo "<script>alert('У вас ". $note." ');</script>";
  $qq=sqlread("UPDATE prih_elements_gen SET note='$note'  WHERE id_prih_gen = '$id' "); 

 
header("Location: prih_board.php?id=$id");     
} 

if ( !empty($_GET['note']) ) {
  $dater=         $_GET['dater'] ;
$dater=date("Y.m.d",strtotime( $dater ));

  $qq=sqlread("UPDATE prih_elements_gen SET datetime='$dater'  WHERE id_prih_gen = '$id' "); 
}


///////////////////////////////Шапка ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<div class='top_inf'>";
echo "<form action='prihod_elements.php?id=$id' method='GET'  >";



echo "Приходная  № <input bgcolor='red' type='text' id='pole_idprih' textarea name='id'   value='$id'>   ";

$row= sqlread ("SELECT * FROM  prih_elements_gen  WHERE  id_prih_gen ='$id' ");
$rows= sqlread ("SELECT count(id_prih_sub) as count_manuf FROM  prih_elements_sub  WHERE  id_prih_gen ='$id' ");

//echo " От ".date("d.m.Y",strtotime($row['datetime'] ));  

//echo "<br>Примечание: " .$row[note]  ;





$dater=date("d.m.Y",strtotime($row['datetime'] ));




echo "Дата накладной <input bgcolor='red' type='text' id='pole_date' textarea name='dater'   value='$dater'>   ";


echo space(200)." Удалить накладную полностью  <a href='prihod_elements.php?id=".$id."&del_gen=yes'><img src='images/krest1.png' width='20' height='20' alt='Пример''></a> ";  // удаление наклаждной

/* echo space(260); ?><input name='delete_full' type='submit' id = 'button' value='Удалить накладную' onclick="return confirm('Вы точно хотите удалить накладную полностью ?')"><? --> */ 
$note = $row['note'] ;

echo "<br> Примечание <input bgcolor='red' type='text' id='pole_note'textarea name='note'   value='$note'> </b> <input  type='submit' value='Обработать' /> " ;




echo "</form>";

echo "<form action='prihod_elements.php?id=$id' method='GET'  >"; echo "<input color = '#f0f0f0' bgcolor='' type='text' id='pole_null' textarea name='id'   value='$id'>   ";
/////........................список 
$id_board= $_SESSION['id_board'];
$rr=sqlread("SELECT * FROM cat_element WHERE id_comp = '$id_board'");
$sql = "SELECT * FROM cat_element ORDER BY name_comp ASC ";
$result_select = mysql_query($sql);

?> <select name='id_board' id='' > <?
$object->name_comp = $rr['name_comp'] ;

echo   "<option  selected value=$id_board   > $object->name_comp   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_comp' > $object->name_comp </option> ";}  
echo "</select>";
////..........................

?>



<?

echo " <input type='text' autofocus name='ser_num'  placeholder='Сер номер'  value='' /> " ;
echo " <input type='submit' name='add_product'   value='добавить элемент' /> " ;

echo " Всего элементов:". $rows['count_manuf'];

echo "</form>";


echo "</div>";






//////////////////////////////////////////////////////////////////////Подчиненые данные ////////////

 //echo "<form action='prih_board.php?id=$id' method='get'  >";

echo "<div class='data'>";

$sizefont="style='font: 12px apple-system'";














 echo "<form action='prihod_elements.php?id=$id' method='get'  >";
echo "<input type='submit' name='del_check'   value='Удалить' > " ;
?>
<input type="button" id='buttoninput'  value="Выделить все" onclick="check(document.getElementsByClassName('list'),1)">
<input type="button" id='buttoninput'  value="Снять выделение" onclick="check(document.getElementsByClassName('list'),0)">
<?
///// шапка талицы
$name =  array('id ','Наименование','Сер номер'  ,'Номер изделия ','Кол-во','Статус','','Версия сис','Алгоритм','Примечание') ;
$long =  array(' 136','195        ','100         ','100 '         ,'100','200'    ,'80'    ,'100'        ,'100'      ,'300') ;
 
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' bgcolor='Chocolate' > <font color='black'   style='font: 12px apple-system'> <b> $nam</td>";
} echo "</tr> </table>";
/////end////////
//echo "</form>";



$strSQL="SELECT *  FROM prih_elements_sub WHERE id_prih_gen= '$id' ORDER BY id_prih_sub DESC ";
 $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
 echo "<form action='prihod_elements.php?id=$id' method='get' id='MyForms'  >";




echo " <td id='pole_null' ><input color = '#f0f0f0' bgcolor='' type='text' id='pole_null' textarea name='id'   value='$id'>  </td>" ;// id номер приходной накладной 



//echo " <td  'width=0 bgcolor=rgba(0,0,0,0) id='pole_null' > <font color=rgba(0,0,0,0)> <b> <input type='hiden' size=1 id='id'  name='idcat' value='". $row['id_prih_sub']  . " '>  </td> "; //  для занесения в базу данных по этому адресу

$idprih=$row['id_prih_sub'] ;


echo "  <td  align='left'  'width=500 bgcolor='LightYellow' id='pole_del' >  <a href='prihod_elements.php?id=".$id."&del_current=".$idprih."'><img src='images/krest1.png' width='15'
  height='11' alt='Пример''></a></td>  ";

echo "<td width=20 bgcolor='LightGrey' $sizefont><input type='checkbox' id='pole_checkbox' name='id_prih_sub[]' value=" .  $row['id_prih_sub']  ."> </td> ";
echo " <td  'width=0  >  <input type='hiden' size=1 id='pole_id'  name='idcat' value=". $row['id_prih_sub']  . " >  </td> "; //  для занесения в базу данных по этому id

//echo "<td width=65 bgcolor='white' style='font: 14px arial' ><button type='submit' name='del_current' value=".  $row['id_prih_sub'] .">Удалить</button></td>";  //кнопка 
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_name' > <font color='black'  > <input type='submit' name='del_current'   value='".$row['id_prih_sub'] ."' >Удалить </td>";
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_name' > <font color='black'  > <input type='submit' name='del_current'   value='".'yes' ."' >Удалить </td>";



//echo "<td  'width=40 bgcolor='white' id='pole_id' > <font color='black'  > <b>"   .  $row['id_prih_sub']  .         "  </td>";
$name_b= name_element($row['id_element']) ;
echo "<td  align='left'  width=500 bgcolor='LightYellow' id='pole_name'  > <font color='black'  > <b>"   .  $name_b .         "  </td>";
echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='ser_num' value=".$row['ser_num']            .">  </td>  ";
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='num_product' value=".$row['num_product']         ."> </td>";

echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='quantity' value=".$row['quantity']            .">   </td>";



//////////////////////////поле со списком/////////////////////////////////////////////
echo "<td align='center'  bgcolor='white' > <font color='black'  > ";  // открыть таблицу 
/////........................отобразить текущее положение  
$status= $row['status'] ; $rr=sqlread("SELECT * FROM status_board WHERE id = '$status'");  // определить текущее значение списка
?> <select name='status' id='pole_name'"> <?   //здесь вводим имя для запроса по get  и тип поля для отображения  поля 
$object->name_status = $rr['name_status'] ;  echo   "<option  selected value=$status   > $object->name_status   </option>"; //текущее значение имени поля в $object, отобразить текущее положение в списке value = id  $object = имя поля выше строкой 
//.......................... выборка элемента списка
$sql = "SELECT * FROM status_board ORDER BY name_status ASC ";
$result_select = mysql_query($sql);while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name_status </option> ";}  // вводим поле id списка в mysql и имя списка в mysql для отображения на экране и выборки из них
echo "</select>";
////..........................
echo " </td> "; // закрыть таблицу 
///////////////////////////////////////////////////////////////////////

echo " <td id='pole_null' ><input type='submit' name='update'  id='pole_button' value='обновить' > </td>" ;

$dater = $row['date']  ;


$dater=date("d.m.Y",strtotime( $dater ));


echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='vers_syst' value=".$row['vers_syst']           .">   </td>";
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='algoritm' value=".$row['algoritm']            .">   </td>";
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_note'  name='note_b' value='".$row['note_b']              ."'>   </td>";
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='daterr' value=".$dater            .">   </td>";




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