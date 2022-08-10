$(function () {
	// load datatable
	loadAdminsTable();
});

// Load Admins DataTable
loadAdminsTable = () => {
	const dt = $("#admins-datatables");

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
				url: apiURL + "admin/user/admin",
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

				// Created By
				{
					data: null,
					render: (data) => {
						const createdBy = `${data.created.first_name}  ${
							data.created.middle_name === null ? "" : data.created.middle_name
						}  ${data.created.last_name}`;

						return `
							<div class="d-flex align-items-center">
								<i class="bx bx-edit text-danger me-2 fs-17"></i>
                <span class="d-block fw-medium">${createdBy}</span>
							<div>`;
					},
				},
			],
			order: [[0, "asc"]],
		});
	}
};
