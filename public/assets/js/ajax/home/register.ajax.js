/**
 * ====================================================================
 * * REGISTER METHOD
 * --------------------------------------------------------------------
 * This file contains the methods and functions for customer registration
 * ====================================================================
 */

/**
 * ===========================================================================
 * * CUSTOMER REGISTRATION
 * ===========================================================================
 */

$(function () {
	$("#signup_form").on("submit", function (e) {
		e.preventDefault(); // prevent page refresh

		if ($("#signup_form")[0].checkValidity()) {
			// no validation error
			const form = new FormData($("#signup_form")[0]);

			data = {
				user_type: "Customer",
				first_name: form.get("first_name"),
				middle_name: form.get("middle_name"),
				last_name: form.get("last_name"),
				email_address: form.get("email_address"),
				phone_number: form.get("phone_number"),
				gender: form.get("gender"),
				password: form.get("password"),
			};

			$.ajax({
				url: apiURL + "home/register/customer",
				type: "POST",
				data: data,
				dataType: "json",
				success: (result) => {
					if (result) {
						Swal.fire({
							html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully registered! You may now login to the website.</p></div></div>',
							showCancelButton: !0,
							showConfirmButton: !1,
							cancelButtonClass: "btn btn-primary w-xs mb-1",
							cancelButtonText: "Ok",
							buttonsStyling: !1,
							showCloseButton: !0,
						}).then(function () {
							window.location.replace(baseURL + "signin");
						});
					} else {
						console.log("No result was found");
					}
				},
			}).fail(() => {
				Swal.fire({
					html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Oops...! Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while registering your account. Please try again.</p></div></div>',
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: "btn btn-primary w-xs mb-1",
					cancelButtonText: "Dismiss",
					buttonsStyling: !1,
					showCloseButton: !0,
				});
			});
		}
	});
});
