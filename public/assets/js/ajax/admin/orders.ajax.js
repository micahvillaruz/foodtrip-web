$(function () {
	// load datatable
	loadOrdersTable();
});

// Load Orders DataTable
loadOrdersTable = () => {
	const dt = $("#orders-datatables");

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
				url: apiURL + "admin/orders",
				type: "GET",
				ContentType: "application/x-www-form-urlencoded",
			},
			dom: "Bfrtip",
			buttons: ["copy", "csv", "excel", "print", "pdf"],

			columns: [
				// Order No.
				{
					data: null,
					render: (data) => {
						return `
							<span class="text-primary fw-medium">${data.order_no}</span>
            `;
					},
				},

				// Customer Name
				{
					data: null,
					render: (data) => {
						const gender = data.created.gender;
						const fullName = `${data.created.first_name}  ${
							data.created.middle_name === null ? "" : data.created.middle_name
						}  ${data.created.last_name}`;

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

				// Restaurant
				{
					data: null,
					render: (data) => {
						const restaurantImage = data.restaurant.resto_img;
						const restaurantName = data.restaurant.resto_name;

						return `
              <div class="d-flex align-items-center fw-medium">
                <img src="${restaurantImage}" alt="${restaurantName}" class="avatar-xs rounded-circle me-2">
                ${restaurantName}
              </div>
						`;
					},
				},

				// Price
				{
					data: null,
					render: (data) => {
						return `
              <h5 class="text-info fw-medium">₱ ${data.order_total}</h5>
            `;
					},
				},

				// Date Ordered
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

				// Order Status
				{
					data: null,
					render: (data) => {
						const orderStatus = data.order_status;

						if (orderStatus === "Pending") {
							return `
                <div class="d-block badge badge-soft-primary align-items-center">
                  <i class="me-2 mdi mdi-cart-heart fs-13"></i>
                  <span class="text-uppercase">${orderStatus}</span>
                </div>
								`;
						} else if (orderStatus === "In Process") {
							return `
                <div class="d-block badge badge-soft-warning align-items-center">
                  <i class="me-2 bx bx-dish fs-13"></i>
                  <span class="text-uppercase">${orderStatus}</span>
                </div>
              `;
						} else if (orderStatus === "Cancelled") {
							return `
                <div class="d-block badge badge-soft-dark align-items-center">
                  <i class="me-2 mdi mdi-basket-remove-outline fs-13"></i>
                  <span class="text-uppercase">${orderStatus}</span>
                </div>
              `;
						} else if (orderStatus === "On the Way") {
							return `
                <div class="d-block badge badge-soft-secondary align-items-center">
                  <i class="me-2 ri-truck-line fs-13"></i>
                  <span class="text-uppercase">${orderStatus}</span>
                </div>
              `;
						} else if (orderStatus === "Delivered") {
							return `
                <div class="d-block badge badge-soft-success align-items-center">
                  <i class="me-2 mdi mdi-package-variant fs-13"></i>
                  <span class="text-uppercase">${orderStatus}</span>
                </div>
              `;
						} else if (orderStatus === "Rejected") {
							return `
                <div class="d-block badge badge-soft-danger align-items-center">
                  <i class="me-2 ri-close-circle-line fs-13"></i>
                  <span class="text-uppercase">${orderStatus}</span>
                </div>
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
              <button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#showModal">View</button>
						`;
					},
				},
			],
			order: [[0, "asc"]],
		});
	}
};
