<!DOCTYPE html>
<html>
<head>
	<title>Countodown and push live at set date</title>	
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<?php 
date_default_timezone_set('America/New_York'); // Change this to whatever time zone you wish to use. http://php.net/manual/en/timezones.php

$live_date = '20180309'; // Change this to when the website is going live in yyyymmdd format

$d = date("Ymd"); 
$end_date = date("Ymd") + 1;
$end_date = date("F j\, Y", strtotime($end_date));
$end_date .= " 00:00:00";
if($d >= $live_date): 
?>
<body class="live">
	<center><h1>The website is live!</h1></center>
</body>
<?php else : ?>
<body class="coming_soon">
	<h1 style="height: 100px;text-align: center;font-family: Khand, sans-serif;color: #fff;font-size: 50px;">COMING SOON</h1>	
	<?php echo '<div id="counter" data-end-date="'.$end_date.'"></div>'; ?>
<?php endif; ?>
</body>
</html>