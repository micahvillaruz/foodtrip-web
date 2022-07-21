document.querySelector("#profile-foreground-img-file-input") &&
	document
		.querySelector("#profile-foreground-img-file-input")
		.addEventListener("change", function () {
			var o = document.querySelector(".profile-wid-img"),
				e = document.querySelector(".profile-foreground-img-file-input")
					.files[0],
				i = new FileReader();
			i.addEventListener(
				"load",
				function () {
					o.src = i.result;
				},
				!1
			),
				e && i.readAsDataURL(e);
		}),
	document.querySelector("#profile-img-file-input") &&
		document
			.querySelector("#profile-img-file-input")
			.addEventListener("change", function () {
				var o = document.querySelector(".user-profile-image"),
					e = document.querySelector(".profile-img-file-input").files[0],
					i = new FileReader();
				i.addEventListener(
					"load",
					function () {
						o.src = i.result;
					},
					!1
				),
					e && i.readAsDataURL(e);
			});
var count = 2;
function new_link() {
	count++;
	var o = document.createElement("div"),
		e =
			'<div class="row"><div class="col-lg-6"><div class="mb-3"><label for="day" class="form-label">Day of the Week</label><select class="form-control" data-choices data-choices-sorting-false data-choices-search-false name="day" id="day"> <option value="">Select Day</option><option value="1">Monday</option><option value="2">Tuesday</option><option value="3">Wednesday</option><option value="4">Thursday</option><option value="5">Friday</option><option value="6">Saturday</option><option value="7">Sunday</option></select></div></div><div class="col-lg-6"><div class="mb-3"><div class="hstack opentime-gap"><label for="open_time" class="form-label">Open Time</label><label for="close_time" class="form-label">Close Time</label></div><div class="row"><div class="col-lg-5"><input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="open_time"></div><div class="col-auto align-self-center">  to</div><div class="col-lg-5"><input type="text" class="form-control" data-provider="timepickr" data-time-basic="true" id="close_time"></div></div></div></div><div class="hstack gap-2 justify-content-end"><a class="deletebtn-gap btn btn-success" href="javascript:deleteEl(' +
			(o.id = count) +
			')">Delete</a></div></div>';
	(o.innerHTML = document.getElementById("newForm").innerHTML + e),
		document.getElementById("newlink").appendChild(o),
		document.querySelectorAll("[data-trigger]").forEach(function (o) {
			new Choices(o, {
				placeholderValue: "This is a placeholder set in the config",
				searchPlaceholderValue: "This is a search placeholder",
				searchEnabled: !1,
			});
		}),
		document.querySelectorAll("[data-choices]").forEach(function (e) {
			var t = {},
				a = e.attributes;
			a["data-choices-groups"] &&
				(t.placeholderValue = "This is a placeholder set in the config"),
				a["data-choices-search-false"] && (t.searchEnabled = !1),
				a["data-choices-search-true"] && (t.searchEnabled = !0),
				a["data-choices-removeItem"] && (t.removeItemButton = !0),
				a["data-choices-sorting-false"] && (t.shouldSort = !1),
				a["data-choices-sorting-true"] && (t.shouldSort = !0),
				a["data-choices-multiple-remove"] && (t.removeItemButton = !0),
				a["data-choices-limit"] &&
					(t.maxItemCount = a["data-choices-limit"].value.toString()),
				a["data-choices-limit"] &&
					(t.maxItemCount = a["data-choices-limit"].value.toString()),
				a["data-choices-editItem-true"] && (t.maxItemCount = !0),
				a["data-choices-editItem-false"] && (t.maxItemCount = !1),
				a["data-choices-text-unique-true"] && (t.duplicateItemsAllowed = !1),
				a["data-choices-text-disabled-true"] && (t.addItems = !1),
				a["data-choices-text-disabled-true"]
					? new Choices(e, t).disable()
					: new Choices(e, t);
		}),
		document.querySelectorAll("[data-provider]").forEach(function (e) {
			var t, a, n;
			"flatpickr" == e.getAttribute("data-provider")
				? ((n = {}),
				  (t = e.attributes)["data-date-format"] &&
						(n.dateFormat = t["data-date-format"].value.toString()),
				  t["data-enable-time"] &&
						((n.enableTime = !0),
						(n.dateFormat = t["data-date-format"].value.toString() + " H:i")),
				  t["data-altFormat"] &&
						((n.altInput = !0),
						(n.altFormat = t["data-altFormat"].value.toString())),
				  t["data-minDate"] &&
						((n.minDate = t["data-minDate"].value.toString()),
						(n.dateFormat = t["data-date-format"].value.toString())),
				  t["data-maxDate"] &&
						((n.maxDate = t["data-maxDate"].value.toString()),
						(n.dateFormat = t["data-date-format"].value.toString())),
				  t["data-deafult-date"] &&
						((n.defaultDate = t["data-deafult-date"].value.toString()),
						(n.dateFormat = t["data-date-format"].value.toString())),
				  t["data-multiple-date"] &&
						((n.mode = "multiple"),
						(n.dateFormat = t["data-date-format"].value.toString())),
				  t["data-range-date"] &&
						((n.mode = "range"),
						(n.dateFormat = t["data-date-format"].value.toString())),
				  t["data-inline-date"] &&
						((n.inline = !0),
						(n.defaultDate = t["data-deafult-date"].value.toString()),
						(n.dateFormat = t["data-date-format"].value.toString())),
				  t["data-disable-date"] &&
						((a = []).push(t["data-disable-date"].value),
						(n.disable = a.toString().split(","))),
				  flatpickr(e, n))
				: "timepickr" == e.getAttribute("data-provider") &&
				  ((a = {}),
				  (n = e.attributes)["data-time-basic"] &&
						((a.enableTime = !0),
						(a.noCalendar = !0),
						(a.dateFormat = "h:i K")),
				  n["data-time-hrs"] &&
						((a.enableTime = !0),
						(a.noCalendar = !0),
						(a.dateFormat = "H:i"),
						(a.time_24hr = !0)),
				  n["data-min-time"] &&
						((a.enableTime = !0),
						(a.noCalendar = !0),
						(a.dateFormat = "H:i"),
						(a.minTime = n["data-min-time"].value.toString())),
				  n["data-max-time"] &&
						((a.enableTime = !0),
						(a.noCalendar = !0),
						(a.dateFormat = "H:i"),
						(a.minTime = n["data-max-time"].value.toString())),
				  n["data-default-time"] &&
						((a.enableTime = !0),
						(a.noCalendar = !0),
						(a.dateFormat = "H:i"),
						(a.defaultDate = n["data-default-time"].value.toString())),
				  n["data-time-inline"] &&
						((a.enableTime = !0),
						(a.noCalendar = !0),
						(a.defaultDate = n["data-time-inline"].value.toString()),
						(a.inline = !0)),
				  flatpickr(e, a));
		});
}
function deleteEl(o) {
	d = document;
	o = d.getElementById(o);
	d.getElementById("newlink").removeChild(o);
}
