$(function () {
	loadTopBar();
});

loadTopBar = () => {
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
		url: apiURL + `admin/account/info`,
		dataType: "json",
		success: (result) => {
			const data = result.data;
			console.log(data);
			$("#username").html(data.first_name + " " + data.last_name);
			$("#welcome").html(`Welcome ${data.first_name}!`);

			$("#user-img").attr(
				"src",
				`${baseURL}public/assets/images/flat-faces-icons-circle-man-9.png`
			);
		},
	});
};
