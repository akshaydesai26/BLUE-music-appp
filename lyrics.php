<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Directory Contents</title>

 <style type="text/css">
 
 </style>
 
 <link rel="stylesheet" href="lyricscss.css">
<link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
 </head>



<body>



<p id="title"> Blue </p>


<div id="bigcontainer" class="container">
<?php
	$txt = $_POST['mytext'];
 // $txt="love the way";
$name = str_replace(' ', '%20', $txt);
$ch=curl_init();
$ch1=curl_init();
$site='https://songmeanings.com/query/?query='.$txt.'&type=songtitles';
$site2='https://songmeanings.com/query/?query='.$name.'&type=songtitles';
//$txt2="hi this is akshay";
//echo $site;
//echo $site2;
//echo $txt2;
curl_setopt($ch,CURLOPT_URL,$site2);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result = curl_exec($ch);
//echo "page is:".$result;
if($result==""){
	//echo "blank";
	$site2='https://songmeanings.com/query/?query='.$name.'&type=all';
	curl_setopt($ch1,CURLOPT_URL,$site2);
curl_setopt($ch1,CURLOPT_HEADER,0);
curl_setopt($ch1,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch1,CURLOPT_RETURNTRANSFER,1);
$result1 = curl_exec($ch1);
//echo $result;
preg_match_all('/<td width="100%" class="">\n(.*?)\n(.*?)<\/td>/',$result1,$matches);
	//print_r($matches[0][0]);
	//echo $matches[0][0];
$link1 = $matches[0][0];
//echo $link;
preg_match_all('/<a[^>]+href=([\'"])(?<href>.+?)\1[^>]*>/i', $link1, $result1);

if (!empty($result1)) {
    # Found a link.
	$website= "https:".$result1['href'][0];
    //echo $website;
}
//else{echo "empty";}
include("simple_html_dom.php");
	$web=$website;
	//$html=file_get_html(web);
	$html=file_get_html($web);
	//$html=file_get_html("https://www.wikihow.com/Adjust-Bass-on-a-Computer");
	$title=$html->find("div.holder",0)->innertext;
	$title2=str_replace("Edit","",$title);
	$title2=str_replace("Lyrics","",$title2);
	$title2=str_replace("Wiki","",$title2);
	$title2=str_replace("Add Video","",$title2);
	echo $title2;
	
curl_close($ch1);
}
else{
	//echo "not blank";
	preg_match_all('/<td width="70%" class="">\n(.*?)<\/td>/',$result,$matches);
	//print_r($matches[0][0]);

$link = $matches[0][0];
preg_match_all('/<a[^>]+href=([\'"])(?<href>.+?)\1[^>]*>/i', $link, $result);

if (!empty($result)) {
    # Found a link.
	$website= "https:".$result['href'][0];
    //echo $website;
}

include("simple_html_dom.php");
	$web=$website;
	//$html=file_get_html(web);
	$html=file_get_html($web);
	//$html=file_get_html("https://www.wikihow.com/Adjust-Bass-on-a-Computer");
	$title=$html->find("div.holder",0)->innertext;
	$title2=str_replace("Edit","",$title);
	$title2=str_replace("Lyrics","",$title2);
	$title2=str_replace("Wiki","",$title2);
	$title2=str_replace("Add Video","",$title2);
	echo $title2;
}
curl_close($ch);
/*preg_match_all('/<td width="70%" class="">\n(.*?)<\/td>/',$result,$matches);
//print_r($matches[0][0]);

$link = $matches[0][0];
preg_match_all('/<a[^>]+href=([\'"])(?<href>.+?)\1[^>]*>/i', $link, $result);

if (!empty($result)) {
    # Found a link.
	$website= "https:".$result['href'][0];
    //echo $website;
}

//$a = '<a href="www.something.com">Click here</a>';
//print($a);

curl_close($ch);


include("simple_html_dom.php");
	$web=$website;
	//$html=file_get_html(web);
	$html=file_get_html($web);
	//$html=file_get_html("https://www.wikihow.com/Adjust-Bass-on-a-Computer");
	$title=$html->find("div.holder",0)->innertext;
	$title2=str_replace("Edit","",$title);
	$title2=str_replace("Lyrics","",$title2);
	$title2=str_replace("Wiki","",$title2);
	$title2=str_replace("Add Video","",$title2);
	echo $title2;*/
?>
</div>





</body>

</html>