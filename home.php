<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>BLUE</title>
	<link rel="stylesheet" href="bgcss.css">
	<link rel="stylesheet" href="homecss.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> <!--bootstrap-->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" > <!--logo-->
	<link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'><!--font fot title-->
</head>
<body>

	<script type="text/javascript" src="js/jquery.js"></script>
	
	<p id="title"> Blue </p>
	<form  id="getlocation" method="post" name="homepg" action="main.php" target="_blank" >
    <input   type="text" id="home" name="homepg" maxlength="80" size="80"  >
	<input type="hidden" id="playlistname" name="playlistname" value="default.txt">
    <!--<input type="submit" value="GO" id="submitbutton" >-->
	<button type="submit" class="btn btn-warning" id="submitbutton"><i id="icon" class="fa fa-music" aria-hidden="true" ></i></button>
	</form>
	<div id="playlist" >
	<?php

//echo $newpath;
$path = ".";
$dh = opendir($path);
$i=0;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "main.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin" && $file != "lyrics.php" && $file != "js" && $file != "simple_html_dom.php" && substr($file,-4)==".txt" ) {
        $dirArray[]=$file;
		$j=$i+1;
		print("<div class='playlists'>$dirArray[$i]</div>
			
         ");
		  
        $i++;
    }
}
		
closedir($dh);

//echo $dirArray[3];
//echo $dirArray[7].'is the best song';
?> 
</div>
<script type="text/javascript">
$('.playlists').click(function(){
	var file=$(this).text();
	$('#playlistname').val(file);
	$('#playlist .playlists').css("background-color","");
	$(this).css("background-color","white")
});


</script>

	
</body>
</html>