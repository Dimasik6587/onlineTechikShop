<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="HandheldFriendly" content="true">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Import CSS -->
	<link rel="stylesheet" href="css/main.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.scrollto.min.js"></script>
	<script src="js/slabtext.min.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/main.js"></script>
	<p>подключаем шапку</p>

</head>
	<!-- Здесь подключается содержимое -->

  <?php include 'application/views/'.$content_view; ?>
 
 
 
 	<!-- Подвал футер -->
  <div id="footer">
	<p>подключаем подвал</p>
	</div>
</body>
</html>
