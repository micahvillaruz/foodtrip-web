const apiURL = "http://localhost:3600/api/v1/";
const baseURL = "http://localhost/foodtrip-web/";

// get token
const token = localStorage.getItem("TOKEN");

if (token != null) {
	// append headers to ajax attributes
	$.ajaxSetup({
		headers: {
			Accept: "application/json",
			Authorization: "Bearer " + token,
		},
	});
}

$(function () {
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
});
