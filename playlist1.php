<?php 
//echo "submitted";
$newarr = $_POST['mytext'];
$nameoflist = $_POST['nameofplaylist'];
//echo $newarr;
$str_arr = explode (",", $newarr);  

file_put_contents($nameoflist, $newarr);
 echo "PLAYLIST SAVED TO:	".$nameoflist;
//echo $str_arr[2];  //have to give index
?>