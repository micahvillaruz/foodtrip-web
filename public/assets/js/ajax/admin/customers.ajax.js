$(function () {
	// load datatable
	loadCustomersTable();
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
							<button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#showModal">View</button>
					`;
					},
				},
			],
			order: [[0, "asc"]],
		});
	}
};
