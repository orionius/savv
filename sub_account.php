<?session_start(); function redirect($url){header('Location: '.$url);}  ?>

 <meta charset="windows-1251">








<?
//include "function.php";
//$user=id_user_hash();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }
?>


<head>
<meta charset="windows-1251">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="style.css">

  <link href="/path/to/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />


<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="daterangepicker/moment.js"></script>
  <script src="daterangepicker/daterangepicker.js"></script>

<script src="jquery/jquery.min.js" type="text/javascript"></script>
<script src="jquery/jquery-ui.min.js" type="text/javascript"></script>
<!-- Core files -->
<script src="jquery/alerts/query.alerts.js" type="text/javascript"></script>
<link href="jquery/alerts/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />




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


<?
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////подчиненные данные //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 echo "<div class='datablock_subaccount' id = 'qqq'>";


echo $qqq ;?> <input type="submit" class='btn btn-warning btn-sm' name = "del_check" value="Удалить отмеченные<? echo space(0) ; ?>"><?

$id=$_GET['id'];
$eee=sqlread("SELECT  COUNT(*) as counts FROM account_sub WHERE id_ac_gen= '$id'  ");
$count_str=$eee['counts'];
$rr=sqlread("SELECT * FROM account_gen WHERE id_ac_gen = '$id'");
$shiping_cost=$rr['shiping_cost'];
$nds=$rr['nds'];
?> <script>
function onchang_sub(){  // Для полей списков
var count_str = Number(<? echo $count_str; ?> );
var shiping_cost = Number(<? echo $shiping_cost; ?> );
var nds = Number(<? echo $nds; ?> );
var count = count_str-1 ;
var fullsum =0;
var full_sumnds = 0;

while(count>-1) {

//var shiping_cost = shiping_cost.toFixed(2);


var shiping_cost  =         Number(document.getElementsByName("shiping_cost")[0].value);


var number  =         Number(document.getElementsByName("number[]")[count].value);
var price_sale =      Number(document.getElementsByName("price_sale[]")[count].value);
var priceandship=     price_sale+(shiping_cost/count_str);
var priceandship=     Number(priceandship.toFixed(2));
var sumpriceandship=     Number(number*priceandship);


var sumnds= Number((sumpriceandship*nds/(100+nds)).toFixed(2));

var full_sumnds = sumnds+full_sumnds;
var full_sumnds = full_sumnds;
//var price_sale       =document.getElementById("price_sale_id").value;
//document.getElementById("pole_id").value=222;

document.getElementsByName("priceandship[]")[count].value=priceandship;
document.getElementsByName("sum_string[]")[count].value=sumpriceandship;
document.getElementsByName("nds_string[]")[count].value=sumnds;

var fullsum= sumpriceandship+fullsum;

document.getElementsByName("sum_full_printacc")[0].value=fullsum.toLocaleString() ;


document.getElementsByName("full_sum_nds")[0].value=full_sumnds.toLocaleString() ;




//alert(fullsum);
count = count-1;

//alert(count_str);

}}
</script>
<? 
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

echo space(5)." кол-во <input bgcolor='red'   height='10' type='number' id='pole_quant_add' textarea name='kolvo'   value='1'>   ";

?>   <button name = 'add_product'   value='добавить изделие'       ><div class="fly_comment" data-title="Добавить новое изделие в счет "> <img src="images/galochka-3d.jpg"  width='40' height='20' alt="Зонтик"   style="vertical-align: middle"></div></button> <?
?><!-- <input type='image' name='add_product'  value='добавить изделие'  width='40' height='20' src='images/galochka-3d.jpg' /><?


//echo " <td> <a href='account.php?id=".$id."&idsub=".$id_ac_sub."&del_gen=yes'><img src='images/krest1.png' width='15' height='15' alt='Пример''></a></td> ";  // удаление 



echo "<input visibility : hidden type='text' id='pole_null' textarea name='idgen'   value='$id'  form='home'  >   ";
echo space(0) ; 
?> <!--  <button name = 'save_acc'   value='Сохранить'   form="home"  ><div class="fly_comment" data-title="Сохранить данные счета">  <img src="images/diskette.png"  width='30' height='30' alt="Зонтик"   id = 'button_pic' style="vertical-align: middle"></div></button> -->
 <?
 ?> <!-- <button name = 'recalc'   value='10'  form="home"      ><div class="fly_comment" data-title="перерасчитать счет "> <img src="images/save.png"  width='40' height='30' alt="Зонтик"   id = 'button_pic' style="vertical-align: middle"></div></button> -->
 <?







//...................

$i=1;

$sizefont="style='font: 12px apple-system'";

$rr=sqlread("SELECT * FROM account_gen WHERE id_ac_gen = '$id'");

$nds=$rr['nds'];
$shiping_cost=$rr['shiping_cost'];
///// шапка талицы
$name =  array('П/№ ','Наименование' ,'Алг','Конфиг','Ед','Кол','Цена прайс','Цена прод','+Дост','Сумма','НДС '. $nds.'%') ;
$long =  array(' 60','721         ' ,'102','110','60','42','111','111','111','111','111','111') ;

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  bgcolor='Aquamarine'  width='$ln' id = 'gradient' > <font color='black'   style='font: 12px apple-system'>  <b> $nam</td>";
} echo "</tr> </table>";
/////end////////

$id=$_GET['id'];

$strSQL="SELECT * , (number * price) as sum_string FROM account_sub WHERE id_ac_gen= '$id'  ";
 $rs = mysql_query($strSQL);


$ee=sqlread("SELECT  COUNT(*) as counts FROM account_sub WHERE id_ac_gen= '$id'  ");


echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {


  echo "<form action='account.php?id=$id' method='get' id='MysubForms' >";


   $count_str=$ee['counts'];



$name_equipment=$row['name_equipment'] ;
$unit = $row['unit'] ;
$number = $row['number'] ;
$price = $row['price'] ;
$price_edit = $row['price_edit'] ;
$price_sale = $row['price_sale'] ;

$id_ac_sub = $row['id_ac_sub'] ;

$id_equipment=$row['id_equipment'];
$config=$row['config'];

echo "<td> <input type='checkbox' id= 'chekkbb' name='check_b[]' value='$id_ac_sub' ></td>";










 echo "<input visibility : hidden type='text' id='pole_null' textarea name='id[]'   value='$id'>   ";
  echo "<input visibility : hidden type='text' id='pole_null' textarea name='id_ac_sub[]'   value='$id_ac_sub'>   ";
//echo " <td  'width=0 id='pole_null' >  <b> <input type='hiden' size=1 id='pole_id'  name='id_equipment' value=", $row['id_equipment']  , " '>  </td> "; //  
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_nameac'   style='font: 12px amaze'    > <input bgcolor='red' type='text' id='pole_nameac' textarea name='name_equipment'   value='$name_equipment'>  </td>  ";


//echo " <td> <a href='account.php?id=".$id."&idsub=".$id_ac_sub."&del_gen=yes'><img src='images/krest1.png' width='15' height='15' alt='Пример''></a></td> ";  // удаление 

echo "<td  'width=0 id='pole_pn' bgcolor = 'CadetBlue'>  $i </td>"  ;




$rrr=sqlread("SELECT SUM(quantity) as sum_quantity FROM sales_invoice_sub WHERE id_ac_sub = '$id_ac_sub'");




$sum_quantity=$rrr['sum_quantity'];




$remainder=$number - $sum_quantity;

?> <script>
jAlert('This is a custom alert box', 'Alert Dialog');
</script>
<?


if ($remainder==0) {?><td  'width=0 id='pole_null' ><b>  <input autofocus  type="text"   name="name_equipment[]"  id='pole_nameac_dark' value="<?=$name_equipment;?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'  ></td>  <!-- наименование изделия --> <? }
else {?><td  'width=0 id='pole_null' ><b>  <input autofocus  type="text"   name="name_equipment[]"  id='pole_nameac' value="<?=$name_equipment;?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur(); }'  ></td>  <!-- наименование изделия --> <? }



echo "<td>" ;  


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




 <td  'width=0 id='pole_null' >  <input autofocus type="text" name="config[]"  id='pole_id' value="<?=$config;?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'  ></td>  <!-- конфигурация -->



<td>  

<?
//$id_unit=2;
/////........................список unit
$id_unit= $row['unit'];
$rr=sqlread("SELECT * FROM unit WHERE idunit = '$id_unit'");
$sql = "SELECT * FROM unit  ";
$result_select = mysql_query($sql);
?> <select name="unit[]" id='pole_unit'> <?
//.........

$object->name = $rr['unit'] ;
echo   "<option  selected value=$id_unit   > $object->name   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->idunit' > $object->unit </option> ";}  
echo "</select>";
////..........................


$priseandship= $price_sale+($shiping_cost/$count_str);
?>
</td>  


<!-- <td  'width=0 id='pole_null' >  <input autofocus type="text" name="unit[]"  id='pole_id' value="<?=$unit;?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur() }' ></td>   -->


<td  'width=0 id='pole_null' >  <font color='black'  > <input autofocus type="text" name="number[]"  id='pole_quanti' value="<?=$number;?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur() }' ></td>  <!-- количество по счету -->
<td  'width=0 id='pole_null' >   <font color='DarkSeaGreen'  > <input autofocus type="text" name="price[]"  id='pole_id' value="<?=  number_format($price, 2, ',', ' '); ?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur() }' ></td>   <!-- цена прайса -->


<td  'width=0 id='pole_null' >  <font color='black'  >  <input autofocus type="text" name="price_sale[]"  id='price_sale_id' value="<? echo   $price_sale;  ?>  "  onkeydown='if(event.keyCode==13) { jQuery(this).blur() ; onchang_sub(this); }' > </td>   <!-- цена продажи -->




<td  'width=0 id='pole_null' >  <font color='black'  >  <input autofocus type="text" name="priceandship[]"  id='pole_id' value="<? echo number_format($priseandship, 2, ',', ' ');     ?>  "  onkeydown='if(event.keyCode==13) { jQuery(this).blur() ; }' > </td>   <!-- цена продажи c доставкой  -->




<?
//shiping_cost

//$sum_string=$number*$price_sale;
$id=$_GET['id'];
$rr=sqlread("SELECT * FROM account_gen WHERE id_ac_gen = '$id'");
$nds=$rr['nds'];

$sum_string = $priseandship*$number;//$row['salesum'] ;


//$nds=round($sum_string*$nds/118,2);

$nds=round($sum_string*$nds/(100+$nds),2);
//$nds=$sum_string*($nds/(100+$nds));
//$nds=round($sum_string*18/($nds+100),2);



//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_id'   style='font: 12px amaze'    > <font color='black'  > <b>"   .   $row['unit'] .         "  </td>";
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_id'   style='font: 12px amaze'    > <font color='black'  > <b>"   .   $row['number'] .         "  </td>";
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_ceny'   style='font: 12px amaze'    > <font color='black'  > <b>"   .   $row['price'] .         "  </td>";
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_id'    > <font color='DeepPink'  > <b>"   .   $sum_string.         "  </td>"; // сумма

?> <td  'width=0 id='pole_id' >  <font color='red'  >  <input readonly autofocus type="text" name="sum_string[]"  id='pole_id' value="<?=  number_format($sum_string, 2, ',', ' ');?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'></td>   <!-- сумма строки-->


 <td  'width=0 id='pole_id' >  <font color='DarkGray'  >  <input readonly autofocus type="text" name="nds_string[]"  id='pole_id' value="<?=  number_format($nds, 2, ',', ' ');?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'></td>   <!-- сумма строки-->





<!-- ?> <td  'width=0 id='pole_id' >  <font color='DarkGray'  >  <input readonly autofocus type="text" name="nds_string[]"  id='pole_id' value="<?=  number_format($nds, 2, ',', ' ');?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'></td>   <!-- сумма строки-->



<?



//echo "<td  align='left'  'width=500 bgcolor='white' id='pole_id'    > <font color='lightgray'  > <b>"   .   number_format($nds, 2, ',', ' ') .         "  </td>"; // НДС


//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_id'    > <font color='black'  > <b>"   .   $sum_quantity .         "  </td>"; 
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_id'    > <font color='black'  > <b>"   .   $remainder  .         "  </td>"; // остаток еще не отгружено 



$sum_full = $sum_string+$sum_full ;

$sum_nds = $sum_nds+$nds ;

// echo "</form>";

echo "</tr> ";

$i++;


}}

echo " </table>";





echo "</form>";




echo space(200);
//echo space(200) ."<font color = Navy  style='font: 30px amaze'  > Сумма по счету :".space(20) .$sum_full ."</font >";
// echo "<div class='block_sum' id = 'qqq'>";
echo "<table border=0 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
echo  "<td  align='left' border=0  'width=550 bgcolor=''    > <font color='black'  > <b>  ".space(316)." </td>"; 
echo "<td  align='left' border=0  'width=550 bgcolor=''    > <font color='black'  > <font style='font: 20px apple-system' > <b>  Сумма по счету: </font> </td>"; 

 $sum_full_print=number_format($sum_full, 2, ',', ' ');
//echo "<td  align='right'  'width=100 id='pole_sum'    > <font style='font: 20px apple-system' >   <font color='red'  > <b> "   .   $sum_full_print .         "</font>  </td></tr>"; 

?> 
 <td   id='pole_sum' border=0 >  <font style='font: 20px apple-system' color='red'>    <input  type="text" name="sum_full_printacc" id='pole_id'   value="<?=  $sum_full_print;?>"  '></td> </tr> </font>   <!-- сумма строки-->

<?

$nds=$_SESSION['nds'] ;
//$sum_nds=round((($sum_full*$nds)/($nds+100)),2);



$sum_nds=number_format($sum_nds, 2, ',', ' ');
echo  "<td  align='left' border=0  'width=550 bgcolor=''    > <font color='black'  > <b>  ".space(317)." </td>"; 
echo "<td  align='left' border=0  'width=550 bgcolor=''    > <font color='black'  > <font style='font: 20px apple-system' > </b>  в т.ч. НДС: </font> </td>"; 
//echo "<td  align='right'  'width=100  id='pole_sum'    > <font color='Gray'  > </b>"   .   $sum_nds .         "  </td>"; 
?> 
<td   id='pole_sum' border=0 >  <font style='font: 20px apple-system' color='Gray'>    <input  type="text" name="full_sum_nds" id='pole_id'   value="<?=  $sum_nds;?>"  '></td> </tr> </font>   <!-- сумма строки-->
<?

echo "</tr> </table>";
//echo "</div>";
echo "</div>";