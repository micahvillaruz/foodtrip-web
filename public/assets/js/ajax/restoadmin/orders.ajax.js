$(function () {
	$(".release-date").hide();
	$(".reject-date").hide();
	$(".courier-name").hide();
	$(".driver-name").hide();
	$(".driver-phone").hide();
	$(".date-received").hide();

	$("#order_status").change(function () {
		console.log($(this).val());
		var orderStatus = $(this).val();
		switch (orderStatus) {
			case "2":
				$(".release-date").show();
				$(".courier-name").show();
				$(".driver-name").show();
				$(".driver-phone").show();
				$(".reject-date").hide();
				$(".date-received").hide();
				break;
			case "3":
				$(".date-received").show();
				$(".release-date").hide();
				$(".reject-date").hide();
				$(".courier-name").hide();
				$(".driver-name").hide();
				$(".driver-phone").hide();
				break;
			case "4":
				$(".reject-date").show();
				$(".release-date").hide();
				$(".courier-name").hide();
				$(".driver-name").hide();
				$(".driver-phone").hide();
				$(".date-received").hide();
				break;
			default:
				$(".release-date").hide();
				$(".reject-date").hide();
				$(".courier-name").hide();
				$(".driver-name").hide();
				$(".driver-phone").hide();
				$(".date-received").hide();
		}
	});
});
