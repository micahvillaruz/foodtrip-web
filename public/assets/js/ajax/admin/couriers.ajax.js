$(function () {
	// load datatable
	loadCouriersTable();
});

// Load Couriers DataTable
loadCouriersTable = () => {
	const dt = $("#couriers-datatables");

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
				url: apiURL + "admin/couriers",
				type: "GET",
				ContentType: "application/x-www-form-urlencoded",
			},
			dom: "Bfrtip",
			buttons: ["copy", "csv", "excel", "print", "pdf"],

			columns: [
				// Courier No.
				{
					data: null,
					render: (data) => {
						return `
							<span class="text-primary fw-medium">${data.courier_no}</span>
            `;
					},
				},

				// Courier Name
				{
					data: null,
					render: (data) => {
						return `
              <span class="d-flex align-items-center">
                <i class="ri-truck-fill text-warning me-3 fs-17"></i>
                <span class="fs-13 fw-medium text-uppercase">${data.courier_name}</span>
              </span>
            `;
					},
				},

				// Email Address
				{
					data: null,
					render: (data) => {
						const courierStatus = data.courier_status;

						if (courierStatus == "Available") {
							return `
                <div class="d-block badge badge-soft-success">
                  <i class="me-2 ri-checkbox-circle-line fs-13"></i>
                  <span class="text-uppercase">${courierStatus}</span>
                </div>
								`;
						} else {
							return `
                <div class="d-block badge badge-soft-danger">
                  <i class="me-2 ri-close-circle-line fs-13"></i>
                  <span class="text-uppercase">${courierStatus}</span>
                </div>
								`;
						}
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
								<i class="ri-account-circle-fill text-muted me-2 fs-17"></i>
                <span class="d-block fw-medium">${createdBy}</span>
							<div>`;
					},
				},

				// Create Date
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
              <div class="d-flex gap-2">
                <div class="edit">
                  <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
                </div>
                <div class="remove">
                  <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
                </div>
              </div>
						`;
					},
				},
			],
			order: [[0, "asc"]],
		});
	}
};
