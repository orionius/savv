
 <meta charset="windows-1251">


<head>

 <meta charset="windows-1251">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="style.css">
  


<!-- Модальные окна -->

	<link rel="stylesheet" href="modal/themes/alertify.core.css" />
	<link rel="stylesheet" href="modal/themes/alertify.default.css" id="toggleCSS" />
  <meta name="viewport" content="width=device-width">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="modal/lib/alertify.min.js"></script>


	<!--
	<h2>Dialogs</h2>
	<a href="#" id="alert">Alert Dialog</a><br>
<a href="#" id="confirm">Confirm Dialog</a><br>
	<a href="#" id="prompt">Prompt Dialog</a><br>
	<a href="#" id="labels">Custom Labels</a><br>
	<a href="#" id="focus">Button Focus</a><br>
	<a href="#" id="order">Button Order</a>

	<h2>Ajax</h2>
	<a href="#" id="ajax">Ajax - Multiple Dialog</a>

	<h2>Logs</h2>
	<a href="#" id="notification">Standard Log</a><br>
	<a href="#" id="success">Success Log</a><br>
	<a href="#" id="error">Error Log</a><br>
	<a href="#" id="custom">Custom Log</a><br>
	<a href="#" id="delay">Hide in 10 seconds</a><br>

	<h2>Themes</h2>
<a href="#" id="bootstrap">Bootstrap Theme</a>
  -->

 

	<script>
		function reset () {
			$("#toggleCSS").attr("href", "modal/themes/alertify.default.css");
			alertify.set({
				labels : {
					ok     : "OK",
					cancel : "Cancel"
				},
				delay : 5000,
				buttonReverse : false,
				buttonFocus   : "ok"
			});
		}

		// ==============================
		// Standard Dialogs
		$("#alert").on( 'click', function () {
			reset();
			alertify.alert("This is an alert dialog");
			return false;
		});

		$("#confirm").on( 'click', function () {
			reset();
			alertify.confirm("This is a confirm dialog", function (e) {
				if (e) {
					alertify.success("You've clicked OK");
				} else {
					alertify.error("You've clicked Cancel");
				}
			});
			return false;
		});

		$("#prompt").on( 'click', function () {
			reset();
			alertify.prompt("This is a prompt dialog", function (e, str) {
				if (e) {
					alertify.success("You've clicked OK and typed: " + str);
				} else {
					alertify.error("You've clicked Cancel");
				}
			}, "Default Value");
			return false;
		});

		// ==============================
		// Ajax
		$("#ajax").on("click", function () {
			reset();
			alertify.confirm("Confirm?", function (e) {
				if (e) {
					alertify.alert("Successful AJAX after OK");
				} else {
					alertify.alert("Successful AJAX after Cancel");
				}
			});
		});

		// ==============================
		// Standard Dialogs
		$("#notification").on( 'click', function () {
			reset();
			alertify.log("Standard log message");
			return false;
		});

		$("#success").on( 'click', function () {
			reset();
			alertify.success("Success log message");
			return false;
		});

		$("#error").on( 'click', function () {
			reset();
			alertify.error("Error log message");
			return false;
		});
 
		// ==============================
		// Custom Properties
		$("#delay").on( 'click', function () {
			reset();
			alertify.set({ delay: 10000 });
			alertify.log("Hiding in 10 seconds");
			return false;
		});

		$("#forever").on( 'click', function () {
			reset();
			alertify.log("Will stay until clicked", "", 0);
			return false;
		});

		$("#labels").on( 'click', function () {
			reset();
			alertify.set({ labels: { ok: "Accept", cancel: "Deny" } });
			alertify.confirm("Confirm dialog with custom button labels", function (e) {
				if (e) {
					alertify.success("You've clicked OK");
				} else {
					alertify.error("You've clicked Cancel");
				}
			});
			return false;
		});

		$("#focus").on( 'click', function () {
			reset();
			alertify.set({ buttonFocus: "cancel" });
			alertify.confirm("Confirm dialog with cancel button focused", function (e) {
				if (e) {
					alertify.success("You've clicked OK");
				} else {
					alertify.error("You've clicked Cancel");
				}
			});
			return false;
		});

		$("#order").on( 'click', function () {
			reset();
			alertify.set({ buttonReverse: true });
			alertify.confirm("Confirm dialog with reversed button order", function (e) {
				if (e) {
					alertify.success("You've clicked OK");
				} else {
					alertify.error("You've clicked Cancel");
				}
			});
			return false;
		});

		// ==============================
		// Custom Log
		$("#custom").on( 'click', function () {
			reset();
			alertify.custom = alertify.extend("custom");
			alertify.custom("I'm a custom log message");
			return false;
		});

		// ==============================
		// Custom Themes
		$("#bootstrap").on( 'click', function () {
			reset();
			$("#toggleCSS").attr("href", "motal/themes/alertify.bootstrap.css");
			alertify.prompt("Prompt dialog with bootstrap theme", function (e) {
				if (e) {
					alertify.success("You've clicked OK");
				} else {
					alertify.error("You've clicked Cancel");
				}
			}, "Default Value");
			return false;
		});
	</script>

<!-- конец Модальные окна -->






































<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!--<script src="http://code.jquery.com/jquery-1.8.3.js"></script>-->

</head>
<body>






<style>

   #gradient {
    background: #fefcea; /* Для старых браузров */
    background: linear-gradient(to top, #808080, #ececec);
      }

input.disabled {
    pointer-events:none;
    color:#AAA;
    background:#F5F5F5;
}
#button {
  background: red url(overlay.png) repeat-x;
  display: inline-block;
  padding: 5px 10px 6px;
  color: #fff;
  text-decoration: none;
  -moz-border-radius: 6px;
  -webkit-border-radius: 6px;
  -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
  -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
  text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
  border-bottom: 1px solid rgba(0,0,0,0.25);
  position: relative;
  cursor: pointer
}

#shap_float
{
  display:inline;
  float: left;

}
#field_null {
    width: 0px; /* Ширина поля в пикселах */
    font-size: 15px; 
    text-align: center;
     font-family:'apple-system';
     font-weight:bold;
     white-space: nowrap;
 visibility:hidden;
    } 

.awesome{
background: #222 url(/images/block_fon.jpg) repeat-x;
display: inline-block;
padding: 5px 10px 6px;
color: black;
text-decoration: none;
font-weight: bold;
line-height: 1;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
-moz-box-shadow: 0 1px 3px #999;
-webkit-box-shadow: 0 1px 3px #999;
text-shadow: 0 -1px 1px #222;
border-bottom: 1px solid #222;
position: relative;
cursor: pointer;
}

.awesome1{
background: #222 url(/images/ccc.jpg) repeat-x;
display: inline-block;
padding: 5px 10px 6px;
color: black;
text-decoration: none;
font-weight: bold;
line-height: 1;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
-moz-box-shadow: 0 1px 3px #999;
-webkit-box-shadow: 0 1px 3px #999;
text-shadow: 0 -1px 1px #222;
border-bottom: 1px solid #222;
position: relative;
cursor: pointer;
}
#input_date{
     background: rgba(248, 248, 255, 0.8); /* Цвет фона */
    width: 150px; /* Ширина поля в пикселах */
    font-size: 15px; 
    text-align: center;
     font-family:'apple-system';
     font-weight:bold;
     white-space: nowrap;

}
#input_id{
  position : relative;
     background: rgba(248, 248, 255, 0.8); /* Цвет фона */
    width: 80px; /* Ширина поля в пикселах */
    font-size: 15px; 
    text-align: center;
     font-family:'apple-system';
     font-weight:bold;
}


#input_status{
  position : relative;
     background: rgba(248, 248, 255, 0.8); /* Цвет фона */
    width: 150px; /* Ширина поля в пикселах */
    font-size: 15px; 
    text-align: center;
     font-family:'apple-system';
     font-weight:bold;
}

#type_zakaz{
/* background: rgba(220, 250, 240, 10) ;*/
    width: 150px; /* Ширина поля в пикселах */
    height:25;
    font-size: 15px; 
    text-align: center;
     font-family:'apple-system';
     font-weight:bold;
     background: rgba(248, 248, 255, 0.8); /* Цвет фона */
     
     border-color : #f0f0f0 ;
     border: 0px  outset  black; /* Параметры границы */


}

#input_id_150{
     background: rgba(248, 248, 255, 0.8); /* Цвет фона */
    width: 150px; /* Ширина поля в пикселах */
    font-size: 15px; 
    text-align: center;
     font-family:'apple-system';
     font-weight:bold;
}

#input_id_100{
/* background: rgba(220, 250, 240, 10) ;*/
    width: 100px; /* Ширина поля в пикселах */
    font-size: 15px; 
    text-align: center;
     font-family:'apple-system';
     font-weight:bold;
}
#input_id_150{
/* background: rgba(220, 250, 240, 10) ;*/
    width: 150px; /* Ширина поля в пикселах */
    font-size: 15px; 
    text-align: center;
     font-family:'apple-system';
     font-weight:bold;
}

#input_id_200{
/* background: rgba(220, 250, 240, 10) ;*/
    width: 200px; /* Ширина поля в пикселах */
    font-size: 15px; 
    text-align: center;
     font-family:'apple-system';
     font-weight:bold;
}
                             #pole_id {

    width: 40px; /* Ширина поля в пикселах */
    font-size: 16px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 


                             #quantity {

    width: 40px; /* Ширина поля в пикселах */
    font-size: 15px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 


                                #pole_date {

    width: 80px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 
                                   #pole_shap_date {

    width: 120px; /* Ширина поля в пикселах */
    font-size: 15px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   } 
                                #pole_checkbox {

    width: 18px; /* Ширина поля в пикселах */
     height:18px; 
    font-size: 15px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;


   } 
                                #pole_null {

    width: 0px; /* Ширина поля в пикселах */
    font-size: 0px; 
    text-align: center;
    font-color:rgba(0,0,0,0);


   } 
                             #pole_ceny {

    width: 55px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: right;
     font-family:'amaze';
     font-weight:bold;

   } 
                                #pole_name {

    width: 200px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
    }

                                #pole_nameb {

    width: 490px; /* Ширина поля в пикселах */
    font-size: 12px; 
    text-align: left;
     font-family:'amaze';
    }
    #pole_namebout {

width: 470px; /* Ширина поля в пикселах */
font-size: 12px; 
text-align: left;
 font-family:'amaze';
}
                                #pole_status{

    width: 150px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: left;
     font-family:'amaze';
    
   } 
                                  #pole_note {

    width: 100px; /* Ширина поля в пикселах */
    font-size: 15px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;

   }  
   #pole_note_out {

width: 100px; /* Ширина поля в пикселах */
font-size: 16px; 
text-align: left;
 font-family:'amaze';
 font-weight:bold;

}  
#pole_date_out {

width: 150px; /* Ширина поля в пикселах */
font-size: 12px; 
text-align: left;
 font-family:'amaze';
 font-weight:bold;

}  


                                  #pole_note_gen {

    width: 830px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;

   }  

                                    #pole_idprih {

    width: 50px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: left;
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
   }  

                                  #pole_button{

    width: 80px; /* Ширина поля в пикселах */
    font-size: 11px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

   }  
     #pole_price{
    width: 100px; /* Ширина поля в пикселах */
    font-size: 15px; 
  
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
text-align: center;
}
     #pole_ser{
    width: 100px; /* Ширина поля в пикселах */
    font-size: 16px; 

     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
text-align: center;
}


     #pole_conf{
    width: 80px; /* Ширина поля в пикселах */
    font-size: 16px; 
    text-align: right;
     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :1;
text-align: center;
}


     #pole_alg{
    width: 110px; /* Ширина поля в пикселах */
    font-size: 17px; 

     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : black;
border-width :0;
text-align: center;
}


     #pole_vers{
    width: 50px; /* Ширина поля в пикселах */
    font-size: 15px; 

     font-family:'amaze';
     font-weight:bold;
   background: #f0f0f0 !important;
 outline: none;
 border-color : #f0f0f0 ;
border-width :0;
text-align: center;
}


    .pole_del
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 0; /* Положение элемента от правого края */

    width: 99%; /* Ширина блока */
   height:20px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 

overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */



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
    opacity: 0.8; /* Значение прозрачности */

                     } 

#add_prod {

    width: 350px; /* Ширина поля в пикселах */
    font-size: 14px; 
    text-align: center;
     font-family:'amaze';
     font-weight:bold;

height:25px;  

         background: #FFFFE0 ; /* Цвет фона */ 
  margin:3px 3px 3px 5px; 
       border-radius: 4px;
  
}


    .top_inf
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10; /* Положение элемента от правого края */
    top: 5px; /* Положение от верхнего края */
    width: 1498px; /* Ширина блока */
   height:115px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
    /*background-image: url('/images/bacground_div.jpg') ;*/

     background: rgba(230, 230, 250, 0.2); /* Цвет фона */
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */



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

                     }     

    .data
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10; /* Положение элемента от правого края */
    top: 130px; /* Положение от верхнего края */
    width: 1100px; /* Ширина блока */
   height:350px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
   /* background-image: url('/images/bacground_div.jpg');*/

    background: rgba(230, 230, 250, 0.2); /* Цвет фона */
overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */



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

                     }     

 

    .blok_status
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 1135; /* Положение элемента от правого края */
    top: 132px; /* Положение от верхнего края */
    width: 180px; /* Ширина блока */
   height:350px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 


background: #348cb2 url("/images/bacground_div.jpg") center;

 background: rgba(230, 230, 250, 0.2); /* Цвет фона */
background-size: cover;

            
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    opacity: 10; /* Значение прозрачности */
                       }       

                           .blok_print
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 1335; /* Положение элемента от правого края */
    top: 132px; /* Положение от верхнего края */
    width: 180px; /* Ширина блока */
   height:350px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 


background: #348cb2 url("/images/bacground_div.jpg") center;
 background: rgba(230, 230, 250, 0.2); /* Цвет фона */
background-size: cover;

            
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    opacity: 10; /* Значение прозрачности */
                       }   

    .rash
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 10; /* Положение элемента от правого края */
    top: 495px; /* Положение от верхнего края */
    width: 1100px; /* Ширина блока */
   height:300px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 
 /*   background-image: url('/images/bacground_div.jpg');*/

background-image: Lavender;

 background: rgba(230, 230, 250, 0.2); /* Цвет фона */

overflow: auto; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */



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

                     }       





                             .blok_manager
     {  
    margin:auto;
    position: absolute; /* Абсолютное позиционирование */
    left: 1135; /* Положение элемента от правого края */
    top: 498px; /* Положение от верхнего края */
    width: 380px; /* Ширина блока */
   height:300px;    
    padding: 5px; /* Поля вокруг текста */
    background: #f0f0f0; /* Цвет фона */ 


background: #348cb2 url("/images/bacground_div.jpg") center;
 background: rgba(230, 230, 250, 0.2); /* Цвет фона */

background-size: cover;

            
                  text-align: left;
                     border-radius: 4px;
                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 

                       box-shadow: rgba(0,0,0,1.2) 0px 1px 3px; 
    opacity: 10; /* Значение прозрачности */
                       }   



       .genblock
     {  
    margin:auto;
      position: absolute; /* Абсолютное позиционирование */
    left: 3%; /* Положение элемента от левого края */


    top: 70px; /* Положение от верхнего края */
    width: 1550px; /* Ширина блока */
  height:850px;
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


.blok_note_shap {
  position: absolute; /* Абсолютное позиционирование */
    top: 48px; /* Положение от верхнего края */
    left: 280px; 
    width: 1000px; /* Ширина блока */
  height:45px;
    padding: 5px; /* Поля вокруг текста */

overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
       margin:0px 0px 0px 0px; 

      margin: left; /* Выравниваем по центру */   
                padding: 0px; 
                  text-align: left;
                     border-radius: 0px;
        

    opacity: 0.9; /* Значение прозрачности */


}

.blok_klient_shap {
  position: absolute; /* Абсолютное позиционирование */
    top: 70px; /* Положение от верхнего края */
    left: 5px; 
    width: 350px; /* Ширина блока */
  height:45px;
    padding: 5px; /* Поля вокруг текста */

overflow: hidden; /* свойство для прокрутки по горизонтали. Автоматом, если больше блока */
       margin:0px 0px 0px 0px; 

      margin: left; /* Выравниваем по центру */   
                padding: 0px; 
                  text-align: left;
                     border-radius: 0px;
        

    opacity: 0.9; /* Значение прозрачности */


}

.raz::placeholder {
  color: red;
  opacity: 1; /* сделать обычным неполупрозрачным цветом в Firefox */ 
}
</style>

<?


session_start();




include "error_visible.php";
include "background.php";
include 'conn.php';

if ($_SESSION['dopusk'] <1 or $_SESSION['dopusk']  >10  ) { $_SESSION['dopusk']  = 0 ; echo "<script> document.location.href='index.php?reset=1'</script>"; }


include 'function.php';

if (!EMPTY($_GET['id']) ) {  $id=$_GET['id'] ; }





////////////////////////////////////////////////////////////////////////////////////////////////////////!!!!!!!!!!!!!!!!!!!!!!!!
$user=$_SESSION['user']; 
if($user=='21' || $user =='2'  ) { 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////ВНЕСТИ ЗАГЛАВНЫЕ ДАННЫЕ 

  //////////////////////////////ВВОДИМ КЛИЕНТА 
  if (!empty($_GET['idclient']) ) {$id=$_GET['id'];
    $idclient=$_GET['idclient'];
    $qq=sqlread("UPDATE order_gen SET client = '$idclient' WHERE id_order = $id "); 
    reload();}
  
  
    if (!empty($_GET['idclient']) ) {  
    
    $_SESSION['idclient']=$_GET['idclient'];
    
    }

//////////вводим начальную дату заказа
if (!empty($_GET['date_begin']) ) {
  $date_begin=   date("Y.m.d",strtotime($_GET['date_begin'] ));
  $id=$_GET['id'];
  $qq=sqlread("UPDATE order_gen SET date_begin = '$date_begin' WHERE id_order = $id "); 
  reload();}
  //////////вводим конечную дату заказа
  if (!empty($_GET['date_end']) ) {
  $date_end=   date("Y.m.d",strtotime($_GET['date_end'] ));
  $id=$_GET['id'];
  $qq=sqlread("UPDATE order_gen SET date_end = '$date_end' WHERE id_order = $id "); 
  reload();}
  //////////вводим  дату отгрузки
  if (!empty($_GET['date_shipment']) ) {
  $date_shipment=   date("Y.m.d",strtotime($_GET['date_shipment'] ));
  $id=$_GET['id'];
  $qq=sqlread("UPDATE order_gen SET date_shipment = '$date_shipment' WHERE id_order = $id "); 
  reload();}
  //////////вводим  тип заказа
  if (!empty($_GET['type_zakaz']) ) {
  $type_zakaz=  $_GET['type_zakaz'];
  $id=$_GET['id'];
  $qq=sqlread("UPDATE order_gen SET type_zakaz = '$type_zakaz' WHERE id_order = $id "); 
  reload();
  }
  
  
  //////////вводим  статус заказа
  if (!empty($_GET['status_zakaz']) ) {if ($_GET['status_zakaz']>0) 
  $status_zakaz=  $_GET['status_zakaz'];
  $id=$_GET['id'];
  $qq=sqlread("UPDATE order_gen SET status_zakaz = '$status_zakaz' WHERE id_order = $id "); 
  reload();}
  //////////вводим  номер счета
  if (!empty($_GET['n_account']) ) {
   
  $n_account=   $_GET['n_account']; 
  $id=$_GET['id'];
  $qq=sqlread("UPDATE order_gen SET n_account = '$n_account' WHERE id_order = $id "); 
  reload();}
  //////////вводим  клиента
  if (!empty($_GET['client']) ) {
  $client=      $_GET['client'];
  $id=$_GET['id'];
  $qq=sqlread("UPDATE order_gen SET client = '$client' WHERE id_order = $id "); 
  reload();}
  //////////вводим  номер заказа внутренний
  if (!empty($_GET['n_nz']) ) {
  $n_nz=      $_GET['n_nz'];
  $id=$_GET['id'];
  $qq=sqlread("UPDATE order_gen SET n_nz = '$n_nz' WHERE id_order = $id "); 
  reload();}
  
  //////////вводим  номер заказа 
  if (!empty($_GET['n_order']) ) {
  $n_order=      $_GET['n_order'];
  $id=$_GET['id'];
  
  //echo "<script>alert('У вас ". $n_order." ');</script>";
  
  $qq=sqlread("UPDATE order_gen SET n_order = '$n_order' WHERE id_order = $id "); 
  reload();}
  
  
  //////////вводим  примечание
  if (!empty($_GET['note_gen']) ) {
  $note=      $_GET['note_gen'];
  $id=$_GET['id'];
  $qq=sqlread("UPDATE order_gen SET note = '$note' WHERE id_order = $id "); }
  //////////вводим  отгрузку
  if (!empty($_GET['shipment']) ) {
  $n_nz=      $_GET['shipment'];
  $id=$_GET['id'];
  $qq=sqlread("UPDATE order_gen SET shipment = '$shipment' WHERE id_order = $id "); 
  reload();}











////////////////////////////////Информировать клиента о готовности///////
if (!empty($_GET['inform']) and  strlen($_GET['inform']) >2 ) {$idorder=$_GET['id'] ;

$row=sqlread("SELECT * FROM order_gen WHERE id_order='$idorder'");
$id_account=$row['id_account'];
$client=$row['client'];


if($id_account<10) {  alert("Счет не обнаружен ! <br> Письмо не будет отправлено." );    echo "<script> document.location.href='order.php?id=$idorder'</script>";       }
  $e_mail='armagedonius@gmail.com';

  $e_mail= email_company_id($client);

  //alert($e_mail);

  //$id='1420';
 // alert($id_account);
  echo "<script> document.location.href='send_mail_readyorder.php?id=$id_account&mailTo=$e_mail'</script>"; 
}
///////////////////////////////Смена статусов/////////////////////////////




///..............................УСТАНОВИТЬ СТАТУС ВЫПОЛНИТЬ СРОЧНО

if (!empty($_GET['urgently']) and strlen($_GET['urgently']) >2 ) {$id=$_GET['id'] ;
$qq=sqlread("UPDATE order_gen SET status_zakaz='1'  WHERE id_order = '$id' "); 
  echo "<script> document.location.href='order.php?id=$id'</script>"; 
}
///..............................УСТАНОВИТЬ СТАТУС НЕТ ОБОРУДОВАНИЯ

if (!empty($_GET['urgently1']) and  strlen($_GET['urgently1']) >2 ) {$id=$_GET['id'] ;
$qq=sqlread("UPDATE order_gen SET status_zakaz='2'  WHERE id_order = '$id' "); 
  echo "<script> document.location.href='order.php?id=$id'</script>"; 
}
///..............................УСТАНОВИТЬ СТАТУС НЕТ АЛГОРИТМА

if (!empty($_GET['urgently2']) and  strlen($_GET['urgently2']) >2 ) {$id=$_GET['id'] ;
 //echo "<script>alert('У вас ". $_GET['id']." ');</script>";
$qq=sqlread("UPDATE order_gen SET status_zakaz='3'  WHERE id_order = '$id' "); 
  echo "<script> document.location.href='order.php?id=$id'</script>"; 
}

///..............................УСТАНОВИТЬ СТАТУС ПРОШИТО

if (!empty($_GET['urgently3']) and  strlen(   $_GET['urgently3']) >2 ) {$id=$_GET['id'] ;
$qq=sqlread("UPDATE order_gen SET status_zakaz='4'  WHERE id_order = '$id' "); 
  echo "<script> document.location.href='order.php?id=$id'</script>"; 
}


///..............................УСТАНОВИТЬ СТАТУС ГОТОВ К ОТГРУЗКЕ

if ( !empty($_GET['urgently4']) and   strlen($_GET['urgently4']) >2 ) {$id=$_GET['id'] ;
$qq=sqlread("UPDATE order_gen SET shipment='5'  WHERE id_order = '$id' "); 
  echo "<script> document.location.href='order.php?id=$id'</script>"; 
}
///..............................УСТАНОВИТЬ СТАТУС ГОТОВ отгружается

if ( !empty($_GET['urgently6']) and  strlen($_GET['urgently6']) >2 ) {$id=$_GET['id'] ;
$qq=sqlread("UPDATE order_gen SET shipment='7'  WHERE id_order = '$id' "); 
  echo "<script> document.location.href='order.php?id=$id'</script>"; 
}
///..............................УСТАНОВИТЬ СТАТУС ОТГРУЖЕН

if ( !empty($_GET['urgently5']) and  strlen($_GET['urgently5']) >2 ) {$id=$_GET['id'] ;
$qq=sqlread("UPDATE order_gen SET shipment='6'  WHERE id_order = '$id' "); 
  echo "<script> document.location.href='order.php?id=$id'</script>"; 
}
///..............................УСТАНОВИТЬ СТАТУС НЕ ОТГРУЖЕН

if (!empty($_GET['urgently0']) and  strlen($_GET['urgently0']) >2 ) {$id=$_GET['id'] ;
$qq=sqlread("UPDATE order_gen SET shipment='8'  WHERE id_order = '$id' "); 
  echo "<script> document.location.href='order.php?id=$id'</script>"; 
}
///..............................УСТАНОВИТЬ СТАТУС частично готов

if (!empty($_GET['urgently9']) and  strlen($_GET['urgently9']) >2 ) {$id=$_GET['id'] ;
  $qq=sqlread("UPDATE order_gen SET shipment='9'  WHERE id_order = '$id' "); 
    echo "<script> document.location.href='order.php?id=$id'</script>"; 
  }
  ///..............................УСТАНОВИТЬ СТАТУС изготовлен

if (!empty($_GET['urgently10']) and strlen($_GET['urgently10']) >2 ) {$id=$_GET['id'] ;
  $qq=sqlread("UPDATE order_gen SET shipment='10'  WHERE id_order = '$id' "); 
    echo "<script> document.location.href='order.php?id=$id'</script>"; 
  }




///////////////////////////////Обновляем данные расходной /////////.//////////////////////////////////////
////......................Примечание в подчиненной расходов .................................

if (!empty($_GET['note_sales']) ) {$id=$_GET['id'];$id_give_sub=$_GET['id_give_sub'];
  $note=$_GET['note_sales'];

  $qq=sqlread("UPDATE order_sub_out SET note = '$note' WHERE id = '$id_give_sub' ");
  reload(); }
  

////......................АЛГОРИТМ.................................



if (!empty($_GET['id_alg_sales']) ) {$id=$_GET['id'];$id_give_sub=$_GET['id_give_sub'];
  $id_alg_sales=$_GET['id_alg_sales'];
  

  
  $qq=sqlread("UPDATE order_sub_out SET id_alg = '$id_alg_sales' WHERE id = '$id_give_sub' ");
  reload();
  
  }
////......................Серийный номер коробки.................................

if (!empty($_GET['snum_box_sales']) ) {$id=$_GET['id'];$id_give_sub=$_GET['id_give_sub'];
$snum_box=$_GET['snum_box_sales'];



$qq=sqlread("UPDATE order_sub_out SET snum_box = '$snum_box' WHERE id = '$id_give_sub' ");
reload(); }
////......................количество.................................

if (!empty($_GET['quantity_sales']) and $_GET['rashod'] == 'yes') {$id=$_GET['id'];$id_give_sub=$_GET['id_give_sub'];
$quantity=$_GET['quantity_sales'];

$qq=sqlread("UPDATE order_sub_out SET quantity = '$quantity' WHERE id = '$id_give_sub' ");
reload();}
////......................Версия системы.................................

if (!empty($_GET['vers_syst_sales']) and $_GET['rashod'] == 'yes') {$id=$_GET['id'];$id_give_sub=$_GET['id_give_sub'];
$vers_syst=$_GET['vers_syst_sales'];

$qq=sqlread("UPDATE order_sub_out SET vers_syst = '$vers_syst' WHERE id = '$id_give_sub' ");
reload(); }




///////////////////////////////Удаляем строчку из заказа/////////.//////////////////////////////////////



if (!empty($_GET['del_current']) and $_GET['zakaz'] == 'yes'  ) {
  $user=$_SESSION['user']; 
$del_current=$_GET['del_current'];	
$id=$_GET['id'];
if($user=='21' or $user =='2'  ) {


sqlread("DELETE FROM order_sub  WHERE id_order_sub  = '$del_current' ");

}
reload();
}
///////////////////////////////Удаляем строчку из расходных/////////.//////////////////////////////////////
if (!empty($_GET['del_current_rash']) and $_GET['rashod'] == 'yes') {

$del_current_rash=$_GET['del_current_rash'];	
$id=$_GET['id'];

sqlread("DELETE FROM order_sub_out  WHERE id  = '$del_current_rash' ");
sqlread("DELETE FROM give_board_sub  WHERE id_sub_ordout  = '$del_current_rash' ");



reload();
}




/////////////////////////////////////////////////////////////////////////////
if (!empty($_GET['id_alg']) ) {$id=$_GET['id'];
//$_SESSION['id_alg']=$_GET['id_alg'];

$id_alg=$_GET['id_alg'];

$idcat=$_GET['idcat'];



//$idsub=$_SESSION['idsub'];

 //echo "<script>alert('У вас ". $idcat." ');</script>";
$row=sqlread("SELECT config FROM algorythm WHERE id = '$id_alg'"); 

$config= $row['config'];
$id_alg=$_GET['id_alg'];

// echo "<script>alert('У вас ". $config." ');</script>";

$qq=sqlread("UPDATE  order_sub SET  config = '$config', algorithm = '$id_alg' WHERE id_order_sub = '$idcat' "); 
reload();
}



////////////////////////////Обновить данные в заказе подчиненный /////////////////
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

///................Обновление кол-ва.............................................
if (!empty($_GET['quantity_ord']) and $_GET['zakaz'] == 'yes') {$id=$_GET['id'];$idcat=$_GET['idcat'];

$quantity=$_GET['quantity_ord'];
$qq=sqlread("UPDATE order_sub SET quantity = '$quantity' WHERE id_order_sub = '$idcat' "); 
reload();}
///................Обновление версии.............................................
if (!empty($_GET['vers_syst']) and $_GET['zakaz'] == 'yes') {$id=$_GET['id'];$idcat=$_GET['idcat'];

$vers_syst=$_GET['vers_syst'];
$qq=sqlread("UPDATE order_sub SET vers_syst = '$vers_syst' WHERE id_order_sub = '$idcat' "); 
reload(); }
///................Обновление алгоритм.............................................
if (!empty($_GET['algorithm']) and $_GET['zakaz'] == 'yes') {$id=$_GET['id'];$idcat=$_GET['idcat'];

$algorithm=$_GET['algorithm'];
$qq=sqlread("UPDATE order_sub SET algorithm = '$algorithm' WHERE id_order_sub = '$idcat' "); 
reload(); }
///................Обновление конфиг.............................................
if (!empty($_GET['config']) and $_GET['zakaz'] == 'yes') {$id=$_GET['id'];$idcat=$_GET['idcat'];

$config=$_GET['config'];
$qq=sqlread("UPDATE order_sub SET config = '$config' WHERE id_order_sub = '$idcat' "); 
reload();}
///................Обновление Примечание.............................................
if (!empty($_GET['note_b']) and $_GET['zakaz'] == 'yes') {$id=$_GET['id'];$idcat=$_GET['idcat'];

$note_b=$_GET['note_b'];
$qq=sqlread("UPDATE order_sub SET note_b = '$note_b' WHERE id_order_sub = '$idcat' "); 
reload();}

///................Обновление цена .............................................
if (!empty($_GET['price']) and $_GET['zakaz'] == 'yes') {$id=$_GET['id'];$idcat=$_GET['idcat'];

$price=$_GET['price'];
$qq=sqlread("UPDATE order_sub SET price = '$price' WHERE id_order_sub = '$idcat' "); 
reload(); }



////////////////////////////Обновить данные в расходной подчиненный /////////////////
/////////////////////////////////////////////////////////////////////////////////
if (!empty($_GET['quantity']) and $_GET['rashod'] == 'yes') {$id=$_GET['id'];$id_give_sub=$_GET['id_give_sub'];
 //echo "<script>alert('У вас ". $_GET['id']." ');</script>";
$quantity=$_GET['quantity'];
$qq=sqlread("UPDATE give_board_sub SET quantity = '$quantity' WHERE id_give_sub = '$id_give_sub' "); 
reload();}

////////////////////////////Обновить данные в расходной подчиненный /////////////////
/////////////////////////////////////////////////////////////////////////////////


if (!empty($_GET['id_alg']) and $_GET['rashod'] == 'yes') {$id=$_GET['id'];$id_give_sub=$_GET['id_give_sub'];
 //echo "<script>alert('У вас ". $_GET['id']." ');</script>";
$id_alg=$_GET['id_alg'];
$row=sqlread("SELECT * FROM algorythm WHERE id= '$id_alg'");
$name=$row['name'];

$qq=sqlread("UPDATE give_board_sub SET id_alg = '$id_alg',algo='$name' WHERE id_give_sub = '$id_give_sub' "); 
reload();}
/////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////добавить текущий в расходную ///////////////////////////////////////////////
if (!empty($_GET['add_current']) and $_GET['rashod'] == 'yes') {$id=$_GET['id'];$id_give_sub=$_GET['id_give_sub'];

  $user=$_SESSION['user']; 
$idbrd_zak=$_GET['idbrd_zak'];
$vers_syst=$_GET['vers_syst'];
$algo=$_GET['algorithm'];
$quant=$_GET['quant'];
$idsuborder=$_GET['add_current'] ;


$row=sqlread("SELECT * FROM algorythm WHERE id= '$algo'");
$name_alg=$row['name'];

//echo "<script>alert('У вас ". $_GET['idbrd_zak']." ');</script>";


//$qq=sqlread("UPDATE give_board_sub SET quantity = '$quantity' WHERE id_give_sub = '$id_give_sub' "); 
//sqlread("INSERT INTO give_board_sub(n_order,quantity,product,vers_syst,id_alg,algo,user,dates)  VALUES ('$id','1','$idbrd_zak','$vers_syst','$algo','$name_alg',' $user',NOW())");

sqlread("INSERT INTO order_sub_out(id_order_gen,id_board,quantity,dates ,user,vers_syst,id_alg,idsuborder)  VALUES ( '$id','$idbrd_zak','$quant',NOW(), '$user','$vers_syst','$algo','$idsuborder'  )");



//echo "<script> document.location.href='order.php?id=$id'</script>"; }
reload();
}

///////////////////////////////Создать новый заказ /////////////////////////////
if ( $_GET['id'] == 'new') {

$user=$_SESSION['user']; 

//$date_begin= 

$rr=sqlread("SELECT MAX(n_order) as max_order FROM order_gen ");

$max_order=$rr['max_order'];
$max_order++;
 //echo "<script>alert('У вас ". $_GET['id']." ');</script>";
sqlread("INSERT INTO order_gen(n_order,user,date_begin,date,date_end,date_shipment,manager,executor,storekeeper,type_zakaz,shipment)  VALUES ($max_order ,'$user',NOW(),NOW(),NOW() + INTERVAL 20 DAY,NOW() + INTERVAL 30 DAY,'4','3','5','2','8')");

$row=sqlread("SELECT * FROM order_gen WHERE user  = '$user'  ORDER BY id_order DESC LIMIT 1 ");
$id=$row['id_order'];
$salesinvoice=$row['salesinvoice'];

$n_order=$row['n_order'];
$n_account=$row['n_account'];
sqlread("INSERT INTO give_board_gen(user,dates,note,id_order,n_order,n_account) VALUES ('$user',NOW(),'Заказ $n_order','$id','$n_order','$n_account' ) ");
$rrr= sqlread("SELECT MAX(id_give) as max_idgive  FROM give_board_gen ");
$max_idgive=$rrr['max_idgive'];
//alert ($id); 

$rr=sqlread("UPDATE order_gen  SET salesinvoice='$max_idgive' WHERE id_order='$id' ");
$rr=sqlread("SELECT MAX(id_order) AS max  FROM order_gen WHERE user  = '$user' ");
$max=$rr['max'];


//alert($max);

echo "<script> document.location.href='order.php?id=$max'</script>"; 
//reload();
}
///////////////////////////////Удалить заказ полностью /////////////////////////////
if (!empty($_GET['del_gen']) and  $_GET['del_gen'] == 'yes') { $id=$_GET['id'] ;

$user=$_SESSION['user']; 
//$id_order=$row['id_order'];

if($user=='21' or $user =='2'  ) {

  $row=sqlread("SELECT COUNT(id_order_gen) as cnt FROM order_sub WHERE id_order_gen= '$id'  ");
if ($row['cnt']<1) {   sqlread("DELETE FROM  order_gen WHERE id_order  = '$id' ");  }  else { echo "<script>alert('Вы не можете удалить заказ ,пока он не пустой ');</script>"; echo "<script> document.location.href='order.php?id=$id'</script>"; }

}

echo "<script> document.location.href='journal_order.php'</script>"; 
}



///////////////////////////////Добавить новое изделие в заказ /////////////////////////////
if ( !empty($_GET['add_product']) ) {$id=$_GET['id'];
//echo "<script>alert('У вас ". $_GET['add_product']." ');</script>";


$id_board=$_GET['id_board'];
//$ser_num=$_GET['ser_num'];

$_SESSION['id_board']=$id_board; 
$user=$_SESSION['user']; 

$price=price_board_id($id_board);


sqlread("INSERT INTO order_sub(id_board,quantity,id_order_gen,user,date,price)  VALUES ('$id_board','1','$id','$user',NOW(),'$price')");


reload();
}

///////////////////////////////Добавить новое изделие в готовое /////////////////////////////


if ( !empty($_GET['add_product_ready']) ) {




$id=$_GET['id'];
$id_board=$_GET['id_board'];
$ser_num=$_GET['ser_num'];

$_SESSION['id_board']=$id_board; 
$user=$_SESSION['user']; 


//sqlread("INSERT INTO give_board_sub(product,n_order,user,date)  VALUES ('$id_board','$id','$user',NOW())");
sqlread("INSERT INTO give_board_sub(product,n_order,user,dates)  VALUES ('$id_board','$id','$user',NOW())");

reload();
}

///////////////////////////////Добавить новое изделие в готовое /////////////////////////////


if ( !empty($_GET['type_zakaz']) ) {$id=$_GET['id'];

$type_zakaz=$_GET['type_zakaz'];

$qq=sqlread("UPDATE order_gen SET type_zakaz = '$type_zakaz' WHERE id_order = '$id' "); 
reload();}
//////////////////////////////////////////////Печать наряд заказ/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !empty($_GET['print_zakaz']) ) {$id=$_GET['id'];


echo "<script> document.location.href='print_naryad_zakaz.php?id=$id'</script>"; 
}

} //  Допуск по пользователю закрыть скобку


echo "<div class='genblock'>";




///////////////////////////////Шапка ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?><script>




function onchanges_gen(){  // Для полей списков
            
                  var n_order       =document.getElementsByName("n_order")[0].value;
                  var id            =document.getElementsByName("id")[0].value;
                  var idclient      =document.getElementsByName("idclient")[0].value;
                  var type_zakaz    =document.getElementsByName("type_zakaz")[0].value;
                  var date_begin    =document.getElementsByName("date_begin")[0].value;
                  var n_nz          =document.getElementsByName("n_nz")[0].value;
                  var n_account     =document.getElementsByName("n_account")[0].value;
                  var date_end      =document.getElementsByName("date_end")[0].value;
                  var date_shipment =document.getElementsByName("date_shipment")[0].value;
                  var note          =document.getElementsByName("note_gen")[0].value;

    


             //    document.getElementById('someInputId').value = 'changed Value';
                               
//alert(date_end );
$.ajax({
                      url:"ajax_update_order_gen.php",
                      type:"POST",
                      cache:true,
            data: { id:       id, 
                    note: note,
                    idclient: idclient,
                    type_zakaz:type_zakaz,
                    date_begin:date_begin,
                    n_nz:n_nz,
                    n_order:n_order,
                    n_account:n_account,
                    date_end:date_end,
                    date_shipment:date_shipment
                   },
                      success: function(html){$(".ajaxid").html(html);update();$( "#input_id" ).blur();},
                //      error:function(html){alert("Данные поля не сохранились ,Возможно перебои с интернетом ! Обновите пожалуйста страничку и попробуйте вновь");}

error:function(html){alertify.error("Внимание !!!  Данные не были сохранены <BR>Возможно отсутствует интернет<BR>Проверьте интернет соединение и введите данные поля снова.");}

                
        })


 }
/*
  //      $(document).ready(function(){
                function updates(){
                    $('.updater_gen').blur().submit(function(z){
                      z.preventDefault();
                           var id    =   document.getElementsByName("id")[0].value;
                           var n_nz    =   document.getElementsByName("n_nz")[0].value;

alert(n_nz );

                           $.ajax({
                                url:"ajax_update_order_gen.php",
                                type:"POST",
                                cache:true,
                
                    data: { id:    id, n_nz:n_nz 
                                          
                            
                             },
                                success: function(html){
                                    $(".ajaxid").html(html);
                                    updates();
                                        },
                                        error:function(html){
                                        alert("Данные поля не сохранились ,Возможно перебои с интернетом ! Обновите пожалуйста страничку и попробуйте вновь");
                                        }
                                  })
                      
                            });
                    }
                    updates();
   //             });

   */
</script>
<?



echo "<div class='top_inf'>";


//echo "<form action='order.php?id=$id' method='GET' id='shap' class = 'shap_float' >";


echo "<form action='' method='post'  class = 'updater_gen' >";


?> <font color='black'   $sizefont1>  <?
$row= sqlread ("SELECT * FROM  order_gen  WHERE  id_order ='$id' ");


//$date_begin=date("d.m.Y",strtotime($row['date_begin'] ));
//$date_end=date("d.m.Y",strtotime($row['date_end'] ));
//$date_shipment=date("d.m.Y",strtotime($row['date_shipment'] ));

$date_begin=$row['date_begin'];
$date_end=$row['date_end'];
$date_shipment=$row['date_shipment'];


$n_account=$row['n_account'];
$note = $row['note'] ;

$shipment=$row['shipment'];

$shipment=name_type_zakaz_id($row['shipment']);

$n_order=$row['n_order'];
//$n_account=$row['n_nz'];

?>  <input hidden bgcolor='red' type='text' id='input_id' textarea name='id'   value='<? echo $id ; ?>' onchange="onchanges_gen(); jQuery(this).blur() "  >   <?

echo space(5); ?> <input type='text' id='input_id' textarea name='n_order' id='error'   value=' <? echo $n_order ; ?> ' onchange="onchanges_gen(); jQuery(this).blur() "  >  <?

echo space(5); ?> <input type='text' id='input_id'   textarea name='n_nz'   value='<? echo  $row['n_nz'] ; ?> '  onchange="onchanges_gen(); jQuery(this).blur() "   >   <?
//echo space(10)."<input type='text' id='input_date' textarea name='date_begin'   value='".$date_begin."' >   ";

echo space(5); ?>   <input   type='date' min='2000-01-01'  id='input_date' name='date_begin' value='<? echo  $date_begin; ?>'  onchange="onchanges_gen();" > <?
//echo "<input type='text' id='input_id' textarea name='type_zakaz'   value='".name_type_zakaz_id($row['type_zakaz'])."' >   ";


echo space(5);
$type_zakaz=$row['type_zakaz'];
/////........................список 

$rr=sqlread("SELECT * FROM type_zakaz WHERE id = '$type_zakaz'");
$sql = "SELECT * FROM type_zakaz ORDER BY id ASC ";
$result_select = mysql_query($sql);

?> <select name='type_zakaz' id='type_zakaz' onchange="onchanges_gen()"> <?
$object->name_type = $rr['name_type'] ;

echo   "<option  selected value=$type_zakaz   > $object->name_type   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name_type </option> ";}  
echo "</select>";
////..........................
echo space(1);
$bgcol="bgcolor='red'";



echo  space(5) ; ?> <input $bgcol type='text' id='input_id' textarea name='n_account'   value='<? echo  $n_account ; ?> '  onchange="onchanges_gen(); jQuery(this).blur() "  >   <?
//echo space(10)."<input $bgcol type='text' id='input_date' textarea name='date_end'   value='".$date_end."'>   ";

echo space(5) ; ?> "  <input   type='date' min='2000-01-01'  id='input_date' name='date_end' value='<? echo $date_end; ?>' onchange="onchanges_gen(); jQuery(this).blur() "   > <?

?> <input   type='text' id='field_null' textarea name='shipments'   value='<? echo $row['shipment'] ; ?> ' onchange="document.getElementById('shap').submit()" >   <?
echo  space(5). "<input  $bgcol type='text' id='input_status' textarea name='shipmenttext'   value='".name_status_zakaz_id($row['shipment'])."' >   ";
//echo space(10)."<input $bgcol type='text' id='input_date' textarea name='date_shipment'   value='$date_shipment'>  ";

echo space(5) ?>   <input   type='date' min='2000-01-01'   id='input_date' name='date_shipment' value='<? echo $date_shipment; ?>' onchange="onchanges_gen(); jQuery(this).blur() "  > <?

$status_zakaz=$row['status_zakaz'];


?> <input style = 'visibility :hidden' id='field_null'  type='text' textarea name='status_zakaz'   value='<? echo $status_zakaz; ?>' >  <?
echo  space(5); ?> <input  bgcolor='red' type='text'  id='input_status' textarea name='shipmenttext'   value='<? echo  name_status_zakaz_id($row['status_zakaz']); ?>' onchange="document.getElementById('shap').submit()" >   <?

//style ='visibility: hidden'




/*
/////........................список 
$id_board= $_SESSION['id_board'];
$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board'");
$sql = "SELECT * FROM cat_brd_prod ORDER BY name_product ASC ";
$result_select = mysql_query($sql);

?> <select name='id_board' id='' > <?
$object->name_product = $rr['name_product'] ;

echo   "<option  selected value=$id_board   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select>";
////..........................


*/

echo space(10)."<a href='order.php?id=".$id."&del_gen=yes'><img src='images/krest1.png' width='20' height='20' alt='Пример''></a> ";  // удаление наклаждной
echo "<br>";



?><font size="2" color="Navy" face="times"><b><?


echo space(3)."Номер заказа ".space(15)."№ Н/З".space(25)."Заказ от Дата:".space(30)."Тип заказа".space(25)."Номер счета ".space(12)."Срок исполнения ".space(32)."Отгрузка  ".space(32)."Дата отгрузки  ".space(32)."Статус заказа";

?> </font> <? 

/*
echo space(12)." <input type='submit' name='add_product'   value='добавить в заказ' /> " ;
echo " <input type='submit' name='add_product_ready'   value='добавить в готовое' /> " ;

*/




//echo space(15)." Примечание <input type='text' id='pole_note_gen'textarea name='note_gen'   value='$note'> </b> <input autofocus type='submit' hidden value='Обработать' /> " ;


?></b></font><?


echo "</form>";
?> <font color = Navy ><b> <?

$id=$_GET['id'];
//echo "<form action='order.php?id=$id' method='GET' id='shap_client'  >";

echo space(15)."<input   style='visibility: hidden' type='text' id='pole_note_gen'textarea name='id'   value='$id'> </b> <input autofocus type='submit' hidden value='Обработать' /> " ;
echo "<div class='blok_klient_shap'>";
echo "".space(3)."<b>Клиент:<b>" ;



$client=$row['client'];
/////........................список клиентов
$idclient= $client;//$_SESSION['idclient'];
$rr=sqlread("SELECT * FROM client WHERE idclient = '$idclient'"); 
$sql = "SELECT * FROM client ORDER BY company ASC ";
$result_select = mysql_query($sql);

?> <select name="idclient" id='pole_name' onchange="onchanges_gen()"> <?
/*?> <select name='idclient' id='' > <?*/
$object->company = $rr['company'] ;

echo   "<option  selected value=$idclient   > $object->company   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->idclient' > $object->company </option> ";}  
echo "</select>";
////..........................
echo "</div ></b>";
echo "</form>";


$id=$_GET['id'];
//echo "<form action='order.php?id=$id' method='GET' id='shap_note'  >";
echo "<div class='blok_note_shap'>";
echo space(15)."<input   style='visibility: hidden' type='text' id='pole_note_gen'textarea name='id'   value='$id'> </b> <input autofocus type='submit' hidden value='Обработать' /> " ;
echo space(15) ; ?> <b> Примечание </b> <input  type='text' id='pole_note_gen'textarea name='note_gen'   value='<? echo  $note; ?>'onchange="onchanges_gen(); jQuery(this).blur() " > </b>  <?
?>
<input  style='visibility: hidden' type="submit"  name="note_but" value="yes" class="">
</div>

</form>

<?
/*
echo "<form action='order.php?id=$id' method='GET'  >"; echo "<input color = '#f0f0f0' bgcolor='' type='text' id='pole_null' textarea name='id'   value='$id' hidden >   ";
/////........................список 
$id_board= $_SESSION['id_board'];
$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board'");
$sql = "SELECT * FROM cat_brd_prod ORDER BY name_product ASC ";
$result_select = mysql_query($sql);

?> <select name='id_board' id='' > <?
$object->name_product = $rr['name_product'] ;

echo   "<option  selected value=$id_board   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select>";
////..........................


echo " <input type='submit' name='add_product'   value='добавить в заказ' /> " ;
echo " <input type='submit' name='add_product_ready'   value='добавить в готовое' /> " ;
echo "</form>";
*/
if ($_SESSION['user']=='21' ) echo space(350).$id;
echo "</div>";



////////////////////////////////////////////////////////////////////////////////////////////////////////



/////////////////////////////Подчиненные заказа/////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function Saveid($this)
{
 $_SESSION['idsub'] = $this.option1.value;
 
 
}

echo "</form>";

echo "<div class='data'>";


$sizefont="style='font: 12px apple-system'";

///// шапка талицы
$name =  array('id ','Наименование','Кол','Сдел','Верс сис','Алгоритм','Конф','цена','Примечание') ;
$long =  array(' 30','490         ','40'  ,'40'   ,'52'        ,'110'  ,'80','100','100') ;
 
echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' bgcolor='LightSeaGreen' id = 'gradient'> <font color='black'   style='font: 12px apple-system'> <b> $nam</td>";} 
echo "</tr> </table>";
/////end////////

$id=$_GET['id'];

$ccn=sqlread("SELECT COUNT(1) as coun FROM order_sub WHERE id_order_gen = '$id' ");

$count=$ccn['coun']-1;


?><script>

            function onchanges(){

        
    var count= <? echo $count; ?> // число строк в документе
    while(count>-1) {
                  var idsub    =   document.getElementsByName("idcat")[count].value;
                  var quantity =   document.getElementsByName("quantity")[count].value;
                  var id_alg =   document.getElementsByName("id_alg")[count].value;
                  var config =   document.getElementsByName("config")[count].value;
                  
            //      $(".pole_conf:eq("+count+")").val(config);

//alert(note );
$.ajax({
                  url:"ajax_update_order_sub.php",
                  type:"POST",
                  cache:true,
                  data: { idsub:    idsub,
                          quantity: quantity,
                          id_alg:   id_alg,                        
                        },
                      success: function(html){
                          $(".ajaxid").html(html);
                          update();
                              },
                              error:function(html){
                                alertify.error("Внимание !!!  Данные не были сохранены <BR>Возможно отсутствует интернет<BR>Проверьте интернет соединение и введите данные поля снова.");
                                        }
                        })
count=count-1;     } //while    

  }
        $(document).ready(function(){
                function update(){
                    $('.updater').blur().submit(function(e){
                      e.preventDefault();
                  var count= <? echo $count; ?> 
while(count>-1) {

 



                           var idsub    =   document.getElementsByName("idcat")[count].value;
                           var quantity =   document.getElementsByName("quantity")[count].value;
                           var id_alg =     document.getElementsByName("id_alg")[count].value;
                           var note =       document.getElementsByName("note_b")[count].value;
                      //     var note =       document.getElementsByName("note_b")[count].value;
                           

//alert(note );

                           $.ajax({
                                url:"ajax_update_order_sub.php",
                                type:"POST",
                                cache:true,
                
                    data: { idsub:    idsub,
                            note:     note, 
                            quantity: quantity,
                            id_alg:   id_alg,                        
                            
                             },
                                success: function(html){
                                    $(".ajaxid").html(html);
                                    update();
                                        },
                                        error:function(html){
                                          alertify.error("Внимание !!!  Данные не были сохранены <BR>Возможно отсутствует интернет<BR>Проверьте интернет соединение и введите данные поля снова.");
                                        }
                                  })
               count=count-1;     } //while                 
                            });
                    }
                    update();
                });

</script>
<?
$strSQL="SELECT *  FROM order_sub WHERE id_order_gen= '$id'  ";
 $rs = mysql_query($strSQL);
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {



      $id_order_sub=$row['id_order_sub'];




$dater=date("d.m.Y",strtotime( $row['date']));
$quantity=$row['quantity'];      
$idbrd_zak=$row['id_board'];
$algorithm=$row['algorithm'];

/*
$rr=sqlread("SELECT SUM(quantity) AS sumquantout FROM give_board_sub   WHERE n_order = '$id' and product = '$idbrd_zak' ");

$sumquantout=$rr['sumquantout'];
if(empty ($sumquantout)) { $sumquantout='0'; }
*/
$rr=sqlread("SELECT SUM(quantity) AS sumquantout FROM order_sub_out   WHERE id_order_gen = '$id' and id_board = '$idbrd_zak' AND idsuborder='$id_order_sub' ");
$sumquantout=$rr['sumquantout'];
if(empty ($sumquantout)) { $sumquantout='0'; }



echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";


 /*?><form action="" method='get' id='MyFormss'  ><?*/
 ?><form action="" method='post' id='MyFormss' class='updater' ><?
//........
echo " <td id='pole_null' ><input style='visibility: hidden' color = '#f0f0f0' bgcolor='' type='text' id='id' textarea name='id'    value='$id'   >  </td>" ;// id номер приходной накладной 
$id_order_sub=$row['id_order_sub'] ;
 echo "  <td  align='left'  'width=500 bgcolor='LightYellow' id='pole_del' >  <a href='order.php?id=".$id."&zakaz=yes&del_current=".$id_order_sub."'><img src='images/krest1.png' width='20'   height='20' alt='Пример''></a></td>  "; 



$idsub=$row['id_order_sub']  ;

//echo "<td width=20 bgcolor='LightGrey' $sizefont><input type='checkbox' id='pole_checkbox' name='id_prih_sub' value=" .  $idsub."> </td> ";
echo " <td  'width=0  >  <input visibility: hidden type='hiden' size=1 id='idsub'  name='idcat' value=". $idsub. " >  </td> "; //  для занесения в базу данных по этому id
//visibility: hidden 

$name_b= name_board_id($row['id_board']) ;
$balance= $quantity -$sumquantout;

if($balance==0){ $bgcol="bgcolor='#D0FFFF'" ; $fontbacgr= "<font style='color: #ffffff; background-color: #ff0000'  > ";}
if($balance>0){ $bgcol="bgcolor='LightYellow'" ; $fontbacgr= "<font style='color: #ffffff; background-color: #ff0000'  > ";}
if($balance<0){ $bgcol="bgcolor='LightPink'" ; $fontbacgr= "<font style='color: #ffffff; background-color: #ff0000'  > ";}

echo "<td  align='left'  'width=600 $bgcol id='pole_nameb' >  <b>"   .  $name_b .         "  </td>";


echo " <td id='pole_null' ><input type='submit' name='update'   style='display:none;'  id='pole_button' value='обновить' > </td>" ;


//echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='quantity'   name='quantity_ord' value=".$quantity ."   >   </td>";

echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 class='updater' name='quantity' id='quantity' value=".$quantity ."  >   </td>";





echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='quantity'   value=".$sumquantout .">   </td>";



echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_vers'  name='vers_syst' value=".$row['vers_syst']           .">   </td>";
//echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='algorithm' value=".$row['algorithm']            .">   </td>";


echo "<td align='center'  bgcolor='white' id='pole_ser' > <font color='black'  > ";
//$_SESSION['idsub']=$idsub;
/////........................список алгоритмов
$id_alg= $row['algorithm'];
$rr=sqlread("SELECT * FROM algorythm WHERE id = '$id_alg'");
$sql = "SELECT * FROM algorythm ORDER BY name ASC ";
$result_select = mysql_query($sql);
?> <select name="id_alg" id='pole_alg'   onchange="onchanges()" > <? //
//.........
$object->name = $rr['name'] ;
echo   "<option  selected value=$id_alg   > $object->name  </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name </option> ";}  
echo "</select>";
////..........................

echo "</td >"; 









/*?>  <td id='pole_null' > <button type="submit"  >     <image src="images/save.png"  width="15" height="15" > </button></td>  <? */
//echo " <td id='pole_null' ><input type='submit' name='update'   value='обновить' > </td>" ;

//echo "  <td  align='left'  'width=500 bgcolor='LightYellow' id='pole_del' >  <a href='order.php?id=".$id."&vers_syst=".$row['vers_syst']."'><img src='images/save.png' width='20'   height='20' alt='Пример''></a></td>  ";

$price= $row['price'];

$rows=sqlread("SELECT config FROM algorythm WHERE id = '$id_alg'"); 
$config= $rows['config'];



echo "<td   bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_conf' class='pole_conf' name='config' value=".$config          .">   </td>";
echo "<td align='right'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_price'  name='price' value=".$price         .">   </td>";
echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_note' class='updater' name='note_b' value='".$row['note_b']              ."'>   </td>";
//echo "<td align='center'  bgcolor='white'  > <font color='black'  > <b> <input type='text' size=1 id='pole_date'  name='daterr' value=".$dater            .">   </td>";
echo " <td id='pole_null' ><input  textarea name='zakaz'   value='yes'  hidden >  </td>" ;// действия в форме заказов 
//echo " <td id='pole_null' ><input  textarea name='idbrd_zak'   value='5'  hidden >  </td>" ;// действия в форме заказов 


echo "  <td  align='left'  'width=500 bgcolor='LightYellow' id='pole_del' >  <a href='order.php?id=".$id."&algorithm=".$row['algorithm']."&vers_syst=".$row['vers_syst']."&idbrd_zak=".$idbrd_zak."&quant=" .$quantity  . "&rashod=yes&add_current=".$id_order_sub."'><img src='images/down.png' width='20'   height='20' alt='Пример''></a></td>  ";





echo "</form>"; // внутренняя форма 
echo "</tr> ";

echo "</table>";



}}



//echo "</form>";

echo "</div>";

///////////////////////////////////////////////////////Смена статуса /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 echo "<form action='order.php?id=$id' method='get'   >";
echo "<div class='blok_status'>";

echo "<font color='black' >";//  style='font: 15px apple-system'> ";
$sizefont="style='font: 12px apple-system'";

$id=$_GET['id'];
echo " <td  ><input  type='text' id='pole_null' class = 'disabled'  textarea name='id'   value='$id'  hidden >  </td>" ;// id номер приходной накладной 
$qqq="".space(2)."";
?>
<p>
<? echo $qqq ;?> <input type="submit" class='btn btn-warning btn-sm' name = "urgently"  value="Выполнить срочно<? echo space(4) ; ?>"><br><p>
<? echo $qqq ;?> <input type="submit" class='btn btn-warning btn-sm'  name = "urgently1" value="Нет оборудования<? echo space(5) ; ?>"><br><p>
<? echo $qqq ;?> <input type="submit" class='btn btn-warning btn-sm' name = "urgently2" value="Нет алгоритма<? echo space(11) ; ?>"><br><p>
<? echo $qqq ;?> <input type="submit" class='btn btn-warning btn-sm' name = "urgently3" value="Прошито<? echo space(20) ; ?>"><br><p>
<hr>

<? echo $qqq ;?> <input type="submit" class='btn btn-primary  btn-sm'  name = "urgently0" value="Не отгружен <? echo space(15) ; ?>"><br><p><p>
<? echo $qqq ;?> <input type="submit" class='btn btn-primary  btn-sm'  name = "urgently4" value="Готов к отгрузке<? echo space(10) ; ?>"><br><p>
<? echo $qqq ;?> <input type="submit" class='btn btn-primary  btn-sm'  name = "urgently6" value="Частично отгружен<? echo space(5) ; ?>"><br><p>
<? echo $qqq ;?> <input type="submit" class='btn btn-primary  btn-sm'  name = "urgently5" value="Отгружен<? echo space(20) ; ?>"><br><p>



<?


echo "</div>";
echo "</form>";
///////////////////////////////////////////расходные //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//echo "<div class='data'>";
echo "<div class='rash'>";


$sizefont="style='font: 12px apple-system'";
///// шапка талицы
$name =  array('id ','Наименование','Сер номер','Верс сис'  ,'Алг','Кол','Примечание','Дата') ;
$long =  array(' 20','472         ','102         ','50','113','40 ' ,'100','150') ;

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
foreach ($name as $key => &$nam) {$ln= $long[$key] ; echo "<td align='center'  width='$ln' bgcolor='LightSeaGreen' id= 'gradient' > <font color='black'   style='font: 12px apple-system'> <b> $nam</td>";
} echo "</tr> </table>";
/////end////////

//$strSQL="SELECT *  FROM give_board_sub WHERE n_order= '$id'  ";
$strSQL="SELECT *  FROM order_sub_out WHERE id_order_gen= '$id'  ";


 $rs = mysql_query($strSQL);

echo "<table border=1 height=0  cellpadding='0' cellspacing='0'  >";//," <width=300%>"," <cellpadding=5>";
    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {



 echo "<form action='order.php?id=$id&rashod=yes' method='get' id='MyForms' >";



 echo "<input color = '#f0f0f0' bgcolor='' type='hidden' id='pole_null' textarea name='id'   value='$id'>   ";


 
 $id_sub=     $row['id'];
 $id_board=   $row['id_board'];
 $quantity=   $row['quantity'];
 $note=       $row['note'];
 $dates=      $row['dates'];  $dates=date("d.m.Y",strtotime($row['dates']  ));
 $snum_box=   $row['snum_box'];
 $vers_syst=  $row['vers_syst']  ;
 $name_b=     name_board_id($id_board) ;
 $dates=  $row['dates']  ;

$rr=sqlread("SELECT SUM(quantity) as quanti FROM give_board_sub WHERE id_sub_ordout='$id_sub ' ");
$bgcolor='LightYellow';
 $sumgives=     $rr['quanti'];
if($quantity== $sumgives ) {$bgcolor='#D0FFFF';}
if($sumgives > $quantity ) {$bgcolor='Pink';}


echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='hidden' size=1 id='pole_vers'  name='id_give_sub' value=".  $id_sub           .">  </td>  ";
echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_del' >  <a href='order.php?id=".$id."&rashod=yes&del_current_rash=".         $id_sub."'><img src='images/krest1.png' width='20'   height='20' alt='Пример''></a></td>  ";
echo "<td  align='left'  ' bgcolor=$bgcolor id='pole_namebout'   style='font: 12px amaze'    > <font color='black'  > <b>"   .       $name_b .         "  </td>";
echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='snum_box_sales' value=".  $snum_box  .">  </td>  ";
echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_vers'  name='vers_syst_sales' value=".$vers_syst           .">  </td>  ";
 




  echo "<td align='center'  bgcolor='white' >";
 /////........................список 
 $id_alg= $row['id_alg'];
 $rr=sqlread("SELECT * FROM algorythm WHERE id = '$id_alg'");
 $sql = "SELECT * FROM algorythm ORDER BY name ASC ";
 $result_select = mysql_query($sql);
 ?> <select name="id_alg_sales" id='pole_alg'   onchange="this.form.submit()" > <? //    onchange="document.getElementById('MyForms').submit()"   >     <? 
 //.........
 $object->name = $rr['name'] ;
 echo   "<option  selected value=$id_alg   > $object->name   </option>"; // здесь текущее положение в списке $idgr
 while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name </option> ";}  
 echo "</select>";
 ////..........................
 echo " </td>  ";


 //echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' id='pole_id'  name='quantity_sales' value=".             $sumgives  .">  </td>  ";
 echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' id='pole_id'  name='quantity_sales' value=".             $quantity  .">  </td>  ";
 echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_note_out'  name='note_sales' value=".    $note  .">  </td>  ";
 echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='date' size=1 id='pole_date_out'  name='dates' value=".    $dates  .">  </td>  ";

 
 echo " <td id='pole_null' ><input type='submit' name='rashod' style='display:none;'   value='yes' > </td>" ;

 ?>  <td border=0 align='left'  'width=500 bgcolor='LightYellow'  >  <a href='#'><img src='images/plus-64.png' width='20' height='20' alt='...'' onclick=' var idsub = "<?php echo $id_sub;?>"; var idgen = "<?php echo $id;?>";  window.open("popup_sub_order_out.php?idsub=" + idsub + "&idgen="+idgen , "modal", "width=1200,height=500,screenX=200,screenY=300 ,toolbar=no, location=no, directories=no, status=no, menubar=no, resizable=no "); '></a> </td>
 <?


 //echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_id'  name='ser_num' value=".    $dates  .">  </td>  ";

/*
$idproduct=$row['product'];

$name_b= name_board_id($idproduct) ;

$id_sub=$row['id_give_sub'];



echo "  <td  align='left'  'width=500 bgcolor='LightYellow' id='pole_del' >  <a href='order.php?id=".$id."&rashod=yes&del_current=".$id_sub."'><img src='images/krest1.png' width='20'   height='20' alt='Пример''></a></td>  ";


//echo "<td width=65 bgcolor='white' style='font: 14px arial' ><button type='submit' name='del_current' value=".  $row['id_give_sub'] .">Удалить</button></td>";  //кнопка 
echo " <td  'width=0 id='pole_null' > < > <b> <input visibility : hidden type='hiden' size=1 id='pole_id'  name='id_give_sub' value=", $row['id_give_sub']  , " '>  </td> "; //  для занесения в базу данных по этому адресу

//echo "<td  'width=40 bgcolor='white' id='pole_id' > <font color='black'   $sizefont1> <b>"   .  $row['id_prih_sub']  .         "  </td>";



echo "<td  align='left'  'width=500 bgcolor='LightYellow' id='pole_nameb'   style='font: 12px amaze'    > <font color='black'  > <b>"   .  $name_b .         "  </td>";

//echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='product' value=".$row['product']            .">  </td>  ";
echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='ser_num' value=".$row['ser_num']            .">  </td>  ";
echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='ser_num_box' value=".$row['ser_num_box']            .">  </td>  ";



echo "<td align='center'  bgcolor='white' > <font color='black'  > ";







echo " </td> ";




//echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_name'  name='client' value=".name_client_id($row['client'] )           .">  </td>  ";



  $datess=date("d.m.Y",strtotime($row['dates']  ));

$quantity =$row['quantity'] ;
echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='quantity'  name='quantity' value=".$row['quantity']  ."   >  </td>  ";





echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_vers'  name='vers_syst' value=".$row['vers_syst']            .">  </td>  ";

//echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='algo' value=".$row['algo']            .">  </td>  ";

echo "<td align='center'  bgcolor='white' >";
/////........................список 
$id_alg= $row['id_alg'];
$rr=sqlread("SELECT * FROM algorythm WHERE id = '$id_alg'");
$sql = "SELECT * FROM algorythm ORDER BY name ASC ";
$result_select = mysql_query($sql);
?> <select name="id_alg" id='pole_alg'  >  <? // onchange="document.getElementById('MyForms').submit()"
//.........
$object->name = $rr['name'] ;
echo   "<option  selected value=$id_alg   > $object->name   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id' > $object->name </option> ";}  
echo "</select>";
////..........................
echo " </td>  ";

?>  <td id='pole_null' > <button type="submit"  >     <image src="images/save.png"  width="15" height="15" > </button></td>  <?


//echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='n_order' value=".$row['n_order']            .">  </td>  ";
//echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='n_account' value=".$row['n_account']            .">  </td>  ";
echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_note'  name='note' value='".$row['note']            ."''>  </td>  ";
//echo "<td align='center'  bgcolor='white' > <font color='black'  > <b> <input type='text' size=1 id='pole_ser'  name='datess' value=".$datess          .">  </td>  ";


//echo "  <td  align='left'  'width=500 bgcolor='LightYellow' id='pole_del' >  <a href='order.php?id=".$id."'><img src='images/plus-64.png' width='20'   height='20' alt='Пример''></a></td>  "; 

?>  <td  align='left'  'width=500 bgcolor='LightYellow' id='pole_del' >  <a href='#'><img src='images/plus-64.png' width='20' height='20' alt='...'' onclick=' var idsub = "<?php echo $id_sub;?>"; var idgen = "<?php echo $id;?>";  window.open("popup_sub_order_out.php?idsub=" +idsub + "&idgen="+idgen , "modal", "width=600,height=300,screenX=500,screenY=500"); '></a> </td>
<?




echo " <td id='pole_null' ><input  textarea name='rashod'   value='yes'  hidden >  </td>" ;// действия в форме расходных 
echo " <td id='pole_null' ><input type='submit' name='update' style='display:none;'   value='обновить' > </td>" ;


*/



echo "</form>";

echo "</tr> ";




}}
echo " </table>";


echo "</div>";
////////////////////////////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////Смена статуса /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 echo "<form action='order.php?id=$id' method='get'   >";
echo "<div class='blok_print'>";


$sizefont="style='font: 12px apple-system'";

$id=$_GET['id'];
echo " <td  ><input  type='text' id='pole_null'  textarea name='id'   value='$id'  hidden >  </td>" ;// id номер приходной накладной 
$qqq="".space(2)."";
?>
<p>
<? echo $qqq ;?> <input type="submit" class='btn btn-primary  btn-sm'  name = "print_zakaz" value="Печать заказа&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160"><br><p>
<? echo $qqq ;?> <input type="submit" class='btn btn-primary  btn-sm'   name = "packing_list" value="Товарная накладная"><br><p>



<? echo $qqq ;?> <input type="submit" class='btn btn-primary  btn-sm'  name = "inform" value="Информировать&#160&#160&#160&#160&#160&#160&#160"><br><p>
<? echo $qqq ;?> <input type="submit" class='btn btn-primary  btn-sm'  name = "attire_order" value="Наряд заказ&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160&#160"><br><p>

<br>
<br>
<br>
<br>
<br>

<? echo $qqq ;?> <input type="submit" class='btn btn-primary  btn-sm'  name = "urgently9" value="Частично готово&#160&#160&#160<? echo space(6) ; ?>"><br><p>
<? echo $qqq ;?> <input type="submit" class='btn btn-primary  btn-sm'  name = "urgently10" value="Изготовлено<? echo space(15) ; ?>"><br><p>

<?


echo "</div>";
echo "</form>";
/////////////////////////////////////////блок список пользователей 
 echo "<form action='order.php?id=$id' method='get'   >";
echo "<div class='blok_manager'>";


$color= "<font size='3' color='Navy' face='apple-system'><b>";
$color1= "<font size='3' color='DarkGreen' face='apple-system'><b>";
echo "<input bgcolor='red' type='text' id='input_id' textarea name='id'  hidden value='$id' >   ";

echo "<br>";
echo space(15);
/////........................список 
$id_board= $_SESSION['id_board'];
$rr=sqlread("SELECT * FROM cat_brd_prod WHERE id_cat_brd = '$id_board'");
$sql = "SELECT * FROM cat_brd_prod ORDER BY name_product ASC ";
$result_select = mysql_query($sql);

?> <select name='id_board' id='add_prod' > <?
$object->name_product = $rr['name_product'] ;

echo   "<option  selected value=$id_board   > $object->name_product   </option>"; // здесь текущее положение в списке $idgr
while($object = mysql_fetch_object($result_select)){echo "<option  value = '$object->id_cat_brd' > $object->name_product </option> ";}  
echo "</select>";
////..........................
echo "<br><br>";
echo space(1)." <input type='submit' name='add_product' class='btn btn-primary  btn-sm'  value='".space(35)."добавить в заказ  ".space(33)." ' /> ".space(5); ;
//echo " <input type='submit' name='add_product_ready' class='btn btn-primary  btn-sm' value='добавить в готовое' /> " ;

echo "<hr>";

$row= sqlread ("SELECT * FROM  order_gen  WHERE  id_order ='$id' ");
$space=space(10);
echo "<br>". $space."$color Менеджер: $color1 ".space(5) . surname_user_id($row['manager'] ) . " </font>  <br>"; //  для занесения в базу данных по этому id
echo $space."$color Исполнитель:  $color1". surname_user_id($row['executor'] ) . "  <br> "; //  для занесения в базу данных по этому id
echo $space."$color Кладовщик:  $color1".space(3) . surname_user_id($row['storekeeper'] ) . "  <br> "; //  для занесения в базу данных по этому id

echo "</font>";
echo "</div>";
echo "</form>";
/////////////////////////////////////////////////////////////////

echo "</div>";


include "menu.php";

function reload() {$id=$_GET['id'] ;

//  usleep(200000);
$link="Location: order.php?id=".$id;
  header ($link); 
 // echo "<script> document.location.href='order.php?id=$id'</script>"; 
}
?>
