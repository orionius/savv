 <? session_start(); ?>

  <meta charset="windows-1251">


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
    background: #fefcea; /* ��� ������ �������� */
    background: linear-gradient(to top, #808080, #ececec);
      }

    table { 
    /*width: 100%; /* ������ ������� */
    border: 0px double black; /* ����� ������ ������� */
    border-collapse: collapse; /* ���������� ������ ��������� ����� */
   

   }
   th { 
   /* text-align: left; /* ������������ �� ������ ���� */
   /*  background: #ccc; /* ���� ���� ����� */
   /*  padding: 5px; /* ���� ������ ����������� ����� */
   border: 1px solid black; /* ������� ������ ����� */
   }
   td { 
   /*  padding: 5px; /* ���� ������ ����������� ����� */
    border: 1px solid black; /* ������� ������ ����� */
   }












/*-------------------------- �����------------------------------------*/
.super_genblock ,.genblock,.data,.addprodukt 
{
    overflow: hidden; 
    border-radius: 4px;
    box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: cover; /* Firefox 3.6+ */
    -webkit-background-size: cover /* Safari 3.1+ � Chrome 4.0+ */
    -o-background-size: cover; /* Opera 9.6+ */
    background-size: cover; /* ����������� �������� */
    opacity: 0.9; /* �������� ������������ */
    background-size: cover;
  /*  box-shadow: 0 0 20px rgba(0,0,0,0.5); /* ��������� ���� */
}


.super_genblock 
{
    margin:auto;
    position: absolute; /* ���������� ���������������� */
    left:  30px; 
    right: 30px;
    bottom:10px;
    top:   10px; /* ��������� �� �������� ���� */
    background: url(images/laminat.jpg)  no-repeat  center fixed;  background-size: cover;/* ���� ����, ���� � �������� ����������� � ���������� ���� �� ��������� */   
}


       .genblock
     {  
    margin:auto;
    position: absolute; /* ���������� ���������������� */
    left: 20px; /* ��������� �������� �� ������ ���� */
    right: 20px;  
    bottom:10px; 
    top: 70px; /* ��������� �� �������� ���� */
 /*background: url(images/block_fon.jpg)  no-repeat center center fixed;  background-size: cover;/* ���� ����, ���� � �������� ����������� � ���������� ���� �� ��������� */   
 background: rgba(230, 230, 250, 0.3);

                     }   

       .addprodukt
     {  
    margin:auto;
    position: absolute; /* ���������� ���������������� */
    left: 10; /* ��������� �������� �� ������� ���� */
    right: 10; 
    top: 45px; /* ��������� �� �������� ���� */
    height:40px;   
    width:1750; 

background: url(images/bacground.jpg)  no-repeat center center fixed;  background-size: cover;/* ���� ����, ���� � �������� ����������� � ���������� ���� �� ��������� */   
                     }   
    .data
     {  
    margin:auto;
    position: absolute; 
    left: 1%;
    right: 1%; 
    width:1750;
    top: 160px; 
   /* width: 98%;  */
   /*height:650px;*/
    bottom:20;    
    overflow: auto; 
    background: url(images/bacground.jpg)  no-repeat center center fixed;  background-size: cover;/* ���� ����, ���� � �������� ����������� � ���������� ���� �� ��������� */   
                     } 


          .label
     {  
    margin:auto;
    position: absolute; /* ���������� ���������������� */
    left:10;
    right:10;
    top: 10px; /* ��������� �� �������� ���� */
    height:30px;    
    overflow: hidden; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */
    background: linear-gradient(to top, #008080, #ffecec);
    text-align: center;
    border-radius: 4px;
    
    box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ � Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* ����������� �������� */
    opacity: 10; /* �������� ������������ */

                     }  

/*..............����.................................................*/

#pole_find_sern
{
    vertical-align: middle ;
    margin-top:2;
    text-align: left;
    width: 200px; 
    height:35px;  
    font-size: 24px; 
    font-family:'amaze';
    font-weight:bold;
    outline: none;
    border-width :0;    
    padding: 0px 0px;
    text-align: left; 
    border-radius: 8px;

}


#pole_ser, #field_quantity,#pole_date,#field_repair,#field_breaking ,#field_note,#field_status,#pole_client,#pole_serb,#field_sum_repair
{
    text-align: left;
    height:100%;  
    font-size: 14px; 
    font-family:'amaze';
    font-weight:bold;
    outline: none;
    border-width :0;    
    background: url(images/oldpaper.jpg)  no-repeat  center fixed;  background-size: cover ;
}





     #pole_ser
{
    padding: 0px 0px;
    width: 80px; /* ������ ���� � �������� */
    text-align: left;

}
      #pole_serb
{
    padding: 0px 0px;
    width: 80px; /* ������ ���� � �������� */
    text-align: left;
    background: Moccasin;
}  

  #pole_del
{
    padding: 0px 0px;
    width: 20px; /* ������ ���� � �������� */
    text-align: left;

}
     #field_quantity{
    padding: 0px 0px;
    width: 30px; /* ������ ���� � �������� */
    text-align: left;
    text-align: center;
    background: LightCyan;
}

#pole_date {
    padding: 0px 0px;
    width: 120px; /* ������ ���� � �������� */
    font-size: 14px; 
    background: LightCyan;
} 
#pole_client {
    padding: 0px 0px;
    width: 120px; /* ������ ���� � �������� */
    font-size: 14px; 
    background: Moccasin;
} 
#field_breaking {
width: 300px; /* ������ ���� � �������� */
} 
#field_repair {

    width: 300px; /* ������ ���� � �������� */
    height:100%;
    background: Moccasin;
} 

#field_sum_repair {
    text-align: right;
    width: 80px; /* ������ ���� � �������� */
    height:100%;
    background: LightCyan;
} 


#field_note {
width: 300px; /* ������ ���� � �������� */
} 
#field_status {
width: 100px; /* ������ ���� � �������� */
} 
#pole_name {
width: 450px; /* ������ ���� � �������� */
text-align: left;
    height:100%;  
    font-size: 14px; 
    font-family:'amaze';
    font-weight:bold;
    outline: none;
    border-width :1;    
    border:0;
    border-color : #f0f0f0 ;    
} 
/*...........................................................................*/



</style>




<?



include "background.php";
include 'conn.php';

if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }


include 'function.php';
$user=id_user_hash();



echo "<div class='super_genblock'>";
include "menu.php";
echo "<div class='genblock'>";
?><div class='label'>  <font color='Navy' size = 5  > <?  echo '������ ������������ ��������� � ������' ; ?>  </font > </div> <?

//////////////////////////  ������� ///////////////////////////////////////
function reload() {$id=$_GET['id_ret'] ;
    echo "<script> document.location.href='service_list.php?id=$id'</script>"; 
  }

  
///////////////////////���������� ������ ������� �����///////////////////////////////////////////////////
function upd($field) { $id=$_GET['id_ret'];$data=$_GET[$field]; 
sqlread("UPDATE return_board_sub SET    ".$field."= '$data'      WHERE id_ret='$id' ");}
////////////////////////////////////////////////////////////////////////////////////////////////
function upd_stat() { $id=$_GET['id_ret']; $status=$_GET['status']; 
    if ($status=='32')    sqlread("UPDATE return_board_sub SET   status = '$status'  ,date_issued = CURRENT_DATE()    WHERE id_ret='$id' ");
    if ($status<>'32')    sqlread("UPDATE return_board_sub SET   status = '$status'     WHERE id_ret='$id' ");
}
 ////////////////////////////////////////////////////////////////////////////////////////////////   

if (!empty($_GET['status']) )   {  upd_stat();  reload();}
if (!empty($_GET['repaired']) ) {  upd('repaired');reload();}
if (!empty($_GET['note']) )     {  upd('note');    reload();}
if (!empty($_GET['date_ret']) ) {  upd('date_ret');reload();}
if (!empty($_GET['quantity']) ) {  upd('quantity');reload();}
if (!empty($_GET['algoritm']) ) {  upd('algoritm');reload();}
if (!empty($_GET['breaking']) ) {  upd('breaking');reload();}


/////////////////////////////////////�������� ������� �� ��� ������ �����////////////////
if (!empty($_POST['snum_box'])) {
  $snum_box=  $_POST['snum_box'];

  $user=$_SESSION['user']; 


  $strSQL="SELECT *  FROM manufact_board_sub WHERE num_product LIKE '$snum_box' ";
  $rs = mysql_query($strSQL);
     if (!empty ($rs) ) {
     while($row = mysql_fetch_array($rs)) {

$ser_num=   $row['ser_num'];
$idd_board= $row['id_board'];


sqlread("INSERT INTO return_board_sub(id_gen_ret,id_board,status,quantity,ser_n,ser_box,user,date_ret) VALUES ('0','$idd_board','36','1','$ser_num','$snum_box','$user',NOW()) ");

 //alert($idboard);
     }}
  reload();
}
////////////////////////////////������� �������////////////////////////////////////////

if ($_SESSION['user']='21') {
if (!empty($_GET['id']) and  $_GET['ddd']== 'yes') {
 $id= $_GET['id'];

 //alert ($id);
  sqlread ("DELETE FROM return_board_sub WHERE id_ret = '$id' ");
  reload();
}
}

////////////////////////////////find_ser////////////////////////////////////////


if (!empty($_POST['find_ser']) ) {
 $id= $_GET['id'];
 $find_ser= $_POST['find_ser'];
 //alert ($find_ser);

}

////////////////////////////////reset_filtr////////////////////////////////////////

/*
if (!empty($_POST['reset_filtr']) ) {

 $find_ser= '';
 //alert ($find_ser);

}
*/

/////////////////////////////////////�������� ������� ��  ������ �������////////////////
if (!empty($_POST['snum_board'])) {
  $snum_board=  $_POST['snum_board'];
  $idboard=  get_idcat_board_ser($snum_board);
  $user=$_SESSION['user']; 

if ($user=='21') {
  sqlread("INSERT INTO return_board_sub(id_gen_ret,id_board,status,quantity,ser_n,ser_box,user,date_ret) VALUES ('0','$idboard','36','1','$snum_board','','$user',NOW()) ");
}


  reload();
}


///////////////////////////////////////////�����////////////////////////////////////////////
echo "<div class='addprodukt'>";
?><form action = '' method='post'   > <?

?><!-- <input type = text name = 'snum_board'  value = '' placeholder = '��� ����� �����'  onchange='this.form.submit()'  > --> <? echo space(1);
?><!--<input type = text name = 'snum_box'    value = '' placeholder = '��� ����� �������'  onchange='this.form.submit()'  > --> <?

?>
   <img src="images/search.png"  width='40' height='40' alt=""   id = 'button_pic' style="vertical-align: middle"      >  
 
  <input   type='text'  id='pole_find_sern'  name='find_ser'   placeholder = '����� �������'    > 
   <? echo $qqq ;?> <input type="submit" class='btn btn-warning btn-sm' name = "reset_filtr"  value="�������� ������<? echo space(4) ; ?>">

<? echo space(330); ?> 
   <img src="images/add_doc.png"  width='50' height='30' alt="�������� ����� � ������"   id = 'button_pic' style="vertical-align: middle"   onclick=' var qq = "<?  echo $id_ret;?>"; window.open("popup_addservice_list.php?id=" +qq, "modal", "width=950,height=1100,screenX=400,screenY=200"); '   >  
 
</form>
<form action = '' method='post'   > 
  <!--  <? echo $qqq ;?> <input type="submit" class='btn btn-warning btn-sm' name = "reset_filtr"  value="�����<? echo space(4) ; ?>"> -->
</form>

 </div></div >
<?


//////////////////////////////////////////������ ������������ //////////////////////////////////

echo "<div class='data'>";


//alert(phpinfo());


///// ����� ������
$name =  array('����','������','������������ �������','������' ,'��� ������','� ����','���','�������','������','���� ���') ;
$long =  array('142px  ','120px  ','450px',' 100px','120px','80px','30px','300px','300px','80px') ;
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  bgcolor='Aquamarine'  width='$ln' id = 'gradient' > <font color='black'   style='font: 12px apple-system'>  <b> $nam</td>";
} echo "</tr> </table>";
/////end////////

$strSQL="SELECT *  FROM return_board_sub ORDER BY id_ret DESC ";

if (!empty($find_ser) ) 
{ 
   $find_ser=   trim($find_ser, "\x00..\x1F");
   $strSQL="SELECT *  FROM return_board_sub WHERE  TRIM(ser_box) LIKE '%$find_ser%'   ORDER BY id_ret DESC  "; 
 }



 $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {

     
      $user=$_SESSION['user']; 
      $ser_n=$row['ser_n'];
      $id_ret=$row['id_ret'];
      $ser_box=$row['ser_box'];
      $id_board=$row['id_board'];
      $status=$row['status'];     
      $quantity=$row['quantity'];      
      $algoritm=$row['algoritm'];
      $breaking=$row['breaking'];      
      $repaired=$row['repaired'];
      $date_ret=$row['date_ret'];
      $client=$row['client'];
      $breaking=$row['breaking'];
      $repaired=$row['repaired'];
      $note=$row['note'];
      $date_issued=$row['date_issued'];
      $sum_repair=$row['sum_repair'];
      
      $bgcolor="bgcolor='white'";
      $name_statboard= name_statboard_id( $status);

     if ($status=='4' or $status=='7' or $status=='32' ) {  $bgcolor="background:Aquamarine"; }
     if ($status=='9' )     {  $bgcolor="background:Cornsilk"; }
     if ($status=='33' )    {  $bgcolor="background:Violet"; }
     if ($status=='35' )    {  $bgcolor="background:Gainsboro"; }
     if ($status=='34' )    {  $bgcolor="background:LightCyan"; }
     if ($status=='36' )    {  $bgcolor="background:Violet"; }

        echo "<table border=1 bordercolor='black' height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
        echo "<form action='service_list.php?id=$id_ret' method='get'  >";  


        echo "<td  align='left'  bgcolor='LightYellow' id='pole_del' >  <a href='service_list.php?id=".$id_ret."&ddd=yes'><img src='images/krest1.png' width='20'   height='20' alt='������''></a></td>  "; 
        echo "<td align='center' visibility: hidden   bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='id_ret' value=".   $id_ret            .">   </td>";
        echo "<td   width=20 $bgcolor visibility: hidden  id='pole_ser' > <font color='black' bgcolor='red'  $sizefont1> <b>"   .$id_board .         "  </td>";
        echo "<td align='left'     bgcolor='white' id='pole_date' > <font color='black'  > <b> <input   type='date' size=1 id='pole_date'  name='date_ret'  value=". $date_ret            ." >   </td>";       
        echo "<td align='left'  bgcolor='white' id='pole_client' > <font color='black'  > <b> <input  type='text' size=1 id='pole_client'  name='client'  value=". name_client_id($client)            ." >   </td>";       

     ?> 
     <td   id='pole_name'  > <b> <input     type='text' size=1 id='pole_name'  name='pole_name'  style="<? echo $bgcolor; ?> " value=" <? echo name_board_id($id_board ); ?> " onclick=' var qq = "<?  echo $id_ret;?>"; window.open("popup_service_list.php?id=" +qq, "modal", "width=900,height=800,screenX=400,screenY=100"); '>    </td>
    
    
    <?


 echo "</form>";


    echo "<form action='service_list.php?id=$id_ret' method='get'  >";    
    echo "<input type='hidden' size=1 id='pole_ser'  name='id_ret' value=".   $id_ret            .">  ";

/////........................������ 
echo "<td   'width=20 $bgcolor  id='field_status' >";
$rr=sqlread("SELECT * FROM status_board WHERE id = '$status'");
$sql = "SELECT * FROM status_board ORDER BY name_status ASC ";
$result_select = mysql_query($sql);
?> <select name='status' id='field_status' onchange="this.form.submit()" > <?
$object->name_status = $rr['name_status'] ;echo   "<option  selected value=$status   > $object->name_status   </option>"; // ����� ������� ��������� � ������ $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name_status </option> ";}  
echo "</select>";
////..........................
echo "  </td>";
echo "</form>";
echo "<form action='service_list.php?id=$id_ret' method='get'  >";    




        echo "<input type='hidden' size=1           id='pole_ser'  name='id_ret' value=".   $id_ret            .">  ";
        echo "<td   'width=20 $bgcolor              id='pole_ser' >      <input type='date' size=1 id='pole_date'  name='date_issued' value=".   $date_issued            .">  </td> ";
     //   echo "<td   'width=20 $bgcolor              id='pole_ser' > <font color='black' bgcolor='red'  $sizefont1> <b>"   .$ser_n .         "  </td>";
        echo "<td align='center'  bgcolor='white'   id='pole_serb'  > <font color='black'  > <b> <input type='text'  id='pole_serb'  name='quantity' value='".   $ser_box            ."' onchange='this.form.submit()' >   </td>";
        echo "<td align='center'  bgcolor='white'   id='field_quantity'  > <font color='black'  > <b> <input type='text'  id='field_quantity'  name='quantity' value='".   $quantity            ."' onchange='this.form.submit()' >   </td>";
     //   echo "<td align='center'  bgcolor='white'   id='pole_ser' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='algoritm'value='".  $algoritm  ."' onchange='this.form.submit()' >   </td>";
        echo "<td align='center'  bgcolor='white'   id='field_breaking'  > <font color='black'  > <b> <input type='text' size=1 id='field_breaking'  name='breaking' value='". $breaking          ."' onchange='this.form.submit()' >   </td>";
        echo "<td align='center'  bgcolor='white'   id='field_repair'  > <font color='black'  > <b> <input type='text' size=1 id='field_repair'  name='breaking' value='". $repaired          ."' onchange='this.form.submit()' >   </td>";
        echo "<td align='center'  bgcolor='white'   id='field_sum_repair'  > <font color='black'  > <b> <input type='text' size=1 id='field_sum_repair'  name='breaking' value='". $sum_repair          ."' onchange='this.form.submit()' >   </td>";      

        echo "</form>";
        echo "</tr> </table>";     

    }}


 echo "</div>";


 echo "</div>"; 
///////////////////////////////////////////////////////////////////////////////////////////////
echo "</div>"; 


?>
</body>