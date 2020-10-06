<?



//include "function";
include 'conn.php';
include 'function.php';
function sqlread($sql) { // обрабатывает строку sql
    $rs = mysql_query($sql);
    if (!empty($rs) ){ 
      $row = @mysql_fetch_array($rs);
      return $row;}
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$mailTo= $_GET['mailTo'];
$id= $_GET['id'];

$row=sqlread("SELECT * FROM account_gen WHERE id_ac_gen = '$id' ");
$hashkey=$row['hashkey'];
$number=$row['number'];









// Подключаем SMTP класс для работы с почтой
include_once('km_smtp_class.php');

// Конфигурационный массив
$SenderConfig = array(
    "SMTP_server"   =>  "smtp.yandex.ru",
    "SMTP_port"     =>  "465",
    "SMTP_email"    =>  "savelisus@yandex.ru",
    "SMTP_pass"     =>  "59124769",
    "SMTP_type"     =>  "SSL"
);

// Email получателя/Получателей
//$Receiver = "citrix@mail.ru";

$Receiver =$mailTo;

// Тема сообщения
$Subject = 'ООО "ПО САВЭЛ" Готовность к отгрузке по счету '; // тема письма
// Текст сообщения (в HTML)
//$Text = "Уважаемый клиент ! Информируем вас ,что заказ по счету <b> " .$number. "</b> готов.<br>
//Посмотреть счет вы можете по адресу http://orionius.xyz/print_account_out.php?qqq&#61;".$hashkey." <br> <br> <br> 
$Text = "Уважаемый клиент ! Информируем вас ,что заказ по счету <b> " .$number. "</b> готов.<br>
Посмотреть счет вы можете по адресу http://saveling.ru/print_account_out.php?qqq&#61;".$hashkey." <br> <br> <br> 

Это письмо создано автоматически сервером , отвечать на него не нужно.<br> 
По возникшим вопросам ,просьба писать на адрес info@savel-ing.ru <br> <br> <br> 

C Уважением ООО &quot;ПО САВЭЛ&quot;<br>
115516, г.Москва, ул. Промышленная, д. 8<br>
(вход со двора, подъезд 1, 4 этаж, налево)<br>
тел. (499) 707-16-15 (495) <br>
737-07-33, 737-07-34<br>
факс (499) 707-16-15 <br>
e-mail info@savel-ing.ru  " ; // текст письма
// Вложение в письме - адрес к файлу
$Attachment = "./images/map.png"; // файл   
/*$Attachment = 'account_mail.doc';*/

/* $mail = new KM_Mailer(сервер, порт, пользователь, пароль, тип); */
/* Тип может быть: null, tls или ssl */
$mail = new KM_Mailer($SenderConfig['SMTP_server'], $SenderConfig['SMTP_port'], $SenderConfig['SMTP_email'], $SenderConfig['SMTP_pass'], $SenderConfig['SMTP_type']);
if($mail->isLogin) {
    // Прикрепить файл
    if($Attachment) {$mail->addAttachment($Attachment);}

    // Добавить ещё получателей
   // $mail->addRecipient('savel_ing@mail.ru');
    //$mail->addRecipient('citrix@mail.ru'); Дополнительно

    /* $mail->send(От, Для, Тема, Текст, Заголовок = опционально) */
    $SendMail = $mail->send($SenderConfig['SMTP_email'], $Receiver, $Subject, $Text);
    
    // Очищаем список получателей
    $mail->clearRecipients();
    $mail->clearCC();
    $mail->clearBCC();
    $mail->clearAttachments();

    echo "Письмо успешно отправлено <br />";
}
 else {
    echo "Возникла ошибка во время подключения к SMTP-серверу<br />";
 }
?>







