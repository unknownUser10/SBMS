
$(document).ready(function() {


	// Load dataTables
	$("#data-table").dataTable();


//------------------------------------------------------------------------------------
	// delete file hri
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_hri&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_hri').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file fri
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_fri&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_fri').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	
   	// delete file tri
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_tri&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_tri').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file mri
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_mri&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_mri').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file ri
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_ri&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_ri').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file hrdp
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_hrdp&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_hrdp').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file fmdp
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_fmdp&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_fmdp').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

	// delete file trip
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_trip&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_trip').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

	// delete file spdp
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_spdp&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_spdp').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file merm
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_merm&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_merm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file rmer
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_rmer&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_rmer').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file qs
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_qs&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_qs').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file isnm
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_isnm&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_isnm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file esnm
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_esnm&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_esnm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file men
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_men&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_men').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file memo
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_memo&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_memo').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file il
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_il&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_il').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file ar
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_ar&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_ar').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file pic
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_pic&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_pic').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file mom
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_mom&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_mom').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file sr
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_sr&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_sr').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file rsm
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_rsm&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_rsm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete file osa
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind3_osa&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind3_osa').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
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