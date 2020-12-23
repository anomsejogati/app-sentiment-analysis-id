function login() {

	var email_no_hp = $("#email_no_hp").val();
	var password = $("#password").val();

	if (email_no_hp == "") {
		$(".validation-message").html("Email atau No. HP harus diisi").fadeIn(1000);
	} else if (password == "") {
		$(".validation-message").html("Password harus diisi").fadeIn(1000);
	} else {
		$.ajax({
			type: 'GET',
			url: site_url + 'dashboard/auth',
			data: {
				email_no_hp: email_no_hp,
				password: password
			},
			dataType: 'json',
			success: function (response) {
				console.log(response.msg);
				if (response.msg == 'success') {
					window.location.replace(site_url);
				} else {
					$(".validation-message").html(response.msg).fadeIn(1000);
				}

			}
		});
	}
}

function reset_password() {
	email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
	var email = $("#email").val();

	if (email == "") {
		$(".msg-validation").html("Email harus diisi").show();
	} else if (!email_regex.test(email)) {
		$(".msg-validation").html("Email yang kamu masukkan salah").show();
	} else {
		$(".input-loading").show();
		$("#btnReset").hide();
		$.ajax({
			type: "post",
			url: url_api,
			data: {
				action: "reset_password",
				email: email
			},
			dataType: "json",
			success: function (response) {
				console.log(response);
				if (response.msg == "success") {
					$(".input-loading").hide();
					$("#btnReset").show();
					swal("Informasi", "Password kamu berhasil direset. Silakan cek pesan masuk email kamu!", "success");
				} else {
					$(".msg-validation").html(response.msg).show();
				}
			}
		});
	}
}



$(document).ready(function () {


	$("#loginBtn").click(function () {
		login();
	});


	$('#password').keypress(function (e) {
		var key = e.which;
		if (key == 13)  // the enter key code
		{
			$('#loginBtn').click();
			return false;
		}
	});


	$("#btnReset").click(function () {
		reset_password();
	});


});
