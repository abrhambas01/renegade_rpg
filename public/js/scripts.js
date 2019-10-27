var delay = (function(){
	var timer = 0;
	return function(callback, ms){
		clearTimeout (timer);
		timer = setTimeout(callback, ms);
	};
})();

$(function(){
	// after typing for few secs in an input, then the route should return something..

	$('input#player_key').keyup(function() {
		delay(function(){
			alert('Hi, func called');
		}, 1000 );
	});

	/*this will I write the xhr requests that will be made in the application*/


	/*joining a faction.*/
	$("#join_faction").on('click',function(e){
		console.log(e);		
		// when I try to join a faction. Submit an ajax request to join
		$.ajax({
			url: '/join-faction',
			type: 'POST',
			dataType: '',
			data: {param1: 'value1'},
		})
		.done(function() {
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	});	

	$('#submit_wikis').on("click",function(){
		$.ajax({
			method : "POST",
			url : "/wikis",
			data : {
				user_id : 10
			},
			success : function (){
			},
			error : function(){

			}

		})
	});


});

function register_user($params) {
	// body...
}