$(document).ready( function() {
	// alert();
	// New User
	$("#registerForm").on('submit', function(){
	  event.preventDefault();

	  $.ajax({
	    url: "config/process.php",
	    type: "POST",
	    data: new FormData(this),
	    cache: false,
	    contentType: false,
	    processData: false,
	    beforeSend: function() {
		    $("#registerForm .submit-btn").html("Loading <i class='fa fa-cog fa-spin'></i>");
	    },
	    success: function(data) {
		    $("#registerForm .submit-btn").html("Create New Profile");
		    if ( data.search('success') !== -1 ) {
		    	$("#registerForm .feedback").html(data);
		    	$("#registerForm input").val('');
		    	$("#registerForm select").val('');
		    }else {
		      $("#registerForm .feedback").html(data);
		    }
	    },
	    error: function() {
		    $("#registerForm .submit-btn").html("Create New Profile");
	    	$("#registerForm .feedback").html("<div class='alert alert-danger'>An error occured, try again!</div>");
	    }
	  });
	});

	// user Update Form
	$("#userUpdateForm").on('submit', function(){
	  event.preventDefault();

	  $.ajax({
	    url: "config/process.php",
	    type: "POST",
	    data: new FormData(this),
	    cache: false,
	    contentType: false,
	    processData: false,
	    beforeSend: function() {
	    	$("#userUpdateForm .submit-btn").addClass('disabled');
		    $("#userUpdateForm .submit-btn").html("Loading <i class='fa fa-cog fa-spin'></i>");
	    },
	    success: function(data) {
	    	$("#userUpdateForm .submit-btn").removeClass('disabled');
		    $("#userUpdateForm .submit-btn").html("Update Profile");
		    if ( data.search('success') !== -1 ) {
		    	$("#userUpdateForm .feedback").html(data);
		    	// $("#userUpdateForm input").val('');
		    	// $("#userUpdateForm select").val('');
		    }else {
		      $("#userUpdateForm .feedback").html(data);
		    }
	    },
	    error: function() {
	    	$("#userUpdateForm .submit-btn").removeClass('disabled');
		    $("#userUpdateForm .submit-btn").html("Update Profile");
	    	$("#userUpdateForm .feedback").html("<div class='alert alert-danger'>An error occured, try again!</div>");
	    }
	  });
	});

	// fundUserForm
	$("#fundUserForm").on('submit', function(){
	  event.preventDefault();

	  $.ajax({
	    url: "config/process.php",
	    type: "POST",
	    data: new FormData(this),
	    cache: false,
	    contentType: false,
	    processData: false,
	    beforeSend: function() {
	    	$("#fundUserForm .submit-btn").addClass('disabled');
		    $("#fundUserForm .submit-btn").html("Loading <i class='fa fa-cog fa-spin'></i>");
	    },
	    success: function(data) {
	    	$("#fundUserForm .submit-btn").removeClass('disabled');
		    $("#fundUserForm .submit-btn").html("Make Payment");
		    if ( data.search('success') !== -1 ) {
		    	$("#fundUserForm .feedback").html(data);
		    	$("#fundUserForm input").val('');
		    	$("#fundUserForm select").val('');
		    }else {
		      $("#fundUserForm .feedback").html(data);
		    }
	    },
	    error: function() {
	    	$("#fundUserForm .submit-btn").removeClass('disabled');
		    $("#fundUserForm .submit-btn").html("Make Payment");
	    	$("#fundUserForm .feedback").html("<div class='alert alert-danger'>An error occured, try again!</div>");
	    }
	  });
	});

	// transaction Form
	$("#transactionForm").on('submit', function(){
	  event.preventDefault();
	  $.ajax({
	    url: "config/process.php",
	    type: "POST",
	    data: new FormData(this),
	    cache: false,
	    contentType: false,
	    processData: false,
	    beforeSend: function() {
	    	$("#transactionForm .submit-btn").addClass('disabled');
		    $("#transactionForm .submit-btn").html("Loading <i class='fa fa-cog fa-spin'></i>");
	    },
	    success: function(data) {
	    	$("#transactionForm .submit-btn").removeClass('disabled');
		    $("#transactionForm .submit-btn").html("Create transaction");
		    if ( data.search('success') !== -1 ) {
		    	$("#transactionForm .feedback").html(data);
		    	$("#transactionForm input").val('');
		    	$("#transactionForm select").val('');
		    }else {
		      $("#transactionForm .feedback").html(data);
		    }
	    },
	    error: function() {
	    	$("#transactionForm .submit-btn").removeClass('disabled');
		    $("#transactionForm .submit-btn").html("Create transaction");
	    	$("#transactionForm .feedback").html("<div class='alert alert-danger'>An error occured, try again!</div>");
	    }
	  });
	});

	// add Wallet Form
	$("#addWalletForm").on('submit', function(){
	  event.preventDefault();
	  $.ajax({
	    url: "config/process.php",
	    type: "POST",
	    data: new FormData(this),
	    cache: false,
	    contentType: false,
	    processData: false,
	    beforeSend: function() {
	    	$("#addWalletForm .submit-btn").addClass('disabled');
		    $("#addWalletForm .submit-btn").html("Loading <i class='fa fa-cog fa-spin'></i>");
	    },
	    success: function(data) {
	    	$("#addWalletForm .submit-btn").removeClass('disabled');
		    $("#addWalletForm .submit-btn").html("Add wallet");
		    if ( data.search('success') !== -1 ) {
		    	window.location.reload();
		    	// $("#addWalletForm .feedback").html(data);
		    	// $("#addWalletForm input").val('');
		    }else {
		      $("#addWalletForm .feedback").html(data);
		    }
	    },
	    error: function() {
	    	$("#addWalletForm .submit-btn").removeClass('disabled');
		    $("#addWalletForm .submit-btn").html("Add wallet");
	    	$("#addWalletForm .feedback").html("<div class='alert alert-danger'>An error occured, try again!</div>");
	    }
	  });
	});

	// editWalletForm
	$(".editWalletForm").on('submit', function(){
	  event.preventDefault();
	  const formId = this.id;
	  // return alert(formId);
	  $.ajax({
	    url: "config/process.php",
	    type: "POST",
	    data: new FormData(this),
	    cache: false,
	    contentType: false,
	    processData: false,
	    beforeSend: function() {
	    	$("#"+formId+" .submit-btn").addClass('disabled');
		    $("#"+formId+" .submit-btn").html("Loading <i class='fa fa-cog fa-spin'></i>");
	    },
	    success: function(data) {
	    	$("#"+formId+" .submit-btn").removeClass('disabled');
		    $("#"+formId+" .submit-btn").html("Update wallet");
		    if ( data.search('success') !== -1 ) {
		    	$("#"+formId+" .feedback").html(data);
		    	$("#"+formId+" input").val('');
		    }else {
		      $("#"+formId+" .feedback").html(data);
		    }
	    },
	    error: function() {
	    	$("#"+formId+" .submit-btn").removeClass('disabled');
		    $("#"+formId+" .submit-btn").html("Update wallet");
	    	$("#"+formId+" .feedback").html("<div class='alert alert-danger'>An error occured, try again!</div>");
	    }
	  });
	});

});

function changeStatus(id, status) {
	event.preventDefault();
	// alert(id);

  $.ajax({
    url: "config/process.php",
    type: "GET",
    data: {
    	'activate_user': id,
    	'status': status
    },
    beforeSend: function() {
	    $("#statusBtn"+id).html("<i class='fa fa-cog fa-spin'></i>");
    },
    success: function(data) {
	    if ( data.search('success') !== -1 ) {
	    	window.location.reload();
	    } else $("#statusBtn"+id).html(data);
    },
    error: function() {
	    $("#statusBtn"+id).html("Error, try again");
    }
  });
}
// Delete user
function deleteUser(id) {
	event.preventDefault();
  $.ajax({
    url: "config/process.php",
    type: "GET",
    data: { 'delete_user': id },
    beforeSend: function() {
	    $("#deleteBtn"+id).html("<i class='fa fa-cog fa-spin'></i>");
    },
    success: function(data) {
	    if ( data.search('success') !== -1 ) {
	    	// window.location.reload();
	    	$("#userRow"+id).css('background-color', 'red');
	    	$("#userRow"+id).fadeOut();
	    } else $("#deleteBtn"+id).html(data);
    },
    error: function() {
	    $("#deleteBtn"+id).html("Error, try again");
    }
  });
}

// Update
function updateStatus(id, status) {
	// event.preventDefault();
  $.ajax({
    url: "config/process.php",
    type: "GET",
    data: {
    	'transact_user': id,
    	'status': status
    },
    success: function(data) {
	    if ( data.search('success') !== -1 ) {
	    	// window.location.reload();
	    	// alert(data)
	    } else alert(data);
    },
    error: function(err) {
    	alert(err);
    	return false;
	    // $("#switch"+id).html("Error, try again");
    }
  });
}

// Approve deposit
function approveDeposit(id) {
	event.preventDefault();
  $.ajax({
    url: "config/process.php",
    type: "GET",
    data: { 'approve_deposit': id },
    beforeSend: function() {
	    $("#statusBtn"+id).html("<i class='fa fa-cog fa-spin'></i>");
    },
    success: function(data) {
	    if ( data.search('success') !== -1 ) {
	    	window.location.reload();
	    } else $("#statusBtn"+id).html(data);
    },
    error: function() {
	    $("#statusBtn"+id).html("Error, try again");
    }
  });
}

// Delete wallet
function deleteWallet(id) {
	event.preventDefault();
  $.ajax({
    url: "config/process.php",
    type: "GET",
    data: { 'delete_wallet': id },
    beforeSend: function() {
	    $("#delBtn"+id).html("<i class='fa fa-cog fa-spin'></i>");
    },
    success: function(data) {
	    if ( data.search('success') !== -1 ) {
	    	// window.location.reload();
	    	$("#walletRow"+id).css('background-color', 'red');
	    	$("#walletRow"+id).fadeOut();
	    } else $("#delBtn"+id).html(data);
    },
    error: function() {
	    $("#delBtn"+id).html("Error, try again");
    }
  });
}

// Update card status
function updateCard(id, status) {
	event.preventDefault();
  $.ajax({
    url: "config/process.php",
    type: "POST",
    data: {
    	'update_card': id,
    	'status': status
    },
    beforeSend: function() {
	    $("#cardBtn"+id).html("<i class='fa fa-cog fa-spin'></i>");
    },
    success: function(data) {
	    if ( data.search('success') !== -1 ) {
	    	window.location.reload();
	    } else $("#cardBtn"+id).html(data);
    },
    error: function() {
	    $("#cardBtn"+id).html("Error, try again");
    }
  });
}
// Delete card
function deleteCard(id) {
	event.preventDefault();
  $.ajax({
    url: "config/process.php",
    type: "GET",
    data: { 'delete_card': id },
    beforeSend: function() {
	    $("#delBtn"+id).html("<i class='fa fa-cog fa-spin'></i>");
    },
    success: function(data) {
	    if ( data.search('success') !== -1 ) {
	    	// window.location.reload();
	    	$("#cardRow"+id).css('background-color', 'red');
	    	$("#cardRow"+id).fadeOut();
	    } else $("#delBtn"+id).html(data);
    },
    error: function() {
	    $("#delBtn"+id).html("Error, try again");
    }
  });
}