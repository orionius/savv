
<?
//session_start();
if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10 ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }
?>

<html>
 <head>
  <meta charset="utf-8">
  <title></title>
  <style>
   body {



  background: #466368;
  background: -webkit-linear-gradient(#FFF8DC, #DEB887);
  background:    -moz-linear-gradient(#FFF8DC, #DEB887);
  background:         linear-gradient(#FFF8DC, #DEB887);
  background: -moz-linear-gradient(top, #e2e2e2 0%, #dbdbdb 50%, #d1d1d1 51%, #fefefe 100%)   no-repeat; 



  background: -webkit-linear-gradient(DimGrey, Gainsboro);


  background-image: url('/images/dark-blue-gradient-wallpaper-2.jpg') ; 



   
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
     opacity: 10; /* Значение прозрачности */
     background-size: cover;
   }
  </style>
 </head>
 <body>
 </body>
</html>


<?


?>