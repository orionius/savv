<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Календарь</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="style.css">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

	<div class="container content">
<form class="form-horizontal" method="post" id="form">
	<div class="form-group">
		<label for="date" class="col-sm-2 control-label">Дата <span class="red">*</span></label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="date" name="date" placeholder="Дата" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-6">
			<button type="submit" id="submit" class="btn btn-primary">Отправить</button>
			<div></div>
		</div>
	</div>
</form>
	</div>

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

</body>
</html></script>

</body>
</html>