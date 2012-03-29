<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8 />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="format-detection" content="telephone=no" />
<title>atnd</title>
<link href="atndsearch.css" rel="stylesheet" type="text/css" />
<link href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.6.4.js" type="text/javascript"></script>
<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.js" type="text/javascript"></script>
</head>

<body>

<?php
  $keyword = $_GET["keyword"];
  echo "キーワード：　".$keyword."<br />";
?>

<?php
$atndurl = "http://api.atnd.org/events/?keyword_or=$keyword&format=atom";
$atndrss = simplexml_load_file($atndurl); 
?>

<div data-role="page" id="index" class="index" data-theme="d">
 <div data-role="header">
  <h1>ATND search for Mobile</h1>
  <a href="#" data-rel="back" data-inline="true" data-role="button" data-direction="reverse">back</a>
 </div>
 <div data-role="content"> 
   <ul id="nav" data-role="listview">
   	<?php foreach($atndrss->entry as $entry){
		echo "<li><a href='" . $entry->link->attributes()->href ."' target='_blank'>" . $entry->title . "</a></li>";
	}
	?>
   </ul>
 </div>
</div>


</body>
</html>
