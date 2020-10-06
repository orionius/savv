<?php



	/**
	* ������ �������� ������
	* Site: http://bezramok-tlt.ru
	* PHP �������� ������ �� ������
	*/
	
	//������������� ��������� � ����� ���� ������
	header('Content-Type: text/html; charset=UTF-8');
	include "function.php";
	//������� �������� ��������
	$uploadDir = './algorythm';
	
	//����� ������
	$err = array();
	
	//���� ������ �������� �����
	$errUpload = array( 
						 0 => '������ �� ��������, ���� ��� ������� �������� �� ������. ', 
						 1 => '������ ��������� ����� �������� ����������� ���������� ������, ������� ����� ���������� upload_max_filesize ����������������� ����� php.ini.', 
						 2 => '������ ������������ ����� �������� �������� MAX_FILE_SIZE, ��������� � HTML-�����.', 
						 3 => '����������� ���� ��� ������� ������ ��������.', 
						 4 => '���� �� ��� ��������.', 
						 6 => '����������� ��������� �����. ��������� � PHP 4.3.10 � PHP 5.0.3.' 
					  ); 
					  
	//���������� ���� ������ ��� ��������
	$fileTypes = array(
						 'jpg' => 'algorythm/jpeg',
						 'png' => 'algorythm/png',
                         'gif' => 'algorythm/gif'
                         'zip' => 'algorythm/zip'
						);
						
			

	
	//���� ������ ������ ���������
	if(isset($_POST['upload']))
	{
		//��������� ������ ������ ��� ���
		if(!empty($_FILES))
		{
			//��������� �� ������
			if($_FILES['files']['error'] > 0)
				$err[] = $errUpload[$_FILES['files']['error']];
				
			//�������� ��� ����� ��� ��������
			if(!in_array($_FILES['files']['type'], $fileTypes))
				$err[] = '������ ��� ����� <b>'. $_FILES['files']['type'] .'</b> �� �������� ��� ��������!';
			
			//���� ��� ������ �� ������ ����
			if(empty($err))
			{
				$type = pathinfo($_FILES['files']['name']);
				$name = $uploadDir .'/'. uniqid('files_') .'.'. $type['extension'];
				move_uploaded_file($_FILES['files']['tmp_name'],$name);
				
				//���������� POST ���������
				header('Location: http://'. $_SERVER['HTTP_HOST'] .'/less/uploads/uploads.php?name='. $name);
				exit;
			}
			else
				echo implode('<br>', $err);
		}

	}
	
	//��������� �� �������� �������� ����� �� ������
	if(isset($_GET['name']))
		echo '<h1>���� <font color="red">'. htmlentities($_GET['name']) .'</font> ������� ��������!</h1>'; 
		
	//������� �������� �� ��������
	$imgDir = array_values(array_diff(scandir($uploadDir), array('..', '.')));
	
	for($i = 0; $i < count($imgDir); $i++)
	{
		if($i % 2 == 0)
			echo '<br>'."\n";
		
		echo '<img src="'. $uploadDir .'/'. $imgDir[$i] .'">'."\n";
	}
	
	echo '<br /><br />'."\n";
	echo '<a href="http://'. $_SERVER['HTTP_HOST'] .'" 
			title="http://'. $_SERVER['HTTP_HOST'] .'">
			http://'. $_SERVER['HTTP_HOST'] .'	</a>';

?>