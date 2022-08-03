$(function () {
	$(".process-date").hide();
	$(".cancel-date").hide();
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
				$(".cancel-date").show();
				$(".process-date").hide();
				$(".release-date").hide();
				$(".reject-date").hide();
				$(".courier-name").hide();
				$(".driver-name").hide();
				$(".driver-phone").hide();
				$(".date-received").hide();
				break;
			case "3":
				$(".process-date").show();
				$(".cancel-date").hide();
				$(".release-date").hide();
				$(".reject-date").hide();
				$(".courier-name").hide();
				$(".driver-name").hide();
				$(".driver-phone").hide();
				$(".date-received").hide();
				break;
			case "4":
				$(".release-date").show();
				$(".courier-name").show();
				$(".driver-name").show();
				$(".driver-phone").show();
				$(".process-date").hide();
				$(".cancel-date").hide();
				$(".reject-date").hide();
				$(".date-received").hide();
				break;
			case "5":
				$(".date-received").show();
				$(".process-date").hide();
				$(".cancel-date").hide();
				$(".release-date").hide();
				$(".reject-date").hide();
				$(".courier-name").hide();
				$(".driver-name").hide();
				$(".driver-phone").hide();
				break;
			case "6":
				$(".reject-date").show();
				$(".process-date").hide();
				$(".cancel-date").hide();
				$(".release-date").hide();
				$(".courier-name").hide();
				$(".driver-name").hide();
				$(".driver-phone").hide();
				$(".date-received").hide();
				break;
			default:
				$(".process-date").hide();
				$(".cancel-date").hide();
				$(".release-date").hide();
				$(".reject-date").hide();
				$(".courier-name").hide();
				$(".driver-name").hide();
				$(".driver-phone").hide();
				$(".date-received").hide();
		}
	});
});
