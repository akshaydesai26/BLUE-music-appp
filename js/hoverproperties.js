/*$('.list1').hover(function(){
	$(this).css("background-color", "white");
	$(this).css("color", "black");
}).mouseout(function(){
	$(this).css("background-color", "");
	$(this).css("color", "white");
});*/

$('.list1').hover(function(){
	//$(this).css("font-size","16px");
	$(this).css("text-shadow","2px 2px black");
}).mouseout(function(){
	//$(this).css("font-size","");
	$(this).css("text-shadow","");
});

$('.title').mouseenter(function(){
	//$(this).css("font-size","16px");
	$(this).parent().parent().css("text-shadow","2px 2px black");

}).mouseout(function(){
	//$(this).css("font-size","");
	$(this).parent().parent().css("text-shadow","");
});

$('.srno').mouseenter(function(){
	//$(this).css("font-size","16px");
	$(this).parent().parent().css("text-shadow","2px 2px black");

}).mouseout(function(){
	//$(this).css("font-size","");
	$(this).parent().parent().css("text-shadow","");
});

/*$('tr').hover(function(){
	$(this).parent().css("background-color", "white");
	$(this).parent().css("color", "black");
});*/

$('.titletd').click(function(){
	$(this).parent().css("border", "solid 2px green");
})

$('#send').click(function(){
	$('tr').css("border","");
})

/*$(document).on('mouseenter', '.titletd2', function(){
     $(this).parent().css("border", "solid 2px red");
	
  }).on('mouseout', '.titletd2', function(){
     $(this).parent().css("border", "solid 0px white ");
	
  });*/
  
  $(document).on('mouseenter', '.title2', function(){
     $(this).parent().parent().css("border", "solid 2px red");
	 $(this).parent().parent().css("text-shadow","2px 2px black");
	
  }).on('mouseout', '.title2', function(){
     $(this).parent().parent().css("border", "solid 0px white ");
	$(this).parent().parent().css("text-shadow","");
  });
  
  $(document).on('mouseenter', '.srno2', function(){
     $(this).parent().parent().css("text-shadow","2px 2px black");
	
  }).on('mouseout', '.srno2', function(){
     $(this).parent().parent().css("text-shadow","");
	
  });
  
  $('.prev').click(function(){
	  if(toggle==0){
			//alert(nxtsongind);
			nxtsongind=nxtsongind-2;
		$('#player1').attr('src',jsondata[nxtsongind]);
		$('marquee').text(jsondata[nxtsongind]);
		//$('#songtitle').text(jsondata[nxtsongind]);
		$('.list1').css("background-color","");
		$('#t1 tr:eq(' + nxtsongind + ')').css("background-color","rgba(96, 234, 247,0.7)");
		
		nxtsongind++;}
		else if(toggle==1){
			//alert(toggle);
			nxtsongind2=nxtsongind2-2;
			$('#player1').attr('src',jsondata2[nxtsongind2]);
			$('marquee').text(jsondata2[nxtsongind2]);
			//$('#songtitle').text(jsondata[nxtsongind]);
			
		$('.list1').css("background-color","");
		$('#table2 tr:eq(' + nxtsongind2 + ')').css("background-color","rgba(96, 234, 247,0.7)");
		nxtsongind2++;
		
		
		}
  });
  
  $('.next').click(function(){
	  if(toggle==0){
			//alert(nxtsongind);
		$('#player1').attr('src',jsondata[nxtsongind]);
		$('marquee').text(jsondata[nxtsongind]);
		$('.list1').css("background-color","");
		$('#t1 tr:eq(' + nxtsongind + ')').css("background-color","rgba(96, 234, 247,0.7)");
		nxtsongind++;
		
		}
		else if(toggle==1){
			//alert(toggle);
			$('#player1').attr('src',jsondata2[nxtsongind2]);
			$('marquee').text(jsondata2[nxtsongind2]);
			$('.list1').css("background-color","");
			$('#table2 tr:eq(' + nxtsongind2 + ')').css("background-color","rgba(96, 234, 247,0.7)");
		nxtsongind2++;
		
		
		}
  });
  
  $('.stop').click(function(){
	  $('#player1').attr('src',"x.mp3");
	  //alert(nxtsongind);
	  $('.list1').css("background-color","");
	 // $("#t1 tr:nth-child("nxtsongind")").css("background-color","white");
	 //$('#t1 tr:eq(' + nxtsongind + ')').css("background-color","white");
	  
  });
  
  
  
  
  

