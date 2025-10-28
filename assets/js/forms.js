$(document).ready( function(){

// Sign in
$("#loginForm").on('submit', function(e){
	e.preventDefault();

	$.ajax({
		url: "config/process",
		type: "POST",
		data: new FormData(this),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#loginForm .submit-btn").html("Signing in <i class='fa fa-cog fa-spin'></i>");
			$("#loginForm .submit-btn").addClass("disabled");
		},
		success: function(data) {
			$("#loginForm .submit-btn").html("Sign in");
			$("#loginForm .submit-btn").removeClass("disabled");
			$("#loginForm .feedback").html(data);
			
			if ( data.search('success') !== -1 ) {
				$("#loginForm input").val("");
				window.location.href = "accounts";
			}

		},
		error: function() {
			$("#loginForm .submit-btn").html("Sign in");
			$("#loginForm .submit-btn").removeClass("disabled");
			$("#loginForm .feedback").html("<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Sorry, and error occured! <br /> Try again later.</div>");
		}
	});
});

// local Transfer Form
$("#localTransferForm").on('submit', function(e){
	e.preventDefault();

	$.ajax({
		url: "../config/process",
		type: "POST",
		data: new FormData(this),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#localTransferForm .submit-btn").addClass("disabled");
			$("#localTransferForm .submit-btn").html("Loading <i class='fa fa-cog fa-spin'></i>");
		},
		success: function(data) {
			$("#localTransferForm .submit-btn").removeClass("disabled");
			$("#localTransferForm .submit-btn").html("Make Transfer");
			$("#localTransferForm .feedback").html(data);
			
			if ( data.search('success') !== -1 ) {
				$("#localTransferForm input").val("");
				$("#localTransferForm select").val("");
				$("#localTransferForm textarea").val("");
				// window.location.href = "domestic-transfer?success";
			}
		},
		error: function(err) {
			$("#localTransferForm .submit-btn").removeClass("disabled");
			$("#localTransferForm .submit-btn").html("Make Transfer");
			$("#localTransferForm .feedback").html("<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Sorry, and error occured! <br /> Try again later.</div>");
		}
	});
});

// wire Transfer Form
$("#wireTransferForm").on('submit', function(e){
	e.preventDefault();

	$.ajax({
		url: "../config/process",
		type: "POST",
		data: new FormData(this),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#wireTransferForm .submit-btn").addClass("disabled");
			$("#wireTransferForm .submit-btn").html("Loading <i class='fa fa-cog fa-spin'></i>");
		},
		success: function(data) {
			$("#wireTransferForm .submit-btn").removeClass("disabled");
			$("#wireTransferForm .submit-btn").html("Make Transfer");
			$("#wireTransferForm .feedback").html(data);
			
			if ( data.search('success') !== -1 ) {
				$("#wireTransferForm input").val("");
				$("#wireTransferForm select").val("");
				$("#wireTransferForm textarea").val("");
				// window.location.href = "domestic-transfer?success";
			}
		},
		error: function(err) {
			$("#wireTransferForm .submit-btn").removeClass("disabled");
			$("#wireTransferForm .submit-btn").html("Make Transfer");
			$("#wireTransferForm .feedback").html("<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Sorry, and error occured! <br /> Try again later.</div>");
		}
	});
});

// wire Transfer Form
$("#selfTransferForm").on('submit', function(e){
	e.preventDefault();

	$.ajax({
		url: "../config/process",
		type: "POST",
		data: new FormData(this),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#selfTransferForm .submit-btn").addClass("disabled");
			$("#selfTransferForm .submit-btn").html("Loading <i class='fa fa-cog fa-spin'></i>");
		},
		success: function(data) {
			$("#selfTransferForm .submit-btn").removeClass("disabled");
			$("#selfTransferForm .submit-btn").html("Make Transfer");
			$("#selfTransferForm .feedback").html(data);
			
			if ( data.search('success') !== -1 ) {
				$("#selfTransferForm input").val("");
				$("#selfTransferForm select").val("");
				$("#selfTransferForm textarea").val("");
				// window.location.href = "domestic-transfer?success";
			}
		},
		error: function(err) {
			$("#selfTransferForm .submit-btn").removeClass("disabled");
			$("#selfTransferForm .submit-btn").html("Make Transfer");
			$("#selfTransferForm .feedback").html("<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Sorry, and error occured! <br /> Try again later.</div>");
		}
	});
});

// cheque Deposit Form
$("#chequeDepositForm").on('submit', function(e){
	e.preventDefault();

	$.ajax({
		url: "../config/process",
		type: "POST",
		data: new FormData(this),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#chequeDepositForm .submit-btn").addClass("disabled");
			$("#chequeDepositForm .submit-btn").html("Loading <i class='fa fa-cog fa-spin'></i>");
		},
		success: function(data) {
			$("#chequeDepositForm .submit-btn").removeClass("disabled");
			$("#chequeDepositForm .submit-btn").html("Deposit Check");
			$("#chequeDepositForm .feedback").html(data);
			
			if ( data.search('success') !== -1 ) {
				$("#chequeDepositForm input").val("");
				$("#chequeDepositForm select").val("");
				// window.location.href = "domestic-transfer?success";
			}
		},
		error: function(err) {
			$("#chequeDepositForm .submit-btn").removeClass("disabled");
			$("#chequeDepositForm .submit-btn").html("Deposit Check");
			$("#chequeDepositForm .feedback").html("<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Sorry, and error occured! <br /> Try again later.</div>");
		}
	});
});

// crypto Deposit Form
$("#cryptoDepositForm").on('submit', function(e){
	e.preventDefault();

	$.ajax({
		url: "../config/process",
		type: "POST",
		data: new FormData(this),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#cryptoDepositForm .submit-btn").addClass("disabled");
			$("#cryptoDepositForm .submit-btn").html("Loading <i class='fa fa-cog fa-spin'></i>");
		},
		success: function(data) {
			$("#cryptoDepositForm .submit-btn").removeClass("disabled");
			$("#cryptoDepositForm .submit-btn").html("Make Deposit");
			$("#cryptoDepositForm .feedback").html(data);
			
			if ( data.search('success') !== -1 ) {
				$("#cryptoDepositForm input").val("");
				$("#cryptoDepositForm select").val("");
				// window.location.href = "domestic-transfer?success";
			}
		},
		error: function(err) {
			$("#cryptoDepositForm .submit-btn").removeClass("disabled");
			$("#cryptoDepositForm .submit-btn").html("Make Deposit");
			$("#cryptoDepositForm .feedback").html("<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Sorry, and error occured! <br /> Try again later.</div>");
		}
	});
});

// apply Card Form
$("#applyCardForm").on('submit', function(e){
	e.preventDefault();

	$.ajax({
		url: "../config/process",
		type: "POST",
		data: new FormData(this),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#applyCardForm .submit-btn").addClass("disabled");
			$("#applyCardForm .submit-btn").html("Loading <i class='fa fa-cog fa-spin'></i>");
		},
		success: function(data) {
			$("#applyCardForm .submit-btn").removeClass("disabled");
			$("#applyCardForm .submit-btn").html("Apply For Card");
			$("#applyCardForm .feedback").html(data);
			
			if ( data.search('success') !== -1 ) {
				$("#applyCardForm input").val("");
				$("#applyCardForm select").val("");
				// window.location.href = "domestic-transfer?success";
			}
		},
		error: function(err) {
			$("#applyCardForm .submit-btn").removeClass("disabled");
			$("#applyCardForm .submit-btn").html("Apply For Card");
			$("#applyCardForm .feedback").html("<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Sorry, and error occured! <br /> Try again later.</div>");
		}
	});
});
// deleteCardForm
$("#deleteCardForm").on('submit', function(e){
	e.preventDefault();

	$.ajax({
		url: "../config/process",
		type: "POST",
		data: new FormData(this),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#deleteCardForm .submit-btn").addClass("disabled");
			$("#deleteCardForm .submit-btn").html("Loading <i class='fa fa-cog fa-spin'></i>");
		},
		success: function(data) {
			$("#deleteCardForm .submit-btn").removeClass("disabled");
			$("#deleteCardForm .submit-btn").html("Delete Card");
			$("#deleteCardForm .feedback").html(data);
			
		},
		error: function(err) {
			$("#deleteCardForm .submit-btn").removeClass("disabled");
			$("#deleteCardForm .submit-btn").html("Delete Card");
			$("#deleteCardForm .feedback").html("<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Sorry, and error occured! <br /> Try again later.</div>");
		}
	});
});


// uploadImageForm
$("#uploadImageForm").on('submit', function(e){
	e.preventDefault();

	$.ajax({
		url: "../config/process",
		type: "POST",
		data: new FormData(this),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#uploadImageForm .submit-btn").addClass("disabled");
			$("#uploadImageForm .submit-btn").html("Loading <i class='fa fa-cog fa-spin'></i>");
		},
		success: function(data) {
			$("#uploadImageForm .submit-btn").removeClass("disabled");
			$("#uploadImageForm .submit-btn").html(data);
			if ( data == 'success' ) {
				window.location.reload();
			}
			
		},
		error: function(err) {
			$("#uploadImageForm .submit-btn").removeClass("disabled");
			$("#uploadImageForm .submit-btn").html("<i class='fa fa-cloud-upload mr-1'></i> Upload Picture");
		}
	});
});
// change Password Form
$("#changePasswordForm").on('submit', function(e){
	e.preventDefault();

	$.ajax({
		url: "../config/process",
		type: "POST",
		data: new FormData(this),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#changePasswordForm .submit-btn").addClass("disabled");
			$("#changePasswordForm .submit-btn").html("Loading <i class='fa fa-cog fa-spin'></i>");
		},
		success: function(data) {
			if ( data.search('success') !== -1 ) {
				$("#chequeDepositForm input").val("");
				$("#chequeDepositForm select").val("");
				// window.location.href = "domestic-transfer?success";
			}
			$("#changePasswordForm .submit-btn").removeClass("disabled");
			$("#changePasswordForm .submit-btn").html("Change Password");
			$("#changePasswordForm .feedback").html(data);
		},
		error: function(err) {
			$("#changePasswordForm .submit-btn").removeClass("disabled");
			$("#changePasswordForm .submit-btn").html("Change Password");
			$("#changePasswordForm .feedback").html("<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Sorry, and error occured! <br /> Try again later.</div>");
		}
	});
});


// verifyKYCForm
$("#verifyKYCForm").on('submit', function(e){
	e.preventDefault();

	$.ajax({
		url: "../config/process",
		type: "POST",
		data: new FormData(this),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#verifyKYCForm .submit-btn").addClass("disabled");
			$("#verifyKYCForm .submit-btn").html("Loading <i class='fa fa-cog fa-spin'></i>");
		},
		success: function(data) {
			if ( data.search('success') !== -1 ) {
				$("#verifyKYCForm input").val("");
				$("#verifyKYCForm select").val("");
				// window.location.href = "domestic-transfer?success";
			}
			$("#verifyKYCForm .submit-btn").removeClass("disabled");
			$("#verifyKYCForm .submit-btn").html("Change Password");
			$("#verifyKYCForm .feedback").html(data);
		},
		error: function(err) {
			$("#verifyKYCForm .submit-btn").removeClass("disabled");
			$("#verifyKYCForm .submit-btn").html("Change Password");
			$("#verifyKYCForm .feedback").html("<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Sorry, and error occured! <br /> Try again later.</div>");
		}
	});
});








// Link Bank AUTO
$("#linkAuto form").on('submit', function(e){
	e.preventDefault();

	$.ajax({
		url: "config/process.php",
		type: "POST",
		data: new FormData(this),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#linkAuto form .submit-btn").html("Verifying <i class='fa fa-cog fa-spin'></i>");
		},
		success: function(data) {
			$("#linkAuto form .submit-btn").html("Link account");
			$("#linkAuto form .feedback").html(data);
		},
		error: function() {
			$("#linkAuto form .submit-btn").html("Link account");
			$("#linkAuto form .feedback").html("<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Sorry, and error occured! <br /> Try again later.</div>");
		}
	});
});

// Link Bank AUTO
$("#linkManual form").on('submit', function(e){
	e.preventDefault();

	$.ajax({
		url: "config/process.php",
		type: "POST",
		data: new FormData(this),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#linkManual form .submit-btn").html("Verifying <i class='fa fa-cog fa-spin'></i>");
		},
		success: function(data) {
			$("#linkManual form .submit-btn").html("Link account");
			$("#linkManual form .feedback").html(data);
		},
		error: function() {
			$("#linkManual form .submit-btn").html("Link account");
			$("#linkManual form .feedback").html("<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Sorry, and error occured! <br /> Try again later.</div>");
		}
	});
});

// Link Bank CARD
$("#linkCard form").on('submit', function(e){
	e.preventDefault();

	$.ajax({
		url: "config/process.php",
		type: "POST",
		data: new FormData(this),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#linkCard form .submit-btn").html("Verifying <i class='fa fa-cog fa-spin'></i>");
		},
		success: function(data) {
			$("#linkCard form .submit-btn").html("Link card");
			$("#linkCard form .feedback").html(data);
		},
		error: function() {
			$("#linkCard form .submit-btn").html("Link card");
			$("#linkCard form .feedback").html("<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Sorry, and error occured! <br /> Try again later.</div>");
		}
	});
});

// Link Bank CARD
$("#transferForm").on('submit', function(e){
	e.preventDefault();

	$.ajax({
		url: "config/process.php",
		type: "POST",
		data: new FormData(this),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#transferForm .submit-btn").html("Sending <i class='fa fa-cog fa-spin'></i>");
		},
		success: function(data) {
			$("#transferForm .submit-btn").html("Make transfer");
			$("#transferForm .feedback").html(data);
		},
		error: function() {
			$("#transferForm .submit-btn").html("Make transfer");
			$("#transferForm .feedback").html("<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Sorry, and error occured! <br /> Try again later.</div>");
		}
	});
});

// Link Bank CARD
$("#msgform123234").on('submit', function(e){
	e.preventDefault();

	$.ajax({
		url: "config/process.php",
		type: "POST",
		data: new FormData(this),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			$("#msgform123234 .submit-btn").html("Sending <i class='fa fa-cog fa-spin'></i>");
		},
		success: function(data) {
			$("#msgform123234 .submit-btn").html("Send message");
			$("#msgform123234 .feedback").html(data);
			if ( data.search('sent') != -1 ) {
				$("#msgform123234 input, #msgform123234 textarea").val('');
			}
		},
		error: function() {
			$("#msgform123234 .submit-btn").html("Send message");
			$("#msgform123234 .feedback").html("<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Sorry, and error occured! <br /> Try again later.</div>");
		}
	});
});

});