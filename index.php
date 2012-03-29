<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8 />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="format-detection" content="telephone=no" />
<title>atnd</title>
<link href="atndsearch.css" rel="stylesheet" type="text/css" />
<link href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Norican' rel='stylesheet' type='text/css'>
<script src="http://code.jquery.com/jquery-1.6.4.js" type="text/javascript"></script>
<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.js" type="text/javascript"></script>

<style>
#keyword{
	font-family: 'Norican', cursive;
	text-align:center;
}
#keyword label.ui-input-text{
	font-size:2em;
	margin-bottom:0;
}
#searchArea input{
	width:94%;
	margin:0 auto 1em;
}
#searchArea p{
	width:70% - 10%;
	margin:0 auto;
	padding:5%;
	font-size:0.8em;
	background:#f5f5f5;
	border-radius:8px;
	text-align:center;
}
</style>

</head>

<body>
<div data-role="page" id="index" class="index" data-theme="d">
 <div data-role="header">
  <h1>ATND search for Mobile</h1>
 </div>
 <div data-role="content">
  <form action="mobile.php" method="get">
   <p id="keyword"><label for="basic">keyword:</label></p>
   <div id="searchArea">
    <input type="text" name="keyword" id="basic" data-mini="true" />
    <button type="submit" data-theme="a">Search</button>
   </div>
  </form>
 </div>
 

</div>
</body>
</html>
