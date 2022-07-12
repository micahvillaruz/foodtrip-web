var TableProductListAll = document.getElementById("table-product-list-all");
function getChartColorsArray(e) {
	if (null !== document.getElementById(e)) {
		e = document.getElementById(e).getAttribute("data-colors");
		if (e)
			return (e = JSON.parse(e)).map(function (e) {
				var t = e.replace(" ", "");
				if (-1 === t.indexOf(",")) {
					var r = getComputedStyle(document.documentElement).getPropertyValue(
						t
					);
					return r || t;
				}
				e = e.split(",");
				return 2 != e.length
					? t
					: "rgba(" +
							getComputedStyle(document.documentElement).getPropertyValue(
								e[0]
							) +
							"," +
							e[1] +
							")";
			});
	}
}
TableProductListAll &&
	new gridjs.Grid({
		columns: [
			{
				id: "productListAllCheckbox",
				name: "#",
				width: "40px",
				sort: { enabled: !1 },
				plugin: {
					component: gridjs.plugins.selection.RowSelection,
					props: {
						id: function (e) {
							return e.cell(4).data;
						},
					},
				},
			},
			{
				name: "Dish",
				width: "360px",
				formatter: function (e) {
					return gridjs.html(
						`<div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="${baseURL}public/assets/images/food/jollibee/` +
							e[0] +
							'" alt="" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="#" class="text-dark">' +
							e[1] +
							'</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">' +
							e[2] +
							"</span></p></div></div>"
					);
				},
			},
			{ name: "Price", width: "101px" },
<<<<<<< Updated upstream
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
=======
>>>>>>> Stashed changes
			{
				name: "Published",
				width: "220px",
				formatter: function (e) {
					return gridjs.html(
						e[0] + '<small class="text-muted ms-1">' + e[1] + "</small>"
					);
				},
			},
			{
				name: "Action",
				width: "80px",
				sort: { enabled: !1 },
				formatter: function (e) {
					return gridjs.html(
						'<div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="apps-ecommerce-product-details.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li></ul></div>'
					);
				},
			},
		],
		className: { th: "text-muted" },
		pagination: { limit: 10 },
		sort: !0,
		data: [
			[
<<<<<<< Updated upstream
				[
					"img-1.png",
					"1 - pc. Chickenjoy w/ Half Jolly Spaghetti & Shanghai Super Meal",
					"Super Meals",
				],
				"₱ 185.00",
				"Available",
				["12 Oct, 2021", "10:05 AM"],
			],
			[
				["img-2.png", "Jolly Spaghetti Family Pan", "Jolly Spaghetti"],
				"₱ 210.00",
				"Available",
				["06 Jan, 2021", "01:31 PM"],
			],
			[
				["img-3.png", "Chicken Sandwich", "Chicken Sandwich"],
				"₱ 158.00",
				"Unavailable",
				["26 Mar, 2021", "11:40 AM"],
			],
			[
				["img-4.png", "Cheesy Classic Jolly Hotdog", "Jolly Hotdog & Pies"],
				"₱ 64.00",
				"Available",
				["19 Apr, 2021", "02:51 PM"],
			],
			[
				["img-5.png", "6 - pc. Chickenjoy Solo", "Family Meals"],
				"₱ 399.00",
				"Unavailable",
				["30 Mar, 2021", "09:42 AM"],
			],
			[
				["img-6.png", "Palabok", "Palabok"],
				"₱ 117.00",
				"Available",
				["12 Oct, 2021", "04:55 PM"],
			],
			[
				["img-7.png", "Ultimate Burger Steak w/ Egg", "Burger Steak"],
				"₱ 207.00",
				"Available",
				["15 May, 2021", "03:40 PM"],
			],
			[
				["img-8.png", "Double Bacon Champ Jr.", "Burgers"],
				"₱ 181.00",
				"Available",
				["21 Jun, 2021", "12:18 PM"],
			],
			[
				["img-9.png", "3 Pies To-Go", "Desserts"],
				"₱ 106.00",
				"Unavailable",
				["15 Jan, 2021", "10:29 AM"],
			],
			[
				["img-10.png", "1 - pc. Chickenjoy", "Chickenjoy"],
				"₱ 79.00",
				"Available",
				["15 Jun, 2021", "03:51 Pm"],
			],
			[
				["img-11.png", "Jolly Crispy Fries", "Fries & Sides"],
				"₱ 48.00",
				"Available",
				["12 Oct, 2021", "10:05 AM"],
			],
			[
				["img-12.png", "Chocolate Sundae Twirl", "Desserts"],
				"₱ 48.00",
				"Available",
=======
				["img-1.png", "Half Sleeve Round Neck T-Shirts", "Clothes"],
				"$ 115.00",
				["12 Oct, 2021", "10:05 AM"],
			],
			[
				["img-2.png", "Urban Ladder Pashe Chair", "Furniture"],
				"$ 160.00",
				["06 Jan, 2021", "01:31 PM"],
			],
			[
				[
					"img-3.png",
					"350 ml Glass Grocery Container",
					"Kitchen Storage & Containers",
				],
				"$ 25.00",
				["26 Mar, 2021", "11:40 AM"],
			],
			[
				["img-4.png", "Fabric Dual Tone Living Room Chair", "Furniture"],
				"$ 140.00",
				["19 Apr, 2021", "02:51 PM"],
			],
			[
				["img-5.png", "Crux Motorsports Helmet", "Bike Accessories"],
				"$ 135.00",
				["30 Mar, 2021", "09:42 AM"],
			],
			[
				["img-6.png", "Half Sleeve T-Shirts (Blue)", "Clothes"],
				"$ 125.00",
				["12 Oct, 2021", "04:55 PM"],
			],
			[
				["img-7.png", "Noise Evolve Smartwatch", "Watches"],
				"$ 95.00",
				["15 May, 2021", "03:40 PM"],
			],
			[
				["img-8.png", "Sweatshirt for Men (Pink)", "Clothes"],
				"$ 120.00",
				["21 Jun, 2021", "12:18 PM"],
			],
			[
				[
					"img-9.png",
					"Reusable Ecological Coffee Cup",
					"Tableware & Dinnerware",
				],
				"$ 125.00",
				["15 Jan, 2021", "10:29 AM"],
			],
			[
				[
					"img-10.png",
					"Travel Carrying Pouch Bag",
					"Bags, Wallets and Luggage",
				],
				"$ 115.00",
				["15 Jun, 2021", "03:51 Pm"],
			],
			[
				["img-1.png", "Half Sleeve Round Neck T-Shirts", "Clothes"],
				"$ 115.00",
				["12 Oct, 2021", "10:05 AM"],
			],
			[
				["img-2.png", "Urban Ladder Pashe Chair", "Furniture"],
				"$ 160.00",
>>>>>>> Stashed changes
				["06 Jan, 2021", "01:31 PM"],
			],
		],
	}).render(document.getElementById("table-product-list-all"));
var options,
	chart,
	linechartcustomerColors = getChartColorsArray("customer_impression_charts");
linechartcustomerColors &&
	((options = {
		series: [
			{
				name: "Orders",
				type: "area",
				data: [34, 65, 46, 68, 49, 61, 42, 44, 78, 52, 63, 67],
			},
			{
				name: "Earnings",
				type: "bar",
				data: [
					89.25, 98.58, 68.74, 108.87, 77.54, 84.03, 51.24, 28.57, 92.57, 42.36,
					88.51, 36.57,
				],
			},
			{
				name: "Refunds",
				type: "line",
				data: [8, 12, 7, 17, 21, 11, 5, 9, 7, 29, 12, 35],
			},
		],
		chart: { height: 370, type: "line", toolbar: { show: !1 } },
		stroke: { curve: "straight", dashArray: [0, 0, 8], width: [2, 0, 2.2] },
		fill: { opacity: [0.1, 0.9, 1] },
		markers: { size: [0, 0, 0], strokeWidth: 2, hover: { size: 4 } },
		xaxis: {
			categories: [
				"Jan",
				"Feb",
				"Mar",
				"Apr",
				"May",
				"Jun",
				"Jul",
				"Aug",
				"Sep",
				"Oct",
				"Nov",
				"Dec",
			],
			axisTicks: { show: !1 },
			axisBorder: { show: !1 },
		},
		grid: {
			show: !0,
			xaxis: { lines: { show: !0 } },
			yaxis: { lines: { show: !1 } },
			padding: { top: 0, right: -2, bottom: 15, left: 10 },
		},
		legend: {
			show: !0,
			horizontalAlign: "center",
			offsetX: 0,
			offsetY: -5,
			markers: { width: 9, height: 9, radius: 6 },
			itemMargin: { horizontal: 10, vertical: 0 },
		},
		plotOptions: { bar: { columnWidth: "30%", barHeight: "70%" } },
		colors: linechartcustomerColors,
		tooltip: {
			shared: !0,
			y: [
				{
					formatter: function (e) {
						return void 0 !== e ? e.toFixed(0) : e;
					},
				},
				{
					formatter: function (e) {
						return void 0 !== e ? "₱" + e.toFixed(2) + "k" : e;
					},
				},
				{
					formatter: function (e) {
						return void 0 !== e ? e.toFixed(0) : e;
					},
				},
			],
		},
	}),
	(chart = new ApexCharts(
		document.querySelector("#customer_impression_charts"),
		options
	)).render());
var counterValue = document.querySelector(".counter-value");
counterValue &&
	((counter = document.querySelectorAll(".counter-value")),
	(speed = 250),
	counter &&
		counter.forEach(function (i) {
			!(function e() {
				var t = +i.getAttribute("data-target"),
					r = +i.innerText,
					a = t / speed;
				a < 1 && (a = 1),
					r < t
						? ((i.innerText = (r + a).toFixed(0)), setTimeout(e, 1))
						: (i.innerText = t);
			})();
		}));
var swiper,
	VerticalSwiper = document.querySelector(".vertical-swiper");
VerticalSwiper &&
	(swiper = new Swiper(".vertical-swiper", {
		slidesPerView: 2,
		spaceBetween: 10,
		mousewheel: !0,
		loop: !0,
		direction: "vertical",
		autoplay: { delay: 2500, disableOnInteraction: !1 },
	}));
