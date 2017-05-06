<?
include("./includes/functions.php");
get_slug();
redirect_if();
db_connect();

if ($slug == "") {
	$include_path = "home.php";
} elseif (file_exists("$slug.php")) {
	$include_path = "$slug.php";
} else {
	$include_path = "404.php";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
	    <link rel="stylesheet" type="text/css" href="/css/global.css">
	</head>
	<body>
		<? include("includes/header.php"); ?>
		<? include("$include_path"); ?>

		<div class="bggg"></div>
		<img class="bggg" src="/img/bg.png"/>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="global.js"></script>
	</body>
</html>

<?
db_disconnect();
?>
