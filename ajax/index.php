<head>
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>

</head>
<?

?>
<script>

$(function(){

    $('.articles').on('click', function(){
  

        var artId = $(this).data('id'); // id ������ � ���� ������
        $.ajax({
            url: 'handler.php', // ���� � �����������
            type: 'POST', // ����� �������� ������
            dataType: 'json', // ������ ������ ��������� � ������
            data: {article_id: artId}, // ������������ ������ {����1 : ��������1, ����2 : ��������2}
         //   success: function(data){ // � ������ �������� ���������� ������� � �������
                // � ���������� data - ����� �������
            //    if(data){
           //         $('#output').html(data); // ������� ������ � ������ ����
           //     }
            }
        });
    });
});




</script>
<a href="" class="articles" data-id="1">������ 1</a>
<a href="" class="articles" data-id="2">������ 2</a>