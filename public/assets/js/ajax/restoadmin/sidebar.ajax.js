$(function () {
	loadSideBar();
});

loadSideBar = () => {
	$.ajaxSetup({
		headers: {
			Accept: "application/json",
			Authorization: "Bearer " + token,
			ContentType: "application/x-www-form-urlencoded",
		},
	});

	$.ajax({
		type: "GET",
		cache: false,
		url: apiURL + `resto-admin/account/info`,
		dataType: "json",
		success: (result) => {
			$("#restoName").html(result.data.restaurant.resto_name);
		},
	});
};
