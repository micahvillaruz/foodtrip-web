$(function () {
	// load datatable
	loadRestaurantAdminsTable();
	// fetch restaurant admin details
	viewRestoAdminDetails();
});

// Load Restaurant Admins DataTable
loadRestaurantAdminsTable = () => {
	const dt = $("#restoadmins-datatables");

	$.ajaxSetup({
		headers: {
			Accept: "application/json",
			Authorization: "Bearer " + token,
			ContentType: "application/x-www-form-urlencoded",
		},
	});

	if (dt.length) {
		dt.DataTable({
			ajax: {
				url: apiURL + "admin/user/resto-admin",
				type: "GET",
				ContentType: "application/x-www-form-urlencoded",
			},
			dom: "Bfrtip",
			buttons: ["copy", "csv", "excel", "print", "pdf"],

			columns: [
				// RestoAdmin No.
				{
					data: null,
					render: (data) => {
						const userNo = data.user_no;

						return `
							<span class="text-primary fw-medium">${userNo}</span>
            `;
					},
				},

				// Full Name
				{
					data: null,
					render: (data) => {
						const fullName = `${data.first_name}  ${
							data.middle_name === null ? "" : data.middle_name
						}  ${data.last_name}`;

						return `
							<div class="d-flex align-items-center">
								<i class="ri-account-circle-fill text-muted me-2 fs-17"></i>
                <span class="d-block fw-medium">${fullName}</span>
							<div>`;
					},
				},

				// Restaurant
				{
					data: null,
					render: (data) => {
						const restoImg = data.restaurant.resto_img;
						const restoName = data.restaurant.resto_name;

						return `
              <div class="d-flex align-items-center fw-medium">
                <img src="${restoImg}" alt="" class="avatar-xs rounded-circle me-2">
                ${restoName}
              </div>
            `;
					},
				},

				// Email Address
				{
					data: null,
					render: (data) => {
						const emailAddress = data.email_address;

						return `
              <div class="d-flex align-items-center">
                <span class="fs-12 badge badge-soft-dark badge-border">
                  <i class="ri-mail-fill text-warning me-1"></i> 
                  ${emailAddress}
                </span>
              </div>
            `;
					},
				},

				// Joining Date
				{
					data: null,
					render: (data) => {
						const date = moment(data.date_created).format("MMM. D, YYYY");
						const time = moment(data.date_created).format("hh:mm A");

						return `
							<div class="fw-medium">${date}<small class="text-muted ms-1">${time}</small></div>
						`;
					},
				},

				//Action
				{
					data: null,
					class: "text-center",
					render: (data) => {
						return `
							<button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" 
              onclick = "viewRestoAdminDetails('${data.user_id}')">View</button>
						`;
					},
				},
			],
			order: [[0, "asc"]],
		});
	}
};

// View Restaurant Admin Details
viewRestoAdminDetails = (user_id) => {
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
		url: apiURL + `admin/user/resto-admin/${user_id}`,
		dataType: "json",
		success: (result) => {
			const data = result.data;

			$("#restoadminList").removeClass("col-xxl-12");
			$("#restoadminList").addClass("col-xxl-9");
			$("#restoAdminCard").removeClass("d-none");

			let fullName = `${data.first_name}  ${
				data.middle_name === null ? "" : data.middle_name
			}  ${data.last_name}`;
			$("#full_name").html(fullName);

			$("#resto_name_top").html(data.restaurant.resto_name);

			$("#user_no").html(data.user_no);

			$("#first_name").html(data.first_name);
			$("#middle_name").html(data.middle_name);
			$("#last_name").html(data.last_name);

			let emailAddress = `
				<i class="ri-mail-fill text-warning me-2"></i>${data.email_address}
			`;
			$("#email_address").html(emailAddress);

			$("#user_type").html(data.user_type);

			const joining_date = data.date_created;
			$("#date_created").html(moment(joining_date).format("MMM. D, YYYY"));
			$("#time_created").html(moment(joining_date).format("hh:mm A"));

			let resto_img = data.restaurant.resto_img;
			let resto_name = data.restaurant.resto_name;

			let restaurant = `
        <img src="${resto_img}" alt="" class="avatar-xxs rounded-circle me-2">
        ${resto_name}
      `;
			$("#resto_name").html(restaurant);

			let restaurantCategory = "";

			const restocatg_name = data.restaurant.restaurant_category.restocatg_name;

			if (restocatg_name == "Cafe") {
				restaurantCategory += `
            <span class="fs-12 badge bg-warning text-uppercase">${restocatg_name}</span>
          `;
			} else if (restocatg_name == "Korean") {
				restaurantCategory += `
            <span class="fs-12 badge bg-secondary text-uppercase">${restocatg_name}</span>
          `;
			} else if (restocatg_name == "Bakery") {
				restaurantCategory += `
            <span class="fs-12 badge bg-success text-uppercase">${restocatg_name}</span>
          `;
			} else if (restocatg_name == "Pizzerias") {
				restaurantCategory += n`
            <span class="fs-12 badge bg-info text-uppercase">${restocatg_name}</span>
          `;
			} else if (restocatg_name == "Fine Dining") {
				restaurantCategory += `
            <span class="fs-12 badge bg-primary text-uppercase">${restocatg_name}</span>
          `;
			} else if (restocatg_name == "Fast Food") {
				restaurantCategory += `
            <span class="fs-12 badge bg-danger text-uppercase">${restocatg_name}</span>
          `;
			} else {
				restaurantCategory += `
            <span class="fs-12 badge bg-dark text-uppercase">${restocatg_name}</span>
          `;
			}
			$("#restocatg_name").html(restaurantCategory);

			const resto_address = data.restaurant.resto_address;
			let restoAddress = `
        <i class="fs-18 bx bxs-building-house text-danger me-2"></i>
        <span>${resto_address.address_1} ${
				resto_address.address_2 === null ? "" : resto_address.address_2
			} ${resto_address.barangay} ${resto_address.city} ${
				resto_address.province
			} ${resto_address.region} ${resto_address.zip_code}</span>
      `;
			$("#address").html(restoAddress);

			let restoEmail = `
          <i class="ri-mail-fill text-warning me-1"></i>
          ${data.restaurant.resto_email}
      `;
			$("#resto_email").html(restoEmail);
		},
	}).fail(() =>
		console.error("There was an error in getting the restoadmin details")
	);
};
