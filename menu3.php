<?

if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }
?>

<!DOCTYPE html>
<html>
  <head>
 <meta charset="windows-1251">
    <title>Название документа</title>
    <style>
      #navbar ul{
        display: none;
        background-color: #f90;
        position: absolute;
        top: 100%;
      }
      #navbar li:hover ul { display: block; }
      #navbar, #navbar ul{
        margin: 0;
        padding: 0;
        list-style-type: none;
      }
      #navbar {
        height: 50px;
        background-color: #666;
        padding-left: 25px;
        min-width: 470px;
      }
      #navbar li {
        float: left;
        position: relative;
        height: 100%;
      }
      #navbar li a {
        display: block;
        padding: 6px;
        width: 100px;
        color: #fff;
        text-decoration: none;
        text-align: center;
      }
      #navbar ul li { float: none; }
      #navbar li:hover { background-color: #f90; }
      #navbar ul li:hover { background-color: #666; }
    </style>
  </head>
 <font color='black'   style='font: 14px apple-system'> 
  <body>
  
    <ul id="navbar">
      <li><a href="offers.php">Предложения </a></li>


      <li><a href="#">Счет</a>
        <ul>
          
          <li><a href="journal_account.php">Открыть счета </a></li>   
        

        </ul>
      </li>

     <li><a href="#"> Заказы</a>
        <ul>
          <li><a href="journal_order.php">Журнал заказов</a></li>
          <li><a href="order.php?id=new">Создать новый заказ</a></li>
      
        </ul>
      </li>

            <li><a href="#"> Клиенты</a>
        <ul>
          <li><a href="clients.php">Журнал клиентов</a></li>
          <li><a href="clients.php?idd=new">Добавить нового клиента</a></li>
      
        </ul>
      </li>

                  <li><a href="#"> Оборудование </a>
        <ul>
          <li><a href="equipment.php">Журнал Оборудования</a></li>
          <li><a href="equipment.php?idd=new">Добавить новое</a></li>
      
        </ul>
      </li>


            <li><a href="#"> Алгоритмы </a>
        <ul>
          <li><a href="algorythm.php">Журнал Алгоритмов </a></li>
          <li><a href="algorythm.php?idd=new">Добавить новый алгоритм </a></li>
      
        </ul>
      </li>



 



      <li><a href="#">Приход</a>
        <ul>
          <li><a href="prih_board.php">Приход новых плат </a></li>
          <li><a href="journal_board_prih.php">Журнал приходных</a></li>
          <li><a href="prih_board.php?id=new">Создать новую приходную</a></li>
        </ul>
      </li>


      <li><a href="#">Расход</a>
        <ul>
          
          <li><a href="journal_board_give.php">Журнал расходов плат </a></li>   
           <li><a href="give_board.php?id=new">Новая расходная плат </a></li>  
          <li><a href="">Журнал перемещений плат </a></li>
          <li><a href="">Комплектация плат в изделия </a></li>
        </ul>
      </li>




      <li><a href="#">Инфо о товаре</a>
        <ul>
          <li><a href="find_board.php">Поиск платы </a></li>   
          <li><a href=""></a></li>   
          <li><a href=""> </a></li>
       
        </ul>
      </li>


      <li><a href="#">Каталог</a></li>


      <li><a href="#">Сервис</a>
        <ul>
          <li><a href="journal_service.php">Журнал сервис </a></li>
          <li><a href="service.php?id=new">Принять в сервис </a></li>
          <li><a href="">Изделия в сервисе </a></li>
     
        </ul>
      </li>

      <li><a href="#">Электронные компоненты</a>
        <ul>
          <li><a href="journal_prih_element.php">Журнал приход</a></li>
          <li><a href="prihod_elements.php">Приход</a></li>
          <li><a href="journal_give_element.php">Журнал расход</a></li>
          <li><a href="give_element.php">Расход в изделия</a></li>
          <li><a href="">Перемещения</a></li>
          <li><a href="">Другие расходы</a></li>

     
        </ul>
      </li>

      <li><a href="#">Отчеты</a>
        <ul>
          <li><a href="reports.php">Полная</a></li>
          <li><a href="">Отдано готовых изделий</a></li>
          <li><a href="">Изготовленные изделия</a></li>
          <li><a href="">Другое</a></li>
     
        </ul>
      </li>



      <li><a href="index.php?reset=1">Выход </a></li>
    </ul>
 

 
  </body>


</html>

<?


?>
