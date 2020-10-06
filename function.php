<?session_start();






//session_start();

/*

if ($_SESSION['user'] <1 or $_SESSION['user']  >10  ) { $_SESSION['user']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }
*/


function encoding_sql() {
    mysql_query("SET NAMES 'utf8'"); 
    mysql_query("SET CHARACTER SET 'utf8'");
    mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");
    mysql_close($rs);

}

/////////////////////////КОДИРОВКА////////////////////////////////////////////

function cp1251_to_utf8($s)
  {
  if ((mb_detect_encoding($s,'UTF-8,CP1251')) == "WINDOWS-1251")
    {
    $c209 = chr(209); $c208 = chr(208); $c129 = chr(129);
    for($i=0; $i<strlen($s); $i++)
      {
      $c=ord($s[$i]);
      if ($c>=192 and $c<=239) $t.=$c208.chr($c-48);
      elseif ($c>239) $t.=$c209.chr($c-112);
      elseif ($c==184) $t.=$c209.$c209;
      elseif ($c==168)    $t.=$c208.$c129;
      else $t.=$s[$i];
      }
    return $t;
    }
  else
    {
    return $s;
    }
   }

function utf8_to_cp1251($s)
  {
  if ((mb_detect_encoding($s,'UTF-8,CP1251')) == "UTF-8")
    {
    for ($c=0;$c<strlen($s);$c++)
      {
      $i=ord($s[$c]);
      if ($i<=127) $out.=$s[$c];
      if ($byte2)
        {
        $new_c2=($c1&3)*64+($i&63);
        $new_c1=($c1>>2)&5;
        $new_i=$new_c1*256+$new_c2;
        if ($new_i==1025)
          {
          $out_i=168;
          } else {
          if ($new_i==1105)
            {
            $out_i=184;
            } else {
            $out_i=$new_i-848;
            }
          }
        $out.=chr($out_i);
        $byte2=false;
        }
        if (($i>>5)==6)
          {
          $c1=$i;
          $byte2=true;
          }
      }
    return $out;
    }
  else
    {
    return $s;
    }
  }


/////////////////////////////////////////////////////////////////////////////////////

function sqlread($sql) { // обрабатывает строку sql


$rs = mysql_query($sql);
if (!empty($rs) ){ 
  $row = @mysql_fetch_array($rs);
  return $row;}
}


function name_element ($id) { // обрабатывает строку sql
$row= sqlread("SELECT * FROM cat_element WHERE id_comp = '$id'  ");
return $row['name_comp'];}


function name_typeorder_id($id) { // обрабатывает строку sql
$row= sqlread("SELECT * FROM type_zakaz WHERE id = '$id'  ");
return $row['name_type'];}

function price_board_id($id) { // обрабатывает строку sql
$row= sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id'  ");
return $row['price_rub'];}
////////////////////алгоритм по id//////////////////////////





function name_algo_id($id) { // обрабатывает строку sql
    $row= sqlread("SELECT * FROM algorythm WHERE id = '$id'  ");
    return $row['name'];}

    function config_algo_id($id) { // обрабатывает строку sql
        $row= sqlread("SELECT * FROM algorythm WHERE id = '$id'  ");
        return $row['config'];}

/////////////////// пользователь///////////////////////////
function id_user_hash() { // обрабатывает строку sql
    $hash=  $_SESSION['hashses']; 
    if ( empty($hash)  )  {  echo "<script> document.location.href='index.php?reset=1'</script>"; } 
    $row= sqlread("SELECT * FROM user WHERE hashsession = '$hash'  ");
    $iduser=        $row['id_user'];
    $hashsession=   $row['hashsession'];

 if  ($iduser < 1 || empty($iduser)  ) {  echo "<script> document.location.href='index.php?reset=1'</script>"; } 

    return $iduser ;}





function name_user_id($id) { // обрабатывает строку sql
    $row= sqlread("SELECT * FROM user WHERE id_user = '$id'  ");
    return $row['name'];}

function surname_user_id($id) { // обрабатывает строку sql
$row= sqlread("SELECT * FROM user WHERE id_user = '$id'  ");
return $row['surname'];}
////////////////заказы///////////////////////////////////////
function name_status_zakaz_id($id) { // обрабатывает строку sql
$row= sqlread("SELECT * FROM status_zakaz WHERE id_stat = '$id'  ");
return $row['name_status'];}

function name_type_zakaz_id($id) { // обрабатывает строку sql
$row= sqlread("SELECT * FROM type_zakaz WHERE id = '$id'  ");
return $row['name_type'];}




////////////////////////продукт //////////////////////////////////////

//////////////////////////////////////////////////////////
function name_courier_id($id) { // обрабатывает строку sql
$row= sqlread("SELECT * FROM courier WHERE id_cur = '$id'  ");
return $row['name'];
}
//////////// клиент
function name_client_id($id) { // обрабатывает строку sql
$row= sqlread("SELECT * FROM client WHERE idclient = '$id'  ");
return $row['company'];}

function full_name_client_id($id) { // обрабатывает строку sql
$row= sqlread("SELECT * FROM client WHERE idclient = '$id'  ");
return $row['full_name'];}

function form_company_id($id) { // обрабатывает строку sql
$row= sqlread("SELECT * FROM form_company WHERE id = '$id'  ");
return $row['form'];}

function email_company_id($id) { // обрабатывает строку sql
    $row= sqlread("SELECT * FROM client WHERE idclient = '$id'  ");
    return $row['e_mail'];}
    

//////////////////////
function name_statboard_id($id) { // обрабатывает строку sql

$row= sqlread("SELECT * FROM status_board WHERE id = '$id'  ");
return $row['name_status'];
}
/////////////////////СЧЕТ ////////////////////////////////////////

function acc_sum_pay($idaccgen) { // сумма оплат по счету
$row= sqlread("SELECT SUM(pay) as sumpay  FROM account_pay WHERE id_ac_gen = '$idaccgen'  ");
return $row['sumpay'];
}
//....

    function  status_ship($n) {

        $row= sqlread("SELECT * FROM acc_shipped WHERE id = '$n'  ");
        return $row['name'];

    }

/////////////////////Группы каталога/////////////////////////////

function name_group_id($id) { // обрабатывает строку sql
    $row=sqlread("SELECT * FROM  group_board  WHERE id= '$id' ");
    return $row['namegroup'];
    }



///////////////////////BOARD ////////////////////////////////////////////
function name_board_id($id) { // обрабатывает строку sql
    $row= sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id'  ");
    return $row['name_product'];}
    
function get_idcat_board_ser($ser) { // обрабатывает строку sql
$row=sqlread("SELECT * FROM  manufact_board_sub  WHERE ser_num LIKE '$ser' ");
return $row['id_board'];
}

function get_ser_board_nbox($n_box) { // обрабатывает строку sql
$row=sqlread("SELECT * FROM  manufact_board_sub  WHERE num_product LIKE '$n_box'  ORDER BY id_prih_sub DESC ");
return $row['ser_num'];
}
function get_name_board_nbox($n_box) { // обрабатывает строку sql
    $row=sqlread("SELECT * FROM  manufact_board_sub  WHERE num_product LIKE '$n_box'  ORDER BY id_prih_sub DESC ");
     $name_board_id= name_board_id($row['id_board']);
      return $name_board_id;
    }
    function get_name_board_ser($n_ser) { // обрабатывает строку sql
        $row=sqlread("SELECT * FROM  manufact_board_sub  WHERE ser_num LIKE '$n_ser'  ORDER BY id_prih_sub DESC ");
         $name_board_id= name_board_id($row['id_board']);
          return $name_board_id;
        }


function Sum_Manufact_Board_ID($idcat_brd) { // создано плат
$row=sqlread("SELECT SUM(`quantity`) as `summa`  FROM  manufact_board_sub  WHERE id_board = '$idcat_brd' ");
return $row['summa'];
}
function Sum_return_Board_ID($idcat_brd) { // создано плат
$row=sqlread("SELECT SUM(`quantity`) as `summa`  FROM  return_board_sub  WHERE id_board = '$idcat_brd'   AND status = '7'  ");
return $row['summa'];
}

function Sum_Manufact_Ready_Board_ID($idcat_brd) { // создано плат
$row=sqlread("SELECT SUM(`quantity`) as `summa`  FROM  manufact_board_sub  WHERE id_board = '$idcat_brd' AND (status = '7' OR status = '12' )   ");
return $row['summa'];
}

function Sum_Given_Board_ID($idcat_brd) { // отдано плат
$row=sqlread("SELECT SUM(`quantity`) as `summa`  FROM  give_board_sub  WHERE product = '$idcat_brd' ");
return $row['summa'];
}

function space($spaces) {   // количество пробелов 
    $space='';
for ($i = 1; $i <= $spaces; $i++) { $space=$space . "&#160;";}
if (!empty($space)   )  { return $space;  }

}

////////////////////////////Дополнительное////////////////////////////////////////////////////////////////////////
function alert($text) {   // количество пробелов 
echo "<script>alert(' ". $text ." ');</script>";
}

function print_table_head($name,$size) {   // 
    echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
    foreach ($name as $key => &$nam) {$ln= $size[$key] ; echo "<td align='center'  width='$ln' id = 'gradient'> <font color='black'   style='font: 12px apple-system'> <b> $nam</td>";
    } echo "</tr> </table>";
    }





function sendMailAttachment($mailTo, $from, $subject, $message, $file = false){
    $separator = "---"; // разделитель в письме
    // Заголовки для письма
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From: $from\nReply-To: $from\n"; // задаем от кого письмо
    $headers .= "Content-Type: multipart/mixed; boundary=\"$separator\""; // в заголовке указываем разделитель
    // если письмо с вложением
    if($file){
        $bodyMail = "--$separator\n"; // начало тела письма, выводим разделитель
        $bodyMail .= "Content-type: text/html; charset='utf-8'\n"; // кодировка письма
        $bodyMail .= "Content-Transfer-Encoding: quoted-printable"; // задаем конвертацию письма
        $bodyMail .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode(basename($file))."?=\n\n"; // задаем название файла
        $bodyMail .= $message."\n"; // добавляем текст письма
        $bodyMail .= "--$separator\n";
        $fileRead = fopen($file, "r"); // открываем файл
        $contentFile = fread($fileRead, filesize($file)); // считываем его до конца
        fclose($fileRead); // закрываем файл
        $bodyMail .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode(basename($file))."?=\n"; 
        $bodyMail .= "Content-Transfer-Encoding: base64\n"; // кодировка файла
        $bodyMail .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode(basename($file))."?=\n\n";
        $bodyMail .= chunk_split(base64_encode($contentFile))."\n"; // кодируем и прикрепляем файл
        $bodyMail .= "--".$separator ."--\n";
    // письмо без вложения
    }else{
        $bodyMail = $message;
    }
    $result = mail($mailTo, $subject, $bodyMail, $headers); // отправка письма
    return $result;
}




?>