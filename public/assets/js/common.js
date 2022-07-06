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

$(".select").select2({
	minimumResultsForSearch: Infinity,
});
