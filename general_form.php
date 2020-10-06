<?
session_start();



if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >50  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }

?>

<html lang="en">
<head>
  <meta charset="windows-1251"> 
  <meta http-equiv="Content-Type" content="text/html; windows-1251" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?
 header("Content-Type: text/html; charset=windows-1251"); 

include "background.php";
include "menu.php";

//include 'error_visible.php';

//echo "ПРИВЕТ";  
?>
</body>
</html>






