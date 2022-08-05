$(function () {
	// load datatable
	loadCustomersTable();
	// fetch customer details modal
	viewCustomerDetails();
});

// Load Customers DataTable
loadCustomersTable = () => {
	const dt = $("#customers-datatables");

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
				url: apiURL + "admin/user/customer",
				type: "GET",
				ContentType: "application/x-www-form-urlencoded",
			},
			columns: [
				// Customer No.
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
						const gender = data.gender;
						const fullName = `${data.first_name}  ${
							data.middle_name === null ? "" : data.middle_name
						}  ${data.last_name}`;

						if (gender == "Male") {
							return `
								<div class="d-flex">
									<i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
									<div>
										<span class="d-block fw-medium">${fullName}</span>
										<i class="mdi mdi-gender-male text-primary"></i>
										<small>${gender}</small>
									</div>
								</div>
								`;
						} else {
							return `
								<div class="d-flex">
									<i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
									<div>
										<span class="d-block fw-medium">${fullName}</span>
										<i class="mdi mdi-gender-female text-danger"></i>
										<small>${gender}</small>
									</div>
								</div>
								`;
						}
					},
				},

				// Email Address
				{
					data: null,
					render: (data) => {
						const emailAddress = data.email_address;

						return `
              <div class="d-flex align-items-center">
								<span class="fs-12 badge badge-soft-dark badge-border"><i class="ri-mail-fill text-warning me-1"></i> ${emailAddress}</span>
							</div>
            `;
					},
				},

				// Phone Number
				{
					data: null,
					render: (data) => {
						const phoneNumber = data.phone_number;

						return `
						<div class="d-flex alifn-items-center">
							<i class="ri-phone-fill text-success me-3 fs-17"></i>
							<div>
								<span class="d-block fw-medium">${phoneNumber}</span>
							</div>
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
							<button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewCustomerModal" onclick = "viewCustomerDetails('${data.user_id}')">View</button>
						`;
					},
				},
			],
			order: [[0, "asc"]],
		});
	}
};

// View Customer Details
viewCustomerDetails = (user_id) => {
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
		url: apiURL + `admin/user/customer/${user_id}`,
		dataType: "json",
		success: (result) => {
			const data = result.data;

			let fullName = `${data.first_name}  ${
				data.middle_name === null ? "" : data.middle_name
			}  ${data.last_name}`;
			$("#full_name").html(fullName);

			let customerGender = "";
			if (data.gender === "Male") {
				customerGender += `
						<i class="mdi mdi-gender-male text-primary"></i>
						<small>${data.gender}</small>
					`;
			} else if (data.gender === "Female") {
				customerGender += `
						<i class="mdi mdi-gender-female text-danger"></i>
						<small>${data.gender}</small>
					`;
			}
			$("#gender").html(customerGender);

			$("#user_no").html(data.user_no);
			$("#first_name").html(data.first_name);
			$("#middle_name").html(data.middle_name);
			$("#last_name").html(data.last_name);

			let emailAddress = `
				<i class="ri-mail-fill text-warning me-2"></i>${data.email_address}
			`;
			$("#email_address").html(emailAddress);

			let phoneNumber = `
				<i class="ri-phone-fill text-success me-2"></i>${data.phone_number}
			`;
			$("#phone_number").html(phoneNumber);
			const joining_date = data.date_created;
			$("#date_created").html(moment(joining_date).format("MMM. D, YYYY"));
			$("#time_created").html(moment(joining_date).format("hh:mm A"));

			let customerAddress = "";

			data.addresses.forEach((address) => {
				customerAddress += `
					<blockquote class="mx-3 blockquote custom-blockquote blockquote-outline blockquote-dark rounded shadow mb-3">
						<div class="d-flex align-items-center mb-1">
							<div class="col-4">
								<h5 class="fs-13 mb-1">Full Name</h5>
							</div>
							<div class="col-8">
								<div class="fs-13 fw-medium">${address.full_name}</div>
							</div>
						</div>
						<div class="d-flex align-items-center mb-1">
							<div class="col-4">
								<h5 class="fs-13 mb-1">Phone Number</h5>
							</div>
							<div class="col-8">
								<div class="fs-13 fw-medium">${address.phone_number}</div>
							</div>
						</div>
						<div class="d-flex align-items-center">
							<div class="col-4">
								<h5 class="fs-13 mb-1">Address</h5>
							</div>
							<div class="col-8  fs-13 fw-medium">
								${address.address_1} ${address.address_2} ${address.barangay} ${address.city} ${address.province} ${address.region} ${address.zip_code}
							</div>
						</div>
					</blockquote>
					`;
			});
			$("#addresses").html(customerAddress);
		},
	}).fail(() =>
		console.error("There was an error in getting the customer details")
	);
};
