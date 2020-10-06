<?session_start(); function redirect($url){header('Location: '.$url);}  ?>

 <meta charset="windows-1251">








<?

if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }

?>


<head>
<meta charset="windows-1251">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="style.css">

  <link href="/path/to/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />


<!-- Модальные окна -->

	<link rel="stylesheet" href="modal/themes/alertify.core.css" />
	<link rel="stylesheet" href="modal/themes/alertify.default.css" id="toggleCSS" />
  <meta name="viewport" content="width=device-width">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="modal/lib/alertify.min.js"></script>
<!-- ////////////////////////////////


<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="daterangepicker/moment.js"></script>
  <script src="daterangepicker/daterangepicker.js"></script>

<script src="jquery/jquery.min.js" type="text/javascript"></script>
<script src="jquery/jquery-ui.min.js" type="text/javascript"></script>
<!-- Core files -->
<script src="jquery/alerts/query.alerts.js" type="text/javascript"></script>
<link href="jquery/alerts/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />




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

    table { 
    /*width: 100%; /* Ширина таблицы */
    /* border: 1px double black; /* Рамка вокруг таблицы */
    border-collapse: collapse; /* Отображать только одинарные линии */
   }
   th { 
   /* text-align: left; /* Выравнивание по левому краю */
   /*  background: #ccc; /* Цвет фона ячеек */
   /*  padding: 5px; /* Поля вокруг содержимого ячеек */
   border: 1px solid black; /* Граница вокруг ячеек */
   }
   td { 
   /*  padding: 5px; /* Поля вокруг содержимого ячеек */
    border: 1px solid black; /* Граница вокруг ячеек */
   }

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

   .fly_comment_left {
    display: inline-block; /* Строчно-блочный элемент */
    position: relative ; /* Относительное позиционирование */
  
   }
   .fly_comment_left:hover::after {

    content: attr(data-title); /* Выводим текст */
    position: absolute; /* Абсолютное позиционирование */
    left: 100%; top: 110%; /* Положение подсказки */
      left : -100;
    z-index: 1; /* Отображаем подсказку поверх других элементов */
    background: rgba(255,255,230,0.9); /* Полупрозрачный цвет фона */
    font-family: Arial, sans-serif; /* Гарнитура шрифта */
    font-size: 11px; /* Размер текста подсказки */
    padding: 5px 10px; /* Поля */
    border: 1px solid #333; /* Параметры рамки */
    border-radius: 20px;
   }

    .pic {
      background-color: #f0f050;
  border: 1px solid #f0f050;
  border-radius: 25px;


    }
    .pic:hover::after  {
      background-color: #f0f050;
  border: 3px solid #f0f050;
  border-radius: 25px;
left:-10%;
  content: '';
  position: relative;


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

    width: 100px; /* Ширина поля в пикселах */
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
     font-family:'Arial Narrow';
     font-weight:bold;


height:35px;  
         background: #E0FFFF; /* Цвет фона */ 
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
   } 

                                #ship_stat {

    width: 150px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: center;
     font-family:'Arial Narrow';
     font-weight:bold;


height:35px;  
         background: #E0FFFF; /* Цвет фона */ 
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
   } 


                             #pole_id {

    width: 110px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: right;
     font-family:'amaze';
     font-weight:bold;



   }
#price_sale_id {

    width: 110px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: right;
     font-family:'amaze';
     font-weight:bold;
     background: #E0FFFF; 

  
}


                             #pole_pn {

    width: 40px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;



   } 
                             #pole_quanti {

    width: 40px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;
   }
                             #pole_sum {

    width: 110px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: right;
     font-family:'amaze';
     font-weight:bold;
      color: rgba(255,255,255,.9);



   } 


                             #pole_id_pay {

    width: 50px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;



   } 



                                #pole_quant_add {

    width: 60px; /* Ширина поля в пикселах */
    font-size: 20px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;



   } 


                             #pole_unit {

    width: 60px; /* Ширина поля в пикселах */
    font-size: 18px; 
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
   
   #pole_itog_gen {

width: 160px; /* Ширина поля в пикселах */
font-size: 12px;  
text-align: right;
 font-family:'amaze';
 font-weight:bold;
 background:LightYellow;

} 


                             #pole_itog_pay {

    width: 178px; /* Ширина поля в пикселах */
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
  margin-left: auto;
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

                                #pole_nameac,#pole_nameac_dark  {

    width: 770px; /* Ширина поля в пикселах */
    font-size: 18px; 
    text-align: left;
     font-family:'arial';
    

   } 
                                #pole_nameac_dark {


      background:Gainsboro;

    

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
    font-size: 20px; 
    text-align: left;
     font-family:'amaze';
 
background: #E0FFFF; /* Цвет фона */ 
       margin:3px 3px 3px 5px; 
       border-radius: 4px;

   }  
                                        #pole_notepay {

    height:20px;                                      
    width: 250px; /* Ширина поля в пикселах */
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

    width: 650px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

height:25px;  

         background: #FFFFE0 ; /* Цвет фона */ 
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
  
}
/*============================БЛОКИ============================*/

       .super_genblock
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 1%; 
      right:1%;

    top: 60px; /* Положение от верхнего края */
  
  bottom:2%;
   

overflow: auto; 

 background: url(images/laminat.jpg)  no-repeat center center fixed;  background-size: cover;



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
    background-size: cover;
                     }   

       .genblock, .top_inf,#menu_spisok,.add_prod,.datablock_subaccount, .block_sum,.block_pay_up,.block_pay, .label,.block_ship
       {
        margin:auto;
      position: absolute; /* Абсолютное позиционирование */
          padding: 5px; /* Поля вокруг текста */
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
 /*background: url(images/block_fon.jpg)  no-repeat center center fixed;  background-size: cover;/* Цвет фона, путь к фоновому изображению и повторение фона по вертикали */   
 background: #DEB887; /* Цвет фона */ 
 
       margin:3px 3px 3px 5px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.5); /* Параметры тени */
      margin: auto; /* Выравниваем по центру */   
                padding: 5px; 
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 


       }

       .genblock
     {  
      overflow:auto;
       top:1%;
       bottom:1%;
    left: 1%; 
    right: 1%; 
    top: 10px; /* Положение от верхнего края 60 */ 
    width: 1730px; /* Ширина блока 1750*/
  height:810px;
background: rgba(200, 200, 200, 0.2); 
                     }   
                     
            .top_inf
     {  
    left: 10px; /* Положение элемента от правого края */
    top: 10px; /* Положение от верхнего края */
    width: 1150px; /* Ширина блока */
   height:300px;    
    float:left;
    overflow: hidden;
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

         .datablock_menu
     {  
      overflow:hidden;
    left: 3%; 
    right: 3%; 

    top: 315px;
    width: 1700px; /* Ширина блока */
   height:35px;    
   background: linear-gradient(to top, #DEB887, #ffecec);
   /* float:left;*/

    border-radius: 10px;
   box-shadow: 0 0 10px rgba(0,0,0,0.5); 
                     }  
                     .datablock_summa
     {  
      overflow:hidden;
    left: 3%; 
    right: 3%; 

    bottom: 3%;
    width: 1700px; /* Ширина блока */
   height:80px;    
   background: linear-gradient(to top, #DEB887, #ffecec);
   /* float:left;*/

  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.5); 
                     }  
         .datablock_subaccount
     {  
      overflow:auto;
    left: 10px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 315px; /* Положение от верхнего края */
    width: 1710px; /* Ширина блока */
   height:480px;    

    float:left;

                     }             
                 .block_sum
     {  

    left: 1170px; /* Положение элемента от правого края */
  /*  right: 10%; /* Положение элемента от правого края */
    top: 10px; /* Положение от верхнего края */
    width: 550px; /* Ширина блока */
   height:220px;    

    float:left;

                     }    

               .block_pay_up
     {  
    left: 1170px; /* Положение элемента от правого края */
    top: 10px; /* Положение от верхнего края */
    width: 550px; /* Ширина блока */
    height:300px;    

    float:left;
                     }   
   
               .block_pay
     {  

    left: 10px; /* Положение элемента от правого края */
    top: 630px; /* Положение от верхнего края */
    width: 850px; /* Ширина блока */
    height:180px;    
    background: url(images/block_fon.jpg)  no-repeat center center fixed;  background-size: cover;
    float:left;
                     }   
   
               .block_ship
     {  
    left: 870px; /* Положение элемента от правого края */
    top: 630px; /* Положение от верхнего края */
    width: 850px; /* Ширина блока */
    height:180px;    
    background: url(images/block_fon.jpg)  no-repeat center center fixed;  background-size: cover;
    box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    float:left;
     }   


               .label
     {  

    left: 10px; /* Положение элемента от правого края */
    font-size: 30px; 
    font-family:'amaze';
    font-color:'Navy';
    font-weight:bold;
    top: 5px; /* Положение от верхнего края */
    width: 290px; /* Ширина блока */
    height:40px;    
    background: linear-gradient(to top, #008080, #ffecec);
    box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    float:left;

                     }   
               .label_pay
     {  

    top: 0px; /* Положение от верхнего края */   
    left: 0px; /* Положение элемента от правого края */
    width: 530; /* Ширина блока */
    font-size: 20px; 
    font-family:'amaze';
    font-color:'Navy';
    font-weight:bold;
    height:20px;   
    border-radius: 20px; 
    background: linear-gradient(to top, #008080, #ffecec);
    text-align: center;
    box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
                     }   

               .pays_menu
     {  
      position: absolute; 
    top: 30px; /* Положение от верхнего края */   
    height:35px;        
    left: 3%; 
    right: 3%; 
    width: 500; /* Ширина блока */
    vertical-align: middle;
border-radius: 10px;
background: linear-gradient(to top, #DEB887, #ffecec);
    text-align: left;
    box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
                     }  
                     .pays_tables
     {  
      position: absolute; 
    top: 70px; /* Положение от верхнего края */   
    left: 20px; /* Положение элемента от правого края */
    width: 500; /* Ширина блока */
    border-radius: 5px;
    height:200px;    
    background: linear-gradient(to top, #DEB887, #ffecec);
    text-align: center;
    box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
                     }  
                     .head_menu
     {  
      position: absolute; 
    top: 5px; /* Положение от верхнего края */   
    height:50px;        
    left: 1%; 
    right: 3%; 
    width: 1120px; /* Ширина блока */
    vertical-align: middle;
border-radius: 10px;
background: linear-gradient(to top, #DEB887, #ffecec);
    text-align: left;
    box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
                     }  

                     .head_data
     {  
      position: absolute; 
    top: 60px; /* Положение от верхнего края */   
    height:130px;        
    left: 1%; 
    right: 3%; 
    width: 1120px; /* Ширина блока */
    vertical-align: middle;
border-radius: 10px;
background: linear-gradient(to top, #DEB887, #ffecec);
    text-align: left;
    box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
                     }  
                     .head_note
     {  
      position: absolute; 
    top: 195px; /* Положение от верхнего края */   
    height:100px;        
    left: 1%; 
    right: 3%; 
    width: 1120px; /* Ширина блока */
    vertical-align: middle;
border-radius: 10px;
background: linear-gradient(to top, #DEB887, #ffecec);
    text-align: left;
    box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
                     }  
#chekkbb
{
      font-size: 20px; 
    width: 20px; /* Ширина блока */
   height:20px; 
}












</style>




<?
include "background.php";
include 'conn.php';
include 'function.php';

?>
<script type="text/javascript"> 
        $(document).ready( function() {

          jAlert('This is a custom alert box', 'Alert Dialog', doAlert()  );

     
        });


          
</script> 
<?



//include 'error_visible.php';

/*
$idgen=$_GET['id'];
$qqqq=sqlread("SELECT *  FROM account_sub WHERE id_ac_gen= '$idgen' ");
ALERT($qqqq['price_sale'] ) ;
*/

if (!empty($_POST['zakaz']) ) {  


//echo "<script>alert('У вас ". $_POST['zakaz'] ."----".$price[$key]." ');</script>";
}
////////////////////////////////////////////////////////////////////////////////////////////////////////!!!!!!!!!!!!!!!!!!!!!!!!
$user=id_user_hash();



if($user=='21' or $user =='2' or $user =='15' or $user =='11'  ) {
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////// Удалить счет полностью //////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['del_gen_acc'])) {$id=$_GET['id'];

//  alert($id);
//  echo "<script>alert('".$id." В счете содержатся данные .Удалите все позиции ');</script>";
$row1=sqlread("SELECT  MAX(id_ac_gen) as maxid  FROM  account_gen ");
$row2=sqlread("SELECT  COUNT(*) as coun_sub  FROM  account_sub WHERE id_ac_gen = '$id'");
$row3=sqlread("SELECT  COUNT(*) as coun_pay  FROM  account_pay WHERE id_ac_gen = '$id'");
$row3=sqlread("SELECT  COUNT(*) as coun_rashod  FROM  sales_invoice_gen WHERE id_ac_gen = '$id'");


$maxid = $row1['maxid'];
$coun_sub = $row2['coun_sub'];
$coun_pay = $row3['coun_pay'];
$coun_rashod = $row3['coun_rashod'];
$maxid=$row1['maxid'];

if($coun_sub > 0 or $coun_pay >0 or $coun_rashod > 0 ) {$maxid =$id; echo "<script>alert('В счете содержатся данные .Удалите все позиции ');</script>";} 
else {sqlread ("DELETE FROM account_gen WHERE id_ac_gen = '$id' ") ;echo "<script> document.location.href='journal_account.php?id=$maxid';</script>";  }


echo "<script> document.location.href='account.php?id=$maxid';</script>"; 
//header("Location: account.php?id=$maxid"); exit;
//echo "<script> document.location.href='account.php?id=$maxid '</script>"; 
}



/////////////////////////////////////////////////////////пересчитать счет ////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (!empty($_POST['recalc']) or  !empty($_GET['recalc']) )  {  


if(!empty($_POST['idgen'])) {$idgen=$_POST['idgen'];}
if(!empty($_GET['idgen'])) {$idgen=$_GET['idgen'];}



//sleep(1);
//echo "<script> alert('У вас ". $idgen ."----".$price_sale." ');</script>";
$rowaccgen=sqlread("SELECT shiping_cost,discount,correction  FROM account_gen WHERE id_ac_gen = '$idgen' " );

$discount=$rowaccgen['discount'];
$shiping_cost=$rowaccgen['shiping_cost'];
$correction=$rowaccgen['correction'];
//echo "<script> alert('У вас ". $correction ."----".$number." ');</script>";

$row=sqlread("SELECT SUM(price*number) AS sumacc  FROM account_sub WHERE id_ac_gen = '$idgen' " );
$sumacc=$row['sumacc']; // сумма всего счета без скидок 


$strSQL=" SELECT *  FROM account_sub  WHERE id_ac_gen = '$idgen' " ;
 $rs = mysql_query($strSQL);     if (!empty ($rs) ) {     while($row = mysql_fetch_array($rs)) { 

$id_ac_sub=$row['id_ac_sub'];
$price=$row['price'];
$number=$row['number'];
$shiping_cost_corr=$shiping_cost+$correction;

$raznos_dostavka= round($shiping_cost_corr/$sumacc*($price*$number),0);
$sum_with_discount=$number*round($price*(1-$discount/100),0);
$summ_full=$sum_with_discount+$raznos_dostavka;
$price_sale=$summ_full/$number;

//  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!   sqlread("UPDATE account_sub  SET  price_sale='$price_sale ' ,salesum ='$summ_full' WHERE id_ac_sub = '$id_ac_sub' "  );

$qqq=sqlread("SELECT * , SUM(price_sale * number) AS sum_acc  FROM account_sub WHERE id_ac_sub= '$id_ac_sub' ");
$summ_full=$qqq['sum_acc'];

sqlread("UPDATE account_sub  SET salesum ='$summ_full' WHERE id_ac_sub = '$id_ac_sub' "  );

///////////////////////


}}



$qqq=sqlread("SELECT * , SUM(price_sale * number) AS sum_acc  FROM account_sub WHERE id_ac_gen= '$idgen' ");















// 



//echo "<script> alert('У вас ". $shiping_cost ."----".$price_sale." ');</script>";

echo "<script> document.location.href='account.php?id=$idgen';</script>"; 

}
//$id=$_post['idgen'];alert($id);
////////////////////////////////////////////////////////// ДОБАВИТЬ ПРОДУКТ //////////////////////////////////////////////////////////////////////////////////////
if(!empty($_POST['add_product'])) {$id=$_GET['id'];

//$id=$_post['idgen'];alert($id);
  


$id_board =$_POST['id_board'];
$user=        $_SESSION['user'] ;

$kolvo =$_POST['kolvo'];
$name_board=name_board_id($id_board);

//echo "<script>alert('У вас ". $name_board ."----".$id." ');</script>";

$price=price_board_id($id_board);

$rr=sqlread("SELECT discount,shiping_cost  FROM account_gen WHERE id_ac_gen = '$id' ");


$shiping_cost=$rr['shiping_cost'];
$discount=$rr['discount'];

$price_sale=round($price*(1-$discount /100 ),0) ;


//$rows=sqlread("SELECT *,SUM(price) AS sump FROM  account_sub WHERE id_ac_gen='$id' ");
//$sumprice=$rows['sump'];

$qq=sqlread("SELECT COUNT(*) as countbrd , SUM(number) AS sumquant FROM account_sub WHERE id_equipment = '$id_board'  AND    id_ac_gen  ='$id'    ");

$sumquant=$qq['sumquant'];
$countbrd=$qq['countbrd'];
//echo "<script>alert('У вас ". $countbrd ."---- ');</script>";
$fullsum=$kolvo+$sumquant;

$qq=sqlread("INSERT INTO account_sub(id_ac_gen,id_equipment,name_equipment,user,unit,number,price,price_sale)  VALUES  ('$id','$id_board','$name_board','$user','1','$kolvo','$price',$price_sale) "); 
/*
if($countbrd ==0) { $qq=sqlread("INSERT INTO account_sub(id_ac_gen,id_equipment,name_equipment,user,unit,number,price)  VALUES  ('$id','$id_board','$name_board','$user','1','$kolvo','$price') ");  }
else { 
$ss=sqlread("SELECT * FROM account_sub WHERE id_ac_gen = '$id' AND id_equipment ='$id_board'  ");
$id_account_sub = $ss['id_ac_sub'];
$qq=sqlread("UPDATE  account_sub     SET number = '$fullsum' WHERE id_ac_sub = '$id_account_sub' "); }

*/
echo "<script> document.location.href='account.php?idgen=$id&id=$id&recalc=10'</script>"; 

}


///////////////////////////////////////////////////////////Удалить расходную полностью/////////////////////////////////////////////////////////////////////////////
if (!empty($_GET['delrashod']) )  { if($_GET['delrashod']=='yes')  $idacc=$_GET['id']; $idrash=$_GET['idrash'];

//echo "<script>alert('У вас ". $idgen ."----".$price_sale." ');</script>";
//alert("$idrash");



$qq=sqlread("DELETE FROM sales_invoice_sub WHERE id_sales_gen = '$idrash'");
$qq=sqlread("DELETE  FROM sales_invoice_gen WHERE idgen = '$idrash'");

echo "<script> document.location.href='account.php?id=$idacc';</script>"; 
}

////////////////////////////////////////////////////////// Удаление отмеченных галочкой позиций //////////////////////////////////////////////////////////////////////////////////////
if (!empty($_POST['del_check']) ) {  

  $del_check=$_POST['del_check'];
  $check_b=$_POST['check_b'];
  $id=$_POST['id'];
  $id_ac_sub=$_POST['id_ac_sub'];
$id=$_GET['id'];


//echo "<script>alert('У вас ". $check_b[1] ."----".$price_sale." ');</script>";


if (is_array($check_b)) { // Проверяем, является ли эта переменная массивом данных, если да, то исполняем код в цикле for, если нет, выходим из выполнения скрипта
foreach ($check_b as $key => $value) {  



  sqlread( " DELETE FROM account_sub WHERE id_ac_sub=  '$value'") ; }}




echo "<script> document.location.href='account.php?idgen=$id&recalc=10'</script>"; 
}


////////////////////////////////////////////////////////// Создать новую расходную накладную по счету //////////////////////////////////////////////////////////////////////////////////////
if (!EMPTY($_POST['sales_inv']) ) {  $idgen=$_POST['idgen'];
$user= $_SESSION['user'] ;


 $idgen=$_POST['idd'];


 //echo "<script>alert('У вас ". $idgen ."----".$maxid." ');</script>";

$dates=date("Y, m, d");    


$rows1=sqlread("SELECT * FROM account_gen WHERE id_ac_gen = '$idgen' " );

$idclient=$rows1['idclient'];
$number=$rows1['number'];
$price=$rows1['price'];



$id_ac_gen=$idgen;



sqlread("INSERT INTO sales_invoice_gen(user,dates,id_ac_gen,idclient,account_gen)  VALUES ('$user',NOW() ,'$idgen', '$idclient','$number') ");



$row=sqlread("SELECT MAX(idgen) AS maxid FROM sales_invoice_gen  WHERE user = '$user' ");

$maxid=$row['maxid'];

//sqlread("INSERT INTO sales_invoice_sub(id_sales_gen)  VALUES ('$maxid') ");



sqlread("INSERT INTO  sales_invoice_sub (user,id_sales_gen,id_board,id_ac_gen,id_ac_sub,price,quantity,unit)  SELECT user,'$maxid',id_equipment,'$id_ac_gen',id_ac_sub,price_sale,number,unit FROM account_sub WHERE id_ac_gen = '$idgen' " );




/*
*/


//echo "<script> document.location.href='sales_invoice.php?id=$maxid';</script>"; 
echo "<script> document.location.href='account.php?id=$idgen';</script>"; 

}

////////////////////////////////////////////////////////// Сохранить данные счета вместе с шапкой //////////////////////////////////////////////////////////////////////////////////////
if (!empty($_POST['save_acc'])  ) {  



$id=$_GET['id'];
$idgen=$_POST['idgen'];
  $n_account=$_POST['n_account'];
  $dater=$_POST['dater'];
  $idstatus=$_POST['idstatus'];
  $idclient=$_POST['idclient'];
  $comment= $_POST['comment_gen'];
  $comment_print_acc=$_POST['comment_print_acc'];
  $discount=$_POST['discount'];
  $condition_pay=  $_POST['condition_pay'];


  $deliverytime=  $_POST['deliverytime'];
  $shipconditions=$_POST['shipconditions'];
  $shiping_cost=  $_POST['shiping_cost'];
 $correction=  $_POST['correction'];
  $price_edit=  $_POST['price_edit'];
  $sum_string=  $_POST['sum_string'];
  $id_shipstat=  $_POST['id_shipstat'];
  $day_delivery=  $_POST['day_delivery'];
  




  /*$discount=$_GET['discount']; */



  $qq=sqlread("UPDATE account_gen SET discount='$discount' WHERE id_ac_gen = '$idgen' "); 
  

//alert(  $idclient);
//echo "<script>alert('У вас ". $shipconditions."----".$price[$key]." ');</script>";

  $dater=date("Y.m.d",strtotime( $dater ));

/*
$row=sqlread("SELECT discount FROM client WHERE idclient= '$idclient' ");

 $discount=$row['discount'];
*/

//alert();

//if( $discount<1)


  //echo "<script>alert('У вас ". $id_shipstat ."----".$id_shipstat." ');</script>";
/*
 sqlread("UPDATE account_gen  SET  number='$n_account',accountofthe = ' $dater', idclient='$idclient',status='$idstatus',idclient='$idclient',comment ='$comment',comment_print_acc='$comment_print_acc',
 condition_pay='$condition_pay', discount ='$discount' ,deliverytime='$deliverytime',   shipconditions = '$shipconditions',shiping_cost='$shiping_cost',correction='$correction' ,
 shipment ='$id_shipstat',day_delivery='$day_delivery',discount='$discount' WHERE id_ac_gen = '$idgen' "  );

*/

 $id_ac_sub=$_POST['id_ac_sub'];
 $price=$_POST['price'];
 $number=$_POST['number'];
 $unit=$_POST['unit'];
$id_alg=$_POST['id_alg'];
$price_sale=$_POST['price_sale'];


//$sum_string=number_format($sum_string, 2, ',', ' ');


$name_equipment=$_POST['name_equipment'];


if (is_array($id_ac_sub)) { // Проверяем, является ли эта переменная массивом данных, если да, то исполняем код в цикле for, если нет, выходим из выполнения скрипта
foreach ($id_ac_sub as $key => $value) {  

 //echo "<script>alert('У вас ". $value ."----".$price[$key]." ');</script>";

$row=sqlread("SELECT config FROM algorythm WHERE id = '$id_alg[$key]'");
$config= $row['config'];



/*
sqlread("UPDATE account_sub  SET price = '$price[$key]' ,price_edit='$price_edit[$key]', unit= '$unit[$key]'   , 
 number = '$number[$key]' ,idalgorythm='$id_alg[$key]',config='$config',name_equipment='$name_equipment[$key]' WHERE id_ac_sub = '$value' ");
*/

 //         $sale=$sum_string[$key]/ $number[$key];

 $sale = $price_sale[$key];

 /*
sqlread("UPDATE account_sub  
         SET  unit= '$unit[$key]'   ,  number = '$number[$key]' ,idalgorythm='$id_alg[$key]',config='$config',name_equipment='$name_equipment[$key]',price_sale= '$sale',salesum = '$sum_string[$key]' 
         WHERE id_ac_sub = '$value' ");
*/
sqlread("UPDATE account_sub  
         SET  unit= '$unit[$key]'   ,  number = '$number[$key]' ,idalgorythm='$id_alg[$key]',config='$config',name_equipment='$name_equipment[$key]',price_sale = '$price_sale[$key]',salesum = '$price_sale[$key]' 
         WHERE id_ac_sub = '$value' ");





}}


echo "<script> document.location.href='account.php?idgen=$id&recalc=10';</script>"; 
//echo "<script> document.location.href='account.php?id=$idgen';</script>"; без пересчета
}

////////////////////////////////////////////////////////// печать счета  //////////////////////////////////////////////////////////////////////////////////////

if(!empty($_POST['print_acc'])) {$id=$_POST['idgen'];



echo "<script> document.location.href='print_account.php?id=$id';</script>"; 
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_POST['print_acc_on_email'])) {$id=$_POST['idgen'];


echo "<script> document.location.href='print_account.php?id=$id&em=yes '</script>"; 
}



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['go_to'])) {
$go=$_GET['go_to'];
echo "<script> document.location.href='account.php?id=$go';</script>"; 

}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['price'])) {$id=$_GET['id'];

$id_ac_sub= $_GET['id_ac_sub'];
$price=     $_GET['price'];
$number=    $_GET['number'];
$unit =     $_GET['unit'];
$name_equipment =     $_GET['name_equipment'];


// echo "<script>alert('У вас ". $id_ac_sub ."----".$price." ');</script>";

$qq=sqlread("UPDATE account_sub SET price='$price' , number = '$number' , unit = '$unit' , name_equipment='$name_equipment' WHERE id_ac_sub = '$id_ac_sub' "); 

echo "<script> document.location.href='account.php?id=$id'</script>"; 

}


//////////////////////////////////////////////////////////создать новый счет //////////////////////////////////////////////////////////////////////////////////////
if ( !empty($_POST['add_account']) or $_GET['new']== 'yes' ) {

  $nds= $_SESSION['nds'] ;




$user= $_SESSION['user'] ;
$row=sqlread('SELECT MAX(number) as maxnum  FROM  account_gen ');  $maxnum=$row['maxnum']+1;
//$dates=date();


//$qq=sqlread("INSERT INTO account_gen(user,number,accountofthe,shipconditions,deliverytime,condition_pay,shipment) VALUES('$user','$maxnum',NOW(),'1','3','1','1')  "); 

$qq=sqlread("INSERT INTO account_gen(user,number,accountofthe,shipconditions,deliverytime,condition_pay,shipment,nds) VALUES('$user','$maxnum',NOW(),'1','3','1','1','$nds')  "); 



$row1=sqlread("SELECT  MAX(id_ac_gen) as maxid  FROM  account_gen WHERE user = '$user'");  $maxid=$row1['maxid'];

//alert( $maxid);


$hashkey=md5($maxid);
//alert($hashkey);
$qq=sqlread("UPDATE account_gen SET hashkey='$hashkey' WHERE id_ac_gen	 = '$maxid' AND user = '$user'   "); 




//sleep(20);



$row1=sqlread("SELECT  MAX(id_ac_gen) as maxid  FROM  account_gen WHERE user = '$user'");  $maxid=$row1['maxid'];


 // alert($maxid);



//$maxid=1450;
 //echo "<script>alert('У вас ". $maxid ."---- ');</script>";

 //echo "<script> document.location.href='account.php?new=reopen'</script>"; 
//header("Location: account.php?id=$maxid"); exit;

echo "<script> document.location.href='account.php?id=$maxid'</script>"; 

//header ('Location: account.php?id=$maxid'); 
//echo "<script> document.location.href='account.php?id=$maxid'</script>"; 
//echo  $client ;
//echo "<script> document.location.href='trebovan_prih.php'</script>"; 




/*?> <script> value='<? echo $maxid ?> ' window.open("account.php?id="+value, '_self') </script><? */

}




//////////////////////////////////////////////////////////Добавить новый оплат //////////////////////////////////////////////////////////////////////////////////////
if ( !empty($_POST['add_payment']) ) {

$user= $_SESSION['user'] ;

$id=$_GET['id']; 


$row=sqlread("SELECT * FROM account_gen WHERE id_ac_gen= '$id' ");

$idclient=$row['idclient'];

//echo "<script>alert('У вас ". $value ."----".$price[$key]." ');</script>";


$qq=sqlread("INSERT INTO account_pay(user,id_ac_gen,idclient,dates) VALUES('$user','$id','$idclient',NOW()) "); 

//echo "<script> document.location.href='account.php?id=$id'</script>"; 

header("Location: account.php?id=$id"); exit;
//echo  $client ;

}
//////////////////////////////////////////////////////////Удаление оплаты //////////////////////////////////////////////////////////////////////////////////////
if ( !empty($_GET['idpaydel']) ) {
$user= $_SESSION['user'] ;
$idpaydel=$_GET['idpaydel'];
$id=$_GET['id']; 

$row=sqlread("DELETE FROM account_pay  WHERE id_pay = '$idpaydel' ");

header("Location: account.php?id=$id"); exit;
//echo "<script> document.location.href='account.php?id=$id'</script>"; 
}
//////////////////////////////////////////////////////////Создание заказа //////////////////////////////////////////////////////////////////////////////////////
if ( $_POST['zakaz']=='new' ) {
$user= $_SESSION['user'] ;
//$idpaydel=$_GET['idpaydel'];
$id=$_GET['id']; 
$user= $_SESSION['user'] ;


$rr1=sqlread("SELECT * FROM account_gen WHERE id_ac_gen = '$id' ");
$n_acc=$rr1['number'];


$accountofthe=$rr1['accountofthe'];// Дата создания счета
$day_delivery=$rr1['day_delivery'];



$date = $accountofthe;
//$date->modify('+$day_delivery day');
$date=date('Y-m-d', strtotime($date) + $day_delivery*86400 ); /*в дне 86400 секунд - обычно все это помнят*/

$dateend=$date;






$rr=sqlread("SELECT MAX(n_order) as max_order FROM order_gen ");
$max_order=$rr['max_order']+1;
$idclient=$rr1['idclient'];

$row=sqlread("INSERT INTO order_gen(user,n_order,n_account,id_account,client,date_begin,shipment) VALUES ('$user' ,'$max_order','$n_acc','$id','$idclient',CURDATE(),'8') ");

$rr=sqlread("SELECT  MAX(id_order) as max_idorder FROM order_gen WHERE user = '$user'");

$idorder=$rr['max_idorder'];

$rrc=sqlread("SELECT  n_order FROM order_gen WHERE id_order = '$idorder'");
$n_order=$rrc['n_order'];
$row=sqlread(" INSERT INTO order_sub (id_board,id_order_gen,price,quantity,algorithm,config,user,date) SELECT id_equipment,'$idorder',price,number,idalgorythm,config,'$user',NOW() FROM account_sub WHERE  id_ac_gen = '$id' ");

/*
$max_idorder = $rr['max_idorder'];
$row=sqlread("UPDATE account_gen SET idorder  = '$max_idorder' WHERE id_ac_gen = '$id' ");

*/
//header("Location: account.php?id=$id"); exit;
//echo "<script> document.location.href='account.php?id=$id'</script>"; 

sqlread("INSERT INTO give_board_gen(user,dates,note,id_order,n_order,n_account) VALUES ('$user',NOW(),'Заказ $n_order id$idorder','$idorder ','$n_order','$n_acc' ) ");
$rrr= sqlread("SELECT MAX(id_give) as max_idgive  FROM give_board_gen ");
$max_idgive=$rrr['max_idgive'];
//alert ($id); 

$rr=sqlread("UPDATE order_gen  SET salesinvoice='$max_idgive' WHERE id_order='$idorder' ");


$row=sqlread("UPDATE  account_gen SET idorder = '$idorder' WHERE id_ac_gen='$id' ");


echo "<script> document.location.href='order.php?id=$idorder'</script>"; 


}


////////////////////////////////////////////////////////// ИЗМЕНИТЬ ДАННЫЕ ПЛАТЕЖКИ //////////////////////////////////////////////////////////////////////////////////////

if ( !empty($_GET['edit_payment']) ) {
$user= $_SESSION['user'] ;

$id=$_GET['id']; 

$num_pp_pay=$_GET['num_pp_pay']; 
$pay=$_GET['pay_pay']; 
$dates_pay=$_GET['dates_pay']; 
$comment_pay=$_GET['comment_pay']; 
$idclient_pay=$_GET['idclient_pay']; 
$id_pay=$_GET['id_pay']; 

$id_pay=$_GET['id_pay']; 


$dates_pay=date("Y.m.d",strtotime($dates_pay));

$row=sqlread("UPDATE account_pay SET num_pp ='$num_pp_pay', pay ='$pay', dates ='$dates_pay', comment ='$comment_pay', user='$user',idclient='$idclient_pay' WHERE id_pay = '$id_pay' ");

echo "<script> document.location.href='account.php?id=$id'</script>"; 
}

/////////////////////////////////////////////////////////удаление строки /////////////////////////////////////////////////////////////////////////////////////


if($_GET['del_gen']=='yes') {$id=$_GET['id']; 

$idsub=$_GET['idsub']; 
//echo "<script>alert('У вас ". $id_ac_sub ."----".$id." ');</script>";

sqlread("DELETE FROM account_sub WHERE id_ac_sub = '$idsub' ");

echo "<script> document.location.href='account.php?id=$id'</script>"; 
}

////////////////////////////////////////////////////////// обновить поле клиент шапка  //////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['idclient'])) {$id=$_GET['id']; 

$idclient=$_GET['idclient']; 

$ss=sqlread("SELECT * FROM idclient WHERE idclient = '$idclient' ");
$discount=$ss['discount'];

$qq=sqlread("UPDATE account_gen SET idclient='$idclient' , discount= '$discount' WHERE id_ac_gen = '$id' "); 


echo "<script> document.location.href='account.php?id=$id'</script>"; 
}

////////////////////////////////////////////////////////// обновить поле дата шапка  //////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['dater'])) {$id=$_GET['id']; 

$dater=$_GET['dater']; 
//$dater=date("Y.m.d",strtotime($dater));

$qq=sqlread("UPDATE account_gen SET accountofthe='$dater' WHERE id_ac_gen = '$id' "); 


echo "<script> document.location.href='account.php?id=$id'</script>"; 
}

////////////////////////////////////////////////////////// обновить поле дата status  //////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['status'])) {$id=$_GET['id']; 

$status=$_GET['status']; 


$qq=sqlread("UPDATE account_gen SET status='$status' WHERE id_ac_gen = '$id' "); 


echo "<script> document.location.href='account.php?id=$id'</script>"; 
}

////////////////////////////////////////////////////////// обновить поле скидка  //////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['discount'])) {$id=$_GET['id']; 

$discount=$_GET['discount']; 


$qq=sqlread("UPDATE account_gen SET discount='$discount' WHERE id_ac_gen = '$id' "); 


echo "<script> document.location.href='account.php?id=$id'</script>"; 
}

////////////////////////////////////////////////////////// Изменить статус  //////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['idstatus'])) {$id=$_GET['id']; 

$idstatus=$_GET['idstatus']; 




$qq=sqlread("UPDATE account_gen SET status='$idstatus' WHERE id_ac_gen = '$id' "); 


echo "<script> document.location.href='account.php?id=$id'</script>"; 
}
////////////////////////////////////////////////////////// Изменить id_alg  //////////////////////////////////////////////////////////////////////////////////////
if(!empty($_GET['id_alg'])) {$id=$_GET['id']; 

$id_alg=$_GET['id_alg']; 
$id_ac_sub= $_GET['id_ac_sub'];

$row=sqlread("SELECT config FROM algorythm WHERE id = '$id_alg'");


$config= $row['config'];

$qq=sqlread("UPDATE account_sub SET idalgorythm='$id_alg',config='$config' WHERE id_ac_sub = '$id_ac_sub' "); 


echo "<script> document.location.href='account.php?id=$id'</script>"; 
}

echo "<div class='super_genblock'>";
 echo "<div class='genblock'>";

 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
 if(empty($_GET['id'])) {  // Если id пуст то перекинуть в журнал
  echo "<script> document.location.href='journal_account.php';</script>"; 
  }
*/

} //  Допуск по пользователю закрыть скобку<<<<<<<<<<<<<<<<<-------------------------------------------------------------------!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

  ///////////////////////////////Шапка ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////Шапка ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ///////////////////////////////Шапка ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  $id=$_GET['id'];
 // $rr = sqlread("SELECT * FROM account_gen  WHERE id_ac_gen = '$id' ") ;


?>
  <script>

  function onchanges_gen(){  // Для полей списков

    var id                    = <? echo $id=$_GET['id']; ?>       ;  
    var n_account             =document.getElementsByName("n_account")[0].value;
    var idclient              =document.getElementsByName("idclient")[0].value;
    var id_shipstat           =document.getElementsByName("id_shipstat")[0].value;
    var condition_pay         =document.getElementsByName("condition_pay")[0].value;
    var discount              =document.getElementsByName("discount")[0].value;
    var shipconditions        =document.getElementsByName("shipconditions")[0].value;
    var day_delivery          =document.getElementsByName("day_delivery")[0].value;
    var shiping_cost          =document.getElementsByName("shiping_cost")[0].value;
    var comment_gen           =document.getElementsByName("comment_gen")[0].value;
    var comment_print_acc     =document.getElementsByName("comment_print_acc")[0].value;
    var dater                 =document.getElementsByName("dater")[0].value;



//alert(n_account);




$.ajax({
  url: 'ajax_saves_acc.php',
  type:"POST",
  cache:true,
data: { 
  id:                   id, 
  n_account:            n_account, 
  dater:                dater,
  idclient:             idclient ,
  id_shipstat:          id_shipstat,
  condition_pay:        condition_pay,
  discount:             discount,
  shipconditions:       shipconditions,
  day_delivery:         day_delivery,
  shiping_cost:         shiping_cost,
  comment_gen:          comment_gen,
  comment_print_acc:    comment_print_acc,
},
        success: function(data){
    //    alert('Load was performed.');
   // alert(response);
  // alert(data.value1);
  data =  data.replace(/['"«»]/g, '');



   document.getElementsByName("discount")[0].value=Number(data);
  // alert(result['advert']);
        },
        error: function(){
          alert('Данные не сохранились ! Нет соединения с базой ');
        }


  })



}

</script>
<?

echo "<div class='top_inf'>";








?> <div class='head_menu'> <?









//echo "<form action='account.php' method='GET'  >";

$idgen=$_GET['id'];$id=$_GET['id'];
echo "<form action='account.php?id=$id' method='POST' id='home' >"; 

//echo "<input visibility : hidden type='text' id='pole_null' textarea id='idgen'   value='$id'>   ";
echo "<input visibility : hidden type='text' id='pole_null' textarea id='idgen' name='idgen'  value='$id'>   ";

echo "<font style='font: 15px apple-system' color = black ><b>";
$id=$_GET['id'];
$row= sqlread ("SELECT * FROM  account_gen  WHERE  id_ac_gen ='$id' ");
$num_account=$row['number'];
$status=$row['status'];
$dater=$row['accountofthe'];
$deliverytime=$row['deliverytime'];
$shipconditions=$row['shipconditions'];
$shiping_cost=$row['shiping_cost'];
$discount=$row['discount'];
$correction=$row['correction'];
$day_delivery=$row['day_delivery'];
//echo "<script>alert('У вас ". $deliverytime."----".$price[$key]." ');</script>";
$id=$_GET['id'];

echo space(0)."  <input bgcolor='red' visibility : hidden type='text' id='pole_idprih' textarea name='idd'   value='$id'>   ";
echo space(75)."  <input bgcolor='red' visibility : hidden type='text' id='pole_idprih' textarea name='id'   value='$id'>   ";
echo space(5) ; ?><font style='font: 25px apple-system' color = black ><b> № </b></font>  <input bgcolor='red' type='text' id='input_shap' textarea name='n_account'   value='<? echo $num_account ?> '  onkeydown='if(event.keyCode==13) {onchanges_gen(); jQuery(this).blur() }'  >   <?
echo " от   <input   type='date' min='2000-01-01' id='dater' name='dater' value='".$dater."'  onkeydown='if(event.keyCode==13) {onchanges_gen(); jQuery(this).blur() }'  > " ;




//echo space(5). " <input type='submit' name='add_account'  class='btn btn-primary  btn-sm'  value='создать новый счет' /> " ;

?> 


  <button name = 'add_account' class='pic'  value='создать новый счет'       >   <div class="fly_comment" data-title="Создать новый счет">               <img src="images/add_doc.png"  width='50' height='30' alt=""   id = 'button_pic' style="vertical-align: middle">   </div></button>  
   <button name = 'print_acc'  class='pic' value='Печать'       > <div class="fly_comment" data-title="Распечатать документ">                            <img src="images/printer.png"  width='50' height='30' alt=""   id = 'button_pic' style="vertical-align: middle"></div></button>
   <button name = 'print_acc_on_email' class='pic'  value='Отправить на e-mail '       > <div class="fly_comment" data-title="Отправить письмо заказчику"> <img src="images/maill.jpg"  width='50' height='30' alt=""   id = 'button_pic' style="vertical-align: middle"></div></button>
  <button name = 'zakaz'   value='new'   class='pic'    ><div class="fly_comment" data-title="Создать заказ на основе этого счета"> <img src="images/zakaz.jpg"  width='50' height='30' alt="Зонтик"   id = 'button_pic' style="vertical-align: middle"></div></button>
 <? echo space(0) ;  ?> <!--  <button name = 'save_acc'   value='Сохранить'   form='MysubForms'   ><div class="fly_comment" data-title="Сохранить данные счета"> <img src="images/diskette.png"  width='50' height='30' alt="Зонтик"   id = 'button_pic' style="vertical-align: middle"></div></button>
-->

      <div class='label'>  <font color='Navy'   > <?  echo 'СЧЕТ НА ОПЛАТУ' ; ?>  </div>



<?

/////........................статус отправки
$shipment=$row['shipment'];
$rr=sqlread("SELECT * FROM acc_shipped WHERE id = '$shipment'"); 
$sql = "SELECT * FROM acc_shipped ORDER BY name ASC ";
$result_select = mysql_query($sql);

?> <select name="id_shipstat" id='ship_stat' onchange = 'onchanges_gen()'> <?
/*?> <select name='idclient' id='' > <?*/
$object->name = $rr['name'] ;

echo   "<option  selected value=$shipment   > $object->name   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name </option> ";}  
echo "</select>";
////..........................




echo space(5)." <td><div class='fly_comment_left' data-title='Удалить счет целиком и полностью'>  <a href='account.php?id=".$id."&del_gen_acc=yes'><img src='images/krest1.png' width='30' height='30' alt='Пример''></a></div></td> ";  // удаление 





 ?></div> <div class= 'head_data'> <?
echo space(3);
echo "Клиент";
echo space(10);

$client=$row['idclient'];


/////........................список клиентов
$idclient= $client;//$_SESSION['idclient'];
$rr=sqlread("SELECT * FROM client WHERE idclient = '$idclient'"); 
$sql = "SELECT * FROM client ORDER BY company ASC ";
$result_select = mysql_query($sql);
?> <select name="idclient" id='client_shap'   form='home'   onchange = 'onchanges_gen();'> <?
$object->company = $rr['company'] ;
echo   "<option  selected value=$idclient   > $object->company   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->idclient' > $object->company </option> ";}  
echo "</select>";
////..........................



//condition_pay


echo space(5)."Условие оплаты ";
$id_condition_pay=$row['condition_pay'];
/////........................список статус
$rr=sqlread("SELECT * FROM acc_condition_pay WHERE id = '$id_condition_pay'"); 
$sql = "SELECT * FROM acc_condition_pay ORDER BY id ASC ";
$result_select = mysql_query($sql);
?> <select name="condition_pay" id='client_shap' form='home'  onchange = 'onchanges_gen();'>   <?
$object->conditions = $rr['conditions'] ;
echo   "<option  selected value=$id_condition_pay   > $object->conditions   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->conditions </option> ";}  
echo "</select>";
////..........................







echo space(0). "Скидка".space(5); ?> <input type='text'  name='discount'  id='data_shap' form='home'  placeholder='Скидка % '  value=' <? echo $discount ?> '  onkeydown='if(event.keyCode==13) {onchanges_gen(); jQuery(this).blur() }' /> % <?


echo "<br>";

echo space(2)."<FONT COLOR = RED size=5 ><B> Задолженость клиента: </font>";

//echo space(5)."<input type='text'  name='status'  id='data_shap'  placeholder='Номер счета'  value=' ".$status." ' /> " ;



//echo "Скидка"; 
echo space(41)."Усл. отгрузки";
echo space(5);
/////........................список условия отгрузки
//$status= $client;//$_SESSION['idclient'];
$rr=sqlread("SELECT * FROM acc_shipconditions WHERE id = '$shipconditions'"); 
$sql = "SELECT * FROM acc_shipconditions ORDER BY name ASC ";
$result_select = mysql_query($sql);

?> <select name="shipconditions" id='client_shap' form='home'   onchange = 'onchanges_gen();'> <?
/*?> <select name='idclient' id='' > <?*/
$object->name = $rr['name'] ;

echo   "<option  selected value=$shipconditions   > $object->name   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name </option> ";}  
echo "</select>";
////..........................


echo space(0)."Доставка".space(3);
echo "<input type='text'  name='shiping_cost'  id='data_shap'  placeholder='' form='home'    value='".$shiping_cost."'  onkeydown='if(event.keyCode==13) { onchanges_gen(); jQuery(this).blur() ; onchang_sub(this);  }' /> Руб" ;


echo "<br>";

echo space(116);
echo "Срок поставки <input type='text' name='day_delivery' value='$day_delivery' id='data_shap'  form='home'  onkeydown='if(event.keyCode==13) {onchanges_gen(); jQuery(this).blur() ;  }' >". space(8)." Дней";

echo space(16);
?><a href='' TARGET='_self '  style='color:DarkBlue;'   onclick=' var qq = "<?php echo $id;?>"; window.open("popup_timedelivery.php?id=" +qq, "modal", "width=600,height=300,screenX=500,screenY=500"); '></a></td>
<?
//echo "Срок поставки";


echo space(3);

echo "</font>";






echo "<font style='font: 15px apple-system' color = Navy ><b>";


echo "<br>";

?> 


</div> 

<div class = 'head_note' >

<?




$comment = $row['comment'] ;
$comment_print_acc = $row['comment_print_acc'] ;

echo "<br>".space(3)."Примечание:".space(1)."<font color = black > <input bgcolor='red' type='text' id='pole_noteac'textarea name='comment_gen' form='home'   value='$comment'    onkeydown='if(event.keyCode==13) { onchanges_gen(); jQuery(this).blur() ; onchang_sub(this);  }' > </font></b>  " ;
echo "<br> ".space(3)."<b>Прим принт :<font color = red > <input bgcolor='red' type='text' id='pole_noteac' textarea name='comment_print_acc' form='home'   value='$comment_print_acc'   onkeydown='if(event.keyCode==13) { onchanges_gen(); jQuery(this).blur() ; onchang_sub(this);  }'  > </font></b>  " ;


?> </form></div> <?
 echo "</div>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////подчиненные данные //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



 



$id=$_GET['id'];
$eee=sqlread("SELECT  COUNT(*) as counts FROM account_sub WHERE id_ac_gen= '$id'  ");
$count_str=$eee['counts'];
$rr=sqlread("SELECT * FROM account_gen WHERE id_ac_gen = '$id'");
$shiping_cost=$rr['shiping_cost'];
$nds=$rr['nds'];



?> <script>

var formatter = new Intl.NumberFormat("ru", {
  //style: "currency",
  //currency: "GBP",
  minimumFractionDigits: 2
});

function onchang_sub(){  // Для полей списков
var count_str = Number(<? echo $count_str; ?> );
var shiping_cost = Number(<? echo $shiping_cost; ?> );
var nds = Number(<? echo $nds; ?> );
var count = count_str-1 ;
var count1 = count_str-1 ;
var fullsum =0;
var full_sumnds = 0;
var full_sumprice_sale = 0;
var full_sumprice_sale1= 0;


while(count>-1) {

//var shiping_cost = shiping_cost.toFixed(2);

var id_ac_sub  =                Number(document.getElementsByName("id_ac_sub[]")[count].value);
var shiping_cost  =             Number(document.getElementsByName("shiping_cost")[0].value);
var discount  =                 Number(document.getElementsByName("discount")[0].value);
var number  =                   Number(document.getElementsByName("number[]")[count].value);
var price_sale =                Number(document.getElementsByName("price_sale[]")[count].value);
var priceandship=               price_sale+(shiping_cost/count_str);
var priceandship=               Number(priceandship.toFixed(2));
var sumprice_sale=              Number(number*price_sale);
var name_equipment  =           document.getElementsByName("name_equipment[]")[count].value;
var id_alg  =                   document.getElementsByName("id_alg[]")[count].value;
var unit  =                     document.getElementsByName("unit[]")[count].value;



while(count1>-1) { // вычисляем сумму по счету без доставки 
  var price_sale1 =             Number(document.getElementsByName("price_sale[]")[count1].value);
  var number1  =                Number(document.getElementsByName("number[]")[count1].value);
  var sumprice_sale1=           Number(number1*price_sale1);
  var full_sumprice_sale1=      Number(sumprice_sale1+full_sumprice_sale1);
  var count1 = count1-1;
}



var priceandship=             Number(((((shiping_cost/full_sumprice_sale1 )*sumprice_sale).toFixed(0))/number)+price_sale);
var priceandship=             priceandship.toFixed(2);
var sumpriceandship=          Number(number*priceandship);
var full_sumprice_sale=       Number(sumprice_sale+full_sumprice_sale);




var sumnds= Number((sumpriceandship*nds/(100+nds)).toFixed(2));

var full_sumnds = sumnds+full_sumnds;
var full_sumnds = full_sumnds;
//var price_sale       =document.getElementById("price_sale_id").value;
//document.getElementById("pole_id").value=222;

document.getElementsByName("priceandship[]")[count].value=formatter.format(priceandship) ;
document.getElementsByName("sum_string[]")[count].value=formatter.format(sumpriceandship) ;
document.getElementsByName("nds_string[]")[count].value=formatter.format(sumnds) ;

var fullsum= sumpriceandship+fullsum;

document.getElementsByName("sum_full_printacc")[0].value=formatter.format(fullsum)  ;




document.getElementsByName("full_sum_nds")[0].value=  formatter.format(full_sumnds)   ;




//alert(fullsum);


//alert(count_str);
  /////////////////////// ajax
 // alert(sumprice_sale);

$.ajax({
  url: 'ajax_saves_acc_sub.php',
  type:"POST",
  cache:true,
data: { 
  id_ac_sub:            id_ac_sub, 
  number:               number,
  name_equipment:       name_equipment,
  id_alg:               id_alg,  
  unit:                 unit, 
  price_sale:           price_sale,  
  salesum:              sumpriceandship, 
},
        success: function(data){
        },
        error: function(){
        alert('Данные не сохранились ! Нет соединения с базой ');
        }


  })

  /////////////////////// ajax
count = count-1;
}



}
</script>
<?
 echo "<div class='datablock_subaccount' id = 'qqq'>";
 $id=$_GET['id']; 
 echo "<form action='account.php?id=$id' method='POST' id='add_pr' >";
//echo $qqq ;
echo "<input visibility : hidden type='text' id='pole_null' textarea name='idgen'   value='$id'  form='add_pr'  >   ";

?> 
<div class= 'datablock_menu' >
<input type="submit" class='btn btn-warning btn-sm' name = "del_check" value="Удалить отмеченные<? echo space(0) ; ?>" form = 'MysubForms' >
<?

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




echo space(5)." кол-во <input bgcolor='red'   height='10' type='number' id='pole_quant_add' textarea name='kolvo'   value='1'>   ";


?>   
<button name = 'add_product'   value='добавить изделие'    form='add_pr'    ><div class="fly_comment" data-title="Добавить новое изделие в счет "> <img src="images/galochka-3d.jpg"  width='40' height='20' alt="Зонтик"   style="vertical-align: middle"></div></button> 
</div> 

<?
echo space(0) ; 
echo "</form>";
//...................

$i=1;

$sizefont="style='font: 12px apple-system'";


$www=sqlread("SELECT * , SUM(price_sale*number)  as full_sum  FROM account_sub WHERE id_ac_gen = '$id' " );

$fullsumacc=$www['full_sum'];  // Сумма всего счета





$rr=sqlread("SELECT * FROM account_gen WHERE id_ac_gen = '$id'");

$nds=$rr['nds'];
$shiping_cost=$rr['shiping_cost'];
///// шапка талицы
$name =  array('П/№ ','Наименование' ,'Алг','Конфиг','Ед','Кол','Цена прайс','Цена прод','Цена по счету','Сумма','НДС '. $nds.'%') ;
$long =  array(' 60','766         ' ,'102','110','60','42','111','111','111','111','111','111') ;

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  bgcolor='Aquamarine'  width='$ln' id = 'gradient' > <font color='black'   style='font: 12px apple-system'>  <b> $nam</td>";
} echo "</tr> </table>";
/////end////////

$id=$_GET['id'];

$strSQL="SELECT * , (number * price) as sum_string FROM account_sub WHERE id_ac_gen= '$id'  ";
 $rs = mysql_query($strSQL);


$ee=sqlread("SELECT  COUNT(*) as counts FROM account_sub WHERE id_ac_gen= '$id'  ");


echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {


  echo "<form action='account.php?id=$id' method='post' id='MysubForms' >";





   $count_str=$ee['counts'];



$name_equipment=$row['name_equipment'] ;
$unit = $row['unit'] ;
$number = $row['number'] ;
$price = $row['price'] ;
$price_edit = $row['price_edit'] ;
$price_sale = $row['price_sale'] ;

$id_ac_sub = $row['id_ac_sub'] ;

$id_equipment=$row['id_equipment'];
$config=$row['config'];

echo "<td> <input type='checkbox' id= 'chekkbb' name='check_b[]' value='$id_ac_sub' ></td>";










 echo "<input visibility : hidden type='text' id='pole_null' textarea name='id[]'   value='$id'>   ";
  echo "<input visibility : hidden type='text' id='pole_null' textarea name='id_ac_sub[]'   value='$id_ac_sub'>   ";
echo "<td  'width=0 id='pole_pn' bgcolor = 'CadetBlue'>  $i </td>"  ;




$rrr=sqlread("SELECT SUM(quantity) as sum_quantity FROM sales_invoice_sub WHERE id_ac_sub = '$id_ac_sub'");




$sum_quantity=$rrr['sum_quantity'];




$remainder=$number - $sum_quantity;

?> <script>
jAlert('This is a custom alert box', 'Alert Dialog');
</script>
<?


if ($remainder==0) {?><td  'width=0 id='pole_null' ><b>  <input autofocus  type="text"   name="name_equipment[]"  id='pole_nameac_dark' value="<?=$name_equipment;?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur();onchang_sub();  }'  ></td>  <!-- наименование изделия --> <? }
else {?><td  'width=0 id='pole_null' ><b>  <input autofocus  type="text"   name="name_equipment[]"  id='pole_nameac' value="<?=$name_equipment;?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur();onchang_sub();  }'  ></td>  <!-- наименование изделия --> <? }



echo "<td>" ;  


/////........................список 
$id_alg= $row['idalgorythm'];
$rr=sqlread("SELECT * FROM algorythm WHERE id = '$id_alg'");
$sql = "SELECT * FROM algorythm ORDER BY name ASC ";
$result_select = mysql_query($sql);
?> <select name="id_alg[]" id='pole_alg'  onchange = 'onchang_sub(); ' > <?
//.........

$object->name = $rr['name'] ;
echo   "<option  selected value=$id_alg   > $object->name   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name </option> ";}  
echo "</select>";
////..........................



?>
</td>  




 <td  'width=0 id='pole_null' >  <input autofocus type="text" name="config[]"  id='pole_id' value="<?=$config;?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'  ></td>  <!-- конфигурация -->



<td>  

<?
//$id_unit=2;
/////........................список unit
$id_unit= $row['unit'];
$rr=sqlread("SELECT * FROM unit WHERE idunit = '$id_unit'");
$sql = "SELECT * FROM unit  ";
$result_select = mysql_query($sql);
?> <select name="unit[]" id='pole_unit' onchange = 'onchang_sub(); '  > <?
//.........

$object->name = $rr['unit'] ;
echo   "<option  selected value=$id_unit   > $object->name   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->idunit' > $object->unit </option> ";}  
echo "</select>";
////..........................

?>
</td>  


<!-- <td  'width=0 id='pole_null' >  <input autofocus type="text" name="unit[]"  id='pole_id' value="<?=$unit;?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur() }' ></td>   -->


<td  'width=0 id='pole_null' >  <font color='black'  > <input autofocus type="text" name="number[]"  id='pole_quanti' value="<?=$number;?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur();onchang_sub(); }' ></td>  <!-- количество по счету -->
<td  'width=0 id='pole_null' >   <font color='LightGrey'  > <input autofocus type="text" name="price[]"  id='pole_id' value="<?=  number_format($price, 2, ',', ' '); ?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur() }' ></td>   <!-- цена прайса -->


<td  'width=0 id='pole_null' >  <font color='black'  >  <input autofocus type="text" name="price_sale[]"  id='price_sale_id' value="<? echo   $price_sale;  ?>  "  onkeydown='if(event.keyCode==13) { jQuery(this).blur() ; onchang_sub(); }' > </td>   <!-- цена продажи -->


<? $priceandship= (            round(   ($shiping_cost/$fullsumacc)*($price_sale*$number),0  ))               /$number+$price_sale ; ?>

<td  'width=0 id='pole_null' >  <font color='red'  >  <input autofocus type="text" name="priceandship[]"  id='pole_id' value="<? echo number_format($priceandship, 2, ',', ' ');     ?>  "  onkeydown='if(event.keyCode==13) { jQuery(this).blur() ; }' > </td>   <!-- цена продажи c доставкой  -->




<?

$id=$_GET['id'];
$rr=sqlread("SELECT * FROM account_gen WHERE id_ac_gen = '$id'");
$nds=$rr['nds'];

$sum_string = $priceandship*$number;//$row['salesum'] ;

$nds=round($sum_string*$nds/(100+$nds),2);

?> <td  'width=0 id='pole_id' >  <font color='red'  >  <input readonly autofocus type="text" name="sum_string[]"  id='pole_id' value="<?=  number_format($sum_string, 2, ',', ' ');?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'></td>   <!-- сумма строки-->


 <td  'width=0 id='pole_id' >  <font color='DarkGray'  >  <input readonly autofocus type="text" name="nds_string[]"  id='pole_id' value="<?=  number_format($nds, 2, ',', ' ');?>"  onkeydown='if(event.keyCode==13) { jQuery(this).blur() }'></td>   <!-- сумма строки-->


<?



$sum_full = $sum_string+$sum_full ;

$sum_nds = $sum_nds+$nds ;

// echo "</form>";

echo "</tr> ";

$i++;


}}

echo " </table>";





echo "</form>";

?>
<div class='datablock_summa'>
<?
echo space(200);

echo "<table border=0 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
echo  "<td  align='left' border=0  'width=550 bgcolor=''    > <font color='black'  > <b>  ".space(359)." </td>"; 
echo "<td  align='left' border=0  'width=550 bgcolor=''    > <font color='black'  > <font style='font: 20px apple-system' > <b>  Сумма по счету: </font> </td>"; 

 $sum_full_print=number_format($sum_full, 2, ',', ' ');
//echo "<td  align='right'  'width=100 id='pole_sum'    > <font style='font: 20px apple-system' >   <font color='red'  > <b> "   .   $sum_full_print .         "</font>  </td></tr>"; 

?> 


 <td   id='pole_sum' border=0 >  <font style='font: 20px apple-system' color='red'>    <input  type="text" name="sum_full_printacc" id='pole_id'   value="<?=  $sum_full_print;?>"  '></td> </tr> </font>   <!-- сумма строки-->

<? 


$row=sqlread("UPDATE account_gen  SET  summa='$sum_full '  WHERE id_ac_gen = '$id' "  ); 


$nds=$_SESSION['nds'] ;
//$sum_nds=round((($sum_full*$nds)/($nds+100)),2);



$sum_nds=number_format($sum_nds, 2, ',', ' ');
echo  "<td  align='left' border=0  'width=550 bgcolor=''    > <font color='black'  > <b>  ".space(317)." </td>"; 
echo "<td  align='left' border=0  'width=550 bgcolor=''    > <font color='black'  > <font style='font: 20px apple-system' > </b>  в т.ч. НДС: </font> </td>"; 
//echo "<td  align='right'  'width=100  id='pole_sum'    > <font color='Gray'  > </b>"   .   $sum_nds .         "  </td>"; 
?> 
<td   id='pole_sum' border=0 >  <font style='font: 20px apple-system' color='Gray'>    <input  type="text" name="full_sum_nds" id='pole_id'   value="<?=  $sum_nds;?>"  '></td> </tr> </font>   <!-- сумма строки-->
<?

echo "</tr> </table>";

echo "</div>";
?> </div> <?

///////////////////////////////////////////////////////////////////////////////ОПЛАТЫ ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 echo "<div class='block_pay_up'>";



//echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";

 ?> 
 <div class='label_pay'><b>ОПЛАТЫ ,ОТГРУЗКИ  </div>   

 
 
 <?  
//----------------------------------------
?>  <div class='pays_menu'> <?

 echo "<form action='account.php?id=$id' method='POST' id='MyForms2' >";
$id=$_GET['id'];

$sizefont="style='font: 12px apple-system'";
echo space(5);
 ?> 
 <button name = 'sales_inv'   value='10'       ><div class="fly_comment" data-title="Создать расходную накладную на основе счета">             <img src="https://img.icons8.com/wired/64/000000/create-archive.png"  width='30' height='30' alt=""  style="vertical-align: middle"></div></button>
<a href='#' ><img src='https://img.icons8.com/doodle/48/000000/coins.png' width='30' height='30' alt='...'' onclick=' var qq = "<?  echo $id;?>"; window.open("popup_addpay.php?id=" +qq, "modal", "width=800,height=300,screenX=400,screenY=400"); '></a>

<input bgcolor='red' visibility : hidden type='text' id='pole_idprih' textarea name='id'   value='$id'>  
<input bgcolor='red' visibility : hidden type='text' id='pole_idprih' textarea name='idd'   value='$id'>  

</form>
</div>


<?
//---------------------------------------
?>

<div class='pays_tables'>

<form action='account.php?id=$id' method='POST' id='MyForms3' >
<input type submit name ='ss' visibility : hidden  > 


<?


///// шапка талицы
$name =  array('Дата','Опер','№ накл','Сумма опл','Сумма расх') ;
$long =  array('76 ' ,'50','50','83','83') ;
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";              //," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  bgcolor='Aquamarine'  width='$ln' id = 'gradient'  > <font color='black'   style='font: 12px apple-system'> <b> $nam</td>";
} echo "


";
?> <!-- <td> <a href='#'><img src='images/dengadollar.png' width='20' height='20' alt='...'' onclick=' var qq = "<?  echo $id;?>"; window.open("popup_addpay.php?id=" +qq, "modal", "width=600,height=300,screenX=500,screenY=500"); '></a></td>  -->

</tr>  </table>

<?
/////end////////
echo "</form>";


$id=$_GET['id'];
$i=1; // порядковый номер оплаты


////////////////////////////оплаты////////////////////////////////


$strSQL = "SELECT * FROM account_pay WHERE id_ac_gen= '$id'  ";
/*либо UNION ALL при необходимости сохранения дубликатов*/
 $rs = mysql_query($strSQL);
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
    if (!empty ($rs) ) {     while($row = mysql_fetch_array($rs)) { 
 echo "<form action='account.php?id=$id' method='get' id='MyForms1' >";
$num_pp=$row['num_pp'];
$pay=$row['pay'];
$dates=$row['dates'];
$comment=$row['comment'];
$idclient=$row['idclient'];
$id_pay=$row['id_pay'];
$id=$_GET['id'];
$dates=date("d.m.Y",strtotime($dates));

$nameclient = name_client_id($idclient);

$rash_id=  $row['idgen'];


echo "<input bgcolor='red' visibility : hidden type='text' id='pole_idprih' textarea name='id_pay'   value='$id_pay'>   ";
echo "<input bgcolor='red' visibility : hidden type='text' id='pole_idprih' textarea name='id'   value='$id'>   ";
echo " <td> <a href='account.php?id=".$id."&idpaydel=".$id_pay."&del_gen=yes'><img src='images/krest1.png' width='15' height='15' alt='Пример''></a></td> ";  // удаление 
echo "<td width=40 align='left'  '  id='pole_data_pay'     >  <b><input type='text' min = '2000-01-01' name='pole_data_pay' id='pole_data_pay' value='". $dates ."' />   </td>"; // Дата платежки 
echo "<td width=40 align='left'  '  id='pole_id_pay'  bgcolor='Pink'   >  <b><font color = red> <input  type='text'  name='pole_data_pay' id='pole_id_pay' value='". 'оплат' ."' />   </td>"; // 

echo "<td width=40  align='left'  style='background-color:Cornsilk;' ><b><font color = red> <input type='text' name='num_pp_pay'  id='pole_id_pay' style='background-color:Cornsilk;'  value='". $num_pp ."' />   </td>";  // номер платежки

echo "<td width=40 align='left'  ' id='pole_ceny_pay'     > <b><input type='text' name='pay_pay'  id='pole_ceny_pay' value='". number_format($pay, 2, ',', ' ') ."' />   </td>";  // сумма платежки
echo "<td width=40 align='left'  ' id='pole_ceny_pay'     > <b><input type='text' name='pay_pay'  id='pole_ceny_pay' value='' />   </td>";  // сумма платежки





echo "</form>";

echo "</tr> ";
}}
echo " </table>";
//echo "<hr>";





/////////////////////////////////////////////////////////////////////// Расходные//////////////////////////////
$strSQL1 = "SELECT * FROM sales_invoice_gen WHERE id_ac_gen= '$id'  ";  $rs1 = mysql_query($strSQL1);
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
    if (!empty ($rs1) ) {     while($row = mysql_fetch_array($rs1)) { 

$dates=$row['dates'];
$idgen=$row['idgen'];
$rows=sqlread( "SELECT  SUM(price*quantity) as sum FROM sales_invoice_sub WHERE id_sales_gen= '$idgen'  ");
$sum=$rows['sum'];
if(empty($sum)){$sum=0;}



echo " <td> <a href='account.php?id=".$id."&idrash=".$idgen."&delrashod=yes'><img src='images/krest1.png' width='15' height='15' alt='Пример''></a></td> ";  // удаление 
echo "<td width=40 align='left'  ' id='pole_data_pay'     > <b><input type='text' name='pay_pay'  id='pole_data_pay' value='". $dates ."' />   </td>";  //  дата документа
echo "<td width=40 align='left'  '  id='pole_id_pay'     >  <b><input type='text'  name='pole_data_pay' id='pole_id_pay' value='". 'расх' ."' />   </td>"; //  тип документа 
echo " <td width=40 align='center'  ' id='pole_id_pay'  style='background-color:LightCyan;'   > <a href='sales_invoice.php?id=$idgen' TARGET='_self '  style='color:black;'  >"   .$idgen.         " </a> </td>" ; // номер документа
echo "<td width=40 align='left'  ' id='pole_ceny_pay'   > <b><input type='text' name='pay_pay'  id='pole_ceny_pay' value='' />   </td>";  // 
echo "<td width=40 align='left'  ' id='pole_ceny_pay'   > <b><input type='text' name='pay_pay'  id='pole_ceny_pay' value='".  number_format($sum, 2, ',', ' ') ."' />   </td>";  // 



//echo "<td  id='pole_notepay'      > <b><input type='text' name='comment_pay'   id='pole_notepay'    value='". $comment ."' />   </td>";
echo "</tr> ";

$sumrashgen=$sumrashgen+$sum;
}}
echo " </table>";

$row=sqlread( "SELECT  SUM(pay) as sumpay FROM account_pay WHERE id_ac_gen= '$id'  ");

$sumpay=$row['sumpay'];


//$sumrashgen;






echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";


echo "<td width=40 align='left'  ' id='pole_data_pay'     > <b><input type='text' name='pay_pay'  id='pole_itog_pay' value='Итого: ' />   </td>";  //  Итого

echo "<td width=40 align='left'  ' id='pole_ceny_pay'   > <b><input type='text' name='pay_pay'  id='pole_ceny_pay' value='".number_format($sumpay, 2, ',', ' ')  ."' />   </td>";  // 
echo "<td width=40 align='left'  ' id='pole_ceny_pay'   > <b><input type='text' name='pay_pay'  id='pole_ceny_pay' value='". number_format($sumrashgen, 2, ',', ' ')."' />   </td>";  // 

echo " </table>";


echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
echo "<td width=40 align='left'  ' id='pole_data_pay'    > <b><input type='text' name='pay_pay'  id='pole_itog_pay' value='Общий итог: ' />   </td>";  //  Итого
echo "<td width=40 align='left'  ' id='pole_ceny_pay'   > <b><input type='text' name='pay_pay'  id='pole_itog_gen' value='".number_format($sumpay-$sumrashgen, 2, ',', ' ')  ."' />   </td>";  // 
echo " </table>";


echo "</div>";

echo "</div>";

 echo "</div >";
 echo "</div >"; // supergenblock


include "menu.php";





      ?>
      