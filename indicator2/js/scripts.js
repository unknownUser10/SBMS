
$(document).ready(function() {


	// Load dataTables
	$("#data-table").dataTable();


//------------------------------------------------------------------------------------
	// delete file ifsrm
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind2_ifsrm&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind2_ifsrm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file ga
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind2_ga&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind2_ga').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file ra
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind2_ra&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind2_ra').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

	// delete file fgdr
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind2_fgdr&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind2_fgdr').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

	// delete file roap
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind2_roap&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind2_roap').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file ps
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind2_ps&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind2_ps').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file dpm
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind2_dpm&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind2_dpm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file sp
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind2_sp&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind2_sp').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file ar
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind2_ar&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind2_ar').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file sa
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind2_sa&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind2_sa').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file hrdp
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind2_hrdp&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind2_hrdp').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file fm
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind2_fm&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind2_fm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	
//-------------------------------------------------------------------------------------------------

	// login form
	$(document).bind('keypress', function(e) {
		e.preventDefault;
		
        if(e.keyCode==13){
            $('#btn-login').trigger('click');
        }
    });

	$(document).on('click','#btn-login', function(e){
		e.preventDefault;
		actionLogin();
	});



   	// login function
	function actionLogin() {

		var errorCounter = validateForm();

		if (errorCounter > 0) {

		    $("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
		    $("#response .message").html("<strong>Error</strong>: Log-in failed. Please try again!");
		    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);

		} else {

			var $btn = $("#btn-login").button("loading");

			jQuery.ajax({
				url: 'response.php',
				type: "POST",
				data: $("#login_form").serialize(), // serializes the form's elements.
				dataType: 'json',
				success: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");

					window.location = "dashboard.php"; 
	

				},
				error: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
				}

			});

		}
		
	}

//----------------------------------------------------------------------------------------------------------------

	//this script is for deleting file

   	function deleteFile(userId) {

        jQuery.ajax({

        	url: '../../response.php',
            type: 'POST', 
            data: userId,
            dataType: 'json', 
            success: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			},
			error: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			} 
    	});

   	}



   	function validateForm() {
	    // error handling
	    var errorCounter = 0;

	    $(".required").each(function(i, obj) {

	        if($(this).val() === ''){
	            $(this).parent().addClass("has-error");
	            errorCounter++;
	        } else{ 
	            $(this).parent().removeClass("has-error"); 
	        }


	    });

	    return errorCounter;
	}

});