<?

if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }
?>

<!DOCTYPE html>
<html>
  <head>
 <meta charset="windows-1251">
    <title>�������� ���������</title>
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
      <li><a href="offers.php">����������� </a></li>


      <li><a href="#">����</a>
        <ul>
          
          <li><a href="journal_account.php">������� ����� </a></li>   
        

        </ul>
      </li>

     <li><a href="#"> ������</a>
        <ul>
          <li><a href="journal_order.php">������ �������</a></li>
          <li><a href="order.php?id=new">������� ����� �����</a></li>
      
        </ul>
      </li>

            <li><a href="#"> �������</a>
        <ul>
          <li><a href="clients.php">������ ��������</a></li>
          <li><a href="clients.php?idd=new">�������� ������ �������</a></li>
      
        </ul>
      </li>

                  <li><a href="#"> ������������ </a>
        <ul>
          <li><a href="equipment.php">������ ������������</a></li>
          <li><a href="equipment.php?idd=new">�������� �����</a></li>
      
        </ul>
      </li>


            <li><a href="#"> ��������� </a>
        <ul>
          <li><a href="algorythm.php">������ ���������� </a></li>
          <li><a href="algorythm.php?idd=new">�������� ����� �������� </a></li>
      
        </ul>
      </li>



 



      <li><a href="#">������</a>
        <ul>
          <li><a href="prih_board.php">������ ����� ���� </a></li>
          <li><a href="journal_board_prih.php">������ ���������</a></li>
          <li><a href="prih_board.php?id=new">������� ����� ���������</a></li>
        </ul>
      </li>


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


      <li><a href="#">�������</a></li>


      <li><a href="#">������</a>
        <ul>
          <li><a href="journal_service.php">������ ������ </a></li>
          <li><a href="service.php?id=new">������� � ������ </a></li>
          <li><a href="">������� � ������� </a></li>
     
        </ul>
      </li>

      <li><a href="#">����������� ����������</a>
        <ul>
          <li><a href="journal_prih_element.php">������ ������</a></li>
          <li><a href="prihod_elements.php">������</a></li>
          <li><a href="journal_give_element.php">������ ������</a></li>
          <li><a href="give_element.php">������ � �������</a></li>
          <li><a href="">�����������</a></li>
          <li><a href="">������ �������</a></li>

     
        </ul>
      </li>

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
 

 
  </body>


</html>

<?


?>
