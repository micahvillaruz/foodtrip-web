var productListAllData = [
		{
			id: 1,
			product: {
				img: `${baseURL}public/assets/images/food/jollibee/img-1.png`,
				title:
					"1 - pc. Chickenjoy w/ Half Jolly Spaghetti & Shanghai Super Meal",
				category: "Super Meals",
			},
			price: "185.00",
			status: "Available",
			published: { publishDate: "12 Oct, 2021", publishTime: "10:05 AM" },
		},
		{
			id: 2,
			product: {
				img: `${baseURL}public/assets/images/food/jollibee/img-2.png`,
				title: "Jolly Spaghetti Family Pan",
				category: "Jolly Spaghetti",
			},
			price: "210.00",
			status: "Available",
			published: { publishDate: "06 Jan, 2021", publishTime: "01:31 PM" },
		},
		{
			id: 3,
			product: {
				img: `${baseURL}public/assets/images/food/jollibee/img-3.png`,
				title: "Chicken Sandwich",
				category: "Chicken Sandwich",
			},
			price: "158.00",
			status: "Unavailable",
			published: { publishDate: "26 Mar, 2021", publishTime: "11:40 AM" },
		},
		{
			id: 4,
			product: {
				img: `${baseURL}public/assets/images/food/jollibee/img-4.png`,
				title: "Cheesy Classic Jolly Hotdog",
				category: "Jolly Hotdog and Pies",
			},
			price: "64.00",
			status: "Unavailable",
			published: { publishDate: "19 Apr, 2021", publishTime: "02:51 PM" },
		},
		{
			id: 5,
			product: {
				img: `${baseURL}public/assets/images/food/jollibee/img-5.png`,
				title: "6 - pc. Chickenjoy Solo",
				category: "Family Meals",
			},
			price: "399.00",
			status: "Unavailable",
			published: { publishDate: "30 Mar, 2021", publishTime: "09:42 AM" },
		},
		{
			id: 6,
			product: {
				img: `${baseURL}public/assets/images/food/jollibee/img-6.png`,
				title: "Palabok",
				category: "Palabok",
			},
			price: "117.00",
			status: "Available",
			published: { publishDate: "12 Oct, 2021", publishTime: "04:55 PM" },
		},
		{
			id: 7,
			product: {
				img: `${baseURL}public/assets/images/food/jollibee/img-7.png`,
				title: "Ultimate Burger Steak w/ Egg",
				category: "Burger Steak",
			},
			price: "207.00",
			status: "Available",
			published: { publishDate: "15 May, 2021", publishTime: "03:40 PM" },
		},
		{
			id: 8,
			product: {
				img: `${baseURL}public/assets/images/food/jollibee/img-8.png`,
				title: "Double Bacon Champ Jr.",
				category: "Burgers",
			},
			price: "181.00",
			status: "Available",
			published: { publishDate: "21 Jun, 2021", publishTime: "12:18 PM" },
		},
		{
			id: 9,
			product: {
				img: `${baseURL}public/assets/images/food/jollibee/img-9.png`,
				title: "3 Pies To-Go",
				category: "Desserts",
			},
			price: "106.00",
			status: "Unavailable",
			published: { publishDate: "15 Jan, 2021", publishTime: "10:29 AM" },
		},
		{
			id: 10,
			product: {
				img: `${baseURL}public/assets/images/food/jollibee/img-10.png`,
				title: "1 - pc. Chickenjoy",
				category: "Chickenjoy",
			},
			price: "79.00",
			status: "Available",
			published: { publishDate: "15 Jun, 2021", publishTime: "03:51 PM" },
		},
		{
			id: 11,
			product: {
				img: `${baseURL}public/assets/images/food/jollibee/img-11.png`,
				title: "Jolly Crispy Fries",
				category: "Fries and Sides",
			},
			price: "48.00",
			status: "Available",
			published: { publishDate: "12 Oct, 2021", publishTime: "10:05 AM" },
		},
		{
			id: 12,
			product: {
				img: `${baseURL}public/assets/images/food/jollibee/img-12.png`,
				title: "Chocolate Sundae Twirl",
				category: "Desserts",
			},
			price: "48.00",
			status: "Available",
			published: { publishDate: "06 Jan, 2021", publishTime: "01:31 PM" },
		},
	],
	inputValueJson = sessionStorage.getItem("inputValue");
inputValueJson &&
	(inputValueJson = JSON.parse(inputValueJson)).forEach((e) => {
		productListAllData.unshift(e);
	});
var productListAll = new gridjs.Grid({
		columns: [
			{
				name: "#",
				width: "40px",
				sort: { enabled: !1 },
				data: function (e) {
					return gridjs.html(
						'<div class="form-check checkbox-product-list">\t\t\t\t\t<input class="form-check-input" type="checkbox" value="' +
							e.id +
							'" id="checkbox-' +
							e.id +
							'">\t\t\t\t\t<label class="form-check-label" for="checkbox-' +
							e.id +
							'"></label>\t\t\t\t  </div>'
					);
				},
			},
			{
				name: "Dish",
				width: "360px",
				data: function (e) {
					return gridjs.html(
						'<div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="' +
							e.product.img +
							'" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="apps-ecommerce-product-details.html" class="text-dark">' +
							e.product.title +
							'</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">' +
							e.product.category +
							"</span></p></div></div>"
					);
				},
			},
			{
				name: "Price",
				width: "101px",
				formatter: function (e) {
					return gridjs.html("₱" + e);
				},
			},
			{
				name: "Status",
				width: "105px",
				formatter: function (e) {
					switch (e) {
						case "Available":
							return gridjs.html(
								'<span class="badge badge-soft-success text-uppercase">' +
									e +
									"</span></td>"
							);
						case "Unavailable":
							return gridjs.html(
								'<span class="badge badge-soft-danger text-uppercase">' +
									e +
									"</span></td>"
							);
					}
				},
			},
			{
				name: "Published",
				width: "220px",
				data: function (e) {
					return gridjs.html(
						e.published.publishDate +
							'<small class="text-muted ms-1">' +
							e.published.publishTime +
							"</small>"
					);
				},
			},
			{
				name: "Action",
				width: "80px",
				sort: { enabled: !1 },
				formatter: function (e, t) {
					t = new DOMParser()
						.parseFromString(t._cells[0].data.props.content, "text/html")
						.body.querySelector(
							".checkbox-product-list .form-check-input"
						).value;
					return gridjs.html(
						'<div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li></ul></div>'
					);
				},
			},
		],
		className: { th: "text-muted" },
		pagination: { limit: 10 },
		sort: !0,
		data: productListAllData,
	}).render(document.getElementById("table-product-list-all")),
	searchProductList = document.getElementById("searchProductList");
searchProductList.addEventListener("keyup", function () {
	var e = searchProductList.value.toLowerCase();
	function t(e, t) {
		return e.filter(function (e) {
			return -1 !== e.product.title.toLowerCase().indexOf(t.toLowerCase());
		});
	}
	var i = t(productListAllData, e);
	productListAll.updateConfig({ data: i }).forceRender(), checkRemoveItem();
}),
	document.querySelectorAll(".filter-list a").forEach(function (r) {
		r.addEventListener("click", function () {
			var e = document.querySelector(".filter-list a.active");
			e && e.classList.remove("active"), r.classList.add("active");
			var t = r.querySelector(".listname").innerHTML,
				i = productListAllData.filter((e) => e.product.category === t);
			if (t === "All") {
				i = productListAllData;
			}
			productListAll.updateConfig({ data: i }).forceRender(), checkRemoveItem();
		});
	});
var slider = document.getElementById("product-price-range");
noUiSlider.create(slider, {
	start: [0, 2e3],
	step: 10,
	margin: 20,
	connect: !0,
	behaviour: "tap-drag",
	range: { min: 0, max: 2e3 },
	format: wNumb({ decimals: 0, prefix: "₱ " }),
});
var minCostInput = document.getElementById("minCost"),
	maxCostInput = document.getElementById("maxCost"),
	filterDataAll = "";
slider.noUiSlider.on("update", function (e, t) {
	var i = productListAllData;
	t ? (maxCostInput.value = e[t]) : (minCostInput.value = e[t]);
	var s = maxCostInput.value.substr(2),
		a = minCostInput.value.substr(2);
	(filterDataAll = i.filter(
		(e) => parseFloat(e.price) >= a && parseFloat(e.price) <= s
	)),
		productListAll.updateConfig({ data: filterDataAll }).forceRender(),
		checkRemoveItem();
}),
	minCostInput.addEventListener("change", function () {
		slider.noUiSlider.set([null, this.value]);
	}),
	maxCostInput.addEventListener("change", function () {
		slider.noUiSlider.set([null, this.value]);
	});
var filterChoicesInput = new Choices(
	document.getElementById("filter-choices-input"),
	{
		addItems: !0,
		delimiter: ",",
		editItems: !0,
		maxItemCount: 10,
		removeItems: !0,
		removeItemButton: !0,
	}
);
document
	.querySelectorAll(".filter-accordion .accordion-item")
	.forEach(function (r) {
		var s = r.querySelectorAll(
			".filter-check .form-check .form-check-input:checked"
		).length;
		(r.querySelector(".filter-badge").innerHTML = s),
			r.querySelectorAll(".form-check .form-check-input").forEach(function (t) {
				var i = t.value;
				t.checked && filterChoicesInput.setValue([i]),
					t.addEventListener("click", function (e) {
						t.checked
							? (s++,
							  (r.querySelector(".filter-badge").innerHTML = s),
							  (r.querySelector(".filter-badge").style.display =
									0 < s ? "block" : "none"),
							  filterChoicesInput.setValue([i]))
							: filterChoicesInput.removeActiveItemsByValue(i);
					}),
					filterChoicesInput.passedElement.element.addEventListener(
						"removeItem",
						function (e) {
							e.detail.value == i &&
								((t.checked = !1),
								s--,
								(r.querySelector(".filter-badge").innerHTML = s),
								(r.querySelector(".filter-badge").style.display =
									0 < s ? "block" : "none"));
						},
						!1
					),
					document
						.getElementById("clearall")
						.addEventListener("click", function () {
							(t.checked = !1),
								filterChoicesInput.removeActiveItemsByValue(i),
								(s = 0),
								(r.querySelector(".filter-badge").innerHTML = s),
								(r.querySelector(".filter-badge").style.display =
									0 < s ? "block" : "none"),
								productListAll
									.updateConfig({ data: productListAllData })
									.forceRender();
						});
			});
	});
var searchBrandsOptions = document.getElementById("searchBrandsList");
searchBrandsOptions.addEventListener("keyup", function () {
	var i = searchBrandsOptions.value.toLowerCase();
	document
		.querySelectorAll("#flush-collapseBrands .form-check")
		.forEach(function (e) {
			var t = e
				.getElementsByClassName("form-check-label")[0]
				.innerText.toLowerCase();
			e.style.display = t.includes(i) ? "block" : "none";
		});
});
var isSelected = 0;
function checkRemoveItem() {
	document.querySelectorAll('a[data-bs-toggle="tab"]').forEach(function (e) {
		e.addEventListener("show.bs.tab", function (e) {
			(isSelected = 0),
				(document.getElementById("selection-element").style.display = "none");
		});
	}),
		setTimeout(function () {
			document
				.querySelectorAll(".checkbox-product-list input")
				.forEach(function (e) {
					e.addEventListener("click", function (e) {
						1 == e.target.checked
							? e.target.closest("tr").classList.add("gridjs-tr-selected")
							: e.target.closest("tr").classList.remove("gridjs-tr-selected");
						var t = document.querySelectorAll(
							".checkbox-product-list input:checked"
						);
						(isSelected = t.length),
							e.target.closest("tr").classList.contains("gridjs-tr-selected"),
							(document.getElementById("select-content").innerHTML =
								isSelected),
							(document.getElementById("selection-element").style.display =
								0 < isSelected ? "block" : "none");
					});
				}),
				removeItems(),
				removeSingleItem();
		}, 100);
}
var checkboxes = document.querySelectorAll(".checkbox-wrapper-mail input");
function removeItems() {
	document
		.getElementById("removeItemModal")
		.addEventListener("show.bs.modal", function (e) {
			(isSelected = 0),
				document
					.getElementById("delete-product")
					.addEventListener("click", function () {
						document.querySelectorAll(".gridjs-table tr").forEach(function (e) {
							var t,
								i = "";
							function r(e, t) {
								return e.filter(function (e) {
									return e.id != t;
								});
							}
							e.classList.contains("gridjs-tr-selected") &&
								((t = e.querySelector(".form-check-input").value),
								(i = r(productListAllData, t)),
								(productListAllData = i),
								e.remove());
						}),
							document.getElementById("btn-close").click(),
							document.getElementById("selection-element") &&
								(document.getElementById("selection-element").style.display =
									"none"),
							(checkboxes.checked = !1);
					});
		});
}
function removeSingleItem() {
	var s;
	document.querySelectorAll(".remove-list").forEach(function (r) {
		r.addEventListener("click", function (e) {
			(s = r.getAttribute("data-id")),
				document
					.getElementById("delete-product")
					.addEventListener("click", function () {
						function e(e, t) {
							return e.filter(function (e) {
								return e.id != t;
							});
						}
						var t = e(productListAllData, s);
						(productListAllData = t), r.closest(".gridjs-tr").remove();
					});
		});
	});
	var i;
	document.querySelectorAll(".edit-list").forEach(function (t) {
		t.addEventListener("click", function (e) {
			(i = t.getAttribute("data-edit-id")),
				(productListAllData = productListAllData.map(function (e) {
					return (
						e.id == i &&
							sessionStorage.setItem("editInputValue", JSON.stringify(e)),
						e
					);
				}));
		});
	});
}
