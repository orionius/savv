<?



//include "function";
include 'conn.php';
include 'function.php';
function sqlread($sql) { // ������������ ������ sql
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









// ���������� SMTP ����� ��� ������ � ������
include_once('km_smtp_class.php');

// ���������������� ������
$SenderConfig = array(
    "SMTP_server"   =>  "smtp.yandex.ru",
    "SMTP_port"     =>  "465",
    "SMTP_email"    =>  "savelisus@yandex.ru",
    "SMTP_pass"     =>  "59124769",
    "SMTP_type"     =>  "SSL"
);

// Email ����������/�����������
//$Receiver = "citrix@mail.ru";

$Receiver =$mailTo;

// ���� ���������
$Subject = '��� "�� �����" ���������� � �������� �� ����� '; // ���� ������
// ����� ��������� (� HTML)
//$Text = "��������� ������ ! ����������� ��� ,��� ����� �� ����� <b> " .$number. "</b> �����.<br>
//���������� ���� �� ������ �� ������ http://orionius.xyz/print_account_out.php?qqq&#61;".$hashkey." <br> <br> <br> 
$Text = "��������� ������ ! ����������� ��� ,��� ����� �� ����� <b> " .$number. "</b> �����.<br>
���������� ���� �� ������ �� ������ http://saveling.ru/print_account_out.php?qqq&#61;".$hashkey." <br> <br> <br> 

��� ������ ������� ������������� �������� , �������� �� ���� �� �����.<br> 
�� ��������� �������� ,������� ������ �� ����� info@savel-ing.ru <br> <br> <br> 

C ��������� ��� &quot;�� �����&quot;<br>
115516, �.������, ��. ������������, �. 8<br>
(���� �� �����, ������� 1, 4 ����, ������)<br>
���. (499) 707-16-15 (495) <br>
737-07-33, 737-07-34<br>
���� (499) 707-16-15 <br>
e-mail info@savel-ing.ru  " ; // ����� ������
// �������� � ������ - ����� � �����
$Attachment = "./images/map.png"; // ����   
/*$Attachment = 'account_mail.doc';*/

/* $mail = new KM_Mailer(������, ����, ������������, ������, ���); */
/* ��� ����� ����: null, tls ��� ssl */
$mail = new KM_Mailer($SenderConfig['SMTP_server'], $SenderConfig['SMTP_port'], $SenderConfig['SMTP_email'], $SenderConfig['SMTP_pass'], $SenderConfig['SMTP_type']);
if($mail->isLogin) {
    // ���������� ����
    if($Attachment) {$mail->addAttachment($Attachment);}

    // �������� ��� �����������
   // $mail->addRecipient('savel_ing@mail.ru');
    //$mail->addRecipient('citrix@mail.ru'); �������������

    /* $mail->send(��, ���, ����, �����, ��������� = �����������) */
    $SendMail = $mail->send($SenderConfig['SMTP_email'], $Receiver, $Subject, $Text);
    
    // ������� ������ �����������
    $mail->clearRecipients();
    $mail->clearCC();
    $mail->clearBCC();
    $mail->clearAttachments();

    echo "������ ������� ���������� <br />";
}
 else {
    echo "�������� ������ �� ����� ����������� � SMTP-�������<br />";
 }
?>







