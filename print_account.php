 <meta charset="windows-1251">








<style>





                             #quantity {

    width: 32px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: center;
     font-family:'apple-system';
    /* font-weight:bold; */
 /*  border:  0.002em double black;*/
         line-height: 1.5em;
  /* border-color: rgba(0,0,0,.9); */

   } 
                             #price {

    width: 81px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: right;
     font-family:'apple-system';
 /*    font-weight:bold; */
 /*  border:  0.002em double black;*/
           line-height: 1.5em;
  /* border-color: rgba(0,0,0,.9); */

   } 


                             #pole_name {

    width: 450px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: left;
     font-family:'apple-system';
   /*  font-weight:bold; */
 /*  border:  0.002em double black;*/
         line-height: 1.5em;
  /* border-color: rgba(0,0,0,.9); */


   } 
                                #pole_name1 {

    width: 450; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: left;
     font-family:'apple-system';
     font-weight:bold;

   } 
                                #pole_algo {

    width: 150px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: left;
     font-family:'apple-system';
     font-weight:bold;
 text-align: center;
   } 




    .block_signet
     {  
    margin:auto;
    position: absolute ; /* Абсолютное позиционирование */
    left: 500; /* Положение элемента от правого края */
    top: 880px; /* Положение от верхнего края */
    width: 1px; /* Ширина блока */
   height:1px;    
overflow: visible ; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
       margin:3px 3px 3px 5px; 
                padding: 5px; 
                  text-align: left;
                      border-radius: 100px 100px;
    opacity: 0.6; /* Значение прозрачности */

                     }   

    .block_general
     {  
    margin:auto;
    position: absolute ; /* Абсолютное позиционирование */
       text-align:  left;
    left: 40; /* Положение элемента от правого края */
    top: 10px; /* Положение от верхнего края */
    width: 700px; /* Ширина блока */
   height:99%;    
overflow: visible ; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
       margin:3px 3px 3px 5px; 
                padding: 5px; 
                  text-align: left;
                      border-radius: 100px 100px;
    opacity: 1; /* Значение прозрачности */

                     }   

    #block_sample
     {  
    margin:auto;
    position: absolute ; /* Абсолютное позиционирование */
       text-align:  left;
    left: 100; /* Положение элемента от правого края */
    top: 10px; /* Положение от верхнего края */
    width: 600px; /* Ширина блока */
   height:200;    
overflow: visible ; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
       margin:3px 3px 3px 5px; 
                padding: 5px; 
                  text-align: center;
               
    /*opacity: 1; /* Значение прозрачности */


    border-style: double; /* Стиль рамки вокруг параграфа */
    border-width: 3px 7px 7px 4px; /* Толщина границы */
                     }   

    #block_sample1
     {  
    margin:auto;

       text-align:  left;
    left: 100; /* Положение элемента от правого края */
    top: 10px; /* Положение от верхнего края */
    width: 700px; /* Ширина блока */
   height:500;    



               



    border-style: double; /* Стиль рамки вокруг параграфа */
    border-width: 3px 7px 7px 4px; /* Толщина границы */
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
    position: absolute; /* Абсолютное позиционирование */
    left: 720px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 700px; /* Положение от верхнего края */
    width: 1000px; /* Ширина блока */
   height:160px;    
    padding: 5px; /* Поля вокруг текста */


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
    width: 100%; /* Ширина таблицы */
    /* border: 1px double black; /* Рамка вокруг таблицы */
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
  //Целое значение $sourceNumber вывести прописью по-русски
  //Максимальное значение для аругмента-числа PHP_INT_MAX
  //Максимальное значение для аругмента-строки минус/плюс 999999999999999999999999999999999999
  $smallNumbers=array( //Числа 0..999
   array('ноль'),
   array('','один','два','три','четыре','пять','шесть','семь','восемь','девять'),
   array('десять','одиннадцать','двенадцать','тринадцать','четырнадцать',
         'пятнадцать','шестнадцать','семнадцать','восемнадцать','девятнадцать'),
   array('','','двадцать','тридцать','сорок','пятьдесят','шестьдесят','семьдесят','восемьдесят','девяносто'),
   array('','сто','двести','триста','четыреста','пятьсот','шестьсот','семьсот','восемьсот','девятьсот'),
   array('','одна','две')
  );
  $degrees=array(
   array('дофигальон','','а','ов'), //обозначение для степеней больше, чем в списке
   array('тысяч','а','и',''), //10^3
   array('миллион','','а','ов'), //10^6
   array('миллиард','','а','ов'), //10^9
   array('триллион','','а','ов'), //10^12
   array('квадриллион','','а','ов'), //10^15
   array('квинтиллион','','а','ов'), //10^18
   array('секстиллион','','а','ов'), //10^21
   array('септиллион','','а','ов'), //10^24
   array('октиллион','','а','ов'), //10^27
   array('нониллион','','а','ов'), //10^30
   array('дециллион','','а','ов') //10^33
   //досюда написано в Вики по нашей короткой шкале: https://ru.wikipedia.org/wiki/Именные_названия_степеней_тысячи
  );
  
  if ($sourceNumber==0) return $smallNumbers[0][0]; //Вернуть ноль
  $sign = '';
  if ($sourceNumber<0) {
   $sign = 'минус '; //Запомнить знак, если минус
   $sourceNumber = substr ($sourceNumber,1);
  }
  $result=array(); //Массив с результатом
 
  //Разложение строки на тройки цифр
  $digitGroups = array_reverse(str_split(str_pad($sourceNumber,ceil(strlen($sourceNumber)/3)*3,'0',STR_PAD_LEFT),3));
  foreach($digitGroups as $key=>$value){
   $result[$key]=array();
   //Преобразование трёхзначного числа прописью по-русски
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
   
   //Учесть окончание слов для русского языка
   if ($value && $key) {
    $index = 3;
    if (preg_match("/^[1]$|^\\d*[0,2-9][1]$/",$value)) $index = 1; //*1, но не *11
    else if (preg_match("/^[2-4]$|\\d*[0,2-9][2-4]$/",$value)) $index = 2; //*2-*4, но не *12-*14
    $result[$key][]=$degrees[$key][0].$degrees[$key][$index];
   }
   $result[$key]=implode(' ',$result[$key]);
  }
  
  return $sign.implode(' ',array_reverse($result)) . " руб.";
 }
//................................................................................

/*
function number2string($number) {
  
  // обозначаем словарь в виде статической переменной функции, чтобы 
  // при повторном использовании функции его не определять заново
  static $dic = array(
  
    // словарь необходимых чисел
    array(
      -2  => 'две',
      -1  => 'одна',
      1 => 'один',
      2 => 'два',
      3 => 'три',
      4 => 'четыре',
      5 => 'пять',
      6 => 'шесть',
      7 => 'семь',
      8 => 'восемь',
      9 => 'девять',
      10  => 'десять',
      11  => 'одиннадцать',
      12  => 'двенадцать',
      13  => 'тринадцать',
      14  => 'четырнадцать' ,
      15  => 'пятнадцать',
      16  => 'шестнадцать',
      17  => 'семнадцать',
      18  => 'восемнадцать',
      19  => 'девятнадцать',
      20  => 'двадцать',
      30  => 'тридцать',
      40  => 'сорок',
      50  => 'пятьдесят',
      60  => 'шестьдесят',
      70  => 'семьдесят',
      80  => 'восемьдесят',
      90  => 'девяносто',
      100 => 'сто',
      200 => 'двести',
      300 => 'триста',
      400 => 'четыреста',
      500 => 'пятьсот',
      600 => 'шестьсот',
      700 => 'семьсот',
      800 => 'восемьсот',
      900 => 'девятьсот'
    ),
    
    // словарь порядков со склонениями для плюрализации
    array(
      array('рубль', 'рубля', 'рублей'),
      array('тысяча', 'тысячи', 'тысяч'),
      array('миллион', 'миллиона', 'миллионов'),
      array('миллиард', 'миллиарда', 'миллиардов'),
      array('триллион', 'триллиона', 'триллионов'),
      array('квадриллион', 'квадриллиона', 'квадриллионов'),
      // квинтиллион, секстиллион и т.д.
    ),
    
    // карта плюрализации
    array(
      2, 0, 1, 1, 1, 2
    )
  );
  
  // обозначаем переменную в которую будем писать сгенерированный текст
  $string = array();
  
  // дополняем число нулями слева до количества цифр кратного трем,
  // например 1234, преобразуется в 001234
  $number = str_pad($number, ceil(strlen($number)/3)*3, 0, STR_PAD_LEFT);
  
  // разбиваем число на части из 3 цифр (порядки) и инвертируем порядок частей,
  // т.к. мы не знаем максимальный порядок числа и будем бежать снизу
  // единицы, тысячи, миллионы и т.д.
  $parts = array_reverse(str_split($number,3));
  
  // бежим по каждой части
  foreach($parts as $i=>$part) {
    
    // если часть не равна нулю, нам надо преобразовать ее в текст
    if($part>0) {
      
      // обозначаем переменную в которую будем писать составные числа для текущей части
      $digits = array();
      
      // если число треххзначное, запоминаем количество сотен
      if($part>99) {
        $digits[] = floor($part/100)*100;
      }
      
      // если последние 2 цифры не равны нулю, продолжаем искать составные числа
      // (данный блок прокомментирую при необходимости)
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
      
      // берем последнее составное число, для плюрализации
      $last = abs(end($digits));
      
      // преобразуем все составные числа в слова
      foreach($digits as $j=>$digit) {
        $digits[$j] = $dic[0][$digit];
      }
      
      // добавляем обозначение порядка или валюту
      $digits[] = $dic[1][$i][(($last%=100)>4 && $last<20) ? 2 : $dic[2][min($last%10,5)]];
      
      // объединяем составные числа в единый текст и добавляем в переменную, которую вернет функция
      array_unshift($string, join(' ', $digits));
    }
  }
  
  // преобразуем переменную в текст и возвращаем из функции, ура!
  return join(' ', $string);
}


//...........................................................................
function number3string($number) {
	
	// обозначаем словарь в виде статической переменной функции, чтобы 
	// при повторном использовании функции его не определять заново
	static $dic = array(
	
		// словарь необходимых чисел
		array(
			-2	=> 'две',
			-1	=> 'одна',
			1	=> 'один',
			2	=> 'два',
			3	=> 'три',
			4	=> 'четыре',
			5	=> 'пять',
			6	=> 'шесть',
			7	=> 'семь',
			8	=> 'восемь',
			9	=> 'девять',
			10	=> 'десять',
			11	=> 'одиннадцать',
			12	=> 'двенадцать',
			13	=> 'тринадцать',
			14	=> 'четырнадцать' ,
			15	=> 'пятнадцать',
			16	=> 'шестнадцать',
			17	=> 'семнадцать',
			18	=> 'восемнадцать',
			19	=> 'девятнадцать',
			20	=> 'двадцать',
			30	=> 'тридцать',
			40	=> 'сорок',
			50	=> 'пятьдесят',
			60	=> 'шестьдесят',
			70	=> 'семьдесят',
			80	=> 'восемьдесят',
			90	=> 'девяносто',
			100	=> 'сто',
			200	=> 'двести',
			300	=> 'триста',
			400	=> 'четыреста',
			500	=> 'пятьсот',
			600	=> 'шестьсот',
			700	=> 'семьсот',
			800	=> 'восемьсот',
			900	=> 'девятьсот'
		),
		
		// словарь порядков со склонениями для плюрализации
		array(
			array('рубль', 'рубля', 'рублей'),
			array('тысяча', 'тысячи', 'тысяч'),
			array('миллион', 'миллиона', 'миллионов'),
			array('миллиард', 'миллиарда', 'миллиардов'),
			array('триллион', 'триллиона', 'триллионов'),
			array('квадриллион', 'квадриллиона', 'квадриллионов'),
			// квинтиллион, секстиллион и т.д.
		),
		
		// карта плюрализации
		array(
			2, 0, 1, 1, 1, 2
		)
	);
	
	// обозначаем переменную в которую будем писать сгенерированный текст
	$string = array();
	
	// дополняем число нулями слева до количества цифр кратного трем,
	// например 1234, преобразуется в 001234
	$number = str_pad($number, ceil(strlen($number)/3)*3, 0, STR_PAD_LEFT);
	
	// разбиваем число на части из 3 цифр (порядки) и инвертируем порядок частей,
	// т.к. мы не знаем максимальный порядок числа и будем бежать снизу
	// единицы, тысячи, миллионы и т.д.
	$parts = array_reverse(str_split($number,3));
	
	// бежим по каждой части
	foreach($parts as $i=>$part) {
		
		// если часть не равна нулю, нам надо преобразовать ее в текст
		if($part>0) {
			
			// обозначаем переменную в которую будем писать составные числа для текущей части
			$digits = array();
			
			// если число треххзначное, запоминаем количество сотен
			if($part>99) {
				$digits[] = floor($part/100)*100;
			}
			
			// если последние 2 цифры не равны нулю, продолжаем искать составные числа
			// (данный блок прокомментирую при необходимости)
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
			
			// берем последнее составное число, для плюрализации
			$last = abs(end($digits));
			
			// преобразуем все составные числа в слова
			foreach($digits as $j=>$digit) {
				$digits[$j] = $dic[0][$digit];
			}
			
			// добавляем обозначение порядка или валюту
			$digits[] = $dic[1][$i][(($last%=100)>4 && $last<20) ? 2 : $dic[2][min($last%10,5)]];
			
			// объединяем составные числа в единый текст и добавляем в переменную, которую вернет функция
			array_unshift($string, join(' ', $digits));
		}
	}
	
	// преобразуем переменную в текст и возвращаем из функции, ура!
	return join(' ', $string);
}
*/
//..................................................................................



function FirstBig($text) {

$name = $text;
//$name = iconv("UTF-8", "UTF-8", $name);
 
$first = mb_substr($name,0,1, 'windows-1251');//первая буква
$last = mb_substr($name,1);//все кроме первой буквы
$first = mb_strtoupper($first, 'windows-1251');
$last = mb_strtolower($last, 'windows-1251');
$name1 = $first.$last;
 
 

  return  $name1;
}




///////////////////////////////////////////////////////////////

/*

function numm_of_words($num)
{
$nul = 'ноль';
$ten = array(
array('','один','два','три','четыре','пять','шесть','семь', 'восемь','девять'),
array('','одна','две','три','четыре','пять','шесть','семь', 'восемь','девять'),
);
$a20 = array('десять','одиннадцать','двенадцать','тринадцать','четырнадцать' ,'пятнадцать','шестнадцать','семнадцать','восемнадцать','девятнадцать');
$tens = array(2=>'двадцать','тридцать','сорок','пятьдесят','шестьдесят','семьдесят' ,'восемьдесят','девяносто');
$hundred = array('','сто','двести','триста','четыреста','пятьсот','шестьсот', 'семьсот','восемьсот','девятьсот');
$unit = array( 
array('' ,'' ,'', 1),
array('' ,'' ,'' ,0),
array('тысяча' ,'тысячи' ,'тысяч' ,1),
array('миллион' ,'миллиона','миллионов' ,0),
array('миллиард','милиарда','миллиардов',0),
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
        900=>' девятьсот',
        800=>' восемьсот',
        700=>' семьсот',
        600=>' шестьсот',
        500=>' пятьсот',
        400=>' четыреста',
        300=>' триста',
        200=>' двести',
        100=>' сто',
        90=>' девяносто',
        80=>' восемьдесят',
        70=>' семьдесят',
        60=>' шестьдесят',
        50=>' пятьдесят',
        40=>' сорок',
        30=>' тридцать',
        20=>' двадцать',
        19=>' девятнадцать',
        18=>' восемнадцать',
        17=>' семнадцать',
        16=>' шестнадцать',
        15=>' пятнадцать',
        14=>' четырнадцать',
        13=>' тринадцать',
        12=>' двенадцать',
        11=>' одиннадцать',
        10=>' десять',
        9=>' девять',
        8=>' восемь',
        7=>' семь',
        6=>' шесть',
        5=>' пять',
        4>' четыре',
        3=>' три',
        2=>' два',
        1=>' один',
    );
 
    $level=array(
        4=>array('миллиард', 'миллиарда', 'миллиардов'),
        3=>array('миллион', 'миллиона', 'миллионов'),
        2=>array('тысяча', 'тысячи', 'тысяч'),
    );
 
    list($rub,$kop)=explode('.',number_format($n,2));
    $parts=explode(',',$rub);
 
    for($str='', $l=count($parts), $i=0; $i<count($parts); $i++, $l--) {
        if (intval($num=$parts[$i])) {
            foreach($words as $key=>$value) {
                if ($num>=$key) {
                    // Fix для одной тысячи
                    if ($l==2 && $key==1) {
                        $value='одна';
                    }
                    // Fix для двух тысяч
                    if ($l==2 && $key==2) {
                        $value='две';
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
        $str.=' '.num2word($rub,array('рубль', 'рубля', 'рублей'));
    }
 
    $str.=($str!=''?' ':'').$kop;
    $str.=' '.num2word($kop,array('копейка', 'копейки', 'копеек'));
 
    return mb_strtoupper(mb_substr($str,0,1,'utf-8'),'utf-8').
         mb_substr($str,1,mb_strlen($str,'utf-8'),'utf-8');
}


*/



//////////////////////////////////////////////////////////////////////////

    /*

$to - адрес получателя письма

$from_mail - адрес отправителя письма

$from_name - имя отправителя письма

$subject - тема письма

$message - само сообщение в HTML-формате

$file_name - путь к файлу, который надо прикрепить к письму

(это может быть имя файла, выбранного в поле <input type="file" name="file_name">)

*/


////////////////////////////////////////////////////////////////////////

//header('Content-type: application/vnd.ms-word');
//header('Content-Disposition: attachment; Filename=my_file.doc');

//header("application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
//header("Content-Disposition: attachment; filename=downloaded.xls");
// включаем буфер
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



//mail("armagedonius@gmail.com", "Загаловок", "Текст письма \n 1-ая строчка \n 2-ая строчка \n 3-ая строчка"); 



echo "<div class='block_general'>";




//////////////////////////Реквизиты/////////////////////////////////////////////////


 echo  "<div class='text'>";
echo "<b>Внимание! Счет действителен в течении 30 (Тридцати) календарных дней  <br> ";
echo " Оплата данного счета означает согласие с условием поставки товара</b> <br> <br> ";

echo "<div style='line-height: 1.0'><b>Поставщик,".space(1)."Грузоотправитель:</b> ".space(1)." </b>ООО &quot;ПО САВЭЛ&quot;   <br>142455,
 ".space(0)."Московская обл., Ногинский р-н, г. Электроугли, ул. Большое Васильево, д. 24    <br> ";




echo "<table border=0 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
echo "<font color = black style='font: 20px apple-system' >";


//echo "ООО ПО САВЭЛ <br> <br>        142455, Московская Обл., Ногинский р-н, г. Электроугли , ул. Большое Васильево , д. 24    ";

echo "<font color = black style='font: 20px apple-system' >";

echo "<br><b>Образец заполнения платежного поручения </b>";
 echo  "</div>";
?>



<table border=1 height=0  cellpadding='0' cellspacing='0' style='margin-left: 00px;'  >  
<tr><td align='center' width= 180px    >  ИНН 5031018790  <br> </td><td align='center' width= 180px   >  КПП  503101001 <br></td>
<td rowspan='2'><br><br> &#160  Сч № </td>  <td rowspan='2'><br><br> <? echo space(1); ?> 40702810440000054095</td>    </tr>

<tr><td width= 350px colspan = '2'>  &nbsp; ООО &quot;ПО САВЭЛ&quot;  <br> &nbsp; Получатель </td></tr>
<tr><td width= 350px colspan = '2' rowspan='2'> &nbsp; ПАО СБЕРБАНК  <br>&nbsp;&nbsp;БАНК </td>
<td width= 70px >&#160  БИК  <br></td>
<td width= 270px rowspan='2' > &#160   044525225  <br> &#160 30101810400000000225 </td>  </tr> <td width= 50px   rowspan='2'> &#160  Сч № </td></tr>



</table>
<?


 echo  "</div >";
//////////////////////////Шапка/////////////////////////////////////////////////

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
$shipconditions=$rows['shipconditions']; // условие поставки
$condition_pay=$rows['condition_pay']; // условие оплаты


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


if(!empty($inn)) { $inn= " ИНН " . $inn; }
if(!empty($kpp)) { $kpp= " КПП " . $kpp; }

$name_client=full_name_client_id($idclient);
 echo  "<div class='text'>";
echo "Счет № ".$number."  от $date_begin ".space(1)."г.<br>";
 echo  "</div>";
 

  echo  "<div class='text_left'>";
echo "<hr><font color='black'   style='font: 15px times '> ";

/*
echo "<div style='line-height: 1.0'><b>Поставщик,".space(1)."Грузоотправитель:</b> ".space(1)." </b>Общество с ограниченной ответственностью . ООО &quot;ПО САВЭЛ&quot;   <br>142455,
 ".space(0)."Московская обл., Ногинский р-н, г. Электроугли, ул. Большое Васильево,д. 24    <br> ";

echo "<b>Грузоотправитель:</b>".space(2)." Общество с ограниченной ответственностью . ООО &quot; ПО САВЭЛ &quot;    142455,  <br>
".space(37)."Московская обл., Ногинский р-н, г. Электроугли , ул. Большое Васильево , д. 24    <br><br>  ";
*/
echo "<br><b>Покупатель:".space(11)."</b>".space(0).$form." ".$name_client." ".$inn."  ".$kpp. ", ".$adress. " <br> ";
echo "<b>Грузополучатель: &nbsp;</b>".space(0).$form." ".$name_client." ".$inn."  ".$kpp. ", ".$adress. " <br> ";

$rem = $comment_print_acc;

echo $rem;
echo "</div> </font'> ";
//echo "Статус заказа :".space(2).$date_end." ";

//echo "Статус отгрузки:".space(2).name_status_zakaz_id($rows['shipment'])." ";
//echo space(50)."Дата отгрузки:".space(2).$date_shipment." ";



//echo "<script>alert('У вас ".md5($id) ."----". $name_client." ');</script>";

/////////////////////////////////////////////////////////////////////////// Список счета

echo "".space(18)  ?><font size="3" color="black" face="times"><b><?
$i=1;
///// шапка таблицы
$name =  array('№','Наименование','Кол','Ед','Цена','Сумма') ;
$long =  array('30',' 450','30  ','30','80  ','80') ;
 
$id=$_GET['id'];
$sss=sqlread("SELECT  SUM(price_sale*number ) as sum_acc FROM account_sub WHERE id_ac_gen= '$id'  ");

$sum_acc=$sss['sum_acc']; // сумма по счету без дополнительных наценок


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

if ($idalgorythm>0) { $namealgorythm="/алг. - ". $namealgorythm;} 


$config=$row['config'];  
if ($config>0) { $config="/конф. - ". $config;} 

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
echo  space (100) ."<b>Всего к оплате: </td>"  .space (27) . number_format($summa_gen, 2, ',', ' ')  ."</b><br>" ;
echo space (100) ."в том числе НДС (18%): "  .space (15) . number_format($nds, 2, ',', ' ')."<br>" ;
*/

echo "<td width = 650><b>". space(100) ."Всего к оплате: </td><td align = right width = 100><b>" . number_format($summa_gen, 2, ',', ' ')  ."</b></td></tr>" ;
//echo "<td width = 600 >". space(100) ."в том числе НДС (18%):</td> <td align = right width = 100>"  .$sum_nds."----" . number_format($nds, 2, ',', ' ')."</td>" ;
echo "<td width = 600 >". space(100) ."в том числе НДС (".round($ndsgen,0)."%):</td> <td align = right width = 100>" . number_format($sum_nds, 2, ',', ' ')."</td>" ;


//echo  space (100) ."Всего к оплате "  .space (27) . number_format($summa_gen, 2, ',', ' ') ."<br>" ;

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
echo "<b> Всего</b> наименований ". $count_str.",  ".space(1)." на сумму ".number_format($summa_gen, 2, ',', ' ') .space(2)."рублей.<br>"; 
echo "  (".$numtext .space(2).space(2). $kopeyki  .space(2)."копеек)<br>";


  echo  "</div>";





////////////////////////////////////////////////////////////////////////////////////////

$rows= sqlread ("SELECT * FROM  order_gen  WHERE  id_order ='$id' ");
//echo "Статус отгрузки:".space(2).name_status_zakaz_id($rows['shipment'])." ";
//echo space(50)."Дата отгрузки:".space(2).$date_shipment." <br>";
$name_client=full_name_client_id($idclient);

//echo "Покупатель: ".space(8).$name_client."<br>" ;

echo "  ";  


  echo  "<div class='text_left'>";

echo "<b>Условия оплаты:</b> " . $conditions_pay . "<br>";

//echo "<b>Срок поставки:</b> ".$deliverytime."<br>";

$roun= (int)(($day_delivery/10-round($day_delivery/10,0) )*10 );



if($roun=='0') {$day='Дней';}
if($roun =='1') {$day='День';}
if($roun=='2') {$day='Дня';}
if($roun=='3') {$day='Дня';}
if($roun=='4') {$day='Дня';}
if($roun>='5') {$day='Дней';}



echo "<b>Срок поставки:</b> ".$day_delivery ."    календарных дней при соблюдении условий оплаты.<br>";


echo "<b>Условия поставки:</b>".space(1).$acc_shipconditions."";




echo "<p>Руководитель     ".space(10)."    Директор ".space(20)."<img src='images/Signet_dir.png' width='50' height='50' alt='Пример'>".space(27)." Долгих В.В. <br>";
echo space(0)."__________________________".space(10) ."_________________".space(10) ."_________________  <br><br>";
echo space(40)." <font style='font: 10px apple-system' >    Должность   ".space(30) ." Подпись ".space(45) ." Расшифровка подписи    </font> </p>";

echo "<p> Главный бухгалтер ".space(35) ." <img src='images/Signature_buhg .png' width='50' height='50' alt='Пример''>".space(25)." Ядрихинская O.В. <br>";
echo space(0)."__________________________".space(10) ."_________________".space(10) ."_________________  <br><br>";



echo space(40)." <font style='font: 10px apple-system' >    Должность   ".space(30) ." Подпись ".space(45) ." Расшифровка подписи    </font> <br><br></p>";

 echo "<div class='block_signet'>";
echo " <img src='images/signet_savel.png' width='150' height='150' alt='Пример''></a></td> ";  


  echo "</div>";
//echo " &#160;&#160;&#160;&#160;&#160; подпись ___<img src='images/Signet_dir.png' width='50' height='50' alt='Пример'> (________________)    ";

echo "<br>";
//echo space(80)."ФИО";


///////////////////////////////////////////////////////////////////////////////


// сохраняем всё что есть в буфере в переменную $content
$content = ob_get_contents();
 ob_end_clean();
// отключаем и очищаем буфер


echo $content ;


$content=iconv("WINDOWS-1251", "UTF-8", $content) ;

//$content = htmlentities($content);
//$content = str_replace("&nbsp;",''," ");

$content = str_replace("&nbsp", " &#160;" , $content);
//$content= strip_tags($content);

    // Открыть текстовый файл
    $file = fopen("account_mail.doc", "w");

    // Записать строку текста
   fwrite($file, $content); 

//fwrite( $file, );

    // Закрыть текстовый файл
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


$content= "".space(40)."Счет № ".$number."  от $date_begin ".space(2)."<br>";





$content = '<html><body><br />' . $number . '  
<table border=0 height=0  cellpadding="0" cellspacing="0"  >
<td  font-size: 20px;  > ООО ПО САВЭЛ   </td> </tr></table>
письма с помощью php! </body></html>';

$mailto = 'armagedonius@gmail.com';  // Адрес получателя
$from_name = 'armagedonius@gmail.com'; // Отправитель (имя)
$from_mail = 'armagedonius@gmail.com';  // Адрес отправителя
$replyto = 'armagedonius@gmail.com';  // Адрес отправителя
$subject = 'armagedonius@gmail.com';  // Тема письма
 
$message = $content;  // Текст письма
 
$from_name = '=?windows-1251?B?'.base64_encode($from_name).'?=';
$subject = '=?windows-1251?B?'.base64_encode($subject).'?=';
 
$header = "From: ".$from_name." <".$from_mail.">\r\n";
$header .= "Reply-To: ".$replyto."\r\n";
// Если хотите в HTML виде, то text/plain смените на text/html
$header .= "Content-type: text/html; windows-1251\r\n";  
$header .= $message."\r\n\r\n";
 
// Отправка сообщения
@mail($mailto, $subject, " ", $header);


*/



?>
