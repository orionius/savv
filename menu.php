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
                          <li><a href="offers.php">������ <font color = 'cyan' ><b><? echo $name_user ?></font></b> </a></li>

<!--..................-->
      <li><a href="#">�����������</a>
                      <ul>
                          <li><a href="journal_account.php">������ ������ </a></li>  
                          <li><a href="account.php?new=yes">������� ����� ���� </a></li>   
                          <li><a href="journal_sales_invoice.php">������ ��������� ��������� </a></li>  
                          <li><a href="journal_paymentpp.php">������ ����� </a></li>       

                      </ul>
      </li>
<!--..................-->
     <li><a href="#"> ������</a>
                      <ul>
                          <li><a href="journal_order.php">������ �������</a></li>
                          <li><a href="order.php?id=new">������� ����� �����</a></li>
      
                      </ul>
    </li>
<!--..................-->
    <li><a href="#"> �������</a>
                      <ul>
                          <li><a href="clients.php">������ ��������</a></li>
                          <li><a href="clients.php?idd=new">�������� ������ �������</a></li>
      
                      </ul>
    </li>
<!--..................-->
    <li><a href="#"> ������������ </a>
            
                      <ul>
                          <li><a href="equipment.php">������ ������������</a></li>
                          <li><a href="collation.php">�������������</a> </li>
                          <li><a href="equipment.php?idd=new">�������� �����</a></li>
      
       



                <li><a href="#">������</a>
                      <ul>
          
                          <li><a href="prih_board.php">������ ����� ���� </a></li>
                          <li><a href="journal_board_prih.php">������ ���������</a></li>
                          <li><a href="prih_board.php?id=new">������� ����� ���������</a></li>
                      </ul>
                <li><a href="#">������</a>
                      <ul>
          
                          <li><a href="journal_board_give.php">������ �������� ���� </a></li>   
                          <li><a href="give_board.php?id=new">����� ��������� ���� </a></li>  
                          <li><a href="">������ ����������� ���� </a></li>
                          <li><a href="">������������ ���� � ������� </a></li>
                      </ul>
                </li>

                <li><a href="#">���� � ������</a>
                      <ul>
                          <li><a href="find_board.php">����� ����� </a></li>   
                          <li><a href=""></a></li>   
                          <li><a href=""> </a></li>
       
                      </ul>
                </li>

                <li><a href="#">������</a>
                      <ul>
                 <!--         <li><a href="journal_service.php">������ ������ </a></li> -->
                  <!--            <li><a href="service.php?id=new">������� � ������ </a></li> -->
                          <li><a href="service_list.php">������� � ������� </a></li>
     
                    </ul>
    </li>


      </li>



        </ul>
      </li>
<!--..................-->

      <li><a href="#"> ��������� </a>
                      <ul>
                          <li><a href="algorythm.php">������ ���������� </a></li>
                          <li><a href="algorythm.php?idd=new">�������� ����� �������� </a></li>
      
                      </ul>
      </li>

<!--..................-->

      <li><a href="#">����������� ����������</a>
            <ul>
                <li><a href="#">������</a>
                      <ul> 
                            <li><a href="journal_prih_element.php">������ ���������</a></li>
                            <li><a href="prihod_elements.php">����� ������</a></li>
                      </ul>  
                </li>  
            
               

           
                <li><a href="#">������ �����������</a>
                      <ul>
                            <li><a href="journal_give_element.php">������ ���������</a></li>
                            <li><a href="prihod_elements.php">����� ���������</a></li>
                            <li><a href="give_element.php">������ � �������</a></li>
                      </ul>    
                </li>             

<li><a href="defect.php">����������� ������</a></li>

                <li> <a href="#">������</a> 
                      <ul> 
                            <li><a href="">�����������</a></li>
                            <li><a href="">������ �������</a></li>
                            <li><a href="#">�������</a></li>
                           
                      </ul>
                </li>


          </ul> 
      </li>
<!--..................-->
 

      <li><a href="#">������</a>
                    <ul>
                          <li><a href="reports.php">������</a></li>
                          <li><a href="">������ ������� �������</a></li>
                          <li><a href="">������������� �������</a></li>
                          <li><a href="">������</a></li>
     
                    </ul>
      </li>



      <li><a href="index.php?reset=1">����� </a></li>
    </ul>
        <!-- ����� ������ -->
    </div>
    <!-- ����� ����� #mainmenu -->
</body>


</html>