$(function () {
	// function that will be called once the file is loaded.

	const togglePassword = document.querySelector("#togglePassword");
	const password = document.querySelector("#password");

	togglePassword.addEventListener("click", function () {
		// toggle the type attribute
		const type =
			password.getAttribute("type") === "password" ? "text" : "password";
		password.setAttribute("type", type);

		// toggle the icon
		this.classList.toggle("bi-eye");
	});

	$("#signin_form").on("submit", function (e) {
		e.preventDefault(); // prevent page refresh
		// no validation error
		$.ajax({
			url: apiURL + "home/login/",
			type: "POST",
			data: {
				email_address: $("#email_address").val(),
				password: $("#password").val(),
			},
			dataType: "json",
			success: function (data) {
				localStorage.setItem("TOKEN", data.token);

				let session_data = "";

				session_data += "token=" + data.token;
				session_data += "&first_name=" + data.data.first_name;
				session_data += "&middle_name=" + data.data.middle_name;
				session_data += "&last_name=" + data.data.last_name;
				session_data +=
					"&full_name=" +
					data.data.first_name +
					" " +
					data.data.middle_name +
					" " +
					data.data.last_name;
				session_data += "&email_address=" + data.data.email_address;
				session_data += "&user_type=" + data.data.user_type;

				Swal.fire({
					html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully logged in!</p></div></div>',
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: "btn btn-primary w-xs mb-1",
					cancelButtonText: "Ok",
					buttonsStyling: !1,
					showCloseButton: !0,
				}).then(function () {
					window.location.replace(baseURL + "Auth/oAuth?" + session_data);
				});
			},
			error: function () {
				Swal.fire({
					html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Oops...! Something went Wrong !</h4><p class="text-muted mx-4 mb-0">Your Email Address or Password is invalid</p></div></div>',
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: "btn btn-primary w-xs mb-1",
					cancelButtonText: "Dismiss",
					buttonsStyling: !1,
					showCloseButton: !0,
				});
			},
		});
		// }
	});
});
