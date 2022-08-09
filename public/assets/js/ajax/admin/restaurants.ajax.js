/**
 * ====================================================================
 * * RESTAURANTS MONITORING METHOD
 * --------------------------------------------------------------------
 * This file contains the methods and functions for fetching the
 * restaurants' information
 * ====================================================================
 */

$(function () {
	// load datatable
	loadRestaurantsTable();
	loadRestoCategoriesTable();
});

/**
 * ====================================================================
 * * GET ALL RESTAURANTS
 * ====================================================================
 */

// Load Restaurants DataTable
loadRestaurantsTable = () => {
	const dt = $("#restaurants-datatables");

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
				url: apiURL + "admin/restaurants",
				type: "GET",
				ContentType: "application/x-www-form-urlencoded",
			},
			dom: "Bfrtip",
			buttons: ["copy", "csv", "excel", "print", "pdf"],

			columns: [
				// Restaurant Category
				{
					data: null,
					render: (data) => {
						const restocatg_name = data.restaurant_category.restocatg_name;

						if (restocatg_name == "Cafe") {
							return `
                  <span class="badge rounded-pill bg-warning text-uppercase">${restocatg_name}</span>
								`;
						} else if (restocatg_name == "Korean") {
							return `
                  <span class="badge rounded-pill bg-secondary text-uppercase">${restocatg_name}</span>
                `;
						} else if (restocatg_name == "Bakery") {
							return `
                  <span class="badge rounded-pill bg-success text-uppercase">${restocatg_name}</span>
                `;
						} else if (restocatg_name == "Pizzerias") {
							return `
                  <span class="badge rounded-pill bg-info text-uppercase">${restocatg_name}</span>
                `;
						} else if (restocatg_name == "Fine Dining") {
							return `
                  <span class="badge rounded-pill bg-primary text-uppercase">${restocatg_name}</span>
                `;
						} else if (restocatg_name == "Fast Food") {
							return `
                  <span class="badge rounded-pill bg-danger text-uppercase">${restocatg_name}</span>
                `;
						} else {
							return `
                  <span class="badge rounded-pill bg-dark text-uppercase">${restocatg_name}</span>
                `;
						}
					},
				},

				// Restaurant Name
				{
					data: null,
					render: (data) => {
						const resto_name = data.resto_name;
						const resto_img = data.resto_img;

						return `
              <div class="d-flex align-items-center">
                <img src='${resto_img}' alt='' class='avatar-xs rounded-circle me-2'> ${resto_name}
              </div>
            `;
					},
				},

				// Restaurant Email Address
				{
					data: "resto_email",
				},

				// Restaurant Landline Number
				{
					data: "resto_landline",
				},

				// Restaurant Website
				{
					data: null,
					render: (data) => {
						const resto_website = data.resto_website;

						return `
              <a href="https://${resto_website}/" target="_blank" class="link-primary">${resto_website}</a>
            `;
					},
				},

				//Restaurant Admin
				{
					data: null,
					render: (data) => {
						const fullName = `${data.restoadmin.first_name}  ${
							data.restoadmin.middle_name === null
								? ""
								: data.restoadmin.middle_name
						}  ${data.restoadmin.last_name}`;

						return `
							<div class="d-flex">
								<i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
							  <div>
								  <span class="d-block fw-medium">${fullName}</span>
								</div>
							</div>
								`;
					},
				},

				// Date Listed
				{
					data: null,
					render: (data) => {
						const date = moment(data.date_created).format("MMM. D, YYYY");
						const time = moment(data.date_created).format("hh:mm A");

						return `
							${date} <small class="text-muted">${time}</small>
						`;
					},
				},

				//Action
				{
					data: null,
					class: "text-center",
					render: (data) => {
						return `
							<button type="button" class="btn btn-sm btn-primary bg-gradient waves-effect waves-light">View</button>
					`;
					},
				},
			],
			order: [[0, "asc"]],
		});
	}
};

/**
 * ====================================================================
 * * GET ALL RESTAURANT CATEGORIES
 * ====================================================================
 */

// Load Restaurant Categories DataTable
loadRestoCategoriesTable = () => {
	const dt = $("#restocategories-datatables");

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
				url: apiURL + "admin/resto-cat",
				type: "GET",
				ContentType: "application/x-www-form-urlencoded",
			},

			columns: [
				// Restaurant Category
				{
					data: null,
					render: (data) => {
						const restocatg_name = data.restocatg_name;

						return `
              <a href="#!" class="fw-medium link-primary">${restocatg_name}</a>
            `;
					},
				},

				// Restaurants
				{
					data: null,
					render: (data) => {
						const restaurants = data.restaurants;

						let restos = `
              <div id="restos" class="avatar-group">
            `;

						for (const resto of restaurants) {
							restos += `
              <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="${resto.resto_name}">
                <img src="${resto.resto_img}" alt="" class="rounded-circle avatar-xs">
              </a>
            `;
						}

						restos += "</div>";

						return restos;
					},
				},

				// Created By
				{
					data: null,
					render: (data) => {
						const created_by = data.created_by;

						return `
							<div class="d-flex">
								<i class="ri-account-circle-fill text-muted me-3 fs-17"></i>
							  <div>
								  <span class="d-block fw-medium">${created_by}</span>
								</div>
							</div>
								`;
					},
				},

				// Create Date
				{
					data: null,
					render: (data) => {
						const date = moment(data.date_created).format("MMM. D, YYYY");
						const time = moment(data.date_created).format("hh:mm A");

						return `
							${date} <small class="text-muted">${time}</small>
						`;
					},
				},

				// Action
				{
					data: null,
					class: "text-center",
					render: (data) => {
						return `
              <div class="edit">
                <button class="btn btn-sm btn-info edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
              </div>
					`;
					},
				},
			],
			order: [[0, "asc"]],
		});
	}
};
