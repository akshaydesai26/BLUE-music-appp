<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Directory Contents</title>

 <style type="text/css">
 
 </style>
 <link rel="stylesheet" href="bgcss.css">
 <link rel="stylesheet" href="maincss.css">
 <link rel="stylesheet" href="toolbar.css">
 <link rel="stylesheet" href="hoverproperties.css">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
 <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'><!--font fot title-->
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
 <!--https://designshack.net/articles/css/the-10-best-script-and-handwritten-google-web-fonts/
 http://www.webdesigndev.com/16-gorgeous-web-safe-fonts-to-use-with-css/-->

 </head>



<body>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/javascript.js"></script>
		
	

	<!-- <audio id="player1" src="x.mp3" autoplay>  </audio>-->
	<!-- <audio id="player2" src="y.mp3" controls autoplay>  </audio> -->
	
	
	 <p id="title"> Blue </p>
	 
	 

	<div id="bigcontainer" class="container row">
	<p id="t1header">SrNo&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SongName</p>
	<p id="t2header">SrNo&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SongName</p>
	<div class="col-md-3"  align="center" id="style-3">
	<table >
      <!--<thead>
        <tr>
          <th>play</th>
		  <th>serial no</th>
          <th>filename</th>
		  
		</tr>
      </thead>-->
      
	  <tbody id="t1">

<?php
$newpath = $_POST['homepg'];
//echo $newpath;
$path = $newpath;
$dh = opendir($path);
$i=0;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "main.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin" && $file != "lyrics.php" && $file != "js" && $file != "simple_html_dom.php" && (substr($file,-4)==".mp3" || substr($file,-4)==".m4a")) {
        $dirArray[]=$file;
		$j=$i+1;
		print("
			<span>
          <tr class='list1'>
			<!--<td></td>-->
			
            <td align='center'><span class='srno'> &nbsp;&nbsp; $j</span></td>
			<td  align='center' class='titletd'>&nbsp;&nbsp; <span class='title'>$dirArray[$i]</span></td>
			
          </tr></span>");
		  
        $i++;
    }
}
		
closedir($dh);

//echo $dirArray[3];
//echo $dirArray[7].'is the best song';
?> 
	
	</tbody>
	
	</table>
	
	
	
	
	
	
	</div>
	
	<div class="col-md-3 controlpane"  align="center">
	<audio id="player1" src="x.mp3" controls autoplay>  </audio>
	<!--<audio id="player1" src="../songs1/Dive.mp3" controls autoplay>  </audio>-->
	<marquee behavior="alternate" direction="left" scrollamount="5" ></marquee>
	<!--<p id="songtitle"></p>-->

	<div id="controlpanel">
	
	
	<button class="btn btn-link controller prev" id="controlicon"><i id="controlid" class="fa fa-caret-left" aria-hidden="true"></i></button>
	<button class="btn btn-link controller stop" id="controlicon" align="center"><i id="controlid2" class="fa fa-stop " aria-hidden="true"></i></button>
	<button class="btn btn-link controller next" id="controlicon"><i id="controlid" class="fa fa-caret-right " aria-hidden="true"></i></button>
	
	</div>
	</div>
	
	
	<div class="col-md-3"  align="center">
	<table >
      <!--<thead>
        <tr>
          <th>play</th>
		  <th>serial no</th>
          <th>filename</th>
		  
		</tr>
      </thead>-->
      
	  <tbody id="table2">
	  
	  <?php
$playlistname = $_POST['playlistname'];
//echo $playlistname;

$fileContents = file_get_contents($playlistname);
$filearray = explode (",", $fileContents);
//echo $fileContents;
$sizearr= count($filearray,COUNT_NORMAL);
//echo $filearray[2];
for( $i0=0;$i0< $sizearr; $i0++)
{
	$j0=$i0+1;
	print("
			<span>
          <tr class='list1'>
			<!--<td></td>-->
			
            <td align='center'><span class='srno2'> &nbsp;&nbsp; $j0</span></td>
			<td  align='center' class='titletd'>&nbsp;&nbsp; <span class='title2'>$filearray[$i0]</span></td>
			
          </tr></span>");
}

/*$path = $newpath;
$dh = opendir($path);
$i=0;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "main.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin" && $file != "lyrics.php" && $file != "js" && $file != "simple_html_dom.php" ) {
        $dirArray[]=$file;
		$j=$i+1;
		print("
			<span>
          <tr class='list1'>
			<!--<td></td>-->
			
            <td align='center'><span class='srno'> &nbsp;&nbsp; $j</span></td>
			<td  align='center' class='titletd'>&nbsp;&nbsp; <span class='title'>$dirArray[$i]</span></td>
			
          </tr></span>");
		  
        $i++;
    }
}
		
closedir($dh);*/

//echo $dirArray[3];
//echo $dirArray[7].'is the best song';
?> 
		
	  </tbody>
	  
	 </table>
	 
	 
	 </div>
	 
	 
	 <button id="send" value="send" class="btn btn-default"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
	 <button id="clear" class="btn btn-default" ><i class="fa fa-trash" aria-hidden="true"></i></button>
	 </div>
	 
	 
	 
	 
	 <!--<button id="click">Try it</button>-->

		<p id="dummyname"></p>
	<!--<button id="lyrics">Lyrics</button>-->
	<p id="lyrics"></p>
	<ul id="toolbar">
	
	<li><form  method="post" name="myform" action="lyrics.php" target="_blank">
    <input  type="hidden" id="lyricname" name="mytext" maxlength="80" size="30" >
	<a href="#"><i class="fa fa-file-text" aria-hidden="true" id="lyricicon"></i><button type="submit" value="Lyrics" class="btn btn-link" id="buttontag"></button></a>
	</form></li>
	<li><a href="#" id="YTL" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
	<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
	<li id="shufflesong"><a href="#"><i class="fa fa-random" aria-hidden="true"></i></a></li>
	
	</ul>
	
	<form  method="post" name="myform" action="playlist1.php" target="_blank" id="playlistform">
	<input type="text" id="nameofplaylist" name="nameofplaylist">
	<input  type="hidden" id="playlist" name="mytext" maxlength="80" size="30" >
	<button type="submit" id="submitplaylist" class="playlistbutton btn btn-default"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
	</form>
	<button id="makeplaylist" class="playlistbutton btn btn-default"><i class="fa fa-check" aria-hidden="true"></i></button>
	
	
	<script type="text/javascript">
	
	$("#makeplaylist").click(function(){
			$("#playlist").val(jsondata2);
	});
	
	
	var timervar= null;
	var nextsong=null;
	var intind;
	var intind2;
	var toggle;
	//alert(timervar);
	
	//alert("hi");
	var location = <?php echo homepg ?>;
	var jsondata = <?php echo json_encode($dirArray); ?>;
	
	//.write(jsondata.length);
	/*var i;
	for(i=0;i<jsondata.length;i++){
		document.write(jsondata[i]);
	}*/
	var nxtsongind;
	var nxtsongind2;
	$('.srno').click(function(){
	toggle=0;
	intind2=-1;
	intind=0;
	clearTimeout(timervar);
	clearTimeout(nextsong);	
	//$(this).hide();
	var ind = $(this).text();
	//$('#testtag').text(ind);
	//alert(ind);
	//var typeo = typeof ind;
	intind = parseInt(ind);
	//var typeo2 = typeof intind;
	//alert(typeo2);
	//alert(jsondata[intind-1]);
	//alert(typeof jsondata[intind-1]);
	$('#player1').attr('src',jsondata[intind-1]);
	$('input[type="submit"]').removeAttr('disabled');
	getlyric();
	//gettime($(this));
	var x;
	nxtsongind=intind;
	$('marquee').text(jsondata[intind-1]);
	$('tr').css("background-color","");
	$(this).parent().parent().css("background-color","rgba(96, 234, 247,0.7)");
	
	/*function myfunc(){
		#60eaf7
		#f4d942
	timervar= setTimeout(function() { 
			x=document.getElementById("player1").duration;
			 //document.getElementById("demo").innerHTML = x;
			 alert(x*1000); 
			 var y=x*1000;
			 nextsong= setTimeout(function(){
				 nxtsongind++;
				 alert(nxtsongind);
				 
				 
				 $('#player1').attr('src',jsondata[nxtsongind]);
				 if(nxtsongind<jsondata.length)
				 {
					 //goto loop;
					 //alert("hit");
					 //timervar;
					 myfunc();
				 }
				 
			 },10000);
		}, 1000);
		
	}
	//release this function myfunc();  */
	
	
	
	
	
	});
	
	$("#player1")[0].addEventListener("ended",function(){
		if(toggle==0){
			//alert(toggle);
		$('#player1').attr('src',jsondata[nxtsongind]);
		$('marquee').text(jsondata[nxtsongind]);
		$('.list1').css("background-color","");
		$('#t1 tr:eq(' + nxtsongind + ')').css("background-color","rgba(96, 234, 247,0.7)");
		nxtsongind++;}
		else if(toggle==1){
			//alert(toggle);
			$('#player1').attr('src',jsondata2[nxtsongind2]);
			$('marquee').text(jsondata2[nxtsongind2]);
			
		$('.list1').css("background-color","");
		$('#table2 tr:eq(' + nxtsongind2 + ')').css("background-color","rgba(96, 234, 247,0.7)");
		nxtsongind2++;
		}
		//alert(toggle);
		
	});
	
	
	var arr2=0;
	//var jsondata2 = [];
	var jsondata2= <?php echo json_encode($filearray); ?>;
	$('.title').click(function(){
		var songname=$(this).text();
		jsondata2[arr2]=songname;
		//alert(jsondata2[arr2] + jsondata2.length);
		arr2++;
		//document.write(jsondata2.length+"is length");
		//$("#lyricname")..attr('value','');
	});
	
	$(document).ready(function(){
		$('input[value="Pause"]').attr('disabled','disabled'); 
		$('#send').removeAttr("disabled");
		alert('hi');
		alert(location);
		$('#submitplaylist').attr('disabled','disabled'); 
		
		//alert(jsondata2.length);
		if(jsondata2[0]==""){
			jsondata2=[];
			$("#table2").text("");
			arr2=0;
			
		}
		arr2=jsondata2.length;
		//alert(arr2);
		
		
	});
	//var start=0;
	$('#send').click(function(){
		
		//alert(jsondata2.length);
		
		var q;
		var songindex;
		$("#table2").html("");
		for(q=0;q<jsondata2.length;q++)
		{
			
			var r=q+1;
			//var htmltxt = '<tr><td>icon</td><td ><span class="srno2">&nbsp;&nbsp;'+r+'</span></td><td>&nbsp;&nbsp;<span class="title2">'+jsondata2[q]+'</span></td></tr>';
			var htmltxt=jQuery('<tr class="list1"><td align="center" ><span class="srno2">&nbsp;&nbsp;'+r+'</span></td><td align="center" class="titletd2"><span class="title2">&nbsp;&nbsp;'+jsondata2[q]+'</span></td></tr>')
			$("#table2").append(htmltxt);
		}
		//$(this).attr('disabled','disabled');
		
	});
	
	$('#clear').click(function(){
		var varylength=jsondata2.length;
		jsondata2=[];
		//alert(jsondata2.length);
		var cleartxt="";
		$("#table2").text(cleartxt);
		$('#send').removeAttr("disabled");
		arr2=0;
	})
	
	$(document).on('click', '.srno2', function(){
		toggle=1;
     //$(this).hide();
	 intind=-1;
	 intind2=0;
	 //alert(intind);
	var ind2 = $(this).text();
	
	intind2 = parseInt(ind2);
	
	//$('#player2').attr('src',jsondata2[intind2-1]);
	$('#player1').attr('src',jsondata2[intind2-1]); //if not done, both songs will play together;
	getlyric();
	nxtsongind2=intind2;
	$('marquee').text(jsondata2[intind2-1]);
	$('tr').css("background-color","");
	$(this).parent().parent().css("background-color","rgba(96, 234, 247,0.7)");
  });
  
	$(document).on('click', '.title2', function(){
		var songname2=$(this).text();
		//alert(songname2);
		//jsondata2.splice($.inArray(songname2, jsondata2), 1);
		jsondata2.splice(jsondata2.indexOf(songname2),1);
		//alert("removed");
		$("#table2").html("");
		var s;
		//alert(jsondata2);
		for(s=0;s<jsondata2.length;s++)
		{
			var t=s+1;
			//var htmltxt = '<tr><td>icon</td><td ><span class="srno2">&nbsp;&nbsp;'+r+'</span></td><td>&nbsp;&nbsp;<span class="title2">'+jsondata2[q]+'</span></td></tr>';
			var htmltxt=jQuery('<tr class="list1"><td align="center"><span class="srno2">&nbsp;&nbsp;'+t+'</span></td><td align="center">&nbsp;&nbsp;<span class="title2">'+jsondata2[s]+'</span></td></tr>')
			$("#table2").append(htmltxt);
		}
		arr2--;
	});
	
	
	
	$('#YTL').click(function(){
		var ytl;
		if($('#player1').attr('src')!="x.mp3"){
			ytl= $('#player1').attr('src');
		}
		/*else if($('#player2').attr('src')!="y.mp3"){
			ytl= $('#player2').attr('src');
		}*/
		else{
			ytl="";
		}
		
		ytl=ytl.replace(/\s+/g,"+");
		//alert(ytl);
		$('#YTL').attr('href',"https://www.youtube.com/results?search_query="+ytl);
		
	});
	
	$('#click').click(function(){
			 var x = document.getElementById("player1").duration;
			 //document.getElementById("demo").innerHTML = x;
			 alert(x);
		});
		
	function getlyric(){
		var lyric1=$('#player1').attr('src');
		var lyric2=lyric1.replace(".mp3","");
		lyric2=lyric2.replace(".m4a","");
		lyric2=lyric2.replace("-"," ");
		//alert(lyric2);
		//$("#dummyname").text(lyric2);
		$("#lyricname").attr('value',lyric2);
		//setTimeout(function(){},1000);
		
	}	;
	
	
	/*$("#player1")[0].addEventListener("ended",function(){
		if(intind2=-1){
			alert("intind");
		}
		if(intind=-1){
			alert("intind2");
		}
	});*/
	
	$('#shufflesong').click(function(){
		if(jsondata2.length!=0){
			//$('#shufflesong').attr('disabled','disabled');
			alert("CLEAR THE PLAYLIST");
		}
		else{
// Used like so
//var arr = [2, 11, 37, 42];
var jsondata3=jsondata;
jsondata2 = shuffle(jsondata3);
//alert("jsondata: "+jsondata);
//alert("jsondata2: "+jsondata2);
//alert("jsondata3: "+jsondata3);
$('#send').click();
		jsondata = <?php echo json_encode($dirArray); ?>;}
//alert("jsondata: "+jsondata);
	});
	
	function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}

if(jsondata2.length!=0){
			$('#shufflesong').attr('disabled','disabled');
		}
		
$('#makeplaylist').click(function(){
	$('#submitplaylist').removeAttr("disabled");
	$(this).css('background-color','green');
})

$('#submitplaylist').click(function(){
	$('#submitplaylist').attr('disabled','disabled');
	$('#makeplaylist').css('background-color','');
})
	
	
	
	
		
		
		
	
	
		
		
	
	
	
	
	
	
	
	
	</script>
	
	
	<script type="text/javascript" src="js/hoverproperties.js"></script>	
	
	<!--<form  method="post" name="myform"  target="_blank">
    <input  type="text" id="playlist" name="mytext" maxlength="80" size="30" >
	<button id="makeplaylist">makeplaylist</button>
	<button type="submit"  id="buttontag">submittophp</button>
	</form>-->
	
	

	
	</body></html>