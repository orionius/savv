<head>
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>

</head>
<?

?>
<script>

$(function(){

    $('.articles').on('click', function(){
  

        var artId = $(this).data('id'); // id статьи в базе данных
        $.ajax({
            url: 'handler.php', // путь к обработчику
            type: 'POST', // метод передачи данных
            dataType: 'json', // формат данных ожидаемых в ответе
            data: {article_id: artId}, // передаваемые данные {ключ1 : значение1, ключ2 : значение2}
         //   success: function(data){ // в случае удачного завершени€ запроса к серверу
                // в переменной data - ответ сервера
            //    if(data){
           //         $('#output').html(data); // выводим статью в нужный блок
           //     }
            }
        });
    });
});




</script>
<a href="" class="articles" data-id="1">—тать€ 1</a>
<a href="" class="articles" data-id="2">—тать€ 2</a>