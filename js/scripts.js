

	function markComplete(callback){
		console.log(callback);
		if(callback.type=="error"){
			jQuery('html,body').animate({
        scrollTop: jQuery("#caldera_notices_1").offset().top - 150},
        'slow');
			return;
		}
		var formID = document.getElementById("currentpostid");
		formID=parseInt(formID.getAttribute('dataType'));
 		var userID=document.getElementById("currentpostid");
 		userID=parseInt(userID.getAttribute("ses"));
		
 		jQuery.ajax({
			 //route api called in function.php file in line 69-91
			url: '/wp-json/nvtp/v1/quizSubs' ,
 			type: 'POST',
 			data: {'quizID': formID,'user_id':userID},
 			success: function(response) {
 				console.log(response);
				setTimeout(function(){document.location.href="/";},1500);
 			},
 			error: function(response) {
 				console.log(response);
 			} 
 		});
 	}

 