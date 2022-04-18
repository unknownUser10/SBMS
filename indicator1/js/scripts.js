
$(document).ready(function() {


	// Load dataTables
	$("#data-table").dataTable();

//------------------------------------------------------------------------------------
	



	// delete file hr
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_hr&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_hr').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file fr
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_fr&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_fr').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file tr
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_tr&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_tr').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

	// delete file mr
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_mr&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_mr').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

	// delete file fgdstakeholders
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_fgdstakeholders&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_fgdstakeholders').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file rsp
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_rsp&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_rsp').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file mqi
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_mqi&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_mqi').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file ptb
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ptb&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ptb').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file rmooe
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_rmooe&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_rmooe').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file rsefu
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_rsefu&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_rsefu').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file rigp
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_rigp&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_rigp').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file mcc
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_mcc&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_mcc').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file fgdsori
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_fgdsori&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_fgdsori').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file rirdv
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_rirdv&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_rirdv').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file sipaip
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_sipaip&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_sipaip').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file lr
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_lr&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_lr').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file nr
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_nr&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_nr').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file osa
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_osa&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_osa').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
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