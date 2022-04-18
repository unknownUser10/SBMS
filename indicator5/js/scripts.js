
$(document).ready(function() {


	// Load dataTables
	$("#data-table").dataTable();


//------------------------------------------------------------------------------------
	// delete file jf
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_jf&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_jf').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
	// delete file ljf
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_ljf&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_ljf').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file ds
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_ds&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_ds').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
	// delete file edc
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_edc&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_edc').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file ppo
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_ppo&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_ppo').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
	// delete file pta
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_pta&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_pta').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file sgc
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_sgc&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_sgc').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file lgu
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_lgu&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_lgu').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file abc
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_abc&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_abc').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file aa
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_aa&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_aa').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file fa
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_fa&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_fa').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file spg
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_spg&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_spg').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file po
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_po&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_po').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file rmpo
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_rmpo&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_rmpo').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file aip
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_aip&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_aip').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file ppbm
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_ppbm&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_ppbm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file tad
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_tad&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_tad').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file pw
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_pw&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_pw').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file pic
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_pic&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_pic').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file rmec
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_rmec&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_rmec').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file rrr
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_rrr&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_rrr').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file ar
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_ar&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_ar').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file mm
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_mm&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_mm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file arec
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_arec&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_arec').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file osao
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_osao&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_osao').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteFile(userId);
			$(user).closest('tr').remove();
        });
   	});
   	// delete file mmc
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_file_ind5_mmc&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_file_ind5_mmc').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
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