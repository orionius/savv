 <? session_start(); ?>
 <? function redirect($url){header('Location: '.$url);}  ?>

 <meta charset="windows-1251">








<?

include "background.php";
include 'conn.php';
include 'function.php';
$user=id_user_hash();


if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }


?>


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="style.css">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="daterangepicker/moment.js"></script>
  <script src="daterangepicker/daterangepicker.js"></script>

  <script>
$(function(){
  $('#date').daterangepicker({
    singleDatePicker: true,
    locale: {
      format: 'DD.MM.YYYY'
    }
  });
});
  </script>



<style>

   #gradient {
    background: #fefcea; /* Для старых браузров */
    background: linear-gradient(to top, #808080, #ececec);
      }

   .fig {
    text-align: center; /* Выравнивание по центру */ 
   }

   #button_pic {
    background: #fefcea; /* Для старых браузров */
    background: linear-gradient(to top, #808080, #ececec);
     border-radius: 20px;
    /*    box-shadow: 0 0 20px rgba(0,0,0,0.5); /* Параметры тени */
         height:33px;  
         border: 4px
      }

   .fig {
    text-align: center; /* Выравнивание по центру */ 
   }

   .fly_comment {
    display: inline-block; /* Строчно-блочный элемент */
    position: relative; /* Относительное позиционирование */
   }
   .fly_comment:hover::after {
    content: attr(data-title); /* Выводим текст */
    position: absolute; /* Абсолютное позиционирование */
    left: 100%; top: 110%; /* Положение подсказки */
    z-index: 1; /* Отображаем подсказку поверх других элементов */
    background: rgba(255,255,230,0.9); /* Полупрозрачный цвет фона */
    font-family: Arial, sans-serif; /* Гарнитура шрифта */
    font-size: 11px; /* Размер текста подсказки */
    padding: 5px 10px; /* Поля */
    border: 1px solid #333; /* Параметры рамки */
    border-radius: 20px;
   }

                             #input_shap {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
         background: #E0FFFF; /* Цвет фона */ 
         height:35px;  
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
   } 

                                #data_shap {

    width: 150px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

     height:35px;  
         background: #E0FFFF; /* Цвет фона */ 
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
   } 
                                #status_shap {

    width: 200px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
              background: #E0FFFF; /* Цвет фона */ 

              height:35px;  
  margin:3px 3px 3px 5px; 
       border-radius: 4px;

   } 


                                #client_shap {

    width: 300px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;


height:35px;  
         background: #E0FFFF; /* Цвет фона */ 
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
   } 




                             #pole_id {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;



   } 

                             #pole_id_pay {

    width: 50px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;



   } 


                                #status_journ {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: center;
     font-family:'arial';
     font-weight:bold;

border: 1px solid #ccc; /* серая рамка */

   } 

                             #pole_nacc {

    width: 60px; /* Ширина поля в пикселах */

    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
 border: 0px double black; /* Параметры границы */
border: 1px solid #ccc; /* серая рамка */

   } 


                             #pole_ceny {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 18px;  
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 

                             #pole_ceny_pay {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 12px;  
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 

                                #pole_data_pay {

    width: 60px; /* Ширина поля в пикселах */
    font-size: 12px;  
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 

#pole_alg{

    width: 100px; /* Ширина поля в пикселах */
    font-size: 18px;  
    text-align: right;
     font-family:'arial';
     font-weight:bold;

   } 


                             #nameclient_pay {

    width: 200px; /* Ширина поля в пикселах */
    font-size: 18px;  
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 


                                #pole_name {

    width: 200px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: left;
     font-family:'amaze';
    

   } 

                                #pole_name_pay {

    width: 200px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
    

   } 

                                #pole_nameac {

    width: 700px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: left;
     font-family:'arial';
    

   } 

                                  #pole_note {

    width: 100px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'arial';
    
     border: 1px solid #ccc; /* серая рамка */
white-space:pre;
   }  


                                  #sum_jour {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: right;
     font-family:'arial';
   
     border: 1px solid #ccc; /* серая рамка */
white-space:pre;
   }  

                                  #pole_client_jour {

    width: 140px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'arial';
  
     border: 1px solid #ccc; /* серая рамка */
white-space:pre;
   }  

                                     #pole_noteac {

    width: 960px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
 
background: #E0FFFF; /* Цвет фона */ 
       margin:3px 3px 3px 5px; 
       border-radius: 4px;

   }  
                                        #pole_notepay {

    width: 100px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'arial';


   }  
                                  #pole_data{

    width: 150px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
    



   }  


                                     #pole_stat_jour{

    width: 150px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
    
   border: 1px solid #ccc; /* серая рамка */


   }  

                                  #pole_data_jour{

    width: 60px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: center;
     font-family:'arial';

border: 1px solid #ccc; /* серая рамка */


   }  

                                  #pole_button{

    width: 80px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
   }  

                                  #dater{

    width: 150px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

height:35px;  

         background: #E0FFFF; /* Цвет фона */ 
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
   }  
#add_prod {

    width: 300px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

height:25px;  

         background: #FFFFE0 ; /* Цвет фона */ 
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
  
}



       .genblock
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 3%; /* Положение элемента от левого края */


    top: 60px; /* Положение от верхнего края */
    width: 1750px; /* Ширина блока */
  height:820px;
    padding: 5px; /* Поля вокруг текста */

overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
 background: url(images/block_fon.jpg)  no-repeat center center fixed;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */   

       margin:3px 3px 3px 5px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.5); /* Параметры тени */
      margin: auto; /* Выравниваем по центру */   
                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 0.9; /* Значение прозрачности */
                     }   




 
            .top_inf
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 10px; /* Положение от верхнего края */
    width: 1150px; /* Ширина блока */
   height:220px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
   /* background-image: url('/images/bacground_div.jpg');*/

    background: rgba(230, 230, 250, 0.2); /* Цвет фона */
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;


      float:left; 
       margin:3px 3px 3px 5px; 


                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 10; /* Значение прозрачности */

    float:left;

                     }    

            #menu_spisok
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 15px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 20px; /* Положение от верхнего края */
    width: 700px; /* Ширина блока */
   height:50px;    
    padding: 5px; /* Поля вокруг текста */
   


overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;



                     }    

            #ico
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */



    width: 60px; /* Ширина блока */
   height:30px;    
    padding: 5px; /* Поля вокруг текста */
   


overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;
    border-radius: 5px;


                     }    


               .add_prod
     {  


    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 235px; /* Положение от верхнего края */
    width: 1710px; /* Ширина блока */
   height:75px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
   /* background-image: url('/images/bacground_div.jpg');*/

    background: rgba(230, 230, 250, 0.2); /* Цвет фона */
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;
      float:left; 
       margin:3px 3px 3px 5px; 


                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 10; /* Значение прозрачности */

    float:left;

                     }    
         .datablock_subaccount
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 315px; /* Положение от верхнего края */
    width: 1710px; /* Ширина блока */
   height:480px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
   /* background-image: url('/images/bacground_div.jpg');*/

    background: rgba(230, 230, 250, 0.2); /* Цвет фона */
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;


      float:left; 
       margin:3px 3px 3px 5px; 


                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 10; /* Значение прозрачности */

    float:left;

                     }             
   

               .block_pay_up
     {  


    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 1170px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 10px; /* Положение от верхнего края */
    width: 550px; /* Ширина блока */
   height:220px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
   /* background-image: url('/images/bacground_div.jpg');*/

    background: rgba(230, 230, 250, 0.2); /* Цвет фона */
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;
      float:left; 
       margin:3px 3px 3px 5px; 


                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 10; /* Значение прозрачности */

    float:left;

                     }   
   
               .block_pay
     {  


    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 630px; /* Положение от верхнего края */
    width: 850px; /* Ширина блока */
   height:180px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
   /* background-image: url('/images/bacground_div.jpg');*/

    background: rgba(230, 230, 250, 0.2); /* Цвет фона */
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;
      float:left; 
       margin:3px 3px 3px 5px; 


                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 10; /* Значение прозрачности */

    float:left;

                     }   
   
               .block_ship
     {  


    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 870px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 630px; /* Положение от верхнего края */
    width: 850px; /* Ширина блока */
   height:180px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
   /* background-image: url('/images/bacground_div.jpg');*/

    background: rgba(230, 230, 250, 0.2); /* Цвет фона */
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;
      float:left; 
       margin:3px 3px 3px 5px; 


                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 10; /* Значение прозрачности */

    float:left;

                     }   


               .label
     {  


    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    font-size: 30px; 
         font-family:'amaze';
         font-color:'Navy';
     font-weight:bold;

    top: 0px; /* Положение от верхнего края */
    width: 320px; /* Ширина блока */
   height:40px;    
    padding: 5px; /* Поля вокруг текста */
    background: black; /* Цвет фона */ 
   /* background-image: url('/images/bacground_div.jpg');*/

       background: #fefcea; /* Для старых браузров */
    background: linear-gradient(to top, #008080, #ffecec);
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;
      float:left; 
       margin:3px 3px 3px 5px; 


                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 10; /* Значение прозрачности */

    float:left;

                     }   
               .label_pay
     {  


    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 50px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    font-size: 10px; 
         font-family:'amaze';
         font-color:'Navy';
     font-weight:bold;

    top: 10px; /* Положение от верхнего края */
    width: 480px; /* Ширина блока */
   height:30px;    
    padding: 5px; /* Поля вокруг текста */
    background: black; /* Цвет фона */ 
   /* background-image: url('/images/bacground_div.jpg');*/

       background: #fefcea; /* Для старых браузров */
    background: linear-gradient(to top, #008080, #ffecec);
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;
      float:left; 
       margin:3px 3px 3px 5px; 
 text-align: center;

                padding: 5px; 
             
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 10; /* Значение прозрачности */

    float:left;

                     }   
                   .label_ship
     {  


    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 50px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    font-size: 10px; 
         font-family:'amaze';
         font-color:'Navy';
     font-weight:bold;

    top: 10px; /* Положение от верхнего края */
    width: 780px; /* Ширина блока */
   height:30px;    
    padding: 5px; /* Поля вокруг текста */
    background: black; /* Цвет фона */ 
   /* background-image: url('/images/bacground_div.jpg');*/

       background: #fefcea; /* Для старых браузров */
    background: linear-gradient(to top, #008080, #ffecec);
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
background-size: cover;
      float:left; 
       margin:3px 3px 3px 5px; 
 text-align: center;

                padding: 5px; 
             
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
    opacity: 10; /* Значение прозрачности */

    float:left;

                     }                 

</style>

<?



if (!empty($_POST['zakaz']) ) {  


echo "<script>alert('У вас ". $_POST['zakaz'] ."----".$price[$key]." ');</script>";

}
///////////////////////////////////////////////////////////Удалить одну позицию в расходной////////////////////////////////////////////////////
if (!empty($_GET['del_sub']) ) {  $idsub=$_GET['idsub'];$id=$_GET['id'];

sqlread("DELETE FROM sales_invoice_sub WHERE id_sub = '$idsub' ");
}

//////////////////////////////////////////////////////////Распечатать накладную/////////////////////////////////////////////////////////////////////////////////////////////////////////

if (!empty($_POST['print_acc']) ) {  
$id=$_GET['id'];

echo "<script>alert('ПЕЧАТЬ');</script>";


echo "<script> document.location.href='sales_invoice.php?id=$id';</script>"; 
}
////////////////////////////////////////////////////////// Сохранить данные счета вместе с шапкой //////////////////////////////////////////////////////////////////////////////////////
if (!empty($_POST['save_doc']) ) {  

$idgen=$_POST['idgen'];
  $dates=$_POST['dates'];
  $idclient=$_POST['idclient'];


    $n_account=$_POST['n_account'];
  $idstatus=$_POST['idstatus'];

  $comment=($_POST['comment']);
  $discount=$_POST['discount'];

  $dates=date("Y.m.d",strtotime( $dates ));





 // echo "<script>alert('У вас ". $id ."----".$idclient." ');</script>";

  sqlread("UPDATE sales_invoice_gen  SET accountofthe = ' $dater', idclient='$idclient',status='$idstatus',idclient='$idclient',comment ='$comment', discount ='$discount'  WHERE id_ac_gen = '$idgen' "  );



 $id_ac_sub=$_POST['id_ac_sub'];
 $price=$_POST['price'];
 $number=$_POST['number'];
 $unit=$_POST['unit'];
$id_alg=$_POST['id_alg'];

$name_equipment=$_POST['name_equipment'];


if (is_array($id_ac_sub)) { // Проверяем, является ли эта переменная массивом данных, если да, то исполняем код в цикле for, если нет, выходим из выполнения скрипта
foreach ($id_ac_sub as $key => $value) {  

 echo "<script>alert('У вас ". $value ."----".$price[$key]." ');</script>";

$row=sqlread("SELECT config FROM algorythm WHERE id = '$id_alg[$key]'");
$config= $row['config'];




sqlread("UPDATE account_sub  SET price = '$price[$key]' , unit= '$unit[$key]'   ,  number = '$number[$key]' ,idalgorythm='$id_alg[$key]',config='$config',name_equipment='$name_equipment[$key]' WHERE id_ac_sub = '$value' ");


}}



echo "<script> document.location.href='sales_invoice.php?id=$idgen';</script>"; 
}
//===========================================================================================================================================================================




 echo "<div class='genblock'>";
  ///////////////////////////////Шапка ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////Шапка ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////Шапка ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


echo "<div class='top_inf'>";

//echo "<form action='account.php' method='GET'  >";
$id=$_GET['id'];
echo "<form action='sales_invoice.php?id=$id' method='POST'  >"; 
$id=$_GET['id'];
echo "<input visibility : hidden type='text' id='pole_null' textarea name='idgen'   value='$id'>   ";


echo "<font style='font: 15px apple-system' color = black ><b>";
$id=$_GET['id'];
$row= sqlread ("SELECT * FROM  sales_invoice_gen  WHERE  idgen ='$id' ");
$idgen=$row['idgen'];
$status=$row['status'];
$dates=$row['dates'];
$account_gen=$row['account_gen'];


echo space(85)."  <input bgcolor='red' visibility : hidden type='text' id='pole_idprih' textarea name='id'   value='$id'>   ";
echo space(5) ; ?><font style='font: 25px apple-system' color = black ><b> № </b></font>  <input bgcolor='red' type='text' id='input_shap' textarea name='n_account'   value='<? echo $idgen ?> '  onkeydown="if(event.keyCode==13){return false;}"  >   <?
echo " от   <input   type='date' min='2000-01-01' id='dater' name='dates' value='".$dates."' onkeydown='if(event.keyCode==13){return false;}'   > " ;

echo " по счету №   <input   type='text' min='2000-01-01' id='dater' name='dates' value='".$account_gen."' onkeydown='if(event.keyCode==13){return false;}'   > " ;


//echo space(5). " <input type='submit' name='add_account'  class='btn btn-primary  btn-sm'  value='создать новый счет' /> " ;

?> 
<!-- 
<input type='submit' color = cyan name="print_acc"  class='btn btn-primary  btn-sm'  value='Печать' /> 
   <input type='submit' color = cyan name="print_acc_on_email" class='btn btn-primary  btn-sm'   value='Отправить на e-mail ' /> 
     <input type='submit' color = cyan name="save_acc"  class='btn btn-primary  btn-sm'   value='Сохранить ' /> 
 
   <td> <a href='account.php?id='.$id.'><img src='images/zakaz.jpg'  width='60' height='30' alt='Пример'></a></td> 
<td> <a  href='account.php?id='.$id.'    ><img src='images/dengi2.png' width='60' height='30' alt='Пример'></a></td> 
         <td> <a href='account.php?id='.$id.'><img src='images/gruzovik1.png' width='60' height='30' alt='Пример'></a></td> 
-->


  <button name = 'add_account'   value='создать новый счет'       >   <div class="fly_comment" data-title="Создать новый документ"> <img src="images/add_doc.png"  width='40' height='30' alt="Зонтик"   id = 'button_pic' style="vertical-align: middle"></div></button>  
   <button name = 'print_acc'   value='Печать'       > <div class="fly_comment" data-title="Распечатать документ"> <img src="images/printer.png"  width='40' height='30' alt="Зонтик"   id = 'button_pic' style="vertical-align: middle"></div></button>
 <!--  <button name = 'print_acc_on_email'   value='Отправить на e-mail '       > <div class="fly_comment" data-title="Отправить письмо заказчику"> <img src="images/maill.jpg"  width='50' height='30' alt="Зонтик"   id = 'button_pic' style="vertical-align: middle"></div></button> -->
   <button name = 'save_doc'   value='Сохранить'       ><div class="fly_comment" data-title="Сохранить данные счета">  <img src="images/diskette.png"  width='30' height='30' alt="Зонтик"   id = 'button_pic' style="vertical-align: middle"></div></button>
 <!-- <button name = 'zakaz'   value='10'       ><div class="fly_comment" data-title="Создать заказ на основе этого счета"> <img src="images/zakaz.jpg"  width='60' height='30' alt="Зонтик"   id = 'button_pic' style="vertical-align: middle"></div></button>  -->



      <div class='label'>  <font color='Navy'   > <?  echo 'Расходная накладная' ; ?>  </div>
<?







//$dater=date("d.m.Y",strtotime($row['accountofthe'] ));



 ?> <br>          <hr>  <?

echo "Клиент";
echo space(14);

$client=$row['idclient'];

//$qq=sqlread("SELECT * FROM client WHERE idclient ='$client' ");
echo "<font style='font: 30px apple-system' color = black  ><b>";
echo "<font style >".name_client_id($client);
echo "</font>";
/*
/////........................список клиентов
$idclient= $client;//$_SESSION['idclient'];
$rr=sqlread("SELECT * FROM client WHERE idclient = '$idclient'"); 
$sql = "SELECT * FROM client ORDER BY company ASC ";
$result_select = mysql_query($sql);

?> <select name="idclient" id='client_shap' > <?

$object->company = $rr['company'] ;

echo   "<option  selected value=$idclient   > $object->company   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->idclient' > $object->company </option> ";}  
echo "</select>";
////..........................
*/

/*
$discount=$row['discount'];

//echo space(5)."<input type='text'  name='status'  id='data_shap'  placeholder='Номер счета'  value=' ".$status." ' /> " ;

echo "Усл. оплаты ".space(1);

/////........................список статус
//$status= $client;//$_SESSION['idclient'];
$rr=sqlread("SELECT * FROM status_account WHERE id_stat = '$status'"); 
$sql = "SELECT * FROM status_account ORDER BY name_status ASC ";
$result_select = mysql_query($sql);

?> <select name="idstatus" id='client_shap' > <?

$object->name_status = $rr['name_status'] ;

echo   "<option  selected value=$status   > $object->name_status   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_stat' > $object->name_status </option> ";}  
echo "</select>";
////..........................


echo "Скидка";
echo space(12)."<input type='text'  name='discount'  id='data_shap'  placeholder='Скидка % '  value=' ".$discount." ' /> %" ;

/*



echo "<br>";
echo "Срок поставки";

/////........................список статус
//$status= $client;//$_SESSION['idclient'];
$rr=sqlread("SELECT * FROM status_account WHERE id_stat = '$status'"); 
$sql = "SELECT * FROM status_account ORDER BY name_status ASC ";
$result_select = mysql_query($sql);

?> <select name="idstatus" id='client_shap' > <?
/*?> <select name='idclient' id='' > <?*/ /*
$object->name_status = $rr['name_status'] ;  
echo   "<option  selected value=$status   > $object->name_status   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_stat' > $object->name_status </option> ";}  
echo "</select>";
////..........................

echo "Усл. отгрузки";

/////........................список статус
//$status= $client;//$_SESSION['idclient'];
$rr=sqlread("SELECT * FROM status_account WHERE id_stat = '$status'"); 
$sql = "SELECT * FROM status_account ORDER BY name_status ASC ";
$result_select = mysql_query($sql);

?> <select name="idstatus" id='client_shap' > <?
/*?> <select name='idclient' id='' > <?*/ /*
$object->name_status = $rr['name_status'] ;

echo   "<option  selected value=$status   > $object->name_status   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_stat' > $object->name_status </option> ";}  
echo "</select>";
////..........................

echo "Доставка";
echo space(8)."<input type='text'  name='discount'  id='data_shap'  placeholder='Доставка'  value=' ".$discount." ' /> Руб." ;

*/
echo "<font style='font: 15px apple-system' color = Navy ><b>";

//echo "<br>".space(40)."Клиент:".space(45)."Скидка %" .space(25). "Статус";




//echo "<br>Примечание: " .$row[note]  ;

$comment = $row['comment'] ;


//echo space(5)." № заказа<input type='text'  name='n_order'  placeholder='Номер заказа'  value='".$num_account."' /> " ;

//echo space(150)."  <a href='give_board.php?id=".$id."&del_gen=yes'><img src='images/delete.png' width='40' height='40' alt='Пример''></a> ";  // удаление наклаждной





echo "<br><br> ".space(3)."Примечание:<font color = black > <input bgcolor='red' type='text' id='pole_noteac'textarea name='comment'   value='$comment'> </font></b>  " ;

//echo "<br>".space(120)."Примечание ";



/*
echo "<form action='account.php?id=$id' method='GET'  >"; echo "<input visibility : hidden type='text' id='pole_null' textarea name='id'   value='$id'>   ";
/////........................список 
if (!empty($_SESSION['id_board'])) {$id_board = $_SESSION['id_board'];} else {$id_board=0;}

//$id_board= $_SESSION['id_board'];
$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board'");
$sql = "SELECT * FROM cat_brd_prod ORDER BY name_product ASC ";
$result_select = mysql_query($sql);

?> <select name='id_board' id='' > <?
$object->name_product = $rr['name_product'] ;

echo   "<option  selected value=$id_board   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select>";
////..........................


echo " <input type='submit' name='add_product'   value='добавить изделие' /> " ;
echo "</form>";


*/




//echo "</form>";


echo "</div>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////подчиненные данные ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 echo "<div class='datablock_subaccount' id = 'qqq'>";

$i=1;

$sizefont="style='font: 12px apple-system'";
///// шапка талицы
$name =  array('П/№ ','Наименование' ,'Ед','Кол','Цена прайс','Цена прод','Сумма') ;
$long =  array(' 110','700         ' ,'82','80','80','80','80') ;

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  bgcolor='Aquamarine'  width='$ln' id = 'gradient' > <font color='black'   style='font: 12px apple-system'>  <b> $nam</td>";
} echo "</tr> </table>";
/////end////////

$id=$_GET['id'];

$strSQL="SELECT * , (quantity * price) as sum_string FROM sales_invoice_sub WHERE id_sales_gen= '$id'  ";
 $rs = mysql_query($strSQL);



echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {


  echo "<form action='account.php?id=$id' method='get' id='MyForms' >";


$id_sub = $row['id_sub'] ;
$id_board=$row['id_board'];
$unit = $row['unit'] ;
$id_ac_sub= $row['id_ac_sub'] ;


$qqq=sqlread("SELECT * FROM account_sub WHERE id_ac_sub = '$id_ac_sub' ");
$name_equipment=$qqq['name_equipment'];
$quantity = $row['quantity'] ;


$price = $row['price'] ;
$price_sale = $row['price_sale'] ;


$sum_string=$row['sum_string'];

$config=$row['config'];

echo "<td> <input type='checkbox' name='check_b[]' value='$id_ac_sub' /></td>";


 echo "<input visibility : hidden type='text' id='pole_null' textarea name='id[]'   value='$id'>   ";
  echo "<input visibility : hidden type='text' id='pole_null' textarea name='id_sub[]'   value='$id_sub'>   ";
//echo " <td  'width=0 id='pole_null' >  <b> <input type='hiden' size=1 id='pole_id'  name='id_equipment' value=", $row['id_equipment']  , " '>  </td> "; //  
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_nameac'   style='font: 12px amaze'    > <input bgcolor='red' type='text' id='pole_nameac' textarea name='name_equipment'   value='$name_equipment'>  </td>  ";


echo " <td> <a href='sales_invoice.php?id=".$id."&idsub=".$id_sub."&del_sub=yes'><img src='images/krest1.png' width='15' height='15' alt='Пример''></a></td> ";  // удаление 

echo "<td  'width=0 id='pole_id' bgcolor = 'CadetBlue'>  $i </td>"  ;





?>




<td  'width=0 id='pole_null' ><b>  <input autofocus type="text" visibility : visible  name="name_equipment[]"  id='pole_nameac' value="<?=$name_equipment;?>" onkeydown="if(event.keyCode==13){return false;}"  ></td>  <!-- наименование изделия -->





<?
/*
echo "<td>  ";
/////........................список 
$id_alg= $row['idalgorythm'];
$rr=sqlread("SELECT * FROM algorythm WHERE id = '$id_alg'");
$sql = "SELECT * FROM algorythm ORDER BY name ASC ";
$result_select = mysql_query($sql);
?> <select name="id_alg[]" id='pole_alg'> <?
//.........

$object->name = $rr['name'] ;
echo   "<option  selected value=$id_alg   > $object->name   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name </option> ";}  
echo "</select>";
////..........................


echo "</td>  ";

*/
?>





<!-- <td  'width=0 id='pole_null' >  <input autofocus type="text" name="config[]"  id='pole_id' value="<?=$config;?>" onkeydown="if(event.keyCode==13){return false;}"  ></td>   -->
<!-- <td  'width=0 id='pole_null' >  <input autofocus type="text" name="unit[]"  id='pole_id' value="<?=$unit;?>" onkeydown="if(event.keyCode==13){return false;}" ></td>  -->


<td>  

<?
//$id_unit=2;
/////........................список unit
$id_unit= $row['unit'];
$rr=sqlread("SELECT * FROM unit WHERE idunit = '$id_unit'");
$sql = "SELECT * FROM unit  ";
$result_select = mysql_query($sql);
?> <select name="unit[]" id='pole_id'> <?
//.........

$object->name = $rr['unit'] ;
echo   "<option  selected value=$id_unit   > $object->name   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->idunit' > $object->unit </option> ";}  
echo "</select>";
////..........................



?>
</td>  

<?  $curprice= price_board_id($id_board); ?>



<td  'width=0 id='pole_null' >  <input autofocus type="text" name="number[]"  id='pole_id' value="<?=$quantity;?>" onkeydown="if(event.keyCode==13){return false;}" ></td>  
<!-- <td  'width=0 id='pole_null' >  <input autofocus type="text" name="curprice[]"  id='pole_id' value="<?=$curprice;?>" onkeydown="if(event.keyCode==13){return false;}" ></td>   <!-- цена прайса -->

<td  'width=0 id='pole_null' >  <input autofocus type="text" name="price[]"  id='pole_id' value="<?=$curprice;?>" onkeydown="if(event.keyCode==13){return false;}" ></td>   <!-- цена продажи -->
<td  'width=0 id='pole_null' >  <input autofocus type="text" name="price_sale[]"  id='pole_id' value="<?=$price;?>" onkeydown="if(event.keyCode==13){return false;}" ></td>   <!-- цена продажи -->




<?


//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_id'   style='font: 12px amaze'    > <font color='black'  > <b>"   .   $row['unit'] .         "  </td>";
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_id'   style='font: 12px amaze'    > <font color='black'  > <b>"   .   $row['number'] .         "  </td>";
//echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_ceny'   style='font: 12px amaze'    > <font color='black'  > <b>"   .   $row['price'] .         "  </td>";
echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_id'    > <font color='black'  > <b>"   .   $sum_string.         "  </td>";

$sum_full = $sum_string+$sum_full ;



 echo "</form>";

echo "</tr> ";

$i++;


}}

echo " </table>";





echo "</form>";


echo "<hr>";
echo space(240) ."<font color = Navy  style='font: 30px amaze'  > Сумма:".space(20) .$sum_full ."</font >";

echo "</div>";
////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////ДОБАВЛЕНИЕ НОВОГО ИЗДЕЛИЯ /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<div class='add_prod'>";
echo "<font style='font: 15px apple-system' color = black ><b>";
echo "<form action='sales_invoice.php?id=$id' method='POST'  >"; echo "<input visibility : hidden type='text' id='pole_null' textarea name='id'   value='$id'>   ";


//echo " <input type='submit' name='del_check'  class='btn btn-primary  '  value='Удалить отмеченные' Удалить отмеченные/>  " ;

?>   <button name = 'del_check'   value='Удалить отмеченные'       ><div class="fly_comment" data-title="Удалить отмеченные позиции"> <img src="images/delete-file.png"  width='30' height='30' alt="Зонтик"   id = 'button_pic' style="vertical-align: middle"></div></button>

<?

//echo " <input type='submit' name='create_order'  class='btn btn-primary   '  value='Создать заказ на основе счета' /> " ;
/*
echo space(40);
/////........................список 
if (!empty($_SESSION['id_board'])) {$id_board = $_SESSION['id_board'];} else {$id_board=0;}

//$id_board= $_SESSION['id_board'];
$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board'");
$sql = "SELECT * FROM cat_brd_prod ORDER BY name_product ASC ";
$result_select = mysql_query($sql);

?> <select name='id_board' id='add_prod' > <?
$object->name_product = $rr['name_product'] ;

echo   "<option  selected value=$id_board   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select>";
////..........................
*/

//echo " <input type='submit' name='add_product'  class='btn-warning '  value='добавить изделие' /> <br>" ;

?>  <!-- <button name = 'add_product'   value='добавить изделие'       ><div class="fly_comment" data-title="Добавить новое изделие в счет "> <img src="images/add.png"  width='30' height='30' alt="Зонтик"   id = 'button_pic' style="vertical-align: middle"></div></button> --><?  



//echo "</form>";



echo "</div>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


 echo "</div >";


include "menu.php";





      ?>
      