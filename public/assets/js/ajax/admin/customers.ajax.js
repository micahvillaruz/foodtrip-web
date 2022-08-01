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
					data: "user_no",
				},

				// Full Name
				{
					data: null,
					render: (data) => {
						const fullName = `${data.first_name}  ${
							data.middle_name === null ? "" : data.middle_name
						}  ${data.last_name}`;

						// Return the full name
						return `
                          <div class="d-flex align-items-baseline text-nowrap">
						  <div class="icon-container">
						  <i class="fas fa-user-circle text-secondary"></i>
						  </div>
						  <div>
                                  <div>${fullName}</div>
                              </div>
                          </div>
                      `;
					},
				},

				// Email Address
				{
					data: "email_address",
				},

				// Phone Number
				{
					data: "phone_number",
				},

				// Gender
				{
					data: null,
					class: "text-nowrap",
					render: (data) => {
						const gender = data.gender;

						if (gender == "Female") {
							return `
                              <i class="fas fa-venus icon-container text-danger"></i>
                              <span>${gender}</span>
							  `;
						} else {
							return `
								<i class="fas fa-mars icon-container text-blue"></i>
								<span>${gender}</span>
								`;
						}
					},
				},

				// Joining Date
				{
					data: null,
					render: (data) => {
						return `
						<div>${moment(data.date_created).format("MMM. D, YYYY")}</div>
						`;
					},
				},

				// Status
				{
					data: null,
					render: (data) => {
						const deleteFlag = data.date_deleted;

						if (deleteFlag == null) {
							return `
                              <span class="badge badge-soft-success text-uppercase">Active</span>
                          `;
						} else {
							return `
                              <span class="badge badge-soft-danger text-uppercase">Inactive</span>
							  `;
						}
					},
				},

				//Action
				{
					data: null,
					class: "text-center",
					render: (data) => {
						return `
                    <button class="btn btn-sm btn-soft-info">View</button>
					`;
					},
				},
			],
			order: [[0, "asc"]],
		});
	}
};
