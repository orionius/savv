 <meta charset="windows-1251">








<style>





                             #quantity {

    width: 32px; /* ������ ���� � �������� */
    font-size: 14px; 
    text-align: center;
     font-family:'apple-system';
    /* font-weight:bold; */
 /*  border:  0.002em double black;*/
         line-height: 1.5em;
  /* border-color: rgba(0,0,0,.9); */

   } 
                             #price {

    width: 81px; /* ������ ���� � �������� */
    font-size: 14px; 
    text-align: right;
     font-family:'apple-system';
 /*    font-weight:bold; */
 /*  border:  0.002em double black;*/
           line-height: 1.5em;
  /* border-color: rgba(0,0,0,.9); */

   } 


                             #pole_name {

    width: 450px; /* ������ ���� � �������� */
    font-size: 14px; 
    text-align: left;
     font-family:'apple-system';
   /*  font-weight:bold; */
 /*  border:  0.002em double black;*/
         line-height: 1.5em;
  /* border-color: rgba(0,0,0,.9); */


   } 
                                #pole_name1 {

    width: 450; /* ������ ���� � �������� */
    font-size: 14px; 
    text-align: left;
     font-family:'apple-system';
     font-weight:bold;

   } 
                                #pole_algo {

    width: 150px; /* ������ ���� � �������� */
    font-size: 14px; 
    text-align: left;
     font-family:'apple-system';
     font-weight:bold;
 text-align: center;
   } 




    .block_signet
     {  
    margin:auto;
    position: absolute ; /* ���������� ���������������� */
    left: 500; /* ��������� �������� �� ������� ���� */
    top: 880px; /* ��������� �� �������� ���� */
    width: 1px; /* ������ ����� */
   height:1px;    
overflow: visible ; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */
       margin:3px 3px 3px 5px; 
                padding: 5px; 
                  text-align: left;
                      border-radius: 100px 100px;
    opacity: 0.6; /* �������� ������������ */

                     }   

    .block_general
     {  
    margin:auto;
    position: absolute ; /* ���������� ���������������� */
       text-align:  left;
    left: 40; /* ��������� �������� �� ������� ���� */
    top: 10px; /* ��������� �� �������� ���� */
    width: 700px; /* ������ ����� */
   height:99%;    
overflow: visible ; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */
       margin:3px 3px 3px 5px; 
                padding: 5px; 
                  text-align: left;
                      border-radius: 100px 100px;
    opacity: 1; /* �������� ������������ */

                     }   

    #block_sample
     {  
    margin:auto;
    position: absolute ; /* ���������� ���������������� */
       text-align:  left;
    left: 100; /* ��������� �������� �� ������� ���� */
    top: 10px; /* ��������� �� �������� ���� */
    width: 600px; /* ������ ����� */
   height:200;    
overflow: visible ; /* �������� ��� ��������� �� �����������. ���������, ���� ������ ����� */
       margin:3px 3px 3px 5px; 
                padding: 5px; 
                  text-align: center;
               
    /*opacity: 1; /* �������� ������������ */


    border-style: double; /* ����� ����� ������ ��������� */
    border-width: 3px 7px 7px 4px; /* ������� ������� */
                     }   

    #block_sample1
     {  
    margin:auto;

       text-align:  left;
    left: 100; /* ��������� �������� �� ������� ���� */
    top: 10px; /* ��������� �� �������� ���� */
    width: 700px; /* ������ ����� */
   height:500;    



               



    border-style: double; /* ����� ����� ������ ��������� */
    border-width: 3px 7px 7px 4px; /* ������� ������� */
                     }   














   .text {
    text-align:  center;
   }

   .text_left {
    text-align:  left;
   }









                 .inn
     {  


    margin:auto;
    position: absolute; /* ���������� ���������������� */
    left: 720px; /* ��������� �������� �� ������� ���� */
  /*  right: 10%; /* ��������� �������� �� ������� ���� */
    top: 700px; /* ��������� �� �������� ���� */
    width: 1000px; /* ������ ����� */
   height:160px;    
    padding: 5px; /* ���� ������ ������ */


                     }   
    p.dline {
    line-height: 1.5;
   }
   P {
    line-height: 0.5em;
   }

    a.dline {
    line-height: 0.2em;
   }


    table { 
    width: 100%; /* ������ ������� */
    /* border: 1px double black; /* ����� ������ ������� */
    border-collapse: collapse; /* ���������� ������ ��������� ����� */
   }
   th { 
   /* text-align: left; /* ������������ �� ������ ���� */
   /*  background: #ccc; /* ���� ���� ����� */
   /*  padding: 5px; /* ���� ������ ����������� ����� */
   /*  border: 1px solid black; /* ������� ������ ����� */
   }
   td { 
   /*  padding: 5px; /* ���� ������ ����������� ����� */
   /*  border: 1px solid black; /* ������� ������ ����� */
   }


</style>






<?


session_start();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }


//include "error_visible.php";
include 'conn.php';
include 'function.php';
$user=id_user_hash();



if (!EMPTY($_GET['id']) ) {  $id=$_GET['id'] ; }

echo "<script>window.print();</script>";

//...............................................................................
function numberToRussian ($sourceNumber){ 
  //����� �������� $sourceNumber ������� �������� ��-������
  //������������ �������� ��� ���������-����� PHP_INT_MAX
  //������������ �������� ��� ���������-������ �����/���� 999999999999999999999999999999999999
  $smallNumbers=array( //����� 0..999
   array('����'),
   array('','����','���','���','������','����','�����','����','������','������'),
   array('������','�����������','����������','����������','������������',
         '����������','�����������','����������','������������','������������'),
   array('','','��������','��������','�����','���������','����������','���������','�����������','���������'),
   array('','���','������','������','���������','�������','��������','�������','���������','���������'),
   array('','����','���')
  );
  $degrees=array(
   array('����������','','�','��'), //����������� ��� �������� ������, ��� � ������
   array('�����','�','�',''), //10^3
   array('�������','','�','��'), //10^6
   array('��������','','�','��'), //10^9
   array('��������','','�','��'), //10^12
   array('�����������','','�','��'), //10^15
   array('�����������','','�','��'), //10^18
   array('�����������','','�','��'), //10^21
   array('����������','','�','��'), //10^24
   array('���������','','�','��'), //10^27
   array('���������','','�','��'), //10^30
   array('���������','','�','��') //10^33
   //������ �������� � ���� �� ����� �������� �����: https://ru.wikipedia.org/wiki/�������_��������_��������_������
  );
  
  if ($sourceNumber==0) return $smallNumbers[0][0]; //������� ����
  $sign = '';
  if ($sourceNumber<0) {
   $sign = '����� '; //��������� ����, ���� �����
   $sourceNumber = substr ($sourceNumber,1);
  }
  $result=array(); //������ � �����������
 
  //���������� ������ �� ������ ����
  $digitGroups = array_reverse(str_split(str_pad($sourceNumber,ceil(strlen($sourceNumber)/3)*3,'0',STR_PAD_LEFT),3));
  foreach($digitGroups as $key=>$value){
   $result[$key]=array();
   //�������������� ����������� ����� �������� ��-������
   foreach ($digit=str_split($value) as $key3=>$value3) {
    if (!$value3) continue;
    else {
     switch ($key3) {
      case 0: 
       $result[$key][] = $smallNumbers[4][$value3]; 
       break;
      case 1: 
       if ($value3==1) {
        $result[$key][]=$smallNumbers[2][$digit[2]];
        break 2;
       }
       else $result[$key][]=$smallNumbers[3][$value3];
      break;
      case 2:
       if (($key==1)&&($value3<=2)) $result[$key][]=$smallNumbers[5][$value3];
       else $result[$key][]=$smallNumbers[1][$value3];
      break;
     }
    }
   }
   $value*=1;
   if (!$degrees[$key]) $degrees[$key]=reset($degrees);
   
   //������ ��������� ���� ��� �������� �����
   if ($value && $key) {
    $index = 3;
    if (preg_match("/^[1]$|^\\d*[0,2-9][1]$/",$value)) $index = 1; //*1, �� �� *11
    else if (preg_match("/^[2-4]$|\\d*[0,2-9][2-4]$/",$value)) $index = 2; //*2-*4, �� �� *12-*14
    $result[$key][]=$degrees[$key][0].$degrees[$key][$index];
   }
   $result[$key]=implode(' ',$result[$key]);
  }
  
  return $sign.implode(' ',array_reverse($result)) . " ���.";
 }
//................................................................................

/*
function number2string($number) {
  
  // ���������� ������� � ���� ����������� ���������� �������, ����� 
  // ��� ��������� ������������� ������� ��� �� ���������� ������
  static $dic = array(
  
    // ������� ����������� �����
    array(
      -2  => '���',
      -1  => '����',
      1 => '����',
      2 => '���',
      3 => '���',
      4 => '������',
      5 => '����',
      6 => '�����',
      7 => '����',
      8 => '������',
      9 => '������',
      10  => '������',
      11  => '�����������',
      12  => '����������',
      13  => '����������',
      14  => '������������' ,
      15  => '����������',
      16  => '�����������',
      17  => '����������',
      18  => '������������',
      19  => '������������',
      20  => '��������',
      30  => '��������',
      40  => '�����',
      50  => '���������',
      60  => '����������',
      70  => '���������',
      80  => '�����������',
      90  => '���������',
      100 => '���',
      200 => '������',
      300 => '������',
      400 => '���������',
      500 => '�������',
      600 => '��������',
      700 => '�������',
      800 => '���������',
      900 => '���������'
    ),
    
    // ������� �������� �� ����������� ��� ������������
    array(
      array('�����', '�����', '������'),
      array('������', '������', '�����'),
      array('�������', '��������', '���������'),
      array('��������', '���������', '����������'),
      array('��������', '���������', '����������'),
      array('�����������', '������������', '�������������'),
      // �����������, ����������� � �.�.
    ),
    
    // ����� ������������
    array(
      2, 0, 1, 1, 1, 2
    )
  );
  
  // ���������� ���������� � ������� ����� ������ ��������������� �����
  $string = array();
  
  // ��������� ����� ������ ����� �� ���������� ���� �������� ����,
  // �������� 1234, ������������� � 001234
  $number = str_pad($number, ceil(strlen($number)/3)*3, 0, STR_PAD_LEFT);
  
  // ��������� ����� �� ����� �� 3 ���� (�������) � ����������� ������� ������,
  // �.�. �� �� ����� ������������ ������� ����� � ����� ������ �����
  // �������, ������, �������� � �.�.
  $parts = array_reverse(str_split($number,3));
  
  // ����� �� ������ �����
  foreach($parts as $i=>$part) {
    
    // ���� ����� �� ����� ����, ��� ���� ������������� �� � �����
    if($part>0) {
      
      // ���������� ���������� � ������� ����� ������ ��������� ����� ��� ������� �����
      $digits = array();
      
      // ���� ����� ������������, ���������� ���������� �����
      if($part>99) {
        $digits[] = floor($part/100)*100;
      }
      
      // ���� ��������� 2 ����� �� ����� ����, ���������� ������ ��������� �����
      // (������ ���� �������������� ��� �������������)
      if($mod1=$part%100) {
        $mod2 = $part%10;
        $flag = $i==1 && $mod1!=11 && $mod1!=12 && $mod2<3 ? -1 : 1;
        if($mod1<20 || !$mod2) {
          $digits[] = $flag*$mod1;
        } else {
          $digits[] = floor($mod1/10)*10;
          $digits[] = $flag*$mod2;
        }
      }
      
      // ����� ��������� ��������� �����, ��� ������������
      $last = abs(end($digits));
      
      // ����������� ��� ��������� ����� � �����
      foreach($digits as $j=>$digit) {
        $digits[$j] = $dic[0][$digit];
      }
      
      // ��������� ����������� ������� ��� ������
      $digits[] = $dic[1][$i][(($last%=100)>4 && $last<20) ? 2 : $dic[2][min($last%10,5)]];
      
      // ���������� ��������� ����� � ������ ����� � ��������� � ����������, ������� ������ �������
      array_unshift($string, join(' ', $digits));
    }
  }
  
  // ����������� ���������� � ����� � ���������� �� �������, ���!
  return join(' ', $string);
}


//...........................................................................
function number3string($number) {
	
	// ���������� ������� � ���� ����������� ���������� �������, ����� 
	// ��� ��������� ������������� ������� ��� �� ���������� ������
	static $dic = array(
	
		// ������� ����������� �����
		array(
			-2	=> '���',
			-1	=> '����',
			1	=> '����',
			2	=> '���',
			3	=> '���',
			4	=> '������',
			5	=> '����',
			6	=> '�����',
			7	=> '����',
			8	=> '������',
			9	=> '������',
			10	=> '������',
			11	=> '�����������',
			12	=> '����������',
			13	=> '����������',
			14	=> '������������' ,
			15	=> '����������',
			16	=> '�����������',
			17	=> '����������',
			18	=> '������������',
			19	=> '������������',
			20	=> '��������',
			30	=> '��������',
			40	=> '�����',
			50	=> '���������',
			60	=> '����������',
			70	=> '���������',
			80	=> '�����������',
			90	=> '���������',
			100	=> '���',
			200	=> '������',
			300	=> '������',
			400	=> '���������',
			500	=> '�������',
			600	=> '��������',
			700	=> '�������',
			800	=> '���������',
			900	=> '���������'
		),
		
		// ������� �������� �� ����������� ��� ������������
		array(
			array('�����', '�����', '������'),
			array('������', '������', '�����'),
			array('�������', '��������', '���������'),
			array('��������', '���������', '����������'),
			array('��������', '���������', '����������'),
			array('�����������', '������������', '�������������'),
			// �����������, ����������� � �.�.
		),
		
		// ����� ������������
		array(
			2, 0, 1, 1, 1, 2
		)
	);
	
	// ���������� ���������� � ������� ����� ������ ��������������� �����
	$string = array();
	
	// ��������� ����� ������ ����� �� ���������� ���� �������� ����,
	// �������� 1234, ������������� � 001234
	$number = str_pad($number, ceil(strlen($number)/3)*3, 0, STR_PAD_LEFT);
	
	// ��������� ����� �� ����� �� 3 ���� (�������) � ����������� ������� ������,
	// �.�. �� �� ����� ������������ ������� ����� � ����� ������ �����
	// �������, ������, �������� � �.�.
	$parts = array_reverse(str_split($number,3));
	
	// ����� �� ������ �����
	foreach($parts as $i=>$part) {
		
		// ���� ����� �� ����� ����, ��� ���� ������������� �� � �����
		if($part>0) {
			
			// ���������� ���������� � ������� ����� ������ ��������� ����� ��� ������� �����
			$digits = array();
			
			// ���� ����� ������������, ���������� ���������� �����
			if($part>99) {
				$digits[] = floor($part/100)*100;
			}
			
			// ���� ��������� 2 ����� �� ����� ����, ���������� ������ ��������� �����
			// (������ ���� �������������� ��� �������������)
			if($mod1=$part%100) {
				$mod2 = $part%10;
				$flag = $i==1 && $mod1!=11 && $mod1!=12 && $mod2<3 ? -1 : 1;
				if($mod1<20 || !$mod2) {
					$digits[] = $flag*$mod1;
				} else {
					$digits[] = floor($mod1/10)*10;
					$digits[] = $flag*$mod2;
				}
			}
			
			// ����� ��������� ��������� �����, ��� ������������
			$last = abs(end($digits));
			
			// ����������� ��� ��������� ����� � �����
			foreach($digits as $j=>$digit) {
				$digits[$j] = $dic[0][$digit];
			}
			
			// ��������� ����������� ������� ��� ������
			$digits[] = $dic[1][$i][(($last%=100)>4 && $last<20) ? 2 : $dic[2][min($last%10,5)]];
			
			// ���������� ��������� ����� � ������ ����� � ��������� � ����������, ������� ������ �������
			array_unshift($string, join(' ', $digits));
		}
	}
	
	// ����������� ���������� � ����� � ���������� �� �������, ���!
	return join(' ', $string);
}
*/
//..................................................................................



function FirstBig($text) {

$name = $text;
//$name = iconv("UTF-8", "UTF-8", $name);
 
$first = mb_substr($name,0,1, 'windows-1251');//������ �����
$last = mb_substr($name,1);//��� ����� ������ �����
$first = mb_strtoupper($first, 'windows-1251');
$last = mb_strtolower($last, 'windows-1251');
$name1 = $first.$last;
 
 

  return  $name1;
}




///////////////////////////////////////////////////////////////

/*

function numm_of_words($num)
{
$nul = '����';
$ten = array(
array('','����','���','���','������','����','�����','����', '������','������'),
array('','����','���','���','������','����','�����','����', '������','������'),
);
$a20 = array('������','�����������','����������','����������','������������' ,'����������','�����������','����������','������������','������������');
$tens = array(2=>'��������','��������','�����','���������','����������','���������' ,'�����������','���������');
$hundred = array('','���','������','������','���������','�������','��������', '�������','���������','���������');
$unit = array( 
array('' ,'' ,'', 1),
array('' ,'' ,'' ,0),
array('������' ,'������' ,'�����' ,1),
array('�������' ,'��������','���������' ,0),
array('��������','��������','����������',0),
);

list($n) = explode('.',sprintf("%015.2f", floatval($num)));
$out = array();
if (intval($n) > 0) {
foreach(str_split($n, 3) as $uk => $v) 
{
if (!intval($v)) continue;
$uk = sizeof($unit)-$uk-1;
$gender = $unit[$uk][3];
list($i1,$i2,$i3) = array_map('intval',str_split($v,1));

$out[] = $hundred[$i1];
if ($i2>1) $out[]= $tens[$i2].' '.$ten[$gender][$i3];
else $out[]= $i2>0 ? $a20[$i3] : $ten[$gender][$i3];

if ($uk>1) $out[]= morph($v,$unit[$uk][0],$unit[$uk][1],$unit[$uk][2]);
} 
}
else $out[] = $nul;
return trim(preg_replace('/ {2,}/', ' ', join(' ',$out)));
}
function morph($n, $f1, $f2, $f5)
{
$n = abs(intval($n)) % 100;
if ($n>10 && $n<20) return $f5;
$n = $n % 10;
if ($n>1 && $n<5) return $f2;
if ($n==1) return $f1;
return $f5;
}

//////////////////////////////////////////


function num2word($n,$words) {
    return ($words[($n=($n=$n%100)>19?($n%10):$n)==1?0 : (($n>1&&$n<=4)?1:2)]);
}


function sum2words($n) {
    $words=array(
        900=>' ���������',
        800=>' ���������',
        700=>' �������',
        600=>' ��������',
        500=>' �������',
        400=>' ���������',
        300=>' ������',
        200=>' ������',
        100=>' ���',
        90=>' ���������',
        80=>' �����������',
        70=>' ���������',
        60=>' ����������',
        50=>' ���������',
        40=>' �����',
        30=>' ��������',
        20=>' ��������',
        19=>' ������������',
        18=>' ������������',
        17=>' ����������',
        16=>' �����������',
        15=>' ����������',
        14=>' ������������',
        13=>' ����������',
        12=>' ����������',
        11=>' �����������',
        10=>' ������',
        9=>' ������',
        8=>' ������',
        7=>' ����',
        6=>' �����',
        5=>' ����',
        4>' ������',
        3=>' ���',
        2=>' ���',
        1=>' ����',
    );
 
    $level=array(
        4=>array('��������', '���������', '����������'),
        3=>array('�������', '��������', '���������'),
        2=>array('������', '������', '�����'),
    );
 
    list($rub,$kop)=explode('.',number_format($n,2));
    $parts=explode(',',$rub);
 
    for($str='', $l=count($parts), $i=0; $i<count($parts); $i++, $l--) {
        if (intval($num=$parts[$i])) {
            foreach($words as $key=>$value) {
                if ($num>=$key) {
                    // Fix ��� ����� ������
                    if ($l==2 && $key==1) {
                        $value='����';
                    }
                    // Fix ��� ���� �����
                    if ($l==2 && $key==2) {
                        $value='���';
                    }
                    $str.=($str!=''?' ':'').$value;
                    $num-=$key;
                }
            }
            if (isset($level[$l])) {
                $str.=' '.num2word($parts[$i],$level[$l]);
            }
        }
    }
 
    if (intval($rub=str_replace(',','',$rub))) {
        $str.=' '.num2word($rub,array('�����', '�����', '������'));
    }
 
    $str.=($str!=''?' ':'').$kop;
    $str.=' '.num2word($kop,array('�������', '�������', '������'));
 
    return mb_strtoupper(mb_substr($str,0,1,'utf-8'),'utf-8').
         mb_substr($str,1,mb_strlen($str,'utf-8'),'utf-8');
}


*/



//////////////////////////////////////////////////////////////////////////

    /*

$to - ����� ���������� ������

$from_mail - ����� ����������� ������

$from_name - ��� ����������� ������

$subject - ���� ������

$message - ���� ��������� � HTML-�������

$file_name - ���� � �����, ������� ���� ���������� � ������

(��� ����� ���� ��� �����, ���������� � ���� <input type="file" name="file_name">)

*/


////////////////////////////////////////////////////////////////////////

//header('Content-type: application/vnd.ms-word');
//header('Content-Disposition: attachment; Filename=my_file.doc');

//header("application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
//header("Content-Disposition: attachment; filename=downloaded.xls");
// �������� �����
ob_start();
 

 





/////////////////////////mail///////////////////////////////////////////////////////
/*

$strSQL="SELECT *  FROM account_sub WHERE id_ac_gen= '$id'  ";
 $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {

$name_equipment=$row['name_equipment'];


    }}


*/



//mail("armagedonius@gmail.com", "���������", "����� ������ \n 1-�� ������� \n 2-�� ������� \n 3-�� �������"); 



echo "<div class='block_general'>";




//////////////////////////���������/////////////////////////////////////////////////


 echo  "<div class='text'>";
echo "<b>��������! ���� ������������ � ������� 30 (��������) ����������� ����  <br> ";
echo " ������ ������� ����� �������� �������� � �������� �������� ������</b> <br> <br> ";

echo "<div style='line-height: 1.0'><b>���������,".space(1)."����������������:</b> ".space(1)." </b>��� &quot;�� �����&quot;   <br>142455,
 ".space(0)."���������� ���., ��������� �-�, �. �����������, ��. ������� ���������, �. 24    <br> ";




echo "<table border=0 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
echo "<font color = black style='font: 20px apple-system' >";


//echo "��� �� ����� <br> <br>        142455, ���������� ���., ��������� �-�, �. ����������� , ��. ������� ��������� , �. 24    ";

echo "<font color = black style='font: 20px apple-system' >";

echo "<br><b>������� ���������� ���������� ��������� </b>";
 echo  "</div>";
?>



<table border=1 height=0  cellpadding='0' cellspacing='0' style='margin-left: 00px;'  >  
<tr><td align='center' width= 180px    >  ��� 5031018790  <br> </td><td align='center' width= 180px   >  ���  503101001 <br></td>
<td rowspan='2'><br><br> &#160  �� � </td>  <td rowspan='2'><br><br> <? echo space(1); ?> 40702810440000054095</td>    </tr>

<tr><td width= 350px colspan = '2'>  &nbsp; ��� &quot;�� �����&quot;  <br> &nbsp; ���������� </td></tr>
<tr><td width= 350px colspan = '2' rowspan='2'> &nbsp; ��� ��������  <br>&nbsp;&nbsp;���� </td>
<td width= 70px >&#160  ���  <br></td>
<td width= 270px rowspan='2' > &#160   044525225  <br> &#160 30101810400000000225 </td>  </tr> <td width= 50px   rowspan='2'> &#160  �� � </td></tr>



</table>
<?


 echo  "</div >";
//////////////////////////�����/////////////////////////////////////////////////

$rows= sqlread ("SELECT * FROM  account_gen  WHERE  id_ac_gen ='$id' ");

//$date_begin=$row['date_begin'];




echo "<br><font style='font: 17px apple-system'><b>";

$date_begin=date("d.m.Y",strtotime($rows['accountofthe'] ));
$number=$rows['number'];
$idclient=$rows['idclient'];
$deliverytime=$rows['deliverytime'];
$comment_print_acc=$rows['comment_print_acc'];
$shiping_cost=$rows['shiping_cost'];
$summa_acc_full=$rows['summa'];

/*
acc_condition_pay conditions
acc_deliverytime   deliverytime
acc_shipconditions  name
*/
$shipconditions=$rows['shipconditions']; // ������� ��������
$condition_pay=$rows['condition_pay']; // ������� ������


$condpay=sqlread ("SELECT conditions FROM  acc_condition_pay  WHERE  id ='$condition_pay' ");
$conddost=sqlread ("SELECT deliverytime FROM  acc_deliverytime  WHERE  id ='$deliverytime' ");
$conddel=sqlread ("SELECT name FROM  acc_shipconditions  WHERE  id ='$shipconditions' ");


$conditions_pay=$condpay['conditions']; 
$deliverytime=$conddost['deliverytime']; 
$acc_shipconditions=$conddel['name']; 

$day_delivery=$rows['day_delivery']; 

/*
echo "$conditions <br> ";
echo "$deliverytime <br> ";
echo "$name <br> ";
*/

$roww= sqlread ("SELECT * FROM  client  WHERE  idclient ='$idclient' ");

$form=$roww['form'];
$inn=$roww['inn'];
$kpp=$roww['kpp'];
$adress=$roww['adress'];


if(!empty($inn)) { $inn= " ��� " . $inn; }
if(!empty($kpp)) { $kpp= " ��� " . $kpp; }

$name_client=full_name_client_id($idclient);
 echo  "<div class='text'>";
echo "���� � ".$number."  �� $date_begin ".space(1)."�.<br>";
 echo  "</div>";
 

  echo  "<div class='text_left'>";
echo "<hr><font color='black'   style='font: 15px times '> ";

/*
echo "<div style='line-height: 1.0'><b>���������,".space(1)."����������������:</b> ".space(1)." </b>�������� � ������������ ���������������� . ��� &quot;�� �����&quot;   <br>142455,
 ".space(0)."���������� ���., ��������� �-�, �. �����������, ��. ������� ���������,�. 24    <br> ";

echo "<b>����������������:</b>".space(2)." �������� � ������������ ���������������� . ��� &quot; �� ����� &quot;    142455,  <br>
".space(37)."���������� ���., ��������� �-�, �. ����������� , ��. ������� ��������� , �. 24    <br><br>  ";
*/
echo "<br><b>����������:".space(11)."</b>".space(0).$form." ".$name_client." ".$inn."  ".$kpp. ", ".$adress. " <br> ";
echo "<b>���������������: &nbsp;</b>".space(0).$form." ".$name_client." ".$inn."  ".$kpp. ", ".$adress. " <br> ";

$rem = $comment_print_acc;

echo $rem;
echo "</div> </font'> ";
//echo "������ ������ :".space(2).$date_end." ";

//echo "������ ��������:".space(2).name_status_zakaz_id($rows['shipment'])." ";
//echo space(50)."���� ��������:".space(2).$date_shipment." ";



//echo "<script>alert('� ��� ".md5($id) ."----". $name_client." ');</script>";

/////////////////////////////////////////////////////////////////////////// ������ �����

echo "".space(18)  ?><font size="3" color="black" face="times"><b><?
$i=1;
///// ����� �������
$name =  array('�','������������','���','��','����','�����') ;
$long =  array('30',' 450','30  ','30','80  ','80') ;
 
$id=$_GET['id'];
$sss=sqlread("SELECT  SUM(price_sale*number ) as sum_acc FROM account_sub WHERE id_ac_gen= '$id'  ");

$sum_acc=$sss['sum_acc']; // ����� �� ����� ��� �������������� �������


echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' bgcolor='lightgray' > <font color='black'   style='font: 15px apple-system'> <b> $nam</td>";} 
echo "</tr> </table></b>";
/////end////////





$sss=sqlread("SELECT  COUNT(*) as count_str FROM account_sub WHERE id_ac_gen= '$id'  ");
$count_str=$sss['count_str'];   

//alert($shiping_cost);



$strSQL="SELECT *  FROM account_sub WHERE id_ac_gen= '$id'  ";
 $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {


echo "<table border=0 height=0  cellpadding='0' frame = 'below'  cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";


 

$name_equipment=$row['name_equipment'];
$number=$row['number'];     
$price=$row['price_sale'];    
$idalgorythm=$row['idalgorythm'];  


//$price=$price+($shiping_cost/$count_str);






$idunit=$row['unit']; 

$f=sqlread("SELECT unit FROM unit WHERE idunit= '$idunit' ");

$nameunit = $f['unit'];


$strlen = strlen($name_equipment) ;
$strlen = $strlen ;

$qq=sqlread("SELECT name,id  FROM algorythm WHERE id= '$idalgorythm'");

$namealgorythm=$qq['name'];  

if ($idalgorythm>0) { $namealgorythm="/���. - ". $namealgorythm;} 


$config=$row['config'];  
if ($config>0) { $config="/����. - ". $config;} 

  $priceandship= (            round(   ($shiping_cost/$sum_acc)*($price*$number),0  ))               /$number+$price ; 
  $summa=   $priceandship*$number; 
  
echo "<tr><td align='center' id = 'quantity'  > ".$i."   </td>";
echo "<td align='left' id = 'pole_name' > ".$name_equipment  ." ".$namealgorythm." ".$config."   </td>";
echo "<td align='center'  id = 'quantity' > ".$number ."   </td>";
echo "<td align='center'  id = 'quantity' > ".$nameunit ."   </td>";
echo "<td align='center' id='price'    > ".number_format($priceandship, 2, ',', ' ') ."   </td>";
echo "<td align='center' id='price'    > ".number_format($summa, 2, ',', ' ') ."   </td>";

$id=$_GET['id'];
$rr=sqlread("SELECT * FROM account_gen WHERE id_ac_gen = '$id'");
$ndsgen=$rr['nds'];


$nds_str=round( $summa *$ndsgen/(100+$ndsgen) ,2 ) ;
$sum_nds=$sum_nds+$nds_str;
//echo "<td align='center' id='quantity'   > ".$row['algorithm']            ."  </td>";
//echo "<td align='center' id='quantity'   > ".$row['note_b']              ."  </td>";





echo "</tr> ";



$summa_gen= $summa+$summa_gen;

echo "</table>";
$i++;
}}

//$nds=round( ((($summa_gen /1.18)-$summa_gen)*-1) ,2 ) ;
$nds=round( $summa_gen *$ndsgen/(100+$ndsgen) ,2 ) ;

echo "<table border=0 height=0  cellpadding='0'   cellspacing='0'  >";
/*
echo  space (100) ."<b>����� � ������: </td>"  .space (27) . number_format($summa_gen, 2, ',', ' ')  ."</b><br>" ;
echo space (100) ."� ��� ����� ��� (18%): "  .space (15) . number_format($nds, 2, ',', ' ')."<br>" ;
*/

echo "<td width = 650><b>". space(100) ."����� � ������: </td><td align = right width = 100><b>" . number_format($summa_gen, 2, ',', ' ')  ."</b></td></tr>" ;
//echo "<td width = 600 >". space(100) ."� ��� ����� ��� (18%):</td> <td align = right width = 100>"  .$sum_nds."----" . number_format($nds, 2, ',', ' ')."</td>" ;
echo "<td width = 600 >". space(100) ."� ��� ����� ��� (".round($ndsgen,0)."%):</td> <td align = right width = 100>" . number_format($sum_nds, 2, ',', ' ')."</td>" ;


//echo  space (100) ."����� � ������ "  .space (27) . number_format($summa_gen, 2, ',', ' ') ."<br>" ;

echo "</tr> ";
echo "</table>";

?><font size="3" color="black" face="times"></b><?
echo "<br>";

//$summa_gen='12345.49';

$kopeyki=(round(($summa_gen*100 - round ($summa_gen,0)*100),0));
if($kopeyki==0) {$kopeyki="00";}
if($kopeyki<0) {$kopeyki=100+$kopeyki;}

$numtext=FirstBig(numberToRussian($summa_gen));



  echo  "<div class='text_left'>";
echo "<b> �����</b> ������������ ". $count_str.",  ".space(1)." �� ����� ".number_format($summa_gen, 2, ',', ' ') .space(2)."������.<br>"; 
echo "  (".$numtext .space(2).space(2). $kopeyki  .space(2)."������)<br>";


  echo  "</div>";





////////////////////////////////////////////////////////////////////////////////////////

$rows= sqlread ("SELECT * FROM  order_gen  WHERE  id_order ='$id' ");
//echo "������ ��������:".space(2).name_status_zakaz_id($rows['shipment'])." ";
//echo space(50)."���� ��������:".space(2).$date_shipment." <br>";
$name_client=full_name_client_id($idclient);

//echo "����������: ".space(8).$name_client."<br>" ;

echo "  ";  


  echo  "<div class='text_left'>";

echo "<b>������� ������:</b> " . $conditions_pay . "<br>";

//echo "<b>���� ��������:</b> ".$deliverytime."<br>";

$roun= (int)(($day_delivery/10-round($day_delivery/10,0) )*10 );



if($roun=='0') {$day='����';}
if($roun =='1') {$day='����';}
if($roun=='2') {$day='���';}
if($roun=='3') {$day='���';}
if($roun=='4') {$day='���';}
if($roun>='5') {$day='����';}



echo "<b>���� ��������:</b> ".$day_delivery ."    ����������� ���� ��� ���������� ������� ������.<br>";


echo "<b>������� ��������:</b>".space(1).$acc_shipconditions."";




echo "<p>������������     ".space(10)."    �������� ".space(20)."<img src='images/Signet_dir.png' width='50' height='50' alt='������'>".space(27)." ������ �.�. <br>";
echo space(0)."__________________________".space(10) ."_________________".space(10) ."_________________  <br><br>";
echo space(40)." <font style='font: 10px apple-system' >    ���������   ".space(30) ." ������� ".space(45) ." ����������� �������    </font> </p>";

echo "<p> ������� ��������� ".space(35) ." <img src='images/Signature_buhg .png' width='50' height='50' alt='������''>".space(25)." ����������� O.�. <br>";
echo space(0)."__________________________".space(10) ."_________________".space(10) ."_________________  <br><br>";



echo space(40)." <font style='font: 10px apple-system' >    ���������   ".space(30) ." ������� ".space(45) ." ����������� �������    </font> <br><br></p>";

 echo "<div class='block_signet'>";
echo " <img src='images/signet_savel.png' width='150' height='150' alt='������''></a></td> ";  


  echo "</div>";
//echo " &#160;&#160;&#160;&#160;&#160; ������� ___<img src='images/Signet_dir.png' width='50' height='50' alt='������'> (________________)    ";

echo "<br>";
//echo space(80)."���";


///////////////////////////////////////////////////////////////////////////////


// ��������� �� ��� ���� � ������ � ���������� $content
$content = ob_get_contents();
 ob_end_clean();
// ��������� � ������� �����


echo $content ;


$content=iconv("WINDOWS-1251", "UTF-8", $content) ;

//$content = htmlentities($content);
//$content = str_replace("&nbsp;",''," ");

$content = str_replace("&nbsp", " &#160;" , $content);
//$content= strip_tags($content);

    // ������� ��������� ����
    $file = fopen("account_mail.doc", "w");

    // �������� ������ ������
   fwrite($file, $content); 

//fwrite( $file, );

    // ������� ��������� ����
    fclose($file);







///////////////////////////////////////////////////////////////////////////////



if ($_GET['em']=='yes' ) {  $id=$_GET['id'] ;  
  $rows= sqlread ("SELECT * FROM  account_gen  WHERE  id_ac_gen ='$id' ");
  $idclient=$rows['idclient'];

$row=sqlread("SELECT * FROM client WHERE idclient = '$idclient'");
$e_mail=$row['e_mail'];
//alert($e_mail);


echo "<script> document.location.href='send_smtp_account.php?id=$id&mailTo=$e_mail'</script>"; 

}

echo "</div >";

/*


$rows= sqlread ("SELECT * FROM  account_gen  WHERE  id_ac_gen ='$id' ");

//$date_begin=$row['date_begin'];




echo "<br><font style='font: 20px apple-system'><b>";

$date_begin=date("d.m.Y",strtotime($rows['accountofthe'] ));
$number=$rows['number'];


$content= "".space(40)."���� � ".$number."  �� $date_begin ".space(2)."<br>";





$content = '<html><body><br />' . $number . '  
<table border=0 height=0  cellpadding="0" cellspacing="0"  >
<td  font-size: 20px;  > ��� �� �����   </td> </tr></table>
������ � ������� php! </body></html>';

$mailto = 'armagedonius@gmail.com';  // ����� ����������
$from_name = 'armagedonius@gmail.com'; // ����������� (���)
$from_mail = 'armagedonius@gmail.com';  // ����� �����������
$replyto = 'armagedonius@gmail.com';  // ����� �����������
$subject = 'armagedonius@gmail.com';  // ���� ������
 
$message = $content;  // ����� ������
 
$from_name = '=?windows-1251?B?'.base64_encode($from_name).'?=';
$subject = '=?windows-1251?B?'.base64_encode($subject).'?=';
 
$header = "From: ".$from_name." <".$from_mail.">\r\n";
$header .= "Reply-To: ".$replyto."\r\n";
// ���� ������ � HTML ����, �� text/plain ������� �� text/html
$header .= "Content-type: text/html; windows-1251\r\n";  
$header .= $message."\r\n\r\n";
 
// �������� ���������
@mail($mailto, $subject, " ", $header);


*/



?>
