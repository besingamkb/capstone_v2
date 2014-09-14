 var base_url = $('meta[name=base_url]').attr('content');

 jQuery(document).ready(function(e) {

 	$("#loginSubmitBtn").removeAttr("disabled");
 	$("#boc-login").submit(function(e) {
 			var action = $(this).attr('action');
 			var formData = $(this).serializeArray();
 			console.log(formData);

 			$.ajax({
 				url: action,
 				data: formData,
 				success: function(e) {
 					console.log(e.status);
 					if ( e.status == "success") {
 						$('.panel-body').prepend('<p class="alert alert-success login-success" role="alert">Login Success!</p>');
	 					setTimeout(function() {
	 						$('.login-success').fadeOut(300, function() {
	 							$(this).remove();
	 							window.location.assign(base_url + "index.php/boc_system/");
	 						});
	 					}, 2000);
 					} else {
 						$('.panel-body').prepend('<p class="alert alert-danger login-success" role="alert">Login Fail! wrong credentials.</p>');
	 					setTimeout(function() {
	 						$('.login-success').fadeOut(300, function() {
	 							$(this).remove();
	 						});
	 					}, 2000);
 					}
 					
 				},
 				error: function(e) {
 					$('.panel-body').prepend('<p class="alert alert-danger login-error" role="alert">Login Failure! Try again.	</p>');
 					setTimeout(function() {
 						$('.login-error').fadeOut(300, function() {
 							$(this).remove();
 						});
 					}, 2000);
 				}
 			})
 		e.preventDefault();

 		
 	});

 	$("#add_employee_validation").click(function() {
       $(this).hide("slow");
    });

    setTimeout(function() {
    	$("#add_employee_validation").hide("1000");
    }, 10000);

    // json content management
    $.ajax({
    	url: base_url + "index.php/json/allContents",
    	success: function(e) {
    		//console.log(e);
    		$.each(e, function(i, data) {
    			//console.log(data.datecreated);
    			$(".dropdown-messages").append('<li><a href="#"><div><strong>' + data.username + '</strong><span class="pull-right text-muted"><em>'+ data.datecreated +'</em></span></div><div>'+data.title+'</div></a></li><li class="divider"></li>');

    		});
    	$(".dropdown-messages").append('<li><a class="text-center" href="#"><strong>Read All Anouncement</strong><i class="fa fa-angle-right"></i></a></li>');
    	}
    });
 });