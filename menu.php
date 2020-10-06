<?session_start();


//include 'conn.php';
//include 'function.php';
$name_user=$_SESSION['name_user'];
$hashses=$_SESSION['hashses'] ;
$iduser=$_SESSION['user'] ;



//if (empty($name_user)) {echo "<script> document.location.href='index.php?reset=1'</script>"; }


//$iduser=id_user_hash();


?> 

<head>
    <meta http-equiv="Content-Type" content="text/html; windows-1251">
    <title></title>
    <link rel="stylesheet" href="css/style_menu2.css" />
</head>

<body>
    <div id="mainmenu">
    <font color = white >  </font>
     <ul >
                          <li><a href="offers.php">Привет <font color = 'cyan' ><b><? echo $name_user ?></font></b> </a></li>

<!--..................-->
      <li><a href="#">Бухгалтерия</a>
                      <ul>
                          <li><a href="journal_account.php">Журнал счетов </a></li>  
                          <li><a href="account.php?new=yes">Создать новый счет </a></li>   
                          <li><a href="journal_sales_invoice.php">Журнал расходных накладных </a></li>  
                          <li><a href="journal_paymentpp.php">Журнал оплат </a></li>       

                      </ul>
      </li>
<!--..................-->
     <li><a href="#"> Заказы</a>
                      <ul>
                          <li><a href="journal_order.php">Журнал заказов</a></li>
                          <li><a href="order.php?id=new">Создать новый заказ</a></li>
      
                      </ul>
    </li>
<!--..................-->
    <li><a href="#"> Клиенты</a>
                      <ul>
                          <li><a href="clients.php">Журнал клиентов</a></li>
                          <li><a href="clients.php?idd=new">Добавить нового клиента</a></li>
      
                      </ul>
    </li>
<!--..................-->
    <li><a href="#"> Оборудование </a>
            
                      <ul>
                          <li><a href="equipment.php">Журнал Оборудования</a></li>
                          <li><a href="collation.php">Укомплектовка</a> </li>
                          <li><a href="equipment.php?idd=new">Добавить новое</a></li>
      
       



                <li><a href="#">Приход</a>
                      <ul>
          
                          <li><a href="prih_board.php">Приход новых плат </a></li>
                          <li><a href="journal_board_prih.php">Журнал приходных</a></li>
                          <li><a href="prih_board.php?id=new">Создать новую приходную</a></li>
                      </ul>
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

                <li><a href="#">Сервис</a>
                      <ul>
                 <!--         <li><a href="journal_service.php">Журнал сервис </a></li> -->
                  <!--            <li><a href="service.php?id=new">Принять в сервис </a></li> -->
                          <li><a href="service_list.php">Изделия в сервисе </a></li>
     
                    </ul>
    </li>


      </li>



        </ul>
      </li>
<!--..................-->

      <li><a href="#"> Алгоритмы </a>
                      <ul>
                          <li><a href="algorythm.php">Журнал Алгоритмов </a></li>
                          <li><a href="algorythm.php?idd=new">Добавить новый алгоритм </a></li>
      
                      </ul>
      </li>

<!--..................-->

      <li><a href="#">Электронные компоненты</a>
            <ul>
                <li><a href="#">Приход</a>
                      <ul> 
                            <li><a href="journal_prih_element.php">Журнал приходных</a></li>
                            <li><a href="prihod_elements.php">Новый приход</a></li>
                      </ul>  
                </li>  
            
               

           
                <li><a href="#">Расход компонентов</a>
                      <ul>
                            <li><a href="journal_give_element.php">Журнал расходных</a></li>
                            <li><a href="prihod_elements.php">Новая расходная</a></li>
                            <li><a href="give_element.php">Расход в изделия</a></li>
                      </ul>    
                </li>             

<li><a href="defect.php">Бракованные детали</a></li>

                <li> <a href="#">Другое</a> 
                      <ul> 
                            <li><a href="">Перемещения</a></li>
                            <li><a href="">Другие расходы</a></li>
                            <li><a href="#">Каталог</a></li>
                           
                      </ul>
                </li>


          </ul> 
      </li>
<!--..................-->
 

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
        <!-- Конец списка -->
    </div>
    <!-- Конец блока #mainmenu -->
</body>


</html>