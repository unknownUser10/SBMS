
$(document).ready(function() {


	// Load dataTables
	$("#data-table").dataTable();


//------------------------------------------------------------------------------------
	// delete file hrdp
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_hrdp&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_hrdp').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
	// delete file frmdp
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_frmdp&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_frmdp').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
	// delete file trip
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_trip&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_trip').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file spfdp
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_spfdp&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_spfdp').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file qaqp
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_qaqp&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_qaqp').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file sm
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_sm&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_sm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file qpm
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_qpm&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_qpm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file ige
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_ige&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_ige').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
	// delete file qapm
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_qapm&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_qapm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file oe
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_oe&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_oe').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file im
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_im&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_im').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file qmep
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_qmep&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_qmep').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file sfa
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_sfa&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_sfa').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file es
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_es&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_es').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file others
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_others&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_others').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file qrfb
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_qrfb&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_qrfb').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file ild
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_ild&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_ild').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file prog
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_prog&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_prog').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file st
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_st&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_st').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file tam
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_tam&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_tam').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file srm
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_srm&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_srm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
// delete file ar
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_ar&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_ar').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file mom
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_mom&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_mom').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file vip
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_vip&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_vip').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file pic
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_pic&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_pic').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file nr
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind4_nr&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind4_nr').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
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